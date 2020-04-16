<?php

if (!defined('ABSPATH')) {
    exit;
}

add_shortcode('digits-edit-phone', 'digits_edit_phone_shortcode');

function digits_edit_phone_shortcode()
{
    if (!is_user_logged_in()) return '';

    $user_id = get_current_user_id();
    $edit_phone = '<form method="post" autocomplete="off">';
    $edit_phone .= '<input type="hidden" name="dig_nounce" class="dig_nounce" value="' . wp_create_nonce('dig_form') . '" />';
    $edit_phone .= '<input type="hidden" name="digits_update_mobile" class="digits_update_mobile" value="1" />';
    $edit_phone .= '<input type="hidden" name="csrf" value="" />';
    $edit_phone .= '<input type="hidden" name="code" value="" />';

    $edit_phone .= '<div class="digits-edit-phone_container">';

    $edit_phone .= '<div class="digits-edit-phone_row digits-edit-phone_field">';
    $edit_phone .= '<input type="hidden" name="dig_old_phone" class="dig_cur_phone"
                       value="' . esc_attr__(get_the_author_meta('digits_phone', $user_id)) . '"/>';
    $edit_phone .= '<label>' . esc_attr__("Mobile Number", "digits") . '</label>';
    $edit_phone .= '<input type="text" autocomplete="off"
                       countryCode="' . esc_attr__(get_the_author_meta('digt_countrycode', $user_id)) . '"
                       data-dig-mob="1" name="digits_phone"
                       value="' . esc_attr__(get_the_author_meta('digits_phone_no', $user_id)) . '"
                       class="input-text mobile_field digits_mobile_field mobile_number" f-mob="1" nan="1"/>';
    $edit_phone .= '</div>';

    $edit_phone .= '<div class="digits-edit-phone_row digits-edit-phone_otp-container" style="display: none;">
        <label for="digit_ac_otp">' . esc_attr__("OTP", "digits") . ' <span class="required">*</span></label>
        <input type="text" class="input-text digits_otp_field" name="digit_ac_otp" id="digit_ac_otp"/>
    </div>';

    $edit_phone .= '<button class="button button-primary digits_update_mobile_submit" style="color: white !important;"  type="submit" disabled>' . esc_attr__('ثبت شماره موبایل جدید', 'digits') . '</button>';

    $edit_phone .= '</div>';

    $edit_phone .= "<div  class=\"dig_resendotp dig_logof_log_resend\" id=\"dig_lo_resend_otp_btn\" dis='1'> " . esc_attr__('ارسال مجدد', 'digits') . "<span>(00:<span>" . dig_getOtpTime() . "</span>)</span></div>";
    $edit_phone .= '</form>';
    return $edit_phone;
}

add_action('init', 'digits_form_update_number');
function digits_form_update_number()
{
    if (!is_user_logged_in()) return;

    if (isset($_POST['digits_update_mobile'])) {

        if (!wp_verify_nonce($_POST['dig_nounce'], 'dig_form')) return;

        $user_id = get_current_user_id();
        $countrycode = sanitize_text_field($_POST['digt_countrycode']);
        $mobile = sanitize_mobile_field_dig($_POST['digits_phone']);
        $otp = sanitize_text_field($_POST['digit_ac_otp']);

        $validateMob = dig_validateMobileNumber($countrycode, $mobile, $otp, $_POST['dig_nounce'], 11, $_POST['code'], true);

        if ($validateMob['success'] === false) {
            return;
        } else {
            $countrycode = $validateMob['countrycode'];
            $mobile = $validateMob['mobile'];
            digits_update_mobile($user_id, $countrycode, "0".$mobile);
        }

    }
}