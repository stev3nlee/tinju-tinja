

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
            <div class="infografisWrapper">
                <ul class="grid effect-2" id="grid">
                    <?php if($image) foreach($image as $list){ ?>

                    <?php 
					if($this->session->userdata('lang')=='id'){
						$img=base_url().'userdata/info_grafis/'.$list['image'];
						$share="Pelajari bagaimana buang air besar sembarangan memiliki dampak terhadap Indonesia!";
						$name="Aksi Nasional Tinju Tinja - Infografis";
					}
					else{
						$img=base_url().'userdata/info_grafis/'.$list['image_en']; 
						$share="Learn how open defecation has severe impacts in Indonesia!";
						$name="Aksi Nasional Tinju Tinja - Infographic";
					}?>
                    <?php $twlink = ($share." #TinjuTinja #FightBABS ".site_url('infografis')); ?>
                    <?php $fblink = "https://www.facebook.com/dialog/feed?app_id=".APP_ID."&display=popup&link=".urlencode(site_url('infografis'))."&description=".urldecode($share)."&picture=".urlencode($img)."&name=".urlencode($name)."&redirect_uri=".urlencode(site_url('closefb')); ?>
                    <li>
                        <div class="infografisImg"><a href="javascript:void(0)" onClick="showInfografis2('<?php echo $img?>');"><img src="<?php echo $img?>"></a></div>
                        <input type="hidden" id="twitter_<?php echo $list['id']?>" value="<?php echo $twlink;?>"> 
                        <input type="hidden" id="fb_<?php echo $list['id']?>" value="<?php echo $fblink;?>">
                        <a href="<?php echo site_url('infografis/download/'.$list['image'].'/'.$list['id']) ?>" class="smallBtn lightBlueBtn downloadBtn"><span></span></a>
                        <a class="smallBtn sharetw2 twitter" href="#" data-id="<?php echo $list['id']?>"><span>Share</span></a>
                        <a class="smallBtn sharefb2 facebook" href="#" data-id="<?php echo $list['id']?>"><span>Share</span></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
	new AnimOnScroll( document.getElementById( 'grid' ), {
		minDuration : 0.4,
		maxDuration : 0.7,
		viewportFactor : 0.2
	} );

$(document).ready(function() {
    
    $(".sharefb2").click(function(){        
        id=$(this).data('id');
        fblink=$("#fb_"+id).val();
        var url_to_open=fblink;
        var width = 1000;   
        var height = 550;
        var left = parseInt((screen.availWidth/2) - (width/2));
        var top = parseInt((screen.availHeight/2) - (height/2));
        window.open(url_to_open, "Facebook", 'height=350,width=700,left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top);
        
        $.ajax({        
            type: "POST",
            url: '<?php echo site_url('infografis/fb_cmplt')?>',
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
    
    $(".sharetw2").click(function(){     
        id=$(this).data('id');
        twlink=encodeURIComponent($("#twitter_"+id).val());
        var url_to_open='http://twitter.com/intent/tweet?text='+twlink;
        
        var width = 1000;   
        var height = 550;
        var left = parseInt((screen.availWidth/2) - (width/2));
        var top = parseInt((screen.availHeight/2) - (height/2));
        window.open(url_to_open, "Tweet", 'height=350,width=700,left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top);
        
        $.ajax({        
            type: "POST",
            url: '<?php echo site_url('infografis/tw_cmplt')?>',
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