import { animate, stagger } from "https://cdn.jsdelivr.net/npm/motion@11.11.13/+esm";

// dropdown menu animation

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


  // dropdown
//   document.addEventListener("DOMContentLoaded", () => {
   
//     const menuItems = document.querySelectorAll(".menu-item");
//     const menus = document.querySelectorAll(".mega-menu");

   
//     menuItems.forEach((menuItem) => {
//         menuItem.addEventListener("mouseenter", (event) => {
//             event.preventDefault(); 

//             const menuId = menuItem.getAttribute("data-menu"); 
//             const activeMenu = document.querySelector(`.mega-menu[data-menu="${menuId}"]`); 

//             if (activeMenu) {
            
//                 menus.forEach((menu) => {
//                     if (menu !== activeMenu) {
//                         menu.classList.remove("show");
//                     }
//                 });

//                 activeMenu.classList.toggle("show");
//             }
//         });
//     });

   
//     document.addEventListener("click", (event) => {
//         if (!event.target.closest(".menu-item")) {
//             menus.forEach((menu) => {
//                 menu.classList.remove("show");
//             });
//         }
//     });
// });
