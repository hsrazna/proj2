<?php 
require_once "wp-load.php";
echo mail('anzarsh@mail.ru', 'Subject', "message")?"the mail is sent":"the mail isn't sent";
// try {
//     $sent = @wp_mail( $to, $subject, $message );
// } catch (Exception $e) {
//     error_log('oops: ' . $e->getMessage()); // this line is for testing only!
// }

// if ( $sent ) {
//     error_log('hooray! email sent!'); // so is this one
// } else {
//     error_log('oh. email not sent.'); // and this one, too
// }