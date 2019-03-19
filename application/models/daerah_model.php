<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Daerah_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}	

	function get_daerah()
	{
		$query = $this->db->query("select * from daerah_tb order by precedence asc");
		return $query->result_array();
	}
	
	function get_daerah_2()
	{
		$q="select a.id as daerah_id, b.id as ide_id, b.ide, b.image as contribution_image, b.link, a.name as daerah_name, a.description_en, a.description_id, a.image as daerah_image, a.alias , c.name as user_name, c.profile_picture , b.type
		from daerah_tb a
		left join contribution_user_tb b on a.id=b.daerah_id
		left join user_tb c on c.id=b.user_id
		
		group by a.id
		order by precedence asc";
		$query = $this->db->query($q);
		return $query->result_array();
	}

	function get_daerah_detail_by_alias($alias){
		$query = $this -> db -> query(
				"SELECT * 
				 FROM daerah_tb where alias='".esc($alias)."'"
		);		
		return $query->row_array();	
	}

	function get_daerah_detail($id){
		$query = $this -> db -> query(
				"SELECT * 
				 FROM daerah_tb where id=$id"
		);		
		return $query->row_array();	
	}

	function delete_daerah($id,$image)
	{
		$query = $this->db->query("delete from daerah_tb where id=".$id);
	}

	function down($id){
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from daerah_tb where id = '.$id ));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from daerah_tb where precedence > '.$from['precedence'].' order by precedence asc'));
		
		$sql1 = "update		daerah_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		daerah_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}
	
	function up($id){
		
		$from=mysql_fetch_assoc(mysql_query('select id, precedence from daerah_tb where id = '.$id));
		$to=mysql_fetch_assoc(mysql_query('select id, precedence from daerah_tb where precedence < '.$from['precedence'].' order by precedence desc'));
		
		
		$sql1 = "update		daerah_tb
				set 		`precedence` = '".esc($to['precedence'])."'
				where 		`id` = '".esc($from['id'])."'";
		$sql2 = "update		daerah_tb
				set 		`precedence` = '".esc($from['precedence'])."'
				where 		`id` = '".esc($to['id'])."'";
		
		$this->db->query($sql1);	
		$this->db->query($sql2);
	}

	function get_contribution_daerah_home2(){
		$q="select * from daerah_tb a where status=1 and featured=1 order by rand()";
		$query = $this -> db -> query($q);		
		$daerah_list=$query->result_array();
		
		$daerah_list2=$daerah_list;
		
		if($daerah_list)foreach($daerah_list as $index=>$row){
			$daerah_list2[$index]['user_name']='';
			$daerah_list2[$index]['profile_picture']='';
			$daerah_list2[$index]['type']='';
			$daerah_list2[$index]['cont_link']='';
			$daerah_list2[$index]['cont_image']='';
			$daerah_list2[$index]['ide']='';
			$daerah_list2[$index]['ide_id']='';
			//$daerah_list2[$index]['user_name']='';
		}
		
		//pre($daerah_list2);
		
		if($daerah_list)foreach($daerah_list as $index=>$row){
			$q="select a.*, a.id as ide_id, b.name as user_name, b.profile_picture , a.image as cont_image
			from contribution_user_tb a 
			left join user_tb b on a.user_id=b.id
			where (daerah_id='".esc($row['id'])."') and a.status=1 
			order by id desc limit 1";
			$query2 = $this -> db -> query($q);		
			$contribution_user=$query2->row_array();	
			
			if($contribution_user){
				if($contribution_user['user_name']!=''){
					$daerah_list2[$index]['user_name']=$contribution_user['user_name'];
				}
				if($contribution_user['profile_picture']!=''){
					$daerah_list2[$index]['profile_picture']=$contribution_user['profile_picture'];
				}
				if($contribution_user['type']!=''){
					$daerah_list2[$index]['type']=$contribution_user['type'];
				}
				if($contribution_user['link']!=''){
					$daerah_list2[$index]['cont_link']=$contribution_user['link'];
				}
				if($contribution_user['cont_image']!=''){
					$daerah_list2[$index]['cont_image']=$contribution_user['cont_image'];
				}
				if($contribution_user['ide']!=''){
					$daerah_list2[$index]['ide']=$contribution_user['ide'];
				}
				if($contribution_user['ide_id']!=''){
					$daerah_list2[$index]['ide_id']=$contribution_user['ide_id'];
				}
			}
			else{
			}
		}
		
		return $daerah_list2;
		//pre($daerah_list2);
	}

	function get_contribution_daerah_home3()
	{
		$q="select * from daerah_tb a where status=1 and featured=1";
		$query = $this -> db -> query($q);		
		$daerah_list=$query->result_array();
		//pre($daerah_list); exit();

		if($daerah_list)foreach($daerah_list as $row){

			if($row['contribution_id']=='0'){
				
				$q="select a.*, a.id as ide_id, b.name as user_name, b.profile_picture , a.image as cont_image
				from contribution_user_tb a 
				left join user_tb b on a.user_id=b.id
				where (daerah_id=0) and a.status=1 
				order by id desc";
				$query2 = $this -> db -> query($q);		
				$contribution_user=$query2->row_array();
				pre($contribution_user); exit();	
			
			}else{

				$q="select a.*, a.id as ide_id, b.name as user_name, b.profile_picture , a.image as cont_image
				from contribution_user_tb a 
				left join user_tb b on a.user_id=b.id
				where (daerah_id!=0) and a.status=1 
				order by id desc";
				$query2 = $this -> db -> query($q);		
				$contribution_user=$query2->row_array();
				//pre($contribution_user); exit();	
			}
		}
	}
	
	function get_contribution_daerah_province(){
		$q="select * from daerah_tb a where status=1 order by precedence asc";
		$query = $this -> db -> query($q);		
		$daerah_list=$query->result_array();
		
		$daerah_list2=$daerah_list;
		
		if($daerah_list)foreach($daerah_list as $index=>$row){
			$daerah_list2[$index]['user_name']='';
			$daerah_list2[$index]['profile_picture']='';
			$daerah_list2[$index]['type']='';
			$daerah_list2[$index]['cont_link']='';
			$daerah_list2[$index]['cont_image']='';
			$daerah_list2[$index]['ide']='';
			$daerah_list2[$index]['ide_id']='';
			//$daerah_list2[$index]['user_name']='';
		}
		
		//pre($daerah_list2);
		
		if($daerah_list)foreach($daerah_list as $index=>$row){
			$q="select a.*, a.id as ide_id, b.name as user_name, b.profile_picture , a.image as cont_image
			from contribution_user_tb a 
			left join user_tb b on a.user_id=b.id
			where (daerah_id='".esc($row['id'])."') and a.status=1 
			order by id desc limit 1";
			$query2 = $this -> db -> query($q);		
			$contribution_user=$query2->row_array();	
			
			if($contribution_user){
				if($contribution_user['user_name']!=''){
					$daerah_list2[$index]['user_name']=$contribution_user['user_name'];
				}
				if($contribution_user['profile_picture']!=''){
					$daerah_list2[$index]['profile_picture']=$contribution_user['profile_picture'];
				}
				if($contribution_user['type']!=''){
					$daerah_list2[$index]['type']=$contribution_user['type'];
				}
				if($contribution_user['link']!=''){
					$daerah_list2[$index]['cont_link']=$contribution_user['link'];
				}
				if($contribution_user['cont_image']!=''){
					$daerah_list2[$index]['cont_image']=$contribution_user['cont_image'];
				}
				if($contribution_user['ide']!=''){
					$daerah_list2[$index]['ide']=$contribution_user['ide'];
				}
				if($contribution_user['ide_id']!=''){
					$daerah_list2[$index]['ide_id']=$contribution_user['ide_id'];
				}
			}
			else{
			}
		}
		
		return $daerah_list2;
		//pre($daerah_list2);
	}

	function get_contribution_daerah_home(){
		$q="select a.*, b.name as user_name, b.profile_picture from contribution_user_tb a left join user_tb b on a.user_id=b.id
		 order by id desc limit 1";
		$query = $this -> db -> query($q);		
		$contribution_user=$query->row_array();	
		if($contribution_user){
			if($contribution_user['daerah_id']==0){
				
				$q="select * from daerah_tb order by rand() limit 1";
				$query = $this -> db -> query($q);		
				$daerah_detail=$query->row_array();	
			}
			else{
				$daerah_detail=$this->get_daerah_detail($contribution_user['daerah_id']);
			}
		
			if($daerah_detail){
				//pre($daerah_detail);
				$contribution_user['daerah_alias']=$daerah_detail['alias'];
				$contribution_user['daerah_name']=$daerah_detail['name'];
				$contribution_user['daerah_image']=$daerah_detail['image'];
				$contribution_user['daerah_desc_en']=$daerah_detail['description_en'];
				$contribution_user['daerah_desc_id']=$daerah_detail['description_id'];
			}
			else
			{
				$contribution_user=NULL;
			}
		}
		//pre($contribution_user);exit();
		return $contribution_user;
		
	/*
		$q="select * from daerah_tb order by rand()";
		$query = $this -> db -> query($q);		
		$daerah_list=$query->result_array();	
		
		if($daerah_list)foreach($daerah_list as $row){
			
			$daerah_id=$row['id'];
			$q="select a.*, b.name as user_name, b.profile_picture from contribution_user_tb a left join user_tb b on a.user_id=b.id
			where daerah_id='0'
			 order by id desc limit 3";
			$query = $this -> db -> query($q);		
			$contribution_user=$query->row_array();
	
		
		}	
		*/
		
		
	}
	
	function get_contribution_daerah($alias){
		
		$q="select a.*, b.name as user_name, b.profile_picture 
		from contribution_user_tb a 
		left join daerah_tb c on c.id=a.daerah_id
		left join user_tb b on a.user_id=b.id
		where c.alias='".esc($alias)."' or a.daerah_id=0
		order by a.id ";
		$query = $this -> db -> query($q);		
		return $query->result_array();	
	}
	
	function get_contribution_daerah2($alias){
		
		$q="select a.*, b.name as user_name, b.profile_picture , c.alias 
		from contribution_user_tb a 
		left join daerah_tb c on c.id=a.daerah_id
		left join user_tb b on a.user_id=b.id
		where a.status=1 and c.alias='".esc($alias)."' or a.daerah_id=0
		order by a.type asc, a.id desc limit 3 ";
		$query = $this -> db -> query($q);		
		return $query->result_array();	
	}
	
	function get_contribution_paging($contribution_type,$daerah_id,$offset,$limit){
		$s='';
		if($contribution_type!=0)$s.=" and `type`='".esc($contribution_type)."' ";
		if($daerah_id!=0)$s.=" and a.daerah_id='".esc($daerah_id)."' ";
		
		$q="select a.*, a.id as cont_id, b.name as user_name, b.profile_picture 
		from contribution_user_tb a 
		left join user_tb b on a.user_id=b.id
		where a.id!=0 ".$s." and a.status=1
		order by a.id desc
		limit ".$offset.", ".$limit;
		$query = $this -> db -> query($q);		
		return $query->result_array();
	}
	
	function get_contribution_paging_total($contribution_type,$daerah_id){
		$s='';
		if($contribution_type!=0)$s.=" and `type`='".esc($contribution_type)."' ";
		if($daerah_id!=0)$s.=" and a.daerah_id='".esc($daerah_id)."' ";
		
		$q="select count(*) as total
		from contribution_user_tb a 
		left join user_tb b on a.user_id=b.id
		where a.id!=0 ".$s;
		$query = $this -> db -> query($q);		
		return $query->row_array();
	}
	
	function get_contribution_detail($id){
	
		$q="select a.*, b.name as user_name, b.profile_picture
		from contribution_user_tb a
		left join user_tb b on a.user_id=b.id
		where a.id='".esc($id)."' and a.status=1";
		$query = $this -> db -> query($q);		
		return $query->row_array();
	}
	
	function get_contribution_detail_next($id){
	
		$q="select a.*, b.name as user_name, b.profile_picture
		from contribution_user_tb a
		left join user_tb b on a.user_id=b.id
		where a.id<'".esc($id)."' and a.status=1 order by a.id desc";
		$query = $this -> db -> query($q);		
		return $query->row_array();
	}
	
	function get_contribution_detail_prev($id){
	
		$q="select a.*, b.name as user_name, b.profile_picture
		from contribution_user_tb a
		left join user_tb b on a.user_id=b.id
		where a.id>'".esc($id)."' and a.status=1 ";
		$query = $this -> db -> query($q);		
		return $query->row_array();
	}
	
	function check_like($user_id,$contribution_id){
		$q="select * from user_like_contribution_tb where user_id='".esc($user_id)."' and contribution_id='".esc($contribution_id)."'";
			
		$query = $this -> db -> query($q);		
		return $query->row_array();
	}
	
	function get_latest_contributor(){
		
		$q="select a.*, b.name as user_name, b.profile_picture from contribution_user_tb a 
		left join user_tb b on a.user_id=b.id
		where a.featured=1
		group by user_id
		order by id desc limit 3
		";
			
		$query = $this -> db -> query($q);		
		$data=$query->result_array();
		
		if(!$data){
			
		$q="select a.*, b.name as user_name, b.profile_picture from contribution_user_tb a 
		left join user_tb b on a.user_id=b.id
		
		group by user_id
		order by id desc limit 3
		";
			
		$query = $this -> db -> query($q);		
		$data=$query->result_array();
		}
		
		return $data;
	}
}