<?php
/*
Template Name: goa-salad-bowl-online-order
*/
?>
<!DOCTYPE html>
<?php
	$date = date_create();
	 
	$react_js_file_hashes = file_get_contents(APP_URL."/react_component_file_hash.json?time=".date_timestamp_get($date));
	$react_css_file_hashes = file_get_contents(APP_URL."/cart_app_css_file_hash.json?time=".date_timestamp_get($date));
	$react_js_file_hashes_decoded = json_encode($react_js_file_hashes,true);
	$DAYS =[ 
		"mon" => "monday",
		"tue" => "tuesday",
		"wed" => "wednesday", 
		"thu" => "thursday", 
		"fri" => "friday", 
		"sat" => "saturday", 
		"sun" => "sunday"
	];	
?>

<?php
	const api_url = API_URL."/rest/v1/admin/get-all-products";
	function fetch_all_product() {
		$response =  wp_remote_get(api_url);
		$responseBody = wp_remote_retrieve_body( $response );
		$result = json_decode($responseBody);
		return $result;
	}

	function getAvailableDays($productStore, $variants) {
		$days = array_column($variants, "day");
		if(!isset($productStore["available_on"])) {
			$productStore["available_on"]=[];
		}
		return array_unique(array_merge($productStore["available_on"], $days));
	}	

	function getImagesUrls($productStore,$image) {
		if(!isset($productStore["image_urls"])) {
			$productStore["image_urls"]=[];
		}
		if(isset($image))
			array_push($productStore["image_urls"], $image);

		return array_unique($productStore["image_urls"]);
	}

	function getProducts($productStore,$product) {
		$productObject["title"] = $product->title;
		$productObject["description"] = $product->description;
		$productObject["product_id"] = $product->product_id;
		$cheapProduct = getProductPrices($product->variants);
		$productObject["mrp"] = $cheapProduct["mrp"];
		$productObject["sale_price"] = $cheapProduct["sale_price"];
		if(!isset($productStore['products'])) {
			$productStore['products'] = [];
		}
		array_push($productStore['products'], $productObject);
 		return $productStore['products'];
	}

	function getProductPrices($variants) {
		$variants = json_decode(json_encode($variants), true);
		$t = array_reduce($variants, function($a, $b) {
			return $a["sale_price"] < $b["sale_price"] ? $a :$b ;
		}, array_shift($variants));
		return $t;
	}

	function getGroupProductObject($productStore,$product) {
		$productObject["group_name"] = $product->group_name;
		$productObject["group_description"] = $product->group_description;
		$productObject["product_id"] = $product->product_id;
		if(isset($product->default_image))
			$productObject["image_urls"] = getImagesUrls($productStore, $product->default_image);
		if(isset($product->variants))	
			$productObject["available_on"] = getAvailableDays($productStore, $product->variants);
		
		$productObject["products"]=getProducts($productStore, $product);
		return $productObject;
	}
	
	$result = fetch_all_product();
	$productsToDisplay = [];
	if($result->success) {
		$allProducts = $result->data->products;
		foreach($allProducts as $key => $product) {
			if(isset($product->group_name)) {
				if(!isset($productsToDisplay[$product->group_name])) {
					$productsToDisplay[$product->group_name] = [];
					$productsToDisplay[$product->group_name] = getGroupProductObject($productsToDisplay[$product->group_name],$product);
				} else {
					$productsToDisplay[$product->group_name] = getGroupProductObject($productsToDisplay[$product->group_name],$product);
				}
			}
			
		}
	}
