
      <div class="stylish-block featured-video">
            <h4 class="titling gray">Featured Video</h4>

      <?php foreach($posts as $post) : setup_postdata($post); ?>
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
            <div class="padded-content">
              <div class="<?php echo $first_column_size; ?>columns content-area">
                <h5 class="title"><?php the_title(); ?></h5>
              </div>
              <?php if ($second_column) {?>
              <div class="five columns image-area">
                <?php echo $post_image ?>
              </div>
              <?php } ?>
              <div class="clear"></div>
            </div>
          </a>
      <?php endforeach; ?>

      </div>