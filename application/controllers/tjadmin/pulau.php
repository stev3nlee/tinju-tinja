<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pulau extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')==false)redirect('tjadmin/login');
		$this->load->model('pulau_model');
		$this->load->model('general_model');
		
	}
	
	function index()
	{
		$this->data['content']='admin/pulau/list';
		$this->data['detail'] = $this->pulau_model->get_pulau();
		$this->load->view('common/admin/body',$this->data);
	}

	function add(){
		$this->data['content'] = 'admin/pulau/add';
		$this->load->view('common/admin/body', $this->data);
	}

	function do_add(){
		$name = $this->input->post('name');
		
		$config['upload_path'] = 'userdata/pulau';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload');
		$this->upload->initialize($config);
		
		$precedence = last_precedence('pulau_tb')+1;

		if(!$this->upload->do_upload('image'))
		{
			$image='';
		}
		else
		{
			$data = $this->upload->data('file_name');
			$image=$data['file_name'];	
		}
		
		
		$this->load->library('upload');
		$this->upload->initialize($config);
		

		if(!$this->upload->do_upload('image_en'))
		{
			$image_en='';
		}
		else
		{
			$data = $this->upload->data('file_name');
			$image_en=$data['file_name'];	
		}


		$table='pulau_tb';
		$data=array('name'=>$name,'image'=>$image,'status'=>'1',
			'precedence'=>$precedence,'image_en'=>$image_en);
		$this->general_model->insert_data($table,$data);
				
		$id=mysql_insert_id();
		
		redirect('tjadmin/pulau');
	}

	function edit($id){
		$this->data['pulau']=$this->pulau_model->get_pulau_detail($id);
		$this->data['content'] = 'admin/pulau/edit';
		$this->load->view('common/admin/body', $this->data);
	}

	function do_edit(){
		$name = $this->input->post('name');
		$id = $this->input->post('id');
		$image = $this->input->post('image');
		$image1 =find('image',$id,'pulau_tb');
		$image2 =find('image_en',$id,'pulau_tb');
		
		//$img = $_FILES['image'];
		//pre($_FILES);
		$this->load->library('upload');
		
		$config['upload_path'] = 'userdata/pulau/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);

		if(! $this->upload->do_upload('image')){
			$image=$image1;
		}
		else {
			$datas= $this->upload->data();
			$image=$datas['file_name'];
			if($image1!=''){
				if(file_exists(FCPATH.'/userdata/pulau/'.$image1))
					unlink('userdata/pulau/'.$image1);
			}
		}
		
		
		
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('image_en')){
			$image_en=$image2;
		}
		else {
			$datas= $this->upload->data();
			$image_en=$datas['file_name'];
			if($image2!=''){
				if(file_exists(FCPATH.'/userdata/pulau/'.$image2))
					unlink('userdata/pulau/'.$image2);
			}
		}


		
		$table='pulau_tb';
		$data=array('name'=>$name,'image'=>$image,'image_en'=>$image_en);
		$where=array('id'=>$id);
		
		$this->general_model->update_data($table,$data,$where);
		redirect('tjadmin/pulau');
	}

	function do_delete($id, $image)
	{
		$this->pulau_model->delete_pulau($id,$image);
		unlink(FCPATH.'/userdata/pulau/'.$image);
		redirect('tjadmin/pulau');
	}

	function status($id, $status)
	{	
		if($status==1){
			$status=0;	
		}else{
			$status=1;	
		}
		$table='pulau_tb';
		$data=array('status'=>$status);
		$where=array('id'=>$id);
		$this->general_model->update_data($table,$data,$where);
	
		redirect($_SERVER['HTTP_REFERER']);
	}

	function up($id){			
		$this->pulau_model->up($id);
				
		redirect($_SERVER['HTTP_REFERER']);
	}
			
	function down($id){
		$this->pulau_model->down($id);
				
		redirect($_SERVER['HTTP_REFERER']);
	}


}