?>
<html>
<head>
    <title>Health Food Delivery Goa | Green Grain Bowl | Buy Healthy Food Online</title>
    <meta content="Buy healthy food online by Green Grain Bowl. Healthy lunch bowls delivered to you in Panjim/Porvorim, Goa. Enjoy wholesome meals, salad style." name="description"/>
    <meta content="Health Food Delivery Goa, order healthy food online, health food online, health food delivery, buy healthy food online" name="keywords"/>
    <meta content="website" property="og:type"/>
    <meta content="Health Food Delivery Goa | Green Grain Bowl | Buy Healthy Food Online " property="og:title"/>
    <meta content="Buy healthy food online by Green Grain Bowl. Healthy lunch bowls delivered to you in Panjim/Porvorim, Goa. Enjoy wholesome meals, salad " name="description." property="og:description"/>
    <meta content="https://greengrainbowl.com/" property="og:url"/>
    <meta content="Health Food Delivery Goa | Green Grain Bowl | Buy Healthy Food Online" property="og:site_name"/>
    <meta content="summary_large_image" name="twitter:card"/>
    <meta content="Buy healthy food online by Green Grain Bowl. Healthy lunch bowls delivered to you in Panjim/Porvorim, Goa. Enjoy wholesome meals, salad style." name="description" name="twitter:description"/>
    <meta content="Health Food Delivery Goa | Green Grain Bowl | Buy Healthy Food Online" name="twitter:title"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500|Libre+Baskerville:400,400i" rel="stylesheet">  
    <link rel="stylesheet" href="https://3ebx62qxxp43hyojr3jaqjv1-wpengine.netdna-ssl.com/wp-content/themes/ajency-portfolio/css/animate.min.css">
    <link rel='icon' type='image/x-icon' href="/assets/images/Favicon-48.png"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154494750-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-154494750-1');
      gtag('config', 'UA-169407721-1');

    </script>
	<!-- Hotjar Tracking Code for greengrainbowl.com --> 
	<script> 
		(function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:1856895,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv='); 
	</script>
	<style type="text/css">
		@media (max-width: 991px) {
			.add-address-form{
				padding-bottom: 100px;
			}
		}
	</style>

</head>
<body>

	<div class="d-none header-location">
		<div class="delivery-location cursor-pointer d-inline-block pr-2 ml-lg-2 vertical-align-middle">
			<a href="javascript:void(0)" class="d-inline-block location-icon">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
			</a> 
			<div id="selected-location-address" class="font-weight-light"></div> 
		</div>              
		<div class="edit-location d-none text-primary vertical-align-middle mt-3">
			<a href="#" class="d-inline-block location-icon"><i class="fas fa-pencil-alt number-edit cursor-pointer"></i></a>  
		</div>
	</div>

	<div class="container m-0">
		<div class="row header-section">
			<div>
				<a href="https://greengrainbowl.com/">
					<img src="/assets/images/greengrainbowl.png" class="logo" alt="greengrainbowl logo">
				</a>
			</div>
			<div>
                <a class=" d-block h4 font-weight-light" href="tel:07770004258" onclick="ga('send', 'event', 'telephone', 'CallNow', 'tel:07770004258');"> +91 7770004258
				</a>
			</div>
		</div>
		<div class="row main-content">
			<div class="contentLeft">
				<section class="block-wrapper pb-0">
<!-- 					<figure class="block-image text-center">
						<div class="single_image_wrapper">
							<img width="250" height="250" src="https://3ebx62qxxp43hyojr3jaqjv1-wpengine.netdna-ssl.com/wp-content/uploads/sites/14/2020/02/GGB-logo-Final-1.png" class="vc_single_image-img attachment-full" alt="GGB_logo" srcset="https://3ebx62qxxp43hyojr3jaqjv1-wpengine.netdna-ssl.com/wp-content/uploads/sites/14/2020/02/GGB-logo-Final-1.png 250w, https://3ebx62qxxp43hyojr3jaqjv1-wpengine.netdna-ssl.com/wp-content/uploads/sites/14/2020/02/GGB-logo-Final-1-150x150.png 150w" sizes="(max-width: 250px) 100vw, 250px">
						</div>
					</figure> -->
					<div class="block-description">
						<div class="intro-text">Welcome to <div class="clutch">GreenGrainBowl<div class="clutch-open"></div></div> online orders. Delivering <div class="clutch">5 days a week.<div class="clutch-open"></div></div> Order before <div class="clutch">10:00 A.M.<div class="clutch-open"></div></div> for lunch and before <div class="clutch">3:00 P.M.<div class="clutch-open"></div></div> for dinner.</div>
					</div>
					<div class="text-center">
						<div class="text-center py-3 px-3">
							<img src="/assets/images/Leaf_with_seperator@2x.png" class="img-fluid auto-width" alt="green grain bowl" title="green grain bowl">
						</div>
						<div class="wpb_text_column wpb_content_element ">
							<div class="wpb_wrapper">
								<h1 class="font-weight-bold d-block mobile-header mb-2 display-4 aj-home-title" style="text-align: center">This Week's Menu</h1>
								<p class="body-text">Browse through the daily menu and add one or more bowls to the cart. You can order for the entire week together or for any one day.</p>
							</div>
						</div>
					</div>
				</section>
				<div class="position-relative">
					<div id="output"></div>
					<form method="get">
						<select data-placeholder="Select day of the Week" name="tags[]" multiple class="chosen-select d-none">
							<option value="Monday">Monday</option>
							<option value="Tuesday">Tuesday</option>
							<option value="Wednesday">Wednesday</option>
							<option value="Thursday">Thursday</option>
							<option value="Friday">Friday</option>
							<option value="Saturday">Saturday</option>
							<option value="Sunday">Sunday</option>
						</select>
						<!-- <input type="submit" class="submit-choices"> -->
					</form>
					<div class="chosen-container chosen-container-multi" title="">
						<ul class="chosen-choices chosen-choices-1">
							<li class="search-field">
								<input class="chosen-search-input default w-100" type="text" autocomplete="off" value="Select day of the Week">
							</li>
						</ul>
					</div>
				</div>
				<section class="toggle-wrapper pt-0 pb-1">
					<div class="switch_box box">
						<input type="checkbox" class="switch" id="switch-box">
						<label for="switch-box">Hide Images</label>
					</div>
				</section>
				<section class="pt-0">
				    <div class="product-section">
				        <div class="container-1">
				            <div class="row-1">
				                <div class="col-lg-21"></div>
				                <div class="col-xl-12">
				                    <h1 class="ft6 product-section__title mb-4 d-none">Products</h1>
				                    <div class="tab-panels">
				                    	<?php 

											if(isset($_REQUEST['day']))
											{
    											$day_param = strtolower($_REQUEST['day']);
    											
    											if($day_param == "monday"){
													$day_of_week = 1;
													// echo "/nSet monday ".$day_of_week;
    											}
    											else if($day_param == "tuesday"){
													$day_of_week = 2;
													// echo "/nSet tuesday ".$day_of_week;													
    											}
    											else if($day_param == "wednesday"){
													$day_of_week = 3;
													// echo "/nSet wednesday ".$day_of_week;													
    											}
    											else if($day_param == "thursday"){ 											
													$day_of_week = 4;		
													// echo "/nSet thursday ".$day_of_week;  									
    											}
    											else if($day_param == "friday"){
													$day_of_week = 5;
													// echo "/nSet friday ".$day_of_week;														
    											}
    											else if($day_param == "saturday" or $day_param == "sunday" or $day_param == "weekend"){
													$day_of_week = 6;
													// echo "/nSet weekend ".$day_of_week;														
    											}
    											else{
													$day_of_week = date('w');
													// echo "/nSet default current ".$day_of_week;													
    											}
											}
											else{
												// echo "no query param set";

												$CONFIGURED_END_HOUR = 15;
												
												$current_date = new DateTime();
												date_timezone_set($current_date, timezone_open('Asia/Kolkata'));
            									$current_hour = $current_date->format('H');


												if ($current_hour >= $CONFIGURED_END_HOUR){
  													$current_date->modify('+1 day');
												}

												$day_of_week = date("w", strtotime($current_date->format('Y-m-d H:i:sP')));
											}

										?>


									 	<div id="panels" class="panels">
												<?php foreach($productsToDisplay as $product) {
													$htmlProductId = 'product-'.$product['product_id'];
												?>
													<div id="<?php echo $htmlProductId;?>" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger4 my-6 <?php echo $product['product_id'] == 'dummy-product'? "hide-product":"" ?>">
														<div class="product-wrapper cardfour">
															<div class="lg-w-50 hover-text">
																<h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title"><?php echo $product['group_name'];?></h3>
																<div class="product-content  pb-4">
																	<h4 class="font-weight-light font-size-18 mt-0 mb-lg-0"><?php echo $product['group_description'];?></div>
															</div>
															<div class="tabs-section">
																<div class="tabs list-text-block">
																	<span class="font-size-15 pr-2">Available on:</span>
																	<?php foreach($DAYS as $key => $day) { ?>
																			<label class="tab <?php echo in_array($day,$product['available_on'])? "active":""?> "><?php echo $key;?></label>
																	<?php } ?>
																</div>
															</div>
																	
															<div class="product-image">
																<?php foreach($product['image_urls'] as $image) {?>
																	<div class="slick-slideshow__slide">
																		<img class="bg-image-animation w-100" title="<?php echo $product['group_name']?>" src="<?php echo $image?>" alt="<?php echo $product['group_name']?>" />
																	</div>
																	
																<?php } ?>
															</div>
															<?php 
																foreach($product['products'] as $variant) {
															?>
																<div class="product-meta d-flex pt-4 mb-4 ">
																	<div class="menu-details">
																		<div class="product-variant-name"><?php echo $variant['title'];?></div>
																		<div class="price-row d-flex">
																			<div class="product-price h1 mb-0">₹<?php echo $variant['sale_price'];?></div>
																			<div class="product-price discount-price h1 mb-0">₹<?php echo $variant['mrp'];?></div>	
																		</div>	
																	</div>
																	<div class="react-add-to-cart-container"
																		data-product_data='{
																			"description": "<?php echo $variant['description']; ?>",
																			"title": "<?php echo $variant['title']; ?>",
																			"product_id": "<?php echo $product['product_id'];?>",
																		}'
																		>
																		<div>
																			<a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
																		</div>
																	</div>
																</div>
																<hr>
															<?php } ?>
														</div>
													</div> 

												<?php }?>
											
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</section>
				<div class="term col-sm-12">
                  	<h3 class="h1 ft6">We are Social!</h3>
                	<h4 class="font-weight-light mt-4">We are present on your favorite social networks. Do like/follow and we will share weekly menu, new bowl alerts and the occasional offers.</h4>
                </div>
                <div class="facebook mt-5 mb-5">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgreengrainbowl&tabs&width=700px&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=168413963274202" width="100%" height="130" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
				<div class="follow-instagram mb-5">
					<a href="https://www.instagram.com/greengrainbowl/"  target="_blank">
						<img src="/assets/images/follow-instagram.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="follow us on instagram">
					</a>
				</div>	
				<div class="btn_Whatsapp mb-5">
					<h4 class="font-weight-light mt-4">Or reach out to us on Whatsapp</h4>
					<a class="btn-add-to-cart btn-send text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block p-add w-100 my-2" href="https://wa.me/917770004258?text=Hi" target="_blank"><span class="zindex-1">Send us a Message on<i class="fab fa-whatsapp mr-2"></i></span><i class="text-white fa fa-arrow-right font-size-20" aria-hidden="true"></i></a>
				</div>
		        <div class="col-12">
	       			<hr>
			    </div>
				<footer id="footer">
			    	<section class="footer-section">
				        <div class="container px-2">
				            <div class="row">
				                <div class="col-xl-12 contact-us">
				                </div>
				                <div class="col-xl-12">
				                    <div class="row no-gutters">
				                        <div class="col-md-12 contact-details">
				                            <h4 class="font-weight-light">
				                                <a class=" d-block h4 font-weight-light" href="tel:07770004258" onclick="ga('send', 'event', 'telephone', 'CallNow', 'tel:07770004258');">
				                                    +91 7770004258
				                                </a>
				                            </h4>
				                            <h4 class="font-weight-light">
				                                <a class="d-block h4 font-weight-light" href="mailto:avanti@greengrainbowl.com" onclick="ga('send', 'event', 'footerid', 'Contact', 'Footer - avanti@greengrainbowl.com');">
				                                    avanti@greengrainbowl.com
				                                </a>
				                            </h4>
				                        </div>
				                        <div class="col-md-12 mt-4 mt-md-0 py-2 contact-details">
				                            <h4 class="font-weight-light">
				                                Green Grain Bowl Kitchen, 1st Floor, Panjim Convention Center, Mala. 
				                                <!-- <a class=" font-weight-light h5 " href="javascript:void(0);">
				                                    (Map)
				                                </a> -->
				                            </h4>
				                        </div>
				                        <div class="col-md-12 mt-4 mt-md-0 contact-details">
				                            <h4 class="font-weight-light">
				                                <a class="d-block h4 font-weight-light" href="https://www.instagram.com/greengrainbowl/"  target="_blank">
				                                    <i class="fab fa-instagram mr-2"></i>Instagram
				                                </a>
				                            </h4>
				                            <h4 class="font-weight-light">
				                                <a class="d-block h4 font-weight-light" href="https://wa.me/917770004258?text=Hi"  target="_blank">
				                                    <i class="fab fa-whatsapp mr-2"></i>Whatsapp
				                                </a>
				                            </h4>
				                            <h4 class="font-weight-light">
				                                <a class="d-block h4 font-weight-light" href="https://www.facebook.com/GreenGrainBowl" target="_blank">
				                                    <i class="fab fa-facebook-square mr-2"></i>Facebook
				                                </a>
				                            </h4>
				                        </div>
				                    </div>
				                    <div class="mt-5">
				                        (C) Green Grain Bowl LLP 2020. All Rights Reserved.
				                    </div>
				                </div>
				            </div>
				        </div>
			    	</section>
				</footer>
			</div>
		</div>
	</div>




	<div class="contentRight">
		<div class="full-slider">
			<?php 
				$images = array_slice(scandir(ABSPATH.'/assets/images/front-banner/'),2);
				$num = array_rand($images,1);
			?>
			<div class="full-slider">
				<div class="image">
					<img class="banner_image" src="/assets/images/dummy-image.png" data-src='/assets/images/<?php echo $images[$num];?>' alt="Green Grain Bowl" />
				</div>
			</div>
			<!-- <div class="main-image">

			</div>
			<div class="main-image">

			</div> -->
		</div>
	</div>
	<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="..." aria-hidden="true">
	  	<div class="modal-dialog">
	    	<div class="modal-content">
	      		<div class="modal-body">
	        		<img src="" class="imagepreview" style="width: 100%;">
	      		</div>
			</div>
	  	</div>
	</div>
	
 	<!-- components for react app -->
	<!-- gps modal prompt -->
	<div id="react-add-delivery-address-container"></div>

	<!-- sign-in container -->
	<div id="react-sign-in-container"></div>

	<!-- verify-otp container -->
	<div id="react-verify-otp-container"></div>

	<!-- variant selection popup -->
	<div id="react-variant-selection-modal"></div>

	<!-- <div id="react-variant-selection-modal">
		<div class="custom-modal show-modal" id="variation-selection-popup">
		   <div class="custom-modal-content p-15">
			  <button type="button" class="btn-reset close-modal"><i class="fas fa-times text-silver"></i></button>
			  <div class="product-variant text-left text-black">
				 <h3 class="h1 ft6 pr-4">Choose Your Bowl</h3>
				 <div class="list-meta mt-4 mb-4">
					<div class="list-author">Orange Barley Bowl (Tofu)</div>
					<div class="list-date">Veg</div>
				 </div>
				 <div class="variant-list mb-4">
					<div class="list-item pt-3 pb-3 border-bottom-lightgrey"><label class="custom-radio-btn mb-0 font-size-16"><span class="mr-3 d-inline-block mw-70 text-capitalize text-primary">bowl</span> <span class="price-span text-right"><span class="currency-symbol">₹</span>1</span><input type="radio" name="variant-1CG6P1slxnr9TSNnPzvZ" value="1CG6P1slxnr9TSNnPzvZ-bowl"><span class="checkmark"></span></label></div>
					<div class="list-item pt-3 pb-3 border-bottom-lightgrey"><label class="custom-radio-btn mb-0 font-size-16"><span class="mr-3 d-inline-block mw-70 text-capitalize ">superbowl</span> <span class="price-span text-right"><span class="currency-symbol">₹</span>260</span><input type="radio" name="variant-1CG6P1slxnr9TSNnPzvZ" value="1CG6P1slxnr9TSNnPzvZ-superbowl"><span class="checkmark"></span></label></div>
				 </div>
				 <div class="d-flex mb-4">
					<div class="select-wrapper w-50">
						<div class="select-wrapper-title">
							<span class="d-block">Select day</span>
						</div>
						<div class="select-inner-wrap">
							<select name="days" id="days">
								<option value="monday">Monday</option>
								<option value="tuesday">Tuesday</option>
								<option value="wednesday">Wednesday</option>
								<option value="thursday">Thursday</option>
								<option value="friday">Friday</option>
								<option value="saturday">Saturday</option>
							</select>
						</div>
					</div>
					<div class="select-wrapper w-50">
						<div class="select-wrapper-title">
							<span class="d-block">Select slot</span>
						</div>
						<div class="select-inner-wrap">
							<select name="slot" id="slot">
								<option value="choose">Choose a slot</option>
								<option value="lunch">Lunch</option>
								<option value="dinner">Dinner</option>
							</select>
						</div>
					</div>
				</div>
			  </div>
			  
			  <div class="custom-modal-footer d-flex justify-content-between"><button type="button" class="btn-reset btn-continue btn-arrow-icon font-size-15 text-capitalize p-15 bg-primary text-white text-left w-100 position-relative d-flex align-items-center justify-content-between"><span class="zindex-1">Select &amp; Continue</span><i class="text-white fa fa-arrow-right font-size-20" aria-hidden="true"></i></button></div>
		   </div>
		</div>
	</div> -->

	<div class="msg-container">

	 <div id="success-failure-toast-container">

	 </div>

	  <!-- Offline toast  -->
	   <div class="success toast d-flex justify-content-center">
	     <span class="alert-info p-15 w-100 d-none" id="offline-toast">
	       You are offline and may be viewing outdated content!
	     </span>
	   </div>

	 <!-- View cart component -->
	 <div id="react-view-cart-container" class="mt-lg-5 "></div>
	</div>


	<div class="cart-wrapper" id="root">
	 <div class="cart-app-loader">
	   Loading...
	 </div>
	</div>

	<div class="backdrop"></div>
 	<button id="cart-address-change-trigger" class="d-none"></button>
 
	<div class="site-loader text-center p-5">
		<img src="/assets/images/GGB-logo.png" width="75px" class="mt-5"/> 
		<div class="spinner">
  <div class="bounce1"></div>
  <div class="bounce2"></div>
  <div class="bounce3"></div>
