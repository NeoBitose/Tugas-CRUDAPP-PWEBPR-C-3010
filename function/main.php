<?php 

include_once 'controllers/Controller.php';
require_once 'routes/route.php';

// Mendapatkan rute yang diminta oleh pengguna
$route = $_SERVER['REQUEST_URI'];

// Basis URL
$baseUrl = '/porthub';

// Memuat daftar rute


// Variabel untuk menyimpan parameter rute
$params = [];

// Menghapus basis URL dari rute yang diminta
$route = str_replace($baseUrl, '', $route);

// Mencocokkan rute dengan pola rute yang sesuai
foreach ($routes as $pattern => $action) {
    // Menambahkan basis URL ke pola rute
    $pattern = $baseUrl . $pattern;

    $pattern = str_replace('/', '\/', $pattern); // Escape karakter slash
    $pattern = preg_replace('/\{([^\/]+)\}/', '([^\/]+)', $pattern); // Ganti parameter dengan pola ekspresi reguler
    if (preg_match('/^' . $pattern . '$/', $route, $matches)) {
        // Mengambil parameter dari URL
        array_shift($matches);
        $params = $matches;
        break;
    }
}

// Mendapatkan tindakan yang sesuai dengan rute
$action = $routes[$route];

// Memecah tindakan menjadi nama kontroler dan metode
list($controllerName, $methodName) = explode('@', $action);

// Memuat kontroler
require_once 'controllers/' . $controllerName . '.php';

// Membuat objek kontroler
$controller = new $controllerName();

// Memanggil metode yang sesuai dengan parameter jika ada
if (!empty($params)) {
    $controller->$methodName(...$params);
} else {
    
    var_dump($controller->$methodName());
}
