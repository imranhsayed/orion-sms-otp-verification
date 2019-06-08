<?php
/**
 * Function to generate Plugin Settings form
 *
 * @package Orion SMS OTP verification
 */

if ( ! function_exists( 'ihs_get_text_input' ) ) {
	/**
	 *
	 * $input name is the same as the $option_name
	 *
	 * @param {string} $label_name Label name.
	 * @param {string} $input_name Input name.
	 */

	/**
	 * Get the input html content.
	 *
	 * @param {string} $label_name Label name.
	 * @param {string} $input_name Input name is the same as the option_name.
	 * @param {string} $type Type.
	 * @param {bool}   $required Required.
	 * @param {string} $placeholder Placeholder.
	 * @param {bool}   $tooltip Tooltip.
	 * @param {string} $tooltip_text Tooltip.
	 * @param {string} $max_length Max Length.
	 * @param {string} $default_val Default Value.
	 *
	 * @return string
	 */
	function ihs_get_text_input( $label_name, $input_name, $type = 'text', $required = true, $placeholder = '',
		$tooltip = false, $tooltip_text = '', $max_length = '', $default_val = '' ) {
		$opt_val       = get_option( $input_name );
		$option_val    = ( ! empty( $opt_val ) ) ? esc_attr( $opt_val ) : $default_val;
		$required_attr = ( $required ) ? 'required' : '';
		$required      = ( $required ) ? ' <span class="ihs-otp-red">*</span>' : '';

		// Label.
		if ( $tooltip ) {
			$label_content = '<strong class="d-block text-gray-dark ihs-tooltip-container">
									   ' . $label_name . $required . '
									   <i class="far fa-question-circle"></i>
									   <span class="ihs-tooltip-text">' . $tooltip_text . '</span>
									</strong>';
		} else {
			$label_content = '<strong class="d-block text-gray-dark ">' . $label_name . $required . '</strong>';
		}

		// Input field.
		if ( 'textarea' === $type ) {
			$input_field = '<textarea type="text" class="config-input-class" name="' . $input_name . '" placeholder="' . $placeholder . '" cols="60" rows="3" ' . $required_attr . ' />' . $option_val . '</textarea>';
		} elseif ( 'select' === $type ) {
			$input_field = ihs_get_country_code_content( $input_name, $option_val );
		} else {
			$input_field = '<input type="' . $type . '" class="config-input-class" name="' . $input_name . '" value="' . $option_val . '" placeholder="' . $placeholder . '" maxlength=" ' . $max_length . ' " ' . $required_attr . ' />';
		}

		$content = '<div class="d-sm-flex media-body ihs-input-wrap pb-3 mb-0 small lh-125 ">
						' . $label_content . '
						<label for="">
							' . $input_field . '
						</label>
					</div>';
		return $content;
	}
}

if ( ! function_exists( 'ihs_get_mobile_input_fields' ) ) {
	/**
	 * Get the mobile input field html content.
	 *
	 * @param {string} $input_name_req Input name required.
	 * @param {string} $input_name Input Name.
	 * @return {string} Returns Mobile input field content.
	 */
	function ihs_get_mobile_input_fields( $input_name_req = 'ihs_otp_mobile_input_required', $input_name = 'ihs_otp_mobile_input_name' ) {
		$checked_array = ihs_get_checked_val();
		$hide          = ( $checked_array['checked-yes'] ) ? 'ihs-otp-hide' : '';
		$content       = '<div class="media text-muted pt-3">
					<div class="ihs-input-icon ihs-bg-purple d-flex"><i class="ihs-my-icons fas fa-phone-square" aria-hidden="true"></i></div>
						<div class="d-sm-flex media-body ihs-input-wrap pb-3 mb-0 small lh-125 ">
							<strong class="d-block text-gray-dark ">CREATE MOBILE INPUT FIELD : <span class="ihs-otp-red">*</span></strong>
							<label for="" class="ihs-mobile-input-label">
								<input type="radio" name="' . $input_name_req . '" class="ihs-otp-mob-input ihs-yes config-input-class" value="Yes" ' . esc_attr( $checked_array['checked-yes'] ) . '/>Yes
								<input type="radio" name="' . $input_name_req . '" class="ihs-otp-mob-input config-input-class ml-1" value="No" ' . esc_attr( $checked_array['checked-no'] ) . '/>No
							</label>
						</div>
					</div>';
		$content      .= '<div class="media text-muted pt-3" id="ihs_otp_mobile_input_name">
						<div class="ihs-input-icon ihs-bg-purple d-flex"><i class="ihs-my-icons fas fa-phone-square" aria-hidden="true"></i></div>
							<div class="d-sm-flex media-body ihs-input-wrap pb-3 mb-0 small lh-125  ' . esc_html( $hide ) . '">
							<strong class="d-block text-gray-dark ihs-tooltip-container">
								MOBILE INPUT NAME: <span class="ihs-otp-red">*</span>
								<i class="far fa-question-circle"></i>
								<span class="ihs-tooltip-text">If your form already has an input field enter the input field name here.</span>
							</strong>
							<label for="">
								<input type="text" name="' . $input_name . '" class="ihs_otp_mob_input_name config-input-class" value="' . esc_attr( get_option( $input_name ) ) . '" placeholder="e.g. inputname" required />
							</label>
						</div>
					</div>';

		return $content;

	}
}

