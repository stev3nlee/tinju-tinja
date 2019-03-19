<div class="contentArea">
    <div class="contentBox">
        <h1><a href="<?php echo site_url('tjadmin/info_grafis') ?>">Info Grafis </a> &raquo; Edit </h1>
        <div class="contentForm">
            <form method="post" id="add_category_form" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/info_grafis/update/'.$list[0]['id']);?>">
                <fieldset>
                
                	
                    <div class="page-wrap">

                        <label>Image ID</label>
                        <div class="styled-input wide">
                        <img src="<?php echo base_url("userdata/info_grafis/".$list[0]['image']);?>" width="100">
                            <a class="defBtn"><input type="file" name="image"></a>
                        </div>
                    </div>
                    <div class="page-wrap">

                        <label>Image EN</label>
                        <div class="styled-input wide">
                        <img src="<?php echo base_url("userdata/info_grafis/".$list[0]['image_en']);?>" width="100">
                            <a class="defBtn"><input type="file" name="image_en"></a>
                        </div>
                    </div>
                
                
                        <!--div class='frame'>
                            Status
                            <?php if($list[0]['status'] == 1){ ?>
                                <input id='active' name='status' type='radio' value="1" checked>
                                <label class='radio' for='active'><i class="fa fa-times"></i></label>
                                <label for="radio_1">active</label>
                                <input id='inactive' name='status' type='radio' value="0">
                                <label class='radio' for='inactive'><i class="fa fa-times"></i></label>
                                <label for="radio_2">inactive</label>
                            <?php }
                            else{?>
                                <input id='active' name='status' type='radio' value="1" >
                                <label class='radio' for='active'><i class="fa fa-times"></i></label>
                                <label for="radio_1">active</label>
                                <input id='inactive' name='status' type='radio' value="0" checked >
                                <label class='radio' for='inactive'><i class="fa fa-times"></i></label>
                                <label for="radio_2">inactive</label>
                            <?php }?>
                        </div-->
                        <input type="hidden" name="status" value="1" />
                        <input type="submit" class="defBtn" value="Submit"/>
                        <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/info_grafis');?>';" />
                </fieldset>
            </form>
        </div>
    </div>
</div>