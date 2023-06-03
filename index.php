<?php
$GLOBALS['loggedIn'] = isset($_COOKIE['loggedin_user']);

$routes = [];

$routes['GET']['/^\/users\/(\d+)$/'] = function ($matches) {
    $id = $matches[1];
    // Use the retrieved dynamic "id" value as needed
    echo "User ID: " . $id;
};

// Define routes with request types
$routes['GET']['/^\/$/'] = function () {
    if ($GLOBALS['loggedIn']) {
        include './pages/main.php';
    } else {
        include './pages/home.php';
    }
};

// Define dynamic routes
$routes['GET']['/^\/login$/'] = function () {
    include './pages/login.php';
};

$routes['GET']['/^\/signup$/'] = function () {
    include './pages/signup.php';
};

$routes['GET']['/^\/about$/'] = function () {
    include './pages/about.php';
};

$routes['GET']['/^\/chat$/'] = function () {
    include './pages/chat.php';
};

$routes['GET']['/^\/messages$/'] = function () {
    include './pages/messages.php';
};

$routes['GET']['/^\/pharmacy$/'] = function () {
    include './pages/pharmacy.php';
};

$routes['GET']['/^\/profile$/'] = function () {
    include './pages/profile.php';
};

// Define 404 page
$routes['GET']['/^\/404$/'] = function () {
    echo "Page not found (GET)";
};

$routes['POST']['/^\/404$/'] = function () {
    echo "Page not found (POST)";
};

run();

function run()
{
    global $routes;
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $method = $_SERVER['REQUEST_METHOD'];

    $found = false;

    // Check if a route matches the requested URI
    foreach ($routes[$method] as $route => $callback) {
        if (preg_match($route, $uri, $matches)) {
            $callback($matches);
            $found = true;
            break;
        }
    }

    if (!$found) {
        $notFoundCallback = $routes['GET']['/^\/404$/'];
        $notFoundCallback();
    }
}
?>
