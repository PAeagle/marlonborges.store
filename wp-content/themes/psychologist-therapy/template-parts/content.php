<?php
  global $post;
?>

<div class="col-lg-6 col-md-6 col-sm-6">
  <div id="post-<?php the_ID(); ?>" <?php post_class('post-box mb-4 p-3'); ?>>
    <?php if ( has_post_thumbnail() ) { ?>
      <div class="post-thumbnail">
        <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
      </div>
    <?php }?>
    <?php if ( get_theme_mod('psychologist_therapy_blog_admin_enable',true) || get_theme_mod('psychologist_therapy_blog_comment_enable',true) ) : ?>
      <div class="post-meta my-3">
        <?php if ( get_theme_mod('psychologist_therapy_blog_admin_enable',true) ) : ?>
          <i class="far fa-user mr-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a>
        <?php endif; ?>
        <?php if ( get_theme_mod('psychologist_therapy_blog_comment_enable',true) ) : ?>
          <span class="ml-3"><i class="far fa-comments mr-2"></i> <?php comments_number( esc_attr('0', 'psychologist-therapy'), esc_attr('0', 'psychologist-therapy'), esc_attr('%', 'psychologist-therapy') ); ?> <?php esc_html_e('comments','psychologist-therapy'); ?></span>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <h3 class="post-title mb-3 mt-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
    <div class="post-content">
      <?php echo wp_trim_words( get_the_content(), get_theme_mod('psychologist_therapy_post_excerpt_number',15) ); ?>
    </div>
    <p class="slider-button mt-4">
      <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Read More','psychologist-therapy'); ?></a>
    </p>
  </div>
</div>