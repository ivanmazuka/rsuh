<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Actions\{
    Create, Retrieve, Update, Delete
};


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = (new Post())->orderBy('id', 'desc')->get();

        return view('application.Posts', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function create(Request $request)
    {

        $handler = new Create(new Post, $request);
        return response()->json([
            'result' => $handler->do()
        ]);
    }

    /**
     * Get all the posts.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function retrieve(Request $request)
    {
        $handler = new Retrieve(new Post, $request);
        return response()->json($handler->do());
    }

    /**
     * Update the post.
     *
     * @param Post $post
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Post $post, Request $request)
    {
        $handler = new Update($post, $request);
        return response()->json([
            'result' => $handler->do()
        ]);
    }

    /**
     * Delete the post.
     *
     * @param Post $post
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Post $post, Request $request)
    {
        $handler = new Delete($post, $request);
        return response()->json([
            'result' => $handler->do()
        ]);
    }
}
