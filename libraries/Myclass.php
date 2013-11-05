<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Myclass {
    public function get_lang($module=NULL)    {    	$CI =& get_instance();
    	if ($CI->session->userdata('lang') == 'th')    		$CI->lang->load($module, 'th');    	else    		$CI->lang->load($module, 'en');    }        #$lang -> en = english, th = thai    public function set_lang($lang=NULL)    {    	$CI =& get_instance();    	    	$CI->session->set_userdata('lang', $lang);
    	redirect($_SERVER['HTTP_REFERER']);    }}

/* End of file Myclass.php */