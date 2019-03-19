<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Pulau_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}	

	function get_pulau()
	{
		$query = $this->db->query("select * from pulau_tb order by precedence asc");
		return $query->result_array();
	}
	function get_pulau_active()
	{
		$query = $this->db->query("select * from pulau_tb order by precedence asc");
		return $query->result_array();
	}
	
	function get_pulau_detail($id){
		$query = $this -> db -> query(
				"SELECT * 
				 FROM pulau_tb where id=$id"
		);		
		return $query->row_array();	
	}

	function delete_pulau($id,$image)
	{
		$query = $this->db->query("delete from pulau_tb where id=".$id);
	}

	function down($id){
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from pulau_tb where id = '.$id ));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from pulau_tb where precedence > '.$from['precedence'].' order by precedence asc'));
		
		$sql1 = "update		pulau_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		pulau_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}
	
	function up($id){
		
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from pulau_tb where id = '.$id));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from pulau_tb where precedence < '.$from['precedence'].' order by precedence desc'));
		
		
		$sql1 = "update		pulau_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		pulau_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}

}