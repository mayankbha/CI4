<?php
   // $mobile=$this->agent->is_mobile();
   // echo "<pre>";print_r($this->agent);
?>

<!--[if lt IE 9]>
	<script src="<?php echo base_url(); ?>template/front/layerslider/assets/js/html5.js"></script>
<![endif]-->

<!-- LayerSlider stylesheet -->
<link rel="stylesheet" href="<?php echo base_url(); ?>template/front/layerslider/css/layerslider.css" type="text/css">
<script src="<?php echo base_url(); ?>template/front/layerslider/js/greensock.js"></script>
<script src="<?php echo base_url(); ?>template/front/layerslider/js/layerslider.transitions.js"></script>
<script src="<?php echo base_url(); ?>template/front/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>

<style>
	#layerslider * {
		font-family: Lato, 'Open Sans', sans-serif;
	}
</style>

<div id="full-slider-wrapper" style="margin-bottom: 0px;">
	<div id="layerslider" style="width: 100%; height: 500px;">
	<?php
		$this->db->where('status','ok');
		$this->db->order_by('serial','desc');
		$this->db->order_by('slider_id','desc');
		$sliders = $this->db->get('slider')->result_array();

		//echo '<pre> $sliders :: '; print_r($sliders); die;

		$h = count($sliders);
		$n = 0;

		foreach ($sliders as $row1) {
			$elements = json_decode($row1['elements'],true);
			$oimgs 	= $elements['images'];
			$txts 	= $elements['texts'];
			$btns 	= $elements['buttons'];
			$style = json_decode($this->db->get_where('slider_style',array('slider_style_id'=>$row1['style']))->row()->value,true);
			$n++;

			//echo '<pre> $style :: '; print_r($style); die;
		?>
		
			<div class="ls-slide" <?php echo $style['full_slide_style']; ?>>
				<!--BACKGROUND-->
				<?php if(file_exists('uploads/slider_image/background_'.$row1['slider_id'].'.jpg')) { ?>
					<img src="<?php echo base_url(); ?>uploads/slider_image/background_<?php echo $row1['slider_id']; ?>.jpg" class="ls-bg" alt="Slide background"/>
				<?php } else { ?>
					<img src="<?php echo base_url(); ?>uploads/others/slider default.jpg" class="ls-bg" alt="Slide background"/>
				<?php } ?>

				<?php 
					foreach($style['images'] as $image) {
						if(in_array($image['name'], $oimgs)) {
				?>
					<img class="ls-l" src="<?php echo base_url(); ?>uploads/slider_image/<?php echo $row1['slider_id']; ?>_<?php echo $image['name']; ?>.png" style="<?php echo $image['style']; ?>" data-ls="<?php echo $image['data_ls']; ?>">
				<?php
						}
					}
				?>

				<?php 
					foreach($style['texts'] as $text) {
						$txt = ''; $color = ''; $background = '';

						foreach ($txts as $a) {
							if($a['name'] == $text['name']) {
								$txt = $a['text'];
								$color = $a['color']; 
								$background = $a['background'];
							}
						}
						if($txt !== '') {
				?>
							<<?php echo $text['element']; ?> class="ls-l" style="<?php echo $text['style']; ?> color:<?php echo $color; ?>; background:<?php echo $background; ?>" data-ls="<?php echo $text['data_ls']; ?>" >
								<?php echo $txt; ?>
							</<?php echo $text['element']; ?>>
				<?php 
						}
					}
				?>

				<?php foreach($style['videos'] as $video) { ?>
					<div class="ls-s2">
						<<?php echo $video['element']; ?> style="<?php echo $video['style']; ?>" src="<?php echo $video['video_url']; ?>" frameborder="0" allowfullscreen data-ls="<?php echo $video['data_ls']; ?>"></<?php echo $video['element']; ?>>
					</div>
				<?php } ?>

				<?php foreach($style['buttons'] as $button) { $txt = ''; $color = ''; $background = ''; ?>
					<?php 
						foreach ($btns as $a) {
							if($a['name'] == $button['name']) {
								$txt = $a['text'];
								$color = $a['color']; 
								$background = $a['background'];
							}
						}
						if($txt !== '') {
					?>
							<<?php echo $button['element']; ?> type="<?php echo $button['type']; ?>" class="ls-l" onclick="window.open('<?php echo $button['url']; ?>', '<?php echo $button['target']; ?>');" out_<?php echo $button['name']; ?>" style="<?php echo $button['style']; ?> color:<?php echo $color; ?>; background:<?php echo $background; ?>" data-ls="<?php echo $button['data_ls']; ?>"><?php echo $txt; ?></<?php echo $button['element']; ?>>
						<?php } ?>
				<?php } ?>

				<!-- mobile view = 98% & desktop = 95% -->
				<?php 
					if ($mobile) {
						$para = 98;
					}else{
						$para = 95;
					}
				?>

				<!--LEFT RIGHT WING-->
				<img class="ls-l ls-linkto-<?php if($n == 1){ echo $h;} else {echo $n-1; } ?>" style="top:225px;right:<?php echo $para; ?>%;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;rotatein:-40;offsetxout:-50;rotateout:-40;" src="<?php echo base_url(); ?>uploads/slider_image/defaults/left.png" alt="">
				<img class="ls-l ls-linkto-<?php if($n == $h){ echo 1;} else {echo $n+1; } ?>" style="top:225px;left:<?php echo $para; ?>%;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;" src="<?php echo base_url(); ?>uploads/slider_image/defaults/right.png" alt="">
			</div>
		<?php
			}
		?>
	</div>
</div>

<!-- Initializing the slider -->
<script>
	function start_slider() {
		jQuery("#layerslider").layerSlider({
			autoPlayVideos: true,
			responsive: true,
			responsiveUnder: 1280,
			layersContainer: 1280,
			skin: 'noskin',
			hoverPrevNext: false,
			skinsPath: '<?php echo base_url(); ?>template/front/layerslider/skins/'
		});
	}
	
	$(document).ready(function(e) {
		setTimeout(function(){ start_slider(); }, 500);
	});
</script>
