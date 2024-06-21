<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
class PostController extends Controller
{
    
    public function index()
    {
        // Hello world
        // some changes in main repe
        // $post = Post::get();
        // return response()->json(['message'=>'List of Posts','posts'=>$post],200);
        $post = Post::find(1);
        return $post;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return response()->json(
            [
                'message'=>'New Post Created',
                'post'=>$post
            ],200
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // $post = Post::find($id);
        return response()->json(
            [
                'message'=>'Single Post',
                'post'=>$post
            ],200
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title ?? $post->title;
        $post->content = $request->content ?? $post->content;
        $post->save();
        return response()->json(
            [
                'message'=>'Post Updated',
                'post'=>$post
            ],200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return response()->json(
            [
                'message'=>'Post Deleted',
                'post'=>$post->delete()
            ],200
        );
    }
}
