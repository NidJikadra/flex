const { animate, inView } = Motion;

// Function to animate word-by-word staggered animation

function animateHero(section, selector) {
  if (!section) return;
  if (!NodeList.prototype.isPrototypeOf(section) && !Array.isArray(section)) {
    section = [section]; // Wrap single section in an array
  }

  section.forEach((section) => {
    if (!section) return;

    const elements = section.querySelectorAll(selector);
    if (!elements.length) return;

    elements.forEach((element) => {
      const words = element.textContent.split(" ");
      element.textContent = "";

      words.forEach((word) => {
        const span = document.createElement("span");
        span.textContent = word;
        span.classList.add("word");
        span.style.opacity = "0";
        span.style.transform = "translateY(20px)";
        span.style.filter = "blur(5px)";
        element.appendChild(span);

        element.appendChild(document.createTextNode(" "));
      });
    });

    inView(section, () => {
      animate(
        section,
        { opacity: 1, transform: "translateY(0)", filter: "blur(0)" },
        { duration: 0.8, ease: "easeOut" }
      );

      const wordElements = section.querySelectorAll(".word");
      wordElements.forEach((word, index) => {
        inView(word, () => {
          setTimeout(() => {
            animate(
              word,
              { opacity: 1, transform: "translateY(0)", filter: "blur(0)" },
              { duration: 0.8, ease: "easeOut" }
            );
          }, index * 70);
        });
      });
    });
  });
}

const word = document.querySelectorAll(
  ".case-studies, .our-core-services, .tabs, .aboutus, .blogs-spot, .faq, .core-values, h1"
);
const section = document.querySelectorAll(".hero-section, .hero-banner");

animateHero(section, ".review-text, .desc");
animateHero(word, "h2");

document.addEventListener("DOMContentLoaded", () => {
  const caseStudies = document.querySelectorAll(
    ".case-studies-list__content-list"
  );

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        } else {
          entry.target.classList.remove("visible");
        }
      });
    },
    {
      root: null,
      threshold: 0.5,
    }
  );

  caseStudies.forEach((item) => observer.observe(item));
});

// All over animation
document.addEventListener("DOMContentLoaded", () => {
  const animations = {
    "fade-up": {
      initial: { opacity: 0, transform: "translateY(50px)" },
      final: { opacity: 1, transform: "translateY(0)" },
    },
    "fade-in-scale": {
      initial: { opacity: 0, transform: "scale(0.95)" },
      final: { opacity: 1, transform: "scale(1)" },
    },
    "slide-left": {
      initial: { opacity: 0, transform: "translateX(-50px)" },
      final: { opacity: 1, transform: "translateX(0)" },
    },
  };

  document.querySelectorAll("[data-animate]").forEach((element) => {
    const animationType = element.getAttribute("data-animate");
    if (animations[animationType]) {
      Object.assign(element.style, {
        opacity: "0",
        transform: animations[animationType].initial.transform,
      });

      inView(element, () => {
        const delay = element.getAttribute("data-animate-delay") || 0;
        setTimeout(() => {
          animate(element, animations[animationType].final, {
            duration: 0.6,
            ease: "easeOut",
          });
        }, delay * 1500);
      });
    }
  });
});

// tab-section
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab");
  const tabIndicator = document.querySelector(".tab-indicator");

  function updateIndicator() {
    const activeTab = document.querySelector(".tab.active");
    if (activeTab) {
      const rect = activeTab.getBoundingClientRect();
      const panelRect = activeTab.parentElement.getBoundingClientRect();
      tabIndicator.style.width = `${rect.width}px`;
      tabIndicator.style.transform = `translateX(${rect.left - panelRect.left}px)`;
    }
  }

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      document.querySelector(".tab.active").classList.remove("active");
      tab.classList.add("active");

      document.querySelector(".tab-panel.active").classList.remove("active");
      const targetId = tab.getAttribute("data-tab");
      document.getElementById(targetId).classList.add("active");

      updateIndicator(); 
    });
  });

  updateIndicator();
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

const menuItems = document.querySelectorAll(".menu-item");
const header = document.querySelector(".main-header");

function showMegaMenu() {
  header.classList.add("active");
}
function hideMegaMenu() {
  header.classList.remove("active");
}

menuItems.forEach((item) => {
  item.addEventListener("mouseenter", showMegaMenu);
  item.addEventListener("mouseleave", hideMegaMenu);
});

// Core Values Image Switching
const values = document.querySelectorAll(".core-values__value");
const images = document.querySelectorAll(".core-values__dynamic-image img");

