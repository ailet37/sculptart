<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>
<?php $no_footer = 1; ?>
<?php $bg =  ot_get_option('background'); ?>
<?php $video_webm =  ot_get_option('video_webm'); ?>
<?php $video_mp4 =  ot_get_option('video_mp4'); ?>
<div class="video_bg <?php if (empty($video_webm) && empty($video_mp4)) { ?>m-no-video<?php } ?>" <?php if ($bg["background-image"]) : ?>style="background-image: url(<?php echo $bg["background-image"]; ?>);"><?php endif; ?>	
	
	<?php if (!empty($video_webm) || !empty($video_mp4) && !empty($bg)) { ?>
	<video loop muted autoplay poster="<?php echo $bg["background-image"]; ?>" class="video_bg-video">
		
		<source src="<?php echo $video_webm; ?>" type="video/webm">
		<source src="<?php echo $video_mp4; ?>" type="video/mp4">
	</video>
		<?php } ?>
</div>

<?php get_footer();?>