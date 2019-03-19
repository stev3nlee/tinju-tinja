<?php if($this->session->userdata('lang')=='id'){?>
    <div class="smallBox">
        <h4>Ayo beraksi melawan B.A.B.S</h4>
        <a href="<?php echo site_url('berikan-aksi-pledge')?>" class="button redBg">Berikan Komitmenmu!</a>
        <a href="<?php echo site_url('ayo-berekspresi')?>" class="button grayBg">Ayo berekspresi!</a>
        <a href="<?php echo site_url('share-fakta')?>" class="button darkblueBg">Sebarkan Sekarang!</a>
    </div>
<?php }else{?>
    <div class="smallBox">
        <h4>ACT NOW TO FIGHT OPEN DEFECATION</h4>
        <a href="<?php echo site_url('berikan-aksi-pledge')?>" class="button redBg">Take the pledge!</a>
        <a href="<?php echo site_url('ayo-berekspresi')?>" class="button grayBg">Contribute More!</a>
        <a href="<?php echo site_url('share-fakta')?>" class="button darkblueBg">Share the issue!</a>
    </div>
<?php }?>