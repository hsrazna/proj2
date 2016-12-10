// alert(1);



(function($){

    // alert(1);
    $(document).ready(function(){
        // alert(1);
        $('a[rel^="method-post"]').click(function(){
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
        var number_of_nights = 0;
        if($.cookie('az_range')){
            $('input[name="daterange"]').val($.cookie('az_range'));
        }
        $('input[name="daterange"]').daterangepicker({
            "locale": {
                "format": "MM/DD/YYYY",
                "separator": " - ",
                // "applyLabel": "Apply",
                // "cancelLabel": "Cancel",
                "fromLabel": "From",
                "toLabel": "To",
                "customRangeLabel": "Custom",
                "weekLabel": "W",
                
                "firstDay": 1
            },
            "showCustomRangeLabel": false,
            // "startDate": "11/26/2016",
            // "endDate": "12/02/2016"
        });
        if(window.matchMedia('(min-width: 992px)').matches){
            var az_temp_height221122 = $(window).height();
            az_temp_height221122 = (az_temp_height221122>=590)?az_temp_height221122: 590;
            $('.az-slider').height(az_temp_height221122);
        } else {
            var az_temp_height221122 = $(window).height();
            az_temp_height221122 = (az_temp_height221122>=590)?az_temp_height221122: 590;
            $('.az-slider').height(az_temp_height221122 - 60);
        }
        $('.az-item').css({'opacity': '0', 'z-index': '2', 'transition': 'all 1.2s ease-out'});
        $('.az-item').eq(1).css({'opacity': '1', 'z-index': '3', 'transition': 'all 1.2s ease-in'});
        
        var az_rangedates = $('input[name="daterange"]').eq(0).data('daterangepicker');
        var one_day=1000*60*60*24;
        var az_num_nights = (az_rangedates.endDate - az_rangedates.startDate)/one_day;
        $('.az-nights .az-num-nights').text(Math.round(az_num_nights-1));
        
        $('input[name="daterange"]').on('apply.daterangepicker', function(){
            // alert(1);
            // var date = new Date();
            // var minutes = 43200;
            // date.setTime(date.getTime() + (minutes * 60 * 1000));
            var az_rangedates = $(this).data('daterangepicker');
            // alert(az_rangedates.startDate +'/'+az_rangedates.endDate);
            $.cookie("az_range", $(this).val(), { expires: 30});
            $('input[name="daterange"]').each(function(){
                $(this).data('daterangepicker').setStartDate(az_rangedates.startDate);
                $(this).data('daterangepicker').setEndDate(az_rangedates.endDate);
            });
            var one_day=1000*60*60*24;
            var az_num_nights = (az_rangedates.endDate - az_rangedates.startDate)/one_day;
            $('.az-nights .az-num-nights').text(Math.round(az_num_nights-1));
            // $('input[name="daterange"]').val($(this).val());
            // $.cookie('az_range', $(this).val(), );
            // alert($.cookie('az_range'));
            // alert( document.cookie );
        });
        var az_slide_num = 1;
        var az_slide_length = $('.az-item').length;
        var az_slides = $('.az-item');
        // var az_timer = 
        // alert(az_slige_length);
        // setTimeout(function(){
        //     $('.az-next').trigger('click');
        // }, 60000);
        $('.az-prev').click(function(){
            az_slide_num--;
            if(az_slide_num<0){
                az_slide_num = az_slide_length-1;
            }
            az_slides.css({'opacity': '0', 'z-index': '2', 'transition': 'all 1.2s ease-out'});
            az_slides.eq(az_slide_num).css({'opacity': '1', 'z-index': '3', 'transition': 'all 1.2s ease-in'});
            if(az_slide_num==1){
                $('.az-prev').fadeOut(0);
            } else if(az_slide_num==az_slide_length-2){
                $('.az-next').fadeIn(0);
            }
            // setTimeout(function(){
            //     $('.az-next').trigger('click');
            // }, 60000);
            // az_slide_num=az_slide_num%az_slige_length;
            // alert(az_slide_num);
        });
        $('.az-next').click(function(){
            az_slide_num++;
            if(az_slide_num>=az_slide_length){
                az_slide_num = 1;
            }
            az_slides.css({'opacity': '0', 'z-index': '2', 'transition': 'all 1.2s ease-out'});
            az_slides.eq(az_slide_num).css({'opacity': '1', 'z-index': '3', 'transition': 'all 1.2s ease-in'});
            if(az_slide_num==az_slide_length-1){
                $('.az-next').fadeOut(0);
            } else if(az_slide_num==2){
                $('.az-prev').fadeIn(0);
            }
            // setTimeout(function(){
            //     $('.az-next').trigger('click');
            // }, 60000);
            // az_slide_num=az_slide_num%az_slige_length;
            // alert(az_slide_num);
        });
    });
    var windowSizeload = function(){
        // alert(1);
        if(window.matchMedia('(min-width: 992px)').matches){
            var az_temp_height221122 = $(window).height();
            az_temp_height221122 = (az_temp_height221122>=590)?az_temp_height221122: 590;
            $('.az-slider').height(az_temp_height221122);
        } else {
            var az_temp_height221122 = $(window).height();
            az_temp_height221122 = (az_temp_height221122>=590)?az_temp_height221122: 590;
            $('.az-slider').height(az_temp_height221122 - 60);
        }
        $('.az-item').css({'opacity': '0', 'z-index': '2', 'transition': 'all 1.2s ease-out'});
        $('.az-item').eq(1).css({'opacity': '1', 'z-index': '3', 'transition': 'all 1.2s ease-in'});
        
    }

    var windowSizeresize = function(){
        // alert(1);
        if(window.matchMedia('(min-width: 992px)').matches){
            var az_temp_height221122 = $(window).height();
            az_temp_height221122 = (az_temp_height221122>=590)?az_temp_height221122: 590;
            $('.az-slider').height(az_temp_height221122);
        } else {
            var az_temp_height221122 = $(window).height();
            az_temp_height221122 = (az_temp_height221122>=590)?az_temp_height221122: 590;
            $('.az-slider').height(az_temp_height221122 - 60);
        }
    }

    // $('.az-slider').on('load', azload);
    // $(document).find('#az-slider').load(function(){
    //     alert(1);
    // });
    // $(window).on('load', windowSizeload);
    $(window).on('resize', windowSizeresize);
    
// });
})(jQuery);
