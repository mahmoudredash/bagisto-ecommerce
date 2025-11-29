<?php

namespace MahmoudReda\Blog\Http\Controllers\Api;

use App\Http\Controllers\Controller as ControllersController;
use Illuminate\Http\Request;
use MahmoudReda\Blog\Models\Post;

class PostController extends ControllersController
{
    public function index()
    {
        return response()->json([
            'data' => Post::all()
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'data' => Post::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());

        return response()->json([
            'message' => 'Created',
            'data' => $post
        ]);
    }
}
