<?php 
	// No posts to show, the famous 404 error message
	if ( ! have_posts() ) : 
?>

<div id="post-0" class="post error404 not-found">
  <h1 class="entry-title">
    <?php __( 'Page Not Found', 'semi-static' ); ?>
  </h1>
  <div class="entry-content">
    <p>
      <?php
				// Error message output (localized)
				__( 'Oops! There is nothing here.  
					Why not try and search for whatever it was you were looking for?', 'seami-static' );
			?>
    </p>
    <?php get_search_form(); ?>
  </div>
</div>
<?php endif; ?>
<?php
	// The default loop
	while ( have_posts() ) : the_post(); 
	
		// If it's an archive or search result
		if ( is_home() || is_archive() || is_search() ) : 
		?>
<div id="post-wrap">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div id="post-info">
  <h5><?php the_time('M d, Y') ?> |
    <?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
	}
echo trim($output, $separator);
}
?></h5>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo __('Permalink to ', 'livenotorioustemp'); the_title(); ?>" rel="bookmark">
      <?php the_title(); ?>
      </a></h2>
  </div>

  <div class="entry">
   <?php if ( has_post_thumbnail() ) {
		  the_post_thumbnail();
	  }
	  the_excerpt(); ?>
  </div>
  <?php echo __('There are', 'livenotorioustemp'); ?>
  <?php comments_popup_link( __( 'no comments - pitch in!', 'semi-static' ), __( '1 comment', 'semi-static' ), __( '% comments', 'semi-static' ) ); ?>
</div>
</div>

<?php elseif ( is_page() ): ?>

	<div id="post-wrap">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2 class="page-title">
      <?php the_title(); ?>
      </a></h2>
    
   
    <div class="entry entry-content">
      <?php the_content(); ?>


    </div>
    </div>
  


<?php // Everything else
		else : ?>
<div id="post-wrap">

  
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div id="post-info">
    <h5><?php the_time('M d, Y') ?> |
    <?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
	}
echo trim($output, $separator);
}
?></h5>
    <h2 class="entry-title">
      <?php the_title(); ?>
      </h2>
    </div>
   
    <div class="entry entry-content">

      <?php if ( has_post_thumbnail() ) {
		  the_post_thumbnail();
	  }
	  the_content(); ?>

   </div>
    <?php // Let's check to see if the comments are open
				if (comments_open()) { ?>
   <div class="entry-meta"> <span class="comments-link"> <?php echo __('There are', 'livenotorioustemp'); ?>
   
   <?php comments_popup_link( __( 'no comments - pitch in! ', 'semi-static' ), __( '1 comment ', 'semi-static' ), __( '% comments', 'semi-static' ) ); ?>
   
    <?php echo date(get_option('date_format')); ?> </span>
   <?php edit_post_link( __( 'Edit', 'semi-static' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
   </div>
   
   <?php } ?>
  </div>
  <?php
			// If the comments are open we'll need the comments template
			if (comments_open()) {
				comments_template( '', true );
			}
		?>
  </div>

  <?php endif; ?>


       
<?php endwhile; ?>
