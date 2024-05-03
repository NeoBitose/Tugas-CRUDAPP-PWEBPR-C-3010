<?php 

$routes = [];

$routes['GET']['/'] = 'DashboardController@index';
$routes['GET']['/portofolio'] = 'PortofolioController@index';
$routes['GET']['/portofoliocreate'] = 'PortofolioController@formcreate';
$routes['GET']['/portofolioupdate/{id}'] = 'PortofolioController@formupdate';
$routes['POST']['/createporto'] = 'PortofolioController@create';
$routes['POST']['/updateporto/{id}'] = 'PortofolioController@update';
$routes['GET']['/deleteporto/{id}'] = 'PortofolioController@delete';
?>