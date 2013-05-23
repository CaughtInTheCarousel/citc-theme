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
            <div class="stylish-block padded">
              <div class="<?php echo $first_column_size; ?>columns content-area">
                <h5 class="title"><?php the_title(); ?></h5>
              
                <?php the_subheading(); ?>
              </div>
              <?php if ($second_column) {
              echo '<div class="five columns image-area">';
            	echo $post_image;
              echo '</div>';
              } ?>
              <div class="clear"></div>
            </div>
          </a>
      <?php endforeach; ?>