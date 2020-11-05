<?php defined('BASEPATH') OR exit('No direct script access allowed');
class models_train extends CI_Model {
		
        //คำสั่ง Insert ข้อมูลต่างๆลงตาราง
        function insert_Register($result){
			$this->db->insert('note',$result);
        }
        function insert_Educational($result2){
            $this->db->insert('earl_station',$result2);
        }
        function insert_Work($result3){
            $this->db->insert('present',$result3);
        }
        function insert_Login($result4){
            $this->db->insert('terminal',$result4);
        }

        function at(){
            $this->db->select('*');
            $this->db->from('note');
            $this->db->join('earl_station', 'earl_station.T_ID = note.T_ID', 'left');
            $this->db->join('present', 'present.T_ID = note.T_ID', 'left');
            $this->db->join('terminal', 'terminal.T_ID = note.T_ID', 'left');
        
            
            $query = $this->db->get();
            return $query->result();
            }
    }