<?php
// WelcomeController.php
namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\LienHe;
use App\Models\Category;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function page($page = "index")
    {
        $sanPham = SanPham::all();
        $lienhe = LienHe::all();
        $cate = Category::all();
        return view($page, ['data' => $sanPham, 'cate' => $cate, 'contact' => $lienhe]); // Chỉ sử dụng một mảng để truyền dữ liệu
    }

    public function contact($page = "contact")
    {
        $lienhe = LienHe::all();
        return view($page, ['contact' => $lienhe]);
    }
}
