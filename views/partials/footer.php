<footer>
    <div class="footer-content">
        <div class="footer-social">
            <a href="https://facebook.com" target="_blank" class="social-link">
                <i class="fab fa-facebook"></i> Facebook
            </a>
            <a href="https://twitter.com" target="_blank" class="social-link">
                <i class="fab fa-twitter"></i> Twitter
            </a>
            <a href="https://instagram.com" target="_blank" class="social-link">
                <i class="fab fa-instagram"></i> Instagram
            </a>
            <a href="https://linkedin.com" target="_blank" class="social-link">
                <i class="fab fa-linkedin"></i> LinkedIn
            </a>
        </div>
        <p>&copy; <?php echo date('Y'); ?> Marefiya. All rights reserved.</p>
    </div>
</footer>

<!-- Add the theme toggle button -->
<button class="theme-toggle" onclick="toggleTheme()">
    <i class="fas fa-moon"></i>
</button>

<!-- Add the theme toggle script -->
<script>
function toggleTheme() {
    const body = document.body;
    const icon = document.querySelector('.theme-toggle i');
    
    if (body.classList.contains('dark-theme')) {
        body.classList.remove('dark-theme');
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
        localStorage.setItem('theme', 'light');
    } else {
        body.classList.add('dark-theme');
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
        localStorage.setItem('theme', 'dark');
    }
}

// Check saved theme preference
document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme');
    const icon = document.querySelector('.theme-toggle i');
    
    if (savedTheme === 'dark') {
        document.body.classList.add('dark-theme');
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
    }
});
</script>

<script src="/js/theme.js"></script>
<script src="/js/script.js"></script>
<script src="/js/hotel-data.js"></script>
<script src="/js/hotel-details.js"></script>
<script src="/js/hotels.js"></script>
</body>

</html>