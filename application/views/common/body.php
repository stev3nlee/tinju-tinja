<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="target-densitydpi=device-dpi; width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
<meta name="HandheldFriendly" content="true" />
<title><?php echo $title?> | Tinju Tinja</title>
<link href="<?php echo base_url();?>favicon.png" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo base_url() ?>templates/css/fontAttach/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>templates/css/tinjutinja.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>templates/css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>templates/css/selectordie.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>templates/css/component.css" rel="stylesheet" type="text/css">

<script src="<?php echo base_url() ?>templates/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url() ?>templates/js/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url() ?>templates/js/selectordie.min.js"></script>
<script src="<?php echo base_url() ?>templates/js/modernizr.custom.js"></script>
<script src="<?php echo base_url() ?>templates/js/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>templates/js/imagesloaded.min.js"></script>
<script src="<?php echo base_url() ?>templates/js/classie.js"></script>
<script src="<?php echo base_url() ?>templates/js/AnimOnScroll.min.js"></script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script src="<?php echo base_url() ?>templates/js/jquery.scrollme.min.js"></script>
<script src="<?php echo base_url() ?>templates/js/jquery.address-1.6.min.js"></script>
<script src="<?php echo base_url() ?>templates/js/main.min.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69776892-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<div class="wrapper">
    <?php $this->load->view('common/header')?>
    <?php $this->load->view($content)?>
    <?php $this->load->view('common/footer')?>
