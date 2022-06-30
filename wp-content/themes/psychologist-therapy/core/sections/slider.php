<?php if ( get_theme_mod('psychologist_therapy_blog_box_enable') ) : ?>

<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('psychologist_therapy_blog_slide_category'),
  'posts_per_page' => get_theme_mod('psychologist_therapy_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $arr_posts = new WP_Query( $args );
    if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
          <div class="main-bg-slider">
            <?php
              if ( has_post_thumbnail() ) :
                the_post_thumbnail();
              endif;
            ?>
          </div>
          <div class="blog_box">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 text-left align-self-center text-center text-md-left">
                  <?php if ( get_theme_mod('psychologist_therapy_title_unable_disable',true) ) : ?>
                    <h3 class="my-3"><?php the_title(); ?></a></h3>
                  <?php endif; ?>
                  <p class="mt-2"><?php echo wp_trim_words( get_the_content(), 20 ); ?></p>
                  <?php if ( get_theme_mod('psychologist_therapy_button_unable_disable',true) ) : ?>
                    <p class="slider-button mt-4">
                      <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Book An Appointment','psychologist-therapy'); ?></a>
                    </p>
                  <?php endif; ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
                  <div class="inner-image-slide">
                    <?php
                      if ( has_post_thumbnail() ) :
                        the_post_thumbnail();
                      endif;
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>