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
$routes->setDefaultController('Trips');
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

// Public Routes

$routes->get('/', 'Trips::index');
$routes->get('/all-trips', 'PageLoader::all_trips');
$routes->get('/trip-categories/(:any)', 'PageLoader::trip_category/$1');
$routes->get('/locations/(:any)', 'PageLoader::location/$1');
$routes->get('/trips/(:any)', 'PageLoader::trip/$1');
$routes->get('/universal-search', 'PageLoader::trip_search');
$routes->get("/about","PageLoader::about");
$routes->get("/contact","PageLoader::contact");
$routes->get("/terms-and-conditions","PageLoader::tnc");
$routes->get("/privacy-policy","PageLoader::privacy_policy");
$routes->post('/create-lead', 'Leads::create_lead');
$routes->get("/trip-search", "PageLoader::search");
$routes->post("/send-contact-email","Leads::send_contact_email");
$routes->get("/rebuild-cache" , "CacheController::rebuild");


$routes->get('/login', 'Users::login');
$routes->post('/authenticate', 'Users::authenticate');
$routes->get('/logout', 'Users::logout');

$routes->get('/trip-categories/(:any)', 'TripCategories::show_trip_category/$1');
$routes->get('/locations/(:any)', 'Locations::show_location/$1');

$routes->post("/create-lead","Leads::create_new");
$routes->get("/lead-created","Leads::created");
$routes->get("/lead-not-created","Leads::not_created");

// Management Routes
$routes->get("/dashboard","Users::dashboard");

$routes->get("/manage/trip-categories","TripCategories::manage");
$routes->get("/add/trip-category","TripCategories::add");
$routes->get("/edit/trip-category/(:any)","TripCategories::edit/$1");

$routes->post("/create/trip-category","TripCategories::create");
$routes->post("/update/trip-category","TripCategories::update");
$routes->post("/delete/trip-categories","TripCategories::delete");

$routes->get("/manage/trips","Trips::manage");
$routes->get("/add/trips","Trips::add");
$routes->get("/edit/trip/(:any)","Trips::edit/$1");

$routes->post("/create/trip","Trips::create");
$routes->post("/update/trip","Trips::update");
$routes->post("/delete/trips","Trips::delete");


$routes->get("/manage/locations","Locations::manage");
$routes->get("/add/locations","Locations::add");
$routes->get("/edit/location/(:any)","Locations::edit/$1");

$routes->post("/locations/create","Locations::create");
$routes->post("/locations/update","Locations::update");
$routes->post("/locations/delete","Locations::delete");




$routes->get("/manage/testimonials","Testimonials::manage");
$routes->get("/create/testimonials","Testimonials::add");
// $routes->get("/testimonials/edit","Testimonials::edit");

$routes->post("/create/testimonials","Testimonials::create");
// $routes->post("/testimonials/update","Testimonials::update");
$routes->post("/testimonials/delete","Testimonials::delete");


$routes->get("/manage/leads","Leads::manage");
$routes->post("/leads/create","Leads::create");
$routes->post("/leads/delete","Leads::delete");



// 

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
