<?php require ('partials/head.php') ?>
<?php require ('partials/banner.php') ?>
<main>
    <div class="hotels-container">
        <aside class="filters">
            <h3>Filter Hotels</h3>
            <form id="filter-form">
                <div class="filter-group">
                    <label>Price Range</label>
                    <input type="range" min="1000" max="20000" step="500" id="price-range">
                    <div class="price-display">
                        <span>1,000 ETB</span>
                        <span id="price-value">10,000 ETB</span>
                        <span>20,000 ETB</span>
                    </div>
                </div>

                <div class="filter-group">
                    <label>Location</label>
                    <select name="location" id="location-filter">
                        <option value="">All Cities</option>
                        <option value="addis-ababa">Addis Ababa</option>
                        <option value="jimma">Jimma</option>
                        <option value="bahir-dar">Bahir Dar</option>
                        <option value="gondar">Gondar</option>
                        <option value="hawassa">Hawassa</option>
                        <option value="lalibela">Lalibela</option>
                        <option value="wolaita-sodo">Wolaita Sodo</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label>Star Rating</label>
                    <div class="star-filter">
                        <input type="checkbox" id="5-star" value="5">
                        <label for="5-star">5 Star</label>
                    </div>
                    <div class="star-filter">
                        <input type="checkbox" id="4-star" value="4">
                        <label for="4-star">4 Star</label>
                    </div>
                    <div class="star-filter">
                        <input type="checkbox" id="3-star" value="3">
                        <label for="3-star">3 Star</label>
                    </div>
                </div>

                <div class="filter-group">
                    <label>Amenities</label>
                    <div class="amenity-filter">
                        <input type="checkbox" id="wifi" value="wifi">
                        <label for="wifi">Free WiFi</label>
                    </div>
                    <div class="amenity-filter">
                        <input type="checkbox" id="pool" value="pool">
                        <label for="pool">Swimming Pool</label>
                    </div>
                    <div class="amenity-filter">
                        <input type="checkbox" id="spa" value="spa">
                        <label for="spa">Spa</label>
                    </div>
                    <div class="amenity-filter">
                        <input type="checkbox" id="restaurant" value="restaurant">
                        <label for="restaurant">Restaurant</label>
                    </div>
                </div>

                <button type="submit" class="apply-filters">Apply Filters</button>
            </form>
        </aside>

        <section class="hotels-list">
            <div class="hotels-header">
                <h2>Available Hotels</h2>
                <select id="sort-hotels">
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                    <option value="rating">Rating</option>
                </select>
            </div>

            <div class="hotel-grid">
                <!-- Hotel cards will be dynamically loaded here with the same URL format -->
                <!-- Example of how the JavaScript should format the links: -->
                <a href="hotel-details.html?hotel=${hotelId}" class="view-details-btn">View Details</a>
            </div>
        </section>
    </div>
</main>
<?php require ('partials/footer.php') ?>