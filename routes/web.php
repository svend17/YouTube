<?php

use App\Video;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('INPUT');
});
Route::get('/liked', function (){
    $like = Video::where('status',1)->select('videoID')->get();
    return view('/liked',['like'=>$like]);
});
Route::post('/list','SearchController@search')->name('sList');
Route::post('/liked', 'StatusVideo@updStatus')->name('upd');
Route::post('/liked1', 'LikedVideos@likedList')->name('del');
