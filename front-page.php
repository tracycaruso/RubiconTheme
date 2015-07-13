<?php
/**
*	The custome template for the one-page style front page. Kicks in automatically.
*/

get_header(); ?>

<figure>
  <?php putRevSlider( "home" ) ?>
</figure>

  <div class="container philosophy" id="philosophy">
    <div class="row">
      <div class="column">
        <div class="message">
          <h1><img src="<?php bloginfo('template_directory'); ?>/images/our-philosophy-title.svg" alt="Our Philosophy"></h1>
        	<?php
        	$query = new WP_query('pagename=our-philosophy');
        		if($query->have_posts()){
        		while($query->have_posts()){
        			$query -> the_post();
        			the_content(); 
        		}
        	}
        	wp_reset_postdata();
        	?>
          
        </div><!--Message-->

      </div><!--column-->
    </div><!--row-->

  </div><!--container-->
  
  
  <figure class="desktop-slider"><?php putRevSlider( "event" ) ?></figure>
  <figure class="mobile-slider"><?php putRevSlider( "event-mobile" ) ?></figure>
  

<!--******** Eat ********-->

<div class="container eat" id="eat">
    <div class="row">
      <div class="column">
            <h1><img src="<?php bloginfo('template_directory'); ?>/images/eat-title.svg" alt="Eat"></h1>
      </div><!--column-->
    </div><!--row-->


<!-- Fruits De Mer -->
  

    <div class="row">
      <div class="column">
            <h2><span>Fruits De Mer</span></h2>
      </div><!--column-->
    </div><!--row-->

    <div class="row fruits">
      <div class="four columns">
       
        <?php 
          $args = array( 'post_type' => 'fruits', 'posts_per_page' => 10, 'category_name' => 'column-one' );
          $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
              the_field('promo_image');
            endwhile;
          wp_reset_postdata();
        ?>     


      </div><!--four-->


      <?php 
       $cattype = array('column-two', 'column-three');
        for($x = 0; $x <= 1; $x++) {
          echo '<div class="four columns">';
            $args = array( 'post_type' => 'fruits', 'posts_per_page' => 10, 'category_name' => $cattype[$x] );
            $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<h3>';
                the_title();
                echo '</h3>';
                
                echo '<p class="description">';
                the_field('item_description');
                echo '</p>';

                echo '<span class="price">';
                the_field('price');
                echo '</span>';
              endwhile;
            wp_reset_postdata();
          echo '</div><!--column-->';
        }
        ?>    
    </div><!--row-->


<!-- Hors D'Oeuvre -->
    <div class="row">
      <div class="column">
            <h2><span>Hors D'Oeuvre</span></h2>
      </div><!--column-->
    </div><!--row-->

    <div class="row horsdoeuvres">
      <?php 
       $cattype = array('column-one', 'column-two', 'column-three');
        for($x = 0; $x <= 2; $x++) {
          echo '<div class="four columns">';
            $args = array( 'post_type' => 'horsdoeuvres', 'posts_per_page' => 10, 'category_name' => $cattype[$x] );
            $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<h3>';
                the_title();
                echo '</h3>';
                
                echo '<p class="description">';
                the_field('item_description');
                echo '</p>';

                echo '<span class="price">';
                the_field('price');
                echo '</span>';
              endwhile;
            wp_reset_postdata();
          echo '</div><!--column-->';
        }
        ?>    
    </div><!--row-->


<!-- Salades -->
    <div class="row">
      <div class="column">
            <h2><span>Salades</span></h2>
      </div><!--column-->
    </div><!--row-->

    <div class="row salades">
      <?php 
       $cattype = array('column-one', 'column-two');
        for($x = 0; $x <= 1; $x++) {
          echo '<div class="six columns">';
            $args = array( 'post_type' => 'salades', 'posts_per_page' => 10, 'category_name' => $cattype[$x] );
            $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<h3>';
                the_title();
                echo '</h3>';
                
                echo '<p class="description">';
                the_field('item_description');
                echo '</p>';

                echo '<span class="price">';
                the_field('price');
                echo '</span>';
              endwhile;
            wp_reset_postdata();
          echo '</div><!--column-->';
        }
        ?>    
    </div><!--row-->


