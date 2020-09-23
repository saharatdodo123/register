<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Register_model extends CI_Model {
		function __construct(){
            parent::__construct();
        }


        function register_insert($data){
			$this->db->insert('personal_information',$data);
		}
		
		function register_insert2($data){
			$this->db->insert('work_address',$data);
		}

		function register_insert3($data){
			$this->db->insert('current_address',$data);
        }
        
		function register_insert4($data){
			$this->db->insert('member_se',$data);
        }
}