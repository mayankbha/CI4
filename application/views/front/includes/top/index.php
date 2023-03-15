
<meta charset="UTF-8">
<meta name="description" content="<?php echo $description;?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="author" content="<?php echo $author; ?>">
<meta name="revisit-after" content="<?php echo $revisit_after; ?> days">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
include 'meta/'.$asset_page.'.php';
?>
<!-- Favicon -->
<?php $ext =  $this->db->get_where('ui_settings',array('type' => 'fav_ext'))->row()->value;?>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>template/front/ico/apple-touch-icon-144-precomposed.png">

<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/others/favicon.<?php echo $ext; ?>">

<title><?php echo $page_title; ?></title>

<!-- CSS Global -->
<link href="<?php echo base_url(); ?>template/front/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/plugins/animate/animate.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/modal/css/sm.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/rateit/rateit.css" rel="stylesheet">


<!-- Theme CSS -->
<?php $theme =  $this->db->get_where('ui_settings',array('type' => 'header_color'))->row()->value;?>
<link href="<?php echo base_url(); ?>template/front/css/theme.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/css/theme-<?php echo $theme; ?>.css" rel="stylesheet" id="theme-config-link">

<!-- Custom CSS -->

<link href="<?php echo base_url();?>template/front/custom/buttons/custom-1.css" rel="stylesheet">
<link href="<?php echo base_url();?>template/front/custom/buttons/bootstrap-social.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>template/front/plugins/smedia/custom-1.css" rel="stylesheet">

<!-- Head Libs -->
<script src="<?php echo base_url(); ?>template/front/plugins/jquery/jquery-1.11.1.min.js"></script>
<?php
$font =  $this->db->get_where('ui_settings',array('type' => 'font'))->row()->value;
?>
<link href='https://fonts.googleapis.com/css?family=<?php echo $font; ?>:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<style>
    *{
        font-family: '<?php echo str_replace('+',' ',$font); ?>', sans-serif;
    }
    .remove_one{
        cursor:pointer;
        padding-left:5px;
    }
</style>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6240b33a660a600012a3a19a&product=inline-share-buttons" async="async"></script>
<?php
include $asset_page.'.php';
?>
		