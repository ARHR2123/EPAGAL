<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Verificacion extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('Usuario_model'); // Asegúrate de que este modelo exista
        }

        public function check_email() {
            $email = $this->input->post('email');
            
            if ($this->Usuario_model->email_exists($email)) {
                echo json_encode(['exists' => true]);
            } else {
                echo json_encode(['exists' => false]);
            }
        }

        // Mostrar el formulario de verificación

        public function register() {
            // Suponiendo que ya has recibido el correo electrónico del usuario
            $email = $this->input->post('email');
    
            // Generar un código de verificación único y aleatorio
            $verification_code = bin2hex(random_bytes(16)); // Genera un código de 32 caracteres hexadecimales

    
            // Guardar el código de verificación en la base de datos (asegúrate de agregar este campo en tu modelo)
            $this->Usuario_model->save_verification_code($email, $verification_code);
    
            // Configurar y enviar el correo
            $this->email->from('epagal.latacunga@epagal.gob.ec', 'Sistema de Control de Rutas EPAGAL');
            $this->email->to($email);
            $this->email->subject('Código de Verificación');
            $this->email->message('Tu código de verificación es: ' . $verification_code);
    
            if ($this->email->send()) {
                $response = array('status' => 'success', 'message' => 'Se ha enviado un correo de verificación a ' . $email);
            } else {
                $response = array('status' => 'error', 'message' => 'Error al enviar el correo de verificación.');
            }
            echo json_encode($response);
        }

        public function verify_email() {
            // Suponiendo que recibes el código de verificación por POST
            $email = $this->input->post('email');
            $verification_code = $this->input->post('verification_code');
    
            // Verificar el código en la base de datos
            if ($this->Usuario_model->verify_code($email, $verification_code)) {
                $response = array('status' => 'success', 'message' => 'Correo electrónico verificado exitosamente.');

            } else {
                $response = array('status' => 'error', 'message' => 'Código de verificación inválido o ha expirado.');
            }

            echo json_encode($response);
        }
    }
?>
