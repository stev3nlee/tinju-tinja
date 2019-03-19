
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

                        <?php foreach ($testimonial as $row){ ?>
                        <div class="articlesBox">
                       		<img src="<?php echo base_url().'userdata/testimonial/'.$row['image'] ?>">
                        	<h4><?php echo $row['name']; ?></h4>

                            <?php if($this->session->userdata('lang')=='id'){ ?>
                            <p> <?php echo $row['short_description_id']; ?> </p>
                            <?php }else{ ?>
                            <p> <?php echo $row['short_description_en']; ?> </p>
                            <?php } ?>
                            
                            <div class="articlesSmallBox">
                            	<?php echo $row['source']?>
                            </div>
                        </div>
                         <?php } ?>
                        
                        <p>Cerita lainnya bisa kamu temukan di <a href="http://Indonesiaunicef.blogspot.co.id" target="_blank" class="blueColor">blog unicef indonesia</a></p>
                    </div>
                    
                    <?php $this->load->view('common/about_left_box')?>
                </div>
            </div>
        </section>
