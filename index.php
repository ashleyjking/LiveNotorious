<?php get_header(); ?>

<div id="content">
  <?php get_template_part( 'loop', 'index' ); ?>
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
