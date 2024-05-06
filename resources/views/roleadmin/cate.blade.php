<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cate Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<header>
    <h1>Trang chủ ADMIN</h1>
    <a href="{{url('/')}}"><i class="fa fa-home" style="color:#fff; font-size: 25px;"></i></a>
    <nav>
        <ul>
            <li><a href="{{asset('admin')}}" class="nav-link">Quản lý sản phẩm</a></li>
            <li><a href="{{asset('roleadmin/cate')}}" class="nav-link">Danh Mục</a></li>
            <li><a href="{{asset('roleadmin/user')}}" class="nav-link">Quản lý tài khoản</a></li>
            <li><a href="#" class="nav-link">Thống Kê</a></li>
        </ul>
    </nav>
</header>

<main>
    @if (session('success'))
    <div id="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <section id="accounts-section" class="admin-section">
        <h2>Quản lý danh mục</h2>
        <!-- Button to trigger the popup -->
        <button id="openPopupButton" class="btn btn-primary">Thêm danh mục</button>
        <!-- Popup form -->
        <div id="popupForm" style="display: none;">
            <form id="addProductForm" action="{{ route('roleadmin.cate.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="ten">Tên danh mục:</label>
                    <input type="text" id="ten" name="ten" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mota">Mô tả:</label>
                    <textarea id="mota" name="mota" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Thêm danh mục</button>
            </form>
            <button id="closePopupButton" class="btn btn-danger">Đóng</button>
        </div>

        @isset($cates)
        @if ($cates->count())
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Mô Tả</th>
                    <th>Ngày tạo</th>
                    <th>Ngày cập nhật</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cates as $cate)
                <tr>
                    <td>{{ $cate->danhmucsp_id }}</td>
                    <td>{{ $cate->ten }}</td>
                    <td>{{ $cate->mota }}</td>
                    <td>{{ $cate->created_at }}</td>
                    <td>{{ $cate->updated_at }}</td>
                    <td>
                        <button class="edit-button" data-product-id="{{ $cate->danhmucsp_id }}">Edit</button>

                        <form action="{{ route('roleadmin.cate.delete', ['danhmucsp_id' => $cate->danhmucsp_id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">Xóa</button>
                        </form>
                    </td>
                    <!-- Edit form container -->
                    <div id="editFormContainer-{{ $cate->danhmucsp_id }}" class="edit-form-container" style="display: none;">
                        <form action="{{ route('roleadmin.cate.update', $cate->danhmucsp_id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="ten">Tên Danh Mục:</label>
                                <input type="text" id="ten" name="ten" class="form-control" value="{{ $cate->ten }}" required>
                            </div>
                            <div class="form-group">
                                <label for="mota">Mô Tả:</label>
                                <textarea id="mota" name="mota" class="form-control" required>{{ $cate->mota }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
                            <button type="button" class="btn btn-danger" onclick="closeEditForm()">Đóng</button>
                        </form>
                    </div>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>Không có danh mục nào.</p>
        @endif
        @endisset
    </section>

</html>
<script src="{{asset('js/admin.js')}}"></script>