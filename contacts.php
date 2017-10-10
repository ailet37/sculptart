<?php
/*
Template Name: Contacts
*/
?>
<?php get_header(); ?>

<div class="container contacts clearfix">
	<div class="row">
		<div class="col-1"></div>
		<div class="col-2">
			<h1>Контакты</h1>
			<div class="contacts_col">
				<?php $contact_address = ot_get_option('contacts_address'); ?>
				<?php if($contact_address) : ?>
					<div class="contacts_title">Адрес:</div>
					<div class="contacts_text"><?php echo $contact_address; ?></div>
				<?php endif; ?>

				<?php $contacts_phone =  ot_get_option('contacts_phone'); ?>
				<?php if ($contacts_phone) : ?>
					<div class="contacts_title">Телефон:</div>
					<div class="contacts_text">
						<?php echo $contacts_phone; ?>
					</div>
				<?php endif; ?>
				
				<?php 
				$contacts_email_1 =  ot_get_option('email_1');
				$contacts_email_2 =  ot_get_option('email_2');
				if (!empty($contacts_email_1) || !empty($contacts_email_2)) {
					?>
					<div class="contacts_title">E-mail:</div>
					<div class="contacts_text">
						<a href="mailto:<?php echo $contacts_email_1; ?>"><?php echo $contacts_email_1; ?></a><br>
						<a href="mailto:<?php echo $contacts_email_2; ?>"><?php echo $contacts_email_2; ?></a>
					</div>
				</div>
				<?php 	}  ?>

				<div class="contacts_col">
					<?php $contacts_how =  ot_get_option('how_to_reach');
					if (!empty($contacts_how)) {
						?>
						<div class="contacts_title">Как до нас добраться:</div>
						<div class="contacts_text">
							<?php echo $contacts_how; ?>
						</div>
						<?php 	}  ?>

						<div class="contacts_title">Мы в социальных сетях:</div>
						<div class="social_icons m-gray">
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
		</div>	
	</div></div>
</div>

<div class="contacts_map" id="googleMap"></div>
<?php get_footer();?>
