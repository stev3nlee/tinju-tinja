<div class="contentArea">
    <div class="contentBox">
        <h1>Social Media &raquo; List</h1>

        <div class="contentTable">
            <table class="tablesorter" id="content_table" width="100%">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="20%">Action</th>
                    <th width="30%">Facebook</th>
                    <th width="30%">Twitter</th>
                    <th width="15%">Instagram</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1;?>
                    <tr >
                        <td><?php echo $no;?></td>
                        <td><a class="fa fa-edit" title="Edit" href="<?php echo site_url('tjadmin/admin/edit');?>"></a> </td>
                        <td><?php echo $social['facebook'] ?></td>
                        <td><?php echo $social['twitter'] ?></td>
                        <td><?php echo $social['instagram'] ?></td>
                    </tr>
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