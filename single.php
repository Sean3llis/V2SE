<?php get_header(); ?>

<?php
  $id = get_the_ID();
  $post = get_post($id);
  $screenshots = get_field('screenshots');
?>

<div class="row" id="post">
  <div class="content-wrapper">
    <div class="post-card col-sm-12">
      <div class="heading-wrapper">
    		<h2><?php echo $post->post_title; ?></h2>
    	</div>
      <?php if( have_rows('screenshots') ): $counter = 0;?>
        <div id="slideshow" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <?php while ( have_rows('screenshots') ) : the_row();  ?>
              <div class="item item-<?php echo $counter; if($counter === 0) echo ' active'; ?>">
                <?php $src = get_sub_field('shot')['url']; $alt = get_sub_field('title'); ?>
                <img src="<?php echo $src; ?>"/>
              </div>
            <?php $counter++; endwhile; ?>
          </div>
          <div id="controls">
            <i class="fa fa-backward" data-slide="prev" href="#slideshow"></i>
            <i id="play-pause" class="fa fa-pause "></i>
            <i class="fa fa-forward" data-slide="next" href="#slideshow"></i>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="row" id="post-related">
  <div class="col-sm-12">
    <h1>yo</h1>
  </div>
</div>

<?php get_footer(); ?>
