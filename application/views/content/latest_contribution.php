<div class="exampleBox">
    <div class="content">
    <?php 
	$no=1;$thumbs=$img='';
	if($latest_contribution)foreach($latest_contribution as $row){?>
        <div class="example">
            <div class="splBox">
            <a href="<?php echo site_url('lihat/galeri-kontribusi/'.$row['id'])?>" class="coverPicture">

                <?php if($row['type']==1){
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
					
					?>
                <?php /*<div class="videoWrapper">
                    <iframe width="560" height="349" id="video_src" src="https://www.youtube.com/embed/<?php echo $video_id?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <?php */?>
                <?php if($thumbs!='')$img=$thumbs;?>
            	<img src="<?php echo $img?>" height="230"><?php if($thumbs!=''){?><div class="playBtn"></div><?php }?>
                <?php }
                else if($row['type']==2){
					
					$resized='userdata/resize/'.$row['image'];
					if(file_exists($resized))
					$img=base_url().'userdata/resize/'.$row['image'];
					else
					$img=base_url().'userdata/contribution/'.$row['image'];
					
					
					//$img=base_url().'userdata/contribution/'.$row['image'];?>
                <img src="<?php echo $img?>" height="230">
                <?php }else{$img=base_url().'userdata/contents/header'.$no.'.png';?>
                <img src="<?php echo $img?>" height="230">
                <?php $no++;}?>
				<?php 
				//if($row['link']=='')$img=base_url().'userdata/test2.jpg';else $img=base_url().'userdata/test4.jpg';?>
                </a>
            </div>
            <h5><?php echo $row['user_name'];?></h5>
        </div>
	<?php }?>
    </div>
</div>