
		<?php
            $all_style = $this->db->get('slider_style')->result_array();
            foreach($all_style as $row){
                $style = json_decode($row['value'],true);
        ?>
                
            <!--Panel with Pager-->
            <!--===================================================-->
            <div class="panel slider_preview" style="border:1px solid #ddd !important;border-radius:4px !important;">
        
                <!--Panel heading-->
                <div class="panel-heading">
                    <div class="panel-control">
                        <div class="btn btn-info btn-labeled fa fa-play-circle player">
                            <?php echo translate('play');?> <?php echo $row['name']; ?>
                        </div>
                        <div class="btn btn-success btn-labeled fa fa-thumbs-up style_chooser" data-id='<?php echo $row['slider_style_id']; ?>'>
                            <?php echo translate('choose');?>
                        </div>
                    </div>
                    <h3 class="panel-title"><?php echo $row['name']; ?></h3>
                </div>
        
                <!--Panel body-->
                <div class="panel-body">
                    <div class="style_layer" style="width:100%; height:500px;">
                        <div class="ls-slide" <?php echo $style['full_slide_style']; ?> >
							<!--<img src="<?php echo base_url(); ?>uploads/slider_image/styles/12.jpg" class="ls-bg" />-->
                            <img src="<?php echo base_url(); ?>uploads/slider_image/styles/<?php echo $row['slider_style_id']; ?>.jpg" class="ls-bg" />
                        </div>
                    </div>

                    <div class="back_layer" style="display:none;">
                        <div class="ls-slide" <?php echo $style['full_slide_style']; ?> >
                            <img src="<?php echo base_url(); ?>uploads/slider_image/defaults/<?php echo $style['background']; ?>.jpg" class="ls-bg" />

							<?php foreach($style['videos'] as $video) { ?>
								<div class="ls-s2" style="width: 100% !important; height: 430px !important;">
									<<?php echo $video['element']; ?> frameborder="0" allowfullscreen style="<?php echo $video['style']; ?>" src="<?php echo $video['video_url']; ?>" frameborder="0" allowfullscreen></<?php echo $video['element']; ?>>
								</div>
                            <?php } ?>
                            <?php foreach($style['images'] as $image){ ?>
                                <img class="ls-l" src="<?php echo base_url(); ?>uploads/slider_image/defaults/<?php echo $image['name']; ?>.png" style="<?php echo $image['style']; ?>" data-ls="<?php echo $image['data_ls']; ?>" >
                            <?php } ?>
                            <?php foreach($style['texts'] as $text){ ?>
                                <<?php echo $text['element']; ?> class="ls-l" style="<?php echo $text['style']; ?> color:<?php echo $text['color']; ?>; background:<?php echo $text['background']; ?>;" data-ls="<?php echo $text['data_ls']; ?>" >
                                    <?php echo $text['show_name']; ?>
                                </<?php echo $text['element']; ?>>
                            <?php } ?>
							<?php foreach($style['buttons'] as $btn) { ?>
								<<?php echo $btn['element']; ?> type="<?php echo $btn['type']; ?>" class="ls-l" onclick="window.open('<?php echo $btn['btn_url']; ?>', '<?php echo $btn['target']; ?>');" out_<?php echo $btn['name']; ?>" style="<?php echo $btn['style']; ?> color:<?php echo $btn['color']; ?>; background:<?php echo $btn['background']; ?>;" data-ls="<?php echo $btn['data_ls']; ?>"><?php echo $btn['show_name']; ?></<?php echo $btn['element']; ?>>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--===================================================-->
            <!--End Panel with Pager-->
        <?php
            }
        ?>