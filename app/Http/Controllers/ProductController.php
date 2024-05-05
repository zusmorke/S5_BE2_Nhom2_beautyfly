<?php

namespace App\Http\Controllers;

use App\Models\BinhLuan;
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
        $sanphams = SanPham::paginate(5);
        return view('admin', compact('sanphams'))->with('i',(request()->input('page', 1) -1) *5);
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
        $sanpham->gia = $request->input('gia');
        $sanpham->sale = $request->input('sale');
        $sanpham->soluongtrongkho = $request->input('soluongtrongkho');
        $sanpham->soluongdaban = $request->input('soluongdaban');
        // Lấy danh mục sản phẩm đầu tiên trong trường hợp không có hàm controller để lấy danh mục
        
        $danhmucsp = Category::first();
        if ($danhmucsp) {
            $sanpham->danhmucsp_id = $danhmucsp->id;
        }
        // Process file upload
        if ($request->hasFile('hinh')) {
            $file = $request->file('hinh');
            $sanpham->hinh = $file->getClientOriginalName();
        }

        $sanpham->save();
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
        BinhLuan::where('sanpham_id', $id)->delete();

        // Delete the SanPham record
        SanPham::destroy($id);

        return redirect('admin')->with('success', 'Sản phẩm đã được xóa thành công.');
    }
    /*Hien thi binh luan*/
    public function showProduct($sanphamId)
    {
        $sanpham = SanPham::find($sanphamId);
        $binhluans = BinhLuan::where('sanpham_id', $sanphamId)->get(); // Lấy tất cả bình luận của sản phẩm
        return view('product', compact('sanpham', 'binhluans'));
    }
    public function purchaseProduct(Request $request) {
       // Lấy thông tin sản phẩm từ request
       $sanPhamId = $request->input('sanpham_id');
       $soLuongDatHang = $request->input('so_luong');

       // Lấy thông tin sản phẩm từ cơ sở dữ liệu
       $sanPham = SanPham::find($sanPhamId);

       if ($sanPham) {
           // Cập nhật số lượng bán và số lượng trong kho
           $sanPham->so_luong_ban += $soLuongDatHang;
           $sanPham->so_luong_trong_kho -= $soLuongDatHang;

           // Lưu lại thông tin cập nhật vào cơ sở dữ liệu
           $sanPham->save();

           // Điều hướng hoặc trả về thông báo thành công
       } else {
           // Trả về thông báo lỗi nếu sản phẩm không tồn tại
       }
    }
}
