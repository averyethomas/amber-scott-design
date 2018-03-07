<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><? if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
	<!-- FONT AWESOME -->
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  </head>
  <body ng-app="angularApp">
    <div class="container" ng-controller="mainCtrl">
      <header>
        <div class="logo">
	    <a href="/colorandstory-wp/">
		<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-long.png">
	    </a>
	</div>
        <div class="mobileNav" ng-click="showMenu = !showMenu">
          <h3>&#9776;</h3>
        </div>
        <div class="nav" ng-show="showMenu">
          <ul>
            <?php asd_nav(); ?>
          </ul>
        </div>
      </header>
    </div>

