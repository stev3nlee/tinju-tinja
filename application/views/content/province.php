<section id="province">
        	<div class="container">
            	<div class="content">
                <?php if($this->session->userdata('lang')=='id'){?>
                	<h3>Pelajari Dampak Buang Air Besar Sembarangan di Indonesia</h3>
                    <p>Sebagai negara dengan pelaku BABS tertinggi kedua di dunia, Indonesia terancam dampak negatif di berbagai provinsi yang bisa kamu pelajari di bawah ini.</p>
                <?php }else{?>
                	<h3>Learn About The Impact of Open Defecation on Indonesia</h3>
                    <p>Indonesia is the country with the second highest number of people practicing Open Defecation. Indonesian provinces are being adversely impacted upon – see each individual province profile below.</p>
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
                                	<option value = "<?php echo site_url('pelajari-dampak-babs-di-indonesia-provinsi/'.$list['alias']); ?>"><?php echo $list['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>  
                        </div>
                    	<ul>
<?php  //pre($province)?>
                            <?php 
							$no=1;//pre($province[32]);
							if($province) foreach($province as $row){ //if($row['daerah_id']==21)pre($row);
							
							//if($row['user_name']!=''){?>
                            <?php if($this->session->userdata('lang')=='id'){$description=$row['description_id'];} else {$description=$row['description_en'];} ?>
                            <?php if($this->session->userdata('lang')=='id'){$read="Lebih Lanjut";} else {$read="Read More";} ?>
                        	<li>
                            	<div class="sliderProvince">
                                	<div class="sliderProvinceRight">
                                    	<img src="<?php echo base_url() ?>userdata/daerah/thumb/<?php echo $row['image'] ?>">
                                        <div class="sprInfoBox">
                                        	<h2><?php echo $row['name'] ?></h2>
                                            <div class="sprInfo">
                                            	<h3><?php echo $description ?></h3>
                                            </div>
                                            <a href="<?php echo site_url('pelajari-dampak-babs-di-indonesia-provinsi/'.$row['alias']) ?>" class="defBtn"><?php echo $read ?></a>
                                        </div>
                                    </div>
                                    <?php if($row['ide']!='')$linkss=site_url('lihat/galeri-kontribusi/'.$row['ide_id']);else $linkss=site_url('pelajari-dampak-babs-di-indonesia-provinsi/'.$row['alias']);?>
                                    <a href="<?php echo $linkss ?>" class="sliderProvinceLeft">
                                    	<div class="splBox">
                                        <?php 
										//$rand=rand(1,5);
										$rand=$no;$xxx="";
										if($row['cont_image']=='')$img=base_url().'userdata/contents/header'.$rand.'.png';
										else {
																	
											$resized='userdata/resize/'.$row['cont_image'];
											if(file_exists($resized))
											$img=base_url().'userdata/resize/'.$row['cont_image'];
											else
											$img=base_url().'userdata/contribution/'.$row['cont_image'];
												
											$x=getimagesize($img);//pre($x);
									
											if($x[1]<$x[0])$xxx='height="230"';
											else $xxx="";	
										}
											
										$thumbs='';
										if($row['type']==1){
											if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $row['link'], $match)) {
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
											
											if(isset($output['items'][0])){
											//pre($output);
											$thumbs=$output['items'][0]['snippet']['thumbnails']['medium']['url'];
											$username=$output['items'][0]['snippet']['channelTitle'];
											$channel_id=$output['items'][0]['snippet']['channelId'];
											$title=$output['items'][0]['snippet']['title'];
											$publish=$output['items'][0]['snippet']['publishedAt'];
											}
											
											if($thumbs!='')$img=$thumbs;
										}?>
                                        	<div class="coverPicture"><img src="<?php echo $img?>" <?php if($row['type']==1){?> height="205"<?php }?>><?php if($thumbs!=''){?><div class="playBtn"></div><?php }?></div>
                                       
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
                            <?php 
							$no++;if($no==6)$no=1;
							}//} ?>
            
                        </ul>
                        <?php /*if(count($province)>1000){?>
                        <div class="loadMore">
                        	Load More
                        </div>
                        <?php }*/?>
                    </div>
                </div>
            </div>
</section>