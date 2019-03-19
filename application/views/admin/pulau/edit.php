

<div class="contentArea">
    <div class="contentBox">
        <h1>Pulau &raquo; Edit </h1>
        <div class="contentForm">
            <form method="post" name="product_form" id="product_form" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/pulau/do_edit');?>"> 
            <fieldset>
            	<legend>Pulau info: </legend>
                <div class="page-wrap">
					<?php if($this->session->flashdata('notif_ext')){ ?>
                    <span style="color:red"><?php echo $this->session->flashdata('notif_ext') ?></span>
                    <?php }?>
                    
                    <input type="hidden" name="id" id="id" value="<?php echo $pulau['id'] ?>" />
                    <div class="styled-input wide">
                        <input type="text" name="name" id="name" value="<?php echo $pulau['name'] ?>" />
                        <label>Name</label>
                        <span></span>
                    </div>
                   <!--  <div class="styled-input wide">
                        <input type="text" name="link" id="link" value="<?php echo $pulau['link'] ?>" />
                        <label>Link</label>
                        <span></span>
                    </div> -->
                    
                    
                	
                    <div class="page-wrap">

                        <label>Image ID</label>
                        <div class="styled-input wide">
                        <img src="<?php echo base_url("userdata/pulau/".$pulau['image']);?>" width="100">
                            <a class="defBtn"><input type="file" name="image"></a>
                        </div>
                    </div>
                    <div class="page-wrap">

                        <label>Image EN</label>
                        <div class="styled-input wide">
                        <img src="<?php echo base_url("userdata/pulau/".$pulau['image_en']);?>" width="100">
                            <a class="defBtn"><input type="file" name="image_en"></a>
                        </div>
                    </div>
                  
                </div>
            <input type="submit" class="defBtn" value="Submit" />  <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/pulau');?>';" />
            </fieldset>
            
        	</form>
        </div>
    </div>
</div>
