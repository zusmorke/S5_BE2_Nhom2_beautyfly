<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart');
        return view('cart', ['cart' => $cart]);
    }
    public function add(Request $request)
    {
        $productId = $request->input('sanpham_id');
        $sanPham = DB::select("select * from `sanpham` where `sanpham_id` = $productId limit 1;")[0];


        if ($sanPham) {
            $cart = session()->get('cart');

            if (isset($cart[$productId])) {
                // Nếu sản phẩm đã có trong giỏ hàng, tăng số lượng
                $cart[$productId]['quantity']++;
            } else {
                // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới vào giỏ hàng
                $cart[$productId] = [
                    'name' => $sanPham->ten,
                    'price' => $sanPham->gia,
                    'quantity' => 1,
                    'img' => $sanPham->hinh
                ];
            }

            session()->put('cart', $cart);
        }
        return redirect()->route('index');
    }
    public function remove(Request $request)
    {
        $productId = $request->input('sanpham_id');
        $cart = session()->get('cart');

        if (isset($cart[$productId])) {
            unset($cart[$productId]); // Xóa sản phẩm khỏi giỏ hàng
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng');
    }
    public function applyDiscount(Request $request) {
        // Lấy số tiền từ phiếu ưu đãi nhập từ form
        $discountAmount = $request->input('discount_amount');
    
        // Lấy tổng tiền từ biến đã tính từ trước
        $totalPrice = $request->session()->get('totalPrice');
    
        // Tính toán số tiền giảm
        $totalPriceAfterDiscount = $totalPrice - $discountAmount;
    
        // Chuyển hướng trở lại trang giỏ hàng
        return redirect('/cart')->with('discountApplied', true);

    }
    

}
