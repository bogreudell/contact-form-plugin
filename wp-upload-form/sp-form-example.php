<?php
/*
Plugin Name: Wikitongues Upload Form
Plugin URI: http://dbudell.com
Description: Video upload form for Wikitongues.org, based on "Simple non-bloated WordPress Contact Form" by Agbonghama Collins (http://w3guy.com).
Version: 1.0
Author: Daniel Bogre Udell (@dbudell)
Author URI: http://dbudell.com
*/

// how to get pattern to accomodate non-latin characters?

function html_form_code() {

    echo '<div class="form-page" id="upload">';
    echo '<h1>Upload an interview</h1>';
    echo '<form enctype="multipart/form-data" action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
    echo '<div class="grouping">';
    echo '<h2>About you</h2>';
    echo '<div class="input col-1">';
    echo '<input id="name" type="text" name="w-name" value="' . ( isset( $_POST["w-name"] ) ? esc_attr( $_POST["w-name"] ) : '' ) . '" required>';
    echo '<span class="highlight"></span>';
    echo '<span class="bar"></span>';
    echo '<label for="name">Name</label>';
    echo '</div>';
    echo '<div class="input col-1">';
    echo '<input id="email" type="text" name="w-email" value="' . ( isset( $_POST["w-email"] ) ? esc_attr( $_POST["w-email"] ) : '' ) . '" required>';
    echo '<span class="highlight"></span>';
    echo '<span class="bar"></span>';
    echo '<label for="email">Email</label>';
    echo '</div>';
    echo '<div class="input col-2">';
    echo '<input id="location" type="text" name="w-location" value="' . ( isset( $_POST["w-location"] ) ? esc_attr( $_POST["w-location"] ) : '' ) . '" required>';
    echo '<span class="highlight"></span>';
    echo '<span class="bar"></span>';
    echo '<label for="location">Location</label>';
    echo '</div>';
    echo '</div>';
    echo '<div class="grouping">';
    echo '<h2>About the interviewee</h2>';
    echo '<fieldset>';
    echo '<legend>Are you the interviewee?</legend>';
    echo '<ul>';
    echo '<li id="a">';
    echo '<input type="radio" id="yes" name="interviewee" value="Yes">';
    echo '<label for="yes">Yes</label>';
    echo '</li>';
    echo '<li id="b">';
    echo '<input type="radio" id="no" name="interviewee" value="No">';
    echo '<label for="no">No</label>';
    echo '</li>';
    echo '</ul>';
    echo '</fieldset>';
    echo '<div class="input col-2 hidden"  id="c">';
    echo '<input id="interviewee-name" type="text" name="w-interviewee-name" value="' . ( isset( $_POST["w-interviewee-name"] ) ? esc_attr( $_POST["w-interviewee-name"] ) : '' ) . '" required>';
    echo '<span class="highlight"></span>';
    echo '<span class="bar"></span>';
    echo '<label for="interviewee-name">What is the interviewee\'s name?</label>';
    echo '</div>';
    echo '<div class="input col-2">';
    echo '<input id="interviewee-language" type="text" name="w-interviewee-language" value="' . ( isset( $_POST["w-interviewee-language"] ) ? esc_attr( $_POST["w-interviewee-language"] ) : '' ) . '" required>';
    echo '<span class="highlight"></span>';
    echo '<span class="bar"></span>';
    echo '<label for="interviewee-language">What languages are used in this interview?</label>';
    echo '</div>';
    echo '</div>';
    echo '<div class="grouping">';
    echo '<h2>About the interview</h2>';
    echo '<div class="input col-2">';
    echo '<input id="interview-file" type="text" name="w-interview-file" value="' . ( isset( $_POST["w-interview-file"] ) ? esc_attr( $_POST["w-interview-file"] ) : '' ) . '" required>';
    echo '<span class="highlight"></span>';
    echo '<span class="bar"></span>';
    echo '<label for="interview-file">Link to interview file (Mediafire, Google Drive, Dropbox)</label>';
    echo '</div>';
    /*echo '<div class="input col-2">';
    echo '<input type="file" name="cf-attachment" size="40" />';
    echo '</div>';*/
    echo '<div class="input col-2">';
    echo '<input id="interview-location" type="text" name="w-interview-location" value="' . ( isset( $_POST["w-interview-location"] ) ? esc_attr( $_POST["w-interview-location"] ) : '' ) . '" required>';
    echo '<span class="highlight"></span>';
    echo '<span class="bar"></span>';
    echo '<label for="interview-location">Where was the interview recorded?</label>';
    echo '</div>';
    echo '</div>';
    echo '<div class="grouping">';
    echo '<h2>Optional</h2>';
    echo '<div class="input col-2">';
    echo '<textarea name="w-optional-transcription" id="optional-transcription" cols="30" rows="1">' . ( isset( $_POST["w-optional-transcription"] ) ? esc_attr( $_POST["w-optional-transcription"] ) : '' ) . '</textarea>';
    echo '<span class="highlight"></span>';
    echo '<span class="bar"></span>';
    echo '<div class="hiddenDiv"></div>';
    echo '<label for="optional-transcription">Transcribe the Interview</label>';
    echo '</div>';
    echo '<div class="input col-2">';
    echo '<textarea name="w-optional-translations" id="optional-translations" cols="30" rows="1">' . ( isset( $_POST["w-optional-translations"] ) ? esc_attr( $_POST["w-optional-translations"] ) : '' ) . '</textarea>';
    echo '<span class="highlight"></span>';
    echo '<span class="bar"></span>';
    echo '<div class="hiddenDiv"></div>';
    echo '<label for="optional-translations">Translate the interview (Include language names)</label>';
    echo '</div>';
    echo '<div class="input col-2">';
    echo '<textarea name="w-optional-message" id="optional-message" cols="30" rows="1">' . ( isset( $_POST["w-optional-message"] ) ? esc_attr( $_POST["w-optional-message"] ) : '' ) . '</textarea>';
    echo '<span class="highlight"></span>';
    echo '<span class="bar"></span>';
    echo '<div class="hiddenDiv"></div>';
    echo '<label for="optional-message">Send us a message</label>';
    echo '</div>';
    echo '</div>';
    echo '<div class="grouping">';
    echo '<h2>Release form</h2>';
    echo '<div class="input col-2 checkbox">';
    echo '<input id="release" name="release" type="checkbox" required>';
    echo '<label for="release">I have read and accept the terms of the release form</label>';
    echo '<a href="#">Read release form</a>';
    echo '</div>';
    echo '</div>';
    echo '<div class="grouping">';
    echo '<h2>Opt-in publicity clause</h2>';
    echo '<div class="input col-2 checkbox">';
    echo '<input id="publicity" name="publicity" type="checkbox">';
    echo '<label for="publicity">Wikitongues may use this video in the production of other media. (Optional)</label>';
    echo '<a href="#">Read opt-in publicity clause</a>';
    echo '</div>';
    echo '</div>';
    echo '<div class="grouping">';
    echo '<input type="submit" name="w-submitted" value="Submit">';
    echo '</div>';
    echo '</form>';
    echo '</div>';

}

