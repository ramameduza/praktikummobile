<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ProductCategory;


class ProductCategoryController extends Controller
{
public function index()
{
$productCategories = ProductCategory::all();
return view('productCategories.index', compact('productCategories'));
}
}