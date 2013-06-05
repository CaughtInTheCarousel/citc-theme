<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"> 
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html <?php language_attributes(); ?> class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title>Caught in the Carousel<?php wp_title(' - ', true, 'left'); ?></title>
		<meta property="fb:app_id" content="377164942395431" />  
		<meta property="fb:admins" content="649675722" /> 
				
	  <!-- Set the viewport width to device width for mobile -->
	  <meta name="viewport" content="width=device-width" />
	  <!-- For third-generation iPad with high-resolution Retina display: -->
	  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicon-144-black.png">
	  <!-- For iPhone with high-resolution Retina display: -->
	  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/favicon-114-black.png">
	  <!-- For first- and second-generation iPad: -->
	  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/favicon-72-black.png">
	  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
	  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/favicon-57-black.png">
	  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
	  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32-black.ico" type="image/x-icon" />

		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
				
	</head>
	
	<body <?php body_class(); ?>>


	  <div class="row header">
	    <div class="two columns hide-for-small">
	      <img src="<?php echo get_template_directory_uri(); ?>/images/tagline.png" class="tagline-large" />
	    </div>
	    <div class="eight columns logo-area">
	      <a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a>
	    </div>
	    <div class="two columns icon-area">
	      <a href="#" class="podcast-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/podcast.png" /></a>
	      <img src="<?php echo get_template_directory_uri(); ?>/images/tagline.png" class="show-for-small tagline-mobile" />
	      <a href="<?php bloginfo('rss_url'); ?>" class="rss-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/rss.png" class="hide-for-small" /><img src="<?php echo get_template_directory_uri(); ?>/images/rss-mobile.png" class="show-for-small" /></a>
	    </div>
	  </div>

	  <div class="row">
	    <div class="twelve columns">
	    	<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
	    	<?php include 'searchform.php'; ?>
	    	</ul>
	    </div>
	  </div>
	  <!-- End Header -->