<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function create(Request $request) {
        $newPost = Post::create(['name' => $request->name]);
        $newPost->save();
        return redirect('/posts/read/' . $newPost->id);
    }

    public function readById(Request $request) {
        dd(Post::findOrFail($request->id));
    }

    public function readAll() {
        dd(Post::all());
    }

    public function update(Request $request) {
        $postToUpdate = Post::findOrFail($request->id);
        $postToUpdate->update(['name' => $request->name]);
        return redirect('/posts/read/' . $postToUpdate->id);
    }

    public function delete(Request $request) {
        Post::findOrFail($request->id)->delete();
        return redirect('/posts');
    }

    public function linkTag(Request $request) {
        $postToLink = Post::findOrFail($request->postId);
        $postToLink->tags()->save(Tag::findOrFail($request->tagId));
        return redirect('/posts/read/' . $postToLink->id);
    }
}
