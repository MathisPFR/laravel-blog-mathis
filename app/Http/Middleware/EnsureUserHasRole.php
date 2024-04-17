<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;


class EnsureUserHasRole
{

    
   
    public function handle(Request $request, Closure $next): Response {
    
        if (!auth()->check()||auth()->user()->role !== 'admin') {
        
            return redirect()->route('posts.index')
        
        ;}
    
        return $next($request)
    ;}

    


}
