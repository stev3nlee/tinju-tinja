<?php if(!defined('BASEPATH')) exit('Hack attemp?');
class info_grafis_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function get_list(){
        $query = $this->db->order_by("id","asc")
                ->get('info_grafis_tb');
        return $query->result_array();
    }


    function insert($data){

        $this->db->insert('info_grafis_tb', $data);
    }

    function get_list_edit($id){
        $query = $this->db->where('id',$id)
            ->get('info_grafis_tb') ;
        return $query->result_array();
    }

    function update($data,$id){
        $this->db->where('id', $id);
        $this->db->update('info_grafis_tb', $data);
    }

    function delete($id){
        $this->db->delete('info_grafis_tb', array('id' => $id));
    }

    function active($id)
    {
        $this->db->where('id',$id);
        $this->db->set('status', 1, FALSE);
        $this->db->update('info_grafis_tb');
    }

    function inactive($id)
    {

        $this->db->where('id',$id);
        $this->db->set('status', 0, FALSE);
        $this->db->update('info_grafis_tb');
    }


	function get_user_infografis_detail($uid){
		
        $query = $this->db->where("uid",$uid)
                ->get('user_infografis_tb');
        return $query->row_array();
	}
	function get_user_infografis_detail2($uid){
		
        $query = $this->db->where("id",$uid)
                ->get('user_infografis_tb');
        return $query->row_array();
	}

    function get_share_infografis(){
        $q = "Select T1.count,T2.download_count, T3.image
            FROM
            (
                Select infografis_id, COUNT(infografis_id) AS count 
                from user_share_infografis_tb T1
                group by infografis_id) T1
            INNER JOIN
            (
                Select infografis_id, COUNT(infografis_id) AS download_count
                from user_download_infografis_tb T2
                group by infografis_id
            ) T2

            on T1.infografis_id = T2.infografis_id

            INNER JOIN
            (
                Select image AS image, id
                from info_grafis_tb T3
            ) T3
            on T1.infografis_id = T3.id";

        $query = $this->db->query($q);
        return $query->result_array();
    }

}?>