<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Category extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')==false) redirect('tjadmin/login');
		$this->load->model('category_model');
		$this->load->model('general_model');
	}

	function index(){
		$this->data['category'] = $this->category_model->get_category();
		$this->data['content'] = 'admin/category/list';
		$this->load->view('common/admin/body', $this->data);
	}
	
	function add(){
		$this->data['content'] = 'admin/category/add';
		$this->load->view('common/admin/body', $this->data);
	}
	
	function do_add(){
		$name_id = $this->input->post('name_id');
		$name_en = $this->input->post('name_en');
		
		$table='category_tb';
		$data=array('name_id'=>$name_id,'name_en'=>$name_en);
		$this->general_model->insert_data($table,$data);
				
		$id=mysql_insert_id();
		
		redirect('tjadmin/category');
	}
	
	function up($id)
	{
		$this->category_model->up($id);
		redirect('tjadmin/category');
	}
	
	function down($id)
	{
		$this->category_model->down($id);
		redirect('tjadmin/category');
	}
	
	function do_delete($id)
	{
		
		$this->general_model->delete_data('category_tb',array('id'=>$id));
		
		
		redirect('tjadmin/category/category');
	}
	
	function edit($id){
		$this->data['category']=$this->category_model->get_category_detail($id);
		$this->data['content'] = 'admin/category/edit';
		$this->load->view('common/admin/body', $this->data);
	}
	
	function do_edit(){
		$name_id = $this->input->post('name_id');
		$name_en = $this->input->post('name_en');
		$id = $this->input->post('id');
		
		
		$table='category_tb';
		$data=array('name_id'=>$name_id,'name_en'=>$name_en);
		$where=array('id'=>$id);
		
		$this->general_model->update_data($table,$data,$where);
		redirect('tjadmin/category');
	}
	
	function active($id,$active){
		if($active==1)
		{
			$active=0;
		}
		else
		{
			$active=1;
		}
		
		$table='category_tb';
		$data=array('active'=>$active);
		$where=array('id'=>$id);
		$this->general_model->update_data($table,$data,$where);
		
		redirect('tjadmin/category');
	}
	
}?>