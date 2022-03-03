<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\register;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function Home()
    {
        return view('/blog.home');
    }
    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
            $saved = post::create($request->all());
            if ($saved) {
                return back()->with('success', 'Post Created Successfully');
            }
        }
        $posts = post::all();
        $authors = register::all();
        return view('blog.createpost', compact("authors", "authors"));
    }
    public function aboutMe()
    {
        return view('/blog.aboutme');
    }
    
}
