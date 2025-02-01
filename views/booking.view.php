<?php require('partials/head.php') ?>
<?php require('partials/banner.php') ?>

<main class="booking-container">
    <div class="section-header">
        <h2>Book Your Stay</h2>
        <p>Complete the form below to reserve your room</p>
    </div>

    <form class="booking-form" action="#" method="POST">
        <div class="form-row">
            <div class="form-group">
                <label for="check-in">Check-in Date:</label>
                <input type="date" id="check-in" name="check-in" required class="form-control">
            </div>

            <div class="form-group">
                <label for="check-out">Check-out Date:</label>
                <input type="date" id="check-out" name="check-out" required class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="guests">Number of Guests:</label>
                <select id="guests" name="guests" required class="form-control">
                    <option value="">Select guests</option>
                    <option value="1">1 Guest</option>
                    <option value="2">2 Guests</option>
                    <option value="3">3 Guests</option>
                    <option value="4">4 Guests</option>
                </select>
            </div>

            <div class="form-group">
                <label for="room-type">Room Type:</label>
                <select id="room-type" name="room-type" required class="form-control">
                    <option value="">Select room type</option>
                    <option value="standard">Standard Room</option>
                    <option value="deluxe">Deluxe Room</option>
                    <option value="suite">Suite</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required class="form-control"
                    placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required class="form-control"
                    placeholder="Enter your email">
            </div>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required class="form-control"
                placeholder="Enter your phone number">
        </div>

        <div class="form-group payment-section">
            <label>Select Payment Method:</label>
            <div class="payment-options">
                <div class="payment-option">
                    <input type="radio" id="chapa" name="payment_method" value="chapa" required>
                    <label for="chapa" class="payment-label">
                        <img src="src/images/chapa-logo.png" alt="Chapa" class="payment-logo">
                    </label>
                </div>

                <div class="payment-option">
                    <input type="radio" id="santimpay" name="payment_method" value="santimpay" required>
                    <label for="santimpay" class="payment-label">
                        <img src="src/images/santimpay-logo.png" alt="SantimPay" class="payment-logo">
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" id="submit-btn" class="submit-btn">Proceed to Payment</button>
    </form>
</main>

<?php require('partials/footer.php') ?>