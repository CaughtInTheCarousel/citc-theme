    <div class="four columns">
      <div class="minimal-block sidebar">
				<h4 class="titling">Sponsor</h4>
				<p align="center>
					<script type="text/javascript"><!--
						google_ad_client = "ca-pub-3662853757277206";
						/* CITC ARTICLE 1 */
						google_ad_slot = "1086664178";
						google_ad_width = 250;
						google_ad_height = 250;
						//-->
					</script>
					<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
				</p>
      </div>
	  
	  <div class="minimal-block sidebar">
        <h4 class="titling">More 
          <?php 

          for($cat_id = 0; $cat_id < 30; $cat_id++){
            if(in_category((string)$cat_id)) {
              break;
            }
          }

          if($cat_id == 3) {
            echo "Reviews";
          } else if ($cat_id == 4) {
            echo "Features";
          } else if ($cat_id == 5) {
            echo "Interviews";
          } else if ($cat_id == 12) {
            echo "Columns";
          } else if ($cat_id == 11) {
            echo "News";
          } else if ($cat_id == 18) {
            echo "Featured Videos";
          } else if ($cat_id == 19) {
            echo "Featured Audio";
          } else {
            echo "Articles";
            $cat_id == 5;
          }

          ?></h4>

          <?php 
          $args = array(
            'numberposts'     => 10,
            'category'        => $cat_id,
            'order'           => 'DESC');
          $posts_array = get_posts( $args );
          

          ?>
        <ul class="more-list">
        <?php foreach($posts_array as $post) : setup_postdata($post); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endforeach; ?>
        </ul>
      </div>
    </div>