<?php
    class UsuarioModel extends CI_Model{
        public $id;
        public $ident;
        public $tipeuser;
        public $email;
        public $password;

        public function __construct(){
            $this->load->database();
        }

        public function nuevo($ident, $tipeuser, $email, $password){

            if(!$this->db->get_where("usuario", array("ident" => $ident))->row()){
                $this->ident = $ident;
                $this->tipeuser = $tipeuser;
                $this->email = $email;
                $this->password = $password;
            return $this->db->insert('usuario', $this);
            }else{
                return false;
            }
             
            
        }

        public function guardarCambios($id, $ident, $tipeuser, $email, $password){
            if(!$this->db->get_where("usuario", array("ident" => $ident))->row()){
                $this->id = $id;
                $this->ident = $ident;
                $this->tipeuser = $tipeuser;
                $this->email = $email;
                $this->password = $password;
                return $this->db->update('usuario', $this, array("id" => $id));

            }else{
                return false;
            }
            
        }

        public function todos(){
            return $this->db->get("usuario")->result();
        }

        public function eliminar($id){
            
            return $this->db->delete("usuario", array("id" => $id));
            
            
        }

        public function uno($id){
            return $this->db->get_where("usuario", array("id" => $id))->row();
        }

        
    }
?>