<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album_model extends CI_Model {

	public function save($data){
        //$this->db->query("ALTER TABLE bandas AUTO_INCREMENT 1");
        $this->db->insert("album",$data);
    }
    public function getAlbums(){
        $this->db->select("*");
        $this->db->from("album");
        $results= $this->db->get();
        return $results->result();
    }
    public function getAlbum($idalbum){
        $this->db->select("a.*");
        $this->db->from("album a");
        $this->db->where("a.idalbum",$idalbum);
        $result = $this->db->get();
        //return $result->row();
        return $result->row_array();
    }

    public function update($data,$idalbum){
        $this->db->where("idalbum",$idalbum);
        $this->db->update("album",$data);
    }
    public function delete($idalbum){
        $this->db->where("idalbum",$idalbum);
        $this->db->delete("album");
    }
    public function get_bandas(){
        $query = $this->db->get('bandas');
        return $query->result_array();
    }
}
