<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Video_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}	

	function get_video()
	{
		$query = $this->db->query("select * from video_tb order by precedence");
		return $query->result_array();
	}

	function get_active_video()
	{
		$query = $this->db->query("select * from video_tb where status='1' ORDER BY RAND() limit 1");
		return $query->row_array();
	}

	function get_video_detail($id)
	{
		$query = $this->db->query("select * from video_tb where id=".$id);
		return $query->row_array();
	}

	function delete_video($id)
	{
		$query = $this->db->query("delete from video_tb where id=".$id);
	}

	function down($id){
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from video_tb where id = '.$id ));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from video_tb where precedence > '.$from['precedence'].' order by precedence asc'));
		
		$sql1 = "update		video_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		video_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}
	
	function up($id){
		
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from video_tb where id = '.$id));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from video_tb where precedence < '.$from['precedence'].' order by precedence desc'));
		
		
		$sql1 = "update		video_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		video_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}
}