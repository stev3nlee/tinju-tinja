<div class="contentArea">
    <div class="contentBox">
        <h1>Home Banner &raquo; Edit</h1>
        
        <div class="contentForm">
            <form method="post" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/homebanner/do_edit')?>">
            <input type="hidden" name="id" id="id" value="<?php echo $banner['id'] ?>" />
            
            <fieldset>
                <div class="page-wrap">
                    <div>
                        <label>Description ID</label>
                        <div class="styled-input wide">
                            <textarea class="text_editor" name="description_id" id="description" ><?php echo $banner['description_id']?></textarea>
                            <span></span>
                        </div>
                    </div>
                    <label>Description EN</label>
                    <div class="styled-input wide">
                        <textarea class="text_editor" name="description_en" id="description" ><?php echo $banner['description_en']?></textarea>
                        <span></span>
                    </div>
                    <div >
                        Category<br/><br/>
                            <select name="category_id">
                                    <?php if($dropdown)  foreach($dropdown as $drop) { ?>
                                        <option value="<?php echo $drop['id']; ?>" <?php if($drop['id']==$banner['category_id']) echo "selected=\"selected\"";?>>
                                            <?php echo $drop['name_id']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                    </div>
                    
                    
                    
                    <div class="page-wrap">

                        <label>Image</label>
                        <div class="styled-input wide">
                        <img src="<?php echo base_url("userdata/homeBanner/".$banner['image']);?>" width="150">
                            <a class="defBtn"><input type="file" name="image"></a>
                        </div>
                    </div>
                    <div class="page-wrap">

                        <label>Image Mobile</label>
                        <div class="styled-input wide">
                        <img src="<?php echo base_url("userdata/homeBanner/".$banner['image_mobile']);?>" width="150">
                            <a class="defBtn"><input type="file" name="image_mobile"></a>
                        </div>
                    </div>
                
                    <div class="styled-input wide">
                       	<input type="text" class="txtField" required="required" name="link" id="link" value="<?php echo $banner['link'] ?>" />
                        <label>Link</label>
                        <span></span>
                    </div>
                </div>
                
            <input type="submit" class="defBtn" value="Submit" />  <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/homebanner')?>';" />
            	
			</fieldset>
            
           
            </form>
        
        	<?php if($this->session->flashdata('notif2')) echo "<font color='red'>".$this->session->flashdata('notif2')."</font>";?>
         </div>
     </div>
</div>