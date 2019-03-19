<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Video extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')==false)redirect('tjadmin/login');
		$this->load->model('video_model');
		$this->load->model('general_model');
		ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	}
	
	function index()
	{
		$this->data['content']='admin/video/list';
		$this->data['detail'] = $this->video_model->get_video();
		$this->load->view('common/admin/body',$this->data);
	}


	function add(){
		$this->data['content'] = 'admin/video/add';
		$this->load->view('common/admin/body', $this->data);
	}

	function do_add(){
		$link = $this->input->post('link');
		
		$config['upload_path'] = 'userdata/video';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload');
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('image'))
		{
			$image='';
		}
		else
		{
			$data = $this->upload->data('file_name');
			$image=$data['file_name'];	
		}
		$precedence = last_precedence('video_tb')+1;

		$table='video_tb';
		$data=array('youtube_link'=>$link,'image'=>$image,'precedence'=>$precedence,'status'=>'1');
		$this->general_model->insert_data($table,$data);
		
		redirect('tjadmin/video');
	}

	function edit($id){
		$this->data['video']=$this->video_model->get_video_detail($id);
		$this->data['content'] = 'admin/video/edit';
		$this->load->view('common/admin/body', $this->data);
	}

	function do_edit(){
		$link = $this->input->post('link');
		$id = $this->input->post('id');
		$image = $this->input->post('image');
		$image1 = $this->input->post('image1');

		$this->load->library('upload');
		$image=$prev;
		$config['upload_path'] = 'userdata/video';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);

		if(! $this->upload->do_upload('image'))
			{
				$filename=$image1;
			}
		else 
			{
				//$filename = $this->upload->data()['file_name'];
				
				
			$data = $this->upload->data('file_name');
			$filename=$data['file_name'];	
				if(file_exists(FCPATH.'/userdata/video/'.$image1))
					unlink('userdata/video/'.$image1);
			}

		$table='video_tb';
		$data=array('youtube_link'=>$link,'image'=>$filename);
		$where=array('id'=>$id);
		
		$this->general_model->update_data($table,$data,$where);
		redirect('tjadmin/video');
	}

	function do_delete($id, $image)
	{
		$this->video_model->delete_video($id);
		redirect('tjadmin/video');

		unlink(FCPATH.'/userdata/video/'.$image);
		redirect('tjadmin/video');
	}

	function status($id, $status)
	{	
		if($status==1){
			$status=0;	
		}else{
			$status=1;	
		}
		$table='video_tb';
		$data=array('status'=>$status);
		$where=array('id'=>$id);
		$this->general_model->update_data($table,$data,$where);
	
		redirect($_SERVER['HTTP_REFERER']);
	}

	function up($id){			
		$this->video_model->up($id);
				
		redirect($_SERVER['HTTP_REFERER']);
	}
			
	function down($id){
		$this->video_model->down($id);
				
		redirect($_SERVER['HTTP_REFERER']);
	}


	
}