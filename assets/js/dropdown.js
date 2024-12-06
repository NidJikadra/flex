import { animate, stagger } from "https://cdn.jsdelivr.net/npm/motion@11.11.13/+esm";

document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener("mouseenter", () => {
        animate(".mega-menu", { scale: [0.2, 1] }, { ease: "circInOut", duration: 0.2 });
        animate(".menu-text-block, .menu-column img", { opacity: 1, y: [50, 0] }, { delay: stagger(0.05), duration: 0.4 });
    });
});

document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener("mouseleave", () => {
        animate(".mega-menu", { scale: [0.2, 1] }, { ease: "circInOut", duration: 0.2 });
    });
});

