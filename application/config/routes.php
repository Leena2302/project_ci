<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Base';
$route['404_override'] = 'Base/error';
$route['translate_uri_dashes'] = FALSE;

//----loginpage----
$route['user-login'] = 'Auth/login';
$route['login_form'] = 'Auth/validlogin';

//----signuppage----
$route['user-signUp'] = 'Auth/signup';
$route['signup'] = 'Auth/validsignup';


//----Homepage----
$route['homepage'] = 'Base';

//---get data in table---
$route['showdata'] = 'Auth/show';