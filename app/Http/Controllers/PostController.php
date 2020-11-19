<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Http\Resources\Post as PostResource;
use App\Http\Resources\PostCollection;

class PostController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'title'     => 'required',
            'body'      => '',
        ]);
        $post = Post::create($data);
        return new PostResource($post);
    }
    public function index()
    {


        return new PostCollection(Post::all());
    }
    public function show(Post $post)
    {
        return new PostResource($post);
    }
    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'sometimes|required',
            'body' => '',

        ]);
        $post->update($data);
        return new PostResource($post);
    }
}
