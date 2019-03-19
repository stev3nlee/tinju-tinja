<div class="contentArea">
    <div class="contentBox">
        <h1>Middle Banner &raquo; Edit Middle Banner</h1>
        
        <div class="contentForm">
            <form method="post" enctype="multipart/form-data" action="<?php echo site_url('lwsecurityadmin/midbanner/do_edit')?>">
            <input type="hidden" name="id" id="id" value="<?php echo $banner['id'] ?>" />
            
            <fieldset>
                <div class="page-wrap">
                    <div class="styled-input wide">
                       	<input type="text" class="txtField" name="name" id="name" value="<?php echo $banner['name'] ?>" />
                        <label>Name</label>
                        <span></span>
                    </div>
                    <div class="styled-input wide">
                        <textarea name="description" id="description" required><?php echo $banner['description']?></textarea>
                        <label>Description</label>
                        <span></span>
                    </div>
                    <?php if($banner['image']){ ?>
                    <div class="styled-input wide">
                       	<img src="<?php echo base_url()."userdata/midBanner/".$banner['image']?>" height="150px"/>
                        <span></span>
                    </div>
                    <?php }?>
                    <div class="styled-input wide">
                       	<input type="file" class="txtField" <?php if($banner['image']==''){?>required="required"<?php }?> name="image" id="image" />
                    	<label>Best resolution for desktop image is 460 x 260 px</label>
                        <span></span>
                    </div>
                    <div class="styled-input wide">
                       	<input type="text" class="txtField" name="link" id="link" value="<?php echo $banner['link'] ?>" />
                        <label>Link</label>
                        <span></span>
                    </div>
                    <div class="styled-input wide">
                       	<input type="checkbox" class="txtField" value="1" <?php if($banner['open_new_tab'] == 1){ ?> checked="checked" <?php } ?> name="open_new_tab" id="open_new_tab" /> Open link in new tab
                        <span></span>
                    </div>
            	</div>
                
            <input type="submit" class="defBtn" value="Submit" />  <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('lwsecurityadmin/midbanner')?>';" />
            	
			</fieldset>
            
           
            </form>
        
        	<?php if($this->session->flashdata('notif2')) echo "<font color='red'>".$this->session->flashdata('notif2')."</font>";?>
         </div>
     </div>
</div>