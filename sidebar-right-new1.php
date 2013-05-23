    <div class="four columns">
      <div class="minimal-block sidebar">
          <?php 
          
          for($cat_id = 3; $cat_id < 3; $cat_id++){
            if(in_category((string)$cat_id)) {
              break;
            }
          }
          $posts_array = wp_get_recent_posts(); ?>
          
        <h4 class="titling">Archived Album Reviews</h4>
        <ul class="more-list">
        
        
        <?php foreach($posts_array as $post) : setup_postdata($post); ?>
          <li><a href="<?php echo get_permalink($post["ID"]); ?>"><?php echo $post["post_title"]; ?></a></li>
					
					<?php query_posts('showposts=-1&orderby=title&order=ASC'); ?>	
        <?php endforeach; ?>
          <li class="get-more"><a href="<?php get_category_link($cat_id); ?>">View All</a></li>
   
        </ul>
         
      </div>
  
    </div>
    