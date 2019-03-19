

<div class="contentArea">
    <div class="contentBox">
        <h1>Pulau &raquo; Add </h1>
        <div class="contentForm">
            <form method="post" name="pulau_form" id="pulau_form" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/pulau/do_add');?>"> 
            <fieldset>
            	<legend>Pulau info: </legend>
                <div class="page-wrap">
					<?php if($this->session->flashdata('notif_ext')){ ?>
                    <span style="color:red"><?php echo $this->session->flashdata('notif_ext') ?></span>
                    <?php }?>
                    
                    <div class="styled-input wide">
                        <input type="text" name="name" id="name"/>
                        <label>Name</label>
                        <span></span>
                    </div>
                    
                    <div class="page-wrap">

                        <label>Image ID</label>
                        <div class="styled-input wide">
                            <a class="defBtn"><input type="file" name="image"></a>
                        </div>
                    </div>
                    <div class="page-wrap">

                        <label>Image EN</label>
                        <div class="styled-input wide">
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
