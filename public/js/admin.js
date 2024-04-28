
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
// pop-up add sp
document.getElementById('openPopupButton').addEventListener('click', function() {
    document.getElementById('popupForm').style.display = 'block';
});

document.getElementById('closePopupButton').addEventListener('click', function() {
    document.getElementById('popupForm').style.display = 'none';
});

function closeEditForm() {
    document.querySelector('.edit-form-container').style.display = 'none';
}

// Event listener for the edit button
document.querySelectorAll('.edit-button').forEach(button => {
    button.addEventListener('click', function() {
        // Hide all edit form containers
        document.querySelectorAll('.edit-form-container').forEach(container => {
            container.style.display = 'none';
        });

        // Find the corresponding product's edit form container
        let productId = this.dataset.productId;
        let editFormContainer = document.getElementById(`editFormContainer-${productId}`);

        // Show the edit form container for the clicked product
        editFormContainer.style.display = 'block';
    });
});
