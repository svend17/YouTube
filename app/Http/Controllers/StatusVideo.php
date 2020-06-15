<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class StatusVideo extends Controller
{
    public function updStatus(Request $request){
        //dd($request);
        if($request->video){
            foreach ($request->video as $item)
                Video::where('videoID', $item)->update(['status' => 1]);
        }
        $like = Video::where('status',1)->select('videoID')->get();
        return view('/liked',['like'=>$like]);
    }
}
