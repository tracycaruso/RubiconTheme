<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

	
  <?php wp_head(); ?>
  
</head>
<body>

  

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header>
    <div class="container nav top" id="home">
      <div class="row">
        <div class="column">
          <nav class="top">
            <ul>

              <li><a href="http://rubiconhbg.com/#home"><img src="<?php bloginfo('template_directory'); ?>/images/home.svg" alt="Home"></a></li>
              <li><a href="http://rubiconhbg.com/#philosophy"><img src="<?php bloginfo('template_directory'); ?>/images/our-philosophy.svg" alt="Our Philosophy"></a></li>
              <li><span class="eat-drink"><a href="http://rubiconhbg.com/#eat"><img src="<?php bloginfo('template_directory'); ?>/images/eat.svg" alt="Menu" class="eat-nav"></a><a href="http://rubiconhbg.com/#drink"><img src="<?php bloginfo('template_directory'); ?>/images/drink.svg" alt="Menu" class="drink-nav"></a></span></li>
              <li><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rubicon-harrisburg.svg" alt="Rubicon Harrisburg Logo"></a></li>
              <li><a href="http://rubiconhbg.com/gallery-2/"><img src="<?php bloginfo('template_directory'); ?>/images/photo-gallery.svg" alt="Photo Gallery"></a></li>
              <li><a href="http://rubiconhbg.com/private-parties/"><img src="<?php bloginfo('template_directory'); ?>/images/private-parties.svg" alt="Private Parties"></a></li>
              <li><a href="http://rubiconhbg.com/#contact"><img src="<?php bloginfo('template_directory'); ?>/images/contact.svg" alt="Contact"></a></li>
              

            </ul>
          </nav>
        </div><!--column-->
      </div><!--row-->
    </div><!--container-->

    <div class="container nav scroll">
       <div class="row">
        <div class="column">
          <nav class="on-scroll">
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">Our Philosophy</a></li>
              <li><a href="">Eat</a></li>
              <li><a href="">Drink</a></li>
              <li><a href="">Photo Gallery</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </nav>

        </div>
      </div>
    </div>
</header>

<div class="container nav header">
  <div class="row">
    <div class="column">
      <a class="nav-logo" href="#mobile-nav"><img src="<?php bloginfo('template_directory'); ?>/images/rubicon-harrisburg.svg" alt="Contact"></a>

      <a class="anchor-link" href="#mobile-nav"><img src="<?php bloginfo('template_directory'); ?>/images/menu.svg" alt="Contact"></a>
</div>
  </div>
</div>

