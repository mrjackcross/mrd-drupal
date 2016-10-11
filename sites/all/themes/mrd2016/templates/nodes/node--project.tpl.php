<?php
if ($view_mode == "teaser") {

  /* ////////////////////////
   //////////Teaser///////////
  //////////////////////// */ ?>

  <div class="container banner-image">

    <div class="drop-shadow" id="featured-project-banner">

      <?php print render($content['field_banner_image']); ?>

    </div>

  </div>

  <div class="container">

    <div class="row" id="featured-project-strap">

      <h1 class="banner-heading"><?php print render($content['field_featured_project_strapline']); ?></h1>

    </div>

  </div>
  <div class="container" id="featured-project-details-wrapper">
    <div id="featured-project-details" class="well clearfix"<?php print $attributes; ?>>

      <div class="row">
        <div class="col-sm-5 txt-col">
          <h2><?php print 'featured project:'; ?></h2>
          <a href="<?php print $node_url; ?>"><h1><?php print render($content['field_heading']); ?></h1></a>
          <?php print render($content['body']); ?>
        </div>

        <div class="col-sm-7 img-col">
          <?php print render($content['field_project_detail_image']); ?>
        </div>
      </div>

    </div>
  </div>

<?php } else if ($view_mode == "grid_item") {

  /* ////////////////////////
   //////////Grid View///////////
  //////////////////////// */ ?>

  <div class="project-grid-item-wrapper">
    <?php
    print render($content['field_project_grid_image']); ?>
    <a class="project-grid-item-name" href="<?php print $node_url; ?>"><?php print render($content['field_heading']); ?></a>
  </div>

  <?php
}

else { ?>

<?php
/* ////////////////////////
 ////////Full View//////////
//////////////////////// */ ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div id="carousel-controls-wrapper" class="row">
    
    <div id="project-carousel-prev"></div>
    
    <div class="col-xs-12" id="project-image-carousel-container">
      <?php print render($content['field_project_image']); ?>
    </div>
    
    <div id="project-carousel-next"></div>
    
  </div>
  <div class="container">

    <div class="row">
      <div class="col-xs-12 txt-col contextual-links-region">

        <?php print render($title_prefix); ?>
        <h3>
          <?php print render($content['field_heading']); ?>
        </h3>
        <?php print render($title_suffix); ?>

        <?php print render($content['body']); ?>

        <?php
        if (!empty($content['field_project_client'])) { ?>
          <div class="row">
            <div class="col-xs-2">
              <p class="project-attribute-label">The Client</p>
            </div>
            <div class="col-xs-10">
              <p class="project-attribute"><?php print $node->field_project_client['und'][0]['value'];?></p>
            </div>
          </div>
          <?php
        } ?>

        <?php
        if (!empty($content['field_project_brief'])) { ?>
          <div class="row">
            <div class="col-xs-2">
              <p class="project-attribute-label">The Brief</p>
            </div>
            <div class="col-xs-10">
              <p class="project-attribute"><?php print $node->field_project_brief['und'][0]['value'];?></p>
            </div>
          </div>
          <?php
        } ?>

        <?php
        if (!empty($content['field_project_concept'])) { ?>
          <div class="row">
            <div class="col-xs-2">
              <p class="project-attribute-label">The Concept</p>
            </div>
            <div class="col-xs-10">
              <p class="project-attribute"><?php print $node->field_project_concept['und'][0]['value'];?></p>
            </div>
          </div>
          <?php
        } ?>

        <?php
        if (!empty($content['field_project_date'])) { ?>
          <div class="row">
            <div class="col-xs-2">
              <p class="project-attribute-label">Date</p>
            </div>
            <div class="col-xs-10">
              <p class="project-attribute"><?php print $node->field_project_date['und'][0]['value'];?></p>
            </div>
          </div>
          <?php
        } ?>

        <?php
        if (!empty($content['field_project_weeks'])) { ?>
          <div class="row">
            <div class="col-xs-2">
              <p class="project-attribute-label">Weeks</p>
            </div>
            <div class="col-xs-10">
              <p class="project-attribute"><?php print $node->field_project_weeks['und'][0]['value'];?></p>
            </div>
          </div>
          <?php
        } ?>

      </div>


    </div>


    <div class="project-detail-grid container">

      <div class="spacer">
        <button class="spacer-dot"></button>
      </div>

      <h3>
        All Projects
      </h3>
      <p>
        Click below to view some of our portfolio
      </p>
      <div id="project-detail-grid-container" class="drop-shadow col-xs-12">
        <?php print views_embed_view('project_grid', 'projects_grid_all'); ?>
      </div>
    </div>

  </div>

  <?php } ?>
