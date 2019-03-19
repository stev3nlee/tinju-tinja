

<div class="contentArea">
    <div class="contentBox">
    	<h1>Video &raquo; List</h1>
        <a class="defBtn" href="<?php echo site_url('tjadmin/video/add');?>"><span>Add New Video</span></a>
		
        <div class="contentTable">
            <table class="tablesorter" id="homebanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="20%">Action</th>
                        <th width="20%">Image</th>
                        <th width="50%">Youtube Link</th>
                        <th width="10%">Status</th>
                        <th width="15%">Precedence</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no=1;$count=count($detail);foreach($detail as $list){?>
                        <tr id="<?php echo $list['id'] ?>">
                            <td><?php echo $no;?></td>
                            <td>
                            
                            <a class="fa fa-edit" title="Edit" href="<?php echo site_url('tjadmin/video/edit').'/'.$list['id'];?>"></a>  |
                            <a class="fa fa-trash" title="Delete" href="<?php echo site_url('tjadmin/video/do_delete').'/'.$list['id'].'/'.$list['image'];?>" onclick="return confirm('Delete?');"></a>
                            </td>

                            <td><img src="<?php echo base_url()."userdata/video/".$list['image'];?>" width="200"></td>
                            <td><?php echo $list['youtube_link'] ?></td>

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
                            <a <?php echo $class?> href="<?php echo site_url('tjadmin/video/status').'/'.$list['id'].'/'.$list['status']; ?>" title="<?php echo $title?>"></a>
                              
                            </td>

                            <td>
                            <?php if ($list['precedence'] == first_precedence('video_tb')){?>
                                <a title="Down" class="fa fa-chevron-down" href="<?php echo site_url('tjadmin/video/down/'.$list['id']);?>"></a> 
                            <?php } ?>

                            <?php if($list['precedence']!=first_precedence('video_tb') and  $list['precedence'] != last_precedence('video_tb')){ ?>

                                <a title="Up" class="fa fa-chevron-up" href="<?php echo site_url('tjadmin/video/up/'.$list['id']);?>"></a>
                                <a title="Down" class="fa fa-chevron-down" href="<?php echo site_url('tjadmin/video/down/'.$list['id']);?>"></a>
                            <?php } ?>

                            <?php if ($list['precedence'] == last_precedence('video_tb')){?>
                                <a title="Up" class="fa fa-chevron-up" href="<?php echo site_url('tjadmin/video/up/'.$list['id']);?>"></a>
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