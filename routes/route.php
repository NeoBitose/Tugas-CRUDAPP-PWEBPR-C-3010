<?php 

// $url = $_SERVER['REQUEST_URI'];
// $path = basename(parse_url($url, PHP_URL_PATH));

$routes = [];

// Rute dengan parameter
$routes['/portofolio'] = 'PortofolioController@index';
$routes['/portofoliocreate'] = 'PortofolioController@formcreate';
$routes['/portofolio/{id}'] = 'PortofolioController@detail';

?>