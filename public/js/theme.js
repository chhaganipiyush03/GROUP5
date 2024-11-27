document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.querySelector('.theme-toggle');
    const currentTheme = localStorage.getItem('theme') || 'light';

    // Set initial theme based on localStorage or default to 'light'
    document.documentElement.setAttribute('data-theme', currentTheme);

    // Update button text based on the current theme
    themeToggle.textContent = currentTheme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode';

    // Toggle theme on button click
    themeToggle.addEventListener('click', () => {
        const newTheme = document.documentElement.getAttribute('data-theme') === 'light' ? 'dark' : 'light';
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);

        themeToggle.textContent = newTheme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode';
    });
});
