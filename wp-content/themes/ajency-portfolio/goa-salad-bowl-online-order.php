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
	$react_js_file_hashes_decoded = json_decode($react_js_file_hashes,true);
	
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
	<link rel="stylesheet" type="text/css" href=<?php echo get_parent_theme_file_uri( '/assets/css/custom.css'); ?>>
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500|Libre+Baskerville:400,400i" rel="stylesheet">  
    <link rel="stylesheet" href="https://3ebx62qxxp43hyojr3jaqjv1-wpengine.netdna-ssl.com/wp-content/themes/ajency-portfolio/css/animate.min.css">
    <link rel='icon' type='image/x-icon' href=<?php echo get_parent_theme_file_uri( '/assets/images/Favicon-48.png'); ?>/>

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
					<img src="assets/images/greengrainbowl.png" class="logo" alt="greengrainbowl logo">
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
							<img src="assets/images/Leaf_with_seperator@2x.png" class="img-fluid auto-width" alt="green grain bowl" title="green grain bowl">
						</div>
						<div class="wpb_text_column wpb_content_element ">
							<div class="wpb_wrapper">
								<h1 class="font-weight-bold d-block mobile-header mb-2 display-4 aj-home-title" style="text-align: center">This Week's Menu</h1>
								<p class="body-text">Browse through the daily menu and add one or more bowls to the cart. You can order for the entire week together or for any one day.</p>
							</div>
						</div>
					</div>
				</section>
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
										<input class="radio" id="weekends" name="group" type="radio" <?php if($day_of_week == 6 or $day_of_week == 0) echo 'checked' ?>>
			                    	  	<input class="radio show" id="mon" name="group" type="radio" <?php if($day_of_week == 1) echo 'checked' ?>>
										<input class="radio" id="tue" name="group" type="radio" <?php if($day_of_week == 2) echo 'checked' ?>>
										<input class="radio" id="wed" name="group" type="radio" <?php if($day_of_week == 3) echo 'checked' ?>>
			                    	  	<input class="radio" id="thrus" name="group" type="radio" <?php if($day_of_week == 4) echo 'checked' ?>>
										<input class="radio" id="fri" name="group" type="radio" <?php if($day_of_week == 5) echo 'checked' ?>>
										<!-- <input class="radio" id="nextweek" name="group" type="radio"> -->

										
										<div class="tabs-section">
											<div class="tabs" data-text="<?php echo 'Day of the week '.$day_of_week;?>">
												<label class="tab <?php if($day_of_week == 6 or $day_of_week == 0) echo 'active' ?>" id="weeknd" for="weekends">Weekend</label>
												<label class="tab <?php if($day_of_week == 1) echo 'active' ?>" id="one-tab" for="mon">Monday</label>
												<label class="tab <?php if($day_of_week == 2) echo 'active' ?>" id="two-tab" for="tue">Tuesday</label>
												<label class="tab <?php if($day_of_week == 3) echo 'active' ?>" id="three-tab" for="wed">Wednesday</label>
												<label class="tab <?php if($day_of_week == 4) echo 'active' ?>" id="four-tab" for="thrus">Thursday</label>
												<label class="tab <?php if($day_of_week == 5) echo 'active' ?>" id="five-tab" for="fri">Friday</label>
												<!-- <label class="tab" id="nextweekorder" for="nextweek">Next Week</label> -->
											</div>
										</div>

									 	<div id="panels" class="panels">
					                        <div id="Monday" class="row product-list m-auto panel mt-3">
												<!-- <div id="product-04W7PPoomTolZTxdgpVI" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Almost Burrito Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheese, and a lob of guacamole. There's also the option of adding herbed chicken.
												                <br> 
												                Squeeze in that wedge of lime, mix it all and gobble! The elements are all dressed up individually, so no separate dressing with this bowl.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Veg" src="assets/images/almost-burrito-bowl-veg-1.jpg" alt="Almost Burrito Bowl - Veg" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Veg" src="assets/images/almost-burrito-bowl-veg-2.jpg" alt="Almost Burrito Bowl - Veg"  />
												            </div>
            									            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Chicken" src="assets/images/almost-burrito-bowl-chicken-1.jpg" alt="Almost Burrito Bowl - Chicken" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Chicken" src="assets/images/almost-burrito-bowl-chicken-2.jpg" alt="Almost Burrito Bowl - Chicken"  />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4 ">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Almost Burrito Bowl - Veg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheddar. Comes with a lob of guacamole. Squeeze in that wedge of lime, mix it all up and gobble! The elements are all dressed up individually, so there isnt one given separately with this bowl.",
												                    "title": "Almost Burrito Bowl - Veg",
												                    "product_id": "04W7PPoomTolZTxdgpVI",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "04W7PPoomTolZTxdgpVI-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/almost-burrito-bowl-veg-1"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block btn-disabled"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Almost Burrito Bowl - Chicken</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹320</div>
												            		<div class="product-price discount-price h1 mb-0">₹350</div>	
											            		</div>											           
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheddar and herbed chicken on the side. Comes with a lob of guacamole. Squeeze in that wedge of lime, mix it all up and gobble!The elements are all dressed up individually, so there isnt one given separately with this bowl.",
												                    "title": "Almost Burrito Bowl - Chicken",
												                    "product_id": "kQnL29KfLMFrrhLQC6M3",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "kQnL29KfLMFrrhLQC6M3-bowl",
												                      "mrp": 350,
												                      "sale_price": 320,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/almost-burrito-bowl-chicken-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block btn-disabled"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-iAZQBNDAObu4phKqFeiO" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Thai Brown Rice Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Thai grilled paneer / tofu / chicken, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Thai Brown Rice Bowl" src="assets/images/Thai-Bowl-Paneer_800.jpg" alt="Thai Brown Rice Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Thai Brown Rice Bowl - Chicken" src="assets/images/Thai-Bowl-Chicken_800.jpg" alt="Thai Brown Rice Bowl - Chicken" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4  mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Tofu</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>											           
								            		 		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled tofu, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Tofu",
												                    "product_id": "EIAHVzsPLkUY6yrNGjOj",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "EIAHVzsPLkUY6yrNGjOj-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Paneer</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>											           
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled paneer, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Paneer",
												                    "product_id": "iAZQBNDAObu4phKqFeiO",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "iAZQBNDAObu4phKqFeiO-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Chicken</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>											           
										            		</div>
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled chicken with greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Chicken",
												                    "product_id": "iy0sD3rmOe9CB3extiE7",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "iy0sD3rmOe9CB3extiE7-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>  -->

												<!-- <div id="product-mbggbxvc02aF3qbekNp9" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Chilli Pineapple Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Pineapple chunks add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish and carrots. Flax seeds for crunch. Choose between the veg/vegan option of brown chickpeas (kala chana) or delicious prawns.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-veg.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-prawns.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-veg-2.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-prawns-2.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Chilli Pineapple Barley Bowl - Veg</div>
												            	<div class="product-price h1 mb-0">₹270</div>
										            		</div>												            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Pineapple chunks add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish, carrots and brown chickpeas (kala chana). Flax seeds for crunch.",
												                    "title": "Chilli Pineapple Barley Bowl - Veg",
												                    "product_id": "mgILawWlIXQ8inejpZy8",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "mgILawWlIXQ8inejpZy8-bowl",
												                      "mrp": 270,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/chilli-pineapple-veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Chilli Pineapple Barley Bowl - Prawns</div>
												            	<div class="product-price h1 mb-0">₹320</div>
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Pineapple chunks and prawns add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish and carrots. Flax seeds for crunch.",
												                    "title": "Chilli Pineapple Barley Bowl - Prawns",
												                    "product_id": "Pr8J4eIEwFfKX3ZQ6gC8",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "Pr8J4eIEwFfKX3ZQ6gC8-bowl",
												                      "mrp": 320,
												                      "sale_price": 320,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/chilli-pineapple-prawns.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

 												<!-- <div id="product-QexP4xy4W2cMx4zORNEi" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Quinoa and Nuts Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. A couple of soft boiled eggs to up your protein intake for the day.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Veg" src="assets/images/QNB-Veg_800.jpg" alt="Quinoa and Nuts Bowl - Veg" />
												            </div>
											            	<div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Egg" src="assets/images/QNB-Chicken_800.jpg" alt="Quinoa and Nuts Bowl - Egg"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Egg" src="assets/images/QNB.jpg" alt="Quinoa and Nuts Bowl - Egg" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Quinoa and Nuts Bowl - Veg</div>
												            	<div class="product-price h1 mb-0">₹240</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta.",
												                    "title": "Quinoa and Nuts Bowl - Veg",
												                    "product_id": "QexP4xy4W2cMx4zORNEi",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "QexP4xy4W2cMx4zORNEi-bowl",
												                      "mrp": 240,
												                      "sale_price": 240,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Veg_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
											        	<div class="product-meta d-flex mt-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Quinoa and Nuts Bowl - Egg</div>
												            	<div class="product-price h1  mb-0">₹260</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. A couple of soft boiled eggs to up your protein intake for the day.",
												                    "title": "Quinoa and Nuts Bowl - Egg",
												                    "product_id": "zhsxgRGAMaIbia75SQJr",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "zhsxgRGAMaIbia75SQJr-bowl",
												                      "mrp": 260,
												                      "sale_price": 260,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<div id="product-1CG6P1slxnr9TSNnPzvZ" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger4 my-6">
												    <div class="product-wrapper cardfour">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Orange Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">The odd nugget of fresh orange in a bowl of barley, greens, baby corn, beans, carrots and coloured peppers with spiced paneer / tofu / chicken will make you fall in love with this one. An orange mustard ginger dressing adds a slight pungent note. Toasted flax seeds to up the crunch. Tastes best slightly chilled.
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Veg.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Chicken.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Veg-2.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Chicken-2.jpg" alt="Orange Barley Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4 ">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Tofu</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide"
												                data-product_data='{
												                    "description": "The odd nugget of fresh orange in a bowl of barley, greens, baby corn, beans, carrots and coloured peppers with spiced tofu will make you fall in love with this one. An orange mustard ginger dressing adds a slight pungent note. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl - Tofu",
												                    "product_id": "1CG6P1slxnr9TSNnPzvZ",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "1CG6P1slxnr9TSNnPzvZ-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
								        				<div class="product-meta d-flex mt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Paneer</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>										
											            	</div>
												            <div class="react-add-to-cart-container btn-hide"
												                data-product_data='{
												                    "description": "The odd nugget of fresh orange in a bowl of barley, greens, baby corn, beans, carrots and coloured peppers with spiced paneer will make you fall in love with this one. An orange mustard ginger dressing adds a slight pungent note. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl - Paneer",
												                    "product_id": "V2hxjWQXafuB8dq0unxy",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "V2hxjWQXafuB8dq0unxy-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Chicken</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "The odd nugget of fresh orange in a bowl of barley, greens, baby corn, beans, carrots and coloured peppers with roast chicken will make you fall in love with this one. An orange mustard ginger dressing adds a slight pungent note. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl - Chicken",
												                    "product_id": "8FVGmVx4JjQZRUsxtYrL",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "8FVGmVx4JjQZRUsxtYrL-bowl",
												                      "mrp": 290,
												                      "sale_price": 330,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> 

												<!-- <div id="product-o8DaHCRxfYBIJQ5W7kCB" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Soba Noodle Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Buckwheat noodles, greens, roasted vegetables and sweet-spiced tofu/ paneer or roast chicken. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Soba Noodle Bowl" src="assets/images/Soba-Noodle_Bowl.jpg" alt="Soba Noodle Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Soba Noodle Bowl" src="assets/images/Soba-Noodle-Bowl-2.jpg" alt="Soba Noodle Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Paneer</div>
												            	<div class="product-price h1 mb-0">₹260</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and sweet-spiced paneer. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Paneer",
												                    "product_id": "3GukcZQD4emxBqFI270J",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "3GukcZQD4emxBqFI270J-bowl",
												                      "mrp": 260,
												                      "sale_price": 260,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Tofu</div>
												            	<div class="product-price h1 mb-0">₹260</div>
										            		</div>												            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and sweet-spiced tofu. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Tofu",
												                    "product_id": "o8DaHCRxfYBIJQ5W7kCB",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "o8DaHCRxfYBIJQ5W7kCB-bowl",
												                      "mrp": 260,
												                      "sale_price": 260,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹280</div>
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and roasted chicken. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Chicken",
												                    "product_id": "uvCtO1TX0gdxL449TYxg",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "uvCtO1TX0gdxL449TYxg-bowl",
												                      "mrp": 280,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<div id="product-w9CiPdw0MzpGfKkQsKqJ" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Cracked Wheat & Falafel Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">
																	A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and fresh herbs. Falafel and roasted eggplant with a red pepper dip**. Olives, pomegranate and feta to complete the middle eastern vibe! You could also add herbed chicken.
																	<br>
																	*Salad comes with dressing mixed in.
																	<br>
																	**Dip is not the dressing.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Cracked Wheat & Falafel Bowl" src="assets/images/CWF-Bowl-Veg.jpg" alt="Cracked Wheat & Falafel Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Cracked Wheat & Falafel Bowl" src="assets/images/CWF-Bowl-Chicken.jpg" alt="Cracked Wheat & Falafel Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Cracked Wheat & Falafel Bowl - Veg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
										            		</div>													            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and fresh herbs. Falafel and roasted eggplant with a red pepper dip**. Olives, pomegranate and feta to complete the middle eastern vibe!",
												                    "title": "Cracked Wheat & Falafel Bowl - Veg",
												                    "product_id": "w9CiPdw0MzpGfKkQsKqJ",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "w9CiPdw0MzpGfKkQsKqJ-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/CWF-Bowl-Veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Cracked Wheat & Falafel Bowl - Chicken</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹320</div>
												            		<div class="product-price discount-price h1 mb-0">₹350</div>	
											            		</div>
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and fresh herbs. Falafel and roasted eggplant with a red pepper dip**. Herbed chicken is an added bonus. Olives, pomegranate and feta to complete the middle eastern vibe! *Salad comes with dressing mixed in.**Dip is not the dressing.",
												                    "title": "Cracked Wheat & Falafel Bowl - Chicken",
												                    "product_id": "OMXhZUrvVWwCsLKNDlFK",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "OMXhZUrvVWwCsLKNDlFK-bowl",
												                      "mrp": 350,
												                      "sale_price": 320,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/CWF-Bowl-Chicken.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> 

												<!-- <div id="product-uLG6xoTOYkcnpjxKoTXI" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Rice Noodle Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Soft rice noodles, crunchy cucumber, carrots, bell peppers, red cabbage, sweet-sour pineapple chunks and paneer / prawns. Mixed in a tangy, zingy onion-chilli dressing. This one's as colourful as they get, and truly lit!</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Paneer Bowl" src="assets/images/RNB-Veg-1.jpg" alt="Rice Noodle Paneer Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Prawns Bowl" src="assets/images/RNB-Prawns-2.jpg" alt="Rice Noodle Prawns Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Bowl" src="assets/images/RNB-2.jpg" alt="Rice Noodle Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Rice Noodle Bowl - Paneer</div>
												            	<div class="product-price h1 mb-0">₹240</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Sweet and chilly paneer with rice noodles and asorted vegetables. An equally flavourful dressing and surprise chunks of fruit give this bowl a very tropical vibe, topped off with ssome roasted cashews.",
												                    "title": "Rice Noodle Paneer Bowl",
												                    "product_id": "uLG6xoTOYkcnpjxKoTXI",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "uLG6xoTOYkcnpjxKoTXI-bowl",
												                      "mrp": 240,
												                      "sale_price": 240,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Rice-Noodle-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Rice Noodle Bowl - Prawns</div>
												            	<div class="product-price h1 mb-0">₹280</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Sweet and chilly shrimps with rice noodles and assorted vegetables. An equally flavourful dressing and surprise chunks of fruit give this bowl a very tropical vibe, topped off with some roasted cashews.",
												                    "title": "Rice Noodle Shrimp Bowl",
												                    "product_id": "yzwTvwigXncRLBNki4M9",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "yzwTvwigXncRLBNki4M9-bowl",
												                      "mrp": 280,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Rice-Noodle-Shrimp_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-pbGEFxvc02aF3qbekNp9" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Pear Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. The vegetarian bowl comes with boiled mung beans (also vegan friendly) and the non vegetarian bowl comes with chicken..</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Pear Barley Bowl" src="assets/images/Pear-Barley-2.jpg" alt="Pear Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Pear Barley Bowl" src="assets/images/Pear-Barley-2.jpg" alt="Pear Barley Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Pear Barley Bowl - Mung Beans</div>
												            	<div class="product-price h1  mb-0">₹230</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. The vegetarian bowl comes with boiled mung beans (also vegan friendly).",
												                    "title": "Pear Barley Bowl - Mung Beans",
												                    "product_id": "pbGEFxvc02aF3qbekNp9",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "pbGEFxvc02aF3qbekNp9-bowl",
												                      "mrp": 230,
												                      "sale_price": 230,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Pear-Barley-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Pear Barley Bowl - Chicken</div>
												            	<div class="product-price h1  mb-0">₹280</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. Comes with roast chicken.",
												                    "title": "Pear Barley Bowl - Chicken",
												                    "product_id": "cMjfFw1BSYxNwGZYRpeC",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "cMjfFw1BSYxNwGZYRpeC-bowl",
												                      "mrp": 280,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Pear-Barley-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-UKvF28KghJT75RDN1CPk" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Mango Quinoa Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" src="assets/images/MQB-Veg.jpg" alt="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Chicken)" src="assets/images/MQB-Chicken.jpg" alt="Mango Quinoa Bowl (With Chicken)" />
												            </div>
											            	<div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" src="assets/images/MQB-Veg-2.jpg" alt="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Chicken)" src="assets/images/MQB-Chicken-2.jpg" alt="Mango Quinoa Bowl (With Chicken)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Quinoa Bowl (With Red Kidney Beans (Rajma))</div>
												            	<div class="product-price h1 mb-0">₹270</div>
										            		</div>														            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).",
												                    "title": "Mango Quinoa Bowl (With Red Kidney Beans (Rajma))",
												                    "product_id": "UKvF28KghJT75RDN1CPk",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "UKvF28KghJT75RDN1CPk-bowl",
												                      "mrp": 270,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MQB-Veg.jpg",
												                      "assets/images/MQB-Veg-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
											        	<div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Quinoa Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>														            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).",
												                    "title": "Mango Quinoa Bowl (With Chicken)",
												                    "product_id": "kprSd5b7lgiK0FkeWOPW",
												                    "mark_type": " Non Veg",
												                    "default": {
												                      "id": "kprSd5b7lgiK0FkeWOPW-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                    "assets/images/MQB-Chicken.jpg",
												                      "assets/images/MQB-Chicken-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

											 	<!-- <div id="product-qEjBZmgcv14tAuCCkvmB" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Mango Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">The Mango Barley Bowl comes with barley, mix of lettuce and lightly bitter amaranth leaves, red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside the mint mustard dressing.
												                <br>The brown chickpeas (kaala chana) add a beautiful earthiness to balance the sweetness of the mangoes (alphonso). Flax seeds for crunch.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Brown Chickpeas)" src="assets/images/MBB-Veg.jpg" alt="Mango Barley Bowl (Brown Chickpeas)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Prawns)" src="assets/images/MBB-Prawns.jpg" alt="Mango Barley Bowl (Prawns)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Brown Chickpeas)" src="assets/images/Mango-Barley-Veg.jpg" alt="Mango Barley Bowl (Brown Chickpeas)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Prawns)" src="assets/images/Mango-Barley-Prawns.jpg" alt="Mango Barley Bowl (Prawns)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Barley Bowl - Brown Chickpeas</div>
												            	<div class="product-price h1 mb-0">₹260</div>
										            		</div>													           
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mix of lettuce and lightly bitter amaranth leaves (tambdi bhaji), red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside mango (alphonso) chunks and the mint mustard dressing. Flax seeds for crunch.\r\n    Choose between the veg/ vegan bowl that comes with brown chickpeas (kaala chana).",
												                    "title": "Mango Barley Bowl (Brown Chickpeas)",
												                    "product_id": "qEjBZmgcv14tAuCCkvmB",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "qEjBZmgcv14tAuCCkvmB-bowl",
												                      "mrp": 260,
												                      "sale_price": 260,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MBB-Veg.jpg",
												                      "assets/images/Mango-Barley-Veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Barley Bowl - Prawns</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>													            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mix of lettuce and lightly bitter amaranth leaves (tambdi bhaji), red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside mango (alphonso) chunks and the mint mustard dressing. Flax seeds for crunch.\r\n    The non veg bowl comes with prawns.",
												                    "title": "Mango Barley Bowl (Prawns)",
												                    "product_id": "vXoakmxssdJG1M8DRrMF",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "vXoakmxssdJG1M8DRrMF-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MBB-Prawns.jpg",
												                      "assets/images/Mango-Barley-Prawns.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/not-available.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
												</div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/missed.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black"> We go to great lengths to work with fresh and quality ingredients. Each day's bowls are made from scratch and in small batches. They sell out often, so we request that you order a day prior.
													</p>
												</div> -->
												<!-- <div class="coming-soon"> Coming Soon </div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/sold-out.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black"> We go to great lengths to work with fresh and quality ingredients. Each day's bowls are made from scratch and in small batches. They sell out often, so we request that you order a day prior.
													</p>
												</div> -->
				                            </div>
				                            <div id="Tuesday" class="row product-list m-auto panel mt-3">
												<!-- <div id="product-iAZQBNDAObu4phKqFeiO" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Thai Brown Rice Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Thai grilled paneer / tofu / chicken, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Thai Brown Rice Bowl" src="assets/images/Thai-Bowl-Paneer_800.jpg" alt="Thai Brown Rice Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Thai Brown Rice Bowl - Chicken" src="assets/images/Thai-Bowl-Chicken_800.jpg" alt="Thai Brown Rice Bowl - Chicken" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Tofu</div>
																<div class="price-row d-flex">
																	<div class="product-price h1 mb-0">₹270</div>
																	<div class="product-price discount-price h1 mb-0">₹310</div>	
																</div>
															</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled tofu, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Tofu",
												                    "product_id": "EIAHVzsPLkUY6yrNGjOj",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "EIAHVzsPLkUY6yrNGjOj-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "tuesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Paneer</div>
																<div class="price-row d-flex">
																	<div class="product-price h1 mb-0">₹290</div>
																	<div class="product-price discount-price h1 mb-0">₹330</div>	
																</div>	
									            			</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled paneer, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Paneer",
												                    "product_id": "iAZQBNDAObu4phKqFeiO",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "iAZQBNDAObu4phKqFeiO-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "tuesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Chicken</div>
																<div class="price-row d-flex">
																	<div class="product-price h1 mb-0">₹290</div>
																	<div class="product-price discount-price h1 mb-0">₹330</div>	
																</div>	
										            		</div>												            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled chicken with greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Chicken",
												                    "product_id": "iy0sD3rmOe9CB3extiE7",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "iy0sD3rmOe9CB3extiE7-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "tuesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>  -->

												<!-- <div id="product-04W7PPoomTolZTxdgpVI" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Almost Burrito Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheese, and a lob of guacamole. There's also the option of adding herbed chicken.
												                <br> 
												                Squeeze in that wedge of lime, mix it all and gobble! The elements are all dressed up individually, so no separate dressing with this bowl.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Veg" src="assets/images/almost-burrito-bowl-veg-1.jpg" alt="Almost Burrito Bowl - Veg" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Veg" src="assets/images/almost-burrito-bowl-veg-2.jpg" alt="Almost Burrito Bowl - Veg"  />
												            </div>
            									            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Chicken" src="assets/images/almost-burrito-bowl-chicken-1.jpg" alt="Almost Burrito Bowl - Chicken" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Chicken" src="assets/images/almost-burrito-bowl-chicken-2.jpg" alt="Almost Burrito Bowl - Chicken"  />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4 ">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Almost Burrito Bowl - Veg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheddar. Comes with a lob of guacamole. Squeeze in that wedge of lime, mix it all up and gobble! The elements are all dressed up individually, so there isnt one given separately with this bowl.",
												                    "title": "Almost Burrito Bowl - Veg",
												                    "product_id": "04W7PPoomTolZTxdgpVI",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "04W7PPoomTolZTxdgpVI-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/almost-burrito-bowl-veg-1"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "tuesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block btn-disabled"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Almost Burrito Bowl - Chicken</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹320</div>
												            		<div class="product-price discount-price h1 mb-0">₹350</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheddar and herbed chicken on the side. Comes with a lob of guacamole. Squeeze in that wedge of lime, mix it all up and gobble!The elements are all dressed up individually, so there isnt one given separately with this bowl.",
												                    "title": "Almost Burrito Bowl - Chicken",
												                    "product_id": "kQnL29KfLMFrrhLQC6M3",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "kQnL29KfLMFrrhLQC6M3-bowl",
												                      "mrp": 350,
												                      "sale_price": 320,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/almost-burrito-bowl-chicken-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "tuesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block btn-disabled"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-mbggbxvc02aF3qbekNp9" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Chilli Pineapple Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Pineapple chunks add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish and carrots. Flax seeds for crunch. Choose between the veg/vegan option of brown chickpeas (kala chana) or delicious prawns.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-veg.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-prawns.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-veg-2.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-prawns-2.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Chilli Pineapple Barley Bowl - Veg</div>
												            	<div class="product-price h1 mb-0">₹270</div>
										            		</div>												            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Pineapple chunks add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish, carrots and brown chickpeas (kala chana). Flax seeds for crunch.",
												                    "title": "Chilli Pineapple Barley Bowl - Veg",
												                    "product_id": "mgILawWlIXQ8inejpZy8",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "mgILawWlIXQ8inejpZy8-bowl",
												                      "mrp": 270,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/chilli-pineapple-veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Chilli Pineapple Barley Bowl - Prawns</div>
												            	<div class="product-price h1 mb-0">₹320</div>
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Pineapple chunks and prawns add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish and carrots. Flax seeds for crunch.",
												                    "title": "Chilli Pineapple Barley Bowl - Prawns",
												                    "product_id": "Pr8J4eIEwFfKX3ZQ6gC8",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "Pr8J4eIEwFfKX3ZQ6gC8-bowl",
												                      "mrp": 320,
												                      "sale_price": 320,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/chilli-pineapple-prawns.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

 												<!-- <div id="product-QexP4xy4W2cMx4zORNEi" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Quinoa and Nuts Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. A couple of soft boiled eggs to up your protein intake for the day.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Veg" src="assets/images/QNB-Veg_800.jpg" alt="Quinoa and Nuts Bowl - Veg" />
												            </div>
											            	<div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Egg" src="assets/images/QNB-Chicken_800.jpg" alt="Quinoa and Nuts Bowl - Egg"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Egg" src="assets/images/QNB.jpg" alt="Quinoa and Nuts Bowl - Egg" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Quinoa and Nuts Bowl - Veg</div>
												            	<div class="product-price h1 mb-0">₹240</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta.",
												                    "title": "Quinoa and Nuts Bowl - Veg",
												                    "product_id": "QexP4xy4W2cMx4zORNEi",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "QexP4xy4W2cMx4zORNEi-bowl",
												                      "mrp": 240,
												                      "sale_price": 240,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Veg_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
											        	<div class="product-meta d-flex mt-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Quinoa and Nuts Bowl - Egg</div>
												            	<div class="product-price h1  mb-0">₹260</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. A couple of soft boiled eggs to up your protein intake for the day.",
												                    "title": "Quinoa and Nuts Bowl - Egg",
												                    "product_id": "zhsxgRGAMaIbia75SQJr",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "zhsxgRGAMaIbia75SQJr-bowl",
												                      "mrp": 260,
												                      "sale_price": 260,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<div id="product-w9CiPdw0MzpGfKkQsKqJ" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Cracked Wheat & Falafel Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">
																	A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and fresh herbs. Falafel and roasted eggplant with a red pepper dip**. Olives, pomegranate and feta to complete the middle eastern vibe! You could also add herbed chicken.
																	<br>
																	*Salad comes with dressing mixed in.
																	<br>
																	**Dip is not the dressing.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Cracked Wheat & Falafel Bowl" src="assets/images/CWF-Bowl-Veg.jpg" alt="Cracked Wheat & Falafel Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Cracked Wheat & Falafel Bowl" src="assets/images/CWF-Bowl-Chicken.jpg" alt="Cracked Wheat & Falafel Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Cracked Wheat & Falafel Bowl - Veg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
										            		</div>													            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and fresh herbs. Falafel and roasted eggplant with a red pepper dip**. Olives, pomegranate and feta to complete the middle eastern vibe!",
												                    "title": "Cracked Wheat & Falafel Bowl - Veg",
												                    "product_id": "w9CiPdw0MzpGfKkQsKqJ",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "w9CiPdw0MzpGfKkQsKqJ-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/CWF-Bowl-Veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "tuesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Cracked Wheat & Falafel Bowl - Chicken</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹320</div>
												            		<div class="product-price discount-price h1 mb-0">₹350</div>	
											            		</div>
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and fresh herbs. Falafel and roasted eggplant with a red pepper dip**. Herbed chicken is an added bonus. Olives, pomegranate and feta to complete the middle eastern vibe! *Salad comes with dressing mixed in. **Dip is not the dressing.",
												                    "title": "Cracked Wheat & Falafel Bowl - Chicken",
												                    "product_id": "OMXhZUrvVWwCsLKNDlFK",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "OMXhZUrvVWwCsLKNDlFK-bowl",
												                      "mrp": 350,
												                      "sale_price": 320,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/CWF-Bowl-Chicken.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "tuesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> 

												<div id="product-1CG6P1slxnr9TSNnPzvZ" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger4 my-6">
												    <div class="product-wrapper cardfour">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Orange Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">The odd nugget of fresh orange in a bowl of barley, greens, baby corn, beans, carrots and coloured peppers with spiced paneer / tofu / chicken will make you fall in love with this one. An orange mustard ginger dressing adds a slight pungent note. Toasted flax seeds to up the crunch. Tastes best slightly chilled.
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Veg.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Chicken.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Veg-2.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Chicken-2.jpg" alt="Orange Barley Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4 ">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Tofu</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide"
												                data-product_data='{
												                    "description": "The odd nugget of fresh orange in a bowl of barley, greens, baby corn, beans, carrots and coloured peppers with spiced tofu will make you fall in love with this one. An orange mustard ginger dressing adds a slight pungent note. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl - Tofu",
												                    "product_id": "1CG6P1slxnr9TSNnPzvZ",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "1CG6P1slxnr9TSNnPzvZ-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "tuesday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
								        				<div class="product-meta d-flex mt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Paneer</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>										
											            	</div>
												            <div class="react-add-to-cart-container btn-hide"
												                data-product_data='{
												                    "description": "The odd nugget of fresh orange in a bowl of barley, greens, baby corn, beans, carrots and coloured peppers with spiced paneer will make you fall in love with this one. An orange mustard ginger dressing adds a slight pungent note. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl - Paneer",
												                    "product_id": "V2hxjWQXafuB8dq0unxy",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "V2hxjWQXafuB8dq0unxy-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "tuesday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Chicken</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "The odd nugget of fresh orange in a bowl of barley, greens, baby corn, beans, carrots and coloured peppers with roast chicken will make you fall in love with this one. An orange mustard ginger dressing adds a slight pungent note. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl - Chicken",
												                    "product_id": "8FVGmVx4JjQZRUsxtYrL",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "8FVGmVx4JjQZRUsxtYrL-bowl",
												                      "mrp": 290,
												                      "sale_price": 330,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "tuesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> 

												<!-- <div id="product-o8DaHCRxfYBIJQ5W7kCB" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Soba Noodle Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Buckwheat noodles, greens, roasted vegetables and sweet-spiced tofu/ paneer or roast chicken. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Soba Noodle Bowl" src="assets/images/Soba-Noodle_Bowl.jpg" alt="Soba Noodle Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Soba Noodle Bowl" src="assets/images/Soba-Noodle-Bowl-2.jpg" alt="Soba Noodle Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Paneer</div>
												            	<div class="product-price h1 mb-0">₹260</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and sweet-spiced paneer. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Paneer",
												                    "product_id": "3GukcZQD4emxBqFI270J",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "3GukcZQD4emxBqFI270J-bowl",
												                      "mrp": 260,
												                      "sale_price": 260,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Tofu</div>
												            	<div class="product-price h1 mb-0">₹260</div>
										            		</div>												            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and sweet-spiced tofu. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Tofu",
												                    "product_id": "o8DaHCRxfYBIJQ5W7kCB",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "o8DaHCRxfYBIJQ5W7kCB-bowl",
												                      "mrp": 260,
												                      "sale_price": 260,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹280</div>
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and roasted chicken. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Chicken",
												                    "product_id": "uvCtO1TX0gdxL449TYxg",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "uvCtO1TX0gdxL449TYxg-bowl",
												                      "mrp": 280,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-uLG6xoTOYkcnpjxKoTXI" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Rice Noodle Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Soft rice noodles, crunchy cucumber, carrots, bell peppers, red cabbage, sweet-sour pineapple chunks and paneer / prawns. Mixed in a tangy, zingy onion-chilli dressing. This one's as colourful as they get, and truly lit!</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Paneer Bowl" src="assets/images/RNB-Veg-1.jpg" alt="Rice Noodle Paneer Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Prawns Bowl" src="assets/images/RNB-Prawns-2.jpg" alt="Rice Noodle Prawns Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Bowl" src="assets/images/RNB-2.jpg" alt="Rice Noodle Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Rice Noodle Bowl - Paneer</div>
												            	<div class="product-price h1 mb-0">₹240</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Sweet and chilly paneer with rice noodles and asorted vegetables. An equally flavourful dressing and surprise chunks of fruit give this bowl a very tropical vibe, topped off with ssome roasted cashews.",
												                    "title": "Rice Noodle Paneer Bowl",
												                    "product_id": "uLG6xoTOYkcnpjxKoTXI",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "uLG6xoTOYkcnpjxKoTXI-bowl",
												                      "mrp": 240,
												                      "sale_price": 240,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Rice-Noodle-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Rice Noodle Bowl - Prawns</div>
												            	<div class="product-price h1 mb-0">₹280</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Sweet and chilly shrimps with rice noodles and assorted vegetables. An equally flavourful dressing and surprise chunks of fruit give this bowl a very tropical vibe, topped off with some roasted cashews.",
												                    "title": "Rice Noodle Shrimp Bowl",
												                    "product_id": "yzwTvwigXncRLBNki4M9",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "yzwTvwigXncRLBNki4M9-bowl",
												                      "mrp": 280,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Rice-Noodle-Shrimp_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-pbGEFxvc02aF3qbekNp9" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Pear Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. The vegetarian bowl comes with boiled mung beans (also vegan friendly) and the non vegetarian bowl comes with chicken..</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Pear Barley Bowl" src="assets/images/Pear-Barley-2.jpg" alt="Pear Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Pear Barley Bowl" src="assets/images/Pear-Barley-2.jpg" alt="Pear Barley Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Pear Barley Bowl - Mung Beans</div>
												            	<div class="product-price h1  mb-0">₹230</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. The vegetarian bowl comes with boiled mung beans (also vegan friendly).",
												                    "title": "Pear Barley Bowl - Mung Beans",
												                    "product_id": "pbGEFxvc02aF3qbekNp9",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "pbGEFxvc02aF3qbekNp9-bowl",
												                      "mrp": 230,
												                      "sale_price": 230,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Pear-Barley-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Pear Barley Bowl - Chicken</div>
												            	<div class="product-price h1  mb-0">₹280</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. Comes with roast chicken.",
												                    "title": "Pear Barley Bowl - Chicken",
												                    "product_id": "cMjfFw1BSYxNwGZYRpeC",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "cMjfFw1BSYxNwGZYRpeC-bowl",
												                      "mrp": 280,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Pear-Barley-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-UKvF28KghJT75RDN1CPk" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Mango Quinoa Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" src="assets/images/MQB-Veg.jpg" alt="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Chicken)" src="assets/images/MQB-Chicken.jpg" alt="Mango Quinoa Bowl (With Chicken)" />
												            </div>
											            	<div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" src="assets/images/MQB-Veg-2.jpg" alt="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Chicken)" src="assets/images/MQB-Chicken-2.jpg" alt="Mango Quinoa Bowl (With Chicken)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Quinoa Bowl (With Red Kidney Beans (Rajma))</div>
												            	<div class="product-price h1 mb-0">₹270</div>
										            		</div>														            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).",
												                    "title": "Mango Quinoa Bowl (With Red Kidney Beans (Rajma))",
												                    "product_id": "UKvF28KghJT75RDN1CPk",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "UKvF28KghJT75RDN1CPk-bowl",
												                      "mrp": 270,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MQB-Veg.jpg",
												                      "assets/images/MQB-Veg-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
											        	<div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Quinoa Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>														            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).",
												                    "title": "Mango Quinoa Bowl (With Chicken)",
												                    "product_id": "kprSd5b7lgiK0FkeWOPW",
												                    "mark_type": " Non Veg",
												                    "default": {
												                      "id": "kprSd5b7lgiK0FkeWOPW-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                    "assets/images/MQB-Chicken.jpg",
												                      "assets/images/MQB-Chicken-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

											 	<!-- <div id="product-qEjBZmgcv14tAuCCkvmB" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Mango Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">The Mango Barley Bowl comes with barley, mix of lettuce and lightly bitter amaranth leaves, red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside the mint mustard dressing.
												                <br>The brown chickpeas (kaala chana) add a beautiful earthiness to balance the sweetness of the mangoes (alphonso). Flax seeds for crunch.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Brown Chickpeas)" src="assets/images/MBB-Veg.jpg" alt="Mango Barley Bowl (Brown Chickpeas)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Prawns)" src="assets/images/MBB-Prawns.jpg" alt="Mango Barley Bowl (Prawns)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Brown Chickpeas)" src="assets/images/Mango-Barley-Veg.jpg" alt="Mango Barley Bowl (Brown Chickpeas)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Prawns)" src="assets/images/Mango-Barley-Prawns.jpg" alt="Mango Barley Bowl (Prawns)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Barley Bowl - Brown Chickpeas</div>
												            	<div class="product-price h1 mb-0">₹260</div>
										            		</div>													           
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mix of lettuce and lightly bitter amaranth leaves (tambdi bhaji), red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside mango (alphonso) chunks and the mint mustard dressing. Flax seeds for crunch.\r\n    Choose between the veg/ vegan bowl that comes with brown chickpeas (kaala chana).",
												                    "title": "Mango Barley Bowl (Brown Chickpeas)",
												                    "product_id": "qEjBZmgcv14tAuCCkvmB",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "qEjBZmgcv14tAuCCkvmB-bowl",
												                      "mrp": 260,
												                      "sale_price": 260,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MBB-Veg.jpg",
												                      "assets/images/Mango-Barley-Veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Barley Bowl - Prawns</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>													            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mix of lettuce and lightly bitter amaranth leaves (tambdi bhaji), red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside mango (alphonso) chunks and the mint mustard dressing. Flax seeds for crunch.\r\n    The non veg bowl comes with prawns.",
												                    "title": "Mango Barley Bowl (Prawns)",
												                    "product_id": "vXoakmxssdJG1M8DRrMF",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "vXoakmxssdJG1M8DRrMF-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MBB-Prawns.jpg",
												                      "assets/images/Mango-Barley-Prawns.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/not-available.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
												</div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/missed.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black"> We go to great lengths to work with fresh and quality ingredients. Each day's bowls are made from scratch and in small batches. They sell out often, so we request that you order a day prior.
													</p>
												</div> -->
												<!-- <div class="coming-soon"> Coming Soon </div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/sold-out.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black"> We go to great lengths to work with fresh and quality ingredients. Each day's bowls are made from scratch and in small batches. They sell out often, so we request that you order a day prior.
													</p>
												</div> -->
					                        </div>
					                        <div id="Wednesday" class="row product-list m-auto panel">
												<!-- <div id="product-pbGEFxvc02aF3qbekNp9" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Pear Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. The vegetarian bowl comes with boiled mung beans (also vegan friendly) and the non vegetarian bowl comes with chicken.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Pear Barley Bowl" src="assets/images/Pear-Barley-2.jpg" alt="Pear Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Pear Barley Bowl" src="assets/images/Pear-Barley-2.jpg" alt="Pear Barley Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4  mb-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Pear Barley Bowl - Veg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>											           
									            		 	</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. The vegetarian bowl comes with boiled mung beans (also vegan friendly).",
												                    "title": "Pear Barley Bowl - Mung Beans",
												                    "product_id": "pbGEFxvc02aF3qbekNp9",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "pbGEFxvc02aF3qbekNp9-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Pear-Barley-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Pear Barley Bowl - Chicken</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹310</div>
												            		<div class="product-price discount-price h1 mb-0">₹350</div>	
											            		</div>												        
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. Comes with roast chicken.",
												                    "title": "Pear Barley Bowl - Chicken",
												                    "product_id": "cMjfFw1BSYxNwGZYRpeC",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "cMjfFw1BSYxNwGZYRpeC-bowl",
												                      "mrp": 350,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Pear-Barley-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-o8DaHCRxfYBIJQ5W7kCB" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Soba Noodle Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Buckwheat noodles, greens, roasted vegetables and sweet-spiced tofu/ paneer or roast chicken. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Soba Noodle Bowl" src="assets/images/Soba-Noodle_Bowl.jpg" alt="Soba Noodle Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Soba Noodle Bowl" src="assets/images/Soba-Noodle-Bowl-2.jpg" alt="Soba Noodle Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4  mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Tofu</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹280</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>											            
								            				</div>
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and sweet-spiced tofu. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Tofu",
												                    "product_id": "o8DaHCRxfYBIJQ5W7kCB",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "o8DaHCRxfYBIJQ5W7kCB-bowl",
												                      "mrp": 310,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Paneer</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>		
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and sweet-spiced paneer. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Paneer",
												                    "product_id": "3GukcZQD4emxBqFI270J",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "3GukcZQD4emxBqFI270J-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Chicken</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and roasted chicken. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Chicken",
												                    "product_id": "uvCtO1TX0gdxL449TYxg",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "uvCtO1TX0gdxL449TYxg-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-bqApKRirpEeopN3w9H3J" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6 hide-product">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Quinoa and Nuts Bowl (Chicken)</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Quinoa, mixed leaves, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. You could add a couple of soft boiled eggs to up your protein intake for the day :)</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl (Chicken)" src="assets/images/QNB-Chicken_800.jpg" alt="Quinoa and Nuts Bowl (Chicken)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl (Chicken)" src="assets/images/QNB.jpg" alt="Quinoa and Nuts Bowl (Chicken)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex mt-5">
												            <div class="product-price h1 ft6 mb-0">₹ 280</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed leaves, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. You could add a couple of soft boiled eggs to up your protein intake for the day :)",
												                    "title": "Quinoa and Nuts Bowl (Chicken)",
												                    "product_id": "dummy-product",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "dummy-product-bowl",
												                      "mrp": 280,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>  -->

 												<div id="product-QexP4xy4W2cMx4zORNEi" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Quinoa and Nuts Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. A couple of soft boiled eggs to up your protein intake for the day.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Veg" src="assets/images/QNB-Veg_800.jpg" alt="Quinoa and Nuts Bowl - Veg" />
												            </div>
											            	<div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Egg" src="assets/images/QNB-Chicken_800.jpg" alt="Quinoa and Nuts Bowl - Egg"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Egg" src="assets/images/QNB.jpg" alt="Quinoa and Nuts Bowl - Egg" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Quinoa and Nuts Bowl - Veg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta.",
												                    "title": "Quinoa and Nuts Bowl - Veg",
												                    "product_id": "QexP4xy4W2cMx4zORNEi",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "QexP4xy4W2cMx4zORNEi-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Veg_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
											        	<div class="product-meta d-flex mt-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Quinoa and Nuts Bowl - Egg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. A couple of soft boiled eggs to up your protein intake for the day.",
												                    "title": "Quinoa and Nuts Bowl - Egg",
												                    "product_id": "zhsxgRGAMaIbia75SQJr",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "zhsxgRGAMaIbia75SQJr-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>

												<div id="product-mbggbxvc02aF3qbekNp9" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Chilli Pineapple Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Pineapple chunks add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish and carrots. Flax seeds for crunch. Choose between the veg/vegan option of brown chickpeas (kala chana) or delicious prawns.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-veg.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-prawns.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-veg-2.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-prawns-2.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Chilli Pineapple Barley Bowl - Veg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>	
										            		</div>												            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Pineapple chunks add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish, carrots and brown chickpeas (kala chana). Flax seeds for crunch.",
												                    "title": "Chilli Pineapple Barley Bowl - Veg",
												                    "product_id": "mgILawWlIXQ8inejpZy8",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "mgILawWlIXQ8inejpZy8-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/chilli-pineapple-veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Chilli Pineapple Barley Bowl - Prawns</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹320</div>
												            		<div class="product-price discount-price h1 mb-0">₹350</div>	
											            		</div>	
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Pineapple chunks and prawns add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish and carrots. Flax seeds for crunch.",
												                    "title": "Chilli Pineapple Barley Bowl - Prawns",
												                    "product_id": "Pr8J4eIEwFfKX3ZQ6gC8",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "Pr8J4eIEwFfKX3ZQ6gC8-bowl",
												                      "mrp": 350,
												                      "sale_price": 320,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/chilli-pineapple-prawns.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>

												<div id="product-iAZQBNDAObu4phKqFeiO" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Thai Brown Rice Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Thai grilled paneer / tofu / chicken, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Thai Brown Rice Bowl" src="assets/images/Thai-Bowl-Paneer_800.jpg" alt="Thai Brown Rice Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Thai Brown Rice Bowl - Chicken" src="assets/images/Thai-Bowl-Chicken_800.jpg" alt="Thai Brown Rice Bowl - Chicken" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Tofu</div>
																<div class="price-row d-flex">
																	<div class="product-price h1 mb-0">₹270</div>
																	<div class="product-price discount-price h1 mb-0">₹310</div>	
																</div>
															</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled tofu, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Tofu",
												                    "product_id": "EIAHVzsPLkUY6yrNGjOj",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "EIAHVzsPLkUY6yrNGjOj-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Paneer</div>
																<div class="price-row d-flex">
																	<div class="product-price h1 mb-0">₹290</div>
																	<div class="product-price discount-price h1 mb-0">₹330</div>	
																</div>	
									            			</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled paneer, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Paneer",
												                    "product_id": "iAZQBNDAObu4phKqFeiO",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "iAZQBNDAObu4phKqFeiO-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Chicken</div>
																<div class="price-row d-flex">
																	<div class="product-price h1 mb-0">₹290</div>
																	<div class="product-price discount-price h1 mb-0">₹330</div>	
																</div>	
										            		</div>												            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled chicken with greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Chicken",
												                    "product_id": "iy0sD3rmOe9CB3extiE7",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "iy0sD3rmOe9CB3extiE7-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>

												<div id="product-bqApKRirpEeopN3w9H3J" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6 hide-product">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Quinoa and Nuts Bowl (Chicken)</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Quinoa, mixed leaves, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. You could add a couple of soft boiled eggs to up your protein intake for the day :)</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl (Chicken)" src="assets/images/QNB-Chicken_800.jpg" alt="Quinoa and Nuts Bowl (Chicken)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl (Chicken)" src="assets/images/QNB.jpg" alt="Quinoa and Nuts Bowl (Chicken)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex mt-1">
												            <div class="product-price h1 ft6 mb-0">₹ 280</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed leaves, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. You could add a couple of soft boiled eggs to up your protein intake for the day :)",
												                    "title": "Quinoa and Nuts Bowl (Chicken)",
												                    "product_id": "dummy-product",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "dummy-product-bowl",
												                      "mrp": 280,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "wednesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> 
												<!-- <div id="product-04W7PPoomTolZTxdgpVI" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Almost Burrito Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheese, and a lob of guacamole. There's also the option of adding herbed chicken.
												                <br> 
												                Squeeze in that wedge of lime, mix it all and gobble! The elements are all dressed up individually, so no separate dressing with this bowl.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Veg" src="assets/images/almost-burrito-bowl-veg-1.jpg" alt="Almost Burrito Bowl - Veg" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Veg" src="assets/images/almost-burrito-bowl-veg-2.jpg" alt="Almost Burrito Bowl - Veg"  />
												            </div>
            									            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Chicken" src="assets/images/almost-burrito-bowl-chicken-1.jpg" alt="Almost Burrito Bowl - Chicken" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Chicken" src="assets/images/almost-burrito-bowl-chicken-2.jpg" alt="Almost Burrito Bowl - Chicken"  />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4 ">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Almost Burrito Bowl - Veg</div>
												            	<div class="product-price h1 mb-0">₹300</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheddar. Comes with a lob of guacamole. Squeeze in that wedge of lime, mix it all up and gobble! The elements are all dressed up individually, so there isnt one given separately with this bowl.",
												                    "title": "Almost Burrito Bowl - Veg",
												                    "product_id": "04W7PPoomTolZTxdgpVI",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "04W7PPoomTolZTxdgpVI-bowl",
												                      "mrp": 300,
												                      "sale_price": 300,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/almost-burrito-bowl-veg-1"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "tuesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block btn-disabled"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Almost Burrito Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹330</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheddar and herbed chicken on the side. Comes with a lob of guacamole. Squeeze in that wedge of lime, mix it all up and gobble!The elements are all dressed up individually, so there isnt one given separately with this bowl.",
												                    "title": "Almost Burrito Bowl - Chicken",
												                    "product_id": "kQnL29KfLMFrrhLQC6M3",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "kQnL29KfLMFrrhLQC6M3-bowl",
												                      "mrp": 330,
												                      "sale_price": 330,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/almost-burrito-bowl-chicken-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "tuesday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block btn-disabled"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-1CG6P1slxnr9TSNnPzvZ" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger4 my-6">
												    <div class="product-wrapper cardfour">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Orange Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Barley, mixed greens, baby corn, beans, carrots and coloured peppers with spiced paneer / tofu / chicken and the odd nugget of fresh orange. All mixed in an orange mustard ginger dressing. Toasted flax seeds to up the crunch. Tastes best slightly chilled.
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Veg.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Chicken.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Veg-2.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Chicken-2.jpg" alt="Orange Barley Bowl" />
												            </div>
												        </div>
								        				<div class="product-meta d-flex pt-4 mt-5 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Paneer</div>
												            	<div class="product-price h1 mb-0">₹240</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide"
												                data-product_data='{
												                    "description": "Barley, mixed greens, broccoli, baby corn, beans, carrots and coloured peppers with spiced tofu and the odd nugget of fresh orange. All mixed in an orange mustard ginger dressing. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl (Paneer)",
												                    "product_id": "V2hxjWQXafuB8dq0unxy",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "V2hxjWQXafuB8dq0unxy-bowl",
												                      "mrp": 240,
												                      "sale_price": 240,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex  mt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Tofu</div>
												            	<div class="product-price h1 mb-0">₹240</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide"
												                data-product_data='{
												                    "description": "Barley, mixed greens, broccoli, baby corn, beans, carrots and coloured peppers with spiced tofu and the odd nugget of fresh orange. All mixed in an orange mustard ginger dressing. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl (Tofu)",
												                    "product_id": "1CG6P1slxnr9TSNnPzvZ",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "1CG6P1slxnr9TSNnPzvZ-bowl",
												                      "mrp": 240,
												                      "sale_price": 240,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹270</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mixed greens, broccoli, baby corn, beans, carrots and coloured peppers with spiced chicken and the odd nugget of fresh orange. All mixed in an orange mustard ginger dressing. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl (Chicken)",
												                    "product_id": "8FVGmVx4JjQZRUsxtYrL",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "8FVGmVx4JjQZRUsxtYrL-bowl",
												                      "mrp": 270,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> --> 

												<!-- <div id="product-w9CiPdw0MzpGfKkQsKqJ" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Cracked Wheat & Falafel Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">
												                	A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and fresh herbs. Falafel and roasted eggplant with a red pepper dip**. Olives, pomegranate and feta to complete the middle eastern vibe! You could also add herbed chicken.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Cracked Wheat & Falafel Bowl" src="assets/images/CWF-Bowl-Veg.jpg" alt="Cracked Wheat & Falafel Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Cracked Wheat & Falafel Bowl" src="assets/images/CWF-Bowl-Chicken.jpg" alt="Cracked Wheat & Falafel Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Cracked Wheat & Falafel Bowl - Veg</div>
												            	<div class="product-price h1 mb-0">₹290</div>
										            		</div>													            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "New bowl on the menu! A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and LOTS of fresh herbs. Theres falafel and roasted eggplant. A roasted red pepper dip** on the side. Oh, and olives, pomegranate and feta to complete the middle eastern vibe! *Salad comes with dressing mixed in. **Dip is not the dressing.",
												                    "title": "Cracked Wheat & Falafel Bowl (Veg)",
												                    "product_id": "w9CiPdw0MzpGfKkQsKqJ",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "w9CiPdw0MzpGfKkQsKqJ-bowl",
												                      "mrp": 290,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/CWF-Bowl-Veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Cracked Wheat & Falafel Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "New bowl on the menu! A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and LOTS of fresh herbs. There is falafel and roasted eggplant. Herbed chicken is an added bonus. A roasted red pepper dip** on the side. Oh, and olives, pomegranate and feta to complete the middle eastern vibe! *Salad comes with dressing mixed in. **Dip is not the dressing.",
												                    "title": "Cracked Wheat & Falafel Bowl (Chicken)",
												                    "product_id": "OMXhZUrvVWwCsLKNDlFK",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "OMXhZUrvVWwCsLKNDlFK-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/CWF-Bowl-Chicken.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> --> 

												<!-- <div id="product-uLG6xoTOYkcnpjxKoTXI" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Rice Noodle Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Soft rice noodles, crunchy cucumber, carrots, bell peppers, red cabbage, sweet-sour pineapple chunks and paneer / prawns. Mixed in a tangy, zingy onion-chilli dressing. This one's as colourful as they get, and truly lit!</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Paneer Bowl" src="assets/images/RNB-Veg-1.jpg" alt="Rice Noodle Paneer Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Prawns Bowl" src="assets/images/RNB-Prawns-2.jpg" alt="Rice Noodle Prawns Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Bowl" src="assets/images/RNB-2.jpg" alt="Rice Noodle Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Rice Noodle Bowl - Paneer</div>
												            	<div class="product-price h1 mb-0">₹240</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Sweet and chilly paneer with rice noodles and asorted vegetables. An equally flavourful dressing and surprise chunks of fruit give this bowl a very tropical vibe, topped off with ssome roasted cashews.",
												                    "title": "Rice Noodle Paneer Bowl",
												                    "product_id": "uLG6xoTOYkcnpjxKoTXI",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "uLG6xoTOYkcnpjxKoTXI-bowl",
												                      "mrp": 240,
												                      "sale_price": 240,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Rice-Noodle-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Rice Noodle Bowl - Prawns</div>
												            	<div class="product-price h1 mb-0">₹280</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Sweet and chilly shrimps with rice noodles and assorted vegetables. An equally flavourful dressing and surprise chunks of fruit give this bowl a very tropical vibe, topped off with some roasted cashews.",
												                    "title": "Rice Noodle Shrimp Bowl",
												                    "product_id": "yzwTvwigXncRLBNki4M9",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "yzwTvwigXncRLBNki4M9-bowl",
												                      "mrp": 280,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Rice-Noodle-Shrimp_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-UKvF28KghJT75RDN1CPk" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Mango Quinoa Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" src="assets/images/MQB-Veg.jpg" alt="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Chicken)" src="assets/images/MQB-Chicken.jpg" alt="Mango Quinoa Bowl (With Chicken)" />
												            </div>
											            	<div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" src="assets/images/MQB-Veg-2.jpg" alt="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Chicken)" src="assets/images/MQB-Chicken-2.jpg" alt="Mango Quinoa Bowl (With Chicken)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Quinoa Bowl (With Red Kidney Beans (Rajma))</div>
												            	<div class="product-price h1 mb-0">₹270</div>
										            		</div>														            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).",
												                    "title": "Mango Quinoa Bowl (With Red Kidney Beans (Rajma))",
												                    "product_id": "UKvF28KghJT75RDN1CPk",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "UKvF28KghJT75RDN1CPk-bowl",
												                      "mrp": 270,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MQB-Veg.jpg",
												                      "assets/images/MQB-Veg-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
											        	<div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Quinoa Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>														            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).",
												                    "title": "Mango Quinoa Bowl (With Chicken)",
												                    "product_id": "kprSd5b7lgiK0FkeWOPW",
												                    "mark_type": " Non Veg",
												                    "default": {
												                      "id": "kprSd5b7lgiK0FkeWOPW-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                    "assets/images/MQB-Chicken.jpg",
												                      "assets/images/MQB-Chicken-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

											 	<!-- <div id="product-qEjBZmgcv14tAuCCkvmB" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Mango Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">The Mango Barley Bowl comes with barley, mix of lettuce and lightly bitter amaranth leaves, red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside the mint mustard dressing.
												                <br>The brown chickpeas (kaala chana) add a beautiful earthiness to balance the sweetness of the mangoes (alphonso). Flax seeds for crunch.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Brown Chickpeas)" src="assets/images/MBB-Veg.jpg" alt="Mango Barley Bowl (Brown Chickpeas)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Prawns)" src="assets/images/MBB-Prawns.jpg" alt="Mango Barley Bowl (Prawns)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Brown Chickpeas)" src="assets/images/Mango-Barley-Veg.jpg" alt="Mango Barley Bowl (Brown Chickpeas)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Prawns)" src="assets/images/Mango-Barley-Prawns.jpg" alt="Mango Barley Bowl (Prawns)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Barley Bowl - Brown Chickpeas</div>
												            	<div class="product-price h1 mb-0">₹260</div>
										            		</div>													           
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mix of lettuce and lightly bitter amaranth leaves (tambdi bhaji), red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside mango (alphonso) chunks and the mint mustard dressing. Flax seeds for crunch.\r\n    Choose between the veg/ vegan bowl that comes with brown chickpeas (kaala chana).",
												                    "title": "Mango Barley Bowl (Brown Chickpeas)",
												                    "product_id": "qEjBZmgcv14tAuCCkvmB",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "qEjBZmgcv14tAuCCkvmB-bowl",
												                      "mrp": 260,
												                      "sale_price": 260,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MBB-Veg.jpg",
												                      "assets/images/Mango-Barley-Veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Barley Bowl - Prawns</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>													            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mix of lettuce and lightly bitter amaranth leaves (tambdi bhaji), red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside mango (alphonso) chunks and the mint mustard dressing. Flax seeds for crunch.\r\n    The non veg bowl comes with prawns.",
												                    "title": "Mango Barley Bowl (Prawns)",
												                    "product_id": "vXoakmxssdJG1M8DRrMF",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "vXoakmxssdJG1M8DRrMF-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MBB-Prawns.jpg",
												                      "assets/images/Mango-Barley-Prawns.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/not-available.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
												</div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/missed.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black"> We go to great lengths to work with fresh and quality ingredients. Each day's bowls are made from scratch and in small batches. They sell out often, so we request that you order a day prior.
													</p>
												</div> -->
												<!-- <div class="coming-soon"> Coming Soon </div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/sold-out.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black"> We go to great lengths to work with fresh and quality ingredients. Each day's bowls are made from scratch and in small batches. They sell out often, so we request that you order a day prior.
													</p>
												</div> -->
												
					                        	<!-- <div class="alert alert-light">
													<img src="assets/images/sold-out.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black"> We go to great lengths to work with fresh and quality ingredients. Each day's bowls are made from scratch and in small batches. They sell out often, so we request that you order a day prior.
													</p>
												</div> -->
					                        </div>
					                        <div id="Thrusday" class="row product-list m-auto panel">
												<!-- <div id="product-o8DaHCRxfYBIJQ5W7kCB" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Soba Noodle Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Buckwheat noodles, greens, roasted vegetables and sweet-spiced tofu/ paneer or roast chicken. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Soba Noodle Bowl" src="assets/images/Soba-Noodle_Bowl.jpg" alt="Soba Noodle Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Soba Noodle Bowl" src="assets/images/Soba-Noodle-Bowl-2.jpg" alt="Soba Noodle Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Tofu</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹280</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>							
        						            				</div>
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and sweet-spiced tofu. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Tofu",
												                    "product_id": "o8DaHCRxfYBIJQ5W7kCB",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "o8DaHCRxfYBIJQ5W7kCB-bowl",
												                      "mrp": 310,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Paneer</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>									
									            			</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and sweet-spiced paneer. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Paneer",
												                    "product_id": "3GukcZQD4emxBqFI270J",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "3GukcZQD4emxBqFI270J-bowl",
												                      "mrp": 230,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Chicken</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and roasted chicken. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Chicken",
												                    "product_id": "uvCtO1TX0gdxL449TYxg",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "uvCtO1TX0gdxL449TYxg-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-uLG6xoTOYkcnpjxKoTXI" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Rice Noodle Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Soft rice noodles, crunchy cucumber, carrots, bell peppers, red cabbage, sweet-sour pineapple chunks and paneer / prawns. Mixed in a tangy, zingy onion-chilli dressing. This one's as colourful as they get, and truly lit!</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Paneer Bowl" src="assets/images/RNB-Veg-1.jpg" alt="Rice Noodle Paneer Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Prawns Bowl" src="assets/images/RNB-Prawns-2.jpg" alt="Rice Noodle Prawns Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Bowl" src="assets/images/RNB-2.jpg" alt="Rice Noodle Bowl" />
												            </div>
												        </div>
											        	<div class="product-meta d-flex pt-4 mb-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Rice Noodle Bowl - Tofu</div>
																<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>		
									            			</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Soft rice noodles, crunchy cucumber, carrots, bell peppers, red cabbage, sweet-sour pineapple chunks and tofu. Mixed in a tangy, zingy onion-chilli dressing. This ones as colourful as they get, and truly lit!",
												                    "title": "Rice Noodle Bowl - Tofu",
												                    "product_id": "6sDhDfiE3cCrqe1HxSox",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "6sDhDfiE3cCrqe1HxSox-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Rice-Noodle-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex pt-4 mb-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Rice Noodle Bowl - Paneer</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Sweet and chilly paneer with rice noodles and asorted vegetables. An equally flavourful dressing and surprise chunks of fruit give this bowl a very tropical vibe, topped off with ssome roasted cashews.",
												                    "title": "Rice Noodle Paneer Bowl",
												                    "product_id": "uLG6xoTOYkcnpjxKoTXI",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "uLG6xoTOYkcnpjxKoTXI-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Rice-Noodle-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Rice Noodle Bowl - Prawns</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹320</div>
												            		<div class="product-price discount-price h1 mb-0">₹350</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Sweet and chilly shrimps with rice noodles and assorted vegetables. An equally flavourful dressing and surprise chunks of fruit give this bowl a very tropical vibe, topped off with some roasted cashews.",
												                    "title": "Rice Noodle Shrimp Bowl",
												                    "product_id": "yzwTvwigXncRLBNki4M9",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "yzwTvwigXncRLBNki4M9-bowl",
												                      "mrp": 350,
												                      "sale_price": 320,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Rice-Noodle-Shrimp_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-pbGEFxvc02aF3qbekNp9" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Pear Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. The vegetarian bowl comes with boiled mung beans (also vegan friendly) and the non vegetarian bowl comes with chicken.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Pear Barley Bowl" src="assets/images/Pear-Barley-2.jpg" alt="Pear Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Pear Barley Bowl" src="assets/images/Pear-Barley-2.jpg" alt="Pear Barley Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Pear Barley Bowl - Veg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>	
								            				</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. The vegetarian bowl comes with boiled mung beans (also vegan friendly).",
												                    "title": "Pear Barley Bowl - Mung Beans",
												                    "product_id": "pbGEFxvc02aF3qbekNp9",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "pbGEFxvc02aF3qbekNp9-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Pear-Barley-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Pear Barley Bowl - Chicken</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹310</div>
												            		<div class="product-price discount-price h1 mb-0">₹350</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. Comes with roast chicken.",
												                    "title": "Pear Barley Bowl - Chicken",
												                    "product_id": "cMjfFw1BSYxNwGZYRpeC",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "cMjfFw1BSYxNwGZYRpeC-bowl",
												                      "mrp": 350,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Pear-Barley-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<div id="product-mbggbxvc02aF3qbekNp9" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Chilli Pineapple Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Pineapple chunks add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish and carrots. Flax seeds for crunch. Choose between the veg/vegan option of brown chickpeas (kala chana) or delicious prawns.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-veg.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-prawns.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-veg-2.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-prawns-2.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Chilli Pineapple Barley Bowl - Veg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>	
										            		</div>												            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Pineapple chunks add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish, carrots and brown chickpeas (kala chana). Flax seeds for crunch.",
												                    "title": "Chilli Pineapple Barley Bowl - Veg",
												                    "product_id": "mgILawWlIXQ8inejpZy8",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "mgILawWlIXQ8inejpZy8-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/chilli-pineapple-veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Chilli Pineapple Barley Bowl - Prawns</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹320</div>
												            		<div class="product-price discount-price h1 mb-0">₹350</div>	
											            		</div>	
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Pineapple chunks and prawns add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish and carrots. Flax seeds for crunch.",
												                    "title": "Chilli Pineapple Barley Bowl - Prawns",
												                    "product_id": "Pr8J4eIEwFfKX3ZQ6gC8",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "Pr8J4eIEwFfKX3ZQ6gC8-bowl",
												                      "mrp": 350,
												                      "sale_price": 320,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/chilli-pineapple-prawns.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>

												<div id="product-iAZQBNDAObu4phKqFeiO" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Thai Brown Rice Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Thai grilled paneer / tofu / chicken, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Thai Brown Rice Bowl" src="assets/images/Thai-Bowl-Paneer_800.jpg" alt="Thai Brown Rice Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Thai Brown Rice Bowl - Chicken" src="assets/images/Thai-Bowl-Chicken_800.jpg" alt="Thai Brown Rice Bowl - Chicken" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Tofu</div>
																<div class="price-row d-flex">
																	<div class="product-price h1 mb-0">₹270</div>
																	<div class="product-price discount-price h1 mb-0">₹310</div>	
																</div>
															</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled tofu, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Tofu",
												                    "product_id": "EIAHVzsPLkUY6yrNGjOj",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "EIAHVzsPLkUY6yrNGjOj-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Paneer</div>
																<div class="price-row d-flex">
																	<div class="product-price h1 mb-0">₹290</div>
																	<div class="product-price discount-price h1 mb-0">₹330</div>	
																</div>	
									            			</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled paneer, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Paneer",
												                    "product_id": "iAZQBNDAObu4phKqFeiO",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "iAZQBNDAObu4phKqFeiO-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Chicken</div>
																<div class="price-row d-flex">
																	<div class="product-price h1 mb-0">₹290</div>
																	<div class="product-price discount-price h1 mb-0">₹330</div>	
																</div>	
										            		</div>												            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled chicken with greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Chicken",
												                    "product_id": "iy0sD3rmOe9CB3extiE7",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "iy0sD3rmOe9CB3extiE7-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>

												<div id="product-QexP4xy4W2cMx4zORNEi" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Quinoa and Nuts Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. A couple of soft boiled eggs to up your protein intake for the day.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Veg" src="assets/images/QNB-Veg_800.jpg" alt="Quinoa and Nuts Bowl - Veg" />
												            </div>
											            	<div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Egg" src="assets/images/QNB-Chicken_800.jpg" alt="Quinoa and Nuts Bowl - Egg"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Egg" src="assets/images/QNB.jpg" alt="Quinoa and Nuts Bowl - Egg" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Quinoa and Nuts Bowl - Veg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta.",
												                    "title": "Quinoa and Nuts Bowl - Veg",
												                    "product_id": "QexP4xy4W2cMx4zORNEi",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "QexP4xy4W2cMx4zORNEi-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Veg_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
											        	<div class="product-meta d-flex mt-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Quinoa and Nuts Bowl - Egg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. A couple of soft boiled eggs to up your protein intake for the day.",
												                    "title": "Quinoa and Nuts Bowl - Egg",
												                    "product_id": "zhsxgRGAMaIbia75SQJr",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "zhsxgRGAMaIbia75SQJr-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>

												<div id="product-bqApKRirpEeopN3w9H3J" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6 hide-product">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Quinoa and Nuts Bowl (Chicken)</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Quinoa, mixed leaves, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. You could add a couple of soft boiled eggs to up your protein intake for the day :)</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl (Chicken)" src="assets/images/QNB-Chicken_800.jpg" alt="Quinoa and Nuts Bowl (Chicken)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl (Chicken)" src="assets/images/QNB.jpg" alt="Quinoa and Nuts Bowl (Chicken)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex mt-1">
												            <div class="product-price h1 ft6 mb-0">₹ 280</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed leaves, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. You could add a couple of soft boiled eggs to up your protein intake for the day :)",
												                    "title": "Quinoa and Nuts Bowl (Chicken)",
												                    "product_id": "dummy-product",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "dummy-product-bowl",
												                      "mrp": 280,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "thursday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> 

												<!-- <div id="product-04W7PPoomTolZTxdgpVI" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Almost Burrito Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheese, and a lob of guacamole. There's also the option of adding herbed chicken.
												                <br> 
												                Squeeze in that wedge of lime, mix it all and gobble! The elements are all dressed up individually, so no separate dressing with this bowl.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Veg" src="assets/images/almost-burrito-bowl-veg-1.jpg" alt="Almost Burrito Bowl - Veg" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Veg" src="assets/images/almost-burrito-bowl-veg-2.jpg" alt="Almost Burrito Bowl - Veg"  />
												            </div>
            									            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Chicken" src="assets/images/almost-burrito-bowl-chicken-1.jpg" alt="Almost Burrito Bowl - Chicken" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Chicken" src="assets/images/almost-burrito-bowl-chicken-2.jpg" alt="Almost Burrito Bowl - Chicken"  />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4 ">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Almost Burrito Bowl - Veg</div>
												            	<div class="product-price h1 mb-0">₹300</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheddar. Comes with a lob of guacamole. Squeeze in that wedge of lime, mix it all up and gobble! The elements are all dressed up individually, so there isnt one given separately with this bowl.",
												                    "title": "Almost Burrito Bowl - Veg",
												                    "product_id": "04W7PPoomTolZTxdgpVI",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "04W7PPoomTolZTxdgpVI-bowl",
												                      "mrp": 300,
												                      "sale_price": 300,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/almost-burrito-bowl-veg-1"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block btn-disabled"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Almost Burrito Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹330</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheddar and herbed chicken on the side. Comes with a lob of guacamole. Squeeze in that wedge of lime, mix it all up and gobble!The elements are all dressed up individually, so there isnt one given separately with this bowl.",
												                    "title": "Almost Burrito Bowl - Chicken",
												                    "product_id": "kQnL29KfLMFrrhLQC6M3",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "kQnL29KfLMFrrhLQC6M3-bowl",
												                      "mrp": 330,
												                      "sale_price": 330,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/almost-burrito-bowl-chicken-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block btn-disabled"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-1CG6P1slxnr9TSNnPzvZ" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger4 my-6">
												    <div class="product-wrapper cardfour">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Orange Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Barley, mixed greens, baby corn, beans, carrots and coloured peppers with spiced paneer / tofu / chicken and the odd nugget of fresh orange. All mixed in an orange mustard ginger dressing. Toasted flax seeds to up the crunch. Tastes best slightly chilled.
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Veg.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Chicken.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Veg-2.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Chicken-2.jpg" alt="Orange Barley Bowl" />
												            </div>
												        </div>
								        				<div class="product-meta d-flex pt-4 mt-5 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Paneer</div>
												            	<div class="product-price h1 mb-0">₹240</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide"
												                data-product_data='{
												                    "description": "Barley, mixed greens, broccoli, baby corn, beans, carrots and coloured peppers with spiced tofu and the odd nugget of fresh orange. All mixed in an orange mustard ginger dressing. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl (Paneer)",
												                    "product_id": "V2hxjWQXafuB8dq0unxy",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "V2hxjWQXafuB8dq0unxy-bowl",
												                      "mrp": 240,
												                      "sale_price": 240,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex  mt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Tofu</div>
												            	<div class="product-price h1 mb-0">₹240</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide"
												                data-product_data='{
												                    "description": "Barley, mixed greens, broccoli, baby corn, beans, carrots and coloured peppers with spiced tofu and the odd nugget of fresh orange. All mixed in an orange mustard ginger dressing. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl (Tofu)",
												                    "product_id": "1CG6P1slxnr9TSNnPzvZ",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "1CG6P1slxnr9TSNnPzvZ-bowl",
												                      "mrp": 240,
												                      "sale_price": 240,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹270</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mixed greens, broccoli, baby corn, beans, carrots and coloured peppers with spiced chicken and the odd nugget of fresh orange. All mixed in an orange mustard ginger dressing. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl (Chicken)",
												                    "product_id": "8FVGmVx4JjQZRUsxtYrL",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "8FVGmVx4JjQZRUsxtYrL-bowl",
												                      "mrp": 270,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> --> 

												<!-- <div id="product-w9CiPdw0MzpGfKkQsKqJ" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Cracked Wheat & Falafel Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">
												                	A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and fresh herbs. Falafel and roasted eggplant with a red pepper dip**. Olives, pomegranate and feta to complete the middle eastern vibe! You could also add herbed chicken.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Cracked Wheat & Falafel Bowl" src="assets/images/CWF-Bowl-Veg.jpg" alt="Cracked Wheat & Falafel Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Cracked Wheat & Falafel Bowl" src="assets/images/CWF-Bowl-Chicken.jpg" alt="Cracked Wheat & Falafel Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Cracked Wheat & Falafel Bowl - Veg</div>
												            	<div class="product-price h1 mb-0">₹290</div>
										            		</div>													            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "New bowl on the menu! A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and LOTS of fresh herbs. Theres falafel and roasted eggplant. A roasted red pepper dip** on the side. Oh, and olives, pomegranate and feta to complete the middle eastern vibe! *Salad comes with dressing mixed in. **Dip is not the dressing.",
												                    "title": "Cracked Wheat & Falafel Bowl (Veg)",
												                    "product_id": "w9CiPdw0MzpGfKkQsKqJ",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "w9CiPdw0MzpGfKkQsKqJ-bowl",
												                      "mrp": 290,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/CWF-Bowl-Veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Cracked Wheat & Falafel Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "New bowl on the menu! A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and LOTS of fresh herbs. There is falafel and roasted eggplant. Herbed chicken is an added bonus. A roasted red pepper dip** on the side. Oh, and olives, pomegranate and feta to complete the middle eastern vibe! *Salad comes with dressing mixed in. **Dip is not the dressing.",
												                    "title": "Cracked Wheat & Falafel Bowl (Chicken)",
												                    "product_id": "OMXhZUrvVWwCsLKNDlFK",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "OMXhZUrvVWwCsLKNDlFK-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/CWF-Bowl-Chicken.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> --> 

												<!-- <div id="product-UKvF28KghJT75RDN1CPk" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Mango Quinoa Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" src="assets/images/MQB-Veg.jpg" alt="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Chicken)" src="assets/images/MQB-Chicken.jpg" alt="Mango Quinoa Bowl (With Chicken)" />
												            </div>
											            	<div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" src="assets/images/MQB-Veg-2.jpg" alt="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Chicken)" src="assets/images/MQB-Chicken-2.jpg" alt="Mango Quinoa Bowl (With Chicken)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Quinoa Bowl (With Red Kidney Beans (Rajma))</div>
												            	<div class="product-price h1 mb-0">₹270</div>
										            		</div>														            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).",
												                    "title": "Mango Quinoa Bowl (With Red Kidney Beans (Rajma))",
												                    "product_id": "UKvF28KghJT75RDN1CPk",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "UKvF28KghJT75RDN1CPk-bowl",
												                      "mrp": 270,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MQB-Veg.jpg",
												                      "assets/images/MQB-Veg-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
											        	<div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Quinoa Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>														            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).",
												                    "title": "Mango Quinoa Bowl (With Chicken)",
												                    "product_id": "kprSd5b7lgiK0FkeWOPW",
												                    "mark_type": " Non Veg",
												                    "default": {
												                      "id": "kprSd5b7lgiK0FkeWOPW-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                    "assets/images/MQB-Chicken.jpg",
												                      "assets/images/MQB-Chicken-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

											 	<!-- <div id="product-qEjBZmgcv14tAuCCkvmB" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Mango Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">The Mango Barley Bowl comes with barley, mix of lettuce and lightly bitter amaranth leaves, red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside the mint mustard dressing.
												                <br>The brown chickpeas (kaala chana) add a beautiful earthiness to balance the sweetness of the mangoes (alphonso). Flax seeds for crunch.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Brown Chickpeas)" src="assets/images/MBB-Veg.jpg" alt="Mango Barley Bowl (Brown Chickpeas)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Prawns)" src="assets/images/MBB-Prawns.jpg" alt="Mango Barley Bowl (Prawns)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Brown Chickpeas)" src="assets/images/Mango-Barley-Veg.jpg" alt="Mango Barley Bowl (Brown Chickpeas)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Prawns)" src="assets/images/Mango-Barley-Prawns.jpg" alt="Mango Barley Bowl (Prawns)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Barley Bowl - Brown Chickpeas</div>
												            	<div class="product-price h1 mb-0">₹260</div>
										            		</div>													           
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mix of lettuce and lightly bitter amaranth leaves (tambdi bhaji), red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside mango (alphonso) chunks and the mint mustard dressing. Flax seeds for crunch.\r\n    Choose between the veg/ vegan bowl that comes with brown chickpeas (kaala chana).",
												                    "title": "Mango Barley Bowl (Brown Chickpeas)",
												                    "product_id": "qEjBZmgcv14tAuCCkvmB",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "qEjBZmgcv14tAuCCkvmB-bowl",
												                      "mrp": 260,
												                      "sale_price": 260,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MBB-Veg.jpg",
												                      "assets/images/Mango-Barley-Veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Barley Bowl - Prawns</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>													            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mix of lettuce and lightly bitter amaranth leaves (tambdi bhaji), red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside mango (alphonso) chunks and the mint mustard dressing. Flax seeds for crunch.\r\n    The non veg bowl comes with prawns.",
												                    "title": "Mango Barley Bowl (Prawns)",
												                    "product_id": "vXoakmxssdJG1M8DRrMF",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "vXoakmxssdJG1M8DRrMF-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MBB-Prawns.jpg",
												                      "assets/images/Mango-Barley-Prawns.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/not-available.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
												</div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/missed.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black"> We go to great lengths to work with fresh and quality ingredients. Each day's bowls are made from scratch and in small batches. They sell out often, so we request that you order a day prior.
													</p>
												</div> -->
												<!-- <div class="coming-soon"> Coming Soon </div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/sold-out.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black"> We go to great lengths to work with fresh and quality ingredients. Each day's bowls are made from scratch and in small batches. They sell out often, so we request that you order a day prior.
													</p>
												</div> -->
					                        </div>
				                        	<div id="Friday" class="row product-list m-auto panel">
												<!-- <div id="product-uLG6xoTOYkcnpjxKoTXI" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Rice Noodle Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Soft rice noodles, crunchy cucumber, carrots, bell peppers, red cabbage, sweet-sour pineapple chunks and paneer / prawns. Mixed in a tangy, zingy onion-chilli dressing. This one's as colourful as they get, and truly lit!</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Paneer Bowl" src="assets/images/RNB-Veg-1.jpg" alt="Rice Noodle Paneer Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Prawns Bowl" src="assets/images/RNB-Prawns-2.jpg" alt="Rice Noodle Prawns Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Rice Noodle Bowl" src="assets/images/RNB-2.jpg" alt="Rice Noodle Bowl" />
												            </div>
												        </div>
											        	<div class="product-meta d-flex pt-4 mb-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Rice Noodle Bowl - Tofu</div>
																<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>		
									            			</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Soft rice noodles, crunchy cucumber, carrots, bell peppers, red cabbage, sweet-sour pineapple chunks and tofu. Mixed in a tangy, zingy onion-chilli dressing. This ones as colourful as they get, and truly lit!",
												                    "title": "Rice Noodle Bowl - Tofu",
												                    "product_id": "6sDhDfiE3cCrqe1HxSox",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "6sDhDfiE3cCrqe1HxSox-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Rice-Noodle-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Rice Noodle Bowl - Paneer</div>
																<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>		
									            			</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Sweet and chilly paneer with rice noodles and asorted vegetables. An equally flavourful dressing and surprise chunks of fruit give this bowl a very tropical vibe, topped off with ssome roasted cashews.",
												                    "title": "Rice Noodle Paneer Bowl",
												                    "product_id": "uLG6xoTOYkcnpjxKoTXI",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "uLG6xoTOYkcnpjxKoTXI-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Rice-Noodle-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Rice Noodle Bowl - Prawns</div>
																<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹320</div>
												            		<div class="product-price discount-price h1 mb-0">₹350</div>	
											            		</div>	
									            			</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Sweet and chilly shrimps with rice noodles and assorted vegetables. An equally flavourful dressing and surprise chunks of fruit give this bowl a very tropical vibe, topped off with some roasted cashews.",
												                    "title": "Rice Noodle Shrimp Bowl",
												                    "product_id": "yzwTvwigXncRLBNki4M9",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "yzwTvwigXncRLBNki4M9-bowl",
												                      "mrp": 350,
												                      "sale_price": 320,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Rice-Noodle-Shrimp_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-pbGEFxvc02aF3qbekNp9" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Pear Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. The vegetarian bowl comes with boiled mung beans (also vegan friendly) and the non vegetarian bowl comes with chicken.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Pear Barley Bowl" src="assets/images/Pear-Barley-2.jpg" alt="Pear Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Pear Barley Bowl" src="assets/images/Pear-Barley-2.jpg" alt="Pear Barley Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Pear Barley Bowl - Veg</div>
																<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. The vegetarian bowl comes with boiled mung beans (also vegan friendly).",
												                    "title": "Pear Barley Bowl - Mung Beans",
												                    "product_id": "pbGEFxvc02aF3qbekNp9",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "pbGEFxvc02aF3qbekNp9-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Pear-Barley-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Pear Barley Bowl - Chicken</div>
																<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹310</div>
												            		<div class="product-price discount-price h1 mb-0">₹350</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, greens, red cabbage, cucumber, coloured peppers and pomegranate are the crunch and colour elements of this bowl. The pear wedges add a hint of sweetness and then there are walnuts to balance that out. A classic herb balsamic vinaigrette ties all these together. Comes with roast chicken.",
												                    "title": "Pear Barley Bowl - Chicken",
												                    "product_id": "cMjfFw1BSYxNwGZYRpeC",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "cMjfFw1BSYxNwGZYRpeC-bowl",
												                      "mrp": 350,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Pear-Barley-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-o8DaHCRxfYBIJQ5W7kCB" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Soba Noodle Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Buckwheat noodles, greens, roasted vegetables and sweet-spiced tofu/ paneer or roast chicken. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Soba Noodle Bowl" src="assets/images/Soba-Noodle_Bowl.jpg" alt="Soba Noodle Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Soba Noodle Bowl" src="assets/images/Soba-Noodle-Bowl-2.jpg" alt="Soba Noodle Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Tofu</div>
																<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹280</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>	
										            		</div>												            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and sweet-spiced tofu. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Tofu",
												                    "product_id": "o8DaHCRxfYBIJQ5W7kCB",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "o8DaHCRxfYBIJQ5W7kCB-bowl",
												                      "mrp": 310,
												                      "sale_price": 280,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Paneer</div>
																<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
									            			</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and sweet-spiced paneer. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Paneer",
												                    "product_id": "3GukcZQD4emxBqFI270J",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "3GukcZQD4emxBqFI270J-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Soba Noodle Bowl - Chicken</div>
																<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
									            			</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Buckwheat noodles, greens, roasted vegetables and roasted chicken. Tossed together, salad style, in a very Asian soy-sesame ginger dressing. Completed with a generous topping of sesame seeds and roasted groundnuts.",
												                    "title": "Soba Noodle Bowl - Chicken",
												                    "product_id": "uvCtO1TX0gdxL449TYxg",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "uvCtO1TX0gdxL449TYxg-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Soba-Noodle_Bowl.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

												<!-- <div id="product-04W7PPoomTolZTxdgpVI" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Almost Burrito Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheese, and a lob of guacamole. There's also the option of adding herbed chicken.
												                <br> 
												                Squeeze in that wedge of lime, mix it all and gobble! The elements are all dressed up individually, so no separate dressing with this bowl.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Veg" src="assets/images/almost-burrito-bowl-veg-1.jpg" alt="Almost Burrito Bowl - Veg" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Veg" src="assets/images/almost-burrito-bowl-veg-2.jpg" alt="Almost Burrito Bowl - Veg"  />
												            </div>
            									            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Chicken" src="assets/images/almost-burrito-bowl-chicken-1.jpg" alt="Almost Burrito Bowl - Chicken" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Almost Burrito Bowl - Chicken" src="assets/images/almost-burrito-bowl-chicken-2.jpg" alt="Almost Burrito Bowl - Chicken"  />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4 ">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Almost Burrito Bowl - Veg</div>
												            	<div class="product-price h1 mb-0">₹300</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheddar. Comes with a lob of guacamole. Squeeze in that wedge of lime, mix it all up and gobble! The elements are all dressed up individually, so there isnt one given separately with this bowl.",
												                    "title": "Almost Burrito Bowl - Veg",
												                    "product_id": "04W7PPoomTolZTxdgpVI",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "04W7PPoomTolZTxdgpVI-bowl",
												                      "mrp": 300,
												                      "sale_price": 300,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/almost-burrito-bowl-veg-1"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block btn-disabled"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Almost Burrito Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹330</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Herbed brown rice, greens, seasoned red kidney beans (rajma) and garlic roasted peppers (fajita style). Some corn, salsa and cheddar and herbed chicken on the side. Comes with a lob of guacamole. Squeeze in that wedge of lime, mix it all up and gobble!The elements are all dressed up individually, so there isnt one given separately with this bowl.",
												                    "title": "Almost Burrito Bowl - Chicken",
												                    "product_id": "kQnL29KfLMFrrhLQC6M3",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "kQnL29KfLMFrrhLQC6M3-bowl",
												                      "mrp": 330,
												                      "sale_price": 330,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/almost-burrito-bowl-chicken-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block btn-disabled"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->


												<div id="product-iAZQBNDAObu4phKqFeiO" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Thai Brown Rice Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Thai grilled paneer / tofu / chicken, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Thai Brown Rice Bowl" src="assets/images/Thai-Bowl-Paneer_800.jpg" alt="Thai Brown Rice Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Thai Brown Rice Bowl - Chicken" src="assets/images/Thai-Bowl-Chicken_800.jpg" alt="Thai Brown Rice Bowl - Chicken" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Tofu</div>
																<div class="price-row d-flex">
																	<div class="product-price h1 mb-0">₹270</div>
																	<div class="product-price discount-price h1 mb-0">₹310</div>	
																</div>
															</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled tofu, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Tofu",
												                    "product_id": "EIAHVzsPLkUY6yrNGjOj",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "EIAHVzsPLkUY6yrNGjOj-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Paneer</div>
																<div class="price-row d-flex">
																	<div class="product-price h1 mb-0">₹290</div>
																	<div class="product-price discount-price h1 mb-0">₹330</div>	
																</div>	
									            			</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled paneer, greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Paneer",
												                    "product_id": "iAZQBNDAObu4phKqFeiO",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "iAZQBNDAObu4phKqFeiO-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Paneer_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Thai Brown Rice Bowl - Chicken</div>
																<div class="price-row d-flex">
																	<div class="product-price h1 mb-0">₹290</div>
																	<div class="product-price discount-price h1 mb-0">₹330</div>	
																</div>	
										            		</div>												            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Thai grilled chicken with greens, red cabbage, cucumber, coloured peppers and corn served with basil brown rice. The peanut-butter + coconut milk dressing, along with crunchy roasted groundnuts, bring the Thai flavors home.",
												                    "title": "Thai Brown Rice Bowl - Chicken",
												                    "product_id": "iy0sD3rmOe9CB3extiE7",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "iy0sD3rmOe9CB3extiE7-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Thai-Bowl-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>
												
												<div id="product-QexP4xy4W2cMx4zORNEi" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Quinoa and Nuts Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. A couple of soft boiled eggs to up your protein intake for the day.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Veg" src="assets/images/QNB-Veg_800.jpg" alt="Quinoa and Nuts Bowl - Veg" />
												            </div>
											            	<div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Egg" src="assets/images/QNB-Chicken_800.jpg" alt="Quinoa and Nuts Bowl - Egg"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Quinoa and Nuts Bowl - Egg" src="assets/images/QNB.jpg" alt="Quinoa and Nuts Bowl - Egg" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Quinoa and Nuts Bowl - Veg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta.",
												                    "title": "Quinoa and Nuts Bowl - Veg",
												                    "product_id": "QexP4xy4W2cMx4zORNEi",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "QexP4xy4W2cMx4zORNEi-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Veg_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
											        	<div class="product-meta d-flex mt-4">
											        		<div class="menu-details">
												        		<div class="product-variant-name">Quinoa and Nuts Bowl - Egg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹290</div>
												            		<div class="product-price discount-price h1 mb-0">₹330</div>	
											            		</div>	
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Quinoa, mixed greens, apples, roasted pumpkin, beetroot, carrots and some pickled onions. Tossed in a balsamic dressing and topped with roasted almonds, mixed seeds and feta. A couple of soft boiled eggs to up your protein intake for the day.",
												                    "title": "Quinoa and Nuts Bowl - Egg",
												                    "product_id": "zhsxgRGAMaIbia75SQJr",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "zhsxgRGAMaIbia75SQJr-bowl",
												                      "mrp": 330,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/QNB-Chicken_800.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>

												<div id="product-mbggbxvc02aF3qbekNp9" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Chilli Pineapple Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Pineapple chunks add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish and carrots. Flax seeds for crunch. Choose between the veg/vegan option of brown chickpeas (kala chana) or delicious prawns.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-veg.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-prawns.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-veg-2.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Chilli Pineapple Barley Bowl" src="assets/images/chilli-pineapple-prawns-2.jpg" alt="Chilli Pineapple Barley Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Chilli Pineapple Barley Bowl - Veg</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹270</div>
												            		<div class="product-price discount-price h1 mb-0">₹310</div>	
											            		</div>	
										            		</div>												            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Pineapple chunks add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish, carrots and brown chickpeas (kala chana). Flax seeds for crunch.",
												                    "title": "Chilli Pineapple Barley Bowl - Veg",
												                    "product_id": "mgILawWlIXQ8inejpZy8",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "mgILawWlIXQ8inejpZy8-bowl",
												                      "mrp": 310,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/chilli-pineapple-veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Chilli Pineapple Barley Bowl - Prawns</div>
												        		<div class="price-row d-flex">
												            		<div class="product-price h1 mb-0">₹320</div>
												            		<div class="product-price discount-price h1 mb-0">₹350</div>	
											            		</div>	
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Pineapple chunks and prawns add a tropical vibe to this bowl. Complimented with some sour-ish pickled chillies (made in-house) and a mint mustard dressing. The odd bite with a raisin or two adds the oomph factor. Barley, greens, red cabbage, cucumber, raddish and carrots. Flax seeds for crunch.",
												                    "title": "Chilli Pineapple Barley Bowl - Prawns",
												                    "product_id": "Pr8J4eIEwFfKX3ZQ6gC8",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "Pr8J4eIEwFfKX3ZQ6gC8-bowl",
												                      "mrp": 350,
												                      "sale_price": 320,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/chilli-pineapple-prawns.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "friday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>

												<!-- <div id="product-1CG6P1slxnr9TSNnPzvZ" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger4 my-6">
												    <div class="product-wrapper cardfour">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Orange Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Barley, mixed greens, baby corn, beans, carrots and coloured peppers with spiced paneer / tofu / chicken and the odd nugget of fresh orange. All mixed in an orange mustard ginger dressing. Toasted flax seeds to up the crunch. Tastes best slightly chilled.
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Veg.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Chicken.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Veg-2.jpg" alt="Orange Barley Bowl" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Orange Barley Bowl" src="assets/images/GGB-OBB-Chicken-2.jpg" alt="Orange Barley Bowl" />
												            </div>
												        </div>
								        				<div class="product-meta d-flex pt-4 mt-5 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Paneer</div>
												            	<div class="product-price h1 mb-0">₹240</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide"
												                data-product_data='{
												                    "description": "Barley, mixed greens, broccoli, baby corn, beans, carrots and coloured peppers with spiced tofu and the odd nugget of fresh orange. All mixed in an orange mustard ginger dressing. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl (Paneer)",
												                    "product_id": "V2hxjWQXafuB8dq0unxy",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "V2hxjWQXafuB8dq0unxy-bowl",
												                      "mrp": 240,
												                      "sale_price": 240,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex  mt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Tofu</div>
												            	<div class="product-price h1 mb-0">₹240</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide"
												                data-product_data='{
												                    "description": "Barley, mixed greens, broccoli, baby corn, beans, carrots and coloured peppers with spiced tofu and the odd nugget of fresh orange. All mixed in an orange mustard ginger dressing. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl (Tofu)",
												                    "product_id": "1CG6P1slxnr9TSNnPzvZ",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "1CG6P1slxnr9TSNnPzvZ-bowl",
												                      "mrp": 240,
												                      "sale_price": 240,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'
												                >
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4 mb-4">
												        	<div class="menu-details">
												        		<div class="product-variant-name">Orange Barley Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹270</div>
										            		</div>
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mixed greens, broccoli, baby corn, beans, carrots and coloured peppers with spiced chicken and the odd nugget of fresh orange. All mixed in an orange mustard ginger dressing. Toasted flax seeds to up the crunch. Tastes best slightly chilled.",
												                    "title": "Orange Barley Bowl (Chicken)",
												                    "product_id": "8FVGmVx4JjQZRUsxtYrL",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "8FVGmVx4JjQZRUsxtYrL-bowl",
												                      "mrp": 270,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/Orange-Barley-Bowl-1.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> --> 

												<!-- <div id="product-w9CiPdw0MzpGfKkQsKqJ" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Cracked Wheat & Falafel Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">
												                	A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and fresh herbs. Falafel and roasted eggplant with a red pepper dip**. Olives, pomegranate and feta to complete the middle eastern vibe! You could also add herbed chicken.
												                </h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Cracked Wheat & Falafel Bowl" src="assets/images/CWF-Bowl-Veg.jpg" alt="Cracked Wheat & Falafel Bowl"/>
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Cracked Wheat & Falafel Bowl" src="assets/images/CWF-Bowl-Chicken.jpg" alt="Cracked Wheat & Falafel Bowl" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Cracked Wheat & Falafel Bowl - Veg</div>
												            	<div class="product-price h1 mb-0">₹290</div>
										            		</div>													            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "New bowl on the menu! A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and LOTS of fresh herbs. Theres falafel and roasted eggplant. A roasted red pepper dip** on the side. Oh, and olives, pomegranate and feta to complete the middle eastern vibe! *Salad comes with dressing mixed in. **Dip is not the dressing.",
												                    "title": "Cracked Wheat & Falafel Bowl (Veg)",
												                    "product_id": "w9CiPdw0MzpGfKkQsKqJ",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "w9CiPdw0MzpGfKkQsKqJ-bowl",
												                      "mrp": 290,
												                      "sale_price": 290,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/CWF-Bowl-Veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
									        				<div class="menu-details">
												        		<div class="product-variant-name">Cracked Wheat & Falafel Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>	
												            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "New bowl on the menu! A very tabbouleh-inspired salad*: greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and LOTS of fresh herbs. There is falafel and roasted eggplant. Herbed chicken is an added bonus. A roasted red pepper dip** on the side. Oh, and olives, pomegranate and feta to complete the middle eastern vibe! *Salad comes with dressing mixed in. **Dip is not the dressing.",
												                    "title": "Cracked Wheat & Falafel Bowl (Chicken)",
												                    "product_id": "OMXhZUrvVWwCsLKNDlFK",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "OMXhZUrvVWwCsLKNDlFK-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/CWF-Bowl-Chicken.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> --> 

												<!-- <div id="product-UKvF28KghJT75RDN1CPk" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Mango Quinoa Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" src="assets/images/MQB-Veg.jpg" alt="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Chicken)" src="assets/images/MQB-Chicken.jpg" alt="Mango Quinoa Bowl (With Chicken)" />
												            </div>
											            	<div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" src="assets/images/MQB-Veg-2.jpg" alt="Mango Quinoa Bowl (With Red Kidney Beans (Rajma))" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Quinoa Bowl (With Chicken)" src="assets/images/MQB-Chicken-2.jpg" alt="Mango Quinoa Bowl (With Chicken)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Quinoa Bowl (With Red Kidney Beans (Rajma))</div>
												            	<div class="product-price h1 mb-0">₹270</div>
										            		</div>														            <div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).",
												                    "title": "Mango Quinoa Bowl (With Red Kidney Beans (Rajma))",
												                    "product_id": "UKvF28KghJT75RDN1CPk",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "UKvF28KghJT75RDN1CPk-bowl",
												                      "mrp": 270,
												                      "sale_price": 270,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MQB-Veg.jpg",
												                      "assets/images/MQB-Veg-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
											        	<div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Quinoa Bowl - Chicken</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>														            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Our limited-edition bowl with the king of fruits! This bowl comes with mixed greens, quinoa, red cabbage, cucumber, red pepper and sweet (alphonso) mango chunks. A gingery carrot balsamic vinaigrette to tie them all together, along with red kidney beans (rajma) or chicken. Topped with soft feta and crunchy granola (made in-house, with organic oats, honey and almonds).",
												                    "title": "Mango Quinoa Bowl (With Chicken)",
												                    "product_id": "kprSd5b7lgiK0FkeWOPW",
												                    "mark_type": " Non Veg",
												                    "default": {
												                      "id": "kprSd5b7lgiK0FkeWOPW-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                    "assets/images/MQB-Chicken.jpg",
												                      "assets/images/MQB-Chicken-2.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->

											 	<!-- <div id="product-qEjBZmgcv14tAuCCkvmB" class="custom-col-12 col-lg-12 product-list-item p-lg-0 effect trigger5 my-6">
												    <div class="product-wrapper cardfive">
												        <div class="lg-w-50 hover-text">
												            <h3 class="product-title h1 font-weight-bold mb-2 mb-lg-3 mt-lg-1 p-title">Mango Barley Bowl</h3>
												            <div class="product-content  pb-4">
												                <h4 class="font-weight-light font-size-18 mt-0 mb-lg-0">The Mango Barley Bowl comes with barley, mix of lettuce and lightly bitter amaranth leaves, red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside the mint mustard dressing.
												                <br>The brown chickpeas (kaala chana) add a beautiful earthiness to balance the sweetness of the mangoes (alphonso). Flax seeds for crunch.</h4>
												            </div>
												        </div>
												        <div class="product-image">
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Brown Chickpeas)" src="assets/images/MBB-Veg.jpg" alt="Mango Barley Bowl (Brown Chickpeas)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Prawns)" src="assets/images/MBB-Prawns.jpg" alt="Mango Barley Bowl (Prawns)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Brown Chickpeas)" src="assets/images/Mango-Barley-Veg.jpg" alt="Mango Barley Bowl (Brown Chickpeas)" />
												            </div>
												            <div class="slick-slideshow__slide">
												                <img class="bg-image-animation w-100" title="Mango Barley Bowl (Prawns)" src="assets/images/Mango-Barley-Prawns.jpg" alt="Mango Barley Bowl (Prawns)" />
												            </div>
												        </div>
												        <div class="product-meta d-flex pt-4 mt-5 mb-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Barley Bowl - Brown Chickpeas</div>
												            	<div class="product-price h1 mb-0">₹260</div>
										            		</div>													           
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mix of lettuce and lightly bitter amaranth leaves (tambdi bhaji), red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside mango (alphonso) chunks and the mint mustard dressing. Flax seeds for crunch.\r\n    Choose between the veg/ vegan bowl that comes with brown chickpeas (kaala chana).",
												                    "title": "Mango Barley Bowl (Brown Chickpeas)",
												                    "product_id": "qEjBZmgcv14tAuCCkvmB",
												                    "mark_type": "Veg",
												                    "default": {
												                      "id": "qEjBZmgcv14tAuCCkvmB-bowl",
												                      "mrp": 260,
												                      "sale_price": 260,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MBB-Veg.jpg",
												                      "assets/images/Mango-Barley-Veg.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												        <hr>
												        <div class="product-meta d-flex mt-4">
										        			<div class="menu-details">
												        		<div class="product-variant-name">Mango Barley Bowl - Prawns</div>
												            	<div class="product-price h1 mb-0">₹310</div>
										            		</div>													            
										            		<div class="react-add-to-cart-container btn-hide" data-product_data='{
												                    "description": "Barley, mix of lettuce and lightly bitter amaranth leaves (tambdi bhaji), red cabbage, cucumber, capsicum and carrots. Our sour-ish pickled chillies (made in-house) play their part well alongside mango (alphonso) chunks and the mint mustard dressing. Flax seeds for crunch.\r\n    The non veg bowl comes with prawns.",
												                    "title": "Mango Barley Bowl (Prawns)",
												                    "product_id": "vXoakmxssdJG1M8DRrMF",
												                    "mark_type": "Non Veg",
												                    "default": {
												                      "id": "vXoakmxssdJG1M8DRrMF-bowl",
												                      "mrp": 310,
												                      "sale_price": 310,
												                      "size": "Regular Bowl"
												                    },
												                    "images": [
												                      "assets/images/MBB-Prawns.jpg",
												                      "assets/images/Mango-Barley-Prawns.jpg"
												                    ],
												                    "class": "cardfour",
												                    "put_empty": true,
												                    "availability": "Tuesday",
												                    "date": "Tuesday 2nd",
												                    "day": "monday"
												                }'>
												                <div>
												                    <a class="btn-add-to-cart text-white bg-primary p-15 text-decoration-none m-0 font-size-25 ft6 cursor-pointer d-inline-block"><span>Add to cart</span></a>
												                </div>
												            </div>
												        </div>
												    </div>
												</div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/not-available.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
												</div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/missed.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black"> We go to great lengths to work with fresh and quality ingredients. Each day's bowls are made from scratch and in small batches. They sell out often, so we request that you order a day prior.
													</p>
												</div> -->
												<!-- <div class="coming-soon"> Coming Soon </div> -->
												<!-- <div class="alert alert-light">
													<img src="assets/images/sold-out.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black"> We go to great lengths to work with fresh and quality ingredients. Each day's bowls are made from scratch and in small batches. They sell out often, so we request that you order a day prior.
													</p>
												</div> -->

					                        	<!-- <div class="coming-soon"> Coming Soon </div> -->
					                        </div>
					                        <div id="Weekend" class="row product-list m-auto panel">
					                        	<div class="alert alert-light">
					                        		<img src="assets/images/weekend.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black"> We are currently open 5 days of the week but hope to start weekend deliveries soon. We will keep you posted.
													</p>
												</div>
					                        </div>
					                        <!-- <div id="NextWeek" class="row product-list m-auto panel">
					                        	<div class="alert alert-light">
													<img src="assets/images/next-week.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="green grain bowl">
													<p class="mt-2 body-text text-black">
													 We will post details of the bowls for next week by Sunday. Do come back and take a look.
													</p>
												</div>
					                        </div> -->
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
						<img src="assets/images/follow-instagram.png" class="img-fluid w-100 m-auto" alt="green grain bowl" title="follow us on instagram">
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
				$images = array_slice(scandir(__DIR__.'/assets/images/front-banner/'),2);
				$num = array_rand($images,1);
			?>
			<div class="full-slider">
				<div class="image">
					<img class="banner_image" src="assets/images/dummy-image.png" data-src="assets/images/<?php echo $images[$num]; ?>" alt="Green Grain Bowl" />
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
		<img src="assets/images/GGB-logo.png" width="75px" class="mt-5"/> 
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
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/tabs.js"></script>
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