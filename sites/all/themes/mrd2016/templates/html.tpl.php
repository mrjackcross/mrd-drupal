<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick-theme.css"/>

  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <!-- <link rel="stylesheet" type="text/css" href="<?php print base_path().drupal_get_path('theme', 'mrd2016'); ?>/css/ie/ieHacks.css"/> -->
    <script src="<?php print base_path().drupal_get_path('theme', 'mrd2016'); ?>/js/respond.js"></script>
    <script src="<?php print base_path().drupal_get_path('theme', 'mrd2016'); ?>/js/pie/PIE.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <![endif]-->

  <!--[if lt IE 8]>
    <link href="<?php print base_path().drupal_get_path('theme', 'mrd2015'); ?>/css/ie/bootstrap-ie7.css" rel="stylesheet">
  <![endif]-->


  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="home"></div>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
</body>
</html>
