<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->session->userdata('lang');
		$this->load->model('banner_model');
		$this->load->model('category_model');
		$this->load->model('video_model');
		$this->load->model('daerah_model');
		$this->data['video'] = $this->video_model->get_active_video();
		$this->data['curr_page']='home';
		$this->data['title']='Home';
	//	pre($this->session->userdata);
	
	}
	
	function index(){
		$this->data['banner']=$this->banner_model->get_active_homebanner();
		$this->data['category'] = $this->category_model->get_active_category();	
		$this->data['contribution']=$this->daerah_model->get_contribution_daerah_home3();
		$this->data['content']='content/home'; 
		$this->load->view('common/body',$this->data);
	}

	function set_lang(){
		$lang=$this->input->post('lang');
		//$lang='en';
		$this->session->set_userdata(array('lang'=>$lang));
		echo json_encode(array('status'=>1));
	}
	function text(){
		echo "1";	
	}
}