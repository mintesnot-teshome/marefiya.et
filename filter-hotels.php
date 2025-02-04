<?php

// Filter form partial
$locations = [
    'addis-ababa' => 'Addis Ababa',
    'jimma' => 'Jimma',
    'bahir-dar' => 'Bahir Dar',
    'gondar' => 'Gondar',
    'hawassa' => 'Hawassa',
    'lalibela' => 'Lalibela',
    'wolaita-sodo' => 'Wolaita Sodo',
    'arba-minch' => 'Arba Minch'
];

$amenities = [
    'Swimming Pool' => '🏊‍♂️ Swimming Pool',
    'Restaurant' => '🍽️ Restaurant',
    'Spa' => '💆‍♀️ Spa',
    'Free WiFi' => '📶 Free WiFi',
    'Free Parking' => '🅿️ Free Parking',
    'Fitness Center' => '🏋️‍♂️ Fitness Center'
];

// Hotel filtering and sorting logic
function filterAndSortHotels($allHotels) {
    $filteredHotels = $allHotels;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get filter values
        $maxPrice = $_POST['price'] ?? 20000;
        $location = strtolower($_POST['location'] ?? '');
        $selectedStars = array_map('intval', $_POST['stars'] ?? []);
        $selectedAmenities = $_POST['amenities'] ?? [];
        $sort = $_POST['sort'] ?? 'price-low';

        // Filter hotels
        $filteredHotels = array_filter($allHotels, function($hotel) use ($maxPrice, $location, $selectedStars, $selectedAmenities) {
            $priceMatch = $hotel['price'] <= $maxPrice;
            $locationMatch = empty($location) || strpos(strtolower($hotel['location']), str_replace('-', ' ', $location)) !== false;
            $starsMatch = empty($selectedStars) || in_array($hotel['rating'], $selectedStars);
            
            $amenitiesMatch = true;
            if (!empty($selectedAmenities)) {
                $hotelAmenities = array_column($hotel['amenities'], 'name');
                $amenitiesMatch = count(array_intersect($selectedAmenities, $hotelAmenities)) === count($selectedAmenities);
            }
            
            return $priceMatch && $locationMatch && $starsMatch && $amenitiesMatch;
        });

        // Sort hotels
        usort($filteredHotels, function($a, $b) use ($sort) {
            switch ($sort) {
                case 'price-high':
                    return $b['price'] - $a['price'];
                case 'rating':
                    return $b['rating'] - $a['rating'];
                default: // price-low
                    return $a['price'] - $b['price'];
            }
        });
    }

    return $filteredHotels;
}
        // Get all hotels
        $allHotels = require 'data/hotels.php';
        // Get filtered and sorted hotels
        $hotels = filterAndSortHotels($allHotels);
?>

