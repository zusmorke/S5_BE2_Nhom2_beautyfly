<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Lưu email vào cơ sở dữ liệu hoặc thực hiện các hành động cần thiết
        $email = $request->input('email');

        // Ví dụ: Lưu email vào cơ sở dữ liệu
        // User::create(['email' => $email]);

        // Trả về phản hồi thành công
        return response()->json(['success' => true]);
    }
}
