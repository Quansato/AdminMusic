<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genres;
use App\Models\Song;
use App\Models\Artist;
use App\Models\SongArtist;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{

    private $htmlSelect,$song,$genres,$htmlSelect2, $artist,$songArtist;
    public function __construct(Song $song ,Genres $genres,Artist $artist,SongArtist $songArtist){
        $this->htmlSelect='';
        $this->htmlSelect2='';
        $this->song=$song;
        $this->genres=$genres;
        $this->artist=$artist;
        $this->songArtist=$songArtist;

    }

    public function create(){
        $htmlOption=$this->loadGenres();
        $htmlOption2=$this->loadArtist();
        return view('admin.Song.add',compact('htmlOption','htmlOption2'));
    }

    //LOAD DATA TO COMBOBOX
    function loadGenres(){
        $data= $this->genres->all();
        foreach($data as $value){
            $this->htmlSelect.= "<option value='".$value['id']."'>" . $value['name'] . "</option>";
        }
        return $this->htmlSelect;
    }

    function loadArtist(){
        $data2= $this->artist->all();
        foreach($data2 as $value2){
            $this->htmlSelect2.= "<option value='".$value2['id']."'>" . $value2['name'] . "</option>";
        }
        return $this->htmlSelect2;
    }

    public function index(){
        $songs=$this->song->latest()->paginate(5);
        return view('admin.Song.index',compact('songs'));
    }

    ////THEM MOI BAI HAT
    public function store(Request $request){
        $fileName=$request->imgpath->getClientOriginalName();
        $fileNameS=$request->songpath->getClientOriginalName();
        $dataSongCreate=[
            'name' =>$request->name,
            'time'=>$request->time,
            'img_path'=>Storage::url($request->file('imgpath')->storeAs('public/songImg',$fileName)),
            'song_path'=>Storage::url($request->file('songpath')->storeAs('public/song',$fileNameS)),
            'id_genres'=>$request->id_genres,
            'cost' =>$request->cost,
        ];
        $song=$this->song->create($dataSongCreate);
        foreach($request->id_artist as $name){
            $song->artists()->create([
                'id_artist'=>$name
            ]);
        }
        return redirect()->action('App\Http\Controllers\SongController@create');

    }

    public function edit($id){
        $song=$this->song->find($id);
        $htmlOption=$this->loadGenres($song->id_genres);
        $htmlOption2=$this->loadArtist($song->id_artist);
        return view('admin.Song.edit',compact('song','htmlOption','htmlOption2'));
    }

    public function delete($id){
        $this->song->find($id)->delete();
        return redirect()->action('App\Http\Controllers\GenresController@index');
    }


}
