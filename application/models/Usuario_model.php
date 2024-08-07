<?php
    class Usuario_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        public function get_usuario($id_log) {
            $query = $this->db->get_where('login', array('id_log' => $id_log));
            return $query->row_array();
        }

        public function verificar_usuario($email, $contrasena) {
            $query = $this->db->get_where('usuarios', array('email' => $email));
            $usuario = $query->row_array();
    
            if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
                return $usuario;
            }
    
            return false;
        }

        public function email_exists($email) {
            $this->db->where('email', $email);
            $query = $this->db->get('login');
            return $query->num_rows() > 0;
        }

        // Guardar el código de verificación en la base de datos
        public function save_verification_code($email, $verification_code) {
            $data = array(
                'verification_code' => $verification_code,
                'email' => $email
            );

            // Aquí deberías tener una tabla `login` con un campo para el código de verificación
            $this->db->where('email', $email);
            $this->db->update('login', $data);
        }

        // Verificar el código de verificación
        public function verify_code($email, $verification_code) {
            $this->db->where('email', $email);
            $this->db->where('verification_code', $verification_code);
            $query = $this->db->get('login');

            if ($query->num_rows() == 1) {
                // Código válido, puedes actualizar el estado del usuario si es necesario
                $this->db->where('email', $email);
                $this->db->update('login', array('verified' => 1)); // Marca el correo como verificado
                return true;
            } else {
                return false;
            }
        }
    }
?>
