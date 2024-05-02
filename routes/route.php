<?php 

// $url = $_SERVER['REQUEST_URI'];
// $path = basename(parse_url($url, PHP_URL_PATH));

$routes = [];

// Rute dengan parameter
$routes['GET']['/portofolio'] = 'PortofolioController@index';
$routes['GET']['/portofoliocreate'] = 'PortofolioController@formcreate';
$routes['GET']['/portofolioupdate/{id}'] = 'PortofolioController@formupdate';
// $routes['GET']['/detailporto/{id}'] = 'PortofolioController@detail';
$routes['POST']['/createporto'] = 'PortofolioController@create';
$routes['POST']['/updateporto/{id}'] = 'PortofolioController@update';
$routes['GET']['/deleteporto/{id}'] = 'PortofolioController@delete';
?>