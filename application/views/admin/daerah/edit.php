<script type="text/javascript">
$(document).ready(function() { 
  $("#product_form").validate({
        rules: {
                name: {required: true},
                desc_id:{ required: true},
                desc_en:{ required:true}
        },
        messages: {
                name: {required: "*Please enter a name"},
                desc_id:{ required: "*Please enter a description"},
                desc_en:{ required: "*Please enter a specification"}
        }
    });
});
</script>

<div class="contentArea">
    <div class="contentBox">
        <h1>Daerah &raquo; Edit Daerah</h1>
        <div class="contentForm">
            <form method="post" name="product_form" id="product_form" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/daerah/do_edit');?>"> 
            <fieldset>
            	<legend>Daerah info: </legend>
                <div class="page-wrap">
					<?php if($this->session->flashdata('notif_ext')){ ?>
                    <span style="color:red"><?php echo $this->session->flashdata('notif_ext') ?></span>
                    <?php }?>
                    
                    <input type="hidden" name="id" id="id" value="<?php echo $daerah['id'] ?>" />
                    <div class="styled-input wide">
                        <input type="text" name="name" id="name" value="<?php echo $daerah['name'] ?>" />
                        <label>Name</label>
                        <span></span>
                    </div>
                   <!--  <div class="styled-input wide">
                        <input type="text" name="link" id="link" value="<?php echo $daerah['link'] ?>" />
                        <label>Link</label>
                        <span></span>
                    </div> -->
                    
                    <div class="styled-input wide"><br /><br />
                        <textarea name="desc_id" id="desc_id" class="text_editor" ><?php echo $daerah['description_id'] ?></textarea>
                        <label>Short Description ID</label>
                        <span></span>
                    </div>

                    <div class="styled-input wide"><br /><br />
                        <textarea name="desc_en" id="desc_en" class="text_editor" ><?php echo $daerah['description_en'] ?></textarea>
                        <label>Short Description EN</label>
                        <span></span>
                    </div>
                    
                    <div class="styled-input wide"><br /><br />
                        <textarea name="content_id" id="content_id" class="text_editor" ><?php echo $daerah['content_id'] ?></textarea>
                        <label>Long Description ID</label>
                        <span></span>
                    </div>

                    <div class="styled-input wide"><br /><br />
                        <textarea name="content_en" id="content_en" class="text_editor" ><?php echo $daerah['content_en'] ?></textarea>
                        <label>Long Description EN</label>
                        <span></span>
                    </div>
                    
                    <input type="hidden" name="image1" id="image1" value="<?php echo $daerah['image'] ?>" />
                    <img src="<?php echo base_url()."userdata/daerah/".$daerah['image'];?>" width="400px">
                    <div class="page-wrap">
                        <div class="styled-input wide">
                            <input type="file" name="image" id="image" value="<?php echo $daerah['image'] ?>" />
                        <!--label>Best resolution is 460 x 460 px, only .jpg / .png / .gif</label-->
                            <span></span>
                        </div>
                   	</div>	

                    <input type="hidden" name="pdf1" id="pdf1" value="<?php echo $daerah['pdf'] ?>" />
                    <div class="page-wrap">
                        <div class="styled-input wide">
                            <input type="file" name="pdf" id="pdf" value="<?php echo $daerah['pdf'] ?>" /><?php if($daerah['pdf']!=''){?><br />
                            <a href="<?php echo base_url().'userdata/upload_pdf/'.$daerah['pdf']?>" target="_blank">View Current PDF</a>
                            <?php }?>
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
