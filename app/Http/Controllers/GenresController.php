<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genres;
use Illuminate\Support\Facades\Storage;

class GenresController extends Controller
{

    private $song;
    public function __construct(Genres $genres){
        $this->genres=$genres;
    }

    public function create(){
        return view('admin.Genres.add');
    }

    public function index(){
        $genres=$this->genres->latest()->paginate(5);
        return view('admin.Genres.index',compact('genres'));
    }

    ////THEM MOI BAI HAT
    public function store(Request $request){
        $fileName=$request->imgpath->getClientOriginalName();
        $this->genres->create([
            'name' =>$request->name,
            'img_path'=>Storage::url($request->file('imgpath')->storeAs('public/genres',$fileName)),
        ]);
        return redirect()->action('App\Http\Controllers\GenresController@index');

    }

    public function edit($id){
        $gr=$this->genres->find($id);
        return view('admin.Genres.edit',compact('gr'));
    }

    public function update($id,Request $request){
        $fileName=$request->imgpath->getClientOriginalName();
        $this->genres->find($id)->update([
            'name' =>$request->name,
            'img_path'=>Storage::url($request->file('imgpath')->storeAs('public/genres',$fileName)),
        ]);
        return redirect()->action('App\Http\Controllers\GenresController@index');
    }

    public function delete($id){
        $this->genres->find($id)->delete();
        return redirect()->action('App\Http\Controllers\GenresController@index');
    }


}
