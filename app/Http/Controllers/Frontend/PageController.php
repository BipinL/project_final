<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;


class PageController extends Controller
{
    public function home()
    {

        $menus = Category::all();
        $posts = Post::orderBy('id', 'desc')->limit(3)->get();
        $category = Category::orderBy('id', 'desc')->limit(5)->get();
        return view('frontend.pages.home', compact('posts', 'menus'));
    }
    public function category()
    {
        # code...
    }
    public function single()
    {
        # code...
    }
}
