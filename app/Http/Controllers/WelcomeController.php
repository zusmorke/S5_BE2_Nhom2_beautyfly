<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function page($page="index"){
        $sanPham = SanPham::all();
        return view ($page,['data'=>$sanPham]);
    }
}
