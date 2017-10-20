<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

    public function index()
    {
        $announcements = Announcement::orderBy('id','desc')->get();


        return view('application.announces', compact('posts','announcements'));
        //
    }
    //
    public function show( Announcement $announcement)
    {
        return view('announce.show', compact('announcement'));
    }

}
