<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Tag;

class VideoController extends Controller
{
    public function create(Request $request) {
        $newVideo = Video::create(['name' => $request->name]);
        $newVideo->save();
        return redirect('/videos/read/' . $newVideo->id);
    }

    public function readById(Request $request) {
        $videoToRead = Video::findOrFail($request->id);
        dd($videoToRead->id, $videoToRead->name, $videoToRead->tags);
    }

    public function readAll() {
        $videosArray = [];
        foreach (Video::all() as $video) {
            $videosArray[$video->id] = $video->name;
        }
        dd($videosArray);
    }

    public function update(Request $request) {
        $videoToUpdate = Video::findOrFail($request->id);
        $videoToUpdate->update(['name' => $request->name]);
        return redirect('/videos/read/' . $videoToUpdate->id);
    }

    public function delete(Request $request) {
        $videoToDelete = Video::findOrFail($request->id);
        $videoToDelete->tags()->detach();
        $videoToDelete->delete();
        return redirect('/videos');
    }

    public function linkTag(Request $request) {
        $videoToLink = Video::findOrFail($request->videoId);
        $videoToLink->tags()->save(Tag::findOrFail($request->tagId));
        return redirect('/videos/read/' . $videoToLink->id);
    }
}
