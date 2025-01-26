document.getElementById('price-range').addEventListener('input', function(e) {
    document.getElementById('price-value').textContent = 
        new Intl.NumberFormat().format(e.target.value) + ' ETB';
});

// Automatic form submission for sorting
document.getElementById('sort-hotels').addEventListener('change', function() {
    document.getElementById('sort-form').submit();
});