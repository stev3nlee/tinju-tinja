<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Point_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}		
	
	function get_total(){
		$q="select count(*) as totals from user_point_tb";
		$query = $this->db->query($q);
		return $query->row_array();
	
	}
	
	
	function check_share_fact_count($user_id,$fact_id){
			
		$q="select count(*) as total from user_share_fakta_tb where user_id='".esc($user_id)."' and fakta_id='".esc($fact_id)."'";
		$query = $this->db->query($q);
		return $query->row_array();
	}

	function check_share_infografis_count($user_id,$infografis_id){
			
		$q="select count(*) as total from user_share_infografis_tb where user_id='".esc($user_id)."' and infografis_id='".esc($infografis_id)."'";
		$query = $this->db->query($q);
		return $query->row_array();
	}

	function check_share_personal_infografis_count($user_id,$infografis_id){
			
		$q="select count(*) as total from user_share_personal_infografis_tb where user_id='".esc($user_id)."' and infografis_id='".esc($infografis_id)."'";
		$query = $this->db->query($q);
		return $query->row_array();
	}

}