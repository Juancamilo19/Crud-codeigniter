<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cancion_model extends CI_Model {

	function save($data){
        //$this->db->query("ALTER TABLE bandas AUTO_INCREMENT 1");
        $this->db->insert("cancion",$data);
    }
    public function getCanciones(){
        $this->db->select("*");
        $this->db->from("cancion");
        $results= $this->db->get();
        return $results->result();
    }
    public function getCancion($idcancion){
        $this->db->select("c.*");
        $this->db->from("cancion c");
        $this->db->where("c.idcancion",$idcancion);
        
        $results= $this->db->get();
        // return $results->row(); // Objeto
         return $results->row_array(); // Arreglo
    }
    public function update($data,$idcancion){
        $this->db->where("idcancion",$idcancion);
        $this->db->update("cancion",$data);
    }
    public function delete($idcancion){
        $this->db->where("idcancion",$idcancion);
        $this->db->delete("cancion");
    }
    public function get_album(){
        $query = $this->db->get('album');
        return $query->result_array();
    }
}
