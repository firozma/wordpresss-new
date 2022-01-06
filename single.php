<?php get_header(); ?>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url(' <?php echo get_template_directory_uri(); ?>/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Blog Single</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<p>
             <?php the_post_thumbnail(); ?>
            </p>
            <h2 class="mb-3"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <?php echo get_the_tag_list(); ?>
              </div>
            </div>
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio bio-img mr-5">
                <?php
              $user = wp_get_current_user();
                 global $post;
                  $author_id = $post->post_author;
               
              if ( $user ){
                  ?>
                 <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="<?php echo get_the_author_meta( 'display_name', $author_id ); ?> " class="img-fluid mb-4">
              <?php

               } 
               ?>
                
              </div>
              <div class="desc">
                <h3><?php echo get_the_author_meta( 'display_name', $author_id ); ?></h3>
                <p><?php echo get_the_author_meta( 'description', $author_id ); ?></p>
              </div>
            </div>


            <div class="pt-5 mt-5">
              <?php 
            
             if ( comments_open() || get_comments_number() ) :
                 comments_template();
             endif;

                           ?>
              
              <!-- END comment-list -->
              
              
            </div>


          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

            <?php
            if ( is_active_sidebar( 'sidebar' ) ){
              dynamic_sidebar('sidebar');
            }

               ?>
      

           

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->

    <?php get_template_part('template-part/cta');  ?>

  <?php get_footer(); ?>