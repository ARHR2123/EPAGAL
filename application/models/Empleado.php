<?php
    class Empleado extends CI_Model {

        public function getRutaByContenedor($idContenedor) {
            
            // Consultar la base de datos
            $this->db->select('r.zona_ru');
            $this->db->from('contenedores c');
            $this->db->join('ruta r', 'r.id_ru = c.zona_ru');
            $this->db->where('c.id_co', $idContenedor);
            $query = $this->db->get();
            
            // Retornar los resultados
            return $query->row(); // o $query->result(); si esperas más de una fila
        }

        public function getRutaByContenedorCamion($idPersonal) {

            $this->db->select("CONCAT(v.tipo_vehi, ' / ', v.placa_vehi) AS Camion");
            $this->db->from('personales p');
            $this->db->join('vehiculo v', 'p.vehiculo = v.id_vehi');
            $this->db->where('p.cedula_cli', $idPersonal);

            $query = $this->db->get();
            
            // Retornar los resultados
            return $query->row(); // o $query->result(); si esperas más de una fila
        }

        public function getRutaByContenedorLat($idContenedor) {

            $this->db->select('r.latitudcr_ru');
            $this->db->from('contenedores c');
            $this->db->join('ruta r', 'c.zona_ru = r.id_ru');
            $this->db->where('c.id_co', $idContenedor);

            $query = $this->db->get();
            
            // Retornar los resultados
            return $query->row(); // o $query->result(); si esperas más de una fila
        }

        public function getRutaByContenedorLon($idContenedor) {

            $this->db->select('r.longitudcr_ru');
            $this->db->from('contenedores c');
            $this->db->join('ruta r', 'c.zona_ru = r.id_ru');
            $this->db->where('c.id_co', $idContenedor);

            $query = $this->db->get();
            
            // Retornar los resultados
            return $query->row(); // o $query->result(); si esperas más de una fila
        }

        public function getRutaByContenedorLat2($idContenedor) {

            $this->db->select('r.latitudfr_ru');
            $this->db->from('contenedores c');
            $this->db->join('ruta r', 'c.zona_ru = r.id_ru');
            $this->db->where('c.id_co', $idContenedor);

            $query = $this->db->get();
            
            // Retornar los resultados
            return $query->row(); // o $query->result(); si esperas más de una fila
        }

        public function getRutaByContenedorLon2($idContenedor) {

            $this->db->select('r.longitudfr_ru');
            $this->db->from('contenedores c');
            $this->db->join('ruta r', 'c.zona_ru = r.id_ru');
            $this->db->where('c.id_co', $idContenedor);

            $query = $this->db->get();
            
            // Retornar los resultados
            return $query->row(); // o $query->result(); si esperas más de una fila
        }

        public function getRutaByContenedorLatCo($idContenedor) {

            $this->db->select('latitud_co');
            $this->db->from('contenedores');
            $this->db->where('id_co', $idContenedor);

            $query = $this->db->get();
            
            // Retornar los resultados
            return $query->row(); // o $query->result(); si esperas más de una fila
        }

        public function getRutaByContenedorLonCo($idContenedor) {

            $this->db->select('longitud_co');
            $this->db->from('contenedores');
            $this->db->where('id_co', $idContenedor);

            $query = $this->db->get();
            
            // Retornar los resultados
            return $query->row(); // o $query->result(); si esperas más de una fila
        }

        public function getReportDetails($id)
        {
            $this->db->select('id_rep, fecha_rep, nombre_rep, conte_rep, ruta_rep, camion_rep, descripcion_rep, estado_rep');
            $this->db->from('recorrido');
            $this->db->where('id_rep', $id);
            
            $query = $this->db->get();
            
            return $query->row();
        }

        function obtenerDatos(){

            $listadoRecorridos=$this->db->get('recorrido');

            if($listadoRecorridos->num_rows()>0){ 
                return $listadoRecorridos->result(); 
            }
            else{
                return false;
            }
        }

        function consultarPorId($id_rep){
            $this->db->where('id_rep',$id_rep);
            $recorrido=$this->db->get('recorrido');

            if($recorrido->num_rows()>0){ 
                return $recorrido->row(); 
            }
            else{
                return false; 
            }
        }

        function insertarRecorrido($datos){
            $this->db->insert('recorrido',$datos);
        }


    }
?>
