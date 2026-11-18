<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;

class CategoryController extends Controller
{
    public function index()
    {
        $kategori = CategoryProduct::paginate(5);

        return view('pages.category.show', compact('kategori'));
    }
}