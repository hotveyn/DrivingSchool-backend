<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\ResponseService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return ResponseService::success(Category::all());
    }
}
