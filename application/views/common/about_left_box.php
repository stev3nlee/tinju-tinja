<?php if($this->session->userdata('lang')=='id'){?>
<div class="aboutLeftBox">
    <div class="smallBox">
        <h4>Bersama, kita bebaskan indonesia dari babs yang mengancam anak bangsa dengan Aksi Nasional Tinju Tinja</h4>
    </div>
    <div class="smallBox">
        <h4>Ayo beraksi melawan B.A.B.S</h4>
        <a href="<?php echo site_url('berikan-aksi-pledge')?>" class="button redBg">Berikan Komitmenmu!</a>
        <a href="<?php echo site_url('ayo-berekspresi')?>" class="button grayBg">Ayo berekspresi!</a>
        <a href="<?php echo site_url('share-fakta')?>" class="button darkblueBg">Sebarkan Sekarang!</a>
    </div>
</div>
<?php }else{?>
<div class="aboutLeftBox">
    <div class="smallBox">
        <h4>Let's act together to free Indonesia from the threat from open defecation with Aksi Nasional Tinju Tinja</h4>
    </div>
    <div class="smallBox">
        <h4>Act now to fight OPEN DEFECATION</h4>
        <a href="<?php echo site_url('berikan-aksi-pledge')?>" class="button redBg">Take The Pledge!</a>
        <a href="<?php echo site_url('ayo-berekspresi')?>" class="button grayBg">Contribute More!</a>
        <a href="<?php echo site_url('share-fakta')?>" class="button darkblueBg">Share the issue!</a>
    </div>
</div>
<?php }?>