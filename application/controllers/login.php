<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('general_model');
	}
	
	function index(){
		redirect('home');

	}
	
	function fb(){
		$this->load->model('user_model');
		$this->load->model('general_model');
		
		$fbid=$this->input->post('facebook_id');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$data_facebook=$this->input->post('data_facebook');
		$token=$this->input->post('token');
		$pledges=$this->input->post('pledge');
		
		$newdate=date("Y-m-d H:i:s");
		$check=$this->user_model->check_fb_id($fbid);
		$imageURL = "http://graph.facebook.com/".$fbid."/picture?type=large";
		if($check){
			//update data
			$user_id=$check['id'];
			$table='user_tb';
			$where=array('id'=>$user_id);
			$data=array('profile_picture'=>$imageURL,'fb_data'=>json_encode($data_facebook,TRUE),'fb_token'=>$token);
			$this->general_model->update_data($table,$data,$where);
			
			$sess_user = array (
								   'user_logged_in' => true,
								   'user_id' => $check['id'],
								   'email' => $email,
								   'name' => $name,
								   'session_login'=>'facebook'
								);
			$this->session->set_userdata($sess_user);
			
			if($pledges==1){
				$pledge=find('pledge',$user_id,'user_tb');
				if($pledge==0){
						
					$table='user_point_tb';
					$type=4;
					//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
					$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
					$this->general_model->insert_data($table,$data);
					
						
					$table='user_tb';
					$where=array('id'=>$user_id);
					$data=array('pledge'=>1);
					$this->general_model->update_data($table,$data,$where);
					//$this->session->set_flashdata('notif','Pledged on facebook');
					
					$this->session->set_userdata(array('pledge_complete'=>'1','pledge_type'=>2));
				}else{
					$this->session->set_userdata(array('pledge_complete'=>'1','pledge_type'=>2));
					//$this->session->set_flashdata('notif','Already Pledged on facebook');
				}
				
			}
			echo json_encode(array('status'=>1,'message'=>'update'));exit();
		}
		else{
			//insert new user
			$table='user_tb';
			$data=array('profile_picture'=>$imageURL,'fb_id'=>$fbid,'email'=>$email,'fb_data'=>json_encode($data_facebook,TRUE),'fb_token'=>$token
			,'name'=>$name,'created_date'=>$newdate);
			$this->general_model->insert_data($table,$data);
			
			$user_id=mysql_insert_id();
				
			$sess_user = array (
								   'user_logged_in' => true,
								   'user_id' => $user_id,
								   'email' => $email,
								   'name' => $name,
								   'session_login'=>'facebook'
								);
			$this->session->set_userdata($sess_user);
			
				
			if($pledges==1){
				$pledge=find('pledge',$user_id,'user_tb');
				if($pledge==0){
						
					$table='user_point_tb';
					$type=4;
					//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
					$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
					$this->general_model->insert_data($table,$data);
					
						
					$table='user_tb';
					$where=array('id'=>$user_id);
					$data=array('pledge'=>1);
					$this->general_model->update_data($table,$data,$where);
					//$this->session->set_flashdata('notif','Pledged on facebook');
				
					$this->session->set_userdata(array('pledge_complete'=>'1','pledge_type'=>2));
				}else{
					$this->session->set_userdata(array('pledge_complete'=>'1','pledge_type'=>2));
					//$this->session->set_flashdata('notif','Already Pledged on facebook');
				}
			}
			echo json_encode(array('status'=>1,'message'=>'insert'));
			exit();
		}
		
		
		echo json_encode(array('status'=>0,'message'=>'error'));exit();
	}
}