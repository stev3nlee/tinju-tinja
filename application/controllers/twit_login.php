<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Twit_login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('twitter/twitteroauth');
	
	}
	
	function xxx(){
		$this->load->view('content/text');
	}
	
	function close2(){
	echo "<script>window.opener.location.reload();self.close();</script>";
	}
	
	function close(){
		/*if(isset($_SESSION['twitter_login']) and $_SESSION['twitter_login']==1)
			echo "<script>window.opener.success_twitter();window.opener.location='".site_url('account')."';</script>";
		else
			echo "<script>alert('Silahkan coba login twitter kembali');window.close();</script>";*/
			
			
			/*if($this->session->flashdata('pledge')){
				//$this->session->set_flashdata('notif',$this->session->flashdata('notif'));
			echo "<script>window.opener.success_twitter();window.opener.showPopupPledgeComplete();window.opener.location='".$this->session->userdata('redirect_twitter')."';</script>";
				
			}
			else{
				*/
			//if($this->session->userdata('redirect_twitter')
			echo "<script>window.opener.location.reload();self.close();</script>";
			//}
		//redirect($this->session->userdata('redirect_twitter'));
	}
	
	function clear_twitter_login(){
		$_SESSION['twitter_login'] = NULL;
		$_SESSION['twitter_id'] = NULL;
		$_SESSION['twitter_username'] = NULL;
		$_SESSION['twitter_social_data'] = NULL;
		$_SESSION['twitter_email'] = NULL;
	}
	
	function twit_auto_share(){
		 
		$x = $_SESSION['access_token'];
		$twitteroauth = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $x['oauth_token'], $x['oauth_token_secret']);
	
		$user_info = $twitteroauth->get('account/verify_credentials');
 
		$twitteroauth->post('statuses/update', array('status' => 'tes'));
	}
	
	function index($status=null){
		if(isset($_SERVER['HTTP_REFERER']))
		$referer=$_SERVER['HTTP_REFERER'];
		else
		$referer=site_url();
		
		$pledge=$status;
		
		
		$this->session->set_userdata(array('redirect_twitter'=>$referer,'pledge'=>$pledge));
		
		//die(pre($this->session->userdata));
		$this->load->library('twitter/twitteroauth');
//		session_start();
			$twitteroauth = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
			// Requesting authentication tokens, the parameter is the URL we will be redirected to
			$request_token = $twitteroauth->getRequestToken(base_Url().'twit_login/get_twitter_data');
			
			// Saving them into the session
			
			$_SESSION['oauth_token'] = $request_token['oauth_token'];
			$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
			
			// If everything goes well..
			if ($twitteroauth->http_code == 200) {
				// Let's generate the URL and redirect
				$url = $twitteroauth->getAuthorizeURL($request_token['oauth_token']);
				header('Location: ' . $url);
			} else {
				// It's a bad idea to kill the script, but we've got to know when there's an error.
				die('Something wrong happened.');
			}
	}
	
	function get_twitter_data(){
		
		//die(pre($this->session->userdata));
		//pre($_GET);pre($_SESSION);exit();
		if (!empty($_GET['oauth_verifier']) && !empty($_SESSION['oauth_token']) && !empty($_SESSION['oauth_token_secret'])) {
			// We've got everything we need
			$twitteroauth = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
			// Let's request the access token
			$access_token = $twitteroauth->getAccessToken($_GET['oauth_verifier']);
			// Save it in a session var
			$_SESSION['access_token'] = $access_token;
			// Let's get the user's info
			$user_info = $twitteroauth->get('account/verify_credentials');
			// Print user's info
		
			//pre($user_info);exit();
			if (isset($user_info->error)) {
				// Something's wrong, go back to square 1  
				header("Location: ".site_url());
				
			} else {
				$_SESSION['oauth_token2'] = $_SESSION['oauth_token'];
				$_SESSION['oauth_token_secret2'] = $_SESSION['oauth_token_secret'];
			   //$twitter_otoken=$_SESSION['oauth_token'];
			   //$twitter_otoken_secret=$_SESSION['oauth_token_secret'];
				$email='';
				$uid = $user_info->id;
				$name = $user_info->name;
				$social_data = json_encode($user_info);
				$profile_picture2=$user_info->profile_image_url;
				
				$profile_picture=str_replace("_normal","_bigger",$profile_picture2);	
				
				
				$this->load->model('user_model');
				$this->load->model('general_model');
				
				$newdate=date("Y-m-d H:i:s");
				$check=$this->user_model->check_tw_id($uid);
				if($check){
					//update data
					$user_id=$check['id'];
					$table='user_tb';
					$where=array('id'=>$user_id);
					$data=array('tw_data'=>$social_data,'profile_picture'=>$profile_picture);
					$this->general_model->update_data($table,$data,$where);
				
					$sess_user = array (
										   'user_logged_in' => true,
										   'user_id' => $check['id'],
										   'email' => $email,
										   'name' => $name ,
										   'session_login'=>'twitter' 
										);
					$this->session->set_userdata($sess_user);
				
				
				
					//echo json_encode(array('status'=>1,'message'=>'update'));exit();
				}
				else{
					//insert new user
					$table='user_tb';
					$data=array('email'=>'','tw_data'=>$social_data
					,'name'=>$name,'created_date'=>$newdate,'tw_id'=>$uid,'profile_picture'=>$profile_picture);
					$this->general_model->insert_data($table,$data);
					
					$user_id=mysql_insert_id();
						
					$sess_user = array (
										   'user_logged_in' => true,
										   'user_id' => $user_id,
										   'email' => $email,
										   'name' => $name ,
										   'session_login'=>'twitter' 
										);
					$this->session->set_userdata($sess_user);
					//echo json_encode(array('status'=>1,'message'=>'insert'));exit();
				}
				
				
				
				
		
				$pledges=$this->session->userdata('pledge');
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
						//$this->session->set_flashdata('notif','Pledged on twitter');
				
						$this->session->set_userdata(array('pledge_complete'=>'1','pledge_type'=>1));
					}else{
						$this->session->set_userdata(array('pledge_complete'=>'1','pledge_type'=>1));
						//$this->session->set_flashdata('notif','Already Pledged on twitter');
					}
						
					$this->session->set_userdata(array('pledge'=>0));
						
					}
				//exit();
				/*$_SESSION['twitter_login'] = 1;
				$_SESSION['twitter_id'] = $user_info->id;
				$_SESSION['twitter_username'] = $user_info->screen_name;
				$_SESSION['twitter_social_data'] = $social_data;
				$_SESSION['twitter_email'] = '';
				*/
				//echo json_encode(array('status'=>0,'message'=>'error'));exit();
				
				//pre($this->session->userdata);exit();
				redirect('twit_login/close');
			}
		} else {
			$this->session->set_flashdata('notif','login twitter failed, please contact administrator');
			redirect('twit_login/close');
		}	
	}
}
?>