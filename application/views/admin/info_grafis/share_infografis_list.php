

<div class="contentArea">
    <div class="contentBox">
    	<h1>Most Share Infografis &raquo; List</h1>
		
        <div class="contentTable">
            <table class="tablesorter" id="homebanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="15%">Image</th>
                        <th width="15%">Total Share</th>
                        <th width="15%">Total Download</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no=1;$count=count($infografis);foreach($infografis as $list){?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><img src ="<?php echo base_url() ?>/userdata/info_grafis/<?php echo $list['image'] ?>" width="100"></td> 
                          
                            <td><?php echo $list['count'] ?></td> 
                            <td><?php echo $list['download_count'] ?></td> 
                                                        
                           
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