  </div> <!-- end of main -->

  <footer id="site-footer">
    <div class="centered-section">
      <div id="footer-alpha">
        <h4>@allenmhc</h4>
          <img id="twitter-profile-pic" />
        <div id="tweets"></div>
      </div>
      <div id="footer-beta">
        <a id="rss" href="<?php bloginfo('rss2_url'); ?>">
          <span>subscribe to rss</span>
        </a>

        <p class="copyright">
          <span>copyright &copy;&nbsp;<?php
            $start_year = 2011;
            $curr_year = date('Y');
            echo $start_year . ($start_year == $curr_year ? '' : ' - ' . $curr_year);
          ?></span>&nbsp;
        </p>

        <p class="render-time">
          <?php
            global $render_time_start;
            $render_time_end = microtime(true);
          ?>
          this page took gnomes <?php echo round($render_time_end - $render_time_start, 3) ?>s to crank out
        </p>
      </div>
    </div>
  </footer>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="scripts/lib/jquery-1.8.3.min.js">\x3C/script>')</script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/1.7.2/moment.min.js"></script>
  <script>window.jQuery || document.write('<script src="scripts/lib/moment-1.7.2.min.js">\x3C/script>')</script>

  <?php
    wp_footer();
  ?>

  <script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/lib/spin.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/twitter.js"></script>
</body>

</html>
