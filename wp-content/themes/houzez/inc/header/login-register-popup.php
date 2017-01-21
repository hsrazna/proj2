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
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <li class="active"><?php esc_html_e( 'Login', 'houzez' ); ?></li>
                        <li><?php esc_html_e( 'Register', 'houzez' ); ?></li>
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <li class="active"><?php esc_html_e( 'Вход', 'houzez' ); ?></li>
                        <li><?php esc_html_e( 'Регистрация', 'houzez' ); ?></li>
                    <?php } ?>

                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block class-for-register-msg">
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
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <li class="active"><?php esc_html_e( 'Reset Password', 'houzez' ); ?></li>
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <li class="active"><?php esc_html_e( 'Сброс пароля', 'houzez' ); ?></li>
                    <?php } ?>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block">
                <?php if ( qtrans_getLanguage() == 'en' ) {?>
                    <p><?php esc_html_e( 'Please enter your username or email address. You will receive a link to create a new password via email.', 'houzez' ); ?></p>
                <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                    <p><?php esc_html_e( 'Введите пожалуйста Ваш логин или адрес эл. почты. Вы получите ссылку для смены пароля по почте.', 'houzez' ); ?></p>
                <?php } ?>
                <div id="houzez_msg_reset" class="message"></div>
                <form>
                    <div class="form-group">
                        <div class="input-user input-icon">
                            <?php if ( qtrans_getLanguage() == 'en' ) {?>
                                <input name="user_login_forgot" id="user_login_forgot" placeholder="<?php esc_html_e( 'Enter your email', 'houzez' ); ?>" class="form-control">
                            <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                                <input name="user_login_forgot" id="user_login_forgot" placeholder="<?php esc_html_e( 'Введите Ваш адрес эл. почты', 'houzez' ); ?>" class="form-control">
                            <?php } ?>
                        </div>
                    </div>
                    <?php wp_nonce_field( 'fave_resetpassword_nonce', 'fave_resetpassword_security' ); ?>
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <button type="button" id="houzez_forgetpass" class="btn btn-primary btn-block"><?php esc_html_e( 'Get new password', 'houzez' ); ?></button>
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <button type="button" id="houzez_forgetpass" class="btn btn-primary btn-block"><?php esc_html_e( 'Получить новый пароль', 'houzez' ); ?></button>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /*ajax puller*/ -->
<div class="modal fade" id="az-call-back" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <li class="active"><?php esc_html_e( 'Call back', 'houzez' ); ?></li>
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <li class="active"><?php esc_html_e( 'Обратный звонок', 'houzez' ); ?></li>
                    <?php } ?>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block">
                <div id="az_msg_reset" class="message"></div>
                <form>
                <?php if(is_user_logged_in()): ?>

                    <?php 
                        global $current_user;
                        wp_get_current_user();
                        $userID = $current_user->ID;
                        $userLogin = $current_user->user_login;
                        $az_phone = get_user_meta( $userID, 'fave_author_phone', true );
                        $az_mobile = get_user_meta( $userID, 'fave_author_mobile', true );
                        if(!$az_phone&&!$az_mobile){
                    ?>
                            <div class="form-group field-group">
                                <div class="input-phone input-icon">
                                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                                        <input id="" name="az_phone" placeholder="<?php esc_html_e('Your phone','houzez'); ?>" type="text" />
                                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                                        <input id="" name="az_phone" placeholder="<?php esc_html_e('Ваш телефон','houzez'); ?>" type="text" />
                                    <?php } ?>
                                </div>
                            </div>
                    <?php 
                        }
                    ?>
                <?php else: ?>
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <div class="form-group field-group">
                            <div class="input-user input-icon">
                                <input id="" name="az_name" placeholder="<?php esc_html_e('Your name','houzez'); ?>" type="text" />
                            </div>
                            <div class="input-phone input-icon">
                                <input id="" name="az_phone" placeholder="<?php esc_html_e('Your Phone','houzez'); ?>" type="text" />
                            </div>
                        </div>
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <div class="form-group field-group">
                            <div class="input-user input-icon">
                                <input id="" name="az_name" placeholder="<?php esc_html_e('Ваше имя','houzez'); ?>" type="text" />
                            </div>
                            <div class="input-phone input-icon">
                                <input id="" name="az_phone" placeholder="<?php esc_html_e('Ваш телефон','houzez'); ?>" type="text" />
                            </div>
                        </div>
                    <?php } ?>
                <?php endif; ?>
                <?php if(is_user_logged_in()): ?>
                    <input type="hidden" name="user_id" value="<?=$userID?>">
                    <input type="hidden" name="user_name" value="<?=$userLogin?>">
                    <?php if(!$az_phone&&!$az_mobile): ?>
                        <?php if ( qtrans_getLanguage() == 'en' ) {?>
                            <button type="submit" class="fave-login-button btn btn-primary btn-block az-send"><?php esc_html_e('Request','houzez');?></button>
                        <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                            <button type="submit" class="fave-login-button btn btn-primary btn-block az-send"><?php esc_html_e('Запросить','houzez');?></button>
                        <?php } ?>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <button type="submit" class="fave-login-button btn btn-primary btn-block az-send"><?php esc_html_e('Request','houzez');?></button>
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <button type="submit" class="fave-login-button btn btn-primary btn-block az-send"><?php esc_html_e('Запросить','houzez');?></button>
                    <?php } ?>
                <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="az-pop-message" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <li class="active"><?php esc_html_e( 'Message', 'houzez' ); ?></li>
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <li class="active"><?php esc_html_e( 'Сообщение', 'houzez' ); ?></li>
                    <?php } ?>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block">
                <div id="az-pop-message-text" class="message"></div>
            </div>
        </div>
    </div>
</div>
<!-- /*ajax puller*/ -->