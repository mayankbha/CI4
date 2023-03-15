<?php include 'popup.php'; ?>

            <!-- CONTENT AREA -->
<div class="content-area">
    <!-- PAGE WITH SIDEBAR -->
    <section class="page-section with-sidebar pad-t-15">
        <div class="container">
            <div class="row mar-lr--5">
                <!-- SIDEBAR -->
                <?php //include 'sidebar.php'; ?>
                <!-- /SIDEBAR -->
                <!-- CONTENT -->
                <div class="col-md-12 pad-lr-5 content" id="content">
                    <!-- site post -->
                    <?php
                    foreach ($site as $rows) {
                        ?>
                        <ol class=" hidden-sm hidden-xs breadcrumb breadcrumb-custom" style="text-transform: uppercase;">
                            <li>
                                <a href="<?php echo base_url(); ?>">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">
                                    <?php echo $this->Crud_model->get_type_name_by_id('category', $rows['category_id']); ?>
                                </a>
                            </li>
                            <?php
                            if ($rows['sub_category_id'] !== '0') {
                                ?>
                                <li class="active">
                                    <a href="#">
                                        <?php echo "Eye ".$this->Crud_model->get_type_name_by_id('sub_category', $rows['sub_category_id']); ?>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ol>
                        <article class="post-wrap post-single box_shadow mar-lr-0 mar-t-10">
                        <div style="display: flex;margin-bottom: -25px;">
                                <?php 
                                        $name = $rows['slug'];
                                        $subname = 'Login To EYE '.$name . " Website";
                                        $subname = strtoupper($subname);
                                        $anchorTag='<a style="height: 100%;margin-left: 10px!important;" href="javascript:void(0)" onclick="openWebModal(\''.strtolower($name).'\')" class="btn btn-success ">GO
                                            &nbsp;<i class="fa fa-external-link"></i></a>';
                                        
                                        $url = base_url('home/remote_site')."/".$name;

                                    ?>
                                <?php if($this->session->userdata('user_id')){?>
                                    <div class="alert alert-success hidden-xs hidden-sm" style="background: #5cb85b;color: #f7f7f7;height: 34px;padding: 5px 5px 5px 5px;text-transform: uppercase;margin-right: 5px;" role="alert"><b>Welcome back, </b> you're log in as user you may <?php echo $subname; ?>
                                    </div>
                                                                        
                                <?php } else { ?>
                                    <div class="alert alert-danger" style="background: #dc5656;color: #f7f7f7;height: 34px;padding: 5px 5px 5px 5px;text-transform: uppercase;margin-right: 5px;" role="alert"><b>Login Alert! </b> Seems you're not log in you can visit only
                                    </div>
                                    
                                <?php } ?>
                                <?//=$anchorTag?>

                                <?php if($this->session->userdata('user_id')){?>

                                    <?php 
                                    $rname = str_replace(' ', '', $name);
                                    $lname = strtolower($rname);
                                    
                                    if($lname == "realestate") {?>
                                        &nbsp;<a href="<?=base_url('home/remote_site/realestate/user')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">Login As User</span></a>&nbsp;
                                    <?php }?>

                                    <?php if($lname == "tv") {?>
                                        &nbsp;<a href="<?=base_url('home/remote_site/tv/user')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">Login As User</span></a>&nbsp;
                                    <?php }?>

                                    <?php if($lname == "radio") {?>
                                        &nbsp;<a href="<?=base_url('home/remote_site/radio/user')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">Login As User</span></a>&nbsp;
                                    <?php }?>

                                    <?php if($lname == "motors") {?>
                                        &nbsp;<a href="<?=base_url('home/remote_site/motors/user')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">Login As User</span></a>&nbsp;
                                    <?php }?>

                                    <?php if($lname == "jobs") {?>
                                        &nbsp;<a href="<?=base_url('home/remote_site/jobs/')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">Login As Seeker</span></a>&nbsp;

                                        <a href="<?=base_url('home/remote_site/jobs/employer')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">Login As Employer</span></a>&nbsp;
                                    <?php }?>

                                    <?php if($lname == "niversity") {?>
                                        &nbsp;<a href="<?=base_url('home/remote_site/niversity/2')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">Login As Student</span></a>&nbsp;
                                        <a href="<?=base_url('home/remote_site/niversity/3')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">Login As Tutor</span></a>&nbsp;
                                    <?php }?>

                                    <?php if($lname == "books") {?>

                                        &nbsp;<a href="<?=base_url('home/remote_site/books/2')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">Login As Buyer</span></a>&nbsp;
                                        <a href="<?=base_url('home/remote_site/books/3')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-success ">Login As Seller</span></a>&nbsp;
                                    <?php }?>

                                <?php }else{?>

                                    <a href="<?=base_url('home/auth/login')?>"><span style="margin:10px;width: 100%;" class="btn btn-danger ">Login</span></a>&nbsp;
                                <?php }?>
                                <?php 
                                    $name = $rows['slug'];
                                    $rname = str_replace(' ', '', $name);
                                    $lname = strtolower($rname);?>
                                    <a href="<?=base_url('home/remote_site/'.$lname.'/visit')?>" target="_blank"><span style="margin:10px;width: 100%;" class="btn btn-warning ">Visit</span></a>

                            </div>
                        </article>
                        <article class="post-wrap post-single box_shadow mar-lr-0 mar-t-10">

                            
                            <div class="post-body">
                                <div class="post-excerpt">
                                    <a href="<?php 
                                    if($img == "tv"){
                                        $tl = "pro";
                                    }else{
                                        $tl = "co";
                                    }
                                    echo 'http://eye'. $img .'.'.$tl; ?>" target="_blank">
                                        <img class="img-responsive" 
                                             src="<?php 
                                             echo base_url('uploads/site').'/eye'. $img .'.jpg'; ?>" alt="<?php 
                                             echo $img; ?>" style="width: 100%;">
                                    </a>
                                    <p class="text-summary">
                                        <?php echo $rows['summary']; ?>
                                    </p>
                                </div>
                            </div>
                            
                        </article>
                        <!-- /site post -->
                        <?php
                            }
                            ?>
                    </div>
                    <!-- /CONTENT -->
                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->
    </div>
    <!-- /CONTENT AREA -->
    <style type="text/css">
        @media (max-width: 811px){
            .alert-{
                    height: unset!important;
            }
        } 
        .btn{
            display: table-cell!important;
        }
    </style>
