<script type="text/javascript">
$(document).ready(function() {
  $("#video_form").validate({
        rules: {
                link: {required: true},
                image: {required:true}
        },
        messages: {
                link: {required: "*Please enter a link"},
                image: {required: "*Please choose a picture"}
        }
    });
});
</script>

<div class="contentArea">
    <div class="contentBox">
        <h1>Video &raquo; Add</h1>
        <div class="contentForm">
            <form method="post" name="video_form" id="video_form" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/video/do_add');?>"> 
            <fieldset>
            	<legend>Video info: </legend>
                <div class="page-wrap">
					<?php if($this->session->flashdata('notif_ext')){ ?>
                    <span style="color:red"><?php echo $this->session->flashdata('notif_ext') ?></span>
                    <?php }?>
                    
                    <div class="styled-input wide">
                        <input type="text" name="link" id="link" />
                        <label>Youtube Link</label>
                        <span></span>
                    </div>

                    <div class="page-wrap">
                        <div class="styled-input wide">
                            <input type="file" name="image" id="image" />
                        <!--label>Best resolution is 460 x 460 px, only .jpg / .png / .gif</label-->
                            <span></span>
                        </div>
                    </div>
                  
                </div>
            <input type="submit" class="defBtn" value="Submit" />  <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/video');?>';" />
            </fieldset>
            
        	</form>
        </div>
    </div>
</div>
