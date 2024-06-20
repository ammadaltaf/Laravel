<?php

namespace App\services;
use App\interfaces\PostInterface;
use App\Models\Post;
class PostService implements PostInterface
{
    public function show() : array{
        $post = Post::all();
        return $post->toArray();
    }

    public function find($id) : array {
        $post = Post::where('id',$id)->first();
        return $post ? $post->toArray() : [];
    }
}
