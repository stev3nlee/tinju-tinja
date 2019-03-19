<?php if(!defined('BASEPATH')) exit('Hack attemp?');
class about_us_category_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function get_list(){
        $query = $this->db->order_by("id","asc")
            ->get('about_us_category_tb');
        return $query->result_array();
    }

    function check_categories($name,$name_en){
        $query = $this->db->where('name',$name)
                ->or_where('name_en', $name_en)
                ->get('about_us_category_tb') ;
        return $query->result_array();
    }

    function insert($data){
        $this->db->insert('about_us_category_tb', $data);
    }
    function get_list_edit($id){
        $query = $this->db->where('id',$id)
            ->get('about_us_category_tb') ;
        return $query->row_array();
    }

    function update($data,$id){
        $this->db->where('id', $id);
        $this->db->update('about_us_category_tb', $data);
    }
    function check_categories_same($categories_name,$id){
        $query = $this->db->where('categories',$categories_name)
            ->where('id',$id)
            ->get('about_us_category_tb') ;
        return $query->result_array();
    }
    function delete($id){
        $this->db->delete('about_us_category_tb', array('id' => $id));
    }

    function active($id)
    {
        $this->db->where('id',$id);
        $this->db->set('status', 1, FALSE);
        $this->db->update('about_us_category_tb');
    }

    function inactive($id)
    {

        $this->db->where('id',$id);
        $this->db->set('status', 0, FALSE);
        $this->db->update('about_us_category_tb');
    }

    function get_active_category(){
        $q = "select * from about_us_category_tb where status=1 order by id asc";
        $query = $this->db->query($q);
        return $query->result_array();
    }
	
	function get_list_edit2($alias){
        $q = "select * from about_us_category_tb where alias='".esc($alias)."'";
        $query = $this->db->query($q);
        return $query->row_array();
	}

}?>