<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function getAllPosts()
    {
        $posts = Post::all();
        return response()->json(['data' => $posts]);
    }

    public function createPost(Request $request)
    {
        $post = Post::create($request->all());
        
        return response()->json(['data' => $post]);
    }
}