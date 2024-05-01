document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll('.nav-link');
    const adminSections = document.querySelectorAll('.admin-section');

    // Ẩn tất cả các phần admin section ban đầu, ngoại trừ phần "Quản lý sản phẩm"
    adminSections.forEach(function (section) {
        if (section.id !== 'products-section') {
            section.style.display = 'none';
        }
    });

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