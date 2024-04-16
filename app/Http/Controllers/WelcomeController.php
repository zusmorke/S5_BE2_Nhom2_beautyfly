<?php
// WelcomeController.php
namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\LienHe;
use App\Models\GioiThieu;
use App\Models\News;
use App\Models\Category;
use App\Models\DanhGia;
use App\Models\DonHang;
use App\Models\ThongTinThanhToan;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index(Request $request)
    {
        $sanPham = SanPham::all();
        $lienhe = LienHe::all();
<<<<<<< HEAD
        // $tintuc = Tintuc::all();
        return view('index', ['data' => $sanPham,  'contact' => $lienhe]);
=======
        $cate = Category::all();
       
        return view($page, ['data' => $sanPham, 'cate' => $cate, 'contact' => $lienhe]);
>>>>>>> 0a1083de38872e07658b2ed8ee7bf9013b57a239
    }

    public function category()
    {
        $cate = Category::all();
        return view('category', ['category' => $cate]);
    }

    public function contact()
    {
        $sanPham = SanPham::all();
        $cate = Category::all();
        $lienhe = LienHe::all();
        return view('contact', ['contact' => $lienhe, 'cate' => $cate, 'data' => $sanPham]);
    }

    public function about()
    {
        $sanPham = SanPham::all();
        $cate = Category::all();
        $gioithieu = GioiThieu::all();
        return view('about', ['about' => $gioithieu, 'data' => $sanPham]);
    }

    // public function news($page = "news")
    // {
    //     $tintuc = Tintuc::all();
    //     return view($page, ['news' => $tintuc]);
    // }

    public function danhgia($page = "danhgia")
    {
        $danhgia = DanhGia::all();
        if ($danhgia->isEmpty()) {
            var_dump("Loi");
        }
        return view($page, ['danhgia' => $danhgia]);
    }

    public function product($page = "product")
    {
        $sanPham = SanPham::all();
        $listProduct = SanPham::all();
        return view($page, ['product' => $sanPham], ['data' => $listProduct]);
    }
<<<<<<< HEAD
    public function cart($page = "cart")
    {
        $cart = DonHang::all();
        return view($page, ['cart' => $cart]);
    }
    public function pay($page = "pay")
    {
        $pay = ThongTinThanhToan::all();
        return view($page, ['pay' => $pay]);
    }
    public function news($page = "news")
    {
        $news = News::all();
        return view($page, ['news' => $news]);
    }
=======
    public function news() {
        return view('news');
    }
    public function cart(){
        return view('cart');
    }
    public function pay(){
        return view('pay');
    } 
>>>>>>> 0a1083de38872e07658b2ed8ee7bf9013b57a239
}
