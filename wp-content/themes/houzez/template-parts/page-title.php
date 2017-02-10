<?php
$active = houzez_option('search_result_posts_layout');
$search_result_layout = houzez_option('search_result_layout');
$months = ["01" => "Январь", "02" => "Февраль", "03" => "Март", "04" => "Апрель", "05" => "Май", "06" => "Июнь", "07" => "Июль", "08" => "Август", "09" => "Сентябрь", "10" => "Октябрь", "11" => "Ноябрь", "12" => "Декабрь" ];
?>
<div class="page-title breadcrumb-top">
    <div class="row">
        <div class="col-sm-12">
            <?php get_template_part( 'inc/breadcrumb' ); ?>
            <div class="page-title-left">
                <h1 class="title-head">
                <?php
                    if (is_category()) {
                        single_cat_title();

                    } elseif(is_tag()) {
                        single_tag_title();

                    } elseif (is_day()) {
                        printf( esc_html__( '%s', 'houzez' ), get_the_date() );

                    } elseif (is_month()) {
                        printf( esc_html__( '%s %s', 'houzez' ), $months[get_the_date( 'm' )], get_the_date( _x( 'Y', 'monthly archives date format', 'houzez' ) ) );

                    } elseif (is_year()) {
                        printf( esc_html__( '%s', 'houzez' ), get_the_date( _x( 'Y', 'yearly archives date format', 'houzez' ) ) );

                    } elseif ( get_post_format() ) {
                        echo get_post_format();

                    } elseif (is_author()) {
                        _e ( 'Author Archive', 'houzez' );
                    } elseif(is_tax()){
                        single_term_title();
                    }else {
                        if( !is_front_page() ) {
                            the_title();
                        }
                    }
                ?>
                </h1>
            </div>

            <?php if( is_page_template('template/template-search.php')) { ?>
            <div class="page-title-right">
                <div class="view hidden-xs">
                    <div class="table-cell">
                        <span class="view-btn btn-list <?php if( $active == 'list-view' ) { echo 'active'; }?>"><i class="fa fa-th-list"></i></span>
                        <span class="view-btn btn-grid <?php if( $active == 'grid-view' ) { echo 'active'; }?>"><i class="fa fa-th-large"></i></span>
                        <?php if( $search_result_layout == 'no-sidebar' ) { ?>
                            <span class="view-btn btn-grid-3-col <?php if( $active == 'grid-view-3-col' ) { echo 'active'; }?>"><i class="fa fa-th"></i></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>