<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Press_conference_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}	

	function get_press_conference()
	{
		$query = $this->db->query("select * from press_conference_tb order by precedence");
		return $query->result_array();
	}

	function get_press_conference_detail($id)
	{
		$query = $this->db->query("select * from press_conference_tb where id=".$id);
		return $query->row_array();
	}

	function delete_press_conference($id,$image)
	{
		$query = $this->db->query("delete from press_conference_tb where id=".$id);
	}

	function down($id){
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from press_conference_tb where id = '.$id ));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from press_conference_tb where precedence > '.$from['precedence'].' order by precedence asc'));
		
		$sql1 = "update		press_conference_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		press_conference_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}
	
	function up($id){
		
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from press_conference_tb where id = '.$id));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from press_conference_tb where precedence < '.$from['precedence'].' order by precedence desc'));
		
		
		$sql1 = "update		press_conference_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		press_conference_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}

	function get_press_con_active(){
		$query = $this->db->query("select * from press_conference_tb where status=1 order by precedence");
		return $query->result_array();
	}
}