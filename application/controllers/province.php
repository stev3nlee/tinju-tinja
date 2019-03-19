<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Province extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('daerah_model');
		$this->load->model('general_model');
		$this->data['title']='Pelajari Dampak BABS di Indonesia';
	}


	function index()
	{
		$this->data['curr_page']='province';
		$this->data['daerah'] = $this->daerah_model->get_daerah();
		$this->data['province'] = $this->daerah_model->get_contribution_daerah_province();
		$this->data['content']='content/province'; 
		$this->load->view('common/body',$this->data);
	}	
	function detail($alias='')
	{

		$this->data['curr_page']='province_detail';
		if(!$alias)redirect('province');
		$this->data['daerah'] = $this->daerah_model->get_daerah();
		$x=$this->data['detail'] = $this->daerah_model->get_daerah_detail_by_alias($alias);
		if(!$this->data['detail'])redirect('province');
		$this->data['contributions']=$this->daerah_model->get_contribution_daerah2($alias);
		
		$this->data['title']=$x['name'];
		
		$this->data['content']='content/province_detail'; 
		$this->load->view('common/body',$this->data);
	}

	function download_pdf($pdf,$daerah_id)
	{
		$this->load->helper('download');
		$pdf_path = $this->config->item('base_url') . "userdata/upload_pdf/$pdf";
		header('Content-Type: application/octet-stream');
		header("Content-Disposition: attachment; filename=$pdf");

		ob_clean();
		flush();
		readfile($pdf_path);

		if($this->session->userdata('user_logged_in')){
		$user_id=$this->session->userdata('user_id');
		$this->load->model('point_model');
				
			$table='user_download_pdf_daerah_tb';
			$data=array('user_id'=>$user_id,'daerah_id'=>$daerah_id,'created_date'=>date("Y-m-d H:i:s"));
			$this->general_model->insert_data($table,$data);

		}
		else{
		$msg="not logged in";
		}
	}
}