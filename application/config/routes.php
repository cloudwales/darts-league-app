<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// Frontend Page Routing
$route['default_controller'] = 'page';
$route['about'] = 'page/about';
$route['contact'] = 'page/contact';
$route['league_tables'] = 'page/league_tables';
$route['submit_results'] = 'page/submit_results';

// Authentication Routes
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';

// $route['users'] = 'user/index';
// $route['new_user'] = 'user/new_user';
// $route['edit_user/(:num)'] = 'user/edit_user/(:num)';
// $route['delete_user/(:num)'] = 'user/delete_user/(:num)';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
