<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['xyz'] = 'Admin/index';
$route['Dashboard'] = 'Serdi_Admin/index';

$route['publish-category/(.+)'] = 'Category/publish_category/$1';
$route['unpublish-category/(.+)'] = 'Category/unpublish_category/$1';
$route['delete-category/(.+)'] = 'Category/delete_category/$1';
$route['edit-category/(.+)'] = 'Category/category_edit/$1';
$route['view-all-category/(.+)'] = 'Category/manage_category';

/////////// USERS////////////

$route['publish-users/(.+)'] = 'Users/publish_users/$1';
$route['unpublish-users/(.+)'] = 'Users/unpublish_users/$1';
$route['delete-users/(.+)'] = 'Users/delete_users/$1';
$route['edit-users/(.+)'] = 'Serdi_Admin/users_edit/$1';
$route['view-all-users/(.+)'] = 'Users/manage_users';

////////////CONTENU////////
//$route['view-all-contenu/(.+)'] = 'Contenu/add_contenu';
$route['edit-contenu/(.+)'] = 'Contenu/contenu_edit/$1';
$route['vue-contenu/(.+)'] = 'Welcome/contenu_vue/$1';
$route['vue-contenu-en/(.+)'] = 'En/contenu_vue_ENG/$1';
$route['vue-contenu-es/(.+)'] = 'ES/contenu_vue_ESP/$1';
$route['publish-contenu/(.+)'] = 'Contenu/publish_contenu/$1';
$route['unpublish-contenu/(.+)'] = 'Contenu/unpublish_contenu/$1';
$route['delete-contenu/(.+)'] = 'Contenu/delete_contenu/$1';

////////////SLIDE////////
//$route['view-all-contenu/(.+)'] = 'Contenu/add_contenu';
$route['edit-slide/(.+)'] = 'Slide/slide_edit/$1';
$route['vue-slide/(.+)'] = 'Welcome/slide_vue/$1';
$route['delete-slide/(.+)'] = 'Slide/delete_slide/$1';

////////////MESSAGE////////
//$route['all_message_info/(.+)'] = 'Message/manage_message';
//$route['vue-slide/(.+)'] = 'Welcome/slide_vue/$1';
$route['read-message/(.+)'] = 'Message/message_read/$1';
$route['delete-message/(.+)'] = 'Message/delete_message/$1';

