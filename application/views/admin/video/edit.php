<script type="text/javascript">
$(document).ready(function() {
  $("#video_form").validate({
        rules: {
                link: {required: true},
        },
        messages: {
                link: {required: "*Please enter a link"},
        }
    });
});
</script>

<div class="contentArea">
    <div class="contentBox">
        <h1>Video &raquo; Edit</h1>
        <div class="contentForm">
            <form method="post" name="video_form" id="video_form" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/video/do_edit');?>"> 
            <fieldset>
            	<legend>Video info: </legend>
                <div class="page-wrap">
					<?php if($this->session->flashdata('notif_ext')){ ?>
                    <span style="color:red"><?php echo $this->session->flashdata('notif_ext') ?></span>
                    <?php }?>
                    
                    <input type="hidden" name="id" value="<?php echo $video['id'] ?>" />
                    <div class="styled-input wide">
                        <input type="text" name="link" id="link" value="<?php echo $video['youtube_link'] ?>" />
                        <label>Youtube Link</label>
                        <span></span>
                    </div>


                    <input type="hidden" name="image1" value="<?php echo $video['image'] ?>" />

                    <img src="<?php echo base_url()."userdata/video/".$video['image'];?>" width="400px">
                    <div class="page-wrap">
                        <div class="styled-input wide">
                            <input type="file" name="image" id="image" value="<?php echo $video['image'] ?>" />
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
