<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\Category;
use App\Models\DanhGia;
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
        return view('admin', compact('sanphams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mota' => 'required', // Đảm bảo 'mota' không trống
            // Các quy tắc kiểm tra khác...
        ]);

        // Tạo một bản ghi mới trong bảng 'sanpham'
        $sanpham = new Sanpham();
        $sanpham->ten = $request->input('ten');
        $sanpham->mota = $request->input('mota');
        // Process file upload
        if ($request->hasFile('hinh')) {
            $file = $request->file('hinh');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filepath = 'img/product/' . $filename;
            // Move the uploaded file to the correct directory
            $file->move(public_path('img/product'), $filename);
            // Save $filepath in the 'hinh' column of the 'sanpham' table
            $sanpham->hinh = $filepath;
        }
        SanPham::create($request->all());
        return redirect('admin')->with('success', 'Sản phẩm đã được tạo thành công.');
    }


    public function update(Request $request, $id)
    {
        $sanpham = SanPham::findOrFail($id);
        $categories = Category::all();

        // Validate the input data
        $validatedData = $request->validate([
            'ten' => 'required',
            'mota' => 'required',
            'gia' => 'required|numeric',
            'sale' => 'nullable|numeric',
            'hinh' => 'nullable|image',
            'soluongtrongkho' => 'required|numeric',
            'soluongdaban' => 'required|numeric',
            'danhmucsp_id' => 'required|exists:category,danhmucsp_id',
        ]);

        // Update the product data
        $sanpham->ten = $validatedData['ten'];
        $sanpham->mota = $validatedData['mota'];
        $sanpham->gia = $validatedData['gia'];
        $sanpham->sale = $validatedData['sale'] ?? 0;

        if ($request->hasFile('hinh')) {
            $hinh = $request->file('hinh');
            $duongDanHinh = $hinh->store('public/img/product/');
            $sanpham->hinh = $duongDanHinh;
        }

        $sanpham->soluongtrongkho = $validatedData['soluongtrongkho'];
        $sanpham->soluongdaban = $validatedData['soluongdaban'];
        $sanpham->danhmucsp_id = $validatedData['danhmucsp_id'];

        $sanpham->save();

        return redirect('admin')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }

    public function delete($id)
    {
        // Delete related records in the danhgia table
        DanhGia::where('sanpham_id', $id)->delete();

        // Delete the SanPham record
        SanPham::destroy($id);

        return redirect('admin')->with('success', 'Sản phẩm đã được xóa thành công.');
    }
}
