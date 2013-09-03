<!doctype html>
<!-- [if IE 8]><html lang="en" class="ie8"> <![endif]-->
<!-- [if !IE]><html <?php language_attributes();?>> <![endif]-->
<html>
    <head>
        <meta charset='<?php bloginfo('charset'); ?>'>
        
        <title> <?php wp_title('|', true, 'right' ); ?><?php bloginfo('name'); ?> </title>
        <meta name="description" content="<?php bloginfo('description');?>">
        <link rel="author" href="Rene Escobar">

        <!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,300italic,600italic|Bitter:400,700' rel='stylesheet' type='text/css'>
        <!-- script -->
        <?php wp_enqueue_script("jquery"); ?>

        <?php wp_head();?>
        <script type="text/javascript"
   src="<?php bloginfo("template_url"); ?>/js/custom.js"></script>
    </head>
    <body <?php body_class(); ?>>
    	<!-- Header -->
    	
        <header class="main-header align-center section-content">
        	<a href="<?php echo home_url();?>" class="logo"><img src="<?php print IMAGES ; ?>/logo.png" alt=" <?php bloginfo('name') ?>"></a>
        	<nav class="main-nav">
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => '',
                        'menu_class' => 'inline'
                    ));
                    ?>
        	</nav>
        </header>