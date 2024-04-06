<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function page($page="index"){
        $sanPham = SanPham::all();
        $cate = Category::all();
        return view ($page,['data'=>$sanPham],['cate'=>$cate]);
    }
}
