<?php
// Sample hotel data (in a real application, this would come from a database)
$hotels = [
    'sheraton-addis' => [
        'name' => 'Sheraton Addis',
        'location' => 'Addis Ababa',
        'price' => 15000,
        'rating' => 5,
        'description' => 'Located in the heart of the Ethiopian capital, Sheraton Addis represents African elegance and world-class luxury. The hotel is set in a lush, pristine garden and offers panoramic views of the city.',
        'amenities' => ['Free WiFi', 'Swimming Pool', 'Spa & Wellness Center', 'Multiple Restaurants', '24/7 Room Service', 'Business Center', 'Fitness Center'],
        'images' => ['sheraton-1.jpg', 'sheraton-2.jpg', 'sheraton-3.jpg'],
        'address' => 'Taitu Street, Addis Ababa, Ethiopia',
        'phone' => '+251 11 517 1717',
        'email' => 'info@sheratonaddis.com'
    ],
    // Add other hotel details...
];

$hotel_id = $_GET['id'] ?? '';
$hotel = $hotels[$hotel_id] ?? null;

if (!$hotel) {
    header('Location: index.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $hotel['name']; ?> - Marefiya</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hotel-details.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Marefiya</div>
            <div class="nav-links">
                <a href="index.html">Home</a>
                <a href="hotels.html">Hotels</a>
                <a href="login.html">Login</a>
                <a href="register.html">Register</a>
            </div>
        </nav>
    </header>

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
    </main>

    <footer>
        <p>&copy; 2024 Marefiya. All rights reserved.</p>
    </footer>
</body>
</html> 