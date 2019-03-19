<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Infografis2 extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('info_grafis_model');
		}


	function index()
	{
		$this->data['image'] = $this->info_grafis_model->get_list();
		$this->data['content']='content/infografis'; 
		$this->load->view('common/body',$this->data);
	}	

	function download($image)
	{
		$this->load->helper('download');
		$image_path = $this->config->item('base_url') . "userdata/info_grafis/$image";
		header('Content-Type: application/octet-stream');
		header("Content-Disposition: attachment; filename=$image");

		ob_clean();
		flush();
		readfile($image_path);
	
	}
	
	function get_fb_photo(){
		
		$this->load->model('user_model');
		$user_id=$this->session->userdata('user_id');
		$detail=$this->user_model->user_detail($user_id);
		
		$id=1;
		$pulau=$this->pulau_model->get_pulau_detail($id);
		$templateLocation=base_url().'userdata/pulau/'.$pulau['image'];
		
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
		imagejpeg($canvas, $newInfoGrafis);

	}
}