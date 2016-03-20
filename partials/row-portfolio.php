<div class="row" id="portfolio">
  <div class="content-wrapper">
    <div class="heading-wrapper">
  		<h2>Design</h2>
  	</div>
    <?php
					$counter = 1;
					$args = array(
						'post_type' => 'portfolio',
						'posts_per_page' => 4,
						'orderby' => 'date',
						'order' => 'DESC'
					);
					$posts = get_posts($args);
					if( !empty($posts) ) : ?>
					<div class="row">
					<?php foreach($posts as $post) : ?>

					<div class="col-sm-3">
            <div class="portfolio-card">
  						<a href="<?php the_permalink(); ?>">
  							<img src="<?php echo get_field('thumbnail')['url']; ?>" alt="<?php echo $post->post_title; ?>" class="portfolio-thumb">
  						</a>
              <h4 class="portfolio-title"><?php echo $post->post_title; ?></h4>
					  </div>
          </div>
			<?php $counter++; endforeach; ?>
      <div class="clearfix"></div>
      <?php endif; ?>
  </div>
</div>

<div class="row" id="photography">
  <div id="camera-icon">
    <?php get_template_part('svg/icon', 'camera'); ?>
  </div>
  <div class="content-wrapper">
    <div class="heading-wrapper">
  		<h2>Photography</h2>
  	</div>
    <?php
					$counter = 1;
					$args = array(
						'posts_per_page' => 4,
						'orderby' => 'date',
						'order' => 'DESC'
					);
					$posts = get_posts($args);
					if( !empty($posts) ) : ?>
					<div class="row">
					<?php foreach($posts as $post) : ?>

					<div class="col-sm-3">
            <div class="portfolio-card">
  						<a href="<?php the_permalink(); ?>">
  							<img src="<?php echo get_field('thumbnail')['url']; ?>" alt="<?php echo $post->post_title; ?>" class="portfolio-thumb">
  						</a>
              <h4 class="portfolio-title"><?php echo $post->post_title; ?></h4>
					  </div>
          </div>
			<?php $counter++; endforeach; ?>
      <div class="clearfix"></div>
      <?php endif; ?>
  </div>
</div>
