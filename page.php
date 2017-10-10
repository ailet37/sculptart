
<?php
/*
Template Name: Page (simple post)
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="post container clearfix">
	<div class="row">
		<div class="col-1">
			<div class="breadcrumbs">
				Главная > <?php the_title(); ?>
			</div>
		</div>

	<div class="col-2">
		<h1 title="<?php the_title(); ?>"><?php the_title(); ?></h1>
		<div class="post_text">
			<?php the_content(); ?>
		</div>
	</div>
	</div>
</div>
 <?php endwhile; endif; ?>
<?php get_footer();?>