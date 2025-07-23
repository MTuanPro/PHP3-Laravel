<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/trang-test', function () {
    return  "day la trang test";
});
Route::get('/count', function () {
    $a = 5;
    $b = 10;
    $sum = $a + $b;
    return "Tong cua $a va $b la $sum";
});
//route chỉ có 2 method là GET và POST
Route::get('/debug', function () {
    // var_dump('đây là debug'); die();
    // ko debug bằng vad_dump nữa mà dùng dd
    dd('đây là debug');
});

// đối với controller basic thì khai báo  hàm  gọi đến là được 
Route::get('/category', [CategoryController::class, 'index']); // Route hiển thị danh sách gọi vào hàm index
Route::get('/category/{id}', [CategoryController::class, 'show']); // Route hiển thị chi tiết gọi vào hàm show
Route::get('/category/create', [CategoryController::class, 'create']); // Route hiển thị trang thêm dữ liệu gọi vào hàm create
Route::post('/category/store', [CategoryController::class, 'store']); // Route xử lý thêm dữ liệu gọi vào hàm store (lưu ý dùng Route::post)
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']); // Route hiển thị trang sửa dữ liệu gọi vào hàm edit
Route::post('/category/update/{id}', [CategoryController::class, 'update']); // Route xử lý sửa dữ liệu gọi vào hàm update (lưu ý dùng Route::post)
Route::post('/category/destroy/{id}', [CategoryController::class, 'destroy']); // Route xử lý xóa dữ liệu (lưu ý dùng Route::post)

Route::get('/category/trash', [CategoryController::class, 'trash']); // hiển thị thùng rác

// Các route cho Product CRUD
// Route::get('/product', [ProductController::class, 'index']); // Hiển thị danh sách sản phẩm
// Route::get('/product/{id}', [ProductController::class, 'show']); // Hiển thị chi tiết sản phẩm
// Route::get('/product/create', [ProductController::class, 'create']); // Hiển thị form thêm sản phẩm
// Route::post('/product/store', [ProductController::class, 'store']); // Xử lý thêm sản phẩm
// Route::get('/product/edit/{id}', [ProductController::class, 'edit']); // Hiển thị form sửa sản phẩm
// Route::post('/product/update/{id}', [ProductController::class, 'update']); // Xử lý sửa sản phẩm
// Route::post('/product/destroy/{id}', [ProductController::class, 'destroy']); // Xử lý xóa sản phẩm

// để rứt gọn code thì dùng controller resource
Route::resource('product', ProductController::class); // Tạo tất cả các route cho
//(https://laravel.com/docs/12.x/controllers#resource-controllers)
// các route này sẽ tự động ánh xạ đến 