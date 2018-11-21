( function ( $ ) {
	"use strict";

	var otp = {

		mobileInputElement: '',
		mobileInputSelector: '',
		submitBtnSelector: '',
		mobileOtpInputEl: '',
		sendOtpBtnEl: '',
		otpEntered: '',
		mobileNumberUsed: '',
		countryCode: '',
		verifyOtpBtnEl: '',
		resendOtpBtn: '',
		otpPinSent: '',
		api_used: '',
		countryCodeSelector: '#ihs-country-code .ihs-country-code',
		mobileVerified: false,

		/**
		 * Init function.
		 */
		init: function () {
			this.buildFormSelector();
			this.insertAlertBox();

			// If neither submit button selector or form button selector is filled , then return
			if (  '' === otp.formElement && '' === otp.formSelector  ) {
			}

			otp.addRequiredInputFields();
			otp.bindEvents();
		},

		insertAlertBox: function () {
			$( 'body' ).append( '<div id="oc-alert-container"></div>' );
		},

		/**
		 * ShowAlert Function
		 *
		 * @param message
		 * @param background
		 */
		showAlert: function( message, background ) {
			background = ( background ) ? background : '#3089cf';
			$( '.oc-alert-pop-up' ).remove();
			var alertContainer = document.querySelector( '#oc-alert-container' ),
				htmlEntityIcon = ( '#006E51' === background ) ? '✔' : 'ⓘ' ,
				alertEl = '<div class="oc-alert-pop-up">' +
					'<div class="oc-alert-pop-up-message">' + '<span class="oc-i-icon-pop-up">' + htmlEntityIcon + '</span>' +  message + '</div>' +
					'<div class="oc-alert-pop-up-close" style="background: '+ background  + ' !important" >' + otp_obj.wpml_messages.ok + '</div>' +
					'</div>';

			$( alertEl ).css( 'background', background );
			$( alertContainer ).html( alertEl );

			$( '.oc-alert-pop-up-close' ).on( 'click', function ( event ) {
				$( '.oc-alert-pop-up' ).fadeOut();
			} );
		},

		/**
		 * Set values for form selector and submit button selector.
		 */
		buildFormSelector: function () {
			otp.userFormSelector = otp_obj.form_selector;
			otp.submitBtnSelector = otp_obj.submit_btn_selector;

			/**
			 * Find the parent form element for the submit button selector.
			 * And if the parent form element is found add a class 'ihs_si_form' to it.
			 */
			otp.formElement = $( otp.submitBtnSelector ).parents( 'form' );
			if ( otp.formElement.length ) {
				otp.formElement.addClass( 'ihs_si_form' );
			}

			/**
			 * If user has not entered form selector then, add selector 'form.ihs_si_form',
			 * otherwise use the one provided by him.
			 * @type {string}
			 */
			otp.formSelector = ( ! otp.userFormSelector ) ? 'form.ihs_si_form' : otp.userFormSelector;
		},

		/**
		 * Binds Events.
		 */
		bindEvents: function () {
			if ( otp.submitBtnSelector ) {
				$( otp.submitBtnSelector ).on( 'click', function ( event ) {

					if ( ! otp.mobileVerified ) {
						event.preventDefault();
						otp.showAlert( otp_obj.wpml_messages.alerts.pls_verify_otp_first, '#B93A32' );
						return false;
					}
				} );
			} else {
				$( otp.formSelector ).on( 'submit', function ( event ) {
					if ( ! otp.mobileVerified ) {
						event.preventDefault();
						otp.showAlert( otp_obj.wpml_messages.alerts.pls_enter_req_field, '#B93A32' );
						return false;
					}
				} );
			}

			/**
			 * When the SEND OTP button is clicked.
			 */
			$( otp.formSelector ).on( 'click', '#ihs-send-otp-btn', otp.sendOtpAndCreateVerifyOtpButton );

			/**
			 * When the resend OTP Button is clicked it will remove verify otp button and send the otp and again show verify otp btn.
			 */
			$( otp.formSelector ).on( 'click', '#ihs-resend-otp-btn-id', function () {
				otp.reCreateSendOtpButton();
				otp.sendOtpAndCreateVerifyOtpButton();
			} );

			/**
			 * When VERIFY OTP button to check the value of the otp entered.
			 */
			$( otp.formSelector ).on( 'click', '#ihs-submit-otp-btn', function () {
				var otpInputEl = $( '#ihs-mobile-otp' ),
					otpInputElVal = otpInputEl.val();

				if ( otpInputElVal ) {
					otp.handleOtpVerification( otpInputElVal );
				} else {
					otp.showAlert( otp_obj.wpml_messages.alerts.pls_enter_otp, '#B93A32' );
				}
			} );
		},

		/**
		 * This function is called when the form submit button is clicked.
		 *
		 * @param event
		 */
		sendOtpAndCreateVerifyOtpButton: function ( event ) {
			var mobEl = $( otp.mobileInputSelector ),
				mobElVal = mobEl.val(),
				countryCodeEl = $( otp.countryCodeSelector ),
				countryCodeElVal = countryCodeEl.val(),
				isNoError,
				isAllSelected = false,
				errorArray = [],
				mobileLengthDatabase = parseInt( otp_obj.ihs_mobile_length, 10 );

			isNoError = otp.mobileAndCountryCodeValidation( mobElVal, isAllSelected, mobileLengthDatabase, countryCodeElVal, errorArray );

			// If no errors send Ajax request for otp.
			if ( ! isNoError ) {
				$( '#ihs-mobile-otp' ).removeClass( 'ihs-otp-hide' );
				otp.sendOtpAjaxRequest( mobElVal, countryCodeElVal );
			}
		},

		/**
		 * Recreate Resend OTP
		 * Show send Otp verification button and hide the Verify OTP Button for Resending OTP.
		 */
		reCreateSendOtpButton: function () {
			// Hide the Send OTP button once OTP is sent and disable moble input field
			$( '#ihs-send-otp-btn' ).show();
			$( otp.verifyOtpBtnEl ).addClass( 'ihs-otp-hide' );
			$( '.ihs-otp-required' ).addClass( 'ihs-otp-hide' );
			$( '#ihs-resend-otp-btn-id' ).addClass( 'ihs-otp-hide' );
			$( otp.mobileInputSelector ).attr( 'readonly', false );
			$( otp.countryCodeSelector ).attr( 'readonly', false );
			$( otp.countryCodeSelector ).css( 'color', '#555' );
			$( otp.mobileInputSelector ).css( 'opacity', '1' );
			$( '#ihs-mobile-otp' ).val( '' );
		},

		/**
		 * Checks which api is used msp91 or twilio and then calls the respective functions to verify the otp enetered.
		 *
		 * @param otpInputElVal
		 */
		handleOtpVerification: function ( otpInputElVal ) {
			otp.showAlert( otp_obj.wpml_messages.verifying , '#23282d' );
			if ( 'msg91' === otp.api_used ) {
				otp.verifyMsg91Otp( otpInputElVal )
			} else if ( 'twilio' === otp.api_used ) {
				otp.verifyTwilioOtp( otpInputElVal )
			}
		},

		/**
		 * Checks if the otp entered is same as the one sent.
		 *
		 * @param otpInputElVal
		 */
		verifyMsg91Otp: function ( otpInputElVal ) {

			var request;

			request = $.post(
				otp_obj.ajax_url,   // this url till admin-ajax.php  is given by functions.php wp_localoze_script()
				{
					action: 'ihs_verify_msg91',
					security: otp_obj.ajax_nonce,
					data: {
						mob: otp.mobileNumberUsed,
						country_code: otp.countryCode,
						otp_entered: otpInputElVal
					}
				}
			);


			request.done( function ( response ) {
				var res = response.data.response;

				// If success
				if ( res.success ) {
					otp.mobileVerified = true;
					otp.showAlert( otp_obj.wpml_messages.alerts.thx_for_verification, '#23282d' );

					// Hide all otp buttons on success verification
					$( '.ihs-otp-required.ihs-h' ).fadeOut( 500 );
					$( '#ihs-resend-otp-btn-id' ).fadeOut( 500 );
					$( '#ihs-verify-otp-popup-container' ).fadeOut( 500 );
					$( '.ihs-otp-required' ).fadeOut( 500 );
					otp.verifyOtpBtnEl.fadeOut( 500 );

				} else if ( 'otp_expired' === res.error_message ) {

					// The code is expired or already verification.
					otp.reCreateSendOtpButton();
					otp.showAlert( res.error_message, '#943734' );

				} else if ( 'otp_not_verified' === res.error_message ) {

					otp.showAlert( otp_obj.wpml_messages.alerts.verification_incorrect , '#943734' );

				} else {
					otp.showAlert( res.error_message, '#943734' );
				}
			});
		},

		/**
		 * Sends an ajax request to check if the otp entered is correct.
		 * If its correct we will get the response as true.
		 *
		 * @param otpInputElVal
		 */
		verifyTwilioOtp: function ( otpInputElVal ) {

			var request = $.post(
				otp_obj.ajax_url,   // this url till admin-ajax.php  is given by functions.php wp_localoze_script()
				{
					action: 'ihs_verify_twilio',
					security: otp_obj.ajax_nonce,
					data: {
						mob: otp.mobileNumberUsed,
						country_code: otp.countryCode,
						otp_entered: otpInputElVal
					}
				}
			);

			request.done( function ( response ) {
				var res = response.data.response;
				// If success
				if ( res.success ) {
					otp.mobileVerified = true;
					otp.showAlert( otp_obj.wpml_messages.alerts.thx_for_verification, '#23282d' );

					// Hide all otp buttons on success verification
					$( '.ihs-otp-required' ).fadeOut( 500 );
					$( '#ihs-resend-otp-btn-id' ).fadeOut( 500 );
					otp.verifyOtpBtnEl.fadeOut( 500 );

				} else if ( '60023' === res.error_code ) {

					// The code is expired or already verification.
					otp.reCreateSendOtpButton();
					otp.showAlert( res.error_message, '#B93A32' );

				} else if ( '60022' === res.error_code ) {

					otp.showAlert( res.error_message, '#B93A32' );

				} else if ( '60003' === res.error_code ) {

					otp.showAlert( otp_obj.wpml_messages.alerts.tried_too_many_times, '#B93A32' );
				}
			});
		},

		/**
		 * Return true if there are errors.
		 *
		 * @param mobElVal
		 * @param isAllSelected
		 * @param mobileLengthDatabase
		 * @param countryCodeElVal
		 * @param errorArray
		 */
		mobileAndCountryCodeValidation: function ( mobElVal, isAllSelected, mobileLengthDatabase, countryCodeElVal, errorArray ) {
			if ( ! mobElVal ) {
				errorArray.push( otp_obj.wpml_messages.alerts.enter_mobile_no );
			}

			if ( mobElVal && ! isAllSelected ) {
				// Checks the mobile digit needs to be at least no. of digit user has entered
				if ( mobileLengthDatabase && mobileLengthDatabase !== mobElVal.length ) {
					errorArray.push( otp_obj.wpml_messages.alerts.enter_crt_mobile_no );
				}
				if ( ! mobileLengthDatabase && mobElVal.length < 5 ) {
					errorArray.push( otp_obj.wpml_messages.alerts.enter_crt_mobile_no );
				}
			}

			if ( ! countryCodeElVal ) {
				errorArray.push( otp_obj.wpml_messages.alerts.enter_country_code );
			}

			if ( errorArray.length ) {
				var errorMessages = errorArray.join( '</br>' );
				otp.showAlert( errorMessages, '#B93A32' );
			}

			return errorArray.length;
		},

		/**
		 * Create and append the required input fields.
		 */
		addRequiredInputFields: function () {
			var mobileInputName = 'ihs-mobile',
				countryCodeInputName, countryCode,
				createOtpFieldsWithMobInput = otp_obj.input_required,
				htmlEl, countryCodeHtmlCont;
			countryCodeInputName = 'ihs-country-code';

			countryCode = ( otp_obj.ihs_country_code && 'ALL' !== otp_obj.ihs_country_code ) ? '+' + otp_obj.ihs_country_code : '';

			countryCodeHtmlCont =   '<div id="ihs-country-code" class="ihs-country-code-exis-mob">' +
										'<div class="ihs-country-inp-wrap">' +
											'<span class="">' +
												'<input type="text" name="' + countryCodeInputName + '" value="' + countryCode + '" class="ihs-country-code" required placeholder="e.g. +91" aria-invalid="false" readonly maxlength="5">' +
											'</span> ' +
										'</div>' +
									'</div>';

			if ( 'Yes' === createOtpFieldsWithMobInput ) {
				createOtpFieldsWithMobInput = true;
			} else if ( 'No' === createOtpFieldsWithMobInput ) {
				createOtpFieldsWithMobInput = false;
			} else {
				createOtpFieldsWithMobInput = false;
			}
			otp.mobileInputName = mobileInputName;

			if ( ! createOtpFieldsWithMobInput ) {
				var mobileInputNm = otp_obj.mobile_input_name;

				if ( mobileInputNm ) {

					var mobInpSelector = otp.formSelector + ' input[name="' + mobileInputNm + '"]';
					htmlEl = otp.createMobileInputAndOtherFields( mobileInputNm );
					$( htmlEl.allOtpHtml ).insertAfter( mobInpSelector );



					otp.mobileInputSelector = htmlEl.mobileInputNameSelector;
					otp.mobileInputElement = otp.setInputElVariables( htmlEl.mobileInputNameSelector );
					otp.setOtpInputElementVar();


					// Add country code input field before existing mobile no. and add a class to existing mob input field
					$( countryCodeHtmlCont ).insertBefore( otp.mobileInputSelector );
					$( otp.mobileInputSelector  ).addClass( 'ihs-existing-mob-inp-fld' );
					$( otp.mobileInputSelector  ).css( 'width', 'calc(100% - 5rem)' );
				} else {
					htmlEl = otp.createMobileInputAndOtherFields( mobileInputName );
					$( htmlEl.allOtpHtml ).insertAfter( htmlEl.mobileInputNameSelector );
					otp.mobileInputSelector = htmlEl.mobileInputNameSelector;
					otp.mobileInputElement = otp.setInputElVariables( htmlEl.mobileInputNameSelector );
					otp.setOtpInputElementVar();

					// Add country code input field before existing mobile no. and add a class to existing mob input field
					$( countryCodeHtmlCont ).insertBefore( otp.mobileInputSelector );
					$( otp.mobileInputSelector  ).addClass( 'ihs-existing-mob-inp-fld' );
					$( otp.mobileInputSelector  ).css( 'width', 'calc(100% - 5rem)' );
				}

			} else {
				var readOnly,
					mobAndCountryCodeContent = '',
					countryCodeAndMobileInputEl, submitBtnSelector,
					mobileInpName = 'ihs-mobile';
					readOnly = ( countryCode ) ? 'readonly' : '';
					countryCodeAndMobileInputEl = '<label id="ihs-country-code" class="ihs-mobile-no-lab">' + otp_obj.wpml_messages.mobile_box_label +  '<br>\n' +
														'<div class="ihs-country-inp-wrap">' +
															'<span class="">' +
															'<input type="text" name="' + countryCodeInputName + '" value="' + countryCode + '" class="ihs-country-code" required placeholder="e.g. +91" aria-invalid="false" readonly maxlength="5">' +
															'</span> ' +
														'</div>' +
														'<div class="ihs-mob-inp-wrap">' +
															'<span class="">' +
															'<input type="text" name="' + mobileInpName + '" value="" class="ihs-mb-inp-field" aria-required="true" aria-invalid="false">' +
															'</span> ' +
														'</div>' +
												   '</label>',
					submitBtnSelector = otp.formSelector + ' input[type="submit"]';
				htmlEl = otp.createMobileInputAndOtherFields( mobileInputName );
				mobAndCountryCodeContent = '<div class="ihs-mob-country-wrapper">' + countryCodeAndMobileInputEl + '</div>';
				mobAndCountryCodeContent += htmlEl.allOtpHtml;
				otp.mobileInputSelector = '#ihs-country-code .ihs-mb-inp-field';
				otp.countryCodeSelector = '#ihs-country-code .ihs-country-code';
				// $( mobileInputEl ).insertBefore( submitBtnSelector );

				$( otp.formSelector ).append( mobAndCountryCodeContent );
				otp.setOtpInputElementVar();
				otp.mobileInputElement = otp.setInputElVariables( '#ihs-mobile-number' );
			}
		},

		setOtpInputElementVar: function () {
			otp.mobileOtpInputEl = otp.setInputElVariables( '#ihs-mobile-otp' );
			otp.mobileOtpHiddenInputEl = otp.setInputElVariables( '#ihs-otp-hidden' );
			otp.sendOtpBtnEl = otp.setInputElVariables( '#ihs-send-otp-btn' );
			otp.verifyOtpBtnEl = otp.setInputElVariables( '#ihs-submit-otp-btn' );

		},

		/**
		 * Sets the value of an element.
		 *
		 * @param elementSelector
		 * @return {*|HTMLElement} elementSelector Element Selector.
		 */
		setInputElVariables: function ( elementSelector ) {
			return $( elementSelector );
		},

		/**
		 * Creates markup for OTP input fields and submit button.
		 *
		 * @param mobileInputName
		 * @return {obj} htmlEl Contains markup for OTP input fields and submit button.
		 */
		createMobileInputAndOtherFields: function ( mobileInputName ) {
			var htmlEl = {},
				otpInputEl = '<br><label id="ihs-otp-required" class="ihs-otp-required ihs-otp-hide"> ' + otp_obj.wpml_messages.otp_required + '<br>\n' +
				'<span class="wrap ihs-otp">' +
				'<input type="number" id="ihs-mobile-otp" name="ihs-otp" value="" size="40" class="wpcf7-text wpcf7-validates-as-required ihs-otp-hide" aria-required="true" aria-invalid="false">' +
				'</span>' +
				'</label>',
				sendOtpBtn = '<div class="ihs-otp-btn" id="ihs-send-otp-btn">' + otp_obj.wpml_messages.send_otp + '</div>',
				submitOtpBtn = '<div class="ihs-otp-btn ihs-otp-hide" id="ihs-submit-otp-btn">' + otp_obj.wpml_messages.verify_otp + '</div>',
				resendOtpBtn = '<div class="ihs-otp-btn ihs-otp-hide" id="ihs-resend-otp-btn-id">' + otp_obj.wpml_messages.resend_otp + '</div>';
				htmlEl.allOtpHtml = otpInputEl + sendOtpBtn + submitOtpBtn + resendOtpBtn;
				htmlEl.mobileInputNameSelector = otp.formSelector + ' input[name="' + mobileInputName + '"]';
			return htmlEl;
		},

		/**
		 * OTP function Sends Ajax request to send OTP
		 * @param {string} mobileNumber
		 * @param {string} countryCode
		 */
		sendOtpAjaxRequest: function ( mobileNumber, countryCode ) {

			// Hide the send otp button and show message that sending OTP
			$( '#ihs-send-otp-btn' ).hide();
			otp.showAlert( otp_obj.wpml_messages.sending_otp, '#23282d' );

			var request = $.post(
				otp_obj.ajax_url,   // this url till admin-ajax.php  is given by functions.php wp_localoze_script()
				{
					action: 'ihs_otp_ajax_hook',
					security: otp_obj.ajax_nonce,
					data: {
						mob: mobileNumber,
						country_code: countryCode
					}
				}
			);

			request.done( function ( response ) {

				// Set the otp value and the type of api used from the response.
				otp.api_used = response.data.api;
				otp.mobileNumberUsed = response.data.mobile;
				otp.countryCode = response.data.country_code;

				// If we get the response.data.otp_sent as true meaning OTP was sent
				if ( '1' === response.data.otp_sent ) {
					otp.showAlert( otp_obj.wpml_messages.alerts.otp_sent_to_mobile, '#23282d' );

					// Hide the Send OTP button once OTP is sent and disable moble input field
					$( '#ihs-send-otp-btn' ).hide();
					$( otp.verifyOtpBtnEl ).removeClass( 'ihs-otp-hide' );
					$( '.ihs-otp-required' ).removeClass( 'ihs-otp-hide' );
					$( '#ihs-resend-otp-btn-id' ).removeClass( 'ihs-otp-hide' );
					$( otp.mobileInputSelector ).attr( 'readonly', true );
					$( otp.countryCodeSelector ).attr( 'readonly', true );
					$( otp.countryCodeSelector ).css( 'color', '#b3b0b0' );
					$( otp.mobileInputSelector ).css( 'opacity', '0.5' );
				} else {
					// If error.
					$( '#ihs-send-otp-btn' ).show();
					otp.showAlert( otp_obj.wpml_messages.alerts.error_try_again, '#23282d' );
				}
			} );
		}
	};
		if( 'undefined' !== typeof otp_obj ){
		var selector = 'form' + otp_obj.form_selector;
		if ( $( selector ) ) {
			otp.init();
		}
	}

})( jQuery );
