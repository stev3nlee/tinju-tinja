<section id="province_detail">
        	<div class="container">
            	<div class="content">
                <?php if($this->session->userdata('lang')=='id'){?>
                	<h3>Pelajari Dampak Buang Air Besar Sembarangan di Indonesia</h3>
                    <p>Sebagai negara dengan pelaku BABS tertinggi kedua di dunia, Indonesia terancam dampak negatif di berbagai provinsi yang bisa kamu pelajari di bawah ini.</p>
                <?php }else{?>
                	<h3>Learn The Impact of Open Defecation On Indonesia</h3>
                    <p>Indonesia is the country with the second highest number of people practicing open defecation, Indonesian provinces are being adversely impacted upon – see each individual province profile below. </p>
                <?php }?>
                    <div class="sliderProvinceBox">
                    	<div class="chooseProvinceBox">
							<?php if($this->session->userdata('lang')=='id'){?>
                        	<div class="chooseProvince">Pilih Provinsi</div>
                            <?php }else{?>
                        	<div class="chooseProvince">Choose Province</div>
                            <?php }?>
                            <div class="selectProvince">
                            	<select name="province" onchange="if (this.value) window.location.href=this.value">
                                    <?php if($daerah) foreach($daerah as $list){ ?>
                                	<option <?php if($this->uri->segment(2)==$list['alias'])echo "selected"?> value = "<?php echo site_url('pelajari-dampak-babs-di-indonesia-provinsi/'.$list['alias']); ?>"><?php echo $list['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>  
                        </div>
                    </div>
                </div>
               	<div class="provinceDetailImg">
                	<img src="<?php echo base_url()?>userdata/daerah/<?php echo $detail['image'] ?>">
                    <div class="provinceDetailInfo">
                    	<h2><?php echo $detail['name'] ?></h2>
                        <div class="sprInfo">
                            <?php if($this->session->userdata('lang')=='id'){$description=$detail['description_id'];} else {$description=$detail['description_en'];} ?>
                            <h3><?php echo $description ?></h3>
                        </div>
                    </div>
                </div>
                <div class="content">
                	<div class="longBox">
                    
						<?php if($this->session->userdata('lang')=='id'){$content=$detail['content_id'];} else {$content=$detail['content_en'];} ?>
                    	<p><?php echo $content?></p><br />
                        <br>
                        <div class="fullBox">
                            <?php /*if($this->session->userdata('lang')=='id'){$read="Baca Selengkapnya";} else {$read="Read More";} ?>
                        	<a href="<?php echo prep_url($detail['link'])?>" target="_blank" class="smallButton"><?php echo $read ?></a>
							<?php */?>
                            <?php if($detail['pdf']!=''){?>
                            <a href="<?php echo site_url('province/download_pdf/'.$detail['pdf'].'/'.$detail['id'])?>" target="_blank" class="pdfBtn">Download PDF</a>
                            <!-- <a href="<?php echo base_url().'userdata/upload_pdf/'.$detail['pdf']?>" target="_blank" class="pdfBtn">Download PDF</a> -->
                            <?php }?>
                        </div>
                    </div>
                    <?php $this->load->view('common/province_left_box')?>
                </div>
                
                <div class="featuredBox">
                	<div class="content">
                    <?php if($this->session->userdata('lang')=='id'){?>
                    	<h3>Kontribusi kita untuk mereka</h3>
                        <p>Mereka di bawah ini telah berkontribusi dengan kreasi positif untuk Indonesia yang mereka cintai. Berikan juga kontribusimu untuk Intdonesia bebas BABS di sini, atau lihat galeri selengkapnya <a href="<?php echo site_url('lihat/galeri')?>" class="blueColor">di sini</a> sebagai inspirasimu!</p>
                    <?php }else{?>
                    	<h3>Featured Contributions</h3>
                        <p>They have contributed with their creative ideas to advance our beloved Indonesia. Share your contribution to help make Indonesia free from open defecation, or see the full gallery <a href="<?php echo site_url('lihat/galeri')?>" class="blueColor">here</a> for inspiration!</p>
                    <?php }?>
                        
                        
                        <div class="featured">
                        <?php 
						
						$no=0;
						//$arr=array(1,2,3);
						$type1=$type2=$type3=1;
						if($contributions)
						foreach($contributions as $row){
							if($row['type']==1){
							$type1=0;//video
							}
							else if($row['type']==2){
							$type2=0;//image
							}
							else if($row['type']==3){
							$type3=0;//text
							}
							
							
							
							
							?>
                        
                        
                        	<?php if($row['ide']!='')$linkss=site_url('lihat/galeri-kontribusi/'.$row['id']);else $linkss=site_url('pelajari-dampak-babs-di-indonesia-provinsi/'.$row['alias']);/*?>
                            
                                <!--div class="splBox">
                                <?php 
                                $rand=rand(1,5);
                                if($row['image']=='')$img=base_url().'userdata/contents/header'.$rand.'.png';else $img=base_url().'userdata/contribution/'.$row['image'];?>
                                    <div class="coverPicture"><img src="<?php echo $img?>"></div>
                               
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
                                </div-->
                                */?>
                                
                                
                                <?php if($row['type']==1){
									
								$thumbs='';
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
										//pre($output);
										$thumbs=$output['items'][0]['snippet']['thumbnails']['medium']['url'];
										$username=$output['items'][0]['snippet']['channelTitle'];
										$channel_id=$output['items'][0]['snippet']['channelId'];
										$title=$output['items'][0]['snippet']['title'];
										$publish=$output['items'][0]['snippet']['publishedAt'];
									
									
									}
								}	
									
								?>
                            <a href="<?php echo $linkss ?>" class="sliderProvinceLeft">
                                <!--a  class="sliderProvinceLeft" href="#" onclick="showPopupVideo2('<?php echo $video_id?>');return false;"-->
                                <div class="splBox">
                                <?php if($thumbs!='')$img=$thumbs;?>
                                    <div class="coverPicture"><img src="<?php echo $img?>" height="205"><div class="playBtn"></div></div>
                               
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
                                <?php }
								else{
								?>
                            <a href="<?php echo $linkss ?>" class="sliderProvinceLeft">
                                <div class="splBox">
                                <?php 
								$xxx="";
                                $rand=rand(1,5);
                                if($row['image']=='')$img=base_url().'userdata/contents/header'.$rand.'.png';else {
									
							
									$resized='userdata/resize/'.$row['image'];
									if(file_exists($resized))
									$img=base_url().'userdata/resize/'.$row['image'];
									else
									$img=base_url().'userdata/contribution/'.$row['image'];
									
									$x=getimagesize($img);//pre($x);
									
									if($x[1]<$x[0])$xxx='height="230"';
									else $xxx="";	
								}?>
                                    <div class="coverPicture"><img src="<?php echo $img?>" <?php echo $xxx?>></div>
                               
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
                                <?php }?>
                        <?php 
							$no++;
						}?>
                        
                        <?php 
						$nox=1;
						$linkss=site_url('caranya-berkontribusi');
						if($type1==1 && $no<3){$no++;?>
                        <?php 
						
						?>
                        	<a href="<?php echo $linkss ?>" data-id="<?php echo $no?>" onclick="return false;" class="sliderProvinceLeft">
                                <div class="splBox">
                                <?php 
                                $rand=$nox;$img=base_url().'userdata/contents/header'.$rand.'.png';?>
                                    <div class="coverPicture"><img src="<?php echo $img?>"></div>
                               
                                </div>
                                <div class="splBox">
                                    <div class="profilePicture">
                                    <?php //if($row['profile_picture']!='')$profile_pict=$row['profile_picture'];
                                    $profile_pict=base_url().'userdata/contents/user.png';?>
                                        <img src="<?php echo $profile_pict?>">
                                    </div>
                                    <span>Username</span>
                                    <?php $text='Bergabunglah dengan Aksi Nasional Tinju Tinja, bersama kita  beraksi melawan BABS';?>
                                    <p><?php echo $text?></p>
                                    <div class="nextBtn"><span></span></div>
                                </div>
                            </a>
                        <?php $nox++;}?>
                        
                        <?php if($type2==1 && $no<3){$no++;?>
                        	<a href="<?php echo $linkss ?>" onclick="return false;" class="sliderProvinceLeft">
                                <div class="splBox">
                                <?php 
                                $rand=$nox;$img=base_url().'userdata/contents/header'.$rand.'.png';?>
                                    <div class="coverPicture"><img src="<?php echo $img?>"></div>
                               
                                </div>
                                <div class="splBox">
                                    <div class="profilePicture">
                                    <?php //if($row['profile_picture']!='')$profile_pict=$row['profile_picture'];
                                    $profile_pict=base_url().'userdata/contents/user.png';?>
                                        <img src="<?php echo $profile_pict?>">
                                    </div>
                                    <span>Username</span>
                                    <?php $text='Bergabunglah dengan Aksi Nasional Tinju Tinja, bersama kita  beraksi melawan BABS';?>
                                    <p><?php echo $text?></p>
                                    <div class="nextBtn"><span></span></div>
                                </div>
                            </a>
                        <?php $nox++;}?>
                        
                        <?php if($type3==1 && $no<3){$no++;?>
                        	<a href="<?php echo $linkss ?>" onclick="return false;" class="sliderProvinceLeft">
                                <div class="splBox">
                                <?php 
                                $rand=$nox;$img=base_url().'userdata/contents/header'.$rand.'.png';?>
                                    <div class="coverPicture"><img src="<?php echo $img?>"></div>
                               
                                </div>
                                <div class="splBox">
                                    <div class="profilePicture">
                                    <?php //if($row['profile_picture']!='')$profile_pict=$row['profile_picture'];
                                    $profile_pict=base_url().'userdata/contents/user.png';?>
                                        <img src="<?php echo $profile_pict?>">
                                    </div>
                                    <span>Username</span>
                                    <?php $text='Bergabunglah dengan Aksi Nasional Tinju Tinja, bersama kita  beraksi melawan BABS';?>
                                    <p><?php echo $text?></p>
                                    <div class="nextBtn"><span></span></div>
                                </div>
                            </a>
                        <?php $nox++;}?>
                    	</div>
                    </div>
                </div>
            </div>
        </section>