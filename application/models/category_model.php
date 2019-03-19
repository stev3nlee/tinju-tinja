<?php if(!defined('BASEPATH')) exit('Hack attemp?');
class Category_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}
	
	function get_category(){
		$q = "select * from category_tb";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	
	function get_active_category(){
		$q = "select * from category_tb where active=1";
		$query = $this->db->query($q);
		return $query->result_array();
	}

	
	
	function get_category_detail($id){
		$q = "select * from category_tb where id='".esc($id)."' ";
		$query = $this->db->query($q);
		return $query->row_array();
	}
	
	function down($id){
		$q="select * from category_tb where id='".esc($id)."'";
		
		$query = $this->db->query($q);
		$item= $query->row_array();
		
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from category_tb where id = '.$id ));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from category_tb where precedence < '.$from['precedence'].' order by precedence desc'));
		
		//echo "from ".$from['id']." precedence ".$from['precedence']." to ".$to['id']." precedence ".$to['precedence'];
		
		
		$sql1 = "update		category_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		category_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}
	
	function up($id){
		$q="select * from category_tb where id='".esc($id)."'";
		
		$query = $this->db->query($q);
		$item= $query->row_array();
		
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from category_tb where id = '.$id));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from category_tb where precedence > '.$from['precedence'].' order by precedence asc'));
		
		
		//echo "from ".$from['id']." precedence ".$from['precedence']." to ".$to['id']." precedence ".$to['precedence'];
		
		
		$sql1 = "update		category_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		category_tb
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