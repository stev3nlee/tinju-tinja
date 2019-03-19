<header>
    <div class="headerBox">
        <h1><a href="<?php echo base_url()?>" id="logo">Tinju Tinja</a></h1>
        <div class="headerRight">
            <ul class="language">
                <li><a href="#" class="chg_lang <?php echo ($this->session->userdata('lang')=='id')?"selected":""?>" data-id="id">IND</a></li>
                <li><a href="#" class="chg_lang <?php echo ($this->session->userdata('lang')=='en')?"selected":""?>" data-id="en">ENG</a></li>
            </ul>
            <div class="menuBtn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>