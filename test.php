<?php 
echo date('Y-m-d H:i', time());
echo '<br />'. time();

// require_once "wp-load.php";
// @ini_set( 'display_errors', 1 );
// error_reporting(-1);
// echo 'dfsdf';
// // echo mail('anzarsh@mail.ru', 'Subject', "message")?"the mail is sent":"the mail isn't sent";
// wp_mail('anzarsh@mail.ru', 'Subject', "message")?"the mail is sent":"the mail isn't sent";
// echo phpinfo();
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