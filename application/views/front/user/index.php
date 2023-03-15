<script src="https://checkout.stripe.com/checkout.js"></script>
<style>
    @media (min-width: 1200px){
        .cus_cont {
            width: 1290px;
        }
    }
</style>
<section class="page-section">
    <div class="wrap container">
        <!-- <div id="profile-content"> -->
            <div class="row profile">
                
                <div class="col-lg-12 col-md-12">

                    <a href="<?php echo base_url(); ?>" style="padding: 3px;"><span class=" btn btn-success" style="border-radius:4px;color: <?php echo $color_back;?>;"><i class="fa fa-long-arrow-left"></i> Home</a>
                    <br>
                    <?php
                    foreach($user_info as $row)
                    {
                    ?>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="recent-post" style="background: #fff;border: 1px solid #e0e0e0;">
                                    <div class="media">
                                        
                                        <div class="media-body" style="padding-right: 20px">
                                            
                                            <table class="table table-condensed" style="font-size: 14px; margin-bottom: 0px">
                                                
                                                <tr>
                                                    <td><b><?php echo translate('first_name');?></b></td>
                                                    <td align="left"><?php echo $row['username'];?></td>
                                                    <td><b><?php echo translate('last_name');?></b></td>
                                                    <td><?php echo $row['surname'];?></td>
                                                </tr>
                                                <tr>
                                                    <td><b><?php echo translate('email');?></b></td>
                                                    <td><?php echo $row['email'];?></td>
                                                    <td><b><?php echo translate('contact_no');?></b></td>
                                                    <td><?php echo $row['phone'];?></td>
                                                </tr>
                                                <tr>
                                                    <td><b><?php echo translate('address');?></b></td>
                                                    <td><?php echo $row['address1'];?> <?php echo $row['address2'];?></td>
                                                    <td><b><?php echo translate('country');?></b></td>
                                                    <td><?php echo $row['country'];?></td>
                                                </tr>
                                                <tr>
                                                    <td><b><?php echo translate('state');?></b></td>
                                                    <td><?php echo $row['state'];?></td>
                                                    <td><b><?php echo translate('city');?></b></td>
                                                    <td><?php echo $row['city'];?></td>
                                                </tr>
                                                <tr>
                                                    <td><b><?php echo translate('date_of_birth');?></b></td>
                                                    <td><?php 

                                                    $mydate = $row['dob'];
                                                        $newDate = date("d M Y", strtotime($mydate));
                                                        $new_date = date('dS F Y', strtotime($newDate));
                                                        if ($mydate) {
                                                          
                                                            echo $new_date;
                                                        }else{
                                                            echo "N/A";
                                                        }

                                                    ?></td>
                                                    
                                                </tr>
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="details-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tabs-wrapper content-tabs">
                                        
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="tab1">
                                                 <div class="details-wrap">
                                                    <div class="block-title alt"> 
                                                        <i class="fa fa-angle-down"></i> 
                                                        <?php echo translate('change_your_profile_information');?>
                                                    </div>
                                                    <div class="details-box">
                                                        <?php
                                                            echo form_open(base_url() . 'home/registration/update_info/', array(
                                                                'class' => 'form-login',
                                                                'method' => 'post',
                                                                'enctype' => 'multipart/form-data'
                                                            ));
                                                        ?>    
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" name="username" value="<?php echo $row['username']; ?>" type="text" placeholder="<?php echo translate('first_name');?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" name="surname" value="<?php echo $row['surname']; ?>" type="text" placeholder="<?php echo translate('last_name');?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" name="email" value="<?php echo $row['email']; ?>" type="email" placeholder="<?php echo translate('email');?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input id="email_check" name="email_check" class='sw4' data-set='email_check' type="checkbox"<?php if ($row['email_check'] == 1){ ?>checked<?php } ?> /><span style="color: red
                                                                    ;"><b>Newsletter: </b>I want to get the most out of Eye Niversum's by receiving emails with exclusive deals, personal recommendations and learning tips!</span>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <input class="form-control" name="address1" value="<?php echo $row['address1']; ?>" type="text" placeholder="<?php echo translate('address 1');?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control required" type="date" id="input-111" name="dob" value="<?php echo $row['dob']; ?>" placeholder="<?php echo translate('enter_date_of_birth_=');?>" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" name="phone" value="<?php echo $row['phone']; ?>" type="tel" placeholder="<?php echo translate('phone');?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="">
                                                                        <input class="form-control" name="country" value="<?php echo $row['country']; ?>" type="text" placeholder="<?php echo translate('country');?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="">
                                                                        <input class="form-control" name="city" value="<?php echo $row['city']; ?>" type="text" placeholder="<?php echo translate('city');?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="">
                                                                        <input class="form-control" name="state" value="<?php echo $row['state']; ?>" type="text" placeholder="<?php echo translate('state');?>">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" name="zip" value="<?php echo $row['zip']; ?>" type="text" placeholder="<?php echo translate('ZIP');?>">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-12">
                                                                    <span class="btn btn-theme pull-right signup_btn" data-unsuccessful='<?php echo translate('info_update_unsuccessful!'); ?>' data-success='<?php echo translate('info_updated_successfully!'); ?>' data-ing='<?php echo translate('updating..') ?>' >
                                                                        <?php echo translate('update');?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>   
                                            </div>
                                            
                                            <br>

                                            <div class="tab-pane fade in active" id="tab2">
                                                <div class="details-wrap">
                                                    <div class="block-title alt"> <i class="fa fa-angle-down"></i> <?php echo translate('change_your_password');?></div>
                                                    <div class="details-box">
                                                        <?php
                                                            echo form_open(base_url() . 'home/registration/update_password/', array(
                                                                'class' => 'form-delivery',
                                                                'method' => 'post',
                                                                'enctype' => 'multipart/form-data'
                                                            ));
                                                        ?> 
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="form-group"><input required name="password" type="password" placeholder="<?php echo translate('old_password');?>" class="form-control"></div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group"><input required name="password1" type="password" placeholder="<?php echo translate('new_password');?>" class="form-control"></div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group"><input required name="password2" type="password" placeholder="<?php echo translate('confirm_new_password');?>" class="form-control"></div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12">
                                                                <span class="btn btn-theme pull-right signup_btn" data-unsuccessful='<?php echo translate('password_change_unsuccessful!'); ?>' data-success='<?php echo translate('password_changed_successfully!'); ?>' data-ing='<?php echo translate('updating..') ?>' >
                                                                    <?php echo translate('update');?> 
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                        }
                    ?>
                         

                                                       

                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
</section>


<script type="text/javascript">
    function abnv(thiss){
        $('#savepic').hide();
        $('#inppic').hide();
        $('#'+thiss).show();
    }
    function change_state(va){
        $('#state').val(va);
    }

    $('.user-profile-img').on('mouseenter',function(){
        //$('.pic_changer').show('fast');
    });

    //$('.set_image').on('click',function(){
    //    $('#imgInp').click();
    //});

    $('.user-profile-img').on('mouseleave',function(){
        if($('#state').val() == 'normal'){
            //$('.pic_changer').hide('fast');
        }
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').css('backgroundImage', "url('"+e.target.result+"')");
                $('#blah').css('backgroundSize', "cover");
            }
            reader.readAsDataURL(input.files[0]);
            abnv('savepic');
            change_state('saving');
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
    
    
    window.addEventListener("keydown", checkKeyPressed, false);
     
    function checkKeyPressed(e) {
        if (e.keyCode == "13") {
            $(":focus").closest('form').find('.submit_button').click();
        }
    }
</script>

<style type="text/css">
    .pagination_box a{
        cursor: pointer;
    }
    .pleft_nav li.active {
        background-color: #ebebeb!important;
    }
</style>
