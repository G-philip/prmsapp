<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('new');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Login route
$routes->get('/', 'Login::new', ['filter'=> 'guest']);
$routes->add('login/create', 'Login::create');
$routes->add('logout', 'Login::delete');
$routes->add('show/message', 'Login::showLogoutMessage');

//password reset routes
$routes->add('password/forgot', 'Password::forgot');
$routes->add('password/processforgot', 'Password::processForgot');
$routes->add('password/resetsent', 'Password::resetSent');
$routes->add('password/reset/(:hash)', 'Password::reset/$1');
$routes->add('password/processreset/(:any)', 'Password::processReset/$1');
$routes->add('password/resetsuccess', 'Password::resetSuccess');
$routes->add('password/test', 'Password::test');


//profile Routes and userchange password
$routes->add('profile/show', 'Profile::show');
$routes->add('profile/edit', 'Profile::edit');
$routes->add('profile/update', 'Profile::update');
$routes->add('profile/editpassword', 'Profile::editPassword');
$routes->add('profile/updatepassword', 'Profile::updatePassword');
$routes->add('profile/authenticate', 'Profile::authenticate');
$routes->add('profile/processauthenticate', 'Profile::processAuthenticate');
$routes->add('profileimage/edit', 'Profileimage::edit');
$routes->add('profileimage/update', 'Profileimage::update');
$routes->add('profile/image', 'Profile::image');
$routes->add('profileimage/delete', 'Profileimage::delete');



//department route
// $routes->get('admin/department', 'Admin::department');
// //$routes->get('admin/department/show', 'Admin::show');
// $routes->add('admin/department/show/(:num)', 'Admin::show/$1');
// $routes->add("admin/department/new", "Admin::new");
// $routes->add("admin/department/create", "Admin::create");
// $routes->add('admin/department/edit/(:num)', 'Admin::edit/$1');
// $routes->add('admin/department/update/(:num)', 'Admin::update/$1');

//sms routes
$routes->add('admin/sms', 'Admin\Sms::testSMS');

$routes->add('admin/home', 'Admin\Home::index');
$routes->add('admin/email', 'Admin\Home::testEmail');

//Expenses routes
$routes->add('admin/expense', 'Admin\Expenses::index');
$routes->add("admin/expense/new", 'Admin\Expenses::new');
$routes->add("admin/expense/create", 'Admin\Expenses::create');
$routes->add('admin/expense/edit/(:any)', 'Admin\Expenses::edit/$1');
$routes->add('admin/expense/show/(:any)', 'Admin\Expenses::show/$1');
$routes->add('admin/expense/update/(:any)', 'Admin\Expenses::update/$1');
$routes->get('admin/expense/delete/(:any)', 'Admin\Expenses::delete/$1');
$routes->add("admin/expense/data/(:any)", 'Admin\Expenses::fetchExpenseData/$1');


//Expense Category routes
$routes->add('admin/expense/categories', 'Admin\Categories::index');
$routes->add('admin/expense/categories/create', 'Admin\Categories::create');
$routes->add('admin/expense/categories/success', 'Admin\Categories::success');
$routes->add('admin/expense/categories/update', 'Admin\Categories::update');
$routes->add('admin/expense/category/data/(:any)/', 'Admin\Categories::deleteData/$1');
$routes->add('admin/expense/category/delete', 'Admin\Categories::delete');
//Patient routes
$routes->add('admin/patients', 'Admin\Patients::index');
$routes->add("admin/patients/new", 'Admin\Patients::new');
$routes->add("admin/patients/create", 'Admin\Patients::create');
$routes->add('admin/patients/edit/(:any)', 'Admin\Patients::edit/$1/$2/$3');
$routes->add('admin/patients/show/(:any)', 'Admin\Patients::show/$1/2');
$routes->add('admin/patients/update/(:any)', 'Admin\Patients::update/$1/$2');
$routes->add('admin/patients/delete/(:any)', 'Admin\Patients::delete/$1/$2/$3');

//Referal Routes
$routes->add("admin/referal/", 'Admin\Referals::index');
$routes->add("admin/referal/new", 'Admin\Referals::new');
$routes->add("admin/referal/create", 'Admin\Referals::create');
$routes->add("admin/referal/success", 'Admin\Referals::success');
$routes->add('admin/referal/edit/(:any)', 'Admin\Referals::edit/$1');
$routes->add('admin/referal/update/(:any)', 'Admin\Referals::update/$1');
$routes->add('admin/referal/deleteData/(:any)', 'Admin\Referals::deleteData/$1');
$routes->add('admin/referal/delete/', 'Admin\Referals::delete');

