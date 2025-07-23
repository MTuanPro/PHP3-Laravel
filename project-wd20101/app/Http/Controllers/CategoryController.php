<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        dd("đã gọi được hàm index trong CategoryController");
    }
    public function edit()
    {
        dd("đã gọi được hàm edit trong CategoryController");
    }
}
