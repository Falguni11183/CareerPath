<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::authenticate');

$routes->get('/register', 'Auth::register');
$routes->post('/register/save', 'Auth::saveRegister');

$routes->get('/dashboard', 'Auth::dashboard');

$routes->get('/logout', 'Auth::logout');

$routes->get('/assessment', 'Assessment::index');

$routes->post('/assessment/submit', 'Assessment::submit');
$routes->get('/result', 'Assessment::result');

$routes->get('/roadmap', 'Roadmap::index');

$routes->get('/roadmap/complete/(:num)', 'Roadmap::complete/$1');
$routes->get('/course/(:num)', 'Course::index/$1');

$routes->get('/profile', 'Profile::index');
$routes->get('/profile/edit', 'Profile::edit');
$routes->post('/profile/update', 'Profile::update');



$routes->get('/admin/students','Admin::students');

$routes->get('/admin/questions','Admin::questions');

$routes->get('admin/login','AdminAuth::login');
$routes->post('admin/check','AdminAuth::checkLogin');

$routes->get('admin/dashboard','Admin::dashboard');

$routes->get('admin/logout','AdminAuth::logout');

$routes->get('admin/questions','Admin::questions');
$routes->get(
'admin/add-question',
'Admin::addQuestion'
);


$routes->post(
'admin/save-question',
'Admin::saveQuestion'
);

$routes->get('admin/edit-question/(:num)', 'Admin::editQuestion/$1');
$routes->post('admin/update-question/(:num)', 'Admin::updateQuestion/$1');
$routes->get('admin/delete-question/(:num)', 'Admin::deleteQuestion/$1');

$routes->get('admin/career-profiles', 'Admin::careerProfiles');
$routes->get('admin/add_career_profile', 'Admin::addCareerProfile');
$routes->post('admin/save-career-profile', 'Admin::saveCareerProfile');

$routes->get('admin/edit-career-profile/(:num)', 'Admin::editCareerProfile/$1');
$routes->post('admin/update-career-profile/(:num)', 'Admin::updateCareerProfile/$1');

$routes->get('admin/delete-career-profile/(:num)', 'Admin::deleteCareerProfile/$1');

$routes->get('admin/users','Admin::users');
$routes->get('admin/delete-user/(:num)','Admin::deleteUser/$1');

$routes->get('admin/results','Admin::results');

$routes->get('admin/delete-result/(:num)','Admin::deleteResult/$1');