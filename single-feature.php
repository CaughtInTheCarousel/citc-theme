<?php get_header(); ?>
    
  <div class="row">
    <div class="eight columns">
      <?php if (have_posts()) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" class="minimal-block padded feature">  
        <?php the_post_thumbnail( 'wpbs-featured', array( 'class' => 'featured-image') ); ?>
        <h1 class="title"><?php the_title(); ?></h1>
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
  <?php get_sidebar('right-new'); ?>

<?php get_footer(); ?>