<?php if(!defined('BASEPATH')) exit('Hack attemp?');
class Fakta_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}
	
	function get_fakta(){
		$q = "select * from fakta_tb order by precedence desc";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	
	function get_active_fakta(){
		$q = "select * from fakta_tb where active=1 order by precedence desc";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	
	function get_fakta_detail($id){
		$q = "select * from fakta_tb where id='".esc($id)."' ";
		$query = $this->db->query($q);
		return $query->row_array();
	}

	function get_share_fakta(){
		$q = " select count(*) as count, a.fakta_id, b.image, b.description_id from user_share_fakta_tb a 
		join fakta_tb b on a.fakta_id = b.id group by a.fakta_id order by count desc ";
		$query = $this->db->query($q);
		return $query->result_array();
	}

	function down($id){
		$q="select * from fakta_tb where id='".esc($id)."'";
		
		$query = $this->db->query($q);
		$item= $query->row_array();
		
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from fakta_tb where id = '.$id ));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from fakta_tb where precedence < '.$from['precedence'].' order by precedence desc'));
		
		//echo "from ".$from['id']." precedence ".$from['precedence']." to ".$to['id']." precedence ".$to['precedence'];
		
		
		$sql1 = "update		fakta_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		fakta_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}
	
	function up($id){
		$q="select * from fakta_tb where id='".esc($id)."'";
		
		$query = $this->db->query($q);
		$item= $query->row_array();
		
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from fakta_tb where id = '.$id));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from fakta_tb where precedence > '.$from['precedence'].' order by precedence asc'));
		
		
		//echo "from ".$from['id']." precedence ".$from['precedence']." to ".$to['id']." precedence ".$to['precedence'];
		
		
		$sql1 = "update		fakta_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		fakta_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}
	
	////
	
	function get_midbanner(){
		$q = "select * from midbanner_tb order by precedence desc";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	
	function get_active_midbanner(){
		$q = "select * from midbanner_tb where active=1 order by precedence desc";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	
	function get_midbanner_detail($id){
		$q = "select * from midbanner_tb where id='".esc($id)."' ";
		$query = $this->db->query($q);
		return $query->row_array();
	}
	
	function down_midbanner($id){
		$q="select * from midbanner_tb where id='".esc($id)."'";
		
		$query = $this->db->query($q);
		$item= $query->row_array();
		
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from midbanner_tb where id = '.$id ));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from midbanner_tb where precedence < '.$from['precedence'].' order by precedence desc'));
		
		//echo "from ".$from['id']." precedence ".$from['precedence']." to ".$to['id']." precedence ".$to['precedence'];
		
		
		$sql1 = "update		midbanner_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		midbanner_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}
	
	function up_banner($id){
		$q="select * from midbanner_tb where id='".esc($id)."'";
		
		$query = $this->db->query($q);
		$item= $query->row_array();
		
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from midbanner_tb where id = '.$id));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from midbanner_tb where precedence > '.$from['precedence'].' order by precedence asc'));
		
		
		//echo "from ".$from['id']." precedence ".$from['precedence']." to ".$to['id']." precedence ".$to['precedence'];
		
		
		$sql1 = "update		midbanner_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		midbanner_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}
	
}?>