<?php get_header();  ?>

<section class="post-content page-content">
	<div class="container p5 mt-5 pdt-3">
	  	<div class="row">
		    <div class="col  offset-xl-2 col-xl-8 col12">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
					<?php the_content(); ?>

					<?php endwhile; ?>
				<?php endif; ?>

		    </div>
	  	</div>


	</div>
</section>

<div class="container p5">
  <div class="row">
    <div class="col-12">
       <hr>
    </div>
  </div>
</div>

<?php get_footer(); ?>