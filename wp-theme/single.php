<?php   get_header();
	while ( have_posts() ) : the_post();
	  $hero = get_field('project_hero_image');
?>
<div class="container single-page">
  <div class="project">
    <div class="hero" style="background-image:url(<?php echo $hero['url']; ?>);"></div>
    <div class="content">
      <h1><?php the_title(); ?></h1>
      <h2><?php echo the_field('subtitle'); ?></h2>
      <div class="separator"></div>
      <?php the_content(); ?>
    </div>
<?php	if( have_rows('project_gallery_row') ):
	  echo '<div class="gallery">';
	  while ( have_rows('project_gallery_row') ) : the_row();
	    echo '<div class="gallery-item">';
		if( get_row_layout() == 'single' ):
		$image = get_sub_field('image');
?>
	      <div class="single">
		<div class="content-item">
		  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div>
	      </div>
<?php		elseif( get_row_layout() == 'double' ):
		$left = get_sub_field('image_left');
		$right = get_sub_field('image_right');
?>
		<div class="double">
		  <div class="content-item">
		    <img src="<?php echo $left['url']; ?>" alt="<?php echo $left['alt']; ?>" />
		  </div>
		  <div class="content-item">
		    <img src="<?php echo $right['url']; ?>" alt="<?php echo $right['alt']; ?>" />
		  </div>
		</div>
<?php		elseif( get_row_layout() == 'left_text' ):
		$image = get_sub_field('image');
?>
		  <div class="left_text">
		    <div class="content-item">
		      <h2><?php the_sub_field('text_header'); ?></h2>
		      <p><?php the_sub_field('text'); ?></p>
		    </div>
		    <div class="content-item">
		      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		    </div>
		  </div>
<?php 		elseif( get_row_layout() == 'right_text' ):
		$image = get_sub_field('image');
?>
		<div class="right_text">
		  <div class="content-item">
		    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		  </div>
		  <div class="content-item">
		    <h2><?php the_sub_field('text_header'); ?></h2>
		    <p><?php the_sub_field('text'); ?></p>
		  </div>
		</div>
<?php 		elseif( get_row_layout() == 'triple_tall_left' ):
		$top = get_sub_field('image_short_top');
		$bottom = get_sub_field('image_short_bottom');
		$tall = get_sub_field('image_tall'); 
?>
		<div class="triple_tall_left">
		  <div class="content-item tall" style="background-image: url(<?php echo $tall['url']; ?>)"></div>
		  <div class="content-item">
		    <img src="<?php echo $top['url']; ?>" alt="<?php echo $top['alt']; ?>" />
		    <img src="<?php echo $bottom['url']; ?>" alt="<?php echo $bottom['alt']; ?>" />
		  </div>
		</div>
<?php 		elseif( get_row_layout() == 'triple_tall_right' ):
		$top = get_sub_field('image_short_top');
		$bottom = get_sub_field('image_short_bottom');
		$tall = get_sub_field('image_tall'); 
?>
		<div class="triple_tall_right">
		  <div class="content-item">
		    <img src="<?php echo $top['url']; ?>" alt="<?php echo $top['alt']; ?>" />
		    <img src="<?php echo $bottom['url']; ?>" alt="<?php echo $bottom['alt']; ?>" />
		  </div>
		  <div class="content-item tall" style="background-image: url(<?php echo $tall['url']; ?>)"></div>
		</div>
<?php		elseif( get_row_layout() == 'six' ):
		$one = get_sub_field('image_one');
		$two = get_sub_field('image_two');
		$three = get_sub_field('image_three');
		$four = get_sub_field('image_four');
		$five = get_sub_field('image_five');
		$six = get_sub_field('image_six');
?>
		<div class="tiles" ng-if="item.acf_fc_layout == 'six'">
		  <div class="content-item">
		    <img src="<?php echo $one['url']; ?>" alt="<?php echo $one['alt']; ?>" />
		  </div>
		  <div class="content-item">
		    <img src="<?php echo $two['url']; ?>" alt="<?php echo $two['alt']; ?>" />
		  </div>
		  <div class="content-item">
		    <img src="<?php echo $three['url']; ?>" alt="<?php echo $three['alt']; ?>" />
		  </div>
		  <div class="content-item">
		    <img src="<?php echo $four['url']; ?>" alt="<?php echo $four['alt']; ?>" />
		  </div>
		  <div class="content-item">
		    <img src="<?php echo $five['url']; ?>" alt="<?php echo $five['alt']; ?>" />
		  </div>
		  <div class="content-item">
		    <img src="<?php echo $six['url']; ?>" alt="<?php echo $six['alt']; ?>" />
		  </div>
		</div>	
<?php 		elseif( get_row_layout() == 'video' ):
		$url = get_sub_field('video_embed');
?>
		<div class="video">
		  <div class="content-item">
                    <iframe src="<?php echo $url; ?>" frameborder="0"></iframe>
		  </div>
	        </div>
<?php		endif;
	      echo '</div>';
	  endwhile;
	  echo '</div>';
	endif;
?>
      </div>
  </div>
</div>
<?php endwhile;
      get_footer();
?>