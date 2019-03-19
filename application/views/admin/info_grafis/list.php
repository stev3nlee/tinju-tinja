<div class="contentArea">
    <div class="contentBox">
        <h1>Info Grafis&raquo; Content List</h1>
        <a class="defBtn" href="<?php echo site_url('tjadmin/info_grafis/add');?>"><span>Add Content</span></a>

        <div class="contentTable">
            <table class="tablesorter" id="content_table" width="100%">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="15%">Action</th>
                    <th width="30%">Images ID</th>
                    <th width="30%">Images En</th>
                    <th width="10%">Status</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1;if($info_grafis) foreach($info_grafis as $list){?>
                    <tr id="<?php echo $list['id'] ?>">
                        <td><?php echo $no;?></td>
                        <td>
                            
                            <a class="fa fa-edit" title="Edit" href="<?php echo site_url('tjadmin/info_grafis/edit').'/'.$list['id'];?>"></a>  |
                            <a class="fa fa-trash" title="Delete" href="<?php echo site_url('tjadmin/info_grafis/do_delete').'/'.$list['id'];?>" onclick="return confirm('Delete?');"></a>
                        </td>
                        <td><img src="<?php echo base_url("userdata/info_grafis/".$list['image']);?>" width="100" ></td>
                        <td><img src="<?php echo base_url("userdata/info_grafis/".$list['image_en']);?>" width="100" ></td>
                        <td>
                        
                            <?php 
						if($list['status']==1){
							$class='class="fa fa-check-circle" style="color:green;"';
							$title='Active';
							$link=site_url('tjadmin/info_grafis/inactive/'.$list['id']);
						}
						else{
							$class='class="fa fa-times-circle" style="color:red;"';
							$title='Inactive';
							$link=site_url('tjadmin/info_grafis/active/'.$list['id']);
						}
						?>
						<a <?php echo $class?> href="<?php echo $link?>" title="<?php echo $title?>"></a>
                          
                        </td>

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