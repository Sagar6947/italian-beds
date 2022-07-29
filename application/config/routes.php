<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about-us'] = 'home/aboutus';


$route['blogdetails/(:any)/(:any)'] = 'home/blog/$1/$2';

