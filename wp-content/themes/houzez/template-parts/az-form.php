<form id="az-request-form">
				<div class="col-sm-6 col-xs-12">
            <div class="form-group">
            <?php if ( qtrans_getLanguage() == 'en' ) {?>
                  <input class="form-control az-name" name="az-name"
             placeholder="<?php esc_html_e('Your Name', 'houzez'); ?>" type="text">
              <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                  <input class="form-control az-name" style="font-family: 'OpenSans-Regular';" name="az-name" placeholder="<?php esc_html_e('Имя', 'houzez'); ?>" type="text">
              <?php } ?>
                
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6 col-xs-12">
            <div class="form-group">
                <input class="form-control az-email" name="az-email" placeholder="<?php esc_html_e('Email', 'houzez'); ?>" type="text">
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group pull-left az-second">
                <div class="checkbox">
                    <label style="display: none;">
                        <input style="display: none;" name="az-reg" id="az-reg" type="checkbox" checked="checked">
                        <?php if ( qtrans_getLanguage() == 'en' ) {?>
                            <?php esc_html_e( 'Register', 'houzez' ); ?>
                        <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                            <?php esc_html_e( 'Зарегистрироваться', 'houzez' ); ?>
                        <?php } ?>
                    </label>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6 col-xs-12">
            <div class="form-group">
            <?php if ( qtrans_getLanguage() == 'en' ) {?>
                  <input class="form-control" name="az-phone" placeholder="<?php esc_html_e('Your phone', 'houzez'); ?>" type="text">
              <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                  <input class="form-control" style="font-family: 'OpenSans-Regular';" name="az-phone" placeholder="<?php esc_html_e('Телефон', 'houzez'); ?>" type="text">
              <?php } ?>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="form-group az-second">
            <?php if ( qtrans_getLanguage() == 'en' ) {?>
                  <input class="form-control" name="az-best-time" placeholder="<?php esc_html_e('Convenient time to call back', 'houzez'); ?>" type="text">
              <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                  <input class="form-control" style="font-family: 'OpenSans-Regular';" name="az-best-time" placeholder="<?php esc_html_e('Удобное время для связи', 'houzez'); ?>" type="text">
              <?php } ?>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group">
          	<input type="text" name="daterange" value="" id="as123"/>
        	</div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group az-second">
            <?php if ( qtrans_getLanguage() == 'en' ) {?>
                  <input class="form-control" name="az-call-me" placeholder="<?php esc_html_e('', 'houzez'); ?>" type="text">
              <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                  <input class="form-control" style="font-family: 'OpenSans-Regular';" name="az-phone" placeholder="<?php esc_html_e('Позвоните мне я расскажу детали', 'houzez'); ?>" type="text">
              <?php } ?>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group pull-left">
                <div class="checkbox">
                    <label>
                        <input name="az-b-ticket" id="az-b-ticket" type="checkbox">
                        <?php if ( qtrans_getLanguage() == 'en' ) {?>
                            <?php esc_html_e( 'Have you already bought tickets?', 'houzez' ); ?>
                        <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                            <?php esc_html_e( 'Вы уже приобрели билеты?', 'houzez' ); ?>
                        <?php } ?>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group pull-left az-second">
                <div class="checkbox">
                    <label>
                        <input name="az-choose-ticket" id="az-choose-ticket" type="checkbox">
                        <?php if ( qtrans_getLanguage() == 'en' ) {?>
                            <?php esc_html_e( 'Would you like us to help?', 'houzez' ); ?>
                        <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                            <?php esc_html_e( 'Подобрать билеты?', 'houzez' ); ?>
                        <?php } ?>
                    </label>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group">
            <?php if ( qtrans_getLanguage() == 'en' ) {?>
                  <input class="form-control" name="az-prefer" placeholder="<?php esc_html_e('', 'houzez'); ?>" type="text">
              <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                  <input class="form-control" style="font-family: 'OpenSans-Regular';" name="az-prefer" placeholder="<?php esc_html_e('Предпочтения по району и типу жилья', 'houzez'); ?>" type="text">
              <?php } ?>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="form-group az-rel az-inner-padding az-second2">
                <select class="selectpicker" name="az-male" data-live-search="false" data-live-search-style="begins">
                  <?php if ( qtrans_getLanguage() == 'en' ) {?>
                      <option value>Adult</option>
                  <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                      <option value>Взрослые</option>
                  <?php } ?>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <span class="az-abs"><i class="fa fa-male" aria-hidden="true"></i></span>
              </div>
          </div>
          <div class="col-sm-3 col-xs-6">
              <div class="form-group az-rel az-inner-padding az-second2">
                <select class="selectpicker" name="az-child" data-live-search="false" data-live-search-style="begins">
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                      <option value>Child</option>
                  <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                      <option value>Дети</option>
                  <?php } ?>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <span class="az-abs"><i class="fa fa-child"></i></span>
              </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-sm-12 col-xs-12">
              <div class="form-group">
                <?php if ( qtrans_getLanguage() == 'en' ) {?>
                    <textarea class="form-control" name="az-message" rows="5" placeholder="<?php esc_html_e('Message', 'houzez'); ?>"><?php esc_html_e("", "houzez"); ?></textarea>
                <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                    <textarea class="form-control az-text1" name="az-message" rows="5" placeholder="<?php esc_html_e('Прочие комментарии', 'houzez'); ?>"><?php esc_html_e("", "houzez"); ?></textarea>
                <?php } ?>
              </div>
          </div>

          <div class="col-sm-12 col-xs-12">
            <div class="form-group">
            	<?php wp_nonce_field( 'az_request_form_nonce', 'az_request_form_security' ); ?>
              <?php if ( qtrans_getLanguage() == 'en' ) {?>
                    <button class="btn btn-orange az-w-100"><?php esc_html_e('Request info', 'houzez'); ?></button>
                <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                    <button class="btn btn-orange az-w-100"><?php esc_html_e('Отправить запрос', 'houzez'); ?></button>
                <?php } ?>
            </div>
          </div>
      </form>