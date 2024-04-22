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
            <h1>Admin Dashboard</h1>
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
            <section id="news-section" class="admin-section">
                <h2>Quản lý tin tức</h2>
                <!-- Form thêm, sửa, xóa tin tức -->
                <!-- Bảng hiển thị tin tức -->
            </section>

            <!-- Trong section "Quản lý sản phẩm" -->
            <section id="products-section" class="admin-section">
                <h2>Quản lý sản phẩm</h2>
            </section>

            <section id="accounts-section" class="admin-section">
                <h2>Quản lý tài khoản</h2>
                <!-- Form thêm, sửa, xóa tài khoản -->
                <!-- Bảng hiển thị tài khoản -->
            </section>

            <section id="statistics-section" class="admin-section">
                <h2>Thống kê</h2>
                <!-- Hiển thị biểu đồ hoặc số liệu thống kê -->
            </section>
        </main>

        <footer>
            <!-- Thêm footer nếu cần -->
        </footer>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const navLinks = document.querySelectorAll('.nav-link');
                const adminSections = document.querySelectorAll('.admin-section');

                // Ẩn tất cả các phần admin section ban đầu
                adminSections.forEach(function(section) {
                    section.style.display = 'none';
                });

                // Hiển thị phần "Quản lý sản phẩm" ban đầu
                document.getElementById('products-section').style.display = 'block';

                navLinks.forEach(function(link) {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        const targetId = this.getAttribute('href').substring(1);
                        adminSections.forEach(function(section) {
                            if (section.getAttribute('id') === targetId + '-section') {
                                section.style.display = 'block';
                            } else {
                                section.style.display = 'none';
                            }
                        });
                    });
                });
            });
        </script>
    </body>

    </html>