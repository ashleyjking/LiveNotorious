<?php get_header(); ?>

			<div id="content">
				<h1 id="archive-title">
					<?php
						if ( is_category() ) {
							single_cat_title();
						} elseif ( is_tag() ) {
							single_tag_title();
						}
					?>
				</h1>
				<div id="cat-description"><?php echo category_description(); ?></div>

				<?php get_template_part( 'loop', 'archive' ); ?>
<div class="navigation">
    <div class="alignleft">
      <?php next_posts_link('Older Entries »', 0); ?>
    </div>
    <div class="alignright">
      <?php previous_posts_link('« Newer Entries', 0) ?>
    </div>
  </div>
			</div>
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>