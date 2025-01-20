<?php require ('partials/head.php') ?>
<?php require ('partials/banner.php') ?>
<main class="hotel-details">
    <div class="hotel-gallery">
        <div class="main-image">
            <img src="images/<?php echo $hotel['images'][0]; ?>" alt="<?php echo $hotel['name']; ?>">
        </div>
        <div class="thumbnail-grid">
            <?php foreach ($hotel['images'] as $image): ?>
            <img src="images/<?php echo $image; ?>" alt="<?php echo $hotel['name']; ?>" class="thumbnail">
            <?php endforeach; ?>
        </div>
    </div>

    <div class="hotel-info">
        <h1><?php echo $hotel['name']; ?></h1>
        <div class="location"><?php echo $hotel['location']; ?></div>
        <div class="rating"><?php echo str_repeat('★', $hotel['rating']); ?></div>
        <p class="description"><?php echo $hotel['description']; ?></p>

        <div class="amenities-section">
            <h2>Amenities</h2>
            <ul class="amenities-list">
                <?php foreach ($hotel['amenities'] as $amenity): ?>
                <li><?php echo $amenity; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>Address:</strong> <?php echo $hotel['address']; ?></p>
            <p><strong>Phone:</strong> <?php echo $hotel['phone']; ?></p>
            <p><strong>Email:</strong> <?php echo $hotel['email']; ?></p>
        </div>

        <div class="booking-section">
            <div class="price">From <?php echo number_format($hotel['price']); ?> ETB/night</div>
            <button class="book-now-btn">Book Now</button>
        </div>
    </div>
    <main>

        <?php require ('partials/footer.php') ?>