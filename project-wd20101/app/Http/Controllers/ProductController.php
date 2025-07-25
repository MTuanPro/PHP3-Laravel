<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //đây là trang hiển thị danh sách sản phẩm
        // dd("Đây là trang hiển thị danh sách sản phẩm");
        $title = "Danh sách sản phẩm"; // Biến để truyền tiêu đề cho view
        $products = Product::all(); // Lấy tất cả sản phẩm từ database
        return view('product.index', compact('products', 'title')); // Trả về view với dữ liệu sản phẩm
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //đây là trang hiển thị form thêm sản phẩm
        dd("Đây là trang hiển thị form thêm sản phẩm");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Xử lý lưu sản phẩm mới
        dd("Xử lý lưu sản phẩm mới");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //đây là trang hiển thị chi tiết sản phẩm
        dd("Đây là trang hiển thị chi tiết sản phẩm");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //đây là trang hiển thị form sửa sản phẩm
        dd("Đây là trang hiển thị form sửa sản phẩm");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Xử lý cập nhật sản phẩm
        dd("Xử lý cập nhật sản phẩm");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Xử lý xóa sản phẩm
        dd("Xử lý xóa sản phẩm");
    }
}
