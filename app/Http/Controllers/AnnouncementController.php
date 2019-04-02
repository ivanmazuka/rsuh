<?php

namespace App\Http\Controllers;

// Models
use App\Announcement;

// Core
use Exception;

// Framework
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
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

    public function create(Request $request)
    {
    }

    /**
     * Gets all the announcements.
     *
     * @return Collection
     */
    public function retrieve(): Collection
    {
        return Announcement::all()
            ->sortByDesc('date')
            ->take(5)
            ->values();
    }

    public function update(Announcement $announcement)
    {
    }

    /**
     * Delete the announcement.
     *
     * @param Announcement $announcement Announcement instance.
     * @return JsonResponse
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
     * @return Collection
     */
    public function get(int $number): Collection
    {
        return Announcement::all()
            ->sortByDesc('date')
            ->take($number)
            ->values();
    }

    /**
     * Get 4 more posts.
     *
     * @param string $date Date string.
     * @return Collection
     */
    public function more($date): Collection
    {
        return Announcement::all()
            ->where('date', '<', $date)
            ->sortByDesc('date')
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

