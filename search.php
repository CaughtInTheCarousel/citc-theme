<?php get_header(); ?>

<?php $cat_id = get_query_var('cat'); ?>


  <div class="row">
    <div class="twelve columns">
      <div class="titling-block">
        <h1 class="titling blue">Search Query: <?php echo esc_attr(get_search_query()); ?></h1>
      </div>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php $post_image = get_the_post_thumbnail( $post->ID, 'wpbs-featured', array( 'class' => 'feature-image') ); 
      if ($post_image != "") {
        $excerpt_size = 175;
        $first_column_size = "seven ";
        $second_column = true;
      } else {
        $excerpt_size = 245;
        $first_column_size = "twelve ";
        $second_column = false;
      }
      ?>
          <a href="<?php the_permalink(); ?>">
            <div class="stylish-block padded">
              <div class="<?php echo $first_column_size; ?>columns content-area">
                <h5 class="title"><?php the_title(); ?></h5>
                <p><?php auto_excerpt($post->post_content, $excerpt_size); ?></p>
                <p class="author">By <?php the_author(); ?></p>
              </div>
              <?php if ($second_column) {?>
              <div class="five columns image-area">
                <?php echo $post_image ?>
              </div>
              <?php } ?>
              <div class="clear"></div>
            </div>
          </a>
      <?php endwhile; ?>

        <?php else : ?>
        <div class="minimal-block padded">
          <p>Sorry, we couldn't find any results for your query.</p>
        </div>

        <?php endif; ?>
    </div>

    </div>



<?php get_footer(); ?>

