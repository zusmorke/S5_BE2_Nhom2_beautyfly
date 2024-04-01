<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('sanpham')->insert([
            [
                'ten' => 'kem chong nang',
                'mota' => 'chong nang',
                "gia" => "50000",
                "sale" => "35000",
                "hinh" => "hinh1.jpg",
                "soluongtrongkho" => "2000",
                "soluongdaban" => "20",
                "danhmucsp_id" => "1",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'nuoc tay trang',
                'mota' => 'dùng cho da bình thường, da dầu,da khô,.... ',
                "gia" => "200000",
                "sale" => "175000",
                "hinh" => "hinh2.jpg",
                "soluongtrongkho" => "50000",
                "soluongdaban" => "500",
                "danhmucsp_id" => "1",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'son dưỡng môi',
                'mota' => 'dùng để cho môi mềm mịn, ko nứt nẻ,....',
                "gia" => "50000",
                "sale" => "25000",
                "hinh" => "hinh3.jpg",
                "soluongtrongkho" => "50000",
                "soluongdaban" => "500",
                "danhmucsp_id" => "1",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'kem nền',
                'mota' => ' kem nền là làm đều màu da, che đi các khuyết điểm, làm mờ nếp nhăn và tạo cảm giác mịn màng cho làn da,....',
                "gia" => "100000",
                "sale" => "79000",
                "hinh" => "hinh4.jpg",
                "soluongtrongkho" => "50000",
                "soluongdaban" => "500",
                "danhmucsp_id" => "2",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'kem ủ tóc',
                'mota' => 'Kem ủ tóc là một loại sản phẩm chăm sóc tóc được thiết kế để cung cấp dưỡng chất, độ ẩm và dưỡng ẩm sâu cho tóc... ',
                "gia" => "200000",
                "sale" => "189000",
                "hinh" => "hinh5.jpg",
                "soluongtrongkho" => "50000",
                "soluongdaban" => "500",
                "danhmucsp_id" => "3",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'son dior',
                'mota' => 'son Dior mang đến không chỉ là một màu sắc tuyệt đẹp mà còn là sự chăm sóc và bảo vệ cho làn môi.',
                "gia" => "1000000",
                "sale" => "899000",
                "hinh" => "hinh6.jpg",
                "soluongtrongkho" => "2000000",
                "soluongdaban" => "5000",
                "danhmucsp_id" => "2",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'dầu dưỡng tóc',
                'mota' => 'Dùng để nuôi dưỡng tóc từ bên trong, làm mềm mại, chống gãy rụng và tăng cường sự mềm mại..... ',
                "gia" => "200000",
                "sale" => "175000",
                "hinh" => "hinh7.jpg",
                "soluongtrongkho" => "50000",
                "soluongdaban" => "500",
                "danhmucsp_id" => "3",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'Nước hoa (Perfume)',
                'mota' => 'Là dạng hương thơm có độ nồng độ cao nhất, thường từ 15-30%, giữ hương lâu nhất trên da....                ...',
                "gia" => "50000",
                "sale" => "25000",
                "hinh" => "hinh8.jpg",
                "soluongtrongkho" => "50000",
                "soluongdaban" => "500",
                "danhmucsp_id" => "4",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'Dầu thơm (Perfumed Oil)',
                'mota' => ' Dạng hương thơm dễ thấm vào da, giúp hương thơm lan tỏa dài lâu....',
                "gia" => "100000",
                "sale" => "79000",
                "hinh" => "hinh9.jpg",
                "soluongtrongkho" => "50000",
                "soluongdaban" => "500",
                "danhmucsp_id" => "4",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'Nến thơm (Scented Candles)',
                'mota' => 'Cung cấp không gian ấm áp và thư giãn với hương thơm dễ chịu, thích hợp cho việc tạo không gian thư giãn trong nhà... ',
                "gia" => "200000",
                "sale" => "189000",
                "hinh" => "hinh10.jpg",
                "soluongtrongkho" => "50000",
                "soluongdaban" => "500",
                "danhmucsp_id" => "4",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
