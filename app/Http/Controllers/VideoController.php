<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function create(Request $request) {
        $newVideo = Video::create(['name' => $request->name]);
        $newVideo->save();
        return redirect('/videos/read/' . $newVideo->id);
    }

    public function readById(Request $request) {
        dd(Video::findOrFail($request->id));
    }

    public function readAll() {
        dd(Video::all());
    }

    public function update(Request $request) {
        $videoToUpdate = Video::findOrFail($request->id);
        $videoToUpdate->update(['name' => $request->name]);
        return redirect('/videos/read/' . $videoToUpdate->id);
    }

    public function delete(Request $request) {
        Video::findOrFail($request->id)->delete();
        return redirect('/videos');
    }
}
