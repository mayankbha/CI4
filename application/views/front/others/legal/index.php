<!-- BREADCRUMBS -->
<section class="page-section breadcrumbs">
    <div class="container2">
        <div class="page-header">
            <h2 class="section-title section-title-lg">
                <span>
                    <?php 
					if($type=='terms'){
						echo translate('terms_&_conditions');
					}
					elseif($type=='privacy'){
						echo translate('privacy_policy');
					}
                    elseif($type=='disclaimer'){
                        echo translate('disclaimer');
                    }
                    elseif($type=='cookies'){
                        echo translate('cookies_policy');
                    }
					?>
                </span>
            </h2>
        </div>
    </div>
</section>
<!-- /BREADCRUMBS -->

<!-- PAGE -->
<section class="page-section">
    <div class="container2">
        <div class="row">
            <div class="col-md-12">
            	<?php echo $this->db->get_where('general_settings', array( 'type' => $type ))->row()->value; ?>
            </div>
        </div>
    </div>
</section>
<!-- /PAGE -->