values.forEach((value) => {
  value.addEventListener("mouseenter", () => {
    const imageId = value.getAttribute("data-image");
    images.forEach((img) => {
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
    images.forEach((img) => img.classList.remove("active"));
    value.classList.remove("active");
  });
});

//popup model

document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("teamModal");
  if (!modal) return;

  const modalContent = modal.querySelector(".profile-card");
  const modalImage = modal.querySelector(".profile-card__image img");
  const modalName = modal.querySelector(".profile-card__name");
  const modalPosition = modal.querySelector(".profile-card__position");
  const modalDescription = modal.querySelector(".description");
  const modalSkills = modal.querySelector(".skills__name");
  const closeModalBtn = document.getElementById("closeModal");

  function animateModalOpen() {
    animate(modal, { opacity: [0, 1] }, { duration: 0.3, ease: "easeOut" });

    animate(
      modalContent,
      {
        opacity: [0, 1],
        scale: [0.4, 1],
      },
      {
        duration: 0.3,
        ease: "easeOut",
      }
    );
  }

  function animateModalClose() {
    animate(
      modal,
      { opacity: [1, 0] },
      {
        duration: 0.3,
        ease: "easeIn",
        onComplete: () => {
          modal.classList.remove("open");
        },
      }
    );

    animate(
      modalContent,
      {
        opacity: [1, 0],
        scale: [1, 0.4],
      },
      {
        duration: 0.3,
        ease: "easeIn",
      }
    );
  }

  document.querySelectorAll(".team-card").forEach((card) => {
    card.addEventListener("click", () => {
      const name = card.getAttribute("data-name");
      const position = card.getAttribute("data-position");
      const description = card.getAttribute("data-description");
      const skills = card.getAttribute("data-skills");
      const image = card.getAttribute("data-image");

      modalImage.src = image;
      modalName.textContent = name;
      modalPosition.textContent = position;
      modalDescription.textContent = description;
      modalSkills.textContent = skills;

      modal.classList.add("open");
      animateModalOpen();
    });
  });

  closeModalBtn.addEventListener("click", () => {
    animateModalClose();
  });

  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      animateModalClose();
    }
  });
});

//tech stack tabbing

document.querySelectorAll(".tech-stack__skills-button").forEach((button) => {
  button.addEventListener("click", () => {
    document.querySelectorAll(".tech-stack__skills-button").forEach((btn) => {
      btn.classList.remove("tech-stack__skills-button--active");
    });

    button.classList.add("tech-stack__skills-button--active");

    document.querySelectorAll(".tech-stack__skills-tab").forEach((tab) => {
      tab.classList.remove("tech-stack__skills-tab--active");
    });

    const tabId = button.getAttribute("data-tab");
    document
      .getElementById(tabId)
      .classList.add("tech-stack__skills-tab--active");
  });
});

// carousel

document.addEventListener("DOMContentLoaded", function () {
  const emblaNode = document.querySelector(".embla__viewport");
  const prevButton = document.querySelector(".embla__button--prev");
  const nextButton = document.querySelector(".embla__button--next");
  if (!emblaNode) return;

  const embla = EmblaCarousel(emblaNode, {
    containScroll: window.innerWidth < 768 ? "trimSnaps" : false,
    slidesToScroll: "auto",
    dragFree: true,
  });

  const setupButtonStates = () => {
    if (embla.canScrollPrev()) {
      prevButton.removeAttribute("disabled");
    } else {
      prevButton.setAttribute("disabled", "disabled");
    }

    if (embla.canScrollNext()) {
      nextButton.removeAttribute("disabled");
    } else {
      nextButton.setAttribute("disabled", "disabled");
    }
  };

  prevButton.addEventListener("click", embla.scrollPrev);
  nextButton.addEventListener("click", embla.scrollNext);

  embla.on("init", setupButtonStates);
  embla.on("select", setupButtonStates);

  window.addEventListener("resize", () => {
    embla.reInit({
      containScroll: window.innerWidth < 768 ? "trimSnaps" : false,
      slidesToScroll: "auto",
      dragFree: true,
    });
  });
});

// pricing plan dropdown

document.addEventListener("DOMContentLoaded", function () {
  const planSelect = document.querySelector(".pricing-plans__select");
  if (planSelect) {
    planSelect.addEventListener("change", function (e) {
      const selectedPlan = e.target.value;
      const checkColumns = document.querySelectorAll(
        ".pricing-plans__check-column"
      );

      checkColumns.forEach((column) => {
        if (column.dataset.plan === selectedPlan) {
          column.classList.add("active");
        } else {
          column.classList.remove("active");
        }
      });
    });
  }
});

// pricing paln height change on window resize

document.addEventListener("DOMContentLoaded", function () {
  const adjustCheckHeight = () => {
    const featureElements = document.querySelectorAll(
      ".pricing-plans__feature"
    );
    const checkColumns = document.querySelectorAll(
      ".pricing-plans__check-column"
    );

    featureElements.forEach((feature, index) => {
      const featureHeight = feature.offsetHeight;

      checkColumns.forEach((column) => {
        const checkElements = column.querySelectorAll(".pricing-plans__check");
        if (checkElements[index]) {
          checkElements[index].style.height = `${featureHeight}px`;
          checkElements[index].style.lineHeight = `${featureHeight}px`;
        }
      });
    });
  };

  adjustCheckHeight();

  window.addEventListener("resize", adjustCheckHeight);
});

// pricing plan feature hover effect

document.addEventListener("DOMContentLoaded", () => {
  const features = document.querySelectorAll(".pricing-plans__feature");
  const checkColumns = document.querySelectorAll(
    ".pricing-plans__check-column"
  );

  features.forEach((feature, index) => {
    feature.addEventListener("mouseover", () => {
      checkColumns.forEach((column) => {
        const check = column.children[index];
        if (check) check.classList.add("hover");
      });
      feature.classList.add("hover");
    });

    feature.addEventListener("mouseout", () => {
      checkColumns.forEach((column) => {
        const check = column.children[index];
        if (check) check.classList.remove("hover");
      });
      feature.classList.remove("hover");
    });
  });
});
