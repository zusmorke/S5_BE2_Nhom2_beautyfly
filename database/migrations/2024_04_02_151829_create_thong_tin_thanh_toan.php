<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongTinThanhToanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_tin_thanh_toan', function (Blueprint $table) {
            $table->id();
            $table->string('ten', 50);
            $table->string('tinh', 255);
            $table->string('diachi', 255);
            $table->string('email', 100)->unique();
            $table->string('sdt', 255);
            $table->string('ghichudonhang', 255)->nullable();
            
            // Khóa ngoại
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('donhang_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('donhang_id')->references('id')->on('don_hang');
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
        Schema::dropIfExists('thong_tin_thanh_toan');
    }
}

