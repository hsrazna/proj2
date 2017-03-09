if (typeof ir_sb_box_js_options == 'object') {
	var boxesOptions = ir_sb_box_js_options;
		
	for (boxId in boxesOptions) {	
		var boxOptions = boxesOptions[boxId];
		
		var cookieName = 'ir_sb_'+boxId;
		var cookieExp  = boxOptions["cookie_exp"];
		var testMode   = ( parseInt(boxOptions["test_mode"]) == 1 ) ? true : false;
		
		var irsbBoxCookie = ( irsbGetCookie(cookieName) == 'true' ) ? true : false;
		
		if( !irsbBoxCookie || testMode ){
		  //console.log(boxOptions);
		  loadTheBox( boxId, boxOptions["animation"], boxOptions["autoShow"], boxOptions["autoShowPercentage"], boxOptions["autoShowElement"], boxOptions["autoHide"], boxOptions["hideScreenSize"], cookieName, cookieExp, testMode);
		}
	}
}

function irsbSetCookie(cname, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=true; " + expires;
}
function irsbGetCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}


function loadTheBox(boxID, animation, autoShow, autoShowPercent, autoShowElement, autoHide, hideOnScreenSize, cookieName, cookieExp, testMode){
	
	var selector = '.ir-sb-' + boxID;
  	var hideOnSc 		= parseInt(hideOnScreenSize);
	var autoShowPercent = parseInt(autoShowPercent);
	var windowWidth 	= jQuery(window).width();
	var windowHeight 	= jQuery(window).height();
	var documentHeight  = jQuery(document).height();

	if( hideOnSc >= 0 && hideOnSc <= windowWidth ) {
	  if( autoShow === 'instant' ){
		showBox(selector, animation);	
	  } else if( autoShow === 'percentage' ){
		jQuery( window ).scroll(function() {
		  var scrollPercent = 100 * jQuery(window).scrollTop() / ( documentHeight - windowHeight );
		  if( Math.round(scrollPercent) >= autoShowPercent ){
			showBox(selector, animation);
		  }
  
		  if( autoHide == "1" && Math.round(scrollPercent) < autoShowPercent){
			hideBox(selector, animation)
		  }
		});
	  } else if( autoShow === 'element' ){
		jQuery(document).scroll(function(){
		  if(jQuery(this).scrollTop()>=jQuery( autoShowElement ).position().top){
			  showBox(selector, animation);
		  }
		});
	  }

	  jQuery(selector +' .ir-sb-close').on('click', function(c){
		hideBox(selector, animation);
		
		if(cookieExp > 0 && testMode != true){
		 irsbSetCookie(cookieName, cookieExp);
		}	
		
	  });	
	}
}

function showBox(selector, animation){
	if(animation === 'fade')
		jQuery( selector ).fadeIn( 2000 );
	  else if (animation === 'slide')
		jQuery( selector ).slideDown( 2000 );
}

function hideBox(selector, animation){
	if(animation === 'fade')
	  jQuery( selector ).fadeOut( 2000 );
	else if (animation === 'slide')
	  jQuery( selector ).slideUp( 2000 );
}