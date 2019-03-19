<div class="contentArea">
    <div class="contentBox">
        <h1>Home Banner Category &raquo; Add</h1>
        
        <div class="contentForm">
            <form method="post" enctype="multipart/form-data" action="<?php echo site_url('tjadmin/category/do_add')?>">
            <input type="hidden" id="active" name="active" value="1">
            <fieldset>
                <div class="page-wrap">
                    <div class="styled-input wide">
                        <input type="text" class="txtField" name="name_id" id="name" />
                        <label>Name ID</label>
                        <span></span>
                    </div>
                    <div class="styled-input wide">
                        <input type="text" class="txtField" name="name_en" id="name" />
                        <label>Name EN</label>
                        <span></span>
                    </div>                            
                </div>
                <input type="submit" class="defBtn" value="Submit" />  <input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('tjadmin/category')?>';" />
            </fieldset>
            </form>
        <?php if($this->session->flashdata('notif2')) echo "<font color='red'>".$this->session->flashdata('notif2')."</font>";?>
        </div>
    </div>
</div>