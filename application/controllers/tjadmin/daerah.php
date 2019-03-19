<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Daerah extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')==false)redirect('tjadmin/login');
		$this->load->model('daerah_model');
		$this->load->model('general_model');
		
	}
	
	function create_thumb(){
		
		$daerah=$this->daerah_model->get_daerah();
		
		
		if($daerah)foreach($daerah as $row){
			$image=$row['image'];
			
			if($image!=''){
				
				$this->load->library('image_lib');
				$config_resize['image_library'] = 'gd2';
				$config_resize['maintain_ratio'] = TRUE;
				//$config_resize['create_thumb'] = TRUE;
				$config_resize['new_image'] = 'userdata/daerah/thumb/';
				$config_resize['quality'] = '80%';
				$config_resize['master_dim'] = 'width';
				$config_resize['width']	= 640;
				$config_resize['height'] = '1';
				$config_resize['source_image'] ='userdata/daerah/'.$image;
		
					 
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
			}
		}
	}
	
	function index()
	{
		$this->data['content']='admin/daerah/list';
		$this->data['detail'] = $this->daerah_model->get_daerah();
		$this->load->view('common/admin/body',$this->data);
	}

	function add(){
		$this->data['content'] = 'admin/daerah/add';
		$this->load->view('common/admin/body', $this->data);
	}

	function do_add(){
		$name = $this->input->post('name');
		$link = $this->input->post('link');
		$desc_id = $this->input->post('desc_id');
		$desc_en = $this->input->post('desc_en');
		$content_id = $this->input->post('content_id');
		$content_en = $this->input->post('content_en');
		$alias=make_alias($name);
		
		$config['upload_path'] = 'userdata/daerah';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload');
		$this->upload->initialize($config);
		
		$precedence = last_precedence('daerah_tb')+1;

		if(!$this->upload->do_upload('image'))
		{
			$image='';
		}
		else
		{
			$data = $this->upload->data('file_name');
			$image=$data['file_name'];	
			
			
			
			$this->load->library('image_lib');
			$config_resize['image_library'] = 'gd2';
			$config_resize['maintain_ratio'] = TRUE;
			//$config_resize['create_thumb'] = TRUE;
			$config_resize['new_image'] = 'userdata/daerah/thumb/';
			$config_resize['quality'] = '80%';
			$config_resize['master_dim'] = 'width';
			$config_resize['width']	= 640;
			$config_resize['height'] = '1';
			$config_resize['source_image'] ='userdata/daerah/'.$image;
	
				 
			$this->image_lib->initialize($config_resize);
			$this->image_lib->resize();
		}


		$config['upload_path'] = 'userdata/upload_pdf';
		$config['allowed_types'] = 'pdf';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload');
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('pdf'))
		{
			$pdf='';
		}
		else
		{
			$data = $this->upload->data('file_name');
			$pdf=$data['file_name'];	
		}
		
		$table='daerah_tb';
		$data=array('name'=>$name,'image'=>$image,'description_id'=>$desc_id,'description_en'=>$desc_en,'status'=>'1',
			'precedence'=>$precedence,'pdf'=>$pdf,'content_id'=>$content_id,'content_en'=>$content_en,'alias'=>$alias/*,'link'=>$link*/);
		$this->general_model->insert_data($table,$data);
				
		$id=mysql_insert_id();
		
		redirect('tjadmin/daerah');
	}

	function edit($id){
		$this->data['daerah']=$this->daerah_model->get_daerah_detail($id);
		$this->data['content'] = 'admin/daerah/edit';
		$this->load->view('common/admin/body', $this->data);
	}

	function do_edit(){
		$name = $this->input->post('name');
		$link = $this->input->post('link');
		$desc_id = $this->input->post('desc_id');
		$desc_en = $this->input->post('desc_en');
		$content_id = $this->input->post('content_id');
		$content_en = $this->input->post('content_en');
		$id = $this->input->post('id');
		$image = $this->input->post('image');
		$image1 = $this->input->post('image1');
		$pdf = $this->input->post('pdf');
		$pdf1 = $this->input->post('pdf1');
		
		$alias=make_alias($name);
		
		//$img = $_FILES['image'];
		//pre($_FILES);
		$this->load->library('upload');
		
		$config['upload_path'] = 'userdata/daerah/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);

		if(! $this->upload->do_upload('image')){
			$filename=$image1;
		}
		else {
			$datas= $this->upload->data();
			$filename=$datas['file_name'];
			if($image1!=''){
				if(file_exists(FCPATH.'/userdata/daerah/'.$image1))
					unlink('userdata/daerah/'.$image1);
			}
			
			
			
			$this->load->library('image_lib');
			$config_resize['image_library'] = 'gd2';
			$config_resize['maintain_ratio'] = TRUE;
			//$config_resize['create_thumb'] = TRUE;
			$config_resize['new_image'] = 'userdata/daerah/thumb/';
			$config_resize['quality'] = '80%';
			$config_resize['master_dim'] = 'width';
			$config_resize['width']	= 640;
			$config_resize['height'] = '1';
			$config_resize['source_image'] ='userdata/daerah/'.$filename;
	
				 
			$this->image_lib->initialize($config_resize);
			$this->image_lib->resize();
		}

		$config['upload_path'] = 'userdata/upload_pdf/';
		$config['allowed_types'] = 'pdf';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);

		if(! $this->upload->do_upload('pdf')){
			$filename_pdf=$pdf1;
		}
		else {
			$datas= $this->upload->data();
			$filename_pdf=$datas['file_name'];
			if($pdf1!=''){
				if(file_exists(FCPATH.'/userdata/upload_pdf/'.$pdf1))
					unlink('userdata/upload_pdf/'.$pdf1);
			}
		}
			
		//echo $this->upload->display_errors();exit();
		
		$table='daerah_tb';
		$data=array('name'=>$name,'image'=>$filename,'description_id'=>$desc_id,'description_en'=>$desc_en,'content_id'=>$content_id,'content_en'=>$content_en,'pdf'=>$filename_pdf,'alias'=>$alias/*,'link'=>$link*/);
		$where=array('id'=>$id);
		
		$this->general_model->update_data($table,$data,$where);
		redirect('tjadmin/daerah');
	}

	function do_delete($id, $image, $pdf)
	{
		$this->daerah_model->delete_daerah($id,$image);
		unlink(FCPATH.'/userdata/daerah/'.$image);
		unlink(FCPATH.'/userdata/upload_pdf/'.$pdf);
		redirect('tjadmin/daerah');
	}

	function status($id, $status)
	{	
		if($status==1){
			$status=0;	
		}else{
			$status=1;	
		}
		$table='daerah_tb';
		$data=array('status'=>$status);
		$where=array('id'=>$id);
		$this->general_model->update_data($table,$data,$where);
	
		redirect($_SERVER['HTTP_REFERER']);
	}
	function featured($id, $featured)
	{	
		if($featured==1){
			$featured=0;	
		}else{
			$featured=1;	
		}
		$table='daerah_tb';
		$data=array('featured'=>$featured);
		$where=array('id'=>$id);
		$this->general_model->update_data($table,$data,$where);
	
		redirect($_SERVER['HTTP_REFERER']);
	}

	function up($id){			
		$this->daerah_model->up($id);
				
		redirect($_SERVER['HTTP_REFERER']);
	}
			
	function down($id){
		$this->daerah_model->down($id);
				
		redirect($_SERVER['HTTP_REFERER']);
	}


}