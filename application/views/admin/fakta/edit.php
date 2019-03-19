<div class="contentArea">
    <div class="contentBox">
        <h1>Fakta &raquo; Edit</h1>
        
        <div class="contentForm">
            <form method="post" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/fakta/do_edit')?>">
            <input type="hidden" name="id" id="id" value="<?php echo $fakta['id'] ?>" />
            
            <fieldset>
                <div class="page-wrap">
                     <div class="styled-input wide">
                        <input type="text" class="txtField" required="required" name="title_id" id="name" value="<?php echo $fakta['title_id'] ?>" />
                        <label>Title ID</label>
                        <span></span>
                    </div>
                    <div class="styled-input wide">
                        <input type="text" class="txtField" required="required" name="title_en" id="name" value="<?php echo $fakta['title_en'] ?>" />
                        <label>Title EN</label>
                        <span></span>
                    </div>
                    <div>
                    
                        <label>Description ID</label>
                    <div class="styled-input wide">
                        <textarea class="text_editor" name="description_id" id="description" ><?php echo $fakta['description_id']?></textarea>
                        <span></span>
                    </div>
                    </div>
                    <div> 
                    
                        <label>Description En</label>
                    <div class="styled-input wide">
                        <textarea class="text_editor" name="description_en" id="description" ><?php echo $fakta['description_en']?></textarea>
                        <span></span>
         			</div>
                    </div>
                    
                    
                    <div class="page-wrap">

                        <label>Image ID</label>
                        <div class="styled-input wide">
                        <img src="<?php echo base_url("userdata/fakta/".$fakta['image']);?>" width="100">
                            <a class="defBtn"><input type="file" name="image"></a>
                        </div>
                    </div>
                    <div class="page-wrap">

                        <label>Image EN</label>
                        <div class="styled-input wide">
                        <img src="<?php echo base_url("userdata/fakta/".$fakta['image_en']);?>" width="100">
                            <a class="defBtn"><input type="file" name="image_en"></a>
                        </div>
                    </div>
                
                    <div class="styled-input wide">
                       	<input type="text" class="txtField" required="required" name="link" id="link" value="<?php echo $fakta['link'] ?>" />
                        <label>Link</label>
                        <span></span>
                    </div>
                    
                    
                    <div class="styled-input wide">
                        <textarea class="txtField" name="share_id" id="share_id"><?php echo $fakta['share_id'] ?></textarea>
                        <label>Share Text FB ID</label>
                        <span></span>
                    </div>
                    <div class="styled-input wide">
                        <textarea class="txtField" name="share_en" id="share_en"><?php echo $fakta['share_en'] ?></textarea>
                        <label>Share Text FB EN</label>
                        <span></span>
                    </div>
                        
                    <div class="styled-input wide">
                        <textarea class="txtField" name="share_tw_id" id="share_tw_id"><?php echo $fakta['share_tw_id'] ?></textarea>
                        <label>Share Text TW ID</label>
                        <span></span>
                    </div>
                    <div class="styled-input wide">
                        <textarea class="txtField" name="share_tw_en" id="share_tw_en"><?php echo $fakta['share_tw_en'] ?></textarea>
                        <label>Share Text TW EN</label>
                        <span></span>
                    </div> 
                </div>
                
            <input type="submit" class="defBtn" value="Submit" />  <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/fakta')?>';" />
            	
			</fieldset>
            
           
            </form>
        
         </div>
     </div>
</div>