<?php
// WelcomeController.php
namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\LienHe;
use App\Models\Category;
use App\Models\DanhGia;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function page($page = "index")
    {
        $sanPham = SanPham::all();
        $lienhe = LienHe::all();
        $cate = Category::all();
        return view($page, ['data' => $sanPham, 'cate' => $cate, 'contact' => $lienhe]);
    }

    public function contact($page = "contact")
    {
        $lienhe = LienHe::all();
        return view($page, ['contact' => $lienhe]);
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
}
