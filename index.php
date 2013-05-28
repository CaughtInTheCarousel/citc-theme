<?php get_header(); ?>


			<?php 
			$args = array(
		    'numberposts'     => 2,
		    'category'        => 4,
		    'orderby'         => 'post_date',
		    'order'           => 'DESC');
			$two_features = get_posts($args) ?>
		  <div class="hero row">
		    <div class="twelve columns">
		      <div class="minimal-block">
		      	<?php 
		      	$i = 0;
		      	foreach( $two_features as $post ) : 
		      		if (!$i) {
?>
				<div class="titling-block">
					<h4 class="titling">FEATURED ARTICLES</h4>
				</div>
		        
				<div class="seven columns no-padding">
				
		          <div class="twelve columns">
		          	<a href="<?php the_permalink(); ?>">
			            <h4 class="titling left-align gray"><?php the_title(); ?></h4>
			            <div class="feature-image-wrapper">
			            	<?php the_post_thumbnail( 'wpbs-featured', array( 'class' => 'feature-image') ); ?>
			          	</div>
		          	</a>
		            <p><?php the_excerpt(); ?> </p>
		      
		          </div>
				  
		        </div>
<?php
		      	} else {
?>
		        <div class="five columns no-padding">
		          <div class="twelve columns">
		          	<a href="<?php the_permalink(); ?>">
			            <h4 class="titling left-align gray"><?php the_title(); ?></h4>
			            <div class="feature-image-wrapper">
			            	<?php the_post_thumbnail( 'wpbs-featured', array( 'class' => 'feature-image') ); ?>
			          	</div>
		          	</a>
		            <p><?php auto_excerpt($post->post_content, 140); ?></p>

		          </div>
		    
		      
		        </div>
		          
<?php
		      	}
		      	$i++;
					endforeach;
?>
		      	
		        <div class="clear"></div>
		      </div>
		       
		    </div>
		    
<div class="row">


	<?php get_sidebar('left'); ?>

		    <div class="nine columns"> <!-- Center Column Start -->
	<div>
		    
		        <div class="titling-block">
					<h4 class="titling gray">NEWS, NEWS, and MORE NEWS</h4>
				</div>
		      </div>
    

		
		          
		      <!-- ** News Start -->
		      
			<?php 
			$args = array(
		    'numberposts'     => 5,
		    'category'        => 11,
		    'orderby'         => 'post_date',
		    'order'           => 'DESC');
			$posts = get_posts($args); ?>
			<?php include 'wide-article-view1.php'; ?>
			
			
		<div>
		    
		        <ul class="more-list">

  <div class="row">

	      
	
			          <li class="get-more"><a href="/category/news">MORE NEWS</a></li>
		        </ul>
		      </div>
    
		      
			<!-- News Stop -->
			
<!-- TEST FEED START -->

<div>

			

			 <div class="titling-block">
					<h4 class="titling gray">INTERVIEWS</h4>
				</div>
		    
		        <ul class="more-list">

  <div class="row">
 
			<?php 
			$args = array(
		    'numberposts'     => 5,
		    'category'        => 5,
		    'orderby'         => 'post_date',
		    'order'           => 'DESC');
			$posts = get_posts($args); ?>
			<?php include 'wide-article-view.php'; ?>
			
			          <li class="get-more"><a href="/category/interviews">MORE INTERVIEWS</a></li>
		        </ul>
		      </div>
		      
		
<!-- TEST FEED ENDS -->
  	
		      <div class="titling-block">
		        <h4 class="titling gray">Columns</h4>
		      </div>
		      <div class="row">
		        <div class="six columns">

		        	<?php $args = array(
										'type'                     => 'post',
										'parent'                   => '12',
										'orderby'                  => 'post_date',
										'order'                    => 'DESC',
										'hide_empty'               => 5 );
		        				$columns = get_categories( $args );

		        				foreach(array_slice($columns, 0, 3) as $column) { 
		        					query_posts('category_name='.$column->name.'&showposts=1');

					        		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						          <a href="<?php the_permalink(); ?>">
						            <div class="stylish-block padded">
							            <h5 class="title"><?php single_cat_title(); ?></h5>
						            	<div class="four columns">
						            		<?php the_post_thumbnail( 'wpbs-featured', array( 'class' => 'column-image') ); ?>
						            	</div>
						            	<div class="eight columns no-padding">
							              <p><?php auto_excerpt($post->post_content, 40); ?>
							              </p>
							            </div>
						              <div class="clear"></div>
						            </div>
						          </a>
										<?php endwhile;
										endif;
		        				} ?>
				
		        	</div>
		        	<div class="six columns">
		        			<?php
		        				foreach(array_slice($columns, 3, 4) as $column) { 
		        					query_posts('category_name='.$column->name.'&showposts=1');

					        		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						          <a href="<?php the_permalink(); ?>">
						            <div class="stylish-block padded">
							            <h5 class="title"><?php single_cat_title(); ?></h5>
						            	<div class="four columns">
						            		<?php the_post_thumbnail( 'wpbs-featured', array( 'class' => 'column-image') ); ?>
						            	</div>
						            	<div class="eight columns no-padding">
							              <p> <?php auto_excerpt($post->post_content, 40); ?>
							              <!-- <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt, 40); ?> -->
							              </p>
							            </div>
						              <div class="clear"></div>
						            </div>
						          </a>
										<?php endwhile;
										endif;
										
		        				} ?>
		        			
        
		        </div>
		        
		      </div>
  
		      <div class="minimal-block">

			  <?php 
			$args = array(
		    'numberposts'     => 1,
		    'category'        => 18,
		    'orderby'         => 'post_date',
		    'order'           => 'DESC');
			$posts = get_posts($args) ?>

			<?php include 'featured-video-view.php' ?> 
		      
		      </div>
		    </div>
		  </div>
<?php get_footer(); ?>