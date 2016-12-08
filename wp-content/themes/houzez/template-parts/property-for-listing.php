<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 16/12/15
 * Time: 6:21 PM
 */
global $ls_en_ru ;
$ls_add = get_post_meta( get_the_ID(), 'additional_features', true );
$ls_beds = get_post_meta( get_the_ID(), 'fave_property_bedrooms', true );
$ls_title_temp = 'нет названия';
$ls_stars = 0;
$ls_date_check = '';
// $ls_price = ''
foreach ($ls_add as $ls_add_value) {
    if($ls_add_value['fave_additional_feature_title'] == $ls_en_ru["name2"])
        $ls_title_second = esc_attr( $ls_add_value['fave_additional_feature_value'] );
    if($ls_add_value['fave_additional_feature_title'] == $ls_en_ru["stars"])
        $ls_stars = (int)esc_attr( $ls_add_value['fave_additional_feature_value'] );
    if($ls_add_value['fave_additional_feature_title'] == $ls_en_ru["date_check"])
        $ls_date_check = esc_attr( $ls_add_value['fave_additional_feature_value'] );
}

global $post, $prop_images, $current_page_template;
$post_meta_data     = get_post_custom($post->ID);
$prop_images        = get_post_meta( get_the_ID(), 'fave_property_images', false );
$prop_address       = get_post_meta( get_the_ID(), 'fave_property_map_address', true );
$prop_featured      = get_post_meta( get_the_ID(), 'fave_featured', true );
$agent_display_option = get_post_meta( get_the_ID(), 'fave_agent_display_option', true );
$prop_agent_display = get_post_meta( get_the_ID(), 'fave_agents', true );
$infobox_trigger = '';

$prop_agent_num = $agent_num_call = $prop_agent = $prop_agent_link = $property_agent = '';
if( $prop_agent_display != '-1' && $agent_display_option == 'agent_info' ) {

    $prop_agent_ids = get_post_meta( $post->ID, 'fave_agents' );
    // remove invalid ids
    $prop_agent_ids = array_filter( $prop_agent_ids, function($v){
        return ( $v > 0 );
    });
    // remove duplicated ids
    $prop_agent_ids = array_unique( $prop_agent_ids );

    if ( ! empty( $prop_agent_ids ) ) {
        $agents_count = count( $prop_agent_ids );
        $listing_agent = array();
        foreach ( $prop_agent_ids as $agent ) {
            if ( 0 < intval( $agent ) ) {
                $agent_args = array();
                $agent_args[ 'agent_id' ] = intval( $agent );
                $agent_args[ 'agent_name' ] = get_the_title( $agent_args[ 'agent_id' ] );
                $agent_args[ 'agent_mobile' ] = get_post_meta( $agent_args[ 'agent_id' ], 'fave_agent_mobile', true );
                $agent_num_call = str_replace(array('(',')',' ','-'),'', $agent_args[ 'agent_mobile' ]);
                $agent_args[ 'agent_email' ] = get_post_meta( $agent_args[ 'agent_id' ], 'fave_agent_email', true );
                $agent_args[ 'link' ] = get_permalink($agent_args[ 'agent_id' ]);
                $listing_agent[] = houzez_get_agent_info( $agent_args, 'for_grid_list' );
            }
        }
    }

} elseif( $agent_display_option == 'author_info' ) {

    $listing_agent = array();
    $author_args = array();
    $author_args[ 'agent_name' ] = get_the_author();
    $author_args[ 'agent_mobile' ] = get_the_author_meta( 'fave_author_mobile' );
    $agent_num_call = str_replace(array('(',')',' ','-'),'', get_the_author_meta( 'fave_author_mobile' ));
    $author_args[ 'agent_email' ] = get_the_author_meta( 'email' );
    $author_args[ 'link' ] = get_author_posts_url( get_the_author_meta( 'ID' ) );

    $listing_agent[] = houzez_get_agent_info( $author_args, 'for_grid_list' );
}

if( is_page_template( 'template/property-listings-map.php' ) ) { $infobox_trigger = 'infobox_trigger_none'; }

?>

<div id="ID-<?php the_ID(); ?>" class="item-wrap <?php echo esc_attr( $infobox_trigger );?>">
    <div class="property-item table-list">
        <div class="table-cell">
            <div class="figure-block">
                <figure class="item-thumb">

                    <?php get_template_part( 'template-parts/featured-property' ); ?>

                    <div class="label-wrap label-right hide-on-list">
                        <?php
                            get_template_part('template-parts/listing', 'status' );
                        ?>
                    </div>

                    <!-- class  hide-on-list -->
                    <div class="price">
                    <!-- ajax puller -->
                    <?php global $price_type; ?>
                    <?php
                    if($price_type){
                        echo houzez_listing_price_v1($price_type);
                    } else {
                        echo houzez_listing_price_v1();
                    } ?>
                    <!-- ajax puller -->
                    </div>
                    <a class="hover-effect" href="<?php the_permalink() ?>">
                        <?php
                        if( has_post_thumbnail( $post->ID ) ) {
                            the_post_thumbnail( 'houzez-property-thumb-image' );
                        }else{
                            houzez_image_placeholder( 'houzez-property-thumb-image' );
                        }
                        ?>
                    </a>
                    <?php get_template_part( 'template-parts/share', 'favourite' ); ?>
                </figure>
            </div>
        </div>
        <div class="item-body table-cell az-rel">

            <div class="body-left table-cell">
                <div class="info-row">
                    <div class="label-wrap hide-on-grid">
                        <?php //get_template_part('template-parts/listing', 'status' ); ?>
                    </div>
                    <?php

                    echo '<h2 class="property-title"><a href="'.esc_url( get_permalink() ).'">'. esc_attr( get_the_title() ). '</a></h2>';

                    if( !empty( $ls_beds /*$prop_address*/ )) {
                        if ( qtrans_getLanguage() == 'en' ) {
                            echo '<address class="property-address az-text1">Beds: '.esc_attr( $ls_beds ).'</address>';
                        } elseif ( qtrans_getLanguage() == 'ru' ) {
                            echo '<address class="property-address az-text1">Количество спален: '.esc_attr( $ls_beds ).'</address>';                           
                        }
                    }
                    ?>
                </div>
                <div class="info-row amenities hide-on-grid">
                    <?php
                        for($i=0; $i<$ls_stars; $i++){
                            echo '<img src="'.get_template_directory_uri().'/images/az-star-yellow2.png" alt="">';
                        }
                    ?>
                    <?php //echo houzez_listing_meta_v1(); ?>
                    <p><?php //echo houzez_taxonomy_simple('property_type'); ?></p>
                </div>
                <div class="info-row amenities hide-on-grid">
                    <?php if($ls_date_check): ?>
                        <div class="az-stamp"><?=$ls_date_check?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="body-right table-cell hidden-gird-cell">
                <div class="info-row price"><?php //echo houzez_listing_price_v1(); ?></div>
                <div class="info-row phone text-right">
                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary"><?php esc_html_e( 'Details', 'houzez' ); ?> <i class="fa fa-angle-right fa-right"></i></a>
                </div>
            </div>

            <div class="table-list full-width hide-on-list">
                <?php
                    for($i=0; $i<$ls_stars; $i++){
                        echo '<img src="'.get_template_directory_uri().'/images/az-star-yellow2.png" alt="">';
                    }
                ?>
                <?php if($ls_date_check): ?>
                    <div class="az-stamp az-stamp_style"><?=$ls_date_check?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>