<!-- REVOLUTION SLIDER FUNCTION FOR HOME PAGE STYLE 3  ===== -->

    var tpj = jQuery;

    var revapi1014;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_1014_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1014_1");
        } else {
            revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                startWithSlide: 0,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "hermes",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        }
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%",
                    presize: false
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1240, 1240, 800],
                gridheight: [700, 700, 700, 700],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });

            var forceSliderAudioOn = function() {
                var $videoLayers = tpj("#rev_slider_1014_1 .rs-background-video-layer");
                if (!$videoLayers.length) {
                    return;
                }

                $videoLayers.attr("data-volume", "100").data("volume", "100");

                var $videos = $videoLayers.find("video");
                if (!$videos.length) {
                    return;
                }

                $videos.each(function() {
                    try {
                        this.muted = false;
                        this.volume = 1;
                        var playPromise = this.play();
                        if (playPromise && playPromise.catch) {
                            playPromise.catch(function() {});
                        }
                    } catch (e) {}
                });

            };

            var fitSliderVideo = function() {
                var $videos = tpj("#rev_slider_1014_1 .active-revslide .rs-background-video-layer video");
                if (!$videos.length) {
                    return;
                }

                $videos.css({
                    width: "100%",
                    height: "100%",
                    top: "0",
                    left: "0",
                    position: "absolute",
                    objectFit: "contain",
                    backgroundColor: "#000"
                });
            };

            // Try to keep audio ON by default whenever the video starts.
            forceSliderAudioOn();
            fitSliderVideo();
            tpj("#rev_slider_1014_1").on("revolution.slide.onvideoplay", function() {
                forceSliderAudioOn();
                setTimeout(fitSliderVideo, 80);
            });
            tpj("#rev_slider_1014_1").on("revolution.slide.onchange", function() {
                setTimeout(forceSliderAudioOn, 120);
                setTimeout(fitSliderVideo, 120);
            });

            // Fallback for browsers that require user interaction before unmute.
            tpj(document).on("click.sliderAudioUnlock touchstart.sliderAudioUnlock", function() {
                forceSliderAudioOn();
                fitSliderVideo();
                tpj(document).off("click.sliderAudioUnlock touchstart.sliderAudioUnlock");
            });

            tpj(window).on("resize.sliderVideoFit", function() {
                setTimeout(fitSliderVideo, 120);
            });
        }
    }); /*ready*/


                    
<!-- REVOLUTION SLIDER FUNCTION FOR HOME PAGE STYLE 3 END  ===== -->
