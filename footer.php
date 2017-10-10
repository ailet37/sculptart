<?php if (empty($no_footer)) { ?>
<footer class="footer m-main">
	<a href="/" class="footer_logo">
		<?php echo file_get_contents(get_template_directory_uri() . '/svg/logo.svg' ); ?>
	<span>школа скульптурного мастерства</span>
</a>
<div class="footer_info">
	<div class="social_icons">
		<?php $instagram = ot_get_option('instagram'); 
		if (!empty($instagram)) { ?>
		<a target="_blank" href="<?php echo $instagram; ?>">
			<?php echo file_get_contents(get_template_directory_uri() . '/svg/inst.svg' ); ?>
	</a>
	<?php 	}  ?>
	<?php $vk = ot_get_option('vk'); 
	if (!empty($vk)) { ?>
	<a target="_blank" href="<?php echo $vk; ?>">
		<?php echo file_get_contents(get_template_directory_uri() . '/svg/vk.svg' ); ?>
</a>
<?php 	}  ?>
<?php $facebook = ot_get_option('facebook'); 
if (!empty($facebook)) { ?>

<a target="_blank" href="<?php echo $facebook; ?>">
	<?php echo file_get_contents(get_template_directory_uri() . '/svg/facebook.svg' ); ?>
</a>
<?php 	}  ?>
</div>

<?php $contact_address = ot_get_option('contacts_address'); ?>
<?php if($contact_address) : ?>
	<div class="footer_contacts">

		<p class="footer_contacts-header">Адрес</p>
		<p class="footer_contacts-text">
			<?php echo $contact_address; ?>
		</p>
	</div>
<?php endif; ?>

<?php $contacts_phone =  ot_get_option('contacts_phone'); ?>
<?php if ($contacts_phone) : ?>
	<div class="footer_contacts">
		<p class="footer_contacts-header">Телефон</p>
		<p class="footer_contacts-text">
			<?php echo $contacts_phone; ?>
		</p>
	</div>
<?php endif; ?>
<?php 	}  ?>
</div>	
</footer>
</div>
<script src="<?php bloginfo("template_directory");?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>