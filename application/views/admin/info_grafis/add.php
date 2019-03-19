<div class="contentArea">
    <div class="contentBox">
        <h1><a href="<?php echo site_url('tjadmin/info_grafis') ?>">Info Grafis </a> &raquo; Add </h1>
        <div class="contentForm">
            <form method="post" id="add_category_form" enctype="multipart/form-data"  action="<?php echo site_url('tjadmin/info_grafis/store');?>">
                <fieldset>
                    <div class="page-wrap">

                        <label>Image ID</label>
                        <div class="styled-input wide">
                            <a class="defBtn"><input type="file" name="image"></a>
                        </div>
                    </div>
                    <div class="page-wrap">

                        <label>Image EN</label>
                        <div class="styled-input wide">
                            <a class="defBtn"><input type="file" name="image_en"></a>
                        </div>
                    </div>
                    <input type="submit" class="defBtn" value="Submit"/>
                    <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/info_grafis');?>';" />
                </fieldset>
            </form>
        </div>
    </div>
</div>