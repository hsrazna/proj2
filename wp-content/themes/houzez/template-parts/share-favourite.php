<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 17/12/15
 * Time: 4:47 PM
 */
global $ls_en_ru, $ls_cats, $type_to_icon, $area_en_ru;
$ls_property = get_post_meta(get_the_id(), 'additional_features', true);
$ls_terms = get_the_terms(get_the_id(), $ls_cats['type']);


global $post, $prop_images, $houzez_local, $current_page_template, $taxonomy_name;
$disable_favorite = houzez_option('disable_favorite');
$disable_compare = houzez_option('disable_compare');
?>
<ul class="actions az-actions">
  <?php if ( qtrans_getLanguage() == 'en' ) {?>
  <?php foreach ($ls_property as $ls_property_value): ?>
    <?php if($ls_property_value['fave_additional_feature_title'] == $ls_en_ru['code_id']): ?>
      <li class="az-text1">
        <?=$ls_property_value['fave_additional_feature_value']?>
      </li>
    <?php elseif($ls_property_value['fave_additional_feature_title'] == $ls_en_ru['area']): ?>
      <li class="az-text1">
        <?=$ls_property_value['fave_additional_feature_value']?>
      </li class="az-text1">
    <?php endif; ?>
  <?php endforeach; ?>
  <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
  <?php foreach ($ls_property as $ls_property_value): ?>
    <?php if($ls_property_value['fave_additional_feature_title'] == $ls_en_ru['code_id']): ?>
      <li class="az-text1">
        <?=$ls_property_value['fave_additional_feature_value']?>
      </li>
    <?php elseif($ls_property_value['fave_additional_feature_title'] == $ls_en_ru['area']): ?>
      <li class="az-text1">
        <?=$area_en_ru[$ls_property_value['fave_additional_feature_value']]?>
      </li class="az-text1">
    <?php endif; ?>
  <?php endforeach; ?>
  <?php } ?>
  
</ul>
<!-- <div class="clearfix"></div> -->
<ul class="actions">

    <?php foreach ($ls_terms as $ls_terms_value): ?>
        <li>
          <span data-toggle="tooltip" data-placement="top" data-original-title="<?php echo $ls_terms_value->name; ?>"><?= $type_to_icon[$ls_terms_value->name] ?></span>
        </li>
    <?php endforeach; ?>

    <?php if( $disable_favorite != 0 ) { ?>
    <li>
        <span data-placement="top" data-toggle="tooltip" data-original-title="<?php echo $houzez_local['favorite']; ?>">
            <?php get_template_part( 'template-parts/favorite' ); ?>
        </span>
    </li>
    <?php } ?>

        <?php get_template_part( 'template-parts/share' ); ?>

    <li>
        <span data-toggle="tooltip" data-placement="top" title="(<?php echo count( $prop_images ); ?>) <?php echo $houzez_local['photos']; ?>">
            <i class="fa fa-camera"></i>
        </span>
    </li>
    <?php if( $disable_compare != 0 ) { ?>
    <li>
        <span id="compare-link-<?php echo esc_attr( $post->ID ); ?>" class="compare-property" data-propid="<?php echo esc_attr( $post->ID ); ?>" data-toggle="tooltip" data-placement="top" title="<?php esc_html_e( 'Compare', 'houzez' ); ?>">
            <i class="fa fa-plus"></i>
        </span>
    </li>
    <?php } ?>
</ul>
