<script type="text/javascript">
$(document).ready(function() {
  $("#testimonial_form").validate({
        rules: {
                name: {required: true},
                short_desc_id:{ required: true},
                desc_id:{ required: true},
                short_desc_en:{ required:true},
                desc_en:{ required:true},
                image:{ required:true}
        },
        messages: {
                name: {required: "*Please enter a name"},
                short_desc_id:{ required: "*Please enter a indonesian description"},
                desc_id:{ required: "*Please enter a indonesian description"},
                short_desc_en:{ required: "*Please enter a english description"},
                desc_en:{ required: "*Please enter a english description"},
                image: {required: "*Please choose a picture"}
        }
    });
});
</script>

<div class="contentArea">
    <div class="contentBox">
        <h1>Testimonial &raquo; Add </h1>
        <div class="contentForm">
            <form method="post" name="testimonial_form" id="testimonial_form" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/testimonial/do_add');?>"> 
            <fieldset>
            	<legend>Testimonial info: </legend>
                <div class="page-wrap">
					<?php if($this->session->flashdata('notif_ext')){ ?>
                    <span style="color:red"><?php echo $this->session->flashdata('notif_ext') ?></span>
                    <?php }?>
                    
                    <div class="styled-input wide">
                        <input type="text" name="name" id="name" />
                        <label>Name</label>
                        <span></span>
                    </div>

                     <div class="styled-input wide"><br /><br />
                        <div id="toolbar3"></div><textarea name="short_desc_id" id="short_desc_id" class="text_editor" ></textarea>
                        <label>Short Description ID</label>
                        <span></span>
                    </div>
                    

                    <div class="styled-input wide"><br /><br />
                        <div id="toolbar3"></div><textarea name="short_desc_en" id="short_desc_en" class="text_editor" ></textarea>
                        <label>Short Description EN</label>
                        <span></span>
                    </div>

                    <!--div class="styled-input wide"><br /><br />
                        <div id="toolbar3"></div><textarea name="desc_id" id="desc_id" class="text_editor" ></textarea>
                        <label>Description ID</label>
                        <span></span>
                    </div>
                    <div class="styled-input wide"><br /><br />
                        <div id="toolbar3"></div><textarea name="desc_en" id="desc_en" class="text_editor" ></textarea>
                        <label>Description EN</label>
                        <span></span>
                    </div-->
                    
                    <div class="page-wrap">
                        <div class="styled-input wide">
                            <input type="file" name="image" id="image" multiple="multiple" />
                        <!--label>Best resolution is 460 x 460 px, only .jpg / .png / .gif</label-->
                            <span></span>
                        </div>
                   	</div>	
                    
                    
                    <div class="styled-input wide">
                        <input type="text" name="source" id="source" />
                        <label>Source</label>
                        <span></span>
                    </div>
                  
                  
                </div>
            <input type="submit" class="defBtn" value="Submit" />  <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/testimonial');?>';" />
            </fieldset>
            
        	</form>
        </div>
    </div>
</div>
