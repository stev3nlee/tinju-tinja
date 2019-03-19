<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Infografis extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('info_grafis_model');
		$this->load->model('user_model');
		$this->load->model('pulau_model');
		$this->load->model('point_model');
		$this->load->model('general_model');
		$this->data['curr_page']='infografis';
		$this->data['title']="Infografis";
	}


	function index()
	{
		$this->data['pulau']=$this->pulau_model->get_pulau_active();
		$this->data['image'] = $this->info_grafis_model->get_list();
		$this->data['content']='content/infografis'; 
		$this->load->view('common/body',$this->data);
	}	

	function download($image,$infografis_id)
	{
		$this->load->helper('download');
		$image_path = $this->config->item('base_url') . "userdata/info_grafis/$image";
		header('Content-Type: application/octet-stream');
		header("Content-Disposition: attachment; filename=$image");

		ob_clean();
		flush();
		readfile($image_path);

		if($this->session->userdata('user_logged_in')){
		$user_id=$this->session->userdata('user_id');
		$this->load->model('point_model');
				
			$table='user_download_infografis_tb';
			$data=array('user_id'=>$user_id,'infografis_id'=>$infografis_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
			$table='user_point_tb';
			$type=7;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
		}
		else{
		$msg="not logged in";
		}
	
	}
	
	function get_image($uid,$infografis_id)
	{
		$this->load->helper('download');
		$detail=$this->info_grafis_model->get_user_infografis_detail($uid);
		$image_path = $this->config->item('base_url') . "userdata/user_infografis/".$detail['image'];
		header('Content-Type: application/octet-stream');
		header("Content-Disposition: attachment; filename=".$detail['image']);

		ob_clean();
		flush();
		readfile($image_path);

		if($this->session->userdata('user_logged_in')){
		$user_id=$this->session->userdata('user_id');
				
			$table='user_download_personal_infografis_tb';
			$data=array('user_id'=>$user_id,'infografis_id'=>$infografis_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
			$table='user_point_tb';
			$type=7;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
		}
		else{
		$msg="not logged in";
		}
	
	}
	
	function get_fb_photos(){
		
		$this->load->model('user_model');
		$user_id=$this->session->userdata('user_id');
		$detail=$this->user_model->user_detail($user_id);
		
		$imageURL = "http://graph.facebook.com/".$detail['fb_id']."/picture?type=large";
		$newImageURL = "./userdata/user_infografis/".$detail['fb_id'].".jpg";
		copy($imageURL,$newImageURL); //Copy dari FB server to Local 
		
		$templateLocation="./userdata/template_infografis/template.png"; //Lokasi Template Kita
		
		$src = imagecreatefromjpeg($newImageURL); //Process ImageProfile Masukin ke memory
		$dest = imagecreatefrompng($templateLocation);
		
		imagesavealpha($dest, true);
		
				
		$canvas = imagecreatetruecolor(1200,3139);
		imagecopymerge($canvas, $src, 530, 462, 0, 0, 140, 140, 100);
		
		
		imagecopyresampled($canvas, $dest, 0, 0, 0, 0, 1200, 3139, 1200, 3139);
		
		$newInfoGrafis= "./userdata/user_infografis/ig-".$detail['fb_id'].".jpg";
		imagejpeg($canvas, $newInfoGrafis);

	}
	
	
	function get_fb_photo($pulau_id=1){
		if($this->session->userdata('user_logged_in')){
		$this->load->model('user_model');
		$user_id=$this->session->userdata('user_id');
		$detail=$this->user_model->user_detail($user_id);
		
		$id=$pulau_id;
		$this->load->model('pulau_model');
		$pulau=$this->pulau_model->get_pulau_detail($id);
		if($this->session->userdata('lang')=='id'){
		$templateLocation=base_url().'userdata/pulau/'.$pulau['image'];
		}
		else{
		$templateLocation=base_url().'userdata/pulau/'.$pulau['image_en'];
		}
		
		$imageURL = "http://graph.facebook.com/".$detail['fb_id']."/picture?type=large";
		$newImageURL = "./userdata/user_infografis/".$detail['fb_id'].".jpg";
		copy($imageURL,$newImageURL); //Copy dari FB server to Local 
		
		//$templateLocation="./userdata/template_infografis/template.png"; //Lokasi Template Kita
		
		$src = imagecreatefromjpeg($newImageURL); //Process ImageProfile Masukin ke memory
		$dest = imagecreatefrompng($templateLocation);
		imagesavealpha($dest, true);
		
		
		$canvas = imagecreatetruecolor(960,2985);
		//imagecopymerge($canvas, $src, 116, 728, 0, 0, 83, 83, 100);//merge profile picture to empty canvas
		imagecopyresampled($canvas, $src, 116, 728, 0, 0, 83, 83, 200,200);//merge template to canvas with profile picture
		imagecopyresampled($canvas, $dest, 0, 0, 0, 0, 960,2985, 960,2985);//merge template to canvas with profile picture
		
		$red = imagecolorallocate($canvas, 224, 28, 36);
		$font = './font/dinblack.ttf';
		$font_size = 14;
		$angle = 0;
		$name=$detail['name'];
		$name_explode = explode(" ", $name);
		$text=$name_explode[0];
		$text = strtoupper($text);		
			
				
		$text_box = imagettfbbox($font_size,$angle,$font,$text);
		$text_width = $text_box[2]-$text_box[0];
		$text_height = $text_box[7]-$text_box[1];
		
		$pointX= 156;
		$pointY= 828;
		
		$x = $pointX - ($text_width/2);
		$y = $pointY - ($text_height/2);
		
		imagettftext($canvas, $font_size, 0, $x, $y, $red, $font, $text);
		
		$new_name="ig-".$detail['fb_id'].".jpg";
		$newInfoGrafis= "./userdata/user_infografis/".$new_name;
		imagejpeg($canvas, $newInfoGrafis,90);

		return $new_name;
		}
		else{
		
		}
	}
	
	function make_infografis(){
		if($this->session->userdata('user_logged_in')){
			
			
			$this->load->model('general_model');
			
			$pulau_id=$this->input->post('pulau_id');
			$user_id=$this->session->userdata('user_id');
			$image=$this->get_fb_photo($pulau_id);
			
			
			$uid=uniqid();
			$table='user_infografis_tb';
			$data=array('user_id'=>$user_id,'created_date'=>date("Y-m-d H:i:s"),'uid'=>$uid,'image'=>$image,'pulau_id'=>$pulau_id);
			$this->general_model->insert_data($table,$data);
			
			$table='user_point_tb';
			$type=8;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
			////tambah point disini
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge, 5 fb share infografis, 6 tw share infografis, 7 download infografis, 8 make infografis, 9 download pdf daerah(provinsi)
			
			$this->load->model('pulau_model');
			$pulau=$this->pulau_model->get_pulau_detail($pulau_id);
			
			redirect('infografis/pulau/'.strtolower($pulau['name']).'/'.$uid);
		}
		else{
			$this->session->set_flashdata('notif','Please login first');
			redirect('infografis');
		}
	}
	
	
	function pulau($pulau='',$uid=''){
		if($uid==''){
			$this->session->set_flashdata('notif','infografis not found');
			redirect('infografis');
		}
		
		
		
		$this->data['pulau']=$this->pulau_model->get_pulau_active();
		$this->data['detail']=$detail=$this->info_grafis_model->get_user_infografis_detail($uid);
		
		
		$this->load->model('pulau_model');
		$this->data['pulau_detail']=$pulau_detail=$this->pulau_model->get_pulau_detail($detail['pulau_id']);
		$this->data['title']=$pulau_detail['name'];
		$this->data['content']='content/infografis_complete'; 
		$this->load->view('common/body',$this->data);	
	}

	function fb_cmplt(){
		if($this->session->userdata('user_logged_in')){
		$user_id=$this->session->userdata('user_id');
		$this->load->model('point_model');
		
		$infografis_id=$this->input->post('infografis_id');
		$check=$this->point_model->check_share_infografis_count($user_id,$infografis_id);
		
		
		if($check['total']==0){
				
			$table='user_share_infografis_tb';
			$data=array('user_id'=>$user_id,'infografis_id'=>$infografis_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
			
			$table='user_point_tb';
			$type=5;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
		$msg='new';
		}
		else{
			
			$table='user_share_infografis_tb';
			$data=array('user_id'=>$user_id,'infografis_id'=>$infografis_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);

			$table='user_point_tb';
			$type=6;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
		$msg='already share this infografis';
		}
		//echo json_encode(array('status'=>1,'msg'=>$msg));
		}
		else{
		$msg="not logged in";
		//echo json_encode(array('status'=>0,'msg'=>$msg));
		}
		
		echo json_encode(array('status'=>0,'msg'=>$msg));
		exit();
	}

	function tw_cmplt(){
		if($this->session->userdata('user_logged_in')){
		$user_id=$this->session->userdata('user_id');
		$this->load->model('point_model');
		
		$infografis_id=$this->input->post('infografis_id');
		$check=$this->point_model->check_share_infografis_count($user_id,$infografis_id);
		
		
		if($check['total']==0){
				
			$table='user_share_infografis_tb';
			$data=array('user_id'=>$user_id,'infografis_id'=>$infografis_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
			
			$table='user_point_tb';
			$type=6;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
		$msg='new';
		}
		else{
			
			$table='user_share_infografis_tb';
			$data=array('user_id'=>$user_id,'infografis_id'=>$infografis_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);

			$table='user_point_tb';
			$type=6;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
		$msg='already share this infografis';
		}
		//echo json_encode(array('status'=>1,'msg'=>$msg));
		}
		else{
		$msg="not logged in";
		//echo json_encode(array('status'=>0,'msg'=>$msg));
		}
		
		echo json_encode(array('status'=>0,'msg'=>$msg));
		exit();
	}


	function fb_cmplt_personal(){
		if($this->session->userdata('user_logged_in')){
		$user_id=$this->session->userdata('user_id');
		$this->load->model('point_model');
		
		$infografis_id=$this->input->post('infografis_id');
		$check=$this->point_model->check_share_personal_infografis_count($user_id,$infografis_id);
		
		
		if($check['total']==0){
				
			$table='user_share_personal_infografis_tb';
			$data=array('user_id'=>$user_id,'infografis_id'=>$infografis_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
			
			$table='user_point_tb';
			$type=5;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
		$msg='new';
		}
		else{
			
			$table='user_share_personal_infografis_tb';
			$data=array('user_id'=>$user_id,'infografis_id'=>$infografis_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);

			$table='user_point_tb';
			$type=6;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
		$msg='already share this infografis';
		}
		//echo json_encode(array('status'=>1,'msg'=>$msg));
		}
		else{
		$msg="not logged in";
		//echo json_encode(array('status'=>0,'msg'=>$msg));
		}
		
		echo json_encode(array('status'=>0,'msg'=>$msg));
		exit();
	}

	function tw_cmplt_personal(){
		if($this->session->userdata('user_logged_in')){
		$user_id=$this->session->userdata('user_id');
		$this->load->model('point_model');
		
		$infografis_id=$this->input->post('infografis_id');
		$check=$this->point_model->check_share_personal_infografis_count($user_id,$infografis_id);
		
		
		if($check['total']==0){
				
			$table='user_share_personal_infografis_tb';
			$data=array('user_id'=>$user_id,'infografis_id'=>$infografis_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
			
			$table='user_point_tb';
			$type=6;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
		$msg='new';
		}
		else{
			
			$table='user_share_personal_infografis_tb';
			$data=array('user_id'=>$user_id,'infografis_id'=>$infografis_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);

			$table='user_point_tb';
			$type=6;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
		$msg='already share this infografis';
		}
		//echo json_encode(array('status'=>1,'msg'=>$msg));
		}
		else{
		$msg="not logged in";
		//echo json_encode(array('status'=>0,'msg'=>$msg));
		}
		
		echo json_encode(array('status'=>0,'msg'=>$msg));
		exit();
	}
	
}