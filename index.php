<?php
session_start();

$routes = [];

$routes['GET']['/^\/profile\/(\d+)$/'] = function ($matches) {
    // Use the retrieved dynamic "id" value as needed
    $doctor_id = $matches[1];
    include './pages/profile.php';
};

// Define routes with request types
$routes['GET']['/^\/$/'] = function () {
    // if (isset($_SESSION['loggedin'])) {
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == "true"){
        include './pages/main.php';
    } else {
        include './pages/home.php';
    }
};

// Define dynamic routes
$routes['GET']['/^\/login$/'] = function () {
    include './pages/login.php';
};
// $routes['POST']['/^\/login$/'] = function () {
//     $_SESSION['loggedin'] = "true";
//     header('Location: /');
// };

$routes['GET']['/^\/doctor$/'] = function () {
    include './pages/doctor.php';
};

$routes['GET']['/^\/signup$/'] = function () {
    include './pages/signup.php';
};

$routes['GET']['/^\/about$/'] = function () {
    include './pages/about.php';
};

$routes['GET']['/^\/messages\/(\d+)$/'] = function ($matches) {
    // Use the retrieved dynamic "id" value as needed
    $contact_id = $matches[1];
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

$routes['GET']['/^\/logout$/'] = function () {
    unset($_SESSION['loggedin']);
    header('Location: /login');
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
