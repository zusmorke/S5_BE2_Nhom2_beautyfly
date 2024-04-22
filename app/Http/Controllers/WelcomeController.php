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

        // Lấy từ khóa tìm kiếm từ request
        $query = $request->input('query');
        // Nếu có từ khóa tìm kiếm, thực hiện tìm kiếm sản phẩm
        if ($query) {
            $results = SanPham::where('ten', 'LIKE', "%{$query}%")
                              ->orWhere('mota', 'LIKE', "%{$query}%")
                              ->get();
        } else {
            $results = [];
        }
        return view('index', compact('sanPham', 'cate', 'lienhe', 'results', 'query'));
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
        return view($page, ['product' => $sanPham]);
    }

    public function showListProduct()
    {
        $phanTrang = SanPham::paginate(7); // Giả sử bạn muốn hiển thị 10 sản phẩm trên mỗi trang
        return view('listProduct', compact('phanTrang'));
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
        $sanPham = DB::select("select * from `sanpham` where `sanpham_id` = ?", [$id]);


        if (!empty($sanPham)) {
            return view('product', ['sanpham' => $sanPham[0]]);
        } else {
            return redirect('/')->with('error', 'Sản phẩm không tồn tại');
        }
    }
}
