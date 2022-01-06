<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Accounting - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <?php wp_head();?>
  </head>
  <body>

    <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="bg-wrap">
							<div class="row">
								<div class="col-md-6 d-flex align-items-center">
									<p class="mb-0 phone pl-md-2">
                    <?php
                    $header_setting=get_field('header_phone','options');
                    if($header_setting){
                      ?>
                      	<a href="tel: <?php echo $header_setting; ?>" class="mr-2"><span class="fa fa-phone mr-1"></span><?php echo $header_setting; ?></a>
                      <?php
                    }
                     ?>

                     <?php
                     $header_email=get_field('headder_email','options');
                     if($header_email){

                       ?>
                       	<a href="email: <?php echo $header_email; ?>" class="mr-2"><span class="fa fa-paper-plane mr-1"></span><?php echo $header_email; ?></a>
                       <?php
                     }
                      ?>
									</p>
								</div>
								<div class="col-md-6 d-flex justify-content-md-end">
									<div class="social-media">
						    		<p class="mb-0 d-flex">
                      <?php
                      $social_icons=get_field('header_social','options');
                      if($social_icons){

                        foreach($social_icons as $social_icon){

                          ?>
                          	<a href="<?php echo $social_icon['link']; ?>" class="d-flex align-items-center justify-content-center">
                              <span class="fa <?php echo $social_icon['social_icon']; ?>"><i class="sr-only">Facebook</i></span>
                            </a>
                          <?php

                        }
                      }
                       ?>


						    		</p>
					        </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
        <?php
          $header_logo=get_field('header_logo','options');

          if($header_logo){
            ?>
            <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><?php echo esc_html($header_logo);?></a>

            <?php
          }
         ?>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>




            <?php
          wp_nav_menu(array(
            'theme_location'=>'primary_menu',
            'menu_class'=>'navbar-nav m-auto',

          ));
          ?>


	    </div>
	  </nav>
    <!-- END nav -->
