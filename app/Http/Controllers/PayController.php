<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ThongTinThanhToan;
use App\Models\DonHang;
use App\Models\ChiTietDonHang;

class PayController extends Controller
{
    public function processPayment(Request $request)
    {
        $cartSession = session()->get('cart');
        $currentUser = auth()->user();
        
        $cart = DonHang::create([
            'user_id' => $currentUser->user_id, 
            'sanpham_id' => 2,
            'tongtien' => 0
        ]);

        $cart->save();

        ThongTinThanhToan::create([
            'id' =>$cart->id,
            'ten' =>$request->input('ten'),
            'diachigiaohang' =>$request->input('diachigiaohang'),
            'sdt' =>$request->input('sdt'),
            'ghichudonhang' =>$request->input('ghichudonhang'),
            'user_id' => $currentUser->user_id,


        ])->save;
        foreach($cartSession as $item) {
            $cartItem = ChiTietDonHang::create([
                
                'donhang_id' =>$cart->id,
                'sanpham_id' =>$item['id'],
                'soluong' =>$item['quantity'],
                'gia_sp' =>$item['price'],
                
                ]); 
            $cartItem->save();
        }
        return view('buy-success');
        return response()->json(['status' => $request->input('ten')]);
        // return 'test';

        // // Validate request
        // $request->validate([
        //     'user_id' => 'required|exists:user,user_id', // Kiểm tra ID danh mục tồn tại
        //     'donhang_id' => 'required|exists:don_hang,donhang_id', // Kiểm tra ID danh mục tồn tại
        //     'ten' => 'required|string|max:255',
        //     'tinh' => 'required|string|max:255',
        //     'diachi' => 'required|string|max:255',
        //     'email' => 'required|email|max:100',
        //     'sdt' => 'required|string|max:255',
        //     'ghichudonhang' => 'required|string|max;255',
        //     // Thêm validation cho các trường khác nếu cần
        // ]);

        // try {
        //     // Lưu thông tin thanh toán vào cơ sở dữ liệu
        //     $donHang = new DonHang();
        //     $donHang->user_id = $request->input('user_id'); // Lấy ID của người dùng đã đăng nhập
        
        //     $donHang->donhang_id = $request->input('donhang_id');
        //     $donHang->ten = $request->input('ten');
        //     $donHang->tinh = $request->input('tinh');
        //     $donHang->diachi = $request->input('diachi');
        //     $donHang->email = $request->input('email');
        //     $donHang->sdt = $request->input('sdt');
        //     $donHang->ghichudonhang = $request->input('ghichudonhang'); // Nếu có

        //     $donHang->save();

        //     // Redirect hoặc trả về thông báo thanh toán thành công
        //     return redirect()->back()->with('success', 'Đơn hàng của bạn đã được thanh toán thành công.');
        // } catch (\Exception $e) {
        //     // Xử lý lỗi nếu không thể lưu đơn hàng vào cơ sở dữ liệu
        //     return redirect()->back()->with('error', 'Đã xảy ra lỗi. Vui lòng thử lại sau.');
        // }
    }
}

