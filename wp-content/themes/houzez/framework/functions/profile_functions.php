<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 03/10/15
 * Time: 7:57 PM
 */

/*-----------------------------------------------------------------------------------*/
/*	 Ajax image upload for user profile page
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'houzez_profile_image_upload' ) ) {
    function houzez_profile_image_upload( ) {

        // Verify Nonce
        $nonce = $_REQUEST['nonce'];
        if ( ! wp_verify_nonce( $nonce, 'favethemes_allow_upload' ) ) {
            $ajax_response = array( 'success' => false , 'reason' => 'Security check failed!' );
            echo json_encode( $ajax_response );
            die;
        }

        $submitted_file = $_FILES['favethemes_upload_file'];
        $uploaded_image = wp_handle_upload( $submitted_file, array( 'test_form' => false ) );   //Handle PHP uploads in WordPress, sanitizing file names, checking extensions for mime type, and moving the file to the appropriate directory within the uploads directory.

        if ( isset( $uploaded_image['file'] ) ) {
            $file_name          =   basename( $submitted_file['name'] );
            $file_type          =   wp_check_filetype( $uploaded_image['file'] );   //Retrieve the file type from the file name.

            // Prepare an array of post data for the attachment.
            $attachment_details = array(
                'guid'           => $uploaded_image['url'],
                'post_mime_type' => $file_type['type'],
                'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $file_name ) ),
                'post_content'   => '',
                'post_status'    => 'inherit'
            );

            $attach_id      =   wp_insert_attachment( $attachment_details, $uploaded_image['file'] );       // This function inserts an attachment into the media library
            $attach_data    =   wp_generate_attachment_metadata( $attach_id, $uploaded_image['file'] );     // This function generates metadata for an image attachment. It also creates a thumbnail and other intermediate sizes of the image attachment based on the sizes defined
            wp_update_attachment_metadata( $attach_id, $attach_data );                                      // Update metadata for an attachment.

            $thumbnail_url = houzez_get_profile_image_url( $attach_data );

            $ajax_response = array(
                'success'   => true,
                'url' => $thumbnail_url,
                'attachment_id'    => $attach_id
            );

            echo json_encode( $ajax_response );
            die;

        } else {
            $ajax_response = array( 'success' => false, 'reason' => 'Image upload failed!' );
            echo json_encode( $ajax_response );
            die;
        }

    }
}
add_action( 'wp_ajax_houzez_profile_image_upload', 'houzez_profile_image_upload' );    // only for logged in user

/* ------------------------------------------------------------------------------
* Ajax Update Profile function
/------------------------------------------------------------------------------ */
add_action( 'wp_ajax_nopriv_houzez_ajax_update_profile', 'houzez_ajax_update_profile' );
add_action( 'wp_ajax_houzez_ajax_update_profile', 'houzez_ajax_update_profile' );

