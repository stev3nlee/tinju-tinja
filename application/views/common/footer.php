      <footer>
        	<div class="footerBox">
            
            	<div class="unicefFooter">
                    <a href="http://www.unicef.org/indonesia/id/" target="_blank"><img src="<?php echo base_url() ?>templates/images/logo_unicef.png"></a>
                </div>
            	<ul class="navFooter">
            <?php if($this->session->userdata('lang')=='id'){?>
                <li><a href="<?php echo site_url()?>">Home</a></li>
                <li><a href="<?php echo site_url('aksi-nasional-tinju-tinja')?>">Tentang</a></li>
                <li><a href="<?php echo site_url('berikan-aksi-pledge')?>">Berikan Aksi</a></li>
                <li><a href="<?php echo site_url('pelajari-dampak-babs-di-indonesia')?>">Dampak BABS di Indonesia</a></li>
                <li><a href="<?php echo site_url('video')?>">Video</a></li>
                <li><a href="<?php echo site_url('infografis') ?>">Infografis</a></li>
            <?php }else{?>
                <li><a href="<?php echo site_url()?>">Home</a></li>
                <li><a href="<?php echo site_url('aksi-nasional-tinju-tinja')?>">About</a></li>
                <li><a href="<?php echo site_url('berikan-aksi-pledge')?>">Give Your Action</a></li>
                <li><a href="<?php echo site_url('pelajari-dampak-babs-di-indonesia')?>">Open Defecation Impacts</a></li>
                <li><a href="<?php echo site_url('video')?>">Video</a></li>
                <li><a href="<?php echo site_url('infografis') ?>">Infographic</a></li>
            <?php }?>
                </ul>

                <script type="text/javascript">stLight.options({publisher: "12c476be-62ca-4bda-9c5c-d4362ef6ce8d", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

                <ul class="sosmedCount">
                    <li><span class='st_facebook_hcount' displayText='Facebook'></span></li>
                    <li><span class='st_twitter_hcount' displayText='Tweet'></span></li>
                </ul>
            
            </div>
        </footer>