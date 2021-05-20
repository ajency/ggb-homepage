<?php 
/**
 * Template Name: featured-bowls
 */
get_header();  ?>


<section class="pl-2 pr-2">
    <div class="menu_featured_bg"></div>
    <div class="container">
        <div class="wpb_wrapper pt-6">
            <h2 class="font-weight-bold d-block mobile-header mb-2 display-4 aj-home-title text-center text-white">Our Featured bowls</h2>
        </div>    
        <div class="bowl_listing autoScrollPane featured-bowl">
            <div class="text-center ml-0 pl-2 pr-2">
                <div class="imageWrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bowls/bowl1.png">
                </div>
                <div class="content-wrap">
                    <h3 class="product-title h3 font-weight-bold mb-2 mt-3 p-title text">Rice Noodle Bowl</h3>
                    <div class="product-content  pb-4">
                        <h5 class="font-weight-light font-size-16 mt-0 mb-lg-0">Soft rice noodles, crunchy cucumber, carrots, bell peppers, red cabbage, sweet-sour pineapple chunks and tofu / paneer / prawns. A tangy, zingy onion-chilli dressing on the side. This one's as colourful as they get, and truly lit!</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="<?php echo get_site_url(); ?>/goa-salad-bowl-online-order/" class="cart-btn">Order Now</a>
                </div>
            </div>
            <div class="text-center ml-0 pl-2 pr-2">
                <div class="imageWrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bowls/bowl1.png">
                </div>
                <div class="content-wrap">
                    <h3 class="product-title h3 font-weight-bold mb-2 mt-3 p-title text">Cracked Wheat & Falafel Bowl</h3>
                    <div class="product-content  pb-4">
                        <h5 class="font-weight-light font-size-16 mt-0 mb-lg-0">A very tabbouleh-inspired salad - greens, cucumber, tomato, pickled beetroot, onions with cracked wheat and fresh herbs mixed in a lime dressing. Falafel and roasted eggplant with a red pepper dip. Olives, pomegranate and feta* to complete the middle eastern vibe! You could also add herbed chicken. PS: Dip is not the dressing.</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="<?php echo get_site_url(); ?>/goa-salad-bowl-online-order/" class="cart-btn">Order Now</a>
                </div>
            </div>
            <div class="text-center ml-0 pl-2 pr-2">
                <div class="imageWrap ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bowls/bowl1.png">
                </div>
                <div class="content-wrap">
                    <h3 class="product-title h3 font-weight-bold mb-2 mt-3 p-title text">Mango Barley Bowl</h3>
                    <div class="product-content  pb-4">
                        <h5 class="font-weight-light font-size-16 mt-0 mb-lg-0">Mango wedges add a lovely hint of sweetness in this bowl, and a handful of walnuts balance that out. Pomegranate arils, bell peppers, red cabbage, cucumber, greens and barley are the crunch and colour elements of this bowl.</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="<?php echo get_site_url(); ?>/goa-salad-bowl-online-order/" class="cart-btn">Order Now</a>
                </div>
            </div>
        </div> 
    </div>
</section>

<?php get_footer(); ?>