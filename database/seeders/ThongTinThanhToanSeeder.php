<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class ThongTinThanhToanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thong_tin_thanh_toan')->insert([
            [
 
                'Tinh' => 'TP. Hồ Chí Minh',
                'diachi' => 'linh chieu,tp thu duc',
                'donhang_id' => '1',
                'email' => 'nguyena@mail.com',
                'ghichudonhang' => 'Giao hàng trong giờ hành chính',
                'ten' => 'nguyen van a',
                'sdt' => '0123456673',
                'user_id' => '1',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
 
                'Tinh' => 'Binh Duong',
                'diachi' => 'Khu phố Đông Tân, Dĩ An',
                'donhang_id' => '2',
                'email' => 'nguyenb@mail.com',
                'ghichudonhang' => 'Giao hàng trong giờ hành chính',
                'ten' => 'nguyen van b',
                'sdt' => '01234568364',
                'user_id' => '2',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
 
                'Tinh' => 'Thanh Hóa',
                'diachi' => 'Nông Cống',
                'donhang_id' => '2',
                'email' => 'nguyenc@mail.com',
                'ghichudonhang' => 'Giao hàng trong giờ hành chính',
                'ten' => 'nguyen van c',
                'sdt' => '0123456673',
                'user_id' => '3',
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
