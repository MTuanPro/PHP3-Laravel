<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        // dd("đã gọi được hàm index trong CategoryController");
        //controller là nơi xử lý logic, có thể gọi model để lấy dữ liệu từ database
        $title = "Danh sách danh mục"; // Biến để truyền tiêu đề cho view
        // cách 1 eloquent
        $categories = Category::all(); // Lấy tất cả danh mục từ database

        // cách 2 query builder
        // $categories = DB::table('categories')->get(); // Lấy tất cả danh mục từ database
        // dd($categories); // Hiển thị danh sách danh mục

        return view('category.index', compact('categories', 'title')); // Trả về view với dữ liệu danh mục
        // đối với trường hợp đẩy dữ liệu sang view thì dùng hàm compact
        // đối với trường hợp api thì dùng hàm json

    }
    public function edit()
    {
        dd("đã gọi được hàm edit trong CategoryController");
    }
}