<!-- Sandwiches -->
    <div class="row">
      <div class="column">
            <h2><span>Sandwiches</span></h2>
      </div><!--column-->
    </div><!--row-->

    <div class="row sandwiches">
      <?php 
       $cattype = array('column-one', 'column-two', 'column-three');
        for($x = 0; $x <= 2; $x++) {
          echo '<div class="four columns">';
            $args = array( 'post_type' => 'sandwiches', 'posts_per_page' => 10, 'category_name' => $cattype[$x] );
            $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<h3>';
                the_title();
                echo '</h3>';
                
                echo '<p class="description">';
                the_field('item_description');
                echo '</p>';

                echo '<span class="price">';
                the_field('price');
                echo '</span>';
              endwhile;
            wp_reset_postdata();
          echo '</div><!--column-->';
        }
        ?>    
    </div><!--row-->


<!-- Entrees -->
    <div class="row">
      <div class="column">
            <h2><span>Entrees</span></h2>
      </div><!--column-->
    </div><!--row-->

   <div class="row entrees">
      <?php 
       $cattype = array('column-one', 'column-two', 'column-three');
        for($x = 0; $x <= 2; $x++) {
          echo '<div class="four columns">';
            $args = array( 'post_type' => 'entrees', 'posts_per_page' => 10, 'category_name' => $cattype[$x] );
            $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<h3>';
                the_title();
                echo '</h3>';
                
                echo '<p class="description">';
                the_field('item_description');
                echo '</p>';

                echo '<span class="price">';
                the_field('price');
                echo '</span>';
              endwhile;
            wp_reset_postdata();
          echo '</div><!--column-->';
        }
        ?>    
    </div><!--row-->

  <!--***** End Eat *****-->
  </div><!--container-->

<figure>
  <?php putRevSlider( "home-image" ) ?>
</figure>

<!--******** Drink ********-->

<div class="container drink" id="drink">
    <div class="row">
      <div class="column">
        <h1><img src="<?php bloginfo('template_directory'); ?>/images/drink-title.svg" alt="Drink"><h1>
      </div><!--column-->
    </div><!--row-->


<!-- Cocktails -->
    <div class="row">
      <div class="column">
            <h2><span>Cocktails</span></h2>
            <h4><span>Specialty</span></h4>
      </div><!--column-->
    </div><!--row-->

    <div class="row cocktails">
      <?php 
       $cattype = array('column-one', 'column-two', 'column-three');
        for($x = 0; $x <= 2; $x++) {
          echo '<div class="four columns">';
            $args = array( 'post_type' => 'cocktails', 'posts_per_page' => 10, 'category_name' => $cattype[$x] );
            $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<h3>';
                the_title();
                echo '</h3>';
                
                echo '<p class="description">';
                the_field('item_description');
                echo '</p>';

                echo '<span class="price">';
                the_field('price');
                echo '</span>';
              endwhile;
            wp_reset_postdata();
          echo '</div><!--column-->';
        }
        ?>    
    </div><!--row-->


<!-- Effervescents -->
    <div class="row">
      <div class="column">
            <h2><span>Effervescents</span></h2>
            <h4><span>Les Bulles</span></h4>
      </div><!--column-->
    </div><!--row-->

    <div class="row effervescents">
      <?php 
       $cattype = array('column-one', 'column-two', 'column-three');
        for($x = 0; $x <= 2; $x++) {
          echo '<div class="four columns">';
            $args = array( 'post_type' => 'effervescents', 'posts_per_page' => 10, 'category_name' => $cattype[$x] );
            $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<h3>';
                the_title();
                echo '</h3>';
                
                echo '<p class="description">';
                the_field('item_description');
                echo '</p>';

                echo '<span class="price">';
                the_field('price');
                echo '</span>';
              endwhile;
            wp_reset_postdata();
          echo '</div><!--column-->';
        }
        ?>    
    </div><!--row-->



