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
            if ( qtrans_getLanguage() == 'en' ) {
                $ajax_response = array( 'success' => false, 'reason' => 'Image upload failed!' );
            } elseif ( qtrans_getLanguage() == 'ru' ) {
                $ajax_response = array( 'success' => false, 'reason' => 'Загрузка изображения провалилась!' );
            }
            
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
                if ( qtrans_getLanguage() == 'en' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('The Email you entered is not valid. Please try again.', 'houzez') ) );
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('Вы ввели не правильный email. Пожалуйста попробуйте еще раз.', 'houzez') ) );
                }
                
                wp_die();
            } else {
                $email_exists = email_exists( $useremail );
                if( $email_exists ) {
                    if( $email_exists != $userID ) {
                        if ( qtrans_getLanguage() == 'en' ) {
                            echo json_encode( array( 'success' => false, 'msg' => esc_html__('This Email is already used by another user. Please try a different one.', 'houzez') ) );
                        } elseif ( qtrans_getLanguage() == 'ru' ) {
                            echo json_encode( array( 'success' => false, 'msg' => esc_html__('Этот email уже используется другим пользователем. Пожалуйста попробуйте другой', 'houzez') ) );
                        }
                        
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
        if ( qtrans_getLanguage() == 'en' ) {
            echo json_encode( array( 'success' => true, 'msg' => esc_html__('Profile updated', 'houzez') ) );
        } elseif ( qtrans_getLanguage() == 'ru' ) {
            echo json_encode( array( 'success' => true, 'msg' => esc_html__('Профиль обновлен', 'houzez') ) );
        }
        
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
            if ( qtrans_getLanguage() == 'en' ) {
                echo json_encode( array( 'success' => false, 'msg' => esc_html__('New password or confirm password is blank', 'houzez') ) );
            } elseif ( qtrans_getLanguage() == 'ru' ) {
                echo json_encode( array( 'success' => false, 'msg' => esc_html__('Поле нового пароля или подтверждения пароля пусто', 'houzez') ) );
            }
            
            die();
        }
        if( $newpass != $confirmpass ) {
            if ( qtrans_getLanguage() == 'en' ) {
                echo json_encode( array( 'success' => false, 'msg' => esc_html__('Passwords do not match', 'houzez') ) );
            } elseif ( qtrans_getLanguage() == 'ru' ) {
                echo json_encode( array( 'success' => false, 'msg' => esc_html__('Пароли не совпадают', 'houzez') ) );
            }
            
            die();
        }

        check_ajax_referer( 'houzez_pass_ajax_nonce', 'houzez-security-pass' );

        $user = get_user_by( 'id', $userID );
        if( $user && wp_check_password( $oldpass, $user->data->user_pass, $userID ) ) {
            wp_set_password( $newpass, $userID );
            if ( qtrans_getLanguage() == 'en' ) {
                echo json_encode( array( 'success' => true, 'msg' => esc_html__('Password Updated', 'houzez') ) );
            } elseif ( qtrans_getLanguage() == 'ru' ) {
                echo json_encode( array( 'success' => true, 'msg' => esc_html__('Пароль обновлен', 'houzez') ) );
            }
            
        } else {
            if ( qtrans_getLanguage() == 'en' ) {
                echo json_encode( array( 'success' => false, 'msg' => esc_html__('Old password is not correct', 'houzez') ) );
            } elseif ( qtrans_getLanguage() == 'ru' ) {
                echo json_encode( array( 'success' => false, 'msg' => esc_html__('Вы ввели не правильный пароль', 'houzez') ) );
            }
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

        if ( qtrans_getLanguage() == 'en' ) {
            echo json_encode( array( 'success' => true, 'msg' => esc_html__('success', 'houzez') ) );
        } elseif ( qtrans_getLanguage() == 'ru' ) {
            echo json_encode( array( 'success' => true, 'msg' => esc_html__('аккаунт удален', 'houzez') ) );
        }
        
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
                if(wp_mail(get_option('admin_email'), $subject, $msg, $headers)) {
                    if ( qtrans_getLanguage() == 'en' ) {
                        echo json_encode(array(
                            'success' => true,
                            'msg' => esc_html__( 'Your request is sent!', 'houzez')
                        ));
                    } elseif ( qtrans_getLanguage() == 'ru' ) {
                        echo json_encode(array(
                            'success' => true,
                            'msg' => esc_html__( 'Ваш запрос отправлен!', 'houzez')
                        ));
                    }
                } else {
                    if ( qtrans_getLanguage() == 'en' ) {
                        echo json_encode(array(
                            'success' => true,
                            'msg' => esc_html__( 'Your request isn\'t sent!', 'houzez')
                        ));
                    } elseif ( qtrans_getLanguage() == 'ru' ) {
                        echo json_encode(array(
                            'success' => true,
                            'msg' => esc_html__( 'Ваш запрос не отправлен!', 'houzez')
                        ));
                    }
                }
                
                wp_die();
            } elseif($userID == $postId && $userLogin == $postName){
                if( empty( $az_phone ) ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('The phone field is empty.', 'houzez') ) );
                    wp_die();
                }
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
                if(wp_mail(get_option('admin_email'), $subject, $msg, $headers)) {
                    if ( qtrans_getLanguage() == 'en' ) {
                        echo json_encode(array(
                            'success' => true,
                            'msg' => esc_html__( 'Your request is sent!', 'houzez')
                        ));
                    } elseif ( qtrans_getLanguage() == 'ru' ) {
                        echo json_encode(array(
                            'success' => true,
                            'msg' => esc_html__( 'Ваш запрос отправлен!', 'houzez')
                        ));
                    }
                } else {
                    if ( qtrans_getLanguage() == 'en' ) {
                        echo json_encode(array(
                            'success' => true,
                            'msg' => esc_html__( 'Your request isn\'t sent!', 'houzez')
                        ));
                    } elseif ( qtrans_getLanguage() == 'ru' ) {
                        echo json_encode(array(
                            'success' => true,
                            'msg' => esc_html__( 'Ваш запрос не отправлен!', 'houzez')
                        ));
                    }
                }
                update_user_meta($userID, 'fave_author_phone', $az_phone);
                wp_die();
            }
        } else {
            if( empty( $az_name ) ) {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('The name field is empty.', 'houzez') ) );
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('Введите имя.', 'houzez') ) );
                }
                
                wp_die();
            }
            // if( empty( $az_email ) ) {
            //     echo json_encode( array( 'success' => false, 'msg' => esc_html__('The email field is empty.', 'houzez') ) );
            //     wp_die();
            // }
            if( empty( $az_phone ) ) {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('The phone field is empty.', 'houzez') ) );
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('Введите телефон.', 'houzez') ) );
                }
                wp_die();
            }
            // if( username_exists( $usermane ) ) {
            
            // if( !is_email( $az_email ) ) {
            //     echo json_encode( array( 'success' => false, 'msg' => esc_html__('Invalid email address.', 'houzez') ) );
            //     wp_die();
            // }
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
            if(wp_mail(get_option('admin_email'), $subject, $msg, $headers)) {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo json_encode(array(
                        'success' => true,
                        'msg' => esc_html__( 'Your request is sent!', 'houzez')
                    ));
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo json_encode(array(
                        'success' => true,
                        'msg' => esc_html__( 'Ваш запрос отправлен!', 'houzez')
                    ));
                }
            } else {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo json_encode(array(
                        'success' => true,
                        'msg' => esc_html__( 'Your request isn\'t sent!', 'houzez')
                    ));
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo json_encode(array(
                        'success' => true,
                        'msg' => esc_html__( 'Ваш запрос не отправлен!', 'houzez')
                    ));
                }
            }
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

