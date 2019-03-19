<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class User_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}		
	
    function user_list(){
		$q="select * from user_tb";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	
    function user_detail($id){
		$q="select * from user_tb where id='".esc($id)."'";
		$query = $this->db->query($q);
		return $query->row_array();
	}

	function user_pledge_list(){
		$q="select * from user_tb where pledge=1";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	
	function check_tw_id($twid){
		$q="select * from user_tb where tw_id='".esc($twid)."' ";
		$query = $this->db->query($q);
		return $query->row_array();
	}
	
	function check_fb_id($fbid){
		$q="select * from user_tb where fb_id='".esc($fbid)."' ";
		$query = $this->db->query($q);
		return $query->row_array();
	}
	
	
	function check_registered_email($email){
		$q="select * from user_tb where registered_email='".esc($email)."' ";
		$query = $this->db->query($q);
		return $query->row_array();
	}
		
	function get_user_detail($id){
		$q="select * from user_tb where id='".esc($id)."' ";
		$query = $this->db->query($q);
		return $query->row_array();
	}

	function user_contribution_list(){
		$q="select a.*, b.name as user_name, c.name as daerah_name from contribution_user_tb a 
		join user_tb b on a.user_id=b.id 
		left join daerah_tb c on a.daerah_id=c.id
		order by a.id desc
		";
		$query = $this->db->query($q);
		return $query->result_array();
	}

	function count_contribution()
	{
		$q = "select a.name, a.id, count(b.user_id) as counter from user_tb a 
			join contribution_user_tb b where a.id = b.user_id group by b.user_id
		order by count(user_id) desc";
		$query = $this->db->query($q);
		return $query->result_array();
	}

	function user_infografis_list(){
		$q="select a.*, b.name as user_name, c.name as pulau_name from user_infografis_tb a 
		join user_tb b on a.user_id=b.id 
		left join pulau_tb c on a.pulau_id=c.id
		order by a.id asc
		";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	

	function count_fact_share()
	{
		$q = "select a.name, a.id, count(b.user_id) as counter from user_tb a 
			join user_share_fakta_tb b where a.id = b.user_id group by b.user_id
		order by count(user_id) desc";
		$query = $this->db->query($q);
		return $query->result_array();
	}

	function count_infografis_share()
	{
		$q = "select a.name, a.id, count(b.user_id) as counter from user_tb a 
			join user_share_infografis_tb b where a.id = b.user_id group by b.user_id
		order by count(user_id) desc";
		$query = $this->db->query($q);
		return $query->result_array();
	}

	function count_pdf_download()
	{
		$q = "select a.name, a.id, count(b.daerah_id) as counter from daerah_tb a 
			join user_download_pdf_daerah_tb b where a.id = b.daerah_id group by b.daerah_id
		order by count(daerah_id) desc";
		$query = $this->db->query($q);
		return $query->result_array();
	}

	function count_infografis_created()
	{
		$q = "select a.name, a.id, count(b.user_id) as counter from user_tb a 
			join user_infografis_tb b where a.id = b.user_id group by b.user_id
		order by count(user_id) desc";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	
	function check_share_pledge(){
		
		$q="select * from user_tb where id='".esc($id)."'";
		$query = $this->db->query($q);
		return $query->row_array();
	}
}