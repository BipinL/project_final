<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Post;

use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        return view('frontend.pages.home', compact('posts'));
    }
    // public function _construct()
    // {
    //     $company = Company::first();

    //     $menus = Category::where('status', true)->get();

    //     View::share('company', $company);
    //     View::share('menus', $menus);
    // }
}
