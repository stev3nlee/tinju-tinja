<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Testimonial_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}	

	function get_testimonial()
	{
		$query = $this->db->query("select * from testimonial_tb");
		return $query->result_array();
	}

	function get_testimonial_detail($id)
	{
		$query = $this->db->query("select * from testimonial_tb where id=".$id);
		return $query->row_array();
	}

	function delete_testimonial($id,$image)
	{
		$query = $this->db->query("delete from testimonial_tb where id=".$id);
	}

	function get_active_testimony()
	{
		$query = $this->db->query("select * from testimonial_tb where status=1");
		return $query->result_array();
	}
}