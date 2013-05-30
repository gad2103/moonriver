/**
 * Custom jquery that is not included in the layover theme
 * NOTE: this will not be included in an update since it is custom
 *
 */

(function($){
    $('#slides-signup').live('click', function(){
        $('body').animate({scrollTop: $('.join-form').offset().top}, function(){$('#newsletter').focus()});
    });
})(jQuery);
