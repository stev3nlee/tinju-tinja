

<div class="contentArea">
    <div class="contentBox">
    	<h1>Home Banner &raquo; List</h1>
        <a class="defBtn" href="<?php echo site_url('tjadmin/homebanner/add');?>"><span>Add New Banner</span></a>
		
        <div class="contentTable">
            Category
            <select name="categories" onchange="if (this.value) window.location.href=this.value">
                <option value="all">-- Make your selection --</option>
            <?php if($dropdown)foreach($dropdown as $list){?><option  value="<?php echo site_url("/tjadmin/homebanner/by_category/". $list['id'])?>"<?php if($list['id']==$this->uri->segment(4))echo "selected=\"selected\"";?> ><?php echo $list['name_id']?></option><?php } ?>
            </select>
            <table class="tablesorter" id="homebanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Action</th>
                        <th width="15%">Image</th>
                        <th width="15%">Category</th>
                        <th width="15%">Link</th>
                        <th width="15%">Active</th>
                        <th width="15%">Precedence</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;$count=count($homebanner);foreach($homebanner as $list){?>
                        <tr id="<?php echo $list['id'] ?>">
                            <td><?php echo $no;?></td>
                            <td>
                            
                            <a class="fa fa-edit" title="Edit" href="<?php echo site_url('tjadmin/homebanner/edit').'/'.$list['id'];?>"></a>  |
                            <a class="fa fa-trash" title="Delete" href="<?php echo site_url('tjadmin/homebanner/do_delete').'/'.$list['id'];?>" onclick="return confirm('Delete?');"></a>
                            </td>
                            <td><img src="<?php echo base_url()."userdata/homeBanner/".$list['image'];?>" width="200px"></td>
                            <td><?php echo ($list['name_id']);?></td>
                            <td><?php echo ($list['link']);?></td>
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
						<a <?php echo $class?> href="<?php echo site_url('tjadmin/homebanner/active').'/'.$list['id'].'/'.$list['active']; ?>" title="<?php echo $title?>"></a>
                          
                          </td>
                          <td>

<!--                         <?php if ($list['precedence'] != first_precedence('homebanner_tb')){?>
                            <a title="Down" class="fa fa-chevron-down" href="<?php echo site_url('tjadmin/homebanner/down/'.$list['id']);?>"></a> 
                        <?php }
                            if($list['precedence']!=first_precedence('homebanner_tb') and  $list['precedence'] != last_precedence('homebanner_tb')) echo "  ";
                            if ($list['precedence'] != last_precedence('homebanner_tb')){?>
                            <a title="Up" class="fa fa-chevron-up" href="<?php echo site_url('tjadmin/homebanner/up/'.$list['id']);?>"></a>
                        <?php }?> -->

                        <?php if ($list['precedence'] != first_precedence_2('homebanner_tb','category_id',$list['category_id'])){?>
                            <a title="Down" class="fa fa-chevron-down" href="<?php echo site_url('tjadmin/homebanner/down/'.$list['id'].'/'.$list['category_id']);?>"></a> 
                        <?php }
                            if($list['precedence']!=first_precedence_2('homebanner_tb','category_id',$list['category_id']) and  $list['precedence'] != last_precedence_2('homebanner_tb','category_id',$list['category_id'])) echo "  ";
                            if ($list['precedence'] != last_precedence_2('homebanner_tb','category_id',$list['category_id'])){?>
                            <a title="Up" class="fa fa-chevron-up" href="<?php echo site_url('tjadmin/homebanner/up/'.$list['id'].'/'.$list['category_id']);?>"></a>
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