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
            $table->integer('id_genres')->unsigned();
            $table->string('img_path',250);
            $table->string('song_path',250);
            $table->integer('number_listen');
            $table->integer('number_download');
            $table->string('status',250);
            $table->integer('cost')->nullable();
            $table->timestamps();
            $table->foreign('id_genres')->references('id')->on('genres');
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