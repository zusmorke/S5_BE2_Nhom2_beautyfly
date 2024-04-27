<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $sanphams = SanPham::all();
        return view('role', compact('sanphams'));
    }
    
    public function store(Request $request)
    {
        SanPham::create($request->all());
        return redirect('admin')->with('success', 'Sản phẩm đã được tạo thành công.');
    }

    public function edit($id)
    {
        $sanpham = SanPham::find($id);
        return view('admin.sanpham.edit', compact('sanpham'));
    }

    public function delete($id)
    {
        SanPham::destroy($id);
        return redirect('admin')->with('success', 'Sản phẩm đã được xóa thành công.');
    }

    public function update(Request $request, $id)
    {
        $sanpham = SanPham::find($id);
        $sanpham->update($request->all());
        return redirect()->route('sanpham.role')->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }
}
