<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SanPhamSeeder::class);
        $this->call(LienHeSeeder::class);
        $this->call(DanhGiaSeeder::class);
        $this->call(DonHangSeeder::class);
        $this->call(ChiTietDonHangSeeder::class);
        $this->call(ThongTinThanhToanSeeder::class);
    }
}
