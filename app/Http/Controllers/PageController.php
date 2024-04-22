<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Post;
use App\Models\Category;

class PageController extends Controller
{

    public function legals(): View
    {

        $items = array(
            "bonjour",
            "je suis le",
            "plus beau",
            "si je te jure",
            "c'est fou",
        );
            
    

        return view('legals', [
            'title' => 'mentions légales',
            'content' => "<p> je suis du contenu</p> <p>bonjour à toi</p>",
            'items' => $items, 
        ]);
    }

    public function abouts(): View
    {
        return view('abouts', [
            'title' => 'À propos',
            'content' => "<p> je suis du contenu</p> <p>bonjour à toi</p> <p> je suis encore du contenu</p>",
        ]);
    }


    // public function welcome(): View
    // {
    //     $categories = Category::all();
    //     $post = Post::latest()->paginate(10);
    //     return view('welcome', [
    //         'posts' => $post,
    //         'categories' => $categories,
            
    //     ]);

    // }

   
    public function index(Request $request)  
    {
        $categories = Category::all();
        $query = Post::query();

        if(isset($request->categories) && ($request->categories != null))
        {
            $query->whereHas('categorie', function($q) use ($request) {
                $q->whereIn('categories.id', $request->categories);
            });
        }

        $posts = $query->get();
        // $posts = Post::latest()->paginate(10);
        
        return view('welcome', compact('posts', 'categories'));

        
    }

    public function show($id)
    {
    $post = Post::find($id);
    
    return view('show-unique-post-index', compact('post'));
    }


}
