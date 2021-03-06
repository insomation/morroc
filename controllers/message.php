<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {
       
	public function __construct()	{		parent::__construct();		$this->myclass->get_lang('user');	}

	public function write()
	{
		$data_nav['nav'] = $this->navigation->get_nav(MENU_MESSAGE_WRITE);
		
		$this->load->view('user/header',$data_nav);
		$this->load->view('user/message_write');
		$this->load->view('user/footer');
	}
	
	public function inbox()
	{
		$data_nav['nav'] = $this->navigation->get_nav(MENU_MESSAGE_INBOX);
		
		$this->load->view('user/header',$data_nav);
		$this->load->view('user/message_inbox');
		$this->load->view('user/footer');
	}
	
	public function sentbox()	{
		$data_nav['nav'] = $this->navigation->get_nav(MENU_MESSAGE_SENTBOX);
		
		$this->load->view('user/header',$data_nav);		$this->load->view('user/message_sentbox');
		$this->load->view('user/footer');	}
}

/* End of file user.php */
/* Location: ./app/controllers/user.php */