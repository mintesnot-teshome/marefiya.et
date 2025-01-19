<?php require('partials/head.php') ?>
<?php require('partials/banner.php') ?>
<main class="payment-container">
    <div class="booking-summary">
        <h2>Booking Summary</h2>
        <div class="hotel-summary">
            <img src="" alt="" id="hotel-image">
            <div class="summary-details">
                <h3 id="hotel-name"></h3>
                <p id="room-type"></p>
                <p id="booking-dates"></p>
            </div>
        </div>
        <div class="price-breakdown">
            <div class="price-row">
                <span>Room Rate</span>
                <span id="room-rate"></span>
            </div>
            <div class="price-row">
                <span>Taxes & Fees (15%)</span>
                <span id="taxes"></span>
            </div>
            <div class="price-row total">
                <span>Total</span>
                <span id="total-price"></span>
            </div>
        </div>
    </div>

    <div class="payment-form">
        <h2>Payment Details</h2>
        <form id="payment-form" action="process-payment.php" method="POST">
            <div class="form-group">
                <label for="card-name">Name on Card</label>
                <input type="text" id="card-name" required>
            </div>

            <div class="form-group">
                <label for="card-number">Card Number</label>
                <div class="card-input-wrapper">
                    <input type="text" id="card-number" maxlength="19" required>
                    <div class="card-icons">
                        <i class="fab fa-cc-visa"></i>
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-cc-amex"></i>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="expiry">Expiry Date</label>
                    <input type="text" id="expiry" placeholder="MM/YY" maxlength="5" required>
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" maxlength="4" required>
                </div>
            </div>

            <div class="payment-options">
                <h3>Other Payment Options</h3>
                <div class="option">
                    <input type="radio" id="card" name="payment-method" value="card" checked>
                    <label for="card">Credit/Debit Card</label>
                </div>
                <div class="option">
                    <input type="radio" id="telebirr" name="payment-method" value="telebirr">
                    <label for="telebirr">TeleBirr</label>
                </div>
                <div class="option">
                    <input type="radio" id="cbe-birr" name="payment-method" value="cbe-birr">
                    <label for="cbe-birr">CBE-Birr</label>
                </div>
            </div>

            <button type="submit" class="pay-now-btn">Pay Now</button>
        </form>
    </div>
</main>
<?php require ('partials/footer.php') ?>