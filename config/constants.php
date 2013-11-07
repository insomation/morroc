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
define('MENU_PRODUCTS', 						20);
define('MENU_ORDERS', 							30);
define('MENU_SHOP', 							40);
define('MENU_SHOP_FIRSTPAGE', 					41);
define('MENU_SHOP_ABOUTUS', 					42);
define('MENU_SHOP_PROMOTION', 					43);
define('MENU_SHOP_GALLERIRES', 					44);
define('MENU_SHOP_PAYMENT', 					45);
define('MENU_SHOP_CONTACTUS', 					46);
define('MENU_SHOP_SETTING', 					47);
define('MENU_MESSAGE', 							50);
define('MENU_MESSAGE_WRITE', 					51);
define('MENU_MESSAGE_INBOX', 					52);
define('MENU_MESSAGE_SENTBOX', 					53);
define('MENU_STATISTIC', 						60);
define('MENU_STATISTIC_INCOME', 				61);
define('MENU_STATISTIC_TOPVIEWS',				62);
define('MENU_STATISTIC_TOPRATING', 				63);
define('MENU_STATISTIC_BESTSELLER', 			63);
define('MENU_SETTING',				 			65);





/* End of file constants.php */
/* Location: ./application/config/constants.php */