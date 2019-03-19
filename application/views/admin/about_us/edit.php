<div class="contentArea">
    <div class="contentBox">
        <h1>About Us &raquo; Edit </h1>
        <div class="contentForm">
            <form method="post" id="add_category_form" action="<?php echo site_url('tjadmin/about_us/update/'.$list[0]['id']);?>">
                <fieldset>
                    <div class="page-wrap">

                        Categories
                        <select name="categories" required="required">
                            <?php foreach($category as $lists)
                            { ?>
                                <?php if ($lists['id'] == $list[0]['categories_id']) {?>
                                <option value="<?php echo $lists['id'] ?>" selected="selected" ><?php echo $lists['name'] ?></option>
                                <?php }else { ?>
                                <option value="<?php echo $lists['id'] ?>"><?php echo $lists['name'] ?></option>
                            <?php
                                }
                            }?>
                        </select>
                        <div class="styled-input wide">
                            <input type="text" name="title" value="<?php echo $list[0]['title'] ?>" required/>
                            <label>Title ID<span style="color:red">*</span></label>
                            <span></span>
                        </div>

                        <div class="styled-input wide">
                            <input type="text" name="title_en" value="<?php echo $list[0]['title_en'] ?>" required/>
                            <label>Title EN<span style="color:red">*</span></label>
                            <span></span>
                        </div><div>
                		<label>Content ID</label><span style="color:red">*</span>
                        <div class="styled-input wide">
                            <textarea name="content" class="text_editor"  required> <?php echo $list[0]['content'] ?> </textarea>
                            
                            <span></span>
                        </div>
                        </div>
                        <div>
                		<label>Content EN</label><span style="color:red">*</span>
                        <div class="styled-input wide">
                            <textarea name="content_en" class="text_editor"  required> <?php echo $list[0]['content_en'] ?> </textarea>
                            
                            <span></span>
                        </div></div>
                        <input type="hidden" name="status" value="1" />
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
                    <input type="submit" class="defBtn" value="Submit"/>
                    <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/about_us');?>';" />
                </fieldset>
            </form>
        </div>
    </div>
</div>