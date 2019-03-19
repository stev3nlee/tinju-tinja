<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Testimonial extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')==false)redirect('tjadmin/login');
		$this->load->model('testimonial_model');
		$this->load->model('general_model');
		
	}
	
	function index()
	{
		$this->data['content']='admin/testimonial/list';
		$this->data['detail'] = $this->testimonial_model->get_testimonial();
		$this->load->view('common/admin/body',$this->data);
	}

	function add(){
		$this->data['content'] = 'admin/testimonial/add';
		$this->load->view('common/admin/body', $this->data);
	}

	function do_add(){
		$name = $this->input->post('name');
		$short_desc_id = $this->input->post('short_desc_id');
		$desc_id = $this->input->post('desc_id');
		$short_desc_en = $this->input->post('short_desc_en');
		$desc_en = $this->input->post('desc_en');
		$source = $this->input->post('source');
		
		$config['upload_path'] = 'userdata/testimonial';
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
		
		$table='testimonial_tb';
		$data=array('image'=>$image,'name'=>$name,'short_description_id'=>$short_desc_id,'description_id'=>$desc_id,
			'short_description_en'=>$short_desc_en,'description_en'=>$desc_en,'status'=>'1','source'=>$source);
		$this->general_model->insert_data($table,$data);
		
		redirect('tjadmin/testimonial');
	}

	function edit($id){
		$this->data['testimonial']=$this->testimonial_model->get_testimonial_detail($id);
		$this->data['content'] = 'admin/testimonial/edit';
		$this->load->view('common/admin/body', $this->data);
	}

	function do_edit(){
		$name = $this->input->post('name');
		$short_desc_id = $this->input->post('short_desc_id');
		$desc_id = $this->input->post('desc_id');
		$short_desc_en = $this->input->post('short_desc_en');
		$desc_en = $this->input->post('desc_en');
		$source = $this->input->post('source');

		$id = $this->input->post('id');
		$image = $this->input->post('image');
		$image1 = $this->input->post('image1');
		//$img = $_FILES['image'];
		
		$this->load->library('upload');
		$image=$prev;
		$config['upload_path'] = 'userdata/testimonial';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);

		if(! $this->upload->do_upload('image'))
			{
				$filename=$image1;
			}
		else 
			{
			
			$data = $this->upload->data('file_name');
			$filename=$data['file_name'];	
				if(file_exists(FCPATH.'/userdata/testimonial/'.$image1))
					unlink('userdata/testimonial/'.$image1);
			}
		
		$table='testimonial_tb';
		$data=array('image'=>$filename,'name'=>$name,'short_description_id'=>$short_desc_id,'description_id'=>$desc_id,
			'short_description_en'=>$short_desc_en,'description_en'=>$desc_en,'source'=>$source);
		$where=array('id'=>$id);
		
		$this->general_model->update_data($table,$data,$where);
		redirect('tjadmin/testimonial');
	}

	function do_delete($id, $image)
	{
		$this->testimonial_model->delete_testimonial($id,$image);
		unlink(FCPATH.'/userdata/testimonial/'.$image);
		redirect('tjadmin/testimonial');
	}

	function status($id, $status)
	{	
		if($status==1){
			$status=0;	
		}else{
			$status=1;	
		}
		$table='testimonial_tb';
		$data=array('status'=>$status);
		$where=array('id'=>$id);
		$this->general_model->update_data($table,$data,$where);
	
		redirect($_SERVER['HTTP_REFERER']);
	}

	
}