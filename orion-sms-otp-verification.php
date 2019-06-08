<?php
/**
 * Orion SMS OTP verification Main File.
 *
 * @package Orion SMS OTP verification
 */

/*
Plugin Name:  Orion SMS OTP Verification
Plugin URI:   https://www.orionhive.com/sms-verifcation
Description:  SMS/OTP verification for all forms via Twilio or MSG91. So user can't submit form without verifying mobile number. User verification via SMS.
Also reset password via SMS/OTP.
Version:      1.0.9
Author:       Imran Sayed, Smit Patadiya
Author URI:   https://www.orionhive.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  orion-sms-otp-verification
Domain Path:  /languages
*/

/* Include the Custom functions file */
require 'inc/country-code-functions.php';
require 'inc/rate-us.php';
require 'inc/form-input-functions.php';
require 'custom-functions.php';
require 'inc/admin-settings.php';
