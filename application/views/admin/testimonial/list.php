

<div class="contentArea">
    <div class="contentBox">
        <h1>Testimonial &raquo; List</h1>
        <a class="defBtn" href="<?php echo site_url('tjadmin/testimonial/add');?>"><span>Add New Testimonial</span></a>
        
        <div class="contentTable">
            <table class="tablesorter" id="homebanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="5%">Action</th>
                        <th width="10%">Name</th>
                        <th width="15%">Image</th>
                        <th width="15%">Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no=1;$count=count($detail);foreach($detail as $list){?>
                        <tr id="<?php echo $list['id'] ?>">
                            <td><?php echo $no;?></td>
                            <td>
                            
                            <a class="fa fa-edit" title="Edit" href="<?php echo site_url('tjadmin/testimonial/edit').'/'.$list['id'];?>"></a>  |
                            <a class="fa fa-trash" title="Delete" href="<?php echo site_url('tjadmin/testimonial/do_delete').'/'.$list['id'].'/'.$list['image'];?>" onclick="return confirm('Delete?');"></a>
                            </td>
                            <td><?php echo $list['name'] ?></td>
                            <td><img src="<?php echo base_url()."userdata/testimonial/".$list['image'];?>" width="200"></td>


                            <td>
                             <?php  
                            if($list['status']==1){
                                $class='class="fa fa-check-circle" style="color:green;"';
                                $title='Active';
                            }
                            else{
                                $class='class="fa fa-times-circle" style="color:red;"';
                                $title='Inactive';
                            }
                            ?>
                            <a <?php echo $class?> href="<?php echo site_url('tjadmin/testimonial/status').'/'.$list['id'].'/'.$list['status']; ?>" title="<?php echo $title?>"></a>
                              
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