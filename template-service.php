<?php

/*
Template Name: service

*/


get_header();?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Services</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		  <?php get_template_part('template-part/service'); ?>
    	</div>
    </section>

    <?php get_template_part('template-part/accounter'); ?>

      <?php get_template_part('template-part/pricing-table'); ?>

  <?php get_template_part('template-part/cta');  ?>

 <?php get_footer();?>
