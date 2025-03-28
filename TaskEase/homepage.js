function toggleDropdown() {
    const dropdown = document.getElementById('dropdown');
    dropdown.classList.toggle('show');
}

// Close dropdown when clicking outside
window.onclick = function(event) {
    if (!event.target.matches('.nav-item')) {
        const dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

// Add animation to search input on focus
const searchInput = document.querySelector('.search-input');
searchInput.addEventListener('focus', () => {
    searchInput.parentElement.style.transform = 'scale(1.02)';
});
searchInput.addEventListener('blur', () => {
    searchInput.parentElement.style.transform = 'scale(1)';
});