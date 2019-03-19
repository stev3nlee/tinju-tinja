<div class="contentArea">
    <div class="contentBox">
        <h1>About Us &raquo; Content List</h1>
        <!--a class="defBtn" href="<?php echo site_url('tjadmin/about_us/add');?>"><span>Add Content</span></a-->

        <div class="contentTable">
            <table class="tablesorter" id="content_table" width="100%">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="15%">Action</th>
                    <th width="10%">Category</th>
                    <th width="30%">Title</th>
                    <th width="30%">Title English</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1;if($about_us) foreach($about_us as $list){?>
                    <tr id="<?php echo $list['id'] ?>">
                        <td><?php echo $no;?></td>
                        <td>
                            <a class="fa fa-edit" title="Edit" href="<?php echo site_url('tjadmin/about_us/edit/'.$list['id']);?>"></a>
                        </td>
                        <td><?php echo $list['name']?></td>
                        <td><?php echo $list['title'] ?></td>
                        <td><?php echo $list['title_en'] ?></td>
                        
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