<?php
function nav_link($page) {
  $css_class = "section-title";
  $href = get_permalink(get_page_by_title($page)->ID);
  $attr = "";
  if (allenc_is_page($page)) { $css_class .= " active"; }
  if ($page == "home") { $href = get_home_url(); }
  if ($page == "about") { $attr = "rel=\"author\""; }
  echo "<a class=\"$css_class\" href=\"$href\" $attr>";
}
?>

<section class="spine-left spine-spacer"></section>

<nav id="main-nav">
  <section class="spine-section spine-home">
    <div class="spine-title">
      <?php nav_link("home") ?>
        <div class="spine-marker"></div>
        <h3 class="title-main">Home</h3>
        <div class="section-title-animated">
          <div class="title-separator"></div>
          <h3 class="title-additional">Origin</h3>
        </div>
      </a>
    </div>
  </section>

  <section class="spine-left spine-spacer"></section>

  <section class="spine-section spine-articles">
    <div class="spine-title">
      <?php nav_link("articles") ?>
        <div class="spine-marker"></div>
        <h3 class="title-main">Articles</h3>
        <div class="section-title-animated">
          <div class="title-separator"></div>
          <h3 class="title-additional">Noteworthy</h3>
        </div>
      </a>
    </div>
  </section>

  <section class="spine-left spine-spacer"></section>

  <section class="spine-section spine-archives">
    <div class="spine-title">
      <?php nav_link("archives") ?>
        <div class="spine-marker"></div>
        <h3 class="title-main">Posts</h3>
        <div class="section-title-animated">
          <div class="title-separator"></div>
          <h3 class="title-additional">Thoughtstream</h3>
        </div>
      </a>
    </div>
  </section>

  <section class="spine-left spine-spacer"></section>

  <section class="spine-section spine-about">
    <div class="spine-title">
      <?php nav_link("about") ?>
        <div class="spine-marker"></div>
        <h3 class="title-main">About</h3>
        <div class="section-title-animated">
          <div class="title-separator"></div>
          <h3 class="title-additional">Identity</h3>
        </div>
      </a>
    </div>
  </section>
</nav>

<section class="spine-left spine-spacer"></section>

<section class="spine-section">
  <div class="spine-right-section">
    <ul class="social-list clearfix">
      <li class="social-icon">
        <a href="http://twitter.com/#!/allenmhc" target="_blank" title="Twitter" class="twitter" rel="me">
          <span>Twitter</span>
        </a>
      </li>
      <li class="social-icon">
        <a rel="author" target="_blank" title="Google+" class="googleplus" rel="me" href="https://profiles.google.com/allenc">
          <span>Google+</span>
        </a>
      </li>
      <li class="social-icon">
        <a href="http://www.quora.com/Allen-Cheung" target="_blank" title="Quora" class="quora" rel="me">
          <span>Quora</span>
        </a>
      </li>
      <li class="social-icon">
        <a href="http://www.linkedin.com/in/allencheung" target="_blank" title="LinkedIn" class="linkedin" rel="me">
          <span>LinkedIn</span>
        </a>
      </li>
      <li class="social-icon">
        <a href="https://github.com/allenmhc" target="_blank" title="Github" class="github" rel="me">
          <span>Github</span>
        </a>
      </li>
    </ul>
  </div>
</section>
