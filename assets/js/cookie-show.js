(function($) {
    var showFlag = false;
     var date = new Date();
     var minutes = 10;
     date.setTime(date.getTime() + (minutes * 60 * 1000));
     
    $(document).ready(function () {
        
        setTimeout( function() {
            if (!$.cookie('smartCookies')) {
                  $(document).mouseleave(function(e) {
                    if (e.offsetY < 0 ) {
                        function getWindow() {
                            if(!showFlag){
                                $('a[href=#contact_form_pop].fancybox').click();
                                showFlag = true;
                            }
                        };
                        setTimeout(getWindow, 1);
                        $.cookie('smartCookies', true, {
                          expires: date,
                          path: '/'
                        });
                    }
                  });
              };
        }, 120000);
       
      $('#fancybox-close').click(function(){
       $(this).prev('#fancybox-content').find('div[id*=_form_pop]').css('display', 'block');
      });
      
      $('div#fancybox-overlay').live('mouseup', function(){
         $(this).next('#fancybox-wrap').find('div[id*=_form_pop]').css('display', 'block');
      });
      
      

    });
    
   /*$(document).ready(function() {
      $(".wpcf7 input[type='tel']").inputmask({"mask": "+380671234567"});
    });*/
    
})(jQuery);