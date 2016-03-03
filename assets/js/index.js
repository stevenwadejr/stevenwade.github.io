/**
 * Main JS file for Casper behaviours
 */

/*globals jQuery, document */
(function ($) {
    "use strict";

    $(document).ready(function(){

        $(".post-content").fitVids();
        
        // Calculates Reading Time
        $('.post-content').readingTime({
            readingTimeTarget: '.post-reading-time',
            wordCountTarget: '.post-word-count',
        });
        
        // Creates Captions from Alt tags
        $(".post-content img").each(function() {
            // Let's put a caption if there is one
            if($(this).attr("alt") && !$(this).hasClass("emoji"))
              $(this).wrap('<figure class="image"></figure>')
              .after('<figcaption>'+$(this).attr("alt")+'</figcaption>');
        });
        
    });

    if ($('.home').length > 0) {
        var $headerImage = $('.teaserimage');
    } else {
        var $headerImage = $('.article-image');
    }

    $(window).on('scroll', function(){
        if ($(window).scrollTop() >= $headerImage.height()) {
            $('.logo-readium').addClass('dark');
        } else {
            $('.logo-readium').removeClass('dark');
        }
    });

}(jQuery));
