
        <section id="aboutus">
        	<div class="container" id="aboutBanner">
            	<img src="<?php echo base_url(); ?>userdata/about_us/<?php echo $detail['image']?>">
                <div class="captionBox small bigFont">
                	<?php 
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
                        
                        <p><?php echo ($this->session->userdata('lang')=='id')?$about_detail['content']:$about_detail['content_en'];?></p>
                    	<br>
                    </div>
                    
                    <?php $this->load->view('common/about_left_box')?>
                </div>
            </div>
        </section>
 