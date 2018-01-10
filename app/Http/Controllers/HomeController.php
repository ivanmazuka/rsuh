<?php

namespace App\Http\Controllers;

use App\Post;
use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();

        $announcements = Announcement::orderBy('id', 'desc')->get();

        return view('application.home', compact('posts', 'announcements'));
    }
}
