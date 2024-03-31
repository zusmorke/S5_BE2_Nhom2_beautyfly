<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments("user_id"); // Sử dụng increments() thay vì id() để tạo khóa chính tăng dần
            $table->string('ten', 50); // Sử dụng string() thay vì ten() và chỉ định độ dài tối đa của chuỗi
            $table->string('password', 255); // Sử dụng string() thay vì password() và chỉ định độ dài tối đa của chuỗi
            $table->string('email', 100)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
