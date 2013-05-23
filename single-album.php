<?php get_header(); ?>
    
  <div class="row">
    <div class="eight columns">
      <?php if (have_posts()) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" class="minimal-block padded feature album">
        <div class="row title-area">
          <div class="six columns">
            <?php the_post_thumbnail( 'wpbs-featured', array( 'class' => 'featured-image') ); ?>
          </div>
          <div class="six columns">
            <h1 class="title"><?php the_title(); ?></h1>
            <p class="album-name">
              <?php the_field('artist_name'); ?><br />
              <?php the_field('album_name'); ?><br />
              <?php the_field('record_label'); ?></p>
          </div>
        </div>
        <div class="content">
          <?php the_content(); ?>
        </div>
        <?php comments_template(); ?>
          
      <?php else : ?>          
        <div id="post-not-found" class="minimal-block padded feature">
            <h1 class="title">Not Found</h1>
            <div class="content">
              <p>Sorry, but the requested resource was not found on this site.</p>
            </div>
      <?php endif; ?>
      </div>
  </div>
  <?php get_sidebar('right-more'); ?>

<?php get_footer(); ?>