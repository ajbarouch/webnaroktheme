<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<div class="main-container-full-width portfolio">

	<div class="main-grid">
		<main class="main-content">
			<div class="porthead">
				<h1 class="portfolio-title"><?php the_title() ?></h1>
				<h2 class="portfolio-link"><a href="<?php the_field('port_link')?>" target="_blank"><?php the_field('port_link_name')?></a></h2>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
				<?php the_post_navigation(); ?>
			<?php endwhile; ?>
		</main>
	</div>
</div>
<?php get_footer();
