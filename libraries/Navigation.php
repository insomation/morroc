<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Navigation {

	var $menu = array();  //The array holding all navigation elements
	
	private function _init()
	{
		$CI =& get_instance();
				
		$CI->myclass->get_lang('user');

		$this->menu = array
		(
				1 => 	array(
						'text'		=> 	$CI->lang->line('user_home'),
						'link'		=> 	base_url(),
						'show_condition'=>	1,
						'parent'	=>	0
				),
				2 => 	array(
						'text'		=> 	$CI->lang->line('user_products'),
						'link'		=> 	base_url() . 'products',
						'show_condition'=>	1,
						'parent'	=>	0
				),
				3 => 	array(
						'text'		=> 	$CI->lang->line('user_orders'),
						'link'		=> 	base_url() . 'orders',
						'show_condition'=>	1,
						'parent'	=>	0
				),
				4 => 	array(
						'text'		=> 	$CI->lang->line('user_shop'),
						'link'		=> 	base_url() . 'shop',
						'show_condition'=>	1,
						'parent'	=>	0
				),
				5 => 	array(
						'text'		=> 	$CI->lang->line('user_shop_firstpage'),
						'link'		=> 	base_url() . 'shop/firstpage',
						'show_condition'=>	1,
						'parent'	=>	4
				),
				6 => 	array(
						'text'		=> 	$CI->lang->line('user_shop_aboutshop'),
						'link'		=> 	base_url() . 'shop/aboutshop',
						'show_condition'=>	1,
						'parent'	=>	4
				),
				7 => 	array(
						'text'		=> 	$CI->lang->line('user_shop_galleries'),
						'link'		=> 	base_url() . 'shop/galleries',
						'show_condition'=>	1,
						'parent'	=>	4
				),
				8 => 	array(
						'text'		=> 	$CI->lang->line('user_shop_aboutshop'),
						'link'		=> 	base_url() . 'shop/aboutshop',
						'show_condition'=>	1,
						'parent'	=>	4
				),
				9 => 	array(
						'text'		=> 	$CI->lang->line('user_shop_payment'),
						'link'		=> 	base_url() . 'shop/payment',
						'show_condition'=>	1,
						'parent'	=>	4
				),
				10 => 	array(
						'text'		=> 	$CI->lang->line('user_shop_contactus'),
						'link'		=> 	base_url() . 'shop/contactus',
						'show_condition'=>	1,
						'parent'	=>	4
				),
				11 => 	array(
						'text'		=> 	$CI->lang->line('user_shop_setting'),
						'link'		=> 	base_url() . 'shop/setting',
						'show_condition'=>	1,
						'parent'	=>	4
				),
				12 => 	array(
						'text'		=> 	$CI->lang->line('user_message'),
						'link'		=> 	base_url() . 'message',
						'show_condition'=>	1,
						'parent'	=>	0
				),
				13 => 	array(
						'text'		=> 	$CI->lang->line('user_message_write'),
						'link'		=> 	base_url() . 'message/write',
						'show_condition'=>	1,
						'parent'	=>	12
				),
				14 => 	array(
						'text'		=> 	$CI->lang->line('user_message_inbox'),
						'link'		=> 	base_url() . 'message/inbox',
						'show_condition'=>	1,
						'parent'	=>	12
				),
				15 => 	array(
						'text'		=> 	$CI->lang->line('user_message_sentbox'),
						'link'		=> 	base_url() . 'message/sentbox',
						'show_condition'=>	1,
						'parent'	=>	12
				),
				16 => 	array(
						'text'		=> 	$CI->lang->line('user_statistic'),
						'link'		=> 	base_url() . 'statistic',
						'show_condition'=>	1,
						'parent'	=>	0
				),
				17 => 	array(
						'text'		=> 	$CI->lang->line('user_statistic_income_outcome'),
						'link'		=> 	base_url() . 'statistic/income',
						'show_condition'=>	1,
						'parent'	=>	16
				),
				18 => 	array(
						'text'		=> 	$CI->lang->line('user_statistic_topviews'),
						'link'		=> 	base_url() . 'statistic/topviews',
						'show_condition'=>	1,
						'parent'	=>	16
				),
				19 => 	array(
						'text'		=> 	$CI->lang->line('user_statistic_toprating'),
						'link'		=> 	base_url() . 'statistic/toprating',
						'show_condition'=>	1,
						'parent'	=>	16
				),
				20 => 	array(
						'text'		=> 	$CI->lang->line('user_statistic_best_sale'),
						'link'		=> 	base_url() . 'statistic/bestsale',
						'show_condition'=>	1,
						'parent'	=>	16
				),
				21 => 	array(
						'text'		=> 	$CI->lang->line('user_setting'),
						'link'		=> 	base_url() . 'user/setting',
						'show_condition'=>	1,
						'parent'	=>	0
				)
		);
	}
	

	private function _get_text($menu_id)
	{
		return $this->menu[$menu_id]['text'];
	}
	
	private function _get_link($menu_id)
	{
		return $this->menu[$menu_id]['link'];
	}
	
	private function _hasParent($menu_id)
	{
		if ( $this->menu[$menu_id]['show_condition'] && $this->menu[$menu_id]['parent'] != 0 ) {
			return TRUE;
		}
	
		return FALSE;
	}
	
    public function get_nav($menu_id)
    {
    	$this->_init();
    	
    	$menu_curr = $menu_id;
    	$out = '';
    	
    	do {
    		if ($this->_hasParent($menu_curr))
    		{
    			$out = '<li><a href="'.$this->_get_link($menu_curr).'">'.$this->_get_text($menu_curr).'</a></li>'.$out;
    			$menu_curr = $this->menu[$menu_curr]['parent'];
    		}
    	}
    	while ( $this->_hasParent($menu_curr) );
    	
    	$out = '<li><a href="'.$this->_get_link($menu_curr).'">'.$this->_get_text($menu_curr).'</a></li>'.$out;

    	return $out;
    }

}

/* End of file Navigation.php */