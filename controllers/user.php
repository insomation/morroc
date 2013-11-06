<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()	{		parent::__construct();		$this->myclass->get_lang('user');	}

	public function index()
	{
		redirect('user/login');
	}
	
	public function login()
	{
		$this->myclass->get_lang('login');
		$this->load->view('user/login');
	}
	
	public function set_th()
	{
		$this->myclass->set_lang('th');
	}
	
	public function set_en()	{		$this->myclass->set_lang('en');	}
	
	public function forgot_pass()
	{
		$this->_get_lang('login');
		$this->load->view('user/forgot_pass');
	}
	
	public function home()
	{
		$data_nav['nav'] = $this->navigation->get_nav(MENU_HOME);
		$this->load->view('user/header',$data_nav);
		$this->load->view('user/home');
		$this->load->view('user/footer');
	}
	
	public function setting()
	{
		$data_nav['nav'] = $this->navigation->get_nav(MENU_SETTING);
		
		$this->load->view('user/header',$data_nav);
		$this->load->view('user/setting');
		$this->load->view('user/footer');
	}
	
	public function register()
	{
		$this->load->view('user/register');
	}
	
}

/* End of file user.php */
/* Location: ./app/controllers/user.php */