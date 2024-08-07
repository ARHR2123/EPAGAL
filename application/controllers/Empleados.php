<?php

    //Definir la clase cliente (extends es la herencia que se le hace a la clase)

    class Empleados extends  My_Controller{
        //Contructor
        public function __construct(){
            parent::__construct();

            //$this->load->model('Contenedor');
            $this->load->model('Empleado');
            $this->load->model('RegistrarEmpleado');
            $this->load->model('Contenedor');

        }

        public function inicio(){

            //Relacionar con el index
            $this->load->view('Empleados/headerEm');
            $this->load->view('Empleados/inicio');
            $this->load->view('footer');
        }

        public function registroConteEmp(){

            $contenedores=$this->Contenedor->obtenerDatos();

            $data['contenedores']=$contenedores;

            //Relacionar con el index
            $this->load->view('Empleados/headerEm');
            $this->load->view('Empleados/registroConteEmp', $data);
            $this->load->view('footer');
        }

        public function perfil($id_log){

            $data['registrarempleados'] = $this->RegistrarEmpleado->get_empleados($id_log);

            //Relacionar con el index
            $this->load->view('Empleados/headerEm');
            $this->load->view('Empleados/perfil', $data);
            $this->load->view('footer');
        }

        public function reporteContenedor(){

            $recorridos=$this->Empleado->obtenerDatos();

            $data['recorridos']=$recorridos;

            //Relacionar con el index
            $this->load->view('Empleados/headerEm');
            $this->load->view('Empleados/reporteContenedor', $data);
            $this->load->view('footer');
        }

        public function obtenerRuta() {
            $idContenedor = $this->input->post('id_co');
            
            // Obtener los datos del contenedor
            $ruta = $this->Empleado->getRutaByContenedor($idContenedor);
            
            // Enviar la respuesta como JSON
            echo json_encode($ruta);
        }
        public function obtenerCamion() {
            $idPersonal = $this->input->post('cedula_cli');
            
            // Obtener los datos del contenedor
            $persona = $this->Empleado->getRutaByContenedorCamion($idPersonal);
            
            // Enviar la respuesta como JSON
            echo json_encode($persona);
        }
        public function obtenerRutaLat() {
            $idContenedor = $this->input->post('id_co');
            
            // Obtener los datos del contenedor
            $contenedor = $this->Empleado->getRutaByContenedorLat($idContenedor);
            
            // Enviar la respuesta como JSON
            echo json_encode($contenedor);
        }
        public function obtenerRutaLon() {
            $idContenedor = $this->input->post('id_co');
            
            // Obtener los datos del contenedor
            $contenedor = $this->Empleado->getRutaByContenedorLon($idContenedor);
            
            // Enviar la respuesta como JSON
            echo json_encode($contenedor);
        }

        public function obtenerRutaLat2() {
            $idContenedor = $this->input->post('id_co');
            
            // Obtener los datos del contenedor
            $contenedor = $this->Empleado->getRutaByContenedorLat2($idContenedor);
            
            // Enviar la respuesta como JSON
            echo json_encode($contenedor);
        }

        public function obtenerRutaLon2() {
            $idContenedor = $this->input->post('id_co');
            
            // Obtener los datos del contenedor
            $contenedor = $this->Empleado->getRutaByContenedorLon2($idContenedor);
            
            // Enviar la respuesta como JSON
            echo json_encode($contenedor);
        }

        public function obtenerRutaLatCo() {
            $idContenedor = $this->input->post('id_co');
            
            // Obtener los datos del contenedor
            $contenedor = $this->Empleado->getRutaByContenedorLatCo($idContenedor);
            
            // Enviar la respuesta como JSON
            echo json_encode($contenedor);
        }

        public function obtenerRutaLonCo() {
            $idContenedor = $this->input->post('id_co');
            
            // Obtener los datos del contenedor
            $contenedor = $this->Empleado->getRutaByContenedorLonCo($idContenedor);
            
            // Enviar la respuesta como JSON
            echo json_encode($contenedor);
        }

        public function guardarDatos(){
            //Crear un arreglo, en php se define el dato con "$"
            $datos=array(
                'fecha_rep'=>$this->input->post('fecha_rep'),
                'nombre_rep'=>$this->input->post('nombre_rep'),
                'conte_rep'=>$this->input->post('conte_rep'),
                'ruta_rep'=>$this->input->post('ruta_rep'),
                'latitudcr_ru'=>$this->input->post('latitudcr_ru'),
                'longitudcr_ru'=>$this->input->post('longitudcr_ru'),
                'latitudfr_ru'=>$this->input->post('latitudfr_ru'),
                'longitudfr_ru'=>$this->input->post('longitudfr_ru'),
                'latitud_co'=>$this->input->post('latitud_co'),
                'longitud_co'=>$this->input->post('longitud_co'),
                'camion_rep'=>$this->input->post('camion_rep'),
                'descripcion_rep'=>$this->input->post('descripcion_rep'),
                'estado_rep'=>$this->input->post('estado_rep')
            );
            $this->Empleado->insertarRecorrido($datos);
            redirect('Empleados/registroConteEmp');
        }

        public function Reporte($id_rep){

            $data['recorrido']=$this->Empleado->consultarPorId($id_rep);

            //Relacionar con el index
            $this->load->view('Empleados/headerEm');
            $this->load->view('Empleados/Reporte', $data);
            $this->load->view('footer');
        }

        public function view($id)
        {
            // Obtener los detalles del reporte
            $data['recorrido'] = $this->Empleado->getReportDetails($id);

            // Cargar la vista con los datos
            $this->load->view('Empleados/reporteContenedor', $data);
        }

        
        
    }
?>
