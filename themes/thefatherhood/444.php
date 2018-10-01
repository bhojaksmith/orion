<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		Not Found
	</header><!-- .entry-header -->
	<div class="entry-content">
        Sorry CMDR, there is no resource at this location.
	</div><!-- .entry-content -->
</article><!-- #post-## -->

	<?php endwhile; else:
        include('444.php');
	endif; ?>

<?php get_footer(); ?>
