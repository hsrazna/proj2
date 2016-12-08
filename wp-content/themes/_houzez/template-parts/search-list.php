<?php
global $houzez_search_data;
global $az_search_key;
if(is_user_logged_in()){
    $search_args = $houzez_search_data->query;
} else {
    $search_args = $houzez_search_data['query'];
}

$search_args_decoded = unserialize( base64_decode( $search_args ) );
// print_r($search_args_decoded);
?>
<div class="saved-search-block">
    <p><strong><?php esc_html_e( 'Search Parameters:', 'houzez' ); ?></strong></p>
    <p>
        <?php
        if( isset( $search_args_decoded['tax_query'] ) ) {
            foreach ($search_args_decoded['tax_query'] as $key => $val):

                if (isset($val['taxonomy']) && isset($val['terms']) && $val['taxonomy'] == 'property_city') {
                    $page = get_term_by('slug', $val['terms'], 'property_city');
                    if (!empty($page)) {
                        echo '<strong>' . esc_html__('Location', 'houzez') . ':</strong> ' . esc_attr( $page->name ). ', ';
                    }
                }

                if (isset($val['taxonomy']) && isset($val['terms']) && $val['taxonomy'] == 'property_type') {
                    $page = get_term_by('slug', $val['terms'], 'property_type');
                    if (!empty($page)) {
                        echo '<strong>' . esc_html__('Type', 'houzez') . ':</strong> ' . esc_attr( $page->name ). ', ';
                    }
                }

                if (isset($val['taxonomy']) && isset($val['terms']) && $val['taxonomy'] == 'property_status') {
                    $page = get_term_by('slug', $val['terms'], 'property_status');
                    if (!empty($page)) {
                        echo '<strong>' . esc_html__('Status', 'houzez') . ':</strong> ' . esc_attr( $page->name ). ', ';
                    }
                }

                if (isset($val['taxonomy']) && isset($val['terms']) && $val['taxonomy'] == 'property_area') {
                    // print_r($val['terms']);
                    if(is_array($val['terms'])){
                        echo '<strong>' . esc_html__('Neighborhood', 'houzez') . ':</strong> ';
                        foreach($val['terms'] as $az_term_val){
                            $page = get_term_by('slug', $az_term_val, 'property_area');
                            // print_r($page);
                            if (!empty($page)) {
                                echo esc_attr( $page->name ). ', ';
                            }
                        }
                    } else {
                        $page = get_term_by('slug', $val['terms'], 'property_area');
                        if (!empty($page)) {
                            echo '<strong>' . esc_html__('Neighborhood', 'houzez') . ':</strong> ' . esc_attr( $page->name ). ', ';
                        }
                    }
                }

                if (isset($val['taxonomy']) && isset($val['terms']) && $val['taxonomy'] == 'property_state') {
                    $page = get_term_by('slug', $val['terms'], 'property_state');
                    if (!empty($page)) {
                        echo '<strong>' . esc_html__('State', 'houzez') . ':</strong> ' . esc_attr( $page->name ). ', ';
                    }
                }

            endforeach;
        }

        $meta_query     = array();

        if ( isset( $search_args_decoded['meta_query'] ) ) :

            foreach ( $search_args_decoded['meta_query'] as $key => $value ) :

                if ( is_array( $value ) ) :

                    if ( isset( $value['key'] ) ) :

                        $meta_query[] = $value;

                    else :

                        foreach ( $value as $key => $value ) :

                            if ( is_array( $value ) ) :

                                foreach ( $value as $key => $value ) :

                                    if ( isset( $value['key'] ) ) :

                                        $meta_query[]     = $value;

                                    endif;

                                endforeach;

                            endif;

                        endforeach;

                    endif;

                endif;

            endforeach;

        endif;

        if( isset( $meta_query ) && sizeof( $meta_query ) !== 0 ) {
            foreach ( $meta_query as $key => $val ) :

                if (isset($val['key']) && $val['key'] == 'fave_property_bedrooms') {
                    echo '<strong>' . esc_html__('Bedrooms', 'houzez') . ':</strong> ' . esc_attr( $val['value'] ). ', ';
                }

                if (isset($val['key']) && $val['key'] == 'fave_property_bathrooms') {
                    echo '<strong>' . esc_html__('Bathrooms', 'houzez') . ':</strong> ' . esc_attr( $val['value'] ). ', ';
                }

                if (isset($val['key']) && $val['key'] == 'fave_property_price') {
                    echo '<strong>' . esc_html__('Price', 'houzez') . ':</strong> ' . esc_attr( $val['value'][0] ).' - '.esc_attr( $val['value'][1] ). ', ';
                }

                if (isset($val['key']) && $val['key'] == 'fave_property_size') {
                    echo '<strong>' . esc_html__('Size', 'houzez') . ':</strong> ' . esc_attr( $val['value'][0] ).' - '.esc_attr( $val['value'][1]). ', ';
                }

            endforeach;
        }
        ?>
    </p>
    <?php if(is_user_logged_in()){ ?>
    <button class="remove-search" data-propertyid='<?php echo intval($houzez_search_data->id); ?>'><i class="fa fa-remove"></i></button>
    <a class="btn btn-primary" href="<?php echo site_url().$houzez_search_data->url; ?>"><?php esc_html_e( 'Search', 'houzez' ); ?></a>
    <?php } else { ?>
    <button class="remove-search" data-propertyid='<?php echo intval($az_search_key); ?>'><i class="fa fa-remove"></i></button>
    <a class="btn btn-primary" href="<?php echo site_url().$houzez_search_data['url']; ?>"><?php esc_html_e( 'Search', 'houzez' ); ?></a>
    <?php } ?>
    
</div>