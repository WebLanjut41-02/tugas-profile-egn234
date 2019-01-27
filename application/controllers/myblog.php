<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class myblog extends CI_Controller {

	public function index(){
		$this->load->view('home');
	}

  public function foto(){
    $this->load->view('foto');
  }

  public function post(){
    $this->load->view('post');
  }

  public function comment(){
	  $comment = array('comment' => $this->input->post('comment'));
    $this->load->view('comment', $comment);

  }
}

/* End of file myblog.php */
/* Location: ./application/controllers/myblog.php */ ?>