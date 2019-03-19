<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi; width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
<meta name="HandheldFriendly" content="true" />
<title>Tinju Tinja Admin Panel</title>
<link href="<?php echo base_url();?>favicon.png" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>templates/css/isyscms2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>templates/css/fontAttachAdmin/stylesheet_cms.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>templates/css/selectordie.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>templates/css/redactor.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>templates/css/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


<script languange="javascript">var base_url='<?php echo base_url();?>';</script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery-ui.js"></script>
<?php /*?><script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery.tablednd.0.7.min.js"></script>
<?php */?><script type="text/javascript" src="<?php echo base_url();?>templates/js/admin.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/selectordie.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/redactor.js"></script>
<?php /*?><script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery.tablesorter.min.js"></script>
<?php */?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script>
$(document).ready(function(){
	//var buttons = ['html','|','bold', 'italic','underline','|'];
	$('.text_editor').redactor({
		imageUpload: '<?php echo site_url('tjadmin/home/add_image');?>',
		linebreaks: true ,
		buttonSource: true,
		replaceDivs: false,
		buttonsHide: ['image'],
		//buttons: buttons

	});
});
</script>
</head>
<body>
    <?php if($this->uri->segment(2)=="login") echo '<div class="con">'?>
        <?php $this->load->view('common/admin/header');?>
        <?php if($this->uri->segment(2)!="login"){?>
            <section>
                <?php $this->load->view('common/admin/nav');?>
                <?php $this->load->view($content);?>
                <script type="text/javascript">window.onload = date_time('date_time')</script>
            </section>
		<?php }else{?>
       		<?php $this->load->view($content);?>
        <?php }?>
		<?php //$this->load->view('common/admin/footer');?>
    <?php if($this->uri->segment(2)=="login") echo '</div>'?>
    

</body>
</html>