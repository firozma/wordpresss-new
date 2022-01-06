<?php

/*
Template Name: contact

*/


get_header();?>
    <!-- END nav -->
    <?php
      $contact_image=get_field('contact_images','options');

     ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $contact_image['url'];?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url(); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php the_title(); ?><i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread"><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4"><?php echo the_field('contact_form_title','options'); ?></h3>
										<div id="form-message-warning" class="mb-4"></div>
					      		<div id="form-message-success" class="mb-4">
					            <?php echo the_field('contact_form_description','options'); ?>
					      		</div>
										<div id="contactForm" name="contactForm" class="contactForm">
										<?php echo do_shortcode('	[contact-form-7 id="149" title="Contact Form"]'); ?>
                  </div>
									</div>
								</div>
								<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-md-5 p-4">
										<h3><?php echo the_field('get_tutch','options'); ?></h3>
										<p class="mb-4"><?php echo the_field('get_descriptions','options'); ?></p>
                    <?php
                    $contact_socials=get_field('social_section','options');
                    if($contact_socials){
                      foreach($contact_socials as $contact_social){
                        ?>
                        <div class="dbox w-100 d-flex align-items-start">
                          <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa <?php echo $contact_social['contact_icons']; ?>"></span>
                          </div>
                          <div class="text pl-3 mt-2">
                              <?php echo $contact_social['contact_description']; ?>
                          </div>
                        </div>

                        <?php
                      }
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

   	<div id="map" class="map"></div>

  <?php   get_template_part('template-part/cta');   ?>
  <?php get_footer();?>
