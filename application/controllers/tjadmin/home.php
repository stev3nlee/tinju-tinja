<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')==false)redirect('tjadmin/login');
		
	}
	
	function upload($config,$file){
		$this->load->library('upload');
		$this->upload->initialize($config);
		if($this->upload->do_upload($file))
			return true;
		return false;
	}
	
	function index(){
		$this->data['content']='admin/home';
		$this->load->view('common/admin/body',$this->data);
	}
	
	function add_image(){
		$image='';
		$config['upload_path'] = 'userdata/contents';
		$config['allowed_types'] = 'jpg|gif|png';
		$config['encrypt_name'] = TRUE; 
		$this->load->library('upload', $config);
		
			if ( ! $this->upload->do_upload('file'))
			{
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$data = $this->upload->data();
				$image = $data['file_name'] ; 
			}
		
			$array = array(
			'filelink' => base_url()."userdata/contents/".$image
		);
		
		echo stripslashes(json_encode($array));
	}
}