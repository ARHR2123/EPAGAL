<?php

class Personales extends My_Controller {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Cargar el modelo Personal
        $this->load->model('Personal');
        // Cargar la biblioteca de sesiones
        $this->load->library('session');
        // Cargar la biblioteca de validación de formularios
        $this->load->library('form_validation');

        $this->load->model('Vehiculo');
    }

    public function registroP() {

        $vehiculos=$this->Vehiculo->obtenerDatos();

        $data['vehiculos']=$vehiculos;

        // Cargar vistas con datos de sesión
        $this->load->view('header');
        $this->load->view('Personales/registroP', $data);
        $this->load->view('footer');
    }

    public function bddP() {
        // Obtener datos de la base de datos
        $data['personales'] = $this->Personal->obtenerPersonales();
        
        // Cargar vistas con datos
        $this->load->view('header');
        $this->load->view('Personales/bddP', $data);
        $this->load->view('footer');
    }

    public function guardarDatos() {
        // Configurar reglas de validación
        $this->form_validation->set_rules('cedula', 'Cédula', 'required');
        $this->form_validation->set_rules('apellido', 'Apellidos', 'required');
        $this->form_validation->set_rules('nombre', 'Nombres', 'required');
        $this->form_validation->set_rules('email', 'Correo electrónico', 'required|valid_email');
        $this->form_validation->set_rules('fono', 'Teléfono', 'required|max_length[15]');
        $this->form_validation->set_rules('genero', 'Género', 'required');
        $this->form_validation->set_rules('cargo', 'Cargo', 'required');
        $this->form_validation->set_rules('vehiculo', 'Vehiculo');


        if ($this->form_validation->run() == FALSE) {
            // Si la validación falla, recargar el formulario con errores
            $this->registroP();
        } else {
            // Crear un arreglo con los datos del formulario
            $datos = array(
                'cedula_cli' => $this->input->post('cedula'),
                'apellido_cli' => $this->input->post('apellido'),
                'nombre_cli' => $this->input->post('nombre'),
                'email_cli' => $this->input->post('email'),
                'fono_cli' => $this->input->post('fono'),
                'genero_cli' => $this->input->post('genero'),
                'cargo_cli' => $this->input->post('cargo'),
                'vehiculo' => $this->input->post('vehiculo')
            );

            // Insertar los datos en la base de datos
            if ($this->Personal->insertarPersonal($datos)) {
                // Establecer mensaje de sesión en caso de éxito
                $this->session->set_flashdata('success', 'Los datos se han ingresado correctamente.');
            } else {
                // Establecer mensaje de sesión en caso de error
                $this->session->set_flashdata('error', 'Hubo un error al ingresar los datos.');
            }

            redirect('Personales/registroP');
        }
    }

    public function eliminar($id) {
        if ($this->Personal->eliminarPersonal($id)) {
            // Establecer mensaje de sesión en caso de éxito
            $this->session->set_flashdata('success', 'El registro ha sido eliminado correctamente.');
        } else {
            // Establecer mensaje de sesión en caso de error
            $this->session->set_flashdata('error', 'Hubo un error al eliminar el registro.');
        }

        // Redirigir de nuevo a la base de datos de personales
        redirect('Personales/bddP');
    }

    public function verificarCedula()
    {
        $cedula = $this->input->post('cedula_cli');
        
        if ($this->Personal->cedulaExiste($cedula)) {
            echo json_encode(array('existe' => true));
        } else {
            echo json_encode(array('existe' => false));
        }
    }
}
?>
