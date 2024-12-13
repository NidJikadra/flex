import { animate, stagger } from "https://cdn.jsdelivr.net/npm/motion@11.11.13/+esm";

// dropdown menu animation

document.querySelectorAll('.menu-column').forEach(item => {
    item.addEventListener("mouseenter", () => {
        // animate(".menu-text-block, .menu-column img", { opacity: 1, y: [50, 0] }, { delay: stagger(0.05), duration: 0.4 });
    });
});

// document.querySelectorAll('.menu-item').forEach(item => {
//     item.addEventListener("mouseleave", () => {
//         // animate(".mega-menu", { scale: [0.2, 1] }, { ease: "circInOut", duration: 0.2 });
//     }); // 
// });

// tab-section
document.querySelectorAll(".tab").forEach((tab) => {
    tab.addEventListener("click", () => {
      document.querySelectorAll(".tab").forEach((t) => t.classList.remove("active"));
  
      tab.classList.add("active");
  
      document.querySelectorAll(".tab-panel").forEach((content) => content.classList.remove("active"));
      const target = tab.getAttribute("data-tab");
      document.getElementById(target).classList.add("active");
    });
  });

// accordion section
document.querySelectorAll(".accordion-header").forEach((header) => {
    header.addEventListener("click", () => {
      const accordionItem = header.parentElement;
  
      document.querySelectorAll(".accordion-item").forEach((item) => {
        if (item !== accordionItem) {
          item.classList.remove("open");
          item.querySelector(".accordion-header").classList.remove("active");
        }
      });
  
      const isOpen = accordionItem.classList.toggle("open");
      if (isOpen) {
        header.classList.add("active");
      } else {
        header.classList.remove("active");
      }
    });
  }); 

const menuItems = document.querySelectorAll('.menu-item');
const header = document.querySelector('.main-header');

function showMegaMenu() { 
  header.classList.add('active'); 

}

function hideMegaMenu() {
  header.classList.remove('active'); 
}

menuItems.forEach(item => {
  item.addEventListener('mouseenter', showMegaMenu); 
  item.addEventListener('mouseleave', hideMegaMenu); 
});
