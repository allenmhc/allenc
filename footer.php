  </div> <!-- end of main -->

  <footer id="site-footer">
    <div class="centered-section">
      <div id="footer-alpha">

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

  <?php
    wp_footer();
  ?>

</body>

</html>
