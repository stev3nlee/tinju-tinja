<div class="readWrapper">
    <div class="readBox"><?php echo ($this->session->userdata('lang')=='id')?"Baca Tentang":"Read About";?></div>
    <div class="selectRead">
        <select name="about_us_categories" onchange="if (this.value) window.location.href=this.value">
            <?php if($category)foreach ($category as $option){ ?>
            <option <?php if($option['alias']==$alias)echo "selected=\"selected\""?> value="<?php echo site_url($option['alias'])?>"><?php if($this->session->userdata('lang')=='id'){ echo $option['name']; } else { echo $option['name_en']; }?></option>
            <?php } ?>
        </select>
    </div>
</div>