<!-- Les Vins Blanc -->
    <div class="row">
      <div class="column">
            <h2><span>Les Vins</span></h2>
            <h4><span>Blancs</span></h4>
      </div><!--column-->
    </div><!--row-->

    <div class="row blancs">
      <?php 
       $cattype = array('column-one', 'column-two', 'column-three');
        for($x = 0; $x <= 2; $x++) {
          echo '<div class="four columns">';
            $args = array( 'post_type' => 'blancs', 'posts_per_page' => 10, 'category_name' => $cattype[$x] );
            $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<h3>';
                the_title();
                echo '</h3>';
                
                echo '<p class="description">';
                the_field('item_description');
                echo '</p>';

                echo '<span class="price">';
                the_field('price');
                echo '</span>';
              endwhile;
            wp_reset_postdata();
          echo '</div><!--column-->';
        }
        ?>    
    </div><!--row-->


<!-- Les Vins Rouge -->
    <div class="row">
      <div class="column">
            <h2><span>Les Vins</span></h2>
            <h4><span>Rouge</span></h4>
      </div><!--column-->
    </div><!--row-->

   <div class="row rouges">
      <?php 
       $cattype = array('column-one', 'column-two');
        for($x = 0; $x <= 1; $x++) {
          echo '<div class="six columns">';
            $args = array( 'post_type' => 'rouges', 'posts_per_page' => 10, 'category_name' => $cattype[$x] );
            $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<h3>';
                the_title();
                echo '</h3>';
                
                echo '<p class="description">';
                the_field('item_description');
                echo '</p>';

                echo '<span class="price">';
                the_field('price');
                echo '</span>';
              endwhile;
            wp_reset_postdata();
          echo '</div><!--column-->';
        }
        ?>    
    </div><!--row-->


<!-- Les Vins Rise -->
    <div class="row">
      <div class="column">
            <h2><span>Les Vins</span></h2>
            <h4><span>Rose</span></h4>
      </div><!--column-->
    </div><!--row-->

    <div class="row roses">
      <?php 
       $cattype = array('column-one', 'column-two', 'column-three');
        for($x = 0; $x <= 2; $x++) {
          echo '<div class="four columns">';
            $args = array( 'post_type' => 'roses', 'posts_per_page' => 10, 'category_name' => $cattype[$x] );
            $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<h3>';
                the_title();
                echo '</h3>';
                
                echo '<p class="description">';
                the_field('item_description');
                echo '</p>';

                echo '<span class="price">';
                the_field('price');
                echo '</span>';
              endwhile;
            wp_reset_postdata();
          echo '</div><!--column-->';
        }
        ?>    
    </div><!--row-->


<!-- Bier Pression -->
    <div class="row">
      <div class="column">
            <h2><span>Bier</span></h2>
            <h4><span>Pression</span></h4>
      </div><!--column-->
    </div><!--row-->

    <div class="row pressions">
      <?php 
       $cattype = array('column-one', 'column-two', 'column-three');
        for($x = 0; $x <= 2; $x++) {
          echo '<div class="four columns">';
            $args = array( 'post_type' => 'pressions', 'posts_per_page' => 10, 'category_name' => $cattype[$x] );
            $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<h3>';
                the_title();
                echo '</h3>';
                
                echo '<p class="description">';
                the_field('item_description');
                echo '</p>';

                echo '<span class="price">';
                the_field('price');
                echo '</span>';
              endwhile;
            wp_reset_postdata();
          echo '</div><!--column-->';
        }
        ?>    
    </div><!--row-->

  
<!-- Bier Pression En Bouteille -->
    <div class="row">
      <div class="column">
            <h2><span>Bier</span></h2>
            <h4><span>En Bouteille</span></h4>
      </div><!--column-->
    </div><!--row-->

    <div class="row bouteilles">
      <?php 
       $cattype = array('column-one', 'column-two');
        for($x = 0; $x <= 1; $x++) {
          echo '<div class="six columns">';
            $args = array( 'post_type' => 'bouteilles', 'posts_per_page' => 10, 'category_name' => $cattype[$x] );
            $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<h3>';
                the_title();
                echo '</h3>';
                
                echo '<p class="description">';
                the_field('item_description');
                echo '</p>';

                echo '<span class="price">';
                the_field('price');
                echo '</span>';
              endwhile;
            wp_reset_postdata();
          echo '</div><!--column-->';
        }
        ?>    
    </div><!--row-->

  <!--***** End Drink *****-->
  </div><!--container-->


<?php get_footer(); ?>
  