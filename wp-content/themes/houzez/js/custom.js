/*
 Theme Name: Houzez
 Description: Houzez
 Author: Houzez
 Author: Houzez
 Version: 1.0
 */
jQuery.fn.hasAttr = function(name) {  
   return this.attr(name) !== undefined;
};

var nice = false;
(function($){
"use strict";

/*ajax puller*/
    // alert($('body').html());
    $(document).ready(function(){
        // alert(1);
        
        
        var az_number = $(".az-number");
        if(az_number.length > 0){
            // alert(1);
            $(".az-number").TouchSpin({
              verticalbuttons: true,
              verticalupclass: 'glyphicon glyphicon-plus',
              verticaldownclass: 'glyphicon glyphicon-minus',
              step: 200,
              min: 0,
              max: 980000,
            });
        }

    });

    $('body').on('click','#az-post-saved-search', function(){
        var az_href = $(this).attr('href');
        $(this).prev('form').attr('action', az_href);
        $(this).prev('form').trigger('submit');
        return false;
    });
    

    $('body').on('click','a[rel^="method-post"]', function(){
        var az_post = $(this).attr('rel').split('-');
        var az_href = $(this).attr('href');
        var az_str = '';
        for (var i43 = 0; i43<az_post.length; i43+=2){
            az_str+='<input type="hidden" name="'+az_post[i43]+'" value="'+az_post[i43+1]+'" />';
        }
        $('.az-menu-post').attr('action', az_href);
        $('.az-menu-post').html(az_str);
        $('.az-menu-post').trigger('submit');
        return false;
    });
    
    $('input[name="area[]"]').click(function(){
        if($(this).hasAttr('checked')){
            $('input[name="area[]"][value="'+$(this).val()+'"]').attr('checked', 'checked');
        } else {
            $('input[name="area[]"][value="'+$(this).val()+'"]').removeAttr('checked');
        }
    });
    

    
    $('select[name="bedrooms"]').on('changed.bs.select', function(){
        $('select[name="bedrooms"]').val($(this).val());
        var az_temp_val = $(this).next('.bootstrap-select').find('.dropdown-menu li.selected').attr('data-original-index');
        $('select[name="bedrooms"]').next('.bootstrap-select').find('.dropdown-menu li').removeClass('selected');
        $('select[name="bedrooms"]').next('.bootstrap-select').find('.dropdown-menu li').each(function(){
            if($(this).attr('data-original-index') == az_temp_val){
                $(this).addClass('selected');
            }
        });
        var az_temp_text = $(this).next('.bootstrap-select').find('.filter-option').text();
        $('select[name="bedrooms"]').next('.bootstrap-select').find('.filter-option').text(az_temp_text);
        
    });


    $('body').on('click', '.ls-search .az-azsearch', function(){
        var ls_temp = $('.ls-search .az-azsearch').siblings('input[type="text"]');
        ls_temp.toggleClass('slide');
        if (ls_temp.hasClass('slide')){
            $(this).siblings('input[type="text"]').focus();
        } else {
            $(this).siblings('input[type="text"]').blur();
        }
       
    });


    /*languages*/
    var is_open = false;
    $('.qtranxs_widget li').click(function(){
        if($(this).hasClass('active') && is_open){
            $('.qtranxs_widget li:not(.active)').slideUp(300);
            is_open = false;
            return false;
        } else {
            $('.qtranxs_widget li').slideDown(300);
            if(!is_open){
                is_open = true;
                return false;
            }            
        }
    });
    // $(window).click(function(){
    //     if(is_open){
    //         $('.qtranxs_widget li:not(.active)').slideUp(300);
    //         is_open = false;
    //     }
    // });
    /*languages*/

/*ajax puller*/


    var houzez_rtl = HOUZEZ_ajaxcalls_vars.houzez_rtl;
    var houzez_date_language = HOUZEZ_ajaxcalls_vars.houzez_date_language;

    if( houzez_rtl == 'yes' ) {
        houzez_rtl = true;
    } else {
        houzez_rtl = false;
    }

    $('[data-toggle="popover"]').popover({
        trigger: "hover",
        html: true,
    });

    /* ------------------------------------------------------------------------ */
    /*  CHECK USER AGENTS
     /* ------------------------------------------------------------------------ */
    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);

    /* ------------------------------------------------------------------------ */
    /*  BODY LOAD
     /* ------------------------------------------------------------------------ */
    /*$(window).on('load',function(){
        jQuery('body').addClass('loaded');
    });*/

    if($( ".size-range-advanced").length >0) {
        $(".size-range-advanced").slider({
            range: true,
            min: 500,
            max: 5000,
            values: [500, 5000],
            slide: function (event, ui) {
                $(".min-size-range-hidden").val(ui.values[0] + " sqft");
                $(".max-size-range-hidden").val(ui.values[1] + " sqft");

                $(".min-size-range").text($(".size-range-advanced").slider("values", 0) + " sqft");
                $(".max-size-range").text($(".size-range-advanced").slider("values", 1) + " sqft");
            }
        });

        $(".min-size-range-hidden").val($(".size-range-advanced").slider("values", 0) + " sqft");
        $(".max-size-range-hidden").val($(".size-range-advanced").slider("values", 1) + " sqft");

        $(".min-size-range").text($(".size-range-advanced").slider("values", 0) + " sqft");
        $(".max-size-range").text($(".size-range-advanced").slider("values", 1) + " sqft");
    }

    /* ------------------------------------------------------------------------ */
    /*  MAP ZOOM
    /* ------------------------------------------------------------------------ */
    $('.map-zoom-actions #houzez-gmap-full').on('click',function () {
        if($(this).hasClass('active')== true){
            $(this).removeClass('active').children('span').text('Fullscreen');
            $(this).children('i').removeClass('fa-square-o').addClass('fa-arrows-alt');
            $('#houzez-gmap-main').removeClass('mapfull');
            $('.header-media').delay(1000).queue(function(next){
                $('.header-media').css('height','auto');
                next();
            });

        }else{
            $('.header-media').height($('#houzez-gmap-main').height());
            $(this).addClass('active').children('span').text('Default');
            $(this).children('i').removeClass('fa-arrows-alt').addClass('fa fa-square-o');
            $('#houzez-gmap-main').addClass('mapfull');
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  COMPARE PANEL
     /* ------------------------------------------------------------------------ */
    $('.panel-btn, .panel-btn-close').on('click',function () {
        if($('.compare-panel').hasClass('panel-open')){
            $('.compare-panel').removeClass('panel-open');
        }else{
            $('.compare-panel').addClass('panel-open');
        }
    });


    /* ------------------------------------------------------------------------ */
    /*  PAYPAL & Stripe OPTIONS
     /* ------------------------------------------------------------------------ */
// alert(1);
    $('.method-select input').on('change',function () {
        if($(this).is(':checked')) {
            $('.method-option').slideUp();
            $(this).parents('.method-row').next('.method-option').slideDown();
        }else{
            $('.method-option').slideUp();
        }
    });
    function paypal_option(ele){
        if($(ele).attr('checked')) {
            $(ele).parents('.method-row').next('.method-option').slideDown();
        }else{
            $(ele).parents('.method-row').next('.method-option').slideUp();
        }
    }

    paypal_option('.payment-paypal');
    paypal_option('.payment-stripe');

    $('button.stripe-button-el span').prepend('<i class="fa fa-credit-card"></i>');
    $('#stripe_package_recurring').click(function () {
        if( $(this).attr('checked') ) {
            $('#houzez_payment_form').append('<input type="hidden" name="houzez_stripe_recurring" id="houzez_stripe_recurring" value="1">');
        }else{
            $('#houzez_stripe_recurring').remove();
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  INPUT PLUS MINUS
     /* ------------------------------------------------------------------------ */
    $('.btn-number').click(function(e){
        e.preventDefault();

        var fieldName = $(this).attr('data-field');
        var type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {

                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function(){
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {

        var minValue =  parseInt($(this).attr('min'));
        var maxValue =  parseInt($(this).attr('max'));
        var valueCurrent = parseInt($(this).val());

        var name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }

    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  FUNCTION FOR TOUCH DEVICES
    /* ------------------------------------------------------------------------ */
    function isTouchDevice(){
        return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
    }

    /* ------------------------------------------------------------------------ */
    /*  IF HEADER OR SEARCH STICKY
     /* ------------------------------------------------------------------------ */
    var ifHeaderSticky = $('#header-section').data('sticky');
    var ifHeaderBottomSticky = $('#header-section .header-bottom').data('sticky');
    var ifAdvanceSearchSticky = $('.advance-search-header').data('sticky');
    var topBarLenght = $('.top-bar').length;

    var stickyHeaderH = $('#header-section').innerHeight();
    var stickyAdvanceSearchH = $('.advance-search-header').innerHeight();
    var stickyHeaderBottomH = $('#header-section .header-bottom').innerHeight();
    var topMargin = 0;

    if(ifHeaderSticky == 1){
        topMargin = stickyHeaderH;
    }
    if(ifAdvanceSearchSticky == 1){
        topMargin = stickyAdvanceSearchH;
    }
    if(ifHeaderBottomSticky == 1){
        topMargin = stickyHeaderBottomH;
    }
    if($('#header-section').hasClass('header-section-3')){
        topMargin = stickyHeaderBottomH;
    }
    if($('#header-section').hasClass('header-section-2')){
        topMargin = stickyHeaderBottomH;
    }

    $(document).ready(function() {
        var $wpAdminBar = $('#wpadminbar');
        if ($wpAdminBar.length) {
           topMargin = topMargin + ($wpAdminBar.outerHeight());
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  SCROLL TO TOP
     /* ------------------------------------------------------------------------ */
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrolltop-btn').show();
        } else {
            $('.scrolltop-btn').hide();
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  PROPERTY MENU TARGET NAV
     /* ------------------------------------------------------------------------ */
    var propertyMenuH = $('.property-menu-wrap').innerHeight();
    if($('.property-menu-wrap').length) {
        $(".target").each(function () {
            $(this).on('click', function (e) {
                var jump = $(this).attr("href");
                var scrollto = ($(jump).offset().top);
                scrollto = scrollto - (topMargin) - (propertyMenuH);
                $("html, body").animate({scrollTop: scrollto}, {duration: 1000, easing: 'easeInOutExpo', queue: false});
                e.preventDefault();
            });

        });

        $(window).on('scroll', function () {
            $('.target-block').each(function () {
                if ($(window).scrollTop() >= $(this).offset().top - (topMargin) - (propertyMenuH)) {
                    var id = $(this).attr('id');
                    $('.target').removeClass('active');
                    $('.target[href=#' + id + ']').addClass('active');
                } else if ($(window).scrollTop() <= 0) {
                    $('.target').removeClass('active');
                }
            });
        });

        //Target nav sticky
        $(window).on('scroll', function() {
            if($(window).scrollTop() >= $('.detail-media').offset().top + (200)) {
                $('.property-menu-wrap').css({top:topMargin}).fadeIn();
            }else if($(window).scrollTop() <= $('.detail-media').offset().top + (200)) {
                $('.property-menu-wrap').css({top:topMargin}).fadeOut();
            }
        });
    }

    $(".back-top").on('click',function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    /* ------------------------------------------------------------------------ */
    /*  One page smooth scroll
     /* ------------------------------------------------------------------------ */
    $(function() {
        $('#header-section a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    $('#commentform input.submit').addClass('btn btn-primary');
    $('.widget_nav_menu, .widget_pages').addClass('widget-pages');
    $('.footer-widget.widget_mc4wp_form_widget').addClass('widget-newsletter');

    $('.blog-article .pagination-main ul.pagination a').wrap('<li></li>');


    /* ------------------------------------------------------------------------ */
    /*  STICKY SIDEBAR
    /* ------------------------------------------------------------------------ */

   function property_menu_h(ele){
        var StickySidebarTop = topMargin;
        if($('.property-menu-wrap').length) {
            StickySidebarTop = ele + ($('.property-menu-wrap').innerHeight())
        }
        return StickySidebarTop;
    }

    $('.houzez_sticky').theiaStickySidebar({
        additionalMarginTop: property_menu_h(topMargin),
        minWidth: 768,
        updateSidebarHeight: false
    });


    /* ------------------------------------------------------------------------ */
    /*  NICE SCROLL
     /* ------------------------------------------------------------------------ */
    /*var nice = $("html").niceScroll({
     //cursorcolor: "#666",
     scrollspeed: 50,
     mousescrollstep: 30,
     //boxzoom: false,
     //autohidemode: false,
     cursorborder: "0 solid #666",
     //cursorborderradius: "0",
     cursorwidth: 6,
     //background: "#666",
     //horizrailenabled: false
     });*/

    if( $('#houzez_mortgage_calculate').length > 0 ) {
        $('#houzez_mortgage_calculate').click(function(e) {
            e.preventDefault();

            var monthly_payment = HOUZEZ_ajaxcalls_vars.monthly_payment;
            var weekly_payment = HOUZEZ_ajaxcalls_vars.weekly_payment;
            var bi_weekly_payment = HOUZEZ_ajaxcalls_vars.bi_weekly_payment;
            var currency_symb = HOUZEZ_ajaxcalls_vars.currency_symbol;

            var totalPrice  = 0;
            var down_payment = 0;
            var term_years  = 0;
            var interest_rate = 0;
            var amount_financed  = 0;
            var monthInterest = 0;
            var intVal = 0;
            var mortgage_pay = 0;
            var annualCost = 0;
            var payment_period;
            var mortgage_pay_text;


            payment_period = $('#mc_payment_period').val();

            totalPrice = $('#mc_total_amount').val();
            down_payment = $('#mc_down_payment').val();
            amount_financed = totalPrice - down_payment;
            term_years =  parseInt ($('#mc_term_years').val(),10) * payment_period;
            interest_rate = parseFloat ($('#mc_interest_rate').val(),10);
            monthInterest = interest_rate / (payment_period * 100);
            intVal = Math.pow( 1 + monthInterest, -term_years );
            mortgage_pay = amount_financed * (monthInterest / (1 - intVal));
            annualCost = mortgage_pay * payment_period;

            if( payment_period == '12' ) {
                mortgage_pay_text = monthly_payment;

            } else if ( payment_period == '26' ) {
                mortgage_pay_text = bi_weekly_payment;

            } else if ( payment_period == '52' ) {
                mortgage_pay_text = weekly_payment;

            }

            $('#mortgage_mwbi').html("<h3>"+mortgage_pay_text+ ":<span> " +currency_symb+ (Math.round(mortgage_pay * 100)) / 100 + "</span></h3>");

            $('#amount_financed').html(currency_symb+(Math.round(amount_financed * 100)) / 100);
            $('#mortgage_pay').html(currency_symb+(Math.round(mortgage_pay * 100)) / 100);
            $('#annual_cost').html(currency_symb+(Math.round(annualCost * 100)) / 100);
            $('#total_mortgage_with_interest').html();
            $('.morg-detail').show();
        });
    }

    /* ------------------------------------------------------------------------ */
    /*  HEADER STICKY
    /* ------------------------------------------------------------------------ */

        var header_main = $('#header-section').data('sticky');
        var header_inner = $('#header-section .header-bottom').data('sticky');
        var header_mobile = $('.header-mobile').data('sticky');
        //var get_header_class = $('#header-section').attr('class');



        if(header_inner == 1){
            this_sticky($('#header-section .header-bottom'));
        }
        if(header_main == 1){
            this_sticky($('#header-section'));
        }
        if(header_mobile == 1){
            this_sticky($('.header-mobile'));

            //get_header_class = $('.header-mobile').attr('class');
        }

        function this_sticky(ele){
            var header_position = ele.outerHeight();
            var sticky_nav = ele.clone().removeAttr('style');
            var get_header_class = sticky_nav.attr('class');

            if($(sticky_nav).hasClass('header-bottom')){
                get_header_class = $('.header-bottom').parent('#header-section').attr('class');
            }
            //alert(get_header_class);
            sticky_nav.removeClass('houzez-header-transparent hidden-sm hidden-xs visible-sm visible-xs');

            var sticky_wrap = $(sticky_nav).wrap("<div class='sticky_nav'></div>").parent().addClass(get_header_class);
            sticky_wrap = sticky_wrap.removeClass('houzez-header-transparent nav-left hidden-sm hidden-xs visible-sm visible-xs');

            $('body').append( sticky_wrap );

            if($(sticky_wrap).hasClass('header-section-4')) {
                $('.sticky_nav .logo-desktop img').attr('src',HOUZEZ_ajaxcalls_vars.simple_logo);
            }

            function fix_header(){

                if($('#wpadminbar').length > 0 && getWindowWidth() > 600) {
                    var admin_bar_height = $('#wpadminbar').outerHeight();
                    sticky_wrap.css( 'top', admin_bar_height );
                }else{
                    sticky_wrap.css( 'top', '0' );
                }
                if(getWindowWidth() > 991){
                    $('.sticky_nav.houzez-header-mobile').hide();
                }else{
                    $('.sticky_nav.houzez-header-main').hide();
                }
            }

            $(window).on('scroll', function(){
                if($('#wpadminbar').length > 0 && getWindowWidth() > 600) {
                    var admin_bar_height = $('#wpadminbar').outerHeight();
                    sticky_wrap.css( 'top', admin_bar_height );
                }
                if( $(window).scrollTop() >= ele.position().top + header_position ){
                    sticky_wrap.slideDown();
                }
                else{
                    sticky_wrap.fadeOut();
                }
            });

            fix_header();
            $(window).resize(function(){
                fix_header();
            });
        }

    /* ------------------------------------------------------------------------ */
    /*  ADVANCE SEARCH STICKY
    /* ------------------------------------------------------------------------ */
    function advancedSearchSticky() {
        if(getWindowWidth() > 991){
            var search = $('.advance-search-header');
            var thisHeight = $('.advance-search-header').outerHeight();
        }else{
            var search = $('.advanced-search-mobile');
            var thisHeight = $('.advanced-search-mobile').outerHeight();
        }
        if (!search.data('sticky')) {
            return;
        }

        if( $(".splash-search")[0] ) {
            var sr_sticky_top = $('.splash-search').offset().top;
            sr_sticky_top = sr_sticky_top + 200;
        } else {
            if(getWindowWidth() > 991){
                var sr_sticky_top = $('.advance-search-header').offset().top + 65;
            }else{
                var sr_sticky_top = $('.advanced-search-mobile').offset().top;
            }
        }

        if( sr_sticky_top == 0 ) {
            sr_sticky_top = $('#header-section').height();
        }

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            var admin_nav = $('#wpadminbar').height() + 'px';

            if( admin_nav == 'nullpx' ) { admin_nav = '0px'; }

            if (scroll >= sr_sticky_top ) {
                search.addClass("advanced-search-sticky");
                search.css('top', admin_nav);
                $('#section-body').css('padding-top',thisHeight);
            } else {
                search.removeClass("advanced-search-sticky");
                search.removeAttr("style");
                $('#section-body').css('padding-top',0);
            }
        });
    }
    advancedSearchSticky();

    /* ------------------------------------------------------------------------ */
    /*  Date picker
     /* ------------------------------------------------------------------------ */
    if($('.input_date').length > 0) {
        $( ".input_date" ).datepicker(jQuery.datepicker.regional[houzez_date_language]);
    }
    if($('.search-date').length > 0) {
        $( ".search-date" ).datepicker(jQuery.datepicker.regional[houzez_date_language]);
    }

    /* ------------------------------------------------------------------------
     /*  parallax
     ------------------------------------------------------------------------- */
    function parallax(){

        if($('.header-media .banner-parallax').length){
            var banner_distance = $('.header-media').offset().top;
            var start_scroll = banner_distance + 15;
            var scrolled = $(window).scrollTop() - start_scroll;
            if($(window).scrollTop() >= start_scroll){

                //$('.banner-inner').css('background-position-y', (scrolled*-0.9)+'px');
                $('.banner-bg-wrap').css("transform","translate3d(0,"+-scrolled*-0.3+"px,0)");
            }else if($(window).scrollTop() < start_scroll){
                $('.banner-bg-wrap').css("transform","translate3d(0,0px,0)");
            }
        }

    }
    parallax();
    $(window).scroll(function(e){
        parallax();
    });
    /* ------------------------------------------------------------------------ */
    /*  DETAIL LIGHT BOX SLIDE SHOW
     /* ------------------------------------------------------------------------ */
    if($("a[data-fancy^='property_video']").length > 0) {
        $("a[data-fancy^='property_video']").prettyPhoto({
            allow_resize: true,
            default_width: 1900,
            default_height: 1000,
            animation_speed: 'normal',
            theme: 'default',
            slideshow: 3000,
            autoplay_slideshow: false
        });
    }

    /* ------------------------------------------------------------------------ */
    /*  Properties filter on My properties dashboard
     /* ------------------------------------------------------------------------ */
    $("#property_name").keyup(function(){

        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;

        // Loop through the comment list
        $(".my-property-listing .item-wrap").each(function(){

            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();

                // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });

        // Update the count
        var numberItems = count;
        $(".my-property-search button").text(count);
    });

    /* ------------------------------------------------------------------------ */
    /*	SEARCH TABER
    /* ------------------------------------------------------------------------ */
    $('.banner-search-tabs .search-tab').on('click',function(){
        if($(this).hasClass('active')!=true){
            $('.banner-search-tabs .search-tab').removeClass('active');
            $(this).addClass('active');
            $('.banner-search-taber .tab-pane').removeClass('active in');
            $('.banner-search-taber .tab-pane').eq($(this).index()).addClass('active').delay(5).queue(function(next){
                $(this).addClass('in');
                next();
            });
        }
    });

    /* ------------------------------------------------------------------------ */
    /* DETAIL TABBER
    /* ------------------------------------------------------------------------ */
    $('.detail-tabs > li').on('click',function(){

        if($(this).hasClass('active')!=true){
            $('.detail-tabs > li').removeClass('active');
            $(this).addClass('active');
            $('.detail-content-tabber .tab-pane').removeClass('active in');
            $('.detail-content-tabber .tab-pane').eq($(this).index()).addClass('active in');
        }
    });

    /* ------------------------------------------------------------------------ */
    /* FLOOR PLAN TABBER
    /* ------------------------------------------------------------------------ */
    $('.plan-tabs > li').on('click',function(){

        if($(this).hasClass('active')!=true){
            $('.plan-tabs > li').removeClass('active');
            $(this).addClass('active');
            $('.plan-tabber .tab-pane').removeClass('active in');
            $('.plan-tabber .tab-pane').eq($(this).index()).addClass('active in');
        }
    });

    /* ------------------------------------------------------------------------ */
    /* MODULE TABER
     /* ------------------------------------------------------------------------ */
    $('.houzez-tabs > li').on('click',function(){
        if($(this).hasClass('active')!=true){
            $('.houzez-tabs > li').removeClass('active');
            $(this).addClass('active');
            $('.houzez-taber-body .tab-pane').removeClass('active in');
            $('.houzez-taber-body .tab-pane').eq($(this).index()).addClass('active').delay(50).queue(function(next){
                $(this).addClass('in');
                next();
            });
        }
    });

    /* ------------------------------------------------------------------------ */
    /* PROFILE DETAIL TABBER
    /* ------------------------------------------------------------------------ */
    $('.profile-tabs > li').on('click',function(){
        if($(this).hasClass('active')!=true){
            $('.profile-tabs > li').removeClass('active');
            $(this).addClass('active');
            $('.profile-tab-pane').removeClass('active in');
            $('.profile-tab-pane').eq($(this).index()).addClass('active in');
        }
    });

    /* ------------------------------------------------------------------------ */
    /*	LOGIN TABBER
    /* ------------------------------------------------------------------------ */
    function houzez_tabber(target){
        $(""+target+""+' .login-tabs > li').on('click',function(){
            if($(this).hasClass('active')!=true){
                $('.login-tabs > li').removeClass('active');
                $(this).addClass('active');
                //alert('ok');
                $(""+target+""+' .login-block .tab-pane').removeClass('in active');
                $(""+target+""+' .login-block .tab-pane').eq($(this).index()).addClass('in active');
            }
        });
    }
    houzez_tabber('.widget');
    houzez_tabber('.footer-widget');
    houzez_tabber('.modal');

    /* ------------------------------------------------------------------------ */
    /*  ACCORDIAN ADD PROPERTY
     /* ------------------------------------------------------------------------ */

    $('.add-title-tab > .add-expand').click(function() {
        $(this).toggleClass('active');
        $(this).parent().next('.add-tab-content').slideToggle();
    });


    /* ------------------------------------------------------------------------ */
    /*  ACCORDIAN
     /* ------------------------------------------------------------------------ */

    $('.accord-tab > .expand-icon').click(function() {
        if($(this).hasClass('active')!=true)
        {
            $('.accord-tab > .expand-icon').removeClass('active');
            $(this).addClass('active');

            $('.accord-tab > .expand-icon').parent().next('.accord-content').slideUp();
            $(this).parent().next('.accord-content').slideDown();

        }
    });

    /* ------------------------------------------------------------------------ */
    /*  MAP VIEW TABBER
     /* ------------------------------------------------------------------------ */
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.target // newly activated tab
        e.relatedTarget // previous active tab
    });

    /* ------------------------------------------------------------------------ */
    /*  Houzez simple map
     /* ------------------------------------------------------------------------ */
    var simple_map = $( '#houzez-simple-map' );
    if (simple_map.length) {
        var styles = simple_map.data( 'styles' );


        $('#mapTab').click(function() {
            document.getElementById('houzez-simple-map').style.display="block";
            initialize();
        })


        var map = null;
        var fenway = new google.maps.LatLng(simple_map.data( 'latitude' ), simple_map.data( 'longitude' ));
        var mapOptions = {
            center: fenway,
            zoom: simple_map.data( 'zoom' )
        };

        var initialize = function() {
            map = new google.maps.Map(document.getElementById('houzez-simple-map'), mapOptions);
            var myLatLng = {lat: simple_map.data( 'latitude' ), lng: simple_map.data( 'longitude' )};
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
            });
        }

    }

    /* ------------------------------------------------------------------------ */
    /*  BOOTSTRAP SELECT PICKER
     /* ------------------------------------------------------------------------ */
    if($('.selectpicker').length > 0){
        $('.selectpicker').selectpicker({
            dropupAuto: false,
        });
    }

    /* ------------------------------------------------------------------------ */
    /*  POST CARDS MASONRY
     /* ------------------------------------------------------------------------ */
    $(window).on('load',function(){
        if($('.grid-block').length > 0){
            $('.grid-block').isotope({
                // options
                itemSelector: '.grid-item',
                //layoutMode: 'fitRows'
            });
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  TOOLTIP
     /* ------------------------------------------------------------------------ */
    if(isTouchDevice()===false) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    /* ------------------------------------------------------------------------ */
    /*  SHARE TOOLTIP
     /* ------------------------------------------------------------------------ */
    $('.actions li').on('click',function(){

        if($(this).children('.share_tooltip').hasClass('in')){
            $(this).children('.share_tooltip').removeClass('in');
        }else{
            $('.actions li').children('.share_tooltip').removeClass('in');
            $(this).children('.share_tooltip').addClass('in');
        }

    });
    $(document).mouseup(function (e)
    {
        var tip = $(".share-btn");

        if (!tip.is(e.target) // if the target of the click isn't the container...
            && tip.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $('.share_tooltip').removeClass('in');
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  SET COLUMNS HEIGHT
     /* ------------------------------------------------------------------------ */
    if($('.footer-widget').length > 0){
        $('.footer-widget').matchHeight();
    };

    if($('.grid').length > 0) {
        $('.grid').each(function () {
            $(this).children().find('img').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
        });
    }
    //if($('.grid-view').length > 0) {
    /*$(window).load(function(){
     $('.post-card-description').matchHeight();
     });*/
    //}

    /* ------------------------------------------------------------------------ */
    /*  NAVIGATION
     /* ------------------------------------------------------------------------ */
    $('.navi ul li').each(function(){
        $(this).has('ul').not('.houzez-megamenu li').addClass('has-child');
    });

    $('.navi ul .has-child').hover(
        function(){
            $(this).addClass("active");
        },
        function(){
            $(this).removeClass("active");
        }
    );

    function houzez_megamenu(){
        if($(window).width() > 991){
            var container = $('.container');
            var header = $('.header-section,#header-section');

            var containWidth = container.innerWidth();
            var windowWidth = $(window).width();
            var containOffset = container.offset();

            if($('.navi ul li').hasClass('houzez-megamenu')){

                $('.navi ul .houzez-megamenu').each(function () {
                    var thisOffset = $(this).offset();
                    if(header.children('.container').length > 0){
                        $("> .sub-menu",this).css({width:containWidth,left:-(thisOffset.left-containOffset.left)});
                    }else{
                        $("> .sub-menu",this).css({width:windowWidth,left: -thisOffset.left});
                        //alert(thisOffset);
                    }
                });

            }
        }
    }
    houzez_megamenu();
    $(window).on('resize',function () {
        houzez_megamenu();
    });
    $(window).bind('load',function () {
        houzez_megamenu();
    });


    /* ------------------------------------------------------------------------ */
    /*  CHANGE GRID LIST
     /* ------------------------------------------------------------------------ */
    $('.view-btn').on("click",function(){
        $('.view-btn').removeClass('active');
        $(this).addClass('active');
        if($(this).hasClass('btn-list')) {
            $('.property-listing').removeClass('grid-view grid-view-3-col map-view').addClass('list-view');
            $('.az-col-map1').fadeOut(0);
            $('.az-col-map').addClass('az-col-map3').removeClass('az-col-map2');
        }
        else if($(this).hasClass('btn-grid')) {
            $('.property-listing').removeClass('list-view grid-view-3-col map-view').addClass('grid-view');
            $('.az-col-map1').fadeOut(0);
            $('.az-col-map').addClass('az-col-map3').removeClass('az-col-map2');
        }
        else if($(this).hasClass('btn-grid-3-col')) {
            $('.property-listing').removeClass('list-view grid-view map-view').addClass('grid-view grid-view-3-col');
            $('.az-col-map1').fadeOut(0);
            $('.az-col-map').addClass('az-col-map3').removeClass('az-col-map2');
        }
        else if($(this).hasClass('btn-map')){
            $('.property-listing').removeClass('list-view grid-view-3-col grid-view').addClass('grid-view map-view');
            $('.az-col-map1').fadeIn(0);
            $('.az-col-map').addClass('az-col-map2').removeClass('az-col-map3');
            $('#half_map_update').trigger('click');
            $("#houzez-gmap-main").sticky({topSpacing:0});
            // alert(1);
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  SEARCH PANEL HEIGHT FIX
    /* ------------------------------------------------------------------------ */
    $('.search-panel-btn').on('click',function () {
        if($('.search-panel').hasClass('panel-open')){
            $('.search-panel').removeClass('panel-open');
        }else{
            $('.search-panel').addClass('panel-open');
        }
    });
    function search_panel_height_fix(){
        var panel_bottom_height = $('.search-panel .search-bottom').outerHeight();
        $('.search-scroll').css('padding-bottom', panel_bottom_height);

        if($(window).width() < 991){
            $('.search-panel').removeClass('panel-open');
        }
    }
    search_panel_height_fix();
    $(window).on('resize',function () {
        search_panel_height_fix()
    });

    /* ------------------------------------------------------------------------ */
    /*  SECTION HEIGHT
    /* ------------------------------------------------------------------------ */
    function bg_image_size(size,url){
        var get_url = url,image;
        if(get_url) {
            // Remove url() or in case of Chrome url("")
            get_url = get_url.match(/^url\("?(.+?)"?\)$/);

            if (get_url[1]) {
                get_url = get_url[1];
                image = new Image();
                image.src = get_url;
                if (size == 'height') {
                    return image.height;
                } else {
                    return image.width;
                }
            }
        }
    }

    function setSectionHeight() {
        var totalTopBarsHeight = 0;
        var searchH = 0;
        var windowHeight = getWindowHeight();
        var windowWidth = getWindowWidth();

        var admin_bar_height = $('#wpadminbar').innerHeight();
        var innerHeaderH = $('.header-section').innerHeight();
        var outerHeaderH = 0;//$('#header-section').innerHeight();
        var splashFootH = $('.splash-footer').innerHeight();
        var advancedSearchH = $('.advance-search-header').innerHeight();
        var topbarH = $('.top-bar').innerHeight();

        var mobHeaderH = $('.header-mobile').innerHeight();
        var mobAdvanceSearchH = $('.advanced-search-mobile').innerHeight();

        searchH = (windowHeight-innerHeaderH)-splashFootH;

        if (isChrome){
            $('.fave-screen-fix-inner').css( 'height', searchH-1 );
        }else{
            $('.fave-screen-fix-inner').css( 'height', searchH );
        }

        if(getWindowWidth() >= 992){

            if($('#header-section').length){
                totalTopBarsHeight = outerHeaderH;//alert(1);
            }
            if($('#header-section').length
                && $('.advance-search-header').length
                && !$('.advance-search-header').hasClass('search-hidden')) {
                totalTopBarsHeight = parseInt(advancedSearchH) + parseInt(outerHeaderH);
            }
            if($('#header-section').is('*')
                && $('.advance-search-header').hasClass('search-hidden')) {
                totalTopBarsHeight = outerHeaderH;//alert(1);
            }

            if($('#header-section').length
                && $('.top-bar').length){
                totalTopBarsHeight = parseInt(outerHeaderH) + parseInt(topbarH);
            }
            if($('#header-section').length
                && $('.advance-search-header').length
                && !$('.advance-search-header').hasClass('search-hidden')
                && $('.top-bar').length){
                totalTopBarsHeight = parseInt(outerHeaderH) + parseInt(topbarH) + parseInt(advancedSearchH);
            }
            if($('#header-section').length
                && $('#wpadminbar').length){
                totalTopBarsHeight = parseInt(outerHeaderH) + parseInt(admin_bar_height);
            }

            if($('#header-section').length
                && $('#wpadminbar').length
                && $('.top-bar').length){
                totalTopBarsHeight = parseInt(outerHeaderH) + parseInt(admin_bar_height) + parseInt(topbarH);
            }
            if($('#header-section').length
                && $('#wpadminbar').length
                && $('.advance-search-header').length
                && !$('.advance-search-header').hasClass('search-hidden')){
                totalTopBarsHeight = parseInt(outerHeaderH) + parseInt(admin_bar_height) + parseInt(advancedSearchH);
            }
            if($('#header-section').length
                && $('#wpadminbar').length
                && $('.advance-search-header').length
                && !$('.advance-search-header').hasClass('search-hidden')
                && $('.top-bar').length){
                totalTopBarsHeight = parseInt(outerHeaderH) + parseInt(admin_bar_height) + parseInt(advancedSearchH) + parseInt(topbarH);
            }
            if($('#header-section').length
                && $('#wpadminbar').length
                && $('.advance-search-header').length
                && $('.advance-search-header').hasClass('search-hidden')
                && $('.top-bar').length){
                totalTopBarsHeight = parseInt(outerHeaderH) + parseInt(admin_bar_height) + parseInt(topbarH);
            }

        }else{
            if($('.advanced-search-mobile').length
                && !$('.advanced-search-mobile').hasClass('search-hidden')
                && $('.header-mobile').length) {
                totalTopBarsHeight = parseInt(mobAdvanceSearchH) + parseInt(mobHeaderH);
            }
            if($('.advanced-search-mobile').hasClass('search-hidden')
                && $('.header-mobile').is('*')) {
                totalTopBarsHeight = mobHeaderH;
            }
            if($('.header-mobile').length){
                totalTopBarsHeight = mobHeaderH;
            }
            if($('.header-mobile').length
                && $('.top-bar').length){
                totalTopBarsHeight = parseInt(mobHeaderH) + parseInt(topbarH);
            }
            if($('.header-mobile').length
                && $('.advanced-search-mobile').length
                && !$('.advanced-search-mobile').hasClass('search-hidden')
                && $('.top-bar').length){
                totalTopBarsHeight = parseInt(mobHeaderH) + parseInt(topbarH) + parseInt(mobAdvanceSearchH);
            }
            if($('.header-mobile').length
                && $('#wpadminbar').length){
                totalTopBarsHeight = parseInt(mobHeaderH) + parseInt(admin_bar_height);
            }
            if($('.header-mobile').length
                && $('#wpadminbar').length
                && $('.advanced-search-mobile').length
                && !$('.advanced-search-mobile').hasClass('search-hidden')){
                totalTopBarsHeight = parseInt(mobHeaderH) + parseInt(admin_bar_height) + parseInt(mobAdvanceSearchH);
            }
            if($('.header-mobile').length
                && $('#wpadminbar').length
                && $('.advanced-search-mobile').length
                && !$('.advanced-search-mobile').hasClass('search-hidden')
                && $('.top-bar').length){
                totalTopBarsHeight = parseInt(mobHeaderH) + parseInt(admin_bar_height) + parseInt(mobAdvanceSearchH) + parseInt(topbarH);
            }
            if($('.header-mobile').length
                && $('#wpadminbar').length
                && $('.advanced-search-mobile').length
                && $('.advanced-search-mobile').hasClass('search-hidden')
                && $('.top-bar').length){
                totalTopBarsHeight = parseInt(mobHeaderH) + parseInt(admin_bar_height) + parseInt(topbarH);
            }
            if($('.header-mobile').length
                && $('#wpadminbar').length
                && $('.top-bar').length){
                totalTopBarsHeight = parseInt(mobHeaderH) + parseInt(admin_bar_height) + parseInt(topbarH);
            }
        }
        if(getWindowWidth() > 992){
            var menu_above = $('.az-above-header.az-dispay-block-md').height();
        } else {
            var menu_above = $('.az-above-header.az-dispay-none-md').height();
        }
        var topBarsHeight =  getWindowHeight() - totalTopBarsHeight;
        // alert(menu_above);
        if (isChrome){
            // $('.fave-screen-fix').css( 'height', topBarsHeight-1-menu_above );
            $('.fave-screen-fix').css( 'height', topBarsHeight-1-menu_above );
        }else{
            // $('.fave-screen-fix').css( 'height', topBarsHeight-menu_above );
            $('.fave-screen-fix').css( 'height', topBarsHeight-menu_above );
        }

        // $('.banner-parallax-fix').css( 'height', topBarsHeight-menu_above );
        $('.banner-parallax-fix').css( 'height', topBarsHeight - menu_above  );

        if(getWindowWidth() > 768){
            var image_url = $('.banner-parallax-auto .banner-inner').css('background-image');

            if(image_url != 'none'){
                var bg_height = $('.banner-parallax-auto').width() * bg_image_size('height',image_url) / bg_image_size('width',image_url);
                if(bg_height > getWindowHeight()){
                    $('.banner-parallax-auto').css( 'height', topBarsHeight );
                }else{
                    $('.banner-parallax-auto').css( 'height', bg_height-totalTopBarsHeight );
                }
            }else{
                $('.banner-parallax-auto').css( 'height', topBarsHeight );
            }
        }else{
            $('.banner-parallax-auto').css( 'height', 300 );

        }
    }

    //setSectionHeight();
    $(window).on('resize', function () {
        setSectionHeight();
        advancedSearchSticky();
    });
    $(window).bind('load',function () {
        setSectionHeight();
    });

    /* ------------------------------------------------------------------------ */
    /*  GET WINDOWS WIDTH HEIGHT
     /* ------------------------------------------------------------------------ */
    function getWindowWidth() {
        return Math.max( $(window).width(), window.innerWidth);
    }

    function getWindowHeight() {
        return Math.max( $(window).height(), window.innerHeight);
    }

    /* ------------------------------------------------------------------------ */
    /*  ADVANCE DROPDOWN
     /* ------------------------------------------------------------------------ */
    $('.search-expand-btn').on('click',function(){
        $(this).toggleClass('active');
        if($(this).hasClass('active')==true)
        {
            $('.search-expandable .advanced-search').slideDown();
        }else
        {
            $('.search-expandable .advanced-search').add('.search-expandable .advance-fields').slideUp();
            $('.advance-btn').removeClass('active');

        }
    });
    $('.advanced-search .advance-btn').on('click',function(){
        $(this).toggleClass('active');
        if($(this).hasClass('active')==true)
        {
            $(this).closest('.advanced-search').find('.advance-fields').slideDown();
        }else
        {
            $(this).closest('.advanced-search').find('.advance-fields').slideUp();
        }
    });

    $('.advanced-search-mobile .advance-btn').on('click',function(){
         $(this).toggleClass('active');
         if($(this).hasClass('active')==true)
         {
             $(this).closest('.advanced-search-mobile').find('.advance-fields').slideDown();
         }else
         {
             $(this).closest('.advanced-search-mobile').find('.advance-fields').slideUp();
         }
    });

    $('.advance-trigger').on('click',function(){
        $(this).toggleClass('active');
        if($(this).hasClass('active')==true)
        {
            $(this).children('i').removeClass('fa-plus-square').addClass('fa-minus-square');
            $('.field-expand').slideDown();
        }else
        {
            $(this).children('i').removeClass('fa-minus-square').addClass('fa-plus-square');
            $('.field-expand').slideUp();
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  SLIDER initialized
    /* ------------------------------------------------------------------------ */
    var all_slider = $('#banner-slider, .carousel, .lightbox-slide, .property-widget-slider, .houzez-impress-listing-carousel');
    all_slider.on('initialized.owl.carousel', function(event) {
        setTimeout(function(){
            all_slider.animate({opacity: 1}, 800);
            $('.gallery-area .slider-placeholder').remove();
        },800);
    });

    /* ------------------------------------------------------------------------ */
    /*  BANNER SLIDER
     /* ------------------------------------------------------------------------ */
    if($("#banner-slider").length > 0){
        var owl_main_slider = $('#banner-slider');

        owl_main_slider.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: false,
            slideBy: 1,
            autoplay: true,
            autoplaySpeed: 700,
            items:1,
            smartSpeed: 1000,
            nav: true,
            navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            addClassActive: true,
            callbacks: true,
            responsive:{
                0:{
                    nav: false,
                    dots: true
                },
                768:{
                    nav: true,
                    dots: false
                }

            }
        });
    }

    /* ------------------------------------------------------------------------ */
    /*  OWL CAROUSEL
     /* ------------------------------------------------------------------------ */
    if($("#carousel-post-card").length > 0) {

        var owl_post_card = $('#carousel-post-card');

        owl_post_card.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            autoplay: true,
            autoplaySpeed: 700,
            slideBy: 1,
            nav: false,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1280: {
                    items: 4
                }
            }
        });

        $('.btn-prev-post-card').on('click',function() {
            owl_post_card.trigger('prev.owl.carousel',[700])
        });
        $('.btn-next-post-card').on('click',function() {
            owl_post_card.trigger('next.owl.carousel',[700])
        });

    }
    if($("#carousel-post-card-block").length > 0) {

        var owl_post_block = $('#carousel-post-card-block');

        owl_post_block.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            autoplay: true,
            autoplaySpeed: 700,
            slideBy: 1,
            nav: false,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1280: {
                    items: 4
                }
            }
        });

        $('.btn-prev-card-block').on('click',function() {
            owl_post_block.trigger('prev.owl.carousel',[700])
        });
        $('.btn-next-card-block').on('click',function() {
            owl_post_block.trigger('next.owl.carousel',[700])
        });

    }

    if($("#agents-carousel").length > 0){

        var owlAgents = $('#agents-carousel');
        owlAgents.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: false,
            slideBy: 1,
            autoplay: true,
            autoplaySpeed: 700,
            nav: false,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1280: {
                    items: 4
                }
            }
        });

        $('.btn-prev-agents').on('click',function() {
            owlAgents.trigger('prev.owl.carousel',[700])
        });
        $('.btn-next-agents').on('click',function() {
            owlAgents.trigger('next.owl.carousel',[700])
        });

    }
    if($("#partner-carousel").length > 0) {

        $("#partner-carousel").owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            slideBy: 2,
            autoplay: true,
            autoplaySpeed: 700,
            nav:false,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 4
                }
            }
        });

        $('.btn-prev-partners').on('click',function() {
            $("#partner-carousel").trigger('prev.owl.carousel',[700])
        });
        $('.btn-next-partners').on('click',function() {
            $("#partner-carousel").trigger('next.owl.carousel', [700])
        });

    }

    if($("#agency-carousel").length > 0) {

        var houzez_crl_agency = $('#agency-carousel');

        houzez_crl_agency.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            items:4,
            slideBy: 4,
            nav: false,
            smartSpeed:400,
        });

        $('.btn-crl-agency-prev').on('click',function() {
            houzez_crl_agency.trigger('prev.owl.carousel',[400])
        });
        $('.btn-crl-agency-next').on('click',function() {
            houzez_crl_agency.trigger('next.owl.carousel',[400])
        });
    }

    if($(".property-widget-slider").length > 0) {
        $('.property-widget-slider').owlCarousel({
            rtl: houzez_rtl,
            dots: true,
            items: 1,
            smartSpeed: 700,
            slideBy: 1,
            nav: true,
            navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        });
    }

    /* ------------------------------------------------------------------------ */
    /*  Change listing fee for featured
     /* ------------------------------------------------------------------------ */
    $('.prop_featured').change( function() {
        var parent = $(this).parents('table');
        var buttons_main_parent = $(this).parents('.houzez-per-listing-buttons-main');
        var price_regular  = parseFloat( parent.find('.submission_price').text() );
        var price_featured = parseFloat( parent.find('.submission_featured_price').text() );

        var total_price = price_regular+price_featured;
        if( $(this).is(':checked') ) {
            parent.find('.submission_total_price').text(total_price);
            buttons_main_parent.find('#stripe_form_simple_listing').hide();
            buttons_main_parent.find('#stripe_form_featured_listing').show();
        } else {
            parent.find('.submission_total_price').text(price_regular);
            buttons_main_parent.find('#stripe_form_featured_listing').hide();
            buttons_main_parent.find('#stripe_form_simple_listing').show();
        }

    });

    /* ------------------------------------------------------------------------ /
     /* PAY DROPDOWN
     / ------------------------------------------------------------------------ */
    $('.my-actions .pay-btn').on('click', function (event) {
        if($(this).parent().hasClass("open")!=true) {
            $('.my-actions .pay-btn').parent().removeClass("open");
            $(this).parent().addClass("open");
        } else {
            $(this).parent().removeClass("open");
        }
    });
    $('body').on('click', function (e) {
        if (!$('.my-actions .pay-btn').is(e.target) && $('.my-actions .pay-btn').has(e.target).length === 0 && $('.open').has(e.target).length === 0) {
            $('.my-actions .pay-btn').parent().removeClass('open');
        }
    });

    /*-----------------------------------------------------------------------------------*/
    /* PROPERTIES SORTING
    /*-----------------------------------------------------------------------------------*/
    function insertParam(key, value) {
        key = encodeURI(key);
        value = encodeURI(value);

        // get querystring , remove (?) and covernt into array
        var qrp = document.location.search.substr(1).split('&');

        // get qrp array length
        var i = qrp.length;
        var j;
        while (i--) {
            //covert query strings into array for check key and value
            j = qrp[i].split('=');

            // if find key and value then join
            if (j[0] == key) {
                j[1] = value;
                qrp[i] = j.join('=');
                break;
            }
        }

        if (i < 0) {
            qrp[qrp.length] = [key, value].join('=');
        }
        // reload the page
        document.location.search = qrp.join('&');

    }

    $('#sort_properties').on('change', function() {
        var key = 'sortby';
        var value = $(this).val();
        insertParam( key, value );
    });

    /* ------------------------------------------------------------------------ */
    /*  ACCOUNT DROPDOWN
    /* ------------------------------------------------------------------------ */

    function accountDropdown(){
        $('.header-user .account-action > li').on('click',function(e){
            if($(this).hasClass('active')){
                $(this).removeClass('active');
            }else{
                $(this).addClass('active');
            }
        });
        $(".header-right .account-action > li").on({
            mouseenter: function (e) {
                $(this).addClass('active');
            },
            mouseleave: function (e) {
                $(this).removeClass('active');
            }
        });
    }

    accountDropdown();

    /* ------------------------------------------------------------------------ */
    /*  MOBILE MENU
    /* ------------------------------------------------------------------------ */
    function mobileMenu(menu_html,menu_place){
        var siteMenu = $(menu_html).html();
        $(menu_place).html(siteMenu);

        $(menu_place+' ul li').each(function(){
            $(this).has('ul').addClass('has-child');
        });

        $(menu_place+' ul .has-child').append('<span class="expand-me"></span>');

        $(menu_place+' .expand-me').on('click',function(){
            var parent = $(this).parent('li');
            if(parent.hasClass('active')==true){
                parent.removeClass('active');
                parent.children('ul').slideUp();
            }else{
                parent.addClass('active');
                parent.children('ul').slideDown();
            }
        });
    }
    mobileMenu('.main-nav','.main-nav-dropdown');
    mobileMenu('.top-nav','.top-nav-dropdown');
    //mobileMenu('.top-nav','.top-nav-dropdown');

    // Dropdown open and hide when click on mobile menu Icon.
    $('.nav-trigger').on('click',function(){
        if($(this).hasClass('mobile-open')){
            $(this).removeClass('mobile-open');
        }else{
            $(this).addClass('mobile-open');
        }
    });

    // if single page mobile menu. dropdown will hide on click the tab.
    if($('.header-single-page').length > 0){
        $('.header-single-page .main-nav-dropdown li a').on('click',function(e){
            $('.nav-trigger').removeClass('mobile-open');
            //e.preventDefault();
        });
    }

    // Hide dropdowns when click on body area.
    function element_hide(ele,ele_class){
        $(document).mouseup(function (e)
        {
            var nav_trigger = $(ele);
            if (!nav_trigger.is(e.target) // if the target of the click isn't the container...
                && nav_trigger.has(e.target).length === 0 // ... nor a descendant of the container
                && !$('.nav-dropdown').is(e.target)
                && $('.nav-dropdown').has(e.target).length === 0
                && !$('.account-dropdown').is(e.target)
                && $('.account-dropdown').has(e.target).length === 0)
            {
                $(ele).removeClass(ele_class);
            }
        });
    }

    element_hide('.header-mobile .nav-trigger','mobile-open');
    element_hide('.top-bar .nav-trigger','mobile-open');
    element_hide('.account-action > li','active');

    /* ------------------------------------------------------------------------ */
    /*  MORTGAGE CALCULATOR SHOW RESULTS
    /* ------------------------------------------------------------------------ */
    $('.show-morg').on('click',function () {
        if($(this).hasClass('active')){
            $('.morg-summery').slideUp();
            $(this).removeClass('active');
        }else{
            $('.morg-summery').slideDown();
            $(this).addClass('active');
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  DETAIL LIGHT BOX SLIDE SHOW
     /* ------------------------------------------------------------------------ */
    function lightBoxSlide() {
        $('.lightbox-slide').show(function(){
            $('.lightbox-slide').owlCarousel({
                autoPlay : 3000,
                rtl: houzez_rtl,
                dots: false,
                items: 1,
                smartSpeed: 700,
                autoplay: true,
                slideBy: 1,
                nav: false,
                stopOnHover : true,
                autoHeight : true,
                navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
                responsive : {
                    // breakpoint from 768 up
                    768 : {
                        nav: true,
                    }
                }
            });
        });
        // Custom Navigation Events
        $('.lightbox-arrow-left').on('click',function() {
            $('.lightbox-slide').trigger('prev.owl.carousel',[1000])
        });
        $('.lightbox-arrow-right').on('click',function() {
            $('.lightbox-slide').trigger('next.owl.carousel',[1000])
        });

        $(document).keydown(function(e){
            // handle cursor keys
            if (e.keyCode == 37) {
                $('.lightbox-slide').trigger('prev.owl.carousel',[1000])
            } else if (e.keyCode == 39) {
                $('.lightbox-slide').trigger('next.owl.carousel',[1000])
            }
        });
    }
    $('.lightbox-slide').on('resized.owl.carousel', function (event) {
        var $this = $(this);
        $this.find('.owl-height').css('height', $this.find('.owl-item.active').height());
    });

    /* ------------------------------------------------------------------------ */
    /*  LIGHT BOX
     /* ------------------------------------------------------------------------ */

    var popupRightWidth = $('.lightbox-right').innerWidth();

    function lightBox(){
        $('.popup-trigger').on('click',function(){
            $('#lightbox-popup-main').addClass('active').addClass('in');
        });
        $('.lightbox-close').on('click',function(){
            $('#lightbox-popup-main').removeClass('active').removeClass('in');
        });
        $(document).keydown(function(e){
            if (e.keyCode == 27) {
                $('#lightbox-popup-main').removeClass('active').removeClass('in');
            }
        });
    }
    lightBox();

    function popupResize(){
        var popupWidth = getPopupWidth()-60;
        $('.lightbox-popup').css('width',popupWidth);

        if($('.lightbox-right').length > 0){

            var popupRightWidth = $('.lightbox-right').innerWidth();

            $('.lightbox-left').css('width', (popupWidth - popupRightWidth));
            $('.gallery-inner').css('width', (popupWidth - popupRightWidth)-40);
            $('.lightbox-right').addClass('in');
            $('.lightbox-left .lightbox-close').removeClass('show');
            //$('.lightbox-left .expand-icon').hide('show');

            if (Modernizr.mq('(max-width: 1199px)')) {
                $('.expand-icon').removeClass('compress');
                $('.popup-inner').removeClass('pop-expand');
            }
            if (Modernizr.mq('(max-width: 1024px)')) {
                $('.lightbox-left').css('width', '100%');
                $('.lightbox-right').removeClass('in');
                $('.gallery-inner').css('width', '100%');
                $('.expand-icon').addClass('compress');
                $('.lightbox-left .lightbox-close').addClass('show');
            }
        }else{
            $('.lightbox-left').css('width', '100%');
            $('.gallery-inner').css('width', '100%');
            $('.lightbox-left .lightbox-close').addClass('show');
            //$('.lightbox-expand').hide('show');
        }
    }
    popupResize();
    function popForm_hide_show(){
        $('.lightbox-expand').on('click',function(){
            $('.lightbox-left .lightbox-close').toggleClass('show');
            var popupWidth = getPopupWidth();
            var popWidthTotal = (getPopupWidth()-60) - popupRightWidth;

            if(popupWidth >= 1024){
                if($(this).hasClass('compress')){
                    $('.lightbox-right').addClass('in');
                    $('.lightbox-left').css('width', popWidthTotal);
                    $(this).removeClass('compress');
                    $('.popup-inner').removeClass('pop-expand');
                }else{
                    $('.lightbox-left').css('width', '100%');
                    $('.lightbox-right').removeClass('in');
                    $(this).addClass('compress');
                    $('.popup-inner').addClass('pop-expand');
                }
            }
            if(popupWidth <= 1024/* && popupWidth >= 768*/){
                //$('.lightbox-left').css('width', '100%');

                if ($(this).hasClass('compress')) {
                    $('.lightbox-right').addClass('in');
                    $('.lightbox-left').css('width', popWidthTotal);
                    $(this).removeClass('compress');

                } else {
                    $('.lightbox-left').css('width', '100%');
                    $('.lightbox-right').removeClass('in');
                    $(this).addClass('compress');
                }
            }
            if(popupWidth < 768){
                $('.lightbox-left').css('width', '100%');
                //alert('ok');
            }
        });
    }
    popForm_hide_show();


    /* ------------------------------------------------------------------------ */
    /*  GET lightbox WIDTH HEIGHT
    /* ------------------------------------------------------------------------ */
    function getPopupWidth() {
        return Math.max( $(window).width(), $(window).innerWidth());
    }
    function getPopupInnerWidth() {
        return Math.max( $('.popup-inner').width(), $('.popup-inner').innerWidth());
    }

    /* ------------------------------------------------------------------------ */
    /*  IDX LIST THUMB CLASSES
    /* ------------------------------------------------------------------------ */
    if($('.dsidx-prop-summary').length){
        $('.dsidx-prop-summary .dsidx-prop-title').next('div').addClass('item-thumb');
        $('.item-thumb a').addClass('hover-effect');
    }
    if($('.impress-showcase-photo').length) {
        $('.impress-showcase-photo').addClass('hover-effect');
    }

    $(window).on('load',function(){
        lightBoxSlide();
        popupResize();
    });

    $(window).on('resize', function () {
        popupResize();
    });

    $( document ).ready(function() {
        $('.tagcloud a').removeAttr('style');
    });

})(jQuery);