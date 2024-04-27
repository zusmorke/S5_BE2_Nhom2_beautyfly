
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll('.nav-link');
    const adminSections = document.querySelectorAll('.admin-section');

    // Ẩn tất cả các phần admin section ban đầu
    adminSections.forEach(function (section) {
        section.style.display = 'none';
    });

    // Hiển thị phần "Quản lý sản phẩm" ban đầu
    document.getElementById('products-section').style.display = 'block';

    navLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            adminSections.forEach(function (section) {
                if (section.getAttribute('id') === targetId + '-section') {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        });
    });
});




