<div id="Featured-Section" class="contextual-links-region">

  <div id="hero-image-wrapper">

    <div id="hero-image">
      <?php print render($content['field_banner_image']); ?>
    </div>

    <div class="hero-image-text-wrapper">
      <div class="hero-image-text">
        <?php print render($title_suffix); ?>
        <h1><?php print render($content['field_heading']); ?></h1>
      </div>
    </div>

  </div>



  <div class="txt-col container">
    <h3 class="section-intro"><?php print render($content['field_section_intro_block']); ?></h3>
    <button class="spacer-dot"></button>
  </div>
</div>
