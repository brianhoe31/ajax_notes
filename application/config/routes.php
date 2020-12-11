<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "messages";
$route['messages/delete/(:num)'] = "messages/delete_msg/$1";
$route['messages/update/(:num)'] = "messages/update_msg/$1";
$route['index_html'] = "messages/index_html";
$route['404_override'] = '';

//end of routes.php