<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Helpers\Route;

class PostController extends Controller
{
    public function createPost(Request $request) {
        Post::create(['name' => $request->name]);
        $route = new Route();
        $route->url = ;
        $route->url = ;
    }
}
