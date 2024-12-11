import { animate, stagger } from "https://cdn.jsdelivr.net/npm/motion@11.11.13/+esm";

// dropdown menu animation

document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener("mouseenter", () => {
        // animate(".mega-menu", { scale: [0.2, 1] }, { ease: "circInOut", duration: 0.2 });
        // animate(".menu-text-block, .menu-column img", { opacity: 1, y: [50, 0] }, { delay: stagger(0.05), duration: 0.4 });
    });
});

document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener("mouseleave", () => {
        // animate(".mega-menu", { scale: [0.2, 1] }, { ease: "circInOut", duration: 0.2 });
    }); // 
});

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

// ... existing code ...

// Add data-motion handling for mega menu
const megaMenuWrapper = document.querySelector('.mega-menu-wrapper');
let currentPosition = 'start'; // Track current position

function updateMenuMotion(newPosition) {

    megaMenuWrapper.removeAttribute('data-motion');
    
  
    if (currentPosition === 'start' && newPosition === 'end') {
        megaMenuWrapper.setAttribute('data-motion', 'from-start');
    } else if (currentPosition === 'end' && newPosition === 'start') {
        megaMenuWrapper.setAttribute('data-motion', 'from-end');
    }
    
    currentPosition = newPosition;
}

document.querySelectorAll('.menu-trigger').forEach(trigger => {
    trigger.addEventListener('mouseenter', (e) => {
        const direction = e.target.dataset.direction; 
        updateMenuMotion(direction);
    });
});
