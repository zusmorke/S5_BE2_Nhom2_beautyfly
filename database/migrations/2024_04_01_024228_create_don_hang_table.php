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
        Schema::create('don_hang', function (Blueprint $table) {
            $table->increments('donhang_id');
            $table->unsignedInteger('user_id'); // Sử dụng cùng kiểu dữ liệu như trong bảng users
            $table->foreign('user_id')->references('user_id')->on('users'); // Thay 'id' thành 'user_id'
            $table->date('ngaydat');
            $table->decimal('tongtien', 10, 2);
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
        Schema::dropIfExists('don_hang');
    }
};
