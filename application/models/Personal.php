<?php

class Personal extends CI_Model {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Cargar la base de datos
        $this->load->database();
    }

    // Obtener todos los registros de personales
    public function obtenerPersonales() {
        $query = $this->db->get('personales');
        return $query->result();
    }

    // Insertar un nuevo registro en la base de datos
    public function insertarPersonal($datos) {
        return $this->db->insert('personales', $datos);
    }

    // Eliminar un registro de la base de datos
    public function eliminarPersonal($id) {
        $this->db->where('id', $id);
        return $this->db->delete('personales');
    }

    public function cedulaExiste($cedula)
    {
        $this->db->select('id');
        $this->db->from('personales');
        $this->db->where('cedula_cli', $cedula);
        $query = $this->db->get();
        
        return $query->num_rows() > 0;
    }
}
?>
