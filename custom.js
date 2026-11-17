(function () {
    "use strict";

    document.addEventListener("DOMContentLoaded", function () {

        /* ---- Sticky header background on scroll ---- */
        var header = document.getElementById("masthead");
        function onScroll() {
            if (!header) return;
            if (window.scrollY > 40) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        }
        window.addEventListener("scroll", onScroll, { passive: true });
        onScroll();

        /* ---- Mobile nav toggle ---- */
        var toggle = document.querySelector(".menu-toggle");
        var nav = document.getElementById("site-navigation");
        if (toggle && nav) {
            toggle.addEventListener("click", function () {
                var open = nav.classList.toggle("open");
                toggle.setAttribute("aria-expanded", open ? "true" : "false");
                toggle.querySelector(".material-symbols-rounded").textContent = open ? "close" : "menu";
            });
            nav.querySelectorAll("a").forEach(function (link) {
                link.addEventListener("click", function () {
                    nav.classList.remove("open");
                    toggle.setAttribute("aria-expanded", "false");
                    toggle.querySelector(".material-symbols-rounded").textContent = "menu";
                });
            });
        }

        /* ---- Carousel arrows (Featured Artists) ---- */
        function scrollTrack(id, dir) {
            var track = document.getElementById(id);
            if (!track) return;
            var card = track.querySelector(".audio-card");
            var amount = card ? card.offsetWidth + 22 : 320;
            track.scrollBy({ left: dir * amount, behavior: "smooth" });
        }
        document.querySelectorAll("[data-carousel-next]").forEach(function (btn) {
            btn.addEventListener("click", function () {
                scrollTrack(btn.getAttribute("data-carousel-next"), 1);
            });
        });
        document.querySelectorAll("[data-carousel-prev]").forEach(function (btn) {
            btn.addEventListener("click", function () {
                scrollTrack(btn.getAttribute("data-carousel-prev"), -1);
            });
        });

        /* ---- Reveal on scroll ---- */
        var reveals = document.querySelectorAll(".reveal");
        if ("IntersectionObserver" in window) {
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("is-visible");
                        io.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });
            reveals.forEach(function (el) { io.observe(el); });
        } else {
            reveals.forEach(function (el) { el.classList.add("is-visible"); });
        }

        /* ---- Custom cursor (desktop / pointer devices only) ---- */
        if (window.matchMedia("(pointer: fine)").matches) {
            var cursor = document.createElement("div");
            cursor.className = "custom-cursor";
            document.body.appendChild(cursor);

            document.addEventListener("mousemove", function (e) {
                cursor.style.top = e.clientY + "px";
                cursor.style.left = e.clientX + "px";
            });

            document.querySelectorAll("a, button, .glass-card, .roster-card, .audio-card").forEach(function (el) {
                el.addEventListener("mouseenter", function () { cursor.classList.add("grow"); });
                el.addEventListener("mouseleave", function () { cursor.classList.remove("grow"); });
            });
        }
    });
})();
