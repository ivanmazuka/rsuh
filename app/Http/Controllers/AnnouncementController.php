<?php

namespace App\Http\Controllers;

use App\Announcement;
use Exception;
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnnouncementController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param Announcement $announcement
     * @return Factory|View
     */
    public function show(Announcement $announcement)
    {
        return view('application.announcement', compact('announcement'));
    }

    /**
     * Create an announcement.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        //
    }

    /**
     * Update the announcement.
     *
     * @param Announcement $announcement
     * @param Request $request
     * @return JsonResponse
     */

    public function update(Announcement $announcement, Request $request): JsonResponse
    {
        //
    }

    /**
     * Delete the announcement.
     *
     * @param Announcement $announcement
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function delete(Announcement $announcement): JsonResponse
    {
        if (!auth()->check()) {
            return response()->json('Access denied', 403);
        }

        try {
            return response()->json($announcement->delete());
        } catch (Exception $exception) {
            return response()->json(false);
        }
    }

    /**
     * Get posts by API.
     *
     * @param int $number Number of posts to fetch.
     * @return mixed
     */
    public function get($number)
    {
        return Announcement::all()->sortBy('date')->take($number)->values();
    }

    /**
     * Get 4 more posts.
     *
     * @param string $date
     * @return mixed
     */
    public function more($date)
    {
        return Announcement::all()
            ->where('date', '>', $date)
            ->sortBy('date')
            ->take(4)
            ->values();
    }

    /**
     * Count posts.
     *
     * @return int
     */
    public function count(): int
    {
        return Announcement::all()->count();
    }
}