if( !function_exists('houzez_ajax_update_profile') ):

    function houzez_ajax_update_profile(){
        global $current_user;
        wp_get_current_user();
        $userID  = $current_user->ID;
        check_ajax_referer( 'houzez_profile_ajax_nonce', 'houzez-security-profile' );

        $firstname = $lastname = $title = $about = $userphone = $usermobile = $userskype = $facebook = $twitter = $linkedin = $instagram = $pinterest = $profile_pic = $profile_pic_id = $website = $useremail = '';

        // Update first name
        if ( !empty( $_POST['firstname'] ) ) {
            $firstname = sanitize_text_field( $_POST['firstname'] );
            update_user_meta( $userID, 'first_name', $firstname );
        } else {
            delete_user_meta( $userID, 'first_name' );
        }

        // Update last name
        if ( !empty( $_POST['lastname'] ) ) {
            $lastname = sanitize_text_field( $_POST['lastname'] );
            update_user_meta( $userID, 'last_name', $lastname );
        } else {
            delete_user_meta( $userID, 'last_name' );
        }

        // Update Title
        if ( !empty( $_POST['title'] ) ) {
            $title = sanitize_text_field( $_POST['title'] );
            update_user_meta( $userID, 'fave_author_title', $title );
        } else {
            delete_user_meta( $userID, 'fave_author_title' );
        }

        // Update About
        if ( !empty( $_POST['about'] ) ) {
            $about = sanitize_text_field( $_POST['about'] );
            update_user_meta( $userID, 'description', $about );
        } else {
            delete_user_meta( $userID, 'description' );
        }

        // Update Phone
        if ( !empty( $_POST['userphone'] ) ) {
            $userphone = sanitize_text_field( $_POST['userphone'] );
            update_user_meta( $userID, 'fave_author_phone', $userphone );
        } else {
            delete_user_meta( $userID, 'fave_author_phone' );
        }

        // Update Mobile
        if ( !empty( $_POST['usermobile'] ) ) {
            $usermobile = sanitize_text_field( $_POST['usermobile'] );
            update_user_meta( $userID, 'fave_author_mobile', $usermobile );
        } else {
            delete_user_meta( $userID, 'fave_author_mobile' );
        }

        // Update Skype
        if ( !empty( $_POST['userskype'] ) ) {
            $userskype = sanitize_text_field( $_POST['userskype'] );
            update_user_meta( $userID, 'fave_author_skype', $userskype );
        } else {
            delete_user_meta( $userID, 'fave_author_skype' );
        }

        // Update facebook
        if ( !empty( $_POST['facebook'] ) ) {
            $facebook = sanitize_text_field( $_POST['facebook'] );
            update_user_meta( $userID, 'fave_author_facebook', $facebook );
        } else {
            delete_user_meta( $userID, 'fave_author_facebook' );
        }

        // Update twitter
        if ( !empty( $_POST['twitter'] ) ) {
            $twitter = sanitize_text_field( $_POST['twitter'] );
            update_user_meta( $userID, 'fave_author_twitter', $twitter );
        } else {
            delete_user_meta( $userID, 'fave_author_twitter' );
        }

        // Update linkedin
        if ( !empty( $_POST['linkedin'] ) ) {
            $linkedin = sanitize_text_field( $_POST['linkedin'] );
            update_user_meta( $userID, 'fave_author_linkedin', $linkedin );
        } else {
            delete_user_meta( $userID, 'fave_author_linkedin' );
        }

        // Update instagram
        if ( !empty( $_POST['instagram'] ) ) {
            $instagram = sanitize_text_field( $_POST['instagram'] );
            update_user_meta( $userID, 'fave_author_instagram', $instagram );
        } else {
            delete_user_meta( $userID, 'fave_author_instagram' );
        }

        // Update pinterest
        if ( !empty( $_POST['pinterest'] ) ) {
            $pinterest = sanitize_text_field( $_POST['pinterest'] );
            update_user_meta( $userID, 'fave_author_pinterest', $pinterest );
        } else {
            delete_user_meta( $userID, 'fave_author_pinterest' );
        }

        // Update youtube
        if ( !empty( $_POST['youtube'] ) ) {
            $youtube = sanitize_text_field( $_POST['youtube'] );
            update_user_meta( $userID, 'fave_author_youtube', $youtube );
        } else {
            delete_user_meta( $userID, 'fave_author_youtube' );
        }

        // Update vimeo
        if ( !empty( $_POST['vimeo'] ) ) {
            $vimeo = sanitize_text_field( $_POST['vimeo'] );
            update_user_meta( $userID, 'fave_author_vimeo', $vimeo );
        } else {
            delete_user_meta( $userID, 'fave_author_vimeo' );
        }

        // Update Googleplus
        if ( !empty( $_POST['googleplus'] ) ) {
            $googleplus = sanitize_text_field( $_POST['googleplus'] );
            update_user_meta( $userID, 'fave_author_googleplus', $googleplus );
        } else {
            delete_user_meta( $userID, 'fave_author_googleplus' );
        }

        // Update Profile Picture
        if ( !empty( $_POST['profile_pic'] ) ) {
            $profile_pic_id = sanitize_text_field( $_POST['profile_pic'] );
            $profile_pic = wp_get_attachment_url( $profile_pic_id );
            update_user_meta( $userID, 'fave_author_custom_picture', $profile_pic );
            update_user_meta( $userID, 'fave_author_picture_id', $profile_pic_id );
        } else {
            delete_user_meta( $userID, 'fave_author_custom_picture' );
            delete_user_meta( $userID, 'fave_author_picture_id' );
        }

        // Update website
        if ( !empty( $_POST['website'] ) ) {
            $website = sanitize_text_field( $_POST['website'] );
            wp_update_user( array( 'ID' => $userID, 'user_url' => $website ) );
        } else {
            $website = '';
            wp_update_user( array( 'ID' => $userID, 'user_url' => $website ) );
        }

        // Update email
        if( !empty( $_POST['useremail'] ) ) {
            $useremail = sanitize_email( $_POST['useremail'] );
            $useremail = is_email( $useremail );
            if( !$useremail ) {
                echo json_encode( array( 'success' => false, 'msg' => esc_html__('The Email you entered is not valid. Please try again.', 'houzez') ) );
                wp_die();
            } else {
                $email_exists = email_exists( $useremail );
                if( $email_exists ) {
                    if( $email_exists != $userID ) {
                        echo json_encode( array( 'success' => false, 'msg' => esc_html__('This Email is already used by another user. Please try a different one.', 'houzez') ) );
                        wp_die();
                    }
                } else {
                    $return = wp_update_user( array ('ID' => $userID, 'user_email' => $useremail ) );
                    if ( is_wp_error( $return ) ) {
                        $error = $return->get_error_message();
                        echo esc_attr( $error );
                        wp_die();
                    }
                }

                $agent_id = get_user_meta( $userID, 'fave_author_agent_id', true );
                $user_as_agent = houzez_option('user_as_agent');
                if( $user_as_agent == 'yes' ) {
                    houzez_update_user_agent ( $agent_id, $firstname, $lastname, $title, $about, $userphone, $usermobile, $userskype, $facebook, $twitter, $linkedin, $instagram, $pinterest, $youtube, $vimeo, $googleplus, $profile_pic, $profile_pic_id, $website, $useremail ) ;
                }
            }
        }
        echo json_encode( array( 'success' => true, 'msg' => esc_html__('Profile updated', 'houzez') ) );
        die();
    }
