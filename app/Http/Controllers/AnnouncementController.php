<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
class AnnouncementController extends Controller
{

    public function index()
    {
        $announcements = Announcement::orderBy('id', 'desc')->get();


        return view('application.announces', compact('posts', 'announcements'));
        //
    }

    //
  
    public function retrieveAnnouncements(){
        
        /** 
         * Не нужно.
         *
         * $limitFrom = $_POST['limitFrom'] ?? 0;   
         */
        $limitTo = $_POST['limitTo'] ?? 4;
        
        $dataFrom = $_POST['dateFrom'] ?? '1999-01-01';
        
        $dataTo = $_POST['dateTo'] ?? '2020-12-12';
        
       // $announsements = DB::select('SELECT * FROM announcements WHERE created_at >= ?::date and created_at <= ?::date LIMIT ? OFFSET ?',
       //                            [$dataFrom, $dataTo, $limitTo, $limitFrom]);

        $announsements = Announcement::where('created_at', '>', $dataFrom )
                                    ->where('created_at', '<', $dataTo)   
                                    ->take($limitTo)
                                    ->get();

        return $announsements;

    }

    public function delete(Announcement $announcement){

            return $announcement->delete();

    }


    public function show(Announcement $announcement)
    {
        return view('announce.show', compact('announcement'));
    }

}
