<?php require('partials/head.php') ?>
<?php require('partials/banner.php') ?>
<main>
    <div class="auth-container">
        <h2>Login to Marefiya</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="auth-btn">Login</button>
        </form>
        <p>Don't have an account? <a href="register.html">Register here</a></p>
    </div>
</main>
<?php require('partials/footer.php') ?>