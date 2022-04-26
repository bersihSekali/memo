<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'LoginController::index');

//NomorSurat
$routes->get('/nomorsurat', 'NomorSurat\Home::index');

//NomorSurat - Routes For Admin
$routes->get('/admin/formUser', 'NmorSurat\AdminController::formUser', ['filter' => 'role:SUPERADMIN']);
$routes->get('/admin/listUser', 'NmorSurat\AdminController::listUser', ['filter' => 'role:SUPERADMIN']);
$routes->add('/admin/editUser/(:segment)', 'NmorSurat\AdminController::editUser/$1', ['filter' => 'role:SUPERADMIN']);
$routes->get('/admin/hapusUser/(:segment)', 'NmorSurat\AdminController::hapusUser/$1', ['filter' => 'role:SUPERADMIN']);

//NomorSurat - Routes For User
$routes->get('/user/listSurat', 'NomorSurat\UserController::index');
$routes->get('/user/formSurat', 'NomorSurat\UserController::formSurat');
$routes->add('/user/registSurat', 'NomorSurat\UserController::registSurat');
$routes->get('/user/formEditSurat/(:segment)', 'NomorSurat\UserController::formEditSurat/$1');
$routes->add('/user/editSurat/(:segment)', 'NomorSurat\UserController::editSurat/$1');

//Routes For Update Surat
$routes->add('/user/inKadept/(:segment)', 'NomorSuratUserController::inKadept/$1');
$routes->add('/user/outKadept/(:segment)', 'NomorSuratUserController::outKadept/$1');
$routes->add('/user/inKadiv/(:segment)', 'NomorSurat\UserController::inKadiv/$1');
$routes->add('/user/outKadiv/(:segment)', 'NomorSurat\UserController::outKadiv/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
