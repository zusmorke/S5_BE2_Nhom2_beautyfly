<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'ten' => 'John', // Tên cụ thể bạn muốn thêm vào
                'email' => 'john@gmail.com', // Địa chỉ email cụ thể bạn muốn thêm vào
                'password' => '12345',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'Jack', // Tên cụ thể bạn muốn thêm vào
                'email' => 'jack@gmail.com', // Địa chỉ email cụ thể bạn muốn thêm vào
                'password' => '12345',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'Tom', // Tên cụ thể bạn muốn thêm vào
                'email' => 'Tom@gmail.com', // Địa chỉ email cụ thể bạn muốn thêm vào
                'password' => '12345',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'Joe', // Tên cụ thể bạn muốn thêm vào
                'email' => 'joe@gmail.com', // Địa chỉ email cụ thể bạn muốn thêm vào
                'password' => '12345',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'ten' => 'Min', // Tên cụ thể bạn muốn thêm vào
                'email' => 'min@gmail.com', // Địa chỉ email cụ thể bạn muốn thêm vào
                'password' => '12345',
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
