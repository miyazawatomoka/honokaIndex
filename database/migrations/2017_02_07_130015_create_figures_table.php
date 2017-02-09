<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiguresTable extends Migration
{

    public function up() {
      Schema::create('figures', function (Blueprint $table) {
          $table->increments('id');
          $table->string('chinese_name');
          $table->string('english_name')->unique();
          $table->string('japanese_name');
          $table->string('avatar');
          $table->integer('status');
          $table->timestamps();
      });
    }


    public function down() {
      Schema::dropIfExists('figures');
    }
}
