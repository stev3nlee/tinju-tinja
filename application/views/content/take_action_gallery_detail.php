<?php
$thumbs=$img='';
if($detail['link']!=''){
	if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $detail['link'], $match)) {
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
}//echo $thumbs;
?>
<section id="take_action">
        	<div class="container" id="takeactionBanner">
                <img src="<?php echo base_url() ?>userdata/t1.png">
                <div class="sliderInfoBox">
                	<div class="sliderInfoLeftWrapper">
                		<div class="sliderInfoLeftBox">
                   			<div class="sliderInfoLeft">
								<?php if($this->session->userdata('lang')=='id'){?>
                                <span>Lawan babs dengan aksimu!</span><br>
                                Ayo bergabung dengan Aksi Nasional Tinju Tinja, bersama kita bebaskan Indonesia dari ancaman Buang Air Besar Sembarangan!
                                <?php }else{?>
                                <span>Fight Open Defecation with Your Action!</span><br>
                                Join Aksi Nasional Tinju Tinja. Let’s act together to free Indonesia from the threat of open defecation!
                                <?php }?>
                        	</div>
                    	</div>
                    </div>
                    <div class="sliderInfoRightWrapper">
                        <div class="sliderInfoRightBox">
                    		<div class="sliderInfoRight">
                    			<?php echo $total_action;?>
								<?php if($this->session->userdata('lang')=='id'){?>
                                <span>Aksi telah diberikan</span>
                                <?php }else{?>
                                <span>Actions have been given</span>
                                <?php }?>
                            </div>
                    	</div>
                    </div>
                </div>
            </div>
            
            <?php //pre($detail)?>
            <div class="container">
            	<div class="takeactionWrapper">
                	<ul class="tabNav">
                    	<li id="tabPledge"><a href="#tabs-1">Pledge</a></li>
                        <li id="tabContribute"><a href="#tabs-2">Contribute</a></li>
                        <li id="tabShare"><a href="#tabs-3">Share</a></li>
                    </ul>
                    <div class="takeactionBox" id="tabs-1">
                    	<div class="content pledgeContent">
                        <?php if($this->session->userdata('user_logged_in')){?>
                        	<div class="pledgeShare">
                       	<?php }?>
                            <?php 
