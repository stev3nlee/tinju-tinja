<div class="contentArea">
    <div class="contentBox">
        <h1>About Us Banner &raquo; List</h1>

        <div class="contentTable">
            <table class="tablesorter" id="content_table" width="100%">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="10%">Action</th>
                    <th width="30%">Name</th>
                    <th width="30%">Image</th>
                    <th width="30%">Image Mobile</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1;if($categories) foreach($categories as $list){?>
                    <tr id="<?php echo $list['id'] ?>">
                        <td><?php echo $no;?></td>
                        <td>
                        
                            <a class="fa fa-edit" title="Edit" href="<?php echo site_url('tjadmin/about_us_category/edit').'/'.$list['id'];?>"></a> 
                        </td>
                        <td><?php echo ucwords(strtolower($list['name']));?></td>
                        <td><img src="<?php echo base_url()."userdata/about_us/".$list['image'];?>" width="200"></td>
                        <td><img src="<?php echo base_url()."userdata/about_us/".$list['image_mobile'];?>" width="200"></td>
                    </tr>
                    <?php $no++;}?>
                </tbody>
                <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>