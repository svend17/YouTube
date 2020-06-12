<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class StatusVideo extends Controller
{
    public function likedList(){
        $like = Video::where('status',1)->select('videoID')->get();
        return view('/liked',['like'=>$like]);
    }
    public function updStatus(Request $request){
        foreach ($request->video as $item) {
            Video::where('videoID', $item)->update(['status' => 1]);
        }
    }
}
