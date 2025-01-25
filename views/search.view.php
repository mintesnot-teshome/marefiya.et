<?php require('partials/head.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <section class="search-results">
        <h2 id="search-text">Search Results</h2>
        <?php if (empty($matchingHotels)): ?>
        <p>No hotels found matching your criteria.</p>
        <?php else: ?>
        <div class="hotel-grid">
            <?php foreach ($matchingHotels as $hotelId => $hotel): ?>
            <div class="hotel-card">
                <img src="/src/images/<?= $hotel['images'][0] ?>" alt="<?= $hotel['name'] ?>">
                <h3><?= $hotel['name'] ?></h3>
                <p><?= $hotel['location'] ?></p>
                <p class="price">From <?= number_format($hotel['price']) ?> ETB/night</p>
                <div class="hotel-preview">
                    <div class="rating"><?= str_repeat('★', $hotel['rating']) ?></div>
                    <p class="amenities">
                        <?= implode(' • ', array_column(array_slice($hotel['amenities'], 0, 3), 'name')) ?></p>
                </div>
                <a href="/hotel-details?hotel=<?= $hotelId ?>" class="view-details-btn">View Details</a>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </section>
</main>

<?php require('partials/footer.php') ?>