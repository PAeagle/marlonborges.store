<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('psychologist-therapy-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('psychologist-therapy-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-md-12">
        <p class="mb-0 py-3 text-center text-md-left">
          <?php
            if (!get_theme_mod('psychologist_therapy_footer_text') ) { ?>
              <a href="<?php echo esc_url(__('https://www.misbahwp.com/themes/free-psychologist-therapy-wordpress-theme/', 'psychologist-therapy' )); ?>" target="_blank">
              <?php esc_html_e('Psychologist Therapy WordPress Theme ','psychologist-therapy'); ?></a>
            <?php } else {
              echo esc_html(get_theme_mod('psychologist_therapy_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('psychologist_therapy_copyright_enable', true) == true ) : ?>
            <?php 
            /* translators: %s: Misbah WP */ 
            printf( esc_html__( 'by %s', 'psychologist-therapy' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url(__('https://wordpress.org', 'psychologist-therapy' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'psychologist-therapy' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
