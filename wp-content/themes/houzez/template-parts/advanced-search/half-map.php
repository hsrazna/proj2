<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 11/06/16
 * Time: 11:08 PM
 */
global $measurement_unit_adv_search, $houzez_local;

if( $measurement_unit_adv_search == 'sqft' ) {
    $measurement_unit_adv_search = houzez_option('measurement_unit_sqft_text');
} elseif( $measurement_unit_adv_search == 'sq_meter' ) {
    $measurement_unit_adv_search = houzez_option('measurement_unit_square_meter_text');
}

$adv_search_price_slider = houzez_option('adv_search_price_slider');
$status = $type = $location = $area = $searched_country = $state = '';
$adv_show_hide = houzez_option('adv_show_hide_halmap');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $temp = get_field('status');
    if(empty($temp)){
        if( isset( $_SESSION['az_half_map_status'] ) ) {
            $status = $_SESSION['az_half_map_status'];
        }
        if( isset( $_SESSION['az_half_map_type'] ) ) {
            $type = $_SESSION['az_half_map_type'];
        }
        if( isset( $_SESSION['az_half_map_location'] ) ) {
            $location = $_SESSION['az_half_map_location'];
        }
        if( isset( $_SESSION['az_half_map_area'] ) ) {
            $area = $_SESSION['az_half_map_area'];

            if(!is_array($area)){ $area = Array($area); }
        } else {
            $area = Array();
        }

        if( isset( $_SESSION['az_half_map_state'] ) ) {
            $state = $_SESSION['az_half_map_state'];
        }
        if( isset( $_SESSION['az_half_map_country'] ) ) {
            $searched_country = $_SESSION['az_half_map_country'];
        }
        if( isset( $_SESSION['az_half_map_max_price'] ) ) {
            $max_price = $_SESSION['az_half_map_max_price'];
        }
        if( isset( $_SESSION['az_half_map_mix_price'] ) ) {
            $mix_price = $_SESSION['az_half_map_mix_price'];
        }
    }

    if( isset( $_GET['status'] ) ) {
        $status = $_GET['status'];
    }
    if( isset( $_GET['type'] ) ) {
        $type = $_GET['type'];
    }
    if( isset( $_GET['location'] ) ) {
        $location = $_GET['location'];
    }

    if( isset( $_GET['area'] ) ) {
        $area = $_GET['area'];
        if(!is_array($area)){ $area = Array($area); }
    } elseif(empty($area)) {
        $area = Array();
    }
    if( isset( $_GET['state'] ) ) {
        $state = $_GET['state'];
    }
    if( isset( $_GET['country'] ) ) {
        $searched_country = $_GET['country'];
    }
    // print_r($_SESSION);
} elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
    unset($_SESSION['az_half_map_status']);
    unset($_SESSION['az_half_map_type']);
    unset($_SESSION['az_half_map_location']);
    unset($_SESSION['az_half_map_area']);
    unset($_SESSION['az_half_map_state']);
    unset($_SESSION['az_half_map_country']);
    unset($_SESSION['az_half_map_min_price']);
    unset($_SESSION['az_half_map_max_price']);
    unset($_SESSION['az_half_map_bedrooms']);
    unset($_SESSION['az_half_map_bathrooms']);
    if( isset( $_POST['status'] ) ) {
        $status = $_POST['status'];
        $_SESSION['az_half_map_status'] = $status;
    }
    if( isset( $_POST['type'] ) ) {
        $type = $_POST['type'];
        $_SESSION['az_half_map_type'] = $type;
    }
    if( isset( $_POST['location'] ) ) {
        $location = $_POST['location'];
        $_SESSION['az_half_map_location'] = $location;
    }
    if( isset( $_POST['area'] ) ) {
        $area = $_POST['area'];
        // if(!is_array($area)){ $area = Array($area); }
        $_SESSION['az_half_map_area'] = $area;
    }
    //  else {
    //     $area = Array();
    // }
    if( isset( $_GET['state'] ) ) {
        $state = $_POST['state'];
        $_SESSION['az_half_map_state'] = $state;
    }
    if( isset( $_POST['country'] ) ) {
        $searched_country = $_POST['country'];
        $_SESSION['az_half_map_country'] = $searched_country;
    }
    if( isset( $_POST['min-price'] ) ) {
        $min_price = $_POST['min-price'];
        $_SESSION['az_half_map_min_price'] = $min_price;
    }
    if( isset( $_POST['max-price'] ) ) {
        $max_price = $_POST['max-price'];
        $_SESSION['az_half_map_max_price'] = $max_price;
    }
    if( isset( $_POST['bedrooms'] ) ) {
        $bedrooms = $_POST['bedrooms'];
        $_SESSION['az_half_map_bedrooms'] = $bedrooms;
    }
    if( isset( $_POST['bathrooms'] ) ) {
        $bathrooms = $_POST['bathrooms'];
        $_SESSION['az_half_map_bathrooms'] = $bathrooms;
    }
    // $_SESSION['az_half_map_bedrooms'] = $searched_num;
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit;
    // print_r($_SESSION);
    // echo $_SERVER["PHP_SELF"];
    // echo $_SERVER['REQUEST_URI'];
}
$temp = get_field('status');
if($temp){
    $status = $temp;
    $adv_show_hide['status'] = 1;
}
// print_r($_POST);
// print_r($area);
$keyword_field = houzez_option('keyword_field');

