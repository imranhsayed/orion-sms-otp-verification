<?php
/**
 * Orion Woo-commerce Setting Template.
 *
 * @package Orion SMS OTP verification
 */


?>
<div class="wrap orion-otp-mega-wrapper">
	<div class="jumbotron">
		<h6 class="mb-0 text-white lh-100"><?php esc_html_e( 'Upgrade to Orion SMS Plugin Woocommerce', 'orion-sms-otp-verification' );?><i class="fab fa-product-hunt"></i>ro</h6>
		<small><?php esc_html_e( 'by', 'orion-sms-otp-verification' );?> Imran Sayed, Smit Patadiya</small>
	</div>
	<div class="jumbotron">
		<div class="container-fluid">
			<img src="<?php echo esc_url( 'https://www.orionhive.com/static/icon.jpg' ); ?>" alt="Orion Icon">
			<h2 style="text-align:left"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php esc_html_e( 'Description', 'orion-sms-otp-verification' );?></h2>
			<ul class="text-white">
				<li><?php esc_html_e( 'Our Premium Versions.', 'orion-sms-otp-verification' );?></li>
				<li><?php esc_html_e( 'An option for every pocket', 'orion-sms-otp-verification' );?></li>
				<li><a class="text-white btn btn-primary" href="<?php echo esc_url( 'http://m.me/orionotpwordpress' ) ?>">Chat Support Help</a></li>
				<li><strong><?php esc_html_e( 'Email Us on: ', 'orion-sms-otp-verification' );?></strong>orionhiveproducts@gmail.com</li>
				<li>
					<strong><?php esc_html_e( 'Or find us at: ', 'orion-sms-otp-verification' );?></strong>
					<a class="text-white" href="<?php esc_url( 'https://www.orionhive.com' ) ?>">orionhive.com</a>
				</li>
			</ul>
			<div>
				<a href="<?php echo esc_url( 'https://www.orionhive.com' ); ?>" class="orion-pricing-link" target="_blank" title="<?php esc_html_e( 'Orion OTP Verification Premium Plugin', 'orion-sms-otp-verification' );?>" >
					<img class="mw-100" src="<?php echo esc_attr( 'https://www.orionhive.com/static/latest-offers.jpg' ); ?>" alt="Orion Offers"/>
				</a>
			</div>
			<div>
				<a href="<?php echo esc_url( 'https://www.orionhive.com' ); ?>" class="orion-pricing-link" target="_blank" title="<?php esc_html_e( 'Orion OTP Verification Premium Plugin', 'orion-sms-otp-verification' );?>" >
					<img class="img-responsive w-100" src="<?php echo esc_attr( 'https://www.orionhive.com/static/pricing.jpg' ); ?>" alt="Orion Pricing"/>
				</a>
			</div>
		</div>
	</div>
	<!--1- Tutorial Section-->
	<!--Heading-->
	<div class="d-sm-flex align-items-center p-3 my-3 text-white-50 ihs-bg-light-purple rounded box-shadow" style="background-color: #6f42c1; box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .05);">
		<div class="lh-100 ihs-admin-head-cont">
			<h6 class="mb-0 text-white lh-100"><?php esc_html_e( 'How to use the Plugin?', 'orion-sms-otp-verification' ); ?></h6>
			<small><?php esc_html_e( 'Watch below demo tutorials to have a better understanding', 'orion-sms-otp-verification' ); ?></small>
		</div>
	</div>
	<div class="">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-12">
				<?php $description = esc_html__( 'Plugin Demo. You can now get Multiple form support and can change the button and alert notification texts with premium version.', 'orion-sms-otp-verification' ); ?>
				<?php ihs_get_video_cards( 'Plugin Demo | Twilio Support', $description, 'https://www.youtube.com/embed/vfk3zuZu5zw' ); ?>
			</div>
			<div class="col-md-4 col-sm-6 col-12">
				<?php $description = esc_html__( 'You can now get Multiple form support and can change the button and alert notification texts with premium version.', 'orion-sms-otp-verification' ); ?>
				<?php ihs_get_video_cards( 'New features | Twilio Support | MSG91', $description, 'https://www.youtube.com/embed/mSFvlmZcJmM' ); ?>
			</div>
			<div class="col-md-4 col-sm-6 col-12">
				<?php $description = esc_html__( 'You can now get Multiple form support and can change the button and alert notification texts with premium version.', 'orion-sms-otp-verification' ); ?>
				<?php ihs_get_video_cards( 'Multiple Form Usage | Premium Version', $description, 'https://www.youtube.com/embed/GylaI8f19XM' ); ?>
			</div>
			<div class="col-md-4 col-sm-6 col-12">
				<?php $description = esc_html__( 'How to get API Key | SID | Auth Token | Twilio Phone No', 'orion-sms-otp-verification' ); ?>
				<?php ihs_get_video_cards( 'Generate Twilio API Key | SID | Auth Token | Twilio Phone No', $description, 'https://www.youtube.com/embed/CK31fOgI18M' ); ?>
			</div>
			<div class="col-md-4 col-sm-6">
				<?php $description = esc_html__( 'Get the Auth Key from MSG 91 | OTP and Transactional Route', 'orion-sms-otp-verification' ); ?>
				<?php ihs_get_video_cards( 'Auth Key & Routes', $description, 'https://www.youtube.com/embed/od7f82A7RMw' ); ?>
			</div>
			<div class="col-md-4 col-sm-6">
				<?php $description = esc_html__( 'How to use the Orion SMS OTP WordPress plugin with Contact Form 7', 'orion-sms-otp-verification' ); ?>
				<?php ihs_get_video_cards( 'With Contact Form 7', $description, 'https://www.youtube.com/embed/xkafUWOaIL8' ); ?>
			</div>
			<div class="col-md-4 col-sm-6">
				<?php $description = esc_html__( 'How to use Orion SMS OTP Plugin with Ultimate Member Plugin', 'orion-sms-otp-verification' ); ?>
				<?php ihs_get_video_cards( 'With Ultimate Member', $description, 'https://www.youtube.com/embed/3EX1p05pEv0' ); ?>
			</div>
			<div class="col-md-4 col-sm-6">
				<?php $description = esc_html__( 'How to use Orion SMS OTP Plugin with User Registration Plugin', 'orion-sms-otp-verification' ); ?>
				<?php ihs_get_video_cards( 'With User Registration', $description, 'https://www.youtube.com/embed/8G8Vq0tadoE' ); ?>
			</div>
			<div class="col-md-4 col-sm-6">
				<?php $description = esc_html__( 'How to Use Orion SMS OTP Plugin with Registration Magic Plugin', 'orion-sms-otp-verification' ); ?>
				<?php ihs_get_video_cards( 'With Registration Magic', $description, 'https://www.youtube.com/embed/P7zHEEZyqlg' ); ?>
			</div>
			<div class="col-md-4 col-sm-6">
				<?php $description = esc_html__( 'How to use Orion SMS OTP WordPress Plugin with Profile Press', 'orion-sms-otp-verification' ); ?>
				<?php ihs_get_video_cards( 'With Profile Press', $description, 'https://www.youtube.com/embed/ppsnfUQuFDM' ); ?>
			</div>
			<div class="col-md-4 col-sm-6">
				<?php $description = esc_html__( 'How to use the Orion SMS OTP WordPress Plugin | Profile Builder', 'orion-sms-otp-verification' ); ?>
				<?php ihs_get_video_cards( 'With Profile Builder', $description, 'https://www.youtube.com/embed/gDh8oP-zoBA' ); ?>
			</div>
		</div>
	</div>
</div>
