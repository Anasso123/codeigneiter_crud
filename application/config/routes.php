<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['abouts'] = 'Welcome/demo';
$route['home'] = 'PageController/index';
$route['about'] = 'PageController/aboutus';
$route['showText/(:num)'] = 'PageController/showTextInParams/$1';

///////////////////////////////////////////////////////////////

// Employee Route
$route['employee'] = 'Frontend/EmployeeController/index';
$route['employee/add'] = 'Frontend/EmployeeController/create';
$route['employee/store'] = 'Frontend/EmployeeController/store';
$route['employee/edit/(:any)'] = 'Frontend/EmployeeController/edit/$1';
$route['employee/updateData/(:any)'] = 'Frontend/EmployeeController/updateData/$1';
$route['employee/deleteData/(:any)'] = 'Frontend/EmployeeController/deleteData/$1';
$route['employee/confirmDelete/(:any)']['DELETE'] = 'Frontend/EmployeeController/deleteData/$1';