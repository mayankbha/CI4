<section class="page-section color get_into">
    <div class="container2">
        <div class="row margin-top-0">
            <div class="col-sm-8 col-sm-offset-2">
                
				        <?php
                    echo form_open(base_url() . 'home/registration/add_info/', array(
                        'class' => 'form-login',
                        'method' => 'post',
                        'id' => 'sign_form'
                    ));
                    $fb_login_set = $this->crud_model->get_type_name_by_id('general_settings','51','value');
                    $g_login_set = $this->crud_model->get_type_name_by_id('general_settings','52','value');
                ?>
                <div class="row box_shape">
                  <div class="title">
                      <?php echo translate('customer_registration');?>
                        <div class="option">
                      	<?php echo translate('already_a_member_?_click_to_');?>
                        <?php
			                     if ($this->crud_model->get_type_name_by_id('general_settings','58','value') !== 'ok') { ?>
                              <a href="<?php echo base_url(); ?>home/login_set/login">
                                  <?php echo translate('login');?>!
                              </a>
                        <?php
									         }
                           else { ?>
                                <a href="<?php echo base_url(); ?>home/login_set/login">
                                    <?php echo translate('login');?>! <?php echo translate('as_customer');?>
                                </a>
                              <?php echo translate('_or_');?>
                                <a href="<?php echo base_url(); ?>home/vendor_logup/registration">
                                    <?php echo translate('sign_up');?>! <?php echo translate('as_vendor');?>
                                </a>
                              <?php
          									}
          								?>
                        </div>
                      </div>
                      <hr>
                      <div class="col-md-6">
                          <div class="form-group">
                              <input class="form-control required" name="username" type="text" placeholder="<?php echo translate('first_name');?>" data-toggle="tooltip" title="<?php echo translate('first_name');?>">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <input class="form-control required" name="surname" type="text" placeholder="<?php echo translate('last_name');?>" data-toggle="tooltip" title="<?php echo translate('last_name');?>">
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <input class="form-control emails required" name="email" type="email" placeholder="<?php echo translate('email');?>" data-toggle="tooltip" title="<?php echo translate('email');?>">
                          </div>
                          <div id='email_note'></div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-group">
                              <input class="form-control pass1 required" type="password" name="password1" placeholder="<?php echo translate('password');?>" data-toggle="tooltip" title="<?php echo translate('password');?> must have at least one capital letter, a number, and one of !, @, $ and of 6-25 characters">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <input class="form-control pass2 required" type="password" name="password2" placeholder="<?php echo translate('confirm_password');?>" data-toggle="tooltip" title="<?php echo translate('confirm_password');?>">
                          </div>
                          <div id='pass_note'></div>
                      </div>
                      
                      <div class="col-md-12 terms">
                          <input  name="terms_check" type="checkbox" value="ok" >
                          By creating an account, you agree to Eye Niversum's 
                          <a href="<?php echo base_url();?>home/legal/terms" target="_blank">
                              <?php echo translate('terms_&_conditions');?>
                          </a>
                          and 
                            <a href="<?php echo base_url(); ?>home/legal/privacy" target="_blank"><?php echo translate('privacy_policy');?>
                          </a>
                      </div>

                      <div class="col-md-12 terms">
                          <input  name="email_check" type="checkbox" value="ok" >
                          Yes! I want to get the most out of Eye Niversum's by receiving emails with exclusive deals, personal recommendations and learning tips!
                      </div>
                      
                        <div class="col-md-12">
                            <span class="btn btn-theme-sm btn-block btn-theme-dark pull-right logup_btn" data-ing='<?php echo translate('registering..'); ?>' data-msg="">
                                <?php echo translate('register');?>
                            </span>
                        </div>

                    </div>
            	</form>
            </div>
        </div>
    </div>
</section>
<style>
	.get_into .terms a{
		margin:5px auto;
		font-size: 14px;
		line-height: 24px;
		font-weight: 400;
		color: #00a075;
		cursor:pointer;
		text-decoration:underline;
	}

	.get_into .terms input[type=checkbox] {
		margin:0px;
		width:15px;
		height:15px;
		vertical-align:middle;
	}
</style>
