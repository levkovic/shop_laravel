<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class SiteController extends Controller
{
	public function getIndex(){
		$produsts = Product::all();
		$categories = Category::all();
		return view('pages.home')->withProducts($produsts)->withCategories($categories);
	}
}
