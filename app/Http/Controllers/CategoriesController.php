<?php

namespace App\Http\Controllers;


use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Categories $categories)
    {
        return view('categories')->with('categories', $categories->getCategories());
    }

}
