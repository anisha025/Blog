<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function welcome()
    {
        $blogs = Blog::all();
        return view('welcome', compact('blogs'));
    }

    public function description($id)
    {
        $blog = Blog::find($id);
        return view('description', compact('blog'));
    }
}