if($this->session->userdata('lang')=='id'){
$fb_desc="Saya siap melawan Buang Air Besar Sembarangan (BABS) yang bahayanya mengancam Indonesia! Ayo gabung di Aksi Nasional Tinju Tinja, let’s fight BABS together!";
}
else{
$fb_desc="I take pledge to fight open defecation that threatens Indonesia! Join #AksiNasional #TinjuTinja, Let’s #FightBABS!";
}
  ?>
                            
							<?php if($this->session->userdata('lang')=='id'){$btnpldg="Berikan Komitmenmu!";$btn3="Caranya";$btn4="Lihat Galeri";$btn5="Ayo Berekspresi!";$btnshrt="Share Pledge Di Twitter";$btnshrfb="Share Pledge Di Facebook";?>
                                <p>Berikan komitmenmu dalam memerangi BABS bersama Aksi Nasional Tinju Tinja di media sosial dengan hashtag #AksiNasional #TinjuTinja, agar menginspirasi lebih banyak orang lagi untuk memberikan aksi mereka demi anak-anak Indonesia!</p>
                          	<?php }else{$btnpldg="Take the Pledge!";$btn3="How";$btn4="See Gallery";$btn5="Lets Contribute!";$btnshrt="Share Pledge On Twitter";$btnshrfb="Share Pledge On Facebook";?>
                                <p>Give your commitment to fight open defecation with Aksi Nasional Tinju Tinja in your social media accounts with hashtag #AksiNasional #TinjuTinja, to invite more people to act and fight open defecation for the children!</p>
                          	<?php }?>
                            
                        
                        
                            <?php if($this->session->userdata('user_logged_in')){?>
                            <div class="grayBox"><?php echo $fb_desc?></div>
                            <a href="#" class="connectBtn twitter twpledge"><span><?php echo $btnshrt?></span></a>
                            <a href="#" class="connectBtn facebook fbpledge"><span><?php echo $btnshrfb?></span></a>
                            <?php }else{?>
                            <a href="javascript:void(0)" class="connectBtn facebook facebook_login_pledge"><span><?php echo $btnpldg?></span></a>
							<?php }?>
                            
                            
                            
                            
                            
                        <?php if($this->session->userdata('user_logged_in')){?>
                            
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="takeactionBox" id="tabs-2">
                    	<div class="contributeContent">
                        	<div class="contributeWrapper">
                            	<ul class="subTabNav">
                                	<li id="tab_howto"><a href="#subTab-1"><?php echo $btn3?></a></li>
                                	<li id="tab_ayo"><a href="#subTab-2"><?php echo $btn5?></a></li>
                                	<li id="tab_gallery"><a href="#subTab-3"><?php echo $btn4?></a></li>
                                </ul>
                                <div class="subTabBox" id="subTab-1">
                                	<div class="content">
                                    <?php if($this->session->userdata('lang')=='id'){?>
                                    	<p>Buang air besar sembarangan (BABS) terjadi di seluruh pelosok Indonesia, dan bahayanya mengancam banyak jiwa, terutama anak-anak yang merupakan masa depan bangsa. Jika kita berhasil mencapai Indonesia bebas BABS, ada banyak dampak positif yang bisa kita semua nikmati.</p><br>
                                        <p>Mari beraksi bersama, dukung Indonesia dalam melawan BABS! Ungkapkan bentuk dukunganmu untuk saudara-saudara kita yang ada di pelosok Indonesia yang kamu cintai!</p><br>
                                        <ol>
                                        	<li><h5>PELAJARI ISU BABS</h5>
                                            <p>Isu BABS memang tak terlihat di depan mata, namun diam-diam bahayanya mengancam banyak jiwa. Ayo buka mata dan telinga terhadap isu BABS <a href="<?php echo site_url('pelajari-dampak-babs-di-indonesia')?>">dengan beragam fakta BABS di sini</a>! Pahami bagaimana isu BABS mengancam tempat kelahiran kita, dan membahayakan saudara-saudara kita yang ada di seluruh pelosok Indonesia.</p></li>
                                            <li><h5>BUAT KARYA EKSPRESI</h5>
                                            <p>Ungkapkan ide, dukungan, ataupun pesan mengenai isu BABS yang ingin kamu sampaikan ke saudara kita di daerahmu atau di bagian Indonesia manapun, dengan media kreasi yang paling pas untukmu.<br /><br />
Berbagai contoh ekspresi positif di bawah ini bisa menjadi sumber inspirasimu.</p>
                                            </li>
                                        </ol>
                                        <?php }else{?>
                                        <p>Open defecation is prevalent throughout Indonesia and negatively impacts on so many lives, above all children.  If we can make Indonesia open defecation free, we will see so many benefits.</p><br />
 
<p>Let’s act together to support Indonesia in the fight against Open Defecation! Give your support to our big family of supporters from all over Indonesia.</p><br />
                                        <ol>
                                            <li><h5>Learn about the issue</h5>
                                            <p>Open defecation is  often invisible but the impacts are detrimental to our nation. Let’s open our eyes and ears to <a href="<?php echo site_url('pelajari-dampak-babs-di-indonesia')?>">learn about open defecation here</a>! Understand how open defecation threatens our land, and jeopardizes our brothers and sisters from all over Indonesia.</p></li>
                                            <li><h5>Create Works of Expression</h5>
                                            <p>Share your ideas, support, or messages on open defecation with your brothers and sisters in any part of Indonesia, with the creative ideas that suit you best. <br />
<br />
The examples of positive creations below are a source of inspiration!</p>
                                            </li>
                                        </ol>
                                        <?php }?>
                                   	</div>
                                    
                                    <?php $this->load->view('content/latest_contribution');?>
                                    <div class="content">
                                    <?php if($this->session->userdata('lang')=='id'){$btnx="Ayo Berekspresi!";?>
                                        <ol start="3">
                                        	<li><h5>KIRIMKAN KONTRIBUSIMU</h5>
                                            <p>Langsung kirimkan hasil karyamu <a class="blueColor" href="<?php echo site_url('ayo-berekspresi')?>">di sini</a>, dengan mengikuti format yang ada dan mengisi data yang diperlukan.</p></li>
                                            <li><h5>SEBARKAN!</h5>
                                            <p>Sebarkan hasilnya ke berbagai media sosial, agar lebih banyak yang ikut berpartisipasi dalam melawan BABS!</p><br>
                                            </li>
                                        </ol>
                                        <p>UNICEF akan memilih hasil karya terbaik dari semua kontribusi yang telah kami terima, untuk kami bawa langsung ke tempat penyuluhan kami di lapangan untuk membantu melawan BABS, dan akan kami dokumentasikan lewat akun media sosial kami.</p><br>
                                    <?php }else{$btnx="Let's Contribute!";?>
                                    <ol start="3">
                                        <li><h5>Submit Your Contribution</h5>
                                        <p>Submit your creation <a class="blueColor" href="<?php echo site_url('ayo-berekspresi')?>">here</a>, by following the existing format and filling the form without needing to provide any further information.
</p></li>
                                        <li><h5>Share!</h5>
                                        <p>Share your work through your social media channels, to encourage more people to participate in the fight against Open Defecation.</p><br>
                                        </li>
                                    </ol>
                                    <p>UNICEF will select and share the most creative contributions and ensure they are accessible by everyone to help the fight against open defecation. The related documentation will be shared through our social media channels. </p><br>
                                    <?php }?>
                                    </div>
                                    <a href="<?php echo site_url('ayo-berekspresi')?>" class="lightBlueBtn"><?php echo $btnx?></a>
                                </div>
                                
                                <div class="subTabBox" id="subTab-2">
                                <?php //pre($this->session->userdata);?>
                                <?php if(!$this->session->userdata('user_logged_in')){?>
                                	<div class="content">
                                    <?php if($this->session->userdata('lang')=='id'){?>
                                    	<p>Untuk berpartisipasi, daftarkan diri kamu menggunakan akun media sosialmu.</p>
                                    	<?php /*<a href="#" class="connectBtn twitter" id="twitter_login"><span>Daftar dengan Twitter</span></a>*/?>
           								<a href="#" class="connectBtn facebook" id="facebook_login"><span>Daftar Dengan Facebook</span></a>
                                    <?php }else{?>
                                    	<p>To participate, please register yourself first using your social media account.</p>
                                    	<?php /*<a href="#" class="connectBtn twitter" id="twitter_login"><span>Register with Twitter</span></a>*/?>
           								<a href="#" class="connectBtn facebook" id="facebook_login"><span>Register with Facebook</span></a>
                                    <?php }?>
            						</div>
                                <?php }else{?>
									<form onsubmit="return false;" method="post" name="contribution_form" id="contribution_form" enctype="multipart/form-data" action="<?php echo site_url('contribution/add_contribution');?>">
                                    <div class="content">
                                        <div class="smallContent">
                                        <?php if($this->session->userdata('lang')=='id'){?>
                                            <p>Isi formulir di bawah ini dengan informasi yang kami perlukan.</p>
                                        <?php }else{?>
                                        	<p>Fill in the form below with the required information.</p>
                                        <?php }?>
                                            <table>
                                                <input type="hidden" name="user_id"  value="<?php echo $this->session->userdata['user_id']; ?>">
                                                <tr>
                                                    <td><?php echo ($this->session->userdata('lang')=='id')?"Nama":"Name";?> :</td>
                                                    <td><input required="required" class="grayTxtBg" type="text" readonly name="name" value="<?php echo $this->session->userdata['name']; ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo ($this->session->userdata('lang')=='id')?"Email":"E-mail";?> :</td>
                                                    <td><input required="required" class="grayTxtBg" type="text" id="email" name="email" value="<?php if($user_detail && $user_detail['email']!=0)echo $user_detail['email'];?>"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="grayBox">
                                        <?php if($this->session->userdata('lang')=='id'){?>
                                            <p>Ekspresikan ide, pendapat, dukungan, atau karya kreasimu dalam bentuk tulisan mengenai isu BABS di sini:</p>
                                        <?php }else{?>
                                        	<p>Write your ideas, opinions, supports, or your works about open defecation here:</p>
                                        <?php }?>
                                    	<div class="smallContent">
                                            <textarea name="ide" id="ide"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="grayBox">
                                        <?php if($this->session->userdata('lang')=='id'){?>
                                    	<p>Jika kamu memiliki karya ekspresi dalam format image (foto, gambar, komik, poster, infografis, dll),<br>bisa kamu upload di sini.</p>
                                        <div class="smallContent">
                                        	<table>
                                            	<tr>
                                                	<td>Upload ekspresimu:</td>
                                                    <td>
                                                    	<div class="browse-wrap">
                                                        	<span class="upload-path">Berupa gambar atau foto</span>
                            								<a href="#" class="lightBlueBtn">Browse</a>
                            								<input id="take-picture" type="file" accept="image/*" name="upload" class="upload" title="Choose a file to upload">
                                                        </div>
                                                        <p id="error"></p>
                                                        <div class="photoPreview">
                                                            <img src="about:blank" id="capturedPhoto">
                                                        </div>
                                                	</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <?php }else{?>
                                        
                                    	<p>If your creations are in image format (photo, picture, comic, poster, infographic, etc), you can upload them here.</p>
                                        <div class="smallContent">
                                        	<table>
                                            	<tr>
                                                	<td>Upload:</td>
                                                    <td>
                                                    	<div class="browse-wrap">
                                                        	<span class="upload-path">Image or photo</span>
                            								<a href="#" class="lightBlueBtn">Browse</a>
                            								<input id="take-picture" type="file" accept="image/*" name="upload" class="upload" title="Choose a file to upload">
                                                        </div>
                                                        <p id="error"></p>
                                                        <div class="photoPreview">
                                                            <img src="about:blank" id="capturedPhoto">
                                                        </div>
                                                	</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <?php }?>
                                        <?php if($this->session->userdata('lang')=='id'){?>
                                        <p style="color:grey;">atau</p>
                                        <p>Untuk karya ekspresi dalam format lagu dan video, upload karyamu di Youtube milikmu<br>dan tulis link Youtube karyamu di sini.</p>
                                        <div class="smallContent">
                                            <table>
                                                <tr>
                                                    <td>Berikan link Youtube:</td>
                                                    <td><input type="text" id="youtube_link" name="link" placeholder="Berupa lagu atau video"></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <?php }else{?>
                                        <p style="color:grey;">or</p>
                                        <p>For creations in sing or video format, upload them on your Youtube account and give the link here.</p>
                                        <div class="smallContent">
                                            <table>
                                                <tr>
                                                    <td>Put Youtube Link:</td>
                                                    <td><input type="text" id="youtube_link" name="link" placeholder="Song or video"></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <?php }?>
                                    </div>
                                    
                                    
                                    <div class="grayBox" id="section_four">
                                    <?php if($this->session->userdata('lang')=='id'){?>
                                       	<p>Pilih daerah tertentu yang kamu dukung, jika karyamu ditujukan khusus untuk satu daerah saja.</p>
                                    	<?php }else{?>
                                        <p>Choose the specific province that you support, if your creations are specifically addressing one province:
                                        <?php }?>
                                        <div class="smallContent">
                                        
                                            <div class="placeBox">
                                            	<select name="daerah_id">
                                                	<option value="0"><?php if($this->session->userdata('lang')=='id')echo "Semua";else echo "All";?></option>
                                                    <?php if($daerah) foreach ($daerah as $value) {?>
                                                	<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grayBox" style="background-color:#FFF;margin-bottom:0;padding-bottom:0;font-size:14px;">
                                    <?php if($this->session->userdata('lang')=='id'){?>
                                       	<p style="margin-bottom:10px;"><label><input type="checkbox" id="disclaimer" name="disclaimer" value="1" required="required" /> Setiap karya ekspresi yang diikutsertakan dalam Aksi Nasional Tinju Tinja ini akan menjadi hak milik UNICEF dan<br /> UNICEF berhak untuk mempergunakannya sesuai dengan kepentingan promosi UNICEF, termasuk namun tidak<br /> terbatas pada memodifikasi, dan menayangkannya di saluran media lainnya.</label></p>
                                    	<?php }else{?>
                                        <p style="margin-bottom:10px;"><label><input type="checkbox" id="disclaimer" name="disclaimer" value="1" required="required" /> Every materials submitted in Aksi Nasional Tinju Tinja will belong to UNICEF and <br />UNICEF is entitled to the rights to use the materials in accordance with UNICEF’s promotional purposes, including but not<br /> limited to modify and publish them in various UNICEF channels.</label></p>

                                        <?php }?>
                                    </div>
                                    <div class="smallContent oHidden" style="font-size:14px;">
                                    	<!--input type="submit" class="lightBlueBtn submitBtn" value="submit" onclick="check_data();"-->
                                        <input type="submit" style="display:none" />
                                        <a href="#" class="lightBlueBtn submitBtn" id="submit_buttons" onclick="check_data();return false;">Submit</a>
                                        <?php if($this->session->userdata('lang')=='id'){?>
                                        <p>Untuk info lebih lanjut, hubungi kami di <br />
                                        <div class="sosmedBox" style="text-align:center;margin:10px 0 0 0;">
                                        <ul>
                                        <li style="display:inline-block;float:none;">
<a href="https://twitter.com/unicefindonesia" target="_blank" class="twitterBtn"></a></li><li style="display:inline-block;float:none;"> <a href="https://www.facebook.com/UNICEFIndonesia/" target="_blank" class="facebookBtn"></a></li></ul></div>
</p>
										<?php }else{?>
                                        
                                        <p>For more information, contact us at <br />
                                        
                                        <div class="sosmedBox" style="text-align:center;margin:10px 0 0 0;">
                                        <ul>
                                        <li style="display:inline-block;float:none;">
<a href="https://twitter.com/unicefindonesia" target="_blank" class="twitterBtn"></a></li><li style="display:inline-block;float:none;"> <a href="https://www.facebook.com/UNICEFIndonesia/" target="_blank" class="facebookBtn"></a></li></ul></div>
</p>
                                        <?php }?>

                                    
                                    </div>
                                </form>
                                
                                
    
                                <?php }?>
                                </div>
                                
                                <div class="subTabBox" id="subTab-3">
                                	<div class="content">
                                    	<div class="fullBox">
                                        <?php if($this->session->userdata('lang')=='id')$btngal="Lihat Galeri";else $btngal="Back To Gallery";?>
                                        	<a href="<?php echo site_url('lihat/galeri')?>" class="galleryBtn"><span><?php echo $btngal?></span></a>
                                        </div>
                                        <div class="galleryBox">
                                        	<div id="galleryDetail">
                                            	<div class="galleryDetailBox">
                                                   		<div class="coverPicture">
															<?php //if($detail['link']=='')$img=base_url().'userdata/test2.jpg';else $img=base_url().'userdata/test4.jpg';?>
                                                            
															<?php 
                                                            $rand=rand(1,5);
                                                            //if($detail['image']=='')$img=base_url().'userdata/contents/header'.$rand.'.png';else $img=base_url().'userdata/contribution/'.$detail['image'];?>
                                                           
                                                            <?php 
																/*if($thumbs!='')$img=$thumbs;
																?>
                                                           	<?php if($thumbs!=''){?>
                                                            <a href="#" title="Show Video" onClick="showPopupVideo2('<?php echo $video_id;?>')">
                                                        	<img src="<?php echo $img?>">
                                                            </a>
                                                            <?php }else{?>
                                                        	<img src="<?php echo $img?>">
                                                            <?php }*/?>
                                                            
                                                            <?php if($detail['type']==1){?>
                                                            <div class="videoWrapper">
                                                            	<iframe width="560" height="349" id="video_src" src="https://www.youtube.com/embed/<?php echo $video_id?>" frameborder="0" allowfullscreen></iframe>
                                                            </div>
                                                            <?php }
															else if($detail['type']==2){
																$resized='userdata/resize/'.$detail['image'];
																if(file_exists($resized))
																$img=base_url().'userdata/resize/'.$detail['image'];
																else
																$img=base_url().'userdata/contribution/'.$detail['image'];
																
																//$img=base_url().'userdata/contribution/'.$detail['image'];?>
                                                            <img src="<?php echo $img?>">
                                                            <?php }else{
																$img=base_url().'userdata/contents/header'.$rand.'.png';
															?>
                                                            
                                                            <img src="<?php echo $img?>">
                                                            <?php }?>
                                                            
                                                        </div>
                                                        <div class="galleryDetail">
                                                        	<div class="profilePicture">
															<?php if($detail['profile_picture']!='')$profile_pict=$detail['profile_picture'];
                                                            else $profile_pict=base_url().'userdata/contents/user.png';?>
                                                                <img src="<?php echo $profile_pict?>">
                                                            </div>
                                                            <div class="profileInfo">
                                                            	<h3><?php echo ($detail['user_name']=='')?"Username":$detail['user_name']?></h3>
                                                                <?php if($detail['ide']==''){?>
                                                                <p>Bergabunglah dengan Aksi Nasional Tinju Tinja, bersama kita beraksi melawan BABS</p>
                                                                <?php }else{?>
                                                                <p><?php echo nl2br($detail['ide'])?></p>
                                                                <?php }?>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="buttonWrapper">
                                                        	<a href="#" class="smallBtn like like_btn"><span><?php echo $detail['like_count']?></span><span>Like</span></a>
                                                        	<a href="#" class="smallBtn facebook sharefb_detail"><span>Share</span></a>
                                                        	<a href="#" class="smallBtn twitter sharetw_detail"><span>Share</span></a>
                                                        </div>
                                                    </div>
                                            </div>
                                            <?php if($prev){?>
                                            <a href="<?php echo site_url('lihat/galeri-kontribusi/'.$prev['id'])?>" class="leftArrow">Previous</a>
                                            <?php }?>
                                            <?php if($next){?>
                                            <a href="<?php echo site_url('lihat/galeri-kontribusi/'.$next['id'])?>" class="rightArrow">Next</a>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="takeactionBox" id="tabs-3">
                    	<?php $this->load->view('content/fakta')?>
                    </div>
                </div>
            </div>
        </section>

<script>
		
function like_gallery(){
	$.ajax({		
		type: "POST",
		url: '<?php echo site_url('contribution/like_this')?>',
		dataType:"JSON",
		data:{ id:<?php echo $detail['id']?> },
		success:function(result){	
			if(result.status==1){
				//alert("Liked");
				$('.like_btn span:first').text(result.current_count);
			}
			else{
				alert("you already liked this");
			}
		}
	});
	return false;
}

$(document).ready(function() {
	<?php if($section_tab=='fakta')$tab_number=3;else if($section_tab=='contribute')$tab_number=2;else $tab_number=1;?>
createTabActionNew(<?php echo $tab_number?>);
	<?php if($section_tab2=='gallery')$tab_number2=3;else if($section_tab2=='ayo_berekspresi')$tab_number2=2;else $tab_number2=1;?>
createSubTabNew(<?php echo $tab_number2?>);

	///like
	$(".like_btn").click(function(e){
		<?php if(!$this->session->userdata('user_logged_in')){?>
		//e.preventDefault();
		//alert("Please login first");
        e.preventDefault();
		likegalery=1;
        checkLoginState();
		return false;
		<?php }else{?>
		
		$.ajax({		
			type: "POST",
			url: '<?php echo site_url('contribution/like_this')?>',
			dataType:"JSON",
			data:{ id:<?php echo $detail['id']?> },
			success:function(result){	
				if(result.status==1){
					//alert("Liked");
					$('.like_btn span:first').text(result.current_count);
				}
				else{
					alert("you already liked this");
				}
			}
		});
		return false;
		<?php }?>	
	});


    <?php
	if($this->session->userdata('lang')=='id'){
		$share="Lihat kontribusi ".$detail['user_name']." untuk melawan ancaman BABS di Indonesia bersama #AksiNasional #TinjuTinja!";
		$titles="Aksi Nasional Tinju Tinja - Kontribusi Kita untuk Indonesia";
	}
	else{
		$share="See contribution from ".$detail['user_name']." to fight open defecation with #AksiNasional #TinjuTinja!";
		$titles="Aksi Nasional Tinju Tinja – Our Contribution for Indonesia";
	}
	
    $fblink="https://www.facebook.com/dialog/feed?app_id=".APP_ID."&display=popup&link=".urlencode(site_url('lihat/galeri-kontribusi/'.$detail['id']))."&picture=".urlencode($img)."&name=".urlencode($titles)."&description=".urlencode($share)."&redirect_uri=".urlencode(site_url('closefb'));
    $twlink=($share);?>
    
    $(".sharefb_detail").click(function(){        
        
        var url_to_open="<?php echo $fblink?>";
        var width = 1000;   
        var height = 550;
        var left = parseInt((screen.availWidth/2) - (width/2));
        var top = parseInt((screen.availHeight/2) - (height/2));
        window.open(url_to_open, "Facebook", 'height=350,width=700,left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top);
        
		
		return false;
    });
    
    $(".sharetw_detail").click(function(){  
        twlink=encodeURIComponent("<?php echo $twlink?>");
        var url_to_open='http://twitter.com/intent/tweet?url=<?php echo urlencode(site_url('lihat/galeri-kontribusi/'.$detail['id']))?>&text='+twlink;
        
        var width = 1000;   
        var height = 550;
        var left = parseInt((screen.availWidth/2) - (width/2));
        var top = parseInt((screen.availHeight/2) - (height/2));
        window.open(url_to_open, "Tweet", 'height=350,width=700,left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top);
        
		return false;
    });

});

<?php if($this->session->userdata('user_logged_in')){?>
<?php //bakal upload foto?>

function check_data(){
	//alert('x');
	file_uploads=$(".upload").val();
	youtube_link=$("#youtube_link").val();
	email=$("#email").val();
	ide=$("#ide").val();
	if(email==""){
		alert("Email is required");
	}
	else if(ide || file_uploads || youtube_link){
		$("#submit_buttons").fadeOut();
		$("#contribution_form").removeAttr('onsubmit');
		$("#contribution_form").submit();
		
	}
	else{
		alert('Please fill in idea or upload your image or fill youtube link');
	}
}
	(function () {
		var takePicture = document.querySelector("#take-picture"),
			spanx = document.getElementsByClassName('upload-path'),
			showPicture = document.querySelector("#capturedPhoto");
	
		if (takePicture && showPicture) {
			// Set events
			takePicture.onchange = function (event) {
				// Get a reference to the taken picture or chosen file
				var files = event.target.files,
					file;
				if (files && files.length > 0) {
					file = files[0];
					try {
						// Get window.URL object
						var URL = window.URL || window.webkitURL;
	
						// Create ObjectURL
						var imgURL = URL.createObjectURL(file);
	
						// Set img src to ObjectURL
						showPicture.src = imgURL;
	
				spanx[0].innerHTML = this.files[0].name;
						// Revoke ObjectURL after imagehas loaded
						showPicture.onload = function() {
							URL.revokeObjectURL(imgURL);  
						};
					}
					catch (e) {
						try {
							// Fallback if createObjectURL is not supported
							var fileReader = new FileReader();
							fileReader.onload = function (event) {
								showPicture.src = event.target.result;
							};
							fileReader.readAsDataURL(file);
						}
						catch (e) {
							// Display error message
							var error = document.querySelector("#error");
							if (error) {
								error.innerHTML = "Neither createObjectURL or FileReader are supported";
							}
						}
					}
				}
			};
		}
	})();
<?php }?>

</script>