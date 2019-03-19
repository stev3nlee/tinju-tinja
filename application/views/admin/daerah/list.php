

<div class="contentArea">
    <div class="contentBox">
    	<h1>Daerah &raquo; List</h1>
        <a class="defBtn" href="<?php echo site_url('tjadmin/daerah/add');?>"><span>Add New Daerah</span></a>
		
        <div class="contentTable">
            <table class="tablesorter" id="homebanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="5%">Action</th>
                        <th width="10%">Name</th>
                        <th width="15%">Image</th>
                        <th width="5%">Status</th>
                        <th width="5%">Featured</th>
                        <th width="5%">Precedence</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no=1;$count=count($detail);foreach($detail as $list){?>
                        <tr id="<?php echo $list['id'] ?>">
                            <td><?php echo $no;?></td>
                            <td>
                            
                            <a class="fa fa-edit" title="Edit" href="<?php echo site_url('tjadmin/daerah/edit').'/'.$list['id'];?>"></a>  |
                            <a class="fa fa-trash" title="Delete" href="<?php echo site_url('tjadmin/daerah/do_delete').'/'.$list['id'].'/'.$list['image'].'/'.$list['pdf'];?>" onclick="return confirm('Delete?');"></a>
                            </td>
                            <td><?php echo $list['name'] ?></td>
                            <td><img src="<?php echo base_url()."userdata/daerah/".$list['image'];?>" width="200px"></td>


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
                            <a <?php echo $class?> href="<?php echo site_url('tjadmin/daerah/status').'/'.$list['id'].'/'.$list['status']; ?>" title="<?php echo $title?>"></a>
                              
                          </td>
                          
                            <td>
                             <?php  
                            if($list['featured']==1){
                                $class='class="fa fa-check-circle" style="color:green;"';
                                $title='Yes';
                            }
                            else{
                                $class='class="fa fa-times-circle" style="color:red;"';
                                $title='No';
                            }
                            ?>
                            <a <?php echo $class?> href="<?php echo site_url('tjadmin/daerah/featured').'/'.$list['id'].'/'.$list['featured']; ?>" title="<?php echo $title?>"></a>
                              
                          </td>

                            <td>
                            <?php if ($list['precedence'] == first_precedence('daerah_tb')){?>
                                <a title="Down" class="fa fa-chevron-down" href="<?php echo site_url('tjadmin/daerah/down/'.$list['id']);?>"></a> 
                            <?php } ?>

                            <?php if($list['precedence']!=first_precedence('daerah_tb') and  $list['precedence'] != last_precedence('daerah_tb')){ ?>

                                <a title="Up" class="fa fa-chevron-up" href="<?php echo site_url('tjadmin/daerah/up/'.$list['id']);?>"></a>
                                <a title="Down" class="fa fa-chevron-down" href="<?php echo site_url('tjadmin/daerah/down/'.$list['id']);?>"></a>
                            <?php } ?>

                            <?php if ($list['precedence'] == last_precedence('daerah_tb')){?>
                                <a title="Up" class="fa fa-chevron-up" href="<?php echo site_url('tjadmin/daerah/up/'.$list['id']);?>"></a>
                            <?php }?>
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
                        <td></td>
                    </tr>
                </tfoot>
            </table>
         </div>
      </div>
</div>