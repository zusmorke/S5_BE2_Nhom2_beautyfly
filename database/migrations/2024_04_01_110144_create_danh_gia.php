<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhgia', function (Blueprint $table) {
            // Định nghĩa cột
            $table->unsignedInteger('sanpham_id');
            $table->unsignedInteger('user_id');
            $table->float('sao');
            $table->string('binhluan', 255);
            
            // Định nghĩa khóa chính đa cột
            $table->primary(['sanpham_id', 'user_id']);
            
            // Định nghĩa ràng buộc ngoại
            $table->foreign('sanpham_id')->references('sanpham_id')->on('sanpham');
            $table->foreign('user_id')->references('user_id')->on('user');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('danhgia');
    }
};
