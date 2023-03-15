
<div class="content-area" id="content">
    <!-- PAGE -->
    <section class="page-section color">
        <div class="container2">
            <div class="row">
                <div class="col-md-12 text-left">
                    <h2 class="block-title"><span><?php echo translate('Welcome_to_support_center'); ?></span></h2>
                    <!-- Contact form -->
                    <div style="text-align: center;" >
                        <h3>We're always her for help ...</h3>
                        <p>Visit our support center Knowledge base to learn more or open a support ticket.</p>
                        <?php if($this->session->userdata('user_id')){ ?>
                            <p style="color: green;" >You're already logged in click go button to use support center!</p>
                        <?php } else { ?>
                            <p style="color: red;" >Note: You must login to use our support center.</p>
                        <?php } ?>
                    </div>
                    <div class="outer required" style="display:flex;justify-content:center;align-items:center;">
                        <div class="form-group af-inner">

                        <?php if($this->session->userdata('user_id')){ ?>

                            <a href="https://support.eyeniversum.com/knowledge-base" target="_blank">
                                <span class="btn btn-warning " data-text="<?php echo translate('knowledge_base'); ?>">
                                    <span> <?php echo translate('knowledge_base'); ?></span>
                                </span>
                            </a>

                            <a href="<?=base_url('home/remote_site/eyeniversum/client')?>" target="_blank" >
                                <span class="btn btn-success " data-text="<?php echo translate('open_ticket_now'); ?>">
                                    <span> <?php echo translate('open_ticket_now'); ?></span>
                                </span>
                            </a>

                        <?php } else { ?>

                            <a href="https://support.eyeniversum.com/knowledge-base" target="_blank">
                                <span class="btn btn-warning " data-text="<?php echo translate('knowledge_base'); ?>">
                                    <span> <?php echo translate('knowledge_base'); ?></span>
                                </span>
                            </a>

                            <a href="<?=base_url('home/login_set/login')?>" >
                                <span class="btn btn-success " data-text="<?php echo translate('open_ticket'); ?>">
                                    <span> <?php echo translate('open_ticket'); ?></span>
                                </span>
                            </a>

                        <?php } ?>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
</div>
<style type="text/css">
    a {
    /*color: unset!important;*/
}

</style>
