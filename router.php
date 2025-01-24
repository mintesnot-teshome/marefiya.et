<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' =>   'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/login' => 'controllers/login.php',
    '/register' => 'controllers/register.php',
    '/hotels' => 'controllers/hotels.php',
    '/hotel-details' => 'controllers/hotel-details.php',
    '/search' => 'controllers/search.php',
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        echo "Page not found";
    }
}


routeToController($uri, $routes);