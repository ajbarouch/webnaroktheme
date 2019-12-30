<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content services">
		<div class="service-content "><?php the_content(); ?></div>
		<div class="row">
			<h3 class="small-12 large-4 columns"><?php the_field('dev_title') ?></h3>
			<div class="small-12 large-8 columns"><?php the_field('dev_content') ?></div>
		</div>
		<div class="row">
			<h3 class="small-12 large-4 columns"><?php the_field('design_title') ?></h3>
			<div class="small-12 large-8 columns"><?php the_field('design_content') ?></div>
		</div>
		<div class="row">
			<h3 class="small-12 large-4 columns"><?php the_field('analytics_title') ?></h3>
			<div class="small-12 large-8 columns"><?php the_field('analytics_content') ?></div>
		</div>
	</div>
</article>
