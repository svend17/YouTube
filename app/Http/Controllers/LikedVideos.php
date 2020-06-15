<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class LikedVideos extends Controller
{
    public function likedList(Request $request){
        if($request->videoD) {
            foreach ($request->videoD as $item)
                Video::where('videoID', $item)->update(['status' => 0]);
        }
        $upd = Video::where('status',1)->select('videoID')->get();
        return view('/liked',['like'=>$upd]);
    }
}
