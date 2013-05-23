
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
		    
		        <h4 class="titling">Featured Album</h4>
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
			
		         <div class="album-link last">
		         
		          <?php if(function_exists('drawAdsPlace')) drawAdsPlace(array('id' => 3), true); ?>
		    
		        </div>
		  
		      </div>
		      <?php echo adwit_banner_manager_banner(4072078423, 250, 250); ?>

		    </div>
	