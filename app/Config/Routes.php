<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chan/', 'SongController::song');
$routes->post('/save', 'SongController::save');
$routes->post('/insert', 'SongController::insertMusic');
$routes->post('/cons', 'SongController::cons');
$routes->get('/search', 'SongController::searchsong');
$routes->get('/add', 'SongController::playlist');