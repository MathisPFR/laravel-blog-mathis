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


class UserController extends Controller
{
    public function index()

    {
    $users = User::all();
    return view('allusers', ['user'=>$users]);
    }
    
   
    public function update(Request $request, $id)
    {
        // dd($request);
    $request->validate([
        'name' => 'required|max:255',
        'role' => 'required',
    ]);

    
    $user = User::find($id);
    $user->update($request->all());
   
   
    
    return redirect()->route('users.index')
        ->with('success', 'Post updated successfully.');
    }
    
    public function destroy($id)
    {
    $users = User::find($id);
    $users->delete();
    return redirect()->route('users.index')
        ->with('success', 'Post deleted successfully');
    }
   
    public function show($id)
    {
    $users = User::find($id);
    return view('show-unique-user', compact('users'));
    }
    
    public function edit($id)
    {
    $users = User::find($id);
    return view('edit-user', compact('users'));
    }
}
