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
use App\Models\User;
use App\Models\Category;



class CategoryController extends Controller
{
    public function index()
    {
        // $user = User::find(Auth::id());
        // $posts = $user->posts()->get();
        $categories = Category::all();
    
    return view('allcategories', compact('categories'));
    }
    
    public function store(Request $request)
    {
    $request->validate([
        'title' => 'required|max:255',
    ]);
    
    Category::create([
        "title"=> $request->title,
        // "user_id"=> Auth::id(),
    ]);
    
    //Auth::user()->posts()->create($request->all());

    return redirect()->route('categories.index')
        ->with('success', 'Post created successfully.');
    }


    public function update(Request $request, $id)
    {
    $request->validate([
        'title' => 'required|max:255',
    ]);
    $categories = Category::find($id);
    $categories->update($request->all());
    return redirect()->route('categories.index')
        ->with('success', 'Post updated successfully.');
    }
    
    public function destroy($id)
    {
    $categories = Category::find($id);
    $categories->delete();
    return redirect()->route('categories.index')
        ->with('success', 'Category deleted successfully');
    }
   
    public function create()
    {
    return view('category-create');
    }
   
    public function show($id)
    {
    $categories = Category::find($id);
    return view('show-unique-category', compact('categories'));
    }
    
    public function edit($id)
    {
    $categories = Category::find($id);
    return view('edit-category', compact('categories'));
    }
}
