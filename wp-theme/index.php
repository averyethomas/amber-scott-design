<?php
      /** Template Name: Home Page **/
      get_header();
?>


<div class="container home" ng-controller="homePageCtrl">
<?php	if( have_rows('carousel') ):
	  echo '<div class="carousel" ng-controller="carouselCtrl>';
	  while ( have_rows('carousel') ) : the_row();
	  $thumb = get_sub_field('image');
?>
	  <a class="slide" href="#" ng-show="slide" style="background-image:url(<?php echo $thumb['url'] ?>);"></a>

<?php	  endwhile;
	  echo '</div>';
	endif;
	$args = array(
	  'posts_per_page' => 24
	);
	$query = new WP_Query( $args );
	
	if( $query->have_posts() ) :
	  echo '<div class="projects-grid">';
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
  </div>
  
<?php	if( have_rows('press') ):
	  echo '<div class="press projects-grid">';
	  echo '<h2>Press</h2>';
	  while ( have_rows('press') ) : the_row();
	  $thumb = get_sub_field('image');
?>
	  <div class="project">
	    <a href="<?php the_sub_field('link'); ?>" target="_blank">
	      <img src="<?php echo $thumb['url']; ?>" alt="<?php the_permalink(); ?>" />
	    </a>
	  </div>

<?php	  endwhile;
	  echo '</div>';
	endif;
?>

<?php get_footer(); ?>