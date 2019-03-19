<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Homebanner extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')==false) redirect('tjadmin/login');
		$this->load->model('banner_model');
		$this->load->model('category_model');
		$this->load->model('general_model');
	} 

	function index(){
		$this->data['homebanner'] = $this->banner_model->get_homebanner();
		$this->data['content'] = 'admin/homebanner/list';
		$this->data['dropdown'] = $this->category_model->get_category();
		$this->load->view('common/admin/body', $this->data);
	}


	public function by_category($category_id=null)
    {   
        $this->data['category']=$this->banner_model->get_category_by_parent($category_id);
        $this->data['homebanner'] = $this->banner_model->get_homebanner($category_id);
        $this->data['content'] = 'admin/homebanner/list';
        $this->data['dropdown'] = $this->category_model->get_category();
        $this->load->view('common/admin/body', $this->data);

    }
	
	function add(){
		$this->data['content'] = 'admin/homebanner/add';
		$this->data['dropdown'] = $this->category_model->get_category();
		$this->load->view('common/admin/body', $this->data);
	}
	
	function do_add(){
		$description_id = $this->input->post('description_id');
		$description_en = $this->input->post('description_en');
		$category = $this->input->post('category_id');
		$link = $this->input->post('link');
		
		$config['upload_path'] = 'userdata/homeBanner';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload');
		$this->upload->initialize($config);
		
		$precedence = cat_precedence('homebanner_tb',$category)+1;

		if(!$this->upload->do_upload('image'))
		{
			$image='';
		}
		else
		{
			$data = $this->upload->data('file_name');
			$image=$data['file_name'];	
		}
		
		
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('image_mobile'))
		{
			$image_mobile='';
		}
		else
		{
			$data = $this->upload->data('file_name');
			$image_mobile=$data['file_name'];	
		}
	
	
		$table='homebanner_tb';
		$data=array('category_id'=>$category,'link'=>$link,'image'=>$image,'precedence'=>$precedence,'description_id'=>$description_id,'description_en'=>$description_en,'image_mobile'=>$image_mobile);
		$this->general_model->insert_data($table,$data);
				
		$id=mysql_insert_id();
		
		redirect('tjadmin/homebanner/by_category/'.$category);
	}
	
	function up($id, $category_id)
	{
		$this->banner_model->up($id, $category_id);
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function down($id, $category_id)
	{
		$this->banner_model->down($id, $category_id);
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function do_delete($id)
	{
		$prev = find('image',$id,'homebanner_tb');
		$image_path = realpath(APPPATH . '../userdata/homeBanner');
		$pospic =  $image_path . "/" .  $prev;
		
		$precedence_temp = find('precedence', $id, 'homebanner_tb');
		
		$this->general_model->delete_data('homebanner_tb',array('id'=>$id));
		if(file_exists($pospic)){
			unlink($pospic);
		}
		
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function edit($id){
		$this->data['banner']=$this->banner_model->get_homebanner_detail($id);
		$this->data['dropdown'] = $this->category_model->get_category();
		$this->data['content'] = 'admin/homebanner/edit';
		$this->load->view('common/admin/body', $this->data);
	}
	
	function do_edit(){
		$description_id = $this->input->post('description_id');
		$description_en = $this->input->post('description_en');
		$category = $this->input->post('category_id');
		$link = $this->input->post('link');
		$id = $this->input->post('id');
		//$img = $_FILES['image'];
		if($category !== cat_nilai($id)){
			$precedence = cat_precedence('homebanner_tb',$category)+1;
		} else {
			$precedence = prec_nilai($id);
		}
		
		$prev = find('image',$id,'homebanner_tb');
		$prev_m = find('image_mobile',$id,'homebanner_tb');
				
		$image_path = realpath(APPPATH . '../userdata/homeBanner');
		
		$pospic = $image_path."/".$prev;
		$pospic_m = $image_path."/".$prev_m;
		
		$this->load->library('upload');
		$image=$prev;
		$config['upload_path'] = 'userdata/homeBanner';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);
		if(!$this->upload->do_upload('image'))
		{
			
		}
		else
		{
			if(file_exists($pospic)) unlink($pospic);
			$pic = $this->upload->data('file_name');
			$image=$pic['file_name'];
		}
		
		
		$this->upload->initialize($config);
		if(!$this->upload->do_upload('image_mobile'))
		{
			
		}
		else
		{
			if(file_exists($pospic_m)) unlink($pospic_m);
			$pic = $this->upload->data('file_name');
			$image_mobile=$pic['file_name'];
		}
		
		$table='homebanner_tb';
		$data=array('category_id'=>$category,'link'=>$link,'precedence'=>$precedence, 'image'=>$image,'description_id'=>$description_id,'description_en'=>$description_en,'image_mobile'=>$image_mobile);
		$where=array('id'=>$id);
		
		$this->general_model->update_data($table,$data,$where);
		redirect('tjadmin/homebanner/by_category/'.$category);
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
		
		$table='homebanner_tb';
		$data=array('active'=>$active);
		$where=array('id'=>$id);
		$this->general_model->update_data($table,$data,$where);
		
		redirect($_SERVER['HTTP_REFERER']);
	}
	
}?>