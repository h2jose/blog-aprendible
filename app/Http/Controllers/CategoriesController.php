<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category){

    	// $posts = $category->posts()->paginate();

    	return view('pages.home', [
    		'title' => "Publicaciones de la categoría {$category->name}",
    		'posts' => $category->posts()->published()->paginate()
    	]);

    }
}
