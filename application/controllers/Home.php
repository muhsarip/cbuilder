<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CLIENT_Controller {

	public function index()
	{
		$data['title'] = "Selamat Datang";
		$this->load->view('page/welcome', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */