<?php

namespace App\Http\Controllers;

// App
use App\Post;
use App\Announcement;

// Framework
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Shows home page.
     *
     * @return Factory|View
     */
    public function index()
    {
        $posts = Post::all()->sortByDesc('id')->values();
        $announcements = Announcement::all()->sortByDesc('id')->values();

        return view('application.home', compact('posts', 'announcements'));
    }
}
