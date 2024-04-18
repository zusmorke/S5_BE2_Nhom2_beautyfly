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
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index(Request $request)
    {
        $sanPham = SanPham::all();
        $lienhe = LienHe::all();
        $cate = Category::all();
        return view('index', ['data' => $sanPham,  'cate' => $cate, 'contact' => $lienhe]);
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
    public function detail($id)
    {
        $sanPham = DB::select("select * from `sanpham` where `sanpham_id` = $id limit 1;");
        if (count($sanPham)) {
            return view('product', ['sanpham' => $sanPham[0]]);
        }
        return redirect('/');
    }
}
