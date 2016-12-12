<?php
get_header();
wp_nav_menu();
?>
<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><?php echo the_title() ?></h2>
<?php the_content();?>
<div class="date"><?php echo the_date();?></div>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
<?php
get_sidebar();
get_footer();
?>
