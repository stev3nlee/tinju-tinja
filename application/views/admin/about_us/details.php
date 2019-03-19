<div class="contentArea">
    <div class="contentBox">
        <h1><a href="<?php echo site_url('tjadmin/about_us') ?>">About Us </a> &raquo; Details </h1>
        <div class="contentForm">
              <fieldset>
                    <div class="page-wrap">

                        Categories
                        <select name="categories" required="required">
                            <option value="">-----Select Category-------</option>
                            <option value="bleble">bleble</option>
                            <option value="blublu">blublu</option>
                        </select>
                        <div class="styled-input wide">
                            <input type="text" name="title" value="<?php echo $list[0]['title'] ?>" required/>
                            <label>Title <span style="color:red">*</span></label>
                            <span></span>
                        </div>

                        <div class="styled-input wide">
                            <textarea name="content" class="text_editor" required> <?php echo $list[0]['content'] ?> </textarea>
                            <label>Content <span style="color:red">*</span></label>
                            <span></span>
                        </div>
                        <div class="styled-input wide">
                            <input type="text" name="title_en" value="<?php echo $list[0]['title_en'] ?>" required/>
                            <label>English Title <span style="color:red">*</span></label>
                            <span></span>
                        </div>

                        <div class="styled-input wide">
                            <textarea name="content_en" class="text_editor" required> <?php echo $list[0]['content_en'] ?> </textarea>
                            <label>Content English <span style="color:red">*</span></label>
                            <span></span>
                        </div>
                        <div class='frame'>
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

                        </div>
                        <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/about_us');?>';" />
                    </div>
             </fieldset>
        </div>
    </div>
</div>