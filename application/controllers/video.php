<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Video extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('video_model');
		$this->data['curr_page']='video';
		$this->data['title']="Tonton Video";
		}


	function index()
	{
		$this->data['video'] = $this->video_model->get_video();
		$this->data['content']='content/video'; 
		$this->load->view('common/body',$this->data);
	}	
}