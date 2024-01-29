<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// Post
use App\Models\Post;

class PostController extends Controller
{
    public function getAllPosts()
    {
        $posts = Post::all();
        return response()->json(['data' => $posts]);
    }
}