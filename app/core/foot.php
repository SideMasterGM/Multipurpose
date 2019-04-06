
    <script src="<?php echo PD_SRC_JS; ?>/jquery.min.js"></script>

    <script src="<?php echo PD_SRC_JS; ?>/popper.min.js"></script>
    <script src="<?php echo PD_SRC_JS; ?>/bootstrap.min.js"></script>

    <script src='../../../www.google.com/recaptcha/api.js'></script>

    <script src="<?php echo PD_SRC_JS; ?>/mega-menu/mega_menu.js"></script>

    <script src="<?php echo PD_SRC_JS; ?>/main.js"></script>

    <script src="<?php echo PD_SRC_JS; ?>/revolution/js/revolution.addon.particles.min.js"></script>

    <script src="<?php echo PD_SRC_JS; ?>/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo PD_SRC_JS; ?>/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script src="<?php echo PD_SRC_JS; ?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo PD_SRC_JS; ?>/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?php echo PD_SRC_JS; ?>/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo PD_SRC_JS; ?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo PD_SRC_JS; ?>/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo PD_SRC_JS; ?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo PD_SRC_JS; ?>/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?php echo PD_SRC_JS; ?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo PD_SRC_JS; ?>/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <script src="<?php echo PD_SRC_JS; ?>/style-customizer.js"></script>

    <script src="<?php echo PD_SRC_JS; ?>/custom.js"></script>

    <script>
        var revapi1, tpj = jQuery;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_1").revolution == undefined) { revslider_showDoubleJqueryError("#rev_slider_1_1"); } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    particles: {
                        startSlide: "first",
                        endSlide: "last",
                        zIndex: "1",
                        particles: {
                            number: { value: 300 },
                            color: { value: "#ffffff" },
                            shape: {
                                type: "circle",
                                stroke: { width: 0, color: "#ffffff", opacity: 1 },
                                image: { src: "" }
                            },
                            opacity: {
                                value: 0.8,
                                random: true,
                                min: 0.4,
                                anim: { enable: true, speed: 7, opacity_min: 0.1, sync: false }
                            },
                            size: {
                                value: 1,
                                random: true,
                                min: 1,
                                anim: { enable: false, speed: 40, size_min: 1, sync: false }
                            },
                            line_linked: { enable: false, distance: 150, color: "#ffffff", opacity: 0.4, width: 1 },
                            move: { enable: true, speed: 1, direction: "none", random: true, min_speed: 2, straight: false, out_mode: "out" }
                        },
                        interactivity: {
                            events: {
                                onhover: { enable: false, mode: "grab" },
                                onclick: { enable: false, mode: "repulse" }
                            },
                            modes: {
                                grab: {
                                    distance: 400,
                                    line_linked: { opacity: 0.5 }
                                },
                                bubble: { distance: 400, size: 40, opacity: 0.01 },
                                repulse: { distance: 200 }
                            }
                        }
                    },
                    navigation: { onHoverStop: "off", },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1170,
                    gridheight: 790,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner0",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: { simplifyAll: "off", nextSlideOnWindowFocus: "off", disableFocusListener: false, }
                });
            }
            RsParticlesAddOn(revapi1);
        }); /*ready*/
        </script>
    </body>

<!-- Mirrored from iqonicthemes.com/themes/qwilo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2019 13:08:57 GMT -->
</html>