<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class myblog extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

}

/* End of file myblog.php */
/* Location: ./application/controllers/myblog.php */ ?>