</div>
	</div>

	<link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css"/>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
	<script src="https://unpkg.com/axios@0.19.0/dist/axios.min.js"></script>
	<script src="/assets/js/custom.js"></script>
	<script src="/assets/js/tabs.js"></script>
	<script src="/assets/js/chosen.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-firestore.js"></script>
	<script src="https://unpkg.com/react@16.0.0/umd/react.production.min.js"></script>
	<script src="https://unpkg.com/react-dom@16.0.0/umd/react-dom.production.min.js"></script>	
	<script src="<?php echo APP_URL;?>/firebase-functions.js?_1" type="text/javascript"></script>
	<script src="<?php echo APP_URL;?>/react-components.<?php echo $react_js_file_hashes_decoded["react-components"];?>.js" type="text/javascript"></script>
	<!-- Global variables for react cart app component and css  hash -->
	<script>
		var react_js_file_hashes = <?php echo $react_js_file_hashes; ?>;
		//old{"2":"4535aed7","runtime-main":"9efbcb05","main":"a4ccb55c","react-components":"1594718742766"};
		var react_css_file_hashes = <?php echo $react_css_file_hashes; ?>;
		// old 727e096b
		var app_url = "<?php echo APP_URL?>";
		var site_url = "<?php echo SITE_URL;?>"
	</script>
</body>
</html>
p