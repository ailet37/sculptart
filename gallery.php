
<?php
/*
Template Name: Gallery page
*/
?>
<?php get_header(); ?>


<div class="gallery container clearfix">
	<div class="row">
		<div class="col-1">
		<div class="gallery-list">
				<a href="">Курс Скульптурный портрет</a>
				<a href="">Курс Скульптурный портрет</a>
				<a href="">Курс Скульптурный портрет</a>
		</div>		
		</div>

	<div class="col-2">
		<h1 title="Галерея">Галерея</h1>
		<div class="post_text">
			if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '--', 'slug' ); }
		</div>
	</div>
	</div>
</div>

<?php get_footer();?>