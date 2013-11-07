<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->myclass->get_lang('user');
	}
	
	public function firstpage()
	{
		$data_nav['nav'] = $this->navigation->get_nav(MENU_SHOP_FIRSTPAGE);
		
		$this->load->view('user/header',$data_nav);
		$this->load->view('user/shop_firstpage');
		$this->load->view('user/footer');
	}
	
	public function aboutus()
	{
		$data_nav['nav'] = $this->navigation->get_nav(MENU_SHOP_ABOUTUS);
		
		$this->load->view('user/header',$data_nav);
		$this->load->view('user/shop_aboutus');
		$this->load->view('user/footer');
	}
	
	public function promotion()
	{
		$data_nav['nav'] = $this->navigation->get_nav(MENU_SHOP_PROMOTION);
		
		$this->load->view('user/header',$data_nav);
		$this->load->view('user/shop_promotion');
		$this->load->view('user/footer');
	}
	
	public function galleries()
	{
		$data_nav['nav'] = $this->navigation->get_nav(MENU_SHOP_GALLERIRES);
		
		$this->load->view('user/header',$data_nav);
		$this->load->view('user/shop_promotion');
		$this->load->view('user/footer');
	}

	public function payment()
	{
		$data_nav['nav'] = $this->navigation->get_nav(MENU_SHOP_PAYMENT);
		
		$this->load->view('user/header',$data_nav);
		$this->load->view('user/shop_payment');
		$this->load->view('user/footer');
	}

	public function contactus()
	{
		$data_nav['nav'] = $this->navigation->get_nav(MENU_SHOP_CONTACTUS);
		
		$this->load->view('user/header',$data_nav);
		$this->load->view('user/shop_contactus');
		$this->load->view('user/footer');
	}

	public function setting()
	{
		$data_nav['nav'] = $this->navigation->get_nav(MENU_SHOP_SETTING);
		
		$this->load->view('user/header',$data_nav);
		$this->load->view('user/shop_setting');
		$this->load->view('user/footer');
	}
	
}

/* End of file user.php */
/* Location: ./app/controllers/user.php */