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
        $tagToRead = Tag::findOrFail($request->id);
        dd($tagToRead->id, $tagToRead->name, $tagToRead->posts, $tagToRead->videos);
    }

    public function readAll() {
        $tagsArray = [];
        foreach (Tag::all() as $tag) {
            $tagsArray[$tag->id] = $tag->name;
        }
        dd($tagsArray);
    }

    public function update(Request $request) {
        $tagToUpdate = Tag::findOrFail($request->id);
        $tagToUpdate->update(['name' => $request->name]);
        return redirect('/tags/read/' . $tagToUpdate->id);
    }

    public function delete(Request $request) {
        $tagToDelete = Tag::findOrFail($request->id);
        $tagToDelete->posts()->detach();
        $tagToDelete->videos()->detach();
        $tagToDelete->delete();
        return redirect('/tags');
    }
}
