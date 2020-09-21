<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('time',100);
            $table->integer('id_artist')->unsigned();
            $table->integer('id_album')->unsigned();
            $table->integer('id_genres')->unsigned();
            $table->string('img_path',250);
            $table->string('song_path',250);
            $table->integer('user_upload')->unsigned();
            $table->integer('number_listen');
            $table->integer('number_download');
            $table->string('status',250);
            $table->integer('cost')->nullable();
            $table->timestamps();
            $table->foreign('id_artist')->references('id')->on('artists');
            $table->foreign('id_album')->references('id')->on('albums');
            $table->foreign('id_genres')->references('id')->on('genres');
            $table->foreign('user_upload')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