if ( ! function_exists( 'ihs_get_woo_mobile_input_fields' ) ) {
	/**
	 * Get the mobile input field html content.
	 *
	 * @param {string} $input_name_req Input name required.
	 * @param {string} $input_name Input name.
	 * @return {string} Returns Mobile input field content.
	 */
	function ihs_get_woo_mobile_input_fields( $input_name_req, $input_name ) {
		// Hidden the Create mobile input field for woo-commerce settings using .d-none class.
		$content               = '<div class="media text-muted pt-3 d-none">
					<div class="ihs-input-icon ihs-bg-purple d-flex"><i class="ihs-my-icons fas fa-phone-square" aria-hidden="true"></i></div>
						<div class="d-sm-flex media-body ihs-input-wrap pb-3 mb-0 small lh-125 ">
							<strong class="d-block text-gray-dark ">CREATE MOBILE INPUT FIELD : <span class="ihs-otp-red">*</span></strong>
							<label for="" class="ihs-mobile-input-label">
								<input type="radio" name="' . $input_name_req . '" class="ihs-otp-mob-input config-input-class ml-1" value="No" checked />No
							</label>
						</div>
					</div>';
		$mob_inp_val           = get_option( $input_name );
		$mobile_input_name_val = ( ! empty( $mob_inp_val ) ) ? $mob_inp_val : 'billing_phone';
		$content              .= '<div class="media text-muted pt-3" id="ihs_otp_mobile_input_name">
						<div class="ihs-input-icon ihs-bg-purple d-flex"><i class="ihs-my-icons fas fa-phone-square" aria-hidden="true"></i></div>
							<div class="d-sm-flex media-body ihs-input-wrap pb-3 mb-0 small lh-125 ">
							<strong class="d-block text-gray-dark ihs-tooltip-container">
								MOBILE INPUT NAME: <span class="ihs-otp-red">*</span>
								<i class="far fa-question-circle"></i>
								<span class="ihs-tooltip-text">If your form already has an input field enter the input field name here.</span>
							</strong>
							<label for="">
								<input type="text" name="' . $input_name . '" class="ihs_otp_mob_input_name config-input-class" value="' . esc_attr( $mobile_input_name_val ) . '" placeholder="e.g. billing_phone " required />
							</label>
						</div>
					</div>';

		return $content;

	}
}

if ( ! function_exists( 'ihs_get_tell_me_how_link' ) ) {
	/**
	 * Get the tell me how link.
	 *
	 * @param {string} $link_text Link text.
	 * @param {string} $link Link.
	 *
	 * @return {string} $content Html link for the you tube tutorial.
	 */
	function ihs_get_tell_me_how_link( $link_text, $link ) {
		$content = ' <a href="' . esc_url( $link ) . '" target="_blank" class="tell-me-hw-link">
						<i class="fab fa-youtube ihs-you-tube-icon"></i>
						' . $link_text . '
						<i class="far fa-question-circle"></i>
					</a>';
		return $content;
	}
}

