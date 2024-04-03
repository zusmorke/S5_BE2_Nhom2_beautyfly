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
        DB::table('ThongTinThanhToan')->insert([
            [
                'user_id' => 1,
                'donhang_id' => 1,
                'hoten' => 'John Doe',
                'Tinh' => 'TP. Hồ Chí Minh',
                'diachi' => '123 Đường ABC, Quận XYZ',
                'email' => 'john.doe@example.com',
                'sdt' => '0123456789',
                'ghichudonhang' => 'Giao hàng trong giờ hành chính',
            ],
            [
                'user_id' => 2,
                'donhang_id' => 2,
                'hoten' => 'Jane Smith',
                'Tinh' => 'TP. Hà Nội',
                'diachi' => '456 Đường DEF, Quận UVW',
                'email' => 'jane.smith@example.com',
                'sdt' => '0987654321',
                'ghichudonhang' => 'Giao hàng ngoại tỉnh',
            ],
            [
                'user_id' => 3,
                'donhang_id' => 3,
                'hoten' => 'Alice Johnson',
                'Tinh' => 'TP. Hồ Chí Minh',
                'diachi' => '789 Đường GHI, Quận KLM',
                'email' => 'alice.johnson@example.com',
                'sdt' => '0369852147',
                'ghichudonhang' => 'Giao hàng sau 18h',
            ],
            [
                'user_id' => 4,
                'donhang_id' => 4,
                'hoten' => 'Michael Brown',
                'Tinh' => 'TP. Đà Nẵng',
                'diachi' => '321 Đường MNO, Quận PQR',
                'email' => 'michael.brown@example.com',
                'sdt' => '0978643215',
                'ghichudonhang' => 'Giao hàng đến cửa hàng',
            ],
            [
                'user_id' => 5,
                'donhang_id' => 5,
                'hoten' => 'Emily Williams',
                'Tinh' => 'TP. Hải Phòng',
                'diachi' => '101 Đường STU, Quận VWX',
                'email' => 'emily.williams@example.com',
                'sdt' => '0923785641',
                'ghichudonhang' => 'Giao hàng tận nơi',
            ],
            [
                'user_id' => 6,
                'donhang_id' => 6,
                'hoten' => 'David Miller',
                'Tinh' => 'TP. Cần Thơ',
                'diachi' => '202 Đường YZ, Quận ABC',
                'email' => 'david.miller@example.com',
                'sdt' => '0387456213',
                'ghichudonhang' => 'Giao hàng trong ngày',
            ],
            [
                'user_id' => 7,
                'donhang_id' => 7,
                'hoten' => 'Olivia Garcia',
                'Tinh' => 'TP. Vũng Tàu',
                'diachi' => '404 Đường DEF, Quận GHI',
                'email' => 'olivia.garcia@example.com',
                'sdt' => '0941258369',
                'ghichudonhang' => 'Giao hàng trong 24 giờ',
            ],
            [
                'user_id' => 8,
                'donhang_id' => 8,
                'hoten' => 'James Martinez',
                'Tinh' => 'TP. Nha Trang',
                'diachi' => '505 Đường JKL, Quận MNO',
                'email' => 'james.martinez@example.com',
                'sdt' => '0357849621',
                'ghichudonhang' => 'Giao hàng nhanh',
            ],
            [
                'user_id' => 9,
                'donhang_id' => 9,
                'hoten' => 'Sophia Hernandez',
                'Tinh' => 'TP. Hà Nam',
                'diachi' => '606 Đường PQR, Quận STU',
                'email' => 'sophia.hernandez@example.com',
                'sdt' => '0978523641',
                'ghichudonhang' => 'Giao hàng vào cuối tuần',
            ],
            [
                'user_id' => 10,
                'donhang_id' => 10,
                'hoten' => 'Daniel Lopez',
                'Tinh' => 'TP. Thái Nguyên',
                'diachi' => '707 Đường VWX, Quận YZ',
                'email' => 'daniel.lopez@example.com',
                'sdt' => '0347859632',
                'ghichudonhang' => 'Giao hàng đặc biệt',
            ],
        ]);
    }
}
