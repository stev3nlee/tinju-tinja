

<div class="contentArea">
    <div class="contentBox">
    	<h1>Middle Banner &raquo; List</h1>
		
        <div class="contentTable">
            <table class="tablesorter" id="midbanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Action</th>
                        <th width="15%">Name</th>
                        <th width="15%">Image</th>
                        <th width="15%">Link</th>
                        <th width="15%">Precedence</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;$count=count($midbanner);
					foreach($midbanner as $list){?>
                        <tr id="<?php echo $list['id'] ?>">
                            <td><?php echo $no;?></td>
                            <td>
                            
                            <a class="fa fa-edit" title="Edit" href="<?php echo site_url('lwsecurityadmin/midbanner/edit').'/'.$list['id'];?>"></a>
                            </td>
                            <td><?php echo $list['name']?></td>
                            <td><img src="<?php echo base_url()."userdata/midBanner/".$list['image'];?>" width="200px" height="80px"></td>
                            <td><?php echo ($list['link']);?></td>
                          <td>
                          
                        <?php if ($list['precedence'] != first_precedence('midbanner_tb')){?>
                            <a title="Down" class="fa fa-chevron-down" href="<?php echo site_url('lwsecurityadmin/midbanner/down/'.$list['id']);?>"></a> 
                        <?php }
                            if($list['precedence']!=first_precedence('midbanner_tb') and  $list['precedence'] != last_precedence('midbanner_tb')) echo "  ";
                            if ($list['precedence'] != last_precedence('midbanner_tb')){?>
                            <a title="Up" class="fa fa-chevron-up" href="<?php echo site_url('lwsecurityadmin/midbanner/up/'.$list['id']);?>"></a>
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