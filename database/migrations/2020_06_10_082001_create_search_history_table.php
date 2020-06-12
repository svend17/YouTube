<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('search_history', function (Blueprint $table) {
            $table->id();
            $table->string('query')->unique();
        });
    }

    public function down()
    {
        Schema::dropIfExists('search_history');
    }
}
