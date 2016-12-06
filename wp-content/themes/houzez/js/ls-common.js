// alert(1);
(function($){
    // alert(1);
    $(document).ready(function(){
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
        
        $('input[name="daterange"]').change(function(){
            // alert(1);
            // var date = new Date();
            // var minutes = 43200;
            // date.setTime(date.getTime() + (minutes * 60 * 1000));
            $.cookie("az_range", $(this).val(), { expires: 30});
            $('input[name="daterange"]').val($(this).val());
            // $.cookie('az_range', $(this).val(), );
            // alert($.cookie('az_range'));
            // alert( document.cookie );
        });
        var az_slide_num = 0;
        var az_slide_length = $('.az-item').length;
        var az_slides = $('.az-item');

        // alert(az_slige_length);
        $('.az-prev').click(function(){
            az_slide_num--;
            if(az_slide_num<0){
                az_slide_num = az_slide_length-1;
            }
            az_slides.css({'opacity': '0', 'z-index': '2', 'transition': 'all 1.2s ease-out'});
            az_slides.eq(az_slide_num).css({'opacity': '1', 'z-index': '3', 'transition': 'all 1.2s ease-in'});
            if(az_slide_num==0){
                $('.az-prev').fadeOut(0);
            } else if(az_slide_num==az_slide_length-2){
                $('.az-next').fadeIn(0);
            }
            // az_slide_num=az_slide_num%az_slige_length;
            // alert(az_slide_num);
        });
        $('.az-next').click(function(){
            az_slide_num++;
            if(az_slide_num>=az_slide_length){
                az_slide_num = 0;
            }
            az_slides.css({'opacity': '0', 'z-index': '2', 'transition': 'all 1.2s ease-out'});
            az_slides.eq(az_slide_num).css({'opacity': '1', 'z-index': '3', 'transition': 'all 1.2s ease-in'});
            if(az_slide_num==az_slide_length-1){
                $('.az-next').fadeOut(0);
            } else if(az_slide_num==1){
                $('.az-prev').fadeIn(0);
            }
            // az_slide_num=az_slide_num%az_slige_length;
            // alert(az_slide_num);
        });
    });
    
// });
})(jQuery);
