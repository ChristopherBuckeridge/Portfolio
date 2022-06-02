<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('engineering-manufacturing-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('engineering-manufacturing-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-md-12">
        <p class="mb-0 py-3 text-center text-md-left">
          <?php
            if (!get_theme_mod('engineering_manufacturing_footer_text') ) { ?>
              <?php esc_html_e('Engineering Manufacturing WordPress Theme','engineering-manufacturing'); ?>
            <?php } else {
              echo esc_html(get_theme_mod('engineering_manufacturing_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('engineering_manufacturing_copyright_enable', true) == true ) : ?>
          <?php 
            /* translators: %s: Misbah WP */ 
            printf( esc_html__( ' By %s', 'engineering-manufacturing' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url(__('https://wordpress.org', 'engineering-manufacturing' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */ printf( esc_html__( ' | Proudly powered by %s', 'engineering-manufacturing' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>