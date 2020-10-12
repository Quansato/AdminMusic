<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'time', 'id_genres','img_path','song_path','number_listen','number_download','cost'
    ];

    public function artists(){
        return $this->hasMany(SongArtist::class,'id_song');
    }

    public function genres(){
        return $this->belongsTo(Genres::class,'id_genres');
    }
}
