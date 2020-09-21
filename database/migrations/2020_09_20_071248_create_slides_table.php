<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_song')->unsigned()->nullable();
            $table->integer('id_album')->unsigned()->nullable();
            $table->integer('id_artist')->unsigned()->nullable();
            $table->string('kind');
            $table->string('img_path',250);
            $table->string('link',250);
            $table->timestamps();
            $table->foreign('id_song')->references('id')->on('songs');
            $table->foreign('id_album')->references('id')->on('albums');
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
        Schema::dropIfExists('slides');
    }
}
