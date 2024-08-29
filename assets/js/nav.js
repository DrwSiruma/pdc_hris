// Handle submenus on mobile by toggling display
document.querySelectorAll('.dropdown-submenu > a').forEach(function(element) {
    element.addEventListener('click', function(e) {
        if (window.innerWidth < 992) {
            e.preventDefault();
            let nextEl = this.nextElementSibling;
            if (nextEl && nextEl.classList.contains('dropdown-menu')) {
                nextEl.classList.toggle('show');
            }

            // Prevent parent dropdown from closing
            e.stopPropagation();
        }
    });
});

// Close submenus when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.navbar')) {
        document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
            menu.classList.remove('show');
        });
    }
});

// Ensure dropdowns close when their parent is closed
document.querySelectorAll('.navbar .dropdown').forEach(function(dropdown) {
    dropdown.addEventListener('hidden.bs.dropdown', function () {
        this.querySelectorAll('.dropdown-menu.show').forEach(function(menu) {
            menu.classList.remove('show');
        });
    });
});