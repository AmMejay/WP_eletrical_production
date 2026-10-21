<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Service;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug) {

    $category = Categories::where('slug', $slug)->firstOrFail();

    $service = Service::where('category_id', $category->id)->get();

    return view('servicos', compact('service', 'category'));

    }
}
