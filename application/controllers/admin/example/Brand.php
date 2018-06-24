<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends ADMIN_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->library('OutputView');
    }
	public function index()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('t_brand');
		$crud->set_subject('Brand Lists');


		$crud->columns('name','description');

		$crud->fields('name','description');




		$crud->unset_read();


		$crud->required_fields('name','description');

		$output = $crud->render();
		$data['script'] = '';//$this->load->view('admin/population/penduduk');
		$data['script_grocery'] = "";
		$data['judul'] = "Brand Lists";
		$data['crumb'] = array( 'Brand Lists' => '' );

		$template = 'admin_template';
		$view = 'grocery';
		$this->outputview->output_admin($view, $template, $data, $output);
	}
}