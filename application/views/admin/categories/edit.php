<div class="contentArea">
    <div class="contentBox">
        <h1><a href="<?php echo site_url('tjadmin/about_us_category') ?>">About Us Banner </a> &raquo; Edit </h1>
        <div class="contentForm">
            <form method="post" id="add_category_form" action="<?php echo site_url('tjadmin/about_us_category/update/'.$detail['id']);?>">
                <fieldset>
                    
                    <div class="page-wrap">

                        <label>Image</label>
                        <div class="styled-input wide">
                        <img src="<?php echo base_url("userdata/about_us/".$detail['image']);?>" width="200">
                            <a class="defBtn"><input type="file" name="image"></a>
                        </div>
                    </div>
                    <div class="page-wrap">

                        <label>Image Mobile</label>
                        <div class="styled-input wide">
                        <img src="<?php echo base_url("userdata/about_us/".$detail['image_mobile']);?>" width="200">
                            <a class="defBtn"><input type="file" name="image_mobile"></a>
                        </div>
                    </div>
                    <input type="submit" class="defBtn" value="Submit"/>
                    <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/about_us_category');?>';" />
                </fieldset>
            </form>
        </div>
    </div>
</div>