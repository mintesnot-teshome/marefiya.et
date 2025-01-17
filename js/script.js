document.addEventListener('DOMContentLoaded', function() {
    // Get form elements
    const checkInInput = document.getElementById('check-in');
    const checkOutInput = document.getElementById('check-out');
    
    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    checkInInput.min = today;
    
    // Update checkout minimum date when checkin date changes
    checkInInput.addEventListener('change', function() {
        checkOutInput.min = checkInInput.value;
        if(checkOutInput.value && checkOutInput.value < checkInInput.value) {
            checkOutInput.value = checkInInput.value;
        }
    });
}); 