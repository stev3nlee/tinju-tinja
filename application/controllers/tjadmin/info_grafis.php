<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class info_grafis extends CI_Controller {
    function __construct(){
        parent::__construct();
        if($this->session->userdata('admin_logged_in')==FALSE)
            redirect('tjadmin/login');

        $this->load->model('info_grafis_model');
    }

    function index(){

        $this->data['info_grafis']=$this->info_grafis_model->get_list();
        $this->data['content']='admin/info_grafis/list';
        $this->load->view('common/admin/body',$this->data);
    }

    function most_share_infografis()
    {
        $this->data['infografis']=$this->info_grafis_model->get_share_infografis();
        $this->data['content']='admin/info_grafis/share_infografis_list'; 
        $this->load->view('common/admin/body',$this->data);
    }

    function add(){
        $this->data['content']='admin/info_grafis/add';
        $this->load->view('common/admin/body',$this->data);

    }

    function store(){

        $config['upload_path'] = './userdata/info_grafis';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload("image"))
        {
			$img='';
        }
        else
        {
            $file_data = $this->upload->data();
			$img=$file_data['file_name'];
           
        }
		
        $config['upload_path'] = './userdata/info_grafis';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload("image_en"))
        {
			$img_en='';
        }
        else
        {
            $file_data = $this->upload->data();
			$img_en=$file_data['file_name'];
           
        }
		
		$data = array(
			'image' => $img,
			'image_en' => $img_en,
			'status' => 1,
		);

		$this->info_grafis_model->insert($data);
		redirect('tjadmin/info_grafis');
    }

    function edit($id=null){
        $this->data['list']=$this->info_grafis_model->get_list_edit($id);
        $this->data['content']='admin/info_grafis/edit';
        $this->load->view('common/admin/body',$this->data);

    }

    function update($id=null)
    {
        /*$status= $this->input->post('status');

        $config['upload_path'] = './userdata/info_grafis';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size']	= '500';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload("image"))
        {
            $data = array(
                'status' => $status,
            );
            $this->info_grafis_model->update($data,$id);
            redirect($_SERVER['HTTP_REFERER']);
        }
        else
        {
            $result = $this->info_grafis_model->get_list_edit($id);
            unlink('userdata/info_grafis/'.$result[0]['image']);
            
            $file_data = $this->upload->data();

            $data = array(
                'image' => $file_data['file_name'],
                'status' => $status,
            );

            $this->info_grafis_model->update($data,$id);
            redirect($_SERVER['HTTP_REFERER']);
        }
		
		*/
		/////
            $result = $this->info_grafis_model->get_list_edit($id);
		
        $config['upload_path'] = './userdata/info_grafis';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload("image"))
        {
			$img=$result[0]['image'];
        }
        else
        {
            $file_data = $this->upload->data();
			$img=$file_data['file_name'];
           
        }
		
        $config['upload_path'] = './userdata/info_grafis';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload("image_en"))
        {
			$img_en=$result[0]['image_en'];
        }
        else
        {
            $file_data = $this->upload->data();
			$img_en=$file_data['file_name'];
           
        }
		
		$data = array(
			'image' => $img,
			'image_en' => $img_en,
			'status' => 1,
		);
		
            $this->info_grafis_model->update($data,$id);
		redirect('tjadmin/info_grafis');
    }

    function active($id = NULL)
    {
        $this->info_grafis_model->active($id);
        $this->session->set_flashdata('messages', 'Berhasil Mengubah status menjadi active');
        redirect($_SERVER['HTTP_REFERER']);
    }
    function inactive($id = NULL)
    {
        $this->info_grafis_model->inactive($id);
        $this->session->set_flashdata('messages', 'Berhasil Mengubah status menjadi inactive');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete( $id = NULL) {
        $result = $this->info_grafis_model->get_list_edit($id);
        unlink('userdata/info_grafis/'.$result[0]['image']);

        $this->info_grafis_model->delete($id);
        $this->session->set_flashdata('messages', 'Success Delete title');
        redirect($_SERVER['HTTP_REFERER']);
    }




}