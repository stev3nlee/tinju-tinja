

<div class="contentArea">
    <div class="contentBox">
    	<h1>User Pledge &raquo; List</h1>
		
        <div class="contentTable">
            <table class="tablesorter" id="homebanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="80%">Name</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no=1;$count=count($user);foreach($user as $list){?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $list['name'] ?></td>
                        </tr>
                    <?php $no++;}?>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
         </div>
      </div>
</div>