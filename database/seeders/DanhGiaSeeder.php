<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Tạo dữ liệu mẫu cho bảng danhgia
         DB::table('danhgia')->insert([
            [
                'sanpham_id' => 1,
                'user_id' => 1,
                'sao' => 4.5,
                'binhluan' => 'Sản phẩm rất tốt!',
            ],
            [
                'sanpham_id' => 2,
                'user_id' => 2,
                'sao' => 3.0,
                'binhluan' => 'Không đáng giá tiền.',
            ],
            // Thêm các bản ghi khác tùy theo nhu cầu của bạn
        ]);
    }
}
