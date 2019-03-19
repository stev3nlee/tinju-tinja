<?php 
$thumbs=$img='';$no=1;
	//pre($contribution);
	if($contribution)foreach($contribution as $row){?>
	
	<?php 
	if($row['type']==1){
		if($row['link']!=''){
			if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $row['link'], $match)) {
				$video_id = $match[1];
			}
			else{
				$video_id='0';
			}
			
			if($video_id=='0'){
				$thumbs='';
			}
			else{
				$link="https://www.googleapis.com/youtube/v3/videos?part=snippet&id=".$video_id."&key=AIzaSyCJbDNexqeHijQ1bj3l5iTCnJZGDN7QTW0";
				
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $link);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_TIMEOUT, 10);
				$outputs = curl_exec($ch);
				curl_close($ch);
				$output=json_decode($outputs,1);
				
				$thumbs=$output['items'][0]['snippet']['thumbnails']['medium']['url'];
				$username=$output['items'][0]['snippet']['channelTitle'];
				$channel_id=$output['items'][0]['snippet']['channelId'];
				$title=$output['items'][0]['snippet']['title'];
				$publish=$output['items'][0]['snippet']['publishedAt'];
			
			
			}
		}
	}
?>
        <a href="<?php echo site_url('lihat/galeri-kontribusi/'.$row['cont_id']) ?>" class="sliderProvinceLeft">
            <div class="splBox">


            	<div class="coverPicture">
            <?php if($row['type']==1){
			if($thumbs!='')$img=$thumbs;	
			?>
            <?php /*<div class="videoWrapper">
                <iframe width="560" height="349" id="video_src" src="https://www.youtube.com/embed/<?php echo $video_id?>" frameborder="0" allowfullscreen></iframe>
            </div><?php */?>
            <img src="<?php echo $img?>" height="230"><?php if($thumbs!=''){?><div class="playBtn"></div><?php }?>
            <?php }
            else if($row['type']==2){
				$resized='userdata/resize/'.$row['image'];
				if(file_exists($resized))
				$img=base_url().'userdata/resize/'.$row['image'];
				else
				$img=base_url().'userdata/contribution/'.$row['image'];
				
				
			$x=getimagesize($img);//pre($x);
			//0==width 1 height
			if($x[1]<$x[0])$xxx='height="230"';
			else $xxx="";
			?>
            <img src="<?php echo $img?>" <?php echo $xxx?>>
            <?php }else{$img=base_url().'userdata/contents/header'.$no.'.png';
            ?>
            
            <img src="<?php echo $img?>">
            <?php }?>
            
            </div>
            <?php 
            /*$rand=rand(1,5);
            if($row['image']=='')$img=base_url().'userdata/contents/header'.$rand.'.png';else $img=base_url().'userdata/contribution/'.$row['image'];?>
            <?php 
			if($thumbs!='')$img=$thumbs;?>
            <?php /*if($thumbs!=''){?>
                <div class="videoWrapper">
                <iframe width="560" height="349" id="video_src" src="https://www.youtube.com/embed/<?php echo $video_id?>" frameborder="0" allowfullscreen></iframe>
                </div>
            <?php }else{?>
            	<div class="coverPicture"><img src="<?php echo $img?>" height="205"></div>
            <?php }	<div class="coverPicture"><img src="<?php echo $img?>" height="205"><?php if($thumbs!=''){?><div class="playBtn"></div><?php }?></div><?php */?>
           
            </div>
            <div class="splBox">
                <div class="profilePicture">
                <?php if($row['profile_picture']!='')$profile_pict=$row['profile_picture'];
                else $profile_pict=base_url().'userdata/contents/user.png';?>
                    <img src="<?php echo $profile_pict?>">
                </div>
                <span><?php echo ($row['user_name']=='')?"Username":$row['user_name']?></span>
                <?php if($row['ide']=='')$text='Bergabunglah dengan Aksi Nasional Tinju Tinja, bersama kita  beraksi melawan BABS';else {if(strlen($row['ide'])>75)$text=substr($row['ide'],0,75).'...';else $text=$row['ide'];}?>
                <p><?php echo $text?></p>
                <div class="nextBtn"><span></span></div>
            </div>
        </a>
<?php 
$no++;if($no==6)$no=1;
}?>
					
                    					