<?php if(!defined('BASEPATH')) exit('Hack attemp?');
class Admin_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}
	
	function login($username, $password){
		$sql = "select * from admin_tb where username = '".esc($username)."' and password = '".esc($password)."'";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	function get_social(){
		$sql = "select * from social_media_tb";
		$query = $this->db->query($sql);
		return $query->row_array();
	}

}?>