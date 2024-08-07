<?php
class RegistrarEmpleados extends My_Controller
{

	public function __construct()
	{
		parent::__construct();


		$this->load->model('RegistrarEmpleado');

	}

	public function registrar()
	{
		$this->load->view('RegistrarEmpleados/registrar');
	}

	public function guardarDatos()
	{
		//Crear un arreglo, en php se define el dato con "$"

		if ($this->input->post()) {
            $data = array(
                'nombre_completo' => $this->input->post('nombre_completo'),
                'email' => $this->input->post('email'),
                'usuario' => $this->input->post('usuario'),
                'contrasena' => password_hash($this->input->post('contrasena'), PASSWORD_BCRYPT)
            );

            if ($this->RegistrarEmpleado->Registro($data)) {
				echo json_encode(['status' => 'success', 'message' => 'Registro exitoso.']);
                redirect('RegistrarEmpleados/bddRegistro');
            } else {
				echo json_encode(['status' => 'error', 'message' => 'Error al registrar el usuario.']);
            }
        } else {
            $this->load->view('guardarDatos');
        }
	}

	public function bddRegistro(){

		$registrarempleados=$this->RegistrarEmpleado->obtenerDatos();

		$data['registrarempleados']=$registrarempleados;

		//Relacionar con el index
		$this->load->view('header');
		$this->load->view('RegistrarEmpleados/bddRegistro',$data);
		$this->load->view('footer');
	}

	public function eliminarDatos($id_log){
		if($this->RegistrarEmpleado->eliminarPorId($id_log)){
			redirect('RegistrarEmpleados/bddRegistro');
		}
		else{
			echo "! Error al eliminar !";
		}
	}

	

}
