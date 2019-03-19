<section id="infografis_section">
        	<div class="container">
            	<div class="content">
        <?php if($this->session->userdata('lang')=='id'){?>
            <h3>Infografis</h3>
            <p>Pelajari bagaimana masalah BABS dan kebersihan memiliki dampak yang besar di lingkungan dan hidup kita. Download dan sebarkan infografis ini agar lebih banyak orang yang sadar akan bahaya BABS yang mengancam, dan berpartisipasi dalam Aksi Nasional Tinju Tinja!</p>
            <div class="infografisInfoBox">
                <div class="infografisInfoLeft">
                </div>
                <div class="infografisInfoRight">
                    <h3>BUAT INFOGRAFISMU SENDIRI</h3>
					<?php if($this->session->userdata('user_logged_in'))$class="infografis_crt";else $class="infografis_login";?>
                    <p>Lihat bagaimana satu tindakan BABS darimu bisa berdampak ke mana-mana, termasuk ke orang terdekatmu!</p>
                    <a href="#" class="longBtn grayBg <?php echo $class?>"><span>Buat sekarang dengan Facebook kamu</span></a>
                </div>
            </div>
         <?php }else{?>
         
            <h3>Infographic</h3>
            <p>Learn how open defecation and sanitation issues brings huge impacts in our environment and our life. Download and spread the infographics, so more people can learn about the danger of open defecation, and participate in Aksi Nasional Tinju Tinja!</p>
            <div class="infografisInfoBox">
                <div class="infografisInfoLeft">
                </div>
                <div class="infografisInfoRight">
                    <h3>CREATE YOUR OWN INFOGRAPHIC</h3>
					<?php if($this->session->userdata('user_logged_in'))$class="infografis_crt";else $class="infografis_login";?>
                    <p>See how one act of defecating in the open affect your surroundings!</p>
                    <a href="#" class="longBtn grayBg <?php echo $class?>"><span>Create now with Facebook</span></a>
                </div>
            </div>
         
         
         <?php }?>
                    <div class="infografisWrapper detail">
						<?php if($this->session->userdata('lang')=='id'){?>
                    	<h3>Infografisnya sudah berhasil kamu buat!</h3>
                    	<p>Pelajari bagaimana masalah BABS dan kebersihan memiliki dampak yang besar di lingkungan dan hidup kita. Download dan sebarkan infografis ini agar lebih banyak orang yang sadar akan bahaya BABS yang mengancam, dan berpartisipasi dalam Aksi Nasional Tinju Tinja!</p>
                        <?php }else{?>
                    	<h3>Your infographic has been created!</h3>
                    	<p>Learn how open defecation and sanitation problem have severe impacts to our life and envirionment. Download and spread the infographic to make more people understand about the threat from open defecation, and participate in Aksi Nasional Tinju Tinja!			</p>
                        <?php }?>
                        <div class="buttonWrapper">
                        	<div class="halfBox">
                            
							<?php if($this->session->userdata('lang')=='id'){?>
	                            <a href="<?php echo site_url('infografis')?>" class="galleryBtn"><span>Lihat Semua Infografis</span></a>
                            <?php }else{?>
	                            <a href="<?php echo site_url('infografis')?>" class="galleryBtn"><span>See All Infographic</span></a>
                            <?php }?>
                            </div>
                            <div class="halfBox">
                            	<a href="<?php echo site_url('infografis/get_image/'.$detail['uid'].'/'.$detail['id']) ?>" class="smallBtn lightBlueBtn download"><span>Download</span></a>
                            	<a href="#" class="smallBtn twitter sharetw_infografis" data-id="<?php echo $detail['id']?>"><span>Share</span></a>
                            	<a href="#" class="smallBtn facebook sharefb_infografis" data-id="<?php echo $detail['id']?>"><span>Share</span></a>
                            </div>
                        </div>
                        <?php $infografis_img=base_url().'userdata/user_infografis/'.$detail['image']?>
                        <img src="<?php echo $infografis_img?>">
                    </div>
                </div>
            </div>
        </section>
        
        
   <script>     
   
   <?php 
	if($this->session->userdata('lang')=='id'){
		$share="Apa yang akan terjadi jika kita buang air besar sembarangan? Lihat dampaknya di sini!";
		$name="Aksi Nasional Tinju Tinja - Infografis";
	}
	else{ 
		$share="What will happen if we defecate in the open? See the impacts here!";
		$name="Aksi Nasional Tinju Tinja - Infographic";
	}?>
	<?php $twlink = ($share." #TinjuTinja #FightBABS "); ?>
	<?php $fblink = "https://www.facebook.com/dialog/feed?app_id=".APP_ID."&display=popup&link=".urlencode(site_url('infografis/pulau/'.strtolower($pulau_detail['name']).'/'.$detail['uid']))."&description=".urldecode($share)."&picture=".urlencode($infografis_img)."&name=".urlencode($name)."&redirect_uri=".urlencode(site_url('closefb')); ?>
   
$(document).ready(function(e) {
    

    $(".sharefb_infografis").click(function(){        
        id=$(this).data('id');
        var url_to_open="<?php echo $fblink?>";
        var width = 1000;   
        var height = 550;
        var left = parseInt((screen.availWidth/2) - (width/2));
        var top = parseInt((screen.availHeight/2) - (height/2));
        window.open(url_to_open, "Facebook", 'height=350,width=700,left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top);
        
        $.ajax({        
            type: "POST",
            url: '<?php echo site_url('infografis/fb_cmplt_personal')?>',
            dataType:"JSON",
            data:{ infografis_id:id },
            success:function(result){   
                console.log(result);
                <?php /*$("#share_tw_con").remove();
                $("#share_tw_con2").show();
                console.log(result.status);*/?>//   
            }
        });
		
		return false;
    });
    
    $(".sharetw_infografis").click(function(){  
        id=$(this).data('id');
        twlink=encodeURIComponent("<?php echo $twlink?>");
        var url_to_open='http://twitter.com/intent/tweet?url=<?php echo urlencode(site_url('infografis/pulau/'.strtolower($pulau_detail['name']).'/'.$detail['uid']))?>&text='+twlink;
        
        var width = 1000;   
        var height = 550;
        var left = parseInt((screen.availWidth/2) - (width/2));
        var top = parseInt((screen.availHeight/2) - (height/2));
        window.open(url_to_open, "Tweet", 'height=350,width=700,left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top);
        
        $.ajax({        
            type: "POST",
            url: '<?php echo site_url('infografis/tw_cmplt_personal')?>',
            dataType:"JSON",
            data:{ infografis_id:id },
            success:function(result){   
                
                $("#share_tw_con").remove();
                $("#share_tw_con2").show();
                console.log(result.status);
            }
        });

		return false;
    });

});

</script>