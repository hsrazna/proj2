<?php
global $post, $adv_search_which_header_show, $adv_search_over_header_pages, $adv_search_selected_pages;

if (is_plugin_active('revslider/revslider.php')) {
    $revslider_alias = get_post_meta($post->ID, 'fave_page_header_revslider', true);
    ?>
    <div class="header-media">
        <div class="page-banner-revolution-slider">
            <?php putRevSlider($revslider_alias) ?>
        </div>
        <?php
        if( $adv_search_which_header_show['header_rs'] != 0 ) {
            if( $adv_search_over_header_pages == 'only_home' ) {
                if (is_front_page()) {
                    get_template_part('template-parts/advanced-search/desktop', 'type2');
                }
            } else if( $adv_search_over_header_pages == 'all_pages' ) {
                get_template_part('template-parts/advanced-search/desktop', 'type2');

            } else if ( $adv_search_over_header_pages == 'only_innerpages' ){
                if (!is_front_page()) {
                    get_template_part('template-parts/advanced-search/desktop', 'type2');
                }
            } else if( $adv_search_over_header_pages == 'specific_pages' ) {
                if( is_page( $adv_search_selected_pages ) ) {
                    get_template_part('template-parts/advanced-search/desktop', 'type2');
                }
            }
        }
        ?>
    </div>
    
    <?php
} else {
    ?>

    <div class="header-media">
        <div class="page-banner-revolution-slider">
            <div class="az-slider" style="">
                <!-- <div id="custom-pag-place"></div> -->
                <?php if ( qtrans_getLanguage() == 'en' ) {?>
                <div id="az-slider" class="az-carousel owl-theme">
                    <div class="az-item az-item0">
                        <div class="az-img-box-preload">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/az/loader.gif" alt="">
                        </div>
                    </div>
                    <div class="az-item az-item1">
                        <div class="az-item1-wrap">
                            <div class="ls-mask2">
                                <form role="search" method="get" id="searchform" class="searchform" action="/advanced-search/">
                                    <div class="ls-form-owl">
                                        <input type="hidden" name="min-price" class="min-price-range-hidden range-input" readonly="" value="$1,000">
                                        <input type="hidden" name="max-price" class="max-price-range-hidden range-input" readonly="" value="$500,000">
                                        <div class="col-md-4 col-sm-12 az-sm-margin10">
                                            <select class="selectpicker" name="bedrooms" data-live-search="false" data-live-search-style="begins">
                                                <option value>Badrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="any">Any</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10">
                                            <select name="area" class="selectpicker" data-live-search="false" data-live-search-style="begins">
                                                <option value>Phuket</option>
                                                <option data-parentcity="" value="Phang Nga">Phang Nga</option>
                                                <option data-parentcity="" value="Mai Khao">Mai Khao</option>
                                                <option data-parentcity="" value="Nai Yang">Nai Yang</option>
                                                <option data-parentcity="" value="East">East</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10">
                                            <input type="text" name="daterange" value="" id="as123"/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="ls-submit-owl">
                                        <div class="col-md-12">
                                            <button class="btn btn-orange">Go</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="az-item az-item2">
                        <div class="az-item1-wrap">
                            <div class="ls-mask3">
                                <form role="search" method="get" id="searchform" class="searchform" action="/advanced-search/">
                                    <div class="ls-form-owl">
                                        <input type="hidden" name="min-price" class="min-price-range-hidden range-input" readonly="" value="$1,000">
                                        <input type="hidden" name="max-price" class="max-price-range-hidden range-input" readonly="" value="$500,000">
                                        <div class="col-md-4 col-sm-12 az-sm-margin10 az-md-margin146">
                                            <select class="selectpicker" name="bedrooms" data-live-search="false" data-live-search-style="begins">
                                                <option value>Badrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="any">Any</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10" style="height: 335px;">
                                            <div class="ls-absol2">
                                            <div class="phuket-map">
                                            <div class="phuket-map-inner">
                                                <div class="phuket-district p-dist1">
                                                    <input id="Mai Khao" title="Mai Khao" type="checkbox" name="area[]" value="Mai Khao"/>
                                                    <label for="Mai Khao">Mai Khao</label>
                                                </div>
                                                <div class="phuket-district p-dist2">
                                                    <input id="Nai Yang" title="Nai Yang" type="checkbox" name="area[]" value="Nai Yang"/>
                                                    <label for="Nai Yang">Nai Yang</label>
                                                </div>
                                                <div class="phuket-district p-dist3">
                                                    <input id="Nai Thon" title="Nai Thon" type="checkbox" name="area[]" value="Nai Thon"/>
                                                    <label for="Nai Thon">Nai Thon</label>
                                                </div>
                                                <div class="phuket-district p-dist4">
                                                    <input id="Layan" title="Layan" type="checkbox" name="area[]" value="Layan"/>
                                                    <label for="Layan">Layan</label>
                                                </div>
                                                <div class="phuket-district p-dist5">
                                                    <input id="Bang Tao" title="Bang Tao" type="checkbox" name="area[]" value="Bang Tao"/>
                                                    <label for="Bang Tao">Bang Tao</label>
                                                </div>
                                                <div class="phuket-district p-dist6">
                                                    <input id="Surin" title="Surin" type="checkbox" name="area[]" value="Surin"/>
                                                    <label for="Surin">Surin</label>
                                                </div>
                                                <div class="phuket-district p-dist7">
                                                    <input id="Kamala" title="Kamala" type="checkbox" name="area[]" value="Kamala"/>
                                                    <label for="Kamala">Kamala</label>
                                                </div>
                                                <div class="phuket-district p-dist8">
                                                    <input id="Patong" title="Patong" type="checkbox" name="area[]" value="Patong"/>
                                                    <label for="Patong">Patong</label>
                                                </div>
                                                <div class="phuket-district p-dist9">
                                                    <input id="Karon" title="Karon" type="checkbox" name="area[]" value="Karon"/>
                                                    <label for="Karon">Karon</label>
                                                </div>
                                                <div class="phuket-district p-dist10">
                                                    <input id="Kata" title="Kata" type="checkbox" name="area[]" value="Kata"/>
                                                    <label for="Kata">Kata</label>
                                                </div>
                                                <div class="phuket-district p-dist11">
                                                    <input id="Kata Noi" title="Kata Noi" type="checkbox" name="area[]" value="Kata Noi"/>
                                                    <label for="Kata Noi">Kata Noi</label>
                                                </div>
                                                <div class="phuket-district p-dist12">
                                                    <input id="Nai Harn" title="Nai Harn" type="checkbox" name="area[]" value="Nai Harn"/>
                                                    <label for="Nai Harn">Nai Harn</label>
                                                </div>
                                                <div class="phuket-district p-dist13">
                                                    <input id="Kathu" title="Kathu" type="checkbox" name="area[]" value="Kathu"/>
                                                    <label for="Kathu">Kathu</label>
                                                </div>
                                                <div class="phuket-district p-dist14">
                                                    <input id="Phuket Town" title="Phuket Town" type="checkbox" name="area[]" value="Phuket City"/>
                                                    <label for="Phuket Town">Phuket Town</label>
                                                </div>
                                                <div class="phuket-district p-dist15">
                                                    <input id="Rawai" title="Rawai" type="checkbox" name="area[]" value="Rawai"/>
                                                    <label for="Rawai">Rawai</label>
                                                </div>
                                                <div class="phuket-district p-dist16">
                                                    <input id="Panwa" title="Panwa" type="checkbox" name="area[]" value="Panwa"/>
                                                    <label for="Panwa">Panwa</label>
                                                </div>
                                                <div class="phuket-district p-dist17">
                                                    <input id="East" title="East" type="checkbox" name="area[]" value="East"/>
                                                    <label for="East">East</label>
                                                </div>
                                                <div class="phuket-district p-dist18">
                                                    <input id="Talang" title="Talang" type="checkbox" name="area[]" value="Talang"/>
                                                    <label for="Talang">Talang</label>
                                                </div>
                                                <div class="phuket-district p-dist19">
                                                    <input id="Cherng Talay" title="Cherng Talay" type="checkbox" name="area[]" value="Cherng Talay"/>
                                                    <label for="Cherng Talay">Cherng Talay</label>
                                                </div>
                                                <div class="phuket-district p-dist20">
                                                    <input id="Chalong" title="Chalong" type="checkbox" name="area[]" value="Chalong"/>
                                                    <label for="Chalong">Chalong</label>
                                                </div>
                                                <div class="phuket-district p-dist21">
                                                    <input id="Phang Nga" title="Phang Nga" type="checkbox" name="area[]" value="Phang Nga"/>
                                                    <label for="Phang Nga">Phang Nga</label>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10 az-md-margin146">
                                            <input type="text" name="daterange" value=""/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="ls-submit-owl">
                                        <div class="col-md-12 az-md-margin146">
                                            <button class="btn btn-orange">Go</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="az-item az-item3">
                        <div class="az-item1-wrap">
                            <div class="ls-mask3">
                                <form role="search" method="get" id="searchform" class="searchform" action="/advanced-search/">
                                    <div class="ls-form-owl">
                                        <input type="hidden" name="min-price" class="min-price-range-hidden range-input" readonly="" value="$1,000">
                                        <input type="hidden" name="max-price" class="max-price-range-hidden range-input" readonly="" value="$500,000">
                                        <div class="col-md-4 col-sm-12 az-sm-margin10 az-md-margin146">
                                            <select class="selectpicker" name="bedrooms" data-live-search="false" data-live-search-style="begins">
                                                <option value>Badrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="any">Any</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10" style="height: 335px;">
                                            <div class="ls-absol2">
                                            <div class="phuket-map">
                                            <div class="phuket-map-inner">
                                                <div class="phuket-district p-dist1">
                                                    <input id="Mai Khao" title="Mai Khao" type="checkbox" name="area[]" value="Mai Khao"/>
                                                    <label for="Mai Khao">Mai Khao</label>
                                                </div>
                                                <div class="phuket-district p-dist2">
                                                    <input id="Nai Yang" title="Nai Yang" type="checkbox" name="area[]" value="Nai Yang"/>
                                                    <label for="Nai Yang">Nai Yang</label>
                                                </div>
                                                <div class="phuket-district p-dist3">
                                                    <input id="Nai Thon" title="Nai Thon" type="checkbox" name="area[]" value="Nai Thon"/>
                                                    <label for="Nai Thon">Nai Thon</label>
                                                </div>
                                                <div class="phuket-district p-dist4">
                                                    <input id="Layan" title="Layan" type="checkbox" name="area[]" value="Layan"/>
                                                    <label for="Layan">Layan</label>
                                                </div>
                                                <div class="phuket-district p-dist5">
                                                    <input id="Bang Tao" title="Bang Tao" type="checkbox" name="area[]" value="Bang Tao"/>
                                                    <label for="Bang Tao">Bang Tao</label>
                                                </div>
                                                <div class="phuket-district p-dist6">
                                                    <input id="Surin" title="Surin" type="checkbox" name="area[]" value="Surin"/>
                                                    <label for="Surin">Surin</label>
                                                </div>
                                                <div class="phuket-district p-dist7">
                                                    <input id="Kamala" title="Kamala" type="checkbox" name="area[]" value="Kamala"/>
                                                    <label for="Kamala">Kamala</label>
                                                </div>
                                                <div class="phuket-district p-dist8">
                                                    <input id="Patong" title="Patong" type="checkbox" name="area[]" value="Patong"/>
                                                    <label for="Patong">Patong</label>
                                                </div>
                                                <div class="phuket-district p-dist9">
                                                    <input id="Karon" title="Karon" type="checkbox" name="area[]" value="Karon"/>
                                                    <label for="Karon">Karon</label>
                                                </div>
                                                <div class="phuket-district p-dist10">
                                                    <input id="Kata" title="Kata" type="checkbox" name="area[]" value="Kata"/>
                                                    <label for="Kata">Kata</label>
                                                </div>
                                                <div class="phuket-district p-dist11">
                                                    <input id="Kata Noi" title="Kata Noi" type="checkbox" name="area[]" value="Kata Noi"/>
                                                    <label for="Kata Noi">Kata Noi</label>
                                                </div>
                                                <div class="phuket-district p-dist12">
                                                    <input id="Nai Harn" title="Nai Harn" type="checkbox" name="area[]" value="Nai Harn"/>
                                                    <label for="Nai Harn">Nai Harn</label>
                                                </div>
                                                <div class="phuket-district p-dist13">
                                                    <input id="Kathu" title="Kathu" type="checkbox" name="area[]" value="Kathu"/>
                                                    <label for="Kathu">Kathu</label>
                                                </div>
                                                <div class="phuket-district p-dist14">
                                                    <input id="Phuket Town" title="Phuket Town" type="checkbox" name="area[]" value="Phuket City"/>
                                                    <label for="Phuket Town">Phuket Town</label>
                                                </div>
                                                <div class="phuket-district p-dist15">
                                                    <input id="Rawai" title="Rawai" type="checkbox" name="area[]" value="Rawai"/>
                                                    <label for="Rawai">Rawai</label>
                                                </div>
                                                <div class="phuket-district p-dist16">
                                                    <input id="Panwa" title="Panwa" type="checkbox" name="area[]" value="Panwa"/>
                                                    <label for="Panwa">Panwa</label>
                                                </div>
                                                <div class="phuket-district p-dist17">
                                                    <input id="East" title="East" type="checkbox" name="area[]" value="East"/>
                                                    <label for="East">East</label>
                                                </div>
                                                <div class="phuket-district p-dist18">
                                                    <input id="Talang" title="Talang" type="checkbox" name="area[]" value="Talang"/>
                                                    <label for="Talang">Talang</label>
                                                </div>
                                                <div class="phuket-district p-dist19">
                                                    <input id="Cherng Talay" title="Cherng Talay" type="checkbox" name="area[]" value="Cherng Talay"/>
                                                    <label for="Cherng Talay">Cherng Talay</label>
                                                </div>
                                                <div class="phuket-district p-dist20">
                                                    <input id="Chalong" title="Chalong" type="checkbox" name="area[]" value="Chalong"/>
                                                    <label for="Chalong">Chalong</label>
                                                </div>
                                                <div class="phuket-district p-dist21">
                                                    <input id="Phang Nga" title="Phang Nga" type="checkbox" name="area[]" value="Phang Nga"/>
                                                    <label for="Phang Nga">Phang Nga</label>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10 az-md-margin146">
                                            <input type="text" name="daterange" value=""/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="ls-submit-owl">
                                        <div class="col-md-12 az-md-margin146">
                                            <button class="btn btn-orange">Go</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="az-controls">
                        <div class="az-prev" style="display: none;">
                            <div class="az-inner-prev"></div>
                        </div>
                        <div class="az-next">
                            <div class="az-inner-next"></div>
                        </div>
                    </div>
                </div>
                <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                <div id="az-slider" class="az-carousel owl-theme">
                    <div class="az-item az-item0">
                        <div class="az-img-box-preload">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/az/loader.gif" alt="">
                        </div>
                    </div>
                    <div class="az-item az-item1">
                        <div class="az-item1-wrap">
                            <div class="ls-mask2">
                                <form role="search" method="get" id="searchform" class="searchform" action="/advanced-search/">
                                    <div class="ls-form-owl-ru">
                                        <input type="hidden" name="min-price" class="min-price-range-hidden range-input" readonly="" value="$1,000">
                                        <input type="hidden" name="max-price" class="max-price-range-hidden range-input" readonly="" value="$500,000">
                                        <div class="col-md-4 col-sm-12 az-sm-margin10">
                                            <select class="selectpicker" name="bedrooms" data-live-search="false" data-live-search-style="begins">
                                                <option value>Кол. спален</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="any">Любое</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10">
                                            <select name="area" class="selectpicker" data-live-search="false" data-live-search-style="begins">
                                                <option value>Весь Пхукет</option>
                                                <option data-parentcity="" value="Phang Nga">Панг Нга</option>
                                                <option data-parentcity="" value="Mai Khao">Май Као</option>
                                                <option data-parentcity="" value="Nai Yang">Най Янг</option>
                                                <option data-parentcity="" value="East">Восток</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10">
                                            <input type="text" name="daterange" value="" id="as123"/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="ls-submit-owl-ru">
                                        <div class="col-md-12">
                                            <button class="btn btn-orange">Поиск</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="az-item az-item2">
                        <div class="az-item1-wrap">
                            <div class="ls-mask3">
                                <form role="search" method="get" id="searchform" class="searchform" action="/advanced-search/">
                                    <div class="ls-form-owl-ru">
                                        <input type="hidden" name="min-price" class="min-price-range-hidden range-input" readonly="" value="$1,000">
                                        <input type="hidden" name="max-price" class="max-price-range-hidden range-input" readonly="" value="$500,000">
                                        <div class="col-md-4 col-sm-12 az-sm-margin10 az-md-margin146">
                                            <select class="selectpicker" name="bedrooms" data-live-search="false" data-live-search-style="begins">
                                                <option value>Кол. спален</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="any">Любое</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10" style="height: 335px;">
                                            <div class="ls-absol2">
                                            <div class="phuket-map">
                                            <div class="phuket-map-inner">
                                                <div class="phuket-district p-dist1">
                                                    <input id="Mai Khao" title="Mai Khao" type="checkbox" name="area[]" value="Mai Khao"/>
                                                    <label for="Mai Khao">Май Као</label>
                                                </div>
                                                <div class="phuket-district p-dist2">
                                                    <input id="Nai Yang" title="Nai Yang" type="checkbox" name="area[]" value="Nai Yang"/>
                                                    <label for="Nai Yang">Най Йанг</label>
                                                </div>
                                                <div class="phuket-district p-dist3">
                                                    <input id="Nai Thon" title="Nai Thon" type="checkbox" name="area[]" value="Nai Thon"/>
                                                    <label for="Nai Thon">Най Тон</label>
                                                </div>
                                                <div class="phuket-district p-dist4">
                                                    <input id="Layan" title="Layan" type="checkbox" name="area[]" value="Layan"/>
                                                    <label for="Layan">Лайан</label>
                                                </div>
                                                <div class="phuket-district p-dist5">
                                                    <input id="Bang Tao" title="Bang Tao" type="checkbox" name="area[]" value="Bang Tao"/>
                                                    <label for="Bang Tao">Банг Тао</label>
                                                </div>
                                                <div class="phuket-district p-dist6">
                                                    <input id="Surin" title="Surin" type="checkbox" name="area[]" value="Surin"/>
                                                    <label for="Surin">Сурин</label>
                                                </div>
                                                <div class="phuket-district p-dist7">
                                                    <input id="Kamala" title="Kamala" type="checkbox" name="area[]" value="Kamala"/>
                                                    <label for="Kamala">Камала</label>
                                                </div>
                                                <div class="phuket-district p-dist8">
                                                    <input id="Patong" title="Patong" type="checkbox" name="area[]" value="Patong"/>
                                                    <label for="Patong">Патонг</label>
                                                </div>
                                                <div class="phuket-district p-dist9">
                                                    <input id="Karon" title="Karon" type="checkbox" name="area[]" value="Karon"/>
                                                    <label for="Karon">Карон</label>
                                                </div>
                                                <div class="phuket-district p-dist10">
                                                    <input id="Kata" title="Kata" type="checkbox" name="area[]" value="Kata"/>
                                                    <label for="Kata">Ката</label>
                                                </div>
                                                <div class="phuket-district p-dist11">
                                                    <input id="Kata Noi" title="Kata Noi" type="checkbox" name="area[]" value="Kata Noi"/>
                                                    <label for="Kata Noi">Ката Ной</label>
                                                </div>
                                                <div class="phuket-district p-dist12">
                                                    <input id="Nai Harn" title="Nai Harn" type="checkbox" name="area[]" value="Nai Harn"/>
                                                    <label for="Nai Harn">Най Харн</label>
                                                </div>
                                                <div class="phuket-district p-dist13">
                                                    <input id="Kathu" title="Kathu" type="checkbox" name="area[]" value="Kathu"/>
                                                    <label for="Kathu">Кату</label>
                                                </div>
                                                <div class="phuket-district p-dist14">
                                                    <input id="Phuket Town" title="Phuket Town" type="checkbox" name="area[]" value="Phuket City"/>
                                                    <label for="Phuket Town">Пхукет Таун</label>
                                                </div>
                                                <div class="phuket-district p-dist15">
                                                    <input id="Rawai" title="Rawai" type="checkbox" name="area[]" value="Rawai"/>
                                                    <label for="Rawai">Раваи</label>
                                                </div>
                                                <div class="phuket-district p-dist16">
                                                    <input id="Panwa" title="Panwa" type="checkbox" name="area[]" value="Panwa"/>
                                                    <label for="Panwa">Панва</label>
                                                </div>
                                                <div class="phuket-district p-dist17">
                                                    <input id="East" title="East" type="checkbox" name="area[]" value="East"/>
                                                    <label for="East">Восток</label>
                                                </div>
                                                <div class="phuket-district p-dist18">
                                                    <input id="Talang" title="Talang" type="checkbox" name="area[]" value="Talang"/>
                                                    <label for="Talang">Таланг</label>
                                                </div>
                                                <div class="phuket-district p-dist19">
                                                    <input id="Cherng Talay" title="Cherng Talay" type="checkbox" name="area[]" value="Cherng Talay"/>
                                                    <label for="Cherng Talay">Чентале</label>
                                                </div>
                                                <div class="phuket-district p-dist20">
                                                    <input id="Chalong" title="Chalong" type="checkbox" name="area[]" value="Chalong"/>
                                                    <label for="Chalong">Чалонг</label>
                                                </div>
                                                <div class="phuket-district p-dist21">
                                                    <input id="Phang Nga" title="Phang Nga" type="checkbox" name="area[]" value="Phang Nga"/>
                                                    <label for="Phang Nga">Панг Нга</label>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10 az-md-margin146">
                                            <input type="text" name="daterange" value=""/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="ls-submit-owl-ru">
                                        <div class="col-md-12 az-md-margin146">
                                            <button class="btn btn-orange">Поиск</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="az-item az-item3">
                        <div class="az-item1-wrap">
                            <div class="ls-mask3">
                                <form role="search" method="get" id="searchform" class="searchform" action="/advanced-search/">
                                    <div class="ls-form-owl-ru">
                                        <input type="hidden" name="min-price" class="min-price-range-hidden range-input" readonly="" value="$1,000">
                                        <input type="hidden" name="max-price" class="max-price-range-hidden range-input" readonly="" value="$500,000">
                                        <div class="col-md-4 col-sm-12 az-sm-margin10 az-md-margin146">
                                            <select class="selectpicker" name="bedrooms" data-live-search="false" data-live-search-style="begins">
                                                <option value>Кол. спален</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="any">Любое</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10" style="height: 335px;">
                                            <div class="ls-absol2">
                                            <div class="phuket-map">
                                            <div class="phuket-map-inner">
                                                <div class="phuket-district p-dist1">
                                                    <input id="Mai Khao" title="Mai Khao" type="checkbox" name="area[]" value="Mai Khao"/>
                                                    <label for="Mai Khao">Май Као</label>
                                                </div>
                                                <div class="phuket-district p-dist2">
                                                    <input id="Nai Yang" title="Nai Yang" type="checkbox" name="area[]" value="Nai Yang"/>
                                                    <label for="Nai Yang">Най Йанг</label>
                                                </div>
                                                <div class="phuket-district p-dist3">
                                                    <input id="Nai Thon" title="Nai Thon" type="checkbox" name="area[]" value="Nai Thon"/>
                                                    <label for="Nai Thon">Най Тон</label>
                                                </div>
                                                <div class="phuket-district p-dist4">
                                                    <input id="Layan" title="Layan" type="checkbox" name="area[]" value="Layan"/>
                                                    <label for="Layan">Лайан</label>
                                                </div>
                                                <div class="phuket-district p-dist5">
                                                    <input id="Bang Tao" title="Bang Tao" type="checkbox" name="area[]" value="Bang Tao"/>
                                                    <label for="Bang Tao">Банг Тао</label>
                                                </div>
                                                <div class="phuket-district p-dist6">
                                                    <input id="Surin" title="Surin" type="checkbox" name="area[]" value="Surin"/>
                                                    <label for="Surin">Сурин</label>
                                                </div>
                                                <div class="phuket-district p-dist7">
                                                    <input id="Kamala" title="Kamala" type="checkbox" name="area[]" value="Kamala"/>
                                                    <label for="Kamala">Камала</label>
                                                </div>
                                                <div class="phuket-district p-dist8">
                                                    <input id="Patong" title="Patong" type="checkbox" name="area[]" value="Patong"/>
                                                    <label for="Patong">Патонг</label>
                                                </div>
                                                <div class="phuket-district p-dist9">
                                                    <input id="Karon" title="Karon" type="checkbox" name="area[]" value="Karon"/>
                                                    <label for="Karon">Карон</label>
                                                </div>
                                                <div class="phuket-district p-dist10">
                                                    <input id="Kata" title="Kata" type="checkbox" name="area[]" value="Kata"/>
                                                    <label for="Kata">Ката</label>
                                                </div>
                                                <div class="phuket-district p-dist11">
                                                    <input id="Kata Noi" title="Kata Noi" type="checkbox" name="area[]" value="Kata Noi"/>
                                                    <label for="Kata Noi">Ката Ной</label>
                                                </div>
                                                <div class="phuket-district p-dist12">
                                                    <input id="Nai Harn" title="Nai Harn" type="checkbox" name="area[]" value="Nai Harn"/>
                                                    <label for="Nai Harn">Най Харн</label>
                                                </div>
                                                <div class="phuket-district p-dist13">
                                                    <input id="Kathu" title="Kathu" type="checkbox" name="area[]" value="Kathu"/>
                                                    <label for="Kathu">Кату</label>
                                                </div>
                                                <div class="phuket-district p-dist14">
                                                    <input id="Phuket Town" title="Phuket Town" type="checkbox" name="area[]" value="Phuket City"/>
                                                    <label for="Phuket Town">Пхукет Таун</label>
                                                </div>
                                                <div class="phuket-district p-dist15">
                                                    <input id="Rawai" title="Rawai" type="checkbox" name="area[]" value="Rawai"/>
                                                    <label for="Rawai">Раваи</label>
                                                </div>
                                                <div class="phuket-district p-dist16">
                                                    <input id="Panwa" title="Panwa" type="checkbox" name="area[]" value="Panwa"/>
                                                    <label for="Panwa">Панва</label>
                                                </div>
                                                <div class="phuket-district p-dist17">
                                                    <input id="East" title="East" type="checkbox" name="area[]" value="East"/>
                                                    <label for="East">Восток</label>
                                                </div>
                                                <div class="phuket-district p-dist18">
                                                    <input id="Talang" title="Talang" type="checkbox" name="area[]" value="Talang"/>
                                                    <label for="Talang">Таланг</label>
                                                </div>
                                                <div class="phuket-district p-dist19">
                                                    <input id="Cherng Talay" title="Cherng Talay" type="checkbox" name="area[]" value="Cherng Talay"/>
                                                    <label for="Cherng Talay">Чентале</label>
                                                </div>
                                                <div class="phuket-district p-dist20">
                                                    <input id="Chalong" title="Chalong" type="checkbox" name="area[]" value="Chalong"/>
                                                    <label for="Chalong">Чалонг</label>
                                                </div>
                                                <div class="phuket-district p-dist21">
                                                    <input id="Phang Nga" title="Phang Nga" type="checkbox" name="area[]" value="Phang Nga"/>
                                                    <label for="Phang Nga">Панг Нга</label>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10 az-md-margin146">
                                            <input type="text" name="daterange" value=""/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="ls-submit-owl-ru">
                                        <div class="col-md-12 az-md-margin146">
                                            <button class="btn btn-orange">Поиск</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="az-controls">
                        <div class="az-prev" style="display: none;">
                            <div class="az-inner-prev"></div>
                        </div>
                        <div class="az-next">
                            <div class="az-inner-next"></div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <script>
        (function($){
            if(window.matchMedia('(min-width: 992px)').matches){
                var az_temp_height221122 = $(window).height();
                az_temp_height221122 = (az_temp_height221122>=590)?az_temp_height221122: 590;
                $('.az-slider').height(az_temp_height221122);
            } else {
                var az_temp_height221122 = $(window).height();
                az_temp_height221122 = (az_temp_height221122>=590)?az_temp_height221122: 590;
                $('.az-slider').height(az_temp_height221122 - 60);
            }
        })(jQuery);
    </script>
<?php } ?>