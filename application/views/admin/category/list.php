

<div class="contentArea">
    <div class="contentBox">
        <h1>Home Banner Category &raquo; List</h1>
        <!--a class="defBtn" href="<?php echo site_url('tjadmin/category/add');?>"><span>Add New Category</span></a-->
        
        <div class="contentTable">
            <table class="tablesorter" id="homebanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Action</th>
                        <th width="10%">Name ID</th>
                        <th width="10%">Name En</th>
                        <th width="15%">Active</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;$count=count($category);foreach($category as $list){?>
                        <tr id="<?php echo $list['id'] ?>">
                            <td><?php echo $no;?></td>
                            <td>
                            
                            <a class="fa fa-edit" title="Edit" href="<?php echo site_url('tjadmin/category/edit').'/'.$list['id'];?>"></a>  |
                            <a class="fa fa-trash" title="Delete" href="<?php echo site_url('tjadmin/category/do_delete').'/'.$list['id'];?>" onclick="return confirm('Delete?');"></a>
                            </td>
                            <td><?php echo $list['name_id'] ?></td>
                            <td><?php echo $list['name_en'] ?></td>
                            <td>
                             <?php 
                        if($list['active']==1){
                            $class='class="fa fa-check-circle" style="color:green;"';
                            $title='Active';
                        }
                        else{
                            $class='class="fa fa-times-circle" style="color:red;"';
                            $title='Inactive';
                        }
                        ?>
                        <a <?php echo $class?> href="<?php echo site_url('tjadmin/category/active').'/'.$list['id'].'/'.$list['active']; ?>" title="<?php echo $title?>"></a>
                          
                          
                          
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