endif; // end   houzez_ajax_update_profile

/* ------------------------------------------------------------------------------
* Update agent user
/------------------------------------------------------------------------------ */
if( !function_exists('houzez_update_user_agent') ) {
    function houzez_update_user_agent ( $agent_id, $firstname, $lastname, $title, $about, $userphone, $usermobile, $userskype, $facebook, $twitter, $linkedin, $instagram, $pinterest, $youtube, $vimeo, $googleplus, $profile_pic, $profile_pic_id, $website, $useremail ) {

        if( !empty( $firstname ) || !empty( $lastname ) ) {
            $agr = array(
                'ID' => $agent_id,
                'post_title' => $firstname.' '.$lastname,
                'post_content' => $about
            );
            $post_id = wp_update_post($agr);
        }

        update_post_meta( $agent_id, 'fave_agent_facebook', $facebook );
        update_post_meta( $agent_id, 'fave_agent_linkedin', $linkedin );
        update_post_meta( $agent_id, 'fave_agent_twitter', $twitter );
        update_post_meta( $agent_id, 'fave_agent_pinterest', $pinterest );
        update_post_meta( $agent_id, 'fave_agent_instagram', $instagram );
        update_post_meta( $agent_id, 'fave_agent_youtube', $youtube );
        update_post_meta( $agent_id, 'fave_agent_vimeo', $vimeo );
        update_post_meta( $agent_id, 'fave_agent_website', $website );
        update_post_meta( $agent_id, 'fave_agent_googleplus', $googleplus );
        update_post_meta( $agent_id, 'fave_agent_office_num', $userphone );
        update_post_meta( $agent_id, 'fave_agent_mobile', $usermobile );
        update_post_meta( $agent_id, 'fave_agent_skype', $userskype );
        update_post_meta( $agent_id, 'fave_agent_position', $title );
        update_post_meta( $agent_id, 'fave_agent_des', $about );
        update_post_meta( $agent_id, 'fave_agent_email', $useremail );

        update_post_meta( $agent_id, '_thumbnail_id', $profile_pic_id );
    }
}

