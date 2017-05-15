<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function showAll()
    {
        $categories = Category::get();
        return view('categories.categories',['categories' => $categories]);
    }

    public function showCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('categories.category', ['category' => $category]);
    }

    public function search(Request $request)
    {
        $name = $request->input('category-name');
        $categories = Category::where('title','like','%'. $name.'%')->paginate(1);

      return view('categories.categories',['categories'=>$categories]);

    }

}
