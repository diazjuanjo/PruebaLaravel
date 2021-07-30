<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::select('id_category', 'name')
            ->where('active', 1)
            ->orderBy('position')
            ->get();
        
        return response()->json($categories);
    }

    
}
