jQuery( document ).ready(function($) {
	jQuery( '.ir-sb-color-field' ).wpColorPicker();
	
	displayAdditionalOptions();
	jQuery(".ir-sb-auto-show").change(function () {
		displayAdditionalOptions();       
    });
	
	var optionControls = document.getElementById('ir-scroll-box-options-controls');
	var $optionControls = jQuery(optionControls);
	$optionControls.on('change', "#ir-sb-rule-condition", setContextualHelpers);
});

function setContextualHelpers() {
	var context = ( this.tagName.toLowerCase() === "tr" ) ? this : jQuery(this).parents('tr').get(0);
	var condition = context.querySelector('.ir-sb-rule-condition').value;
	var valueInput = context.querySelector('input.ir-sb-rule-value');
	var betterInput = valueInput.cloneNode(true);
	var $betterInput = jQuery(betterInput);

	// remove previously added helpers
	jQuery(context.querySelectorAll('.ir-sb-helper')).remove();

	// prepare better input
	betterInput.removeAttribute('name');
	betterInput.className += ' ir-sb-helper';
	valueInput.parentNode.insertBefore(betterInput, valueInput.nextSibling);
	betterInput.style.display = 'block';
	$betterInput.change(function() {
		valueInput.value = this.value; //.val(this.value);
	});

	valueInput.style.display = 'none';

	// change placeholder for textual help
	switch(condition) {
		default:
			betterInput.placeholder = 'Enter a comma-separated list of values.';
			break;

		case '':
		case 'everywhere':
			valueInput.value = '';
			betterInput.style.display = 'none';
			break;

		case 'is_single':
		case 'is_post':
			betterInput.placeholder = 'Enter a comma-separated list of post slugs or post ID\'s.';
			$betterInput.suggest(ajaxurl + "?action=stb_autocomplete&type=post", {multiple:true, multipleSep: ","});
			break;

		case 'is_page':
			betterInput.placeholder = 'Enter a comma-separated list of page slugs or page ID\'s.';
			$betterInput.suggest(ajaxurl + "?action=stb_autocomplete&type=page", {multiple:true, multipleSep: ","});
			break;

		case 'is_post_type':
			betterInput.placeholder = 'Enter a comma-separated list of post types.';
			$betterInput.suggest(ajaxurl + "?action=stb_autocomplete&type=post_type", {multiple:true, multipleSep: ","});
			break;

		case 'is_url':
			betterInput.placeholder = 'Enter a comma-separated list of relative URL\'s, eg /contact/';
			break;

		case 'is_post_in_category':
			$betterInput.suggest(ajaxurl + "?action=stb_autocomplete&type=category", {multiple:true, multipleSep: ","});
			break;

		case 'manual':
			betterInput.placeholder = '';
			manualHintElement.style.display = '';
			break;
	}		
}

function displayAdditionalOptions(){
	var radio_val = jQuery(".ir-sb-auto-show:checked").val();
	if (radio_val == "") {
		jQuery('#ir-sb-auto-show-options').css('display', 'none');
		jQuery('#ir-sb-custom-rules-options').css('display', 'table-row-group');
		jQuery('#ir-sb-box-rules').css('display', 'table-row-group');
		jQuery('#ir-sb-box-rules-button').css('display', 'table-row-group');
	} else if(radio_val == 'percentage' || radio_val == 'element' || radio_val == 'instant'){	
		jQuery('#ir-sb-auto-show-options').css('display', 'table-row-group');
		jQuery('#ir-sb-custom-rules-options').css('display', 'table-row-group');
		jQuery('#ir-sb-box-rules').css('display', 'table-row-group');
		jQuery('#ir-sb-box-rules-button').css('display', 'table-row-group');
	} else {
		jQuery('#ir-sb-auto-show-options').css('display', 'table-row-group');
		jQuery('#ir-sb-custom-rules-options').css('display', 'none');
		jQuery('#ir-sb-box-rules').css('display', 'none');
		jQuery('#ir-sb-box-rules-button').css('display', 'none');
	}
}

jQuery(window).load(function() {
	/*if( typeof( window.tinyMCE ) !== "object" || tinyMCE.get('content') === null ) {
		document.getElementById('notice-notinymce').style.display = 'block';
	}*/
	loadPreview();
	//showPreview();
});

function loadPreview(){
	
	var element =  document.getElementById('post_ID');
	if (typeof(element) === 'undefined' || element == null)
	{
		return;
	}
	
	var boxId = element.value || 0;

	// Only run if TinyMCE has actually inited
	if( typeof( window.tinyMCE ) !== "object" || tinyMCE.get('content') == null ) {
		return;
	}
	
	$editorFrame = jQuery("#content_ifr");
	$editor = $editorFrame.contents().find('html');
	$editor.css({
		'background': 'white'
	});
	
	$innerEditor = $editor.find('#tinymce');
	$innerEditor.addClass( 'ir-sb ir-sb-' + boxId );
		
	$innerEditor.get(0).style.cssText += ';padding: 25px !important;';	
	
	var editorContent = tinyMCE.get('content').getContent();
	if( editorContent !== ''){
	  var bg 	  = jQuery( "#ir-sb-background-color" ).val();
	  var color   = jQuery( "#ir-sb-text-color" ).val();
	  var width   = jQuery( "#ir-sb-width" ).val();
	  var bColor  = jQuery( "#ir-sb-border-color" ).val();
	  var bWidth  = jQuery( "#ir-sb-border-width" ).val();
	  var bStyle  = jQuery( "#ir-sb-border-style" ).val();
	  
	  $innerEditor.css({
		'margin': 0,
		'color': color, 
		'background-color': bg,
		'display': 'inline-block',
		'width': width,
		'position': 'relative',
		'border':  bWidth +'px '+ bStyle +' '+ bColor,
	  });
	  
	} else {
	
	  $innerEditor.css({
		'margin': 0,
		'color': 'black',
		'background': 'white',
		'display': 'inline-block',
		'width': 'auto',
		'min-width': '140px',
		'position': 'relative'
	  });
	}
	
	jQuery( "#ir-sb-background-color" ).on( "blur", function() {
		var bg = jQuery( this ).val();
		$innerEditor.css({ 'background-color': bg});
	});
	
	jQuery( "#ir-sb-text-color" ).on( "blur", function() {
		var color = jQuery( this ).val();
		$innerEditor.css({'color': color});
	});
	
	jQuery( "#ir-sb-border-color" ).on( "blur", function() {
		var bColor = jQuery( this ).val();
		$innerEditor.css({ 'border-color': bColor});
	});
	
	jQuery( "#ir-sb-width" ).on( "blur", function() {
		var width = jQuery( this ).val();
		$innerEditor.css({'width': width+'px'});
	});
	
	jQuery( "#ir-sb-border-width" ).on( "blur", function() {
		var bWidth = jQuery( this ).val();
		$innerEditor.css({'border-width': bWidth+'px'});
	});
	
	jQuery( "#ir-sb-border-style" ).on( "blur", function() {
		var bStyle = jQuery( this ).val();
		$innerEditor.css({'border-style': bStyle});
	});
	
	// create <style> element in <head>
	manualStyleEl = document.createElement('style');
	manualStyleEl.setAttribute('type','text/css');
	manualStyleEl.id = 'ir-sb-manual-css-style';
	
	var text = jQuery('#ir-sb-manual-css').val();	
	var manualStyle = document.createTextNode( text ); 
  	manualStyleEl.appendChild( manualStyle );	
	jQuery(manualStyleEl).appendTo($editor.find('head'));
}