/* ------------------------------------------------------------------------------
* Ajax Reset Password function
/------------------------------------------------------------------------------ */
add_action( 'wp_ajax_nopriv_houzez_ajax_password_reset', 'houzez_ajax_password_reset' );
add_action( 'wp_ajax_houzez_ajax_password_reset', 'houzez_ajax_password_reset' );

if( !function_exists('houzez_ajax_password_reset') ):
    function houzez_ajax_password_reset () {
        global $current_user;
        wp_get_current_user();
        $userID         = $current_user->ID;
        $allowed_html   = array();

        $oldpass        = wp_kses( $_POST['oldpass'], $allowed_html );
        $newpass        = wp_kses( $_POST['newpass'], $allowed_html );
        $confirmpass    = wp_kses( $_POST['confirmpass'], $allowed_html );

        if( $newpass == '' || $confirmpass == '' ) {
            echo json_encode( array( 'success' => false, 'msg' => esc_html__('New password or confirm password is blank', 'houzez') ) );
            die();
        }
        if( $newpass != $confirmpass ) {
            echo json_encode( array( 'success' => false, 'msg' => esc_html__('Passwords do not match', 'houzez') ) );
            die();
        }

        check_ajax_referer( 'houzez_pass_ajax_nonce', 'houzez-security-pass' );

        $user = get_user_by( 'id', $userID );
        if( $user && wp_check_password( $oldpass, $user->data->user_pass, $userID ) ) {
            wp_set_password( $newpass, $userID );
            echo json_encode( array( 'success' => true, 'msg' => esc_html__('Password Updated', 'houzez') ) );
        } else {
            echo json_encode( array( 'success' => false, 'msg' => esc_html__('Old password is not correct', 'houzez') ) );
        }
        die();
    }
endif; // end houzez_ajax_password_reset

/*-----------------------------------------------------------------------------------*/
/*	 Get thumbnail url based on attachment data
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'houzez_get_profile_image_url' ) ) {
    function houzez_get_profile_image_url( $attach_data ) {
        $upload_dir         =   wp_upload_dir();
        $image_path_array   =   explode( '/', $attach_data['file'] );
        $image_path_array   =   array_slice( $image_path_array, 0, count( $image_path_array ) - 1 );
        $image_path         =   implode( '/', $image_path_array );
        $thumbnail_name     =   null;
        if ( isset( $attach_data['sizes']['agent-image'] ) ) {
            $thumbnail_name     =   $attach_data['sizes']['agent-image']['file'];
        } else {
            $thumbnail_name     =   $attach_data['sizes']['thumbnail']['file'];
        }
        return $upload_dir['baseurl'] . '/' . $image_path . '/' . $thumbnail_name ;
    }
}


/* ------------------------------------------------------------------------------
/  User Profile Link
/ ------------------------------------------------------------------------------ */
if( !function_exists('houzez_get_dashboard_profile_link') ):
    function houzez_get_dashboard_profile_link(){
        $pages = get_pages(array(
            'meta_key' => '_wp_page_template',
            'meta_value' => 'template/user_dashboard_profile.php'
        ));

        if( $pages ){
            $dash_link = get_permalink( $pages[0]->ID);
        }else{
            $dash_link=home_url();
        }

        return $dash_link;
    }
endif; // end   houzez_get_dashboard_profile_link

/* ------------------------------------------------------------------------------
/  Update User Profile on register
/ ------------------------------------------------------------------------------ */
if( !function_exists('houzez_update_profile') ):

    function houzez_update_profile( $userID ) {

    }
endif; // end houzez_update_profile


/* -----------------------------------------------------------------------------------------------------------
 *  Add user custom fields
 -------------------------------------------------------------------------------------------------------------*/
