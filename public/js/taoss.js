!(function () {
    const e = (e, t) => {
            let s = !1;
            return () => {
                s || (e(), (s = !0), setTimeout(() => (s = !1), t));
            };
        },
        t = (e) => {
            e.className !== e.dataset.taosClass &&
                (e.className = e.dataset.taosClass);
        },
        s = (e) => (e.className = e.className.replaceAll("taos:", "")),
        a = (e) => (
            e.className.includes("taos-init") ||
                ((e.dataset.taosClass = e.className + " taos-init"), t(e)),
            (e.className += " !duration-[0ms] !delay-[0ms]"),
            s(e),
            {
                element: e,
                once: "1" === getComputedStyle(e)["animation-iteration-count"],
                offset: parseInt(e.dataset.taosOffset || 0),
            }
        );
    let n = [],
        i = window.innerWidth,
        o = window.scrollY;
    const l = e(() => {
            n.forEach(
                (e) =>
                    (e.trigger =
                        e.element.getBoundingClientRect().top -
                        window.innerHeight +
                        e.offset +
                        o)
            );
        }, 250),
        r = () => {
            (n = []),
                document
                    .querySelectorAll('[class*="taos"]')
                    .forEach((e) => n.push(a(e))),
                l(),
                requestAnimationFrame(c);
        },
        c = () => {
            (o = window.scrollY),
                n.forEach(({ element: e, trigger: a, once: n }) => {
                    a < o ? t(e) : !n && e.className.includes("taos:") && s(e);
                }),
                l();
        };
    r(),
        addEventListener("scroll", e(c, 32)),
        addEventListener("orientationchange", r),
        addEventListener(
            "resize",
            ((e, t) => {
                let s = null;
                return () => {
                    clearTimeout(s), (s = setTimeout(e, t));
                };
            })(() => {
                i !== window.innerWidth && ((i = window.innerWidth), r());
            }, 250)
        ),
        new MutationObserver((e) => {
            e.forEach(({ target: e }) => {
                e.className &&
                    !e.className.includes("taos-init") &&
                    e.className.includes("taos:") &&
                    n.push(a(e));
            });
        }).observe(document, { attributes: !0, childList: !0, subtree: !0 });
})();
//# sourceMappingURL=taos.js.map