</div>
<a href="#" class="backToTop">Back To Top</a>
<div class="menuWrapper">
    	<a href="<?php echo site_url()?>"><img src="<?php echo base_url()?>templates/images/logo_tinjutinja.png"></a>
        <nav>
            <ul>
            <?php if($this->session->userdata('lang')=='id'){?>
                <li><a href="<?php echo site_url()?>">Home</a></li>
                <li><a href="<?php echo site_url('aksi-nasional-tinju-tinja')?>">Tentang</a></li>
                <!-- <li><a href="<?php echo site_url('berikan-aksi-pledge')?>">Berikan Aksi</a></li> -->
                <li>Berikan Aksi
                    <ul>
                        <li><a href="<?php echo site_url('berikan-aksi-pledge')?>">Pledge</a></li>
                        <li><a href="<?php echo site_url('ayo-berekspresi')?>">Contribute</a></li>
                        <li><a href="<?php echo site_url('share-fakta')?>">Share</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('pelajari-dampak-babs-di-indonesia')?>">Dampak BABS di Indonesia</a></li>
                <li><a href="<?php echo site_url('video')?>">Video</a></li>
                <li><a href="<?php echo site_url('infografis') ?>">Infografis</a></li>
            <?php }else{?>
                <li><a href="<?php echo site_url()?>">Home</a></li>
                <li><a href="<?php echo site_url('aksi-nasional-tinju-tinja')?>">About</a></li>
                <!-- <li><a href="<?php echo site_url('berikan-aksi-pledge')?>">Give Your Action</a></li> -->
                <li>Give Your Action
                    <ul>
                        <li><a href="<?php echo site_url('berikan-aksi-pledge')?>">Pledge</a></li>
                        <li><a href="<?php echo site_url('ayo-berekspresi')?>">Contribute</a></li>
                        <li><a href="<?php echo site_url('share-fakta')?>">Share</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('pelajari-dampak-babs-di-indonesia')?>">Open Defecation Impacts</a></li>
                <li><a href="<?php echo site_url('video')?>">Video</a></li>
                <li><a href="<?php echo site_url('infografis') ?>">Infographic</a></li>
            <?php }?>
            </ul>
        </nav>
        <ul class="language">
            <li><a href="#" class="chg_lang <?php echo ($this->session->userdata('lang')=='id')?"selected":""?>" data-id="id">IND</a></li>
            <li><a href="#" class="chg_lang <?php echo ($this->session->userdata('lang')=='en')?"selected":""?>" data-id="en">ENG</a></li>
        </ul>
        <div class="sosmedBox">
            <ul>
                <li><a href="<?php echo prep_url($socmed['twitter'])?>" target="_blank" class="twitterBtn">Twitter</a></li>
                <li><a href="<?php echo prep_url($socmed['facebook'])?>" target="_blank" class="facebookBtn">Facebook</a></li>
                <li><a href="<?php echo prep_url($socmed['instagram'])?>" target="_blank" class="instagramBtn">Instagram</a></li>
            </ul>
        </div>
        <a href="http://www.unicef.org/indonesia/id/" target="_blank"><img src="<?php echo base_url()?>templates/images/logo_unicef.png"></a>		<ul class="sosmedCountMenu">
            <li><span class='st_facebook_hcount' displayText='Facebook'></span></li>
            <li><span class='st_twitter_hcount' displayText='Tweet'></span></li>
        </ul>
    </div>
    <div class="popupWrapper">
        <div class="overlay"></div>
        <div class="popupBox" id="popupPledge">
            <h3>Pledge</h3>
            <?php if($this->session->userdata('lang')=='id'){$btnp1="Pledge dengan twitter";$btnp2="Pledge dengan facebook";?>
            <p>Suarakan komitmenmu dalam memerangi BABS di Indonesia bersama Aksi Nasional Tinju Tinja di akun media sosialmu, dan ajak lebih banyak orang untuk beraksi demi Indonesia bebas BABS!</p>
            <?php }else{$btnp1="Pledge with twitter";$btnp2="Pledge with facebook";?>
            <p>Give your commitment in fighting open defecation with Aksi Nasional Tinju Tinja through your social media accounts, and invite more people to act to make Indonesia free from open defecation!</p>
            <?php }?>
            <a href="#" class="connectBtn twitter twpledge"><span><?php echo $btnp1?></span></a>
            <a href="#" class="connectBtn facebook fbpledge"><span><?php echo $btnp2?></span></a>
            <a href="#" class="closeBtn"></a>
        </div>
        
        <div class="popupBox" id="popupVideo">
            <div class="videoWrapper">
                <iframe width="560" height="349" id="video_src" src="" frameborder="0" allowfullscreen></iframe>
            </div>
            <a href="#" class="closeBtn2"></a>
        </div>
        
        
        <div class="popupBox" id="pressRelease">
        	<img src="">
            <a href="#" class="closeBtn"></a>
        </div>
        
        
        <div class="popupBox" id="infografis" style="display:none;">
            <img id="infografis_img" src="<?php echo base_url() ?>userdata/i_big.jpg">
            <a href="#" class="closeBtn"></a>
        </div>
        
        <?php if($curr_page=='infografis'){?>
        <div class="popupBox" id="popupInfografis" style="display:none;">
        <?php if($this->session->userdata('lang')=='id'){$btnselect="Pilih Pulau";?>
        	<h3>Buat infografismu sendiri</h3>
        	<p>Pilih pulau yang ingin kamu jadikan sebagai infografis kamu.</p>
        <?php }else{$btnselect="Choose area";?>
        	<h3>Create your own infographic</h3>
        	<p>Choose the area that you want to use for your infographic</p>
        <?php }?>
            <form id="make_infgr" method="post" action="<?php echo site_url('infografis/make_infografis')?>">
            <div class="fullBox">
            	<div class="chooseProvince"><?php echo $btnselect?></div>
                <div class="selectProvince">
                	<select id="infografis_pulau_id" name="pulau_id">
                    <?php if($pulau)foreach($pulau as $row){?>
                    	<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                    <?php }?>
                    </select>
                </div>
                <a href="#" class="lightBlueBtn" onclick="$(this).fadeOut();$('#make_infgr').submit();return false;">Ok</a>
                <!--a href="#" class="lightBlueBtn" id="loading_btns" onclick="return false;" style="display:none;">Loading</a-->
            </div>
            </form>
            <a href="#" class="closeBtn"></a>
        </div>
		<?php }?>
        
        <div class="popupBox" id="popupPledgeComplete" style="display:none;">
            <h3>Pledge</h3>
            <?php if($this->session->userdata('lang')=='id'){?>
            <p>Terima kasih atas komitmenmu dalam memerangi BABS!<br>
Lanjutkan aksimu dengan memberi kontribusi <a href="<?php echo site_url('caranya-berkontribusi')?>">di sini</a>, <br>
dan sebarkan fakta mengenai BABS melalu media sosialmu <a href="<?php echo site_url('share-fakta')?>">di sini</a></p>
            <?php }else{?>
            <p>Thank you for your commitment in fighting open defecation! Continue to act by contributing <a href="<?php echo site_url('caranya-berkontribusi')?>">here</a>, and share the facts on open defecation through your social media accounts <a href="<?php echo site_url('share-fakta')?>">here</a>.</p>
            <?php }?>
            <a href="#" class="closeBtn"></a>
        </div>
        
        <div class="popupBox" id="popupContributeComplete" style="display:none;">
            <h3>Contribute</h3>
            <?php if($this->session->userdata('lang')=='id'){?>
            <p>Terima kasih!<br> Kontribusimu dalam memerangi BABS telah kami terima.<br>Lihat kontribusi <a href="<?php echo site_url('lihat/galeri')?>">di galeri</a><br> dan sebarkan fakta mengenai BABS melalui media sosialmu <a href="<?php echo site_url('share-fakta')?>">di sini</a></p>
            <?php }else{?>
            <p>Thank you!<br> We have received your contribution to fight against Open Defecation.
See your contribution <a href="<?php echo site_url('lihat/galeri')?>">in the gallery</a>,
and share the facts about Open Defecation through your social media channels <a href="<?php echo site_url('share-fakta')?>">here</a>.</p>
            <?php }?>
            <a href="#" onClick="window.location='<?php echo site_url('lihat/galeri')?>'" class="closeBtn"></a>
        </div>
    </div>

