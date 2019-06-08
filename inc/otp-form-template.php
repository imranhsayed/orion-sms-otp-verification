<?php
/**
 * OTP Form template
 *
 * @package Orion SMS OTP Verification
 */

?>
<div class="wrap orion-otp-mega-wrapper">
	<div class="jumbotron">
		<h6 class="mb-0 text-white lh-100">Orion SMS OTP Verification</i></h6>
		<small><?php esc_html_e( 'by', 'orion-sms-otp-verification' ); ?> Imran Sayed, Smit Patadiya</small>
	</div>

	<!--Plugin Description-->
	<div class="my-3 p-3 bg-white rounded box-shadow ihs-api-config-cont">
		<h6 class="border-bottom border-gray pb-2 mb-0"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php esc_html_e( 'Description', 'orion-sms-otp-verification' ); ?></h6>
		<div class="media text-muted pt-3">
			<div class="d-sm-flex media-body ihs-input-wrap pb-3 mb-0 small lh-125 border-bottom border-gray">
				<ul>
					<!--Common Instructions-->
					<li><?php esc_html_e( 'This plugin allows you to verify mobile number by sending a one time SMS/OTP to the user entered mobile number', 'orion-sms-otp-verification' ); ?></li>
					<li><?php esc_html_e( 'You can verify mobile number on Contact form 7 and any registration form. It will not allow the form to be submitted before completing the SMS/OTP verification.', 'orion-sms-otp-verification' ); ?></li>
					<br>
					<li><?php esc_html_e( 'This plugin gives you an option to choose between two third party APIs:', 'orion-sms-otp-verification' ); ?></li>
					<li><strong><?php esc_html_e( '1-MSG91: ', 'orion-sms-otp-verification' ); ?></strong> <?php esc_html_e( 'You can choose MSG91 API to send messages' ); ?> ( <a target="_blank" href="<?php echo esc_url( 'https://msg91.com' ); ?>"><i class="fas fa-link"></i> https://msg91.com</a> ). <?php esc_html_e( 'All you have to do is get your auth key from MSG91 to send messages from the below link:', 'orion-sms-otp-verification' ); ?>
						<a target="_blank" href="<?php echo esc_url( 'https://msg91.com/signup' ); ?>"><i class="fas fa-link"></i> https://msg91.com/signup</a>
					</li>
					<li><strong><?php esc_html_e( '2-Twilio: ', 'orion-sms-otp-verification' ); ?></strong> <?php esc_html_e( 'It can use TWILIO API to send messages' ); ?> ( <a target="_blank" href="<?php echo esc_url( 'https://www.twilio.com/' ); ?>"><i class="fas fa-link"></i> https://www.twilio.com</a> ). <?php esc_html_e( 'All you have to do is get your api key from TWILIO to send messages from the below link:', 'orion-sms-otp-verification' ); ?>
						<a target="_blank" href="<?php echo esc_url( 'https://www.twilio.com/console' ); ?>"><i class="fas fa-link"></i> https://www.twilio.com/console</a>
					</li>

					<br>

					<!--Free version-->
					<li class=""><?php esc_html_e( 'If you are using MSG91, the free version of the plugin uses ', 'orion-sms-otp-verification' ); ?><strong><?php esc_html_e( 'OTP route', 'orion-sms-otp-verification' ); ?></strong>. <?php esc_html_e( 'So you need to buy OTP credits from MSG91 plugin. If you would like to use it with Transactional credit or if you want to have Mobile OTP verification on Woo-commerce checkout page, and send custom Order SMS ( e.g. on Order Complete, Cancelled etc ), then you would need to buy the premium version', 'orion-sms-otp-verification' ); ?>
					</li>
					<!--Upgrade to Pro Link-->
					<li class="">
						<a href="<?php echo esc_url( 'https://www.orionhive.com/' ); ?>" target="_blank" class="tell-me-hw-link">
							<i class="fab fa-product-hunt"></i>
							<?php esc_html_e( 'Upgrade to Pro', 'orion-sms-otp-verification' ); ?>
							<i class="far fa-question-circle"></i>
						</a>
					</li>

					<!--Tell me how link-->
					<li class="ihs-you-tube-link">
						<?php $link_text = esc_html__( 'Tell me how to use this plugin', 'orion-sms-otp-verification' ); ?>
						<?php echo ihs_get_tell_me_how_link( $link_text, 'https://youtu.be/hvDkuZowZfM?list=PLD8nQCAhR3tR2N5k3wy8doceQCyVLQEOf' ); ?>
					</li>

					<!--IMP NOTE-->
					<li class="">
						<a href="<?php echo esc_url( 'https://youtu.be/YnqsWA3Ccuc' ); ?>" target="_blank" class="tell-me-hw-link">
							<i class="fas fa-star"></i>
							<?php esc_html_e( 'If you are upgrading to the new version, you may have to change some settings.Hence please watch the new tutorial for the same ', 'orion-sms-otp-verification' ); ?>
							<i class="far fa-question-circle"></i>
						</a>
					</li>
					<li class="ihs-you-tube-link">
						<?php $link_text = esc_html__( 'New Twilio Features and Settings', 'orion-sms-otp-verification' ); ?>
						<?php echo ihs_get_tell_me_how_link( $link_text, 'https://youtu.be/YnqsWA3Ccuc' ); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!--Troubleshooting-->
	<div class="my-3 p-3 bg-white rounded box-shadow ihs-api-config-cont">
		<h6 class="border-bottom border-gray pb-2 mb-0"><i class="fa fa-cog" aria-hidden="true"></i> <?php esc_html_e( 'Troubleshooting', 'orion-sms-otp-verification' ); ?></h6>
		<div class="media text-muted pt-3">
			<div class="d-sm-flex media-body ihs-input-wrap pb-3 mb-0 small lh-125 border-bottom border-gray">
				<ul>
					<!--Common Instructions-->
					<li><?php esc_html_e( 'As shown in the tutorial, the plugin works with WordPress default theme twenty seventeen and is tested successfully with top 5 WordPress registration plugins as mentioned in the plugin description.', 'orion-sms-otp-verification' ); ?></li>
					<li><?php esc_html_e( 'There are millions of plugins and themes on WordPress and it is not practically possible to test it with all of them. Hence we have tested it with default WordPress theme and the top 5 plugins of WordPress.', 'orion-sms-otp-verification' ); ?></li>
					<br>
					<li><strong><?php esc_html_e( 'My plugin does not work', 'orion-sms-otp-verification' ); ?></strong></li>
					<li><?php esc_html_e( 'Based on the queries I have been dealing with and solving them in the past, I have observed that the theme or plugins that you are using may add some styles or scripts that may interfere with the default functionality of Orion OTP Plugin.', 'orion-sms-otp-verification' ); ?></li>
					<br>
					<li><strong><?php esc_html_e( 'Solution', 'orion-sms-otp-verification' ); ?></strong></li>
					<li class=""><?php esc_html_e( 'Please follow the trouble shooting steps on :', 'orion-sms-otp-verification' ); ?>
							<a href="<?php echo esc_url( 'https://www.orionhive.com/troubleshooting/' ); ?>"><i class="fas fa-link"></i> Faqs/Troubleshooting</a>
					</li>
					<li>
						<?php esc_html_e( 'If you have followed the ', 'orion-sms-otp-verification' ); ?>
						<a href="<?php echo esc_url( 'https://youtu.be/hvDkuZowZfM?list=PLD8nQCAhR3tR2N5k3wy8doceQCyVLQEOf' ); ?>" target="_blank" class="tell-me-hw-link">
							<i class="fab fa-youtube ihs-you-tube-icon"></i>
							<?php esc_html_e( 'Plugin Tutorial', 'orion-sms-otp-verification' ); ?>
						</a>
						<?php esc_html_e( ', troubleshooting steps and it still does not work, it means we would have to do customization to make the plugin work with your theme/plugin. For any queries you can write to us on: ', 'orion-sms-otp-verification' ); ?>
						<a href="<?php echo esc_url( 'mailto:orionhiveproducts@gmail.com' ); ?>" target="_top" class="tell-me-hw-link">
							<i class="fas fa-envelope"></i>
							orionhiveproducts@gmail.com
						</a>
					</li>
					<li><?php esc_html_e( 'A plugin is successfully working & tested with very famous Form Plugins like Contact Form 7, WPForms, Ninja Forms, Formidable Forms, WooCommerce Signup Form, Ultimate Member, User Registration (User Profile, Membership), Profile Builder (User registration and user profile), Profile Press, Registration Magic, Buddy Press Signup Form, Everest Forms and More. Chat with us if you face any difficulty.', 'orion-sms-otp-verification' ); ?></li>
					<br>
					<li>
						<a href="<?php echo esc_url( 'http://m.me/orionotpwordpress' ); ?>" target="_blank" class="btn btn-primary text-white">
							<i class="fab fa-facebook-messenger"></i>
							<?php esc_html_e( 'Chat Support Help', 'orion-sms-otp-verification' ); ?>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div>
		<a href="<?php echo esc_url( 'https://www.orionhive.com' ); ?>" class="orion-pricing-link" target="_blank" title="<?php esc_html_e( 'Orion OTP Verification Premium Plugin', 'orion-sms-otp-verification' );?>" >
			<img class="mw-100" src="<?php echo esc_attr( 'https://www.orionhive.com/static/latest-offers.jpg' ); ?>" alt="Orion Offers"/>
		</a>
	</div>

	<!--Form-->
	<form method="post" action="options.php">
		<?php settings_fields( 'ihs-otp-plugin-settings-group' ); ?>
		<?php do_settings_sections( 'ihs-otp-plugin-settings-group' ); ?>


	<!--1. API Configuration-->
	<!--Heading-->
	<div class="d-sm-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow" style="background-color: #6f42c1; box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .05);">
		<div class="lh-100 ihs-admin-head-cont">
			<h6 class="mb-0 text-white lh-100"><?php esc_html_e( 'Api Configuration', 'orion-sms-otp-verification' ); ?></h6>
			<small><?php esc_html_e( 'Api settings required for plugin to function', 'orion-sms-otp-verification' ); ?></small>
		</div>
	</div>
	<div class="my-3 p-3 bg-white rounded box-shadow ihs-api-config-cont">
		<p class="border-bottom border-gray pb-2 mb-0"><?php esc_html_e( 'You can get the required Key from MSG91/Twilio.', 'orion-sms-otp-verification' ); ?></p>
		<!--Api Type-->
		<div class="media text-muted pt-3 border-bottom border-gray">
			<?php $api_type_text = esc_html__( 'Select API Type', 'orion-sms-otp-verification' ); ?>
			<div class="ihs-input-icon ihs-bg-purple d-flex"><i class="fas fa-key ihs-my-icons"></i></div>
			<?php echo ihs_get_api_type( 'API TYPE', 'ihs_api_type', true, true, $api_type_text ); ?>
		</div>

		<!--TWILLIO KEYS-->
		<h6 class="border-bottom border-gray pb-3 pt-3 mb-0">
			<?php esc_html_e( 'Twilio API Configuration ', 'orion-sms-otp-verification' ); ?>
			<?php echo ihs_get_tell_me_how_link( 'Tell me how', 'https://youtu.be/CK31fOgI18M' ); ?>
		</h6>
		<div class="ihs-twilio-keys">
			<!--Twilio Api Key Input Field-->
			<div class="media text-muted pt-3  border-bottom border-gray">
				<?php $tooltip_text = esc_html__( 'Get the api key (Auth Key) from Twilio', 'orion-sms-otp-verification' ); ?>
				<div class="ihs-input-icon ihs-bg-blue d-flex"><i class="fa fa-key" aria-hidden="true"></i></div>
				<?php
				echo ihs_get_text_input(
					'TWILIO AUTH KEY',
					'ihs_twilio_api_key',
					'text',
					false,
					'',
					true,
					$tooltip_text
				);
				?>
			</div>
			<!--Twilio SID Key Input Field-->
			<div class="media text-muted pt-3 border-bottom">
				<?php $tooltip_text = esc_html__( 'Get the sid key from Twilio, for Reset Password SMS', 'orion-sms-otp-verification' ); ?>
				<div class="ihs-input-icon ihs-bg-blue d-flex"><i class="fa fa-key" aria-hidden="true"></i></div>
				<?php
				echo ihs_get_text_input(
					'TWILIO SID KEY',
					'ihs_twilio_sid_key',
					'text',
					false,
					'',
					true,
					$tooltip_text
				);
				?>
				<span class="orion-api-msg"><?php echo esc_html__( '(For Reset Password SMS / Order SMS only)', 'orion-sms-otp-verification' ); ?></span>
			</div>
			<!--Twilio AUTH Token Input Field-->
			<div class="media text-muted pt-3 border-bottom border-gray">
				<?php $tooltip_text = esc_html__( 'Get the auth token from Twilio, for Reset Password SMS', 'orion-sms-otp-verification' ); ?>
				<div class="ihs-input-icon ihs-bg-blue d-flex"><i class="fa fa-key" aria-hidden="true"></i></div>
				<?php
				echo ihs_get_text_input(
					'TWILIO AUTH TOKEN',
					'ihs_twilio_auth_token',
					'text',
					false,
					'',
					true,
					$tooltip_text
				);
				?>
				<span class="orion-api-msg"><?php echo esc_html__( '(For Reset Password SMS / Order SMS only)', 'orion-sms-otp-verification' ); ?></span>
			</div>
			<!--Twilio PHONE Number Input Field-->
			<div class="media text-muted pt-3 border-bottom border-gray">
				<?php $tooltip_text = esc_html__( 'Get the Twilio phone number you purchased at twilio.com/console with + sign, for Reset Password SMS', 'orion-sms-otp-verification' ); ?>
				<div class="ihs-input-icon ihs-bg-blue d-flex"><i class="fa fa-key" aria-hidden="true"></i></div>
				<?php
				echo ihs_get_text_input(
					'TWILIO PHONE NUMBER',
					'ihs_twilio_phone_number',
					'text',
					false,
					'',
					true,
					$tooltip_text
				);
				?>
				<span class="orion-api-msg"><?php echo esc_html__( '(For Reset Password SMS / Order SMS only)', 'orion-sms-otp-verification' ); ?></span>
			</div>
		</div>
		<!--MSG91 KEYS-->
		<h6 class="border-bottom border-gray pb-3 pt-3 mb-0">
			<?php esc_html_e( 'MSG91 API Configuration ', 'orion-sms-otp-verification' ); ?>
			<?php echo ihs_get_tell_me_how_link( 'Tell me how', 'https://youtu.be/od7f82A7RMw?list=PLD8nQCAhR3tR2N5k3wy8doceQCyVLQEOf' ); ?>
		</h6>
		<div class="ihs-msg91-keys">
			<!--MSG91 Auth Key Input Field-->
			<div class="media text-muted pt-3">
				<?php $tooltip_text = esc_html__( 'Get the auth key from MSG91', 'orion-sms-otp-verification' ); ?>
				<div class="ihs-input-icon ihs-bg-blue d-flex"><i class="fa fa-key" aria-hidden="true"></i></div>
				<?php
				echo ihs_get_text_input(
					'MSG91 AUTH KEY',
					'ihs_otp_auth_key',
					'text',
					false,
					'',
					true,
					$tooltip_text
				);
				?>
			</div>
			<!--Sender's ID-->
			<div class="media text-muted pt-3">
				<?php $tooltip_text = esc_html__( 'Must be 6 char long. e.g. ORIONS', 'orion-sms-otp-verification' ); ?>
				<div class="ihs-input-icon ihs-bg-pink d-flex"><i class="fa fa-id-badge" aria-hidden="true"></i></div>
				<?php
				echo ihs_get_text_input(
					'SENDER\'S ID ( 6 characters )',
					'ihs_otp_sender_id',
					'text',
					false,
					'',
					true,
					$tooltip_text,
					6
				);
				?>
			</div>
			<!--Route-->
			<div class="media text-muted pt-3">
				<?php $route_text = esc_html__( 'Select the MSG91 Route', 'orion-sms-otp-verification' ); ?>
				<div class="ihs-input-icon ihs-bg-purple d-flex"><i class="fas fa-map-signs ihs-my-icons"></i></div>
				<?php echo ihs_get_route_drop_down( 'ROUTE', 'ihs_mgs_route', false, true, $route_text ); ?>
			</div>
			<!--Api Region-->
			<div class="media text-muted pt-3">
				<?php $route_text = esc_html__( '(1) Choose "International" if you are outside India. (2) Choose "Standard" if you are in India. ', 'orion-sms-otp-verification' ); ?>
				<div class="ihs-input-icon ihs-bg-purple d-flex"><i class="fas fa-globe-americas ihs-my-icons"></i></div>
				<?php echo ihs_get_msg91_region_drop_down( 'MSG91 API Region', 'ihs_msg91_region', false, true, $route_text ); ?>
			</div>
		</div>

		<!--Common Configuration-->
		<h6 class="border-bottom border-gray pb-3 pt-3 mb-0">
			<?php esc_html_e( 'Common Configuration', 'orion-sms-otp-verification' ); ?>
		</h6>
		<!--Mobile No length-->
		<div class="media text-muted pt-3">
			<?php $tooltip_text = esc_html__( 'How many digits excluding country code? For e.g. for India enter 10', 'orion-sms-otp-verification' ); ?>
			<div class="ihs-input-icon ihs-bg-pink d-flex"><i class="ihs-my-icons fas fa-phone-square" aria-hidden="true"></i></div>
			<?php
			echo ihs_get_text_input(
				'MOBILE NO LENGTH',
				'ihs_mobile_length',
				'text',
				false,
				'',
				true,
				$tooltip_text,
				2
			);
			?>
		</div>
		<!--Country Code-->
		<div class="media text-muted pt-3  border-bottom border-gray">
			<div class="ihs-input-icon ihs-bg-purple d-flex"><i class="fa fa-globe" aria-hidden="true"></i></div>
			<?php echo ihs_get_text_input( 'COUNTRY CODE', 'ihs_otp_country_code', 'select' ); ?>
		</div>
		<!--Rating-->
		<?php echo ihs_get_rate_us_content(); ?>
	</div>

	<!--2. Form Settings-->
	<!--Heading-->
	<div class="d-sm-flex align-items-center p-3 my-3 text-white-50 ihs-bg-blue rounded box-shadow" style="background-color: #6f42c1; box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .05);">
		<div class="lh-100 ihs-admin-head-cont">
			<h6 class="mb-0 text-white lh-100"><?php esc_html_e( 'Form Settings', 'orion-sms-otp-verification' ); ?></h6>
			<small><?php esc_html_e( 'User Registration Form/ Contact Form 7/ Comment Form/ Any Other Form', 'orion-sms-otp-verification' ); ?></small>
		</div>
	</div>
	<div class="my-3 p-3 bg-white rounded box-shadow ihs-api-config-cont">
		<h6 class="border-bottom border-gray pb-2 mb-0"><?php esc_html_e( 'Form Settings', 'orion-sms-otp-verification' ); ?>
			<?php echo ihs_get_tell_me_how_link( 'Tell me how', 'https://youtu.be/3EX1p05pEv0?list=PLD8nQCAhR3tR2N5k3wy8doceQCyVLQEOf' ); ?>
		</h6>
		<!--Contact form Selector-->
		<div class="media text-muted pt-3">
			<div class="ihs-input-icon ihs-bg-blue d-flex"><i class="ihs-my-icons fab fa-wpforms" aria-hidden="true"></i></div>
			<?php $tooltip_text = esc_html__( 'Please enter a unique bodyclassname followed by classname or id name parent div of the form element. Please prefix a . (dot) for class name and # for ID before the selector', 'orion-sms-otp-verification' ); ?>
			<?php
			echo ihs_get_text_input(
				'FORM SELECTOR',
				'ihs_otp_form_selector',
				'text',
				false,
				'e.g .bodyclassname #divclassname',
				true,
				$tooltip_text
			);
			?>
		</div>
		<!--Submit Btn Selector-->
		<div class="media text-muted pt-3">
			<?php $tooltip_text = esc_html__( 'Please enter a unique body classname followed by submit button id or classname. The two selectors need to be separated by space. Also prefix a . (dot) for class name and # for an ID', 'orion-sms-otp-verification' ); ?>
			<div class="ihs-input-icon ihs-bg-pink d-flex"><i class="ihs-my-icons fab fa-wpforms" aria-hidden="true"></i></div>
			<?php
			echo ihs_get_text_input(
				'SUBMIT BUTTON SELECTOR',
				'ihs_otp_submit_btn-selector',
				'text',
				true,
				'e.g .body-classname #submit-btn-id',
				true,
				$tooltip_text
			);
			?>
		</div>
		<!--New Mobile Input field and preexisting One-->
		<?php echo ihs_get_mobile_input_fields(); ?>

		<!--OTP template-->
		<?php $textarea_placeholder = esc_html__( 'Your One Time Password is {OTP}. This OTP is valid for today and please don\'t share this OTP with anyone for security', 'orion-sms-otp-verification' ); ?>
		<div class="media text-muted pt-3  border-bottom border-gray">
			<?php $tooltip_text = esc_html__( 'Please make sure you follow the format given in placeholder along with {OTP}', 'orion-sms-otp-verification' ); ?>
			<div class="ihs-input-icon ihs_otp_template_textarea ihs-bg-pink d-flex"><i class="ihs-my-icons fas fa-envelope" aria-hidden="true"></i></div>
			<?php
			echo ihs_get_text_input(
				'OTP TEMPLATE',
				'ihs_otp_msg_template',
				'textarea',
				true,
				$textarea_placeholder,
				true,
				$tooltip_text
			);
			?>
		</div>
		<!--Rating-->
		<?php echo ihs_get_rate_us_content(); ?>
	</div>

	<!--3. Password Reset-->
	<!--Heading-->
	<div class="d-sm-flex align-items-center p-3 my-3 text-white-50 ihs-bg-light-pink rounded box-shadow" style="background-color: #6f42c1; box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .05);">
		<div class="lh-100 ihs-admin-head-cont">
			<h6 class="mb-0 text-white lh-100"><?php esc_html_e( 'Forgot Password Settings', 'orion-sms-otp-verification' ); ?></h6>
			<small><?php esc_html_e( 'Send forgot Password SMS Settings ( Add these settings if you want forgot password field to be added in Login form )', 'orion-sms-otp-verification' ); ?></small>
		</div>
	</div>
	<div class="my-3 p-3 bg-white rounded box-shadow ihs-api-config-cont">
		<h6 class="border-bottom border-gray pb-2 mb-0"><?php esc_html_e( 'Form Settings', 'orion-sms-otp-verification' ); ?>
			<?php echo ihs_get_tell_me_how_link( 'Tell me how', 'https://youtu.be/3EX1p05pEv0?list=PLD8nQCAhR3tR2N5k3wy8doceQCyVLQEOf&t=925' ); ?>
		</h6>
		<!--Login form Selector-->
		<div class="media text-muted pt-3">
			<div class="ihs-input-icon ihs-bg-blue d-flex"><i class="ihs-my-icons fab fa-wpforms" aria-hidden="true"></i></div>
			<?php $tooltip_text = esc_html__( 'Enter a unique body classname followed by form\'s parent selector of the login form. Please prefix a . (dot) for class name and # for ID before the login form selector', 'orion-sms-otp-verification' ); ?>
			<?php
			echo ihs_get_text_input(
				'FORM/PARENT SELECTOR',
				'ihs_otp_login_form_selector',
				'text',
				false,
				'e.g .classname or #idname',
				true,
				$tooltip_text
			);
			?>
		</div>
		<!--Input Name-->
		<div class="media text-muted pt-3">
			<div class="ihs-input-icon ihs-bg-purple d-flex"><i class="ihs-my-icons fab fa-wpforms" aria-hidden="true"></i></div>
			<?php $tooltip_text = esc_html__( 'Enter any one input name inside the login form. e.g. name', 'orion-sms-otp-verification' ); ?>
			<?php
			echo ihs_get_text_input(
				'INPUT NAME',
				'ihs_otp_login_form_input_name',
				'text',
				false,
				'e.g user-name',
				true,
				$tooltip_text
			);
			?>
		</div>
		<!--Meta Key for Mobile No-->
		<div class="media text-muted pt-3">
			<div class="ihs-input-icon ihs-bg-pink d-flex"><i class="ihs-my-icons fas fa-code" aria-hidden="true"></i></div>
			<?php $tooltip_text = esc_html__( 'Enter meta_key for mobile number provided mobile no. is being saved in wp_usermeta table', 'orion-sms-otp-verification' ); ?>
			<?php
			echo ihs_get_text_input(
				'META_KEY FOR MOBILE NO',
				'ihs_otp_mob_meta_key',
				'text',
				false,
				'',
				true,
				$tooltip_text
			);
			?>
		</div>
		<!--Is Mobile No Saved with Country Code-->
		<div class="media text-muted pt-3">
			<div class="ihs-input-icon ihs-bg-pink d-flex"><i class="ihs-my-icons fa fa-globe" aria-hidden="true"></i></div>
			<?php
			echo ihs_is_saved_with_country_code(
				'SAVED WITH COUNTRY CODE',
				'ihs_no_saved_with_country',
				true,
				true,
				'If mobile no is being saved with country code in the database, select yes, no 
				otherwise.'
			)
			?>
		</div>
		<!--Forgot Password Country Code-->
		<div class="media text-muted pt-3">
			<div class="ihs-input-icon ihs-bg-blue d-flex"><i class="fa fa-globe" aria-hidden="true"></i></div>
			<?php
			echo ihs_get_text_input(
				'COUNTRY CODE',
				'ihs_otp_mob_country_code',
				'select',
				false,
				'',
				true,
				'If mobile number is being saved with the country code. Please enter the country code ( e.g. if the mobile number is saved as +919960119780 then enter <b>+91</b> )'
			);
			?>
		</div>


		<!--Message template-->
		<?php $textarea_placeholder = 'Your New Password is {OTP}. Please don\'t share this OTP with anyone for security'; ?>
		<div class="media text-muted pt-3  border-bottom border-gray">
			<?php $tooltip_text = esc_html__( 'Please make sure you follow the format given in placeholder along with {OTP}', 'orion-sms-otp-verification' ); ?>
			<div class="ihs-input-icon ihs_otp_template_textarea ihs-bg-pink d-flex"><i class="ihs-my-icons fas fa-envelope" aria-hidden="true"></i></div>
			<?php
			echo ihs_get_text_input(
				'Msg Template',
				'ihs_otp_reset_template',
				'textarea',
				false,
				$textarea_placeholder,
				true,
				$tooltip_text
			);
			?>
		</div>
		<!--Rating-->
		<?php
			echo ihs_get_rate_us_content();
		?>
	</div>

		<!--Submit Button-->
		<?php submit_button(); ?>
	</form>

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
