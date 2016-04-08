<!-- Footer -->
<footer itemscope itemtype="http://schema.org/WPFooter">
    <div class="container">
        <div class="row">
            <div class="hidden-xs hidden-sm col-md-10 col-lg-10 col-md-offset-1">
                <ul class="footer-nav">
                    <li>
                        <a id="footer_menu_home" href="/">Home</a>
                    </li>
                    <li>
                        <a id="footer_menu_product" href="/ergonomics">Ergonomics</a>
                    </li>
                    <li>
                        <a id="footer_menu_product" href="/sports">Sports</a>
                    </li>
                    <li>
                        <a id="footer_menu_about" href="/about">About us</a>
                    </li>
                    <li>
                        <a href="/project">Start Your Project</a>
                    </li>
                    <li>
                        <a id="footer_menu_signup" href="/signup">Sign up</a>
                    </li>
                    <li>
                        <a id="footer_menu_blog" href="http://blog.heddoko.com" target="_blank">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Social buttons -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer-social">
                <p><a id="footer_social_facebook" href="https://www.facebook.com/heddoko" target="_blank"><i class="fa fa-3x fa-facebook"></i></a>
                    <a id="footer_social_twitter" href="https://twitter.com/heddoko" target="_blank"><i class="fa fa-3x fa-twitter"></i></a>
                    <a id="footer_social_linkedin" href="https://www.linkedin.com/company/heddoko" target="_blank"><i class="fa fa-3x fa-linkedin"></i></a>
                    <a id="footer_social_instagram" href="https://instagram.com/heddoko/" target="_blank"><i class="fa fa-3x fa-instagram"></i></a>
                    <a id="footer_social_pinterest" href="https://www.pinterest.com/heddoko/" target="_blank"><i class="fa fa-3x fa-pinterest"></i></a>
                    <a id="footer_social_vimeo" href="https://vimeo.com/user29815178" target="_blank"><i class="fa fa-3x fa-vimeo"></i></a></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p id="copyright">&copy; Copyright Heddoko</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->
<!-- JavaScript -->
<script type="text/javascript">
! function() {
    var analytics = window.analytics = window.analytics || [];
    if (!analytics.initialize)
        if (analytics.invoked) window.console && console.error && console.error("Segment snippet included twice.");
        else {
            analytics.invoked = !0;
            analytics.methods = ["trackSubmit", "trackClick", "trackLink", "trackForm", "pageview", "identify", "reset", "group", "track", "ready", "alias", "page", "once", "off", "on"];
            analytics.factory = function(t) {
                return function() {
                    var e = Array.prototype.slice.call(arguments);
                    e.unshift(t);
                    analytics.push(e);
                    return analytics
                }
            };
            for (var t = 0; t < analytics.methods.length; t++) {
                var e = analytics.methods[t];
                analytics[e] = analytics.factory(e)
            }
            analytics.load = function(t) {
                var e = document.createElement("script");
                e.type = "text/javascript";
                e.async = !0;
                e.src = ("https:" === document.location.protocol ? "https://" : "http://") + "cdn.segment.com/analytics.js/v1/" + t + "/analytics.min.js";
                var n = document.getElementsByTagName("script")[0];
                n.parentNode.insertBefore(e, n)
            };
            analytics.SNIPPET_VERSION = "3.1.0";
            analytics.load("OGpIAlcR1hwRjtFcz2iB94CgPJI9xErY");
            analytics.page()
        }
}();
</script>
<script type="text/javascript" src="<?php echo $dir; ?>js/modernizr.custom.js"></script>
<script src="<?php echo $dir; ?>js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $dir; ?>js/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<!-- <script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!-- Scripts -->
<script type="text/javascript" src="<?= $dir; ?>js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?= $dir; ?>js/jquery.js"></script>
<script type="text/javascript" src="<?= $dir; ?>js/bootstrap.js"></script>
<script type="text/javascript" src="<?= $dir; ?>js/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="<?= $dir; ?>js/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript" src="<?= $dir; ?>js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?= $dir; ?>js/jquery.appear.js"></script>
<script type="text/javascript" src="<?= $dir; ?>js/jquery.animateNumber.js"></script>
<script type="text/javascript" src="<?= $dir; ?>js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?= $dir; ?>js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="<?= $dir; ?>js/jquery.gmap.js"></script>
<script src="<?= $dir; ?>js/stellar.js"></script>
<script src="<?= $dir; ?>js/portfolio.js"></script>
<script src="<?= $dir; ?>js/contact.js"></script>
<script src="<?= $dir; ?>js/jCProgress-1.0.3.js"></script>
<!-- <script src="<?= $dir; ?>js/grid.min.js"></script> -->
<script src="<?= $dir; ?>js/grid.js"></script>
<script src="<?= $dir; ?>js/owl-carousel/owl.carousel.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script src="<?= $dir; ?>js/main.js"></script>
<!-- Pinterest -->
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
