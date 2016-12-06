<?php
global $post, $adv_search_which_header_show, $adv_search_over_header_pages, $adv_search_selected_pages;

if (is_plugin_active('revslider/revslider.php')) {
    $revslider_alias = get_post_meta($post->ID, 'fave_page_header_revslider', true);
    ?>
    <div class="header-media az-dispay-lg">
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
    <div class="header-media az-dispay-sm">
        <div class="page-banner-revolution-slider">
            <div class="az-slider" style="">
                <!-- <div id="custom-pag-place"></div> -->

                <div id="az-slider" class="az-carousel owl-theme">
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
                                        <div class="col-md-4 col-sm-12 az-sm-margin10" style="height: 335px;">
                                            <div class="ls-absol2">
                                            <div class="phuket">
                                            <div class="mapWrapper" id="map">
                                            <div class="newmap" style="height: 335px;">
                                            <div class="newmapLocations">
                                            
                                            <div class="loc" style="height: 0px; position: absolute; left: 40px; top: 51px">
                                            <input id="Mai Khao" title="Mai Khao" type="checkbox" class="map-checkbox area-MAI" name="area[]" value="Mai Khao"/>
                                            <label for="Mai Khao" class="MAI" title="Mai Khao Beach is Phuket's longest beach that spans for about 11km. ">
                                            <div>Mai Khao </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 37px; top: 84px">
                                            <input id="Nai Yang" title="Nai Yang" type="checkbox" class="map-checkbox area-NYG" name="area[]" value="Nai Yang"/>
                                            <label for="Nai Yang" class="NYG" title="Nai Yang is noted for its impressive forest of tall casuarina trees, and as a picnic spot for Thais. ">
                                            <div>Nai Yang </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 21px; top: 107px">
                                            <input id="Nai Thon" title="Nai Thon" type="checkbox" class="map-checkbox area-NAT" name="area[]" value="Nai Thon"/>
                                            <label for="Nai Thon" class="NAT" title="Nai Thon is a beautiful stretch of sand that for reasons unknown has been overlooked by large resort developers. ">
                                            <div>Nai Thon </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 26px; top: 125px">
                                            <input id="Layan" title="Layan" type="checkbox" class="map-checkbox area-LAY" name="area[]" value="Layan"/>
                                            <label for="Layan" class="LAY" title="Layan Beach is a beautiful and secluded beach with only a couple of resorts. ">
                                            <div>Layan </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 34px; top: 149px">
                                            <input id="Bang Tao" title="Bang Tao" type="checkbox" class="map-checkbox area-BAN" name="area[]" value="Bang Tao"/>
                                            <label for="Bang Tao" class="BAN" title="Bang Tao is a large open bay with one of Phuket's longest beaches. ">
                                            <div>Bang Tao </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 23px; top: 166px">
                                            <input id="Surin" title="Surin" type="checkbox" class="map-checkbox area-SUR" name="area[]" value="Surin"/>
                                            <label for="Surin" class="SUR" title="Surin Beach still has a small village atmosphere, but this is gradually changing as more and more major housing developments and hotel projects get underway. ">
                                            <div>Surin </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 23px; top: 188px">
                                            <input id="Kamala" title="Kamala" type="checkbox" class="map-checkbox area-KAM" name="area[]" value="Kamala"/>
                                            <label for="Kamala" class="KAM" title="Just north of the lights and noise of Patong lies Kamala beach, a quieter stretch of sand with a more relaxed feel. ">
                                            <div>Kamala </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 36px; top: 229px">
                                            <input id="Patong" title="Patong" type="checkbox" class="map-checkbox area-PAT" name="area[]" value="Patong"/>
                                            <label for="Patong" class="PAT" title="Patong is the most famous beach resort in Phuket, with its wide variety of activities and nightlife. ">
                                            <div>Patong </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 36px; top: 269px">
                                            <input id="Karon" title="Karon" type="checkbox" class="map-checkbox area-KAR" name="area[]" value="Karon"/>
                                            <label for="Karon" class="KAR" title="One of the larger beaches in Phuket, Karon has plenty to offer the holiday visitor as well as long-term residents. ">
                                            <div>Karon </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 38px; top: 291px">
                                            <input id="Kata" title="Kata" type="checkbox" class="map-checkbox area-KAT" name="area[]" value="Kata"/>
                                            <label for="Kata" class="KAT" title="Very popular with families, Kata is an all round favourite due to its spectacular beach, great restaurants and lively but not raucous nightlife. ">
                                            <div>Kata </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 18px; top: 311px">
                                            <input id="Kata Noi" title="Kata Noi" type="checkbox" class="map-checkbox area-KAN" name="area[]" value="Kata Noi"/>
                                            <label for="Kata Noi" class="KAN" title="Very popular with families, Kata Noi is an all round favourite due to its spectacular beach, great restaurants and lively but not raucous nightlife. ">
                                            <div>Kata Noi </div>
                                            </label>
                                            </div>
                                            <!-- Ката Ной -->
                                            <div class="loc" style="height: 0px; position: absolute; left: 42px; top: 332px">
                                            <input id="Nai Harn" title="Nai Harn" type="checkbox" class="map-checkbox area-NAI" name="area[]" value="13"/>
                                            <label for="Nai Harn" class="NAI" title="Nai Harn is a quiet beach in the south, near Phromthep Cape view point. ">
                                            <div>Nai Harn </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 67px; top: 219px">
                                            <input id="Kathu" title="Kathu" type="checkbox" class="map-checkbox area-KTH" name="area[]" value="Kathu"/>
                                            <label for="Kathu" class="KTH" title="Kathu is located in the middle of the island, between Patong to the west and Phuket City to the east. ">
                                            <div>Kathu </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 101px; top: 233px">
                                            <input id="Phuket City" title="Phuket City" type="checkbox" class="map-checkbox area-PHU" name="area[]" value="Phuket City"/>
                                            <label for="Phuket City" class="PHU" title="Phuket City features an exciting mix of old and new, simple and sophisticated, peaceful and pulsating. ">
                                            <div>Phuket City </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 54px; top: 316px">
                                            <input id="Rawai" title="Rawai" type="checkbox" class="map-checkbox area-RAW" name="area[]" value="4"/>
                                            <label for="Rawai" class="RAW" title="Rawai is home to quite a few of Phuket's foreign expat population, lending a bohemian and laid-back flavour to the way of life there. ">
                                            <div>Rawai </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 108px; top: 283px">
                                            <input id="Panwa" title="Panwa" type="checkbox" class="map-checkbox area-PAN" name="area[]" value="Panwa"/>
                                            <label for="Panwa" class="PAN" title="Panwa is a quiet cape at the south east of the Island. ">
                                            <div>Panwa </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 129px; top: 94px">
                                            <input id="East" title="East" type="checkbox" class="map-checkbox area-EAS" name="area[]" value="East"/>
                                            <label for="East" class="EAS" title="The east coast of the island includes all areas north of Phuket City on the coastline. ">
                                            <div>East </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 63px; top: 126px">
                                            <input id="Talang" title="Talang" type="checkbox" class="map-checkbox area-TAL" name="area[]" value="Talang"/>
                                            <label for="Talang" class="TAL" title="Talang, close to the main highway which crosses Phuket from north to south is ideal for those looking for a place which is centralized and easily accessible. ">
                                            <div>Talang </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 60px; top: 159px">
                                            <input id="Cherng Talay" title="Cherng Talay" type="checkbox" class="map-checkbox area-CHE" name="area[]" value="Cherng Talay"/>
                                            <label for="Cherng Talay" class="CHE" title="Cherng Talay is a town area towards the west coast, rapidly becoming a very popular area for expatriates ">
                                            <div>Cherng Talay </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 66px; top: 271px">
                                            <input id="Chalong" title="Chalong" type="checkbox" class="map-checkbox area-CHA" name="area[]" value="Chalong"/>
                                            <label for="Chalong" class="CHA" title="A heavily populated area of Phuket, Chalong extends from the southern end of Phuket City down towards Rawai. ">
                                            <div>Chalong </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 34px; top: 4px">
                                            <input id="Phang Nga" title="Phang Nga" type="checkbox" class="map-checkbox area-PHA" name="area[]" value="Phang Nga"/>
                                            <label for="Phang Nga" class="PHA" title="Phang Nga is a province just north of Phuket which is getting increased attention from developers with every year. ">
                                            <div>Phang Nga </div>
                                            </label>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10">
                                            <input type="text" name="daterange" value=""/>
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
                    <div class="az-item az-item3">
                        <div class="az-item1-wrap">
                            <div class="ls-mask3">
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
                                        <div class="col-md-4 col-sm-12 az-sm-margin10" style="height: 335px;">
                                            <div class="ls-absol2">
                                            <div class="phuket">
                                            <div class="mapWrapper" id="map">
                                            <div class="newmap" style="height: 335px;">
                                            <div class="newmapLocations">
                                            
                                            <div class="loc" style="height: 0px; position: absolute; left: 40px; top: 51px">
                                            <input id="Mai Khao" title="Mai Khao" type="checkbox" class="map-checkbox area-MAI" name="area[]" value="Mai Khao"/>
                                            <label for="Mai Khao" class="MAI" title="Mai Khao Beach is Phuket's longest beach that spans for about 11km. ">
                                            <div>Mai Khao </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 37px; top: 84px">
                                            <input id="Nai Yang" title="Nai Yang" type="checkbox" class="map-checkbox area-NYG" name="area[]" value="Nai Yang"/>
                                            <label for="Nai Yang" class="NYG" title="Nai Yang is noted for its impressive forest of tall casuarina trees, and as a picnic spot for Thais. ">
                                            <div>Nai Yang </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 21px; top: 107px">
                                            <input id="Nai Thon" title="Nai Thon" type="checkbox" class="map-checkbox area-NAT" name="area[]" value="Nai Thon"/>
                                            <label for="Nai Thon" class="NAT" title="Nai Thon is a beautiful stretch of sand that for reasons unknown has been overlooked by large resort developers. ">
                                            <div>Nai Thon </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 26px; top: 125px">
                                            <input id="Layan" title="Layan" type="checkbox" class="map-checkbox area-LAY" name="area[]" value="Layan"/>
                                            <label for="Layan" class="LAY" title="Layan Beach is a beautiful and secluded beach with only a couple of resorts. ">
                                            <div>Layan </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 34px; top: 149px">
                                            <input id="Bang Tao" title="Bang Tao" type="checkbox" class="map-checkbox area-BAN" name="area[]" value="Bang Tao"/>
                                            <label for="Bang Tao" class="BAN" title="Bang Tao is a large open bay with one of Phuket's longest beaches. ">
                                            <div>Bang Tao </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 23px; top: 166px">
                                            <input id="Surin" title="Surin" type="checkbox" class="map-checkbox area-SUR" name="area[]" value="Surin"/>
                                            <label for="Surin" class="SUR" title="Surin Beach still has a small village atmosphere, but this is gradually changing as more and more major housing developments and hotel projects get underway. ">
                                            <div>Surin </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 23px; top: 188px">
                                            <input id="Kamala" title="Kamala" type="checkbox" class="map-checkbox area-KAM" name="area[]" value="Kamala"/>
                                            <label for="Kamala" class="KAM" title="Just north of the lights and noise of Patong lies Kamala beach, a quieter stretch of sand with a more relaxed feel. ">
                                            <div>Kamala </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 36px; top: 229px">
                                            <input id="Patong" title="Patong" type="checkbox" class="map-checkbox area-PAT" name="area[]" value="Patong"/>
                                            <label for="Patong" class="PAT" title="Patong is the most famous beach resort in Phuket, with its wide variety of activities and nightlife. ">
                                            <div>Patong </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 36px; top: 269px">
                                            <input id="Karon" title="Karon" type="checkbox" class="map-checkbox area-KAR" name="area[]" value="Karon"/>
                                            <label for="Karon" class="KAR" title="One of the larger beaches in Phuket, Karon has plenty to offer the holiday visitor as well as long-term residents. ">
                                            <div>Karon </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 38px; top: 291px">
                                            <input id="Kata" title="Kata" type="checkbox" class="map-checkbox area-KAT" name="area[]" value="Kata"/>
                                            <label for="Kata" class="KAT" title="Very popular with families, Kata is an all round favourite due to its spectacular beach, great restaurants and lively but not raucous nightlife. ">
                                            <div>Kata </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 18px; top: 311px">
                                            <input id="Kata Noi" title="Kata Noi" type="checkbox" class="map-checkbox area-KAN" name="area[]" value="Kata Noi"/>
                                            <label for="Kata Noi" class="KAN" title="Very popular with families, Kata Noi is an all round favourite due to its spectacular beach, great restaurants and lively but not raucous nightlife. ">
                                            <div>Kata Noi </div>
                                            </label>
                                            </div>
                                            <!-- Ката Ной -->
                                            <div class="loc" style="height: 0px; position: absolute; left: 42px; top: 332px">
                                            <input id="Nai Harn" title="Nai Harn" type="checkbox" class="map-checkbox area-NAI" name="area[]" value="13"/>
                                            <label for="Nai Harn" class="NAI" title="Nai Harn is a quiet beach in the south, near Phromthep Cape view point. ">
                                            <div>Nai Harn </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 67px; top: 219px">
                                            <input id="Kathu" title="Kathu" type="checkbox" class="map-checkbox area-KTH" name="area[]" value="Kathu"/>
                                            <label for="Kathu" class="KTH" title="Kathu is located in the middle of the island, between Patong to the west and Phuket City to the east. ">
                                            <div>Kathu </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 101px; top: 233px">
                                            <input id="Phuket City" title="Phuket City" type="checkbox" class="map-checkbox area-PHU" name="area[]" value="Phuket City"/>
                                            <label for="Phuket City" class="PHU" title="Phuket City features an exciting mix of old and new, simple and sophisticated, peaceful and pulsating. ">
                                            <div>Phuket City </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 54px; top: 316px">
                                            <input id="Rawai" title="Rawai" type="checkbox" class="map-checkbox area-RAW" name="area[]" value="4"/>
                                            <label for="Rawai" class="RAW" title="Rawai is home to quite a few of Phuket's foreign expat population, lending a bohemian and laid-back flavour to the way of life there. ">
                                            <div>Rawai </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 108px; top: 283px">
                                            <input id="Panwa" title="Panwa" type="checkbox" class="map-checkbox area-PAN" name="area[]" value="Panwa"/>
                                            <label for="Panwa" class="PAN" title="Panwa is a quiet cape at the south east of the Island. ">
                                            <div>Panwa </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 129px; top: 94px">
                                            <input id="East" title="East" type="checkbox" class="map-checkbox area-EAS" name="area[]" value="East"/>
                                            <label for="East" class="EAS" title="The east coast of the island includes all areas north of Phuket City on the coastline. ">
                                            <div>East </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 63px; top: 126px">
                                            <input id="Talang" title="Talang" type="checkbox" class="map-checkbox area-TAL" name="area[]" value="Talang"/>
                                            <label for="Talang" class="TAL" title="Talang, close to the main highway which crosses Phuket from north to south is ideal for those looking for a place which is centralized and easily accessible. ">
                                            <div>Talang </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 60px; top: 159px">
                                            <input id="Cherng Talay" title="Cherng Talay" type="checkbox" class="map-checkbox area-CHE" name="area[]" value="Cherng Talay"/>
                                            <label for="Cherng Talay" class="CHE" title="Cherng Talay is a town area towards the west coast, rapidly becoming a very popular area for expatriates ">
                                            <div>Cherng Talay </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 66px; top: 271px">
                                            <input id="Chalong" title="Chalong" type="checkbox" class="map-checkbox area-CHA" name="area[]" value="Chalong"/>
                                            <label for="Chalong" class="CHA" title="A heavily populated area of Phuket, Chalong extends from the southern end of Phuket City down towards Rawai. ">
                                            <div>Chalong </div>
                                            </label>
                                            </div>
                                            <div class="loc" style="height: 0px; position: absolute; left: 34px; top: 4px">
                                            <input id="Phang Nga" title="Phang Nga" type="checkbox" class="map-checkbox area-PHA" name="area[]" value="Phang Nga"/>
                                            <label for="Phang Nga" class="PHA" title="Phang Nga is a province just north of Phuket which is getting increased attention from developers with every year. ">
                                            <div>Phang Nga </div>
                                            </label>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 az-sm-margin10">
                                            <input type="text" name="daterange" value=""/>
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
                    <div class="az-controls">
                        <div class="az-prev" style="display: none;">
                            <div class="az-inner-prev"></div>
                        </div>
                        <div class="az-next">
                            <div class="az-inner-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>

</script>
    <?php
}?>
