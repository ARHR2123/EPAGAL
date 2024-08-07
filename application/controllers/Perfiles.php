<?php

    //Definir la clase cliente (extends es la herencia que se le hace a la clase)

    class Perfiles extends  My_Controller{
        //Contructor
        public function __construct(){
            parent::__construct();
            
            $this->load->model('Perfil');
            $this->load->model('RegistrarEmpleado');
            
        }
       
        public function perfil($id_log){

            $data['registrarempleados'] = $this->RegistrarEmpleado->get_empleados($id_log);

            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Perfiles/perfil', $data);
            $this->load->view('footer');
        }

        public function modifyDatos() {
            // Obtener el ID del registro del campo oculto
            $id_log = $this->input->post('id_log');
            $nombre_completo = $this->input->post('nombre_completo');
            $email = $this->input->post('email');
            $usuario = $this->input->post('usuario');
            $contrasena = $this->input->post('contrasena');
    
            // Preparar los datos para la actualización
            $data = array(
                'nombre_completo' => $nombre_completo,
                'email' => $email,
                'usuario' => $usuario
            );
    
            // Solo actualizar la contraseña si se proporciona
            if (!empty($contrasena)) {
                $data['contrasena'] = password_hash($contrasena, PASSWORD_BCRYPT);
            }
    
            // Actualizar los datos en la base de datos
            $this->Perfil->update_ruta($id_log, $data);
    
            // Redirigir a la página de perfil o a donde sea necesario
            redirect('Perfiles/perfil/' . $id_log);
        }

        
        
    }
?>