<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model

{
    use HasFactory; // yêu cầu của use hasfactory thì mới chạy được factory
    protected $table = 'categories'; // tên bảng trong cơ sở dữ liệu
    protected $fillable = ['name', 'slug', 'description', 'is_active']; // các trường có thể gán hàng loạt

    public $timestamps = false;
    // trong trường hợp bảng có 2 trường dữ liệu created_at và updated_at 
    // nếu tôi ko muốn thêm data vào 2 trường này thì tôi sẽ để false
    // khi $timestamps = true thì bắt buộc phải thêm data vào 2 trường này
    // trong trường hợp bảng ko có 2 trường dữ liệu created_at và updated_at
    // thì tôi sẽ để $timestamps = false
}
