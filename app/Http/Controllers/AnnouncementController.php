<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;
use App\Actions\{
    Create, Retrieve, Update, Delete
};

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $announcements = (new Announcement())->orderBy('id', 'desc')->get();
        return view('application.announces', compact('posts', 'announcements'));
    }

    /**
     * Display the specified resource.
     *
     * @param Announcement $announcement
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Announcement $announcement)
    {
        return view('announce.show', compact('announcement'));
    }

    /**
     * Create an announcement.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $handler = new Create(new Announcement, $request);
        return response()->json([
            'result' => $handler->do()
        ]);
    }

    /**
     * Get all the announcements.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function retrieve(Request $request)
    {
        $handler = new Retrieve(new Announcement, $request);

        return response()->json($handler->do('date', 'asc'));
    }

    /**
     * Update the announcement.
     *
     * @param Announcement $announcement
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Announcement $announcement, Request $request)
    {
        $handler = new Update($announcement, $request);
        return response()->json([
            'result' => $handler->do()
        ]);
    }

    /**
     * Delete the announcement.
     *
     * @param Announcement $announcement
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Announcement $announcement, Request $request)
    {
        $handler = new Delete($announcement, $request);
        return response()->json([
            'result' => $handler->do()
        ]);
    }
}

