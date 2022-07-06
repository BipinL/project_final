<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function query(Request $request)
    {
        // return Post::all();
        $categories = Category::query();

        if ($request->get('slug')) {
            $category = $categories->where('slug', $request->slug)->first();
            return $category->posts;
        }
    }
}
