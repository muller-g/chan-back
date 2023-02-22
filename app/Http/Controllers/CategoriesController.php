<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return response(Category::all()->toArray(), 200);
    }

    public function slug($slug)
    {
        return response(Category::with('post.post_answer')->where('slug', $slug)->get(), 200);
    }
}
