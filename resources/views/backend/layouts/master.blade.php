<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <title>Booking &#8211; Bangla Centre</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="alternate" type="application/rss+xml" title="Bangla Centre &raquo; Feed"
        href="https://newsite.banglacentre.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Bangla Centre &raquo; Comments Feed"
        href="https://newsite.banglacentre.com/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/banglacentre.com\/newsite\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
       $(document).ready(function() {
           function status_update() {
            console.log('Updating status...');
               $.ajax({
                   type: "GET",
                   url: '/status_update',
                   success: function(result) {
                    console.log('Updating status. result..');
                   },
                   error: function() {
                       $('#statusElement').text('Error updating status');
                   }
               });
           }
              setInterval(status_update, 3600000);
       });
   </script>
   <script>
       $(document).ready(function() {
           function status_update_pending() {
            console.log('Updating status pending...');
               $.ajax({
                   type: "GET",
                   url: '/status_update_pending',
                   success: function(result) {
                    console.log('Updating status pending. result..');
                   },
                   error: function() {
                       $('#statusElement').text('Error updating status');
                   }
               });
           }
              setInterval(status_update_pending, 3600000);
       });
   </script>

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='{{ asset('ui/backend') }}/assets/css/dist-block-library-style.min.css' type='text/css'
        media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href='{{ asset('ui/backend') }}/assets/css/contact-form-7-includes-css-styles.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='{{ asset('ui/backend') }}/assets/css/fundee-assets-css-bootstrap.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='owl-carousel-css' href='{{ asset('ui/backend') }}/assets/css/fundee-assets-css-owl.carousel.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='animate-css' href='{{ asset('ui/backend') }}/assets/css/fundee-assets-css-animate.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='magnific-popup-css' href='{{ asset('ui/backend') }}/assets/css/fundee-assets-css-magnific-popup.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fontawesome-all-css' href='{{ asset('ui/backend') }}/assets/css/fundee-assets-css-fontawesome-all.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='fundee-themify-icons-css' href='{{ asset('ui/backend') }}/assets/css/fundee-assets-css-themify-icons.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='fundee-meanmenu-css' href='{{ asset('ui/backend') }}/assets/css/fundee-assets-css-meanmenu.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fundee-slick-css' href='{{ asset('ui/backend') }}/assets/css/fundee-assets-css-slick.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fundee-main-css' href='{{ asset('ui/backend') }}/assets/css/fundee-assets-css-main.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fundee-responsive-css' href='{{ asset('ui/backend') }}/assets/css/fundee-assets-css-responsive.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fundee-style-css' href='{{ asset('ui/backend') }}/assets/css/fundee-style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='{{ asset('ui/backend') }}/assets/css/elementor-assets-lib-eicons-css-elementor-icons.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='{{ asset('ui/backend') }}/assets/css/elementor-assets-css-frontend.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='{{ asset('ui/backend') }}/assets/css/elementor-assets-lib-swiper-css-swiper.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-2048-css' href='{{ asset('ui/backend') }}/assets/css/elementor-css-post-2048.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-pro-css' href='{{ asset('ui/backend') }}/assets/css/elementor-pro-assets-css-frontend.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css' href='{{ asset('ui/backend') }}/assets/css/elementor-assets-lib-font-awesome-css-all.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href='{{ asset('ui/backend') }}/assets/css/elementor-assets-lib-font-awesome-css-v4-shims.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-646-css' href='{{ asset('ui/backend') }}/assets/css/elementor-css-post-646.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-669-css' href='{{ asset('ui/backend') }}/assets/css/elementor-css-post-669.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='eael-general-css'
        href='{{ asset('ui/backend') }}/assets/css/essential-addons-for-elementor-lite-assets-front-end-css-view-general.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='{{ asset('ui/backend') }}/assets/css/elementor-assets-lib-font-awesome-css-fontawesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='{{ asset('ui/backend') }}/assets/css/elementor-assets-lib-font-awesome-css-solid.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='{{ asset('ui/backend') }}/assets/css/elementor-assets-lib-font-awesome-css-brands.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='{{ asset('ui/backend') }}/assets/css/elementor-assets-lib-font-awesome-css-regular.min.css' type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script>
        /* <![CDATA[ */
        var rcewpp = {
            "ajax_url": "https://newsite.banglacentre.com/wp-admin/admin-ajax.php",
            "nonce": "ac6cac2ae7",
            "home_url": "https://newsite.banglacentre.com/",
            "settings_icon": 'https://newsite.banglacentre.com/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings.png',
            "settings_hover_icon": 'https://newsite.banglacentre.com/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings_hover.png'
        };
        /* ]]\> */
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/jquery-jquery.min.js' id='jquery-core-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/jquery-jquery-migrate.min.js' id='jquery-migrate-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/elementor-assets-lib-font-awesome-js-v4-shims.min.js'
        id='font-awesome-4-shim-js'></script>
    <link rel="https://api.w.org/" href="https://newsite.banglacentre.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://newsite.banglacentre.com/wp-json/wp/v2/pages/4564" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://newsite.banglacentre.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.3" />
    <link rel="canonical" href="https://newsite.banglacentre.com/booking/" />
    <link rel='shortlink' href='https://newsite.banglacentre.com/?p=4564' />
    <link rel="alternate" type="application/json+oembed"
        href="https://newsite.banglacentre.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbanglacentre.com%2Fnewsite%2Fbooking%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://newsite.banglacentre.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbanglacentre.com%2Fnewsite%2Fbooking%2F&#038;format=xml" />
    <meta name="generator"
        content="Elementor 3.15.2; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <meta name="generator"
        content="Powered by Slider Revolution 6.6.15 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="{{ asset('ui/backend') }}/assets/images/logo-footer-2-1-100x100.png" sizes="32x32" />
    <link rel="icon" href="{{ asset('ui/backend') }}/assets/images/logo-footer-2-1.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('ui/backend') }}/assets/images/logo-footer-2-1.png" />
    <meta name="msapplication-TileImage"
        content="https://newsite.banglacentre.com/wp-content/uploads/2023/08/logo-footer-2-1.png" />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <style type="text/css" id="wp-custom-css">
        /** Start Block Kit CSS: 136-3-fc37602abad173a9d9d95d89bbe6bb80 **/
        .envato-block__preview {
            overflow: visible !important;
        }

        /** End Block Kit CSS: 136-3-fc37602abad173a9d9d95d89bbe6bb80 **/
        /** Start Block Kit CSS: 141-3-1d55f1e76be9fb1a8d9de88accbe962f **/
        .envato-kit-138-bracket .elementor-widget-container>*:before {
            content: "[";
            color: #ffab00;
            display: inline-block;
            margin-right: 4px;
            line-height: 1em;
            position: relative;
            top: -1px;
        }

        .envato-kit-138-bracket .elementor-widget-container>*:after {
            content: "]";
            color: #ffab00;
            display: inline-block;
            margin-left: 4px;
            line-height: 1em;
            position: relative;
            top: -1px;
        }

        /** End Block Kit CSS: 141-3-1d55f1e76be9fb1a8d9de88accbe962f **/
        /** Start Block Kit CSS: 135-3-c665d4805631b9a8bf464e65129b2f58 **/
        .envato-block__preview {
            overflow: visible;
        }

        /** End Block Kit CSS: 135-3-c665d4805631b9a8bf464e65129b2f58 **/
        /** Start Block Kit CSS: 143-3-7969bb877702491bc5ca272e536ada9d **/
        .envato-block__preview {
            overflow: visible;
        }

        /* Material Button Click Effect */
        .envato-kit-140-material-hit .menu-item a,
        .envato-kit-140-material-button .elementor-button {
            background-position: center;
            transition: background 0.8s;
        }

        .envato-kit-140-material-hit .menu-item a:hover,
        .envato-kit-140-material-button .elementor-button:hover {
            background: radial-gradient(circle, transparent 1%, #fff 1%) center/15000%;
        }

        .envato-kit-140-material-hit .menu-item a:active,
        .envato-kit-140-material-button .elementor-button:active {
            background-color: #FFF;
            background-size: 100%;
            transition: background 0s;
        }

        /* Field Shadow */
        .envato-kit-140-big-shadow-form .elementor-field-textual {
            box-shadow: 0 20px 30px rgba(0, 0, 0, .05);
        }

        /* FAQ */
        .envato-kit-140-faq .elementor-accordion .elementor-accordion-item {
            border-width: 0 0 1px !important;
        }

        /* Scrollable Columns */
        .envato-kit-140-scrollable {
            height: 100%;
            overflow: auto;
            overflow-x: hidden;
        }

        /* ImageBox: No Space */
        .envato-kit-140-imagebox-nospace:hover {
            transform: scale(1.1);
            transition: all 0.3s;
        }

        .envato-kit-140-imagebox-nospace figure {
            line-height: 0;
        }

        .envato-kit-140-slide .elementor-slide-content {
            background: #FFF;
            margin-left: -60px;
            padding: 1em;
        }

        .envato-kit-140-carousel .slick-active:not(.slick-current) img {
            padding: 20px !important;
            transition: all .9s;
        }

        /** End Block Kit CSS: 143-3-7969bb877702491bc5ca272e536ada9d **/
        /** Start Block Kit CSS: 144-3-3a7d335f39a8579c20cdf02f8d462582 **/
        .envato-block__preview {
            overflow: visible;
        }

        /* Envato Kit 141 Custom Styles - Applied to the element under Advanced */
        .elementor-headline-animation-type-drop-in .elementor-headline-dynamic-wrapper {
            text-align: center;
        }

        .envato-kit-141-top-0 h1,
        .envato-kit-141-top-0 h2,
        .envato-kit-141-top-0 h3,
        .envato-kit-141-top-0 h4,
        .envato-kit-141-top-0 h5,
        .envato-kit-141-top-0 h6,
        .envato-kit-141-top-0 p {
            margin-top: 0;
        }

        .envato-kit-141-newsletter-inline .elementor-field-textual.elementor-size-md {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .envato-kit-141-bottom-0 p {
            margin-bottom: 0;
        }

        .envato-kit-141-bottom-8 .elementor-price-list .elementor-price-list-item .elementor-price-list-header {
            margin-bottom: .5rem;
        }

        .envato-kit-141.elementor-widget-testimonial-carousel.elementor-pagination-type-bullets .swiper-container {
            padding-bottom: 52px;
        }

        .envato-kit-141-display-inline {
            display: inline-block;
        }

        .envato-kit-141 .elementor-slick-slider ul.slick-dots {
            bottom: -40px;
        }

        /** End Block Kit CSS: 144-3-3a7d335f39a8579c20cdf02f8d462582 **/
        /** Start Block Kit CSS: 71-3-d415519effd9e11f35d2438c58ea7ebf **/
        .envato-block__preview {
            overflow: visible;
        }

        /** End Block Kit CSS: 71-3-d415519effd9e11f35d2438c58ea7ebf **/
        /** Start Block Kit CSS: 105-3-0fb64e69c49a8e10692d28840c54ef95 **/
        .envato-kit-102-phone-overlay {
            position: absolute !important;
            display: block !important;
            top: 0%;
            left: 0%;
            right: 0%;
            margin: auto;
            z-index: 1;
        }

        /** End Block Kit CSS: 105-3-0fb64e69c49a8e10692d28840c54ef95 **/
        /** Start Block Kit CSS: 69-3-4f8cfb8a1a68ec007f2be7a02bdeadd9 **/
        .envato-kit-66-menu .e--pointer-framed .elementor-item:before {
            border-radius: 1px;
        }

        .envato-kit-66-subscription-form .elementor-form-fields-wrapper {
            position: relative;
        }

        .envato-kit-66-subscription-form .elementor-form-fields-wrapper .elementor-field-type-submit {
            position: static;
        }

        .envato-kit-66-subscription-form .elementor-form-fields-wrapper .elementor-field-type-submit button {
            position: absolute;
            top: 50%;
            right: 6px;
            transform: translate(0, -50%);
            -moz-transform: translate(0, -50%);
            -webmit-transform: translate(0, -50%);
        }

        .envato-kit-66-testi-slider .elementor-testimonial__footer {
            margin-top: -60px !important;
            z-index: 99;
            position: relative;
        }

        .envato-kit-66-featured-slider .elementor-slides .slick-prev {
            width: 50px;
            height: 50px;
            background-color: #ffffff !important;
            transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            left: -25px !important;
            -webkit-box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.32);
            -moz-box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.32);
            box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.32);
        }

        .envato-kit-66-featured-slider .elementor-slides .slick-prev:before {
            display: block;
            margin-top: 0px;
            margin-left: 0px;
            transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }

        .envato-kit-66-featured-slider .elementor-slides .slick-next {
            width: 50px;
            height: 50px;
            background-color: #ffffff !important;
            transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            right: -25px !important;
            -webkit-box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.32);
            -moz-box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.32);
            box-shadow: 0px 1px 2px 1px rgba(0, 0, 0, 0.32);
        }

        .envato-kit-66-featured-slider .elementor-slides .slick-next:before {
            display: block;
            margin-top: -5px;
            margin-right: -5px;
            transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }

        .envato-kit-66-orangetext {
            color: #f4511e;
        }

        .envato-kit-66-countdown .elementor-countdown-label {
            display: inline-block !important;
            border: 2px solid rgba(255, 255, 255, 0.2);
            padding: 9px 20px;
        }

        /** End Block Kit CSS: 69-3-4f8cfb8a1a68ec007f2be7a02bdeadd9 **/
    </style>
    <style type="text/css" class="options-output">
        body {
            font-weight: normal;
            font-style: normal;
            color: #333;
        }
    </style>
    <style id="wpforms-css-vars-root">
        :root {
            --wpforms-field-border-radius: 3px;
            --wpforms-field-background-color: #ffffff;
            --wpforms-field-border-color: rgba(0, 0, 0, 0.25);
            --wpforms-field-text-color: rgba(0, 0, 0, 0.7);
            --wpforms-label-color: rgba(0, 0, 0, 0.85);
            --wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
            --wpforms-label-error-color: #d63637;
            --wpforms-button-border-radius: 3px;
            --wpforms-button-background-color: #066aab;
            --wpforms-button-text-color: #ffffff;
            --wpforms-field-size-input-height: 43px;
            --wpforms-field-size-input-spacing: 15px;
            --wpforms-field-size-font-size: 16px;
            --wpforms-field-size-line-height: 19px;
            --wpforms-field-size-padding-h: 14px;
            --wpforms-field-size-checkbox-size: 16px;
            --wpforms-field-size-sublabel-spacing: 5px;
            --wpforms-field-size-icon-size: 1;
            --wpforms-label-size-font-size: 16px;
            --wpforms-label-size-line-height: 19px;
            --wpforms-label-size-sublabel-font-size: 14px;
            --wpforms-label-size-sublabel-line-height: 17px;
            --wpforms-button-size-font-size: 17px;
            --wpforms-button-size-height: 41px;
            --wpforms-button-size-padding-h: 15px;
            --wpforms-button-size-margin-top: 10px;
        }
    </style>
