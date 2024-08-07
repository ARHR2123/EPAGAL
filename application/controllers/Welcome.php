<?php
class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Cargar el modelo Cliente
		$this->load->model('Welcom');
	}


	public function index()
	{
		$this->load->view('welcome_message');
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

            if ($this->Welcom->Registro($data)) {
                redirect('../index.php');
            } else {
                $this->load->view('guardarDatos', ['error' => 'Error al registrar el usuario']);
            }
        } else {
            $this->load->view('guardarDatos');
        }
	}

	public function inicio() {
        if ($this->input->post()) {
            $usuario = $this->input->post('usuario');
            $contrasena = $this->input->post('contrasena');

            $user = $this->Welcom->login($usuario, $contrasena);

            if ($user) {
                $this->session->set_userdata('id_log', $user->id_log);

				if ($usuario == 'SuperAdmin' && $contrasena = "Alejo159753") {
					redirect('Inicios/login'); 
				}
				elseif ($usuario == 'EPAGAL_admin') {
					redirect('Inicios/login'); 
				}
				else {
					redirect('Empleados/inicio'); 
				}
            } else {
				$this->load->view('welcome_message', ['error' => 'Usuario o contraseña incorrectos']); 
            }
        } else {
            $this->load->view('welcome_message');
        }
    }

}