if ( ! function_exists( 'houzez_author_info' ) ) :

    function houzez_author_info( $contactmethods ) {

        $contactmethods['fave_author_title']          = esc_html__( 'Title/Position', 'houzez' );
        $contactmethods['fave_author_company']        = esc_html__( 'Company Name', 'houzez' );
        $contactmethods['fave_author_phone']          = esc_html__( 'Phone', 'houzez' );
        $contactmethods['fave_author_fax']            = esc_html__( 'Fax Number', 'houzez' );
        $contactmethods['fave_author_mobile']         = esc_html__( 'Mobile', 'houzez' );
        $contactmethods['fave_author_skype']          = esc_html__( 'Skype', 'houzez' );
        $contactmethods['fave_author_custom_picture'] = esc_html__( 'Picture Url', 'houzez' );
        $contactmethods['fave_author_agent_id']       = esc_html__( 'User Agent ID', 'houzez' );
        $contactmethods['package_id']                   = 'Package Id';
        $contactmethods['package_activation']           = 'Package Activation';
        $contactmethods['package_listings']             = 'Listings available';
        $contactmethods['package_featured_listings']    = 'Featured Listings available';
        $contactmethods['fave_paypal_profile']          = 'Paypal Recuring Profile';
        $contactmethods['fave_stripe_user_profile']     = 'Stripe Consumer Profile';
        $contactmethods['fave_author_facebook']       = esc_html__( 'Facebook', 'houzez' );
        $contactmethods['fave_author_linkedin']       = esc_html__( 'LinkedIn', 'houzez' );
        $contactmethods['fave_author_twitter']        = esc_html__( 'Twitter', 'houzez' );
        $contactmethods['fave_author_pinterest']      = esc_html__( 'Pinterest', 'houzez' );
        $contactmethods['fave_author_instagram']      = esc_html__( 'Instagram', 'houzez' );
        $contactmethods['fave_author_youtube']        = esc_html__( 'Youtube', 'houzez' );
        $contactmethods['fave_author_vimeo']        = esc_html__( 'Vimeo', 'houzez' );
        $contactmethods['fave_author_googleplus']     = esc_html__( 'Google Plus', 'houzez' );

        return $contactmethods;
    }
endif; // add_agent_contact_info
add_filter( 'user_contactmethods', 'houzez_author_info', 10, 1 );


/*-----------------------------------------------------------------------------------*/ /*  Houzez Delete Account
/*-----------------------------------------------------------------------------------*/
add_action( 'wp_ajax_nopriv_houzez_delete_account', 'houzez_delete_account' );
add_action( 'wp_ajax_houzez_delete_account', 'houzez_delete_account' );

if ( !function_exists( 'houzez_delete_account' ) ) :

    function houzez_delete_account() {

        $user_ID    = $_POST['user_id'];

        wp_delete_user( $user_ID );

        echo json_encode( array( 'success' => true, 'msg' => esc_html__('success', 'houzez') ) );
        wp_die();
    }

endif;

add_action( 'wp_ajax_nopriv_houzez_change_user_role', 'houzez_change_user_role' );
add_action( 'wp_ajax_houzez_change_user_role', 'houzez_change_user_role' );
if ( !function_exists( 'houzez_change_user_role' ) ) :
    function houzez_change_user_role()
    {
        $ajax_response = array();

        if (isset($_POST['role']) && isset($_POST['user_id'])) :

            $user_ID = $_POST['user_id'];
            $role = $_POST['role'];

            $user_id = wp_update_user(array('ID' => $user_ID, 'role' => $role));

            if (is_wp_error($user_id)) :

                $ajax_response = array('success' => false, 'reason' => 'Role not updated!');

            else :

                $ajax_response = array('success' => true, 'reason' => 'Role updated!');

            endif;

        else :

            $ajax_response = array('success' => false, 'reason' => 'Role not updated!');

        endif;

        echo json_encode($ajax_response);

        wp_die();
    }
endif;

add_filter( 'random_user_name', 'random_user_name', 10, 1 );

if( !function_exists('random_user_name') ) {
    function random_user_name($username)
    {

        $user_name = $username . rand(3, 5);

        if (username_exists($user_name)) :

            apply_filters( 'random_user_name', $username );

        else :

            return $user_name;

        endif;
    }
}

/* -----------------------------------------------------------------------------------------------------------
 *  Update profile
 -------------------------------------------------------------------------------------------------------------*/
