    <div class="four columns">
      <div class="minimal-block sidebar">
          <?php 

          for($cat_id = 0; $cat_id < 30; $cat_id++){
            if(in_category((string)$cat_id)) {
              break;
            }
          }
	
	 
	 		/* Display published articles only! */
			$args = array('post_status' => 'publish');
	
			$posts_array = wp_get_recent_posts($args); 
		?>
        
        <h4 class="titling">Recent Articles</h4>
        <ul class="more-list">
        <?php foreach($posts_array as $post) : setup_postdata($post); ?>
          <li><a href="<?php echo get_permalink($post["ID"]); ?>"><?php echo $post["post_title"]; ?></a></li>
        <?php endforeach; ?>
          <li class="get-more"><a href="<?php get_category_link($cat_id); ?>">View All</a></li>
      
        </ul>
      </div>
        </div>
     