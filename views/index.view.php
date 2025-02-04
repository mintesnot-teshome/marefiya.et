<?php require ('partials/head.php') ?>
<?php require ('partials/banner.php') ?>

<main>
    <section class="hero">
        <h1>Find Your Perfect Stay in Ethiopia</h1>
        <div class="search-container">
            <form action="/search" method="GET">
                <div class="search-grid">
                    <div class="search-item">
                        <label for="location">Location</label>
                        <select name="location" id="location" required>
                            <option value="">Select City</option>
                            <option value="addis-ababa">Addis Ababa</option>
                            <option value="jimma">Jimma</option>
                            <option value="bahir-dar">Bahir Dar</option>
                            <option value="gondar">Gondar</option>
                            <option value="hawassa">Hawassa</option>
                            <option value="arba-minch">Arba Minch</option>
                            <option value="wolaita-sodo">Wolaita Sodo</option>
                        </select>
                    </div>
                    <div class="search-item">
                        <label for="check-in">Check-in</label>
                        <input type="date" id="check-in" name="check-in" required>
                    </div>
                    <div class="search-item">
                        <label for="check-out">Check-out</label>
                        <input type="date" id="check-out" name="check-out" required>
                    </div>
                    <div class="search-item">
                        <label for="rooms">Rooms</label>
                        <select name="rooms" id="rooms" required>
                            <option value="1">1 Room</option>
                            <option value="2">2 Rooms</option>
                            <option value="3">3 Rooms</option>
                            <option value="4+">4+ Rooms</option>
                        </select>
                    </div>
                    <button type="submit" class="search-btn">Search Hotels</button>
                </div>
            </form>
        </div>
    </section>

    <section class="featured-hotels">
        <h2>Featured Hotels</h2>
        <div class="hotel-grid">
            <div class="hotel-card">
                <img src="src\images/sheraton-addis.jpg" alt="Sheraton Addis">
                <h3>Sheraton Addis</h3>
                <p>Addis Ababa</p>
                <p class="price">From 15,000 ETB/night</p>
                <div class="hotel-preview">
                    <div class="rating">★★★★★</div>
                    <p class="amenities">WiFi • Pool • Spa • Restaurant</p>
                </div>
                <a href="/hotel-details?hotel=sheraton-addis" class="view-details-btn">View Details</a>
            </div>
            <div class="hotel-card">
                <img src="src/images/central-jimma-hotel.jpg" alt="Central Jimma Hotel">
                <h3>Central Jimma Hotel</h3>
                <p>Jimma</p>
                <p class="price">From 3,000 ETB/night</p>
                <div class="hotel-preview">
                    <div class="rating">★★★</div>
                    <p class="amenities">Restaurant • Free WiFi • Free Parking</p>
                </div>
                <a href="/hotel-details?hotel=central-jimma-hotel" class="view-details-btn">View Details</a>
            </div>
            <div class="hotel-card">
                <img src="/src/images/haile-resort-hawassa.jpg" alt="Haile Resort">
                <h3>Haile Resort</h3>
                <p>Hawassa</p>
                <p class="price">From 6,500 ETB/night</p>
                <div class="hotel-preview">
                    <div class="rating">★★★★</div>
                    <p class="amenities">WiFi • Pool • Restaurant</p>
                </div>
                <a href="/hotel-details?hotel=haile-resort" class="view-details-btn">View Details</a>
            </div>
            <div class="hotel-card">
                <img src="src/images/hyatt-addis.jpg" alt="Hyatt Regency">
                <h3>Hyatt Regency</h3>
                <p>Addis Ababa</p>
                <p class="price">From 12,000 ETB/night</p>
                <div class="hotel-preview">
                    <div class="rating">★★★★★</div>
                    <p class="amenities">WiFi • Pool • Restaurant</p>
                </div>
                <a href="/hotel-details?hotel=hyatt-addis" class="view-details-btn">View Details</a>
            </div>
            <div class="hotel-card">
                <img src="/src/images/kuriftu-resort.jpg" alt="Kuriftu Resort">
                <h3>Kuriftu Resort</h3>
                <p>Bahir Dar</p>
                <p class="price">From 8,000 ETB/night</p>
                <div class="hotel-preview">
                    <div class="rating">★★★★</div>
                    <p class="amenities">WiFi • Pool • Spa</p>
                </div>
                <a href="/hotel-details?hotel=kuriftu-resort" class="view-details-btn">View Details</a>
            </div>
            <div class="hotel-card">
                <img src="src/images/paradise-lodge.jpg" alt="Paradias Lodge">
                <h3>Paradias Lodge</h3>
                <p>Arba Minch</p>
                <p class="price">From 3,500 ETB/night</p>
                <div class="hotel-preview">
                    <div class="rating">★★★★</div>
                    <p class="amenities">Restaurant • Free WiFi • Free Parking • Swimming Pool</p>
                </div>
                <a href="/hotel-details?hotel=paradise-lodge" class="view-details-btn">View Details</a>
            </div>
        </div>
        <div class="view-all">
            <a href="/hotels" class="view-all-btn">View More Hotels</a>
            <p>Discover our complete collection of hotels across Ethiopia</p>
        </div>

    </section>
</main>
<?php require ('partials/footer.php') ?> 
