<?php
class Usuarios extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("UsuarioModel");
        $this->load->library('session');
    }

    public function agregar(){
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view("usuarios/agregar");
    }

    public function guardarCambios(){
        $resultado = $this->UsuarioModel->guardarCambios(
            $this->input->post("id"),
            $this->input->post("ident"),
            $this->input->post("tipeuser"),
            $this->input->post("email"),
            md5($this->input->post("password"))
        );
        if($resultado){
            $mensaje = "Usuario actualizado correctamente";
            $clase = "success";
        }else{
            $mensaje = "Este usuario ya existe";
            $clase = "danger";
        }
        $this->session->set_flashdata(array(
            "mensaje" => $mensaje,
            "clase" => $clase,
        ));
        redirect("usuarios/");
    }

    public function editar($id){
        $usuario = $this->UsuarioModel->uno($id);
        if(null === $usuario){
            $this->session->set_flashdata(array(
                "mensaje" => "El usuario que quieres editar no existe",
                "clase" => "danger",
            ));
            redirect("usuarios/");
        }
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view("usuarios/editar", array("usuario" => $usuario));
    }

    public function eliminar($id){
        $resultado = $this->UsuarioModel->eliminar($id);
        if($resultado){
            $mensaje = "usuario eliminado correctamente";
            $clase = "success";
        }else{
            $mensaje = "Error al eliminar el usuario";
            $clase = "danger";
        }
        $this->session->set_flashdata(array(
            "mensaje" => $mensaje,
            "clase" => $clase,
        ));
        $data["nombre"]=$this->session->userdata('ident');
		redirect("usuarios/",$data);
        
    }

    public function index(){

        //validando que la sesion exista
        if (!$this->session->userdata('txtident')) {
            redirect('login');
        }
        
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view("usuarios/listar", array(
            "usuarios" => $this->UsuarioModel->todos()
        ));
    }

    public function guardar(){

        $resultado = $this->UsuarioModel->nuevo(
                $this->input->post("ident"),
                $this->input->post("tipeuser"),
                $this->input->post("email"),
                md5($this->input->post("password"))
                
            );
        if($resultado){
            $mensaje = "Usuario guardado correctamente";
            $clase = "success";
        }else{
            $mensaje = "Este usuario ya existe";
            $clase = "danger";
        }
        $this->session->set_flashdata(array(
            "mensaje" => $mensaje,
            "clase" => $clase,
        ));
        redirect("usuarios/");
    }
}
?>