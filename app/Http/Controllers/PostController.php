<?php

namespace App\Http\Controllers;

// Models
use App\Post;

// Core
use Exception;

// Framework
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param Post $post Post instance.
     * @return View
     */
    public function show(Post $post): View
    {
        return view('application.post', compact('post'));
    }

    public function create(Request $request)
    {
    }

    /**
     * Gets all the posts.
     *
     * @return Collection
     */
    public function retrieve(): Collection
    {
        return Post::all()
            ->sortByDesc('created_at')
            ->take(9)
            ->values();
    }

    public function update(Post $post, Request $request)
    {
    }

    /**
     * Delete the post.
     *
     * @param Post $post Post instance.
     * @return JsonResponse
     */
    public function delete(Post $post): JsonResponse
    {
        if (!auth()->check()) {
            return response()->json('Access denied', 403);
        }

        try {
            return response()->json($post->delete());
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
        return Post::all()
            ->sortByDesc('id')
            ->take($number)
            ->values();
    }

    /**
     * Get 4 more posts.
     *
     * @param int $id Last post id.
     * @return Collection
     */
    public function more(int $id): Collection
    {
        return Post::all()
            ->where('id', '<', $id)
            ->sortByDesc('id')
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
        return Post::all()->count();
    }
}
