<?php require 'partials/head.php' ?>
<?php require 'partials/banner.php' ?>
<?php require 'filter-hotels.php' ?>

<main> 
    <div class="hotels-container">
        <aside class="filters">
            <h3>Filter Hotels</h3>
            <form method="POST" action="" id="filter-form">
                <div class="filter-group">
                    <label>Price Range</label>
                    <input type="range" name="price" min="1000" max="20000" step="500" id="price-range"
                        value="<?= htmlspecialchars($_POST['price'] ?? '20000') ?>">
                    <div class="price-display">
                        <span>1,000 ETB</span>
                        <span id="price-value"><?= isset($_POST['price']) ? number_format($_POST['price']) : '20,000' ?>
                            ETB</span>
                        <span>20,000 ETB</span>
                    </div>
                </div>

                <div class="filter-group">
                    <label>Location</label>
                    <select name="location" id="location-filter">
                        <option value="">All Cities</option>
                        <?php foreach ($locations as $value => $name): ?>
                        <option value="<?= $value ?>" <?= ($_POST['location'] ?? '') === $value ? 'selected' : '' ?>>
                            <?= $name ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="filter-group">
                    <label>Star Rating</label>
                    <?php foreach ([5, 4, 3] as $star): ?>
                    <?php $checked = in_array($star, $_POST['stars'] ?? []) ? 'checked' : '' ?>
                    <div class="star-filter">
                        <input type="checkbox" name="stars[]" id="<?= $star ?>-star" value="<?= $star ?>"
                            <?= $checked ?>>
                        <label for="<?= $star ?>-star"><?= $star ?> Star</label>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="filter-group">
                    <label>Amenities</label>
                    <?php foreach ($amenities as $value => $label): ?>
                    <?php $checked = in_array($value, $_POST['amenities'] ?? []) ? 'checked' : '' ?>
                    <div class="amenity-filter">
                        <input type="checkbox" name="amenities[]" id="<?= strtolower(str_replace(' ', '-', $value)) ?>"
                            value="<?= $value ?>" <?= $checked ?>>
                        <label for="<?= strtolower(str_replace(' ', '-', $value)) ?>"><?= $label ?></label>
                    </div>
                    <?php endforeach; ?>
                </div>

                <button type="submit" class="apply-filters">Apply Filters</button>
            </form>
        </aside>
        <section class="hotels-list">
            <div class="hotels-header">
                <h2>Available Hotels</h2>
                <form method="POST" id="sort-form">
                    <select name="sort" id="sort-hotels">
                        <option value="price-low" <?= ($_POST['sort'] ?? '') === 'price-low' ? 'selected' : '' ?>>Price:
                            Low to High</option>
                        <option value="price-high" <?= ($_POST['sort'] ?? '') === 'price-high' ? 'selected' : '' ?>>
                            Price: High to Low</option>
                        <option value="rating" <?= ($_POST['sort'] ?? '') === 'rating' ? 'selected' : '' ?>>Rating 
                        </option>
                    </select>
                </form>
            </div>

            <div class="hotel-grid">
                <?php foreach ($hotels as $hotelId => $hotel): ?>
                <div class="hotel-card">
                    <img src="/src/images/<?= htmlspecialchars($hotel['images'][0]) ?>"
                        alt="<?= htmlspecialchars($hotel['name']) ?>">
                    <h3><?= htmlspecialchars($hotel['name']) ?></h3>
                    <p><?= htmlspecialchars($hotel['location']) ?></p>
                    <p class="price">From <?= number_format($hotel['price']) ?> ETB/night</p>
                    <div class="hotel-preview">
                        <div class="rating"><?= str_repeat('★', $hotel['rating']) ?></div>
                        <p class="amenities">
                            <?= implode(' • ', array_column(array_slice($hotel['amenities'], 0, 3), 'name')) ?>
                        </p>
                    </div>
                    <a href="/hotel-details?hotel=<?= $hotelId ?>" class="view-details-btn">View Details</a>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</main>

<?php require 'partials/footer.php' ?>
