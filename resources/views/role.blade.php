    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="{{asset('css/role.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>

    <body>
        <header>
            <h1>Trang chủ ADMIN</h1>
            <a href="{{url('/')}}"><i class="fa fa-home" style="color:#fff; font-size: 25px;"></i></a>
            <nav>
                <ul>
                    <li><a href="#products" class="nav-link">Quản lý sản phẩm</a></li>
                    <li><a href="#news" class="nav-link">Quản lý tin tức</a></li>
                    <li><a href="#accounts" class="nav-link">Quản lý tài khoản</a></li>
                    <li><a href="#statistics" class="nav-link">Thống kê</a></li>
                </ul>
            </nav>
        </header>

        <main>
            @if (session('success'))
            <div id="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <section id="news-section" class="admin-section">
                <h2>Quản lý tin tức</h2>
                <!-- Form thêm, sửa, xóa tin tức -->
                <!-- Bảng hiển thị tin tức -->

            </section>

            <!-- Trong section "Quản lý sản phẩm" -->
            <section id="products-section" class="admin-section">
                <h2>Quản lý sản phẩm</h2>

                <!-- Button to trigger the popup -->
                <button id="openPopupButton" class="btn btn-primary">Thêm sản phẩm</button>
                <!-- Popup form -->
                <div id="popupForm" style="display: none;">
                    <form id="addProductForm" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="ten">Tên sản phẩm:</label>
                            <input type="text" id="ten" name="ten" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mota">Mô tả:</label>
                            <textarea id="mota" name="mota" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gia">Giá:</label>
                            <input type="number" id="gia" name="gia" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="sale">Sale:</label>
                            <input type="number" id="sale" name="sale" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="soluongtrongkho">Số lượng trong kho:</label>
                            <input type="number" id="soluongtrongkho" name="soluongtrongkho" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="soluongdaban">Số lượng đã bán:</label>
                            <input type="number" id="soluongdaban" name="soluongdaban" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="danhmucsp_id">Danh mục sản phẩm:</label>
                            <input type="number" id="danhmucsp_id" name="danhmucsp_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="hinh">Hình:</label>
                            <input type="file" id="hinh" name="hinh" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                    </form>
                    <button id="closePopupButton" class="btn btn-danger">Đóng</button>
                </div>
                @if ($sanphams->count())
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Mô tả</th>
                            <th>Giá</th>
                            <th>Sale</th>
                            <th>Hình</th>
                            <th>Số lượng trong kho</th>
                            <th>Số lượng đã bán</th>
                            <th>Danh mục sản phẩm</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sanphams as $sanpham)
                        <tr>
                            <td>{{ $sanpham->sanpham_id }}</td>
                            <td>{{ $sanpham->ten }}</td>
                            <td>{{ $sanpham->mota }}</td>
                            <td>{{ $sanpham->gia }}</td>
                            <td>{{ $sanpham->sale }}</td>
                            <td><img src="{{ url('img/product/' . $sanpham->hinh)}}" alt="Hình ảnh sản phẩm"></td>
                            <td>{{ $sanpham->soluongtrongkho }}</td>
                            <td>{{ $sanpham->soluongdaban }}</td>
                            <td>{{ $sanpham->danhmucsp_id }}</td>
                            <td>
                                <button class="btnedit">
                                    <a href="{{ route('admin.sanpham.edit', $sanpham->sanpham_id) }}" class="btn btn-sm btn-primary">Chỉnh sửa</a>
                                </button>

                                <form action="{{ route('admin.sanpham.delete', $sanpham->sanpham_id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <p>Không có sản phẩm nào.</p>
                @endif
                </div>
            </section>

            <section id="accounts-section" class="admin-section">
                <h2>Quản lý tài khoản</h2>
                <!-- Form thêm, sửa, xóa tài khoản -->
                <!-- Bảng hiển thị tài khoản -->

            </section>

            <section id="statistics-section" class="admin-section">
                <h2>Thống kê</h2>

            </section>

        </main>

        <footer>
            <!-- Thêm footer nếu cần -->
        </footer>

    </body>

    </html>
    <script src="{{asset('js/role.js')}}"></script>
    <script>
        // pop-up add sp
        document.getElementById('openPopupButton').addEventListener('click', function() {
            document.getElementById('popupForm').style.display = 'block';
        });

        document.getElementById('closePopupButton').addEventListener('click', function() {
            document.getElementById('popupForm').style.display = 'none';
        });
    </script>