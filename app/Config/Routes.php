<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('publicacao/(:alphanum)', 'Home::getPublicacao/$1');

$routes->get('noticias', 'NoticiasController::index');
$routes->get('noticias_get_all', 'NoticiasController::getAll');
$routes->get('noticias/criar', 'NoticiasController::criar');
$routes->post('noticias/cadastrar', 'NoticiasController::cadastrar');
$routes->get('noticias/editar/(:alphanum)', 'NoticiasController::edit/$1');
$routes->post('noticias/atualizar', 'NoticiasController::atualizar');
$routes->get('noticias/deletar/(:alphanum)', 'NoticiasController::deletar/$1');
$routes->get('noticias/confirma_exclusao/(:alphanum)', 'NoticiasController::confirma_exclusao/$1');


$routes->get('links', 'LinkController::index');
$routes->get('links_get_all', 'LinkController::getAll');
$routes->get('links/criar', 'LinkController::criar');
$routes->post('links/cadastrar', 'LinkController::cadastrar');
$routes->get('links/editar/(:alphanum)', 'LinkController::edit/$1');
$routes->post('links/atualizar', 'LinkController::atualizar');
$routes->get('links/deletar/(:alphanum)', 'LinkController::deletar/$1');
$routes->get('links/confirma_exclusao/(:alphanum)', 'LinkController::confirma_exclusao/$1');


$routes->get('publicacoes', 'PagesController::publicacoes');
$routes->get('departamentos', 'PagesController::departamentos');
$routes->get('quem-somos', 'PagesController::quemSomos');
$routes->get('utilitarios', 'PagesController::utilitarios');
$routes->get('publicacoes_get_all', 'PagesController::getAll');

$routes->get('administrar', 'LoginController::index');

$routes->get('logout', 'LoginController::logout');
$routes->post('logar', 'LoginController::logar');
//$routes->get('add-usuario', 'LoginController::addUsuario');

$routes->get('admin', 'RootController::index');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
