<?php if(!defined('BASEPATH')) exit('Hack attemp?');
class about_us_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function get_list(){

        $query = $this->db
                ->select('about_us_tb.id,about_us_tb.content,about_us_tb.content_en,about_us_tb.status,about_us_tb.title,about_us_tb.title_en,about_us_category_tb.name')
                ->order_by("id","asc")
                ->join('about_us_category_tb', 'about_us_tb.categories_id = about_us_category_tb.id')
                ->get('about_us_tb');
        return $query->result_array();
    }
	
    function get_content_detail_by_alias($alias){
		$q = "select id from about_us_category_tb where `alias` like '%".esc($alias)."%'";
		
		$query = $this->db->query($q);
		$data=$query->row_array();
		
		
		$query = $this->db->where('categories_id',$data['id'])->get('about_us_tb') ;
		return $query->row_array();
		
    }

    function check_categories($categories_id){
        $query = $this->db->where('categories_id',$categories_id)
            ->get('about_us_tb') ;
        return $query->result_array();
    }

    function insert_description($data){

        $this->db->insert('about_us_tb', $data);
    }
    function get_list_edit($id){
        $query = $this->db->where('about_us_tb.id',$id)
            ->select('about_us_tb.id,about_us_tb.content,about_us_tb.categories_id,about_us_tb.content_en,about_us_tb.status,about_us_tb.title,about_us_tb.title_en,about_us_category_tb.name')
            ->order_by("id","asc")
            ->join('about_us_category_tb', 'about_us_tb.categories_id = about_us_category_tb.id')
            ->get('about_us_tb');
        return $query->result_array();
    }
    function update_description($data,$id){
        $this->db->where('id', $id);
        $this->db->update('about_us_tb', $data);
    }
    function check_categories_same($categories_id,$id){
        $query = $this->db->where('categories_id',$categories_id)
                ->where('id',$id)
            ->get('about_us_tb') ;
        return $query->result_array();
    }
    function delete($id){
        $this->db->delete('about_us_tb', array('id' => $id));
    }

    function active($id)
    {
        $this->db->where('id',$id);
        $this->db->set('status', 1, FALSE);
        $this->db->update('about_us_tb');
    }

    function inactive($id)
    {

        $this->db->where('id',$id);
        $this->db->set('status', 0, FALSE);
        $this->db->update('about_us_tb');
    }



}?>