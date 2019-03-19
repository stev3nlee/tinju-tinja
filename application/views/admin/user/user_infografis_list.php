

<div class="contentArea">
    <div class="contentBox">
    	<h1>User Infografis &raquo; List</h1>
		
        <div class="contentTable">
            <table class="tablesorter" id="homebanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="40%">User Name</th>
                        <th width="15%">Link</th>
                        <th width="15%">Pulau</th>
                        <th width="15%">Created Date</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no=1;$count=count($user);foreach($user as $list){?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $list['user_name'] ?></td>
                            <td><a href="<?php echo site_url('infografis/pulau/'.$list['pulau_name'].'/'.$list['uid'])?>" target="_blank">View</a></td> 
                            <td><?php echo $list['pulau_name'] ?></td>
                            <td><?php echo $list['created_date'] ?></td>
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