<nav id="mainnav-container">
    <div id="mainnav">
        <!--Menu-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content" style="overflow-x:auto;">
                    <ul id="mainnav-menu" class="list-group">
                        <!--Category name-->

                        <!--Menu list item-->
                        <li <?php if($page_name=="dashboard"){?> class="active-link" <?php } ?>
                        style="border-top:1px solid rgba(69, 74, 84, 0.7);">
                        <a href="<?php echo base_url(); ?>admin/">
                            <i class="fa fa-circle fs_i"></i>
                                <?php echo translate('dashboard');?>
                        </a>
                    </li>
                    <?php
                        if($this->crud_model->admin_permission('user')){
                    ?>
                        <li <?php if($page_name=="user"){?> class="active-link" <?php } ?> >
                            <a href="<?php echo base_url(); ?>admin/user">
                                <i class="fa fa-circle fs_i"></i>
                                User Management
                            </a>
                        </li>
                    <?php
                        }
                    ?>

                    <li class="active-sub">
                        <a href="#">
                            <i class="fa fa-circle fs_i"></i>
                            <span class="menu-title">
                                <?php echo translate('websites_management'); ?>
                            </span>
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="collapse" >
                            <?php
                            if($this->crud_model->admin_permission('category')){
                                ?>
                                <li <?php if($page_name=="category"){?> class="active-link" <?php } ?> >
                                    <a href="<?php echo base_url(); ?>admin/category">
                                        <i class="fa fa-circle fs_i"></i>
                                        APIs <?php echo translate('category');?>
                                    </a>
                                </li>
                                <?php
                            } if($this->crud_model->admin_permission('sub_category')){
                                ?>
                                <li <?php if($page_name=="sub_category"){?> class="active-link" <?php } ?> >
                                    <a href="<?php echo base_url(); ?>admin/sub_category">
                                        <i class="fa fa-circle fs_i"></i>
                                        APIs <?php echo translate('sub-category');?>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                    
                        </ul>
                    </li>

                    <li class="active-sub">
                        <a href="#">
                            <i class="fa fa-circle fs_i"></i>
                            <span class="menu-title">
                                <?php echo translate('settings'); ?>
                            </span>
                            <i class="fa arrow"></i>
                        </a>
                        <ul class="collapse" >

                            <?php
                                if($this->crud_model->admin_permission('display_settings')){
                            ?>
                                <li <?php if($tab == 'home'){ ?>class="active-link"<?php } ?> >
                                    <a href="<?php echo base_url(); ?>admin/faqs">
                                        <i class="fa fa-circle fs_i"></i>
                                        Breaking News
                                    </a>
                                </li>
                            <?php
                                }
                            ?>

                            <?php
                                if($this->crud_model->admin_permission('display_settings')){
                            ?>
                                <li <?php if($tab == 'home'){ ?>class="active-link"<?php } ?> >
                                    <a href="<?php echo base_url(); ?>admin/display_settings/home">
                                        <i class="fa fa-circle fs_i"></i>
                                        Display Settings
                                    </a>
                                </li>
                            <?php
                                }
                            ?>

                            <?php
                                if($this->crud_model->admin_permission('slider')){
                                    ?>
                                    <li <?php if($page_name=="slider"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>admin/slider/">
                                            <i class="fa fa-circle fs_i"></i>
                                            Slider Settings
                                        </a>
                                    </li>
                            <?php
                                }
                            ?>

                            <?php
                            if($this->crud_model->admin_permission('site_settings')){
                                ?>
                                <li <?php if($page_name=="site_settings"){?> class="active-link" <?php } ?> >
                                    <a href="<?php echo base_url();?>admin/site_settings/general_settings/">
                                        <i class="fa fa-circle fs_i"></i>
                                        <?php echo translate('general_settings');?>
                                    </a>
                                </li>
                            <?php
                                }
                            ?>

                            <?php
                            if($this->crud_model->admin_permission('seo')){
                                ?>
                                <li <?php if($page_name=="seo_settings"){?> class="active-link" <?php } ?> >
                                    <a href="<?php echo base_url(); ?>admin/seo_settings">
                                        <i class="fa fa-circle fs_i"></i>
                                        <span class="menu-title">
                                            SEO Settings
                                        </span>
                                    </a>
                                </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </li>

                    <?php
                        if($this->crud_model->admin_permission('newsletter')){
                    ?>
                    <li <?php if($page_name=="newsletter"){?> class="active-link" <?php } ?> >
                        <a href="<?php echo base_url(); ?>admin/newsletter">
                            <i class="fa fa-circle fs_i"></i>
                                <b><?php echo translate('newsletters');?></b>
                        </a>
                    </li>
                    <?php
                        }
                    ?>

                    <li <?php if($page_name=="manage_admin"){?> class="active-link" <?php } ?> >
                        <a href="<?php echo base_url(); ?>admin/manage_admin/">
                            <i class="fa fa-circle fs_i"></i>
                            <span class="menu-title">
                                <?php echo translate('manage_admin_profile');?>
                            </span>
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </div>
</nav>
<style>
    .activate_bar{
        border-left: 3px solid #1ACFFC;
        transition: all .6s ease-in-out;
    }
    .activate_bar:hover{
        border-bottom: 3px solid #1ACFFC;
        transition: all .6s ease-in-out;
        background:#1ACFFC !important;
        color:#000 !important;
    }
    ul ul ul li a{
        padding-left:80px !important;
    }
    ul ul ul li a:hover{
        background:#2f343b !important;
    }
</style>
