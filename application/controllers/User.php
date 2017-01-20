<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_User');
	}

	public function index()
	{
		$data['contenido'] = "user/index";
		$data['selperfil'] = $this->Model_User->selPerfil();
		$data['Listusers'] = $this->Model_User->Get();
		$this->load->view('master_layout',$data);
	}
	public function store(){
		$datos = $this->input->post();

		if (isset($datos)) {
			$txtId = $datos['txtIdper'];
			$txtNombres = $datos['txtNombres'];
			$txtApellidos = $datos['txtApellidos'];
			$txtCorreo = $datos['txtCorreo'];
			$txtTelefono = $datos['txtTelefono'];
			$this->Model_User->Save($txtId,$txtNombres,$txtApellidos,$txtCorreo,$txtTelefono);
		}
	}

	public function edit($id = NULL){
		if ($id != NULL) {
			$data['contenido'] = 'user/edit';
			$data['selperfil'] = $this->Model_User->selPerfil();
			$data['registro'] = $this->Model_User->Show($id);
			$this->load->view('master_layout',$data);
		}else{
			//enviar a index
			redirect('');
		}
	}

	public function update(){
		$datos = $this->input->post();
		if (isset($datos)) {
			$id = $datos['txtid'];
			$txtId = $datos['txtPerid'];
			$txtNombres = $datos['txtNombres'];
			$txtApellidos = $datos['txtApellidos'];
			$txtCorreo = $datos['txtCorreo'];
			$txtTelefono = $datos['txtTelefono'];
			$this->Model_User->Update($id,$txtId,$txtNombres,$txtApellidos,$txtCorreo,$txtTelefono);
		}
	}

	public function destroy($id = NULL){
		if ($id != NULL) {
			$this->Model_User->Delete($id);
		}
	}
}