//Prescription Routes
$routes->add("admin/prescriptions", 'Admin\Prescriptions::index');
$routes->add("admin/prescription/new", 'Admin\Prescriptions::new');
$routes->add("admin/prescription/create", 'Admin\Prescriptions::create');
$routes->add("admin/prescription/success", 'Admin\Prescriptions::success');
$routes->add("admin/prescription/show/(:any)", 'Admin\Prescriptions::show/$1');
$routes->add("admin/prescription/edit/(:any)", 'Admin\Prescriptions::edit/$1');
$routes->add("admin/prescription/update/(:any)", 'Admin\Prescriptions::update/$1');
$routes->add("admin/prescription/data/(:any)", 'Admin\Prescriptions::patientData/$1');
$routes->add("admin/prescription/deleteData/(:any)", 'Admin\Prescriptions::deleteData/$1');
$routes->add("admin/prescription/delete", 'Admin\Prescriptions::delete');

//doctor
$routes->add("doctor/home", 'Doctor\Report::index');
$routes->add("doctor/report/new", 'Doctor\Report::new');
$routes->add("doctor/report/new", 'Doctor\Report::new');
$routes->add("doctor/report/data/(:any)", 'Doctor\Report::fetchPatientBiodata/$1');
$routes->add("doctor/report/create", 'Doctor\Report::create');

//Users routes
$routes->add('admin/users', 'Admin\Users::index');
$routes->add("admin/users/new", 'Admin\Users::new');
$routes->add("admin/users/create", 'Admin\Users::create');
$routes->add("admin/users/success", 'Admin\Users::success');
$routes->add("account/activation/(:segment)", 'Admin\Users::activate/$1', ['filter'=> 'guest']);
$routes->add('admin/users/show/(:any)', 'Admin\Users::show/$1/$2');
$routes->add('admin/users/edit/(:any)', 'Admin\Users::edit/$1');
$routes->add('admin/users/update/(:any)', 'Admin\Users::update/$1');
$routes->add('admin/users/delete/(:any)', 'Admin\Users::delete/$1');

//staff routes
$routes->get('admin/staff', 'Admin\Staffs::index');
$routes->add('admin/staff/new', 'Admin\Staffs::new');
$routes->add('admin/staff/create', 'Admin\Staffs::create');
$routes->add('admin/staff/success', 'Admin\Staffs::success');
$routes->add('admin/staff/show/(:any)', 'Admin\Staffs::show/$1');
$routes->add('admin/staff/edit/(:any)', 'Admin\Staffs::edit/$1');
$routes->add('admin/staff/update/(:any)', 'Admin\Staffs::update/$1');
$routes->add('admin/staff/delete/(:any)', 'Admin\Staffs::delete/$1');

//Department routes
$routes->add('admin/department', 'Admin\Departments::index');
$routes->add('admin/department/create', 'Admin\Departments::create');
$routes->add('admin/department/success', 'Admin\Departments::success');
$routes->add('admin/department/data/(:any)', 'Admin\Departments::edit/$1');
$routes->add('admin/department/update', 'Admin\Departments::update');
$routes->add('admin/department/deleteData/(:any)/', 'Admin\Departments::edit/$1');
$routes->add('admin/department/delete', 'Admin\Departments::delete');


//appointment routes
$routes->add('admin/appointment', 'Admin\Appointments::index');
$routes->add('admin/appointment/new', 'Admin\Appointments::new');
$routes->add('admin/appointment/create', 'Admin\Appointments::create');
$routes->add('admin/appointment/success', 'Admin\Appointments::success');
$routes->add('admin/appointment/edit/(:any)', 'Admin\Appointments::edit/$1');
$routes->add('admin/appointment/update/(:any)', 'Admin\Appointments::update/$1');
$routes->add('admin/appointment/delete', 'Admin\Appointments::delete');
$routes->add('admin/appointment/deleteData/(:any)', 'Admin\Appointments::deleteData/$1');
$routes->add('admin/appointment/patientData/(:any)', 'Admin\Appointments::getPatientDetails/$1');

//Invoice Routes
$routes->add('admin/invoice', 'Admin\Invoices::index');
$routes->add('admin/invoice/new', 'Admin\Invoices::new');
$routes->add('admin/invoice/show', 'Admin\Invoices::show');
$routes->add('admin/invoice/test', 'Admin\Invoices::test');

//$routes->get('admin/expense/report', 'Admin::expenseReport');
//$routes->add('admin/staff/department/(:num)', 'Admin::getDepartment/$1');
//$routes->add("admin/patients/new", "Admin::newPatient");
//$routes->add("admin/patients/create", "Admin::createPatient");
//$routes->add("admin/staff/department", "Admin::getDepartment");
//$routes->add("admin/staff/edit", "Admin::editStaff");



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
