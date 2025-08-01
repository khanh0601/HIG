/*!
 * fullpage.js Parallax Effect Extension 0.2.3 for fullPage.js v3
 * https://github.com/alvarotrigo/fullPage.js
 *
 * @license This code has been bought from www.alvarotrigo.com/fullPage/extensions/ and it is not free to use or distribute.
 * Copyright (C) 2016 alvarotrigo.com - A project by Alvaro Trigo
 */
/* eslint-disable */
(function (window, document, $) {
    $.fn.fp_parallaxExtension = function() {
    var f, c, o, d, i, u, s, l, e, t, a = this, p = window.fp_utils, r = window.fullpage_api, v = p.$, n = r.getFullpageData(), m = n.options, g = n.internals, x = ".fullpage-wrapper", h = "active", E = "." + h, b = ".fp-section", S = b + E, y = "fp-slide", w = "." + y, L = w + E, A = "fp-notransition", M = "fp-bg", N = "." + M, R = "reveal", T = "cover", C = "fp-parallax-stylesheet", I = "fp-parallax-transitions", z = "#" + I, O = "fp-parallax-transition-class", k = "#" + O, B = 0, H = !1, F = !1, q = !0, W = !0, _ = !1, V = !1, G = !1, P = !1, X = !1, Y = !0 === m.parallax || "slides" === m.parallax, D = !0 === m.parallax || "sections" === m.parallax, U = p.closest, $ = p.addClass, j = p.removeClass, J = p.hasClass, K = p.css, Q = p.nextAll, Z = p.prevAll;
    function ee(e) {
        return {
            cover: {
                offsetNormal: e ? 0 : c
            },
            reveal: {
                offsetNormal: e ? -c : 0
            }
        };
    }
    function te(e) {
        return {
            cover: {
                offsetNormal: e ? 0 : o
            },
            reveal: {
                offsetNormal: e ? -o : 0
            }
        };
    }
    function ne(e) {
        return e * d / 100;
    }
    function oe(e) {
        return e * i / 100;
    }
    function ie() {
        return window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName("body")[0].clientWidth;
    }
    function ae() {
        s && Ae(v(S).length ? v(S)[0] : v(b)[0], 0);
    }
    function re() {
        if (D) {
            var e = v(S).length ? v(S)[0] : v(b)[0], t = f === R, n = t ? Q(e) : Z(e), o = t ? Z(e) : Q(e);
            n.forEach(function(e) {
                Ae(e, ee(t)[f].offsetNormal, "silent");
            }), o.forEach(function(e) {
                Ae(e, 0, "silent");
            });
        }
        Y && v(b).forEach(function(e) {
            v(w, e).length && le(v(L, e).length ? v(L, e)[0] : v(w, e)[0]);
        });
    }
    function le(e) {
        var t = f === R, n = t ? Q(e) : Z(e), o = t ? Z(e) : Q(e);
        n.forEach(function(e) {
            Me(e, te(t)[f].offsetNormal, "silent");
        }), o.forEach(function(e) {
            Me(e, 0, "silent");
        });
    }
    function se(e) {
        var t = e.detail;
        i = ie(), t && !m.scrollBar ? (he(), Ee()) : be();
    }
    function fe(e) {
        a.destroy(), _ = !1;
    }
    function ce() {
        v(".fp-scrollable").forEach(function(e) {
            var t = v(N, e)[0];
            (v(".fp-scrollable", e).length || J(e, "fp-scrollable")) && null != t && p.prependTo(e.parentNode, t);
        });
    }
    function de(e) {
        e.detail ? be() : P = !0;
    }
    function ue(e) {
        e.detail, v(N).forEach(function(e) {
            e.setAttribute("data-final-x", 0), e.setAttribute("data-final-y", 0);
        }), u = v(b), re();
    }
    function pe(e) {
        e.detail.leavingSection, e.detail.destination, F = X = !0;
    }
    function ve(e) {
        var t = e.detail.leavingSection, n = e.detail.destination;
        Ae(t, ee(H)[f].offsetNormal, "silent");
        var o = v(w, t);
        o.length && o.forEach(function(e) {
            e !== n && Ae(e, 0, "silent");
        }), a.afterSlideLoads(v(w, t)[0]), X = !1;
    }
    function me(e) {
        var t = e.detail;
        V = !0, le("left" === t.xMovement ? v(w, v(S)[0])[0] : p.last(v(w, v(S)[0]))), setTimeout(function() {
            a.applyHorizontal(t);
        });
    }
    function ge(e) {
        var t = e.detail;
        G = !0, re(), setTimeout(function() {
            a.apply(t);
        });
    }
    function xe() {
        _ && (m.scrollBar || !m.autoScrolling || g.usingExtension("dragAndMove")) && function() {
            var e = g.usingExtension("dragAndMove") ? Math.abs(window.fp_dragAndMoveExtension.getCurrentScroll()) : p.getScrollTop(), t = e < B, n = p.index(v(S)[0], b), o = d + e;
            B = e;
            for (var i = 0; i < u.length; ++i) {
                var a = u[i], r = d + a.offsetTop;
                !t && a.offsetTop <= o ? n = i : t && e <= r && a.offsetTop < e && u.length > i + 1 && (n = i + 1);
            }
            var l = (d - (u[n].offsetTop - e)) * c / d;
            f !== R && (n -= 1);
            var s = f !== R ? l : -c + l;
            -1 < n && Ae(v(b)[n], s), 0 <= n - 1 && Ae(u[n - 1], ee(!1)[f].offsetNormal), void 0 !== u[n + 1] && Ae(u[n + 1], ee(!0)[f].offsetNormal);
        }();
    }
    function he() {
        var e = ".fp-bg{transition: transform " + m.scrollingSpeed + "ms " + m.easingcss3 + ";}.fp-slide, .fp-section{transition: background-position " + m.scrollingSpeed + "ms " + m.easingcss3 + ";}";
        m.autoScrolling && !m.scrollBar && Ne(I, e);
    }
    function Ee() {
        var e = ".fp-bg-animate{ transition: all " + m.scrollingSpeed + "ms " + m.easingcss3 + "}";
        Ne(O, e);
    }
    function be() {
        p.remove(v(z));
    }
    function Se() {
        clearTimeout(t), t = setTimeout(ye, 350);
    }
    function ye() {
        d = p.getWindowHeight(), i = ie(), c = ne(m.parallaxOptions.percentage), o = oe(m.parallaxOptions.percentage), 
        ae(), re(), we();
    }
    function we() {
        K(v(N), {
            height: d + "px"
        });
    }
    function Le(e) {
        return Math.round(2 * e) / 2;
    }
    function Ae(e, t, n) {
        var o = Le(t), i = v(w, e);
        if (i.length) {
            var a = v(L, e)[0];
            e = null != a ? a : i[0];
        }
        if (s) K(e, {
            "background-position-y": o + "px"
        }); else if (!J(e, y) || J(e, h) || void 0 !== n) {
            var r = v(N, e)[0];
            if (r) {
                var l = null != r.getAttribute("data-final-x") ? r.getAttribute("data-final-x") : 0;
                p.toggleClass(r, A, void 0 !== n), K(r, {
                    transform: "translateX(" + l + "px) translateY(" + o + "px)"
                }), r.setAttribute("data-final-x", l), r.setAttribute("data-final-y", o);
            }
        }
    }
    function Me(e, t, n) {
        var o = Le(t), i = s ? e : v(N, e)[0];
        if (i) if (!m.scrollBar && m.autoScrolling || $(i, "fp-bg-animate"), s) p.toggleClass(i, A, void 0 !== n), 
        K(i, {
            "background-position-x": o + "px"
        }); else {
            var a = 0, r = i.getAttribute("data-final-y");
            "none" !== r && null != r && (a = r), p.toggleClass(i, A, void 0 !== n || X), K(i, {
                transform: "translateX(" + o + "px) translateY(" + a + "px)"
            }), i.setAttribute("data-final-x", o), i.setAttribute("data-final-y", a);
        }
    }
    function Ne(e, t) {
        if (!v("#" + e).length) {
            var n = document.head || document.getElementsByTagName("head")[0];
            p.appendTo((o = e, i = t, (a = document.createElement("style")).type = "text/css", 
            a.id = o, a.styleSheet ? a.styleSheet.cssText = i : a.appendChild(document.createTextNode(i)), 
            a), n);
        }
        var o, i, a;
    }
    e = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame, 
    window.requestAnimationFrame = e, a.apply = function(e) {
        if (D && (P && he(), !e.localIsResizing && !m.scrollBar && m.autoScrolling)) if (("up" === e.yMovement || e.sectionIndex) && (!e.isMovementUp || e.leavingSection - 1) || !m.continuousVertical || G) {
            var t = ee(H = "up" === e.yMovement)[f].offsetNormal;
            Ae(v(b)[e.sectionIndex], 0), Ae(v(b)[e.leavingSection - 1], t), q = 1 === Math.abs(e.leavingSection - 1 - e.sectionIndex);
            for (var n = Math.min(e.leavingSection - 1, e.sectionIndex) + 1; n < Math.max(e.leavingSection - 1, e.sectionIndex); n++) Ae(v(b)[n], 0, "silent");
        } else ;
    }, a.applyHorizontal = function(e) {
        if (Y && (!e.localIsResizing || X) && "none" != e.xMovement) if ((l = void 0 !== e.direction && e.direction !== e.xMovement) && m.continuousHorizontal && !V) l = !1; else {
            var t = te(F = l ? "left" === e.direction : "left" === e.xMovement)[f].offsetNormal;
            if (Me(v(w, e.section)[e.slideIndex], 0), Me(v(w, e.section)[e.prevSlideIndex], t), 
            !(W = 1 === Math.abs(e.slideIndex - e.prevSlideIndex)) && !X) for (var n = Math.min(e.slideIndex, e.prevSlideIndex) + 1; n < Math.max(e.slideIndex, e.prevSlideIndex); n++) Me(v(w, e.section)[n], 0, "silent");
        }
    }, a.init = function() {
        var e, n;
        d = p.getWindowHeight(), i = ie(), f = m.parallaxOptions.type, c = ne(m.parallaxOptions.percentage), 
        o = oe(m.parallaxOptions.percentage), u = v(m.sectionSelector), s = "background" === m.parallaxOptions.property && !r.wordpress, 
        we(), (e = v(x)[0]).addEventListener("setAutoScrolling", se), e.addEventListener("destroy", fe), 
        e.addEventListener("onScroll", xe), e.addEventListener("afterResponsive", ue), e.addEventListener("onGrab", de), 
        e.addEventListener("onContinuousVertical", ge), e.addEventListener("onResize", Se), 
        e.addEventListener("afterRender", ce), e.addEventListener("afterRebuild", ce), e.addEventListener("onResetSliders", pe), 
        Y && e.addEventListener("onContinuosHorizontal", me), e.addEventListener("onEndResetSliders", ve), 
        s || (v(N).length || (n = function(e) {
            var t = document.createElement("div");
            t.className = M, t.style.background = getComputedStyle(e).background, p.prependTo(e, t), 
            e.style.setProperty("background", "none", "important");
        }, v(b).forEach(function(e) {
            var t = v(w, e);
            t.length ? t.forEach(function(e) {
                n(e);
            }) : n(e);
        })), Ne(C, ".fp-bg{top:0;bottom:0;width: 100%;position:absolute;z-index: -1;}.fp-section, .fp-slide, .fp-section.fp-table, .fp-slide.fp-table, .fp-section .fp-tableCell, .fp-slide .fp-tableCell {position:relative;overflow: hidden;}"), 
        he()), Ee(), ae(), re(), _ = !0;
    }, a.destroy = function() {
        be(), p.remove(v(k)), c = ne(0), o = oe(0), v(b).length && (re(), p.css(v(N), {
            height: ""
        })), clearTimeout(t);
        var e = v(x)[0];
        e && (e.removeEventListener("setAutoScrolling", se), e.removeEventListener("destroy", fe), 
        e.removeEventListener("onScroll", xe), e.removeEventListener("afterResponsive", ue), 
        e.removeEventListener("onGrab", de), e.removeEventListener("onContinuousVertical", ge), 
        e.removeEventListener("onResize", Se), e.removeEventListener("afterRender", ce), 
        e.removeEventListener("afterRebuild", ce), e.removeEventListener("onResetSliders", pe), 
        Y && e.removeEventListener("onContinuosHorizontal", me), e.removeEventListener("onEndResetSliders", ve));
    }, a.setOption = function(e, t) {
        "offset" === e ? (m.parallaxOptions.percentage = t, c = ne(t), o = oe(t)) : "type" === e && (m.parallaxOptions.type = t, 
        f = t), re();
    }, a.applyProperties = Ae, a.afterSlideLoads = function(e) {
        var t, n = void 0 !== e ? e : v(L, v(S)[0])[0], o = U(n, b);
        if ((s ? (t = o, v(w, t).length ? v(w, t) : [ t ]) : v(N, o)).forEach(function(e) {
            j(e, "fp-bg-animate");
        }), (V || l) && (le(n), V = !1), !W) {
            var i = te(F)[f].offsetNormal, a = n, r = F ? Q(a) : Z(a);
            (f === R && F || f === T && !F || X) && r.forEach(function(e) {
                Me(e, i, "silent");
            });
        }
    }, a.afterLoad = function() {
        if ((!m.scrollBar || !m.autoScrolling || g.usingExtension("dragAndMove")) && ((G || l) && (re(), 
        G = !1), !q)) {
            var t = ee(H)[f].offsetNormal, e = H ? Q(v(S)[0]) : Z(v(S)[0]);
            (f === R && H || f === T && !H) && e.forEach(function(e) {
                Ae(e, t, "silent");
            });
        }
    }, a.c = g.c;
    var Re = a["common".charAt(0)];
    return "complete" === document.readyState && Re("parallax"), window.addEventListener("load", function() {
        Re("parallax");
    }), a;
    };
})(window, document, jQuery);