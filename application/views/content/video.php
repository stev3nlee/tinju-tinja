
        <section id="video">
        	<div class="container">
            	<div class="content">
                <?php if($this->session->userdata('lang')=='id'){?>
                	<h3>Video</h3>
                    <p>Pelajari lebih lanjut mengenai isu BABS dengan menonton beragam video di bawah ini.<br>Sebarkan juga ke media sosialmu!</p>
                    <?php }else{?>
                    <h3>Video</h3>
                    <p>Learn more about open defecation by watching all videos below. <br />Feel free to spread them to your social media channels!</p>
                    <?php }?>
                    <div class="videoBox">
                    	<ul>
                            <?php foreach($video as $list) {?>

                                <?php $twlink = urlencode('Tonton video ini biar tahu bagaimana buang air besar sembarangan mengancam Indonesia! #TinjuTinja'); ?>
                                <?php $fblink = "https://www.facebook.com/dialog/feed?app_id=".APP_ID."&display=popup&link=".urlencode(site_url('video'))."&picture=".urlencode(base_url().'userdata/video/'.$list['image'])."&name=".urlencode("Tinju Tinja - Video")."&description=".urlencode('Tonton video ini biar tahu bagaimana buang air besar sembarangan mengancam Indonesia! #TinjuTinja')."&redirect_uri=".urlencode(site_url('closefb')); ?>
                            
                                <input type="hidden" id="twitter_<?php echo $list['id']?>" value="<?php echo $twlink;?>"> 
                                <input type="hidden" id="fb_<?php echo $list['id']?>" value="<?php echo $fblink;?>">
                                
                                <?php
								if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $list['youtube_link'], $match)) {
									$video_id = $match[1];
								}
								else{
									$video_id=0;
								}
								?>
                        	<li>
                            	<a href="#" onclick="showPopupVideo2('<?php echo $video_id?>');return false;" target="_blank" class="coverPicture"><img src="<?php echo base_url() ?>userdata/video/<?php echo $list['image'] ?>"></a>
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
        return false;
    });
    
    $(".sharetw2").click(function(){     
        id=$(this).data('id');
        twlink=$("#twitter_"+id).val();
        var url_to_open='http://twitter.com/intent/tweet?text='+twlink;
        
        var width = 1000;   
        var height = 550;
        var left = parseInt((screen.availWidth/2) - (width/2));
        var top = parseInt((screen.availHeight/2) - (height/2));
        window.open(url_to_open, "Tweet", 'height=350,width=700,left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top);
        return false;
    });

});
</script>   