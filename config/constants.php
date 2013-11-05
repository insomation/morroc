<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

define('URL','http://localhost:8888/morroc/');
define('APP',URL.'app');
define('DIR_IMAGES',APP.'/images');
define('DIR_CSS',APP.'/css');
define('DIR_JS',APP.'/js');

define('MENU_HOME', 							1);
define('MENU_PRODUCTS', 						2);
define('MENU_ORDERS', 							3);
define('MENU_SHOP', 							4);
define('MENU_SHOP_FIRSTPAGE', 					5);
define('MENU_SHOP_ABOUTSHOP', 					6);
define('MENU_SHOP_GALLERIRES', 					7);
define('MENU_SHOP_PAYMENT', 					8);
define('MENU_SHOP_CONTACTUS', 					9);
define('MENU_SHOP_SETTING', 					10);
define('MENU_MESSAGE', 							11);
define('MENU_MESSAGE_WRITE', 					12);
define('MENU_MESSAGE_INBOX', 					13);
define('MENU_MESSAGE_SENTBOX', 					14);
define('MENU_STATISTIC', 						15);
define('MENU_STATISTIC_INCOME', 				16);
define('MENU_STATISTIC_TOPVIEWS',				17);
define('MENU_STATISTIC_TOPRATING', 				18);
define('MENU_STATISTIC_BESTSELLER', 			19);
define('MENU_SETTING',				 			20);





/* End of file constants.php */
/* Location: ./application/config/constants.php */