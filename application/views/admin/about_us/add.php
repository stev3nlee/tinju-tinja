<div class="contentArea">
    <div class="contentBox">
        <h1>About Us &raquo; Add </h1>
        <div class="contentForm">
            <form method="post" id="add_category_form" action="<?php echo site_url('tjadmin/about_us/store');?>">
                <fieldset>
                    <div class="page-wrap">

                        Categories
                        <select name="categories" required="required">
                            <option value="">-----Select Category-------</option>
                            <?php foreach($category as $list){ ?>
                            <option value="<?php echo $list['id'] ?>"><?php echo $list['name'] ?></option>
                            <?php }?>
                        </select>
                        <div class="styled-input wide">
                            <input type="text" name="title" required/>
                            <label>Title <span style="color:red">*</span></label>
                            <span></span>
                        </div>

                        <div class="styled-input wide">
                            <textarea name="content" class="text_editor"  required></textarea>
                            <label>Content <span style="color:red">*</span></label>
                            <span></span>
                        </div>
                		<label>Description EN</label><span style="color:red">*</span>
                        <div class="styled-input wide">
                            <input type="text" name="title_en" required/>
                            <!--label>English Title </label-->
                            <span></span>
                        </div>

                        <div class="styled-input wide">
                            <textarea name="content_en" class="text_editor" required></textarea>
                            <label>Content English <span style="color:red">*</span></label>
                            <span></span>
                        </div>
                    </div>
                    <input type="submit" class="defBtn" value="Submit"/>
                    <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/about_us');?>';" />
                </fieldset>
            </form>
        </div>
    </div>
</div>