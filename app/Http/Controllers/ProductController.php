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
        return view('role');
    }
    
    public function index(Request $request)
    {
        $sortType = $request->input('sort');

        if ($sortType == '2') {
            $products = SanPham::orderBy('gia', 'mota')->get();
        } elseif ($sortType == '3') {
            $products = SanPham::orderBy('gia', 'asc')->get();
        } else {
            $products = SanPham::all();
        }

        return view('index', compact('sanpham'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function updateProductQuantity(Request $request, $id)
{
    $sanpham = SanPham::find($id);
    $soluongMua = $request->input('soluongMua');

    // Cập nhật số lượng đã bán và số lượng trong kho
    $sanpham->soluongdaban += $soluongMua;
    $sanpham->soluongtrongkho -= $soluongMua;
    
    // Lưu thay đổi vào cơ sở dữ liệu
    $sanpham->save();

    return view('product', ['product' => $sanpham]);
}

}
