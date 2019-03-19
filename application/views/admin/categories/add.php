<div class="contentArea">
    <div class="contentBox">
        <h1><a href="<?php echo site_url('tjadmin/about_us_category') ?>">About Us </a> &raquo; Add </h1>
        <div class="contentForm">
            <form method="post" id="add_category_form" action="<?php echo site_url('tjadmin/about_us_category/store');?>">
                <fieldset>
                    <div class="page-wrap">
                        <div class="styled-input wide">
                            <input type="text" name="name" required/>
                            <label>Category Indonesia<span style="color:red">*</span></label>
                            <span></span>
                        </div>

                        <div class="styled-input wide">
                            <input type="text" name="name_en" required/>
                            <label>Category English<span style="color:red">*</span></label>
                            <span></span>
                        </div>
                    </div>
                    <input type="submit" class="defBtn" value="Submit"/>
                    <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/about_us_category');?>';" />
                </fieldset>
            </form>
        </div>
    </div>
</div>