<script>
var pledge=0;
var contribution=0;
var infografis=0;
var likegalery=0;
var link_back="<?php echo site_url()?>";
window.fbAsyncInit = function() {
    FB.init({
      appId      : <?php echo APP_ID?>,
      xfbml      : true,
      version    : 'v2.5'
    });
    /*FB.Event.subscribe('auth.login', function () {
        window.location = 'berikan-aksi-pledge';
    });*/
};

(function(d, s, id){
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) {return;}
 js = d.createElement(s); js.id = id;
 js.src = "//connect.facebook.net/en_US/sdk.js";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$(document).ready(function() {
	$(".backToTop").click(function(e){
		e.preventDefault();
		$("html, body").animate({ scrollTop:  0 }, 1000);
	})
    $(".chg_lang").click(function(e){
		e.preventDefault();
		lang=$(this).data('id');
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('home/set_lang');?>",
			dataType: "json",
			data: {
				lang:lang
			},
			success: function(result){
				if(result.status==1){
					
					location.reload();
				}else{
					
					location.reload();
				}
			}
		});	
	});
	
});



   // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
	  testAPI();
      console.log( 'Please log ' +
        'into this appx.');
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
	 // FB.login();
      console.log( 'Please log ' +
        'into Facebook1.');
		testAPI();
		
		
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
<?php 

$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
$chrome   = stripos($_SERVER['HTTP_USER_AGENT'],"Chrome");
$crios   = stripos($_SERVER['HTTP_USER_AGENT'],"crios");

if( ($iPod || $iPhone ) && ($crios || $chrome)){?>
	alert("Facebook login is disabled for Chrome IOS. Please use safari to continue");
<?php }else{?>
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
<?php }?>
  }

function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    
    
    FB.login(function(response) {
        if (response.authResponse) {
            var token=response.authResponse.accessToken;
            FB.api('/me', function(response) {
       			//console.log(response);
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url().'login/fb/';?>',
                    data: {
                        name : response.name,
                        email: response.email,
                        facebook_id:response.id,
                        data_facebook:response,
                        token:token,
						pledge:pledge
                    },
                    dataType:"JSON",
                    success: function(data){
						if(infografis==1){
							createInfografis();
						}
						else if(likegalery==1){
							like_gallery();
                            window.location = 'berikan-aksi-pledge';
							//location.reload();
						}
						else if(pledge==1){
							window.location='<?php echo site_url('berikan-aksi-pledge')?>';			
						}
						else if(contribution==1){
							window.location = 'ayo-berekspresi';
						}
						else{
                            window.location = 'berikan-aksi-pledge';
							//location.reload();
						}
					}
                });//ajax
            
            });//fb.api
             
        }
		else{
			console.log('111');
		}
        //if
    },{scope: 'public_profile,email'});
}


$(document).ready(function() {
	$(".infografis_crt").click(function(e){
        e.preventDefault();
		createInfografis();
	});
    $(".facebook_login").click(function(e){
		pledge=1;
        e.preventDefault();
        checkLoginState();
    });
    $(".facebook_login_pledge").click(function(e){
		pledge=1;
        e.preventDefault();
        checkLoginState();
    });
    $(".fact_login").click(function(e){
        e.preventDefault();
        checkLoginState();
    });
    
    $(".twitter_login").click(function(e){
		pledge=1;
        e.preventDefault();
        twitter_login();
    });
	
	
    $(".fb_fact_login").click(function(e){
        e.preventDefault();
        checkLoginState();
    });
    
    $(".tw_fact_login").click(function(e){
		tw_link_back="f";
        e.preventDefault();
        twitter_login();
    });
	
	
    $('#facebook_login').click(function(e){
		contribution=1;
        e.preventDefault();
        checkLoginState();
    });
    $('.infografis_login').click(function(e){
        e.preventDefault();
		infografis=1;
        checkLoginState();
    });
    
    $("#twitter_login").click(function(e){
        e.preventDefault();
        twitter_login();
    });
});

