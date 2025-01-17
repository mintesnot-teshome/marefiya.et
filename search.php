<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $location = $_GET['location'];
    $checkIn = $_GET['check-in'];
    $checkOut = $_GET['check-out'];
    $rooms = $_GET['rooms'];
    $guests = $_GET['guests'];
    
    // In a real application, you would search in a database
    // For this example, we'll use hardcoded hotel data
    $hotels = [
        'addis-ababa' => [
            [
                'name' => 'Sheraton Addis',
                'price' => 200,
                'rating' => 5,
                'image' => 'images/sheraton.jpg'
            ],
            // Add more hotels...
        ],
        'bahir-dar' => [
            [
                'name' => 'Kuriftu Resort',
                'price' => 150,
                'rating' => 4,
                'image' => 'images/kuriftu.jpg'
            ],
            // Add more hotels...
        ]
    ];
    
    // Return results as JSON
    header('Content-Type: application/json');
    echo json_encode($hotels[$location] ?? []);
}
?> 