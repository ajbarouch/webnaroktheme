<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container-full-width contact">
	<div class="main-grid">
		<main class="main-content-full-width">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'contact' ); ?>
			<?php endwhile; ?>
		</main>
	</div>
</div>
<?php get_footer();