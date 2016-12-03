<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 18/01/16
 * Time: 1:27 PM
 */
?>
<div class="modal fade" id="pop-login" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active"><?php esc_html_e( 'Login', 'houzez' ); ?></li>
                    <li><?php esc_html_e( 'Register', 'houzez' ); ?></li>

                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block">
                <?php get_template_part('template-parts/login-register'); ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pop-reset-pass" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active"><?php esc_html_e( 'Reset Password', 'houzez' ); ?></li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block">
                <p><?php esc_html_e( 'Please enter your username or email address. You will receive a link to create a new password via email.', 'houzez' ); ?></p>
                <div id="houzez_msg_reset" class="message"></div>
                <form>
                    <div class="form-group">
                        <div class="input-user input-icon">
                            <input name="user_login_forgot" id="user_login_forgot" placeholder="<?php esc_html_e( 'Enter your username or email', 'houzez' ); ?>" class="form-control">
                        </div>
                    </div>
                    <?php wp_nonce_field( 'fave_resetpassword_nonce', 'fave_resetpassword_security' ); ?>
                    <button type="button" id="houzez_forgetpass" class="btn btn-primary btn-block"><?php esc_html_e( 'Get new password', 'houzez' ); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /*ajax puller*/ -->
<!-- <div class="modal fade" id="az-call-back" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active"><?php //esc_html_e( 'Login', 'houzez' ); ?></li>
                    <li><?php //esc_html_e( 'Register', 'houzez' ); ?></li>

                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block">
                <form>
                <?php //if(is_user_logged_in()): ?>
                    <?php 
                        //global $current_user;
                        //wp_get_current_user();
                        //$userID = $current_user->ID;
                        //$az_phone = get_user_meta( $userID, 'fave_author_phone', true );
                        //$az_mobile = get_user_meta( $userID, 'fave_author_mobile', true );
                        // if(!isset($az_phone)){
                        //     echo '<input type="hidden" name="az_phone" value="'.$az_phone.'">';
                        // }
                        // if(!isset($az_mobile)){
                        //     echo '<input type="hidden" name="az_mobile" value="'.$az_mobile.'">';
                        // }
                        // if(!isset($az_phone)&&!isset($az_mobile)){
                    ?>
                    <div class="form-group field-group">
                        <div class="input-user input-icon">
                            <input id="" name="username" placeholder="<?php //esc_html_e('Your name','houzez'); ?>" type="text" />
                        </div>
                        <div class="input-pass input-icon">
                            <input id="" name="" placeholder="<?php //esc_html_e('Password','houzez'); ?>" type="password" />
                        </div>
                    </div>
                    <?php //} ?>
                <?php //else: ?>
                <?php //endif; ?>
                    <div class="form-group field-group">
                        <div class="input-user input-icon">
                            <input id="" name="username" placeholder="<?php //esc_html_e('Username','houzez'); ?>" type="text" />
                        </div>
                        <div class="input-pass input-icon">
                            <input id="" name="password" placeholder="<?php //esc_html_e('Password','houzez'); ?>" type="password" />
                        </div>
                    </div>
                    <div class="forget-block clearfix">
                        <div class="form-group pull-left">
                            <div class="checkbox">
                                <label>
                                    <input name="remember" id="remember" type="checkbox">
                                    <?php //esc_html_e( 'Remember me', 'houzez' ); ?>
                                </label>
                            </div>
                        </div>
                        <div class="form-group pull-right">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#pop-reset-pass"><?php //esc_html_e( 'Lost your password?', 'houzez' ); ?></a>
                        </div>
                    </div>

                    <?php //wp_nonce_field( 'houzez_login_nonce', 'houzez_login_security' ); ?>
                    <input type="hidden" name="action" id="login_action" value="houzez_login">
                    <button type="submit" class="fave-login-button btn btn-primary btn-block"><?php //esc_html_e('Login','houzez');?></button>
                </form>
            </div>
        </div>
    </div>
</div> -->
<!-- /*ajax puller*/ -->