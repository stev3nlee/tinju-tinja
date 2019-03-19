<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Press_conference extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')==false)redirect('tjadmin/login');
		$this->load->model('press_conference_model');
		$this->load->model('general_model');
		
	}
	
	function index()
	{
		$this->data['content']='admin/press_conference/list';
		$this->data['detail'] = $this->press_conference_model->get_press_conference();
		$this->load->view('common/admin/body',$this->data);
	}

	function add(){
		$this->data['content'] = 'admin/press_conference/add';
		$this->load->view('common/admin/body', $this->data);
	}

	function do_add(){
		
		$config['upload_path'] = 'userdata/press_conference';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload');
		$this->upload->initialize($config);
		
		$precedence = last_precedence('press_conference_tb')+1;

		if(!$this->upload->do_upload('image'))
		{
			$image='';
		}
		else
		{
			$data = $this->upload->data('file_name');
			$image=$data['file_name'];	
		}
		
		$table='press_conference_tb';
		$data=array('image'=>$image,'precedence'=>$precedence,'status'=>'1');
		$this->general_model->insert_data($table,$data);
		
		redirect('tjadmin/press_conference');
	}

	function edit($id){
		$this->data['press']=$this->press_conference_model->get_press_conference_detail($id);
		$this->data['content'] = 'admin/press_conference/edit';
		$this->load->view('common/admin/body', $this->data);
	}

	function do_edit(){
		$id = $this->input->post('id');
		$image = $this->input->post('image');
		$image1 = $this->input->post('image1');
		//$img = $_FILES['image'];
		
		$this->load->library('upload');
		$image=$prev;
		$config['upload_path'] = 'userdata/press_conference';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);

		if(! $this->upload->do_upload('image'))
			{
				$filename=$image1;
			}
		else 
			{
				$data = $this->upload->data();
				$filename=$data['file_name'];
				if(file_exists(FCPATH.'/userdata/press_conference/'.$image1))
					unlink('userdata/press_conference/'.$image1);
			}
		
		$table='press_conference_tb';
		$data=array('image'=>$filename);
		$where=array('id'=>$id);
		
		$this->general_model->update_data($table,$data,$where);
		redirect('tjadmin/press_conference');
	}

	function do_delete($id, $image)
	{
		$this->press_conference_model->delete_press_conference($id,$image);
		unlink(FCPATH.'/userdata/press_conference/'.$image);
		redirect('tjadmin/press_conference');
	}

	function status($id, $status)
	{	
		if($status==1){
			$status=0;	
		}else{
			$status=1;	
		}
		$table='press_conference_tb';
		$data=array('status'=>$status);
		$where=array('id'=>$id);
		$this->general_model->update_data($table,$data,$where);
	
		redirect($_SERVER['HTTP_REFERER']);
	}

	function up($id){			
		$this->press_conference_model->up($id);
				
		redirect($_SERVER['HTTP_REFERER']);
	}
			
	function down($id){
		$this->press_conference_model->down($id);
				
		redirect($_SERVER['HTTP_REFERER']);
	}

	
}