<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="300">
	<title><?php echo translate('login');?> | <?php echo $this->db->get_where('general_settings',array('type' => 'system_name'))->row()->value;?></title>

	<!--STYLESHEET-->
	<!--Roboto Font [ OPTIONAL ]-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300,500" rel="stylesheet" type="text/css">
	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/bootstrap.min.css" rel="stylesheet">
	<!--jsinit Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/jsinit.min.css" rel="stylesheet">	
	<!--Font Awesome [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!--Demo [ DEMONSTRATION ]-->
	<link href="<?php echo base_url(); ?>template/back/css/demo/jsinit-demo.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>template/back/js/jquery-2.1.1.min.js"></script>

	<!--SCRIPT-->
	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.js"></script>
	<?php $ext =  $this->db->get_where('ui_settings',array('type' => 'fav_ext'))->row()->value; $this->benchmark->mark_time();?>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/others/favicon.<?php echo $ext; ?>">
</head>

<body>
	<div id="container" class="cls-container" 
    style="background:#93b2ea;">
		<!-- BACKGROUND IMAGE -->
		<div id="bg-overlay"></div>
		<!-- LOGIN FORM -->
		<div class="cls-content">
			<div class="cls-content-sm panel panel-colorful panel-login" style="margin-top: 50px !important;">
				<div class="panel-body" style="background: white; color: black;">
                	<h3>Admin Login</h3>
                    
					<?php
						echo form_open(base_url() . ''.$control.'/login/', array(
							'method' => 'post',
							'id' => 'login'
						));
					?>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user" style="color:black !important"></i></div>
								<input type="text" name="email" class="form-control email" placeholder="<?php echo translate('email'); ?>">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-key" style="color:black !important"></i></div>
								<input type="password" name="password" class="form-control pass" placeholder="<?php echo translate('password'); ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6 text-left">
                            	<div class="pad-ver">
                                    <a href="#" onclick="ajax_modal('forget_form','<?php echo translate('forget_password'); ?>','<?php echo translate('email_sent_with_new_password!'); ?>','forget','')" class="btn-link mar-rgt" style="color:black !important;"><?php echo translate('forgot_password');?> ?</a>
                                </div>
							</div>
							<div class="col-xs-6">
								<div class="form-group text-right main_login">
									<span class="btn btn-login btn-labeled fa fa-unlock-alt snbtn" onclick="form_submit('login')" style="background: #93b2ea;color: white;">
                                    	<?php echo translate('sign_in');?>
                                    </span>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
        <?php //$control = $this->uri->segment(1);?>
        
	</div>
	<!--jQuery [ REQUIRED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/jquery-2.1.1.min.js"></script>
    
	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/bootstrap.min.js"></script>
    
	<!--jsinit Admin [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/jsinit.min.js"></script>

	<!--Background Image [ DEMONSTRATION ]-->
	<script src="<?php echo base_url(); ?>template/back/js/demo/bg-images.js"></script>
    
	<!--Bootbox Modals [ OPTIONAL ]-->
	<script src="<?php echo base_url(); ?>template/back/plugins/bootbox/bootbox.min.js"></script>

	<!--Demo script [ DEMONSTRATION ]-->
	<script src="<?php echo base_url(); ?>template/back/js/ajax_login.js"></script>
	
	<script>
        var base_url = "<?php echo base_url(); ?>";
        var cancdd = "<?php echo translate('cancelled'); ?>";
        var req = "<?php echo translate('this_field_is_required'); ?>";
		var sing = "<?php echo translate('signing_in...'); ?>";
		var nps = "<?php echo translate('new_password_sent_to_your_email'); ?>";
		var lfil = "<?php echo translate('login_failed!'); ?>";
		var wrem = "<?php echo translate('wrong_e-mail_address!_try_again'); ?>";
		var lss = "<?php echo translate('login_successful!'); ?>";
		var sucss = "<?php echo translate('SUCCESS!'); ?>";
		var rpss = "<?php echo translate('reset_password'); ?>";
        var user_type = "<?php echo $control; ?>";
        var module = "login";
		var unapproved = "<?php echo translate('account_not_approved._wait_for_approval.'); ?>";
		
		window.addEventListener("keydown", checkKeyPressed, false);
		function checkKeyPressed(e) {
		    if (e.keyCode == "13") {
				$('body').find(':focus').closest('form').find('.snbtn').click();
				if($('body').find('.modal-content').find(':focus').closest('form').closest('.modal-content').length > 0){
					$('body').find('.modal-content').find(':focus').closest('form').closest('.modal-content').find('.snbtn_modal').click();
				}
		    }
		}
    </script>
    <!--jsinit Admin [ RECOMMENDED ]-->
    <script src="<?php echo base_url(); ?>template/back/js/jsinit.min.js"></script>
</body>
</html>
