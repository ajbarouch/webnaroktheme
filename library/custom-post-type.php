<?php function create_post_type() {
    $labels = array(
        'name' => _x('Portfolio', 'post type general name'),
        'singular_name' => _x('Portfolio Item', 'post type singular name'),
        'add_new' => _x('Add New', 'portfolio'),
        'add_new_item' => __('Add New Portfolio Item'),
        'edit_item' => __('Edit Portfolio Item'),
        'new_item' => __('New Portfolio Item'),
        'all_items' => __('All Portfolio Items'),
        'view_item' => __('View Portfolio Item'),
        'search_items' => __('Search Portfolio Items'),
        'not_found' =>  __('No portfolio items found'),
        'not_found_in_trash' => __('No portfolio items found in Trash'), 
        'parent_item_colon' => '',
        'menu_name' => __('Portfolio Items')
    
      );
      $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true, 
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
      ); 
      register_post_type( 'rag_portfolio',$args);
  }
  add_action( 'init', 'create_post_type' );

//[portfolio]
function portfolio_loop( $atts ){
    $args = array( 'post_type' => 'rag_portfolio', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    echo '<div class="loop-wrapper">';
    while ( $loop->have_posts() ) : $loop->the_post();
    ?><a href="<?php the_permalink();?>"><div class="loop-content" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"><?php
    ?><span><?php the_title(); ?></span><?php
    echo '</div></a>';
    endwhile;
    echo '</div';
}
add_shortcode( 'portfolio', 'portfolio_loop' );

  ?>