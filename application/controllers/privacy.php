<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Privacy extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('video_model');
		$this->data['curr_page']='video';
		}


	function index()
	{
		$this->data['content']='content/privacy'; 
		$this->load->view('common/body',$this->data);
	}	
}