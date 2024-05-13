<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/v-p-metalworks', 'Home::about_us');
$routes->get('/what-we-do', 'Home::what_we_do');
$routes->get('/who-we-are', 'Home::who_we_are');
$routes->get('/why-work-with-us', 'Home::why_work_with_us');
$routes->get('/services', 'Home::services');
$routes->get('/terms-and-conditions', 'Home::terms_and_conditions');
$routes->get('/privacy-policy', 'Home::privacy_policy');
$routes->get('/contact-us', 'Home::contact_us');
// $routes->add('/contact-us','Home::contact_us');

// $routes->group('/contact-us', ['namespace'=> 'App\Modules\NewModules\Controllers']
// , function(){
//     $subroutes->add('', 'Home::contact_us');
//     $subroutes->add('/contact-us', 'Home::contact_us');
// });