if ( ! function_exists( 'ihs_get_video_cards' ) ) {
	/**
	 * Display the Video html content.
	 *
	 * @param {string} $title Title.
	 * @param {string} $description Description.
	 * @param {string} $link Link.
	 */
	function ihs_get_video_cards( $title, $description, $link ) {
		?>
		<!-- Card -->
		<div class="ihs-video-card card">
			<!-- Card image -->
			<div class="view overlay">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="<?php echo esc_url( $link ); ?>" allowfullscreen></iframe>
				</div>
				<a>
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>
			<!-- Social buttons -->
			<div class="card-share">
				<!-- Button action -->
				<a class="btn-floating btn-action ihs-video-share-link share-toggle indigo ml-auto mr-4 float-right"><i class="fab ihs-share-icon fa-youtube"></i></a>
			</div>
			<!-- Card content -->
			<div class="card-body pt-0">
				<!-- Title -->
				<h4 class="card-title mb-0"><?php echo esc_html( $title ); ?></h4>
				<hr>
				<!-- Text -->
				<p class="card-text"><?php echo esc_html( $description ); ?></p>
				<a href="<?php echo esc_url( $link ); ?>" target="_blank"><button class="ihs-video-read-mr-btn btn btn-indigo btn-rounded btn-md">More</button></a>
			</div>
		</div>
		<!-- Card -->
		<?php

	}
}

if ( ! function_exists( 'ihs_get_api_type' ) ) {
	/**
	 * Display the Api Type( msg91 or twilio
	 *
	 * @param {string} $label_name Label.
	 * @param {string} $input_name Input Name.
	 * @param {bool}   $required Required.
	 * @param {bool}   $tooltip Tooltip.
	 * @param {string} $tooltip_text Tooltip text.
	 *
	 * @return string
	 */
	function ihs_get_api_type( $label_name, $input_name, $required = true, $tooltip = false, $tooltip_text = '' ) {

		$option_val = esc_attr( get_option( $input_name ) );
		$required   = ( $required ) ? ' <span class="ihs-otp-red">*</span>' : '';

		// Label.
		if ( $tooltip ) {
			$label_content = '<strong class="d-block text-gray-dark ihs-tooltip-container">
									   ' . $label_name . $required . '
									   <i class="far fa-question-circle"></i>
									   <span class="ihs-tooltip-text">' . $tooltip_text . '</span>
									</strong>';
		} else {
			$label_content = '<strong class="d-block text-gray-dark ">' . $label_name . $required . '</strong>';
		}

		$selected_msg91_api  = ( 'msg91' === $option_val ) ? 'selected' : '';
		$selected_twilio_api = ( 'twilio' === $option_val ) ? 'selected' : '';

		$content = '<div class="d-sm-flex media-body ihs-input-wrap pb-3 mb-0 small lh-125 ">
						' . $label_content . '
						<label for="">
							<select name="' . $input_name . '"  class="config-input-class" id="ihs-select-api-type" required>
							<option value="">' . __( 'Select API', 'orion-sms-otp-verification' ) . '</option>
							<option class="ihs-msg91-option" value="msg91" ' . $selected_msg91_api . '>MSG91</option>
							<option class="ihs-twilio-option" value="twilio" ' . $selected_twilio_api . ' >Twilio</option>
							</select>
						</label>
					</div>';
		return $content;
	}
}

if ( ! function_exists( 'ihs_get_route_drop_down' ) ) {
	/**
	 * Display the Route Dropdown html content.
	 *
	 * @param {string} $label_name Label.
	 * @param {string} $input_name Input Name.
	 * @param {bool}   $required Required.
	 * @param {bool}   $tooltip Tooltip.
	 * @param {string} $tooltip_text Tooltip text.
	 *
	 * @return string
	 */
	function ihs_get_route_drop_down( $label_name, $input_name, $required = true, $tooltip = false, $tooltip_text = '' ) {

		$option_val = esc_attr( get_option( $input_name ) );
		$required   = ( $required ) ? ' <span class="ihs-otp-red">*</span>' : '';

		// Label.
		if ( $tooltip ) {
			$label_content = '<strong class="d-block text-gray-dark ihs-tooltip-container">
									   ' . $label_name . $required . '
									   <i class="far fa-question-circle"></i>
									   <span class="ihs-tooltip-text">' . $tooltip_text . '</span>
									</strong>';
		} else {
			$label_content = '<strong class="d-block text-gray-dark ">' . $label_name . $required . '</strong>';
		}

		$content = '<div class="d-sm-flex media-body ihs-input-wrap pb-3 mb-0 small lh-125 ">
						' . $label_content . '
						<label for="">
							<select name="' . $input_name . '"  class="config-input-class" id="">
							<option value="otp-route" selected >OTP Route</option>
							</select>
						</label>
					</div>';
		return $content;
	}
}

