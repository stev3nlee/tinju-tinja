

<div class="contentArea">
    <div class="contentBox">
        <h1>Social Media &raquo; Edit</h1>
        <div class="contentForm">
            <form method="post" name="social_form" id="social_form"  action="<?php echo site_url('tjadmin/admin/do_edit');?>"> 
            <fieldset>
                <legend>Social Media info: </legend>
                <div class="page-wrap">
                    
                    <div class="styled-input wide">
                        <input type="text" name="fb" value="<?php echo $social1['facebook'] ?>" />
                        <label>Facebook</label>
                        <span></span>
                    </div>

                    <div class="styled-input wide">
                        <input type="text" name="tw" value="<?php echo $social1['twitter'] ?>" />
                        <label>Twitter</label>
                        <span></span>
                    </div>

                    <div class="styled-input wide">
                        <input type="text" name="ins"  value="<?php echo $social1['instagram'] ?>" />
                        <label>Instagram</label>
                        <span></span>
                    </div>
                  
                </div>
            <input type="submit" class="defBtn" value="Submit" />  <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/admin');?>';" />
            </fieldset>
            
            </form>
        </div>
    </div>
</div>
