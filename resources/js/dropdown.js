document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.querySelector('.user-dropdown');
    const dropdownMenu = dropdown.querySelector('.dropdown-menu');
    const dropdownButton = dropdown.querySelector('button');

    let timeoutId;

    // Show dropdown when hovering over button or dropdown container
    function showDropdown() {
        clearTimeout(timeoutId);
        dropdownMenu.style.display = 'block';
        dropdownMenu.style.opacity = '1';
        dropdownMenu.style.visibility = 'visible';
        dropdownMenu.style.transform = 'translateY(0)';
    }

    // Hide dropdown with delay
    function hideDropdown() {
        timeoutId = setTimeout(() => {
            dropdownMenu.style.opacity = '0';
            dropdownMenu.style.visibility = 'hidden';
            dropdownMenu.style.transform = 'translateY(-10px)';
            setTimeout(() => {
                if (dropdownMenu.style.opacity === '0') {
                    dropdownMenu.style.display = 'none';
                }
            }, 300);
        }, 150);
    }

    // Event listeners for the dropdown container
    dropdown.addEventListener('mouseenter', showDropdown);
    dropdown.addEventListener('mouseleave', hideDropdown);

    // Event listeners for the button specifically
    dropdownButton.addEventListener('mouseenter', showDropdown);
    dropdownButton.addEventListener('mouseleave', hideDropdown);

    // Event listeners for the menu specifically
    dropdownMenu.addEventListener('mouseenter', showDropdown);
    dropdownMenu.addEventListener('mouseleave', hideDropdown);

    // Prevent dropdown from hiding when clicking inside
    dropdownMenu.addEventListener('click', function(e) {
        e.stopPropagation();
    });

    // Hide dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!dropdown.contains(e.target)) {
            hideDropdown();
        }
    });
});
