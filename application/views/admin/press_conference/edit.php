// <script type="text/javascript">
// $(document).ready(function() {
//   $("#press_form").validate({
//         rules: {
//                 image:{ required:true}
//         },
//         messages: {
//                 image: {required: "*Please choose a picture"}
//         }
//     });
// });
// </script>

<div class="contentArea">
    <div class="contentBox">
        <h1>Press Conference &raquo; Edit </h1>
        <div class="contentForm">
            <form method="post" name="press_form" id="press_form" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/press_conference/do_edit');?>"> 
            <fieldset>
            	<legend>Press Conference info: </legend>
                <div class="page-wrap">
					<?php if($this->session->flashdata('notif_ext')){ ?>
                    <span style="color:red"><?php echo $this->session->flashdata('notif_ext') ?></span>
                    <?php }?>

                    <input type="hidden" name="id" value="<?php echo $press['id'] ?>"/>
                    <input type="hidden" name="image1" value="<?php echo $press['image'] ?>"/> 
                    <img src="<?php echo base_url()."userdata/press_conference/".$press['image'];?>" width="400px" >  
                    <div class="page-wrap">
                        <div class="styled-input wide">
                            <input type="file" name="image" id="image" value="<?php echo $press['image'] ?>"/>
                        <!--label>Best resolution is 460 x 460 px, only .jpg / .png / .gif</label-->
                            <span></span>
                        </div>
                   	</div>	
                  
                </div>
            <input type="submit" class="defBtn" value="Submit" />  <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/press_conference');?>';" />
            </fieldset>
            
        	</form>
        </div>
    </div>
</div>
