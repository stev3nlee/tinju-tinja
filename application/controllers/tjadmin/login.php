<?php if(!defined("BASEPATH")) exit("Hack Attempt");
	class Login extends CI_Controller{
		function __construct(){
			parent::__construct();
			if($this->session->userdata('admin_logged_in')==true) redirect('tjadmin/home');
			$this->load->model('admin_model');
		}
		
		function index(){
			$this->data['content'] = 'admin/login';
			$this->load->view('common/admin/body', $this->data);
		}
		
		function do_login(){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			
			if(!$username || !$password){
				$this->session->set_flashdata('notif','Invalid Username or Password');
				redirect('tjadmin/login');
			}
			else{
				$login = $this->admin_model->login($username, $password);
				if ($login != NULL) {
					$sess_admin = array (
										   'admin_logged_in' => true,
										   'admin_id' => $login['id'],
										   'admin_name' => $login['name'],
										   'admin_username' => $login['username']
										);
					$this->session->set_userdata($sess_admin);
					
					$this->load->model('general_model');
					$this->general_model->update_data('admin_tb',array('last_login'=>date("Y-m-d H:i:s")),array('id'=>$login['id']));
					
					redirect ('tjadmin/home');
				}
				else {
					$this->session->set_flashdata('notif','Invalid Username or Password');
					redirect('tjadmin/login');
				}
			}
		}
		
	}?>