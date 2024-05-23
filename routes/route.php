<?php 

$routes = [];

$routes['GET']['/'] = 'AuthController@viewlogin';
$routes['GET']['/dashboard'] = 'DashboardController@index';
$routes['GET']['/portofolio'] = 'PortofolioController@index';
$routes['GET']['/portofoliocreate'] = 'PortofolioController@formcreate';
$routes['GET']['/portofolioupdate/{id}'] = 'PortofolioController@formupdate';
$routes['POST']['/createporto'] = 'PortofolioController@create';
$routes['POST']['/updateporto/{id}'] = 'PortofolioController@update';
$routes['GET']['/deleteporto/{id}'] = 'PortofolioController@delete';
$routes['GET']['/login'] = 'AuthController@viewlogin';
$routes['GET']['/register'] = 'AuthController@viewregister';
$routes['POST']['/login'] = 'AuthController@login';
$routes['POST']['/register'] = 'AuthController@register';
$routes['GET']['/logout'] = 'AuthController@logout';

?>