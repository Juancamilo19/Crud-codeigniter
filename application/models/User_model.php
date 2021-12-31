<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function save($data){
        //$this->db->query("ALTER TABLE bandas AUTO_INCREMENT 1");
        $this->db->insert("bandas",$data);
    }

    public function getUsers(){
        $this->db->select("*");
        $this->db->from("bandas");
        $results= $this->db->get();
        return $results->result();
    }
    public function getUser($idbanda){
        $this->db->select("b.*");
        $this->db->from("bandas b");
        $this->db->where("b.idbanda",$idbanda);
        $result = $this->db->get();
        //return $result->row();
        return $result->row_array();
    }

    public function update($data,$idbanda){
        $this->db->where("idbanda",$idbanda);
        $this->db->update("bandas",$data);
    }
    public function delete($idbanda){
        $this->db->where("idbanda",$idbanda);
        $this->db->delete("bandas");
    }
    public function get_genero(){
        $query = $this->db->get('genero');
        return $query->result_array();
    }

}