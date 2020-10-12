<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_album', function (Blueprint $table) {
            $table->integer('id_album')->unsigned();
            $table->foreign('id_album')->references('id')->on('albums');
            $table->integer('id_song')->unsigned();
            $table->foreign('id_song')->references('id')->on('songs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song_album');
    }
}
