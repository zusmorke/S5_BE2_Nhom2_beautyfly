<section id="accounts-section" class="admin-section">
                <h2>Quản lý tài khoản</h2>
                <!-- Form thêm, sửa, xóa tài khoản -->
                <!-- Bảng hiển thị tài khoản -->
                @isset($users)
                @if ($users->count())
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Mật Khẩu</th>
                            <th>Email</th>
                            <th>Quyền</th>
                            <th>Ngày Tạo</th>
                            <th>Cập Nhật</th>
                            <th>Email thay thế</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>    
                            <td>{{ $user->user_id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->create_at }}</td>
                            <td>{{ $user->update_at }}</td>
                            <td>{{ $user->email_verified_at }}</td>
                            <td>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <p>Không có tài khoản nào.</p>
                @endif
                @endisset
            </section>