<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Lihat extends CI_Controller{
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
		$this->data['title']='Lihat Galeri';//pre($this->uri->segment_array());
		}
	}


	function galeri($contribution_type=0,$daerah_id=0){
		$per_page=$this->data['per_page'];
		$this->data['offset']=$offset=0;
		$this->data['daerah_id']=$daerah_id;
		$this->data['contribution_type']=$contribution_type;
		$this->data['section_tab']='contribute';
		$this->data['section_tab2']='gallery';
		$this->data['title']='Lihat Galeri';
		$this->data['contribution']=$this->daerah_model->get_contribution_paging($contribution_type,$daerah_id,$offset,$per_page);
		
		$this->data['total_cont']=$this->daerah_model->get_contribution_paging_total($contribution_type,$daerah_id);
		
        $this->data['daerah'] = $this->daerah_model->get_daerah();
		$this->data['fakta'] = $this->fakta_model->get_active_fakta();
        $this->data['content']='content/take_action'; 
        $this->load->view('common/body',$this->data);
	}
	
	function galeri_kontribusi($contribution_id=0){
		if($contribution_id==0)redirect('lihat/galeri');
		$this->data['section_tab']='contribute';
		$this->data['section_tab2']='gallery';
		$this->data['title']='Galery Detailed';
		$this->data['detail']=$this->daerah_model->get_contribution_detail($contribution_id);
		
		if(!$this->data['detail'])redirect('lihat/galeri');
		$this->data['next']=$this->daerah_model->get_contribution_detail_next($contribution_id);
		$this->data['prev']=$this->daerah_model->get_contribution_detail_prev($contribution_id);
		
        $this->data['daerah'] = $this->daerah_model->get_daerah();
		$this->data['fakta'] = $this->fakta_model->get_active_fakta();
        $this->data['content']='content/take_action_gallery_detail'; 
        $this->load->view('common/body',$this->data);
	}
}