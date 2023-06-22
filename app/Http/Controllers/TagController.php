<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function create(Request $request) {
        $newTag = Tag::create(['name' => $request->name]);
        $newTag->save();
        return redirect('/tags/read/' . $newTag->id);
    }

    public function readById(Request $request) {
        dd(Tag::findOrFail($request->id));
    }

    public function readAll() {
        dd(Tag::all());
    }

    public function update(Request $request) {
        $tagToUpdate = Tag::findOrFail($request->id);
        $tagToUpdate->update(['name' => $request->name]);
        return redirect('/tags/read/' . $tagToUpdate->id);
    }

    public function delete(Request $request) {
        Tag::findOrFail($request->id)->delete();
        return redirect('/tags');
    }
}
