

<div class="contentArea">
    <div class="contentBox">
        <h1>News &raquo; List</h1>
        <a class="defBtn" href="<?php echo site_url('tjadmin/news/add');?>"><span>Add New News</span></a>
        
        <div class="contentTable">
            <table class="tablesorter" id="homebanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Action</th>
                        <th width="10%">Media</th>
                        <th width="10%">Title</th>
                        <th width="15%">Link</th>
                        <th width="15%">Active</th>
                        <th width="15%">Precedence</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;$count=count($news);foreach($news as $list){?>
                        <tr id="<?php echo $list['id'] ?>">
                            <td><?php echo $no;?></td>
                            <td>
                            
                            <a class="fa fa-edit" title="Edit" href="<?php echo site_url('tjadmin/news/edit').'/'.$list['id'];?>"></a>  |
                            <a class="fa fa-trash" title="Delete" href="<?php echo site_url('tjadmin/news/do_delete').'/'.$list['id'];?>" onclick="return confirm('Delete?');"></a>
                            </td>
                            <td><?php echo $list['media'] ?></td>
                            <td><?php echo $list['title'] ?></td>
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
                        <a <?php echo $class?> href="<?php echo site_url('tjadmin/news/active').'/'.$list['id'].'/'.$list['active']; ?>" title="<?php echo $title?>"></a>
                          
                          </td>
                          <td>
                          
                        <?php if ($list['precedence'] != first_precedence('news_tb')){?>
                            <a title="Down" class="fa fa-chevron-down" href="<?php echo site_url('tjadmin/news/down/'.$list['id']);?>"></a> 
                        <?php }
                            if($list['precedence']!=first_precedence('news_tb') and  $list['precedence'] != last_precedence('news_tb')) echo "  ";
                            if ($list['precedence'] != last_precedence('news_tb')){?>
                            <a title="Up" class="fa fa-chevron-up" href="<?php echo site_url('tjadmin/news/up/'.$list['id']);?>"></a>
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