<section id="take_action">
        	<div class="container" id="takeactionBanner">
                <img src="../userdata/test7.jpg">
                <div class="sliderInfoBox">
                    <div class="sliderInfoLeft">
                    Lawan babs dengan aksimu! <span>Bergabunglah dengan Aksi Nasional Tinju Tinja, dan bersama bebaskan Indonesia dari BABS (Buang Air Besar Sembarangan) yang mengancam anak bangsa! Pilih aksi di bawah ini dan berikan aksimu sekarang!</span>
                    </div>
                    <div class="sliderInfoRight">
                    	7280
                        <span>Aksi telah diberikan</span>
                    </div>
                </div>
            </div>
            <div class="container">
            	<div class="takeactionWrapper">
                	<ul class="tabNav">
                    	<li id="tabPledge" class="active"><a href="#tabs-1">Pledge</a></li>
                        <li id="tabContribute"><a href="#tabs-2">Contribute</a></li>
                        <li id="tabShare"><a href="#tabs-3">Share</a></li>
                    </ul>
                    <div class="takeactionBox" id="tabs-1">
                    	<div class="content pledgeContent">
                        	<p>Suarakan komitmenmu dalam memerangi BABS di Indonesia bersama Aksi Nasional Tinju Tinja di akun media sosialmu, agar lebih banyak orang lagi yang memberikan aksi mereka untuk anak bangsa!</p>
            <a href="#" class="connectBtn twitter"><span>Connect With Twitter</span></a>
            <a href="#" class="connectBtn facebook"><span>connect With Facebook</span></a>
                        </div>
                    </div>
                    <div class="takeactionBox" id="tabs-2">
                    	<div class="contributeContent">
                        	<div class="contributeWrapper">
                            	<ul class="subTabNav">
                                	<li class="active"><a href="#subTab-1">Caranya</a></li>
                                	<li><a href="#subTab-2">Ayo Berekspresi!</a></li>
                                	<li><a href="#subTab-3">Lihat Galeri</a></li>
                                </ul>
                                <div class="subTabBox" id="subTab-1">
                                	<div class="content">
                                    	<p>Kamu bisa berkontribusi lebih lanjut  dalam melawan BABS dengan aksimu sendiri. Di sini, kami mengundang kamu untuk bebas berekspresi melalui berbagai media dengan karyamu untuk memerangi BABS! Semua bentuk ekspresi yang berhasil dikumpulkan akan kami pilih dan bawa langsung bersama tim kami ke tempat penyuluhan BABS di pelosok Indonesia sebagai bentuk dukungan kita dalam memerangi BABS bersama.</p><br>Caranya? Ikuti langkah berikut:
                                        <ol>
                                        	<li>Pelajari isu BABS yang terjadi di mana saja, baik di lingkungan sekitar, kampung halaman, atau di berbagai pelosok daerah Indonesia di sini. Makin banyak kamu tahu, semakin kamu mengerti akan ancaman BABS!</li>
                                            <li>Buat ekspresi positif sebagai bentuk ekspresi dukunganmu untuk para saudara kita dalam melawan BABS. Kreasi ekspresi yang kamu berikan bisa dalam berbagai media, seperti gambar, tulisan, ataupun video. Kamu juga bisa tujukan khusus ke daerah tertentu, ataupun ke seluruh Indonesia! Berbagai contoh ekspresi positif di bawah ini bisa menjadi inspirasimu.</li>
                                        </ol>
                                   	</div>
                                    <div class="exampleBox">
                                    	<div class="content">
                                            <div class="example">
                                                <div class="splBox">
                                                    <a href="#" class="coverPicture"><img src="../userdata/test2.jpg"></a>
                                                </div>
                                                <h5>Amir Budi</h5>
                                            </div>
                                            <div class="example">
                                                <div class="splBox">
                                                    <a href="#" class="coverPicture"><img src="../userdata/test4.jpg"></a>
                                                </div>
                                                <h5>Amir Budi</h5>
                                            </div>
                                            <div class="example">
                                                <div class="splBox">
                                                    <a href="#" class="coverPicture"><img src="../userdata/test2.jpg"></a>
                                                </div>
                                                <h5>Amir Budi</h5>
                                            </div>
                                            <div class="example">
                                                <div class="splBox">
                                                    <a href="#" class="coverPicture"><img src="../userdata/test4.jpg"></a>
                                                </div>
                                                <h5>Amir Budi</h5>
                                            </div>
                                            <div class="example">
                                                <div class="splBox">
                                                    <a href="#" class="coverPicture"><img src="../userdata/test2.jpg"></a>
                                                </div>
                                                <h5>Amir Budi</h5>
                                            </div>
                                            <div class="example">
                                                <div class="splBox">
                                                    <a href="#" class="coverPicture"><img src="../userdata/test4.jpg"></a>
                                                </div>
                                                <h5>Amir Budi</h5>
                                            </div>
                                    	</div>
                                    </div>
                                    <div class="content">
                                        <ol start="3">
                                        	<li>Kirimkan ekspresimu sambil mengisi informasi yang diperlukan di sini, lalu kamu bisa melihat bentuk ekspresimu di galeri bersama aneka kreasi dari pasukan Aksi Nasional Tinju Tinja lainnya.</li>
                                            <li>Sebarkan ekspresimu ke berbagai media sosial agar lebih banyak orang yang tahu mengenai ancaman isu BABS, dan bisa lebih banyak orang yang ikutan!</li>
                                        </ol>
                                    </div>
                                    <a href="#" class="lightBlueBtn">Ayo Berekspresi!</a>
                                </div>

                                <form method="post" name="contribution_form" id="contribution_form" enctype="multipart/form-data" action="<?php echo site_url('contribution/add_contribution');?>">
                                <div class="subTabBox" id="subTab-2">
                                	<div class="content">
                                    	<div class="smallContent">
                                        	<p>Isi formulir di bawah ini dengan informasi yang kami perlukan.</p>
                                        	<table>
                                                <input type="hidden" name="user_id"  value="<?php echo $this->session->userdata['user_id']; ?>">
                                            	<tr>
                                                	<td>Nama :</td>
                                                	<td><input type="text" disabled name="name"  value="<?php echo $this->session->userdata['name']; ?>"></td>
                                                </tr>
                                                <tr>
                                                	<td>Email :</td>
                                                	<td><input type="text" disabled name="email" value="<?php echo $this->session->userdata['email']; ?>"></td>
                                                </tr>
                                            </table>
                                        </div>
            						</div>
                                    <div class="grayBox">
                                    	<div class="smallContent">
                                        	<p>Ekspresikan ide, pendapat, atau dukunganmu mengenai isu BABS:</p>
                                            <textarea name="ide"></textarea>
                                        </div>
                                    </div>
                                    <div class="grayBox">
                                    	<div class="smallContent">
                                        	<p>Kamu juga bisa bebas berekspresi melalui media lainnya! <span>(Optional)</span></p>
                                            <table>
                                            	<tr>
                                                	<td>Upload ekspresimu:</td>
                                                    <td>
                                                    	<div class="browse-wrap">
                                                        	<span class="upload-path">Berupa gambar atau foto</span>
                            								<a href="#" class="lightBlueBtn">Browse</a>
                            								<input id="take-picture" type="file" accept="image/*" name="upload" class="upload" title="Choose a file to upload">
                                                        </div>
                                                        <p id="error"></p>
                                                        <div class="photoPreview">
                                                            <img src="about:blank" id="capturedPhoto">
                                                        </div>
                                                	</td>
                                                </tr>
                                                <tr>
                                                	<td></td>
                                                    <td><span class="orBox">atau</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Berikan link Youtube:</td>
                                                    <td><input type="text" name="link" placeholder="Berupa Lagu atau video"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="grayBox" id="section_four">
                                    	<div class="smallContent">
                                        	<p>Daerah spesifik yang kamu dukung:<br><span>(Jika karya kamu ditujukan khusus ke satu daerah saja)</span></p>
                                            <div class="placeBox">
                                            	<select name="daerah_id">
                                                    <?php if($daerah) foreach ($daerah as $value) {?>
                                                	<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="smallContent oHidden">
                                    	<input type="submit" class="lightBlueBtn submitBtn" value="submit">
                                    </div>
                                </form>
                                </div>
                                <div class="subTabBox" id="subTab-3">
                                	<div class="content">
                                    	<div class="fullBox">
                                        	<a href="#" class="galleryBtn"><span>Lihat Galeri</span></a>
                                        </div>
                                        <div class="galleryBox">
                                        	<div id="galleryDetail">
                                            	<div class="galleryDetailBox">
                                                   		<div class="coverPicture">
                                                        	<img src="../userdata/test2.jpg">
                                                        </div>
                                                        <div class="galleryDetail">
                                                        	<div class="profilePicture">
                                                            	<img src="../userdata/test3.jpg">
                                                            </div>
                                                            <div class="profileInfo">
                                                            	<h3>Amir Budi</h3>
                                                                <p>Jangan rusak keindahan bumi pertiwi dengan aksi BABS. Selamatkan Indonesia dari kebiasaan BABS #antitinja</p>
                                                            </div>
                                                        </div>
                                                        <div class="buttonWrapper">
                                                        	<a href="#" class="smallBtn like"><span>23</span><span>Like</span></a>
                                                        	<a href="#" class="smallBtn facebook"><span>Share</span></a>
                                                        	<a href="#" class="smallBtn twitter"><span>Share</span></a>
                                                        </div>
                                                    </div>
                                            </div>
                                            <a href="#" class="leftArrow">Previous</a>
                                            <a href="#" class="rightArrow">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="takeactionBox" id="tabs-3">
                    	<div class="content">
                        	<p>Semakin banyak orang yang tahu mengenai bahaya BABS, makin banyak aksi yang bisa kita kumpulkan! Pilih fakta di bawah ini dan sebarkan di akun media sosialmu.</p>
                            <div class="content oHidden">
                                <?php if($fakta) foreach($fakta as $list){ ?>
                                <?php if($this->session->userdata('lang')=='id'){$title=$list['title_id'];} else {$title=$list['title_en'];} ?>
                                <?php if($this->session->userdata('lang')=='id'){$desc=$list['description_id'];} else {$desc=$description['title_en'];} ?>

                                <?php $twlink = $list['link']; ?>
                                <?php $fblink = "https://www.facebook.com/dialog/feed?app_id=".APP_ID."&link=".urlencode($twlink)."&picture=".urlencode(base_url().'userdata/homeBanner/'.$list['image'])."&name=".urlencode($title)./*"&description=".urlencode($desc).*/"&redirect_uri=".urlencode(site_url('closefb')); ?>

                                <input type="hidden" id="twitter_<?php echo $list['id']?>" value="<?php echo $twlink;?>"> 
                                <input type="hidden" id="fb_<?php echo $list['id']?>" value="<?php echo $fblink;?>">

                            	<div class="factsBox">
                                	<h3><?php echo $title ?></h3>
                                    <div class="factsImgCon">
                                    	<div class="factsImg">
                                            <img src="<?php echo base_url() ?>userdata/homeBanner/<?php echo $list['image'] ?>">
                                        </div>
                                        <div class="factsInfoBox">
                                        	<div class="factsInfo">
                                            	<div class="factsInfoTop">
                                                	<span class="bigFont">31%</span>
                                                	<span>Anak Indonesia Usia<br>1 - 12 Bulan Meninggal</span><br>Akibat diare yang disebabkan Buang air Besar Sembarang
                                                </div>
                                                <div class="factsInfoBot">
                                                	<div class="halfBox">
                                                    	<a href="#" class="halfBtn"><img src="<?php echo base_url() ?>templates/images/icon_unicef_white.png"></a>
                                                    </div>
                                                    <div class="halfBox">
                                                    	<a href="#" class="halfBtn"><img src="<?php echo base_url() ?>templates/images/icon_tinjutinja.png"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4>Aksi Nasional<br>Tinju Tinja</h4>
                                        </div>
                                    </div>
                                    <h4><?php echo $desc ?></h4>
                                    <div class="buttonWrapper">
                                    	<a href="#" class="twitter sharetw2 smallBtn" data-id="<?php echo $list['id']?>"><span>Share</span></a>
                                    	<a href="#" class="facebook sharefb2 smallBtn" data-id="<?php echo $list['id']?>"><span>Share</span></a>
                                    </div>
                                    
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            <script>
    (function () {
    var takePicture = document.querySelector("#take-picture"),
        spanx = document.getElementsByClassName('upload-path'),
        showPicture = document.querySelector("#capturedPhoto");

    if (takePicture && showPicture) {
        // Set events
        takePicture.onchange = function (event) {
            // Get a reference to the taken picture or chosen file
            var files = event.target.files,
                file;
            if (files && files.length > 0) {
                file = files[0];
                try {
                    // Get window.URL object
                    var URL = window.URL || window.webkitURL;

                    // Create ObjectURL
                    var imgURL = URL.createObjectURL(file);

                    // Set img src to ObjectURL
                    showPicture.src = imgURL;

            spanx[0].innerHTML = this.files[0].name;
                    // Revoke ObjectURL after imagehas loaded
                    showPicture.onload = function() {
                        URL.revokeObjectURL(imgURL);  
                    };
                }
                catch (e) {
                    try {
                        // Fallback if createObjectURL is not supported
                        var fileReader = new FileReader();
                        fileReader.onload = function (event) {
                            showPicture.src = event.target.result;
                        };
                        fileReader.readAsDataURL(file);
                    }
                    catch (e) {
                        // Display error message
                        var error = document.querySelector("#error");
                        if (error) {
                            error.innerHTML = "Neither createObjectURL or FileReader are supported";
                        }
                    }
                }
            }
        };
    }
})();
    
$(document).ready(function() {

    <?php
  //  $fblink="https://www.facebook.com/dialog/feed?app_id=".APP_ID."&link=".urlencode('http://tinjutinja.co.id/')."&picture=".urlencode(base_url().'/userdata/video/'.$video_active['image'])."&name=".urlencode("tinjutinja")."&description=".urlencode("Ayo, upload foto Moms bersama Si Kecil & menangkan voucher belanja Zoya senilai Rp. 1.000.000 #NyamanBerhijab")."&redirect_uri=".urlencode(site_url('closefb'));
    //$twlink=urlencode("Ayo, upload foto Moms bersama Si Kecil & menangkan voucher belanja di nyamanberhijab.lifebuoy.co.id #NyamanBerhijab");?>
    
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