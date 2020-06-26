<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Alaouy\Youtube\Facades\Youtube;
use Illuminate\Http\Request;
use App\history;
use App\Video;

class SearchController extends Controller{
    public function search(Request $request){
        $request->validate([
            'videoName'=>'required',
        ]);
        $hist = history::where('query','=',$request->videoName)->first();
        if(!$hist){
            $results = Youtube::searchVideos($request->videoName);
            $hist = new history;
            $hist->query = $request->videoName;
            $hist->save();
            $queryId = $hist->id;
            foreach ($results as $res) {
                $arr[] = $res->id->videoId;
                $video = new Video;
                $video->videoID = $res->id->videoId;
                $video->query_id = $queryId;
                $video->save();
            }
        }
        else{
            $hist = history::find($hist->id);
            $videos=$hist->videos;
            //dd($video);
            foreach ($videos as $video)
                $arr[]=$video->videoID;
        }
        return view('searchList', ['arr' => $arr]);
    }
}
