<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AnnouncementController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('announcement.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->content = $request->input('content');
        $post->save();
        return redirect()->route('announcement.index');
    }
}
