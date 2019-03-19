<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class about_us extends CI_Controller {
    function __construct(){
        parent::__construct();
        if($this->session->userdata('admin_logged_in')==FALSE)
            redirect('tjadmin/login');

        $this->load->model('about_us_model');
        $this->load->model('about_us_category_model');
    }

    function index(){
        $this->data['about_us']=$this->about_us_model->get_list();
        $this->data['content']='admin/about_us/list';
        $this->load->view('common/admin/body',$this->data);
    }

    function add(){
        $this->data['category']= $this->about_us_category_model->get_list();
        $this->data['content']='admin/about_us/add';
        $this->load->view('common/admin/body',$this->data);

    }

    function store(){
        $title=$this->input->post('title');
        $title_en=$this->input->post('title_en');
        $categories_id=$this->input->post('categories');
        $content=$this->input->post('description');
        $content_en=$this->input->post('description_en');

        $categories_check= $this->about_us_model->check_categories($categories_id);

        if ($categories_check)
        {

            $this->session->set_flashdata('validation_errors', 'One categories can submit one description');
            redirect($_SERVER['HTTP_REFERER']);
        }


        $data=array(
            'title'=>$title,
            'title_en'=>$title_en,
            'categories_id'=>$categories_id,
            'content'=>$content,
            'content_en'=>$content_en,
            'status' => 1
        );

        $this->about_us_model->insert_description($data);
        redirect('tjadmin/about_us');

    }
    function edit($id=null){
        $this->data['category']= $this->about_us_category_model->get_list();
        $this->data['list']=$this->about_us_model->get_list_edit($id);

        $this->data['content']='admin/about_us/edit';
        $this->load->view('common/admin/body',$this->data);

    }

    function update($id=null){
        $title=$this->input->post('title');
        $title_en=$this->input->post('title_en');
        $categories_id=$this->input->post('categories');
        $content=$this->input->post('content');
        $content_en=$this->input->post('content_en');
        $status = $this->input->post('status');


        $categories_check_same = $this->about_us_model->check_categories_same($categories_id,$id);
        $categories_check= $this->about_us_model->check_categories($categories_id);
        if($categories_check_same)
        {

            $data=array(
                'title'=>$title,
                'title_en'=>$title_en,
                'categories_id'=>$categories_id,
                'content'=>$content,
                'content_en'=>$content_en,
                'status' => $status,
            );

            $this->about_us_model->update_description($data,$id);
            redirect('tjadmin/about_us');

        }

        else if ($categories_check)
        {

            $this->session->set_flashdata('validation_errors', 'One categories can submit one description');
            redirect($_SERVER['HTTP_REFERER']);
        }

        else
        {
            $data=array(
                'title'=>$title,
                'title_en'=>$title_en,
                'categories_id'=>$categories_id,
                'content'=>$content,
                'content_en'=>$content_en,
                'status' => $status,
            );

            $this->about_us_model->update_description($data,$id);
            redirect('tjadmin/about_us');

        }


    }

    function delete( $id = NULL) {

        $this->about_us_model->delete($id);
        $this->session->set_flashdata('messages', 'Success Delete title');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function active($id = NULL)
    {
        $this->about_us_model->active($id);
        $this->session->set_flashdata('messages', 'Berhasil Mengubah status menjadi active');
        redirect($_SERVER['HTTP_REFERER']);
    }
    function inactive($id = NULL)
    {
        $this->about_us_model->inactive($id);
        $this->session->set_flashdata('messages', 'Berhasil Mengubah status menjadi inactive');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function details($id=null){
        $this->data['list']=$this->about_us_model->get_list_edit($id);
        $this->data['content']='admin/about_us/details';
        $this->load->view('common/admin/body',$this->data);

    }




}