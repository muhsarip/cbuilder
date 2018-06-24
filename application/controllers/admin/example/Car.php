<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends ADMIN_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->library('OutputView');
    }
	public function index()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('t_car');
		$crud->set_subject('Car Lists');

		$crud->set_relation("id_brand",'t_brand','name');

		$crud->set_field_upload('image','assets/img');

		$crud->columns('name','id_brand','price','image');

		$crud->fields('name','id_brand','price','image','description');

		$crud->display_as("id_brand","Brand");



		$crud->unset_read();


		$crud->required_fields('name','id_brand','price','image');

		$output = $crud->render();
		$data['script'] = '';//$this->load->view('admin/population/penduduk');
		$data['script_grocery'] = "";
		$data['judul'] = "Car Lists";
		$data['crumb'] = array( 'Car Lists' => '' );

		$template = 'admin_template';
		$view = 'grocery';
		$this->outputview->output_admin($view, $template, $data, $output);
	}
}