function deliver_mail() {

    // if the submit button is clicked, send the email
    if ( isset( $_POST['w-submitted'] ) ) {

        // collect form values
        $name = sanitize_text_field( $_POST['w-name'] );
        $email = sanitize_email( $_POST['w-email'] );
        $location = sanitize_text_field( $_POST['w-location'] );
        if(isset($_POST['interviewee'])) {
            $interviewee = $_POST['interviewee'];
        }
        $interviewee_name = sanitize_text_field( $_POST['w-interviewee-name'] );
        $interviewee_language = sanitize_text_field( $_POST['w-interviewee-language'] );
        /*if(isset($_FILES['cf-attachment']['tmp_name'])) {
            $attachment = chunk_split(base64_encode(file_get_contents($_FILES['cf-attachment']['tmp_name'])));
            $filename = $_FILES['cf-attachment']['name'];
        }*/
        $interview_file = sanitize_text_field( $_POST['w-interview-file'] );
        $interview_location = sanitize_text_field( $_POST['w-interview-location'] );
        $optional_transcription = esc_textarea( $_POST['w-optional-transcription'] );
        $optional_translations = esc_textarea( $_POST['w-optional-translations'] );
        $optional_message = esc_textarea( $_POST['w-optional-message'] );
        if(isset($_POST['publicity'])) {
            $publicity = "True";
        } else {
            $publicity = "False";
        }

        $boundary =md5(date('r', time()));

        $to = get_option( 'admin_email' );

        $subject = "New video";

        $headers = "From: $name <$email>" . "\r\n";

        $message = "Location: $location \r\nAre you the interviewee? $interviewee \r\nInterviewee Name: $interviewee_name \r\nInterviewee Language: $interviewee_language \r\nInterviewee Location: $interview_location \r\nInterview File: $interview_file \r\nOptional Transcription: $optional_transcription \r\nOptional Translations: $optional_translations \r\nOptional Message: $optional_message \r\nRelease Form: True \r\n\Publicity Clause: $publicity";

        /*$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

        $message="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"utf-8\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment

$attachment
--_1_$boundary--";*/

        // If email has been processed for sending, display a success message
        if ( wp_mail( $to, $subject, $message, $headers  ) ) {
            echo '<div>';
            echo '<p>Thanks for contacting me, expect a response soon.</p>';
            echo '</div>';
        } else {
            echo 'An unexpected error occurred';
        }
    }
}

function cf_shortcode() {
    ob_start();
    deliver_mail();
    html_form_code();

    return ob_get_clean();
}

add_shortcode( 'upload_form', 'cf_shortcode' );

?>