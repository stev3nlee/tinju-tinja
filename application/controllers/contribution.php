<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Contribution extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('fakta_model');
        $this->load->model('daerah_model');
        $this->load->model('general_model');
		$this->data['section_tab']='';
		
		$this->data['section_tab2']='';
		$this->data['per_page']=15;
		
		
		$this->data['latest_contribution']=$this->daerah_model->get_latest_contributor();
		
		
		if($this->session->userdata('user_logged_in')){
        $this->load->model('user_model');
		$this->data['user_detail']=$this->user_model->user_detail($this->session->userdata('user_id'));
		}
		else{
		$this->data['user_detail']='';
		}
		
		//pre($this->data['user_detail']);
	}
	function yyy(){
		echo phpinfo();	
	}
	
	function xxx(){
/*echo 'display_errors = ' . ini_get('display_errors') . "\n";
echo 'register_globals = ' . ini_get('register_globals') . "\n";
echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
echo 'post_max_size+1 = ' . (ini_get('post_max_size')+1) . "\n";
echo 'post_max_size in bytes = ' . return_bytes(ini_get('post_max_size'));
*/
pre($_SERVER);
pre($_SESSION);
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
$chrome   = stripos($_SERVER['HTTP_USER_AGENT'],"Chrome");
$crios   = stripos($_SERVER['HTTP_USER_AGENT'],"crios");

//do something with this information
if( $iPod || $iPhone ){
    //browser reported as an iPhone/iPod touch -- do something here
	echo "ipodphone";
}else if($iPad){
    //browser reported as an iPad -- do something here
	echo "ipad";
}else if($Android){
    //browser reported as an Android device -- do something here
	echo "android";
}else if($webOS){
    //browser reported as a webOS device -- do something here
	echo "webos";
}

if($chrome){
	echo "using chrome";
}
if($crios){
	echo "using crhrome for ios";
}

if( ($iPod || $iPhone ) && $crios){
echo "nyotnyot";
}

pre($this->session->userdata);
	}


    function index()
    {
		$this->data['title']="Berikan Aksi";
        $this->data['daerah'] = $this->daerah_model->get_daerah();
        $this->data['fakta'] = $this->fakta_model->get_active_fakta();
		
		
		$per_page=$this->data['per_page'];
		$this->data['offset']=$offset=0;
		$this->data['daerah_id']=$daerah_id=0;
		$this->data['contribution_type']=$contribution_type=0;
		$this->data['contribution']=$this->daerah_model->get_contribution_paging($contribution_type,$daerah_id,$offset,$per_page);
		
		$this->data['total_cont']=$this->daerah_model->get_contribution_paging_total($contribution_type,$daerah_id);
		
		
        $this->data['content']='content/take_action'; 
        $this->load->view('common/body',$this->data);
    }   
	
	function lihat_galeri($contribution_type=0,$daerah_id=0){
		$per_page=$this->data['per_page'];
		$this->data['offset']=$offset=0;
		$this->data['daerah_id']=$daerah_id;
		$this->data['contribution_type']=$contribution_type;
		$this->data['section_tab']='contribute';
		$this->data['section_tab2']='gallery';
		$this->data['contribution']=$this->daerah_model->get_contribution_paging($contribution_type,$daerah_id,$offset,$per_page);
		
		$this->data['total_cont']=$this->daerah_model->get_contribution_paging_total($contribution_type,$daerah_id);
		
        $this->data['daerah'] = $this->daerah_model->get_daerah();
		$this->data['fakta'] = $this->fakta_model->get_active_fakta();
        $this->data['content']='content/take_action'; 
        $this->load->view('common/body',$this->data);
	}
	
	function berikan_aksi_pledge($contribution_type=0,$daerah_id=0){
		$section='ayo_berekspresi';
		$this->data['title']="Ayo berekspresi!";
		
		$per_page=$this->data['per_page'];
		$this->data['offset']=$offset=0;
		$this->data['daerah_id']=$daerah_id;
		$this->data['contribution_type']=$contribution_type;
		$this->data['section_tab']='contribute';
		$this->data['section_tab2']=$section;
		$this->data['contribution']=$this->daerah_model->get_contribution_paging($contribution_type,$daerah_id,$offset,$per_page);
		
		$this->data['total_cont']=$this->daerah_model->get_contribution_paging_total($contribution_type,$daerah_id);
		
        $this->data['daerah'] = $this->daerah_model->get_daerah();
		$this->data['fakta'] = $this->fakta_model->get_active_fakta();
        $this->data['content']='content/take_action'; 
        $this->load->view('common/body',$this->data);
	}
	
	function contribute($section='how_to',$contribution_type=0,$daerah_id=0){
		if($section=='how_to' or $section=='')
		$this->data['title']="Berikan Aksi";
		else if($section=="ayo_berekspresi")
		$this->data['title']="Ayo berekspresi!";
		else $this->data['title']="Kontribusi";
		
		$per_page=$this->data['per_page'];
		$this->data['offset']=$offset=0;
		$this->data['daerah_id']=$daerah_id;
		$this->data['contribution_type']=$contribution_type;
		$this->data['section_tab']='contribute';
		$this->data['section_tab2']=$section;
		$this->data['contribution']=$this->daerah_model->get_contribution_paging($contribution_type,$daerah_id,$offset,$per_page);
		
		$this->data['total_cont']=$this->daerah_model->get_contribution_paging_total($contribution_type,$daerah_id);
		
        $this->data['daerah'] = $this->daerah_model->get_daerah();
		$this->data['fakta'] = $this->fakta_model->get_active_fakta();
        $this->data['content']='content/take_action'; 
        $this->load->view('common/body',$this->data);
	}
	
	
	function gallery_detail($contribution_id=0){
		if($contribution_id==0)redirect('contribution/gallery');
		$this->data['section_tab']='contribute';
		$this->data['section_tab2']='gallery';
		$this->data['detail']=$this->daerah_model->get_contribution_detail($contribution_id);
		
		if(!$this->data['detail'])redirect('contribution/gallery');
		$this->data['next']=$this->daerah_model->get_contribution_detail_next($contribution_id);
		$this->data['prev']=$this->daerah_model->get_contribution_detail_prev($contribution_id);
		
        $this->data['daerah'] = $this->daerah_model->get_daerah();
		$this->data['fakta'] = $this->fakta_model->get_active_fakta();
        $this->data['content']='content/take_action_gallery_detail'; 
        $this->load->view('common/body',$this->data);
	}
	
	function load_more(){
		$per_page=$this->data['per_page'];
		$contribution_type=$this->input->post("contribution_type");
		$daerah_id=$this->input->post("daerah_id");
		$offset=$this->input->post("offset");
		
		$contribution=$this->data['contribution']=$this->daerah_model->get_contribution_paging($contribution_type,$daerah_id,$offset,$per_page);
		
		
       	$content= $this->load->view('content/contribution_list',$this->data,TRUE);
		if($contribution)$status=1;
		else $status=0;
		
		$next=$offset+$per_page;
		echo json_encode(array('status'=>$status,'content'=>$content,'offset'=>$next));
	}

	function share_fakta(){
		$this->data['section_tab']='fakta';
		$this->data['section_tab2']='';
		$this->data['title']='Share';
        $this->data['daerah'] = $this->daerah_model->get_daerah();
        $this->data['fakta'] = $this->fakta_model->get_active_fakta();
		
		
		$per_page=$this->data['per_page'];
		$this->data['offset']=$offset=0;
		$this->data['daerah_id']=$daerah_id=0;
		$this->data['contribution_type']=$contribution_type=0;
		$this->data['contribution']=$this->daerah_model->get_contribution_paging($contribution_type,$daerah_id,$offset,$per_page);
		
		$this->data['total_cont']=$this->daerah_model->get_contribution_paging_total($contribution_type,$daerah_id);
		
		
        $this->data['content']='content/take_action'; 
        $this->load->view('common/body',$this->data);
	}
	
    function action_login()
    {
        $this->data['daerah'] = $this->daerah_model->get_daerah();
        $this->data['fakta'] = $this->fakta_model->get_active_fakta();
        $this->data['content']='content/take_action_after_login'; 
        $this->load->view('common/body',$this->data);
    } 

    function add_contribution()
    {
		if($this->session->userdata('user_logged_in')){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $ide = $this->input->post('ide');
        $link = $this->input->post('link');
        $daerah_id = $this->input->post('daerah_id');
        $user_id = $this->session->userdata('user_id');
		
        $config['upload_path'] = 'userdata/contribution/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if($this->upload->do_upload('upload'))
        {
        	$data = $this->upload->data();
            $image=$data['file_name'];

            if($data['image_width']>620){

            $file_name_thumb = $data['raw_name'].'_thumb' . $data['file_ext'];

            $this->load->library('image_lib');
            $config_resize['image_library'] = 'gd2';
			$config_resize['maintain_ratio'] = TRUE;
			//$config_resize['create_thumb'] = TRUE;
			$config_resize['new_image'] = 'userdata/resize';
			$config_resize['quality'] = '80%';
			$config_resize['master_dim'] = 'width';
			$config_resize['width']	= 620;
			$config_resize['height'] = '1';
			$config_resize['source_image'] ='userdata/contribution/'.$image;

			 
			$this->image_lib->initialize($config_resize);
			$this->image_lib->resize();
 			//exit();
 			}
 			else
 			{
 				$data = $this->upload->data();
            	$image=$data['file_name'];
 			}
        }
        else
        {
        	$image='';
            
        }
        $err=$this->upload->display_errors();
		
		//0 all, 1 video, 2 image 3 text
		$type=3;
		if($link!='')$type=1;
		if($image!='')$type=2;
		
		
        $table='contribution_user_tb';
        $data=array('type'=>$type,'user_id'=>$user_id,'ide'=>$ide,'image'=>$image,'link'=>$link,'daerah_id'=>$daerah_id,'created_date'=>date("Y-m-d H:i:s"),'image_error'=>$err,'status'=>1);
		//(pre($data));
        $this->general_model->insert_data($table,$data);
        $last_id = mysql_insert_id();
		
		
		$table='user_tb';
		$data=array('email'=>$email);
		$where=array('id'=>$user_id);
		$this->general_model->update_data($table,$data,$where);
		//pre($data);

		if($daerah_id == "0")
		{

		}
		else{
			$table='daerah_tb';
			$data=array('contribution_id'=>$last_id,'contribution_date'=>date("Y-m-d H:i:s"));
			$where=array('id'=>$daerah_id);
			$this->general_model->update_data($table,$data,$where);
		}		
		
		
		$table='user_point_tb';
		$type=1;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
		$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
		$this->general_model->insert_data($table,$data);
		//pre($data);
        
		$this->session->set_flashdata('contribute','1');
		}
		else
		$this->session->set_flashdata('notif','Silahkan login');
		
		
		//pre($_POST);
		//pre($_FILES);
       	redirect('ayo-berekspresi');
    }   
	
	function tw_cmplt(){
		if($this->session->userdata('user_logged_in')){
			$user_id=$this->session->userdata('user_id');
			$this->load->model('point_model');
			
			$fact_id=$this->input->post('fact_id');
			$check=$this->point_model->check_share_fact_count($user_id,$fact_id);
			
			
			if($check['total']==0){
					
					
				$table='user_share_fakta_tb';
				$data=array('user_id'=>$user_id,'fakta_id'=>$fact_id,'created_date'=>date("Y-m-d H:i:s"));
				$this->general_model->insert_data($table,$data);
				
				$table='user_point_tb';
				$type=3;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge, 5 fb share infografis, 6 tw share infografis, 7 download infografis, 8 make infografis, 9 download pdf daerah(provinsi)
				$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
				$this->general_model->insert_data($table,$data);
				
				$msg='new';
			}
			else{
				
				$table='user_share_fakta_tb';
				$data=array('user_id'=>$user_id,'fakta_id'=>$fact_id,'created_date'=>date("Y-m-d H:i:s"));
				$this->general_model->insert_data($table,$data);

				$table='user_point_tb';
				$type=3;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge, 5 fb share infografis, 6 tw share infografis, 7 download infografis, 8 make infografis, 9 download pdf daerah(provinsi)
				$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
				$this->general_model->insert_data($table,$data);
				
				$msg='already share this fact';
			}
		
			
			
			
			echo json_encode(array('status'=>1,'msg'=>$msg));
		}
		else{
			$msg="not logged in";
			echo json_encode(array('status'=>0,'msg'=>$msg));
		}
		exit();
	}
	
	function fb_cmplt(){
		if($this->session->userdata('user_logged_in')){
		$user_id=$this->session->userdata('user_id');
		$this->load->model('point_model');
		
		$fact_id=$this->input->post('fact_id');
		$check=$this->point_model->check_share_fact_count($user_id,$fact_id);
		
		
		if($check['total']==0){
				
			$table='user_share_fakta_tb';
			$data=array('user_id'=>$user_id,'fakta_id'=>$fact_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
			
			$table='user_point_tb';
			$type=2;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
		$msg='new';
		}
		else{
			
			$table='user_share_fakta_tb';
			$data=array('user_id'=>$user_id,'fakta_id'=>$fact_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);

			$table='user_point_tb';
			$type=3;
			//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
			$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);
			
		$msg='already share this fact';
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
	
	function share_pledge(){
		if($this->session->userdata('user_logged_in')){
			$user_id=$this->session->userdata('user_id');
			$type=$this->input->post('type');
			
			//type 1 fb, 2 tw
			
			
			$pledge=find('share_pledge',$user_id,'user_tb');
			if($pledge==0){
					
				$table='user_point_tb';
				$type=4;
				//type 1 = contribution, 2 fb share, 3 tw share, 4 pledge
				$data=array('user_id'=>$user_id,'type'=>$type,'created_date'=>date("Y-m-d H:i:s"));
				$this->general_model->insert_data($table,$data);
				
					
				$table='user_tb';
				$where=array('id'=>$user_id);
				$data=array('share_pledge'=>1);
				$this->general_model->update_data($table,$data,$where);
				//$this->session->set_flashdata('notif','Pledged on facebook');
				
				echo json_encode(array('status'=>1,'msg'=>'share pledge completed'));exit();
				
			}else{
				echo json_encode(array('status'=>1,'msg'=>'already share pledge '));exit();
			}
			
		}
		else{
			echo json_encode(array('status'=>0,'msg'=>'not logged in'));exit();
		}
	}
	
	function like_this(){
		
		if($this->session->userdata('user_logged_in')){
			$user_id=$this->session->userdata('user_id');
			$id=$this->input->post('id');
			
			$this->load->model('daerah_model');
			$check=$this->daerah_model->check_like($user_id,$id);
			if($check){
				echo json_encode(array('status'=>0,'msg'=>'you already liked this'));
			}
			else{
				$table='user_like_contribution_tb';
				$datas=array('user_id'=>$user_id,'contribution_id'=>$id,'created_date'=>date("Y-m-d H:i:s"));
				$this->general_model->insert_data($table,$datas);
				
				
				
				$cont_detail=$this->daerah_model->get_contribution_detail($id);
				$next_count=$cont_detail['like_count']+1;
				
				$table='contribution_user_tb';
				$datass=array('like_count'=>$next_count);
				$where=array('id'=>$id);
				$this->general_model->update_data($table,$datass,$where);
				
				
				$cont_detail=$this->daerah_model->get_contribution_detail($id);
				$current_count=$cont_detail['like_count'];
				
				echo json_encode(array('status'=>1,'msg'=>'liked','current_count'=>$current_count));
			
				exit();
			}
		}
		else{
		redirect('home');
		}
	}
}