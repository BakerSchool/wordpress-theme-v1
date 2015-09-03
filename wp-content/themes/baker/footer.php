
    <footer id="footer" class="footer">
      <div class="wrapper">

        <nav class="footer-nav">
          <?php wp_nav_menu(array('depth' => 1)); ?>
        </nav>

        <?php dynamic_sidebar('Footer'); ?>

        <div class="footer-social">
          <a href="https://www.facebook.com/bakerdemschool" target="_blank">
            <svg class="social-icon" viewBox="0 0 40 40">
              <use xlink:href="#icon-circle-facebook"></use>
            </svg>
          </a>
          <a href="http://twitter.com/BakerDemSchool" target="_blank">
            <svg class="social-icon" viewBox="0 0 40 40">
              <use xlink:href="#icon-circle-twitter"></use>
            </svg>
          </a>
          <a href="https://instagram.com/bakerdemschool/" target="_blank">
            <svg class="social-icon" viewBox="0 0 40 40">
              <use xlink:href="#icon-circle-instagram"></use>
            </svg>
          </a>
        </div>

      </div>
    </footer>

  	<?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory'); ?>/dist/js/main.min.js"></script>
  </body>
</html>