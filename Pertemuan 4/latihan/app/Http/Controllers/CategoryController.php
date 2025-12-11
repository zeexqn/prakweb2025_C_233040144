<?php

namespace App\Http\Controllers;
 use App\Models\Category;
 use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function index()
{
    $categories = Category::all();
    return view('categories', compact('categories'));
}
}
