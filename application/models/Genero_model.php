<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genero_model extends CI_Model {

	function save($data){
        //$this->db->query("ALTER TABLE bandas AUTO_INCREMENT 1");
        $this->db->insert("genero",$data);
    }
    public function getGeneros(){
        $this->db->select("*");
        $this->db->from("genero");
        $results= $this->db->get();
        return $results->result();
    }
    public function getGenero($idgenero){
        $this->db->select("g.*");
        $this->db->from("genero g");
        $this->db->where("g.idgenero",$idgenero);
        $results= $this->db->get();
        return $results->row();
    }
    public function update($data,$idgenero){
        $this->db->where("idgenero",$idgenero);
        $this->db->update("genero",$data);
    }
    public function delete($idgenero){
        $this->db->where("idgenero",$idgenero);
        $this->db->delete("genero");
    }
}

