<?php
/**
* 
*/
class Model_User extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selPerfil(){
		$query = $this->db->query("Select * from perfil");
		return $query->result();
	}

	public function Get(){
		$query = $this->db->query("Select * from usuario u inner join perfil p on u.per_id = p.per_id");
		return $query->result();
	}

	public function Save($idper,$nombres,$apellidos,$correo,$telefono)
	{
		$arraydata = array(
				'per_id' => $idper,
				'usu_nombres' => $nombres,
				'usu_apellidos' => $apellidos,
				'usu_correo' => $correo,
				'usu_telefono' => $telefono
			);
		$this->db->insert('usuario',$arraydata);
		redirect('');
	}

	public function Show($id){
		$consulta = $this->db->query("Select * from usuario u inner join perfil p on u.per_id = p.per_id where u.usu_id = $id");
		return $consulta->result();
	}

	public function Update($id,$idper,$nombres,$apellidos,$correo,$telefono){
		$arraydata = array(
				'per_id' => $idper,
				'usu_nombres' => $nombres,
				'usu_apellidos' => $apellidos,
				'usu_correo' => $correo,
				'usu_telefono' => $telefono
			);
		$this->db->where('usu_id',$id);
		$this->db->Update('usuario',$arraydata);
		redirect('user/edit/'.$id);
	}

	public function Delete($id){
		$this->db->where('usu_id',$id);
		$this->db->delete('usuario');
		redirect('');
	}
}