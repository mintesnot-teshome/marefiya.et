<?php

function searchHotels() {
    // Get search parameter
    $location = $_GET['location'] ?? '';

    // For now, we'll just filter by location since we don't have a database
    $hotels = [
        'addis-ababa' => ['sheraton-addis', 'hyatt-addis'],
        'bahir-dar' => ['kuriftu-resort'],
        'gondar' => ['goha-hotel'],
        'hawassa' => ['haile-resort'],
        'lalibela' => ['maribela-hotel'],
        'wolaita-sodo' => ['lewi-resort']
    ];

    // Return matching hotels or all hotels if no location specified
    $matchingHotels = !empty($location) ? ($hotels[$location] ?? []) : array_merge(...array_values($hotels));
    
    if (isset($matchingHotels)) {
        require 'views/search.view.php';
    }
}