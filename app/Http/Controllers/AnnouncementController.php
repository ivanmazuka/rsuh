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
  
    public function retrieve()
    {
        $limitFrom = $_POST['limitFrom'] ?? 0;
        $limitTo = $_POST['limitTo'] ?? 4;
        $dataFrom = $_POST['dateFrom'] ?? '1999-01-01';
        $dataTo = $_POST['dateTo'] ?? '2020-12-12';

        $announsements = Announcement::where('created_at', '>', $dataFrom )
                                     ->where('created_at', '<', $dataTo)
                                     ->skip($limitFrom)
                                     ->take($limitTo)
                                     ->get();

        return response()->json($announsements);

    }

    public function delete(Announcement $announcement)
    {
        return response()->json([
            'result' => $announcement->delete()
        ]);
    }


    public function show(Announcement $announcement)
    {
        return view('announce.show', compact('announcement'));
    }

}
