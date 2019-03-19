<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class News extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')==false) redirect('tjadmin/login');
		$this->load->model('news_model');
		$this->load->model('general_model');
	}

	function index(){
		$this->data['news'] = $this->news_model->get_news();
		$this->data['content'] = 'admin/news/list';
		$this->load->view('common/admin/body', $this->data);
	}
	
	function add(){
		$this->data['content'] = 'admin/news/add';
		$this->load->view('common/admin/body', $this->data);
	}
	
	function do_add(){
		$media = $this->input->post('media');
		$title = $this->input->post('title');
		$link = $this->input->post('link');
		$precedence = last_precedence('news_tb')+1;
	
		$table='news_tb';
		$data=array('link'=>$link,'media'=>$media,'precedence'=>$precedence,'title'=>$title);
		$this->general_model->insert_data($table,$data);
				
		$id=mysql_insert_id();
		
		redirect('tjadmin/news');
	}
	
	function up($id)
	{
		$this->news_model->up($id);
		redirect('tjadmin/news');
	}
	
	function down($id)
	{
		$this->news_model->down($id);
		redirect('tjadmin/news');
	}
	
	function do_delete($id)
	{
		$prev = find('image',$id,'news_tb');
		$image_path = realpath(APPPATH . '../userdata/homeBanner');
		$pospic =  $image_path . "/" .  $prev;
		
		
		$prev_m = find('mobile_image',$id,'news_tb');
		$pospic_m =  $image_path . "/m/" .  $prev_m;
		
		$precedence_temp = find('precedence', $id, 'news_tb');
		
		$this->general_model->delete_data('news_tb',array('id'=>$id));
		if(file_exists($pospic)){
			unlink($pospic);
		}
		if(file_exists($pospic_m)){
			unlink($pospic_m);
		}
		
		redirect('tjadmin/news/news');
	}
	
	function edit($id){
		$this->data['news']=$this->news_model->get_news_detail($id);
		$this->data['content'] = 'admin/news/edit';
		$this->load->view('common/admin/body', $this->data);
	}
	
	function do_edit(){
		$media = $this->input->post('media');
		$title = $this->input->post('title');
		$link = $this->input->post('link');
		$id = $this->input->post('id');

		$table='news_tb';
		$data=array('link'=>$link,'media'=>$media,'title'=>$title);
		$where=array('id'=>$id);
		
		$this->general_model->update_data($table,$data,$where);
		redirect('tjadmin/news');
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
		
		$table='news_tb';
		$data=array('active'=>$active);
		$where=array('id'=>$id);
		$this->general_model->update_data($table,$data,$where);
		
		redirect('tjadmin/news');
	}
	
}?>