add_action( 'wp_ajax_nopriv_az_request_form', 'az_request_form' );
add_action( 'wp_ajax_az_request_form', 'az_request_form' );
if( !function_exists('az_request_form') ) {
    function az_request_form() {
        //$_POST['send_property'][0]['prop_id']
        //$_POST['send_data'][0]['name']
        //$_POST['send_data'][0]['value']
        // check_ajax_referer('az_request_form_nonce', 'az_request_form_security');


        $send_data = $_POST['send_data'];
        $send_property = $_POST['send_property'];
        // $str = '';
        for($az_i = 0; $az_i < count($send_data); $az_i++){
            // $str.= $send_data[$az_i]['name'].'//';
            if($send_data[$az_i]['name'] == 'az-name'){$az_name = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-email'){$az_email = trim( sanitize_text_field( wp_kses( $send_data[$az_i]['value'], $allowed_html ) ));}
            elseif($send_data[$az_i]['name'] == 'az-reg'){$az_reg = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-phone'){$az_phone = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-best-time'){$az_best_time = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'daterange'){$daterange = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-call-me'){$az_call_me = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-b-ticket'){$az_b_ticket = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-choose-ticket'){$az_choose_ticket = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-prefer'){$az_prefer = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-male'){$az_male = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-child'){$az_child = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-message'){$az_message = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az_request_form_security'){$az_request_form_security = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-page-id'){$az_page_id = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-page-name'){$az_page_name = $send_data[$az_i]['value'];}
            elseif($send_data[$az_i]['name'] == 'az-page-url'){$az_page_url = $send_data[$az_i]['value'];}
        }
        if(wp_verify_nonce($az_request_form_security, 'az_request_form_nonce')){
            // echo json_encode($az_request_form_security);
            // echo json_encode($str);
            // echo json_encode($str); 
            // echo 1111;//$str;
            // echo $str;
            // echo json_encode($az_name);
            // $az_name = $_POST['az-name'];
            // $az_email = trim( sanitize_text_field( wp_kses( $_POST['az-email'], $allowed_html ) ));
            // $az_reg = $_POST['az-reg'];
            // $az_phone = $_POST['az-phone'];
            // $az_best_time = $_POST['az-best-time'];
            // $daterange = $_POST['daterange'];
            // $az_call_me = $_POST['az-call-me'];
            // $az_b_ticket = $_POST['az-b-ticket'];
            // $az_choose_ticket = $_POST['az-choose-ticket'];
            // $az_prefer = $_POST['az-prefer'];
            // $az_male = $_POST['az-male'];
            // $az_child = $_POST['az-child'];
            // $az_message = $_POST['az-message'];
            if( empty( $az_name ) ) {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('The name field is empty.', 'houzez') ) );
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('Введите ваше имя.', 'houzez') ) );
                }
                
                wp_die();
            }
            if( empty( $az_email ) ) {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('The email field is empty.', 'houzez') ) );
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('Введите ваш email.', 'houzez') ) );
                }
                wp_die();
            }
            if( empty( $az_phone ) ) {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('The phone field is empty.', 'houzez') ) );
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('Введите ваш телефон.', 'houzez') ) );
                }
                wp_die();
            }
            // if( username_exists( $usermane ) ) {
            
            if( !is_email( $az_email ) ) {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('Invalid email address.', 'houzez') ) );
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo json_encode( array( 'success' => false, 'msg' => esc_html__('Не правильный адрес email.', 'houzez') ) );
                }
                wp_die();
            }

            $subject  = "Новое сообщение";
            $headers  = "From: " . "StarAsiaPhuket" . "\r\n";
            $headers .= "Reply-To: ". strip_tags($az_email) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
            $msg  = "<html><body>";
            $msg .= "<h2>Новое сообщение</h2>\r\n";
            $msg .= "<p><strong>Заявка:</strong> форма запроса от ".$az_name."</p>\r\n";
            if($az_page_name){$msg .= "<p><strong>Со страницы:</strong> <a data-page-id='{$az_page_id}' href='{$az_page_url}'>".$az_page_name."</a></p>\r\n";}
            if($postPhone!=0){$msg .= "<p><strong>Телефон:</strong> ".$az_phone."</p>\r\n";}
            if($userEmail!==""){$msg .= "<p><strong>Email:</strong> ".$az_email."</p>\r\n";}
            if($az_best_time!==""){$msg .= "<p><strong>Удобное время для связи:</strong> ".$az_best_time."</p>\r\n";}
            if($daterange!==""){$msg .= "<p><strong>Дата приезда/отъезда:</strong> ".$daterange."</p>\r\n";}
            if($az_call_me!==""){$msg .= "<p><strong>Позвоните мне, я расскажу детали:</strong> ".$az_call_me."</p>\r\n";}
                                $msg .= '<p><strong>Вы уже приобрели билеты?:</strong> '.($az_b_ticket?'да':'нет')."</p>\r\n";
                                $msg .= '<p><strong>Подобрать Вам билеты?:</strong> '.($az_b_ticket?'нет':($az_choose_ticket?'да':'нет'))."</p>\r\n";
            if($az_prefer!==""){$msg .= "<p><strong>Предпочтения по району и типу жилья:</strong> ".$az_prefer."</p>\r\n";}
            if($az_male!==""){$msg .= "<p><strong>Количество взрослых:</strong> ".$az_male."</p>\r\n";}
            if($az_child!==""){$msg .= "<p><strong>Количетсво детей:</strong> ".$az_child."</p>\r\n";}
            if($az_message!==""){$msg .= "<p><strong>Прочие комментарии:</strong> ".$az_message."</p>\r\n";}
            if(!empty($send_property)){
                $msg .= "<p><strong>Объекты на странице:</strong></p>\r\n";
                for($az_i = 0; $az_i < count($send_property); $az_i++){
                    $msg .= "<p><a data-id='".$send_property[$az_i]['prop_id']."' href='".$send_property[$az_i]['url']."'>".$send_property[$az_i]['name']."</a></p>\r\n";
                }
            }
            $msg .= "</body></html>";

            // отправка сообщения
            if(wp_mail(get_option('admin_email'), $subject, $msg, $headers)) {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo json_encode(array(
                        'success' => true,
                        'msg' => esc_html__( 'Your request is sent!', 'houzez')
                    ));
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo json_encode(array(
                        'success' => true,
                        'msg' => esc_html__( 'Ваш запрос отправлен!', 'houzez')
                    ));
                }
            } else {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo json_encode(array(
                        'success' => true,
                        'msg' => esc_html__( 'Your request isn\'t sent!', 'houzez')
                    ));
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo json_encode(array(
                        'success' => true,
                        'msg' => esc_html__( 'Ваш запрос не отправлен!', 'houzez')
                    ));
                }
                exit;
            }


            if($az_reg == 'on'){
                if( username_exists( $az_email ) ) {
                    if ( qtrans_getLanguage() == 'en' ) {
                        echo json_encode( array( 'success' => false, 'msg' => esc_html__('This email address is already registered.', 'houzez') ) );
                    } elseif ( qtrans_getLanguage() == 'ru' ) {
                        echo json_encode( array( 'success' => false, 'msg' => esc_html__('Введенный email уже зарегистрирован.', 'houzez') ) );
                    }
                    
                    wp_die();
                }
                if( email_exists( $az_email ) ) {
                    if ( qtrans_getLanguage() == 'en' ) {
                        echo json_encode( array( 'success' => false, 'msg' => esc_html__('This email address is already registered.', 'houzez') ) );
                    } elseif ( qtrans_getLanguage() == 'ru' ) {
                        echo json_encode( array( 'success' => false, 'msg' => esc_html__('Введенный email уже зарегистрирован.', 'houzez') ) );
                    }
                    wp_die();
                }
                $user_password = wp_generate_password( $length=12, $include_standard_special_chars=false );
            
                $user_id = wp_create_user( $az_email, $user_password, $az_email );
                // $user_id = wp_create_user( $usermane, $user_password, $email );

                if ( is_wp_error($user_id) ) {
                    echo json_encode( array( 'success' => false, 'msg' => $user_id ) );
                    wp_die();
                } else {
                    if ( qtrans_getLanguage() == 'en' ) {
                        echo json_encode( array( 'success' => true, 'msg' => esc_html__('Your request is sent! An email with the generated password was sent!', 'houzez') ) );
                    } elseif ( qtrans_getLanguage() == 'ru' ) {
                        echo json_encode( array( 'success' => true, 'msg' => esc_html__('Ваш запрос отправлен! Сгенерированный пароль отправлен на email', 'houzez') ) );
                    }
                    
                    houzez_update_profile( $user_id );
                    houzez_wp_new_user_notification( $user_id, $user_password );
                    $user_as_agent = houzez_option('user_as_agent');
                }
            } else {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo json_encode(array(
                        'success' => true,
                        'msg' => esc_html__( 'Your request is sent!', 'houzez')
                    ));
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo json_encode(array(
                        'success' => true,
                        'msg' => esc_html__( 'Ваш запрос отправлен!', 'houzez')
                    ));
                }
                            
            }
        }
        wp_die();
    }
}




        // $allowed_html = array();

        // // $usermane          = trim( sanitize_text_field( wp_kses( $_POST['username'], $allowed_html ) ));
        // $email             = trim( sanitize_text_field( wp_kses( $_POST['useremail'], $allowed_html ) ));
        // $term_condition    = wp_kses( $_POST['term_condition'], $allowed_html );
        // $enable_password = houzez_option('enable_password');

        // $term_condition = ( $term_condition == 'on') ? true : false;

        // if( !$term_condition ) {
        //     echo json_encode( array( 'success' => false, 'msg' => esc_html__('You need to agree with terms & conditions.', 'houzez') ) );
        //     wp_die();
        // }

        // // if( empty( $usermane ) ) {
        // //     echo json_encode( array( 'success' => false, 'msg' => esc_html__(' The username field is empty.', 'houzez') ) );
        // //     wp_die();
        // // }
        // // if (preg_match("/^[0-9A-Za-z_]+$/", $usermane) == 0) {
        // //     echo json_encode( array( 'success' => false, 'msg' => esc_html__('Invalid username (do not use special characters or spaces)!', 'houzez') ) );
        // //     wp_die();
        // // }
        // if( empty( $email ) ) {
        //     echo json_encode( array( 'success' => false, 'msg' => esc_html__('The email field is empty.', 'houzez') ) );
        //     wp_die();
        // }
        // // if( username_exists( $usermane ) ) {
        // if( username_exists( $email ) ) {
        //     echo json_encode( array( 'success' => false, 'msg' => esc_html__('This username is already registered.', 'houzez') ) );
        //     wp_die();
        // }
        // if( email_exists( $email ) ) {
        //     echo json_encode( array( 'success' => false, 'msg' => esc_html__('This email address is already registered.', 'houzez') ) );
        //     wp_die();
        // }

        // if( !is_email( $email ) ) {
        //     echo json_encode( array( 'success' => false, 'msg' => esc_html__('Invalid email address.', 'houzez') ) );
        //     wp_die();
        // }

        // if( $enable_password == 'yes' ){
        //     $user_pass         = trim( sanitize_text_field(wp_kses( $_POST['register_pass'] ,$allowed_html) ) );
        //     $user_pass_retype  = trim( sanitize_text_field(wp_kses( $_POST['register_pass_retype'] ,$allowed_html) ) );

        //     if ($user_pass == '' || $user_pass_retype == '' ) {
        //         echo json_encode( array( 'success' => false, 'msg' => esc_html__('One of the password field is empty!', 'houzez') ) );
        //         wp_die();
        //     }

        //     if ($user_pass !== $user_pass_retype ){
        //         echo json_encode( array( 'success' => false, 'msg' => esc_html__('Passwords do not match', 'houzez') ) );
        //         wp_die();
        //     }
        // }

        // if($enable_password == 'yes' ) {
        //     $user_password = $user_pass;
        // } else {
        //     $user_password = wp_generate_password( $length=12, $include_standard_special_chars=false );
        // }
        // $user_id = wp_create_user( $email, $user_password, $email );
        // // $user_id = wp_create_user( $usermane, $user_password, $email );

        // if ( is_wp_error($user_id) ) {
        //     echo json_encode( array( 'success' => false, 'msg' => $user_id ) );
        //     wp_die();
        // } else {

        //     if( $enable_password =='yes' ) {
        //         echo json_encode( array( 'success' => true, 'msg' => esc_html__('Your account was created and you can login now!', 'houzez') ) );
        //     } else {
        //         echo json_encode( array( 'success' => true, 'msg' => esc_html__('An email with the generated password was sent!', 'houzez') ) );
        //     }

        //     houzez_update_profile( $user_id );
        //     houzez_wp_new_user_notification( $user_id, $user_password );
        //     $user_as_agent = houzez_option('user_as_agent');
            
        //     if( $user_as_agent == 'yes' ) {
        //         houzez_register_as_agent ( $email, $email, $user_id );
        //         // houzez_register_as_agent ( $usermane, $email, $user_id );
        //     }
        // }
        // wp_die();