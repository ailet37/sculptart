<?php
/*
Template Name: all news 
*/
?>
<?php get_header(); ?>

<div class="container news m-cube clearfix">
	<div class="news_header">

		<h1 title="Новости">Новости</h1>

		<div class="news_switcher">
			<span class="news_switcher-icon m-active js-switcher-cube">
				<?php echo file_get_contents(get_template_directory_uri() . '/svg/cube.svg' ); ?>
		</span>
		<span class="news_switcher-icon js-switcher-line">
			<?php echo file_get_contents(get_template_directory_uri() . '/svg/line.svg' ); ?>
	</span>
</div>
<div class="news_row">  
	<?php $posts = get_posts ("category=1&orderby=date"); ?> 
	<?php if ($posts) : ?>
		<?php foreach ($posts as $post) : setup_postdata ($post); ?>
			<div class="col-1">

				<?php
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true);
				?>

				<a href="<?php the_permalink() ?>" class="news_block" style="background-image:url(<?php echo $thumb_url[0]; ?> );">
					<div class="news_block-overlay"></div>         
					<div class="news_block-date">
						<?php the_time('j/m/Y') ?>
					</div>
					<h2 title="<?php the_title(); ?>" class="news_block-title">
						<?php  
						$short_title = the_title("","",false);
						$short_title_2 = substr($short_title,0,50);
						echo $short_title_2;
						if($short_title_2!=$short_title) 
							{ echo "..."; }
						?>
					</h2>
					<div class="news_block-annotation"><?php the_excerpt(); ?></div>          
				</a>
			</div> 

			<?php 
			endforeach;
			wp_reset_postdata();
			?>
		<?php endif; ?>
	</div>  
</div>     
</div>
<?php get_footer();?>
