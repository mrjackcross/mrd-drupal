<?php global $base_path, $base_url; ?>


<header id="navbar" role="banner" class="container-fluid <?php print $navbar_classes; ?>">
  <div class="container navbar-container">
    <div class="navbar-header container-fluid">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left page-scroll" href="<?php echo $base_url ?>" title="<?php print t('Home'); ?>">
          <img class="nav-logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav)): ?>
      <div class="navbar-collapse collapse pull-right">
        <nav role="navigation">
          <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->

            <li>
              <a class="page-scroll" href="<?php echo $base_url ?>/#Projects">projects</a>
            </li>
            <li>
              <a class="page-scroll" href="<?php echo $base_url ?>/#About">about</a>
            </li>
            <li>
              <a class="page-scroll" href="<?php echo $base_url ?>/#Testimonials">testimonials</a>
            </li>
            <li>
              <a class="page-scroll" href="<?php echo $base_url ?>/#Contact">contact</a>
            </li>
          </ul>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<div class="container-fluid">
  <section class="main-container row">
    <div class="container">
      <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>

      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

    </div>

    <?php print render($page['content']); ?>

  </section>
</div>


<footer class="footer container-fluid">

  <div class="social-container container">

    <a href="https://www.pinterest.com" target="_blank" title="Visit MRD London on Pinterest">
      <img class="social-button" src="<?php echo $base_url ?>/sites/default/files/images/static/pinterest.png">
    </a>

    <a href="https://www.instagram.com" target="_blank" title="Visit MRD London on Instagram">
      <img class="social-button" src="<?php echo $base_url ?>/sites/default/files/images/static/instagram.png">
    </a>

  </div>

  <div id="footer-hr"></div>
  <?php print render($page['footer']); ?>

  <a id="back-to-top" href="#home">back to top</a>

  <!-- <span class="pull-right" id="copyright">&copy; <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> 2016</span> -->
  <span class="pull-right" id="copyright">&copy; MRD London 2016</span>
</footer>
