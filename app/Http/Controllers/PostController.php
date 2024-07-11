<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Display a listing of the posts
    public function index()
    {
        // Eager load the 'user' relationship
        $posts = Post::with('user')->get();

        return view('posts.index', ['posts' => $posts]);
    }

    // Show the form for creating a new post
    public function create()
    {
        return view('create');
    }

    // Store a newly created post in storage
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Create a new post instance
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;

        // Save the post to the database
        $post->save();

        // Redirect to the posts list
        return redirect()->route('posts.index');
    }

    // Display the specified post
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('show', compact('post'));
    }
}