if ( ! function_exists( 'ihs_get_msg91_region_drop_down' ) ) {
	/**
	 * Display the API Region Dropdown html content.
	 *
	 * @param {string} $label_name Label.
	 * @param {string} $input_name Input Name.
	 * @param {bool}   $required Required.
	 * @param {bool}   $tooltip Tooltip.
	 * @param {string} $tooltip_text Tooltip text.
	 *
	 * @return string
	 */
	function ihs_get_msg91_region_drop_down( $label_name, $input_name, $required = true, $tooltip = false, $tooltip_text = '' ) {

		$option_val     = esc_attr( get_option( $input_name ) );
		$world_selected = ( 'world' === $option_val ) ? 'selected' : '';
		$local_selected = ( 'local' === $option_val ) ? 'selected' : '';

		$required = ( $required ) ? ' <span class="ihs-otp-red">*</span>' : '';

		// Label.
		if ( $tooltip ) {
			$label_content = '<strong class="d-block text-gray-dark ihs-tooltip-container">
									   ' . $label_name . $required . '
									   <i class="far fa-question-circle"></i>
									   <span class="ihs-tooltip-text">' . $tooltip_text . '</span>
									</strong>';
		} else {
			$label_content = '<strong class="d-block text-gray-dark ">' . $label_name . $required . '</strong>';
		}

		$content = '<div class="d-sm-flex media-body ihs-input-wrap pb-3 mb-0 small lh-125 ">
						' . $label_content . '
						<label for="">
							<select name="' . $input_name . '"  class="config-input-class" id="">
							<option value="world" ' . $world_selected . '>International</option>
							<option value="local" ' . $local_selected . '>Standard</option>
							</select>
						</label>
					</div>';
		return $content;
	}
}

if ( ! function_exists( 'ihs_is_saved_with_country_code' ) ) {
	/**
	 * Checks if saved with country code.
	 *
	 * @param {String} $label_name Label.
	 * @param {String} $input_name Input Name.
	 * @param {bool}   $required Required.
	 * @param {bool}   $tooltip Tooltip.
	 * @param {string} $tooltip_text Tooltip text.
	 *
	 * @return string
	 */
	function ihs_is_saved_with_country_code( $label_name, $input_name, $required = true, $tooltip = false, $tooltip_text = '' ) {
		$option_val = esc_attr( get_option( $input_name ) );
		$required   = ( $required ) ? ' <span class="ihs-otp-red">*</span>' : '';

		// Label.
		if ( $tooltip ) {
			$label_content = '<strong class="d-block text-gray-dark ihs-tooltip-container">
									   ' . $label_name . $required . '
									   <i class="far fa-question-circle"></i>
									   <span class="ihs-tooltip-text">' . $tooltip_text . '</span>
									</strong>';
		} else {
			$label_content = '<strong class="d-block text-gray-dark ">' . $label_name . $required . '</strong>';
		}

		$selected_yes = ( 'Yes' === $option_val ) ? 'selected' : '';
		$selected_no  = ( 'No' === $option_val ) ? 'selected' : '';

		$content = '<div class="d-sm-flex media-body ihs-input-wrap pb-3 mb-0 small lh-125 ">
						' . $label_content . '
						<label for="">
							<select name="' . $input_name . '"  class="config-input-class" id="">
							<option value="Yes" ' . $selected_yes . '>Yes</option>
							<option value="No" ' . $selected_no . ' >No</option>
							</select>
						</label>
					</div>';
		return $content;
	}
}
