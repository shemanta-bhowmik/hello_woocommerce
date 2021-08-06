<?php get_header(); ?>

<div class="evaly-single-post">
	<div class="container-blog">
		<h1 class="evaly-single-post-title"><?php the_title(); ?></h1>
		<?php echo the_post_thumbnail(); ?>
		<?php the_content(); ?>
	</div>	
</div>

<?php get_footer(); ?>