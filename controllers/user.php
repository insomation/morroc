<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
       

	public function __construct()
	{
		parent::__construct();
		$this->_get_lang('user');
	}
	
	public function index()
	{
		redirect('user/login');
	}
	
	private function _get_lang($module=NULL)
	{
		if ($this->session->userdata('lang') == 'th')
			$this->lang->load($module, 'th');
		else
			$this->lang->load($module, 'en');
	}
	
	public function login()
	{
		$this->_get_lang('login');
		$this->load->view('user/login');
	}
	
	public function set_th()
	{
		$this->session->set_userdata('lang', 'th');
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function set_en()
	{
		$this->session->set_userdata('lang', 'en');
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function forgot_pass()
	{
		$this->_get_lang('login');
		$this->load->view('user/forgot_pass');
	}
	
	public function home()
	{
		$data['nav'] = $this->navigation->get_nav(1);
		
		$this->load->view('user/header',$data);
		$this->load->view('user/home');
		$this->load->view('user/footer');
	}
	
	public function register()
	{
		$this->load->view('user/register');
	}
	
}

/* End of file user.php */
/* Location: ./app/controllers/user.php */