add_action( 'profile_update', 'my_profile_update', 10, 2 );
function my_profile_update( $user_id, $old_user_data ) {
    $post_id = get_the_author_meta( 'fave_author_agent_id', $user_id );
    //echo $post_id.' '.$user_id; die;
    if( !empty( $post_id ) ) {
        update_post_meta($post_id, 'houzez_user_meta_id', $user_id);  // used when agent custom post type updated

    } else {

    }
}

/* -----------------------------------------------------------------------------------------------------------
 *  Forgot PassWord function
 -------------------------------------------------------------------------------------------------------------*/

$reset_password_link = houzez_get_template_link_2( 'template/reset_password.php' );

if ( !empty( $reset_password_link ) ) :

    add_action( 'login_form_rp', 'redirect_to_custom_password_reset' );
    add_action( 'login_form_resetpass', 'redirect_to_custom_password_reset' );

endif;

if ( !function_exists( 'redirect_to_custom_password_reset' ) ) :

    function redirect_to_custom_password_reset() {

        if ( 'GET' == $_SERVER['REQUEST_METHOD'] ) :

            $reset_password_link = houzez_get_template_link_2( 'template/reset_password.php' );

            // Verify key / login combo
            $user = check_password_reset_key( $_REQUEST['key'], $_REQUEST['login'] );

            if ( ! $user || is_wp_error( $user ) ) :

                if ( $user && $user->get_error_code() === 'expired_key' ) :

                    wp_redirect( home_url( $reset_password_link. '?login=expiredkey' ) );

                else :

                    wp_redirect( home_url( $reset_password_link. '?login=invalidkey' ) );

                endif;

                exit;

            endif;

            $redirect_url = home_url( 'reset-password' );
            $redirect_url = add_query_arg( 'login', esc_attr( $_REQUEST['login'] ), $redirect_url );
            $redirect_url = add_query_arg( 'key', esc_attr( $_REQUEST['key'] ), $redirect_url );

            wp_redirect( $redirect_url );

            exit;

        endif;

    }

endif;

add_action( 'wp_ajax_nopriv_houzez_reset_password_2', 'houzez_reset_password_2' );
add_action( 'wp_ajax_houzez_reset_password_2', 'houzez_reset_password_2' );

if( !function_exists('houzez_reset_password_2') ) {
    function houzez_reset_password_2() {
        $allowed_html   = array();

        $newpass        = wp_kses( $_POST['password'], $allowed_html );
        $confirmpass    = wp_kses( $_POST['confirm_pass'], $allowed_html );
        $rq_login   = wp_kses( $_POST['rq_login'], $allowed_html );
        $rp_key   = wp_kses( $_POST['rp_key'], $allowed_html );

        $user = check_password_reset_key( $rp_key, $rq_login );

        if ( ! $user || is_wp_error( $user ) ) {

            if ($user && $user->get_error_code() === 'expired_key') {
                echo json_encode(array('success' => false, 'msg' => esc_html__('Reset password Session key expired.', 'houzez')));
                die();
            } else {
                echo json_encode(array('success' => false, 'msg' => esc_html__('Invalid password reset Key', 'houzez')));
                die();
            }
        }

        if( $newpass == '' || $confirmpass == '' ) {
            echo json_encode( array( 'success' => false, 'msg' => esc_html__('New password or confirm password is blank', 'houzez') ) );
            die();
        }
        if( $newpass != $confirmpass ) {
            echo json_encode( array( 'success' => false, 'msg' => esc_html__('Passwords do not match', 'houzez') ) );
            die();
        }

        reset_password( $user, $newpass );
        echo json_encode( array( 'success' => true, 'msg' => esc_html__('Password reset successfully, you can login now.', 'houzez') ) );
        die();
    }
}

