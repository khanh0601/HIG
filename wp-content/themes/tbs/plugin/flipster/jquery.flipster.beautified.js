/*! jQuery.Flipster, v1.1.3 (built 2019-05-01) */
!function(I, t, P) {
    "use strict";
    function D(n, i) {
        var a = null;
        return function() {
            var t = this, e = arguments;
            null === a && (a = setTimeout(function() {
                n.apply(t, e), a = null;
            }, i));
        };
    }
    var r, e = (r = {}, function(t) {
        if (r[t] !== P) return r[t];
        var e = document.createElement("div").style, n = t.charAt(0).toUpperCase() + t.slice(1), i = (t + " " + [ "webkit", "moz", "ms", "o" ].join(n + " ") + n).split(" ");
        for (var a in i) if (i[a] in e) return r[t] = i[a];
        return r[t] = !1;
    }), L = "http://www.w3.org/2000/svg", E = I(t), M = e("transform"), i = {
        itemContainer: "ul",
        itemSelector: "li",
        start: "center",
        fadeIn: 400,
        loop: !1,
        autoplay: !1,
        pauseOnHover: !0,
        style: "coverflow",
        spacing: -.6,
        click: !0,
        keyboard: !0,
        scrollwheel: !0,
        touch: !0,
        nav: !1,
        buttons: !1,
        buttonPrev: "Previous",
        buttonNext: "Next",
        onItemSwitch: !1
    }, T = {
        main: "flipster",
        active: "flipster--active",
        container: "flipster__container",
        nav: "flipster__nav",
        navChild: "flipster__nav__child",
        navItem: "flipster__nav__item",
        navLink: "flipster__nav__link",
        navCurrent: "flipster__nav__item--current",
        navCategory: "flipster__nav__item--category",
        navCategoryLink: "flipster__nav__link--category",
        button: "flipster__button",
        buttonPrev: "flipster__button--prev",
        buttonNext: "flipster__button--next",
        item: "flipster__item",
        itemCurrent: "flipster__item--current",
        itemPast: "flipster__item--past",
        itemFuture: "flipster__item--future",
        itemContent: "flipster__item__content"
    }, X = new RegExp("\\b(" + T.itemCurrent + "|" + T.itemPast + "|" + T.itemFuture + ")(.*?)(\\s|$)", "g"), j = new RegExp("\\s\\s+", "g");
    I.fn.flipster = function(e) {
        if ("string" == typeof e) {
            var n = Array.prototype.slice.call(arguments, 1);
            return this.each(function() {
                var t = I(this).data("methods");
                return t[e] ? t[e].apply(this, n) : this;
            });
        }
        var k = I.extend({}, i, e);
        return this.each(function() {
            var t, r, o, e, l, s, c, u, f, i = I(this), p = [], v = 0, a = !1, n = !1;
            function h(e) {
                return e = e || "next", I('<button class="' + T.button + " " + ("next" === e ? T.buttonNext : T.buttonPrev) + '" role="button" />').html(function(t) {
                    var e = "next" === t ? k.buttonNext : k.buttonPrev;
                    return "custom" === k.buttons ? e : '<svg viewBox="0 0 13 20" xmlns="' + L + '" aria-labelledby="title"><title>' + e + '</title><polyline points="10,3 3,10 10,17"' + ("next" === t ? ' transform="rotate(180 6.5,10)"' : "") + "/></svg>";
                }(e)).on("click", function(t) {
                    _(e), t.preventDefault();
                });
            }
            function d() {
                i.css("transition", ""), r.css("transition", ""), l.css("transition", "");
            }
            function m(a) {
                a && (i.css("transition", "none"), r.css("transition", "none"), l.css("transition", "none")), 
                o = r.width(), r.height(function() {
                    var t, e = 0;
                    return l.each(function() {
                        t = I(this).height(), e < t && (e = t);
                    }), e;
                }()), o ? (e && (clearInterval(e), e = !1), l.each(function(t) {
                    var e, n, i = I(this);
                    i.attr("class", function(t, e) {
                        return e && e.replace(X, "").replace(j, " ");
                    }), e = i.outerWidth(), 0 !== k.spacing && i.css("margin-right", e * k.spacing + "px"), 
                    n = i.position().left, p[t] = -1 * (n + e / 2 - o / 2), t === l.length - 1 && (g(), 
                    a && setTimeout(d, 1));
                })) : e = e || setInterval(function() {
                    m(a);
                }, 500);
            }
            function g() {
                var e, n, i, a = l.length;
                l.each(function(t) {
                    e = I(this), n = " ", i = t === v ? (n += T.itemCurrent, a + 1) : t < v ? (n += T.itemPast + " " + T.itemPast + "-" + (v - t), 
                    a - (v - t)) : (n += T.itemFuture + " " + T.itemFuture + "-" + (t - v), a - (t - v)), 
                    e.css("z-index", i).attr("class", function(t, e) {
                        return e && e.replace(X, "").replace(j, " ") + n;
                    });
                }), 0 <= v && (o && p[v] !== P || m(!0), M ? r.css("transform", "translateX(" + p[v] + "px)") : r.css({
                    left: p[v] + "px"
                })), function() {
                    if (k.nav) {
                        var t = s.data("flip-category");
                        u.removeClass(T.navCurrent), f.filter(function() {
                            return I(this).data("index") === v || t && I(this).data("category") === t;
                        }).parent().addClass(T.navCurrent);
                    }
                }();
            }
            function _(t) {
                var e = v;
                if (!(l.length <= 1)) return "prev" === t ? 0 < v ? v-- : k.loop && (v = l.length - 1) : "next" === t ? v < l.length - 1 ? v++ : k.loop && (v = 0) : "number" == typeof t ? v = t : t !== P && (v = l.index(t), 
                k.loop && e != v && (e == l.length - 1 && v != l.length - 2 && (v = 0), 0 == e && 1 != v && (v = l.length - 1))), 
                s = l.eq(v), v !== e && k.onItemSwitch && k.onItemSwitch.call(i, l[v], l[e]), g(), 
                i;
            }
            function y(t) {
                return k.autoplay = t || k.autoplay, clearInterval(a), a = setInterval(function() {
                    var t = v;
                    _("next"), t !== v || k.loop || clearInterval(a);
                }, k.autoplay), i;
            }
            function b() {
                return clearInterval(a), a = 0, i;
            }
            function x(t) {
                return b(), k.autoplay && t && (a = -1), i;
            }
            function w() {
                m(!0), i.hide().css("visibility", "").addClass(T.active).fadeIn(k.fadeIn);
            }
            function C() {
                if (r = i.find(k.itemContainer).addClass(T.container), !((l = r.find(k.itemSelector)).length <= 1)) return l.addClass(T.item).each(function() {
                    var t = I(this);
                    t.children("." + T.itemContent).length || t.wrapInner('<div class="' + T.itemContent + '" />');
                }), k.click && l.on("click.flipster touchend.flipster", function(t) {
                    n || (I(this).hasClass(T.itemCurrent) || t.preventDefault(), _(this));
                }), k.buttons && 1 < l.length && (i.find("." + T.button).remove(), i.append(h("prev"), h("next"))), 
                function() {
                    var s = {};
                    !k.nav || l.length <= 1 || (c && c.remove(), c = I('<ul class="' + T.nav + '" role="navigation" />'), 
                    f = I(""), l.each(function(t) {
                        var e = I(this), n = e.data("flip-category"), i = e.data("flip-title") || e.attr("title") || t, a = I('<a href="#" class="' + T.navLink + '">' + i + "</a>").data("index", t);
                        if (f = f.add(a), n) {
                            if (!s[n]) {
                                var r = I('<li class="' + T.navItem + " " + T.navCategory + '">'), o = I('<a href="#" class="' + T.navLink + " " + T.navCategoryLink + '" data-flip-category="' + n + '">' + n + "</a>").data("category", n).data("index", t);
                                s[n] = I('<ul class="' + T.navChild + '" />'), f = f.add(o), r.append(o, s[n]).appendTo(c);
                            }
                            s[n].append(a);
                        } else c.append(a);
                        a.wrap('<li class="' + T.navItem + '">');
                    }), c.on("click", "a", function(t) {
                        var e = I(this).data("index");
                        0 <= e && (_(e), t.preventDefault());
                    }), "after" === k.nav ? i.append(c) : i.prepend(c), u = c.find("." + T.navItem));
                }(), 0 <= v && _(v), i;
            }
            t = {
                jump: _,
                next: function() {
                    return _("next");
                },
                prev: function() {
                    return _("prev");
                },
                play: y,
                stop: b,
                pause: x,
                index: C
            }, i.data("methods", t), i.hasClass(T.active) || function() {
                var t;
                if (i.css("visibility", "hidden"), C(), l.length <= 1) i.css("visibility", ""); else {
                    t = !!k.style && "flipster--" + k.style.split(" ").join(" flipster--"), i.addClass([ T.main, M ? "flipster--transform" : " flipster--no-transform", t, k.click ? "flipster--click" : "" ].join(" ")), 
                    k.start && (v = "center" === k.start ? Math.floor(l.length / 2) : k.start), _(v);
                    var e = i.find("img");
                    if (e.length) {
                        var n = 0;
                        e.on("load", function() {
                            ++n >= e.length && w();
                        }), setTimeout(w, 750);
                    } else w();
                    E.on("resize.flipster", D(m, 400)), k.autoplay && y(), k.pauseOnHover && r.on("mouseenter.flipster", function() {
                        a ? x(!0) : b();
                    }).on("mouseleave.flipster", function() {
                        -1 === a && y();
                    }), function(t) {
                        k.keyboard && (t[0].tabIndex = 0, t.on("keydown.flipster", D(function(t) {
                            var e = t.which;
                            37 !== e && 39 !== e || (_(37 === e ? "prev" : "next"), t.preventDefault());
                        }, 250)));
                    }(i), function(t) {
                        if (k.scrollwheel) {
                            var e, n, i = !1, a = 0, r = 0, o = 0, s = /mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase());
                            t.on("mousewheel.flipster wheel.flipster", function() {
                                i = !0;
                            }).on("mousewheel.flipster wheel.flipster", D(function(t) {
                                clearTimeout(r), r = setTimeout(function() {
                                    o = a = 0;
                                }, 300), t = t.originalEvent, o += t.wheelDelta || -1 * (t.deltaY + t.deltaX), Math.abs(o) < 25 && !s || (a++, 
                                n !== (e = 0 < o ? "prev" : "next") && (a = 0), n = e, (a < 6 || a % 3 == 0) && _(e), 
                                o = 0);
                            }, 50)), E.on("mousewheel.flipster wheel.flipster", function(t) {
                                i && (t.preventDefault(), i = !1);
                            });
                        }
                    }(r), function(t) {
                        var e, n, i, a, r, o;
                        k.touch && t.on({
                            "touchstart.flipster": function(t) {
                                t = t.originalEvent, e = t.touches ? t.touches[0].clientX : t.clientX, n = t.touches ? t.touches[0].clientY : t.clientY;
                            },
                            "touchmove.flipster": function(t) {
                                t = t.originalEvent, i = t.touches ? t.touches[0].clientX : t.clientX, a = t.touches ? t.touches[0].clientY : t.clientY, 
                                o = i - e, r = a - n, 30 < Math.abs(o) && Math.abs(r) < 100 && t.preventDefault();
                            },
                            "touchend.flipster touchcancel.flipster ": function() {
                                o = i - e, r = a - n, 30 < Math.abs(o) && Math.abs(r) < 100 && _(0 < o ? "prev" : "next");
                            }
                        });
                    }(r);
                }
            }();
        });
    };
}(jQuery, window);