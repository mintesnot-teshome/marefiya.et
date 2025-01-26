<?php require ('partials/head.php') ?>
<?php require ('partials/banner.php') ?>

<main class="hotel-details">
    <section class="hotel-gallery">
        <div class="main-image">
            <img id="mainImage" src="/src/images/<?= $hotel['images'][0] ?>" alt="<?= $hotel['name'] ?>">
        </div>
        <div class="thumbnail-grid">
            <?php foreach ($hotel['images'] as $image): ?>
            <img src="/src/images/<?= $image ?>" alt="<?= $hotel['name'] ?>" class="thumbnail"
                onclick="changeImage('/src/images/<?= $image ?>')">
            <?php endforeach; ?>
        </div>
    </section>

    <section class="hotel-info">
        <h1><?= $hotel['name'] ?></h1>
        <p class="location">📍 <?= $hotel['location'] ?></p>
        <div class="rating"><?= str_repeat('★', $hotel['rating']) ?></div>
        <p class="price">From <?= number_format($hotel['price']) ?> ETB/night</p>

        <div class="description">
            <p><?= $hotel['description'] ?></p>
        </div>

        <div class="amenities-section">
            <h2>Amenities</h2>
            <div class="amenities-grid">
                <?php foreach ($hotel['amenities'] as $amenity): ?>
                <div class="amenity">
                    <span class="amenity-icon"><?= $amenity['icon'] ?></span>
                    <span><?= $amenity['name'] ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="contact-info">
            <h2>Contact Information</h2>
            <div class="contact-details">
                <p><strong>Phone:</strong> <?= $hotel['contact']['phone'] ?></p>
                <p><strong>Email:</strong> <?= $hotel['contact']['email'] ?></p>
                <p><strong>Website:</strong> <a href="https://<?= $hotel['contact']['website'] ?>"
                        target="_blank"><?= $hotel['contact']['website'] ?></a></p>
            </div>
        </div>

        <div class="book-now-section">
            <button class="book-now-btn">Book Now</button>
        </div>
    </section>
</main>

<script>
function changeImage(src) {
    document.getElementById('mainImage').src = src;
}

const hotelData = <?= json_encode($hotel) ?>;
</script>

<?php require ('partials/footer.php') ?>