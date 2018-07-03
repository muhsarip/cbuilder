<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends ADMIN_Controller {
 
    function __construct()
    {
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->library('OutputView');
    }
 	
    public function index()
    {
		if (!$this->ion_auth->is_admin())
		{
			return show_error('You must be an administrator to view this page.');
		}
		else
		{
			$output = (object)array('data' => '' , 'output' => '' , 'js_files' => null , 'css_files' => null);
			
			$data['judul'] = '';

			$template = 'admin_template';
			$view = 'menu';
			$this->outputview->output_admin($view, $template, $data, $output);
		}
	}
}