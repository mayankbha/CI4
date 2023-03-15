<section class="page-section" style="padding-top: 0px;">
    <div class="container2">
        <div class="row home_category_theme_1" style="border-top: 2px solid <?php echo $color_back; ?>;">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2 class="category_title" style="background-color:<?php echo $color_back; ?>;margin-bottom:15px;">
                    <span>
<!-- <a href="<?php //echo base_url(); 
?>home/category/<?php echo $category; ?>" style="color:<?php echo $color_text; ?>"> -->
<span style="color:<?php echo $color_text; ?>">
    <?php echo $this->crud_model->get_type_name_by_id('category', $category, 'category_name'); ?>
</span>
<!-- </a> -->
</span>
</h2>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="tabs-wrapper content-tabs">
        <div class="tab-content">
            <div class="tab-pane fade in active">
                <div class="row">



                    <?php
                    if (!empty($sub_category)) {
                        ?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <?php
                                foreach ($sub_category as $row2) {


                                    ?>
                                    <div class="col-md-12 col-sm-12 col-xs-12 sub-category">

                                        <h2 class="section-title section-title-lg">
                                            <span>
                                                <span class="thin">
                                                    <?php

                                                    $title = $this->crud_model->get_type_name_by_id('sub_category', $row2, 'sub_category_name');

                                                    $title = strtolower($title);

// echo "<pre>";print_r($title);
// die();

                                                    if ($title == 'niversity') {
// echo "if";
                                                        $final_title = 'Courses';
                                                    } else {
// echo "else";
                                                        $final_title = $title;
                                                    }
                                                    echo $final_title;
                                                    ?></span>
                                                </span>
                                            </h2>

                                            <style type="text/css">
                                                #cb {
                                                    display: flex;
                                                }

                                                @media(max-width: 768px) {
                                                    #cb {
                                                        display: flow-root !important;
                                                    }

                                                    #span {
                                                        margin: 1px !important;
                                                    }
                                                }
                                            </style>

                                            <div id="cb" style="justify-content:center;align-items:center;">
                                                <?php
                                                $name = $title;
                                                $subname = 'Login To EYE ' . $final_title . " Website";
                                                $subname = strtoupper($subname);
                                                $anchorTag = '<a style="height: 100%;margin-left: 10px!important;" href="javascript:void(0)" onclick="openWebModal(\'' . strtolower($name) . '\')" class="btn btn-success ">GO
                                                &nbsp;<i class="fa fa-external-link"></i></a>';

                                                $url = base_url('home/remote_site') . "/" . $name;

                                                ?>

                                                <?php

                                                $rname = str_replace(' ', '', $name);
                                                $lname = strtolower($rname);
                                                ?>
                                                <?php

                                                if($lname == "estate") {

                                                    if($this->session->userdata('user_id')){

                                                        $href1 = base_url('home/remote_site/estate/user');

                                                    }else{

                                                        $href1 = base_url('home/login_set/login');

                                                    }
                                                    $estate_href = 'https://estate.itbsh.com/';

                                                    ?>
                                                    <?php
                                                    if ($this->session->userdata('user_login') !== 'yes') {
                                                        ?>

                                                        &nbsp;<a href="<?php echo $estate_href; ?>" target="_blank"><span id="span" style="padding:5px;margin:10px 0px;width: 100%;background-color:<?php echo $color_back; ?>;color:<?php echo $color_text; ?>" class="btn btn-theme pull-right">All Property Ads</span></a>&nbsp;

                                                    <?php } else { ?>

                                                        &nbsp;<a href="<?php echo $href1; ?>" target="_blank"><span id="span" style="padding:5px;margin:10px 0px;width: 100%;background-color:<?php echo $color_back; ?>;color:<?php echo $color_text; ?>" class="btn btn-theme pull-right">All Property Ads</span></a>&nbsp;

                                                        <!-- &nbsp;<a href="<?php echo $href1;?>" target="_blank"><span id="span" style="padding:5px;margin:10px 0px;width: 100%;background-color:<?php echo $color_back;?>;color:<?php echo $color_text;?>" class="btn btn-success ">User Dashboard</span></a>&nbsp; -->

                                                    <?php }?>

                                                <?php }?>
                                                <?php if ($lname == "books") {

                                                    if ($this->session->userdata('user_id')) {
                                                        $two = rawurlencode(base64_encode('2'));
                                                        $three = rawurlencode(base64_encode('3'));
                                                        $href1 = base_url('home/remote_site/books/' . $two);
                                                        $href2 = base_url('home/remote_site/books/' . $three);
                                                        $books_href = 'https://books.itbsh.com/buy-books';
                                                    } else {

                                                        $href1 = base_url('home/login_set/login');
                                                        $href2 = base_url('home/login_set/login');
                                                        $books_href = 'https://books.itbsh.com/buy-books';
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($this->session->userdata('user_login') !== 'yes') {
                                                        ?>

                                                        &nbsp;<a href="<?php echo $books_href; ?>" target="_blank"><span id="span" style="padding:5px;margin:10px;width: 100%;background-color:<?php echo $color_back; ?>;color:<?php echo $color_text; ?>" class="btn btn-theme pull-right">All Books</span></a>&nbsp;


                                                    <?php } else { ?>

                                                        &nbsp;<a href="<?php echo $href2; ?>" target="_blank"><span id="span" style="padding:5px;margin:10px;width: 100%;background-color:<?php echo $color_back; ?>;color:<?php echo $color_text; ?>" class="btn btn-theme pull-right">Seller Dashboard</span></a>&nbsp;

                                                        &nbsp;<a href="<?php echo $books_href; ?>" target="_blank"><span id="span" style="padding:5px;margin:10px;width: 100%;background-color:<?php echo $color_back; ?>;color:<?php echo $color_text; ?>" class="btn btn-theme pull-right">All Books</span></a>&nbsp;

                                                        <a href="<?php echo $href1; ?>" target="_blank"><span id="span" style="padding:5px;margin:10px;width: 100%;background-color:<?php echo $color_back; ?>;color:<?php echo $color_text; ?>" class="btn btn-theme pull-right">Buyer Dashboard</span></a>&nbsp;

                                                    <?php } ?>

                                                <?php } ?>

                                                <?php if ($lname == "lance") {

                                                    if ($this->session->userdata('user_id')) {

                                                        $href1 = base_url('home/remote_site/lance/');

                                                        $lance_href = 'https://fl.itbsh.com';
                                                    } else {

                                                        $href1 = base_url('home/login_set/login');
                                                        $href2 = base_url('home/login_set/login');
                                                        $lance_href = 'https://fl.itbsh.com';
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($this->session->userdata('user_login') !== 'yes') {
                                                        ?>

                                                        &nbsp;<a href="<?php echo $lance_href; ?>" target="_blank"><span id="span" style="padding:5px;margin:10px;width: 100%;background-color:<?php echo $color_back; ?>;color:<?php echo $color_text; ?>" class="btn btn-theme pull-right"> EyeLance Home</span></a>&nbsp;


                                                    <?php } else { ?>

                                                        &nbsp;<a href="<?php echo $lance_href; ?>" target="_blank"><span id="span" style="padding:5px;margin:10px;width: 100%;background-color:<?php echo $color_back; ?>;color:<?php echo $color_text; ?>" class="btn btn-theme pull-right">EyeLance Home</span></a>&nbsp;

                                                        <a href="<?php echo $href1; ?>" target="_blank"><span id="span" style="padding:5px;margin:10px;width: 100%;background-color:<?php echo $color_back; ?>;color:<?php echo $color_text; ?>" class="btn btn-theme pull-right">Buyer / Seller Dashboard</span></a>&nbsp;

                                                    <?php } ?>

                                                <?php } ?>

                                            </div>

                                            <?php if ($name != "lance") {?>
                                                <!-- <div class="owl-carousel"> -->
                                                    <div class="owl-carousel-<?php echo $row2; ?>" id="owl-carousel-<?php echo $row2; ?>">
                                                        <?php
                                                        $box_style =  $this->db->get_where('ui_settings', array('ui_settings_id' => 29))->row()->value;
                                                        $limit =  $this->db->get_where('ui_settings', array('ui_settings_id' => 20))->row()->value;
                                                        $featured = $this->crud_model->product_list_set('featured', $limit);


                                                        $real_name = $this->crud_model->get_type_name_by_id('sub_category',$row2,'sub_category_name');


                                                        $actual_name = str_replace(' ', '', $real_name);

                                                        $name = strtolower($actual_name);


                                                        if ($name == 'lance') {

                                                            $router = $actual_name = $name = 'fl';


                                                        }elseif ($name == 'niversity') {

                                                            $router = 'course';

                                                        }else{
                                                            $router = 'book';
                                                        }

                                                        $domain_path = 'https://'.strtolower($actual_name).'.itbsh.com/';

                                                        $api_domain = 'https://'.$name.'.itbsh.com/';  
                                                        $url = 'https://'.$name.'.itbsh.com/'.$name.'-api';  

// echo "<pre> domain_path = "; print_r($domain_path);
// echo "<pre> api_domain = "; print_r($api_domain);
// echo "<pre> url = "; print_r($url);

// die();

// echo "<pre> url = "; print_r($this->session->userdata());
// die();

                                                        $ch = curl_init();
// curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
                                                        curl_setopt($ch, CURLOPT_HEADER, false);
                                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// Set the cookie jar for both importing and exporting
//curl_setopt($ch, CURLOPT_COOKIESESSION, true);
//curl_setopt($ch, CURLOPT_COOKIEJAR, 'ci_session');  //could be empty, but cause problems on some hosts
//curl_setopt($ch, CURLOPT_COOKIEFILE, '/var/www/system/data/www/itbsh.com');
                                                        curl_setopt($ch, CURLOPT_URL, $url);

                                                        if($userEmail = $this->session->userdata('email')){

                                                            curl_setopt($ch, CURLOPT_POST, 1);
                                                            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
                                                            curl_setopt($ch, CURLOPT_POSTFIELDS,"email=".$userEmail);

                                                        }

                                                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);
                                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                                                        $data = curl_exec($ch);
                                                        curl_close($ch);

// echo "<pre> url = "; print_r($data);
// die();

                                                        $data = json_decode($data, true);

// echo "<pre> userdata = "; print_r($this->session->userdata());
// echo "<pre> data = "; print_r($data);
// die();


                                                        foreach ($data as $row => $value) {

// echo $this->html_model->product_box($data, 'grid', $box_style);

                                                            ?>

                                                            <div class="thumbnail box-style-1 no-padding" itemscope itemtype="http://schema.org/Product">
                                                                <a itemprop="url" href="<?php echo $api_domain . 'buy-' . $router . '/' . $value['slug']; ?>" target="_blank">
                                                                    <div class="media">
                                                                        <div class="cover"></div>

																		<?php if($router == 'book') { ?>
																			<div class="media-link image_delay" data-src="data:image/jpg;base64, <?php echo $value['image_s3_file']; ?>" style="background-image:url('<?php echo img_loading(); ?>');background-size:contain;"></div>
																		<?php } else { ?>
																			<div class="media-link image_delay" data-src="<?php echo $api_domain . 'assets/uploads/' . $router . '_curriculum_files/' . $value['image']; ?>" style="background-image:url('<?php echo img_loading(); ?>');background-size:contain;"></div>
																		<?php } ?>
																	</div>
                                                                    <div class="caption text-center">
                                                                        <h4 itemprop="name" class="caption-title">
                                                                            <span itemprop="name"><strong><?php
                                                                            $title = $value[$router . '_title'];
                                                                            $title = preg_replace('/\s+/', ' ', $title);
                                                                            echo $this->html_model->get_first_num_of_words($title, 3) . '...';
                                                                            ?></strong>
                                                                        </span>
                                                                        <br><span itemprop="name">
                                                                            <?php
                                                                            $description = $value['description'];
                                                                            $description = preg_replace('/\s+/', ' ', $description);
                                                                            echo $this->html_model->get_first_num_of_words($description, 5);
                                                                            ?>
                                                                        </span>
                                                                    </h4>
                                                                    <div class="price"> Price:

                                                                        <?php 
                                                                        if((float) $value['admin_discount'] > 0 && $value['actual_price'] > 0) {
                                                                            $discount_price_user = ((float)$value['actual_price'] - ((float)$value['actual_price']/100)*(float)$value['admin_discount']);
                                                                            $discount_price_user = round($discount_price_user, 2);
                                                                            ?>

                                                                            <ins><?php echo '£ ' . $discount_price_user; ?> </ins>
                                                                            <del itemprop="price"><?php echo $value['actual_price']; ?></del>
                                                                            <span>Off <?= $value['admin_discount'] ?>%</span>
<?php /*if ($value['actual_price'] > $value[$router . '_price']) { ?>
<ins><?php echo '£ ' . $value[$router . '_price']; ?> </ins>
<del itemprop="price"><?php echo $value['actual_price']; ?></del>
<?php */ }  elseif ($value[$router . '_price'] == 0) { ?>
    <ins itemprop="price"><?php echo 'FREE'; ?></ins>
<?php } elseif ($value['actual_price'] > $value[$router . '_price']) { ?>
    <ins><?php echo '£ ' . $value[$router . '_price']; ?> </ins>
    <del itemprop="price"><?php echo $value['actual_price']; ?></del>
    <span>Off <?= round(($value[$router . '_price']/$value['actual_price'])*100,2) ?>%</span>
<?php } else { ?>
    <ins itemprop="price"><?php echo '£ ' . $value['actual_price']; ?></ins>
<?php } ?>
</div>
<!-- <div class="price"> Purchased: <ins itemprop="price"><?php echo $value['total_purchases']; ?></ins>Time(s)
</div>     -->

</div>
</a>
<?php //if ($this->config->item('site_settings')->like_comment_setting == "Yes") { ?>
    <div id="selling_book_comment-section" class="selling_book_comment-section" style="padding: 1.5rem;">
        <div class="bg-white">

            <div class="d-flex flex-row fs-12 " style="align-items: baseline;">
                <?php /* <div class="like p-2 cursor"><a href="https://www.facebook.com/sharer/sharer.php?u=<?= URL_HOME_BUY_BOOK . '/' . $record->slug; ?>"><i class="fa fa-share"></i><span class="ml-1">Share</span></a></div> */ ?>
                <div class="p-2 thumbs-up-list-page flex-fill <?= ($likecommentsystem->userliked ? 'like_color_blue' : '') ?>">
                    <i class="fa fa-thumbs-up"></i> <span class="ml-1">Likes (<?= ($value['likescount'] ? $value['likescount'] : 0) ?>)</span>
                </div>
                <div class=" p-2 flex-fill  text-right">
                    <div class=" pt-2 ">
                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope  "></i><span class="ml-1"><?= " Reffer friend" ?></span></a>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row fs-12 ">

                <div class="p-2 rating average_rating flex-fill mb-0">
                    <?php
                    $totalratingscount = 0;
                    if ($value["totalratingscount"] > 0) {
                        $totalratingscount = $value["totalratingscount"] / $value["ratingscount"];
                    }
//  var_dump($totalratingscount); die;  ?>

<span class="mr-1 float-left small"> <?= number_format((float)$totalratingscount, 1, '.', '') ?> </span>

<?php
for ($iv = 1; $iv <= 5; $iv++) : ?>
    <label <?= (($iv <= $totalratingscount)?'class="checked"':"") ?>></label>
<?php endfor; ?>
<span class="ml-1 float-left small">(<?=  $value["ratingscount"] ?>) </span>
</div>
<div class=" p-2 flex-fill  text-right mb-0 small">
    <div class=" total_comments">
        <a href="<?= base_url() . '/' . $record->slug; ?>#selling_book_comment-section"><i class="fa fa-commenting-o  "></i><span class="ml-1"><?= " Comments " . "(" . $value["ratingscount"] . ")" ?></span></a>
    </div>
</div>
<?php /* <div class=" p-2 ">
<div class=" pt-2 ">
<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope  "></i><span class="ml-1"><?= " Reffer to friend" ?></span></a>
</div>
</div> */ ?>
</div>
<div class="sharethis-inline-share-buttons" data-url="<?= $api_domain . 'buy-' . $router . '/' . $value['slug']; ?>"></div>
</div>
</div>
<?php //} ?>
</div>

<?php } ?>
</div>
<?php }else{ ?>  <!--  Lance -->

<?php
	$name = 'fl';

	$api_domain = 'https://'.$name.'.itbsh.com/';  
	$url = 'https://'.$name.'.itbsh.com/'.$name.'-api';  

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "email=null");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($client, CURLOPT_POSTREDIR, 3);
    curl_setopt($client, CURLOPT_FOLLOWLOCATION, true);

	$data = curl_exec($ch);
	curl_close($ch);

	//print_r($url);
    //print_r($data);
    //die();

	$data = json_decode($data, true);

 //    echo '<pre> $data :: '; print_r($url);
	// echo '<pre> $data :: '; print_r($data);
	// echo '<pre> $data["services"] :: '; print_r($data['services']);
 //    die();
?>

<div style="display: flex;">
    <div class="col-xl-6 col-lg-6 col-xs-12" style="padding-right: 25px;">
        <div class="item-bottom-area">
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-12 col-lg-12 mb-30">
                    <div class="item-card-wrapper list-view" style="border-right: 0px solid;padding-right: 5px;padding-left: 5px;display: unset;">
                        <a href="<?php echo $api_domain.'service'; ?>">
                            <div class="aside-inner">
                                <div class="add-item slot-1">

                                    <div class="add-header text-center">
                                        <h3 class="title" id="span" style="background-color:<?php echo $color_back; ?>;color:<?php echo $color_text; ?>" class="btn btn-theme pull-right"> Services (Gig)</h3>
                                    </div>

                                </div>
                            </div>
                        </a>

						<?php foreach ($data['services'] as $row => $value) { ?>
							<?php
								$title = $value['title'];
								$title = preg_replace('/\s+/', ' ', $title);
								$id = $value['encrypt_id'];
							?>

							<div class="item-card">
								<div class="item-card-thumb">
									<img src="<?php echo $api_domain.'assets/images/service/'.$value['image']; ?>" alt="Service Image" />

									<?php if($value['features'] == 1) { ?>
										<div class="item-level">Featured</div>
									<?php } ?>
								</div>

								<div class="item-card-content">
									<div class="item-card-content-top">
										<div class="left">
											<div class="author-thumb">
												<img src="<?php echo $api_domain.'assets/images/user/profile/'.$value['user']['image']; ?>" alt="usman">
											</div>

											<div class="author-content">
												<h5 class="name"><a href="<?php echo $api_domain.'user/'.$value['user']['username']; ?>"><?php echo $value['user']['username']; ?></a>

												<span class="level-text"><?php echo $value['user']['rank']['level']; ?></span></h5>

												<div class="ratings">
													<?php if($value['rating'] > 0) { ?>
														<?php if(is_int($value['rating'])) { ?>
															<?php echo $value['rating'].'.0'; ?>
														<?php } else { ?>
															<?php echo $value['rating']; ?>
														<?php } ?>
													<?php } ?>
													<i class="fa fa-star"></i>
													<span class="rating me-2" style="direction: inherit !important;">
														<?php if($value['rating'] > 0) { ?>
															(<?php echo $value['total_reviews']; ?>)
														<?php } else { ?>
															<?php echo '(0)'; ?>
														<?php } ?>
													</span>
												</div>
											</div>
										</div>

										<div class="right">
											<div class="item-amount"><span><?php echo '£ ' . $value['price']; ?> </span></div>
										</div>
									</div>

									<h3 class="item-card-title"><a href="<?php echo $api_domain.'service/details/'.$title.'/'.$id; ?>"><?php echo $this->html_model->get_first_num_of_words($title, 5) . '...'; ?></a></h3>
								</div>

								<div class="item-card-footer">
									<div class="left">
										<a href="javascript:void(0)" class="item-love me-2 loveHeartAction" data-serviceid="1"><i class="fa fa-heart"></i> <span class="give-love-amount">(<?php echo $value['favorite']; ?>)</span></a>
									
									</div>

									<div class="right">
										<?php if(!empty($value['user'])) { ?>
											<?php if($user->id != $value['user_id']) { ?>
												<div class="order-btn">
													<a href="<?php echo $api_domain.'user/service/booking/'.$title.'/'.$id; ?>" class="btn--base"><i class="las la-shopping-cart"></i> Order Now</a>
												</div>
											<?php } else { ?>
												<div class="order-btn">
													<a href="<?php echo $api_domain.'user/service/index'; ?>" class="btn--base"><i class="fa fa-pencil-alt"></i> Manage Now</a>
												</div>
											<?php } ?>
										<?php } else { ?>
											<div class="order-btn">
												<a href="<?php echo $api_domain.'user/service/booking/'.$title.'/'.$id; ?>" class="btn--base"><i class="las la-shopping-cart"></i> Order Now</a>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="col-xl-6 col-lg-6 col-xs-12" style="padding-left: 25px;">
        <div class="item-bottom-area">
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-12 col-lg-12 mb-30">
                    <div class="item-card-wrapper list-view" style="border-right: 0px solid;padding-right: 5px;padding-left: 5px;display: unset;">
                        <a href="<?php echo $api_domain.'job'; ?>">
                            <div class="aside-inner">
                                <div class="add-item slot-1">
                                    <div class="add-header text-center">
                                        <h3 class="title" id="span" style="background-color:<?php echo $color_back; ?>;color:<?php echo $color_text; ?>" class="btn btn-theme pull-right">Freelancing (Jobs)</h3>
                                    </div>
                                </div>
                            </div>
                        </a>

						<?php foreach ($data['jobs'] as $row => $value) { ?>
							<?php
								$title = $value['title'];
								$title = preg_replace('/\s+/', ' ', $title);
								$id = $value['encrypt_id'];
							?>

							<div class="item-card">
								<div class="item-card-thumb">
									<img src="<?php echo $api_domain.'assets/images/job/'.$value['image']; ?>" alt="Job Image">
								</div>

								<div class="item-card-content">
									<div class="item-card-content-top">
										<div class="left">
											<div class="author-thumb">
												<img src="<?php echo $api_domain.'assets/images/user/profile/'.$value['user']['image']; ?>" alt="author">
											</div>

											<div class="author-content">
												<h5 class="name"><a href="<?php echo $api_domain.'/user/'.$value['user']['username']; ?>"><?php echo $value['user']['username']; ?></a> <span class="level-text"><?php echo $value['user']['rank']['level']; ?></span></h5>

												<div class="ratings">
													<?php if($value['rating'] > 0) { ?>
														<?php if(is_int($value['rating'])) { ?>
															<?php echo $value['rating'].'.0'; ?>
														<?php } else { ?>
															<?php echo $value['rating']; ?>
														<?php } ?>
													<?php } ?>
													<i class="fa fa-star"></i>
													<span class="rating me-2" style="direction: inherit !important;">
														<?php if($value['rating'] > 0) { ?>
															(<?php echo $value['total_reviews']; ?>)
														<?php } else { ?>
															<?php echo '(0)'; ?>
														<?php } ?>
													</span>
												</div>
											</div>
										</div>

										<div class="right">
											<div class="item-amount"><span><?php echo '£ ' . $value['price']; ?> </span></div>
										</div>
									</div>

									<div class="item-tags order-3">
										<?php foreach($value['skill'] as $skill) { ?>
											<a href="javascript:void(0)"><?php echo $skill; ?></a>
										<?php } ?>
									</div>

									<h3 class="item-card-title"><a href="<?php echo $api_domain.'job/details'.$title.'/'.$id; ?>"><?php echo $this->html_model->get_first_num_of_words($title, 5) . '...'; ?></a></h3>
								</div>

								<div class="item-card-footer mb-10-none">
									<div class="left mb-10">
										<a href="javascript:void(0)" class="btn--base active date-btn"><?php echo $value['delivery_time']; ?> Days</a>
										<a href="<?php echo $api_domain.'job/details/'.$title.'/'.$id; ?>#bids-tab" class="btn--base bid-btn">Total Bids(<?php echo count($value['job_biding']); ?>)</a>
									</div>

									<?php if(!empty($value['user'])) { ?>
										<?php if($user->id != $value['user_id']) { ?>
											<div class="right mb-10">
												<div class="order-btn">
													<a href="<?php echo $api_domain.'job/details/'.$title.'/'.$id; ?>#bids-tab" class="btn--base"><i class="las la-shopping-cart"></i> Bid Now</a>
												</div>
											</div>
										<?php } else { ?>
											<div class="order-btn">
												<a href="<?php echo $api_domain.'job/index'; ?>" class="btn--base"><i class="fa fa-pencil-alt"></i> Manage Now</a>
											</div>
										<?php } ?>
									<?php } else { ?>
										<div class="right mb-10">
											<div class="order-btn">
												<a href="<?php echo $api_domain.'job/details/'.$title.'/'.$id; ?>#bids-tab" class="btn--base"><i class="las la-shopping-cart"></i> Bid Now</a>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php } ?>
</div>
<style>
    /* 4.4 */
/* Products Carousel / OwlCarousel
/* ========================================================================== */
.owl-carousel-<?php echo $row2; ?>.owl-theme .owl-controls {
    margin: 0 !important;
}

@media (max-width: 639px) {
    .owl-controls {
        display: none;
    }
}

.owl-carousel-<?php echo $row2; ?>.owl-theme .owl-controls .owl-nav [class*=owl-] {
    position: absolute;
    top: 50%;
    margin: -20px 0 0 0;
    padding: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-size: 30px;
    line-height: 30px;
    border: solid 3px #00000096;
    background: transparent;
    color: #00000096;
    box-shadow: 0px 0px 5px 3px #96959566;
}

.owl-carousel-<?php echo $row2; ?>.owl-theme .owl-controls .owl-nav [class*=owl-]:hover {
    background: #232323;
    border-color: #232323;
    color: #ffffff;
}

.owl-carousel-<?php echo $row2; ?>.owl-theme .owl-controls .owl-nav .owl-prev {
    left: 10px;
}

.owl-carousel-<?php echo $row2; ?>.owl-theme .owl-controls .owl-nav .owl-next {
    right: 10px;
}

@media (max-width: 1300px) {
    .owl-carousel-<?php echo $row2; ?>.owl-theme .owl-controls .owl-nav .owl-prev {
        left: 15px;
    }

    .owl-carousel-<?php echo $row2; ?>.owl-theme .owl-controls .owl-nav .owl-next {
        right: 15px;
    }
}

.owl-carousel-<?php echo $row2; ?>.owl-theme .owl-controls .owl-dots {
    position: absolute;
    width: 100%;
    bottom: 0;
}

.owl-carousel-<?php echo $row2; ?>.owl-theme .owl-controls .owl-dots .owl-dot span {
    background-color: #a5abb7;
}

.owl-carousel-<?php echo $row2; ?>.owl-theme .owl-controls .owl-dots .owl-dot:hover span,
.owl-carousel-<?php echo $row2; ?>.owl-theme .owl-controls .owl-dots .owl-dot.active span {
    background-color: #232323;
}
</style>
<script>
    $(document).ready(function() {
// API carousel
if ($('.owl-carousel-<?php echo $row2; ?>').length) {
    $('.owl-carousel-<?php echo $row2; ?>').owlCarousel({
        autoplay: true,
        autoplayHoverPause: true,
        loop: true,
        margin: 30,
        dots: false,
        nav: true,
        navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
        ],
        responsive: {
            0: {
                items: 2
            },
            479: {
                items: 2
            },
            768: {
                items: 2
            },
            991: {
                items: 5
            },
            1024: {
                items: 5
            }
        }
    });
}
})
</script>
<?php
}
?>
</div>
</div>
<?php
}
?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