add_action( 'wp_ajax_nopriv_az_call_back', 'az_call_back' );
add_action( 'wp_ajax_az_call_back', 'az_call_back' );
if( !function_exists('az_call_back') ) {
    function az_call_back() {
        global $wpdb, $current_user;

        wp_get_current_user();
        $userID       =  $current_user->ID;
        $userEmail    =  $current_user->user_email;
        $userLogin    =  $current_user->user_login;
        $userPhone    =  get_user_meta( $userID, 'fave_author_phone', true );
        $userMobile   =  get_user_meta( $userID, 'fave_author_mobile', true );

        $postId = $_POST['user_id'];
        $postName = $_POST['user_name'];
        $postPhone = $_POST['user_phone'];
        $postMobile = $_POST['user_mobile'];
        $az_name = $_POST['az_name'];
        $az_phone = $_POST['az_phone'];

        if(is_user_logged_in()){
            if($userID == $postId && $userLogin == $postName && ($postPhone == 1 || $postMobile == 1)){
                $subject  = "Новое сообщение";
                $headers  = "From: " . "StarAsiaPhuket" . "\r\n";
                $headers .= "Reply-To: ". strip_tags($userEmail) . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
                $msg  = "<html><body>";
                $msg .= "<h2>Новое сообщение</h2>\r\n";
                $msg .= "<p><strong>Заявка:</strong> обратный звонок от ".$userLogin."</p>\r\n";
                if($postPhone!=0){$msg .= "<p><strong>Телефон:</strong> ".$userPhone."</p>\r\n";}
                if($postMobile!=0){$msg .= "<p><strong>Мобильный:</strong> ".$userMobile."</p>\r\n";}
                if($userEmail!==""){$msg .= "<p><strong>Email:</strong> ".$userEmail."</p>\r\n";}
                $msg .= "</body></html>";

                // отправка сообщения
                if(!@mail(get_option('admin_email'), $subject, $msg, $headers)) {
                    // echo "true";
                } else {
                    // echo "false";
                }
                echo json_encode(array(
                    'success' => true,
                    'msg' => esc_html__( 'Your request is sent!', 'houzez')
                ));
                wp_die();
            } elseif($userID == $postId && $userLogin == $postName && !empty($az_phone)){
                $subject  = "Новое сообщение";
                $headers  = "From: " . "StarAsiaPhuket" . "\r\n";
                $headers .= "Reply-To: ". strip_tags($userEmail) . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
                $msg  = "<html><body>";
                $msg .= "<h2>Новое сообщение</h2>\r\n";
                $msg .= "<p><strong>Заявка:</strong> обратный звонок от ".$userLogin."</p>\r\n";
                if($az_phone!=''){$msg .= "<p><strong>Телефон:</strong> ".$az_phone."</p>\r\n";}
                $msg .= "</body></html>";

                // отправка сообщения
                if(!@mail(get_option('admin_email'), $subject, $msg, $headers)) {
                    // echo "true";
                } else {
                    // echo "false";
                }
                update_user_meta($userID, 'fave_author_phone', $az_phone);
                echo json_encode(array(
                    'success' => true,
                    'msg' => esc_html__( 'Your request is sent!', 'houzez')
                ));
                wp_die();
            }
        } else {
            $subject  = "Новое сообщение";
            $headers  = "From: " . "StarAsiaPhuket" . "\r\n";
            $headers .= "Reply-To: ". "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
            $msg  = "<html><body>";
            $msg .= "<h2>Новое сообщение</h2>\r\n";
            if($az_phone!=''){$msg .= "<p><strong>Заявка:</strong> обратный звонок от ".$az_name."</p>\r\n";}
            if($az_phone!=''){$msg .= "<p><strong>Телефон:</strong> ".$az_phone."</p>\r\n";}
            $msg .= "</body></html>";

            // отправка сообщения
            if(!@mail(get_option('admin_email'), $subject, $msg, $headers)) {
                // echo "true";
            } else {
                // echo "false";
            }
            echo json_encode(array(
                'success' => true,
                'msg' => esc_html__( 'Your request is sent!', 'houzez')
            ));
            wp_die();
        }
    }
}


add_action( 'wp_ajax_nopriv_az_save_search_in_session', 'az_save_search_in_session' );
add_action( 'wp_ajax_az_save_search_in_session', 'az_save_search_in_session' );
if( !function_exists('az_save_search_in_session') ) {
    function az_save_search_in_session() {
        // session_start();
        // echo $_POST['name'];
        $az_name = $_POST['name'];
        $az_val = $_POST['val'];
        // print_r($_POST);
        
        $_SESSION[$az_name] = $az_val;
        // echo $_SESSION[$az_name];
        wp_die();
    }
}