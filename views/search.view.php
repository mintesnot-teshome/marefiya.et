<?php require('partials/head.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <section class="search-results">
        <h2>Search Results</h2>
        <?php if (empty($matchingHotels)): ?>
        <p>No hotels found matching your criteria.</p>
        <?php else: ?>
        <div class="hotel-grid">
            <?php foreach ($matchingHotels as $hotelId): ?>
            <div class="hotel-card" id="<?= $hotelId ?>">
                <!-- Hotel cards will be populated via JavaScript -->
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </section>
</main>

<script src="js/hotel-data.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Populate hotel cards using the hotel-data.js data
    const hotelCards = document.querySelectorAll('.hotel-card');

    hotelCards.forEach(card => {
        const hotelId = card.id;
        const hotel = hotels[hotelId];

        if (hotel) {
            card.innerHTML = `
                <img src="/src/images/${hotel.images[0]}" alt="${hotel.name}">
                <h3>${hotel.name}</h3>
                <p>${hotel.location}</p>
                <p class="price">From ${hotel.price.toLocaleString()} ETB/night</p>
                <div class="hotel-preview">
                    <div class="rating">${'★'.repeat(hotel.rating)}</div>
                    <p class="amenities">${hotel.amenities.map(a => a.name).slice(0, 3).join(' • ')}</p>
                </div>
                <a href="/hotel-details?hotel=${hotelId}" class="view-details-btn">View Details</a>
            `;
        }
    });
});
</script>

<?php require('partials/footer.php') ?>