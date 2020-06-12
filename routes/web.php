<?php

use App\Video;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('INPUT');
});
Route::post('/list','SearchController@search')->name('sList');
Route::post('/list1', 'StatusVideo@updStatus')->name('upd');
