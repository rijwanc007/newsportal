window.better_ads_adblock = !0;;
(function(n, t, i) {
    "use strict";
    var e = n.Sizzle || jQuery.find,
        r = {},
        o = function(n, t, u, o, s) {
            if (n = f(n), n != "") {
                var h;
                o || s || (h = /^([0-9]*.?[0-9]+)(px|em)$/.exec(u), h != null && (o = Number(h[1]), o + "" != "NaN" && (s = h[2]))), s && (e.compile && e.compile(n), r[n] === i && (r[n] = {}), r[n][t] === i && (r[n][t] = {}), r[n][t][u] = [o, s])
            }
        },
        h = function(n, t) {
            var i, r, f;
            for (i in n)
                for (r in n[i])
                    if (typeof n[i][r] == "string") o(i, r, n[i][r]);
                    else if (typeof n[i][r] == "object")
                for (f = 0; f < n[i][r].length; f++) o(i, r, n[i][r][f]);
            t == !0 && u()
        },
        f = function(n) {
            if (n == null) return "";
            var t = "".trim;
            return t && !t.call("﻿ ") ? t.call(n) : (n + "").replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "")
        },
        s = function(n, t) {
            var i = n.getAttribute(t);
            return i ? (" " + i + " ").replace(/[\t\r\n]/g, " ") : " "
        },
        c = function(n, t, i) {
            var r, u;
            n.nodeType === 1 && (r = f(i), r != "" && (u = s(n, t), u.indexOf(" " + r + " ") < 0 && n.setAttribute(t, f(u + r))))
        },
        l = function(n, t, i) {
            var u, r, e;
            if (n.nodeType === 1 && (u = f(i), u != "")) {
                for (r = s(n, t), e = !1; r.indexOf(" " + u + " ") >= 0;) r = r.replace(" " + u + " ", " "), e = !0;
                e && n.setAttribute(t, f(r))
            }
        },
        u = function() {
            var o, h, i, s, a, u, f, v;
            for (o in r)
                if (a = e(o), a.length > 0)
                    for (h = 0; h < a.length; h++) {
                        u = a[h];
                        for (i in r[o])
                            for (s in r[o][i]) f = r[o][i][s][0], r[o][i][s][1] == "em" && (f = f * (n.getEmPixels ? getEmPixels(u) : 16)), i == "min-width" && u.offsetWidth >= f || i == "max-width" && u.offsetWidth <= f || i == "min-height" && u.offsetHeight >= f || i == "max-height" && u.offsetHeight <= f ? c(u, i, s) : l(u, i, s)
                    }!n.addEventListener && n.attachEvent && (v = t.documentElement.className, t.documentElement.className = " " + v, t.documentElement.className = v)
        };
    n.elementQuery = function(n, t) {
        !n || typeof n != "object" || n.cssRules || n.rules ? n || t || u() : h(n, t)
    }, n.elementQuery.selectors = function() {}, n.addEventListener ? (n.addEventListener("resize", u, !1), n.addEventListener("DOMContentLoaded", u, !1), n.addEventListener("load", u, !1)) : n.attachEvent && (n.attachEvent("onresize", u), n.attachEvent("onload", u))
})(this, document, undefined);
(function(n, t) {
    "use strict";
    var i = "!important;",
        r = "position:absolute" + i + "visibility:hidden" + i + "width:1em" + i + "font-size:1em" + i + "padding:0" + i;
    window.getEmPixels = function(u) {
        var f, e, o;
        return u || (u = f = n.createElement("body"), f.style.cssText = "font-size:1em" + i, t.insertBefore(f, n.body)), e = n.createElement("i"), e.style.cssText = r, u.appendChild(e), o = e.clientWidth, f ? t.removeChild(f) : u.removeChild(e), o
    }
})(document, document.documentElement);
jQuery(document).ready(function(e) {
    e(".bsp-wrapper").on("click", ".bsp-videos-items a", function(l) {
        l.preventDefault();
        var r = e(this),
            s = r.closest(".bsp-wrapper"),
            t = r.closest(".bsp-wrapper").find(".bsp-player"),
            n = e(this).data("video-id"),
            a = t.data("frame-url").replace("{video-id}", n);
        t.html('<iframe type="text/html" width="100%" height="100%"\n        src="' + a + '"\n        frameborder="0" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe>'), r.closest("li").addClass("bsp-current-item").siblings("li").removeClass("bsp-current-item");
        var i = s.find(".bsp-current-item .bsp-video-index").html();
        s.find(".bsp-current-playing .bsp-current-index").html(i)
    }), "function" == typeof elementQuery && elementQuery({
        ".bsp-wrapper": {
            "max-width": ["480px", "680px", "780px"]
        }
    })
});
var Better_Social_Counter = function(e) {
    "use strict";
    return {
        init: function() {
            this.fix_element_query()
        },
        fix_element_query: function() {
            "function" == typeof elementQuery && elementQuery({
                ".better-social-counter": {
                    "max-width": ["358px", "199px", "230px", "900px", "530px", "750px"]
                },
                ".better-social-banner": {
                    "max-width": ["250px"]
                }
            })
        }
    }
}(jQuery);
jQuery(function(e) {
    Better_Social_Counter.init()
});
! function(t, e) {
    "function" == typeof define && define.amd ? define(e) : "object" == typeof exports ? module.exports = e() : t.Blazy = e()
}(this, function() {
    "use strict";

    function t(t) {
        var o = t._util;
        o.elements = h(t.options), o.count = o.elements.length, o.destroyed && (o.destroyed = !1, t.options.container && b(t.options.container, function(t) {
            y(t, "scroll", o.validateT)
        }), y(window, "resize", o.saveViewportOffsetT), y(window, "resize", o.validateT), y(window, "scroll", o.validateT)), e(t)
    }

    function e(t) {
        for (var e = t._util, n = 0; n < e.count; n++) {
            var i = e.elements[n];
            (o(i, t.options) || v(i, t.options.successClass)) && (t.load(i), e.elements.splice(n, 1), e.count--, n--)
        }
        0 === e.count && t.destroy()
    }

    function o(t, e) {
        var o = t.getBoundingClientRect();
        if (e.container && x) {
            var i = t.closest(e.containerClass);
            if (i) {
                var s = i.getBoundingClientRect();
                if (n(s, T)) {
                    var r = s.top - e.offset,
                        a = s.right + e.offset,
                        c = s.bottom + e.offset,
                        l = s.left - e.offset,
                        f = {
                            top: r > T.top ? r : T.top,
                            right: a < T.right ? a : T.right,
                            bottom: c < T.bottom ? c : T.bottom,
                            left: l > T.left ? l : T.left
                        };
                    return n(o, f)
                }
                return !1
            }
        }
        return n(o, T)
    }

    function n(t, e) {
        return t.right >= e.left && t.bottom >= e.top && t.left <= e.right && t.top <= e.bottom
    }

    function i(t, e, o) {
        if (!v(t, o.errorClass)) {
            var n = t.offsetWidth > 0 && t.offsetHeight > 0,
                i = function() {
                    return "function" == typeof o.loadInvisible ? o.loadInvisible(t, n) : o.loadInvisible
                };
            if (!v(t, o.successClass) && (e || n || i())) {
                var c = l(t, E) || l(t, o.src);
                if (c) {
                    var f = c.split(o.separator),
                        u = f[z && f.length > 1 ? 1 : 0],
                        h = l(t, o.srcset),
                        w = d(t, !1);
                    w && (h = void 0, u = w);
                    var C = p(t, "img"),
                        T = t.parentNode,
                        x = T && p(T, "picture");
                    if (C || void 0 === t.src) {
                        var A = new Image,
                            O = function() {
                                o.error && o.error(t, "invalid"), m(t, o.errorClass), g(A, "error", O), g(A, "load", S)
                            },
                            S = function() {
                                C ? x || a(t, u, h) : t.style.backgroundImage = 'url("' + u + '")', s(t, o), g(A, "load", S), g(A, "error", O)
                            };
                        x && (A = t, b(T.getElementsByTagName("source"), function(t) {
                            r(t, k, o.srcset)
                        })), y(A, "error", O), y(A, "load", S), a(A, u, h)
                    } else t.src = u, s(t, o)
                } else p(t, "video") ? (b(t.getElementsByTagName("source"), function(t) {
                    r(t, I, o.src)
                }), t.load(), s(t, o)) : (o.error && o.error(t, "missing"), m(t, o.errorClass))
            }
        }
    }

    function s(t, e) {
        m(t, e.successClass), e.success && e.success(t), f(t, e.src), f(t, e.srcset), b(e.breakpoints, function(e) {
            f(t, e.src)
        }), "function" == typeof e.itemLoaded && e.itemLoaded.call(t, e)
    }

    function r(t, e, o) {
        var n = l(t, o);
        n && (c(t, e, n), f(t, o))
    }

    function a(t, e, o) {
        o && c(t, k, o), t.src = e
    }

    function c(t, e, o) {
        t.setAttribute(e, o)
    }

    function l(t, e) {
        return t.getAttribute(e)
    }

    function f(t, e) {
        t.removeAttribute(e)
    }

    function u() {
        if (window.matchMedia) {
            var t = window.matchMedia("only screen and (min--moz-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen  and (min-device-pixel-ratio: 1.3), only screen and (min-resolution: 1.3dppx)");
            return t && t.matches || window.devicePixelRatio > 1
        }
    }

    function d(t, e) {
        var o = l(t, "data-bs-srcset");
        if (!o) return e;
        if (o = JSON.parse(o), !o || !o.sizes) return e;
        var n, i;
        n = t.hasAttribute("width") ? parseInt(l(t, "width")) : t.offsetWidth, u() && (n *= 2);
        for (i in o.sizes)
            if (parseInt(i) >= n) return o.baseurl + o.sizes[i];
        return parseInt(i) < n ? o.baseurl + o.sizes[i] : e
    }

    function p(t, e) {
        return t.nodeName.toLowerCase() === e
    }

    function v(t, e) {
        return -1 !== (" " + t.className + " ").indexOf(" " + e + " ")
    }

    function m(t, e) {
        v(t, e) || (t.className += " " + e)
    }

    function h(t) {
        for (var e = [], o = t.root.querySelectorAll(t.selector), n = o.length; n--; e.unshift(o[n]));
        return e
    }

    function w(t) {
        T.bottom = (window.innerHeight || document.documentElement.clientHeight) + t, T.right = (window.innerWidth || document.documentElement.clientWidth) + t
    }

    function y(t, e, o) {
        t.attachEvent ? t.attachEvent && t.attachEvent("on" + e, o) : t.addEventListener(e, o, {
            capture: !1,
            passive: !0
        })
    }

    function g(t, e, o) {
        t.detachEvent ? t.detachEvent && t.detachEvent("on" + e, o) : t.removeEventListener(e, o, {
            capture: !1,
            passive: !0
        })
    }

    function b(t, e) {
        if (t && e)
            for (var o = t.length, n = 0; o > n && e(t[n], n) !== !1; n++);
    }

    function C(t, e, o) {
        var n = 0;
        return function() {
            var i = +new Date;
            e > i - n || (n = i, t.apply(o, arguments))
        }
    }
    var E, T, z, x, I = "src",
        k = "srcset";
    return function(o) {
        if (!document.querySelectorAll) {
            var n = document.createStyleSheet();
            document.querySelectorAll = function(t, e, o, i, s) {
                for (s = document.all, e = [], t = t.replace(/\[for\b/gi, "[htmlFor").split(","), o = t.length; o--;) {
                    for (n.addRule(t[o], "k:v"), i = s.length; i--;) s[i].currentStyle.k && e.push(s[i]);
                    n.removeRule(0)
                }
                return e
            }
        }
        var s = this,
            r = s._util = {};
        r.elements = [], r.destroyed = !0, s.options = o || {}, s.options.error = s.options.error || !1, s.options.offset = s.options.offset || 100, s.options.root = s.options.root || document, s.options.success = s.options.success || !1, s.options.selector = s.options.selector || ".b-lazy", s.options.separator = s.options.separator || "|", s.options.containerClass = s.options.container, s.options.container = s.options.containerClass ? document.querySelectorAll(s.options.containerClass) : !1, s.options.errorClass = s.options.errorClass || "b-error", s.options.breakpoints = s.options.breakpoints || !1, s.options.loadInvisible = s.options.loadInvisible || !1, s.options.successClass = s.options.successClass || "b-loaded", s.options.validateDelay = s.options.validateDelay || 25, s.options.saveViewportOffsetDelay = s.options.saveViewportOffsetDelay || 50, s.options.srcset = s.options.srcset || "data-srcset", s.options.src = E = s.options.src || "data-src", x = Element.prototype.closest, z = window.devicePixelRatio > 1, T = {}, T.top = 0 - s.options.offset, T.left = 0 - s.options.offset, s.revalidate = function() {
            t(s)
        }, s.load = function(t, e) {
            var o = this.options;
            t && void 0 === t.length ? i(t, e, o) : b(t, function(t) {
                i(t, e, o)
            })
        }, s.destroy = function() {
            var t = s._util;
            s.options.container && b(s.options.container, function(e) {
                g(e, "scroll", t.validateT)
            }), g(window, "scroll", t.validateT), g(window, "resize", t.validateT), g(window, "resize", t.saveViewportOffsetT), t.count = 0, t.elements.length = 0, t.destroyed = !0
        }, r.validateT = C(function() {
            e(s)
        }, s.options.validateDelay, s), r.saveViewportOffsetT = C(function() {
            w(s.options.offset)
        }, s.options.saveViewportOffsetDelay, s), w(s.options.offset), b(s.options.breakpoints, function(t) {
            return t.width >= window.screen.width ? (E = t.src, !1) : void 0
        }), setTimeout(function() {
            t(s)
        })
    }
});
! function(e) {
    "use strict";

    function a(a) {
        a = "undefined" == typeof a ? !0 : a, a && e(window).scroll()
    }

    function n(a) {
        return this.prefix = "bs_ajax_paginate_", this.deferredPrefix = "bs_deferred_loading_", this.isPrevPage = !1, this.$link_el = !1, this.id = !1, this.paginationStyle = !1, this.settings = e.extend({
            afterSuccessDeferredAjax: function() {}
        }, a), this
    }
    var i, t = {},
        s = {};
    n.prototype.init = function(a) {
        var n = this;
        e(a).on("click", ".bs-ajax-pagination a", function(a) {
            a.preventDefault();
            var t = e(this),
                s = t.parent();
            if (t.hasClass("disabled") || s.hasClass("bs-pagination-loading")) return !1;
            s.addClass("bs-pagination-loading");
            var r = t.closest(".bs-pagination");
            n.$link_el = t, n.id = t.data("id");
            try {
                if (!n.id) throw "invalid element";
                n.setNewPageNumber(), n.paginationStyle = n.getPaginationStyle();
                var o = n.getAjaxProps(),
                    d = r.prevAll(".bs-pagination-wrapper"),
                    l = n.cache_get(o.current_page, n.id);
                if ("object" == typeof l) d.addClass("bs-pagination-cached"), n.handle_response(l), s.removeClass("bs-pagination-loading");
                else {
                    switch (d.removeClass("bs-pagination-cached"), 2 == o.current_page && n.cache_add(1, {
                        output: d.html(),
                        label: r.find(".bs-pagination-label").html(),
                        have_next: !0,
                        have_prev: !1
                    }, n.id), n.paginationStyle) {
                        case "next_prev":
                            d.children().addClass("bs-pagination-in-loading"), d.prepend(n.getLoadingRawHtml());
                            break;
                        case "more_btn_infinity":
                            t.find(".loaded").hide(), t.find(".loading").show(), t.removeClass("more_btn_infinity").addClass("infinity").addClass("bs-pagination-in-loading"), r.removeClass("more_btn_infinity").addClass("infinity");
                            break;
                        case "infinity":
                        case "more_btn":
                            t.addClass("bs-pagination-in-loading"), t.find(".loaded").hide(), t.find(".loading").show()
                    }
                    i = e.ajax({
                        url: o.ajax_url,
                        type: "POST",
                        dataType: "json",
                        data: o
                    }).fail(function(e) {
                        switch (s.removeClass("bs-pagination-loading"), n.paginationStyle) {
                            case "more_btn_infinity":
                            case "next_prev":
                                d.find(".bs-pagin-loading-wrapper").remove(), t.addClass("bs-pagination-in-loading");
                                break;
                            case "infinity":
                            case "more_btn":
                                t.addClass("bs-pagination-in-loading"), t.find(".loaded").show(), t.find(".loading").hide()
                        }
                        "abort" !== e.statusText && alert("cannot load data. please check your internet connection!")
                    }).done(function(e) {
                        switch (n.handle_response(e), n.cacheThisStyle(n.paginationStyle) && n.cache_add(o.current_page, e, n.id), n.paginationStyle) {
                            case "more_btn_infinity":
                                t.removeClass("bs-pagination-in-loading"), d.find(".bs-pagin-loading-wrapper").remove();
                                break;
                            case "next_prev":
                                t.removeClass("bs-pagination-in-loading"), d.find(".bs-pagin-loading-wrapper").remove(), d.children().removeClass("bs-pagination-in-loading");
                                break;
                            case "infinity":
                            case "more_btn":
                                t.removeClass("bs-pagination-in-loading"), t.find(".loaded").show(), t.find(".loading").hide()
                        }
                        s.removeClass("bs-pagination-loading")
                    })
                }
            } catch (p) {
                n.debug(p)
            }
        }), new OnScreen({
            tolerance: 0,
            debounce: 100,
            container: window
        }).on("enter", ".bs-ajax-pagination.infinity", function(a) {
            e(a).find("a").click()
        })
    }, n.prototype.filter_slider_params = function(e) {
        return "undefined" != typeof e.autoplayspeed && (e.autoplaySpeed = e.autoplayspeed), e.dots = "undefined" != typeof e.sliderControlDots && "off" !== e.sliderControlDots, e.autoplay = "undefined" != typeof e.sliderAutoplay && parseInt(e.sliderAutoplay), e.speed = e.sliderAnimationSpeed, "undefined" != typeof e.sliderControlNextPrev && "off" == e.sliderControlNextPrev && (e.appendArrows = !1), e
    }, n.prototype.handler_slider = function(n) {
        var i = this;
        e.fn.slick && (e(".bs-slider-items-container", n).each(function() {
            var a = e(this),
                n = e(document.body).hasClass("rtl");
            if (!a.hasClass("slick-ready")) {
                var t = a.data(),
                    s = i.filter_slider_params(e.extend({
                        sliderControlDots: "off",
                        prevArrow: '<a class="btn-bs-pagination prev" rel="prev" title="Previous">\n   <i class="fa fa-angle-' + (n ? "right" : "left") + '" aria-hidden="true"></i>\n  </a>',
                        nextArrow: '<a rel="next" class="btn-bs-pagination next" title="Next">\n   <i class="fa fa-angle-' + (n ? "left" : "right") + '" aria-hidden="true"></i>\n  </a>',
                        rtl: n,
                        slideMargin: 25,
                        slide: ".bs-slider-item",
                        appendArrows: a.find(".bs-slider-controls .bs-control-nav"),
                        classPrefix: "bs-slider-",
                        dotsClass: "bs-slider-dots",
                        customPaging: function(a, n) {
                            return e('<span class="bts-bs-dots-btn"></span>').text(n + 1)
                        }
                    }, t));
                s.sliderControlDots && t.sliderControlDots && (s.appendDots = a.find(".bs-slider-controls"), s.dotsClass += " " + s.dotsClass + "-" + t.sliderControlDots), a.slick(s), a.addClass("slick-ready")
            }
        }), e(".multi-tab").on("shown.bs.tab", 'a[data-toggle="tab"]:not([data-deferred-init])', function(n) {
            var i = e(n.target).attr("href");
            e(i).find(".bs-slider-items-container").slick("setPosition"), a()
        }))
    }, n.prototype.refreshLazyImages = function() {
        "object" == typeof bsLazy && bsLazy.revalidate()
    }, n.prototype.bindDeferredEvents = function(n) {
        var i = 200,
            t = this,
            s = 0;
        e(".multi-tab", n).on("show.bs.tab", "a[data-deferred-init]", function(a) {
            var n = e(this).closest(".multi-tab").find(".active").attr("href");
            i = e(n).height()
        }), e(".tabs-section", n).on("show.bs.tab", "a[data-deferred-init]", function(a) {
            var n = e(this).closest(".tabs-section").find(".active:visible a").data("target"),
                t = e(n);
            i = t.height()
        }).on("show.bs.tab", "a", function() {
            t.refreshLazyImages();
            var a = e(this).closest(".tabs-section").find(".active:visible a").data("target"),
                n = e(a),
                i = n.outerHeight();
            if (i) {
                var r = n.closest(".tab-content");
                if (r.length) {
                    var o = Math.max(i, parseInt(r.outerHeight()));
                    o = Math.max(o, s), r.css("min-height", o).data("bs-height", o), s = o
                }
            }
        }), e("a[data-deferred-init]", n).each(function(n) {
            var s = e(this),
                r = s.data("deferred-event") || "click";
            s.closest(".deferred-block-exclude").length > 0 || s.on(r, function(n) {
                var s = e(this),
                    r = s.data("deferred-init"),
                    o = e("#bsd_" + r),
                    d = o.closest(".bs-deferred-container");
                if (o.hasClass("bs-deferred-load-wrapper"))
                    if (o.hasClass("bs-deferred-loaded")) {
                        var l = o.closest(".bs-pinning-block.pinned").length;
                        a(!l)
                    } else d.removeClass("bs-tab-animated"), t.handleDeferredElements(o, {
                        loadingHeight: i ? i : void 0
                    }, function() {
                        d.addClass("bs-tab-animated"), o.addClass("bs-deferred-loaded");
                        var e = d.find(".bs-pagination");
                        !i || e.length && !e.hasClass("next_prev") || d.css("min-height", i), i = void 0
                    })
            })
        })
    }, n.prototype.handleDeferredElements = function(n, i, s) {
        var r = this;
        n.hasClass("bs-deferred-load-wrapper") || (n = n.find(".bs-deferred-load-wrapper")), n.each(function() {
            var n = e(this);
            if (!n.hasClass("deferred-html-exists")) {
                if (i = e.extend({
                        loadingHeight: 100,
                        loadingMinHeight: 0
                    }, i), !n.find(".deferred-loading-container").length) {
                    var o = e("<div></div>", {
                            "class": "deferred-loading-container",
                            height: i.loadingHeight
                        }),
                        d = n.find(".bs-pagination");
                    !i.loadingMinHeight || d && d.hasClass("more_btn") || o.css("min-height", i.loadingMinHeight), o.append(r.getLoadingRawHtml()), o.appendTo(n)
                }
                r.id = n.attr("id");
                var l = r.getAjaxProps("deferred");
                "object" == typeof t[r.id] && t[r.id].abort(), t[r.id] = e.ajax({
                    url: l.ajax_url,
                    type: "POST",
                    dataType: "json",
                    data: l
                }).done(function(e) {
                    n.find(".deferred-loading-container").remove(), delete t[r.id], n.addClass("deferred-html-exists").append(e.output), r.handler_slider(n), s && s.call(n, e);
                    var i = n.closest(".bs-pinning-block.pinned").length;
                    a(!i), r.settings.afterSuccessDeferredAjax.call(r, n, e)
                })
            }
        })
    }, n.prototype.getLoadingRawHtml = function() {
        return '<div class="bs-pagin-loading-wrapper">' + bs_pagination_loc.loading + "</div>"
    }, n.prototype.getAjaxProps = function(e) {
        e = e || "pagination";
        var a, n = "deferred" === e ? this.deferredPrefix : this.prefix,
            i = n + this.id;
        if ("undefined" == typeof window[i]) throw "pagination settings not set";
        switch (a = jQuery.parseJSON(window[i]), e.toLowerCase()) {
            case "pagination":
                a.action = "pagination_ajax", a.current_page = this.$link_el.parent().data("current-page") || 1, a.pagin_type = this.paginationStyle;
                break;
            case "deferred":
                a.action = "deferred_loading", a.current_page = 1
        }
        if (this.$link_el) {
            var t = this.$link_el.closest(".bs-pagination"),
                s = t.prevAll(".bs-pagination-wrapper").find(".bs-pagination-public-vars").data("id");
            s && (a.__vars = jQuery.parseJSON(window["bs_ajax_paginate_vars_" + s]))
        }
        return a
    }, n.prototype.setNewPageNumber = function() {
        var e = this.$link_el.parent(),
            a = e.data("current-page") || 1;
        if (this.isPrevPage = this.$link_el.hasClass("prev"), this.isPrevPage) {
            if (2 > a) throw "Wrong page number!";
            a--
        } else a++;
        e.data("current-page", a)
    }, n.prototype.debug = function(e) {
        console.error(e)
    }, n.prototype.cacheThisStyle = function(e) {
        return "next_prev" === e
    }, n.prototype.getPaginationStyle = function() {
        for (var e, a = ["next_prev", "more_btn", "more_btn_infinity", "infinity"], n = this.$link_el.closest(".bs-pagination"), i = 0; i < a.length; i++)
            if (e = a[i], n.hasClass(e)) return e;
        return ""
    }, n.prototype.cache_get = function(e, a) {
        return "undefined" != typeof s[a] && "undefined" != typeof s[a][e] ? s[a][e] : void 0
    }, n.prototype.cache_add = function(e, a, n) {
        "undefined" == typeof s[n] && (s[n] = {}), s[n][e] = a
    }, n.prototype.handle_event = function(e, a) {
        if ("object" != typeof e.events) return !1;
        if ("string" == typeof e.events[a]) {
            var n = e.events[a];
            "function" == typeof window[n] && window[n].call(this, e, a)
        }
    }, n.prototype.handle_response = function(n) {
        if (null === n || "string" == typeof n.error) return void(null === n ? this.debug("Error!") : this.debug(n.error));
        var i = this.$link_el.closest(".bs-pagination"),
            t = i.prevAll(".bs-pagination-wrapper"),
            s = i.closest(".bs-pinning-block.pinned").length;
        switch (this.handle_event(n, "before_append"), this.paginationStyle) {
            case "next_prev":
                t.html(n.output), this.handle_event(n, "after_append"), t.addClass("bs-animate").addClass(this.isPrevPage ? "bs-fadeInLeft" : "bs-fadeInRight").delay(400).queue(function(a) {
                    e(this).removeClass("bs-animate bs-fadeInRight bs-fadeInLeft"), a()
                }), a(!s), "undefined" != typeof n.label && i.find(".bs-pagination-label").html(n.label), i.find(".next")[n.have_next ? "removeClass" : "addClass"]("disabled"), i.find(".prev")[n.have_prev ? "removeClass" : "addClass"]("disabled");
                break;
            case "more_btn":
            case "more_btn_infinity":
            case "infinity":
                if ("string" == typeof n["add-to"]) {
                    var r = e(n.output);
                    "prepend" == n["add-type"] ? t.find(n["add-to"]).prepend(r) : t.find(n["add-to"]).append(r)
                } else var r = t.append(n.output).children(":last");
                a(!s), this.handle_event(n, "after_append"), r.addClass("bs-animate bs-fadeInUp").delay(400).queue(function(a) {
                    e(this).removeClass("bs-animate bs-fadeInUp"), a()
                }), "infinity" === this.paginationStyle ? n.have_next || this.$link_el.unbind("inview").remove() : n.have_next ? this.$link_el.removeClass("disabled") : (this.$link_el.addClass("disabled"), this.$link_el.find(".loaded").remove(), this.$link_el.find(".no-more").show())
        }
        this.refreshLazyImages(), this.handle_event(n, "after_response")
    }, e.fn.Better_Ajax_Pagination = function(e) {
        return new n(e).handler_slider(), this.each(function() {
            (new n).init(this)
        })
    }, e.fn.Better_Deferred_Loading = function(e) {
        var a = new n(e);
        return a.bindDeferredEvents(e.context), a
    }
}(jQuery);
! function(a) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], a) : "undefined" != typeof exports ? module.exports = a(require("jquery")) : a(jQuery)
}(function(a) {
    "use strict";
    var b = window.Slick || {};
    b = function() {
        function c(c, d) {
            var f, e = this;
            e.defaults = {
                accessibility: !0,
                adaptiveHeight: !1,
                appendArrows: a(c),
                appendDots: a(c),
                arrows: !0,
                asNavFor: null,
                prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
                autoplay: !1,
                autoplaySpeed: 3e3,
                centerMode: !1,
                centerPadding: "50px",
                cssEase: "ease",
                customPaging: function(b, c) {
                    return a('<button type="button" data-role="none" role="button" tabindex="0" />').text(c + 1)
                },
                dots: !1,
                dotsClass: "slick-dots",
                draggable: !0,
                easing: "linear",
                edgeFriction: .35,
                fade: !1,
                focusOnSelect: !1,
                infinite: !0,
                initialSlide: 0,
                lazyLoad: "ondemand",
                mobileFirst: !1,
                pauseOnHover: !0,
                pauseOnFocus: !0,
                pauseOnDotsHover: !1,
                respondTo: "window",
                responsive: null,
                rows: 1,
                rtl: !1,
                slide: "",
                slidesPerRow: 1,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 500,
                swipe: !0,
                swipeToSlide: !1,
                touchMove: !0,
                touchThreshold: 5,
                useCSS: !0,
                useTransform: !0,
                variableWidth: !1,
                vertical: !1,
                verticalSwiping: !1,
                waitForAnimate: !0,
                zIndex: 1e3,
                slideMargin: 0,
                classPrefix: "slick-"
            }, e.initials = {
                animating: !1,
                dragging: !1,
                autoPlayTimer: null,
                currentDirection: 0,
                currentLeft: null,
                currentSlide: 0,
                direction: 1,
                $dots: null,
                listWidth: null,
                listHeight: null,
                loadIndex: 0,
                $nextArrow: null,
                $prevArrow: null,
                slideCount: null,
                slideWidth: null,
                $slideTrack: null,
                $slides: null,
                sliding: !1,
                slideOffset: 0,
                swipeLeft: null,
                $list: null,
                touchObject: {},
                transformsEnabled: !1,
                unslicked: !1
            }, a.extend(e, e.initials), e.activeBreakpoint = null, e.animType = null, e.animProp = null, e.breakpoints = [], e.breakpointSettings = [], e.cssTransitions = !1, e.focussed = !1, e.interrupted = !1, e.hidden = "hidden", e.paused = !0, e.positionProp = null, e.respondTo = null, e.rowCount = 1, e.shouldClick = !0, e.$slider = a(c), e.$slidesCache = null, e.transformType = null, e.transitionType = null, e.visibilityChange = "visibilitychange", e.windowWidth = 0, e.windowTimer = null, f = a(c).data("slick") || {}, e.options = a.extend({}, e.defaults, d, f), e.currentSlide = e.options.initialSlide, e.originalSettings = e.options, "undefined" != typeof document.mozHidden ? (e.hidden = "mozHidden", e.visibilityChange = "mozvisibilitychange") : "undefined" != typeof document.webkitHidden && (e.hidden = "webkitHidden", e.visibilityChange = "webkitvisibilitychange"), e.autoPlay = a.proxy(e.autoPlay, e), e.autoPlayClear = a.proxy(e.autoPlayClear, e), e.autoPlayIterator = a.proxy(e.autoPlayIterator, e), e.changeSlide = a.proxy(e.changeSlide, e), e.clickHandler = a.proxy(e.clickHandler, e), e.selectHandler = a.proxy(e.selectHandler, e), e.setPosition = a.proxy(e.setPosition, e), e.swipeHandler = a.proxy(e.swipeHandler, e), e.dragHandler = a.proxy(e.dragHandler, e), e.keyHandler = a.proxy(e.keyHandler, e), e.instanceUid = b++, e.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/, e.registerBreakpoints(), e.init(!0)
        }
        var b = 0;
        return c
    }(), b.prototype.activateADA = function() {
        var a = this;
        a.$slideTrack.find("." + a.options.classPrefix + "active").attr({
            "aria-hidden": "false"
        }).find("a, input, button, select").attr({
            tabindex: "0"
        })
    }, b.prototype.addSlide = b.prototype.slickAdd = function(b, c, d) {
        var e = this;
        if ("boolean" == typeof c) d = c, c = null;
        else if (c < 0 || c >= e.slideCount) return !1;
        e.unload(), "number" == typeof c ? 0 === c && 0 === e.$slides.length ? a(b).appendTo(e.$slideTrack) : d ? a(b).insertBefore(e.$slides.eq(c)) : a(b).insertAfter(e.$slides.eq(c)) : d === !0 ? a(b).prependTo(e.$slideTrack) : a(b).appendTo(e.$slideTrack), e.$slides = e.$slideTrack.children(this.options.slide), e.$slideTrack.children(this.options.slide).detach(), e.$slideTrack.append(e.$slides), e.$slides.each(function(b, c) {
            a(c).attr("data-" + e.options.classPrefix + "index", b)
        }), e.$slidesCache = e.$slides, e.reinit()
    }, b.prototype.animateHeight = function() {
        var a = this;
        if (1 === a.options.slidesToShow && a.options.adaptiveHeight === !0 && a.options.vertical === !1) {
            var b = a.$slides.eq(a.currentSlide).outerHeight(!0);
            a.$list.animate({
                height: b
            }, a.options.speed)
        }
    }, b.prototype.animateSlide = function(b, c) {
        var d = {},
            e = this;
        if (e.animateHeight(), e.options.rtl === !0 && e.options.vertical === !1 && (b = -b), e.transformsEnabled === !1) e.options.vertical === !1 ? e.$slideTrack.animate({
            left: b
        }, e.options.speed, e.options.easing, c) : e.$slideTrack.animate({
            top: b
        }, e.options.speed, e.options.easing, c);
        else if (e.cssTransitions === !1) e.options.rtl === !0 && (e.currentLeft = -e.currentLeft), a({
            animStart: e.currentLeft
        }).animate({
            animStart: b
        }, {
            duration: e.options.speed,
            easing: e.options.easing,
            step: function(a) {
                a = Math.ceil(a), e.options.vertical === !1 ? (d[e.animType] = "translate(" + a + "px, 0px)", e.$slideTrack.css(d)) : (d[e.animType] = "translate(0px," + a + "px)", e.$slideTrack.css(d))
            },
            complete: function() {
                c && c.call()
            }
        });
        else {
            e.applyTransition();
            var f = e.options.rtl === !0 ? 1 : -1;
            b = Math.ceil(b + e.options.slideMargin * f), e.options.vertical === !1 ? d[e.animType] = "translate3d(" + b + "px, 0px, 0px)" : d[e.animType] = "translate3d(0px," + b + "px, 0px)", e.$slideTrack.css(d), c && setTimeout(function() {
                e.disableTransition(), c.call()
            }, e.options.speed)
        }
    }, b.prototype.getNavTarget = function() {
        var b = this,
            c = b.options.asNavFor;
        return c && null !== c && (c = a(c).not(b.$slider)), c
    }, b.prototype.asNavFor = function(b) {
        var c = this,
            d = c.getNavTarget();
        null !== d && "object" == typeof d && d.each(function() {
            var c = a(this).slick("getSlick");
            c.unslicked || c.slideHandler(b, !0)
        })
    }, b.prototype.applyTransition = function(a) {
        var b = this,
            c = {};
        b.options.fade === !1 ? c[b.transitionType] = b.transformType + " " + b.options.speed + "ms " + b.options.cssEase : c[b.transitionType] = "opacity " + b.options.speed + "ms " + b.options.cssEase, b.options.fade === !1 ? b.$slideTrack.css(c) : b.$slides.eq(a).css(c)
    }, b.prototype.autoPlay = function() {
        var a = this;
        a.autoPlayClear(), a.slideCount > a.options.slidesToShow && (a.autoPlayTimer = setInterval(a.autoPlayIterator, a.options.autoplaySpeed))
    }, b.prototype.autoPlayClear = function() {
        var a = this;
        a.autoPlayTimer && clearInterval(a.autoPlayTimer)
    }, b.prototype.autoPlayIterator = function() {
        var a = this,
            b = a.currentSlide + a.options.slidesToScroll;
        a.paused || a.interrupted || a.focussed || (a.options.infinite === !1 && (1 === a.direction && a.currentSlide + 1 === a.slideCount - 1 ? a.direction = 0 : 0 === a.direction && (b = a.currentSlide - a.options.slidesToScroll, a.currentSlide - 1 === 0 && (a.direction = 1))), a.slideHandler(b))
    }, b.prototype.buildArrows = function() {
        var b = this;
        b.options.arrows === !0 && (b.$prevArrow = a(b.options.prevArrow).addClass(b.options.classPrefix + "arrow"), b.$nextArrow = a(b.options.nextArrow).addClass(b.options.classPrefix + "arrow"), b.slideCount > b.options.slidesToShow ? (b.$prevArrow.removeClass(b.options.classPrefix + "hidden").removeAttr("aria-hidden tabindex"), b.$nextArrow.removeClass(b.options.classPrefix + "hidden").removeAttr("aria-hidden tabindex"), b.htmlExpr.test(b.options.prevArrow) && b.$prevArrow.prependTo(b.options.appendArrows), b.htmlExpr.test(b.options.nextArrow) && b.$nextArrow.appendTo(b.options.appendArrows), b.options.infinite !== !0 && b.$prevArrow.addClass(b.options.classPrefix + "disabled").attr("aria-disabled", "true")) : b.$prevArrow.add(b.$nextArrow).addClass(b.options.classPrefix + "hidden").attr({
            "aria-disabled": "true",
            tabindex: "-1"
        }))
    }, b.prototype.buildDots = function() {
        var c, d, b = this;
        if (b.options.dots === !0 && b.slideCount > b.options.slidesToShow) {
            for (b.$slider.addClass(b.options.classPrefix + "dotted"), d = a("<ul />").addClass(b.options.dotsClass), c = 0; c <= b.getDotCount(); c += 1) d.append(a("<li />").append(b.options.customPaging.call(this, b, c)));
            b.$dots = d.appendTo(b.options.appendDots), b.$dots.find("li").first().addClass(b.options.classPrefix + "active").attr("aria-hidden", "false")
        }
    }, b.prototype.buildOut = function() {
        var b = this;
        if (b.$slides = b.$slider.children(b.options.slide + ":not(." + b.options.classPrefix + "cloned)").addClass(b.options.classPrefix + "slide"), b.options.slideMargin) {
            var c = b.options.rtl === !0 ? "right" : "left";
            b.$slides.css("margin-" + c, b.options.slideMargin)
        }
        b.slideCount = b.$slides.length, b.$slides.each(function(c, d) {
            a(d).attr("data-" + b.options.classPrefix + "index", c).data("originalStyling", a(d).attr("style") || "")
        }), b.$slider.addClass(b.options.classPrefix + "slider"), b.$slideTrack = 0 === b.slideCount ? a('<div class="' + b.options.classPrefix + 'track"/>').appendTo(b.$slider) : b.$slides.wrapAll('<div class="' + b.options.classPrefix + 'track"/>').parent(), b.$list = b.$slideTrack.wrap('<div aria-live="polite" class="' + b.options.classPrefix + 'list"/>').parent(), b.$slideTrack.css("opacity", 0), b.options.centerMode !== !0 && b.options.swipeToSlide !== !0 || (b.options.slidesToScroll = 1), a("img[data-lazy]", b.$slider).not("[src]").addClass(b.options.classPrefix + "loading"), b.setupInfinite(), b.buildArrows(), b.buildDots(), b.updateDots(), b.setSlideClasses("number" == typeof b.currentSlide ? b.currentSlide : 0), b.options.draggable === !0 && b.$list.addClass("draggable")
    }, b.prototype.buildRows = function() {
        var b, c, d, e, f, g, h, a = this;
        if (e = document.createDocumentFragment(), g = a.$slider.children(), a.options.rows > 1) {
            for (h = a.options.slidesPerRow * a.options.rows, f = Math.ceil(g.length / h), b = 0; b < f; b++) {
                var i = document.createElement("div");
                for (c = 0; c < a.options.rows; c++) {
                    var j = document.createElement("div");
                    for (d = 0; d < a.options.slidesPerRow; d++) {
                        var k = b * h + (c * a.options.slidesPerRow + d);
                        g.get(k) && j.appendChild(g.get(k))
                    }
                    i.appendChild(j)
                }
                e.appendChild(i)
            }
            a.$slider.empty().append(e), a.$slider.children().children().children().css({
                width: 100 / a.options.slidesPerRow + "%",
                display: "inline-block"
            })
        }
    }, b.prototype.checkResponsive = function(b, c) {
        var e, f, g, d = this,
            h = !1,
            i = d.$slider.width(),
            j = window.innerWidth || a(window).width();
        if ("window" === d.respondTo ? g = j : "slider" === d.respondTo ? g = i : "min" === d.respondTo && (g = Math.min(j, i)), d.options.responsive && d.options.responsive.length && null !== d.options.responsive) {
            f = null;
            for (e in d.breakpoints) d.breakpoints.hasOwnProperty(e) && (d.originalSettings.mobileFirst === !1 ? g < d.breakpoints[e] && (f = d.breakpoints[e]) : g > d.breakpoints[e] && (f = d.breakpoints[e]));
            null !== f ? null !== d.activeBreakpoint ? (f !== d.activeBreakpoint || c) && (d.activeBreakpoint = f, "unslick" === d.breakpointSettings[f] ? d.unslick(f) : (d.options = a.extend({}, d.originalSettings, d.breakpointSettings[f]), b === !0 && (d.currentSlide = d.options.initialSlide), d.refresh(b)), h = f) : (d.activeBreakpoint = f, "unslick" === d.breakpointSettings[f] ? d.unslick(f) : (d.options = a.extend({}, d.originalSettings, d.breakpointSettings[f]), b === !0 && (d.currentSlide = d.options.initialSlide), d.refresh(b)), h = f) : null !== d.activeBreakpoint && (d.activeBreakpoint = null, d.options = d.originalSettings, b === !0 && (d.currentSlide = d.options.initialSlide), d.refresh(b), h = f), b || h === !1 || d.$slider.trigger("breakpoint", [d, h])
        }
    }, b.prototype.changeSlide = function(b, c) {
        var f, g, h, d = this,
            e = a(b.currentTarget);
        switch (e.is("a") && b.preventDefault(), e.is("li") || (e = e.closest("li")), h = d.slideCount % d.options.slidesToScroll !== 0, f = h ? 0 : (d.slideCount - d.currentSlide) % d.options.slidesToScroll, b.data.message) {
            case "previous":
                g = 0 === f ? d.options.slidesToScroll : d.options.slidesToShow - f, d.slideCount > d.options.slidesToShow && d.slideHandler(d.currentSlide - g, !1, c);
                break;
            case "next":
                g = 0 === f ? d.options.slidesToScroll : f, d.slideCount > d.options.slidesToShow && d.slideHandler(d.currentSlide + g, !1, c);
                break;
            case "index":
                var i = 0 === b.data.index ? 0 : b.data.index || e.index() * d.options.slidesToScroll;
                d.slideHandler(d.checkNavigable(i), !1, c), e.children().trigger("focus");
                break;
            default:
                return
        }
    }, b.prototype.checkNavigable = function(a) {
        var c, d, b = this;
        if (c = b.getNavigableIndexes(), d = 0, a > c[c.length - 1]) a = c[c.length - 1];
        else
            for (var e in c) {
                if (a < c[e]) {
                    a = d;
                    break
                }
                d = c[e]
            }
        return a
    }, b.prototype.cleanUpEvents = function() {
        var b = this;
        b.options.dots && null !== b.$dots && a("li", b.$dots).off("click.slick", b.changeSlide).off("mouseenter.slick", a.proxy(b.interrupt, b, !0)).off("mouseleave.slick", a.proxy(b.interrupt, b, !1)), b.$slider.off("focus.slick blur.slick"), b.options.arrows === !0 && b.slideCount > b.options.slidesToShow && (b.$prevArrow && b.$prevArrow.off("click.slick", b.changeSlide), b.$nextArrow && b.$nextArrow.off("click.slick", b.changeSlide)), b.$list.off("touchstart.slick mousedown.slick", b.swipeHandler), b.$list.off("touchmove.slick mousemove.slick", b.swipeHandler), b.$list.off("touchend.slick mouseup.slick", b.swipeHandler), b.$list.off("touchcancel.slick mouseleave.slick", b.swipeHandler), b.$list.off("click.slick", b.clickHandler), a(document).off(b.visibilityChange, b.visibility), b.cleanUpSlideEvents(), b.options.accessibility === !0 && b.$list.off("keydown.slick", b.keyHandler), b.options.focusOnSelect === !0 && a(b.$slideTrack).children().off("click.slick", b.selectHandler), a(window).off("orientationchange.slick.slick-" + b.instanceUid, b.orientationChange), a(window).off("resize.slick.slick-" + b.instanceUid, b.resize), a("[draggable!=true]", b.$slideTrack).off("dragstart", b.preventDefault), a(window).off("load.slick.slick-" + b.instanceUid, b.setPosition), a(document).off("ready.slick.slick-" + b.instanceUid, b.setPosition)
    }, b.prototype.cleanUpSlideEvents = function() {
        var b = this;
        b.$list.off("mouseenter.slick", a.proxy(b.interrupt, b, !0)), b.$list.off("mouseleave.slick", a.proxy(b.interrupt, b, !1))
    }, b.prototype.cleanUpRows = function() {
        var b, a = this;
        a.options.rows > 1 && (b = a.$slides.children().children(), b.removeAttr("style"), a.$slider.empty().append(b))
    }, b.prototype.clickHandler = function(a) {
        var b = this;
        b.shouldClick === !1 && (a.stopImmediatePropagation(), a.stopPropagation(), a.preventDefault())
    }, b.prototype.destroy = function(b) {
        var c = this;
        c.autoPlayClear(), c.touchObject = {}, c.cleanUpEvents(), a("." + c.options.classPrefix + "cloned", c.$slider).detach(), c.$dots && c.$dots.remove(), c.$prevArrow && c.$prevArrow.length && (c.$prevArrow.removeClass(c.options.classPrefix + "disabled " + c.options.classPrefix + "arrow " + c.options.classPrefix + "hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), c.htmlExpr.test(c.options.prevArrow) && c.$prevArrow.remove()), c.$nextArrow && c.$nextArrow.length && (c.$nextArrow.removeClass(c.options.classPrefix + "disabled " + c.options.classPrefix + "arrow " + c.options.classPrefix + "hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), c.htmlExpr.test(c.options.nextArrow) && c.$nextArrow.remove()), c.$slides && (c.$slides.removeClass(c.options.classPrefix + "slide " + c.options.classPrefix + "active " + c.options.classPrefix + "center " + c.options.classPrefix + "visible " + c.options.classPrefix + "current").removeAttr("aria-hidden").removeAttr("data-" + c.options.classPrefix + "index").each(function() {
            a(this).attr("style", a(this).data("originalStyling"))
        }), c.$slideTrack.children(this.options.slide).detach(), c.$slideTrack.detach(), c.$list.detach(), c.$slider.append(c.$slides)), c.cleanUpRows(), c.$slider.removeClass(c.options.classPrefix + "slider"), c.$slider.removeClass(c.options.classPrefix + "initialized"), c.$slider.removeClass(c.options.classPrefix + "dotted"), c.unslicked = !0, b || c.$slider.trigger("destroy", [c])
    }, b.prototype.disableTransition = function(a) {
        var b = this,
            c = {};
        c[b.transitionType] = "", b.options.fade === !1 ? b.$slideTrack.css(c) : b.$slides.eq(a).css(c)
    }, b.prototype.fadeSlide = function(a, b) {
        var c = this;
        c.cssTransitions === !1 ? (c.$slides.eq(a).css({
            zIndex: c.options.zIndex
        }), c.$slides.eq(a).animate({
            opacity: 1
        }, c.options.speed, c.options.easing, b)) : (c.applyTransition(a), c.$slides.eq(a).css({
            opacity: 1,
            zIndex: c.options.zIndex
        }), b && setTimeout(function() {
            c.disableTransition(a), b.call()
        }, c.options.speed))
    }, b.prototype.fadeSlideOut = function(a) {
        var b = this;
        b.cssTransitions === !1 ? b.$slides.eq(a).animate({
            opacity: 0,
            zIndex: b.options.zIndex - 2
        }, b.options.speed, b.options.easing) : (b.applyTransition(a), b.$slides.eq(a).css({
            opacity: 0,
            zIndex: b.options.zIndex - 2
        }))
    }, b.prototype.filterSlides = b.prototype.slickFilter = function(a) {
        var b = this;
        null !== a && (b.$slidesCache = b.$slides, b.unload(), b.$slideTrack.children(this.options.slide).detach(), b.$slidesCache.filter(a).appendTo(b.$slideTrack), b.reinit())
    }, b.prototype.focusHandler = function() {
        var b = this;
        b.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*:not(." + b.options.classPrefix + "arrow)", function(c) {
            c.stopImmediatePropagation();
            var d = a(this);
            setTimeout(function() {
                b.options.pauseOnFocus && (b.focussed = d.is(":focus"), b.autoPlay())
            }, 0)
        })
    }, b.prototype.getCurrent = b.prototype.slickCurrentSlide = function() {
        var a = this;
        return a.currentSlide
    }, b.prototype.getDotCount = function() {
        var a = this,
            b = 0,
            c = 0,
            d = 0;
        if (a.options.infinite === !0)
            for (; b < a.slideCount;) ++d, b = c + a.options.slidesToScroll, c += a.options.slidesToScroll <= a.options.slidesToShow ? a.options.slidesToScroll : a.options.slidesToShow;
        else if (a.options.centerMode === !0) d = a.slideCount;
        else if (a.options.asNavFor)
            for (; b < a.slideCount;) ++d, b = c + a.options.slidesToScroll, c += a.options.slidesToScroll <= a.options.slidesToShow ? a.options.slidesToScroll : a.options.slidesToShow;
        else d = 1 + Math.ceil((a.slideCount - a.options.slidesToShow) / a.options.slidesToScroll);
        return d - 1
    }, b.prototype.getLeft = function(a) {
        var c, d, f, b = this,
            e = 0;
        return b.slideOffset = 0, d = b.$slides.first().outerHeight(!0), b.options.infinite === !0 ? (b.slideCount > b.options.slidesToShow && (b.slideOffset = b.slideWidth * b.options.slidesToShow * -1, e = d * b.options.slidesToShow * -1), b.slideCount % b.options.slidesToScroll !== 0 && a + b.options.slidesToScroll > b.slideCount && b.slideCount > b.options.slidesToShow && (a > b.slideCount ? (b.slideOffset = (b.options.slidesToShow - (a - b.slideCount)) * b.slideWidth * -1, e = (b.options.slidesToShow - (a - b.slideCount)) * d * -1) : (b.slideOffset = b.slideCount % b.options.slidesToScroll * b.slideWidth * -1, e = b.slideCount % b.options.slidesToScroll * d * -1))) : a + b.options.slidesToShow > b.slideCount && (b.slideOffset = (a + b.options.slidesToShow - b.slideCount) * b.slideWidth, e = (a + b.options.slidesToShow - b.slideCount) * d), b.slideCount <= b.options.slidesToShow && (b.slideOffset = 0, e = 0), b.options.centerMode === !0 && b.options.infinite === !0 ? b.slideOffset += b.slideWidth * Math.floor(b.options.slidesToShow / 2) - b.slideWidth : b.options.centerMode === !0 && (b.slideOffset = 0, b.slideOffset += b.slideWidth * Math.floor(b.options.slidesToShow / 2)), c = b.options.vertical === !1 ? a * b.slideWidth * -1 + b.slideOffset : a * d * -1 + e, b.options.variableWidth === !0 && (f = b.slideCount <= b.options.slidesToShow || b.options.infinite === !1 ? b.$slideTrack.children("." + b.options.classPrefix + "slide").eq(a) : b.$slideTrack.children("." + b.options.classPrefix + "slide").eq(a + b.options.slidesToShow), c = b.options.rtl === !0 ? f[0] ? (b.$slideTrack.width() - f[0].offsetLeft - f.width()) * -1 : 0 : f[0] ? f[0].offsetLeft * -1 : 0, b.options.centerMode === !0 && (f = b.slideCount <= b.options.slidesToShow || b.options.infinite === !1 ? b.$slideTrack.children("." + b.options.classPrefix + "slide").eq(a) : b.$slideTrack.children("." + b.options.classPrefix + "slide").eq(a + b.options.slidesToShow + 1), c = b.options.rtl === !0 ? f[0] ? (b.$slideTrack.width() - f[0].offsetLeft - f.width()) * -1 : 0 : f[0] ? f[0].offsetLeft * -1 : 0, c += (b.$list.width() - f.outerWidth()) / 2)), c
    }, b.prototype.getOption = b.prototype.slickGetOption = function(a) {
        var b = this;
        return b.options[a]
    }, b.prototype.getNavigableIndexes = function() {
        var e, a = this,
            b = 0,
            c = 0,
            d = [];
        for (a.options.infinite === !1 ? e = a.slideCount : (b = a.options.slidesToScroll * -1, c = a.options.slidesToScroll * -1, e = 2 * a.slideCount); b < e;) d.push(b), b = c + a.options.slidesToScroll, c += a.options.slidesToScroll <= a.options.slidesToShow ? a.options.slidesToScroll : a.options.slidesToShow;
        return d
    }, b.prototype.getSlick = function() {
        return this
    }, b.prototype.getSlideCount = function() {
        var c, d, e, b = this;
        return e = b.options.centerMode === !0 ? b.slideWidth * Math.floor(b.options.slidesToShow / 2) : 0, b.options.swipeToSlide === !0 ? (b.$slideTrack.find("." + b.options.classPrefix + "slide").each(function(c, f) {
            if (f.offsetLeft - e + a(f).outerWidth() / 2 > b.swipeLeft * -1) return d = f, !1
        }), c = Math.abs(a(d).attr("data-" + b.options.classPrefix + "index") - b.currentSlide) || 1) : b.options.slidesToScroll
    }, b.prototype.goTo = b.prototype.slickGoTo = function(a, b) {
        var c = this;
        c.changeSlide({
            data: {
                message: "index",
                index: parseInt(a)
            }
        }, b)
    }, b.prototype.init = function(b) {
        var c = this;
        a(c.$slider).hasClass(c.options.classPrefix + "initialized") || (a(c.$slider).addClass(c.options.classPrefix + "initialized"), c.buildRows(), c.buildOut(), c.setProps(), c.startLoad(), c.loadSlider(), c.initializeEvents(), c.updateArrows(), c.updateDots(), c.checkResponsive(!0), c.focusHandler()), b && c.$slider.trigger("init", [c]), c.options.accessibility === !0 && c.initADA(), c.options.autoplay && (c.paused = !1, c.autoPlay())
    }, b.prototype.initADA = function() {
        var b = this;
        b.$slides.add(b.$slideTrack.find("." + b.options.classPrefix + "cloned")).attr({
            "aria-hidden": "true",
            tabindex: "-1"
        }).find("a, input, button, select").attr({
            tabindex: "-1"
        }), b.$slideTrack.attr("role", "listbox"), b.$slides.not(b.$slideTrack.find("." + b.options.classPrefix + "cloned")).each(function(c) {
            a(this).attr("role", "option");
            var d = b.options.centerMode ? c : Math.floor(c / b.options.slidesToShow);
            b.options.dots === !0 && a(this).attr("aria-describedby", b.options.classPrefix + "-slide" + b.instanceUid + d)
        }), null !== b.$dots && b.$dots.attr("role", "tablist").find("li").each(function(c) {
            a(this).attr({
                role: "presentation",
                "aria-selected": "false",
                "aria-controls": "navigation" + b.instanceUid + c,
                id: b.options.classPrefix + "-slide" + b.instanceUid + c
            })
        }).first().attr("aria-selected", "true").end().find("button").attr("role", "button").end().closest("div").attr("role", "toolbar"), b.activateADA()
    }, b.prototype.initArrowEvents = function() {
        var a = this;
        a.options.arrows === !0 && a.slideCount > a.options.slidesToShow && (a.$prevArrow.off("click.slick").on("click.slick", {
            message: "previous"
        }, a.changeSlide), a.$nextArrow.off("click.slick").on("click.slick", {
            message: "next"
        }, a.changeSlide))
    }, b.prototype.initDotEvents = function() {
        var b = this;
        b.options.dots === !0 && b.slideCount > b.options.slidesToShow && a("li", b.$dots).on("click.slick", {
            message: "index"
        }, b.changeSlide), b.options.dots === !0 && b.options.pauseOnDotsHover === !0 && a("li", b.$dots).on("mouseenter.slick", a.proxy(b.interrupt, b, !0)).on("mouseleave.slick", a.proxy(b.interrupt, b, !1))
    }, b.prototype.initSlideEvents = function() {
        var b = this;
        b.options.pauseOnHover && (b.$list.on("mouseenter.slick", a.proxy(b.interrupt, b, !0)), b.$list.on("mouseleave.slick", a.proxy(b.interrupt, b, !1)))
    }, b.prototype.initializeEvents = function() {
        var b = this;
        b.initArrowEvents(), b.initDotEvents(), b.initSlideEvents(), b.$list.on("touchstart.slick mousedown.slick", {
            action: "start"
        }, b.swipeHandler), b.$list.on("touchmove.slick mousemove.slick", {
            action: "move"
        }, b.swipeHandler), b.$list.on("touchend.slick mouseup.slick", {
            action: "end"
        }, b.swipeHandler), b.$list.on("touchcancel.slick mouseleave.slick", {
            action: "end"
        }, b.swipeHandler), b.$list.on("click.slick", b.clickHandler), a(document).on(b.visibilityChange, a.proxy(b.visibility, b)), b.options.accessibility === !0 && b.$list.on("keydown.slick", b.keyHandler), b.options.focusOnSelect === !0 && a(b.$slideTrack).children().on("click.slick", b.selectHandler), a(window).on("orientationchange.slick.slick-" + b.instanceUid, a.proxy(b.orientationChange, b)), a(window).on("resize.slick.slick-" + b.instanceUid, a.proxy(b.resize, b)), a("[draggable!=true]", b.$slideTrack).on("dragstart", b.preventDefault), a(window).on("load.slick.slick-" + b.instanceUid, b.setPosition), a(document).on("ready.slick.slick-" + b.instanceUid, b.setPosition)
    }, b.prototype.initUI = function() {
        var a = this;
        a.options.arrows === !0 && a.slideCount > a.options.slidesToShow && (a.$prevArrow.show(), a.$nextArrow.show()), a.options.dots === !0 && a.slideCount > a.options.slidesToShow && a.$dots.show()
    }, b.prototype.keyHandler = function(a) {
        var b = this;
        a.target.tagName.match("TEXTAREA|INPUT|SELECT") || (37 === a.keyCode && b.options.accessibility === !0 ? b.changeSlide({
            data: {
                message: b.options.rtl === !0 ? "next" : "previous"
            }
        }) : 39 === a.keyCode && b.options.accessibility === !0 && b.changeSlide({
            data: {
                message: b.options.rtl === !0 ? "previous" : "next"
            }
        }))
    }, b.prototype.lazyLoad = function() {
        function g(c) {
            a("img[data-lazy]", c).each(function() {
                var c = a(this),
                    d = a(this).attr("data-lazy"),
                    e = document.createElement("img");
                e.onload = function() {
                    c.animate({
                        opacity: 0
                    }, 100, function() {
                        c.attr("src", d).animate({
                            opacity: 1
                        }, 200, function() {
                            c.removeAttr("data-lazy").removeClass(b.options.classPrefix + "loading")
                        }), b.$slider.trigger("lazyLoaded", [b, c, d])
                    })
                }, e.onerror = function() {
                    c.removeAttr("data-lazy").removeClass(b.options.classPrefix + "loading").addClass(b.options.classPrefix + "lazyload-error"), b.$slider.trigger("lazyLoadError", [b, c, d])
                }, e.src = d
            })
        }
        var c, d, e, f, b = this;
        b.options.centerMode === !0 ? b.options.infinite === !0 ? (e = b.currentSlide + (b.options.slidesToShow / 2 + 1), f = e + b.options.slidesToShow + 2) : (e = Math.max(0, b.currentSlide - (b.options.slidesToShow / 2 + 1)), f = 2 + (b.options.slidesToShow / 2 + 1) + b.currentSlide) : (e = b.options.infinite ? b.options.slidesToShow + b.currentSlide : b.currentSlide, f = Math.ceil(e + b.options.slidesToShow), b.options.fade === !0 && (e > 0 && e--, f <= b.slideCount && f++)), c = b.$slider.find("." + b.options.classPrefix + "slide").slice(e, f), g(c), b.slideCount <= b.options.slidesToShow ? (d = b.$slider.find("." + b.options.classPrefix + "slide"), g(d)) : b.currentSlide >= b.slideCount - b.options.slidesToShow ? (d = b.$slider.find("." + b.options.classPrefix + "cloned").slice(0, b.options.slidesToShow), g(d)) : 0 === b.currentSlide && (d = b.$slider.find("." + b.options.classPrefix + "cloned").slice(b.options.slidesToShow * -1), g(d))
    }, b.prototype.loadSlider = function() {
        var a = this;
        a.setPosition(), a.$slideTrack.css({
            opacity: 1
        }), a.$slider.removeClass(a.options.classPrefix + "loading"), a.initUI(), "progressive" === a.options.lazyLoad && a.progressiveLazyLoad()
    }, b.prototype.next = b.prototype.slickNext = function() {
        var a = this;
        a.changeSlide({
            data: {
                message: "next"
            }
        })
    }, b.prototype.orientationChange = function() {
        var a = this;
        a.checkResponsive(), a.setPosition()
    }, b.prototype.pause = b.prototype.slickPause = function() {
        var a = this;
        a.autoPlayClear(), a.paused = !0
    }, b.prototype.play = b.prototype.slickPlay = function() {
        var a = this;
        a.autoPlay(), a.options.autoplay = !0, a.paused = !1, a.focussed = !1, a.interrupted = !1
    }, b.prototype.postSlide = function(a) {
        var b = this;
        b.unslicked || (b.$slider.trigger("afterChange", [b, a]), b.animating = !1, b.setPosition(), b.swipeLeft = null, b.options.autoplay && b.autoPlay(), b.options.accessibility === !0 && b.initADA())
    }, b.prototype.prev = b.prototype.slickPrev = function() {
        var a = this;
        a.changeSlide({
            data: {
                message: "previous"
            }
        })
    }, b.prototype.preventDefault = function(a) {
        a.preventDefault()
    }, b.prototype.progressiveLazyLoad = function(b) {
        b = b || 1;
        var e, f, g, c = this,
            d = a("img[data-lazy]", c.$slider);
        d.length ? (e = d.first(), f = e.attr("data-lazy"), g = document.createElement("img"), g.onload = function() {
            e.attr("src", f).removeAttr("data-lazy").removeClass(c.options.classPrefix + "loading"), c.options.adaptiveHeight === !0 && c.setPosition(), c.$slider.trigger("lazyLoaded", [c, e, f]), c.progressiveLazyLoad()
        }, g.onerror = function() {
            b < 3 ? setTimeout(function() {
                c.progressiveLazyLoad(b + 1)
            }, 500) : (e.removeAttr("data-lazy").removeClass(c.options.classPrefix + "loading").addClass(c.options.classPrefix + "lazyload-error"), c.$slider.trigger("lazyLoadError", [c, e, f]), c.progressiveLazyLoad())
        }, g.src = f) : c.$slider.trigger("allImagesLoaded", [c])
    }, b.prototype.refresh = function(b) {
        var d, e, c = this;
        e = c.slideCount - c.options.slidesToShow, !c.options.infinite && c.currentSlide > e && (c.currentSlide = e), c.slideCount <= c.options.slidesToShow && (c.currentSlide = 0), d = c.currentSlide, c.destroy(!0), a.extend(c, c.initials, {
            currentSlide: d
        }), c.init(), b || c.changeSlide({
            data: {
                message: "index",
                index: d
            }
        }, !1)
    }, b.prototype.registerBreakpoints = function() {
        var c, d, e, b = this,
            f = b.options.responsive || null;
        if ("array" === a.type(f) && f.length) {
            b.respondTo = b.options.respondTo || "window";
            for (c in f)
                if (e = b.breakpoints.length - 1, d = f[c].breakpoint, f.hasOwnProperty(c)) {
                    for (; e >= 0;) b.breakpoints[e] && b.breakpoints[e] === d && b.breakpoints.splice(e, 1), e--;
                    b.breakpoints.push(d), b.breakpointSettings[d] = f[c].settings
                }
            b.breakpoints.sort(function(a, c) {
                return b.options.mobileFirst ? a - c : c - a
            })
        }
    }, b.prototype.reinit = function() {
        var b = this;
        if (b.$slides = b.$slideTrack.children(b.options.slide).addClass(b.options.classPrefix + "slide"), b.options.slideMargin) {
            var c = b.options.rtl === !0 ? "right" : "left";
            b.$slides.css("margin-" + c, b.options.slideMargin)
        }
        b.slideCount = b.$slides.length, b.currentSlide >= b.slideCount && 0 !== b.currentSlide && (b.currentSlide = b.currentSlide - b.options.slidesToScroll), b.slideCount <= b.options.slidesToShow && (b.currentSlide = 0), b.registerBreakpoints(), b.setProps(), b.setupInfinite(), b.buildArrows(), b.updateArrows(), b.initArrowEvents(), b.buildDots(), b.updateDots(), b.initDotEvents(), b.cleanUpSlideEvents(), b.initSlideEvents(), b.checkResponsive(!1, !0), b.options.focusOnSelect === !0 && a(b.$slideTrack).children().on("click.slick", b.selectHandler), b.setSlideClasses("number" == typeof b.currentSlide ? b.currentSlide : 0), b.setPosition(), b.focusHandler(), b.paused = !b.options.autoplay, b.autoPlay(), b.$slider.trigger("reInit", [b])
    }, b.prototype.resize = function() {
        var b = this;
        a(window).width() !== b.windowWidth && (clearTimeout(b.windowDelay), b.windowDelay = window.setTimeout(function() {
            b.windowWidth = a(window).width(), b.checkResponsive(), b.unslicked || b.setPosition()
        }, 50))
    }, b.prototype.removeSlide = b.prototype.slickRemove = function(a, b, c) {
        var d = this;
        return "boolean" == typeof a ? (b = a, a = b === !0 ? 0 : d.slideCount - 1) : a = b === !0 ? --a : a, !(d.slideCount < 1 || a < 0 || a > d.slideCount - 1) && (d.unload(), c === !0 ? d.$slideTrack.children().remove() : d.$slideTrack.children(this.options.slide).eq(a).remove(), d.$slides = d.$slideTrack.children(this.options.slide), d.$slideTrack.children(this.options.slide).detach(), d.$slideTrack.append(d.$slides), d.$slidesCache = d.$slides, void d.reinit())
    }, b.prototype.setCSS = function(a) {
        var d, e, b = this,
            c = {};
        b.options.rtl === !0 && (a = -a);
        var f = b.options.rtl === !0 ? 1 : -1;
        d = "left" == b.positionProp ? Math.ceil(a + b.options.slideMargin * f) + "px" : "0px", e = "top" == b.positionProp ? Math.ceil(a) + "px" : "0px", c[b.positionProp] = a, b.transformsEnabled === !1 ? b.$slideTrack.css(c) : (c = {}, b.cssTransitions === !1 ? (c[b.animType] = "translate(" + d + ", " + e + ")", b.$slideTrack.css(c)) : (c[b.animType] = "translate3d(" + d + ", " + e + ", 0px)", b.$slideTrack.css(c)))
    }, b.prototype.setDimensions = function() {
        var a = this;
        a.options.vertical === !1 ? a.options.centerMode === !0 && a.$list.css({
            padding: "0px " + a.options.centerPadding
        }) : (a.$list.height(a.$slides.first().outerHeight(!0) * a.options.slidesToShow), a.options.centerMode === !0 && a.$list.css({
            padding: a.options.centerPadding + " 0px"
        })), a.listWidth = a.$list.width(), a.listHeight = a.$list.height(), a.options.vertical === !1 && a.options.variableWidth === !1 ? (a.slideWidth = Math.ceil(a.listWidth / a.options.slidesToShow), a.slideWidth += a.options.slideMargin, a.$slideTrack.width(Math.ceil(a.slideWidth * a.$slideTrack.children("." + a.options.classPrefix + "slide").length))) : a.options.variableWidth === !0 ? a.$slideTrack.width(5e3 * a.slideCount) : (a.slideWidth = Math.ceil(a.listWidth), a.$slideTrack.height(Math.ceil(a.$slides.first().outerHeight(!0) * a.$slideTrack.children("." + a.options.classPrefix + "slide").length)));
        var b = a.$slides.first().outerWidth(!0) - a.$slides.first().width();
        a.options.variableWidth === !1 && a.$slideTrack.children("." + a.options.classPrefix + "slide").width(a.slideWidth - b)
    }, b.prototype.setFade = function() {
        var c, b = this;
        b.$slides.each(function(d, e) {
            c = b.slideWidth * d * -1, b.options.rtl === !0 ? a(e).css({
                position: "relative",
                right: c,
                top: 0,
                zIndex: b.options.zIndex - 2,
                opacity: 0
            }) : a(e).css({
                position: "relative",
                left: c,
                top: 0,
                zIndex: b.options.zIndex - 2,
                opacity: 0
            })
        }), b.$slides.eq(b.currentSlide).css({
            zIndex: b.options.zIndex - 1,
            opacity: 1
        })
    }, b.prototype.setHeight = function() {
        var a = this;
        if (1 === a.options.slidesToShow && a.options.adaptiveHeight === !0 && a.options.vertical === !1) {
            var b = a.$slides.eq(a.currentSlide).outerHeight(!0);
            a.$list.css("height", b)
        }
    }, b.prototype.setOption = b.prototype.slickSetOption = function() {
        var c, d, e, f, h, b = this,
            g = !1;
        if ("object" === a.type(arguments[0]) ? (e = arguments[0], g = arguments[1], h = "multiple") : "string" === a.type(arguments[0]) && (e = arguments[0], f = arguments[1], g = arguments[2], "responsive" === arguments[0] && "array" === a.type(arguments[1]) ? h = "responsive" : "undefined" != typeof arguments[1] && (h = "single")), "single" === h) b.options[e] = f;
        else if ("multiple" === h) a.each(e, function(a, c) {
            b.options[a] = c
        });
        else if ("responsive" === h)
            for (d in f)
                if ("array" !== a.type(b.options.responsive)) b.options.responsive = [f[d]];
                else {
                    for (c = b.options.responsive.length - 1; c >= 0;) b.options.responsive[c].breakpoint === f[d].breakpoint && b.options.responsive.splice(c, 1), c--;
                    b.options.responsive.push(f[d])
                }
        g && (b.unload(), b.reinit())
    }, b.prototype.setPosition = function() {
        var a = this;
        a.setDimensions(), a.setHeight(), a.options.fade === !1 ? a.setCSS(a.getLeft(a.currentSlide)) : a.setFade(), a.$slider.trigger("setPosition", [a])
    }, b.prototype.setProps = function() {
        var a = this,
            b = document.body.style;
        a.positionProp = a.options.vertical === !0 ? "top" : "left", "top" === a.positionProp ? a.$slider.addClass(a.options.classPrefix + "vertical") : a.$slider.removeClass(a.options.classPrefix + "vertical"), void 0 === b.WebkitTransition && void 0 === b.MozTransition && void 0 === b.msTransition || a.options.useCSS === !0 && (a.cssTransitions = !0), a.options.fade && ("number" == typeof a.options.zIndex ? a.options.zIndex < 3 && (a.options.zIndex = 3) : a.options.zIndex = a.defaults.zIndex), void 0 !== b.OTransform && (a.animType = "OTransform", a.transformType = "-o-transform", a.transitionType = "OTransition", void 0 === b.perspectiveProperty && void 0 === b.webkitPerspective && (a.animType = !1)), void 0 !== b.MozTransform && (a.animType = "MozTransform", a.transformType = "-moz-transform", a.transitionType = "MozTransition", void 0 === b.perspectiveProperty && void 0 === b.MozPerspective && (a.animType = !1)), void 0 !== b.webkitTransform && (a.animType = "webkitTransform", a.transformType = "-webkit-transform", a.transitionType = "webkitTransition", void 0 === b.perspectiveProperty && void 0 === b.webkitPerspective && (a.animType = !1)), void 0 !== b.msTransform && (a.animType = "msTransform", a.transformType = "-ms-transform", a.transitionType = "msTransition", void 0 === b.msTransform && (a.animType = !1)), void 0 !== b.transform && a.animType !== !1 && (a.animType = "transform", a.transformType = "transform", a.transitionType = "transition"), a.transformsEnabled = a.options.useTransform && null !== a.animType && a.animType !== !1
    }, b.prototype.setSlideClasses = function(a) {
        var c, d, e, f, b = this;
        d = b.$slider.find("." + b.options.classPrefix + "slide").removeClass(b.options.classPrefix + "active " + b.options.classPrefix + "center " + b.options.classPrefix + "current").attr("aria-hidden", "true"), b.$slides.eq(a).addClass(b.options.classPrefix + "current"), b.options.centerMode === !0 ? (c = Math.floor(b.options.slidesToShow / 2), b.options.infinite === !0 && (a >= c && a <= b.slideCount - 1 - c ? b.$slides.slice(a - c, a + c + 1).addClass(b.options.classPrefix + "active").attr("aria-hidden", "false") : (e = b.options.slidesToShow + a, d.slice(e - c + 1, e + c + 2).addClass(b.options.classPrefix + "active").attr("aria-hidden", "false")), 0 === a ? d.eq(d.length - 1 - b.options.slidesToShow).addClass(b.options.classPrefix + "center") : a === b.slideCount - 1 && d.eq(b.options.slidesToShow).addClass(b.options.classPrefix + "center")), b.$slides.eq(a).addClass(b.options.classPrefix + "center")) : a >= 0 && a <= b.slideCount - b.options.slidesToShow ? b.$slides.slice(a, a + b.options.slidesToShow).addClass(b.options.classPrefix + "active").attr("aria-hidden", "false") : d.length <= b.options.slidesToShow ? d.addClass(b.options.classPrefix + "active").attr("aria-hidden", "false") : (f = b.slideCount % b.options.slidesToShow, e = b.options.infinite === !0 ? b.options.slidesToShow + a : a, b.options.slidesToShow == b.options.slidesToScroll && b.slideCount - a < b.options.slidesToShow ? d.slice(e - (b.options.slidesToShow - f), e + f).addClass(b.options.classPrefix + "active").attr("aria-hidden", "false") : d.slice(e, e + b.options.slidesToShow).addClass(b.options.classPrefix + "active").attr("aria-hidden", "false")), "ondemand" === b.options.lazyLoad && b.lazyLoad()
    }, b.prototype.setupInfinite = function() {
        var c, d, e, b = this;
        if (b.options.fade === !0 && (b.options.centerMode = !1), b.options.infinite === !0 && b.options.fade === !1 && (d = null, b.slideCount > b.options.slidesToShow)) {
            for (e = b.options.centerMode === !0 ? b.options.slidesToShow + 1 : b.options.slidesToShow, c = b.slideCount; c > b.slideCount - e; c -= 1) d = c - 1, a(b.$slides[d]).clone(!0).attr("id", "").attr("data-" + b.options.classPrefix + "index", d - b.slideCount).prependTo(b.$slideTrack).addClass(b.options.classPrefix + "cloned");
            for (c = 0; c < e; c += 1) d = c, a(b.$slides[d]).clone(!0).attr("id", "").attr("data-" + b.options.classPrefix + "index", d + b.slideCount).appendTo(b.$slideTrack).addClass(b.options.classPrefix + "cloned");
            b.$slideTrack.find("." + b.options.classPrefix + "cloned").find("[id]").each(function() {
                a(this).attr("id", "")
            })
        }
    }, b.prototype.interrupt = function(a) {
        var b = this;
        a || b.autoPlay(), b.interrupted = a
    }, b.prototype.selectHandler = function(b) {
        var c = this,
            d = a(b.target).is("." + c.options.classPrefix + "slide") ? a(b.target) : a(b.target).parents("." + c.options.classPrefix + "slide"),
            e = parseInt(d.attr("data-" + c.options.classPrefix + "index"));
        return e || (e = 0), c.slideCount <= c.options.slidesToShow ? (c.setSlideClasses(e), void c.asNavFor(e)) : void c.slideHandler(e)
    }, b.prototype.slideHandler = function(a, b, c) {
        var d, e, f, g, j, h = null,
            i = this;
        if (b = b || !1, (i.animating !== !0 || i.options.waitForAnimate !== !0) && !(i.options.fade === !0 && i.currentSlide === a || i.slideCount <= i.options.slidesToShow)) return b === !1 && i.asNavFor(a), d = a, h = i.getLeft(d), g = i.getLeft(i.currentSlide), i.currentLeft = null === i.swipeLeft ? g : i.swipeLeft, i.options.infinite === !1 && i.options.centerMode === !1 && (a < 0 || a > i.getDotCount() * i.options.slidesToScroll) ? void(i.options.fade === !1 && (d = i.currentSlide, c !== !0 ? i.animateSlide(g, function() {
            i.postSlide(d)
        }) : i.postSlide(d))) : i.options.infinite === !1 && i.options.centerMode === !0 && (a < 0 || a > i.slideCount - i.options.slidesToScroll) ? void(i.options.fade === !1 && (d = i.currentSlide, c !== !0 ? i.animateSlide(g, function() {
            i.postSlide(d)
        }) : i.postSlide(d))) : (i.options.autoplay && clearInterval(i.autoPlayTimer), e = d < 0 ? i.slideCount % i.options.slidesToScroll !== 0 ? i.slideCount - i.slideCount % i.options.slidesToScroll : i.slideCount + d : d >= i.slideCount ? i.slideCount % i.options.slidesToScroll !== 0 ? 0 : d - i.slideCount : d, i.animating = !0, i.$slider.trigger("beforeChange", [i, i.currentSlide, e]), f = i.currentSlide, i.currentSlide = e, i.setSlideClasses(i.currentSlide), i.options.asNavFor && (j = i.getNavTarget(), j = j.slick("getSlick"), j.slideCount <= j.options.slidesToShow && j.setSlideClasses(i.currentSlide)), i.updateDots(), i.updateArrows(), i.options.fade === !0 ? (c !== !0 ? (i.fadeSlideOut(f), i.fadeSlide(e, function() {
            i.postSlide(e)
        })) : i.postSlide(e), void i.animateHeight()) : void(c !== !0 ? i.animateSlide(h, function() {
            i.postSlide(e)
        }) : i.postSlide(e)))
    }, b.prototype.startLoad = function() {
        var a = this;
        a.options.arrows === !0 && a.slideCount > a.options.slidesToShow && (a.$prevArrow.hide(), a.$nextArrow.hide()), a.options.dots === !0 && a.slideCount > a.options.slidesToShow && a.$dots.hide(), a.$slider.addClass(a.options.classPrefix + "loading")
    }, b.prototype.swipeDirection = function() {
        var a, b, c, d, e = this;
        return a = e.touchObject.startX - e.touchObject.curX, b = e.touchObject.startY - e.touchObject.curY, c = Math.atan2(b, a), d = Math.round(180 * c / Math.PI), d < 0 && (d = 360 - Math.abs(d)), d <= 45 && d >= 0 ? e.options.rtl === !1 ? "left" : "right" : d <= 360 && d >= 315 ? e.options.rtl === !1 ? "left" : "right" : d >= 135 && d <= 225 ? e.options.rtl === !1 ? "right" : "left" : e.options.verticalSwiping === !0 ? d >= 35 && d <= 135 ? "down" : "up" : "vertical"
    }, b.prototype.swipeEnd = function(a) {
        var c, d, b = this;
        if (b.dragging = !1, b.interrupted = !1, b.shouldClick = !(b.touchObject.swipeLength > 10), void 0 === b.touchObject.curX) return !1;
        if (b.touchObject.edgeHit === !0 && b.$slider.trigger("edge", [b, b.swipeDirection()]), b.touchObject.swipeLength >= b.touchObject.minSwipe) {
            switch (d = b.swipeDirection()) {
                case "left":
                case "down":
                    c = b.options.swipeToSlide ? b.checkNavigable(b.currentSlide + b.getSlideCount()) : b.currentSlide + b.getSlideCount(), b.currentDirection = 0;
                    break;
                case "right":
                case "up":
                    c = b.options.swipeToSlide ? b.checkNavigable(b.currentSlide - b.getSlideCount()) : b.currentSlide - b.getSlideCount(), b.currentDirection = 1
            }
            "vertical" != d && (b.slideHandler(c), b.touchObject = {}, b.$slider.trigger("swipe", [b, d]))
        } else b.touchObject.startX !== b.touchObject.curX && (b.slideHandler(b.currentSlide), b.touchObject = {})
    }, b.prototype.swipeHandler = function(a) {
        var b = this;
        if (!(b.options.swipe === !1 || "ontouchend" in document && b.options.swipe === !1 || b.options.draggable === !1 && a.type.indexOf("mouse") !== -1)) switch (b.touchObject.fingerCount = a.originalEvent && void 0 !== a.originalEvent.touches ? a.originalEvent.touches.length : 1, b.touchObject.minSwipe = b.listWidth / b.options.touchThreshold, b.options.verticalSwiping === !0 && (b.touchObject.minSwipe = b.listHeight / b.options.touchThreshold), a.data.action) {
            case "start":
                b.swipeStart(a);
                break;
            case "move":
                b.swipeMove(a);
                break;
            case "end":
                b.swipeEnd(a)
        }
    }, b.prototype.swipeMove = function(a) {
        var d, e, f, g, h, b = this;
        return h = void 0 !== a.originalEvent ? a.originalEvent.touches : null, !(!b.dragging || h && 1 !== h.length) && (d = b.getLeft(b.currentSlide), b.touchObject.curX = void 0 !== h ? h[0].pageX : a.clientX, b.touchObject.curY = void 0 !== h ? h[0].pageY : a.clientY, b.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(b.touchObject.curX - b.touchObject.startX, 2))), b.options.verticalSwiping === !0 && (b.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(b.touchObject.curY - b.touchObject.startY, 2)))), e = b.swipeDirection(), "vertical" !== e ? (void 0 !== a.originalEvent && b.touchObject.swipeLength > 4 && a.preventDefault(), g = (b.options.rtl === !1 ? 1 : -1) * (b.touchObject.curX > b.touchObject.startX ? 1 : -1), b.options.verticalSwiping === !0 && (g = b.touchObject.curY > b.touchObject.startY ? 1 : -1), f = b.touchObject.swipeLength, b.touchObject.edgeHit = !1, b.options.infinite === !1 && (0 === b.currentSlide && "right" === e || b.currentSlide >= b.getDotCount() && "left" === e) && (f = b.touchObject.swipeLength * b.options.edgeFriction, b.touchObject.edgeHit = !0), b.options.vertical === !1 ? b.swipeLeft = d + f * g : b.swipeLeft = d + f * (b.$list.height() / b.listWidth) * g, b.options.verticalSwiping === !0 && (b.swipeLeft = d + f * g), b.options.fade !== !0 && b.options.touchMove !== !1 && (b.animating === !0 ? (b.swipeLeft = null, !1) : void b.setCSS(b.swipeLeft))) : void 0)
    }, b.prototype.swipeStart = function(a) {
        var c, b = this;
        return b.interrupted = !0, 1 !== b.touchObject.fingerCount || b.slideCount <= b.options.slidesToShow ? (b.touchObject = {}, !1) : (void 0 !== a.originalEvent && void 0 !== a.originalEvent.touches && (c = a.originalEvent.touches[0]), b.touchObject.startX = b.touchObject.curX = void 0 !== c ? c.pageX : a.clientX, b.touchObject.startY = b.touchObject.curY = void 0 !== c ? c.pageY : a.clientY, void(b.dragging = !0))
    }, b.prototype.unfilterSlides = b.prototype.slickUnfilter = function() {
        var a = this;
        null !== a.$slidesCache && (a.unload(), a.$slideTrack.children(this.options.slide).detach(), a.$slidesCache.appendTo(a.$slideTrack), a.reinit())
    }, b.prototype.unload = function() {
        var b = this;
        a("." + b.options.classPrefix + "cloned", b.$slider).remove(), b.$dots && b.$dots.remove(), b.$prevArrow && b.htmlExpr.test(b.options.prevArrow) && b.$prevArrow.remove(), b.$nextArrow && b.htmlExpr.test(b.options.nextArrow) && b.$nextArrow.remove(), b.$slides.removeClass(b.options.classPrefix + "slide " + b.options.classPrefix + "active " + b.options.classPrefix + "visible " + b.options.classPrefix + "current").attr("aria-hidden", "true").css("width", "")
    }, b.prototype.unslick = function(a) {
        var b = this;
        b.$slider.trigger("unslick", [b, a]), b.destroy()
    }, b.prototype.updateArrows = function() {
        var b, a = this;
        b = Math.floor(a.options.slidesToShow / 2), a.options.arrows === !0 && a.slideCount > a.options.slidesToShow && !a.options.infinite && (a.$prevArrow.removeClass(a.options.classPrefix + "disabled").attr("aria-disabled", "false"), a.$nextArrow.removeClass(a.options.classPrefix + "disabled").attr("aria-disabled", "false"), 0 === a.currentSlide ? (a.$prevArrow.addClass(a.options.classPrefix + "disabled").attr("aria-disabled", "true"), a.$nextArrow.removeClass(a.options.classPrefix + "disabled").attr("aria-disabled", "false")) : a.currentSlide >= a.slideCount - a.options.slidesToShow && a.options.centerMode === !1 ? (a.$nextArrow.addClass(a.options.classPrefix + "disabled").attr("aria-disabled", "true"), a.$prevArrow.removeClass(a.options.classPrefix + "disabled").attr("aria-disabled", "false")) : a.currentSlide >= a.slideCount - 1 && a.options.centerMode === !0 && (a.$nextArrow.addClass(a.options.classPrefix + "disabled").attr("aria-disabled", "true"), a.$prevArrow.removeClass(a.options.classPrefix + "disabled").attr("aria-disabled", "false")))
    }, b.prototype.updateDots = function() {
        var a = this;
        null !== a.$dots && (a.$dots.find("li").removeClass(a.options.classPrefix + "active").attr("aria-hidden", "true"), a.$dots.find("li").eq(Math.floor(a.currentSlide / a.options.slidesToScroll)).addClass(a.options.classPrefix + "active").attr("aria-hidden", "false"))
    }, b.prototype.visibility = function() {
        var a = this;
        a.options.autoplay && (document[a.hidden] ? a.interrupted = !0 : a.interrupted = !1)
    }, a.fn.slick = function() {
        var f, g, a = this,
            c = arguments[0],
            d = Array.prototype.slice.call(arguments, 1),
            e = a.length;
        for (f = 0; f < e; f++)
            if ("object" == typeof c || "undefined" == typeof c ? a[f].slick = new b(a[f], c) : g = a[f].slick[c].apply(a[f].slick, d), "undefined" != typeof g) return g;
        return a
    }
});
var Better_Ads_Manager = function(a) {
    "use strict";
    return {
        init: function() {
            0 == Better_Ads_Manager.ads_state() && Better_Ads_Manager.blocked_ads_fallback()
        },
        ads_state: function() {
            return void 0 !== window.better_ads_adblock
        },
        blocked_ads_fallback: function() {
            var t = {};
            a(".bsac-container").each(function() {
                if ("image" == a(this).data("type")) return 0;
                t[a(this).data("adid")] = {
                    element_id: a(this).attr("id"),
                    ad_id: a(this).data("adid")
                }
            }), 0 != t.length && jQuery.ajax({
                url: better_bam_loc.ajax_url,
                type: "POST",
                data: {
                    action: "better_ads_manager_blocked_fallback",
                    ads: t
                },
                success: function(t) {
                    var e = JSON.parse(t);
                    a.each(e.ads, function(t, e) {
                        a("#" + e.element_id).html(e.code)
                    })
                }
            })
        }
    }
}(jQuery);
jQuery(document).ready(function() {
    Better_Ads_Manager.init()
});
jQuery(function(e) {
    function t(e) {
        return a().indexOf(e.toString()) > -1
    }

    function a() {
        var e = s.getItem("better-review-user-rating");
        return e ? e.split(",") : []
    }

    function n(e) {
        var t = a();
        t.push(e.toString());
        s.setItem("better-review-user-rating", t, 217728e3, betterReviewsLoc.cp)
    }
    var s = {
            getItem: function(e) {
                return e ? decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(e).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null : null
            },
            setItem: function(e, t, a, n, s, r) {
                if (!e || /^(?:expires|max\-age|path|domain|secure)$/i.test(e)) return !1;
                var i = "";
                if (a) switch (a.constructor) {
                    case Number:
                        i = a === 1 / 0 ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + a;
                        break;
                    case String:
                        i = "; expires=" + a;
                        break;
                    case Date:
                        i = "; expires=" + a.toUTCString()
                }
                return document.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(t) + i + (s ? "; domain=" + s : "") + (n ? "; path=" + n : "") + (r ? "; secure" : ""), !0
            },
            removeItem: function(e, t, a) {
                return !!this.hasItem(e) && (document.cookie = encodeURIComponent(e) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (a ? "; domain=" + a : "") + (t ? "; path=" + t : ""), !0)
            },
            hasItem: function(e) {
                return !!e && new RegExp("(?:^|;\\s*)" + encodeURIComponent(e).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=").test(document.cookie)
            },
            keys: function() {
                for (var e = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/), t = e.length, a = 0; a < t; a++) e[a] = decodeURIComponent(e[a]);
                return e
            }
        },
        r = e("body").hasClass("rtl");
    e(".readers-ratings").on("mousemove", ".rating-stars:not(.disable)", function(t) {
        var a = e(this),
            n = (a.width() - 2) / 100,
            s = Math.ceil(r ? e(this).offset().left + e(this).width() - t.pageX : t.pageX - e(this).offset().left),
            i = Math.min(100, Math.ceil(s / n));
        a.children("span").width(i + "%").data("rate", i)
    }).on("click", ".rating-stars:not(.disable)", function() {
        var t = e(this),
            a = t.closest(".betterstudio-review");
        t.addClass("disable"), t.fadeOut(150, function() {
            t.parent().append('<i class="fa fa-spinner fa-spin loading" style="margin: 0 50px;"></i>')
        }), e.ajax({
            url: betterReviewsLoc.ajax_url,
            type: "POST",
            dataType: "json",
            data: {
                action: "better-review-rating",
                post_id: t.data("post-id"),
                rating: t.children("span").data("rate")
            }
        }).done(function(s) {
            if (s.success) n(t.data("post-id")), t.children("span").width(s.data.vote + "%").data("rate", s.data.vote), e(".ratings-results .number", a).html(s.data.vote + "%"), t.fadeIn(150), e(".total-votes .number", a).html(s.data.votes_count);
            else {
                var r = e("<span />", {
                    class: "error-message"
                }).html(s.data.message);
                r.appendTo(t.parent()), r.delay(4e3).fadeOut(150, function() {
                    t.fadeIn(150), t.removeClass("disable")
                })
            }
        }).always(function() {
            t.parent().find(".loading").remove()
        })
    }), e(".readers-ratings .rating-stars:not(.disable)").each(function() {
        var a = e(this);
        t(a.data("post-id")) && a.addClass("disable")
    })
});
jQuery(function(s) {
    var l = s(document.body).hasClass("rtl");
    s(".bs-smart-list.bssl-style-1 .bssl-items").each(function(a, i) {
        s(i).slick({
            sliderControlDots: "off",
            prevArrow: '<a rel="prev" class="bssl-nav-btn-big prev"><i class="fa fa-angle-' + (l ? "right" : "left") + '" aria-hidden="true"></i> ' + bs_smart_lists_loc.translations.nav_prev + "</a>",
            nextArrow: '<a rel="next" class="bssl-nav-btn-big next">' + bs_smart_lists_loc.translations.nav_next + ' <i class="fa fa-angle-' + (l ? "left" : "right") + '" aria-hidden="true"></i></a>',
            rtl: l,
            slideMargin: 25,
            slide: ".bs-slider-item",
            appendArrows: s(i).siblings(".bssl-control-nav"),
            classPrefix: "bs-slider-",
            adaptiveHeight: !0,
            accessibility: !1
        })
    }), s(".bs-smart-list.bssl-style-2 .bssl-items").each(function(a, i) {
        s(i).slick({
            sliderControlDots: "off",
            prevArrow: '<a rel="prev" class="bssl-nav-btn-big prev"><i class="fa fa-angle-' + (l ? "right" : "left") + '" aria-hidden="true"></i> ' + bs_smart_lists_loc.translations.nav_prev + "</a>",
            nextArrow: '<a rel="next" class="bssl-nav-btn-big next">' + bs_smart_lists_loc.translations.nav_next + ' <i class="fa fa-angle-' + (l ? "left" : "right") + '" aria-hidden="true"></i></a>',
            rtl: l,
            slideMargin: 25,
            slide: ".bs-slider-item",
            appendArrows: s(i).siblings(".bssl-control-nav"),
            classPrefix: "bs-slider-",
            adaptiveHeight: !0,
            accessibility: !1
        })
    }), s(".bs-smart-list.bssl-style-3 .bssl-items").each(function(a, i) {
        s(i).slick({
            sliderControlDots: "off",
            prevArrow: '<a rel="prev" class="bssl-nav-btn-big prev"><i class="fa fa-angle-' + (l ? "right" : "left") + '" aria-hidden="true"></i> ' + bs_smart_lists_loc.translations.nav_prev + "</a>",
            nextArrow: '<a rel="next" class="bssl-nav-btn-big next">' + bs_smart_lists_loc.translations.nav_next + ' <i class="fa fa-angle-' + (l ? "left" : "right") + '" aria-hidden="true"></i></a>',
            rtl: l,
            slideMargin: 25,
            slide: ".bs-slider-item",
            appendArrows: s(i).siblings(".bssl-control-nav"),
            classPrefix: "bs-slider-",
            adaptiveHeight: !0,
            accessibility: !1
        })
    }), s(".bs-smart-list.bssl-style-4 .bssl-items").each(function(a, i) {
        s(i).slick({
            sliderControlDots: "off",
            prevArrow: '<a rel="prev" class="bssl-outline bssl-nav-btn-big prev"><i class="fa fa-angle-' + (l ? "right" : "left") + '" aria-hidden="true"></i> ' + bs_smart_lists_loc.translations.nav_prev + "</a>",
            nextArrow: '<a rel="next" class="bssl-outline bssl-nav-btn-big next">' + bs_smart_lists_loc.translations.nav_next + ' <i class="fa fa-angle-' + (l ? "left" : "right") + '" aria-hidden="true"></i></a>',
            rtl: l,
            slideMargin: 25,
            slide: ".bs-slider-item",
            appendArrows: s(i).siblings(".bssl-control-nav"),
            classPrefix: "bs-slider-",
            adaptiveHeight: !0,
            accessibility: !1
        })
    }), s(".bs-smart-list.bssl-style-5 .bssl-items").each(function(a, i) {
        s(i).slick({
            sliderControlDots: "off",
            prevArrow: '<a rel="prev" class="bssl-nav-btn-big prev"><i class="fa fa-angle-' + (l ? "right" : "left") + '" aria-hidden="true"></i></a>',
            nextArrow: '<a rel="next" class="bssl-nav-btn-big next"><i class="fa fa-angle-' + (l ? "left" : "right") + '" aria-hidden="true"></i></a>',
            rtl: l,
            slideMargin: 25,
            slide: ".bs-slider-item",
            appendArrows: s(i).siblings(".bssl-control-nav"),
            classPrefix: "bs-slider-",
            adaptiveHeight: !0,
            accessibility: !1
        })
    }), s(".bs-smart-list.bssl-style-15 .bssl-items").each(function(a, i) {
        s(i).slick({
            sliderControlDots: "off",
            prevArrow: '<a rel="prev" class="bssl-nav-btn-big prev"><i class="fa fa-angle-' + (l ? "right" : "left") + '" aria-hidden="true"></i> ' + bs_smart_lists_loc.translations.nav_prev + "</a>",
            nextArrow: '<a rel="next" class="bssl-nav-btn-big next">' + bs_smart_lists_loc.translations.nav_next + ' <i class="fa fa-angle-' + (l ? "left" : "right") + '" aria-hidden="true"></i></a>',
            rtl: l,
            slideMargin: 25,
            slide: ".bs-slider-item",
            appendArrows: s(i).siblings(".bssl-control-nav"),
            classPrefix: "bs-slider-",
            adaptiveHeight: !0,
            accessibility: !1
        })
    }), s(".bs-smart-list.bssl-style-16 .bssl-control-nav select").on("change", function() {
        window.location = s(this).val()
    }), s(".bs-smart-list.bssl-style-17 .bssl-control-nav .bssl-select").on("click", function() {
        s(this).toggleClass("open")
    }), s(".bs-smart-list.bssl-style-17 .bssl-control-nav .bssl-select li").on("click", function(l) {
        l.preventDefault(), window.location = s(this).data("url")
    }), s(".bs-smart-list.bssl-style-18 .bssl-items").each(function(a, i) {
        s(i).slick({
            sliderControlDots: "off",
            prevArrow: '<a rel="prev" class="bssl-nav-btn-big prev"><i class="fa fa-angle-' + (l ? "right" : "left") + '" aria-hidden="true"></i></a>',
            nextArrow: '<a rel="next" class="bssl-nav-btn-big next"><i class="fa fa-angle-' + (l ? "left" : "right") + '" aria-hidden="true"></i></a>',
            rtl: l,
            slide: ".bs-slider-item",
            appendArrows: s(i).siblings(".bssl-control-nav"),
            classPrefix: "bs-slider-",
            adaptiveHeight: !0,
            accessibility: !1,
            fade: !0
        }), s(i).on("afterChange", function(l, a, i) {
            var t = bs_smart_lists_loc.translations.trans_x_of_y,
                e = s(this).closest(".bs-smart-list").find(".bssl-items-title .bssl-count");
            t = (t = t.replace("%1$s", i + 1)).replace("%2$s", e.data("all")), e.html(t)
        })
    }), s(".bs-smart-list.bssl-style-19 .bssl-big-items").each(function(a, i) {
        s(i).slick({
            sliderControlDots: "off",
            prevArrow: '<a rel="prev" class="bssl-nav-btn-big prev"><i class="fa fa-angle-' + (l ? "right" : "left") + '" aria-hidden="true"></i></a>',
            nextArrow: '<a rel="next" class="bssl-nav-btn-big next"><i class="fa fa-angle-' + (l ? "left" : "right") + '" aria-hidden="true"></i></a>',
            rtl: l,
            slide: ".bs-slider-item",
            appendArrows: s(i).siblings(".bssl-control-nav"),
            classPrefix: "bs-slider-",
            adaptiveHeight: !0,
            accessibility: !1,
            fade: !0
        })
    }), s(".bs-smart-list.bssl-style-20 .bssl-big-items").each(function(a, i) {
        s(i).slick({
            sliderControlDots: "off",
            prevArrow: '<a rel="prev" class="bssl-nav-btn-big prev"><i class="fa fa-angle-' + (l ? "right" : "left") + '" aria-hidden="true"></i></a>',
            nextArrow: '<a rel="next" class="bssl-nav-btn-big next"><i class="fa fa-angle-' + (l ? "left" : "right") + '" aria-hidden="true"></i></a>',
            rtl: l,
            slide: ".bs-slider-item",
            appendArrows: s(i).siblings(".bssl-control-nav"),
            classPrefix: "bs-slider-",
            adaptiveHeight: !0,
            accessibility: !1,
            fade: !0
        })
    })
});
if ("undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery"); + function(t) {
    var e = jQuery.fn.jquery.split(" ")[0].split(".");
    if (e[0] < 2 && e[1] < 9 || 1 == e[0] && 9 == e[1] && e[2] < 1) throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher")
}(),
function(t) {
    "use strict";
    var e = '[data-dismiss="alert"]',
        i = function(i) {
            t(i).on("click", e, this.close)
        };
    i.VERSION = "3.3.0", i.TRANSITION_DURATION = 150, i.prototype.close = function(e) {
        function n() {
            s.detach().trigger("closed.bs.alert").remove()
        }
        var o = t(this),
            a = o.attr("data-target");
        a || (a = o.attr("href"), a = a && a.replace(/.*(?=#[^\s]*$)/, ""));
        var s = t(a);
        e && e.preventDefault(), s.length || (s = o.closest(".alert")), s.trigger(e = t.Event("close.bs.alert")), e.isDefaultPrevented() || (s.removeClass("in"), t.support.transition && s.hasClass("fade") ? s.one("bsTransitionEnd", n).emulateTransitionEnd(i.TRANSITION_DURATION) : n())
    };
    var n = t.fn.alert;
    t.fn.alert = function(e) {
        return this.each(function() {
            var n = t(this),
                o = n.data("bs.alert");
            o || n.data("bs.alert", o = new i(this)), "string" == typeof e && o[e].call(n)
        })
    }, t.fn.alert.Constructor = i, t.fn.alert.noConflict = function() {
        return t.fn.alert = n, this
    }, t(document).on("click.bs.alert.data-api", e, i.prototype.close)
}(jQuery),
function(t) {
    "use strict";

    function e(e) {
        return this.each(function() {
            var n = t(this),
                o = n.data("bs.button"),
                a = "object" == typeof e && e;
            o || n.data("bs.button", o = new i(this, a)), "toggle" == e ? o.toggle() : e && o.setState(e)
        })
    }
    var i = function(e, n) {
        this.$element = t(e), this.options = t.extend({}, i.DEFAULTS, n), this.isLoading = !1
    };
    i.VERSION = "3.3.0", i.DEFAULTS = {
        loadingText: "loading..."
    }, i.prototype.setState = function(e) {
        var i = "disabled",
            n = this.$element,
            o = n.is("input") ? "val" : "html",
            a = n.data();
        e += "Text", null == a.resetText && n.data("resetText", n[o]()), setTimeout(t.proxy(function() {
            n[o](null == a[e] ? this.options[e] : a[e]), "loadingText" == e ? (this.isLoading = !0, n.addClass(i).attr(i, i)) : this.isLoading && (this.isLoading = !1, n.removeClass(i).removeAttr(i))
        }, this), 0)
    }, i.prototype.toggle = function() {
        var t = !0,
            e = this.$element.closest('[data-toggle="buttons"]');
        if (e.length) {
            var i = this.$element.find("input");
            "radio" == i.prop("type") && (i.prop("checked") && this.$element.hasClass("active") ? t = !1 : e.find(".active").removeClass("active")), t && i.prop("checked", !this.$element.hasClass("active")).trigger("change")
        } else this.$element.attr("aria-pressed", !this.$element.hasClass("active"));
        t && this.$element.toggleClass("active")
    };
    var n = t.fn.button;
    t.fn.button = e, t.fn.button.Constructor = i, t.fn.button.noConflict = function() {
        return t.fn.button = n, this
    }, t(document).on("click.bs.button.data-api", '[data-toggle^="button"]', function(i) {
        var n = t(i.target);
        n.hasClass("btn") || (n = n.closest(".btn")), e.call(n, "toggle"), i.preventDefault()
    }).on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]', function(e) {
        t(e.target).closest(".btn").toggleClass("focus", "focus" == e.type)
    })
}(jQuery),
function(t) {
    "use strict";

    function e(e) {
        e && 3 === e.which || (t(n).remove(), t(o).each(function() {
            var n = t(this),
                o = i(n),
                a = {
                    relatedTarget: this
                };
            o.hasClass("open") && (o.trigger(e = t.Event("hide.bs.dropdown", a)), e.isDefaultPrevented() || (n.attr("aria-expanded", "false"), o.removeClass("open").trigger("hidden.bs.dropdown", a)))
        }))
    }

    function i(e) {
        var i = e.attr("data-target");
        i || (i = e.attr("href"), i = i && /#[A-Za-z]/.test(i) && i.replace(/.*(?=#[^\s]*$)/, ""));
        var n = i && t(i);
        return n && n.length ? n : e.parent()
    }
    var n = ".dropdown-backdrop",
        o = '[data-toggle="dropdown"]',
        a = function(e) {
            t(e).on("click.bs.dropdown", this.toggle)
        };
    a.VERSION = "3.3.0", a.prototype.toggle = function(n) {
        var o = t(this);
        if (!o.is(".disabled, :disabled")) {
            var a = i(o),
                s = a.hasClass("open");
            if (e(), !s) {
                "ontouchstart" in document.documentElement && !a.closest(".navbar-nav").length && t('<div class="dropdown-backdrop"/>').insertAfter(t(this)).on("click", e);
                var r = {
                    relatedTarget: this
                };
                if (a.trigger(n = t.Event("show.bs.dropdown", r)), n.isDefaultPrevented()) return;
                o.trigger("focus").attr("aria-expanded", "true"), a.toggleClass("open").trigger("shown.bs.dropdown", r)
            }
            return !1
        }
    }, a.prototype.keydown = function(e) {
        if (/(38|40|27|32)/.test(e.which)) {
            var n = t(this);
            if (e.preventDefault(), e.stopPropagation(), !n.is(".disabled, :disabled")) {
                var a = i(n),
                    s = a.hasClass("open");
                if (!s && 27 != e.which || s && 27 == e.which) return 27 == e.which && a.find(o).trigger("focus"), n.trigger("click");
                var r = " li:not(.divider):visible a",
                    l = a.find('[role="menu"]' + r + ', [role="listbox"]' + r);
                if (l.length) {
                    var c = l.index(e.target);
                    38 == e.which && c > 0 && c--, 40 == e.which && c < l.length - 1 && c++, ~c || (c = 0), l.eq(c).trigger("focus")
                }
            }
        }
    };
    var s = t.fn.dropdown;
    t.fn.dropdown = function(e) {
        return this.each(function() {
            var i = t(this),
                n = i.data("bs.dropdown");
            n || i.data("bs.dropdown", n = new a(this)), "string" == typeof e && n[e].call(i)
        })
    }, t.fn.dropdown.Constructor = a, t.fn.dropdown.noConflict = function() {
        return t.fn.dropdown = s, this
    }, t(document).on("click.bs.dropdown.data-api", e).on("click.bs.dropdown.data-api", ".dropdown form", function(t) {
        t.stopPropagation()
    }).on("click.bs.dropdown.data-api", o, a.prototype.toggle).on("keydown.bs.dropdown.data-api", o, a.prototype.keydown).on("keydown.bs.dropdown.data-api", '[role="menu"]', a.prototype.keydown).on("keydown.bs.dropdown.data-api", '[role="listbox"]', a.prototype.keydown)
}(jQuery),
function(t) {
    "use strict";

    function e(e, n) {
        return this.each(function() {
            var o = t(this),
                a = o.data("bs.modal"),
                s = t.extend({}, i.DEFAULTS, o.data(), "object" == typeof e && e);
            a || o.data("bs.modal", a = new i(this, s)), "string" == typeof e ? a[e](n) : s.show && a.show(n)
        })
    }
    var i = function(e, i) {
        this.options = i, this.$body = t(document.body), this.$element = t(e), this.$backdrop = this.isShown = null, this.scrollbarWidth = 0, this.options.remote && this.$element.find(".modal-content").load(this.options.remote, t.proxy(function() {
            this.$element.trigger("loaded.bs.modal")
        }, this))
    };
    i.VERSION = "3.3.0", i.TRANSITION_DURATION = 300, i.BACKDROP_TRANSITION_DURATION = 150, i.DEFAULTS = {
        backdrop: !0,
        keyboard: !0,
        show: !0
    }, i.prototype.toggle = function(t) {
        return this.isShown ? this.hide() : this.show(t)
    }, i.prototype.show = function(e) {
        var n = this,
            o = t.Event("show.bs.modal", {
                relatedTarget: e
            });
        this.$element.trigger(o), this.isShown || o.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.$body.addClass("modal-open"), this.setScrollbar(), this.escape(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', t.proxy(this.hide, this)), this.backdrop(function() {
            var o = t.support.transition && n.$element.hasClass("fade");
            n.$element.parent().length || n.$element.appendTo(n.$body), n.$element.show().scrollTop(0), o && n.$element[0].offsetWidth, n.$element.addClass("in").attr("aria-hidden", !1), n.enforceFocus();
            var a = t.Event("shown.bs.modal", {
                relatedTarget: e
            });
            o ? n.$element.find(".modal-dialog").one("bsTransitionEnd", function() {
                n.$element.trigger("focus").trigger(a)
            }).emulateTransitionEnd(i.TRANSITION_DURATION) : n.$element.trigger("focus").trigger(a)
        }))
    }, i.prototype.hide = function(e) {
        e && e.preventDefault(), e = t.Event("hide.bs.modal"), this.$element.trigger(e), this.isShown && !e.isDefaultPrevented() && (this.isShown = !1, this.escape(), t(document).off("focusin.bs.modal"), this.$element.removeClass("in").attr("aria-hidden", !0).off("click.dismiss.bs.modal"), t.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", t.proxy(this.hideModal, this)).emulateTransitionEnd(i.TRANSITION_DURATION) : this.hideModal())
    }, i.prototype.enforceFocus = function() {
        t(document).off("focusin.bs.modal").on("focusin.bs.modal", t.proxy(function(t) {
            this.$element[0] === t.target || this.$element.has(t.target).length || this.$element.trigger("focus")
        }, this))
    }, i.prototype.escape = function() {
        this.isShown && this.options.keyboard ? this.$element.on("keydown.dismiss.bs.modal", t.proxy(function(t) {
            27 == t.which && this.hide()
        }, this)) : this.isShown || this.$element.off("keydown.dismiss.bs.modal")
    }, i.prototype.hideModal = function() {
        var t = this;
        this.$element.hide(), this.backdrop(function() {
            t.$body.removeClass("modal-open"), t.resetScrollbar(), t.$element.trigger("hidden.bs.modal")
        })
    }, i.prototype.removeBackdrop = function() {
        this.$backdrop && this.$backdrop.remove(), this.$backdrop = null
    }, i.prototype.backdrop = function(e) {
        var n = this,
            o = this.$element.hasClass("fade") ? "fade" : "";
        if (this.isShown && this.options.backdrop) {
            var a = t.support.transition && o;
            if (this.$backdrop = t('<div class="modal-backdrop ' + o + '" />').prependTo(this.$element).on("click.dismiss.bs.modal", t.proxy(function(t) {
                    t.target === t.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus.call(this.$element[0]) : this.hide.call(this))
                }, this)), a && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !e) return;
            a ? this.$backdrop.one("bsTransitionEnd", e).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION) : e()
        } else if (!this.isShown && this.$backdrop) {
            this.$backdrop.removeClass("in");
            var s = function() {
                n.removeBackdrop(), e && e()
            };
            t.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", s).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION) : s()
        } else e && e()
    }, i.prototype.checkScrollbar = function() {
        this.scrollbarWidth = this.measureScrollbar()
    }, i.prototype.setScrollbar = function() {
        var t = parseInt(this.$body.css("padding-right") || 0, 10);
        this.scrollbarWidth && this.$body.css("padding-right", t + this.scrollbarWidth)
    }, i.prototype.resetScrollbar = function() {
        this.$body.css("padding-right", "")
    }, i.prototype.measureScrollbar = function() {
        if (document.body.clientWidth >= window.innerWidth) return 0;
        var t = document.createElement("div");
        t.className = "modal-scrollbar-measure", this.$body.append(t);
        var e = t.offsetWidth - t.clientWidth;
        return this.$body[0].removeChild(t), e
    };
    var n = t.fn.modal;
    t.fn.modal = e, t.fn.modal.Constructor = i, t.fn.modal.noConflict = function() {
        return t.fn.modal = n, this
    }, t(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function(i) {
        var n = t(this),
            o = n.attr("href"),
            a = t(n.attr("data-target") || o && o.replace(/.*(?=#[^\s]+$)/, "")),
            s = a.data("bs.modal") ? "toggle" : t.extend({
                remote: !/#/.test(o) && o
            }, a.data(), n.data());
        n.is("a") && i.preventDefault(), a.one("show.bs.modal", function(t) {
            t.isDefaultPrevented() || a.one("hidden.bs.modal", function() {
                n.is(":visible") && n.trigger("focus")
            })
        }), e.call(a, s, this)
    })
}(jQuery),
function(t) {
    "use strict";
    var e = function(t, e) {
        this.type = this.options = this.enabled = this.timeout = this.hoverState = this.$element = null, this.init("tooltip", t, e)
    };
    e.VERSION = "3.3.0", e.TRANSITION_DURATION = 150, e.DEFAULTS = {
        animation: !0,
        placement: "top",
        selector: !1,
        template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
        trigger: "hover focus",
        title: "",
        delay: 0,
        html: !1,
        container: !1,
        viewport: {
            selector: "body",
            padding: 0
        }
    }, e.prototype.init = function(e, i, n) {
        this.enabled = !0, this.type = e, this.$element = t(i), this.options = this.getOptions(n), this.$viewport = this.options.viewport && t(this.options.viewport.selector || this.options.viewport);
        for (var o = this.options.trigger.split(" "), a = o.length; a--;) {
            var s = o[a];
            if ("click" == s) this.$element.on("click." + this.type, this.options.selector, t.proxy(this.toggle, this));
            else if ("manual" != s) {
                var r = "hover" == s ? "mouseenter" : "focusin",
                    l = "hover" == s ? "mouseleave" : "focusout";
                this.$element.on(r + "." + this.type, this.options.selector, t.proxy(this.enter, this)), this.$element.on(l + "." + this.type, this.options.selector, t.proxy(this.leave, this))
            }
        }
        this.options.selector ? this._options = t.extend({}, this.options, {
            trigger: "manual",
            selector: ""
        }) : this.fixTitle()
    }, e.prototype.getDefaults = function() {
        return e.DEFAULTS
    }, e.prototype.getOptions = function(e) {
        return (e = t.extend({}, this.getDefaults(), this.$element.data(), e)).delay && "number" == typeof e.delay && (e.delay = {
            show: e.delay,
            hide: e.delay
        }), e
    }, e.prototype.getDelegateOptions = function() {
        var e = {},
            i = this.getDefaults();
        return this._options && t.each(this._options, function(t, n) {
            i[t] != n && (e[t] = n)
        }), e
    }, e.prototype.enter = function(e) {
        var i = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);
        return i && i.$tip && i.$tip.is(":visible") ? void(i.hoverState = "in") : (i || (i = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, i)), clearTimeout(i.timeout), i.hoverState = "in", i.options.delay && i.options.delay.show ? void(i.timeout = setTimeout(function() {
            "in" == i.hoverState && i.show()
        }, i.options.delay.show)) : i.show())
    }, e.prototype.leave = function(e) {
        var i = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);
        return i || (i = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, i)), clearTimeout(i.timeout), i.hoverState = "out", i.options.delay && i.options.delay.hide ? void(i.timeout = setTimeout(function() {
            "out" == i.hoverState && i.hide()
        }, i.options.delay.hide)) : i.hide()
    }, e.prototype.show = function() {
        var i = t.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            this.$element.trigger(i);
            var n = t.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
            if (i.isDefaultPrevented() || !n) return;
            var o = this,
                a = this.tip(),
                s = this.getUID(this.type);
            this.setContent(), a.attr("id", s), this.$element.attr("aria-describedby", s), this.options.animation && a.addClass("fade");
            var r = "function" == typeof this.options.placement ? this.options.placement.call(this, a[0], this.$element[0]) : this.options.placement,
                l = /\s?auto?\s?/i,
                c = l.test(r);
            c && (r = r.replace(l, "") || "top"), a.detach().css({
                top: 0,
                left: 0,
                display: "block"
            }).addClass(r).data("bs." + this.type, this), this.options.container ? a.appendTo(this.options.container) : a.insertAfter(this.$element);
            var d = this.getPosition(),
                u = a[0].offsetWidth,
                h = a[0].offsetHeight;
            if (c) {
                var p = r,
                    f = this.options.container ? t(this.options.container) : this.$element.parent(),
                    m = this.getPosition(f);
                r = "bottom" == r && d.bottom + h > m.bottom ? "top" : "top" == r && d.top - h < m.top ? "bottom" : "right" == r && d.right + u > m.width ? "left" : "left" == r && d.left - u < m.left ? "right" : r, a.removeClass(p).addClass(r)
            }
            var v = this.getCalculatedOffset(r, d, u, h);
            this.applyPlacement(v, r);
            var g = function() {
                var t = o.hoverState;
                o.$element.trigger("shown.bs." + o.type), o.hoverState = null, "out" == t && o.leave(o)
            };
            t.support.transition && this.$tip.hasClass("fade") ? a.one("bsTransitionEnd", g).emulateTransitionEnd(e.TRANSITION_DURATION) : g()
        }
    }, e.prototype.applyPlacement = function(e, i) {
        var n = this.tip(),
            o = n[0].offsetWidth,
            a = n[0].offsetHeight,
            s = parseInt(n.css("margin-top"), 10),
            r = parseInt(n.css("margin-left"), 10);
        isNaN(s) && (s = 0), isNaN(r) && (r = 0), e.top = e.top + s, e.left = e.left + r, t.offset.setOffset(n[0], t.extend({
            using: function(t) {
                n.css({
                    top: Math.round(t.top),
                    left: Math.round(t.left)
                })
            }
        }, e), 0), n.addClass("in");
        var l = n[0].offsetWidth,
            c = n[0].offsetHeight;
        "top" == i && c != a && (e.top = e.top + a - c);
        var d = this.getViewportAdjustedDelta(i, e, l, c);
        d.left ? e.left += d.left : e.top += d.top;
        var u = /top|bottom/.test(i),
            h = u ? 2 * d.left - o + l : 2 * d.top - a + c,
            p = u ? "offsetWidth" : "offsetHeight";
        n.offset(e), this.replaceArrow(h, n[0][p], u)
    }, e.prototype.replaceArrow = function(t, e, i) {
        this.arrow().css(i ? "left" : "top", 50 * (1 - t / e) + "%").css(i ? "top" : "left", "")
    }, e.prototype.setContent = function() {
        var t = this.tip(),
            e = this.getTitle();
        t.find(".tooltip-inner")[this.options.html ? "html" : "text"](e), t.removeClass("fade in top bottom left right")
    }, e.prototype.hide = function(i) {
        function n() {
            "in" != o.hoverState && a.detach(), o.$element.removeAttr("aria-describedby").trigger("hidden.bs." + o.type), i && i()
        }
        var o = this,
            a = this.tip(),
            s = t.Event("hide.bs." + this.type);
        return this.$element.trigger(s), s.isDefaultPrevented() ? void 0 : (a.removeClass("in"), t.support.transition && this.$tip.hasClass("fade") ? a.one("bsTransitionEnd", n).emulateTransitionEnd(e.TRANSITION_DURATION) : n(), this.hoverState = null, this)
    }, e.prototype.fixTitle = function() {
        var t = this.$element;
        (t.attr("title") || "string" != typeof t.attr("data-original-title")) && t.attr("data-original-title", t.attr("title") || "").attr("title", "")
    }, e.prototype.hasContent = function() {
        return this.getTitle()
    }, e.prototype.getPosition = function(e) {
        var i = (e = e || this.$element)[0],
            n = "BODY" == i.tagName,
            o = i.getBoundingClientRect();
        null == o.width && (o = t.extend({}, o, {
            width: o.right - o.left,
            height: o.bottom - o.top
        }));
        var a = n ? {
                top: 0,
                left: 0
            } : e.offset(),
            s = {
                scroll: n ? document.documentElement.scrollTop || document.body.scrollTop : e.scrollTop()
            },
            r = n ? {
                width: t(window).width(),
                height: t(window).height()
            } : null;
        return t.extend({}, o, s, r, a)
    }, e.prototype.getCalculatedOffset = function(t, e, i, n) {
        return "bottom" == t ? {
            top: e.top + e.height,
            left: e.left + e.width / 2 - i / 2
        } : "top" == t ? {
            top: e.top - n,
            left: e.left + e.width / 2 - i / 2
        } : "left" == t ? {
            top: e.top + e.height / 2 - n / 2,
            left: e.left - i
        } : {
            top: e.top + e.height / 2 - n / 2,
            left: e.left + e.width
        }
    }, e.prototype.getViewportAdjustedDelta = function(t, e, i, n) {
        var o = {
            top: 0,
            left: 0
        };
        if (!this.$viewport) return o;
        var a = this.options.viewport && this.options.viewport.padding || 0,
            s = this.getPosition(this.$viewport);
        if (/right|left/.test(t)) {
            var r = e.top - a - s.scroll,
                l = e.top + a - s.scroll + n;
            r < s.top ? o.top = s.top - r : l > s.top + s.height && (o.top = s.top + s.height - l)
        } else {
            var c = e.left - a,
                d = e.left + a + i;
            c < s.left ? o.left = s.left - c : d > s.width && (o.left = s.left + s.width - d)
        }
        return o
    }, e.prototype.getTitle = function() {
        var t = this.$element,
            e = this.options;
        return t.attr("data-original-title") || ("function" == typeof e.title ? e.title.call(t[0]) : e.title)
    }, e.prototype.getUID = function(t) {
        do {
            t += ~~(1e6 * Math.random())
        } while (document.getElementById(t));
        return t
    }, e.prototype.tip = function() {
        return this.$tip = this.$tip || t(this.options.template)
    }, e.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
    }, e.prototype.enable = function() {
        this.enabled = !0
    }, e.prototype.disable = function() {
        this.enabled = !1
    }, e.prototype.toggleEnabled = function() {
        this.enabled = !this.enabled
    }, e.prototype.toggle = function(e) {
        var i = this;
        e && ((i = t(e.currentTarget).data("bs." + this.type)) || (i = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, i))), i.tip().hasClass("in") ? i.leave(i) : i.enter(i)
    }, e.prototype.destroy = function() {
        var t = this;
        clearTimeout(this.timeout), this.hide(function() {
            t.$element.off("." + t.type).removeData("bs." + t.type)
        })
    };
    var i = t.fn.tooltip;
    t.fn.tooltip = function(i) {
        return this.each(function() {
            var n = t(this),
                o = n.data("bs.tooltip"),
                a = "object" == typeof i && i,
                s = a && a.selector;
            (o || "destroy" != i) && (s ? (o || n.data("bs.tooltip", o = {}), o[s] || (o[s] = new e(this, a))) : o || n.data("bs.tooltip", o = new e(this, a)), "string" == typeof i && o[i]())
        })
    }, t.fn.tooltip.Constructor = e, t.fn.tooltip.noConflict = function() {
        return t.fn.tooltip = i, this
    }
}(jQuery),
function(t) {
    "use strict";
    var e = function(t, e) {
        this.init("popover", t, e)
    };
    if (!t.fn.tooltip) throw new Error("Popover requires tooltip.js");
    e.VERSION = "3.3.0", e.DEFAULTS = t.extend({}, t.fn.tooltip.Constructor.DEFAULTS, {
        placement: "right",
        trigger: "click",
        content: "",
        template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    }), e.prototype = t.extend({}, t.fn.tooltip.Constructor.prototype), e.prototype.constructor = e, e.prototype.getDefaults = function() {
        return e.DEFAULTS
    }, e.prototype.setContent = function() {
        var t = this.tip(),
            e = this.getTitle(),
            i = this.getContent();
        t.find(".popover-title")[this.options.html ? "html" : "text"](e), t.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof i ? "html" : "append" : "text"](i), t.removeClass("fade top bottom left right in"), t.find(".popover-title").html() || t.find(".popover-title").hide()
    }, e.prototype.hasContent = function() {
        return this.getTitle() || this.getContent()
    }, e.prototype.getContent = function() {
        var t = this.$element,
            e = this.options;
        return t.attr("data-content") || ("function" == typeof e.content ? e.content.call(t[0]) : e.content)
    }, e.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".arrow")
    }, e.prototype.tip = function() {
        return this.$tip || (this.$tip = t(this.options.template)), this.$tip
    };
    var i = t.fn.popover;
    t.fn.popover = function(i) {
        return this.each(function() {
            var n = t(this),
                o = n.data("bs.popover"),
                a = "object" == typeof i && i,
                s = a && a.selector;
            (o || "destroy" != i) && (s ? (o || n.data("bs.popover", o = {}), o[s] || (o[s] = new e(this, a))) : o || n.data("bs.popover", o = new e(this, a)), "string" == typeof i && o[i]())
        })
    }, t.fn.popover.Constructor = e, t.fn.popover.noConflict = function() {
        return t.fn.popover = i, this
    }
}(jQuery),
function(t) {
    "use strict";

    function e(e) {
        return this.each(function() {
            var n = t(this),
                o = n.data("bs.tab");
            o || n.data("bs.tab", o = new i(this)), "string" == typeof e && o[e]()
        })
    }
    var i = function(e) {
        this.element = t(e)
    };
    i.VERSION = "3.3.0", i.TRANSITION_DURATION = 150, i.prototype.show = function() {
        var e = this.element,
            i = e.closest("ul:not(.dropdown-menu)"),
            n = e.data("target");
        if (n || (n = e.attr("href"), n = n && n.replace(/.*(?=#[^\s]*$)/, "")), !e.parent("li").hasClass("active")) {
            var o = i.find(".active:last a"),
                a = t.Event("hide.bs.tab", {
                    relatedTarget: e[0]
                }),
                s = t.Event("show.bs.tab", {
                    relatedTarget: o[0]
                });
            if (o.trigger(a), e.trigger(s), !s.isDefaultPrevented() && !a.isDefaultPrevented()) {
                var r = t(n);
                this.activate(e.closest("li"), i), this.activate(r, r.parent(), function() {
                    o.trigger({
                        type: "hidden.bs.tab",
                        relatedTarget: e[0]
                    }), e.trigger({
                        type: "shown.bs.tab",
                        relatedTarget: o[0]
                    })
                })
            }
        }
    }, i.prototype.activate = function(e, n, o) {
        function a() {
            s.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !1), e.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded", !0), r ? (e[0].offsetWidth, e.addClass("in")) : e.removeClass("fade"), e.parent(".dropdown-menu") && e.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !0), o && o()
        }
        var s = n.find("> .active"),
            r = o && t.support.transition && (s.length && s.hasClass("fade") || !!n.find("> .fade").length);
        s.length && r ? s.one("bsTransitionEnd", a).emulateTransitionEnd(i.TRANSITION_DURATION) : a(), s.removeClass("in")
    };
    var n = t.fn.tab;
    t.fn.tab = e, t.fn.tab.Constructor = i, t.fn.tab.noConflict = function() {
        return t.fn.tab = n, this
    };
    var o = function(i) {
        i.preventDefault(), e.call(t(this), "show")
    };
    t(document).on("click.bs.tab.data-api", '[data-toggle="tab"]', o).on("click.bs.tab.data-api", '[data-toggle="pill"]', o)
}(jQuery),
function(t) {
    "use strict";

    function e(e) {
        var i, n = e.attr("data-target") || (i = e.attr("href")) && i.replace(/.*(?=#[^\s]+$)/, "");
        return t(n)
    }

    function i(e) {
        return this.each(function() {
            var i = t(this),
                o = i.data("bs.collapse"),
                a = t.extend({}, n.DEFAULTS, i.data(), "object" == typeof e && e);
            !o && a.toggle && "show" == e && (a.toggle = !1), o || i.data("bs.collapse", o = new n(this, a)), "string" == typeof e && o[e]()
        })
    }
    var n = function(e, i) {
        this.$element = t(e), this.options = t.extend({}, n.DEFAULTS, i), this.$trigger = t(this.options.trigger).filter('[href="#' + e.id + '"], [data-target="#' + e.id + '"]'), this.transitioning = null, this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger), this.options.toggle && this.toggle()
    };
    n.VERSION = "3.3.0", n.TRANSITION_DURATION = 350, n.DEFAULTS = {
        toggle: !0,
        trigger: '[data-toggle="collapse"]'
    }, n.prototype.dimension = function() {
        return this.$element.hasClass("width") ? "width" : "height"
    }, n.prototype.show = function() {
        if (!this.transitioning && !this.$element.hasClass("in")) {
            var e, o = this.$parent && this.$parent.find("> .panel").children(".in, .collapsing");
            if (!(o && o.length && (e = o.data("bs.collapse")) && e.transitioning)) {
                var a = t.Event("show.bs.collapse");
                if (this.$element.trigger(a), !a.isDefaultPrevented()) {
                    o && o.length && (i.call(o, "hide"), e || o.data("bs.collapse", null));
                    var s = this.dimension();
                    this.$element.removeClass("collapse").addClass("collapsing")[s](0).attr("aria-expanded", !0), this.$trigger.removeClass("collapsed").attr("aria-expanded", !0), this.transitioning = 1;
                    var r = function() {
                        this.$element.removeClass("collapsing").addClass("collapse in")[s](""), this.transitioning = 0, this.$element.trigger("shown.bs.collapse")
                    };
                    if (!t.support.transition) return r.call(this);
                    var l = t.camelCase(["scroll", s].join("-"));
                    this.$element.one("bsTransitionEnd", t.proxy(r, this)).emulateTransitionEnd(n.TRANSITION_DURATION)[s](this.$element[0][l])
                }
            }
        }
    }, n.prototype.hide = function() {
        if (!this.transitioning && this.$element.hasClass("in")) {
            var e = t.Event("hide.bs.collapse");
            if (this.$element.trigger(e), !e.isDefaultPrevented()) {
                var i = this.dimension();
                this.$element[i](this.$element[i]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1), this.$trigger.addClass("collapsed").attr("aria-expanded", !1), this.transitioning = 1;
                var o = function() {
                    this.transitioning = 0, this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
                };
                return t.support.transition ? void this.$element[i](0).one("bsTransitionEnd", t.proxy(o, this)).emulateTransitionEnd(n.TRANSITION_DURATION) : o.call(this)
            }
        }
    }, n.prototype.toggle = function() {
        this[this.$element.hasClass("in") ? "hide" : "show"]()
    }, n.prototype.getParent = function() {
        return t(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(t.proxy(function(i, n) {
            var o = t(n);
            this.addAriaAndCollapsedClass(e(o), o)
        }, this)).end()
    }, n.prototype.addAriaAndCollapsedClass = function(t, e) {
        var i = t.hasClass("in");
        t.attr("aria-expanded", i), e.toggleClass("collapsed", !i).attr("aria-expanded", i)
    };
    var o = t.fn.collapse;
    t.fn.collapse = i, t.fn.collapse.Constructor = n, t.fn.collapse.noConflict = function() {
        return t.fn.collapse = o, this
    }, t(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function(n) {
        var o = t(this);
        o.attr("data-target") || n.preventDefault();
        var a = e(o),
            s = a.data("bs.collapse") ? "toggle" : t.extend({}, o.data(), {
                trigger: this
            });
        i.call(a, s)
    })
}(jQuery),
function(t) {
    "use strict";
    t.fn.emulateTransitionEnd = function(e) {
        var i = !1,
            n = this;
        t(this).one("bsTransitionEnd", function() {
            i = !0
        });
        return setTimeout(function() {
            i || t(n).trigger(t.support.transition.end)
        }, e), this
    }, t(function() {
        t.support.transition = function() {
            var t = document.createElement("bootstrap"),
                e = {
                    WebkitTransition: "webkitTransitionEnd",
                    MozTransition: "transitionend",
                    OTransition: "oTransitionEnd otransitionend",
                    transition: "transitionend"
                };
            for (var i in e)
                if (void 0 !== t.style[i]) return {
                    end: e[i]
                };
            return !1
        }(), t.support.transition && (t.event.special.bsTransitionEnd = {
            bindType: t.support.transition.end,
            delegateType: t.support.transition.end,
            handle: function(e) {
                return t(e.target).is(this) ? e.handleObj.handler.apply(this, arguments) : void 0
            }
        })
    })
}(jQuery),
function(t) {
    t.flexslider = function(e, i) {
        var n = t(e);
        n.vars = t.extend({}, t.flexslider.defaults, i);
        var o, a = n.vars.namespace,
            s = window.navigator && window.navigator.msPointerEnabled && window.MSGesture,
            r = ("ontouchstart" in window || s || window.DocumentTouch && document instanceof DocumentTouch) && n.vars.touch,
            l = "click touchend MSPointerUp",
            c = "",
            d = "vertical" === n.vars.direction,
            u = n.vars.reverse,
            h = n.vars.itemWidth > 0,
            p = "fade" === n.vars.animation,
            f = "" !== n.vars.asNavFor,
            m = {};
        t.data(e, "flexslider", n), m = {
            init: function() {
                n.animating = !1, n.currentSlide = parseInt(n.vars.startAt ? n.vars.startAt : 0, 10), isNaN(n.currentSlide) && (n.currentSlide = 0), n.animatingTo = n.currentSlide, n.atEnd = 0 === n.currentSlide || n.currentSlide === n.last, n.containerSelector = n.vars.selector.substr(0, n.vars.selector.search(" ")), n.slides = t(n.vars.selector, n), n.container = t(n.containerSelector, n), n.count = n.slides.length, n.syncExists = t(n.vars.sync).length > 0, "slide" === n.vars.animation && (n.vars.animation = "swing"), n.prop = d ? "top" : "marginLeft", n.args = {}, n.manualPause = !1, n.stopped = !1, n.started = !1, n.startTimeout = null, n.transitions = !n.vars.video && !p && n.vars.useCSS && function() {
                    var t = document.createElement("div"),
                        e = ["perspectiveProperty", "WebkitPerspective", "MozPerspective", "OPerspective", "msPerspective"];
                    for (var i in e)
                        if (void 0 !== t.style[e[i]]) return n.pfx = e[i].replace("Perspective", "").toLowerCase(), n.prop = "-" + n.pfx + "-transform", !0;
                    return !1
                }(), n.ensureAnimationEnd = "", "" !== n.vars.controlsContainer && (n.controlsContainer = t(n.vars.controlsContainer).length > 0 && t(n.vars.controlsContainer)), "" !== n.vars.manualControls && (n.manualControls = t(n.vars.manualControls).length > 0 && t(n.vars.manualControls)), n.vars.randomize && (n.slides.sort(function() {
                    return Math.round(Math.random()) - .5
                }), n.container.empty().append(n.slides)), n.doMath(), n.setup("init"), n.vars.controlNav && m.controlNav.setup(), n.vars.directionNav && m.directionNav.setup(), n.vars.keyboard && (1 === t(n.containerSelector).length || n.vars.multipleKeyboard) && t(document).bind("keyup", function(t) {
                    var e = t.keyCode;
                    if (!n.animating && (39 === e || 37 === e)) {
                        var i = 39 === e ? n.getTarget("next") : 37 === e && n.getTarget("prev");
                        n.flexAnimate(i, n.vars.pauseOnAction)
                    }
                }), n.vars.mousewheel && n.bind("mousewheel", function(t, e) {
                    t.preventDefault();
                    var i = 0 > e ? n.getTarget("next") : n.getTarget("prev");
                    n.flexAnimate(i, n.vars.pauseOnAction)
                }), n.vars.pausePlay && m.pausePlay.setup(), n.vars.slideshow && n.vars.pauseInvisible && m.pauseInvisible.init(), n.vars.slideshow && (n.vars.pauseOnHover && n.hover(function() {
                    n.manualPlay || n.manualPause || n.pause()
                }, function() {
                    n.manualPause || n.manualPlay || n.stopped || n.play()
                }), n.vars.pauseInvisible && m.pauseInvisible.isHidden() || (n.vars.initDelay > 0 ? n.startTimeout = setTimeout(n.play, n.vars.initDelay) : n.play())), f && m.asNav.setup(), r && n.vars.touch && m.touch(), (!p || p && n.vars.smoothHeight) && t(window).bind("resize orientationchange focus", m.resize), n.find("img").attr("draggable", "false"), setTimeout(function() {
                    n.vars.start(n)
                }, 200)
            },
            asNav: {
                setup: function() {
                    n.asNav = !0, n.animatingTo = Math.floor(n.currentSlide / n.move), n.currentItem = n.currentSlide, n.slides.removeClass(a + "active-slide").eq(n.currentItem).addClass(a + "active-slide"), s ? (e._slider = n, n.slides.each(function() {
                        var e = this;
                        e._gesture = new MSGesture, e._gesture.target = e, e.addEventListener("MSPointerDown", function(t) {
                            t.preventDefault(), t.currentTarget._gesture && t.currentTarget._gesture.addPointer(t.pointerId)
                        }, !1), e.addEventListener("MSGestureTap", function(e) {
                            e.preventDefault();
                            var i = t(this),
                                o = i.index();
                            t(n.vars.asNavFor).data("flexslider").animating || i.hasClass("active") || (n.direction = n.currentItem < o ? "next" : "prev", n.flexAnimate(o, n.vars.pauseOnAction, !1, !0, !0))
                        })
                    })) : n.slides.on(l, function(e) {
                        e.preventDefault();
                        var i = t(this),
                            o = i.index();
                        0 >= i.offset().left - t(n).scrollLeft() && i.hasClass(a + "active-slide") ? n.flexAnimate(n.getTarget("prev"), !0) : t(n.vars.asNavFor).data("flexslider").animating || i.hasClass(a + "active-slide") || (n.direction = n.currentItem < o ? "next" : "prev", n.flexAnimate(o, n.vars.pauseOnAction, !1, !0, !0))
                    })
                }
            },
            controlNav: {
                setup: function() {
                    n.manualControls ? m.controlNav.setupManual() : m.controlNav.setupPaging()
                },
                setupPaging: function() {
                    var e, i, o = "thumbnails" === n.vars.controlNav ? "control-thumbs" : "control-paging",
                        s = 1;
                    if (n.controlNavScaffold = t('<ol class="' + a + "control-nav " + a + o + '"></ol>'), n.pagingCount > 1)
                        for (var r = 0; r < n.pagingCount; r++) {
                            if (i = n.slides.eq(r), e = "thumbnails" === n.vars.controlNav ? '<img src="' + i.attr("data-thumb") + '"/>' : "<a>" + s + "</a>", "thumbnails" === n.vars.controlNav && !0 === n.vars.thumbCaptions) {
                                var d = i.attr("data-thumbcaption");
                                "" != d && void 0 != d && (e += '<span class="' + a + 'caption">' + d + "</span>")
                            }
                            n.controlNavScaffold.append("<li>" + e + "</li>"), s++
                        }
                    n.controlsContainer ? t(n.controlsContainer).append(n.controlNavScaffold) : n.append(n.controlNavScaffold), m.controlNav.set(), m.controlNav.active(), n.controlNavScaffold.delegate("a, img", l, function(e) {
                        if (e.preventDefault(), "" === c || c === e.type) {
                            var i = t(this),
                                o = n.controlNav.index(i);
                            i.hasClass(a + "active") || (n.direction = o > n.currentSlide ? "next" : "prev", n.flexAnimate(o, n.vars.pauseOnAction))
                        }
                        "" === c && (c = e.type), m.setToClearWatchedEvent()
                    })
                },
                setupManual: function() {
                    n.controlNav = n.manualControls, m.controlNav.active(), n.controlNav.bind(l, function(e) {
                        if (e.preventDefault(), "" === c || c === e.type) {
                            var i = t(this),
                                o = n.controlNav.index(i);
                            i.hasClass(a + "active") || (n.direction = o > n.currentSlide ? "next" : "prev", n.flexAnimate(o, n.vars.pauseOnAction))
                        }
                        "" === c && (c = e.type), m.setToClearWatchedEvent()
                    })
                },
                set: function() {
                    var e = "thumbnails" === n.vars.controlNav ? "img" : "a";
                    n.controlNav = t("." + a + "control-nav li " + e, n.controlsContainer ? n.controlsContainer : n)
                },
                active: function() {
                    n.controlNav.removeClass(a + "active").eq(n.animatingTo).addClass(a + "active")
                },
                update: function(e, i) {
                    n.pagingCount > 1 && "add" === e ? n.controlNavScaffold.append(t("<li><a>" + n.count + "</a></li>")) : 1 === n.pagingCount ? n.controlNavScaffold.find("li").remove() : n.controlNav.eq(i).closest("li").remove(), m.controlNav.set(), n.pagingCount > 1 && n.pagingCount !== n.controlNav.length ? n.update(i, e) : m.controlNav.active()
                }
            },
            directionNav: {
                setup: function() {
                    var e = t('<ul class="' + a + 'direction-nav"><li><a class="' + a + 'prev" href="#">' + n.vars.prevText + '</a></li><li><a class="' + a + 'next" href="#">' + n.vars.nextText + "</a></li></ul>");
                    n.controlsContainer ? (t(n.controlsContainer).append(e), n.directionNav = t("." + a + "direction-nav li a", n.controlsContainer)) : (n.append(e), n.directionNav = t("." + a + "direction-nav li a", n)), m.directionNav.update(), n.directionNav.bind(l, function(e) {
                        e.preventDefault();
                        var i;
                        ("" === c || c === e.type) && (i = t(this).hasClass(a + "next") ? n.getTarget("next") : n.getTarget("prev"), n.flexAnimate(i, n.vars.pauseOnAction)), "" === c && (c = e.type), m.setToClearWatchedEvent()
                    })
                },
                update: function() {
                    var t = a + "disabled";
                    1 === n.pagingCount ? n.directionNav.addClass(t).attr("tabindex", "-1") : n.vars.animationLoop ? n.directionNav.removeClass(t).removeAttr("tabindex") : 0 === n.animatingTo ? n.directionNav.removeClass(t).filter("." + a + "prev").addClass(t).attr("tabindex", "-1") : n.animatingTo === n.last ? n.directionNav.removeClass(t).filter("." + a + "next").addClass(t).attr("tabindex", "-1") : n.directionNav.removeClass(t).removeAttr("tabindex")
                }
            },
            pausePlay: {
                setup: function() {
                    var e = t('<div class="' + a + 'pauseplay"><a></a></div>');
                    n.controlsContainer ? (n.controlsContainer.append(e), n.pausePlay = t("." + a + "pauseplay a", n.controlsContainer)) : (n.append(e), n.pausePlay = t("." + a + "pauseplay a", n)), m.pausePlay.update(n.vars.slideshow ? a + "pause" : a + "play"), n.pausePlay.bind(l, function(e) {
                        e.preventDefault(), ("" === c || c === e.type) && (t(this).hasClass(a + "pause") ? (n.manualPause = !0, n.manualPlay = !1, n.pause()) : (n.manualPause = !1, n.manualPlay = !0, n.play())), "" === c && (c = e.type), m.setToClearWatchedEvent()
                    })
                },
                update: function(t) {
                    "play" === t ? n.pausePlay.removeClass(a + "pause").addClass(a + "play").html(n.vars.playText) : n.pausePlay.removeClass(a + "play").addClass(a + "pause").html(n.vars.pauseText)
                }
            },
            touch: function() {
                function t(t) {
                    v = t.touches[0].pageX, g = t.touches[0].pageY, c = d ? o - g : o - v;
                    (!(m = d ? Math.abs(c) < Math.abs(v - a) : Math.abs(c) < Math.abs(g - a)) || Number(new Date) - f > 500) && (t.preventDefault(), !p && n.transitions && (n.vars.animationLoop || (c /= 0 === n.currentSlide && 0 > c || n.currentSlide === n.last && c > 0 ? Math.abs(c) / l + 2 : 1), n.setProps(r + c, "setTouch")))
                }

                function i() {
                    if (e.removeEventListener("touchmove", t, !1), n.animatingTo === n.currentSlide && !m && null !== c) {
                        var s = u ? -c : c,
                            d = s > 0 ? n.getTarget("next") : n.getTarget("prev");
                        n.canAdvance(d) && (Number(new Date) - f < 550 && Math.abs(s) > 50 || Math.abs(s) > l / 2) ? n.flexAnimate(d, n.vars.pauseOnAction) : p || n.flexAnimate(n.currentSlide, n.vars.pauseOnAction, !0)
                    }
                    e.removeEventListener("touchend", i, !1), o = null, a = null, c = null, r = null
                }
                var o, a, r, l, c, f, m = !1,
                    v = 0,
                    g = 0,
                    b = 0;
                s ? (e.style.msTouchAction = "none", e._gesture = new MSGesture, e._gesture.target = e, e.addEventListener("MSPointerDown", function(t) {
                    t.stopPropagation(), n.animating ? t.preventDefault() : (n.pause(), e._gesture.addPointer(t.pointerId), b = 0, l = d ? n.h : n.w, f = Number(new Date), r = h && u && n.animatingTo === n.last ? 0 : h && u ? n.limit - (n.itemW + n.vars.itemMargin) * n.move * n.animatingTo : h && n.currentSlide === n.last ? n.limit : h ? (n.itemW + n.vars.itemMargin) * n.move * n.currentSlide : u ? (n.last - n.currentSlide + n.cloneOffset) * l : (n.currentSlide + n.cloneOffset) * l)
                }, !1), e._slider = n, e.addEventListener("MSGestureChange", function(t) {
                    t.stopPropagation();
                    var i = t.target._slider;
                    if (i) {
                        var n = -t.translationX,
                            o = -t.translationY;
                        return b += d ? o : n, c = b, m = d ? Math.abs(b) < Math.abs(-n) : Math.abs(b) < Math.abs(-o), t.detail === t.MSGESTURE_FLAG_INERTIA ? void setImmediate(function() {
                            e._gesture.stop()
                        }) : void((!m || Number(new Date) - f > 500) && (t.preventDefault(), !p && i.transitions && (i.vars.animationLoop || (c = b / (0 === i.currentSlide && 0 > b || i.currentSlide === i.last && b > 0 ? Math.abs(b) / l + 2 : 1)), i.setProps(r + c, "setTouch"))))
                    }
                }, !1), e.addEventListener("MSGestureEnd", function(t) {
                    t.stopPropagation();
                    var e = t.target._slider;
                    if (e) {
                        if (e.animatingTo === e.currentSlide && !m && null !== c) {
                            var i = u ? -c : c,
                                n = i > 0 ? e.getTarget("next") : e.getTarget("prev");
                            e.canAdvance(n) && (Number(new Date) - f < 550 && Math.abs(i) > 50 || Math.abs(i) > l / 2) ? e.flexAnimate(n, e.vars.pauseOnAction) : p || e.flexAnimate(e.currentSlide, e.vars.pauseOnAction, !0)
                        }
                        o = null, a = null, c = null, r = null, b = 0
                    }
                }, !1)) : e.addEventListener("touchstart", function(s) {
                    n.animating ? s.preventDefault() : (window.navigator.msPointerEnabled || 1 === s.touches.length) && (n.pause(), l = d ? n.h : n.w, f = Number(new Date), v = s.touches[0].pageX, g = s.touches[0].pageY, r = h && u && n.animatingTo === n.last ? 0 : h && u ? n.limit - (n.itemW + n.vars.itemMargin) * n.move * n.animatingTo : h && n.currentSlide === n.last ? n.limit : h ? (n.itemW + n.vars.itemMargin) * n.move * n.currentSlide : u ? (n.last - n.currentSlide + n.cloneOffset) * l : (n.currentSlide + n.cloneOffset) * l, o = d ? g : v, a = d ? v : g, e.addEventListener("touchmove", t, !1), e.addEventListener("touchend", i, !1))
                }, !1)
            },
            resize: function() {
                !n.animating && n.is(":visible") && (h || n.doMath(), p ? m.smoothHeight() : h ? (n.slides.width(n.computedW), n.update(n.pagingCount), n.setProps()) : d ? (n.viewport.height(n.h), n.setProps(n.h, "setTotal")) : (n.vars.smoothHeight && m.smoothHeight(), n.newSlides.width(n.computedW), n.setProps(n.computedW, "setTotal")))
            },
            smoothHeight: function(t) {
                if (!d || p) {
                    var e = p ? n : n.viewport;
                    t ? e.animate({
                        height: n.slides.eq(n.animatingTo).height()
                    }, t) : e.height(n.slides.eq(n.animatingTo).height())
                }
            },
            sync: function(e) {
                var i = t(n.vars.sync).data("flexslider"),
                    o = n.animatingTo;
                switch (e) {
                    case "animate":
                        i.flexAnimate(o, n.vars.pauseOnAction, !1, !0);
                        break;
                    case "play":
                        i.playing || i.asNav || i.play();
                        break;
                    case "pause":
                        i.pause()
                }
            },
            uniqueID: function(e) {
                return e.find("[id]").each(function() {
                    var e = t(this);
                    e.attr("id", e.attr("id") + "_clone")
                }), e
            },
            pauseInvisible: {
                visProp: null,
                init: function() {
                    var t = ["webkit", "moz", "ms", "o"];
                    if ("hidden" in document) return "hidden";
                    for (var e = 0; e < t.length; e++) t[e] + "Hidden" in document && (m.pauseInvisible.visProp = t[e] + "Hidden");
                    if (m.pauseInvisible.visProp) {
                        var i = m.pauseInvisible.visProp.replace(/[H|h]idden/, "") + "visibilitychange";
                        document.addEventListener(i, function() {
                            m.pauseInvisible.isHidden() ? n.startTimeout ? clearTimeout(n.startTimeout) : n.pause() : n.started ? n.play() : n.vars.initDelay > 0 ? setTimeout(n.play, n.vars.initDelay) : n.play()
                        })
                    }
                },
                isHidden: function() {
                    return document[m.pauseInvisible.visProp] || !1
                }
            },
            setToClearWatchedEvent: function() {
                clearTimeout(o), o = setTimeout(function() {
                    c = ""
                }, 3e3)
            }
        }, n.flexAnimate = function(e, i, o, s, l) {
            if (n.vars.animationLoop || e === n.currentSlide || (n.direction = e > n.currentSlide ? "next" : "prev"), f && 1 === n.pagingCount && (n.direction = n.currentItem < e ? "next" : "prev"), !n.animating && (n.canAdvance(e, l) || o) && n.is(":visible")) {
                if (f && s) {
                    var c = t(n.vars.asNavFor).data("flexslider");
                    if (n.atEnd = 0 === e || e === n.count - 1, c.flexAnimate(e, !0, !1, !0, l), n.direction = n.currentItem < e ? "next" : "prev", c.direction = n.direction, Math.ceil((e + 1) / n.visible) - 1 === n.currentSlide || 0 === e) return n.currentItem = e, n.slides.removeClass(a + "active-slide").eq(e).addClass(a + "active-slide"), !1;
                    n.currentItem = e, n.slides.removeClass(a + "active-slide").eq(e).addClass(a + "active-slide"), e = Math.floor(e / n.visible)
                }
                if (n.animating = !0, n.animatingTo = e, i && n.pause(), n.vars.before(n), n.syncExists && !l && m.sync("animate"), n.vars.controlNav && m.controlNav.active(), h || n.slides.removeClass(a + "active-slide").eq(e).addClass(a + "active-slide"), n.atEnd = 0 === e || e === n.last, n.vars.directionNav && m.directionNav.update(), e === n.last && (n.vars.end(n), n.vars.animationLoop || n.pause()), p) r ? (n.slides.eq(n.currentSlide).css({
                    opacity: 0,
                    zIndex: 1
                }), n.slides.eq(e).css({
                    opacity: 1,
                    zIndex: 2
                }), n.wrapup(w)) : (n.slides.eq(n.currentSlide).css({
                    zIndex: 1
                }).animate({
                    opacity: 0
                }, n.vars.animationSpeed, n.vars.easing), n.slides.eq(e).css({
                    zIndex: 2
                }).animate({
                    opacity: 1
                }, n.vars.animationSpeed, n.vars.easing, n.wrapup));
                else {
                    var v, g, b, w = d ? n.slides.filter(":first").height() : n.computedW;
                    h ? (v = n.vars.itemMargin, b = (n.itemW + v) * n.move * n.animatingTo, g = b > n.limit && 1 !== n.visible ? n.limit : b) : g = 0 === n.currentSlide && e === n.count - 1 && n.vars.animationLoop && "next" !== n.direction ? u ? (n.count + n.cloneOffset) * w : 0 : n.currentSlide === n.last && 0 === e && n.vars.animationLoop && "prev" !== n.direction ? u ? 0 : (n.count + 1) * w : u ? (n.count - 1 - e + n.cloneOffset) * w : (e + n.cloneOffset) * w, n.setProps(g, "", n.vars.animationSpeed), n.transitions ? (n.vars.animationLoop && n.atEnd || (n.animating = !1, n.currentSlide = n.animatingTo), n.container.unbind("webkitTransitionEnd transitionend"), n.container.bind("webkitTransitionEnd transitionend", function() {
                        clearTimeout(n.ensureAnimationEnd), n.wrapup(w)
                    }), clearTimeout(n.ensureAnimationEnd), n.ensureAnimationEnd = setTimeout(function() {
                        n.wrapup(w)
                    }, n.vars.animationSpeed + 100)) : n.container.animate(n.args, n.vars.animationSpeed, n.vars.easing, function() {
                        n.wrapup(w)
                    })
                }
                n.vars.smoothHeight && m.smoothHeight(n.vars.animationSpeed)
            }
        }, n.wrapup = function(t) {
            p || h || (0 === n.currentSlide && n.animatingTo === n.last && n.vars.animationLoop ? n.setProps(t, "jumpEnd") : n.currentSlide === n.last && 0 === n.animatingTo && n.vars.animationLoop && n.setProps(t, "jumpStart")), n.animating = !1, n.currentSlide = n.animatingTo, n.vars.after(n)
        }, n.animateSlides = function() {
            !n.animating && !0 && n.flexAnimate(n.getTarget("next"))
        }, n.pause = function() {
            clearInterval(n.animatedSlides), n.animatedSlides = null, n.playing = !1, n.vars.pausePlay && m.pausePlay.update("play"), n.syncExists && m.sync("pause")
        }, n.play = function() {
            n.playing && clearInterval(n.animatedSlides), n.animatedSlides = n.animatedSlides || setInterval(n.animateSlides, n.vars.slideshowSpeed), n.started = n.playing = !0, n.vars.pausePlay && m.pausePlay.update("pause"), n.syncExists && m.sync("play")
        }, n.stop = function() {
            n.pause(), n.stopped = !0
        }, n.canAdvance = function(t, e) {
            var i = f ? n.pagingCount - 1 : n.last;
            return !!e || (!(!f || n.currentItem !== n.count - 1 || 0 !== t || "prev" !== n.direction) || (!f || 0 !== n.currentItem || t !== n.pagingCount - 1 || "next" === n.direction) && (!(t === n.currentSlide && !f) && (!!n.vars.animationLoop || (!n.atEnd || 0 !== n.currentSlide || t !== i || "next" === n.direction) && (!n.atEnd || n.currentSlide !== i || 0 !== t || "next" !== n.direction))))
        }, n.getTarget = function(t) {
            return n.direction = t, "next" === t ? n.currentSlide === n.last ? 0 : n.currentSlide + 1 : 0 === n.currentSlide ? n.last : n.currentSlide - 1
        }, n.setProps = function(t, e, i) {
            var o = function() {
                var i = t || (n.itemW + n.vars.itemMargin) * n.move * n.animatingTo;
                return -1 * function() {
                    if (h) return "setTouch" === e ? t : u && n.animatingTo === n.last ? 0 : u ? n.limit - (n.itemW + n.vars.itemMargin) * n.move * n.animatingTo : n.animatingTo === n.last ? n.limit : i;
                    switch (e) {
                        case "setTotal":
                            return u ? (n.count - 1 - n.currentSlide + n.cloneOffset) * t : (n.currentSlide + n.cloneOffset) * t;
                        case "setTouch":
                            return t;
                        case "jumpEnd":
                            return u ? t : n.count * t;
                        case "jumpStart":
                            return u ? n.count * t : t;
                        default:
                            return t
                    }
                }() + "px"
            }();
            n.transitions && (o = d ? "translate3d(0," + o + ",0)" : "translate3d(" + o + ",0,0)", i = void 0 !== i ? i / 1e3 + "s" : "0s", n.container.css("-" + n.pfx + "-transition-duration", i), n.container.css("transition-duration", i)), n.args[n.prop] = o, (n.transitions || void 0 === i) && n.container.css(n.args), n.container.css("transform", o)
        }, n.setup = function(e) {
            if (p) n.slides.css({
                width: "100%",
                float: "left",
                marginRight: "-100%",
                position: "relative"
            }), "init" === e && (r ? n.slides.css({
                opacity: 0,
                display: "block",
                webkitTransition: "opacity " + n.vars.animationSpeed / 1e3 + "s ease",
                zIndex: 1
            }).eq(n.currentSlide).css({
                opacity: 1,
                zIndex: 2
            }) : n.slides.css({
                opacity: 0,
                display: "block",
                zIndex: 1
            }).eq(n.currentSlide).css({
                zIndex: 2
            }).animate({
                opacity: 1
            }, n.vars.animationSpeed, n.vars.easing)), n.vars.smoothHeight && m.smoothHeight();
            else {
                var i, o;
                "init" === e && (n.viewport = t('<div class="' + a + 'viewport"></div>').css({
                    overflow: "hidden",
                    position: "relative"
                }).appendTo(n).append(n.container), n.cloneCount = 0, n.cloneOffset = 0, u && (o = t.makeArray(n.slides).reverse(), n.slides = t(o), n.container.empty().append(n.slides))), n.vars.animationLoop && !h && (n.cloneCount = 2, n.cloneOffset = 1, "init" !== e && n.container.find(".clone").remove(), m.uniqueID(n.slides.first().clone().addClass("clone").attr("aria-hidden", "true")).appendTo(n.container), m.uniqueID(n.slides.last().clone().addClass("clone").attr("aria-hidden", "true")).prependTo(n.container)), n.newSlides = t(n.vars.selector, n), i = u ? n.count - 1 - n.currentSlide + n.cloneOffset : n.currentSlide + n.cloneOffset, d && !h ? (n.container.height(200 * (n.count + n.cloneCount) + "%").css("position", "absolute").width("100%"), setTimeout(function() {
                    n.newSlides.css({
                        display: "block"
                    }), n.doMath(), n.viewport.height(n.h), n.setProps(i * n.h, "init")
                }, "init" === e ? 100 : 0)) : (n.container.width(200 * (n.count + n.cloneCount) + "%"), n.setProps(i * n.computedW, "init"), setTimeout(function() {
                    n.doMath(), n.newSlides.css({
                        width: n.computedW,
                        float: "left",
                        display: "block"
                    }), n.vars.smoothHeight && m.smoothHeight()
                }, "init" === e ? 100 : 0))
            }
            h || n.slides.removeClass(a + "active-slide").eq(n.currentSlide).addClass(a + "active-slide"), n.vars.init(n)
        }, n.doMath = function() {
            var t = n.slides.first(),
                e = n.vars.itemMargin,
                i = n.vars.minItems,
                o = n.vars.maxItems;
            n.w = void 0 === n.viewport ? n.width() : n.viewport.width(), n.h = t.height(), n.boxPadding = t.outerWidth() - t.width(), h ? (n.itemT = n.vars.itemWidth + e, n.minW = i ? i * n.itemT : n.w, n.maxW = o ? o * n.itemT - e : n.w, n.itemW = n.minW > n.w ? (n.w - e * (i - 1)) / i : n.maxW < n.w ? (n.w - e * (o - 1)) / o : n.vars.itemWidth > n.w ? n.w : n.vars.itemWidth, n.visible = Math.floor(n.w / n.itemW), n.move = n.vars.move > 0 && n.vars.move < n.visible ? n.vars.move : n.visible, n.pagingCount = Math.ceil((n.count - n.visible) / n.move + 1), n.last = n.pagingCount - 1, n.limit = 1 === n.pagingCount ? 0 : n.vars.itemWidth > n.w ? n.itemW * (n.count - 1) + e * (n.count - 1) : (n.itemW + e) * n.count - n.w - e) : (n.itemW = n.w, n.pagingCount = n.count, n.last = n.count - 1), n.computedW = n.itemW - n.boxPadding
        }, n.update = function(t, e) {
            n.doMath(), h || (t < n.currentSlide ? n.currentSlide += 1 : t <= n.currentSlide && 0 !== t && (n.currentSlide -= 1), n.animatingTo = n.currentSlide), n.vars.controlNav && !n.manualControls && ("add" === e && !h || n.pagingCount > n.controlNav.length ? m.controlNav.update("add") : ("remove" === e && !h || n.pagingCount < n.controlNav.length) && (h && n.currentSlide > n.last && (n.currentSlide -= 1, n.animatingTo -= 1), m.controlNav.update("remove", n.last))), n.vars.directionNav && m.directionNav.update()
        }, n.addSlide = function(e, i) {
            var o = t(e);
            n.count += 1, n.last = n.count - 1, d && u ? void 0 !== i ? n.slides.eq(n.count - i).after(o) : n.container.prepend(o) : void 0 !== i ? n.slides.eq(i).before(o) : n.container.append(o), n.update(i, "add"), n.slides = t(n.vars.selector + ":not(.clone)", n), n.setup(), n.vars.added(n)
        }, n.removeSlide = function(e) {
            var i = isNaN(e) ? n.slides.index(t(e)) : e;
            n.count -= 1, n.last = n.count - 1, isNaN(e) ? t(e, n.slides).remove() : d && u ? n.slides.eq(n.last).remove() : n.slides.eq(e).remove(), n.doMath(), n.update(i, "remove"), n.slides = t(n.vars.selector + ":not(.clone)", n), n.setup(), n.vars.removed(n)
        }, m.init()
    }, t(window).blur(function() {
        focused = !1
    }).focus(function() {
        focused = !0
    }), t.flexslider.defaults = {
        namespace: "flex-",
        selector: ".slides > li",
        animation: "fade",
        easing: "swing",
        direction: "horizontal",
        reverse: !1,
        animationLoop: !0,
        smoothHeight: !1,
        startAt: 0,
        slideshow: !0,
        slideshowSpeed: 7e3,
        animationSpeed: 600,
        initDelay: 0,
        randomize: !1,
        thumbCaptions: !1,
        pauseOnAction: !0,
        pauseOnHover: !1,
        pauseInvisible: !0,
        useCSS: !0,
        touch: !0,
        video: !1,
        controlNav: !0,
        directionNav: !0,
        prevText: "Previous",
        nextText: "Next",
        keyboard: !0,
        multipleKeyboard: !1,
        mousewheel: !1,
        pausePlay: !1,
        pauseText: "Pause",
        playText: "Play",
        controlsContainer: "",
        manualControls: "",
        sync: "",
        asNavFor: "",
        itemWidth: 0,
        itemMargin: 0,
        minItems: 1,
        maxItems: 0,
        move: 0,
        allowOneSlide: !0,
        start: function() {},
        before: function() {},
        after: function() {},
        end: function() {},
        added: function() {},
        removed: function() {},
        init: function() {}
    }, t.fn.flexslider = function(e) {
        if (void 0 === e && (e = {}), "object" == typeof e) return this.each(function() {
            var i = t(this),
                n = e.selector ? e.selector : ".slides > li",
                o = i.find(n);
            1 === o.length && !0 === e.allowOneSlide || 0 === o.length ? (o.fadeIn(400), e.start && e.start(i)) : void 0 === i.data("flexslider") && new t.flexslider(this, e)
        });
        var i = t(this).data("flexslider");
        switch (e) {
            case "play":
                i.play();
                break;
            case "pause":
                i.pause();
                break;
            case "stop":
                i.stop();
                break;
            case "next":
                i.flexAnimate(i.getTarget("next"), !0);
                break;
            case "prev":
            case "previous":
                i.flexAnimate(i.getTarget("prev"), !0);
                break;
            default:
                "number" == typeof e && i.flexAnimate(e, !0)
        }
    }
}(jQuery),
function(t) {
    "use strict";
    t.fn.fitVids = function(e) {
        var i = {
            customSelector: null,
            ignore: null
        };
        if (!document.getElementById("fit-vids-style")) {
            var n = document.head || document.getElementsByTagName("head")[0],
                o = document.createElement("div");
            o.innerHTML = '<p>x</p><style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>', n.appendChild(o.childNodes[1])
        }
        return e && t.extend(i, e), this.each(function() {
            var e = ['iframe[src*="player.vimeo.com"]', 'iframe[src*="youtube.com"]', 'iframe[src*="youtube-nocookie.com"]', 'iframe[src*="kickstarter.com"][src*="video.html"]', "object", "embed"];
            i.customSelector && e.push(i.customSelector);
            var n = ".fitvidsignore";
            i.ignore && (n = n + ", " + i.ignore);
            var o = t(this).find(e.join(","));
            (o = (o = o.not("object object")).not(n)).each(function() {
                var e = t(this);
                if (!(e.parents(n).length > 0 || "embed" === this.tagName.toLowerCase() && e.parent("object").length || e.parent(".fluid-width-video-wrapper").length)) {
                    1 == (e.css("width") && e.css("width").indexOf("%") || e.css("height") && e.css("height").indexOf("%")) && e.removeAttr("width").removeAttr("height"), e.css("height") || e.css("width") || !isNaN(e.attr("height")) && !isNaN(e.attr("width")) || (e.attr("height", 9), e.attr("width", 16));
                    var i = ("object" === this.tagName.toLowerCase() || e.attr("height") && !isNaN(parseInt(e.attr("height"), 10)) ? parseInt(e.attr("height"), 10) : e.height()) / (isNaN(parseInt(e.attr("width"), 10)) ? e.width() : parseInt(e.attr("width"), 10));
                    if (!e.attr("name")) {
                        var o = "fitvid" + t.fn.fitVids._count;
                        e.attr("name", o), t.fn.fitVids._count++
                    }
                    e.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top", 100 * i + "%"), e.removeAttr("height").removeAttr("width")
                }
            })
        })
    }, t.fn.fitVids._count = 0
}(window.jQuery || window.Zepto),
function(t) {
    function e() {
        var e, o = t(),
            c = 0;
        if (t.each(a, function(t, e) {
                var i = e.data.selector,
                    n = e.$element;
                o = o.add(i ? n.find(i) : n)
            }), e = o.length)
            for (i = i || function() {
                    var e, i = {
                        height: r.innerHeight,
                        width: r.innerWidth
                    };
                    return i.height || !(e = s.compatMode) && t.support.boxModel || (e = "CSS1Compat" === e ? l : s.body, i = {
                        height: e.clientHeight,
                        width: e.clientWidth
                    }), i
                }(), n = n || {
                    top: r.pageYOffset || l.scrollTop || s.body.scrollTop,
                    left: r.pageXOffset || l.scrollLeft || s.body.scrollLeft
                }; c < e; c++)
                if (t.contains(l, o[c])) {
                    var d = t(o[c]),
                        u = d.height(),
                        h = d.width(),
                        p = d.offset(),
                        f = d.data("inview");
                    if (!n || !i) break;
                    p.top + u > n.top && p.top < n.top + i.height && p.left + h > n.left && p.left < n.left + i.width ? (h = n.left > p.left ? "right" : n.left + i.width < p.left + h ? "left" : "both", u = n.top > p.top ? "bottom" : n.top + i.height < p.top + u ? "top" : "both", p = h + "-" + u, f && f === p || d.data("inview", p).trigger("inview", [!0, h, u])) : f && d.data("inview", !1).trigger("inview", [!1])
                }
    }
    var i, n, o, a = {},
        s = document,
        r = window,
        l = s.documentElement,
        c = t.expando;
    t.event.special.inview = {
        add: function(i) {
            a[i.guid + "-" + this[c]] = {
                data: i,
                $element: t(this)
            }, o || t.isEmptyObject(a) || (o = setInterval(e, 250))
        },
        remove: function(e) {
            try {
                delete a[e.guid + "-" + this[c]]
            } catch (t) {}
            t.isEmptyObject(a) && (clearInterval(o), o = null)
        }
    }, t(r).bind("scroll resize", function() {
        i = n = null
    }), !l.addEventListener && l.attachEvent && l.attachEvent("onfocusin", function() {
        n = null
    })
}(jQuery),
function(t, e) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.OnScreen = e()
}(this, function() {
    "use strict";

    function t(t) {
        var e = arguments.length <= 1 || void 0 === arguments[1] ? {
            tolerance: 0,
            container: window
        } : arguments[1];
        if (!t) return !1;
        "string" == typeof t && (t = document.querySelector(t)), "string" == typeof e && (e = {
            container: document.querySelector(e)
        });
        var i = void 0,
            n = t.getBoundingClientRect();
        if (e.container === window) i = n.bottom - e.tolerance > 0 && n.right - e.tolerance > 0 && n.left + e.tolerance < (window.innerWidth || document.documentElement.clientWidth) && n.top + e.tolerance < (window.innerHeight || document.documentElement.clientHeight);
        else {
            var o = e.container.getBoundingClientRect();
            i = t.offsetTop + t.clientHeight - e.tolerance > e.container.scrollTop && t.offsetLeft + t.clientWidth - e.tolerance > e.container.scrollLeft && t.offsetLeft + e.tolerance < o.width + e.container.scrollLeft && t.offsetTop + e.tolerance < o.height + e.container.scrollTop
        }
        return i
    }

    function e() {
        var t = this,
            e = arguments.length <= 0 || void 0 === arguments[0] ? {
                tolerance: 0,
                debounce: 100,
                container: window
            } : arguments[0];
        this.options = {}, this.trackedElements = {}, Object.defineProperties(this.options, {
                container: {
                    configurable: !1,
                    enumerable: !1,
                    get: function() {
                        var t = void 0;
                        return "string" == typeof e.container ? t = document.querySelector(e.container) : e.container instanceof HTMLElement && (t = e.container), t || window
                    },
                    set: function(t) {
                        e.container = t
                    }
                },
                debounce: {
                    get: function() {
                        return parseInt(e.debounce, 10) || 100
                    },
                    set: function(t) {
                        e.debounce = t
                    }
                },
                tolerance: {
                    get: function() {
                        return parseInt(e.tolerance, 10) || 0
                    },
                    set: function(t) {
                        e.tolerance = t
                    }
                }
            }), Object.defineProperty(this, "_scroll", {
                enumerable: !1,
                configurable: !1,
                writable: !1,
                value: this._debouncedScroll.call(this)
            }),
            function(t, e) {
                var i = window.MutationObserver || window.WebKitMutationObserver,
                    n = window.addEventListener;
                i ? new i(function(t) {
                    (t[0].addedNodes.length || t[0].removedNodes.length) && e()
                }).observe(t, {
                    childList: !0,
                    subtree: !0
                }) : n && (t.addEventListener("DOMNodeInserted", e, !1), t.addEventListener("DOMNodeRemoved", e, !1))
            }(document.querySelector("body"), function() {
                Object.keys(t.trackedElements).forEach(function(e) {
                    t.on("enter", e), t.on("leave", e)
                })
            }), this.attach()
    }
    return Object.defineProperties(e.prototype, {
        _debouncedScroll: {
            configurable: !1,
            writable: !1,
            enumerable: !1,
            value: function() {
                var e = this,
                    i = void 0;
                return function() {
                    clearTimeout(i), i = setTimeout(function() {
                        ! function() {
                            var e = arguments.length <= 0 || void 0 === arguments[0] ? {} : arguments[0],
                                i = arguments.length <= 1 || void 0 === arguments[1] ? {
                                    tolerance: 0
                                } : arguments[1],
                                n = Object.keys(e);
                            n.length && n.forEach(function(n) {
                                e[n].nodes.forEach(function(o) {
                                    t(o.node, i) ? (o.wasVisible = o.isVisible, o.isVisible = !0) : (o.wasVisible = o.isVisible, o.isVisible = !1), !0 === o.isVisible && !1 === o.wasVisible && "function" == typeof e[n].enter && e[n].enter(o.node), !1 === o.isVisible && !0 === o.wasVisible && "function" == typeof e[n].leave && e[n].leave(o.node)
                                })
                            })
                        }(e.trackedElements, e.options)
                    }, e.options.throttle)
                }
            }
        },
        attach: {
            configurable: !1,
            writable: !1,
            enumerable: !1,
            value: function() {
                var t = this.options.container;
                t instanceof HTMLElement && "static" === window.getComputedStyle(t).position && (t.style.position = "relative");
                t.addEventListener("scroll", this._scroll), window.addEventListener("resize", this._scroll), this._scroll(), this.attached = !0
            }
        },
        destroy: {
            configurable: !1,
            writable: !1,
            enumerable: !1,
            value: function() {
                this.options.container.removeEventListener("scroll", this._scroll), window.removeEventListener("resize", this._scroll), this.attached = !1
            }
        },
        off: {
            configurable: !1,
            writable: !1,
            enumerable: !1,
            value: function(t, e) {
                this.trackedElements.hasOwnProperty(e) && this.trackedElements[e][t] && delete this.trackedElements[e][t], this.trackedElements[e].enter || this.trackedElements[e].leave || delete this.trackedElements[e]
            }
        },
        on: {
            configurable: !1,
            writable: !1,
            enumerable: !1,
            value: function(t, e, i) {
                if (!t) throw new Error("No event given. Choose either enter or leave");
                if (!e) throw new Error("No selector to track");
                if (["enter", "leave"].indexOf(t) < 0) throw new Error(t + " event is not supported");
                this.trackedElements.hasOwnProperty(e) || (this.trackedElements[e] = {}), this.trackedElements[e].nodes = [];
                for (var n = 0; n < document.querySelectorAll(e).length; n++) {
                    var o = {
                        isVisible: !1,
                        wasVisible: !1,
                        node: document.querySelectorAll(e)[n]
                    };
                    this.trackedElements[e].nodes.push(o)
                }
                "function" == typeof i && (this.trackedElements[e][t] = i)
            }
        }
    }), e.check = t, e
}),
function(t, e, i) {
    function n(t, e) {
        var n = i(this);
        if (this.value == n.attr("placeholder") && n.hasClass("placeholder"))
            if (n.data("placeholder-password")) {
                if (n = n.hide().next().show().attr("id", n.removeAttr("id").data("placeholder-id")), !0 === t) return n[0].value = e;
                n.focus()
            } else this.value = "", n.removeClass("placeholder"), this == a() && this.select()
    }

    function o() {
        var t, e = i(this),
            o = this.id;
        if ("" == this.value) {
            if ("password" == this.type) {
                if (!e.data("placeholder-textinput")) {
                    try {
                        t = e.clone().attr({
                            type: "text"
                        })
                    } catch (e) {
                        t = i("<input>").attr(i.extend(function(t) {
                            var e = {},
                                n = /^jQuery\d+$/;
                            return i.each(t.attributes, function(t, i) {
                                i.specified && !n.test(i.name) && (e[i.name] = i.value)
                            }), e
                        }(this), {
                            type: "text"
                        }))
                    }
                    t.removeAttr("name").data({
                        "placeholder-password": e,
                        "placeholder-id": o
                    }).bind("focus.placeholder", n), e.data({
                        "placeholder-textinput": t,
                        "placeholder-id": o
                    }).before(t)
                }
                e = e.removeAttr("id").hide().prev().attr("id", o).show()
            }
            e.addClass("placeholder"), e[0].value = e.attr("placeholder")
        } else e.removeClass("placeholder")
    }

    function a() {
        try {
            return e.activeElement
        } catch (t) {}
    }
    var s, r, l = "[object OperaMini]" == Object.prototype.toString.call(t.operamini),
        c = "placeholder" in e.createElement("input") && !l,
        d = "placeholder" in e.createElement("textarea") && !l,
        u = i.fn,
        h = i.valHooks,
        p = i.propHooks;
    c && d ? (r = u.placeholder = function() {
        return this
    }).input = r.textarea = !0 : ((r = u.placeholder = function() {
        return this.filter((c ? "textarea" : ":input") + "[placeholder]").not(".placeholder").bind({
            "focus.placeholder": n,
            "blur.placeholder": o
        }).data("placeholder-enabled", !0).trigger("blur.placeholder"), this
    }).input = c, r.textarea = d, s = {
        get: function(t) {
            var e = i(t),
                n = e.data("placeholder-password");
            return n ? n[0].value : e.data("placeholder-enabled") && e.hasClass("placeholder") ? "" : t.value
        },
        set: function(t, e) {
            var s = i(t),
                r = s.data("placeholder-password");
            return r ? r[0].value = e : s.data("placeholder-enabled") ? ("" == e ? (t.value = e, t != a() && o.call(t)) : s.hasClass("placeholder") ? n.call(t, !0, e) || (t.value = e) : t.value = e, s) : t.value = e
        }
    }, c || (h.input = s, p.value = s), d || (h.textarea = s, p.value = s), i(function() {
        i(e).delegate("form", "submit.placeholder", function() {
            var t = i(".placeholder", this).each(n);
            setTimeout(function() {
                t.each(o)
            }, 10)
        })
    }), i(t).bind("beforeunload.placeholder", function() {
        i(".placeholder").each(function() {
            this.value = ""
        })
    }))
}(this, document, jQuery), blockFotoramaData = !0, fotoramaVersion = "4.6.2",
    function(t, e, i, n, o) {
        "use strict";

        function a() {}

        function s(t, e, i) {
            return Math.max(isNaN(e) ? -1 / 0 : e, Math.min(isNaN(i) ? 1 / 0 : i, t))
        }

        function r(t) {
            var e = {};
            return Ce ? e.transform = "translate3d(" + t + "px,0,0)" : e.left = t, e
        }

        function l(t) {
            return {
                "transition-duration": t + "ms"
            }
        }

        function c(t, e) {
            return isNaN(t) ? e : t
        }

        function d(t, e) {
            return c(+String(t).replace(e || "px", ""))
        }

        function u(t, e) {
            return c(function(t) {
                return /%$/.test(t) ? d(t, "%") : o
            }(t) / 100 * e, d(t))
        }

        function h(t) {
            return (!isNaN(d(t)) || !isNaN(d(t, "%"))) && t
        }

        function p(t, e, i, n) {
            return (t - (n || 0)) * (e + (i || 0))
        }

        function f(t, e, i, n) {
            var o, a = t.data();
            a && (a.onEndFn = function() {
                o || (o = !0, clearTimeout(a.tT), i())
            }, a.tProp = e, clearTimeout(a.tT), a.tT = setTimeout(function() {
                a.onEndFn()
            }, 1.5 * n), function(t) {
                var e = t.data();
                e.tEnd || (W(t[0], {
                    WebkitTransition: "webkitTransitionEnd",
                    MozTransition: "transitionend",
                    OTransition: "oTransitionEnd otransitionend",
                    msTransition: "MSTransitionEnd",
                    transition: "transitionend"
                }[le.prefixed("transition")], function(t) {
                    e.tProp && t.propertyName.match(e.tProp) && e.onEndFn()
                }), e.tEnd = !0)
            }(t))
        }

        function m(t, e) {
            if (t.length) {
                var i = t.data();
                Ce ? (t.css(l(0)), i.onEndFn = a, clearTimeout(i.tT)) : t.stop();
                var n = v(e, function() {
                    return function(t) {
                        return Ce ? + function(t) {
                            return t.match(/ma/) && t.match(/-?\d+(?!d)/g)[t.match(/3d/) ? 12 : 4]
                        }(t.css("transform")) : +t.css("left").replace("px", "")
                    }(t)
                });
                return t.css(r(n)), n
            }
        }

        function v() {
            for (var t, e = 0, i = arguments.length; i > e && "number" != typeof(t = e ? arguments[e]() : arguments[e]); e++);
            return t
        }

        function g(t, e) {
            return Math.round(t + (e - t) / 1.5)
        }

        function b() {
            return b.p = b.p || ("https:" === i.protocol ? "https://" : "http://")
        }

        function w(t) {
            var i = e.createElement("a");
            return i.href = t, i
        }

        function y(t, e) {
            if ("string" != typeof t) return t;
            var i, n;
            if ((t = w(t)).host.match(/youtube\.com/) && t.search) {
                if (i = t.search.split("v=")[1]) {
                    var o = i.indexOf("&"); - 1 !== o && (i = i.substring(0, o)), n = "youtube"
                }
            } else t.host.match(/youtube\.com|youtu\.be/) ? (i = t.pathname.replace(/^\/(embed\/|v\/)?/, "").replace(/\/.*/, ""), n = "youtube") : t.host.match(/vimeo\.com/) && (n = "vimeo", i = t.pathname.replace(/^\/(video\/)?/, "").replace(/\/.*/, ""));
            return i && n || !e || (i = t.href, n = "custom"), !!i && {
                id: i,
                type: n,
                s: t.search.replace(/^\?/, ""),
                p: b()
            }
        }

        function x(t, e, i) {
            var o, a, s = t.video;
            return "youtube" === s.type ? (a = b() + "img.youtube.com/vi/" + s.id + "/default.jpg", o = a.replace(/\/default.jpg$/, "/hqdefault.jpg"), t.thumbsReady = !0) : "vimeo" === s.type ? n.ajax({
                url: b() + "vimeo.com/api/v2/video/" + s.id + ".json",
                dataType: "jsonp",
                success: function(n) {
                    t.thumbsReady = !0, C(e, {
                        img: n[0].thumbnail_large,
                        thumb: n[0].thumbnail_small
                    }, t.i, i)
                }
            }) : t.thumbsReady = !0, {
                img: o,
                thumb: a
            }
        }

        function C(t, e, i, o) {
            for (var a = 0, s = t.length; s > a; a++) {
                var r = t[a];
                if (r.i === i && r.thumbsReady) {
                    var l = {
                        videoReady: !0
                    };
                    l[Le] = l[je] = l[We] = !1, o.splice(a, 1, n.extend({}, r, l, e));
                    break
                }
            }
        }

        function T(t) {
            function e(t, e, i) {
                var o = i.thumb && i.img !== i.thumb,
                    a = d(i.width || t.attr("width")),
                    s = d(i.height || t.attr("height"));
                n.extend(i, {
                    width: a,
                    height: s,
                    thumbratio: L(i.thumbratio || d(i.thumbwidth || e && e.attr("width") || o || a) / d(i.thumbheight || e && e.attr("height") || o || s))
                })
            }
            var i = [];
            return t.children().each(function() {
                var t = n(this),
                    o = D(n.extend(t.data(), {
                        id: t.attr("id")
                    }));
                if (t.is("a, img")) ! function(t, i, o) {
                    var a = t.children("img").eq(0),
                        s = t.attr("href"),
                        r = t.attr("src"),
                        l = a.attr("src"),
                        c = i.video,
                        d = !!o && y(s, !0 === c);
                    d ? s = !1 : d = c, e(t, a, n.extend(i, {
                        video: d,
                        img: i.img || s || r || l,
                        thumb: i.thumb || l || r || s
                    }))
                }(t, o, !0);
                else {
                    if (t.is(":empty")) return;
                    e(t, null, n.extend(o, {
                        html: this,
                        _html: t.html()
                    }))
                }
                i.push(o)
            }), i
        }

        function S(t) {
            return !n.contains(e.documentElement, t)
        }

        function k(t, e, i, n) {
            return k.i || (k.i = 1, k.ii = [!0]), n = n || k.i, void 0 === k.ii[n] && (k.ii[n] = !0), t() ? e() : k.ii[n] && setTimeout(function() {
                k.ii[n] && k(t, e, i, n)
            }, i || 100), k.i++
        }

        function E(t) {
            i.replace(i.protocol + "//" + i.host + i.pathname.replace(/^\/?/, "/") + i.search + "#" + t)
        }

        function $(t, e, i, n) {
            var o = t.data(),
                a = o.measures;
            if (a && (!o.l || o.l.W !== a.width || o.l.H !== a.height || o.l.r !== a.ratio || o.l.w !== e.w || o.l.h !== e.h || o.l.m !== i || o.l.p !== n)) {
                var r = a.width,
                    l = a.height,
                    c = e.w / e.h,
                    d = a.ratio >= c,
                    p = "scaledown" === i,
                    f = "contain" === i,
                    m = "cover" === i,
                    v = function(t) {
                        return t = (t + "").split(/\s+/), {
                            x: h(t[0]) || qe,
                            y: h(t[1]) || qe
                        }
                    }(n);
                d && (p || f) || !d && m ? (r = s(e.w, 0, p ? r : 1 / 0), l = r / a.ratio) : (d && m || !d && (p || f)) && (l = s(e.h, 0, p ? l : 1 / 0), r = l * a.ratio), t.css({
                    width: Math.ceil(r),
                    height: Math.ceil(l),
                    left: Math.floor(u(v.x, e.w - r)),
                    top: Math.floor(u(v.y, e.h - l))
                }), o.l = {
                    W: a.width,
                    H: a.height,
                    r: a.ratio,
                    w: e.w,
                    h: e.h,
                    m: i,
                    p: n
                }
            }
            return !0
        }

        function M(t, e, i) {
            return e !== i && (e >= t ? "left" : t >= i ? "right" : "left right")
        }

        function N(t, e, i, n) {
            if (!i) return !1;
            if (!isNaN(t)) return t - (n ? 0 : 1);
            for (var o, a = 0, s = e.length; s > a; a++) {
                if (e[a].id === t) {
                    o = a;
                    break
                }
            }
            return o
        }

        function I(t, e, i) {
            i = i || {}, t.each(function() {
                var t, o = n(this),
                    s = o.data();
                s.clickOn || (s.clickOn = !0, n.extend(Q(o, {
                    onStart: function(e) {
                        t = e, (i.onStart || a).call(this, e)
                    },
                    onMove: i.onMove || a,
                    onTouchEnd: i.onTouchEnd || a,
                    onEnd: function(i) {
                        i.moved || e.call(this, t)
                    }
                }), {
                    noMove: !0
                }))
            })
        }

        function _(t, e) {
            return '<div class="' + t + '">' + (e || "") + "</div>"
        }

        function A(t) {
            for (var e = t.length; e;) {
                var i = Math.floor(Math.random() * e--),
                    n = t[e];
                t[e] = t[i], t[i] = n
            }
            return t
        }

        function P(t) {
            return "[object Array]" == Object.prototype.toString.call(t) && n.map(t, function(t) {
                return n.extend({}, t)
            })
        }

        function O(t, e, i) {
            t.scrollLeft(e || 0).scrollTop(i || 0)
        }

        function D(t) {
            if (t) {
                var e = {};
                return n.each(t, function(t, i) {
                    e[t.toLowerCase()] = i
                }), e
            }
        }

        function L(t) {
            if (t) {
                var e = +t;
                return isNaN(e) ? +(e = t.split("/"))[0] / +e[1] || o : e
            }
        }

        function W(t, e, i, n) {
            e && (t.addEventListener ? t.addEventListener(e, i, !!n) : t.attachEvent("on" + e, i))
        }

        function j(t) {
            return {
                tabindex: -1 * t + "",
                disabled: t
            }
        }

        function F(t, e) {
            W(t, "keyup", function(i) {
                (function(t) {
                    return !!t.getAttribute("disabled")
                })(t) || 13 == i.keyCode && e.call(t, i)
            })
        }

        function R(t, e) {
            W(t, "focus", t.onfocusin = function(i) {
                e.call(t, i)
            }, !0)
        }

        function q(t, e) {
            t.preventDefault ? t.preventDefault() : t.returnValue = !1, e && t.stopPropagation && t.stopPropagation()
        }

        function H(t) {
            return t ? ">" : "<"
        }

        function z(t, e) {
            var i = t.data(),
                o = Math.round(e.pos),
                s = function() {
                    i.sliding = !1, (e.onEnd || a)()
                };
            void 0 !== e.overPos && e.overPos !== e.pos && (o = e.overPos, s = function() {
                z(t, n.extend({}, e, {
                    overPos: e.pos,
                    time: Math.max(Ie, e.time / 2)
                }))
            });
            var c = n.extend(r(o), e.width && {
                width: e.width
            });
            i.sliding = !0, Ce ? (t.css(n.extend(l(e.time), c)), e.time > 10 ? f(t, "transform", s, e.time) : s()) : t.stop().animate(c, e.time, Re, s)
        }

        function B(t, e, i, o, s, r) {
            var l = void 0 !== r;
            if (l || (s.push(arguments), Array.prototype.push.call(arguments, s.length), !(s.length > 1))) {
                t = t || n(t), e = e || n(e);
                var c = t[0],
                    d = e[0],
                    u = "crossfade" === o.method,
                    h = function() {
                        if (!h.done) {
                            h.done = !0;
                            var t = (l || s.shift()) && s.shift();
                            t && B.apply(this, t), (o.onEnd || a)(!!t)
                        }
                    },
                    p = o.time / (r || 1);
                i.removeClass(Pt + " " + At), t.stop().addClass(Pt), e.stop().addClass(At), u && d && t.fadeTo(0, 0), t.fadeTo(u ? p : 0, 1, u && h), e.fadeTo(p, 0, h), c && u || d || h()
            }
        }

        function V(t) {
            var e = (t.touches || [])[0] || t;
            t._x = e.pageX, t._y = e.clientY, t._now = n.now()
        }

        function Q(t, i) {
            function o(t) {
                return u = n(t.target), w.checked = f = m = g = !1, c || w.flow || t.touches && t.touches.length > 1 || t.which > 1 || Be && Be.type !== t.type && Qe || (f = i.select && u.is(i.select, b)) ? f : (p = "touchstart" === t.type, m = u.is("a, a *", b), h = w.control, v = w.noMove || w.noSwipe || h ? 16 : w.snap ? 0 : 4, V(t), d = Be = t, Ve = t.type.replace(/down|start/, "move").replace(/Down/, "Move"), (i.onStart || a).call(b, t, {
                    control: h,
                    $target: u
                }), c = w.flow = !0, void((!p || w.go) && q(t)))
            }

            function s(t) {
                if (t.touches && t.touches.length > 1 || $e && !t.isPrimary || Ve !== t.type || !c) return c && r(), void(i.onTouchEnd || a)();
                V(t);
                var e = Math.abs(t._x - d._x),
                    n = Math.abs(t._y - d._y),
                    o = e - n,
                    s = (w.go || w.x || o >= 0) && !w.noSwipe,
                    l = 0 > o;
                p && !w.checked ? (c = s) && q(t) : (q(t), (i.onMove || a).call(b, t, {
                    touch: p
                })), !g && Math.sqrt(Math.pow(e, 2) + Math.pow(n, 2)) > v && (g = !0), w.checked = w.checked || s || l
            }

            function r(t) {
                (i.onTouchEnd || a)();
                var e = c;
                w.control = c = !1, e && (w.flow = !1), !e || m && !w.checked || (t && q(t), Qe = !0, clearTimeout(Ue), Ue = setTimeout(function() {
                    Qe = !1
                }, 1e3), (i.onEnd || a).call(b, {
                    moved: g,
                    $target: u,
                    control: h,
                    touch: p,
                    startEvent: d,
                    aborted: !t || "MSPointerCancel" === t.type
                }))
            }

            function l() {
                w.flow && setTimeout(function() {
                    w.flow = !1
                }, Ne)
            }
            var c, d, u, h, p, f, m, v, g, b = t[0],
                w = {};
            return $e ? (W(b, "MSPointerDown", o), W(e, "MSPointerMove", s), W(e, "MSPointerCancel", r), W(e, "MSPointerUp", r)) : (W(b, "touchstart", o), W(b, "touchmove", s), W(b, "touchend", r), W(e, "touchstart", function() {
                w.flow || setTimeout(function() {
                    w.flow = !0
                }, 10)
            }), W(e, "touchend", l), W(e, "touchcancel", l), be.on("scroll", l), t.on("mousedown", o), we.on("mousemove", s).on("mouseup", r)), t.on("click", "a", function(t) {
                w.checked && q(t)
            }), w
        }

        function U(t, e) {
            function i(i, n) {
                T = !0, o = l = i._x, p = i._now, h = [
                    [p, o]
                ], c = d = E.noMove || n ? 0 : m(t, (e.getPos || a)()), (e.onStart || a).call(S, i)
            }
            var o, l, c, d, u, h, p, f, v, b, w, y, x, C, T, S = t[0],
                k = t.data(),
                E = {};
            return E = n.extend(Q(e.$wrap, n.extend({}, e, {
                onStart: function(t, e) {
                    v = E.min, b = E.max, w = E.snap, y = t.altKey, T = C = !1, (x = e.control) || k.sliding || i(t)
                },
                onMove: function(n, s) {
                    E.noSwipe || (T || i(n), l = n._x, h.push([n._now, l]), d = c - (o - l), u = M(d, v, b), v >= d ? d = g(d, v) : d >= b && (d = g(d, b)), E.noMove || (t.css(r(d)), C || (C = !0, s.touch || $e || t.addClass(Ut)), (e.onMove || a).call(S, n, {
                        pos: d,
                        edge: u
                    })))
                },
                onEnd: function(o) {
                    if (!E.noSwipe || !o.moved) {
                        T || i(o.startEvent, !0), o.touch || $e || t.removeClass(Ut);
                        for (var r, u, p, m, g, x, C, k, $, M = (f = n.now()) - Ne, N = null, I = Ie, _ = e.friction, A = h.length - 1; A >= 0; A--) {
                            if (r = h[A][0], u = Math.abs(r - M), null === N || p > u) N = r, m = h[A][1];
                            else if (N === M || u > p) break;
                            p = u
                        }
                        C = s(d, v, b);
                        var P = m - l,
                            O = P >= 0,
                            D = f - N,
                            L = D > Ne,
                            W = !L && d !== c && C === d;
                        w && (C = s(Math[W ? O ? "floor" : "ceil" : "round"](d / w) * w, v, b), v = b = C), W && (w || C === d) && ($ = -P / D, I *= s(Math.abs($), e.timeLow, e.timeHigh), g = Math.round(d + $ * I / _), w || (C = g), (!O && g > b || O && v > g) && (x = O ? v : b, k = g - x, w || (C = x), k = s(C + .03 * k, x - 50, x + 50), I = Math.abs((d - k) / ($ / _)))), I *= y ? 10 : 1, (e.onEnd || a).call(S, n.extend(o, {
                            moved: o.moved || L && w,
                            pos: d,
                            newPos: C,
                            overPos: k,
                            time: I
                        }))
                    }
                }
            })), E)
        }

        function X(t, e) {
            var i, o, s, r = {
                prevent: {}
            };
            return W(t[0], Me, function(t) {
                var l = t.wheelDeltaY || -1 * t.deltaY || 0,
                    c = t.wheelDeltaX || -1 * t.deltaX || 0,
                    d = Math.abs(c) && !Math.abs(l),
                    u = H(0 > c),
                    h = o === u,
                    p = n.now(),
                    f = Ne > p - s;
                o = u, s = p, d && r.ok && (!r.prevent[u] || i) && (q(t, !0), i && h && f || (e.shift && (i = !0, clearTimeout(r.t), r.t = setTimeout(function() {
                    i = !1
                }, _e)), (e.onEnd || a)(t, e.shift ? u : c)))
            }), r
        }

        function Y() {
            n.each(n.Fotorama.instances, function(t, e) {
                e.index = t
            })
        }

        function K(t) {
            n.Fotorama.instances.push(t), Y()
        }

        function G(t) {
            n.Fotorama.instances.splice(t.index, 1), Y()
        }
        var J = "fotorama",
            Z = "fullscreen",
            tt = J + "__wrap",
            et = tt + "--css2",
            it = tt + "--css3",
            nt = tt + "--video",
            ot = tt + "--fade",
            at = tt + "--slide",
            st = tt + "--no-controls",
            rt = tt + "--no-shadows",
            lt = tt + "--pan-y",
            ct = tt + "--rtl",
            dt = tt + "--only-active",
            ut = tt + "--no-captions",
            ht = tt + "--toggle-arrows",
            pt = J + "__stage",
            ft = pt + "__frame",
            mt = ft + "--video",
            vt = pt + "__shaft",
            gt = J + "__grab",
            bt = J + "__pointer",
            wt = J + "__arr",
            yt = wt + "--disabled",
            xt = wt + "--prev",
            Ct = wt + "--next",
            Tt = J + "__nav",
            St = Tt + "-wrap",
            kt = Tt + "__shaft",
            Et = Tt + "--dots",
            $t = Tt + "--thumbs",
            Mt = Tt + "__frame",
            Nt = Mt + "--dot",
            It = Mt + "--thumb",
            _t = J + "__fade",
            At = _t + "-front",
            Pt = _t + "-rear",
            Ot = J + "__shadow" + "s",
            Dt = Ot + "--left",
            Lt = Ot + "--right",
            Wt = J + "__active",
            jt = J + "__select",
            Ft = J + "--hidden",
            Rt = J + "--fullscreen",
            qt = J + "__fullscreen-icon",
            Ht = J + "__error",
            zt = J + "__loading",
            Bt = J + "__loaded",
            Vt = Bt + "--full",
            Qt = Bt + "--img",
            Ut = J + "__grabbing",
            Xt = J + "__img",
            Yt = Xt + "--full",
            Kt = J + "__dot",
            Gt = J + "__thumb",
            Jt = Gt + "-border",
            Zt = J + "__html",
            te = J + "__video",
            ee = te + "-play",
            ie = te + "-close",
            ne = J + "__caption",
            oe = J + "__caption__wrap",
            ae = J + "__spinner",
            se = '" tabindex="0" role="button',
            re = n && n.fn.jquery.split(".");
        if (!re || re[0] < 1 || 1 == re[0] && re[1] < 8) throw "Fotorama requires jQuery 1.8 or later and will not run without it.";
        var le = function(t, e, i) {
                function n(t, e) {
                    return typeof t === e
                }

                function o(t, e) {
                    return !!~("" + t).indexOf(e)
                }

                function a(t, e) {
                    for (var n in t) {
                        var a = t[n];
                        if (!o(a, "-") && f[a] !== i) return "pfx" != e || a
                    }
                    return !1
                }

                function s(t, e, o) {
                    for (var a in t) {
                        var s = e[t[a]];
                        if (s !== i) return !1 === o ? t[a] : n(s, "function") ? s.bind(o || e) : s
                    }
                    return !1
                }

                function r(t, e, i) {
                    var o = t.charAt(0).toUpperCase() + t.slice(1),
                        r = (t + " " + g.join(o + " ") + o).split(" ");
                    return n(e, "string") || n(e, "undefined") ? a(r, e) : (r = (t + " " + b.join(o + " ") + o).split(" "), s(r, e, i))
                }
                var l, c, d = {},
                    u = e.documentElement,
                    h = "modernizr",
                    p = e.createElement(h),
                    f = p.style,
                    m = " -webkit- -moz- -o- -ms- ".split(" "),
                    v = "Webkit Moz O ms",
                    g = v.split(" "),
                    b = v.toLowerCase().split(" "),
                    w = {},
                    y = [],
                    x = y.slice,
                    C = {}.hasOwnProperty;
                c = n(C, "undefined") || n(C.call, "undefined") ? function(t, e) {
                    return e in t && n(t.constructor.prototype[e], "undefined")
                } : function(t, e) {
                    return C.call(t, e)
                }, Function.prototype.bind || (Function.prototype.bind = function(t) {
                    var e = this;
                    if ("function" != typeof e) throw new TypeError;
                    var i = x.call(arguments, 1),
                        n = function() {
                            if (this instanceof n) {
                                var o = function() {};
                                o.prototype = e.prototype;
                                var a = new o,
                                    s = e.apply(a, i.concat(x.call(arguments)));
                                return Object(s) === s ? s : a
                            }
                            return e.apply(t, i.concat(x.call(arguments)))
                        };
                    return n
                }), w.csstransforms3d = function() {
                    return !!r("perspective")
                };
                for (var T in w) c(w, T) && (l = T.toLowerCase(), d[l] = w[T](), y.push((d[l] ? "" : "no-") + l));
                return d.addTest = function(t, e) {
                        if ("object" == typeof t)
                            for (var n in t) c(t, n) && d.addTest(n, t[n]);
                        else {
                            if (t = t.toLowerCase(), d[t] !== i) return d;
                            e = "function" == typeof e ? e() : e, "undefined" != typeof enableClasses && enableClasses && (u.className += " " + (e ? "" : "no-") + t), d[t] = e
                        }
                        return d
                    },
                    function(t) {
                        f.cssText = t
                    }(""), p = null, d._version = "2.6.2", d._prefixes = m, d._domPrefixes = b, d._cssomPrefixes = g, d.testProp = function(t) {
                        return a([t])
                    }, d.testAllProps = r, d.testStyles = function(t, i, n, o) {
                        var a, s, r, l, c = e.createElement("div"),
                            d = e.body,
                            p = d || e.createElement("body");
                        if (parseInt(n, 10))
                            for (; n--;) r = e.createElement("div"), r.id = o ? o[n] : h + (n + 1), c.appendChild(r);
                        return a = ["&#173;", '<style id="s', h, '">', t, "</style>"].join(""), c.id = h, (d ? c : p).innerHTML += a, p.appendChild(c), d || (p.style.background = "", p.style.overflow = "hidden", l = u.style.overflow, u.style.overflow = "hidden", u.appendChild(p)), s = i(c, t), d ? c.parentNode.removeChild(c) : (p.parentNode.removeChild(p), u.style.overflow = l), !!s
                    }, d.prefixed = function(t, e, i) {
                        return e ? r(t, e, i) : r(t, "pfx")
                    }, d
            }(0, e),
            ce = {
                ok: !1,
                is: function() {
                    return !1
                },
                request: function() {},
                cancel: function() {},
                event: "",
                prefix: ""
            },
            de = "webkit moz o ms khtml".split(" ");
        if (void 0 !== e.cancelFullScreen) ce.ok = !0;
        else
            for (var ue = 0, he = de.length; he > ue; ue++)
                if (ce.prefix = de[ue], void 0 !== e[ce.prefix + "CancelFullScreen"]) {
                    ce.ok = !0;
                    break
                }
        ce.ok && (ce.event = ce.prefix + "fullscreenchange", ce.is = function() {
            switch (this.prefix) {
                case "":
                    return e.fullScreen;
                case "webkit":
                    return e.webkitIsFullScreen;
                default:
                    return e[this.prefix + "FullScreen"]
            }
        }, ce.request = function(t) {
            return "" === this.prefix ? t.requestFullScreen() : t[this.prefix + "RequestFullScreen"]()
        }, ce.cancel = function() {
            return "" === this.prefix ? e.cancelFullScreen() : e[this.prefix + "CancelFullScreen"]()
        });
        var pe, fe = {
                lines: 12,
                length: 5,
                width: 2,
                radius: 7,
                corners: 1,
                rotate: 15,
                color: "rgba(128, 128, 128, .75)",
                hwaccel: !0
            },
            me = {
                top: "auto",
                left: "auto",
                className: ""
            };
        ! function(t, e) {
            pe = e()
        }(0, function() {
            function t(t, i) {
                var n, o = e.createElement(t || "div");
                for (n in i) o[n] = i[n];
                return o
            }

            function i(t) {
                for (var e = 1, i = arguments.length; i > e; e++) t.appendChild(arguments[e]);
                return t
            }

            function n(t, e, i, n) {
                var o = ["opacity", e, ~~(100 * t), i, n].join("-"),
                    a = .01 + i / n * 100,
                    s = Math.max(1 - (1 - t) / e * (100 - a), t),
                    r = u.substring(0, u.indexOf("Animation")).toLowerCase(),
                    l = r && "-" + r + "-" || "";
                return p[o] || (f.insertRule("@" + l + "keyframes " + o + "{0%{opacity:" + s + "}" + a + "%{opacity:" + t + "}" + (a + .01) + "%{opacity:1}" + (a + e) % 100 + "%{opacity:" + t + "}100%{opacity:" + s + "}}", f.cssRules.length), p[o] = 1), o
            }

            function a(t, e) {
                var i, n, a = t.style;
                for (e = e.charAt(0).toUpperCase() + e.slice(1), n = 0; n < h.length; n++)
                    if (i = h[n] + e, a[i] !== o) return i;
                return a[e] !== o ? e : void 0
            }

            function s(t, e) {
                for (var i in e) t.style[a(t, i) || i] = e[i];
                return t
            }

            function r(t) {
                for (var e = 1; e < arguments.length; e++) {
                    var i = arguments[e];
                    for (var n in i) t[n] === o && (t[n] = i[n])
                }
                return t
            }

            function l(t) {
                for (var e = {
                        x: t.offsetLeft,
                        y: t.offsetTop
                    }; t = t.offsetParent;) e.x += t.offsetLeft, e.y += t.offsetTop;
                return e
            }

            function c(t, e) {
                return "string" == typeof t ? t : t[e % t.length]
            }

            function d(t) {
                return void 0 === this ? new d(t) : void(this.opts = r(t || {}, d.defaults, m))
            }
            var u, h = ["webkit", "Moz", "ms", "O"],
                p = {},
                f = function() {
                    var n = t("style", {
                        type: "text/css"
                    });
                    return i(e.getElementsByTagName("head")[0], n), n.sheet || n.styleSheet
                }(),
                m = {
                    lines: 12,
                    length: 7,
                    width: 5,
                    radius: 10,
                    rotate: 0,
                    corners: 1,
                    color: "#000",
                    direction: 1,
                    speed: 1,
                    trail: 100,
                    opacity: .25,
                    fps: 20,
                    zIndex: 2e9,
                    className: "spinner",
                    top: "auto",
                    left: "auto",
                    position: "relative"
                };
            d.defaults = {}, r(d.prototype, {
                spin: function(e) {
                    this.stop();
                    var i, n, o = this,
                        a = o.opts,
                        r = o.el = s(t(0, {
                            className: a.className
                        }), {
                            position: a.position,
                            width: 0,
                            zIndex: a.zIndex
                        }),
                        c = a.radius + a.length + a.width;
                    if (e && (e.insertBefore(r, e.firstChild || null), n = l(e), i = l(r), s(r, {
                            left: ("auto" == a.left ? n.x - i.x + (e.offsetWidth >> 1) : parseInt(a.left, 10) + c) + "px",
                            top: ("auto" == a.top ? n.y - i.y + (e.offsetHeight >> 1) : parseInt(a.top, 10) + c) + "px"
                        })), r.setAttribute("role", "progressbar"), o.lines(r, o.opts), !u) {
                        var d, h = 0,
                            p = (a.lines - 1) * (1 - a.direction) / 2,
                            f = a.fps,
                            m = f / a.speed,
                            v = (1 - a.opacity) / (m * a.trail / 100),
                            g = m / a.lines;
                        ! function t() {
                            h++;
                            for (var e = 0; e < a.lines; e++) d = Math.max(1 - (h + (a.lines - e) * g) % m * v, a.opacity), o.opacity(r, e * a.direction + p, d, a);
                            o.timeout = o.el && setTimeout(t, ~~(1e3 / f))
                        }()
                    }
                    return o
                },
                stop: function() {
                    var t = this.el;
                    return t && (clearTimeout(this.timeout), t.parentNode && t.parentNode.removeChild(t), this.el = o), this
                },
                lines: function(e, o) {
                    function a(e, i) {
                        return s(t(), {
                            position: "absolute",
                            width: o.length + o.width + "px",
                            height: o.width + "px",
                            background: e,
                            boxShadow: i,
                            transformOrigin: "left",
                            transform: "rotate(" + ~~(360 / o.lines * l + o.rotate) + "deg) translate(" + o.radius + "px,0)",
                            borderRadius: (o.corners * o.width >> 1) + "px"
                        })
                    }
                    for (var r, l = 0, d = (o.lines - 1) * (1 - o.direction) / 2; l < o.lines; l++) r = s(t(), {
                        position: "absolute",
                        top: 1 + ~(o.width / 2) + "px",
                        transform: o.hwaccel ? "translate3d(0,0,0)" : "",
                        opacity: o.opacity,
                        animation: u && n(o.opacity, o.trail, d + l * o.direction, o.lines) + " " + 1 / o.speed + "s linear infinite"
                    }), o.shadow && i(r, s(a("#000", "0 0 4px #000"), {
                        top: "2px"
                    })), i(e, i(r, a(c(o.color, l), "0 0 1px rgba(0,0,0,.1)")));
                    return e
                },
                opacity: function(t, e, i) {
                    e < t.childNodes.length && (t.childNodes[e].style.opacity = i)
                }
            });
            var v = s(t("group"), {
                behavior: "url(#default#VML)"
            });
            return !a(v, "transform") && v.adj ? function() {
                function e(e, i) {
                    return t("<" + e + ' xmlns="urn:schemas-microsoft.com:vml" class="spin-vml">', i)
                }
                f.addRule(".spin-vml", "behavior:url(#default#VML)"), d.prototype.lines = function(t, n) {
                    function o() {
                        return s(e("group", {
                            coordsize: d + " " + d,
                            coordorigin: -l + " " + -l
                        }), {
                            width: d,
                            height: d
                        })
                    }

                    function a(t, a, r) {
                        i(h, i(s(o(), {
                            rotation: 360 / n.lines * t + "deg",
                            left: ~~a
                        }), i(s(e("roundrect", {
                            arcsize: n.corners
                        }), {
                            width: l,
                            height: n.width,
                            left: n.radius,
                            top: -n.width >> 1,
                            filter: r
                        }), e("fill", {
                            color: c(n.color, t),
                            opacity: n.opacity
                        }), e("stroke", {
                            opacity: 0
                        }))))
                    }
                    var r, l = n.length + n.width,
                        d = 2 * l,
                        u = 2 * -(n.width + n.length) + "px",
                        h = s(o(), {
                            position: "absolute",
                            top: u,
                            left: u
                        });
                    if (n.shadow)
                        for (r = 1; r <= n.lines; r++) a(r, -2, "progid:DXImageTransform.Microsoft.Blur(pixelradius=2,makeshadow=1,shadowopacity=.3)");
                    for (r = 1; r <= n.lines; r++) a(r);
                    return i(t, h)
                }, d.prototype.opacity = function(t, e, i, n) {
                    var o = t.firstChild;
                    n = n.shadow && n.lines || 0, o && e + n < o.childNodes.length && (o = o.childNodes[e + n], o = o && o.firstChild, (o = o && o.firstChild) && (o.opacity = i))
                }
            }() : u = a(v, "animation"), d
        });
        var ve, ge, be = n(t),
            we = n(e),
            ye = "quirks" === i.hash.replace("#", ""),
            xe = le.csstransforms3d,
            Ce = xe && !ye,
            Te = xe || "CSS1Compat" === e.compatMode,
            Se = ce.ok,
            ke = navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone/i),
            Ee = !Ce || ke,
            $e = navigator.msPointerEnabled,
            Me = "onwheel" in e.createElement("div") ? "wheel" : e.onmousewheel !== o ? "mousewheel" : "DOMMouseScroll",
            Ne = 250,
            Ie = 300,
            _e = 1400,
            Ae = 5e3,
            Pe = 64,
            Oe = 500,
            De = 333,
            Le = "$stageFrame",
            We = "$navDotFrame",
            je = "$navThumbFrame",
            Fe = "auto",
            Re = function(t) {
                var e = "bez_" + n.makeArray(arguments).join("_").replace(".", "p");
                if ("function" != typeof n.easing[e]) {
                    var i = function(t, e) {
                        var i = [null, null],
                            n = [null, null],
                            o = [null, null],
                            a = function(a, s) {
                                return o[s] = 3 * t[s], n[s] = 3 * (e[s] - t[s]) - o[s], i[s] = 1 - o[s] - n[s], a * (o[s] + a * (n[s] + a * i[s]))
                            },
                            s = function(t) {
                                return o[0] + t * (2 * n[0] + 3 * i[0] * t)
                            };
                        return function(t) {
                            return a(function(t) {
                                for (var e, i = t, n = 0; ++n < 14 && (e = a(i, 0) - t, !(Math.abs(e) < .001));) i -= e / s(i);
                                return i
                            }(t), 1)
                        }
                    };
                    n.easing[e] = function(e, n, o, a, s) {
                        return a * i([t[0], t[1]], [t[2], t[3]])(n / s) + o
                    }
                }
                return e
            }([.1, 0, .25, 1]),
            qe = "50%",
            He = {
                width: null,
                minwidth: null,
                maxwidth: "100%",
                height: null,
                minheight: null,
                maxheight: null,
                ratio: null,
                margin: 2,
                glimpse: 0,
                fit: "contain",
                position: qe,
                thumbposition: qe,
                nav: "dots",
                navposition: "bottom",
                navwidth: null,
                thumbwidth: Pe,
                thumbheight: Pe,
                thumbmargin: 2,
                thumbborderwidth: 2,
                thumbfit: "cover",
                allowfullscreen: !1,
                transition: "slide",
                clicktransition: null,
                transitionduration: Ie,
                captions: !0,
                hash: !1,
                startindex: 0,
                loop: !1,
                autoplay: !1,
                stopautoplayontouch: !0,
                keyboard: !1,
                arrows: !0,
                click: !0,
                swipe: !0,
                trackpad: !1,
                enableifsingleframe: !1,
                controlsonstart: !0,
                shuffle: !1,
                direction: "ltr",
                shadows: !0,
                spinner: null
            },
            ze = {
                left: !0,
                right: !0,
                down: !1,
                up: !1,
                space: !1,
                home: !1,
                end: !1
            };
        k.stop = function(t) {
            k.ii[t] = !1
        };
        var Be, Ve, Qe, Ue;
        jQuery.Fotorama = function(t, o) {
            function a(t) {
                return Ri[t] || Gi.fullScreen
            }

            function c(e) {
                e !== c.f && (e ? (t.html("").addClass(J + " " + Zi).append(sn).before(on).before(an), K(Gi)) : (sn.detach(), on.detach(), an.detach(), t.html(nn.urtext).removeClass(Zi), G(Gi)), function(t) {
                    var e = "keydown." + J,
                        i = J + Ji,
                        n = "keydown." + i,
                        s = "resize." + i + " orientationchange." + i;
                    t ? (we.on(n, function(t) {
                        var e, i;
                        gi && 27 === t.keyCode ? (e = !0, ii(gi, !0, !0)) : (Gi.fullScreen || o.keyboard && !Gi.index) && (27 === t.keyCode ? (e = !0, Gi.cancelFullScreen()) : t.shiftKey && 32 === t.keyCode && a("space") || 37 === t.keyCode && a("left") || 38 === t.keyCode && a("up") ? i = "<" : 32 === t.keyCode && a("space") || 39 === t.keyCode && a("right") || 40 === t.keyCode && a("down") ? i = ">" : 36 === t.keyCode && a("home") ? i = "<<" : 35 === t.keyCode && a("end") && (i = ">>")), (e || i) && q(t), i && Gi.show({
                            index: i,
                            slow: t.altKey,
                            user: !0
                        })
                    }), Gi.index || we.off(e).on(e, "textarea, input, select", function(t) {
                        !ge.hasClass(Z) && t.stopPropagation()
                    }), be.on(s, Gi.resize)) : (we.off(n), be.off(s))
                }(e), c.f = e)
            }

            function f() {
                pi = Gi.data = pi || P(o.data) || T(t), fi = Gi.size = pi.length, !hi.ok && o.shuffle && A(pi), n.each(pi, function(t, e) {
                    if (!e.i) {
                        e.i = en++;
                        var i = y(e.video, !0);
                        if (i) {
                            var n = {};
                            e.video = i, e.img || e.thumb ? e.thumbsReady = !0 : n = x(e, pi, Gi), C(pi, {
                                img: n.img,
                                thumb: n.thumb
                            }, e.i, Gi)
                        }
                    }
                }), Sn = V(Sn), fi && c(!0)
            }

            function g() {
                var t = 2 > fi && !o.enableifsingleframe || gi;
                $n.noMove = t || Pi, $n.noSwipe = t || !o.swipe, !Wi && ln.toggleClass(gt, !o.click && !$n.noMove && !$n.noSwipe), $e && sn.toggleClass(lt, !$n.noSwipe)
            }

            function b(t) {
                !0 === t && (t = ""), o.autoplay = Math.max(+t || Ae, 1.5 * Li)
            }

            function w(t) {
                return 0 > t ? (fi + t % fi) % fi : t >= fi ? t % fi : t
            }

            function V(t) {
                return s(t, 0, fi - 1)
            }

            function Q(t) {
                return $i ? w(t) : V(t)
            }

            function Y(t) {
                return !!(t > 0 || $i) && t - 1
            }

            function _t(t) {
                return !!(fi - 1 > t || $i) && t + 1
            }

            function At(t, e, i) {
                if ("number" == typeof t) {
                    t = new Array(t);
                    var o = !0
                }
                return n.each(t, function(t, n) {
                    if (o && (n = t), "number" == typeof n) {
                        var a = pi[w(n)];
                        if (a) {
                            var s = "$" + e + "Frame",
                                r = a[s];
                            i.call(this, t, n, a, r, s, r && r.data())
                        }
                    }
                })
            }

            function Pt(t, e, i, n) {
                (!qi || "*" === qi && n === Ei) && (t = h(o.width) || h(t) || Oe, e = h(o.height) || h(e) || De, Gi.resize({
                    width: t,
                    ratio: o.ratio || i || t / e
                }, 0, n !== Ei && "*"))
            }

            function Ut(t, e, i, a, s, r) {
                At(t, e, function(t, l, c, d, u, h) {
                    function p(t) {
                        var e = w(l);
                        Ye(t, {
                            index: e,
                            src: C,
                            frame: pi[e]
                        })
                    }

                    function f() {
                        b.remove(), n.Fotorama.cache[C] = "error", c.html && "stage" === e || !T || T === C ? (!C || c.html || v ? "stage" === e && (d.trigger("f:load").removeClass(zt + " " + Ht).addClass(Bt), p("load"), Pt()) : (d.trigger("f:error").removeClass(zt).addClass(Ht), p("error")), h.state = "error", !(fi > 1 && pi[l] === c) || c.html || c.deleted || c.video || v || (c.deleted = !0, Gi.splice(l, 1))) : (c[x] = C = T, Ut([l], e, i, a, s, !0))
                    }

                    function m() {
                        var t = 10;
                        k(function() {
                            return !Xi || !t-- && !Ee
                        }, function() {
                            n.Fotorama.measures[C] = y.measures = n.Fotorama.measures[C] || {
                                width: g.width,
                                height: g.height,
                                ratio: g.width / g.height
                            }, Pt(y.measures.width, y.measures.height, y.measures.ratio, l), b.off("load error").addClass(Xt + (v ? " " + Yt : "")).prependTo(d), $(b, (n.isFunction(i) ? i() : i) || En, a || c.fit || o.fit, s || c.position || o.position), n.Fotorama.cache[C] = h.state = "loaded", setTimeout(function() {
                                d.trigger("f:load").removeClass(zt + " " + Ht).addClass(Bt + " " + (v ? Vt : Qt)), "stage" === e ? p("load") : (c.thumbratio === Fe || !c.thumbratio && o.thumbratio === Fe) && (c.thumbratio = y.measures.ratio, di())
                            }, 0)
                        })
                    }
                    if (d) {
                        var v = Gi.fullScreen && c.full && c.full !== c.img && !h.$full && "stage" === e;
                        if (!h.$img || r || v) {
                            var g = new Image,
                                b = n(g),
                                y = b.data();
                            h[v ? "$full" : "$img"] = b;
                            var x = "stage" === e ? v ? "full" : "img" : "thumb",
                                C = c[x],
                                T = v ? null : c["stage" === e ? "thumb" : "img"];
                            if ("navThumb" === e && (d = h.$wrap), !C) return void f();
                            n.Fotorama.cache[C] ? function t() {
                                "error" === n.Fotorama.cache[C] ? f() : "loaded" === n.Fotorama.cache[C] ? setTimeout(m, 0) : setTimeout(t, 100)
                            }() : (n.Fotorama.cache[C] = "*", b.on("load", m).on("error", f)), h.state = "", g.src = C
                        }
                    }
                })
            }

            function te() {
                Tn.detach(), vi && vi.stop()
            }

            function re() {
                var t = bi[Le];
                t && !t.data().state && (function(t) {
                    Tn.append(vi.spin().el).appendTo(t)
                }(t), t.on("f:load f:error", function() {
                    t.off("f:load f:error"), te()
                }))
            }

            function le(t) {
                F(t, ri), R(t, function() {
                    setTimeout(function() {
                        O(fn)
                    }, 0), Be({
                        time: Li,
                        guessIndex: n(this).data().eq,
                        minMax: Nn
                    })
                })
            }

            function de(t, e) {
                At(t, e, function(t, i, o, a, s, r) {
                    if (!a) {
                        a = o[s] = sn[s].clone(), (r = a.data()).data = o;
                        var l = a[0];
                        "stage" === e ? (o.html && n('<div class="' + Zt + '"></div>').append(o._html ? n(o.html).removeAttr("id").html(o._html) : o.html).appendTo(a), o.caption && n(_(ne, _(oe, o.caption))).appendTo(a), o.video && a.addClass(mt).append(xn.clone()), R(l, function() {
                            setTimeout(function() {
                                O(rn)
                            }, 0), ai({
                                index: r.eq,
                                user: !0
                            })
                        }), cn = cn.add(a)) : "navDot" === e ? (le(l), vn = vn.add(a)) : "navThumb" === e && (le(l), r.$wrap = a.children(":first"), gn = gn.add(a), o.video && r.$wrap.append(xn.clone()))
                    }
                })
            }

            function ue(t, e, i, n) {
                return t && t.length && $(t, e, i, n)
            }

            function he(t) {
                At(t, "stage", function(t, e, i, a, s, r) {
                    if (a) {
                        var c = w(e),
                            d = i.fit || o.fit,
                            u = i.position || o.position;
                        r.eq = c, An[Le][c] = a.css(n.extend({
                            left: Pi ? 0 : p(e, En.w, o.margin, yi)
                        }, Pi && l(0))), S(a[0]) && (a.appendTo(ln), ii(i.$video)), ue(r.$img, En, d, u), ue(r.$full, En, d, u)
                    }
                })
            }

            function ye(t, e) {
                if ("thumbs" === Mi && !isNaN(t)) {
                    var i = -t,
                        a = -t + En.nw;
                    gn.each(function() {
                        var t = n(this).data(),
                            s = t.eq,
                            r = function() {
                                return {
                                    h: Di,
                                    w: t.w
                                }
                            },
                            l = r(),
                            c = pi[s] || {},
                            d = c.thumbfit || o.thumbfit,
                            u = c.thumbposition || o.thumbposition;
                        l.w = t.w, t.l + t.w < i || t.l > a || ue(t.$img, l, d, u) || e && Ut([s], "navThumb", r, d, u)
                    })
                }
            }

            function xe(t, e, i) {
                if (!xe[i]) {
                    var a = "nav" === i && Ni,
                        s = 0;
                    e.append(t.filter(function() {
                        for (var t, e = n(this), i = e.data(), o = 0, a = pi.length; a > o; o++)
                            if (i.data === pi[o]) {
                                t = !0, i.eq = o;
                                break
                            }
                        return t || e.remove() && !1
                    }).sort(function(t, e) {
                        return n(t).data().eq - n(e).data().eq
                    }).each(function() {
                        if (a) {
                            var t = n(this),
                                e = t.data(),
                                i = Math.round(Di * e.data.thumbratio) || Oi;
                            e.l = s, e.w = i, t.css({
                                width: i
                            }), s += i + o.thumbmargin
                        }
                    })), xe[i] = !0
                }
            }

            function ke(t) {
                return t - Pn > En.w / 3
            }

            function Me(t) {
                return !($i || Sn + t && Sn - fi + t || gi)
            }

            function _e() {
                var t = Me(0),
                    e = Me(1);
                dn.toggleClass(yt, t).attr(j(t)), un.toggleClass(yt, e).attr(j(e))
            }

            function Re() {
                Mn.ok && (Mn.prevent = {
                    "<": Me(0),
                    ">": Me(1)
                })
            }

            function qe(t) {
                var e, i, n = t.data();
                return Ni ? (e = n.l, i = n.w) : (e = t.position().left, i = t.width()), {
                    c: e + i / 2,
                    min: -e + 10 * o.thumbmargin,
                    max: -e + En.w - i - 10 * o.thumbmargin
                }
            }

            function He(t) {
                var e = bi[Ki].data();
                z(bn, {
                    time: 1.2 * t,
                    pos: e.l,
                    width: e.w - 2 * o.thumbborderwidth
                })
            }

            function Be(t) {
                var e = pi[t.guessIndex][Ki];
                if (e) {
                    var i = Nn.min !== Nn.max,
                        n = t.minMax || i && qe(bi[Ki]),
                        o = i && (t.keep && Be.l ? Be.l : s((t.coo || En.nw / 2) - qe(e).c, n.min, n.max)),
                        a = i && s(o, Nn.min, Nn.max),
                        r = 1.1 * t.time;
                    z(mn, {
                        time: r,
                        pos: a || 0,
                        onEnd: function() {
                            ye(a, !0)
                        }
                    }), ei(fn, M(a, Nn.min, Nn.max)), Be.l = o
                }
            }

            function Ve(t) {
                for (var e = _n[t]; e.length;) e.shift().removeClass(Wt)
            }

            function Qe(t) {
                var e = An[t];
                n.each(wi, function(t, i) {
                    delete e[w(i)]
                }), n.each(e, function(t, i) {
                    delete e[t], i.detach()
                })
            }

            function Ue(t) {
                yi = xi = Sn;
                var e = bi[Le];
                e && (Ve(Le), _n[Le].push(e.addClass(Wt)), t || Gi.show.onEnd(!0), m(ln, 0), Qe(Le), he(wi), $n.min = $i ? -1 / 0 : -p(fi - 1, En.w, o.margin, yi), $n.max = $i ? 1 / 0 : -p(0, En.w, o.margin, yi), $n.snap = En.w + o.margin, Nn.min = Math.min(0, En.nw - mn.width()), Nn.max = 0, mn.toggleClass(gt, !(Nn.noMove = Nn.min === Nn.max)))
            }

            function Xe(t, e) {
                t && n.each(e, function(e, i) {
                    i && n.extend(i, {
                        width: t.width || i.width,
                        height: t.height,
                        minwidth: t.minwidth,
                        maxwidth: t.maxwidth,
                        minheight: t.minheight,
                        maxheight: t.maxheight,
                        ratio: L(t.ratio)
                    })
                })
            }

            function Ye(e, i) {
                t.trigger(J + ":" + e, [Gi, i])
            }

            function Ke() {
                clearTimeout(Ge.t), Xi = 1, o.stopautoplayontouch ? Gi.stopAutoplay() : Vi = !0
            }

            function Ge() {
                o.stopautoplayontouch || (Je(), Ze()), Ge.t = setTimeout(function() {
                    Xi = 0
                }, Ie + Ne)
            }

            function Je() {
                Vi = !(!gi && !Qi)
            }

            function Ze() {
                if (clearTimeout(Ze.t), k.stop(Ze.w), o.autoplay && !Vi) {
                    Gi.autoplay || (Gi.autoplay = !0, Ye("startautoplay"));
                    var t = Sn,
                        e = bi[Le].data();
                    Ze.w = k(function() {
                        return e.state || t !== Sn
                    }, function() {
                        Ze.t = setTimeout(function() {
                            if (!Vi && t === Sn) {
                                var e = ki,
                                    i = pi[e][Le].data();
                                Ze.w = k(function() {
                                    return i.state || e !== ki
                                }, function() {
                                    Vi || e !== ki || Gi.show($i ? H(!Fi) : ki)
                                })
                            }
                        }, o.autoplay)
                    })
                } else Gi.autoplay && (Gi.autoplay = !1, Ye("stopautoplay"))
            }

            function ti() {
                Gi.fullScreen && (Gi.fullScreen = !1, Se && ce.cancel(tn), ge.removeClass(Z), ve.removeClass(Z), t.removeClass(Rt).insertAfter(an), En = n.extend({}, Ui), ii(gi, !0, !0), si("x", !1), Gi.resize(), Ut(wi, "stage"), O(be, zi, Hi), Ye("fullscreenexit"))
            }

            function ei(t, e) {
                ji && (t.removeClass(Dt + " " + Lt), e && !gi && t.addClass(e.replace(/^|\s/g, " " + Ot + "--")))
            }

            function ii(t, e, i) {
                e && (sn.removeClass(nt), gi = !1, g()), t && t !== gi && (t.remove(), Ye("unloadvideo")), i && (Je(), Ze())
            }

            function ni(t) {
                sn.toggleClass(st, t)
            }

            function oi(t) {
                if (!$n.flow) {
                    var e = t ? t.pageX : oi.x,
                        i = e && !Me(ke(e)) && o.click;
                    oi.p !== i && rn.toggleClass(bt, i) && (oi.p = i, oi.x = e)
                }
            }

            function ai(t) {
                clearTimeout(ai.t), o.clicktransition && o.clicktransition !== o.transition ? setTimeout(function() {
                    var e = o.transition;
                    Gi.setOptions({
                        transition: o.clicktransition
                    }), Wi = e, ai.t = setTimeout(function() {
                        Gi.show(t)
                    }, 10)
                }, 0) : Gi.show(t)
            }

            function si(t, e) {
                $n[t] = Nn[t] = e
            }

            function ri(t) {
                ai({
                    index: n(this).data().eq,
                    slow: t.altKey,
                    user: !0,
                    coo: t._x - fn.offset().left
                })
            }

            function li(t) {
                ai({
                    index: hn.index(this) ? ">" : "<",
                    slow: t.altKey,
                    user: !0
                })
            }

            function ci(t) {
                R(t, function() {
                    setTimeout(function() {
                        O(rn)
                    }, 0), ni(!1)
                })
            }

            function di() {
                if (f(), function() {
                        function t(t, i) {
                            e[t ? "add" : "remove"].push(i)
                        }
                        Gi.options = o = D(o), Pi = "crossfade" === o.transition || "dissolve" === o.transition, $i = o.loop && (fi > 2 || Pi && (!Wi || "slide" !== Wi)), Li = +o.transitionduration || Ie, Fi = "rtl" === o.direction, Ri = n.extend({}, o.keyboard && ze, o.keyboard);
                        var e = {
                            add: [],
                            remove: []
                        };
                        fi > 1 || o.enableifsingleframe ? (Mi = o.nav, Ii = "top" === o.navposition, e.remove.push(jt), hn.toggle(!!o.arrows)) : (Mi = !1, hn.hide()), te(), vi = new pe(n.extend(fe, o.spinner, me, {
                            direction: Fi ? -1 : 1
                        })), _e(), Re(), o.autoplay && b(o.autoplay), Oi = d(o.thumbwidth) || Pe, Di = d(o.thumbheight) || Pe, Mn.ok = In.ok = o.trackpad && !Ee, g(), Xe(o, [En]), (Ni = "thumbs" === Mi) ? (de(fi, "navThumb"), mi = gn, Ki = je, function(t, e) {
                            var i = t[0];
                            i.styleSheet ? i.styleSheet.cssText = e : t.html(e)
                        }(on, n.Fotorama.jst.style({
                            w: Oi,
                            h: Di,
                            b: o.thumbborderwidth,
                            m: o.thumbmargin,
                            s: Ji,
                            q: !Te
                        })), fn.addClass($t).removeClass(Et)) : "dots" === Mi ? (de(fi, "navDot"), mi = vn, Ki = We, fn.addClass(Et).removeClass($t)) : (Mi = !1, fn.removeClass($t + " " + Et)), Mi && (Ii ? pn.insertBefore(rn) : pn.insertAfter(rn), xe.nav = !1, xe(mi, mn, "nav")), (_i = o.allowfullscreen) ? (wn.prependTo(rn), Ai = Se && "native" === _i) : (wn.detach(), Ai = !1), t(Pi, ot), t(!Pi, at), t(!o.captions, ut), t(Fi, ct), t("always" !== o.arrows, ht), t(!(ji = o.shadows && !Ee), rt), sn.addClass(e.add.join(" ")).removeClass(e.remove.join(" ")), kn = n.extend({}, o)
                    }(), !di.i) {
                    di.i = !0;
                    var t = o.startindex;
                    (t || o.hash && i.hash) && (Ei = N(t || i.hash.replace(/^#/, ""), pi, 0 === Gi.index || t, t)), Sn = yi = xi = Ci = Ei = Q(Ei) || 0
                }
                if (fi) {
                    if (ui()) return;
                    gi && ii(gi, !0), wi = [], Qe(Le), di.ok = !0, Gi.show({
                        index: Sn,
                        time: 0
                    }), Gi.resize()
                } else Gi.destroy()
            }

            function ui() {
                return !ui.f === Fi ? (ui.f = Fi, Sn = fi - 1 - Sn, Gi.reverse(), !0) : void 0
            }

            function hi() {
                hi.ok || (hi.ok = !0, Ye("ready"))
            }
            ve = n("html"), ge = n("body");
            var pi, fi, mi, vi, gi, bi, wi, yi, xi, Ci, Ti, Si, ki, Ei, $i, Mi, Ni, Ii, _i, Ai, Pi, Oi, Di, Li, Wi, ji, Fi, Ri, qi, Hi, zi, Bi, Vi, Qi, Ui, Xi, Yi, Ki, Gi = this,
                Ji = n.now(),
                Zi = J + Ji,
                tn = t[0],
                en = 1,
                nn = t.data(),
                on = n("<style></style>"),
                an = n(_(Ft)),
                sn = n(_(tt)),
                rn = n(_(pt)).appendTo(sn),
                ln = (rn[0], n(_(vt)).appendTo(rn)),
                cn = n(),
                dn = n(_(wt + " " + xt + se)),
                un = n(_(wt + " " + Ct + se)),
                hn = dn.add(un).appendTo(rn),
                pn = n(_(St)),
                fn = n(_(Tt)).appendTo(pn),
                mn = n(_(kt)).appendTo(fn),
                vn = n(),
                gn = n(),
                bn = (ln.data(), mn.data(), n(_(Jt)).appendTo(mn)),
                wn = n(_(qt + se)),
                yn = wn[0],
                xn = n(_(ee)),
                Cn = n(_(ie)).appendTo(rn)[0],
                Tn = n(_(ae)),
                Sn = !1,
                kn = {},
                En = {},
                $n = {},
                Mn = {},
                Nn = {},
                In = {},
                _n = {},
                An = {},
                Pn = 0,
                On = [];
            sn[Le] = n(_(ft)), sn[je] = n(_(Mt + " " + It + se, _(Gt))), sn[We] = n(_(Mt + " " + Nt + se, _(Kt))), _n[Le] = [], _n[je] = [], _n[We] = [], An[Le] = {}, sn.addClass(Ce ? it : et).toggleClass(st, !o.controlsonstart), nn.fotorama = this, Gi.startAutoplay = function(t) {
                return Gi.autoplay ? this : (Vi = Qi = !1, b(t || o.autoplay), Ze(), this)
            }, Gi.stopAutoplay = function() {
                return Gi.autoplay && (Vi = Qi = !0, Ze()), this
            }, Gi.show = function(t) {
                var e;
                "object" != typeof t ? (e = t, t = {}) : e = t.index, e = ">" === e ? xi + 1 : "<" === e ? xi - 1 : "<<" === e ? 0 : ">>" === e ? fi - 1 : e, e = void 0 === (e = isNaN(e) ? N(e, pi, !0) : e) ? Sn || 0 : e, Gi.activeIndex = Sn = Q(e), Ti = Y(Sn), Si = _t(Sn), ki = w(Sn + (Fi ? -1 : 1)), wi = [Sn, Ti, Si], xi = $i ? e : Sn;
                var i = Math.abs(Ci - xi),
                    n = v(t.time, function() {
                        return Math.min(Li * (1 + (i - 1) / 12), 2 * Li)
                    }),
                    a = t.overPos;
                t.slow && (n *= 10);
                var r = bi;
                Gi.activeFrame = bi = pi[Sn];
                var l = r === bi && !t.user;
                ii(gi, bi.i !== pi[w(yi)].i), de(wi, "stage"), he(Ee ? [xi] : [xi, Y(xi), _t(xi)]), si("go", !0), l || Ye("show", {
                    user: t.user,
                    time: n
                }), Vi = !0;
                var c = Gi.show.onEnd = function(e) {
                    if (!c.ok) {
                        if (c.ok = !0, e || Ue(!0), l || Ye("showend", {
                                user: t.user
                            }), !e && Wi && Wi !== o.transition) return Gi.setOptions({
                            transition: Wi
                        }), void(Wi = !1);
                        re(), Ut(wi, "stage"), si("go", !1), Re(), oi(), Je(), Ze()
                    }
                };
                if (Pi) {
                    B(bi[Le], Sn !== Ci ? pi[Ci][Le] : null, cn, {
                        time: n,
                        method: o.transition,
                        onEnd: c
                    }, On)
                } else z(ln, {
                    pos: -p(xi, En.w, o.margin, yi),
                    overPos: a,
                    time: n,
                    onEnd: c
                });
                if (_e(), Mi) {
                    Ve(Ki), _n[Ki].push(bi[Ki].addClass(Wt));
                    var d = V(Sn + s(xi - Ci, -1, 1));
                    Be({
                        time: n,
                        coo: d !== Sn && t.coo,
                        guessIndex: void 0 !== t.coo ? d : Sn,
                        keep: l
                    }), Ni && He(n)
                }
                return Bi = void 0 !== Ci && Ci !== Sn, Ci = Sn, o.hash && Bi && !Gi.eq && E(bi.id || Sn + 1), this
            }, Gi.requestFullScreen = function() {
                return _i && !Gi.fullScreen && (Hi = be.scrollTop(), zi = be.scrollLeft(), O(be), si("x", !0), Ui = n.extend({}, En), t.addClass(Rt).appendTo(ge.addClass(Z)), ve.addClass(Z), ii(gi, !0, !0), Gi.fullScreen = !0, Ai && ce.request(tn), Gi.resize(), Ut(wi, "stage"), re(), Ye("fullscreenenter")), this
            }, Gi.cancelFullScreen = function() {
                return Ai && ce.is() ? ce.cancel(e) : ti(), this
            }, Gi.toggleFullScreen = function() {
                return Gi[(Gi.fullScreen ? "cancel" : "request") + "FullScreen"]()
            }, W(e, ce.event, function() {
                !pi || ce.is() || gi || ti()
            }), Gi.resize = function(t) {
                if (!pi) return this;
                var e = arguments[1] || 0,
                    i = arguments[2];
                Xe(Gi.fullScreen ? {
                    width: "100%",
                    maxwidth: null,
                    minwidth: null,
                    height: "100%",
                    maxheight: null,
                    minheight: null
                } : D(t), [En, i || Gi.fullScreen || o]);
                var n = En.width,
                    a = En.height,
                    r = En.ratio,
                    l = be.height() - (Mi ? fn.height() : 0);
                return h(n) && (sn.addClass(dt).css({
                    width: n,
                    minWidth: En.minwidth || 0,
                    maxWidth: En.maxwidth || 99999
                }), n = En.W = En.w = sn.width(), En.nw = Mi && u(o.navwidth, n) || n, o.glimpse && (En.w -= Math.round(2 * (u(o.glimpse, n) || 0))), ln.css({
                    width: En.w,
                    marginLeft: (En.W - En.w) / 2
                }), a = u(a, l), (a = a || r && n / r) && (n = Math.round(n), a = En.h = Math.round(s(a, u(En.minheight, l), u(En.maxheight, l))), rn.stop().animate({
                    width: n,
                    height: a
                }, e, function() {
                    sn.removeClass(dt)
                }), Ue(), Mi && (fn.stop().animate({
                    width: En.nw
                }, e), Be({
                    guessIndex: Sn,
                    time: e,
                    keep: !0
                }), Ni && xe.nav && He(e)), qi = i || !0, hi())), Pn = rn.offset().left, this
            }, Gi.setOptions = function(t) {
                return n.extend(o, t), di(), this
            }, Gi.shuffle = function() {
                return pi && A(pi) && di(), this
            }, Gi.destroy = function() {
                return Gi.cancelFullScreen(), Gi.stopAutoplay(), pi = Gi.data = null, c(), wi = [], Qe(Le), di.ok = !1, this
            }, Gi.playVideo = function() {
                var t = bi,
                    e = t.video,
                    i = Sn;
                return "object" == typeof e && t.videoReady && (Ai && Gi.fullScreen && Gi.cancelFullScreen(), k(function() {
                    return !ce.is() || i !== Sn
                }, function() {
                    i === Sn && (t.$video = t.$video || n(n.Fotorama.jst.video(e)), t.$video.appendTo(t[Le]), sn.addClass(nt), gi = t.$video, g(), hn.blur(), wn.blur(), Ye("loadvideo"))
                })), this
            }, Gi.stopVideo = function() {
                return ii(gi, !0, !0), this
            }, rn.on("mousemove", oi), $n = U(ln, {
                onStart: Ke,
                onMove: function(t, e) {
                    ei(rn, e.edge)
                },
                onTouchEnd: Ge,
                onEnd: function(t) {
                    ei(rn);
                    var e = ($e && !Yi || t.touch) && o.arrows && "always" !== o.arrows;
                    if (t.moved || e && t.pos !== t.newPos && !t.control) {
                        var i = function(t, e, i, n) {
                            return -Math.round(t / (e + (i || 0)) - (n || 0))
                        }(t.newPos, En.w, o.margin, yi);
                        Gi.show({
                            index: i,
                            time: Pi ? Li : t.time,
                            overPos: t.overPos,
                            user: !0
                        })
                    } else t.aborted || t.control || function(t, e) {
                        var i = t.target;
                        n(i).hasClass(ee) ? Gi.playVideo() : i === yn ? Gi.toggleFullScreen() : gi ? i === Cn && ii(gi, !0, !0) : e ? ni() : o.click && ai({
                            index: t.shiftKey || H(ke(t._x)),
                            slow: t.altKey,
                            user: !0
                        })
                    }(t.startEvent, e)
                },
                timeLow: 1,
                timeHigh: 1,
                friction: 2,
                select: "." + jt + ", ." + jt + " *",
                $wrap: rn
            }), Nn = U(mn, {
                onStart: Ke,
                onMove: function(t, e) {
                    ei(fn, e.edge)
                },
                onTouchEnd: Ge,
                onEnd: function(t) {
                    function e() {
                        Be.l = t.newPos, Je(), Ze(), ye(t.newPos, !0)
                    }
                    if (t.moved) t.pos !== t.newPos ? (Vi = !0, z(mn, {
                        time: t.time,
                        pos: t.newPos,
                        overPos: t.overPos,
                        onEnd: e
                    }), ye(t.newPos), ji && ei(fn, M(t.newPos, Nn.min, Nn.max))) : e();
                    else {
                        var i = t.$target.closest("." + Mt, mn)[0];
                        i && ri.call(i, t.startEvent)
                    }
                },
                timeLow: .5,
                timeHigh: 2,
                friction: 5,
                $wrap: fn
            }), Mn = X(rn, {
                shift: !0,
                onEnd: function(t, e) {
                    Ke(), Ge(), Gi.show({
                        index: e,
                        slow: t.altKey
                    })
                }
            }), In = X(fn, {
                onEnd: function(t, e) {
                    Ke(), Ge();
                    var i = m(mn) + .25 * e;
                    mn.css(r(s(i, Nn.min, Nn.max))), ji && ei(fn, M(i, Nn.min, Nn.max)), In.prevent = {
                        "<": i >= Nn.max,
                        ">": i <= Nn.min
                    }, clearTimeout(In.t), In.t = setTimeout(function() {
                        Be.l = i, ye(i, !0)
                    }, Ne), ye(i)
                }
            }), sn.hover(function() {
                setTimeout(function() {
                    Xi || ni(!(Yi = !0))
                }, 0)
            }, function() {
                Yi && ni(!(Yi = !1))
            }), I(hn, function(t) {
                q(t), li.call(this, t)
            }, {
                onStart: function() {
                    Ke(), $n.control = !0
                },
                onTouchEnd: Ge
            }), hn.each(function() {
                F(this, function(t) {
                    li.call(this, t)
                }), ci(this)
            }), F(yn, Gi.toggleFullScreen), ci(yn), n.each("load push pop shift unshift reverse sort splice".split(" "), function(t, e) {
                Gi[e] = function() {
                    return pi = pi || [], "load" !== e ? Array.prototype[e].apply(pi, arguments) : arguments[0] && "object" == typeof arguments[0] && arguments[0].length && (pi = P(arguments[0])), di(), Gi
                }
            }), di()
        }, n.fn.fotorama = function(e) {
            return this.each(function() {
                var i = this,
                    o = n(this),
                    a = o.data(),
                    s = a.fotorama;
                s ? s.setOptions(e, !0) : k(function() {
                    return ! function(t) {
                        return 0 === t.offsetWidth && 0 === t.offsetHeight
                    }(i)
                }, function() {
                    a.urtext = o.html(), new n.Fotorama(o, n.extend({}, He, t.fotoramaDefaults, e, a))
                })
            })
        }, n.Fotorama.instances = [], n.Fotorama.cache = {}, n.Fotorama.measures = {}, (n = n || {}).Fotorama = n.Fotorama || {}, n.Fotorama.jst = n.Fotorama.jst || {}, n.Fotorama.jst.style = function(t) {
            var e, i = "";
            return i += ".fotorama" + (null == (e = t.s) ? "" : e) + " .fotorama__nav--thumbs .fotorama__nav__frame{\npadding:" + (null == (e = t.m) ? "" : e) + "px;\nheight:" + (null == (e = t.h) ? "" : e) + "px}\n.fotorama" + (null == (e = t.s) ? "" : e) + " .fotorama__thumb-border{\nheight:" + (null == (e = t.h - t.b * (t.q ? 0 : 2)) ? "" : e) + "px;\nborder-width:" + (null == (e = t.b) ? "" : e) + "px;\nmargin-top:" + (null == (e = t.m) ? "" : e) + "px}"
        }, n.Fotorama.jst.video = function(t) {
            var e = "",
                i = Array.prototype.join;
            return e += '<div class="fotorama__video"><iframe src="',
                function() {
                    e += i.call(arguments, "")
                }(("youtube" == t.type ? t.p + "youtube.com/embed/" + t.id + "?autoplay=1" : "vimeo" == t.type ? t.p + "player.vimeo.com/video/" + t.id + "?autoplay=1&badge=0" : t.id) + (t.s && "custom" != t.type ? "&" + t.s : "")), e += '" frameborder="0" allowfullscreen></iframe></div>\n'
        }, n(function() {
            n("." + J + ':not([data-auto="false"])').fotorama(), "http://" === b() && i.host.match(/\./) && !t.blockFotoramaData && n("body").append('<iframe src="http://data.fotorama.io/?version=' + fotoramaVersion + '" style="display: none;"></iframe>')
        })
    }(window, document, location, "undefined" != typeof jQuery && jQuery),
    function(t) {
        "function" == typeof define && define.amd ? define(["jquery"], function(e) {
            t(e)
        }) : "object" == typeof module && "object" == typeof module.exports ? module.exports = t(require("jquery")) : t(jQuery)
    }(function(t) {
        "use strict";
        var e, i;
        if (t.uaMatch = function(t) {
                t = t.toLowerCase();
                var e = /(edge)\/([\w.]+)/.exec(t) || /(opr)[\/]([\w.]+)/.exec(t) || /(chrome)[ \/]([\w.]+)/.exec(t) || /(version)(applewebkit)[ \/]([\w.]+).*(safari)[ \/]([\w.]+)/.exec(t) || /(webkit)[ \/]([\w.]+).*(version)[ \/]([\w.]+).*(safari)[ \/]([\w.]+)/.exec(t) || /(webkit)[ \/]([\w.]+)/.exec(t) || /(opera)(?:.*version|)[ \/]([\w.]+)/.exec(t) || /(msie) ([\w.]+)/.exec(t) || t.indexOf("trident") >= 0 && /(rv)(?::| )([\w.]+)/.exec(t) || t.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec(t) || [],
                    i = /(ipad)/.exec(t) || /(ipod)/.exec(t) || /(iphone)/.exec(t) || /(kindle)/.exec(t) || /(silk)/.exec(t) || /(android)/.exec(t) || /(windows phone)/.exec(t) || /(win)/.exec(t) || /(mac)/.exec(t) || /(linux)/.exec(t) || /(cros)/.exec(t) || /(playbook)/.exec(t) || /(bb)/.exec(t) || /(blackberry)/.exec(t) || [];
                return {
                    browser: e[5] || e[3] || e[1] || "",
                    version: e[2] || e[4] || "0",
                    versionNumber: e[4] || e[2] || "0",
                    platform: i[0] || ""
                }
            }, e = t.uaMatch(window.navigator.userAgent), i = {}, e.browser && (i[e.browser] = !0, i.version = e.version, i.versionNumber = parseInt(e.versionNumber, 10)), e.platform && (i[e.platform] = !0), (i.android || i.bb || i.blackberry || i.ipad || i.iphone || i.ipod || i.kindle || i.playbook || i.silk || i["windows phone"]) && (i.mobile = !0), (i.cros || i.mac || i.linux || i.win) && (i.desktop = !0), (i.chrome || i.opr || i.safari) && (i.webkit = !0), i.rv || i.edge) {
            var n = "msie";
            e.browser = n, i[n] = !0
        }
        if (i.safari && i.blackberry) {
            var o = "blackberry";
            e.browser = o, i[o] = !0
        }
        if (i.safari && i.playbook) {
            var a = "playbook";
            e.browser = a, i[a] = !0
        }
        if (i.bb) {
            var s = "blackberry";
            e.browser = s, i[s] = !0
        }
        if (i.opr) {
            var r = "opera";
            e.browser = r, i[r] = !0
        }
        if (i.safari && i.android) {
            var l = "android";
            e.browser = l, i[l] = !0
        }
        if (i.safari && i.kindle) {
            var c = "kindle";
            e.browser = c, i[c] = !0
        }
        if (i.safari && i.silk) {
            var d = "silk";
            e.browser = d, i[d] = !0
        }
        return i.name = e.browser, i.platform = e.platform, t.browser = i, i
    }),
    function(t) {
        t.fn.addBack = t.fn.addBack || t.fn.andSelf, t.fn.extend({
            actual: function(e, i) {
                if (!this[e]) throw '$.actual => The jQuery method "' + e + '" you called does not exist';
                var n, o, a = t.extend({
                        absolute: !1,
                        clone: !1,
                        includeMargin: !1
                    }, i),
                    s = this.eq(0);
                if (!0 === a.clone) n = function() {
                    s = s.clone().attr("style", "position: absolute !important; top: -1000 !important; ").appendTo("body")
                }, o = function() {
                    s.remove()
                };
                else {
                    var r, l = [],
                        c = "";
                    n = function() {
                        r = s.parents().addBack().filter(":hidden"), c += "visibility: hidden !important; display: block !important; ", !0 === a.absolute && (c += "position: absolute !important; "), r.each(function() {
                            var e = t(this),
                                i = e.attr("style");
                            l.push(i), e.attr("style", i ? i + ";" + c : c)
                        })
                    }, o = function() {
                        r.each(function(e) {
                            var i = t(this),
                                n = l[e];
                            void 0 === n ? i.removeAttr("style") : i.attr("style", n)
                        })
                    }
                }
                n();
                var d = /(outer)/.test(e) ? s[e](a.includeMargin) : s[e]();
                return o(), d
            }
        })
    }(jQuery),
    function(t) {
        t.fn.bsPinning = function(e) {
            var i = {
                    smart: !0,
                    onPin: function() {},
                    onTop: t.noop,
                    onUnpin: function() {},
                    onNormal: function() {},
                    wrapper_class: ""
                },
                n = t.extend({}, i, e),
                o = {
                    lastScrollTop: t(window).scrollTop(),
                    status: ""
                },
                a = {
                    isNormal: function() {
                        return "normal" === o.status
                    },
                    isUnpinned: function() {
                        return "unpinned" === o.status
                    },
                    isPinned: function() {
                        return "pinned" === o.status
                    },
                    prepare: function() {
                        o.target.addClass("bs-pinning-block"), n.smart && o.target.addClass("smart"), o.wrapper_height = o.target.actual("outerHeight"), o.wrapper.css("height", o.wrapper_height), n.wrapper_class && o.wrapper.addClass(n.wrapper_class), a.pinHandler()
                    },
                    pin: function() {
                        o.status = "pinned", o.target.removeClass("unpinned normal unpinned-no-transition").addClass("pinned"), n.onPin.call(o.target), t("body").hasClass("admin-bar") && window.innerWidth > 600 && o.target.css("top", t("#wpadminbar").actual("outerHeight"))
                    },
                    unpin: function() {
                        o.status = "unpinned", o.target.removeClass("pinned top normal").addClass("unpinned"), n.onUnpin.call(o.target)
                    },
                    top: function() {
                        o.status = "top", n.onTop.call(o.target)
                    },
                    normal: function() {
                        o.status = "normal", o.target.removeClass("pinned top unpinned").addClass("normal unpinned-no-transition"), n.onNormal.call(o.target), t("body").hasClass("admin-bar") && o.target.css("top", "")
                    },
                    fire: function(t) {
                        if (this.prevMethodName === t) return !1;
                        if ("function" != typeof this[t]) return !1;
                        this.prevMethodName = t;
                        var e = Array.prototype.slice.call(arguments, 1);
                        return this[t].apply(this, e)
                    },
                    pinHandler: function() {
                        var e = t(window).scrollTop(),
                            i = o.wrapper.offset().top;
                        n.smart && !o.wrapper.hasClass("stop-smarty-pinning") ? e <= 0 ? (a.fire("top"), a.fire("normal")) : e >= o.lastScrollTop && i + o.wrapper_height >= e ? a.fire("normal") : e < o.lastScrollTop && i >= e ? a.fire("normal") : e >= o.lastScrollTop ? a.fire("unpin") : a.fire("pin") : 0 === e ? (a.fire("top"), a.fire("normal")) : e > i + 1 ? a.fire("pin") : e < i && a.fire("normal"), o.lastScrollTop = e
                    }
                };
            return this.each(function() {
                t(this).wrap("<div class='bs-pinning-wrapper'></div>"), o.wrapper = t(this).closest(".bs-pinning-wrapper"), o.target = t(this), a.prepare(), t(window).on("scroll", a.pinHandler)
            })
        }
    }(jQuery),
    function(t, e) {
        "function" == typeof define && define.amd ? define("ev-emitter/ev-emitter", e) : "object" == typeof module && module.exports ? module.exports = e() : t.EvEmitter = e()
    }(this, function() {
        function t() {}
        var e = t.prototype;
        return e.on = function(t, e) {
            if (t && e) {
                var i = this._events = this._events || {},
                    n = i[t] = i[t] || [];
                return -1 == n.indexOf(e) && n.push(e), this
            }
        }, e.once = function(t, e) {
            if (t && e) {
                this.on(t, e);
                var i = this._onceEvents = this._onceEvents || {};
                return (i[t] = i[t] || [])[e] = !0, this
            }
        }, e.off = function(t, e) {
            var i = this._events && this._events[t];
            if (i && i.length) {
                var n = i.indexOf(e);
                return -1 != n && i.splice(n, 1), this
            }
        }, e.emitEvent = function(t, e) {
            var i = this._events && this._events[t];
            if (i && i.length) {
                var n = 0,
                    o = i[n];
                e = e || [];
                for (var a = this._onceEvents && this._onceEvents[t]; o;) {
                    var s = a && a[o];
                    s && (this.off(t, o), delete a[o]), o.apply(this, e), o = i[n += s ? 0 : 1]
                }
                return this
            }
        }, t
    }),
    function(t, e) {
        "use strict";
        "function" == typeof define && define.amd ? define(["ev-emitter/ev-emitter"], function(i) {
            return e(t, i)
        }) : "object" == typeof module && module.exports ? module.exports = e(t, require("ev-emitter")) : t.imagesLoaded = e(t, t.EvEmitter)
    }(window, function(t, e) {
        function i(t, e) {
            for (var i in e) t[i] = e[i];
            return t
        }

        function n(t, e, o) {
            return this instanceof n ? ("string" == typeof t && (t = document.querySelectorAll(t)), this.elements = function(t) {
                var e = [];
                if (Array.isArray(t)) e = t;
                else if ("number" == typeof t.length)
                    for (var i = 0; i < t.length; i++) e.push(t[i]);
                else e.push(t);
                return e
            }(t), this.options = i({}, this.options), "function" == typeof e ? o = e : i(this.options, e), o && this.on("always", o), this.getImages(), s && (this.jqDeferred = new s.Deferred), void setTimeout(function() {
                this.check()
            }.bind(this))) : new n(t, e, o)
        }

        function o(t) {
            this.img = t
        }

        function a(t, e) {
            this.url = t, this.element = e, this.img = new Image
        }
        var s = t.jQuery,
            r = t.console;
        (n.prototype = Object.create(e.prototype)).options = {}, n.prototype.getImages = function() {
            this.images = [], this.elements.forEach(this.addElementImages, this)
        }, n.prototype.addElementImages = function(t) {
            "IMG" == t.nodeName && this.addImage(t), !0 === this.options.background && this.addElementBackgroundImages(t);
            var e = t.nodeType;
            if (e && l[e]) {
                for (var i = t.querySelectorAll("img"), n = 0; n < i.length; n++) {
                    var o = i[n];
                    this.addImage(o)
                }
                if ("string" == typeof this.options.background) {
                    var a = t.querySelectorAll(this.options.background);
                    for (n = 0; n < a.length; n++) {
                        var s = a[n];
                        this.addElementBackgroundImages(s)
                    }
                }
            }
        };
        var l = {
            1: !0,
            9: !0,
            11: !0
        };
        return n.prototype.addElementBackgroundImages = function(t) {
            var e = getComputedStyle(t);
            if (e)
                for (var i = /url\((['"])?(.*?)\1\)/gi, n = i.exec(e.backgroundImage); null !== n;) {
                    var o = n && n[2];
                    o && this.addBackground(o, t), n = i.exec(e.backgroundImage)
                }
        }, n.prototype.addImage = function(t) {
            var e = new o(t);
            this.images.push(e)
        }, n.prototype.addBackground = function(t, e) {
            var i = new a(t, e);
            this.images.push(i)
        }, n.prototype.check = function() {
            function t(t, i, n) {
                setTimeout(function() {
                    e.progress(t, i, n)
                })
            }
            var e = this;
            return this.progressedCount = 0, this.hasAnyBroken = !1, this.images.length ? void this.images.forEach(function(e) {
                e.once("progress", t), e.check()
            }) : void this.complete()
        }, n.prototype.progress = function(t, e, i) {
            this.progressedCount++, this.hasAnyBroken = this.hasAnyBroken || !t.isLoaded, this.emitEvent("progress", [this, t, e]), this.jqDeferred && this.jqDeferred.notify && this.jqDeferred.notify(this, t), this.progressedCount == this.images.length && this.complete(), this.options.debug && r && r.log("progress: " + i, t, e)
        }, n.prototype.complete = function() {
            var t = this.hasAnyBroken ? "fail" : "done";
            if (this.isComplete = !0, this.emitEvent(t, [this]), this.emitEvent("always", [this]), this.jqDeferred) {
                var e = this.hasAnyBroken ? "reject" : "resolve";
                this.jqDeferred[e](this)
            }
        }, o.prototype = Object.create(e.prototype), o.prototype.check = function() {
            return this.getIsImageComplete() ? void this.confirm(0 !== this.img.naturalWidth, "naturalWidth") : (this.proxyImage = new Image, this.proxyImage.addEventListener("load", this), this.proxyImage.addEventListener("error", this), this.img.addEventListener("load", this), this.img.addEventListener("error", this), void(this.proxyImage.src = this.img.src))
        }, o.prototype.getIsImageComplete = function() {
            return this.img.complete && void 0 !== this.img.naturalWidth
        }, o.prototype.confirm = function(t, e) {
            this.isLoaded = t, this.emitEvent("progress", [this, this.img, e])
        }, o.prototype.handleEvent = function(t) {
            var e = "on" + t.type;
            this[e] && this[e](t)
        }, o.prototype.onload = function() {
            this.confirm(!0, "onload"), this.unbindEvents()
        }, o.prototype.onerror = function() {
            this.confirm(!1, "onerror"), this.unbindEvents()
        }, o.prototype.unbindEvents = function() {
            this.proxyImage.removeEventListener("load", this), this.proxyImage.removeEventListener("error", this), this.img.removeEventListener("load", this), this.img.removeEventListener("error", this)
        }, a.prototype = Object.create(o.prototype), a.prototype.check = function() {
            this.img.addEventListener("load", this), this.img.addEventListener("error", this), this.img.src = this.url;
            this.getIsImageComplete() && (this.confirm(0 !== this.img.naturalWidth, "naturalWidth"), this.unbindEvents())
        }, a.prototype.unbindEvents = function() {
            this.img.removeEventListener("load", this), this.img.removeEventListener("error", this)
        }, a.prototype.confirm = function(t, e) {
            this.isLoaded = t, this.emitEvent("progress", [this, this.element, e])
        }, n.makeJQueryPlugin = function(e) {
            (e = e || t.jQuery) && (s = e, s.fn.imagesLoaded = function(t, e) {
                return new n(this, t, e).jqDeferred.promise(s(this))
            })
        }, n.makeJQueryPlugin(), n
    }),
    function(t) {
        t.betterNewsticker = function(e, i) {
            var n = this;
            n.$el = t(e), n.el = e, n.$el.data("betterNewsticker", n), n.init = function() {
                n.options = t.extend({}, t.betterNewsticker.defaultOptions, i), void 0 !== n.$el.data("speed") && (n.options.speed = n.$el.data("speed")), n.$el.find("li.active").length || n.$el.find("li:first").addClass("active"), window.setInterval(function() {
                    n.next()
                }, n.options.speed), n.options.control_nav && (n.$el.append('<div class="control-nav"><span class="prev">' + n.options.prev_label + '</span><span class="next">' + n.options.next_label + "</span></div>"), n.$el.on("click", ".control-nav .prev", function() {
                    n.prev()
                }), n.$el.on("click", ".control-nav .next", function() {
                    n.next()
                }))
            }, n.next = function() {
                var t = n.$el.find("li.active").next();
                t.length || (t = n.$el.find("li:first")), n.$el.find("li.active").removeClass("active"), t.addClass("active").fadeIn()
            }, n.prev = function() {
                var t = n.$el.find("li.active").prev();
                t.length || (t = n.$el.find("li:last")), n.$el.find("li.active").removeClass("active"), t.addClass("active").fadeIn()
            }, n.init()
        }, t.betterNewsticker.defaultOptions = {
            speed: 8e3,
            control_nav: !1,
            prev_label: '<i class="fa fa-angle-left"></i>',
            next_label: '<i class="fa fa-angle-right"></i>'
        }, t.fn.betterNewsticker = function(e) {
            return this.each(function() {
                new t.betterNewsticker(this, e)
            })
        }
    }(jQuery),
    function(t, e, i) {
        t.fn.simplyScroll = function(e) {
            return this.each(function() {
                new t.simplyScroll(this, e)
            })
        };
        var n = {
            customClass: "simply-scroll",
            frameRate: 24,
            speed: 1,
            orientation: "horizontal",
            auto: !0,
            autoMode: "loop",
            manualMode: "end",
            direction: "forwards",
            pauseOnHover: !0,
            pauseOnTouch: !0,
            pauseButton: !1,
            startOnLoad: !1
        };
        t.simplyScroll = function(i, o) {
            var a = this;
            this.o = t.extend({}, n, o || {}), this.isAuto = !1 !== this.o.auto && null !== this.o.autoMode.match(/^loop|bounce$/), this.isRTL = (this.isHorizontal = null !== this.o.orientation.match(/^horizontal|vertical$/) && this.o.orientation == n.orientation) && "rtl" == t("html").attr("dir"), this.isForwards = !this.isAuto || this.isAuto && null !== this.o.direction.match(/^forwards|backwards$/) && this.o.direction == n.direction && !this.isRTL, this.isLoop = this.isAuto && "loop" == this.o.autoMode || !this.isAuto && "loop" == this.o.manualMode, this.events = (this.supportsTouch = "createTouch" in document) ? {
                start: "touchstart MozTouchDown",
                move: "touchmove MozTouchMove",
                end: "touchend touchcancel MozTouchRelease"
            } : {
                start: "mouseenter",
                end: "mouseleave"
            }, this.$list = t(i);
            var s = this.$list.children();
            if (this.$list.addClass("simply-scroll-list").wrap('<div class="simply-scroll-clip"></div>').parent().wrap('<div class="' + this.o.customClass + ' simply-scroll-container"></div>'), this.isAuto ? this.o.pauseButton && (this.$list.parent().parent().prepend('<div class="simply-scroll-btn simply-scroll-btn-pause"></div>'), this.o.pauseOnHover = !1) : this.$list.parent().parent().prepend('<div class="simply-scroll-forward"></div>').prepend('<div class="simply-scroll-back"></div>'), 1 < s.length) {
                var r = !1,
                    l = 0;
                this.isHorizontal ? (s.each(function() {
                    l += t(this).outerWidth(!0)
                }), r = s.eq(0).outerWidth(!0) * s.length !== l) : (s.each(function() {
                    l += t(this).outerHeight(!0)
                }), r = s.eq(0).outerHeight(!0) * s.length !== l), r && (this.$list = this.$list.wrap("<div></div>").parent().addClass("simply-scroll-list"), this.isHorizontal ? this.$list.children().css({
                    float: "left",
                    width: l + "px"
                }) : this.$list.children().css({
                    height: l + "px"
                }))
            }
            this.o.startOnLoad ? t(e).load(function() {
                a.init()
            }) : this.init()
        }, t.simplyScroll.fn = t.simplyScroll.prototype = {}, t.simplyScroll.fn.extend = t.simplyScroll.extend = t.extend, t.simplyScroll.fn.extend({
            init: function() {
                this.$items = this.$list.children(), this.$clip = this.$list.parent(), this.$container = this.$clip.parent(), this.$btnBack = t(".simply-scroll-back", this.$container), this.$btnForward = t(".simply-scroll-forward", this.$container), this.isHorizontal ? (this.itemMax = this.$items.eq(0).outerWidth(!0), this.clipMax = this.$clip.width(), this.dimension = "width", this.moveBackClass = "simply-scroll-btn-left", this.moveForwardClass = "simply-scroll-btn-right", this.scrollPos = "Left") : (this.itemMax = this.$items.eq(0).outerHeight(!0), this.clipMax = this.$clip.height(), this.dimension = "height", this.moveBackClass = "simply-scroll-btn-up", this.moveForwardClass = "simply-scroll-btn-down", this.scrollPos = "Top"), this.posMin = 0, this.posMax = this.$items.length * this.itemMax;
                var e = Math.ceil(this.clipMax / this.itemMax);
                if (this.isAuto && "loop" == this.o.autoMode) this.$list.css(this.dimension, this.posMax + this.itemMax * e + "px"), this.posMax += this.clipMax - this.o.speed, this.isForwards ? (this.$items.slice(0, e).clone(!0).appendTo(this.$list), this.resetPosition = 0) : (this.$items.slice(-e).clone(!0).prependTo(this.$list), this.resetPosition = this.$items.length * this.itemMax, this.isRTL && (this.$clip[0].dir = "ltr", this.$items.css("float", "right")));
                else if (this.isAuto || "loop" != this.o.manualMode) this.$list.css(this.dimension, this.posMax + "px"), this.isForwards ? this.resetPosition = 0 : (this.resetPosition = this.$items.length * this.itemMax, this.isRTL && (this.$clip[0].dir = "ltr", this.$items.css("float", "right")));
                else {
                    this.posMax += this.itemMax * e, this.$list.css(this.dimension, this.posMax + this.itemMax * e + "px"), this.posMax += this.clipMax - this.o.speed, this.$items.slice(0, e).clone(!0).appendTo(this.$list), this.$items.slice(-e).clone(!0).prependTo(this.$list), this.resetPositionForwards = this.resetPosition = e * this.itemMax, this.resetPositionBackwards = this.$items.length * this.itemMax;
                    var n = this;
                    this.$btnBack.bind(this.events.start, function() {
                        n.isForwards = !1, n.resetPosition = n.resetPositionBackwards
                    }), this.$btnForward.bind(this.events.start, function() {
                        n.isForwards = !0, n.resetPosition = n.resetPositionForwards
                    })
                }
                if (this.resetPos(), this.interval = null, this.intervalDelay = Math.floor(1e3 / this.o.frameRate), this.isAuto || "end" != this.o.manualMode)
                    for (; 0 != this.itemMax % this.o.speed;)
                        if (this.o.speed--, 0 === this.o.speed) {
                            this.o.speed = 1;
                            break
                        }
                if (n = this, this.trigger = null, this.funcMoveBack = function(t) {
                        t !== i && t.preventDefault(), n.trigger = n.isAuto || "end" != n.o.manualMode ? null : this, n.isAuto ? n.isForwards ? n.moveBack() : n.moveForward() : n.moveBack()
                    }, this.funcMoveForward = function(t) {
                        t !== i && t.preventDefault(), n.trigger = n.isAuto || "end" != n.o.manualMode ? null : this, n.isAuto ? n.isForwards ? n.moveForward() : n.moveBack() : n.moveForward()
                    }, this.funcMovePause = function() {
                        n.movePause()
                    }, this.funcMoveStop = function() {
                        n.moveStop()
                    }, this.funcMoveResume = function() {
                        n.moveResume()
                    }, this.isAuto) {
                    this.paused = !1;
                    var o = function() {
                        return !1 === n.paused ? (n.paused = !0, n.funcMovePause()) : (n.paused = !1, n.funcMoveResume()), n.paused
                    };
                    if (this.supportsTouch && this.$items.find("a").length && (this.supportsTouch = !1), this.isAuto && this.o.pauseOnHover && !this.supportsTouch) this.$clip.bind(this.events.start, this.funcMovePause).bind(this.events.end, this.funcMoveResume);
                    else if (this.isAuto && this.o.pauseOnTouch && !this.o.pauseButton && this.supportsTouch) {
                        var a, s;
                        this.$clip.bind(this.events.start, function(t) {
                            o();
                            var e = t.originalEvent.touches[0];
                            a = n.isHorizontal ? e.pageX : e.pageY, s = n.$clip[0]["scroll" + n.scrollPos], t.stopPropagation(), t.preventDefault()
                        }).bind(this.events.move, function(t) {
                            t.stopPropagation(), t.preventDefault(), t = t.originalEvent.touches[0], (t = a - (n.isHorizontal ? t.pageX : t.pageY) + s) < 0 ? t = 0 : t > n.posMax && (t = n.posMax), n.$clip[0]["scroll" + n.scrollPos] = t, n.funcMovePause(), n.paused = !0
                        })
                    } else this.o.pauseButton && (this.$btnPause = t(".simply-scroll-btn-pause", this.$container).bind("click", function(e) {
                        e.preventDefault(), o() ? t(this).addClass("active") : t(this).removeClass("active")
                    }));
                    this.funcMoveForward()
                } else this.$btnBack.addClass("simply-scroll-btn " + this.moveBackClass).bind(this.events.start, this.funcMoveBack).bind(this.events.end, this.funcMoveStop), this.$btnForward.addClass("simply-scroll-btn " + this.moveForwardClass).bind(this.events.start, this.funcMoveForward).bind(this.events.end, this.funcMoveStop), "end" == this.o.manualMode && (this.isRTL ? this.$btnForward.addClass("disabled") : this.$btnBack.addClass("disabled"))
            },
            moveForward: function() {
                var t = this;
                this.movement = "forward", null !== this.trigger && this.$btnBack.removeClass("disabled"), t.interval = setInterval(function() {
                    t.$clip[0]["scroll" + t.scrollPos] < t.posMax - t.clipMax ? t.$clip[0]["scroll" + t.scrollPos] += t.o.speed : t.isLoop ? t.resetPos() : t.moveStop(t.movement)
                }, t.intervalDelay)
            },
            moveBack: function() {
                var t = this;
                this.movement = "back", null !== this.trigger && this.$btnForward.removeClass("disabled"), t.interval = setInterval(function() {
                    t.$clip[0]["scroll" + t.scrollPos] > t.posMin ? t.$clip[0]["scroll" + t.scrollPos] -= t.o.speed : t.isLoop ? t.resetPos() : t.moveStop(t.movement)
                }, t.intervalDelay)
            },
            movePause: function() {
                clearInterval(this.interval)
            },
            moveStop: function(e) {
                this.movePause(), null !== this.trigger && (void 0 !== e && t(this.trigger).addClass("disabled"), this.trigger = null), this.isAuto && "bounce" == this.o.autoMode && ("forward" == e ? this.moveBack() : this.moveForward())
            },
            moveResume: function() {
                "forward" == this.movement ? this.moveForward() : this.moveBack()
            },
            resetPos: function() {
                this.$clip[0]["scroll" + this.scrollPos] = this.resetPosition
            }
        })
    }(jQuery, window),
    function(t, e, i) {
        "use strict";
        var n = t(e),
            o = e.document,
            a = t(o),
            s = function() {
                for (var t = 3, e = o.createElement("div"), i = e.getElementsByTagName("i"); e.innerHTML = "\x3c!--[if gt IE " + ++t + "]><i></i><![endif]--\x3e", i[0];);
                return t > 4 ? t : void 0
            }(),
            r = function() {
                var t = e.pageXOffset !== i ? e.pageXOffset : "CSS1Compat" == o.compatMode ? e.document.documentElement.scrollLeft : e.document.body.scrollLeft,
                    n = e.pageYOffset !== i ? e.pageYOffset : "CSS1Compat" == o.compatMode ? e.document.documentElement.scrollTop : e.document.body.scrollTop;
                void 0 === r.x && (r.x = t, r.y = n), void 0 === r.distanceX ? (r.distanceX = t, r.distanceY = n) : (r.distanceX = t - r.x, r.distanceY = n - r.y);
                var a = r.x - t,
                    s = r.y - n;
                r.direction = 0 > a ? "right" : a > 0 ? "left" : 0 >= s ? "down" : s > 0 ? "up" : "first", r.x = t, r.y = n
            };
        n.on("scroll", r), t.fn.style = function(i) {
            if (!i) return null;
            var n, a = t(this),
                s = a.clone().css("display", "none");
            s.find("input:radio").attr("name", "copy-" + Math.floor(100 * Math.random() + 1)), a.after(s);
            var r = function(t, i) {
                var n;
                return t.currentStyle ? n = t.currentStyle[i.replace(/-\w/g, function(t) {
                    return t.toUpperCase().replace("-", "")
                })] : e.getComputedStyle && (n = o.defaultView.getComputedStyle(t, null).getPropertyValue(i)), n = /margin/g.test(i) ? parseInt(n) === a[0].offsetLeft ? n : "auto" : n
            };
            return "string" == typeof i ? n = r(s[0], i) : (n = {}, t.each(i, function(t, e) {
                n[e] = r(s[0], e)
            })), s.remove(), n || null
        }, t.fn.extend({
            hcSticky: function(o) {
                return 0 == this.length ? this : (this.pluginOptions("hcSticky", {
                    top: 0,
                    bottom: 0,
                    bottomEnd: 0,
                    innerTop: 0,
                    innerSticker: null,
                    className: "sticky",
                    wrapperClassName: "wrapper-sticky",
                    stickTo: null,
                    responsive: !0,
                    followScroll: !0,
                    offResolutions: null,
                    onStart: t.noop,
                    onStop: t.noop,
                    on: !0,
                    fn: null
                }, o || {}, {
                    reinit: function() {
                        t(this).hcSticky()
                    },
                    stop: function() {
                        t(this).pluginOptions("hcSticky", {
                            on: !1
                        }).each(function() {
                            var e = t(this),
                                i = e.pluginOptions("hcSticky"),
                                n = e.parent("." + i.wrapperClassName),
                                o = e.offset().top - n.offset().top;
                            e.stop().css({
                                position: "absolute",
                                top: o,
                                bottom: "auto",
                                left: "auto",
                                right: "auto"
                            }).removeClass(i.className)
                        })
                    },
                    off: function() {
                        t(this).pluginOptions("hcSticky", {
                            on: !1
                        }).each(function() {
                            var e = t(this),
                                i = e.pluginOptions("hcSticky"),
                                n = e.parent("." + i.wrapperClassName);
                            e.stop().css({
                                position: "relative",
                                top: "auto",
                                bottom: "auto",
                                left: "auto",
                                right: "auto"
                            }).removeClass(i.className), n.css("height", "auto")
                        })
                    },
                    on: function() {
                        t(this).each(function() {
                            t(this).pluginOptions("hcSticky", {
                                on: !0,
                                remember: {
                                    offsetTop: n.scrollTop()
                                }
                            }).hcSticky()
                        })
                    },
                    destroy: function() {
                        var e = t(this),
                            i = e.pluginOptions("hcSticky"),
                            o = e.parent("." + i.wrapperClassName);
                        e.removeData("hcStickyInit").stop().css({
                            position: o.css("position"),
                            top: o.css("top"),
                            bottom: o.css("bottom"),
                            left: o.css("left"),
                            right: o.css("right")
                        }).removeClass(i.className), n.off("resize", i.fn.resize).off("scroll", i.fn.scroll), e.unwrap()
                    }
                }), o && void 0 !== o.on && (o.on ? this.hcSticky("on") : this.hcSticky("off")), "string" == typeof o ? this : this.each(function() {
                    var o = t(this),
                        l = o.pluginOptions("hcSticky"),
                        c = function() {
                            var t = o.parent("." + l.wrapperClassName);
                            return o.trigger("hcSticky-reinit", [o, t, l]), t.length > 0 && (t.stop().css({
                                height: o.outerHeight(!0),
                                width: function() {
                                    var e = t.style("width");
                                    return e.indexOf("%") >= 0 || "auto" == e ? ("border-box" == o.css("box-sizing") || "border-box" == o.css("-moz-box-sizing") ? o.css("width", t.width()) : o.css("width", t.width() - parseInt(o.css("padding-left") - parseInt(o.css("padding-right")))), e) : o.outerWidth(!0)
                                }()
                            }), t)
                        }() || function() {
                            var e = o.style(["width", "margin-left", "left", "right", "top", "bottom", "float", "display"]),
                                i = o.css("display"),
                                n = t("<div>", {
                                    class: l.wrapperClassName
                                }).stop().css({
                                    display: i,
                                    height: o.outerHeight(!0),
                                    width: e.width.indexOf("%") >= 0 || "auto" == e.width && "inline-block" != i && "inline" != i ? (o.css("width", parseFloat(o.css("width"))), e.width) : "auto" != e.width || "inline-block" != i && "inline" != i ? "auto" == e["margin-left"] ? o.outerWidth() : o.outerWidth(!0) : o.width(),
                                    margin: e["margin-left"] ? "auto" : null,
                                    position: function() {
                                        var t = o.css("position");
                                        return "static" == t ? "relative" : t
                                    }(),
                                    float: e.float || null,
                                    left: e.left,
                                    right: e.right,
                                    top: e.top,
                                    bottom: e.bottom,
                                    "vertical-align": "top"
                                });
                            return o.wrap(n), 7 === s && 0 === t("head").find("style#hcsticky-iefix").length && t('<style id="hcsticky-iefix">.' + l.wrapperClassName + " {zoom: 1;}</style>").appendTo("head"), o.parent()
                        }();
                    if (!o.data("hcStickyInit")) {
                        o.data("hcStickyInit", !0);
                        var d = !(!l.stickTo || !("document" == l.stickTo || l.stickTo.nodeType && 9 == l.stickTo.nodeType || "object" == typeof l.stickTo && l.stickTo instanceof("undefined" != typeof HTMLDocument ? HTMLDocument : Document))),
                            u = l.stickTo ? d ? a : "string" == typeof l.stickTo ? t(l.stickTo) : l.stickTo : c.parent();
                        o.stop().css({
                            top: "auto",
                            bottom: "auto",
                            left: "auto",
                            right: "auto"
                        }), n.load(function() {
                            o.outerHeight(!0) > u.height() && (c.css("height", o.outerHeight(!0)), o.hcSticky("reinit"))
                        });
                        var h = function(t) {
                                o.hasClass(l.className) || (t = t || {}, o.stop().css({
                                    position: "fixed",
                                    top: t.top || 0,
                                    left: t.left || c.offset().left
                                }).addClass(l.className), l.onStart.apply(o[0]), c.addClass("sticky-active"))
                            },
                            p = function(t) {
                                (t = t || {}).position = t.position || "absolute", t.top = t.top || 0, t.left = t.left || 0, "fixed" != o.css("position") && parseInt(o.css("top")) == t.top || (o.stop().css({
                                    position: t.position,
                                    top: t.top,
                                    left: t.left
                                }).removeClass(l.className), l.onStop.apply(o[0]), c.removeClass("sticky-active"))
                            },
                            f = !1,
                            m = !1,
                            v = function() {
                                if (b(), g(), l.on) {
                                    if (l.responsive) {
                                        m || (m = o.clone().attr("style", "").css({
                                            visibility: "hidden",
                                            height: 0,
                                            overflow: "hidden",
                                            paddingTop: 0,
                                            paddingBottom: 0,
                                            marginTop: 0,
                                            marginBottom: 0
                                        }), c.after(m));
                                        var t = c.style("width"),
                                            e = m.style("width");
                                        "auto" == e && "auto" != t && (e = parseInt(o.css("width"))), e != t && c.width(e), f && clearTimeout(f), f = setTimeout(function() {
                                            f = !1, m.remove(), m = !1
                                        }, 250)
                                    }
                                    if ("fixed" == o.css("position") ? o.css("left", c.offset().left) : o.css("left", 0), o.outerWidth(!0) != c.width()) {
                                        var i = "border-box" == o.css("box-sizing") || "border-box" == o.css("-moz-box-sizing") ? c.width() : c.width() - parseInt(o.css("padding-left")) - parseInt(o.css("padding-right"));
                                        i = i - parseInt(o.css("margin-left")) - parseInt(o.css("margin-right")), o.css("width", i)
                                    }
                                }
                            };
                        o.pluginOptions("hcSticky", {
                            fn: {
                                scroll: function() {
                                    if (l.on && o.is(":visible")) {
                                        if (o.outerHeight(!0) >= u.height()) return void p();
                                        var e, i = l.innerSticker ? t(l.innerSticker).position().top : l.innerTop ? l.innerTop : 0,
                                            a = c.offset().top,
                                            s = u.height() - l.bottomEnd + (d ? 0 : a),
                                            f = c.offset().top - l.top + i,
                                            m = o.outerHeight(!0) + l.bottom,
                                            v = n.height(),
                                            g = n.scrollTop(),
                                            b = o.offset().top,
                                            w = b - g;
                                        if (void 0 !== l.remember && l.remember) {
                                            var y = b - l.top - i;
                                            return void(m - i > v && l.followScroll ? g > y && g + v <= y + o.height() && (l.remember = !1) : l.remember.offsetTop > y ? y >= g && (h({
                                                top: l.top - i
                                            }), l.remember = !1) : g >= y && (h({
                                                top: l.top - i
                                            }), l.remember = !1))
                                        }
                                        g > f ? s + l.bottom - (l.followScroll && m > v ? 0 : l.top) <= g + m - i - (m - i > v - (f - i) && l.followScroll && (e = m - v - i) > 0 ? e : 0) ? p({
                                            top: s - m + l.bottom - a
                                        }) : m - i > v && l.followScroll ? v >= w + m ? "down" == r.direction ? h({
                                            top: v - m
                                        }) : 0 > w && "fixed" == o.css("position") && p({
                                            top: b - (f + l.top - i) - r.distanceY
                                        }) : "up" == r.direction && b >= g + l.top - i ? h({
                                            top: l.top - i
                                        }) : "down" == r.direction && b + m > v && "fixed" == o.css("position") && p({
                                            top: b - (f + l.top - i) - r.distanceY
                                        }) : h({
                                            top: l.top - i
                                        }) : p()
                                    }
                                },
                                resize: v
                            }
                        });
                        var g = function() {
                            if (l.offResolutions) {
                                t.isArray(l.offResolutions) || (l.offResolutions = [l.offResolutions]);
                                var e = !0;
                                t.each(l.offResolutions, function(t, i) {
                                    0 > i ? n.width() < -1 * i && (e = !1, o.hcSticky("off")) : n.width() > i && (e = !1, o.hcSticky("off"))
                                }), e && !l.on && o.hcSticky("on")
                            }
                        };
                        g(), n.on("resize", v);
                        var b = function() {
                            var o = !1;
                            t._data(e, "events").scroll != i && t.each(t._data(e, "events").scroll, function(t, e) {
                                e.handler == l.fn.scroll && (o = !0)
                            }), o || (l.fn.scroll(!0), n.on("scroll", l.fn.scroll))
                        };
                        b()
                    }
                }))
            }
        })
    }(jQuery, this),
    function(t, e) {
        "use strict";
        t.fn.extend({
            pluginOptions: function(e, i, n, o) {
                return this.data(e) || this.data(e, {}), e && void 0 === i ? this.data(e).options : "object" == typeof(n = n || i || {}) || void 0 === n ? this.each(function() {
                    var a = t(this);
                    a.data(e).options ? a.data(e, t.extend(a.data(e), {
                        options: t.extend(a.data(e).options, n || {})
                    })) : (a.data(e, {
                        options: t.extend(i, n || {})
                    }), o && (a.data(e).commands = o))
                }) : "string" == typeof n ? this.each(function() {
                    var i = t(this).data(e).commands;
                    i && i[n] && i[n].call(this)
                }) : this
            }
        })
    }(jQuery), jQuery,
    function(t) {
        function e(e, i) {
            this.element = e[0], this.$element = e, this.overflowElements = [], this.elementsWidth = 0, this.lastExecutedBR = 0, this.handleBR = !1, this.enable = !0, this.options = t.extend({
                childClass: !1,
                mustDisplayClass: !1,
                menuContainerTag: "div",
                menuContainerClass: "bs-pretty-tabs-container",
                menuContainerPosition: "beginning",
                itemsWrapperSelector: !1,
                moreContainer: '<a href="#" class="bs-pretty-tabs-more">More <i class="fa fa-angle-down" aria-hidden="true"></i></a><div class="bs-pretty-tabs-elements"></div>',
                getContainerWidth: function(t) {
                    return t
                },
                initWrapperContainer: function(t) {
                    return t
                },
                styleChangesAt: []
            }, i), this.options.styleChangesAt.length && (this.handleBR = !0, this.options.styleChangesAt = this.options.styleChangesAt.sort(function(t, e) {
                return t > e
            })), this.init()
        }
        t.extend(e.prototype, {
            init: function() {
                function e() {
                    if (i.handleBR && i.enable) {
                        var e = i.getCurrentBR();
                        e !== i.lastExecutedBR && (i.retrieveElements(!0), i.getItems().each(function() {
                            var e = t(this);
                            i._updateElementWidth(e)
                        }), i.lastExecutedBR = e)
                    }
                    i.handlePrettyTabs()
                }
                var i = this;
                t(window).on("resize.bsPrettyTabs", e), i.$element.addClass("bs-pretty-tabs bs-pretty-tabs-initialized"), e()
            },
            getItemsWrapper: function() {
                return this.options.itemsWrapperSelector ? this.$element.find(this.options.itemsWrapperSelector) : this.$element
            },
            getItems: function(t) {
                return this.getItemsWrapper().children(t)
            },
            getCurrentBR: function() {
                var t = 0;
                for (i = 0; i < this.options.styleChangesAt.length; i++)
                    if (this.options.styleChangesAt[i] >= window.outerWidth) {
                        t = this.options.styleChangesAt[i];
                        break
                    }
                return t
            },
            handlePrettyTabs: function() {
                var e = this;
                if (e.enable) {
                    e.collectOverflowElements(), e.overflowElements.length ? e.overflowElements.forEach(function(t) {
                        e.moveToInvisibleContainer(t)
                    }) : e.retrieveElements();
                    var i = this._getTotalWidth(),
                        n = this._getMenuLinkWidth(),
                        o = this._getMenuContainer();
                    if (i < n) o.hide();
                    else {
                        var a = i;
                        e._getVisibleElement().each(function() {
                            a -= e._getElementWidth(t(this))
                        }), o[n <= a && e._getInvisibleElements().length ? "show" : "hide"]()
                    }
                    this.$element.trigger("after-pretty-tabs", [this])
                }
            },
            retrieveElements: function(e) {
                var i = this.options.getContainerWidth.call(this, this.$element.width()),
                    n = this.elementsWidth;
                if (this._getInvisibleElements().length) {
                    for (var o = this.getInvisibleElementsContainer().children(), a = !1, s = 0; s < o.length; s++) {
                        var r = t(o[s]),
                            l = n + this._getElementWidth(r);
                        if (!(e || l < i)) break;
                        n = l, this.moveToVisibleContainer(r), a = !0
                    }
                    1 !== o.length || a || l - this._getMenuLinkWidth() < i && (this.moveToVisibleContainer(o), this._getMenuContainer().remove())
                } else this._getMenuContainer().remove()
            },
            _getInvisibleElements: function() {
                var t = this.options.menuContainerClass;
                return this.$element.find("." + t + " .bs-pretty-tabs-elements").children()
            },
            _updateElementWidth: function(t) {
                var e = t.outerWidth(!0) + 1;
                return "hidden" !== t.data("bs-visibility") && (t.data("bs-width", e), e)
            },
            _getElementWidth: function(t) {
                return "hidden" === t.data("bs-visibility") ? t.data("bs-width") : this._updateElementWidth(t)
            },
            _getVisibleElement: function() {
                var t = this.options.menuContainerClass;
                return this.getItems(":not(." + t + "):last")
            },
            _getMenuContainer: function() {
                var t = this.$element.find("." + this.options.menuContainerClass);
                return t.length ? t : this._setMenuContainer()
            },
            _setMenuContainer: function() {
                var e = t("<" + this.options.menuContainerTag + "/>", {
                    class: this.options.menuContainerClass
                });
                return (e = this.options.initWrapperContainer.call(this, e)).append(this.options.moreContainer), "end" === this.options.menuContainerPosition ? e.appendTo(this.getItemsWrapper()) : e.prependTo(this.getItemsWrapper()), e.on("mouseover", function() {
                    t(this).addClass("display-more-items")
                }).on("mouseout", function() {
                    t(this).removeClass("display-more-items")
                }).on("click", function() {
                    t(this).toggleClass("display-more-items")
                }), e
            },
            _getMenuLinkWidth: function(t) {
                var e = this.options.menuContainerClass,
                    i = this.$element.find("." + e + " .bs-pretty-tabs-more"),
                    t = t || !1;
                return i.length || t ? this._getElementWidth(i) || 0 : (this._setMenuContainer(), this._getMenuLinkWidth(!0))
            },
            _getTotalWidth: function() {
                return this.options.getContainerWidth.call(this, this.$element.width())
            },
            getInvisibleElementsContainer: function() {
                return t(".bs-pretty-tabs-elements", this._getMenuContainer())
            },
            moveToInvisibleContainer: function(e) {
                var i = this.getInvisibleElementsContainer(),
                    n = t(e);
                n.data("bs-visibility", "hidden"), n.prependTo(i)
            },
            moveToVisibleContainer: function(t) {
                var e = this._getMenuContainer();
                t.data("bs-visibility", "visible"), "end" === this.options.menuContainerPosition ? t.insertBefore(this._getMenuContainer()) : t.appendTo(e.parent())
            },
            collectOverflowElements: function() {
                var e = this._getTotalWidth(),
                    i = this;
                this.overflowElements = [], this.elementsWidth = i._getMenuLinkWidth();
                var n = 0;
                this.getItems().each(function() {
                    var o = t(this);
                    o.hasClass(i.options.menuContainerClass) || (n = i._getElementWidth(o), i.elementsWidth += n, i.elementsWidth > e && (o.hasClass(i.options.menuContainerClass) || i.options.mustDisplayClass && o.hasClass(i.options.mustDisplayClass) || i.overflowElements.push(o)))
                }), 1 === i.overflowElements.length && i.elementsWidth - i._getMenuLinkWidth() + n < e && i.overflowElements.pop(), i.overflowElements = i.overflowElements.reverse()
            },
            changeState: function(t) {
                this.enable = "start" === t
            }
        }), t.fn.bsPrettyTabs = function(i) {
            return this.each(function() {
                var n = t(this);
                if ("string" == typeof i) {
                    var o = n.data("bs-pretty-tabs");
                    o && o.changeState && o.changeState(i)
                } else if (!n.data("bs-pretty-tabs")) {
                    var a = new e(n, i);
                    n.data("bs-pretty-tabs", a)
                }
            })
        }
    }(jQuery),
    function() {
        function t(t) {
            return Array.prototype.slice.call(t)
        }

        function e(t, e) {
            var i = t.nodeName.toLowerCase(),
                n = document.createElement("img");
            n.addEventListener("load", function() {
                "img" === i ? function(t) {
                    return t.hasAttribute("data-no-resize") || (0 === t.offsetWidth && 0 === t.offsetHeight ? (t.setAttribute("width", t.naturalWidth), t.setAttribute("height", t.naturalHeight)) : (t.setAttribute("width", t.offsetWidth), t.setAttribute("height", t.offsetHeight))), t
                }(t).setAttribute("src", e) : t.style.backgroundImage = "url(" + e + ")"
            }), n.setAttribute("src", e), t.setAttribute(u, !0)
        }

        function i(t, i) {
            var n = function(t) {
                var e = parseInt(t, 10);
                return e > r ? r : e
            }(arguments.length <= 2 || void 0 === arguments[2] ? 1 : arguments[2]);
            if (i && n > 1) {
                e(t, i.replace(l, "@" + n + "x$1"))
            }
        }

        function n(t, i, n) {
            r > 1 && e(t, n)
        }

        function o(e) {
            return e ? "function" == typeof e.forEach ? e : t(e) : "undefined" != typeof document ? t(document.querySelectorAll(d)) : []
        }

        function a(t) {
            o(t).forEach(function(t) {
                if (!t.getAttribute(u)) {
                    var e = "img" === t.nodeName.toLowerCase() ? t.getAttribute("src") : function(t) {
                            return t.style.backgroundImage.replace(c, "$2")
                        }(t),
                        o = t.getAttribute("data-bsrjs"),
                        a = !isNaN(parseInt(o, 10));
                    if (null === o) return;
                    a ? i(t, e, o) : n(t, 0, o)
                }
            })
        }
        var s = "undefined" != typeof window,
            r = s ? window.devicePixelRatio || 1 : 1,
            l = /(\.[A-z]{3,4}\/?(\?.*)?)$/,
            c = /url\(('|")?([^\)'"]+)('|")?\)/i,
            d = "[data-bsrjs]",
            u = "data-bsrjs-processed";
        s && (window.addEventListener("load", a), window.bsrj_retinajs = a)
    }(),
    function() {
        var t = jQuery.fn.addClass;
        jQuery.fn.addClass = function() {
            var e = t.apply(this, arguments);
            return jQuery(this).trigger("cssClassChanged"), e
        }
    }(), String.prototype.startsWith || (String.prototype.startsWith = function(t, e) {
        return e = e || 0, this.indexOf(t, e) === e
    });
! function(a) {
    function b() {
        var a = location.href;
        return hashtag = a.indexOf("#prettyPhoto") !== -1 && decodeURI(a.substring(a.indexOf("#prettyPhoto") + 1, a.length)), hashtag && (hashtag = hashtag.replace(/<|>/g, "")), hashtag
    }

    function c() {
        "undefined" != typeof theRel && (location.hash = theRel + "/" + rel_index + "/")
    }

    function d() {
        location.href.indexOf("#prettyPhoto") !== -1 && (location.hash = "prettyPhoto")
    }

    function e(a, b) {
        a = a.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var c = "[\\?&]" + a + "=([^&#]*)",
            d = new RegExp(c),
            e = d.exec(b);
        return null == e ? "" : e[1]
    }
    a.fn.prettyPhoto || (a.prettyPhoto = {
        version: "3.1.6"
    }, a.fn.prettyPhoto = function(f) {
        function r() {
            a(".pp_loaderIcon").hide(), projectedTop = scroll_pos.scrollTop + (o / 2 - i.containerHeight / 2), projectedTop < 0 && (projectedTop = 0), $ppt.fadeTo(settings.animation_speed, 1), $pp_pic_holder.find(".pp_content").animate({
                height: i.contentHeight,
                width: i.contentWidth
            }, settings.animation_speed), $pp_pic_holder.animate({
                top: projectedTop,
                left: p / 2 - i.containerWidth / 2 < 0 ? 0 : p / 2 - i.containerWidth / 2,
                width: i.containerWidth
            }, settings.animation_speed, function() {
                $pp_pic_holder.find(".pp_hoverContainer,#fullResImage").height(i.height).width(i.width), $pp_pic_holder.find(".pp_fade").fadeIn(settings.animation_speed), isSet && "image" == w(pp_images[set_position]) ? $pp_pic_holder.find(".pp_hoverContainer").show() : $pp_pic_holder.find(".pp_hoverContainer").hide(), settings.allow_expand && (i.resized ? a("a.pp_expand,a.pp_contract").show() : a("a.pp_expand").hide()), !settings.autoplay_slideshow || q || j || a.prettyPhoto.startSlideshow(), settings.changepicturecallback(), j = !0
            }), A(), f.ajaxcallback()
        }

        function s(b) {
            $pp_pic_holder.find("#pp_full_res object,#pp_full_res embed").css("visibility", "hidden"), $pp_pic_holder.find(".pp_fade").fadeOut(settings.animation_speed, function() {
                a(".pp_loaderIcon").show(), b()
            })
        }

        function t(b) {
            b > 1 ? a(".pp_nav").show() : a(".pp_nav").hide()
        }

        function u(a, b) {
            if (resized = !1, v(a, b), imageWidth = a, imageHeight = b, (n > p || m > o) && doresize && settings.allow_resize && !h) {
                for (resized = !0, fitting = !1; !fitting;) n > p ? (imageWidth = p - 200, imageHeight = b / a * imageWidth) : m > o ? (imageHeight = o - 200, imageWidth = a / b * imageHeight) : fitting = !0, m = imageHeight, n = imageWidth;
                (n > p || m > o) && u(n, m), v(imageWidth, imageHeight)
            }
            return {
                width: Math.floor(imageWidth),
                height: Math.floor(imageHeight),
                containerHeight: Math.floor(m),
                containerWidth: Math.floor(n) + 2 * settings.horizontal_padding,
                contentHeight: Math.floor(k),
                contentWidth: Math.floor(l),
                resized: resized
            }
        }

        function v(b, c) {
            b = parseFloat(b), c = parseFloat(c), $pp_details = $pp_pic_holder.find(".pp_details"), $pp_details.width(b), detailsHeight = parseFloat($pp_details.css("marginTop")) + parseFloat($pp_details.css("marginBottom")), $pp_details = $pp_details.clone().addClass(settings.theme).width(b).appendTo(a("body")).css({
                position: "absolute",
                top: -1e4
            }), detailsHeight += $pp_details.height(), detailsHeight = detailsHeight <= 34 ? 36 : detailsHeight, $pp_details.remove(), $pp_title = $pp_pic_holder.find(".ppt"), $pp_title.width(b), titleHeight = parseFloat($pp_title.css("marginTop")) + parseFloat($pp_title.css("marginBottom")), $pp_title = $pp_title.clone().appendTo(a("body")).css({
                position: "absolute",
                top: -1e4
            }), titleHeight += $pp_title.height(), $pp_title.remove(), k = c + detailsHeight, l = b, m = k + titleHeight + $pp_pic_holder.find(".pp_top").height() + $pp_pic_holder.find(".pp_bottom").height(), n = b
        }

        function w(a) {
            return a.match(/youtube\.com\/watch/i) || a.match(/youtu\.be/i) ? "youtube" : a.match(/vimeo\.com/i) ? "vimeo" : a.match(/\b.mov\b/i) ? "quicktime" : a.match(/\b.swf\b/i) ? "flash" : a.match(/\biframe=true\b/i) ? "iframe" : a.match(/\bajax=true\b/i) ? "ajax" : a.match(/\bcustom=true\b/i) ? "custom" : "#" == a.substr(0, 1) ? "inline" : "image"
        }

        function x() {
            if (doresize && "undefined" != typeof $pp_pic_holder) {
                if (scroll_pos = y(), contentHeight = $pp_pic_holder.height(), contentwidth = $pp_pic_holder.width(), projectedTop = o / 2 + scroll_pos.scrollTop - contentHeight / 2, projectedTop < 0 && (projectedTop = 0), contentHeight > o) return;
                $pp_pic_holder.css({
                    top: projectedTop,
                    left: p / 2 + scroll_pos.scrollLeft - contentwidth / 2
                })
            }
        }

        function y() {
            return self.pageYOffset ? {
                scrollTop: self.pageYOffset,
                scrollLeft: self.pageXOffset
            } : document.documentElement && document.documentElement.scrollTop ? {
                scrollTop: document.documentElement.scrollTop,
                scrollLeft: document.documentElement.scrollLeft
            } : document.body ? {
                scrollTop: document.body.scrollTop,
                scrollLeft: document.body.scrollLeft
            } : void 0
        }

        function z() {
            o = a(window).height(), p = a(window).width(), "undefined" != typeof $pp_overlay && $pp_overlay.height(a(document).height()).width(p)
        }

        function A() {
            isSet && settings.overlay_gallery && "image" == w(pp_images[set_position]) ? (itemWidth = 57, navWidth = "facebook" == settings.theme || "pp_default" == settings.theme ? 50 : 30, itemsPerPage = Math.floor((i.containerWidth - 100 - navWidth) / itemWidth), itemsPerPage = itemsPerPage < pp_images.length ? itemsPerPage : pp_images.length, totalPage = Math.ceil(pp_images.length / itemsPerPage) - 1, 0 == totalPage ? (navWidth = 0, $pp_gallery.find(".pp_arrow_next,.pp_arrow_previous").hide()) : $pp_gallery.find(".pp_arrow_next,.pp_arrow_previous").show(), galleryWidth = itemsPerPage * itemWidth, fullGalleryWidth = pp_images.length * itemWidth, $pp_gallery.css("margin-left", -(galleryWidth / 2 + navWidth / 2)).find("div:first").width(galleryWidth + 5).find("ul").width(fullGalleryWidth).find("li.selected").removeClass("selected"), goToPage = Math.floor(set_position / itemsPerPage) < totalPage ? Math.floor(set_position / itemsPerPage) : totalPage, a.prettyPhoto.changeGalleryPage(goToPage), $pp_gallery_li.filter(":eq(" + set_position + ")").addClass("selected")) : $pp_pic_holder.find(".pp_content").unbind("mouseenter mouseleave")
        }

        function B(b) {
            if (settings.social_tools && (facebook_like_link = settings.social_tools.replace("{location_href}", encodeURIComponent(location.href))), settings.markup = settings.markup.replace("{pp_social}", ""), a("body").append(settings.markup), $pp_pic_holder = a(".pp_pic_holder"), $ppt = a(".ppt"), $pp_overlay = a("div.pp_overlay"), isSet && settings.overlay_gallery) {
                currentGalleryPage = 0, toInject = "";
                for (var c = 0; c < pp_images.length; c++) pp_images[c].match(/\b(jpg|jpeg|png|gif)\b/gi) ? (classname = "", img_src = pp_images[c]) : (classname = "default", img_src = ""), toInject += "<li class='" + classname + "'><a href='#'><img src='" + img_src + "' width='50' alt='' /></a></li>";
                toInject = settings.gallery_markup.replace(/{gallery}/g, toInject), $pp_pic_holder.find("#pp_full_res").after(toInject), $pp_gallery = a(".pp_pic_holder .pp_gallery"), $pp_gallery_li = $pp_gallery.find("li"), $pp_gallery.find(".pp_arrow_next").click(function() {
                    return a.prettyPhoto.changeGalleryPage("next"), a.prettyPhoto.stopSlideshow(), !1
                }), $pp_gallery.find(".pp_arrow_previous").click(function() {
                    return a.prettyPhoto.changeGalleryPage("previous"), a.prettyPhoto.stopSlideshow(), !1
                }), $pp_pic_holder.find(".pp_content").hover(function() {
                    $pp_pic_holder.find(".pp_gallery:not(.disabled)").fadeIn()
                }, function() {
                    $pp_pic_holder.find(".pp_gallery:not(.disabled)").fadeOut()
                }), itemWidth = 57, $pp_gallery_li.each(function(b) {
                    a(this).find("a").click(function() {
                        return a.prettyPhoto.changePage(b), a.prettyPhoto.stopSlideshow(), !1
                    })
                })
            }
            settings.slideshow && ($pp_pic_holder.find(".pp_nav").prepend('<a href="#" class="pp_play"><i class="fa fa-play"></i></a>'), $pp_pic_holder.find(".pp_nav .pp_play").click(function() {
                return a.prettyPhoto.startSlideshow(), !1
            })), $pp_pic_holder.attr("class", "pp_pic_holder " + settings.theme), $pp_overlay.css({
                opacity: 0,
                height: a(document).height(),
                width: a(window).width()
            }).bind("click", function() {
                settings.modal || a.prettyPhoto.close()
            }), a("a.pp_close").bind("click", function() {
                return a.prettyPhoto.close(), !1
            }), settings.allow_expand && a("a.pp_expand").bind("click", function(b) {
                return a(this).hasClass("pp_expand") ? (a(this).removeClass("pp_expand").addClass("pp_contract"), doresize = !1) : (a(this).removeClass("pp_contract").addClass("pp_expand"), doresize = !0), s(function() {
                    a.prettyPhoto.open()
                }), !1
            }), $pp_pic_holder.find(".pp_previous, .pp_nav .pp_arrow_previous").bind("click", function() {
                return a.prettyPhoto.changePage("previous"), a.prettyPhoto.stopSlideshow(), !1
            }), $pp_pic_holder.find(".pp_next, .pp_nav .pp_arrow_next").bind("click", function() {
                return a.prettyPhoto.changePage("next"), a.prettyPhoto.stopSlideshow(), !1
            }), x()
        }
        f = jQuery.extend({
            hook: "rel",
            animation_speed: "fast",
            ajaxcallback: function() {},
            slideshow: 5e3,
            autoplay_slideshow: !1,
            opacity: .8,
            show_title: !0,
            allow_resize: !0,
            allow_expand: !0,
            default_width: 500,
            default_height: 344,
            counter_separator_label: "/",
            theme: "pp_default",
            horizontal_padding: 20,
            hideflash: !1,
            wmode: "opaque",
            autoplay: !0,
            modal: !1,
            deeplinking: !0,
            overlay_gallery: !0,
            overlay_gallery_max: 30,
            keyboard_shortcuts: !0,
            changepicturecallback: function() {},
            callback: function() {},
            ie6_fallback: !0,
            markup: '<div class="pp_pic_holder"> <div class="ppt">&nbsp;</div> <div class="pp_top"> <div class="pp_left"></div> <div class="pp_middle"></div> <div class="pp_right"></div> </div> <div class="pp_content_container"> <div class="pp_left"> <div class="pp_right"> <div class="pp_content"> <div class="pp_loaderIcon"></div> <div class="pp_fade"> <a href="#" class="pp_expand" title="Expand the image">Expand</a> <div class="pp_hoverContainer"> <a class="pp_next" href="#">next</a> <a class="pp_previous" href="#">previous</a> </div> <div id="pp_full_res"></div> <div class="pp_details"> <div class="pp_nav"> <a href="#" class="pp_arrow_previous">Previous</a> <p class="currentTextHolder">0/0</p> <a href="#" class="pp_arrow_next">Next</a> </div> <p class="pp_description"></p> <div class="pp_social">{pp_social}</div> <a class="pp_close" href="#">Close</a> </div> </div> </div> </div> </div> </div> <div class="pp_bottom"> <div class="pp_left"></div> <div class="pp_middle"></div> <div class="pp_right"></div> </div> </div> <div class="pp_overlay"></div>',
            gallery_markup: '<div class="pp_gallery"> <a href="#" class="pp_arrow_previous">Previous</a> <div> <ul> {gallery} </ul> </div> <a href="#" class="pp_arrow_next">Next</a> </div>',
            image_markup: '<img id="fullResImage" src="{path}" />',
            flash_markup: '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>',
            quicktime_markup: '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>',
            iframe_markup: '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',
            inline_markup: '<div class="pp_inline">{content}</div>',
            custom_markup: "",
            social_tools: '<div class="twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div><div class="facebook"><iframe src="//www.facebook.com/plugins/like.php?locale=en_US&href={location_href}&amp;layout=button_count&amp;show_faces=true&amp;width=500&amp;action=like&amp;font&amp;colorscheme=light&amp;height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:23px;" allowTransparency="true"></iframe></div>'
        }, f);
        var i, j, k, l, m, n, q, g = this,
            h = !1,
            o = a(window).height(),
            p = a(window).width();
        return doresize = !0, scroll_pos = y(), a(window).unbind("resize.prettyphoto").bind("resize.prettyphoto", function() {
            x(), z()
        }), f.keyboard_shortcuts && a(document).unbind("keydown.prettyphoto").bind("keydown.prettyphoto", function(b) {
            if ("undefined" != typeof $pp_pic_holder && $pp_pic_holder.is(":visible")) switch (b.keyCode) {
                case 37:
                    a.prettyPhoto.changePage("previous"), b.preventDefault();
                    break;
                case 39:
                    a.prettyPhoto.changePage("next"), b.preventDefault();
                    break;
                case 27:
                    settings.modal || a.prettyPhoto.close(), b.preventDefault()
            }
        }), a.prettyPhoto.initialize = function() {
            return settings = f, "pp_default" == settings.theme && (settings.horizontal_padding = 16), theRel = a(this).attr(settings.hook), galleryRegExp = /\[(?:.*)\]/, isSet = !!galleryRegExp.exec(theRel), pp_images = isSet ? jQuery.map(g, function(b, c) {
                if (a(b).attr(settings.hook).indexOf(theRel) != -1) return a(b).attr("href")
            }) : a.makeArray(a(this).attr("href")), pp_titles = isSet ? jQuery.map(g, function(b, c) {
                if (a(b).attr(settings.hook).indexOf(theRel) != -1) return a(b).find("img").attr("alt") ? a(b).find("img").attr("alt") : ""
            }) : a.makeArray(a(this).find("img").attr("alt")), pp_descriptions = isSet ? jQuery.map(g, function(b, c) {
                if (a(b).attr(settings.hook).indexOf(theRel) != -1) return a(b).attr("title") ? a(b).attr("title") : ""
            }) : a.makeArray(a(this).attr("title")), pp_images.length > settings.overlay_gallery_max && (settings.overlay_gallery = !1), set_position = jQuery.inArray(a(this).attr("href"), pp_images), rel_index = isSet ? set_position : a("a[" + settings.hook + "^='" + theRel + "']").index(a(this)), B(this), settings.allow_resize && a(window).bind("scroll.prettyphoto", function() {
                x()
            }), a.prettyPhoto.open(), !1
        }, a.prettyPhoto.open = function(b) {
            return "undefined" == typeof settings && (settings = f, pp_images = a.makeArray(arguments[0]), pp_titles = arguments[1] ? a.makeArray(arguments[1]) : a.makeArray(""), pp_descriptions = arguments[2] ? a.makeArray(arguments[2]) : a.makeArray(""), isSet = pp_images.length > 1, set_position = arguments[3] ? arguments[3] : 0, B(b.target)), settings.hideflash && a("object,embed,iframe[src*=youtube],iframe[src*=vimeo]").css("visibility", "hidden"), t(a(pp_images).size()), a(".pp_loaderIcon").show(), settings.deeplinking && c(), settings.social_tools && (facebook_like_link = settings.social_tools.replace("{location_href}", encodeURIComponent(location.href)), $pp_pic_holder.find(".pp_social").html(facebook_like_link)), $ppt.is(":hidden") && $ppt.css("opacity", 0).show(), $pp_overlay.show().fadeTo(settings.animation_speed, settings.opacity), $pp_pic_holder.find(".currentTextHolder").text(set_position + 1 + settings.counter_separator_label + a(pp_images).size()), "undefined" != typeof pp_descriptions[set_position] && "" != pp_descriptions[set_position] ? $pp_pic_holder.find(".pp_description").show().html(unescape(pp_descriptions[set_position])) : $pp_pic_holder.find(".pp_description").hide(), movie_width = parseFloat(e("width", pp_images[set_position])) ? e("width", pp_images[set_position]) : settings.default_width.toString(), movie_height = parseFloat(e("height", pp_images[set_position])) ? e("height", pp_images[set_position]) : settings.default_height.toString(), h = !1, movie_height.indexOf("%") != -1 && (movie_height = parseFloat(a(window).height() * parseFloat(movie_height) / 100 - 150), h = !0), movie_width.indexOf("%") != -1 && (movie_width = parseFloat(a(window).width() * parseFloat(movie_width) / 100 - 150), h = !0), $pp_pic_holder.fadeIn(function() {
                switch (settings.show_title && "" != pp_titles[set_position] && "undefined" != typeof pp_titles[set_position] ? $ppt.html(unescape(pp_titles[set_position])) : $ppt.html("&nbsp;"), imgPreloader = "", skipInjection = !1, w(pp_images[set_position])) {
                    case "image":
                        imgPreloader = new Image, nextImage = new Image, isSet && set_position < a(pp_images).size() - 1 && (nextImage.src = pp_images[set_position + 1]), prevImage = new Image, isSet && pp_images[set_position - 1] && (prevImage.src = pp_images[set_position - 1]), $pp_pic_holder.find("#pp_full_res")[0].innerHTML = settings.image_markup.replace(/{path}/g, pp_images[set_position]), imgPreloader.onload = function() {
                            i = u(imgPreloader.width, imgPreloader.height), r()
                        }, imgPreloader.onerror = function() {
                            alert("Image cannot be loaded. Make sure the path is correct and image exist."), a.prettyPhoto.close()
                        }, imgPreloader.src = pp_images[set_position];
                        break;
                    case "youtube":
                        i = u(movie_width, movie_height), movie_id = e("v", pp_images[set_position]), "" == movie_id && (movie_id = pp_images[set_position].split("youtu.be/"), movie_id = movie_id[1], movie_id.indexOf("?") > 0 && (movie_id = movie_id.substr(0, movie_id.indexOf("?"))), movie_id.indexOf("&") > 0 && (movie_id = movie_id.substr(0, movie_id.indexOf("&")))), movie = "http://www.youtube.com/embed/" + movie_id, e("rel", pp_images[set_position]) ? movie += "?rel=" + e("rel", pp_images[set_position]) : movie += "?rel=1", settings.autoplay && (movie += "&autoplay=1"), toInject = settings.iframe_markup.replace(/{width}/g, i.width).replace(/{height}/g, i.height).replace(/{wmode}/g, settings.wmode).replace(/{path}/g, movie);
                        break;
                    case "vimeo":
                        i = u(movie_width, movie_height), movie_id = pp_images[set_position];
                        var b = /http(s?):\/\/(www\.)?vimeo.com\/(\d+)/,
                            c = movie_id.match(b);
                        movie = "http://player.vimeo.com/video/" + c[3] + "?title=0&amp;byline=0&amp;portrait=0", settings.autoplay && (movie += "&autoplay=1;"), vimeo_width = i.width + "/embed/?moog_width=" + i.width, toInject = settings.iframe_markup.replace(/{width}/g, vimeo_width).replace(/{height}/g, i.height).replace(/{path}/g, movie);
                        break;
                    case "quicktime":
                        i = u(movie_width, movie_height), i.height += 15, i.contentHeight += 15, i.containerHeight += 15, toInject = settings.quicktime_markup.replace(/{width}/g, i.width).replace(/{height}/g, i.height).replace(/{wmode}/g, settings.wmode).replace(/{path}/g, pp_images[set_position]).replace(/{autoplay}/g, settings.autoplay);
                        break;
                    case "flash":
                        i = u(movie_width, movie_height), flash_vars = pp_images[set_position], flash_vars = flash_vars.substring(pp_images[set_position].indexOf("flashvars") + 10, pp_images[set_position].length), filename = pp_images[set_position], filename = filename.substring(0, filename.indexOf("?")), toInject = settings.flash_markup.replace(/{width}/g, i.width).replace(/{height}/g, i.height).replace(/{wmode}/g, settings.wmode).replace(/{path}/g, filename + "?" + flash_vars);
                        break;
                    case "iframe":
                        i = u(movie_width, movie_height), frame_url = pp_images[set_position], frame_url = frame_url.substr(0, frame_url.indexOf("iframe") - 1), toInject = settings.iframe_markup.replace(/{width}/g, i.width).replace(/{height}/g, i.height).replace(/{path}/g, frame_url);
                        break;
                    case "ajax":
                        doresize = !1, i = u(movie_width, movie_height), doresize = !0, skipInjection = !0, a.get(pp_images[set_position], function(a) {
                            toInject = settings.inline_markup.replace(/{content}/g, a), $pp_pic_holder.find("#pp_full_res")[0].innerHTML = toInject, r()
                        });
                        break;
                    case "custom":
                        i = u(movie_width, movie_height), toInject = settings.custom_markup;
                        break;
                    case "inline":
                        myClone = a(pp_images[set_position]).clone().append('<br clear="all" />').css({
                            width: settings.default_width
                        }).wrapInner('<div id="pp_full_res"><div class="pp_inline"></div></div>').appendTo(a("body")).show(), doresize = !1, i = u(a(myClone).width(), a(myClone).height()), doresize = !0, a(myClone).remove(), toInject = settings.inline_markup.replace(/{content}/g, a(pp_images[set_position]).html())
                }
                imgPreloader || skipInjection || ($pp_pic_holder.find("#pp_full_res")[0].innerHTML = toInject, r())
            }), !1
        }, a.prettyPhoto.changePage = function(b) {
            currentGalleryPage = 0, "previous" == b ? (set_position--, set_position < 0 && (set_position = a(pp_images).size() - 1)) : "next" == b ? (set_position++, set_position > a(pp_images).size() - 1 && (set_position = 0)) : set_position = b, rel_index = set_position, doresize || (doresize = !0), settings.allow_expand && a(".pp_contract").removeClass("pp_contract").addClass("pp_expand"), s(function() {
                a.prettyPhoto.open()
            })
        }, a.prettyPhoto.changeGalleryPage = function(a) {
            "next" == a ? (currentGalleryPage++, currentGalleryPage > totalPage && (currentGalleryPage = 0)) : "previous" == a ? (currentGalleryPage--, currentGalleryPage < 0 && (currentGalleryPage = totalPage)) : currentGalleryPage = a, slide_speed = "next" == a || "previous" == a ? settings.animation_speed : 0, slide_to = currentGalleryPage * (itemsPerPage * itemWidth), $pp_gallery.find("ul").animate({
                left: -slide_to
            }, slide_speed)
        }, a.prettyPhoto.startSlideshow = function() {
            "undefined" == typeof q ? ($pp_pic_holder.find(".pp_play").unbind("click").removeClass("pp_play").addClass("pp_pause").click(function() {
                return a.prettyPhoto.stopSlideshow(), !1
            }), q = setInterval(a.prettyPhoto.startSlideshow, settings.slideshow)) : a.prettyPhoto.changePage("next")
        }, a.prettyPhoto.stopSlideshow = function() {
            $pp_pic_holder.find(".pp_pause").unbind("click").removeClass("pp_pause").addClass("pp_play").click(function() {
                return a.prettyPhoto.startSlideshow(), !1
            }), clearInterval(q), q = void 0
        }, a.prettyPhoto.close = function() {
            $pp_overlay.is(":animated") || (a.prettyPhoto.stopSlideshow(), $pp_pic_holder.stop().find("object,embed").css("visibility", "hidden"), a("div.pp_pic_holder,div.ppt,.pp_fade").fadeOut(settings.animation_speed, function() {
                a(this).remove()
            }), $pp_overlay.fadeOut(settings.animation_speed, function() {
                settings.hideflash && a("object,embed,iframe[src*=youtube],iframe[src*=vimeo]").css("visibility", "visible"), a(this).remove(), a(window).unbind("scroll.prettyphoto"), d(), settings.callback(), doresize = !0, j = !1, delete settings
            }))
        }, !pp_alreadyInitialized && b() && (pp_alreadyInitialized = !0, hashIndex = b(), hashRel = hashIndex, hashIndex = hashIndex.substring(hashIndex.indexOf("/") + 1, hashIndex.length - 1), hashRel = hashRel.substring(0, hashRel.indexOf("/")), setTimeout(function() {
            a("a[" + f.hook + "^='" + hashRel + "']:eq(" + hashIndex + ")").trigger("click")
        }, 50)), this.unbind("click.prettyphoto").bind("click.prettyphoto", a.prettyPhoto.initialize)
    })
}(jQuery);
var pp_alreadyInitialized = !1;
var bsLazy, $bs_sticky_sidebars, docCookies = {
        getItem: function(e) {
            return e ? decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(e).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null : null
        },
        setItem: function(e, t, a, s, n, i) {
            if (!e || /^(?:expires|max\-age|path|domain|secure)$/i.test(e)) return !1;
            var o = "";
            if (a) switch (a.constructor) {
                case Number:
                    o = a === 1 / 0 ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + a;
                    break;
                case String:
                    o = "; expires=" + a;
                    break;
                case Date:
                    o = "; expires=" + a.toUTCString()
            }
            return document.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(t) + o + (n ? "; domain=" + n : "") + (s ? "; path=" + s : "") + (i ? "; secure" : ""), !0
        },
        removeItem: function(e, t, a) {
            return !!this.hasItem(e) && (document.cookie = encodeURIComponent(e) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (a ? "; domain=" + a : "") + (t ? "; path=" + t : ""), !0)
        },
        hasItem: function(e) {
            return !!e && new RegExp("(?:^|;\\s*)" + encodeURIComponent(e).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=").test(document.cookie)
        },
        keys: function() {
            for (var e = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/), t = e.length, a = 0; a < t; a++) e[a] = decodeURIComponent(e[a]);
            return e
        }
    },
    Publisher_Theme = function(e) {
        "use strict";
        return {
            init: function() {
                this.initWhiteSpaceBlock(), e(window).on("resize", this.initWhiteSpaceBlock), this.prettyPhotoSettings = {
                    social_tools: !1,
                    show_title: !1,
                    deeplinking: !1,
                    markup: '<div class="pp_pic_holder"> <div class="ppt"></div> <div class="pp_content_container"> <div class="pp_content"> <div class="pp_loaderIcon"></div> <div class="pp_fade"> <a href="#" class="pp_expand" title="' + publisher_theme_global_loc.translations.lightbox_expand + '"></a> <a class="pp_close" href="#" title="' + publisher_theme_global_loc.translations.lightbox_close + '"></a> <div class="pp_hoverContainer"> <a class="pp_next" href="#"><i class="fa fa-chevron-right"></i></a> <a class="pp_previous" href="#"><i class="fa fa-chevron-left"></i></a> </div> <div id="pp_full_res"></div> <div class="pp_details"> <div class="pp_nav"> <a href="#" class="pp_arrow_previous"><i class="fa fa-backward"></i></a> <p class="currentTextHolder">0/0</p> <a href="#" class="pp_arrow_next"><i class="fa fa-forward"></i></a> </div> <p class="pp_description"></p> </div> </div> </div> </div> </div> <div class="pp_overlay"></div>',
                    gallery_markup: '<div class="pp_gallery"> <a href="#" class="pp_arrow_previous"><i class="fa fa-chevron-left"></i></a> <div> <ul> {gallery} </ul> </div> <a href="#" class="pp_arrow_next"><i class="fa fa-chevron-right"></i></a> </div>'
                }, this.setup_responsive_header(), this.back_to_top(), this.handleAjaxifiedComments(), this.setup_post();
                var t = e(document.body).attr("class").toString().match(/\bpostid\-(\d+)\b/i);
                t && this.handleInfinitySinglePostLoading(t[1]), this.woo_commerce(), this.visual_composer(), this.init_off_canvas_menu(), this.init_more_stories(), this.init_continue_reading(), this.print_style_fix()
            },
            initWhiteSpaceBlock: function() {
                var e, t, a = document.getElementsByClassName("bs-white-space");
                e = window.innerWidth >= 992 ? "desktop" : window.innerWidth >= 768 ? "tablet" : "mobile";
                for (var s = 0; s < a.length; s++)(t = a[s].getAttribute("data-" + e + "-ws")) && (a[s].style.height = t + "px")
            },
            fix_element_query: function() {
                "function" == typeof elementQuery && elementQuery({
                    ".listing-attachment-sibling": {
                        "max-width": ["450px", "560px", "900px"]
                    },
                    ".bs-shortcode-row": {
                        "max-width": ["450px", "600px", "700px"]
                    }
                })
            },
            is_rtl: function() {
                return e("body").hasClass("rtl")
            },
            setup_responsive_header: function() {
                if (e(".rh-header .menu-container .menu-handler").click(function(t) {
                        t.preventDefault(), e("body").toggleClass("open-rh").toggleClass("close-rh"), setTimeout(function() {
                            e(".rh-cover").removeClass("noscroll"), e("body").addClass("noscroll")
                        }, 640)
                    }), e(".rh-cover > .rh-close").click(function(t) {
                        t.preventDefault(), e("body").toggleClass("open-rh").toggleClass("close-rh"), e(".rh-cover").addClass("noscroll"), e("body").removeClass("noscroll")
                    }), e(".rh-cover .rh-c-m").is(":empty") && e(".rh-cover .rh-c-m").html(e(".main-menu.menu").clone().removeClass("main-menu").addClass("resp-menu").prop("id", "resp-navigation")), !e(".rh-cover").hasClass("no-top-nav") && e(".topbar ul.top-menu").length > 0) {
                    var t = e(".topbar ul.top-menu").clone();
                    t.find("li#topbar-date").remove(), t.removeAttr("id").removeClass("top-menu"), e(".rh-cover .rh-c-m").append(t.addClass("resp-menu"))
                }
                if (!e(".rh-cover").hasClass("no-social-icon") && e(".topbar .better-social-counter").length > 0 && 0 == e(".rh-cover .rh-pm .better-social-counter").length) {
                    var a = e(".topbar .better-social-counter").clone();
                    e(".rh-cover .rh-pm .rh-p-b").append(a)
                }
                e(".rh-cover .rh-c-m .mega-menu.mega-grid-posts").remove(), e(".rh-cover .resp-menu li > a").each(function() {
                    var t = e(this).parent();
                    if (t.hasClass("menu-item-mega-tabbed-grid-posts")) {
                        t.find(".tab-content").remove();
                        var a = t.find(".tabs-section").removeClass("tabs-section").addClass("sub-menu");
                        t.find(".mega-menu.tabbed-grid-posts").remove(), a.find("li a").removeAttr("data-target").removeAttr("data-deferred-init").removeAttr("data-toggle").removeAttr("data-deferred-event").removeAttr("class"), a.find(".fa").remove(), a.find("li:first-child").remove(), t.append(a)
                    }
                    if (t.hasClass("menu-item-mega-link-2-column") || t.hasClass("menu-item-mega-link-3-column") || t.hasClass("menu-item-mega-link-4-column") || t.hasClass("menu-item-mega-link-5-column") || t.hasClass("menu-item-mega-link-list")) {
                        var s = t.find(".mega-links").removeAttr("class").addClass("sub-menu");
                        t.find(".mega-menu").replaceWith(s), t = e(this).parent()
                    }!t.hasClass("menu-item-mega-grid-posts") && t.children("ul,.mega-menu").length > 0 && t.append('<span class="children-button"></span>')
                }), e(".rh-cover .resp-menu .children-button").click(function(t) {
                    t.preventDefault(), e(this).closest("li").toggleClass("open-sub"), e(this).siblings("ul").slideToggle()
                }), e(".rh-cover .rh-p-h .user-login").click(function(t) {
                    t.preventDefault(), e(".rh-cover .rh-panel.rh-pm").fadeOut(400), setTimeout(function() {
                        e(".rh-cover .rh-panel.rh-p-u").fadeIn(400)
                    }, 400)
                }), e(".rh-cover .rh-p-h .rh-back-menu").click(function(t) {
                    t.preventDefault();
                    var a = e(this);
                    a.addClass("abtn"), e(".rh-cover .rh-panel.rh-p-u").fadeOut(400), setTimeout(function() {
                        e(".rh-cover .rh-panel.rh-pm").fadeIn(400), a.removeClass("abtn")
                    }, 400)
                }), e(".rh-container").bsPinning(), e(".better-newsticker").betterNewsticker({
                    control_nav: !0
                })
            },
            refreshLazyImages: function() {
                "object" == typeof bsLazy && bsLazy.revalidate()
            },
            get_header_sticky_classes: function() {
                return " .site-header .main-menu-wrapper, .site-header.header-style-5.full-width > .content-wrap, .site-header.header-style-5.boxed > .content-wrap > .container, .site-header.header-style-6.full-width > .content-wrap, .site-header.header-style-6.boxed > .content-wrap > .container, .site-header.header-style-8.full-width > .content-wrap, .site-header.header-style-8.boxed > .content-wrap > .container"
            },
            updateHcStickySettings: function(t, a) {
                if (t.length) {
                    var s = t.data("hcSticky");
                    s && s.options && (s.options = e.extend(s.options, a), t.data("hcSticky", s))
                }
            },
            setup_menu: function() {
                function t(t, a, s) {
                    if (t.length) {
                        var i = e.extend({
                            duration: 250,
                            checkPosition: !0,
                            completed: e.noop
                        }, s);
                        t.off("hcSticky-reinit.bs-hcSticky-menu"), t.one("hcSticky-reinit.bs-hcSticky-menu", function(e, t, s, n) {
                            i.checkPosition && "fixed" !== t.style("position") || (i.duration ? t.stop().animate(a, i.duration, "swing", i.completed) : (t.stop().css(a), i.completed.call(t)))
                        }), n.updateHcStickySettings(t, a), t.hcSticky("reinit")
                    }
                }

                function a(t, a, s, n) {
                    var i = window.innerWidth - Math.ceil((s || t).offset().left);
                    if (function(e, t) {
                            return e && !t || !e && t
                        }(i > window.innerWidth / 2, u)) return !0;
                    var o = Math.floor(i / a);
                    n && (o -= n);
                    for (var r = [], l = 0; l <= o; l++) r.push(f);
                    return 0 === e(r.join(" "), t).length
                }

                function s() {
                    p.forEach(function(t) {
                        var s = e(t[0]),
                            n = t[1];
                        s.children("li.menu-item").each(function() {
                            var t = e(this);
                            t[a(t, n) ? "removeClass" : "addClass"]("bs-flip-children")
                        });
                        var i = e("li.bs-pretty-tabs-container", s);
                        if (i.length) {
                            for (var o = e(".bs-pretty-tabs-elements>li.menu-item", i), r = !1, l = 0; l < o.length; l++) {
                                if (!a(e(o[l]), n, i, 1)) {
                                    r = !0;
                                    break
                                }
                            }
                            i[r ? "addClass" : "removeClass"]("bs-flip-children")
                        }
                    })
                }
                var n = this;
                e("ul.menu.bsm-pure").addClass("bsm-initialized").removeClass("bsm-pure");
                e(".menu.bsm-initialized li.menu-item-has-children").each(function() {
                    var t = e(this);
                    t.is(":hover") ? t.addClass("bsm-enter") : t.addClass("bsm-leave")
                }), e(document).on("mouseenter", "li.menu-item-has-children", function(t) {
                    var a = e(this);
                    a.siblings("li").stop().clearQueue().removeClass("bsm-enter").addClass("bsm-leave"), a.stop().clearQueue().removeClass("bsm-leave").addClass("bsm-enter"), n.refreshLazyImages()
                }).on("mouseleave", "li.menu-item-has-children", function() {
                    e(this).stop().delay(450).queue(function(t) {
                        e(this).removeClass("bsm-enter"), t()
                    }).delay(200).queue(function(t) {
                        e(this).addClass("bsm-leave"), t()
                    })
                }).on("afterChange", ".bs-slider-items-container", function() {
                    n.refreshLazyImages()
                });
                var i = Publisher_Theme.get_header_sticky_classes(),
                    o = e(".site-header").attr("class");
                if (o) {
                    if (o = o.match(/header-style-[\w-]*\b/), publisher_theme_global_loc.skyscraper.sticky) {
                        var r = e("#wpadminbar"),
                            l = r.length > 0 ? r.outerHeight() : 0,
                            c = 0,
                            d = publisher_theme_global_loc.skyscraper.sticky && "after-header" === publisher_theme_global_loc.skyscraper.position;
                        (d = !(!d || "boxed" === publisher_theme_global_loc.page.boxed || "boxed" === publisher_theme_global_loc.header.boxed) || !(!d || "boxed" != publisher_theme_global_loc.page.boxed || "out-stretched" != publisher_theme_global_loc.header.boxed && "out-full-width" != publisher_theme_global_loc.header.boxed)) && (c = e(i).outerHeight() + l + publisher_theme_global_loc.skyscraper.sticky_gap)
                    }
                    var h = {
                            smart: !0,
                            wrapper_class: "bspw-" + o[0]
                        },
                        m = 0;
                    d && (h.onPin = function() {
                        m = !0, t(e(".bs-sks  .bs-sksin2"), {
                            top: c
                        })
                    }, h.onUnpin = function() {
                        "boxed" == publisher_theme_global_loc.page.boxed ? m && t(e(".bs-sks  .bs-sksin2"), {
                            top: l
                        }) : m && t(e(".bs-sks  .bs-sksin2"), {
                            top: l + publisher_theme_global_loc.skyscraper.sticky_gap
                        }), m = !1
                    }), e("body").hasClass("main-menu-sticky-smart") ? e(i).bsPinning(h) : e("body").hasClass("main-menu-sticky") && (h.smart = !1, h.wrapper_class = "bspw-header bspw-" + o[0], e(i).bsPinning(h))
                }
                var p = [
                        ["#top-navigation", 270],
                        ["#main-navigation", 210]
                    ],
                    f = "ul.sub-menu",
                    u = e(document.body).hasClass("rtl");
                jQuery(window).resize(s), setTimeout(s)
            },
            setup_sliders: function() {
                e.fn.flexslider && (e(".gallery-slider .better-slider").flexslider({
                    namespace: "better-",
                    animation: "fade",
                    controlNav: !1,
                    smoothHeight: !0,
                    animationSpeed: "200"
                }).find(".better-control-nav").addClass("square"), e(".bs-shortcode.bs-slider > .better-slider, .bs-shortcode.bs-instagram > .better-slider, .bs-shortcode.bs-dribbble > .better-slider, .bs-shortcode.bs-flickr > .better-slider").each(function() {
                    var t = e(this);
                    t.flexslider({
                        namespace: "better-",
                        animation: t.data("animation"),
                        slideshowSpeed: t.data("slideshowspeed"),
                        animationSpeed: t.data("animationspeed"),
                        controlNav: void 0 === t.data("controlnav") || t.data("controlnav"),
                        animationLoop: !0,
                        directionNav: !0,
                        pauseOnHover: !0,
                        start: function(e) {
                            jQuery(e).find(".better-active-slide").addClass("slider-content-shown")
                        },
                        before: function(e) {
                            jQuery(e).find(".slider-content-shown").removeClass("slider-content-shown")
                        },
                        after: function(e) {
                            jQuery(e).find(".better-active-slide").addClass("slider-content-shown")
                        }
                    }).find(".better-control-nav").addClass("circle")
                }))
            },
            setup_video_players: function() {
                e(".single-featured, .the-content, .sidebar, .post, .bs-embed, .entry-content").fitVids({
                    ignore: ".bsp-player > iframe"
                })
            },
            small_style_fixes: function() {
                e(".site-header .search-container .search-handler").click(function() {
                    e(this).closest(".main-menu-container").toggleClass("search-open").toggleClass("search-close");
                    var t = e(this).closest(".search-container");
                    t.toggleClass("open").toggleClass("close"), t.hasClass("open") ? (e(this).find(".fa").removeClass("fa-search").addClass("fa-close"), t.find(".search-field").focus()) : (e(this).find(".fa").addClass("fa-search").removeClass("fa-close"), t.find(".search-field").focusout())
                }), e(document).on("keyup", function(t) {
                    if (27 == t.keyCode && e(".search-container.open").length > 0) {
                        var a = e(".site-header .search-container"),
                            s = a.find(".search-handler");
                        a.removeClass("open").addClass("close"), e(".main-menu-container.search-open").removeClass("search-open").addClass("search-close"), a.hasClass("open") ? (s.find(".fa").removeClass("fa-search").addClass("fa-close"), a.find(".search-field").focus()) : (s.find(".fa").addClass("fa-search").removeClass("fa-close"), a.find(".search-field").focusout())
                    }
                }), e(".site-header .shop-cart-container").hover(function(t) {
                    t.preventDefault(), e(this).closest(".main-menu-container").toggleClass("cart-open").toggleClass("cart-close");
                    e(this).toggleClass("open").toggleClass("close")
                }), e(".widget.widget_calendar table td a").each(function() {
                    e(this).parent().addClass("active-day")
                }), e.browser.msie && 10 == e.browser.version && e("html").addClass("ie ie10"), e('.section-heading.multi-tab a[data-toggle="tab"]').on("shown.bs.tab", function(t) {
                    if (e(this).hasClass("active")) t.preventDefault();
                    else {
                        if (void 0 === e(t.target).parent().attr("class")) return !0;
                        var a = e(t.target).closest(".section-heading");
                        if (!e(this).hasClass("ncpt")) {
                            var s = e(t.target).find(".h-text").attr("class").split(" "),
                                n = "";
                            jQuery.each(s, function(e, t) {
                                if (t.match(/main-term-/)) return n = t, !1
                            }), jQuery.each(a.attr("class").split(" "), function(e, t) {
                                t.startsWith("main-term") && a.removeClass(t)
                            }), a.addClass(n)
                        }
                        a.find("a.active").removeClass("active"), e(this).addClass("active")
                    }
                }), e(".bs-accordion-shortcode .panel-heading a").on("click", function(t) {
                    e(this).closest(".panel-heading").hasClass("active") || e(this).closest(".panel").addClass("open")
                }), e(".panel-collapse").on("hide.bs.collapse", function(t) {
                    e(t.target).closest(".panel").removeClass("open")
                }), e('.bs-listing a[data-toggle="tab"]').on("show.bs.tab", function(t) {
                    var a = e(e(this).attr("href"));
                    a.hasClass("active") || (e(this).closest(".bs-listing").find(".tab-pane").removeClass("bs-tab-animated"), a.addClass("bs-tab-animated"))
                }), e(".tabbed-grid-posts .tabs-section > li > a").click(function() {
                    "#" != e(this).attr("href") && (window.location = e(this).attr("href"))
                }).hover(function() {
                    e(this).tab("show")
                }), e('.tabbed-grid-posts .tabs-section > li > a[data-toggle="tab"]').on("show.bs.tab", function(t) {
                    var a = e(e(this).data("target"));
                    a.hasClass("active") || (e(this).closest(".tabbed-grid-posts").find(".tab-pane").removeClass("bs-tab-animated"), a.addClass("bs-tab-animated"))
                }), e(".move-to-content .fa").click(function() {
                    e("body,html").animate({
                        scrollTop: e(".content-column").offset().top - 25
                    }, 700)
                }), e(".post-tp-4-header,.post-tp-5-header").each(function() {
                    var t = e(this),
                        a = e(this).find(".post-header-title");
                    jQuery(window).scroll(function() {
                        var e = jQuery(window).scrollTop(),
                            s = t.height();
                        e < t.offset().top || e > t.offset().bottom ? a.css({
                            "-webkit-transform": "translate3d(0px, 0px, 0px)"
                        }).css({
                            transform: "translate3d(0px, 0px, 0px)"
                        }).css({
                            opacity: "1"
                        }) : a.css({
                            "-webkit-transform": "translate3d(0px, " + Math.ceil((e - t.offset().top) / 5.3) + "px, 0px)"
                        }).css({
                            transform: "translate3d(0px, " + Math.ceil((e - t.offset().top) / 5.3) + "px, 0px)"
                        }).css({
                            opacity: (e - s) / 333.333 * -1
                        })
                    })
                }), e(".footer-instagram-3 .bs-instagram-photos").simplyScroll({
                    frameRate: 70
                }), e(".remember-label").on("click", function() {
                    e(this).siblings("input[type=checkbox]").click()
                }), e(".bs-login").css({
                    display: "block",
                    visibility: "visible"
                }), e(".bs-login .go-login-panel, .bs-login .go-reset-panel").click(function(t) {
                    t.preventDefault();
                    var a = e(this).closest(".bs-login"),
                        s = e(this).closest(".bs-login-panel"),
                        n = s.siblings(".bs-login-panel");
                    a.hasClass("inmove") || a.addClass("inmove").height(a.find(".bs-login-panel:first-child").outerHeight()), s.removeClass("bs-current-login-panel"), n.addClass("bs-current-login-panel")
                }), e(".single-post-share .post-share-btn-comments").click(function() {
                    var t;
                    t = e(e("form.comment-form").length > 0 ? "form.comment-form" : "#respond"), e("body,html").animate({
                        scrollTop: t.offset().top - 100
                    }, 1e3)
                }), e("#bsLoginModal").on("shown.bs.modal", function() {
                    e("#bsLoginModal #user_login").focus()
                })
            },
            init_sticky_columns: function() {
                var t = this;
                if (e.fn.hcSticky && !(window.innerWidth <= 700)) {
                    if (publisher_theme_global_loc.skyscraper.sticky) {
                        var a = e("#wpadminbar"),
                            s = a.length > 0 ? a.outerHeight() : 0,
                            n = s;
                        "after-header" === publisher_theme_global_loc.skyscraper.position && "boxed" != publisher_theme_global_loc.page.boxed && (n += publisher_theme_global_loc.skyscraper.sticky_gap), e(".bs-sks  .bs-sksin2").hcSticky({
                            wrapperClassName: "wrapper-sticky",
                            top: n,
                            onStop: function() {
                                t.updateHcStickySettings(e(".bs-sks  .bs-sksin2"), {
                                    top: s
                                })
                            }
                        })
                    }
                    var i = {
                            wrapperClassName: "wrapper-sticky"
                        },
                        o = !1,
                        r = e("body");
                    $bs_sticky_sidebars = e([]), (r.hasClass("main-menu-sticky-smart") || r.hasClass("main-menu-sticky")) && (i.top = e("#header .main-menu-wrapper").height()), r.hasClass("active-sticky-sidebar") && e(window).width() > 780 && ($bs_sticky_sidebars = ($bs_sticky_sidebars = $bs_sticky_sidebars.add(e(".wpb_widgetised_column").closest(".wpb_column").not(".sticky-column"))).add(e(".sidebar-column"))), ($bs_sticky_sidebars = $bs_sticky_sidebars.add(e(".wpb_column.sticky-column"))).each(function(t, a) {
                        var s = e(a),
                            n = e.extend({}, i);
                        if (s.hasClass("wpb_column")) {
                            ["vc_hidden-lg", "vc_hidden-md", "vc_hidden-sm", "vc_hidden-xs", ".hidden-lg", ".hidden-md", ".hidden-sm", ".hidden-xs"].forEach(function(e) {
                                s.hasClass(e) && (n.wrapperClassName += " " + e)
                            })
                        }
                        s.hcSticky(n)
                    }), e(window).on("resize.bs-sticky-column", function() {
                        window.innerWidth <= 780 && !o && $bs_sticky_sidebars.each(function(t, a) {
                            e(a).hcSticky("off").hcSticky("destroy").data("hcSticky-destroy", !0).removeAttr("style"), o = !0
                        })
                    }), 1 == publisher_theme_global_loc.refresh_googletagads && "object" == typeof googletag && "function" == typeof googletag.pubads && "function" == typeof googletag.pubads().refresh && googletag.pubads().refresh()
                }
            },
            betterstudio_editor_shortcodes: function() {
                e(".bs-accordion-shortcode").on("show.bs.collapse", function(t) {
                    e(t.target).prev(".panel-heading").addClass("active")
                }).on("hide.bs.collapse", function(t) {
                    e(t.target).prev(".panel-heading").removeClass("active")
                })
            },
            back_to_top: function() {
                var t = e(".back-top");
                0 != t.length && (t.click(function() {
                    e("body,html").animate({
                        scrollTop: 0
                    }, 700)
                }), e(window).scroll(function() {
                    switch (e(this).scrollTop() > 300 ? t.addClass("is-visible") : t.removeClass("is-visible fade-out1 fade-out2 fade-out3 fade-out4"), !0) {
                        case e(this).scrollTop() > 2400:
                            t.addClass("fade-out4");
                            break;
                        case e(this).scrollTop() > 1700:
                            t.removeClass("fade-out3").addClass("fade-out3");
                            break;
                        case e(this).scrollTop() > 1e3:
                            t.removeClass("fade-out4 fade-out3").addClass("fade-out2");
                            break;
                        case e(this).scrollTop() > 500:
                            t.removeClass("fade-out4 fade-out3 fade-out2").addClass("fade-out1")
                    }
                }))
            },
            popup: function() {
                if (e("body").hasClass("active-light-box") && e.fn.prettyPhoto && !(e(window).width() < 700)) {
                    var t = publisher_theme_global_loc.lightbox.not_classes.split(" "),
                        a = function() {
                            var a = e(this);
                            if (!a.attr("href")) return !1;
                            if (void 0 !== a.data("not-rel")) return !1;
                            var s = !1;
                            return t.length > 0 && t.forEach(function(e, t) {
                                "" != e && a.hasClass(e) && (s = !0)
                            }), !s && a.attr("href").match(/\.(jp?g|png|bmp|jpeg|gif)((\?.+$)|$)/)
                        };
                    e(".entry-content a,.single-featured a.open-lightbox").has("img").filter(a).attr("rel", "prettyPhoto");
                    var s = 1;
                    e(".entry-content .gallery,.entry-content .tiled-gallery").each(function() {
                        e(this).find("a").has("img").filter(a).attr("rel", "prettyPhoto[gallery_" + s + "]"), s++
                    }), e("a[rel^='prettyPhoto']").prettyPhoto(Publisher_Theme.prettyPhotoSettings)
                }
            },
            gallery: function() {
                if (e.fn.fotorama) {
                    jQuery(".fotorama").fotorama({
                        width: "100%",
                        loop: !0,
                        margin: 10,
                        thumbwidth: 85,
                        thumbheight: 62,
                        thumbmargin: 9,
                        transitionduration: 800,
                        arrows: !1,
                        click: !1,
                        swipe: !0
                    }).on("fotorama:show", function(t, a, s) {
                        e(this).closest(".better-gallery").find(".count .current").html(a.activeFrame.i)
                    });
                    (e("body").hasClass("active-light-box") && e.fn.prettyPhoto || e(window).width() < 700) && jQuery(".better-gallery").on("click", ".slide-link", function() {
                        event.preventDefault();
                        var t = e(this).closest(".better-gallery").data("gallery-id"),
                            a = Publisher_Theme.prettyPhotoSettings;
                        return a.changepicturecallback = function() {
                            e("#gallery-" + t).find(".fotorama").data("fotorama").show(e(".pp_gallery").find("li").index(e(".selected")))
                        }, e.fn.prettyPhoto(a), e.prettyPhoto.open(window["prt_gal_img_" + t], window["prt_gal_cap_" + t], window["prt_gal_cap_" + t]), e.prettyPhoto.changePage(e("#gallery-" + t).find(".fotorama").data("fotorama").activeFrame.i - 1), !1
                    }), jQuery(".better-gallery .gallery-title .next").click(function() {
                        e(this).closest(".better-gallery").find(".fotorama").data("fotorama").show(">")
                    }), jQuery(".better-gallery .gallery-title .prev").click(function() {
                        e(this).closest(".better-gallery").find(".fotorama").data("fotorama").show("<")
                    })
                }
            },
            bsPrettyTabs: function() {
                if (publisher_theme_global_loc.share.more) {
                    e(".share-handler-wrap").on("click", ".bs-pretty-tabs-more", function() {
                        var t = e(this).next(".bs-pretty-tabs-elements");
                        t.closest(".share-handler-wrap").bsPrettyTabs("stop"), t.closest(".bs-pretty-tabs-container").replaceWith(t.html())
                    }).on("after-pretty-tabs", function(e, t) {
                        var a = t.$element.children(".social-item");
                        a.removeClass("first last"), a.filter(":first").addClass("first"), a.filter(":last").addClass("last")
                    }).bsPrettyTabs({
                        menuContainerPosition: "end",
                        menuContainerTag: "span",
                        getContainerWidth: function(e) {
                            return window.innerWidth > 540 && (e -= Math.floor(.1 * e)), e
                        },
                        moreContainer: '<a class="bs-pretty-tabs-more post-share-btn"><i class="bf-icon fa fa-plus"></i></a><ul class="bs-pretty-tabs-elements"></ul>'
                    })
                }
                if ("enable" === publisher_theme_global_loc.main_menu.more_menu) {
                    var t = e("#header").hasClass("header-style-6"),
                        a = '<a href="#" class="bs-pretty-tabs-more">';
                    t && (a += '<i class="bf-icon fa fa-bars" aria-hidden="true"></i>'), a += publisher_theme_global_loc.translations.tabs_more + '</a><ul class="sub-menu bs-pretty-tabs-elements"></ul>', e("#main-navigation").parent().bsPrettyTabs({
                        menuContainerPosition: "end",
                        menuContainerTag: "li",
                        itemsWrapperSelector: "#main-navigation",
                        moreContainer: a,
                        initWrapperContainer: function(e) {
                            return e.addClass("menu-item-has-children better-anim-fade"), t && e.addClass("menu-have-icon menu-icon-type-fontawesome"), e
                        },
                        styleChangesAt: [992, 780]
                    })
                }
                e(".section-heading.multi-tab").bsPrettyTabs({
                    moreContainer: '<a href="#" class="bs-pretty-tabs-more other-link"><span class="h-text">' + publisher_theme_global_loc.translations.tabs_all + ' <i class="fa fa-angle-down" aria-hidden="true"></i></span></a><div class="bs-pretty-tabs-elements"></div>',
                    mustDisplayClass: "main-link",
                    getContainerWidth: function(e) {
                        return .8 * e
                    }
                }), e("#top-navigation").bsPrettyTabs({
                    menuContainerPosition: "end",
                    menuContainerTag: "li",
                    moreContainer: '<a href="#" class="bs-pretty-tabs-more">' + publisher_theme_global_loc.translations.tabs_more + ' <i class="fa fa-angle-down" aria-hidden="true"></i></a><ul class="bs-pretty-tabs-elements sub-menu"></ul>',
                    getContainerWidth: function(e) {
                        return .9 * e
                    }
                }), e(".topbar").addClass("use-pretty-tabs")
            },
            bsPagination: function(t) {
                if (e.fn.Better_Ajax_Pagination) {
                    e(".bs-ajax-pagination", t).parent().Better_Ajax_Pagination({
                        after_response: function() {}
                    })
                }
            },
            initLazyLoad: function() {
                function t(e) {
                    e = e || "en_US",
                        function(t, a, s) {
                            var n, i = t.getElementsByTagName(a)[0];
                            t.getElementById(s) || ((n = t.createElement(a)).id = s, n.src = "//connect.facebook.net/" + e + "/sdk.js#xfbml=1&version=v2.4", i.parentNode.insertBefore(n, i))
                        }(document, "script", "facebook-jssdk")
                }

                function a(e) {
                    "" !== e && (window.___gcfg = {
                            lang: e
                        }),
                        function() {
                            var e = document.createElement("script");
                            e.type = "text/javascript", e.async = !0, e.src = "https://apis.google.com/js/plusone.js";
                            var t = document.getElementsByTagName("script")[0];
                            t.parentNode.insertBefore(e, t)
                        }()
                }
                "function" == typeof Blazy && (bsLazy = new Blazy({
                    selector: ".img-holder,.img-cont,.bs-lazy,.bs-lazy-iframe-wrapper iframe,.wp-video-shortcode,img[data-src],iframe[data-src]",
                    loadInvisible: function(e, t) {
                        if (!t)
                            for (; e = e.parentElement;)
                                if (e.className.match(/\bmega-menu\b/i)) return !1;
                        return !0
                    },
                    successClass: " ",
                    success: function(e) {
                        e.className = e.className + " b-load-ready", setTimeout(function() {
                            e.className = e.className.replace("b-load-ready", "") + " b-loaded"
                        }, 100)
                    },
                    itemLoaded: function() {
                        e.fn.fitVids && e(this.parentNode).fitVids()
                    }
                }));
                var s = e("#fb-root").length,
                    n = e(".google-plus-block");
                if ("function" == typeof OnScreen) {
                    var i = new OnScreen({
                        tolerance: -100,
                        container: window
                    });
                    s && i.on("enter", ".fb-page", function(e) {
                        t(e.getAttribute("data-locale")), i.off("enter", ".fb-page")
                    }), n.length && i.on("enter", ".google-plus-block", function(e) {
                        a(e.getAttribute("data-locale")), i.off("enter", ".google-plus-block")
                    })
                } else s && t(e(".fb-page").data("locale")), n.length && a(n.data("locale"))
            },
            initDeferredElements: function() {
                if (e.fn.Better_Deferred_Loading) {
                    var t = this;
                    e.fn.Better_Deferred_Loading({
                        afterSuccessDeferredAjax: function(e) {
                            t.bsPagination(e), t.refreshLazyImages()
                        }
                    })
                }
            },
            handleAjaxifiedComments: function() {
                e(document).on("click", ".comment-ajaxified-placeholder", function(t) {
                    t.preventDefault();
                    var a = e(this),
                        s = a.closest(".comments-template");
                    a.hide();
                    var n = e("<div></div>", {
                        class: "deferred-loading-container",
                        height: 40
                    });
                    n.append('<div class="bs-pagin-loading-wrapper">' + publisher_theme_global_loc.loading + "</div>"), n.appendTo(s), e.ajax({
                        url: publisher_theme_global_loc.ajax_url,
                        type: "post",
                        dataType: "json",
                        data: e.extend(a.data(), {
                            action: "ajaxified-comments"
                        })
                    }).done(function(t) {
                        var a = s.parent();
                        s.replaceWith(t.rawHTML), e(".deferred-loading-container", s).remove(), e(document).trigger("ajaxified-comments-loaded", [s, t]), e.fn.Better_Deferred_Loading && e.fn.Better_Deferred_Loading({
                            context: a.find(".bs-comments-wrapper")
                        })
                    })
                })
            },
            handleInfinitySinglePostLoading: function(t) {
                function a(t) {
                    var a = ".content-column .post.post-" + t.post_id,
                        s = e(a);
                    s.data("post-permalink", t.permalink), s.data("post-id", t.post_id), s.data("post-count-calc", t.counter), p.on("enter", a, function(t) {
                        var a = e(t),
                            s = a.data("post-id"),
                            n = a.data("post-count-calc"),
                            i = a.data("post-permalink");
                        if (o === s) return !1;
                        if (i && history.pushState({}, void 0, i), n) {
                            if ("function" == typeof ga) {
                                var r = e("<a></a>", {
                                    href: i
                                });
                                ga("send", "pageview", r[0].pathname)
                            }
                            a.data("post-count-calc", !1)
                        }
                        o = s
                    })
                }

                function s(s) {
                    m.off("enter", "#" + r);
                    var o = e(s),
                        l = e("<div></div>", {
                            class: "deferred-loading-container",
                            height: 200
                        });
                    l.append('<div class="bs-pagin-loading-wrapper">' + publisher_theme_global_loc.loading + "</div>"), l.appendTo(o), i && i.abort(), i = e.ajax({
                        url: publisher_theme_global_loc.ajax_url,
                        type: "post",
                        dataType: "json",
                        data: {
                            action: "ajax-get-post",
                            post_ID: t,
                            loaded_posts: d
                        }
                    }).done(function(t) {
                        e(".deferred-loading-container", o).remove(), t.rawHTML && o.before(t.rawHTML), t.loaded_posts && (d = d.concat(t.loaded_posts)), t.haveNext && n(), h.setup_post(), t.posts_info && t.posts_info.forEach(function(e) {
                            a({
                                permalink: e.link,
                                post_id: e.id,
                                counter: !0
                            })
                        })
                    })
                }

                function n() {
                    m.on("enter", "#" + r, s)
                }
                if (e("body").hasClass("single") && e("body").hasClass("infinity-related-post") && "function" == typeof OnScreen) {
                    var i, o, r = "infinity-single-post-loading",
                        l = e(".content-column"),
                        c = l.find(".single-post-content"),
                        d = [parseInt(c.attr("id").replace(/[^0-9\.]/g, ""))],
                        h = this,
                        m = new OnScreen({
                            tolerance: -500,
                            container: window
                        }),
                        p = new OnScreen({
                            tolerance: 100,
                            container: window
                        });
                    e(r).length || e("<div></div>", {
                        id: r
                    }).appendTo(l), n(), a({
                        permalink: window.location.href,
                        post_id: t
                    })
                }
            },
            setup_post: function() {
                this.initLazyLoad(), this.gallery(), this.setup_sliders(), this.setup_video_players(), this.small_style_fixes(), this.init_sticky_columns(), this.betterstudio_editor_shortcodes(), this.setup_menu(), this.popup(), this.fix_element_query(), this.bsPrettyTabs(), this.bsPagination(), this.initDeferredElements()
            },
            woo_commerce: function() {
                var t = !1;
                e(".woocommerce div.product .woocommerce-tabs ul.tabs li").bind("cssClassChanged", function() {
                    1 != t && (t = !0, e(this).hasClass("active") && (e(this).closest("ul.tabs").find("a.active").removeClass("active"), e(this).find("a").addClass("active")), t = !1)
                }), e(window).on("added_to_cart", function(t, a, s) {
                    void 0 !== a["total-items-in-cart"] && e(".main-menu-container .shop-cart-container").length >= 1 && (e(".main-menu-container .shop-cart-container .cart-handler .cart-count").length < 1 ? e(".main-menu-container .shop-cart-container .cart-handler").append('<span class="cart-count">' + a["total-items-in-cart"] + "</span>") : e(".main-menu-container .shop-cart-container .cart-handler .cart-count").html(a["total-items-in-cart"]))
                })
            },
            visual_composer: function() {
                this.is_rtl()
            },
            init_off_canvas_menu: function() {
                function t(t) {
                    var a = "close" === t;
                    e(".off-canvas-overlay")[a ? "fadeOut" : "fadeIn"](600), e(document.body)[a ? "removeClass" : "addClass"]("off-canvas-menu-open"), a ? (e(".off-canvas-container").addClass("closing"), e(".site-header.header-style-6.full-width .bs-pinning-block.pinned").css("right", "0"), setTimeout(function() {
                        e("body").css("padding-right", "inherit"), e(".off-canvas-container").removeClass("closing"), e(document.body).removeClass("off-canvas-scroll")
                    }, 510)) : setTimeout(function() {
                        var t = jQuery(document).innerWidth();
                        e(document.body).addClass("off-canvas-scroll"), t = jQuery(document).width() - t, e("body").css("padding-right", t + "px"), e(".site-header.header-style-6.full-width .bs-pinning-block.pinned").css("right", t + "px")
                    }, 610)
                }
                var a = this;
                ! function() {
                    var t = e(".off-canvas-menu-fallback");
                    if (0 !== t.length) {
                        var a = e("#main-navigation").clone();
                        a.removeAttr("id").removeAttr("class").addClass("menu clearfix bsm-initialized"), a.find(".mega-menu").each(function() {
                            var t = e(this);
                            if (t.hasClass("mega-type-link")) t.replaceWith(t.find(".content-wrap > ul.mega-links").removeAttr("class").addClass("sub-menu"));
                            else if (t.hasClass("mega-type-link-list")) t.replaceWith(t.find("ul.mega-links").removeAttr("class").addClass("sub-menu"));
                            else if (t.hasClass("tabbed-grid-posts")) {
                                var a = t.find(".tabs-section");
                                a.removeAttr("class").addClass("sub-menu").find("li:first-child").remove(), a.find("a").removeAttr("data-target").removeAttr("data-deferred-init").removeAttr("data-toggle").removeAttr("data-deferred-event"), a.find(".fa").remove(), t.replaceWith(a)
                            } else t.closest("li").removeClass("menu-item-has-children"), t.remove()
                        }), a.find("li.bs-pretty-tabs-container").remove(), t.replaceWith(a)
                    }
                }(), e(".off-canvas-menu-icon, .off-canvas-inner .canvas-close").on("click", function() {
                    if (e(document.body).hasClass("off-canvas-menu-open")) {
                        if (t("close"), e(this).hasClass("canvas-close")) {
                            var s = e(this).addClass("open");
                            setTimeout(function() {
                                s.removeClass("open")
                            }, 800)
                        }
                    } else a.refreshLazyImages(), t("open")
                }), e(".off-canvas-container").on("click", function(a) {
                    if (!e(a.target).hasClass("off-canvas-container")) return !0;
                    t("close")
                })
            },
            init_more_stories: function() {
                function t(e) {
                    var t = {};
                    t[a.hasClass("left") ? "left" : "right"] = e ? 0 : -1 * a.outerWidth(), a.show().animate(t, 400, function() {
                        e && s.refreshLazyImages()
                    }), a[e ? "addClass" : "removeClass"]("active")
                }
                if ("yes" !== docCookies.getItem("hide-more-stories")) {
                    var a = e(".more-stories"),
                        s = this;
                    if (0 !== a.length) {
                        var n = e(window),
                            i = parseInt(a.data("scroll-top")) || 450;
                        n.on("scroll.more-stories", function() {
                            var e = n.scrollTop() > i;
                            e !== a.hasClass("active") && t(e)
                        }), a.on("click", ".more-stories-close", function() {
                            n.off("scroll.more-stories"), t(!1);
                            var e = a.data("close-settings").split(";"),
                                s = e[0],
                                i = e[1] || "/";
                            if (s && "always" != s) {
                                var o = 0,
                                    r = 0;
                                if ("session" !== s) {
                                    var l = s.substr(-1).toUpperCase();
                                    switch (r = s.substr(0, s.length - 1), l) {
                                        case "H":
                                            o = 3600;
                                            break;
                                        case "D":
                                            o = 86400;
                                            break;
                                        case "W":
                                            o = 604800;
                                            break;
                                        case "M":
                                            o = 18144e3
                                    }
                                }
                                docCookies.setItem("hide-more-stories", "yes", r * o, i)
                            }
                            return !1
                        })
                    }
                }
            },
            init_continue_reading: function() {
                e(".continue-reading-btn").on("click", function(t) {
                    var a = e(".continue-reading-content"),
                        s = e(".continue-reading-container"),
                        n = e(this);
                    t.preventDefault(), a.css("max-height", "3000px").delay(750).queue(function(e) {
                        a.removeClass("close"), n.fadeOut(function() {
                            s.remove()
                        }), a.css("max-height", "none"), e()
                    })
                })
            },
            print_style_fix: function() {
                var t = function() {
                    !e("body").hasClass("fixed-for-print") && e("body").hasClass("bs-ll-a") && (e("img").each(function() {
                        void 0 === e(this).attr("src") && void 0 !== e(this).data("src") && e(this).attr("src", e(this).data("src"))
                    }), e("body").addClass("fixed-for-print"))
                };
                if (e(".post-share").on("click", ".social-item.print", function(e) {
                        t(), window.print(), e.preventDefault()
                    }), e("body").hasClass("bs-ll-a")) {
                    if (jQuery(document).bind("keydown", function(e) {
                            80 == e.keyCode && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey) && t()
                        }), window.matchMedia) {
                        window.matchMedia("print").addListener(function(e) {
                            e.matches && t()
                        })
                    }
                    window.onbeforeprint = t
                }
            }
        }
    }(jQuery);
jQuery(document).ready(function() {
    function e() {
        var e = function(e) {
            return {
                wrapperSelector: ".main-menu-container .search-container",
                $wrapper: !1,
                _xhr: !1,
                prevSearchQuery: !1,
                _doingAjax: !1,
                localize: e.extend({
                    ajax_url: !1,
                    previewMarkup: !1
                }, publisher_theme_ajax_search_loc),
                ajaxRequestDelay: 300,
                EL: {
                    INPUT: "search-field",
                    PREVIEW: "search-preview",
                    LOADING: "ajax-search-loading"
                },
                init: function() {
                    this.$wrapper = e(this.wrapperSelector), this.prepareMarkup(), this.bindEvents()
                },
                prepareMarkup: function() {
                    var t = this.findElements(this.EL.PREVIEW);
                    t.length || (t = e("<div/>", {
                        class: this.EL.PREVIEW
                    }).appendTo(this.$wrapper), this.localize.previewMarkup && t.html(this.localize.previewMarkup));
                    this.findElements(this.EL.LOADING).length || (this._createLoadingELement().appendTo(this.$wrapper.find(".search-handler")).hide(), this._addLoadingInPreview())
                },
                _createLoadingELement: function() {
                    return e("<i/>", {
                        class: "fa fa-refresh fa-spin fa-fw ajax-loading-icon"
                    })
                },
                _addLoadingInPreview: function() {
                    if (!this._doingAjax) {
                        var t, a = e("<span/>", {
                                class: this.EL.LOADING
                            }),
                            s = this.findSections(this.EL.PREVIEW);
                        a.html('<i class="fa fa-refresh fa-spin fa-fw ajax-loading-icon"></i>');
                        for (t in s) s[t].html(" "), a.clone().appendTo(s[t])
                    }
                },
                _ajax: function(t, a, s) {
                    var n = this,
                        i = e.extend({
                            url: this.localize.ajax_url,
                            data: e.extend({
                                action: "ajaxified-search"
                            }, a)
                        }, s);
                    return n._doingAjax = !0, e.ajax({
                        url: i.url,
                        type: "POST",
                        dataType: "json",
                        data: i.data
                    }).done(function() {
                        n._doingAjax = !1, t.apply(this, arguments)
                    })
                },
                findElements: function(e) {
                    return this.$wrapper.find("." + e)
                },
                findSections: function(t) {
                    var a;
                    if (a = t ? this.findElements(t) : this.$wrapper) {
                        var s = {};
                        return e("[data-section-name]", a).each(function() {
                            var t = e(this),
                                a = t.data("section-name");
                            a && (s[a] = t)
                        }), s
                    }
                    return !1
                },
                listSections: function() {
                    var e = this.findSections();
                    return e ? Object.keys(e) : []
                },
                bindEvents: function() {
                    var t = this;
                    t.findElements(this.EL.INPUT).on("keyup.ajax-search", function(a) {
                        if (!a.ctrlKey && !a.metaKey) {
                            var s = e.trim(this.value);
                            s !== t.prevSearchQuery && (t.handleUserSearch.call(t, this), t.prevSearchQuery = s)
                        }
                    })
                },
                hidePreviewSection: function() {
                    e(".bs-pinning-wrapper").removeClass("stop-smarty-pinning");
                    var t = e("#header .bs-pinning-block");
                    t.hasClass("pinned") && t.removeClass("pinned top normal").addClass("unpinned")
                },
                showPreviewSection: function() {
                    e(".bs-pinning-wrapper").addClass("stop-smarty-pinning")
                },
                handleUserSearch: function(e) {
                    var t = e.value,
                        a = this;
                    t ? (a.triggerLoading("on"), a._xhr && a._xhr.abort(), a.$wrapper.finish().delay(a.ajaxRequestDelay).queue(function() {
                        a._xhr = a._ajax(function(e) {
                            a.appendHTML(e), a.triggerLoading("off"), "object" == typeof bsLazy && bsLazy.revalidate()
                        }, {
                            s: t,
                            sections: a.listSections(),
                            full_width: a.localize.full_width
                        })
                    })) : a.hidePreviewSection()
                },
                bindCloseEvent: function() {
                    e(document);
                    var t = this;
                    this.findElements(this.EL.PREVIEW).on("click.ajax-search", function(e) {
                        e.stopPropagation()
                    }), e(".search-container .search-handler").on("click", function(a) {
                        e(".search-container").hasClass("open") || t.$wrapper.hasClass("result-results-exist") && t.showPreviewSection()
                    })
                },
                appendHTML: function(e) {
                    if ("object" == typeof e.sections) {
                        var t = this.findSections(this.EL.PREVIEW);
                        if (t) {
                            var a;
                            for (a in t) "string" == typeof e.sections[a] && t[a].html(e.sections[a]);
                            this.$wrapper.addClass("result-results-exist")
                        }
                    }
                    this.bindCloseEvent()
                },
                triggerLoading: function(t) {
                    var a = "on" === t;
                    this.findElements(this.EL.LOADING)[a ? "show" : "hide"]();
                    var s = e(".ajax-loading-icon", this.$wrapper);
                    s[a ? "show" : "hide"](), s.siblings()[a ? "hide" : "show"](), a && (this.showPreviewSection(), this._addLoadingInPreview())
                }
            }
        }(jQuery);
        Publisher_Theme.init(), jQuery("body").hasClass("active-ajax-search") && e.init()
    }
    window.self === window.top ? e() : setTimeout(e)
}), "function" == typeof OnScreen && (bsrj_retinajs(document.querySelectorAll(".site-header img#site-logo")), bsrj_retinajs(document.querySelectorAll(".rh-header .logo-container img")), bsrj_retinajs(document.querySelectorAll(".bs-subscribe-newsletter .powered-by img")));