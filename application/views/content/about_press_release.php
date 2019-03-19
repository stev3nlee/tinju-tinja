
        <section id="aboutus">
        	<div class="container" id="aboutBanner">
            	<img src="<?php echo base_url(); ?>userdata/about_us/<?php echo $detail['image']?>">
                <div class="captionBox small bigFont"><?php 
				$text='';
				if($category)foreach ($category as $option){
					if($option['alias']==$alias){
						if($this->session->userdata('lang')=='id')$text=$option['name'];else $text=$option['name_en'];
					}
				}?>
                	<span><?php echo $text?></span>
                </div>
                
            </div>
        	<div class="container">
            	<div class="content oHidden">
                	<div class="longBox">
                    	
                    	<?php $this->load->view('common/about_menu_selection')?>
                        <div class="pressConference">
                        	<h3>Press Conference</h3>
                            <ul>
                                <?php foreach ($press_con as $row){ ?>
                            	<li><a href="#" class="image_selector" data-img="<?php echo base_url().'userdata/press_conference/'.$row['image'] ?>"><img src="<?php echo base_url().'userdata/press_conference/'.$row['image'] ?>" width="180"></a></li>
                            	<?php } ?>
                            </ul>
                        </div>
                        <script>
						$(document).ready(function(e) {
								
							$('.image_selector').click(function(){
								$("#pressRelease img").attr('src',$(this).data('img'));
								showPopupPress();
								return false;
							});
                        });
                        </script>
                        <div class="newsArticle">
                        	<h3>News Article</h3>
                            <ul>
                                <?php foreach ($news_article as $list){ ?>
                            	<li>
                                	<h5><?php echo $list['media']; ?></h5>
                                    <a href="<?php echo prep_url($list['link']); ?>" target="_blank"><?php echo $list['title']; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="newsArticle">
                        	<h3>Press Release</h3>
                        	Download <a href="http://tinjutinja.com/assets/pdf/PressReleaseUnicefTinjuTinjaID.pdf" target="_blank">here</a>
                        </div>
                    </div>
                    <?php $this->load->view('common/about_left_box')?>
                </div>
            </div>
        </section>

