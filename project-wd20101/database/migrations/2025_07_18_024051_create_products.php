<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên sản phẩm
            $table->string('slug')->unique(); // Đường dẫn thân thiện
            $table->text('description')->nullable(); // Mô tả sản phẩm
            $table->decimal('price', 15, 2); // Giá bán
            $table->integer('stock')->default(0); // Số lượng tồn kho
            $table->string('image')->nullable(); // Ảnh sản phẩm
            $table->unsignedBigInteger('category_id'); // Khóa ngoại đến categories
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->boolean('is_active')->default(true); // Trạng thái hoạt động
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
