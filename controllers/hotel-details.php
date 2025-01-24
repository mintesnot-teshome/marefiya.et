<?php

// Get hotel ID from URL
$hotelId = $_GET['hotel'] ?? '';

// Get hotel data
$hotels = require 'data/hotels.php';
$hotel = $hotels[$hotelId] ?? null;

// If hotel not found, redirect to hotels page
if (!$hotel) {
    header('Location: /hotels');
    exit();
}

require "views/hotel-details.view.php";