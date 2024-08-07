<?php
    class Perfil extends CI_Model {

        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function update_ruta($id_log, $data) {
            $this->db->where('id_log', $id_log);
            $this->db->update('login', $data);
        }

        public function get_contrasena($id_log) {
            $this->db->select('contrasena');
            $query = $this->db->get_where('login', array('id' => $id_log));
            return $query->row()->contrasena;
        }
    }
?>
