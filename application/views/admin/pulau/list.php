

<div class="contentArea">
    <div class="contentBox">
    	<h1>Pulau &raquo; List</h1>
        <a class="defBtn" href="<?php echo site_url('tjadmin/pulau/add');?>"><span>Add New Pulau</span></a>
		
        <div class="contentTable">
            <table class="tablesorter" id="homebanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="5%">Action</th>
                        <th width="10%">Name</th>
                        <th width="15%">Image ID</th>
                        <th width="15%">Image EN</th>
                        <th width="5%">Status</th>
                        <th width="5%">Precedence</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no=1;$count=count($detail);foreach($detail as $list){?>
                        <tr id="<?php echo $list['id'] ?>">
                            <td><?php echo $no;?></td>
                            <td>
                            
                            <a class="fa fa-edit" title="Edit" href="<?php echo site_url('tjadmin/pulau/edit').'/'.$list['id'];?>"></a>  |
                            <a class="fa fa-trash" title="Delete" href="<?php echo site_url('tjadmin/pulau/do_delete').'/'.$list['id'];?>" onclick="return confirm('Delete?');"></a>
                            </td>
                            <td><?php echo $list['name'] ?></td>
                            <td><img src="<?php echo base_url()."userdata/pulau/".$list['image'];?>" width="200px"></td>
                            <td><img src="<?php echo base_url()."userdata/pulau/".$list['image_en'];?>" width="200px"></td>


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
                            <a <?php echo $class?> href="<?php echo site_url('tjadmin/pulau/status').'/'.$list['id'].'/'.$list['status']; ?>" title="<?php echo $title?>"></a>
                              
                          </td>

                            <td>
                            <?php if ($list['precedence'] == first_precedence('pulau_tb')){?>
                                <a title="Down" class="fa fa-chevron-down" href="<?php echo site_url('tjadmin/pulau/down/'.$list['id']);?>"></a> 
                            <?php } ?>

                            <?php if($list['precedence']!=first_precedence('pulau_tb') and  $list['precedence'] != last_precedence('pulau_tb')){ ?>

                                <a title="Up" class="fa fa-chevron-up" href="<?php echo site_url('tjadmin/pulau/up/'.$list['id']);?>"></a>
                                <a title="Down" class="fa fa-chevron-down" href="<?php echo site_url('tjadmin/pulau/down/'.$list['id']);?>"></a>
                            <?php } ?>

                            <?php if ($list['precedence'] == last_precedence('pulau_tb')){?>
                                <a title="Up" class="fa fa-chevron-up" href="<?php echo site_url('tjadmin/pulau/up/'.$list['id']);?>"></a>
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
                        <td></td>
                    </tr>
                </tfoot>
            </table>
         </div>
      </div>
</div>