<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();


        return view('application.Posts', compact('posts'));
        //

    }

    public function retrieveNews(){
        /**
        * Не нужно.
        * 
        * $limitFrom = $_POST['limitFrom'] ?? 0;
        */
        
        $limitTo = $_POST['limitTo'] ?? 6;
        
        $dataFrom = $_POST['dateFrom'] ?? '1999-01-01';
        
        $dataTo = $_POST['dateTo'] ?? '2020-12-12';
        
        //$announsements = DB::select('SELECT * FROM announcements WHERE created_at >= ?::date and created_at <= ?::date LIMIT ? OFFSET ?',
        //                           [$dataFrom, $dataTo, $limitTo, $limitFrom]);
        
        $news = Posts::where('created_at', '>', $dataFrom)
                      ->where('created_at', '<', $dataTo)
                      ->take($limitTo)
                      ->get();


        return $news;

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
