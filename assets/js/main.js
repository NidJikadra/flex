

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

// Core Values Image Switching
const values = document.querySelectorAll(".core-values__value");
const images = document.querySelectorAll(".core-values__dynamic-image img");

values.forEach(value => {
    value.addEventListener("mouseenter", () => {
        const imageId = value.getAttribute("data-image");
        images.forEach(img => {
            if (img.id === imageId) {
                img.classList.add("active"); 
                value.classList.add("active");
            } else {
                img.classList.remove("active"); 
                value.classList.remove("active");
            }
        });
    });

    value.addEventListener("mouseleave", () => {
        images.forEach(img => img.classList.remove("active"));
        value.classList.remove("active");
    });
});

//popup model

document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('teamModal');
  const modalImage = modal.querySelector('.profile-card__image img');
  const modalName = modal.querySelector('.profile-card__name');
  const modalPosition = modal.querySelector('.profile-card__position');
  const modalDescription = modal.querySelector('.description');
  const modalSkills = modal.querySelector('.skills__name');
  const closeModalBtn = document.getElementById('closeModal');

  // Open modal on team card click
  document.querySelectorAll('.team-card').forEach(card => {
    card.addEventListener('click', () => {
      const name = card.getAttribute('data-name');
      const position = card.getAttribute('data-position');
      const description = card.getAttribute('data-description');
      const skills = card.getAttribute('data-skills');

      const image = card.getAttribute('data-image');

      // Set modal content
      modalImage.src = image;
      modalName.textContent = name;
      modalPosition.textContent = position;
      modalDescription.textContent = description;
      modalSkills.textContent = skills;

      // Open modal
      modal.classList.add('open');
    });
  });

  // Close modal when close button is clicked
  closeModalBtn.addEventListener('click', () => {
    modal.classList.remove('open');
  });

  // Close modal when clicking outside modal content
  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.remove('open');
    }
  });
});

//tech stack tabbing

document.querySelectorAll('.tech-stack__skills-button').forEach((button) => {
  button.addEventListener('click', () => {
   
    document.querySelectorAll('.tech-stack__skills-button').forEach((btn) => {
      btn.classList.remove('tech-stack__skills-button--active');
    });

    button.classList.add('tech-stack__skills-button--active');

    document.querySelectorAll('.tech-stack__skills-tab').forEach((tab) => {
      tab.classList.remove('tech-stack__skills-tab--active');
    });

    const tabId = button.getAttribute('data-tab');
    document.getElementById(tabId).classList.add('tech-stack__skills-tab--active');
  });
});


// carousel 

document.addEventListener('DOMContentLoaded', () => {
  const emblaNode = document.querySelector('.embla__viewport');
  const embla = EmblaCarousel(emblaNode, {
    align: "start", 
    dragFree: true,
    speed: 5,   
  });

});



