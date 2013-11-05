<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {
       

	public function __construct()
	{
		parent::__construct();
		$this->myclass->get_lang('user');
	}
	
	public function write()
	{
		$data['nav'] = $this->navigation->get_nav(13);
		
		$this->load->view('user/header',$data);
		$this->load->view('user/message_write');
		$this->load->view('user/footer');
	}
	
	public function inbox()
	{
		$data['nav'] = $this->navigation->get_nav(14);
		
		$this->load->view('user/header',$data);
		$this->load->view('user/message_inbox');
		$this->load->view('user/footer');
	}
	
	public function sentbox()
	{
		$data['nav'] = $this->navigation->get_nav(15);
		
		$this->load->view('user/header',$data);
		$this->load->view('user/message_sentbox');
		$this->load->view('user/footer');
	}
}

/* End of file user.php */
/* Location: ./app/controllers/user.php */