if( $keyword_field == 'prop_title' ) {
    $keyword_field_placeholder = $houzez_local['keyword_text'];

} else if( $keyword_field == 'prop_city_state_county' ) {
    $keyword_field_placeholder = $houzez_local['city_state_area'];

} else if( $keyword_field == 'prop_address' ) {
    $keyword_field_placeholder = $houzez_local['search_address'];

} else {
    $keyword_field_placeholder = $houzez_local['enter_location'];
}
$checked = true;
$radius_unit = houzez_option('radius_unit');
$enable_radius_search = houzez_option('enable_radius_search_halfmap');

if ($adv_show_hide['keyword'] != 1) {
    $geo_location_field_classes = 'col-md-6 col-sm-6 col-xs-6';
} else {
    $geo_location_field_classes = 'col-md-12 col-sm-12 col-xs-12';
}
?>
<div class="advanced-search houzez-adv-price-range">

    <form method="get" action="#">
        
        <?php if( $enable_radius_search != 0 ) { ?>
            <input type="hidden" name="search_radius" id="radius-range-value">
            <input type="hidden" name="lat" value="<?php echo isset ( $_GET['lat'] ) ? $_GET['lat'] : isset ( $_POST['lat'] ) ? $_POST['lat'] : ''; ?>" id="latitude">
            <input type="hidden" name="lng" value="<?php echo isset ( $_GET['lng'] ) ? $_GET['lng'] : isset ( $_POST['lng'] ) ? $_POST['lng'] : ''; ?>" id="longitude">
        <div class="row">
            <?php if ($adv_show_hide['keyword'] != 1) { ?>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group table-list search-long">
                    <div class="input-search input-icon">
                        <input type="text" class="form-control" value="<?php echo isset ( $_GET['keyword'] ) ? $_GET['keyword'] : isset ( $_POST['keyword'] ) ? $_POST['keyword'] : ''; ?>" name="keyword" placeholder="<?php echo $keyword_field_placeholder; ?>">
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="<?php echo esc_attr($geo_location_field_classes);?>">
                <div class="form-group">
                    <div class="search-location">
                        <input type="text" class="form-control search_location" value="<?php echo isset ( $_GET['search_location'] ) ? $_GET['search_location'] : isset ( $_POST['search_location'] ) ? $_POST['search_location'] : ''; ?>" name="search_location" placeholder="<?php echo esc_html__('Location', 'houzez'); ?>">
                        <i class="location-trigger fa fa-dot-circle-o"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <div class="form-group">
                    <div class="radius-text-wrap">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="use_radius" id="use_radius" <?php checked( true, $checked ); ?>"> <?php echo esc_html__('Radius:', 'houzez'); ?> <strong><span id="radius-range-text">0</span> <?php echo esc_attr($radius_unit); ?></strong>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-xs-9">
                <div class="radius-range-wrap">
                    <div id="radius-range-slider"></div>
                </div>
            </div>
        </div>
        <?php } ?>

        <div class="row">
            <div class="col-sm-12 col-xs-12">
            <?php if ( qtrans_getLanguage() == 'en' ) {?>
                <label class="advance-trigger az-margin-none"><i class="fa fa-plus-square"></i> Search </label>
            <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                <label class="advance-trigger az-margin-none"><i class="fa fa-plus-square"></i> Поиск </label>
            <?php } ?>
                
            </div>
        </div>
        <div class="features-list field-expand">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                    <div class="row">
                        <?php if( $enable_radius_search != 1 ) {
                            if ($adv_show_hide['keyword'] != 1) { ?>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group table-list search-long">
                                        <div class="input-search input-icon">
                                            <input type="text" class="form-control"
                                                   value="<?php echo isset ($_GET['keyword']) ? $_GET['keyword'] : isset ($_POST['keyword'])?$_POST['keyword']:''; ?>"
                                                   name="keyword" placeholder="<?php echo $keyword_field_placeholder; ?>">
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        }?>

                        <?php if( $adv_show_hide['countries'] != 1 ) { ?>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select name="country" class="selectpicker" data-live-search="false" data-live-search-style="begins">
                                        <?php
                                        // All Option
                                        echo '<option value="">'.esc_html__('All Countries', 'houzez').'</option>';

                                        countries_dropdown( $searched_country );
                                        ?>
                                    </select>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if( $adv_show_hide['states'] != 1 ) { ?>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select name="state" class="selectpicker" data-live-search="false" data-live-search-style="begins">
                                        <?php
                                        // All Option
                                        echo '<option value="">'.esc_html__('All States', 'houzez').'</option>';

                                        $prop_state = get_terms (
                                            array(
                                                "property_state"
                                            ),
                                            array(
                                                'orderby' => 'name',
                                                'order' => 'ASC',
                                                'hide_empty' => true,
                                                'parent' => 0
                                            )
                                        );
                                        houzez_hirarchical_options('property_state', $prop_state, $state );
                                        ?>
                                    </select>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if( $adv_show_hide['cities'] != 1 ) { ?>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="form-group">
                                <select name="location" class="selectpicker" data-live-search="false" data-live-search-style="begins">
                                    <?php
                                    // All Option
                                    echo '<option value="">'.$houzez_local['all_cities'].'</option>';

                                    $prop_city = get_terms (
                                        array(
                                            "property_city"
                                        ),
                                        array(
                                            'orderby' => 'name',
                                            'order' => 'ASC',
                                            'hide_empty' => true,
                                            'parent' => 0
                                        )
                                    );
                                    houzez_hirarchical_options('property_city', $prop_city, $location );
                                    ?>
                                </select>
                                </div>
                            </div>
                        <?php } ?>


                        <?php if( 0/*$adv_show_hide['areas'] != 1*/ ) { ?>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select name="area" class="selectpicker" data-live-search="false" data-live-search-style="begins">
                                    <?php
                                    // All Option
                                    echo '<option value="">'.$houzez_local['all_areas'].'</option>';

                                    $prop_area = get_terms (
                                        array(
                                            "property_area"
                                        ),
                                        array(
                                            'orderby' => 'name',
                                            'order' => 'ASC',
                                            'hide_empty' => true,
                                            'parent' => 0
                                        )
                                    );
                                    houzez_hirarchical_options('property_area', $prop_area, $area );
                                    ?>
                                </select>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group az-text1">
                                <select name="price_type" class="selectpicker az-text1" data-live-search="false" data-live-search-style="begins">
                                    <option value="fave_property_price">Цена продажи</option>
                                    <option value="price_day">Цена по дням</option>
                                    <option value="price_week">Цена по неделям</option>
                                    <option value="price_month">Цена по месяцам</option>
                                    <option value="price_longterm">Цена на 6+</option>
                                    <option value="price_spec">Цена спец</option>
                                </select>
                            </div>
                        </div>

                        <!-- <input type="hidden" name="status" value="<?php //the_title(); ?>"> -->
                        <?php if( $adv_show_hide['status'] != 1 ) { ?>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <?php //echo $status; ?>
                                <select class="selectpicker" name="status" data-live-search="false" data-live-search-style="begins">
                                    <?php
                                    // All Option
                                    echo '<option value="">'.$houzez_local['all_status'].'</option>';

                                    $prop_status = get_terms (
                                        array(
                                            "property_status"
                                        ),
                                        array(
                                            'orderby' => 'name',
                                            'order' => 'ASC',
                                            'hide_empty' => false,
                                            'parent' => 0
                                        )
                                    );
                                    houzez_hirarchical_options('property_status', $prop_status, $status );
                                    ?>
                                </select>

                            </div>
                        </div>
                        <?php } else { ?>
                            <div style="display: none;">
                                <select name="status">
                                    <option value="<?=$status?>"><?=$status?></option>
                                </select>
                            </div>
                            <!-- <input type="hidden" name="status" value="<?=$status?>"> -->
                        <?php } ?>


                        <?php if( $adv_show_hide['type'] != 1 ) { ?>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker" name="type" data-live-search="false" data-live-search-style="begins">
                                    <?php
                                    // All Option
                                    echo '<option value="">'.$houzez_local['all_types'].'</option>';

                                    $prop_type = get_terms (
                                        array(
                                            "property_type"
                                        ),
                                        array(
                                            'orderby' => 'name',
                                            'order' => 'ASC',
                                            'hide_empty' => false,
                                            'parent' => 0
                                        )
                                    );
                                    houzez_hirarchical_options('property_type', $prop_type, $type );
                                    ?>
                                </select>
                            </div>
                        </div>
                        <?php } ?>

                        <?php if( $adv_show_hide['beds'] != 1 ) { ?>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select name="bedrooms" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="">
                                    <option value=""><?php echo $houzez_local['bedrooms']; ?></option>
                                    <?php houzez_number_list('bedrooms'); ?>
                                </select>
                            </div>
                        </div>
                        <?php } ?>

                        <?php if( $adv_show_hide['baths'] != 1 ) { ?>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select name="bathrooms" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="">
                                    <option value=""><?php echo $houzez_local['bathrooms']; ?></option>
                                    <?php houzez_number_list('bathrooms'); ?>
                                </select>
                            </div>
                        </div>
                        <?php } ?>
                    
                

                        <?php if( $adv_show_hide['min_area'] != 1 ) { ?>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <input type="text" class="form-control" value="<?php echo isset ( $_GET['min-area'] ) ? $_GET['min-area'] : ''; ?>" name="min-area" placeholder="<?php echo $houzez_local['min_area']; ?>">
                            </div>
                        </div>
                        <?php } ?>

                        <?php if( $adv_show_hide['max_area'] != 1 ) { ?>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <input type="text" class="form-control" value="<?php echo isset ( $_GET['max-area'] ) ? $_GET['max-area'] : ''; ?>" name="max-area" placeholder="<?php echo $houzez_local['max_area']; ?>">
                            </div>
                        </div>
                        <?php } ?>

                        <?php if( $adv_show_hide['date_field'] != 1 ) { ?>
                        <div class="col-md-3 col-sm-6 col-xs-6 sech_avl_date">
                            <div class="form-group">
                                <div class="input-calendar input-icon input-icon-right">
                                    <input name="publish_date" class="form-control search-date" placeholder="<?php echo $houzez_local['available_from']; ?>" type="text">
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <?php if( $adv_search_price_slider != 0 ) { ?>
                            <?php if( $adv_show_hide['price_slider'] != 1 ) { ?>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="range-advanced-main">
                                            <div class="range-text">
                                                <?php //isset($min_price)?'value="'.$min_price.'"':'' ?>
                                                <input type="hidden" name="min-price" class="min-price-range-hidden range-input" readonly />
                                                <?php //isset($max_price)?'value="'.$max_price.'"':'' ?>
                                                <input type="hidden" name="max-price" class="max-price-range-hidden range-input" readonly >
                                                <p><span class="range-title"><?php echo $houzez_local['price_range'];?></span> <?php echo $houzez_local['from']; ?> <span class="min-price-range"></span> <?php echo $houzez_local['to']; ?> <span class="max-price-range"></span></p>
                                            </div>
                                            <div class="range-wrap">
                                                <div class="price-range-advanced"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        <?php } else { ?>

                            <?php if( $adv_show_hide['min_price'] != 1 ) { ?>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-group prices-for-all">
                                        <select name="min-price" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="">
                                            <option value=""><?php echo $houzez_local['min_price']; ?></option>
                                            <?php houzez_min_price_list(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group hide prices-only-for-rent">
                                        <select name="min-price" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="">
                                            <option value=""><?php echo $houzez_local['min_price']; ?></option>
                                            <?php houzez_min_price_list_for_rent(); ?>
                                        </select>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if( $adv_show_hide['max_price'] != 1 ) { ?>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-group prices-for-all">
                                        <select name="max-price" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="">
                                            <option value=""><?php echo $houzez_local['max_price']; ?></option>
                                            <?php houzez_max_price_list() ?>
                                        </select>
                                    </div>
                                    <div class="form-group hide prices-only-for-rent">
                                        <select name="max-price" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="">
                                            <option value=""><?php echo $houzez_local['max_price']; ?></option>
                                            <?php houzez_max_price_list_for_rent() ?>
                                        </select>
                                    </div>
                                </div>
                            <?php } ?>

                        <?php } ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
                            <button type="submit" id="half_map_update" class="btn btn-primary btn-block"><?php echo esc_html__('Update', 'houzez'); ?></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="height: 335px;">
                    <div class="ls-absol2">
                    <div class="phuket-map">
                    <div class="phuket-map-inner">
                        <div class="phuket-district p-dist1">
                            <input id="Mai Khao" title="Mai Khao" type="checkbox" name="area[]" value="Mai Khao" <?=in_array("Mai Khao", $area)||in_array("mai-khao", $area)?'checked="checked"':''?>/>
                            <label for="Mai Khao">Mai Khao</label>
                        </div>
                        <div class="phuket-district p-dist2">
                            <input id="Nai Yang" title="Nai Yang" type="checkbox" name="area[]" value="Nai Yang" <?=in_array("Nai Yang", $area)||in_array("nai-yang", $area)?'checked="checked"':''?>/>
                            <label for="Nai Yang">Nai Yang</label>
                        </div>
                        <div class="phuket-district p-dist3">
                            <input id="Nai Thon" title="Nai Thon" type="checkbox" name="area[]" value="Nai Thon" <?=in_array("Nai Thon", $area)||in_array("nai-thon", $area)?'checked="checked"':''?>/>
                            <label for="Nai Thon">Nai Thon</label>
                        </div>
                        <div class="phuket-district p-dist4">
                            <input id="Layan" title="Layan" type="checkbox" name="area[]" value="Layan" <?=in_array("Layan", $area)||in_array("layan", $area)?'checked="checked"':''?>/>
                            <label for="Layan">Layan</label>
                        </div>
                        <div class="phuket-district p-dist5">
                            <input id="Bang Tao" title="Bang Tao" type="checkbox" name="area[]" value="Bang Tao" <?=in_array("Bang Tao", $area)||in_array("bang-tao", $area)?'checked="checked"':''?>/>
                            <label for="Bang Tao">Bang Tao</label>
                        </div>
                        <div class="phuket-district p-dist6">
                            <input id="Surin" title="Surin" type="checkbox" name="area[]" value="Surin" <?=in_array("Surin", $area)||in_array("surin", $area)?'checked="checked"':''?>/>
                            <label for="Surin">Surin</label>
                        </div>
                        <div class="phuket-district p-dist7">
                            <input id="Kamala" title="Kamala" type="checkbox" name="area[]" value="Kamala" <?=in_array("Kamala", $area)||in_array("kamala", $area)?'checked="checked"':''?>/>
                            <label for="Kamala">Kamala</label>
                        </div>
                        <div class="phuket-district p-dist8">
                            <input id="Patong" title="Patong" type="checkbox" name="area[]" value="Patong" <?=in_array("Patong", $area)||in_array("patong", $area)?'checked="checked"':''?>/>
                            <label for="Patong">Patong</label>
                        </div>
                        <div class="phuket-district p-dist9">
                            <input id="Karon" title="Karon" type="checkbox" name="area[]" value="Karon" <?=in_array("Karon", $area)||in_array("karon", $area)?'checked="checked"':''?>/>
                            <label for="Karon">Karon</label>
                        </div>
                        <div class="phuket-district p-dist10">
                            <input id="Kata" title="Kata" type="checkbox" name="area[]" value="Kata" <?=in_array("Kata", $area)||in_array("kata", $area)?'checked="checked"':''?>/>
                            <label for="Kata">Kata</label>
                        </div>
                        <div class="phuket-district p-dist11">
                            <input id="Kata Noi" title="Kata Noi" type="checkbox" name="area[]" value="Kata Noi" <?=in_array("Kata Noi", $area)||in_array("kata-noi", $area)?'checked="checked"':''?>/>
                            <label for="Kata Noi">Kata Noi</label>
                        </div>
                        <div class="phuket-district p-dist12">
                            <input id="Nai Harn" title="Nai Harn" type="checkbox" name="area[]" value="Nai Harn" <?=in_array("Nai Harn", $area)||in_array("nai-harn", $area)?'checked="checked"':''?>/>
                            <label for="Nai Harn">Nai Harn</label>
                        </div>
                        <div class="phuket-district p-dist13">
                            <input id="Kathu" title="Kathu" type="checkbox" name="area[]" value="Kathu" <?=in_array("Kathu", $area)||in_array("kathu", $area)?'checked="checked"':''?>/>
                            <label for="Kathu">Kathu</label>
                        </div>
                        <div class="phuket-district p-dist14">
                            <input id="Phuket Town" title="Phuket Town" type="checkbox" name="area[]" value="Phuket Town" <?=in_array("Phuket Town", $area)||in_array("phuket-town", $area)?'checked="checked"':''?>/>
                            <label for="Phuket Town">Phuket Town</label>
                        </div>
                        <div class="phuket-district p-dist15">
                            <input id="Rawai" title="Rawai" type="checkbox" name="area[]" value="Rawai" <?=in_array("Rawai", $area)||in_array("rawai", $area)?'checked="checked"':''?>/>
                            <label for="Rawai">Rawai</label>
                        </div>
                        <div class="phuket-district p-dist16">
                            <input id="Panwa" title="Panwa" type="checkbox" name="area[]" value="Panwa" <?=in_array("Panwa", $area)||in_array("panwa", $area)?'checked="checked"':''?>/>
                            <label for="Panwa">Panwa</label>
                        </div>
                        <div class="phuket-district p-dist17">
                            <input id="East" title="East" type="checkbox" name="area[]" value="East" <?=in_array("East", $area)||in_array("east", $area)?'checked="checked"':''?>/>
                            <label for="East">East</label>
                        </div>
                        <div class="phuket-district p-dist18">
                            <input id="Talang" title="Talang" type="checkbox" name="area[]" value="Talang" <?=in_array("Talang", $area)||in_array("talang", $area)?'checked="checked"':''?>/>
                            <label for="Talang">Talang</label>
                        </div>
                        <div class="phuket-district p-dist19">
                            <input id="Cherng Talay" title="Cherng Talay" type="checkbox" name="area[]" value="Cherng Talay" <?=in_array("Cherng Talay", $area)||in_array("cherng-talay", $area)?'checked="checked"':''?>/>
                            <label for="Cherng Talay">Cherng Talay</label>
                        </div>
                        <div class="phuket-district p-dist20">
                            <input id="Chalong" title="Chalong" type="checkbox" name="area[]" value="Chalong" <?=in_array("Chalong", $area)||in_array("chalong", $area)?'checked="checked"':''?>/>
                            <label for="Chalong">Chalong</label>
                        </div>
                        <div class="phuket-district p-dist21">
                            <input id="Phang Nga" title="Phang Nga" type="checkbox" name="area[]" value="Phang Nga" <?=in_array("Phang Nga", $area)||in_array("phang-nga", $area)?'checked="checked"':''?>/>
                            <label for="Phang Nga">Phang Nga</label>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        
            <?php if( $adv_show_hide['other_features'] != 1 ) { ?>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <label class="advance-trigger"><i class="fa fa-plus-square"></i> <?php echo $houzez_local['other_feature']; ?> </label>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div class="features-list field-expand">
                            <div class="clearfix"></div>
                            <?php get_template_part('template-parts/advanced-search/search-features'); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="row">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                    <button type="submit" id="half_map_update" class="btn btn-primary btn-block"><?php echo esc_html__('Update', 'houzez'); ?></button>
                </div>
            </div>
        </div>
    </form>
</div>