<?php
/*
Template Name: Single Page (news post)
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="post container clearfix">
	<div class="row">
		<div class="col-1">
			<div class="breadcrumbs">
				Новости > <?php the_title(); ?>
			</div>
		</div>
	
	<div class="col-2">
		<h1 title="<?php the_title(); ?>"><?php the_title(); ?></h1>
		<div class="news_date">
			<?php the_time('j/m/Y') ?>
		</div>
		<div class="news_text">
			<?php the_content(); ?>
		</div>
	</div>
	</div>
</div>
 <?php endwhile; endif; ?>
<?php get_footer();?>