function twitter_login(){
    var url_to_open='<?php echo site_url('twit_login/index/')?>/'+pledge+'/'+tw_link_back;
	
    var width = 900;    
    var height = 550;
    var left = parseInt((screen.availWidth/2) - (width/2));
    var top = parseInt((screen.availHeight/2) - (height/2));
    twit_window=window.open(url_to_open, "Twitter Login", 'height=350,width=700,left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top);       
}

function success_twitter(){
    twit_window.close();
	window.opener.location='<?php echo $this->session->userdata('redirect_twitter')?>';
}

function goto_url(linksss){
    if(linksss!=''){
        window.location=linksss;
    }
}




<?php
if($this->session->userdata('lang')=='id'){
$fb_share_title='Aksi Nasional Tinju Tinja - Beri Komitmenmu!';
$fb_desc="Saya siap melawan Buang Air Besar Sembarangan (BABS) yang bahayanya mengancam Indonesia! Ayo gabung di Aksi Nasional Tinju Tinja, let’s fight BABS together!";
$tw_pledge=("Saya siap melawan B.A.B Sembarangan yang mengancam Indonesia! Gabung di #AksiNasional #TinjuTinja www.tinjutinja.com, let's #FightBABS!");
}
else{
$fb_share_title='Aksi Nasional Tinju Tinja - Pledge now!';
$fb_desc="I take pledge to fight open defecation that threatens Indonesia! Join #AksiNasional #TinjuTinja, Let’s #FightBABS!";
$tw_pledge="I take pledge to fight open defecation that threatens Indonesia! Join #AksiNasional #TinjuTinja, Let’s #FightBABS!";
}
$fb_pledge="https://www.facebook.com/dialog/feed?app_id=".APP_ID."&display=popup&link=".urlencode('http://www.tinjutinja.com/')."&picture=".urlencode(base_url().'templates/images/image-thumbnail-fb2.png')."&name=".urlencode($fb_share_title)."&description=".urlencode($fb_desc)."&redirect_uri=".urlencode(site_url('closefb'));
  
?>

function fb_share_pledge(){
	console.log('fb pledge');
	var url_to_open="<?php echo $fb_pledge?>";
	var width = 1000;   
	var height = 550;
	var left = parseInt((screen.availWidth/2) - (width/2));
	var top = parseInt((screen.availHeight/2) - (height/2));
	window.open(url_to_open, "Facebook", 'height=350,width=700,left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top);
	
	count_share(1);
	return false;
}

function tw_share_pledge(){
	console.log('tw pledge');
	twlink=encodeURIComponent("<?php echo $tw_pledge?>");
	var url_to_open='http://twitter.com/intent/tweet?text='+twlink;
	
	var width = 1000;   
	var height = 550;
	var left = parseInt((screen.availWidth/2) - (width/2));
	var top = parseInt((screen.availHeight/2) - (height/2));
	window.open(url_to_open, "Tweet", 'height=350,width=700,left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top);
	
	count_share(2);
	
	
	return false;
}


function count_share(typess){
	$.ajax({		
		type: "POST",
		url: '<?php echo site_url('contribution/share_pledge')?>',
		dataType:"JSON",
		data:{ type:typess },
		success:function(result){	
			if(result.status==1)
			showPopupPledgeComplete();
	
		}
	});
	
}

$(document).ready(function() {
    $(".twpledge").click(function(e){
		e.preventDefault();
		tw_share_pledge();
	});
    $(".fbpledge").click(function(e){
		e.preventDefault();
		fb_share_pledge();
	});
<?php 
$notif=$this->session->flashdata('notif');
if($notif){?>
alert('<?php echo $notif?>');
<?php }?>

<?php 
$pledge=$this->session->userdata('pledge_complete');
if($pledge==1){?>
//showPopupPledge();


<?php $this->session->set_userdata(array('pledge_complete'=>0));
}?>

<?php 
$contribute=$this->session->flashdata('contribute');
if($contribute==1){?>
showPopupContributeComplete();
<?php }?>

$('#popupInfografis').fadeOut();
	
<?php 
/*function showPopupPledgeComplete(){
	showPopupWrapper();
	$('#popupPledgeComplete').fadeIn();
<?php 
if($pledge==1){
$pledge_type=$this->session->userdata('pledge_type');
if($pledge_type==1){?>
$(".twpledge").trigger('click');tw_share_pledge();
<?php }else if($pledge_type==2){?>
$(".fbpledge").trigger('click');fb_share_pledge();
<?php }
$this->session->set_userdata(array('pledge_type'=>0));
}?>
	return true;
}
<?php */?>

});
function showPopupPledgeComplete(){
	showPopupWrapper();
	$("#popupPledge").hide();
	$('#popupPledgeComplete').fadeIn();
}


</script>

<script type="text/javascript">stLight.options({publisher: "12c476be-62ca-4bda-9c5c-d4362ef6ce8d", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<?php //pre($this->session->userdata);?>
</body>
</html>