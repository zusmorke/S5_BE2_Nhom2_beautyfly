<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('donhang')->insert([
            [
                'user_id' => '1',
                'ngaydat' => now(),
                "tongtien" => '500000',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'user_id' => '2',
                'ngaydat' => now(),
                "tongtien" => '700000',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'user_id' => '3',
                'ngaydat' => now(),
                "tongtien" => '400000',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'user_id' => '4',
                'ngaydat' => now(),
                "tongtien" => '550000',
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
