<?php get_header(); ?>


<?php $cat_id = get_query_var('cat'); ?>


<?php  if ($cat_id == 18) { 
  include (TEMPLATEPATH . '/single-feature.php');
  ?>
  

<?php } else if ($cat_id == 19) {
  include (TEMPLATEPATH . '/single-album.php');
} else { ?>
  <div class="row">
    <div class="eight columns">
      <div class="titling-block">
        <h1 class="titling blue"><?php single_cat_title(); ?> </h1>
      </div>
      <?php query_posts( array( 'cat' => $cat_id, 'paged' => get_query_var('paged') ) );?>

      <?php include 'wide-article-view.php';?>
      <div class="minimal-block padded">
        <?php wp_pagenavi(); ?>
      </div>
    </div>

<?php get_sidebar('right-new'); ?>

	<div style="position: justified; right: 0; top: 0;" class="four columns">
		<div class="minimal-block sidebar">
			<h4 class="titling">Archived Album Reviews</h4>
				<ul class="more-list">
					<li><a href="http://caughtinthecarousel.com/category/a-b-archives">A-B Archives</a></li>
					<li><a href="http://caughtinthecarousel.com/category/c-d-archives">C-D Archives</a></li>
					<li><a href="http://caughtinthecarousel.com/category/e-f-archives">E-F Archives</a></li>
					<li><a href="http://caughtinthecarousel.com/category/g-j-archives">G-J Archives</a></li>
					<li><a href="http://caughtinthecarousel.com/category/k-m-archives">K-M Archives</a></li>
					<li><a href="http://caughtinthecarousel.com/category/n-p-archives">N-P Archives</a></li>
					<li><a href="http://caughtinthecarousel.com/category/q-s-archives">Q-S Archives</a></li>
					<li><a href="http://caughtinthecarousel.com/category/t-z-archives">T-Z Archives</a></li>
					<li><a href="http://caughtinthecarousel.com/category/category/archived-album">All Album Archives</a></li>
				</ul>
		</div>
		 <?php echo adwit_banner_manager_banner(668656475, 250, 250); ?>
  
	</div>

<?php } ?>

<?php get_footer(); ?>