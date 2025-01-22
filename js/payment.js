document.addEventListener('DOMContentLoaded', function() {
    // Get booking details from URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const hotelId = urlParams.get('hotel');
    const roomType = urlParams.get('room');
    const checkIn = urlParams.get('checkin');
    const checkOut = urlParams.get('checkout');
    const price = parseInt(urlParams.get('price'));

    // Get hotel data
    const hotel = hotels[hotelId];
    if (!hotel) {
        window.location.href = '/hotels';
        return;
    }

    // Update booking summary
    document.getElementById('hotel-image').src = `images/${hotel.images[0]}`;
    document.getElementById('hotel-image').alt = hotel.name;
    document.getElementById('hotel-name').textContent = hotel.name;
    document.getElementById('room-type').textContent = roomType;
    document.getElementById('booking-dates').textContent = `${checkIn} - ${checkOut}`;

    // Calculate prices
    const taxes = price * 0.15;
    const total = price + taxes;

    document.getElementById('room-rate').textContent = `${price.toLocaleString()} ETB`;
    document.getElementById('taxes').textContent = `${taxes.toLocaleString()} ETB`;
    document.getElementById('total-price').textContent = `${total.toLocaleString()} ETB`;

    // Card number formatting
    const cardNumber = document.getElementById('card-number');
    cardNumber.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\s/g, '');
        if (value.length > 0) {
            value = value.match(new RegExp('.{1,4}', 'g')).join(' ');
        }
        e.target.value = value;
    });

    // Expiry date formatting
    const expiry = document.getElementById('expiry');
    expiry.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length >= 2) {
            value = value.slice(0,2) + '/' + value.slice(2);
        }
        e.target.value = value;
    });

    // Form submission
    const form = document.getElementById('payment-form');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Here you would typically send the payment data to your server
        alert('Payment processed successfully!');
        window.location.href = 'booking-confirmation.html';
    });
}); 