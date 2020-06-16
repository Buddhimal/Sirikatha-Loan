<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "Welcome";
$route['404_override'] = '';
$route['add_client'] = "dashboard/add_new_client";
$route['client_list'] = "dashboard/client_list";
$route['client_profile'] = "dashboard/client_profile";
$route['edit_client'] = "dashboard/edit_client";
$route['update_client'] = "dashboard/update_client";
$route['client_group'] = "dashboard/client_group";
$route['group_list'] = "dashboard/group_list";
$route['new_loan'] = "dashboard/new_loan";
$route['add_new_loan'] = "dashboard/save_loan";
$route['loan_list'] = "dashboard/loan_list";
$route['make_payment'] = "dashboard/add_payment";
$route['inactive_client'] = "dashboard/inactive_client";
$route['add_to_blacklist'] = "dashboard/blacklist_client";


/* End of file routes.php */
/* Location: ./application/config/routes.php */