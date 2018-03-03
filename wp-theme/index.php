<?php
      /** Template Name: Home Page **/
      get_header();
?>


<div class="container home">
<?php	if( have_rows('carousel') ):
	  echo '<div class="carousel" ng-controller="carouselCtrl">';
	  while ( have_rows('carousel') ) : the_row();
	  $thumb = get_sub_field('image');
?>
	  <a class="slide" href="<?php echo get_the_permalink( get_sub_field('linked_post') ); ?>" style="background-image:url(<?php echo $thumb['url'] ?>);"></a>

<?php	  endwhile;
?>
	  <div class="carousel-nav">
	    <ul>
	      <li class="carousel-nav-item" data-ng-repeat="item in slides" data-ng-class="{ selected: $index == activeSlide }" data-ng-click="setActive($index);"></li>
	    </ul>
	  </div>
<?php	  echo '</div>';
	endif;
	$args = array(
	  'posts_per_page' => 24
	);
	$query = new WP_Query( $args );
	
	if( $query->have_posts() ) :
	  echo '<div class="projects-grid" id="projects">';
	  while( $query->have_posts() ) :
	    $query->the_post();
	    $thumb = get_field('project_thumbnail_image');
?>
	  <div class="project">
	    <a href="<?php the_permalink(); ?>">
	      <img src="<?php echo $thumb['url']; ?>" alt="<?php the_permalink(); ?>" />
	    </a>
	  </div>
<?php		endwhile;
	    echo '</div>';
	    wp_reset_postdata();
	  endif;
?>
  <div id="about">
    <div class="about-text">
      <?php the_field('about_content'); ?>
    </div>
<?php 	if( have_rows('about_images') ) :
	  while( have_rows('about_images') ) : the_row();
	  $image = get_sub_field('image');
?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php 	endwhile;
	endif;
?>
  </div>
  
<?php	if( have_rows('press') ):
	  echo '<div class="press projects-grid" id="press">';
	  echo '<h2>Press</h2>';
	  echo '<div class="separator"></div>';
	  while ( have_rows('press') ) : the_row();
	  $thumb = get_sub_field('image');
?>
	  <div class="project">
	    <a href="<?php the_sub_field('link'); ?>" target="_blank">
	      <img src="<?php echo $thumb['url']; ?>" alt="<?php echo $thumb['alt']; ?>" />
	    </a>
	  </div>

<?php	  endwhile;
	  echo '</div>';
	endif;
?>
</div>
<?php get_footer(); ?>