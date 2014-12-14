(function($) {

    var FADE_COUNT = 3; //the number of images to load before fading in the slider.
    var LOOP_COMPLETE = false;
    var $ss = $('.simple_slider');
    var $lc = $('.loading_cont');

    var instaPost = jQuery.post(instagram_ajax.ajaxurl, {
        action: 'get_instagram'
    });

    //append the loader
    var loadingImg = new Image();
    loadingImg.src = instagram_ajax.loading_img;
    $('#insta_loading').append(loadingImg);

    

    instaPost.done(function(data) {
        //console.log(data);
        if(data.meta.code === 200) {

            var len = data.data.length;
            for(var i=0; i<len; i++) {
                var frame = data.data[i];

                var img = new Image();
                img.src = frame.images.standard_resolution.url;
                
                if(i < FADE_COUNT) {
                    img.onload = function() { return fadeInSlider(); }
                }

                var atag  = '<a href="' + frame.link + '" target="_blank"></a>';

                $ss.append(img);
                $(img).wrap(atag);
            }

            $(function() { 
                $ss.sss({
                    slideShow : true, // Set to false to prevent SSS from automatically animating.
                    startOn : 0, // Slide to display first. Uses array notation (0 = first slide).
                    transition : 400, // Length (in milliseconds) of the fade transition.
                    speed : 3500, // Slideshow speed in milliseconds.
                    showNav : true // Set to false to hide navigation arrows.
                });
                LOOP_COMPLETE = true;
                return fadeInSlider();
            });

        } else {
            return instaFail();
        }
    });

    instaPost.fail(function(err) {
        return instaFail();
    })

    
    function fadeInSlider() {
        FADE_COUNT -=1;
        if(FADE_COUNT > 0 || !LOOP_COMPLETE) { return false; }
        $lc.remove();
        $ss.fadeIn();
    }

    function instaFail() {
        var errorImg = new Image();
        $ss.append(errorImg);
        errorImg.src = instagram_ajax.error_img;
        errorImg.onload = function() {
            $lc.remove();
            $ss.fadeIn();
        };
    }

})(jQuery);