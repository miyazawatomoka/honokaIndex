<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFigureImagesTable extends Migration {

    public function up() {
      Schema::create('figure_images', function (Blueprint $table) {
          $table->increments('id'); 
          $table->string('file_name');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          $table->index('user_id');
          $table->integer('figure_id')->unsigned();
          $table->foreign('figure_id')->references('id')->on('figures');
          $table->index('figure_id');
          $table->timestamps();
      });
    }

    public function down() {
      Schema::dropIfExists('figure_images');
    }
}
