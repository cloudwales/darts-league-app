<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// Main Frontend Routing
$route['default_controller'] = 'frontend';
$route['about'] = 'frontend/about';
$route['contact'] = 'frontend/contact';
$route['league_tables'] = 'frontend/league_tables';
$route['submit_results'] = 'frontend/submit_results';

// Authentication Routes
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
