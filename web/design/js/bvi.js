!function (i) {
    var e;
    if ("function" == typeof define && define.amd && (define(i), e = !0), "object" == typeof exports && (module.exports = i(), e = !0), !e) {
        var t = window.Cookies, a = window.Cookies = i();
        a.noConflict = function () {
            return window.Cookies = t, a
        }
    }
}(function () {
    function i() {
        for (var i = 0, e = {}; i < arguments.length; i++) {
            var t = arguments[i];
            for (var a in t) e[a] = t[a]
        }
        return e
    }

    function e(i) {
        return i.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent)
    }

    return function t(a) {
        function s() {
        }

        function n(e, t, n) {
            if ("undefined" != typeof document) {
                "number" == typeof (n = i({path: "/"}, s.defaults, n)).expires && (n.expires = new Date(1 * new Date + 864e5 * n.expires)), n.expires = n.expires ? n.expires.toUTCString() : "";
                try {
                    var l = JSON.stringify(t);
                    /^[\{\[]/.test(l) && (t = l)
                } catch (i) {
                }
                t = a.write ? a.write(t, e) : encodeURIComponent(String(t)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent), e = encodeURIComponent(String(e)).replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent).replace(/[\(\)]/g, escape);
                var o = "";
                for (var v in n) n[v] && (o += "; " + v, !0 !== n[v] && (o += "=" + n[v].split(";")[0]));
                return document.cookie = e + "=" + t + o
            }
        }

        function l(i, t) {
            if ("undefined" != typeof document) {
                for (var s = {}, n = document.cookie ? document.cookie.split("; ") : [], l = 0; l < n.length; l++) {
                    var o = n[l].split("="), v = o.slice(1).join("=");
                    t || '"' !== v.charAt(0) || (v = v.slice(1, -1));
                    try {
                        var r = e(o[0]);
                        if (v = (a.read || a)(v, r) || e(v), t) try {
                            v = JSON.parse(v)
                        } catch (i) {
                        }
                        if (s[r] = v, i === r) break
                    } catch (i) {
                    }
                }
                return i ? s[i] : s
            }
        }

        return s.set = n, s.get = function (i) {
            return l(i, !1)
        }, s.getJSON = function (i) {
            return l(i, !0)
        }, s.remove = function (e, t) {
            n(e, "", i(t, {expires: -1}))
        }, s.defaults = {}, s.withConverter = t, s
    }(function () {
    })
}), function (i) {
    "use strict";
    i.bvi = function (e) {
        var t, a, s, n, l, o, v, r, b, c, g, d = i.extend({
                bvi_locale: {},
                bvi_target: ".bvi-open",
                bvi_theme: "white",
                bvi_font: "arial",
                bvi_font_size: 16,
                bvi_letter_spacing: "normal",
                bvi_line_height: "normal",
                bvi_images: !0,
                bvi_reload: !1,
                bvi_fixed: !0,
                bvi_tts: !0,
                bvi_flash_iframe: !0,
                bvi_hide: !1
            }, e), h = function () {
                var i = window.navigator.userAgent, e = i.indexOf("MSIE ");
                if (e > 0) return parseInt(i.substring(e + 5, i.indexOf(".", e)), 10);
                if (i.indexOf("Trident/") > 0) {
                    var t = i.indexOf("rv:");
                    return parseInt(i.substring(t + 3, i.indexOf(".", t)), 10)
                }
                var a = i.indexOf("Edge/");
                if (a > 0) return parseInt(i.substring(a + 5, i.indexOf(".", a)), 10);
                return !1
            }(), f = d.bvi_target, m = window.speechSynthesis, p = void 0 !== m, u = "992",
            k = window.innerWidth > 0 ? window.innerWidth : screen.width;

        function C(e) {
            if ("true" === Cookies.get("bvi-tts") && p) {
                m.cancel();
                for (var t = m.getVoices(), a = new RegExp("^[\\s\\S]{" + Math.floor(60) + ",120}[.!?,]{1}|^[\\s\\S]{1,120}$|^[\\s\\S]{1,120} "), s = [], n = e; n.length > 0;) s.push(n.match(a)[0]), n = n.substring(s[s.length - 1].length);
                i.each(s, function () {
                    var i = new SpeechSynthesisUtterance(this.trim());
                    i.volume = 1, i.rate = 1, i.pitch = 1, i.lang = "ru-RU", i.onstart = function (e) {
                        console.log(i)
                    }, i.onend = function (i) {
                    }, i.onpause = function (i) {
                    }, i.onresume = function (i) {
                    }, i.onboundary = function (i) {
                    };
                    for (var e = 0; e < t.length; e++) "ru-RU" === t[e].lang && "Google русский" === t[e].voiceURI ? (i.voice = t[e], i.voiceURI = t[e].voiceURI) : "ru-RU" === t[e].lang && "Microsoft Irina Desktop - Russian" === t[e].voiceURI ? (i.voice = t[e], i.voiceURI = t[e].voiceURI) : "ru-RU" === t[e].lang && "urn:moz-tts:sapi:Microsoft Irina Desktop - Russian?ru-RU" === t[e].voiceURI ? (i.voice = t[e], i.voiceURI = t[e].voiceURI) : "ru-RU" === t[e].lang && "com.apple.speech.synthesis.voice.yuri" === t[e].voiceURI && (i.voice = t[e], i.voiceURI = t[e].voiceURI);
                    m.speak(i)
                })
            }
        }

        function _() {
            var e, t = i(".bvi-tts");
            i(".bvi-tts-link").remove(), i(".bvi-tts-text").contents().unwrap(), "true" === Cookies.get("bvi-tts") && p ? (t.each(function (t) {
                e = "bvi-tts-text-id-" + t, i(this).wrapInner('<div class="bvi-tts-text ' + e + '"></div>'), i(this).prepend('<div class="bvi-tts-link bvi-tts-link-id-' + t + '" data-bvi-tts-class-text=".' + e + '" data-bvi-tts-link-id=".bvi-tts-link-id-' + t + '">\n    <a href="#" class="bvi-tts-play bvi-link">Воспроизвести</a>\n    <a href="#" class="bvi-tts-pause bvi-link disabled">Пауза</i></a>\n    <a href="#" class="bvi-tts-resume bvi-link disabled">Продолжить</i></a>\n    <a href="#" class="bvi-tts-stop bvi-link disabled">Стоп</i></a>\n</div>')
            }), i(".bvi-tts-link").show(), i(".bvi-tts-play").click(function () {
                m.cancel();
                var e = i(this).parent().data("bvi-tts-class-text"), t = i(this).parent().data("bvi-tts-link-id");
                return C(i(e).text()), i(".bvi-tts-play").removeClass("disabled"), i(".bvi-tts-pause").addClass("disabled"), i(".bvi-tts-resume").addClass("disabled"), i(".bvi-tts-stop").addClass("disabled"), i(t + " .bvi-tts-play").addClass("disabled"), i(t + " .bvi-tts-pause").removeClass("disabled"), i(t + " .bvi-tts-stop").removeClass("disabled"), !1
            }), i(".bvi-tts-resume").click(function () {
                var e = i(this).parent().data("bvi-tts-link-id");
                return i(e + " .bvi-tts-pause").removeClass("disabled"), i(this).addClass("disabled"), m.resume(), !1
            }), i(".bvi-tts-pause").click(function () {
                var e = i(this).parent().data("bvi-tts-link-id");
                return i(e + " .bvi-tts-resume").removeClass("disabled"), i(this).addClass("disabled"), m.pause(), !1
            }), i(".bvi-tts-stop").click(function () {
                m.cancel();
                var e = i(this).parent().data("bvi-tts-link-id");
                return i(this).addClass("disabled"), i(e + " .bvi-tts-play").removeClass("disabled"), i(e + " .bvi-tts-pause").addClass("disabled"), i(e + " .bvi-tts-resume").addClass("disabled"), !1
            })) : (i(".bvi-tts-link").remove(), i(".bvi-tts-text").contents().unwrap())
        }

        function S(e, t, a) {
            Cookies.set(t, a, {path: "/", expires: 1}), i(".bvi-body").attr(e, Cookies.get(t)), w()
        }

        function w() {
            var e = Cookies.get("bvi-images");
            i(".bvi-body *").each(function () {
                "none" != i(this).css("background-image").replace(/^url\(['"]?/, "").replace(/['"]?\)$/, "") && i(this).addClass("bvi-background-image")
            }), i("img").each(function () {
                i(this).addClass("bvi-img")
            }), "true" === e && (i("img").each(function () {
                if (i(this).show(), i("div.bvi-img").remove(), 11 == h || 10 == h || 9 == h) {
                    var e = i(this).attr("data-bvi-img-original") || this.src;
                    this.src = e
                }
            }), i(".bvi-body *").each(function () {
                var e = i(this), t = e.css("background-image").replace(/^url\(['"]?/, "").replace(/['"]?\)$/, "");
                if ("none" != t && (11 == h || 10 == h || 9 == h)) {
                    if (t.match("^(https?|http)://[-a-zA-Z0-9+&@#/%?=~_|!:,.;]*[-a-zA-Z0-9+&@#/%=~_|]")) {
                        var a = e.attr("data-bvi-background-image-original") || t;
                        e.css("background-image", "url(" + a + ")")
                    }
                }
            })), "false" === e && (i("div.bvi-img").remove(), i("img").each(function () {
                i(this).hide();
                var e = this.alt || d.bvi_locale.image, t = i(this).attr("class") || "bvi-class-none",
                    a = i(this).attr("id") || "bvi-id-none";
                i(this).after(i('<div class="' + t + '" id="' + a + '" style="width: ' + i(this).get(0).naturalWidth + 'px; height: 100%;">').html(e))
            })), "grayscale" === e && (i("img").each(function () {
                if (i(this).show(), i("div.bvi-img").remove(), 11 == h || 10 == h || 9 == h) {
                    if (i(this).attr("data-bvi-img-original", this.src), location.hostname !== function (i) {
                        var e;
                        e = i.indexOf("//") > -1 ? i.split("/")[2] : i.split("/")[0];
                        return e = (e = e.split(":")[0]).split("?")[0]
                    }(this.src)) return !1;
                    var e = x(this.src);
                    this.src = e
                }
            }), i(".bvi-body *").each(function () {
                var e = i(this), t = e.css("background-image").replace(/^url\(['"]?/, "").replace(/['"]?\)$/, "");
                if ("none" != t && (11 == h || 10 == h || 9 == h)) {
                    if (t.match("^(https?|http)://[-a-zA-Z0-9+&@#/%?=~_|!:,.;]*[-a-zA-Z0-9+&@#/%=~_|]")) {
                        var a = x(t);
                        e.attr("data-bvi-background-image-original", t), e.css("background-image", "url(" + a + ") !important")
                    }
                }
            }))
        }

        function x(i) {
            var e = document.createElement("canvas"), t = e.getContext("2d"), a = new Image;
            a.src = i, e.width = a.naturalWidth || a.offsetWidth || a.width, e.height = a.naturalHeight || a.offsetHeight || a.height, t.drawImage(a, 0, 0);
            for (var s = t.getImageData(0, 0, e.width, e.height), n = 0; n < s.height; n++) for (var l = 0; l < s.width; l++) {
                var o = 4 * n * s.width + 4 * l, v = (s.data[o] + s.data[o + 1] + s.data[o + 2]) / 3;
                s.data[o] = v, s.data[o + 1] = v, s.data[o + 2] = v
            }
            return t.putImageData(s, 0, 0, 0, 0, s.width, s.height), e.toDataURL()
        }

        function y() {
            8 == h || 7 == h || 6 == h || 5 == h ? (console.log("Bvi console: Браузер не поддерживается."), alert(confirm("Браузер не поддерживается."))) : "true" === Cookies.get("bvi-panel-active") ? (i(f).addClass("bvi-hide").after(i('<a href="#" class="bvi-panel-close" title="' + d.bvi_locale.panelClose + '">' + d.bvi_locale.panelClose + "</a>")), function () {
                i("head").append('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">'), i("body").wrapInner('<div class="bvi-body"></div>'), i("body").prepend('<div class="bvi-panel">\n    <div class="bvi-container-fluid">\n        <div class="bvi-row bvi-no-gutters">\n            <div class="bvi-col-12">\n                <div class="bvi-panel-toggler">\n                    <a href="#" id="bvi-toggler" class="bvi-link" title="' + d.bvi_locale.menu + '">' + d.bvi_locale.menu + '</a>\n                    <a href="#" id="bvi-toggler-close" class="bvi-link" title="' + d.bvi_locale.panelClose + '">' + d.bvi_locale.panelClose + '</a>\n                    <a href="#" id="bvi-toggler-menu-hide" class="bvi-link" title="' + d.bvi_locale.panelHide + '"><i class="bvi-images bvi-images-minus-square-o "></i></a>\n                </div>\n            </div>\n        </div>\n    </div>\n    <div class="bvi-panel-container bvi-container">\n        <div class="bvi-row bvi-no-gutters">\n            <div class="bvi-col-6 bvi-col-sm-6 bvi-col-md-2 bvi-col-lg-2 bvi-col-xl-2 bvi-text-center">\n                <div class="bvi-title">' + d.bvi_locale.fontSize + ' <span id="bvi-font-size"></span> px</div>\n                <a href="#" id="bvi-font-size-less" class="bvi-link" title="' + d.bvi_locale.fontSizeLess + '">A -</a>\n                <a href="#" id="bvi-font-size-more" class="bvi-link" title="' + d.bvi_locale.fontSizeMore + '">A +</a>\n            </div>\n            <div class="bvi-col-6 bvi-col-sm-6 bvi-col-md-4 bvi-col-lg-4 bvi-col-xl-4 bvi-text-center">\n                <div class="bvi-title">' + d.bvi_locale.theme + '</div>\n                <a href="#" id="bvi-theme-white" class="bvi-link bvi-link-white " title="' + d.bvi_locale.themeWhite + '">Ранг</a>\n                <a href="#" id="bvi-theme-black" class="bvi-link bvi-link-black" title="' + d.bvi_locale.themeBlack + '">Ранг</a>\n                <a href="#" id="bvi-theme-blue" class="bvi-link bvi-link-blue" title="' + d.bvi_locale.themeBlue + '">Ранг</a>\n                <a href="#" id="bvi-theme-brown" class="bvi-link bvi-link-brown" title="' + d.bvi_locale.themeBrown + '">Ранг</a>\n                <a href="#" id="bvi-theme-green" class="bvi-link bvi-link-green" title="' + d.bvi_locale.themeGreen + '">Ранг</a>\n            </div>\n            <div class="bvi-col-6 bvi-col-sm-6 bvi-col-md-3 bvi-col-lg-3 bvi-col-xl-2 bvi-text-center">\n                <div class="bvi-title">' + d.bvi_locale.images + '</div>\n                <a href="#" id="bvi-images-true" class="bvi-link" title="' + d.bvi_locale.imagesOn + '"><i class="bvi-images bvi-images-on"></i></a>\n                <a href="#" id="bvi-images-false" class="bvi-link" title="' + d.bvi_locale.imagesOff + '"><i class="bvi-images bvi-images-off"></i></a>\n                <a href="#" id="bvi-images-grayscale" class="bvi-link" title="' + d.bvi_locale.imagesGrayscale + '"><i class="bvi-images bvi-images-adjust"></i></a>\n            </div>\n            <div class="bvi-col-6 bvi-col-sm-6 bvi-col-md-3 bvi-col-lg-3 bvi-col-xl-4 bvi-text-center">\n                <div class="bvi-title">' + d.bvi_locale.extra + '</div>\n                <a href="#" id="bvi-setting" class="bvi-link" title="' + d.bvi_locale.settings + '">' + d.bvi_locale.settings + '</a>\n                <a href="#" id="bvi-panel-close" class="bvi-link" title="' + d.bvi_locale.panelClose + '"><i class="bvi-images bvi-images-eye-slash"></i></a>\n                <a href="#" id="bvi-panel-hide" class="bvi-link" title="' + d.bvi_locale.panelHide + '"><i class="bvi-images bvi-images-minus-square-o"></i></a>\n            </div>\n        </div>\n        <div class="bvi-setting-menu bvi-hide-lg">\n            <div class="bvi-row bvi-no-gutters">\n                <div class="bvi-col-sm-12 bvi-col-md-6 bvi-col-lg-4 bvi-col-xl-4 bvi-text-center">\n                    <div class="bvi-title">' + d.bvi_locale.lineHeight + '</div>\n                    <a href="#" id="bvi-line-height-normal" class="bvi-link" title="' + d.bvi_locale.lineHeightNormal + '">' + d.bvi_locale.lineHeightNormalShort + '</a>\n                    <a href="#" id="bvi-line-height-average" class="bvi-link" title="' + d.bvi_locale.lineHeightAverage + '">' + d.bvi_locale.lineHeightAverageShort + '</a>\n                    <a href="#" id="bvi-line-height-big" class="bvi-link" title="' + d.bvi_locale.lineHeightBig + '">' + d.bvi_locale.lineHeightBigShort + '</a>\n                </div>\n                <div class="bvi-col-sm-12 bvi-col-md-6 bvi-col-lg-5 bvi-col-xl-5 bvi-text-center">\n                    <div class="bvi-title">' + d.bvi_locale.letterSpacing + '</div>\n                    <a href="#" id="bvi-letter-spacing-normal" class="bvi-link" title="' + d.bvi_locale.letterSpacingNormal + '">' + d.bvi_locale.letterSpacingNormalShort + '</a>\n                    <a href="#" id="bvi-letter-spacing-average" class="bvi-link"\n                       title="' + d.bvi_locale.letterSpacingAverage + '">' + d.bvi_locale.letterSpacingAverageShort + '</a>\n                    <a href="#" id="bvi-letter-spacing-big" class="bvi-link" title="' + d.bvi_locale.letterSpacingBig + '">' + d.bvi_locale.letterSpacingBigShort + '</a>\n                </div>\n                <div class="bvi-col-sm-12 bvi-col-md-6 bvi-col-lg-3 bvi-col-xl-3 bvi-text-center">\n                    <div class="bvi-title">' + d.bvi_locale.font + '</div>\n                    <a href="#" id="bvi-font-family-arial" class="bvi-link" title="' + d.bvi_locale.fontArial + '">' + d.bvi_locale.fontArialShort + '</a>\n                    <a href="#" id="bvi-font-family-times" class="bvi-link" title="' + d.bvi_locale.fontTimes + '">' + d.bvi_locale.fontTimesShort + '</a>\n                </div>\n                <div class="bvi-col-sm-12 bvi-col-md-12 bvi-col-lg-6 bvi-col-xl-6 bvi-text-right">\n                    <div class="bvi-title">&nbsp;</div>\n                    <a href="#" id="bvi-settings-default" class="bvi-link" title="' + d.bvi_locale.settingsDefaultReturn + '">' + d.bvi_locale.settingsDefault + '</a>\n                    <a href="#" id="bvi-setting-close" class="bvi-link" title="' + d.bvi_locale.settingsClose + '">' + d.bvi_locale.settingsClose + '</a>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n<a href="#" id="bvi-panel-show" class="bvi-link bvi-link-top"><i class="bvi-images bvi-images-eye"></i></a>'), k >= u && i(".bvi-panel-container").show();
                k <= u ? i(".bvi-panel-container").removeClass("bvi-container").addClass("bvi-container-fluid") : i(".bvi-panel-container").removeClass("bvi-container-fluid").addClass("bvi-container");
                (void 0 !== window.pageYOffset ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop) > 99 && "true" == Cookies.get("bvi-fixed") && i(".bvi-panel").addClass("bvi-fixed-top");
                i(window).scroll(function () {
                    i(this).scrollTop() >= 99 ? "true" == Cookies.get("bvi-fixed") && i(".bvi-panel").addClass("bvi-fixed-top") : i(".bvi-panel").removeClass("bvi-fixed-top")
                }), function () {
                    void 0 !== Cookies.get("bvi-font-size") && void 0 !== Cookies.get("bvi-theme") && void 0 !== Cookies.get("bvi-images") && void 0 !== Cookies.get("bvi-line-height") && void 0 !== Cookies.get("bvi-letter-spacing") && void 0 !== Cookies.get("bvi-tts") && void 0 !== Cookies.get("bvi-font-family") && void 0 !== Cookies.get("bvi-panel-hide") && void 0 !== Cookies.get("bvi-flash-iframe") && void 0 !== Cookies.get("bvi-reload") && void 0 !== Cookies.get("bvi-fixed") || (Cookies.set("bvi-font-size", d.bvi_font_size, {
                        path: "/",
                        expires: 1
                    }), Cookies.set("bvi-theme", d.bvi_theme, {
                        path: "/",
                        expires: 1
                    }), Cookies.set("bvi-images", d.bvi_images, {
                        path: "/",
                        expires: 1
                    }), Cookies.set("bvi-line-height", d.bvi_line_height, {
                        path: "/",
                        expires: 1
                    }), Cookies.set("bvi-letter-spacing", d.bvi_letter_spacing, {
                        path: "/",
                        expires: 1
                    }), Cookies.set("bvi-tts", d.bvi_tts, {
                        path: "/",
                        expires: 1
                    }), Cookies.set("bvi-font-family", d.bvi_font, {
                        path: "/",
                        expires: 1
                    }), Cookies.set("bvi-panel-hide", d.bvi_hide, {
                        path: "/",
                        expires: 1
                    }), Cookies.set("bvi-flash-iframe", d.bvi_flash_iframe, {
                        path: "/",
                        expires: 1
                    }), Cookies.set("bvi-reload", d.bvi_reload, {
                        path: "/",
                        expires: 1
                    }), Cookies.set("bvi-fixed", d.bvi_fixed, {
                        path: "/",
                        expires: 1
                    })), i(".bvi-body").attr({
                        "data-bvi-panel-hide": Cookies.get("bvi-panel-hide"),
                        "data-bvi-size": Cookies.get("bvi-font-size"),
                        "data-bvi-theme": Cookies.get("bvi-theme"),
                        "data-bvi-images": Cookies.get("bvi-images"),
                        "data-bvi-line-height": Cookies.get("bvi-line-height"),
                        "data-bvi-letter-spacing": Cookies.get("bvi-letter-spacing"),
                        "data-bvi-font-family": Cookies.get("bvi-font-family"),
                        "data-bvi-flash-iframe": Cookies.get("bvi-flash-iframe"),
                        "data-bvi-reload": Cookies.get("bvi-reload"),
                        "data-bvi-tts": Cookies.get("bvi-tts"),
                        "data-bvi-fixed": Cookies.get("bvi-fixed")
                    }), i("#bvi-font-size").text(Cookies.get("bvi-font-size"));
                    var e = Cookies.get("bvi-panel-hide");
                    "false" === e || void 0 === e ? (i(".bvi-panel").show(), i(".bvi-link-top").hide()) : (i(".bvi-panel").hide(), i(".bvi-link-top").show("slow"))
                }(), w()
            }(), _(), i("#bvi-panel-close, .bvi-panel-close, #bvi-toggler-close").click(function (e) {
                e.preventDefault(), C("Сайтнинг одатий кўриниши"), "true" === Cookies.get("bvi-reload") && document.location.reload(!0), i(".bvi-body *").each(function () {
                    var e = i(this),
                        t = e.css("background-image").replace(/.*\s?url\([\'\"]?/, "").replace(/[\'\"]?\).*/, "");
                    if ("none" != t && (11 == h || 10 == h || 9 == h)) {
                        var a = e.attr("data-bvi-background-image-original") || t;
                        e.css("background-image", "url(" + a + ")"), e.removeClass("bvi-background-image")
                    }
                }), i("img").each(function () {
                    if (i(this).show(), i("div.bvi-img").remove(), i(this).removeClass("bvi-background-image"), 11 == h || 10 == h || 9 == h) {
                        var e = i(this).attr("data-bvi-img-original") || this.src;
                        this.src = e
                    }
                }), Cookies.remove("bvi-panel-active", {path: "/"}), Cookies.remove("bvi-font-size", {path: "/"}), Cookies.remove("bvi-theme", {path: "/"}), Cookies.remove("bvi-images", {path: "/"}), Cookies.remove("bvi-line-height", {path: "/"}), Cookies.remove("bvi-letter-spacing", {path: "/"}), Cookies.remove("bvi-tts", {path: "/"}), Cookies.remove("bvi-font-family", {path: "/"}), Cookies.remove("bvi-panel-hide", {path: "/"}), Cookies.remove("bvi-flash-iframe", {path: "/"}), Cookies.remove("bvi-reload", {path: "/"}), y()
            }), i("#bvi-panel-hide, #bvi-toggler-menu-hide").click(function () {
                return i(".bvi-panel").toggle(0), i(".bvi-link-top").toggle(0), S("data-bvi-panel-hide", "bvi-panel-hide", !0), C("Панель скрыта"), !1
            }), i("#bvi-panel-show").click(function () {
                return i(".bvi-panel").toggle(0), i(".bvi-link-top").toggle(0), S("data-bvi-panel-hide", "bvi-panel-hide", !1), C("Панель открыта"), !1
            }), i("#bvi-setting").click(function () {
                return i(".bvi-setting-menu").toggle(0), i(this).toggleClass("active"), C("Дополнительные настройки"), !1
            }), i("#bvi-toggler").click(function () {
                return i(".bvi-panel-container").toggle(0), i(this).toggleClass("active"), C("Меню"), !1
            }), i("#bvi-setting-close").click(function () {
                return i(".bvi-setting-menu").toggle(0), i("#bvi-setting").toggleClass("active"), C("Дополнительные настройки закрыты"), !1
            }), i("#bvi-font-size-less").click(function () {
                var e = parseFloat(Cookies.get("bvi-font-size")) - 1;
                return i(this).addClass("active").siblings().removeClass("active"), i("#bvi-font-size").text(e), 0 != e && (S("data-bvi-size", "bvi-font-size", e), C("Размер шрифта уменьшен")), !1
            }), i("#bvi-font-size-more").click(function () {
                var e = parseFloat(Cookies.get("bvi-font-size")) + 1;
                return i(this).addClass("active").siblings().removeClass("active"), i("#bvi-font-size").text(e), 40 != e && (S("data-bvi-size", "bvi-font-size", e), C("Размер шрифта увеличен")), !1
            }), i("#bvi-theme-white").click(function (e) {
                e.preventDefault(), i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-theme", "bvi-theme", "white"), C("Цвет сайта черным по белому")
            }), i("#bvi-theme-black").click(function (e) {
                e.preventDefault(), i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-theme", "bvi-theme", "black"), C("Цвет сайта белым по черному")
            }), i("#bvi-theme-blue").click(function (e) {
                e.preventDefault(), i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-theme", "bvi-theme", "blue"), C("Цвет сайта тёмно-синим по голубому")
            }), i("#bvi-theme-brown").click(function (e) {
                e.preventDefault(), i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-theme", "bvi-theme", "brown"), C("Цвет сайта коричневым по бежевому")
            }), i("#bvi-theme-green").click(function (e) {
                e.preventDefault(), i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-theme", "bvi-theme", "green"), C("Цвет сайта зеленым по тёмно-коричневому")
            }), i("#bvi-images-true").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-images", "bvi-images", !0), C("Изображения включены"), !1
            }), i("#bvi-images-false").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-images", "bvi-images", !1), C("Изображения выключены"), !1
            }), i("#bvi-images-grayscale").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-images", "bvi-images", "grayscale"), C("Изображения чёрно-белые"), !1
            }), i("#bvi-line-height-normal").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-line-height", "bvi-line-height", "normal"), C("Междустрочный интервал cтандартный"), !1
            }), i("#bvi-line-height-average").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-line-height", "bvi-line-height", "average"), C("Междустрочный интервал средний"), !1
            }), i("#bvi-line-height-big").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-line-height", "bvi-line-height", "big"), C("Междустрочный интервал большой"), !1
            }), i("#bvi-letter-spacing-normal").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-letter-spacing", "bvi-letter-spacing", "normal"), C("Межбуквенный интервал одинарный"), !1
            }), i("#bvi-letter-spacing-average").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-letter-spacing", "bvi-letter-spacing", "average"), C("Межбуквенный интервал полуторный"), !1
            }), i("#bvi-letter-spacing-big").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-letter-spacing", "bvi-letter-spacing", "big"), C("Межбуквенный интервал двойной"), !1
            }), i("#bvi-font-family-arial").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-font-family", "bvi-font-family", "arial"), C("Шрифт без засечек"), !1
            }), i("#bvi-font-family-times").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-font-family", "bvi-font-family", "times"), C("Шрифт с засечками"), !1
            }), i("#bvi-flash-iframe-true").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-flash-iframe", "bvi-flash-iframe", !0), C("Включить встроенные элементы"), !1
            }), i("#bvi-flash-iframe-false").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-flash-iframe", "bvi-flash-iframe", !1), C("Выключить встроенные элементы"), !1
            }), i("#bvi-tts-true").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-tts", "bvi-tts", !0), C("Синтез речи включён"), _(), !1
            }), i("#bvi-tts-false").click(function () {
                return i(this).addClass("active").siblings().removeClass("active"), S("data-bvi-tts", "bvi-tts", !1), C("Синтез речи выключён"), _(), !1
            }), i("#bvi-settings-default").click(function (e) {
                e.preventDefault(), i("#bvi-theme-" + Cookies.get("bvi-theme")).removeClass("active"), i("#bvi-images-" + Cookies.get("bvi-images")).removeClass("active"), i("#bvi-line-height-" + Cookies.get("bvi-line-height")).removeClass("active"), i("#bvi-letter-spacing-" + Cookies.get("bvi-letter-spacing")).removeClass("active"), i("#bvi-font-family-" + Cookies.get("bvi-font-family")).removeClass("active"), i("#bvi-flash-iframe-" + Cookies.get("bvi-flash-iframe")).removeClass("active"), i("#bvi-tts-" + Cookies.get("bvi-tts")).removeClass("active"), i("#bvi-theme-" + d.bvi_theme).addClass("active"), i("#bvi-images-" + d.bvi_images).addClass("active"), i("#bvi-line-height-" + d.bvi_line_height).addClass("active"), i("#bvi-letter-spacing-" + d.bvi_letter_spacing).addClass("active"), i("#bvi-font-family-" + d.bvi_font).addClass("active"), i("#bvi-flash-iframe-" + d.bvi_flash_iframe).addClass("active"), i("#bvi-tts-" + d.bvi_tts).addClass("active"), i("#bvi-font-size").text(d.bvi_font_size), S("data-bvi-size", "bvi-font-size", d.bvi_font_size), S("data-bvi-theme", "bvi-theme", d.bvi_theme), S("data-bvi-images", "bvi-images", d.bvi_images), S("data-bvi-line-height", "bvi-line-height", d.bvi_line_height), S("data-bvi-letter-spacing", "bvi-letter-spacing", d.bvi_letter_spacing), S("data-bvi-font-family", "bvi-font-family", d.bvi_font), S("data-bvi-flash-iframe", "bvi-flash-iframe", d.bvi_flash_iframe), S("data-bvi-tts", "bvi-tts", d.bvi_tts), C("Одатий ҳолатга қайтиш"), _()
            }), i("#bvi-theme-" + Cookies.get("bvi-theme")).addClass("active"), i("#bvi-images-" + Cookies.get("bvi-images")).addClass("active"), i("#bvi-line-height-" + Cookies.get("bvi-line-height")).addClass("active"), i("#bvi-letter-spacing-" + Cookies.get("bvi-letter-spacing")).addClass("active"), i("#bvi-font-family-" + Cookies.get("bvi-font-family")).addClass("active"), i("#bvi-flash-iframe-" + Cookies.get("bvi-flash-iframe")).addClass("active"), i("#bvi-tts-" + Cookies.get("bvi-tts")).addClass("active"), !1 === p && (Cookies.set("bvi-tts", !1, {
                path: "/",
                expires: 1
            }), i("#bvi-tts-true").remove(), i("#bvi-tts-false").remove())) : (_(), i(f).removeClass("bvi-hide"), i(".bvi-panel-close").remove(), i(".bvi-panel").remove(), i(".bvi-link-top").remove(), i("body > .bvi-body").contents().unwrap(), i(".bvi-tts-link").remove(), i(".bvi-tts-text").contents().unwrap())
        }

        p && setInterval(function () {
            0 == m.speaking && (i(".bvi-tts-play").removeClass("disabled"), i(".bvi-tts-pause").addClass("disabled"), i(".bvi-tts-resume").addClass("disabled"), i(".bvi-tts-stop").addClass("disabled"))
        }, 1e3), i(window).on("resize", function () {
            var e = window.innerWidth > 0 ? window.innerWidth : screen.width;
            e >= u && i(".bvi-panel-container").show(), e <= u ? i(".bvi-panel-container").removeClass("bvi-container").addClass("bvi-container-fluid") : i(".bvi-panel-container").removeClass("bvi-container-fluid").addClass("bvi-container")
        }), "white" == d.bvi_theme || "black" == d.bvi_theme || "blue" == d.bvi_theme || "brown" == d.bvi_theme || "green" == d.bvi_theme ? t = !0 : (t = !1, g = ["bvi_theme"]), "times" == d.bvi_font || "arial" == d.bvi_font ? a = !0 : (a = !1, g = ["bvi_font"]), "normal" == d.bvi_letter_spacing || "average" == d.bvi_letter_spacing || "big" == d.bvi_letter_spacing ? s = !0 : (s = !1, g = ["bvi_letter_spacing"]), "normal" == d.bvi_line_height || "average" == d.bvi_line_height || "big" == d.bvi_line_height ? n = !0 : (n = !1, g = ["bvi_line_height"]), 0 == d.bvi_font_size ? (l = !1, g = ["bvi_font_size"]) : d.bvi_font_size <= 40 ? l = !0 : (l = !1, g = ["bvi_font_size"]), !1 === d.bvi_images || !0 === d.bvi_images || "grayscale" === d.bvi_images ? o = !0 : (o = !1, g = ["bvi_images"]), !1 === d.bvi_fixed || !0 === d.bvi_fixed ? v = !0 : (v = !1, g = ["bvi_fixed"]), !1 === d.bvi_tts || !0 === d.bvi_tts ? r = !0 : (r = !1, g = ["bvi_tts"]), !1 === d.bvi_flash_iframe || !0 === d.bvi_flash_iframe ? b = !0 : (b = !1, g = ["bvi_flash_iframe"]), !1 === d.bvi_hide || !0 === d.bvi_hide ? c = !0 : (c = !1, g = ["bvi_hide"]), !0 === t && !0 === a && !0 === s && !0 === n && !0 === l && !0 === o && !0 === v && !0 === b && !0 === r && !0 === c ? (i(f).length ? i(f).click(function () {
            return Cookies.set("bvi-panel-active", !0, {
                path: "/",
                expires: 1
            }), y(), C("Версия сайта для слабовидящих"), !1
        }) : console.log("Bvi console: Неправильный параметр - [bvi_target]"), y()) : console.log("Bvi console: Неправильный параметр - [" + g + "]")
    }
}(jQuery), jQuery(document).ready(function (i) {
    var e = {
        uz: {
            fontSize: "Матн ҳажми",
            fontSizeLess: "Мант ҳажмини кичрайтириш",
            fontSizeMore: "Мант ҳажмини катталаштириш",
            theme: "Сайт ранги",
            themeWhite: "Оқ фонда ва қора",
            themeBlack: "Қора фонда оқ",
            themeBlue: "Мовий рангда тўқ кўк",
            themeBrown: "Буғдойрангда жигарранг",
            themeGreen: "To'q jigarrang rangda yashil rang",
            image: "Тасвир",
            images: "Тасвир",
            imagesOn: "Изображения включены",
            imagesOff: "Изображения выключены",
            imagesGrayscale: "Изображения черно-белые",
            extra: "Қўшимча",
            settings: "Созламалар",
            panelClose: "Сайтнинг одатий кўриниши",
            panelHide: "Скрыть панель",
            lineHeight: "Қатор оралиғи",
            lineHeightNormal: "Междустрочный интервал стандартный",
            lineHeightNormalShort: "Одатий",
            lineHeightAverage: "Междустрочный интервал средний",
            lineHeightAverageShort: "Ўртача",
            lineHeightBig: "Междустрочный интервал большой",
            lineHeightBigShort: "Катта",
            letterSpacing: "Харфлар оралиғи",
            letterSpacingNormal: "Межбуквенный интервал одинарный",
            letterSpacingNormalShort: "Матн",
            letterSpacingAverage: "Межбуквенный интервал полуторный",
            letterSpacingAverageShort: "М а т н",
            letterSpacingBig: "Межбуквенный интервал двойной",
            letterSpacingBigShort: "М &nbsp;а &nbsp;т &nbsp;н",
            font: "Матн кўриниши",
            fontArial: "Шрифт без засечек",
            fontArialShort: "Оддий матн",
            fontTimes: "Шрифт с засечками",
            fontTimesShort: "Оддий матн",
            flashIframe: "Встроенные элементы (Видео, карты и тд.)",
            flashIframeOn: "Ёқиш",
            flashIframeOff: "Ўчириш",
            settingsDefault: "Одатий ҳолатга қайтиш",
            settingsDefaultReturn: "Одатий созламаларга қайтиш",
            settingsClose: "Панелни ёпиш",
            menu: "Меню"
        },

    };

    function t(e) {
        i(".header-logo__item--keg img").attr("src", `/uploads/logo.png`)
    }

    i.bvi({
        bvi_locale: void 0 === e['uz'] ? e.uz : e['uz'],
        bvi_target: ".bvi-open",
        bvi_theme: "white",
        bvi_font: "arial",
        bvi_font_size: 16,
        bvi_letter_spacing: "normal",
        bvi_line_height: "normal",
        bvi_images: "grayscale",
        bvi_reload: !1,
        bvi_fixed: !1,
        bvi_tts: !1,
        bvi_flash_iframe: !0,
        bvi_hide: !1
    }), i(document).on("click", "#bvi-theme-white", function () {
        t("white")
    }), i(document).on("click", "#bvi-theme-black", function () {
        t("black")
    }), i(document).on("click", "#bvi-theme-blue", function () {
        t("blue")
    }), i(document).on("click", "#bvi-theme-brown", function () {
        t("brown")
    }), i(document).on("click", "#bvi-theme-green", function () {
        t("green")
    }), i(document).on("click", "#bvi-settings-default", function () {
        t("white")
    }), i(document).on("click", "#bvi-panel-close, .bvi-panel-close, #bvi-toggler-close", function () {
        i(".header-logo__item--keg img").attr("src", "/upload/logo.png")
    })
});
