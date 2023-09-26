<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::detail');
$routes->get('profile', 'Home::profile');
$routes->match(['get','post'],'profile', 'Home::profile');
