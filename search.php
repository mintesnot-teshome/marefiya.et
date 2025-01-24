<?php

function searchHotels() {
    // Get search parameter
    $location = $_GET['location'] ?? '';

    // Get all hotels data
    $hotels = require 'data/hotels.php';
    
    // Filter hotels by location
    $locationMap = [
        'addis-ababa' => ['sheraton-addis', 'hyatt-addis'],
        'bahir-dar' => ['kuriftu-resort'],
        'gondar' => ['goha-hotel'],
        'hawassa' => ['haile-resort'],
        'lalibela' => ['maribela-hotel'],
        'wolaita-sodo' => ['lewi-resort']
    ];

    // Get matching hotel IDs
    $matchingHotelIds = !empty($location) ? ($locationMap[$location] ?? []) : array_keys($hotels);
    
    // Get matching hotels data
    $matchingHotels = array_intersect_key($hotels, array_flip($matchingHotelIds));
    if (isset($matchingHotels)) {
        require 'views/search.view.php';
    }
    
}