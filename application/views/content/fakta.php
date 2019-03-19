<div class="content">
	<?php if($this->session->userdata('lang')=='id'){?>
    <p>Semakin banyak orang yang tahu mengenai bahaya BABS, makin banyak aksi yang bisa kita kumpulkan! Pilih fakta di bawah ini dan sebarkan di akun media sosialmu.</p>
    <?php }else{?>
    <p>The more people that understand about open defecation, the more hearts that can be touched to contribute to this fight! Choose the fact that you want to share through your social media accounts.</p>
    <?php }?>
    <div class="content oHidden">
        <?php if($fakta) foreach($fakta as $list){ ?>
        <?php 
		if($this->session->userdata('lang')=='id'){
			$name="Aksi Nasional Tinju Tinja - Dampak B.A.B. Sembarangan";
			$title=$list['title_id'];
			$share_tw=$list['share_tw_id'];
			$share_fb=$list['share_id'];
			$desc=$list['description_id'];
        	$img=base_url().'userdata/fakta/'.$list['image'];
		} else {
			$name="Aksi Nasional Tinju Tinja - Open Defecation Impacts";
			$title=$list['title_en'];
			$share_tw=$list['share_tw_en'];
			$share_fb=$list['share_en'];
			$desc=$list['description_en'];
       		$img=base_url().'userdata/fakta/'.$list['image_en'];
		}
		 ?>
        


        
        <?php $twlink = (trim(strip_tags($share_tw))); ?>
        <?php $fblink = "https://www.facebook.com/dialog/feed?app_id=".APP_ID."&display=popup&link=".urlencode(site_url('share-fakta'))."&picture=".urlencode($img)."&name=".urlencode($name)."&description=".urlencode($share_fb)."&redirect_uri=".urlencode(site_url('closefb')); ?>

        <input type="hidden" id="twitter_fact_<?php echo $list['id']?>" value="<?php echo $twlink;?>"> 
        <input type="hidden" id="fb_fact_<?php echo $list['id']?>" value="<?php echo $fblink;?>">

        <div class="factsBox">
            <h3><?php echo $title ?></h3>
            <div class="factsImgCon">
                <div class="factsImg">
                    <img src="<?php echo $img ?>" width="460">
                </div>
            </div>
            <h4><?php echo $desc ?></h4>
            <div class="buttonWrapper">
            <?php if($this->session->userdata('user_logged_in')){?>
                <a href="#" class="twitter sharetw3 smallBtn" data-id="<?php echo $list['id']?>"><span>Share</span></a>
                <a href="#" class="facebook sharefb3 smallBtn" data-id="<?php echo $list['id']?>"><span>Share</span></a>
            <?php }else{?>
                <a href="#" class="twitter tw_fact_login smallBtn" data-id="<?php echo $list['id']?>"><span>Share</span></a>
                <a href="#" class="facebook fb_fact_login smallBtn" data-id="<?php echo $list['id']?>"><span>Share</span></a>
            <?php }?>
            </div>
        </div>
        <?php } ?>
        <p>
        <?php if($this->session->userdata('lang')=='id'){?>
        Kamu juga bisa mendapatkan lebih banyak fakta dari berbagai provinsi di seluruh Indonesia <a style="text-decoration:underline;color:black;" href="<?php echo site_url('pelajari-dampak-babs-di-indonesia')?>">di sini</a>, atau membaca dan membuat infografis BABS milikmu sendiri 

<a style="text-decoration:underline;color:black;" href="<?php echo site_url('infografis')?>">di sini</a>.
<?php }else{?>You can also find more facts from each province all around Indonesia <a style="text-decoration:underline;color:black;" href="<?php echo site_url('pelajari-dampak-babs-di-indonesia')?>">here</a>, or find and create 

infographics about open defecation <a style="text-decoration:underline;color:black;" href="<?php echo site_url('infografis')?>">here</a>.
<?php }?>
        </p>
        <?php //pre($this->session->userdata);?>
    </div>
</div>


<script>
$(document).ready(function(e) {
    
	$(".sharefb3").click(function(){        
		id=$(this).data('id');
		fblink=$("#fb_fact_"+id).val();
		var url_to_open=fblink;
		var width = 1000;   
		var height = 550;
		var left = parseInt((screen.availWidth/2) - (width/2));
		var top = parseInt((screen.availHeight/2) - (height/2));
		window.open(url_to_open, "Facebook", 'height=350,width=700,left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top);
		
		$.ajax({		
			type: "POST",
			url: '<?php echo site_url('contribution/fb_cmplt')?>',
			dataType:"JSON",
			data:{ fact_id:id },
			success:function(result){	
				console.log(result);
				<?php /*$("#share_tw_con").remove();
				$("#share_tw_con2").show();
				console.log(result.status);*/?>//	
			}
		});
		return false;
	});
    
    $(".sharetw3").click(function(){     
        id=$(this).data('id');
        twlink=encodeURIComponent($("#twitter_fact_"+id).val());
        var url_to_open='http://twitter.com/intent/tweet?url=&text='+twlink;
        
        var width = 1000;   
        var height = 550;
        var left = parseInt((screen.availWidth/2) - (width/2));
        var top = parseInt((screen.availHeight/2) - (height/2));
        window.open(url_to_open, "Tweet", 'height=350,width=700,left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top);
        
		$.ajax({		
			type: "POST",
			url: '<?php echo site_url('contribution/tw_cmplt')?>',
			dataType:"JSON",
			data:{ fact_id:id },
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