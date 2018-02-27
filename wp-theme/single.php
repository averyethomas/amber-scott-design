<?php   get_header();
	while ( have_posts() ) : the_post();

?>
<div class="container single-page">
  <div class="project">
    <div class="hero">
      <img />
    </div>
    <?php the_content(); ?>
  </div>
</div>
      <div class="project">
        <div class="hero">
	  <img ng-src="{{singleProject.acf.project_hero_image.url}}">
	</div>
        <div class="gallery">
	  <div class="gallery-item" ng-repeat="item in singleProject.acf.project_gallery_row">
	    
	    <div class="left_text" ng-if="item.acf_fc_layout == 'left_text'">
	      <div class="content-item">
		<h1 ng-bind-html="item.text_header | preserveHtml"></h1>
		<p ng-bind-html="item.text | preserveHtml"></p>
	      </div>
	      <div class="content-item">
		<img ng-src="{{item.image.url}}">
	      </div>
	    </div>
	    
	    <div class="right_text" ng-if="item.acf_fc_layout == 'right_text'">
	      <div class="content-item">
		<img ng-src="{{item.image.url}}">
	      </div>
	      <div class="content-item">
		<h1 ng-bind-html="item.text_header | preserveHtml"></h1>
		<p ng-bind-html="item.text | preserveHtml"></p>
	      </div>
	    </div>
	    
	    <div class="single" ng-if="item.acf_fc_layout == 'single'">
	      <div class="content-item">
		<img ng-src="{{item.image.url}}">
	      </div>
	    </div>
	    
	    <div class="double" ng-if="item.acf_fc_layout == 'double'">
	      <div class="content-item">
		<img ng-src="{{item.image_left.url}}">
	      </div>
	      <div class="content-item">
		<img ng-src="{{item.image_right.url}}">
	      </div>
	    </div>
	    
	    <div class="triple_tall_right" ng-if="item.acf_fc_layout == 'triple_tall_right'">
	      <div class="content-item">
		<img ng-src="{{item.image_short_top.url}}">
		<img ng-src="{{item.image_short_bottom.url}}">
	      </div>
	      <div class="content-item tall" ng-style="{'background-image':'url({{item.image_tall.url}})'}"></div>
	    </div>
	    
	    <div class="triple_tall_left" ng-if="item.acf_fc_layout == 'triple_tall_left'">
	      <div class="content-item tall" ng-style="{'background-image':'url({{item.image_tall.url}})'}"></div>
	      <div class="content-item">
		<img ng-src="{{item.image_short_top.url}}">
		<img ng-src="{{item.image_short_bottom.url}}">
	      </div>
	    </div>
	    
	    <div class="video" ng-if="item.acf_fc_layout == 'video'">
	      <div class="content-item">
		<iframe src="{{item.video_embed | trustAsResourceUrl}}" frameborder="0" allowfullscreen></iframe>
	      </div>
	    </div>
	    <div class="tiles" ng-if="item.acf_fc_layout == 'six'">
	      <div class="content-item">
		<img ng-src="{{item.image_one.url}}">
	      </div>
	      <div class="content-item">
		<img ng-src="{{item.image_two.url}}">
	      </div>
	      <div class="content-item">
		<img ng-src="{{item.image_three.url}}">
	      </div>
	      <div class="content-item">
		<img ng-src="{{item.image_four.url}}">
	      </div>
	      <div class="content-item">
		<img ng-src="{{item.image_five.url}}">
	      </div>
	      <div class="content-item">
		<img ng-src="{{item.image_six.url}}">
	      </div>
	    </div>
	  </div>
        </div>
      </div>
    </div>

<?php endwhile;
      get_footer();
?>