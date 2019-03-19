<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')==false) redirect('tjadmin/login');
		$this->load->model('user_model');
		$this->load->model('general_model');
	}

	function index(){
		$this->data['user'] = $this->user_model->user_list();
		$this->data['content'] = 'admin/user/list';
		$this->load->view('common/admin/body', $this->data);
	}
	
	
	function contribution()
	{
		$this->data['content']='admin/user/list_contribution';
		$this->data['user'] = $this->user_model->user_contribution_list();
		$this->load->view('common/admin/body',$this->data);
	}

	function user_contribution()
	{
		$this->data['count_user'] = $this->user_model->count_contribution();
		$this->data['content'] = 'admin/user/list_count_contribution';
		$this->load->view('common/admin/body', $this->data);	
	}

	function user_pledge()
	{
		$this->data['content']='admin/user/user_pledge_list';
		$this->data['user'] = $this->user_model->user_pledge_list();
		$this->load->view('common/admin/body',$this->data);
	}

	function user_share_fact()
	{
		$this->data['content']='admin/user/user_share_fact';
		$this->data['user'] = $this->user_model->count_fact_share();
		$this->load->view('common/admin/body',$this->data);
	}

	function user_share_infografis()
	{
		$this->data['content']='admin/user/user_share_infografis';
		$this->data['user'] = $this->user_model->count_infografis_share();
		$this->load->view('common/admin/body',$this->data);
	}

	function user_download_pdf()
	{
		$this->data['content']='admin/daerah/pdf_download_list';
		$this->data['user'] = $this->user_model->count_pdf_download();
		$this->load->view('common/admin/body',$this->data);
	}

	function user_create_infografis()
	{
		$this->data['content']='admin/user/user_create_infografis_list';
		$this->data['user'] = $this->user_model->count_infografis_created();
		$this->load->view('common/admin/body',$this->data);
	}

	function user_infografis()
	{
		$this->data['content']='admin/user/user_infografis_list';
		$this->data['user'] = $this->user_model->user_infografis_list();
		$this->load->view('common/admin/body',$this->data);
	}
	
	function do_featured($id, $status)
	{	
		if($status==1){
			$status=0;	
		}else{
			$status=1;	
		}
		$table='contribution_user_tb';
		$data=array('featured'=>$status);
		$where=array('id'=>$id);
		$this->general_model->update_data($table,$data,$where);
	
		redirect($_SERVER['HTTP_REFERER']);
	}

	function status($id, $status)
	{	
		if($status==1){
			$status=0;	
		}else{
			$status=1;	
		}
		$table='contribution_user_tb';
		$data=array('status'=>$status);
		$where=array('id'=>$id);
		$this->general_model->update_data($table,$data,$where);
	
		redirect($_SERVER['HTTP_REFERER']);
	}

	function resize($image)
	{
        $this->load->library('image_lib');
        $config_resize['image_library'] = 'gd2';
		$config_resize['maintain_ratio'] = TRUE;
		//$config_resize['create_thumb'] = TRUE;
		$config_resize['new_image'] = 'userdata/resize/';
		$config_resize['quality'] = '80%';
		$config_resize['master_dim'] = 'width';
		$config_resize['width']	= 620;
		$config_resize['height'] = '1';
		$config_resize['source_image'] ='userdata/contribution/'.$image;

			 
		$this->image_lib->initialize($config_resize);
		$this->image_lib->resize();

		redirect($_SERVER['HTTP_REFERER']);
	}
	
	
	function resize_cheat(){
		$cont=$this->user_model->user_contribution_list();
		
		
	//	die(pre($cont[0]));exit();
		
		if($cont)foreach($cont as $row){
			
			$image=$row['image'];
			
			if($image!=''){
				
				$this->load->library('image_lib');
				$config_resize['image_library'] = 'gd2';
				$config_resize['maintain_ratio'] = TRUE;
				//$config_resize['create_thumb'] = TRUE;
				$config_resize['new_image'] = 'userdata/resize/';
				$config_resize['quality'] = '80%';
				$config_resize['master_dim'] = 'width';
				$config_resize['width']	= 620;
				$config_resize['height'] = '1';
				$config_resize['source_image'] ='userdata/contribution/'.$image;
		
					 
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
			}
		}
	}
}
