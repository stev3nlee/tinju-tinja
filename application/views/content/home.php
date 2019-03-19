<section>
             <?php /* echo site_url('home/banner'.'/'.$cat['id']) */?>
        	<div class="container" id="homeBanner">
            	<div class="sliderWrapper">
                    <ul class="tabNav">
                    <?php 
                    $no=1;
                    if($category)foreach($category as $index=>$row){
                        if($no==1)$word='one';else if($no==2)$word='two';else $word='three';
                        
                        if($this->session->userdata('lang')=='id'){$name=$row['name_id'];} else {$name=$row['name_en'];}
                        ?>
                        <li id="tabs<?php echo $word?>" <?php if($no==1){?>class="active"<?php }?>><a href="#tabs-<?php echo $no?>"><?php echo $name?></a></li>
                    <?php $no++;}?>
                    </ul>
                    
                    <?php 
                    $no=1;
                    if($category)foreach($category as $row){
                        if($no==1)$word='one';else if($no==2)$word='two';else $word='three';
                        ?>
                    <div class="sliderBox" id="tabs-<?php echo $no?>">
                        <ul id="slider_<?php echo $word?>" class="slider">
                            <?php 
                                if($banner)foreach($banner as $ban){
                                    if($ban['category_id']==$row['id']){?>
                            <li>
                                <div class="sliderImgBox">
                                    <img class="desktop" src="<?php echo base_url() ?>userdata/homeBanner/<?php echo $ban['image'] ?>">
                                    <img class="mobile" src="<?php echo base_url() ?>userdata/homeBanner/<?php echo $ban['image_mobile'] ?>">
                                </div>
                                
                                
                                <div class="sliderInfoWrapper">
                                	<div class="sliderInfoBox">
                                    <div class="sliderInfoLeftWrapper">
                                            <div class="sliderInfoLeftBox">
                                             
                                                <div class="sliderInfoLeft">
                                                        <?php if($this->session->userdata('lang')=='id'){$description=$ban['description_id'];} else {$description=$ban['description_en'];} ?>
                                            <?php echo $description ?>
                
                                            <?php if($this->session->userdata('lang')=='id'){$read='Baca Lebih Lanjut';} else {$read='Read More';} ?>
                                            <a href="<?php echo prep_url($ban['link'])?>" class="defBtn"><?php echo $read ?></a>
                                                </div>
                                          	</div>
                                        </div>
                                        <div class="sliderInfoRightWrapper">
                                        	<div class="sliderInfoRightBox">
                                                <div class="sliderInfoRight">
                                                
                                                <?php if($this->session->userdata('lang')=='id')$btn1="Ayo Beraksi Melawan BABS";else $btn1="ACT NOW, FIGHT OPEN DEFECATION";?>
    	                                            <a href="#"><?php echo $btn1?></a>
	                                            </div>
        									</div>
                                		</div>
                                    </div>
                                </div>
                                
                                
                            </li>
                        <?php 
                                    }
                                }
                                ?>
                            
                        </ul>
                    </div>
                    <?php $no++;}?>
                    
                </div>
            </div>

            <div class="container" id="section_two">
            	<div class="content">
                    <div class="section_two_top">
                    	<h3><?php if($this->session->userdata('lang')=='id')echo "Lawan Buang Air Besar Sembarangan dengan Aksimu!";else echo "Fight Open Defecation with Your Action!"?></h3>
                        <?php if($this->session->userdata('lang')=='id'){?>
                        <p>
                        Bergabunglah dengan Aksi Nasional Tinju Tinja, bersama kita beraksi untuk bebaskan Indonesia dari ancaman Buang Air Besar Sembarangan (BABS)! <a href="#" style="font-weight:bold;text-decoration:underline;" id="show_province_btn">Pelajari dampaknya di sini</a>, dan berikan aksimu sekarang dengan pilihan aksi di bawah ini:</p>
                        <?php }else{?>
                        <p>Join Aksi Nasional Tinju Tinja (National Action of Tinju Tinja), let’s act together to free Indonesia from the threat of open defecation! <a href="#" style="font-weight:bold;text-decoration:underline;" id="show_province_btn">Learn about the impact here</a>, and give your act now with your choice the actions below:</p>
                        <?php }?>
                        <div class="counterBox">
                        	<?php echo $total_action;?>
                       		<span><?php if($this->session->userdata('lang')=='id')echo "Aksi telah diberikan";else echo "actions have been given";?></span>
                        </div>
                    </div>
                    <div class="section_two_bottom">
                    	<div class="pledgeBox">
                        	<h3>Pledge</h3>
                            <?php if($this->session->userdata('lang')=='id'){$btn2="Berikan Komitmenmu!";?>
                            <p>Berikan dan suarakan komitmenmu <br />dalam memerangi BABS bersama <br />Aksi Nasional Tinju Tinja!</p>
                            <?php }else{$btn2="Take The Pledge!";?>
                            <p>Show your commitment to fight open defecation with Aksi Nasional Tinju Tinja by taking the pledge!</p>
                            <?php }?>
                            
                            <?php //showPopupPledge()?>
                            <?php if($this->session->userdata('user_logged_in')){?>
                            <a href="<?php echo site_url('berikan-aksi-pledge')?>" class="defBtn"><span><?php echo $btn2?></span></a>
                            
                            <?php }else{?>
                            <a href="javascript:void(0)" class="defBtn facebook_login_pledge"><span><?php echo $btn2?></span></a>
                            <?php }?>
                        </div>
                        <div class="contributeBox">
                        	<h3>Contribute</h3>
                            <?php if($this->session->userdata('lang')=='id'){
							$btn3="Caranya";$btn4="Lihat Galeri";$btn5="Ayo Berekspresi!";	
								?>
                            <p>Berikan aksi nyata dengan kontribusimu melalui karya positif darimu, untuk <br />Indonesia bebas BABS!</p>
                            <?php }else{
								
							$btn3="Learn How";$btn4="View Submission";$btn5="Submit Now!";?>
                            <p>Act now to free Indonesia from open defecation!</p>
                            <?php }?>
                            <ul>
                            	<li><a href="<?php echo site_url('caranya-berkontribusi'); ?>"><?php echo $btn3?></a></li>
                                <li><a href="<?php echo site_url('lihat/galeri'); ?>"><?php echo $btn4?></a></li>
                            </ul>
                            <a href="<?php echo site_url('ayo-berekspresi'); ?>" class="defBtn"><?php echo $btn5?></a>
                            
                        </div>
                        <div class="shareBox">
                        	<h3>Share</h3>
                            <?php if($this->session->userdata('lang')=='id'){$btn6="Sebarkan Sekarang!";?>
                            <p>Sebarkan fakta seputar BABS, agar makin banyak yang mengerti dan<br /> ikut berkontribusi bersama!</p>
							<?php }else{$btn6="Share Now!";?>
                            <p>Spread the facts about open defecation to help more people understand and contribute to the battle!</p>
                            <?php }?>
                            <a href="<?php echo site_url('share-fakta')?>" class="defBtn"><?php echo $btn6?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" id="section_three">
            	<div class="content">
            <?php if($contribution){?>
                	<?php if($this->session->userdata('lang')=='id'){$btn7="Lihat Semua Provinsi";?>
                    
                    
                	<div class="titleWrapper">
                    	<h3>Pelajari Dampak Buang Air Besar Sembarangan di Indonesia</h3>
                    	<p>Sebagai negara dengan pelaku BABS tertinggi kedua di dunia, Indonesia terancam dampak negatif di berbagai provinsi yang bisa kamu pelajari di bawah ini.</p>
                    </div>
                    <?php }else{$btn7="See All Provinces";?>
                	<div class="titleWrapper">
                    <h3>Learn About The Huge Impact of Open Defecation On Indonesia</h3>
                    <p>
                    Indonesia is the country with the second highest number of people practicing open defecation. Indonesian provinces are being adversely impacted upon – see each individual province profile below. 

</p>
                    </div>
                    <?php }?>
                    <div class="sliderProvinceBox">
                    	<ul id="sliderProvince">
                        
                            <?php 
							$no=1;//pre($contribution);
							if($contribution)foreach($contribution as $row){?>
                        	<li>
                            	<div class="sliderProvince">
                                	<div class="sliderProvinceRight">
                                    	<img src="<?php echo base_url() ?>userdata/daerah/thumb/<?php echo $row['image'] ?>" width="640">
                                        <div class="sprInfoBox">
                                        	<h2><?php echo $row['name']?></h2>
                                            <div class="sprInfo">
                                            <?php if($this->session->userdata('lang')=='id')$desc=$row['description_id'];else $desc=$row['description_en'];?>
                                            	<h3><?php echo $desc?></h3>    
                                            </div>
                                            <?php 
											
											?>
                                            <a href="<?php echo site_url('pelajari-dampak-babs-di-indonesia')?>" class="defBtn"><?php echo $btn7?></a>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <?php if($row['ide']!='')$linkss=site_url('lihat/galeri-kontribusi/'.$row['ide_id']);else $linkss=site_url('pelajari-dampak-babs-di-indonesia-provinsi/'.$row['alias']);?>
                                    <a href="<?php echo $linkss ?>" class="sliderProvinceLeft">
                                    	<div class="splBox">
                                        <?php 
										//$rand=rand(1,5);
										$rand=$no;
										$xxx="";
										if($row['cont_image']==''){
											$img=base_url().'userdata/contents/header'.$rand.'.png';
										}
										else {
											$resized='userdata/resize/'.$row['cont_image'];
											if(file_exists($resized))
											$img=base_url().'userdata/resize/'.$row['cont_image'];
											else
											$img=base_url().'userdata/contribution/'.$row['cont_image'];
											
											
											//$img=base_url().'userdata/contribution/'.$row['cont_image'];
											//$img2='s';
											//if(!file_exists($img)){
												//$img=base_url().'userdata/contents/header'.$rand.'.png';$img2="x";
											//}
											
											$x=getimagesize($img);//pre($x);
											
											if($x[1]<$x[0])$xxx='height="230"';
											else $xxx="";	
										}
										$thumbs='';
										
										if($row['type']==1){
											if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $row['cont_link'], $match)) {
												$video_id = $match[1];
											}
											else{
												$video_id='0';
											}
											
											if($video_id=='0'){
												$thumbs='';
											}
											$link="https://www.googleapis.com/youtube/v3/videos?part=snippet&id=".$video_id."&key=AIzaSyCJbDNexqeHijQ1bj3l5iTCnJZGDN7QTW0";
											
											$ch = curl_init();
											curl_setopt($ch, CURLOPT_URL, $link);
											curl_setopt($ch, CURLOPT_HEADER, 0);
											curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
											curl_setopt($ch, CURLOPT_TIMEOUT, 10);
											$outputs = curl_exec($ch);
											curl_close($ch);
											$output=json_decode($outputs,1);
											//pre($output);
											$thumbs=$output['items'][0]['snippet']['thumbnails']['medium']['url'];
											$username=$output['items'][0]['snippet']['channelTitle'];
											$channel_id=$output['items'][0]['snippet']['channelId'];
											$title=$output['items'][0]['snippet']['title'];
											$publish=$output['items'][0]['snippet']['publishedAt'];
											
											if($thumbs!='')$img=$thumbs;
										}
										?>
                                        	<div class="coverPicture"><img src="<?php echo $img?>" <?php if($row['type']==1){?> height="205"<?php }else echo $xxx?>><?php if($thumbs!=''){?><div class="playBtn"></div><?php }?></div>
                                       
                                        </div>
                                        <div class="splBox">
                                        	<div class="profilePicture">
                                            <?php if($row['profile_picture']!='')$profile_pict=$row['profile_picture'];
											else $profile_pict=base_url().'userdata/contents/user.png';?>
                                            	<img src="<?php echo $profile_pict?>" height="70">
                                            </div>
                                            <span><?php echo ($row['user_name']=='')?"Username":$row['user_name']?></span>
                                            <?php if($row['ide']=='')$text='Bergabunglah dengan Aksi Nasional Tinju Tinja, bersama kita  beraksi melawan BABS';else {if(strlen($row['ide'])>75)$text=substr($row['ide'],0,75).'...';else $text=$row['ide'];}?>
											<p><?php echo $text?></p>
                                        	<div class="nextBtn"><span></span></div>
                                        </div>
                                    </a>
                                    
                                    
                                </div>
                            </li>
                            <?php $no++;if($no==6)$no=1;
							}?>
                            
                        </ul>
                    </div>
            <?php }?>
            
                    <div class="section_three_bottom">
                    <?php if($this->session->userdata('lang')=='id'){$btn8="Tonton video";$btn9="Lihat dan buat infografis";?>
                    	<h3>Dapatkan juga lebih banyak informasi seputar BABS<br>melalui video dan infografis di bawah ini</h3>
                    <?php }
					else{$btn8="Watch video";$btn9="See and create infographic";?>
                    	<h3>Get More Information About Open Defecation</h3>
                    <?php }?>
                        <div class="fullBox">
                        <?php //pre($video); 
						$videos="https://www.youtube.com/watch?v=M1ilPxC6grY";
						if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $videos, $match)) {
							$video_id = $match[1];
						}
						else{
							$video_id=0;
						}
					?>
                            
                            
                            
                            <div class="videoHomeBox" onClick="showPopupVideo2('<?php echo $video_id;?>');return false;">
                            	<a href="#" class="coverPicture">
                                	<img src="<?php echo base_url()?>templates/images/video.jpg">
                                	<div class="playBtn"></div>
                                </a>
                                <a href="javascript:void(0)" onClick="showPopupVideo2('<?php echo $video_id;?>');return false;"><?php echo $btn8?></a>
                            </div>
                            <div class="infografisBox">   
                            	<a href="<?php echo site_url('infografis')?>" class="coverPicture"><img src="<?php echo base_url()?>templates/images/infografis.png"></a>
                                <a href="<?php echo site_url('infografis')?>"><?php echo $btn9?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
      
    
<script>
$(document).ready(function() {
    $("#show_province_btn").click(function(e){
		e.preventDefault();
		$("html, body").animate({ scrollTop: $('#section_three').offset().top }, 1000);	
	});
	
});



$.address.init(function(event){
}).change(function(event){
	if(!$(location).attr('hash') ){
		
	}
	else{
		popup = $(location).attr('hash');
		
		if(popup=='#take_pledge'){
			$("html, body").animate({ scrollTop: $('#section_two').offset().top }, 1000);	
		}
		
	}
});
</script>