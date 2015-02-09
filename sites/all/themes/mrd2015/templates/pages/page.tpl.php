<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container-fluid">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
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
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
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
		      
		      <?php print render($page['content']); ?>
	      </div>

    </section>
</div>
<footer class="footer container-fluid">
  <?php print render($page['footer']); ?>
</footer>
