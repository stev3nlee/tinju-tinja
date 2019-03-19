<div class="contentArea">
    <div class="contentBox">
        <h1>News &raquo; Edit</h1>
        
        <div class="contentForm">
            <form method="post" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/news/do_edit')?>">
            <input type="hidden" name="id" id="id" value="<?php echo $news['id'] ?>" />
            
            <fieldset>
                <div class="page-wrap">
                     <div class="styled-input wide">
                        <input type="text" class="txtField" required="required" name="media" id="name" value="<?php echo $news['media'] ?>" />
                        <label>Media</label>
                        <span></span>
                    </div>
                    <div class="styled-input wide">
                        <input type="text" class="txtField" required="required" name="title" id="name" value="<?php echo $news['title'] ?>" />
                        <label>Title</label>
                        <span></span>
                    </div>
                    <div class="styled-input wide">
                       	<input type="text" class="txtField" required="required" name="link" id="link" value="<?php echo $news['link'] ?>" />
                        <label>Link</label>
                        <span></span>
                    </div>
                </div>
                
            <input type="submit" class="defBtn" value="Submit" />  <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/news')?>';" />
            	
			</fieldset>
            
           
            </form>
        
         </div>
     </div>
</div>