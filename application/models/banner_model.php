<?php if(!defined('BASEPATH')) exit('Hack attemp?');
class Banner_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}
	
	function get_homebanner($cat = null){
		// $q = "select * from homebanner_tb order by precedence desc";
		$q = "Select *, homebanner_tb.id as c_id
		from category_tb 
		join homebanner_tb on category_tb.id = homebanner_tb.category_id where category_id = '".esc($cat)."' ORDER by precedence DESC ";
		$query = $this->db->query($q);
		return $query->result_array();
	}

	function get_category_by_parent($id){
		$query = $this -> db -> query(
				"Select *, homebanner_tb.id as c_id
				from category_tb 
				join homebanner_tb on category_tb.id = homebanner_tb.category_id where category_id = '".esc($id)."' 
				 ORDER by precedence DESC"
		);		
		return $query->result_array();	
	}
	
	function get_active_homebanner(){
		$q = "select * from homebanner_tb where active=1 order by precedence desc";
		$query = $this->db->query($q);
		return $query->result_array();
	}

	function get_active_homebanner1($id){
		$q = "select * from homebanner_tb where active=1 and category_id='$id' order by precedence desc";
		$query = $this->db->query($q);
		return $query->result_array();
	}
	
	function get_homebanner_detail($id){
		$q = "select * from homebanner_tb where id='".esc($id)."' ";
		$query = $this->db->query($q);
		return $query->row_array();
	}
	
	function down($id,$category_id){
		$q="select * from homebanner_tb where id='".esc($id)."'";
		
		$query = $this->db->query($q);
		$item= $query->row_array();
		
		$from=mysql_fetch_assoc(mysql_query('select id, category_id, precedence from homebanner_tb where id = '.$id ));
		$to=mysql_fetch_assoc(mysql_query('select id, category_id, precedence from homebanner_tb where precedence < '.$from['precedence'].' and category_id = '.$category_id.' order by precedence desc'));
		
		//echo "from ".$from['id']." precedence ".$from['precedence']." to ".$to['id']." precedence ".$to['precedence'];
		
		
		$sql1 = "update		homebanner_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."' ";
		$sql2 = "update		homebanner_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."' ";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}
	
	function up($id,$category_id){
		$q="select * from homebanner_tb where id='".esc($id)."'";
		
		$query = $this->db->query($q);
		$item= $query->row_array();
		
		$from=mysql_fetch_assoc(mysql_query('select id, category_id, precedence from homebanner_tb where id = '.$id));
		$to=mysql_fetch_assoc(mysql_query('select id, category_id, precedence from homebanner_tb where precedence > '.$from['precedence'].' and category_id = '.$category_id.' order by precedence asc'));
		
		
		//echo "from ".$from['id']." precedence ".$from['precedence']." to ".$to['id']." precedence ".$to['precedence'];
		
		
		$sql1 = "update		homebanner_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."' ";
		$sql2 = "update		homebanner_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."' ";
		
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