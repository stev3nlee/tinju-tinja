<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class about_us_category extends CI_Controller {
    function __construct(){
        parent::__construct();
        if($this->session->userdata('admin_logged_in')==FALSE)
            redirect('tjadmin/login');

        $this->load->model('about_us_category_model');
    }

    function index(){

        $this->data['categories']=$this->about_us_category_model->get_list();
        $this->data['content']='admin/categories/list';
        $this->load->view('common/admin/body',$this->data);
    }

    function add(){
        $this->data['content']='admin/categories/add';
        $this->load->view('common/admin/body',$this->data);

    }

    function store(){
        $name=$this->input->post('name');
        $name_en=$this->input->post('name_en');

        $categories_check= $this->about_us_category_model->check_categories($name,$name_en);

        if ($categories_check)
        {
            $this->session->set_flashdata('validation_errors', 'Categories already has been inserted ');
            redirect($_SERVER['HTTP_REFERER']);
        }


        $data=array(
            'name'=>$name,
            'name_en'=>$name_en,
            'status' => 1
        );

        $this->about_us_category_model->insert($data);
        redirect('tjadmin/about_us_category');

    }
    function edit($id=null){
        $this->data['detail']=$this->about_us_category_model->get_list_edit($id);
        $this->data['content']='admin/categories/edit';
        $this->load->view('common/admin/body',$this->data);

    }

    function update($id=null){

		$prev = find('image',$id,'about_us_category_tb');
		$prev_m = find('image_mobile',$id,'about_us_category_tb');
				
		$image_path = realpath(APPPATH . '../userdata/about_us');
		
		$pospic = $image_path."/".$prev;
		$pospic_m = $image_path."/".$prev_m;
		
		$this->load->library('upload');
		
		$config['upload_path'] = 'userdata/about_us/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);
		if(!$this->upload->do_upload('image'))
		{
			$image=$prev;
		}
		else
		{
			if(file_exists($pospic)) unlink($pospic);
			$pic = $this->upload->data('file_name');
			$image=$pic['file_name'];
		}
		
		
		$config['upload_path'] = 'userdata/about_us/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$this->upload->initialize($config);
		if(!$this->upload->do_upload('image_mobile'))
		{
			$image_mobile=$prev_m;echo 's';
		}
		else
		{
			if(file_exists($pospic_m)) unlink($pospic_m);
			$pic2 = $this->upload->data('file_name');
			$image_mobile=$pic2['file_name'];
		}

        $data=array(
            'image_mobile'=>$image_mobile,
            'image'=>$image,
            'status' => 1
        );
        $this->about_us_category_model->update($data,$id);
pre($data);
//        redirect('tjadmin/about_us_category');


    }

    function delete( $id = NULL) {

        $this->about_us_category_model->delete($id);
        $this->session->set_flashdata('messages', 'Success Delete name');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function active($id = NULL)
    {
        $this->about_us_category_model->active($id);
        $this->session->set_flashdata('messages', 'Berhasil Mengubah status menjadi active');
        redirect($_SERVER['HTTP_REFERER']);
    }
    function inactive($id = NULL)
    {
        $this->about_us_category_model->inactive($id);
        $this->session->set_flashdata('messages', 'Berhasil Mengubah status menjadi inactive');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function details($id=null){
        $this->data['list']=$this->about_us_category_model->get_list_edit($id);
        $this->data['content']='admin/categories/details';
        $this->load->view('common/admin/body',$this->data);

    }




}