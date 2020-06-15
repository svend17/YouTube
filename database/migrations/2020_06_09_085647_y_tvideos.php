<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class YTvideos extends Migration
{
    public function up()
    {
        Schema::create('videos', function (Blueprint $table){
            $table->id();
            $table->string('videoID')->unique();
            $table->boolean('status')->default(0)->nullable();
            $table->integer('query_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
