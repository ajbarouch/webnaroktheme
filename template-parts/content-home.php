<?php
/**
 * The default template for displaying homepage content
 *
 *  
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="welcome-block" style="background-color:<?php if (get_field('welcome_block_color') == null) {echo "#ffffff";} else { echo get_field('welcome_block_color');}?>">
        <div class="welcome-block-header"><h2><?php the_field('welcome_block_header');?></h2></div>
        <hr>
        <div class="welcome-block-subheader"><h3><?php the_field('welcome_block_sub_header');?></h3></div>
    </div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
    <div class="services-wrap">
        <a href="<?php the_field('dev_link')?>"><div class="design-wrap service-item" style="background-size: cover;background-image:url('<?php the_field('dev_image')?>');">
            <p class="design-text service-text"><?php the_field('dev_text')?></p>
        </div></a>
        <a href="<?php the_field('design_link')?>"><div class="design-wrap service-item" style="background-size: cover;background-image:url('<?php the_field('design_image')?>');">
            <p class="design-text service-text"><?php the_field('design_text')?></p>
        </div></a>
        <a href="<?php the_field('analytics_link')?>"><div class="design-wrap service-item" style="background-size: cover;background-image:url('<?php the_field('analytics_image')?>');">
            <p class="design-text service-text"><?php the_field('analytics_text')?></p>
        </div></a>
        </div>
</article>
