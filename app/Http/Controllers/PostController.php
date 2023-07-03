<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    // public function create(Request $request) {
    //     $newPost = Post::create(['name' => $request->name]);
    //     $newPost->save();
    //     return redirect('/posts/read/' . $newPost->id);
    // }

    // public function readById(Request $request) {
    //     $postToRead = Post::findOrFail($request->id);
    //     dd($postToRead->id, $postToRead->name, $postToRead->tags);
    // }

    // public function readAll() {
    //     $postsArray = [];
    //     foreach (Post::all() as $post) {
    //         $postsArray[$post->id] = $post->name;
    //     }
    //     dd($postsArray);
    // }

    // public function update(Request $request) {
    //     $postToUpdate = Post::findOrFail($request->id);
    //     $postToUpdate->update(['name' => $request->name]);
    //     return redirect('/posts/read/' . $postToUpdate->id);
    // }

    // public function delete(Request $request) {
    //     $postToDelete = Post::findOrFail($request->id);
    //     $postToDelete->tags()->detach();
    //     $postToDelete->delete();
    //     return redirect('/posts');
    // }

    // public function linkTag(Request $request) {
    //     $postToLink = Post::findOrFail($request->postId);
    //     $postToLink->tags()->save(Tag::findOrFail($request->tagId));
    //     return redirect('/posts/read/' . $postToLink->id);
    // }

    //----------------------------------------------------------------------

    public function index() {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        Post::create($request->all());
        return redirect('/view/posts');
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('posts.show', $post->id);
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
