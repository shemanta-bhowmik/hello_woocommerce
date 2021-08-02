<?php get_header(); ?>

<div class="evaly-single-post">
	<div class="container-blog">
		<h1 class="evaly-single-post-title"><?php the_title(); ?></h1>
		<?php the_post_thumbnail( 'full' ); ?>
		<?php the_content(); ?>
	</div>	
</div>

<?php get_footer(); ?>