

<div class="contentArea">
    <div class="contentBox">
    	<h1>Contribution &raquo; List</h1>
		
        <div class="contentTable">
            <table class="tablesorter" id="homebanner_table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="5%">Action</th>
                        <th width="10%">User Name</th>
                        <th width="5%">Image</th>
                        <th width="5%">Link</th>
                        <th width="5%">Daerah</th>
                        <th width="5%">Created Date</th>
                        <th width="5%">Like Count</th>
                        <th width="5%">Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $total_featured=0;
					foreach($user as $list)if($list['featured']==1)$total_featured++;
					$no=1;$count=count($user);foreach($user as $list){?>
                        <tr id="<?php echo $list['id'] ?>">
                            <td><?php echo $no;?></td>
                            <td>
                            <?php if($list['featured']==0){
								if($total_featured<3){?>
                            <a href="<?php echo site_url('tjadmin/user/do_featured/'.$list['id'].'/'.$list['featured'])?>">Mark as Featured</a>
                            <?php }}else{?>
                            <a href="<?php echo site_url('tjadmin/user/do_featured/'.$list['id'].'/'.$list['featured'])?>">Cancel Featured</a>
                            <?php }?>
                            </td>
                            <td><?php echo $list['user_name'] ?>  | 
                            <a href="<?php echo site_url('lihat/galeri-kontribusi/'.$list['id'])?>" target="_blank">View Gallery</a></td>
                            <td><?php if($list['image']!=''){?><img src="<?php echo base_url()."userdata/contribution/".$list['image'];?>" width="200px"> 
                            <?php $from_resize='userdata/contribution/'.$list['image'];
							$to_resize='userdata/resize/'.$list['image'];
							//echo file_exists($to_resize);
							
							if(file_exists($to_resize)){
								echo "<span style='color:green'>resized</span>";
							}
							else{
								
							}
							
							
							if(!file_exists($to_resize)){
								$param_ori=getimagesize($from_resize);
								//$param_to=getimagesize($to_resize);
								//pre($param_ori);
								//pre($param_to);
								if($param_ori[0]>620){echo "<span style='color:red'>not resized</span> - ";
								?>
								<a href="<?php echo site_url('tjadmin/user/resize/'.$list['image']) ?>">resize image</a><?php 
								}
								else echo "image width already under 620px";
								}
							}?>
                           </td>
                            <td><?php echo $list['link'] ?></td>
                            <td><?php echo ($list['daerah_name']=='')?"Semua":$list['daerah_name'] ?></td>
                            <td><?php echo date("d F Y, H:i",strtotime($list['created_date'])) ?></td>
                            
                            <td><?php echo $list['like_count'] ?></td> 
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
                            <a <?php echo $class?> href="<?php echo site_url('tjadmin/user/status').'/'.$list['id'].'/'.$list['status']; ?>" title="<?php echo $title?>"></a>
                              
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
                        <td></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
         </div>
      </div>
</div>