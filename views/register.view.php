<?php require ('partials/head.php') ?>
<?php require ('partials/banner.php') ?>
<main>
    <div class="auth-container">
        <h2>Create an Account</h2>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]+" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="form-group terms">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">I agree to the Terms and Conditions</label>
            </div>
            <button type="submit" class="auth-btn">Register</button>
        </form>
        <p>Already have an account? <a href="login.html">Login here</a></p>
    </div>
</main>
<?php require ('partials/footer.php') ?>