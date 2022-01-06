<?php

/*
Template Name: Home

*/


get_header();?>
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
        <?php
        $home_sliders=get_field('home_slider','option');
        if($home_sliders){
          foreach($home_sliders as $home_slider){
            ?>
            <div class="slider-item" style="background-image:url(<?php echo $home_slider['slider_image']['url'];?>">
              <div class="overlay"></div>
              <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                  <div class="col-md-8 ftco-animate">
                    <div class="text w-100 text-center">
                      <h2><?php echo esc_html($home_slider['sub_header']);?></h2>
                      <h1 class="mb-4"><?php echo esc_html($home_slider['header']);?></h1>
                      <p><a href="<?php echo $home_slider['button_url'];?>" class="btn btn-white"><?php echo esc_html($home_slider['head_button']);?></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }

        }

         ?>

	    </div>
	  </div>

    <?php get_template_part('template-part/accounter'); ?>
    <section class="ftco-section bg-light ftco-no-pt">
      <div class="container">
    <?php get_template_part('template-part/service'); ?>
  </div>
</section>

    <?php get_template_part('template-part/counter');    ?>


  <?php get_template_part('template-part/testimonial'); ?>

  <?php get_template_part('template-part/faq');  ?>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <?php
            $blogs=get_field('blogs_subtitle','options');
              if($blogs){
                ?>
                <span class="subheading"><?php echo $blogs;?></span>

                <?php

              }
             ?>
             <?php
             $blog=get_field('blog_title','options');
               if($blog){
                 ?>
                  <h2><?php echo $blog;?></h2>
                 <?php

               }
              ?>

          </div>
        </div>
        <div class="row d-flex">
          <?php
          $args=array(
            'post_type'=>'post',
            'post_per_page'=>-1
          );
          $query=new Wp_Query($args);
          while($query->have_posts()){
            $query->the_post();
            
            get_template_part('template-part/blog');
          }
           ?>
        </div>
      </div>
    </section>
  <?php get_template_part('template-part/cta');  ?>
  <?php get_template_part('template-part/pricing-table'); ?>

   <?php get_footer();?>
