<?php if(!defined('ABSPATH') || !defined('INBOUNDROCKET_PATH')) die('Security');

$rule_options = array(
	'' => __( "Select a condition", 'inbound-rocket' ),
	'everywhere' 	=> __( 'everywhere', 'inbound-rocket' ),
	'is_page' 		=> __( 'if page is', 'inbound-rocket' ),
	'is_single' 	=> __( 'if post is', 'inbound-rocket' ),
	'is_post_in_category' => __( 'if is post in category', 'inbound-rocket' ),
	'is_post_type' 	=> __( 'if post type is', 'inbound-rocket' ),	
);

$irsb_box_positions = array(
	'' => __( "Select box position", 'inbound-rocket' ),
	'top-left' 		=> __( 'Top Left', 'inbound-rocket' ),
	'top-right' 	=> __( 'Top Right', 'inbound-rocket' ),
	'middle' 		=> __( 'Middle', 'inbound-rocket' ),
	'bottom-left' 	=> __( 'Bottom Left', 'inbound-rocket' ),
	'bottom-right' 	=> __( 'Bottom Right', 'inbound-rocket' ),	
);
?>
<table class="form-table">	
	<tr valign="top">
		<th><label><?php _e( 'Box Position', 'inbound-rocket' ); ?></label></th>
		<td>
			<select id="ir-sb-position" name="ir-sb[css][position]" class="widefat">
			<?php foreach( $irsb_box_positions as $value => $position ) { ?>					
		    	<option value="<?=$value?>" <?php echo selected( $option['css']['position'], $value )?>><?=$position?></option>
		    <?php } ?>
		  	</select>
		</td>
		<td colspan="2"></td>
	</tr>
    
	<tr valign="top">
		<th><label><?php _e( 'Animation', 'inbound-rocket' ); ?></label></th>
		<td colspan="3">
			<label><input type="radio" name="ir-sb[animation]" value="fade" <?php checked($option['animation'], 'fade'); ?> /> <?php _e( 'Fade In', 'inbound-rocket' ); ?></label> &nbsp;
			<label><input type="radio" name="ir-sb[animation]" value="slide" <?php checked($option['animation'], 'slide'); ?> /> <?php _e( 'Slide In', 'inbound-rocket' ); ?></label>
			<p class="help"><?php _e( 'Which animation type should be used to show the box?', 'inbound-rocket' ); ?></p>
		</td>
	</tr>

	<tr valign="top">
		<th><label><?php _e( 'Enable test mode?', 'inbound-rocket' ); ?></label></th>
		<td colspan="3">
			<label><input type="radio" name="ir-sb[test_mode]" value="1" <?php checked( $option['test_mode'], 1 ); ?> /> <?php _e( 'Yes', 'inbound-rocket' ); ?></label> &nbsp;
			<label><input type="radio" name="ir-sb[test_mode]" value="0" <?php checked( $option['test_mode'], 0 ); ?> /> <?php _e( 'No', 'inbound-rocket' ); ?></label> &nbsp;
			<p class="help"><?php _e( 'If test mode is enabled, this box will show up regardless of whether a cookie has been set.', 'inbound-rocket' ); ?></p>
		</td>
	</tr>
	
	<tr valign="top">
		<th><label for="ir-sb-cookie"><?php _e( 'Cookie expiration days', 'inbound-rocket' ); ?></label></th>
		<td colspan="3">
			<input type="number" id="ir-sb-cookie" name="ir-sb[cookie_exp]" min="0" step="1" value="<?php echo esc_attr($option['cookie_exp']); ?>" />
			<p class="help"><?php _e( 'After closing the box, how many days should it stay hidden?', 'inbound-rocket' ); ?></p>
		</td>
	</tr>
	
	<tr valign="top">
		<th><label><?php _e( 'Show Box', 'inbound-rocket' ); ?></label></th>
		<td colspan="3">
	    	<label><input type="radio" class="ir-sb-auto-show" name="ir-sb[auto_show]" value="" <?php checked( $option['auto_show'], '' ); ?> /> <?php _e( 'Matching custom rules', 'inbound-rocket' ); ?></label><br />
			<label><input type="radio" class="ir-sb-auto-show" name="ir-sb[auto_show]" value="instant" <?php checked( $option['auto_show'], 'instant' ); ?> /> <?php _e( 'Immediately after loading the page.', 'inbound-rocket' ); ?></label><br />
			<label><input type="radio" class="ir-sb-auto-show" name="ir-sb[auto_show]" value="percentage" <?php checked( $option['auto_show'], 'percentage' ); ?> /> <?php printf( __( 'When at %s of page height', 'inbound-rocket' ), '<input type="number" name="ir-sb[auto_show_percentage]" min="0" max="100" value="' . esc_attr( $option['auto_show_percentage'] ) . '" />%' ); ?></label><br />
			<label><input type="radio" class="ir-sb-auto-show" name="ir-sb[auto_show]" value="element" <?php checked( $option['auto_show'], 'element' ); ?> /> <?php printf( __( 'When at element %s', 'inbound-rocket' ), '<input type="text" name="ir-sb[auto_show_element]" value="' . esc_attr( $option['auto_show_element'] ) . '" placeholder="' . __( 'Example: #comments', 'inbound-rocket') .'" />' ); ?></label>
		</td>
	</tr>
    
    <tbody id="ir-sb-auto-show-options" style="display:table-row-group;">
		<tr valign="top">
			<th><label><?php _e( 'Auto-hide?', 'inbound-rocket' ); ?></label></th>
			<td colspan="2">
				<label><input type="radio" name="ir-sb[auto_hide]" value="1" <?php checked( $option['auto_hide'], 1 ); ?> /> <?php _e( 'Yes', 'inbound-rocket' ); ?></label> &nbsp;
				<label><input type="radio" name="ir-sb[auto_hide]" value="0" <?php checked( $option['auto_hide'], 0 ); ?> /> <?php _e( 'No', 'inbound-rocket' ); ?></label> &nbsp;
				<p class="help"><?php _e( 'Hide box again when visitors scroll back up?', 'inbound-rocket' ); ?></p>
    		</td>
  		</tr>
  
  		<tr valign="top">
  			<th><label><?php _e( 'Do not auto-show box on small screens?', 'inbound-rocket' ); ?></label></th>
  			<td colspan="2">
  				<p><?php printf( __( 'Do not auto-show on screens smaller than %s.', 'inbound-rocket' ), '<input type="number" min="0" name="ir-sb[hide_on_screen_size]" value="' . esc_attr( $option['hide_on_screen_size'] ) . '" style="max-width: 50px;" />px' ); ?></p>
  				<p class="help"><?php _e( 'Set to <code>0</code> if you <strong>do</strong> want to auto-show the box on small screens.', 'inbound-rocket' ); ?></p>
      		</td>
  		</tr>
   	</tbody>
   
   	<tbody id="ir-sb-custom-rules-options" style="display:table-row-group;">
   		<tr valign="top">
   			<th><label><?php _e( 'Custom Rules', 'inbound-rocket' ); ?></label></th>
   			<td colspan="3">
   				<?php _e( 'Request matches', 'inbound-rocket' ); ?>
   				<select name="ir-sb[rule_matches]">
   					<option value="any" <?php selected( $option['rule_matches'], 'any' ); ?>><?php _e( 'any', 'inbound-rocket' ); ?></option>
   					<option value="all" <?php selected( $option['rule_matches'], 'all' ); ?>><?php _e( 'all', 'inbound-rocket' ); ?></option>
        		</select>
				<?php _e( 'of the following conditions.', 'inbound-rocket' ); ?>
      		</td>
		</tr>
   	</tbody>
	
	<tbody id="ir-sb-box-rules" style="display:table-row-group;">
	<?php
		$key = 0;
		foreach( $option['rules'] as $rule ) {
			if( ! array_key_exists( 'condition', $rule ) ) { continue; }
	?>
		<tr valign="top" class="ir-sb-rule-row ir-sb-rule-row-<?php echo $key; ?>">
			<th style="text-align: right; font-weight: normal;">
				<span class="ir-sb-close ir-sb-remove-rule"><span class="dashicons dashicons-dismiss"></span></span>
			</th>
			<td class="ir-sb-col-sm">
				<select id="ir-sb-rule-condition" class="widefat ir-sb-rule-condition" name="ir-sb[rules][<?php echo $key; ?>][condition]">					
					<?php foreach( $rule_options as $value => $label ) { ?>							
                    	<option value="<?=$value?>" <?php selected( $rule['condition'], $value ); ?>><?=$label?></option>
                    <?php } ?>					
				</select>
			</td>
			<td colspan="2">
				<input class="widefat ir-sb-rule-value" name="ir-sb[rules][<?php echo $key; ?>][value]" type="text" value="<?php echo esc_attr( $rule['value'] ); ?>" placeholder="<?php _e( 'Leave empty for any or enter (comma-separated) names or ID\'s', 'inbound-rocket' ); ?>" style="<?php if( in_array( $rule['condition'], array( '', 'everywhere' ) ) ) { echo 'display: none;'; } ?>" />
			</td>
		</tr>
		
	<?php $key++; } ?>
	</tbody>
	
	<tbody id="ir-sb-box-rules-button" style="display:table-row-group;">
		<tr>
			<th></th>
			<td colspan="3"><button type="button" class="button ir-sb-add-rule"><?php _e( 'Add rule', 'inbound-rocket' ); ?></button></td>
		</tr>
	</tbody>	
</table>