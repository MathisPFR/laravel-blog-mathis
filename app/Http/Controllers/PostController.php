<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Post;

class PostController extends Controller
{

    public function index()

    {
    $posts = Post::all();
    return view('allposts', compact('posts'));
    }
    
    public function store(Request $request)
    {
    $request->validate([
        'title' => 'required|max:255',
        'contenu' => 'required',
        'description' => 'required',
    ]);
    Post::create($request->all());
    return redirect()->route('posts.index')
        ->with('success', 'Post created successfully.');
    }


    public function update(Request $request, $id)
    {
    $request->validate([
        'title' => 'required|max:255',
        'contenu' => 'required',
        'description' => 'required',
    ]);
    $post = Post::find($id);
    $post->update($request->all());
    return redirect()->route('posts.index')
        ->with('success', 'Post updated successfully.');
    }
    
    public function destroy($id)
    {
    $post = Post::find($id);
    $post->delete();
    return redirect()->route('posts.index')
        ->with('success', 'Post deleted successfully');
    }
   
    public function create()
    {
    return view('create');
    }
   
    public function show($id)
    {
    $post = Post::find($id);
    return view('show-unique-post', compact('post'));
    }
    
    public function edit($id)
    {
    $post = Post::find($id);
    return view('edit', compact('post'));
    }
}
