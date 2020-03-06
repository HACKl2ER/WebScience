<script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-71644245-1', 'auto');
        ga('send', 'pageview');
    </script>

    <script type="text/javascript">
        /*<![CDATA[*/
        /*578436984f83532495f8f4d411f94b63*/
        jQuery(document).ready(function() {
            jQuery('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                jQuery(this).parent().siblings().removeClass('open');
                jQuery(this).parent().toggleClass('open');
            });
            jQuery('a.scroll-to-top').hide();
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > 40) {
                    jQuery('a.scroll-to-top').fadeIn('slow');
                } else {
                    jQuery('a.scroll-to-top').fadeOut('slow');
                }
            });
            jQuery('a.scroll-to-top').click(function() {
                jQuery("html, body").animate({
                    scrollTop: 0
                }, 2000);
                return false;
            });
            jQuery(".side-link .toggle").on('click', function() {
                jQuery(this).parents(".side-link").find("ul.mfu-link").slideToggle();
            });
            jQuery('.panel-collapse:not(".in")').collapse('show');
            //jQuery('a[href$=".pdf"]').before('<i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;');

            jQuery("a.linked-language").html(function() {
                return jQuery(this).html().replace("ZH_CN", "CN");
            });
        });

        /*801333c042aec704c645a4e1bde5c546*/
        jQuery('#bannerslide').bxSlider({
            auto: (jQuery("#bannerslide li").length > 1) ? true : false,
            mode: 'fade',
            speed: 1000,
            pager: (jQuery("#bannerslide li").length > 1) ? true : false,
            controls: false
        });

        /*61ab9970fd701c3292f13dce975e69df*/
        $('ul.new-archive a.toggle').click(function(e) {
            e.preventDefault();
            var $this = $(this);
            if ($this.next().hasClass('show')) {
                $this.next().slideUp(350);
                $this.next().removeClass('show');
            } else {
                $('ul.new-archive ul.inner.show').slideUp(350);
                $('ul.new-archive ul').removeClass('show');
                $this.next().slideDown(350);
                $this.next().addClass('show');
            }
        });
        /*]]>*/
    </script>
