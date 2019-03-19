<script type="text/javascript">
$(document).ready(function() { 
  $("#daerah_form").validate({
        rules: {
                name: {required: true},
                desc_id: {required: true},
                desc_en: {required:true},
                image: {required:true}
        },
        messages: {
                name: {required: "*Please enter a name"},
                desc_id:{required: "*Please enter a description"},
                desc_en:{required: "*Please enter a specification"},
                image: {required: "*Please choose a picture"}
        }
    });
});
</script>

<div class="contentArea">
    <div class="contentBox">
        <h1>Daerah &raquo; Add New Daerah</h1>
        <div class="contentForm">
            <form method="post" name="daerah_form" id="daerah_form" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/daerah/do_add');?>"> 
            <fieldset>
            	<legend>Daerah info: </legend>
                <div class="page-wrap">
					<?php if($this->session->flashdata('notif_ext')){ ?>
                    <span style="color:red"><?php echo $this->session->flashdata('notif_ext') ?></span>
                    <?php }?>
                    
                    <div class="styled-input wide">
                        <input type="text" name="name" id="name"/>
                        <label>Name</label>
                        <span></span>
                    </div>
                   <!--  <div class="styled-input wide">
                        <input type="text" name="link" id="link" />
                        <label>Link</label>
                        <span></span>
                    </div> -->
                    
                    <div class="styled-input wide"><br /><br />
                        <!-- <input type="text" name="desc_id" id="desc_id" class="text_editor" > -->
                        <textarea name="desc_id" id="desc_id" class="text_editor"></textarea>
                        <label>Short Description ID</label>
                        <span></span>
                    </div>

                    <div class="styled-input wide"><br /><br />
                        <textarea name="desc_en" id="desc_en" class="text_editor" ></textarea>
                        <label>Short Description EN</label>
                        <span></span>
                    </div>
                    
                    <div class="styled-input wide"><br /><br />
                        <textarea name="content_id" id="content_id" class="text_editor" ></textarea>
                        <label>Long Description ID</label>
                        <span></span>
                    </div>

                    <div class="styled-input wide"><br /><br />
                        <textarea name="content_en" id="content_en" class="text_editor" ></textarea>
                        <label>Long Description EN</label>
                        <span></span>
                    </div>
                    
                    <div class="page-wrap">
                        <div class="styled-input wide">
                            <input type="file" name="image" id="image" />
                        <!--label>Best resolution is 460 x 460 px, only .jpg / .png / .gif</label-->
                            <span></span>
                        </div>
                   	</div>	
                    <div class="page-wrap">
                        <div class="styled-input wide">
                            <input type="file" name="pdf" id="pdf" />
                            <label>Upload PDF</label>
                            <span></span>
                        </div>
                    </div>  
                  
                </div>
            <input type="submit" class="defBtn" value="Submit" />  <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/daerah');?>';" />
            </fieldset>
            
        	</form>
        </div>
    </div>
</div>
