<?php get_header(); ?>
			
			
			<div class="row">
				<div class="twelve columns">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div id="page-<?php the_ID(); ?>" class="minimal-block single-page padded">
						<h1 class="title"><?php the_title(); ?></h1>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</div> 
					<?php endwhile; ?>		
					
					<?php else : ?>
					<div id="page-not-found" class="minimal-block single-page padded">
						<h1 class="title"><?php the_title(); ?></h1>
						<div class="content">
					    <p>Sorry, but the requested resource was not found on this site.</p>
						</div>
					</div>
					<?php endif; ?>

    		</div>
			</div>

<?php get_footer(); ?>