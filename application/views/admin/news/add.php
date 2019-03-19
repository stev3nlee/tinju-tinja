<div class="contentArea">
    <div class="contentBox">
        <h1>News &raquo; Add </h1>
        
        <div class="contentForm">
            <form method="post" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/news/do_add')?>">
            <input type="hidden" id="active" name="active" value="1">
            <fieldset>
                <div class="page-wrap">
                    <div class="styled-input wide">
                        <input type="text" class="txtField" required="required" name="media" id="name" />
                        <label>Media</label>
                        <span></span>
                    </div>
                    <div class="styled-input wide">
                        <input type="text" class="txtField" required="required" name="title" id="name" />
                        <label>Title</label>
                        <span></span>
                    </div>                    
                    <div class="styled-input wide">
                       	<input type="text" name="link" id="link" />
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