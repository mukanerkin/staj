<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('install', 'Install::index', ['as' => 'installer']);

$routes->get('/', 'Home::index', ['as' => 'page_dashboard']);

$routes->get('ayarlar', 'Settings::index', ['as' => 'page_settings']);

$routes->match(['get', 'post'], 'giris', 'Authentication::login', ['as' => 'page_login']);
$routes->get('cikis', 'Authentication::logout', ['as' => 'page_logout']);

$routes->get('otopark-yonetimi', 'ParkingLots::index', ['as' => 'page_parking-lots-management']);
$routes->post('otopark-kaydet', 'ParkingLots::save_parking_lot', ['as' => 'save_parking-lot']);

$routes->get('personel-yonetimi', 'Staffs::index', ['as' => 'page_staffs-management']);
$routes->post('personel-kaydet', 'Staffs::save_user', ['as' => 'save_staff']);

$routes->get('musteri-yonetimi', 'Customers::index', ['as' => 'page_customers-management']);
$routes->post('musteri-ekle', 'Customers::add_new', ['as' => 'add_customer']);
$routes->get('musteri-ara/(:segment)', 'Customers::customer_search/$1', ['as' => 'search_customer']);

$routes->get('arac-yonetimi', 'Vehicles::index', ['as' => 'page_vehicles-management']);
$routes->post('arac-ekle', 'Vehicles::add_new', ['as' => 'add_vehicle']);
$routes->get('arac-ara/(:segment)', 'Vehicles::vehicle_search/$1', ['as' => 'search_vehicle']);

$routes->get('is-emirleri', 'WorkOrders::index', ['as' => 'page_work-orders']);
$routes->post('is-emri-olustur', 'WorkOrders::create_order', ['as' => 'create_work-order']);
$routes->post('is-emri-bitir', 'WorkOrders::close_order', ['as' => 'close_work-order']);

$routes->get('park-kayitlari', 'ParkingLogs::index', ['as' => 'page_parking-logs']);
$routes->post('park-teslimat', 'ParkingLogs::approve_retrieve', ['as' => 'approve_retrieve']);