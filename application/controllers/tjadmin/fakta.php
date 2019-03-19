<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Fakta extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')==false) redirect('tjadmin/login');
		$this->load->model('fakta_model');
		$this->load->model('general_model');
	}

	function index(){
		$this->data['fakta'] = $this->fakta_model->get_fakta();
		$this->data['content'] = 'admin/fakta/list';
		$this->load->view('common/admin/body', $this->data);
	}
	
	function add(){
		$this->data['content'] = 'admin/fakta/add';
		$this->load->view('common/admin/body', $this->data);
	}
	
	function do_add(){
		$title_id = $this->input->post('title_id');
		$title_en = $this->input->post('title_en');
		$description_id = $this->input->post('description_id');
		$description_en = $this->input->post('description_en');
		$share_id = $this->input->post('share_id');
		$share_en = $this->input->post('share_en');
		$share_tw_id = $this->input->post('share_tw_id');
		$share_tw_en = $this->input->post('share_tw_en');
		$link = $this->input->post('link');
		
		$config['upload_path'] = 'userdata/fakta/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload');
		$this->upload->initialize($config);
		
		$precedence = last_precedence('fakta_tb')+1;

		if(!$this->upload->do_upload('image'))
		{
			$image='';
		}
		else
		{
			$data = $this->upload->data('file_name');
			$image=$data['file_name'];	
		}
		
		
		$config['upload_path'] = 'userdata/fakta/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);
		if(!$this->upload->do_upload('image_en'))
		{
			$image_en='';
		}
		else
		{
			$data2 = $this->upload->data('file_name');
			$image_en=$data2['file_name'];	
		}
		
	
		$table='fakta_tb';
		$data=array('link'=>$link,'image'=>$image,'image_en'=>$image_en,'precedence'=>$precedence,'description_id'=>$description_id,'description_en'=>$description_en,'title_id'=>$title_id,'title_en'=>$title_en,'share_id'=>$share_id,'share_en'=>$share_en,'share_tw_id'=>$share_tw_id,'share_tw_en'=>$share_tw_en);
		$this->general_model->insert_data($table,$data);
				
		$id=mysql_insert_id();
		
		redirect('tjadmin/fakta');
	}
	
	function up($id)
	{
		$this->fakta_model->up($id);
		redirect('tjadmin/fakta');
	}
	
	function down($id)
	{
		$this->fakta_model->down($id);
		redirect('tjadmin/fakta');
	}
	
	function do_delete($id)
	{
		$prev = find('image',$id,'fakta_tb');
		$image_path = realpath(APPPATH . '../userdata/fakta');
		$pospic =  $image_path . "/" .  $prev;
		
		
		
		$precedence_temp = find('precedence', $id, 'fakta_tb');
		
		$this->general_model->delete_data('fakta_tb',array('id'=>$id));
		if(file_exists($pospic)){
			unlink($pospic);
		}
		
		redirect('tjadmin/fakta/fakta');
	}
	
	function edit($id){
		$this->data['fakta']=$this->fakta_model->get_fakta_detail($id);
		$this->data['content'] = 'admin/fakta/edit';
		$this->load->view('common/admin/body', $this->data);
	}
	
	function do_edit(){//pre($_FILES);(pre($_POST));
		$title_id = $this->input->post('title_id');
		$title_en = $this->input->post('title_en');
		$description_id = $this->input->post('description_id');
		$description_en = $this->input->post('description_en');
		$share_id = $this->input->post('share_id');
		$share_en = $this->input->post('share_en');
		$share_tw_id = $this->input->post('share_tw_id');
		$share_tw_en = $this->input->post('share_tw_en');
		$link = $this->input->post('link');
		$id = $this->input->post('id');
		//$img = $_FILES['image'];
		
		$prev = find('image',$id,'fakta_tb');
		$prev2 = find('image_en',$id,'fakta_tb');
				
		$image_path = realpath(APPPATH . '../userdata/fakta/');
		
		$pospic = $image_path."/".$prev;
		$pospic2 = $image_path."/".$prev2;
		
		$this->load->library('upload');
		$image=$prev;
		$image_en=$prev2;
		$config['upload_path'] = 'userdata/fakta/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);
		if(!$this->upload->do_upload('image'))
		{
			/*$err_upload = $this->upload->display_errors();
			$this->session->set_flashdata('notif2', $err_upload);
			redirect('tjadmin/homebanner/edit/'.$id);*/
			
		}
		else
		{
			if(file_exists($pospic)) unlink($pospic);
			$pic = $this->upload->data('file_name');
			$image=$pic['file_name'];
		}
		
		
		$config['upload_path'] = 'userdata/fakta/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);
		if(!$this->upload->do_upload('image_en'))
		{
			/*$err_upload = $this->upload->display_errors();
			$this->session->set_flashdata('notif2', $err_upload);
			redirect('tjadmin/homebanner/edit/'.$id);*/
			
		}
		else
		{
			if(file_exists($pospic2)) unlink($pospic2);
			$pic2 = $this->upload->data('file_name');
			$image_en=$pic2['file_name'];
		}
		
		$table='fakta_tb';
		$datass=array('link'=>$link,'image_en'=>$image_en,'image'=>$image,'description_id'=>$description_id,'description_en'=>$description_en,'title_id'=>$title_id,'title_en'=>$title_en,'share_id'=>$share_id,'share_en'=>$share_en,'share_tw_id'=>$share_tw_id,'share_tw_en'=>$share_tw_en);
		$where=array('id'=>$id);
		
		$this->general_model->update_data($table,$datass,$where);
		redirect('tjadmin/fakta');
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
		
		$table='fakta_tb';
		$data=array('active'=>$active);
		$where=array('id'=>$id);
		$this->general_model->update_data($table,$data,$where);
		
		redirect('tjadmin/fakta');
	}

	function share_fakta(){
		$this->data['fakta'] = $this->fakta_model->get_share_fakta();
		$this->data['content'] = 'admin/fakta/share_fakta_list';
		$this->load->view('common/admin/body', $this->data);
	}
	
}?>