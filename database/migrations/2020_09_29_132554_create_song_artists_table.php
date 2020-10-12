<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_artists', function (Blueprint $table) {
            $table->integer('id_song')->unsigned();
            $table->foreign('id_song')->references('id')->on('songs');
            $table->integer('id_artist')->unsigned();
            $table->foreign('id_artist')->references('id')->on('artists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song_artists');
    }
}
