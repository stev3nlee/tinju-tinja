<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class About_us extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('press_conference_model');
		$this->load->model('news_model');
		$this->load->model('testimonial_model');
		$this->load->model('about_us_category_model');
		$this->load->model('about_us_model');
		$this->data['curr_page']='about_us';
		$this->data['category']=$this->about_us_category_model->get_active_category();
		}

	function index(){
		//$this->detail_page('aksi_nasional_tinju_tinja');
		redirect('about_us/aksi_nasional_tinju_tinja');
	}
	
	function aksi_nasional_tinju_tinja(){
		$this->data['alias']=$alias='aksi-nasional-tinju-tinja';
		$this->data['title']="Aksi Nasional Tinju Tinja";
		
        $this->data['detail']=$this->about_us_category_model->get_list_edit2($alias);
		$this->data['about_detail']=$this->about_us_model->get_content_detail_by_alias($alias);
		$this->data['content']='content/about'; 
		$this->load->view('common/body',$this->data);
	}
	
	function press_release(){
		$this->data['alias']=$alias='press-release';
		$this->data['title']="Press Release";
        $this->data['detail']=$this->about_us_category_model->get_list_edit2($alias);
		$this->data['press_con']=$this->press_conference_model->get_press_con_active();
		$this->data['news_article']=$this->news_model->get_active_news();
		$this->data['content']='content/about_press_release'; 
		$this->load->view('common/body',$this->data);
	}
	
	function dampak_dan_ancaman_babs(){
		$this->data['alias']=$alias='dampak-dan-ancaman-babs';
		$this->data['title']="Dampak dan Ancaman BABS";
        $this->data['detail']=$this->about_us_category_model->get_list_edit2($alias);
		$this->data['about_detail']=$this->about_us_model->get_content_detail_by_alias($alias);
		$this->data['content']='content/about_dampak_babs'; 
		$this->load->view('common/body',$this->data);	
	}
	
	function keuntungan_bebas_dari_babs(){
		$this->data['alias']=$alias='keuntungan-bebas-dari-babs';
		$this->data['title']="Keuntungan Bebas Dari BABS";
        $this->data['detail']=$this->about_us_category_model->get_list_edit2($alias);
		$this->data['about_detail']=$this->about_us_model->get_content_detail_by_alias($alias);
		$this->data['content']='content/about_keuntungan_odf'; 	
		$this->load->view('common/body',$this->data);
	}
	
	function mereka_yang_terbebas_dari_babs(){
		$this->data['alias']=$alias='mereka-yang-terbebas-dari-babs';
		$this->data['title']="Mereka Yang Terbebas Dari BABS";
        $this->data['detail']=$this->about_us_category_model->get_list_edit2($alias);
		$this->data['testimonial']=$this->testimonial_model->get_active_testimony();
		$this->data['content']='content/about_bebas_odf'; 	
		$this->load->view('common/body',$this->data);
	}
	
	function detail_page($alias)
	{
		$this->data['category']=$this->about_us_category_model->get_active_category();

		if ($alias=="press-release")
		{
			$this->data['press_con']=$this->press_conference_model->get_press_con_active();
			$this->data['news_article']=$this->news_model->get_active_news();
			$this->data['content']='content/about_press_release'; 
		}
		else if($alias=="aksi-nasional-tinju-tinja")
		{
       		$this->data['about_detail']=$this->about_us_model->get_content_detail_by_alias($alias);
			$this->data['content']='content/about'; 
		}
		else if($alias=="dampak-dan-ancaman-babs")
		{
       		$this->data['about_detail']=$this->about_us_model->get_content_detail_by_alias($alias);
			$this->data['content']='content/about_dampak_babs'; 
		}
		else if($alias=="keuntungan-bebas-dari-babs")
		{
       		$this->data['about_detail']=$this->about_us_model->get_content_detail_by_alias($alias);
			$this->data['content']='content/about_keuntungan_odf'; 
		}
		else if($alias=="mereka-yang-terbebas-dari-babs")
		{
			$this->data['testimonial']=$this->testimonial_model->get_active_testimony();
			$this->data['content']='content/about_bebas_odf'; 
		}
		else {
			redirect('about_us/detail_page/aksi-nasional-tinju-tinja');
		}

		$this->load->view('common/body',$this->data);
	}
}