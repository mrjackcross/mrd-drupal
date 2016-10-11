<div id="Testimonials" class="<?php print $classes; ?> scrollblock container"<?php print $attributes; ?>>

  <div class="row">
    <div class="col-xs-12 section-header-col">
      <div class="banner-image">

        <?php print render($content['field_banner_image']); ?>

        <div class="banner-image-text">
          <h1><?php print render($content['field_heading']); ?></h1>
          <h2><?php print render($content['field_sub_heading']); ?></h2>
        </div>

      </div>
    </div>
  </div>

  <div class="row">
	  <div class="col-xs-12 txt-col contextual-links-region">

      <?php print render($title_suffix); ?>

      <h3 class="section-intro"><?php print render($content['field_section_intro_block']); ?></h3>

		  <?php print render($content['body']); ?>

    </div>

  </div>

</div>
