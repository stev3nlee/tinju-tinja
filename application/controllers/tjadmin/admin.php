<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('admin_logged_in')==false) redirect('tjadmin/login');
		$this->load->model('admin_model');
		$this->load->model('general_model');
	}

	function index(){
		$this->data['social'] = $this->admin_model->get_social();
		$this->data['content'] = 'admin/admin/list';
		$this->load->view('common/admin/body', $this->data);
	}

	function edit(){
		$this->data['social1'] = $this->admin_model->get_social();
		$this->data['content'] = 'admin/admin/edit_social';
		$this->load->view('common/admin/body', $this->data);
	}


	function do_edit(){
		$fb = $this->input->post('fb');
		$tw = $this->input->post('tw');
		$ins = $this->input->post('ins');

		$table='social_media_tb';
		$data=array('facebook'=>$fb,'twitter'=>$tw,'instagram'=>$ins);
		$where=array();
		$this->general_model->update_data($table,$data,$where);
		redirect('tjadmin/admin');
	}
}
?>