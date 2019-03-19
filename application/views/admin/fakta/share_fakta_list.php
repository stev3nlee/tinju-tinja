

<div class="contentArea">
    <div class="contentBox">
    	<h1>Most Share Fact &raquo; List</h1>
		
        <div class="contentTable">
            <table class="tablesorter" id="homebanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="15%">Image</th>
                        <th width="15%">Description</th>
                        <th width="15%">Total Share</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no=1;$count=count($fakta);foreach($fakta as $list){?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><img src ="<?php echo base_url() ?>/userdata/fakta/<?php echo $list['image'] ?>" width="200"></td> 
                            <td><?php echo $list['description_id'] ?></td>
                            <td><?php echo $list['count'] ?></td> 
                                                        
                           
                        </tr>
                    <?php $no++;}?>
                </tbody>
                <tfoot>
                    <tr>
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