</head>

<body
    class="page-template page-template-elementor_header_footer page page-id-4564 wp-custom-logo elementor-default elementor-template-full-width elementor-kit-2048 elementor-page elementor-page-4564">
    <div data-elementor-type="header" data-elementor-id="646"
        class="elementor elementor-646 elementor-location-header" data-elementor-post-type="elementor_library">
        @include('backend.layouts.includes.header')
    </div>

    <main id="main" class="main">

        @yield('main_content')

    </main><!-- End #main -->

    <div data-elementor-type="footer" data-elementor-id="669"
        class="elementor elementor-669 elementor-location-footer" data-elementor-post-type="elementor_library">
        @include('backend.layouts.includes.footer')
    </div>
    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <link rel='stylesheet' id='e-animations-css' href='{{ asset('ui/backend') }}/assets/css/elementor-assets-lib-animations-animations.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='{{ asset('ui/backend') }}/assets/css/revslider-public-assets-css-rs6.css'
        type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/contact-form-7-includes-swv-js-index.js' id='swv-js'></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/banglacentre.com\/newsite\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/contact-form-7-includes-js-index.js' id='contact-form-7-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/revslider-public-assets-js-rbtools.min.js' defer async id='tp-tools-js'>
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/revslider-public-assets-js-rs6.min.js' defer async id='revmin-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-vendor-modernizr-3.5.0.min.js' id='modernizr-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-vendor-jquery-1.12.4.min.js' id='/jquery-1.12.4-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-popper.min.js' id='popper-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-bootstrap.min.js' id='bootstrap-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-owl.carousel.min.js' id='owl-carousel-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-isotope.pkgd.min.js' id='isotope-pkgd-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-slick.min.js' id='slick-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-jquery.meanmenu.min.js' id='jquery-meanmenu-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-ajax-form.js' id='ajax-form-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-wow.min.js' id='fundee-wow-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-jquery.scrollUp.min.js' id='jquery-scrollUp-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-jquery.counterup.min.js' id='jquery-counterup-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-waypoints.min.js' id='waypoints-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-imagesloaded.pkgd.min.js' id='imagesloaded-pkgd-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-jquery.knob.js' id='jquery-knob-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-jquery.appear.js' id='jquery-appear-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-jquery.magnific-popup.min.js' id='jquery-magnific-popup-js'>
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-plugins.js' id='jquery-plugins-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/fundee-assets-js-main.js' id='fundee-main-js'></script>
    <script type='text/javascript' id='eael-general-js-extra'>
        /* <![CDATA[ */
        var localize = {
            "ajaxurl": "https:\/\/banglacentre.com\/newsite\/wp-admin\/admin-ajax.php",
            "nonce": "f6956e1e7e",
            "i18n": {
                "added": "Added ",
                "compare": "Compare",
                "loading": "Loading..."
            },
            "eael_translate_text": {
                "required_text": "is a required field",
                "invalid_text": "Invalid",
                "billing_text": "Billing",
                "shipping_text": "Shipping",
                "fg_mfp_counter_text": "of"
            },
            "page_permalink": "https:\/\/banglacentre.com\/newsite\/booking\/",
            "cart_redirectition": "yes",
            "cart_page_url": "",
            "el_breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            },
            "ParticleThemesData": {
                "default": "{\"particles\":{\"number\":{\"value\":160,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":false,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":true,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":6,\"direction\":\"none\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"repulse\"},\"onclick\":{\"enable\":true,\"mode\":\"push\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
                "nasa": "{\"particles\":{\"number\":{\"value\":250,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":1,\"random\":true,\"anim\":{\"enable\":true,\"speed\":1,\"opacity_min\":0,\"sync\":false}},\"size\":{\"value\":3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":4,\"size_min\":0.3,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":1,\"direction\":\"none\",\"random\":true,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":600}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"bubble\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":250,\"size\":0,\"duration\":2,\"opacity\":0,\"speed\":3},\"repulse\":{\"distance\":400,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
                "bubble": "{\"particles\":{\"number\":{\"value\":15,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#1b1e34\"},\"shape\":{\"type\":\"polygon\",\"stroke\":{\"width\":0,\"color\":\"#000\"},\"polygon\":{\"nb_sides\":6},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":50,\"random\":false,\"anim\":{\"enable\":true,\"speed\":10,\"size_min\":40,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":200,\"color\":\"#ffffff\",\"opacity\":1,\"width\":2},\"move\":{\"enable\":true,\"speed\":8,\"direction\":\"none\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":false,\"mode\":\"grab\"},\"onclick\":{\"enable\":false,\"mode\":\"push\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
                "snow": "{\"particles\":{\"number\":{\"value\":450,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#fff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":true,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":5,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":500,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":2},\"move\":{\"enable\":true,\"speed\":6,\"direction\":\"bottom\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"bubble\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":0.5}},\"bubble\":{\"distance\":400,\"size\":4,\"duration\":0.3,\"opacity\":1,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
                "nyan_cat": "{\"particles\":{\"number\":{\"value\":150,\"density\":{\"enable\":false,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"star\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"http:\/\/wiki.lexisnexis.com\/academic\/images\/f\/fb\/Itunes_podcast_icon_300.jpg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":false,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":4,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":14,\"direction\":\"left\",\"random\":false,\"straight\":true,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":false,\"mode\":\"grab\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":200,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}"
            },
            "eael_login_nonce": "32ccf061c7",
            "eael_register_nonce": "f24f022eb1",
            "eael_lostpassword_nonce": "e5aebf079f",
            "eael_resetpassword_nonce": "0c069c795b"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/essential-addons-for-elementor-lite-assets-front-end-js-view-general.min.js'
        id='eael-general-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/elementor-pro-assets-lib-smartmenus-jquery.smartmenus.min.js'
        id='smartmenus-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/elementor-pro-assets-js-webpack-pro.runtime.min.js'
        id='elementor-pro-webpack-runtime-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/elementor-assets-js-webpack.runtime.min.js' id='elementor-webpack-runtime-js'>
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/elementor-assets-js-frontend-modules.min.js'
        id='elementor-frontend-modules-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/dist-vendor-wp-polyfill-inert.min.js' id='wp-polyfill-inert-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/dist-vendor-regenerator-runtime.min.js' id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/dist-vendor-wp-polyfill.min.js' id='wp-polyfill-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/dist-hooks.min.js' id='wp-hooks-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/dist-i18n.min.js' id='wp-i18n-js'></script>
    <script id="wp-i18n-js-after" type="text/javascript">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script id="elementor-pro-frontend-js-before" type="text/javascript">
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/banglacentre.com\/newsite\/wp-admin\/admin-ajax.php",
            "nonce": "99ebab4a7e",
            "urls": {
                "assets": "https:\/\/banglacentre.com\/newsite\/wp-content\/plugins\/elementor-pro\/assets\/",
                "rest": "https:\/\/banglacentre.com\/newsite\/wp-json\/"
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                }
            },
            "facebook_sdk": {
                "lang": "en_US",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/banglacentre.com\/newsite\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/elementor-pro-assets-js-frontend.min.js' id='elementor-pro-frontend-js'>
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/elementor-assets-lib-waypoints-waypoints.min.js' id='elementor-waypoints-js'>
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/jquery-ui-core.min.js' id='jquery-ui-core-js'></script>
    <script id="elementor-frontend-js-before" type="text/javascript">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.15.2",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "additional_custom_breakpoints": true,
                "theme_builder_v2": true,
                "landing-pages": true,
                "page-transitions": true,
                "notes": true,
                "loop": true,
                "form-submissions": true,
                "e_scroll_snap": true
            },
            "urls": {
                "assets": "https:\/\/banglacentre.com\/newsite\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper-container",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 4564,
                "title": "Booking%20%E2%80%93%20Bangla%20Centre",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/elementor-assets-js-frontend.min.js' id='elementor-frontend-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/elementor-pro-assets-js-elements-handlers.min.js'
        id='pro-elements-handlers-js'></script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/elementor-pro-assets-lib-sticky-jquery.sticky.min.js' id='e-sticky-js'>
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/ph2-underscore.min.js' id='underscore-js'></script>
    <script type='text/javascript' id='wp-util-js-extra'>
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/newsite\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/nt1-wp-util.min.js' id='wp-util-js'></script>
    <script type='text/javascript' id='wpforms-elementor-js-extra'>
        /* <![CDATA[ */
        var wpformsElementorVars = {
            "captcha_provider": "recaptcha",
            "recaptcha_type": "v2"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('ui/backend') }}/assets/js/wpforms-assets-js-integrations-elementor-frontend.min.js'
        id='wpforms-elementor-js'></script>

</body>

</html>
