
			<?php 
			$args = array(
		    'numberposts'     => 12,
		    'category'        => 3,
		    'orderby'         => 'post_date',
		    'order'           => 'DESC');
			$albums = get_posts($args) ?>

				<div class="three columns">

		      	<?php 
		      	$i = 0;
		      	foreach( $albums as $post ) : 
		      		if (!$i) {
						?>
			  <div class="minimal-block sidebar featured-album">
				<h4 class="titling gray">Sponsor</h4>
				<p align="center>
					<script type="text/javascript"><!--
						google_ad_client = "ca-pub-3662853757277206";
						/* CITC HOME 1 */
						google_ad_slot = "5656464573";
						google_ad_width = 200;
						google_ad_height = 200;
						//-->
					</script>
					<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
				</p>
              </div>			  
		      
			  <div class="minimal-block sidebar featured-album">
		    
		        <h4 class="titling gray">Featured Album</h4>
		        <a href="<?php the_permalink(); ?>">
		          <div class="album-image">
		            <?php the_post_thumbnail( 'wpbs-featured' ); ?>
		          </div>
		          <h6 class="name"><?php the_field('artist_name'); ?></h6>
		          <p class="author"><?php the_field('album_name'); ?></p>
		          <p class="description"><?php auto_excerpt($post->post_content, 75); ?></p>
		        </a>
		      </div>

		      <div class="titling-block hide-for-small">
		        <h4 class="titling gray">Album Reviews</h4>
		      </div>
		      <div class="minimal-block sidebar hide-for-small">
		      	<?php
		      	} else {
?>
		        <a href="<?php the_permalink(); ?>" class="album-link">
		        	<div class="album-pic">
			        	<div class="album-info-hover">
			        		<p class="album-artist"><?php the_field('artist_name'); ?></p>
			        		<p class="album-title"><?php the_field('album_name'); ?></p>
			        		<p class="album-label"><?php the_field('record_label'); ?></p>
			        	</div>
		        		<?php the_post_thumbnail( 'wpbs-featured' ); ?>
		        	</div>
		    
		        </a>
		        <?php
		      	}
		      	$i++;
					endforeach;
?>
					<div class="more-album-reviews">
						<a href="/category/reviews">More Album Reviews</a>
						
					</div>
		  
		      </div>
			  
		    </div>
	