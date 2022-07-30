<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'PrincipalController::index');
$routes->get('/celulares/usados', 'ListadoController::buscar');
$routes->get('/celulares/nuevos', 'CelNuevoController::buscar');
$routes->get('/accesorios', 'AccesoriosController::buscar');
$routes->get('/variedades/usados', 'OtrosUsadoController::buscar');
$routes->get('/variedades/nuevos', 'OtrosNuevoController::buscar');
$routes->get('/computadores/nuevos', 'ComputadoresController::buscar');
$routes->get('/computadores/usados', 'ComputadoresUController::buscar');
$routes->get('/productos/nuevos', 'NuevosController::buscar');
$routes->get('/productos/usados', 'UsadosController::buscar');
$routes->get('/detalle/producto/(:any)', 'DetalleController::buscar/$1/$2');
$routes->get('/detalle/producto/(:any)', 'DetalleController::buscarpgt/$1');
$routes->post('/pedido/nuevo', 'DetalleController::registrar');
$routes->get('/contacto', 'ContactoController::index');

$routes->get('/cambio_de_contraseña', 'CambioContraseñaController::index');
$routes->get('/inicio_de_sesion', 'LoginController::index');
$routes->get('/inicio_admin', 'LoginAdminController::index');
$routes->get('/registro/productos/nuevo', 'RegistroNuevoController::index');

$routes->get('/registro/productos', 'RegistroController::buscar');
$routes->post('/registro/productos/nuevos', 'RegistroNuevoController::registrar');
$routes->get('/registro/eliminar/(:any)', 'RegistroController::eliminar/$1');
$routes->post('/registro/editar/(:any)', 'RegistroController::editar/$1');
$routes->get('/pedidos', 'PedidosController::buscar');
$routes->get('/preguntas', 'PreguntasController::buscar');

$routes->post('/inicio_admin', 'LoginAdminController::login');
$routes->post('/inicio_de_sesion', 'LoginController::login');
$routes->post('/cerrar_sesion', 'LoginController::salir');

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
