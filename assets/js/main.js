// Main JavaScript file for TekInvent website

document.addEventListener("DOMContentLoaded", function () {
  // Initialize all components
  initMobileSidebar();
  initNavbar();
  initSmoothScrolling();
  initContactForm();
  initNewsletterForm();
  initAnimations();
  initSwiper();
  initTableOfContents();

  console.log("TekInvent website loaded successfully!");
});

// Mobile Sidebar functionality
function initMobileSidebar() {
  const mobileMenuToggle = document.getElementById("mobileMenuToggle");
  const mobileSidebar = document.getElementById("mobileSidebar");
  const sidebarClose = document.getElementById("sidebarClose");
  const sidebarOverlay = document.getElementById("sidebarOverlay");
  const body = document.body;

  // Open sidebar
  if (mobileMenuToggle) {
    mobileMenuToggle.addEventListener("click", function () {
      mobileSidebar.classList.add("active");
      sidebarOverlay.classList.add("active");
      body.classList.add("sidebar-open");
    });
  }

  // Close sidebar
  function closeSidebar() {
    mobileSidebar.classList.remove("active");
    sidebarOverlay.classList.remove("active");
    body.classList.remove("sidebar-open");
  }

  if (sidebarClose) {
    sidebarClose.addEventListener("click", closeSidebar);
  }

  if (sidebarOverlay) {
    sidebarOverlay.addEventListener("click", closeSidebar);
  }

  // Close sidebar when clicking on menu links
  const mobileMenuLinks = document.querySelectorAll(".mobile-menu a");
  mobileMenuLinks.forEach((link) => {
    link.addEventListener("click", closeSidebar);
  });

  // Close sidebar on window resize if screen becomes larger
  window.addEventListener("resize", function () {
    if (window.innerWidth >= 992) {
      closeSidebar();
    }
  });
}

// Navbar functionality
function initNavbar() {
  const navbar = document.querySelector(".navbar");
  const navbarToggler = document.querySelector(".navbar-toggler");
  const navbarCollapse = document.querySelector(".navbar-collapse");

  // Add scroll effect to navbar
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

  // Close mobile menu when clicking on nav links
  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      if (navbarCollapse.classList.contains("show")) {
        navbarToggler.click();
      }
    });
  });

  // Update active nav link based on scroll position
  updateActiveNavLink();
  window.addEventListener("scroll", updateActiveNavLink);
}

// Update active navigation link
function updateActiveNavLink() {
  const sections = document.querySelectorAll("section[id]");
  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

  let currentSection = "";

  sections.forEach((section) => {
    const sectionTop = section.offsetTop - 100;
    const sectionHeight = section.offsetHeight;

    if (
      window.scrollY >= sectionTop &&
      window.scrollY < sectionTop + sectionHeight
    ) {
      currentSection = section.getAttribute("id");
    }
  });

  navLinks.forEach((link) => {
    link.classList.remove("active");
    const href = link.getAttribute("href");
    if (
      href === `#${currentSection}` ||
      (currentSection === "" && href === "index.html")
    ) {
      link.classList.add("active");
    }
  });
}

// Smooth scrolling for anchor links
function initSmoothScrolling() {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');

  anchorLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        e.preventDefault();

        const offsetTop = targetElement.offsetTop - 80; // Account for fixed header

        window.scrollTo({
          top: offsetTop,
          behavior: "smooth",
        });
      }
    });
  });
}

// Contact form functionality
function initContactForm() {
  const contactForm = document.querySelector(".contact-form");

  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();

      // Get form data
      const formData = new FormData(this);
      const name = this.querySelector('input[type="text"]').value;
      const email = this.querySelector('input[type="email"]').value;
      const message = this.querySelector("textarea").value;

      // Basic validation
      if (!name || !email || !message) {
        showNotification("Please fill in all fields.", "error");
        return;
      }

      if (!isValidEmail(email)) {
        showNotification("Please enter a valid email address.", "error");
        return;
      }

      // Show loading state
      const submitBtn = this.querySelector(".btn-submit");
      const originalHTML = submitBtn.innerHTML;
      submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
      submitBtn.disabled = true;

      // Simulate form submission (replace with actual API call)
      setTimeout(() => {
        showNotification(
          "Thank you for your message! We'll get back to you soon.",
          "success"
        );
        this.reset();

        // Reset button
        submitBtn.innerHTML = originalHTML;
        submitBtn.disabled = false;
      }, 2000);
    });
  }
}

// Newsletter form functionality
function initNewsletterForm() {
  const newsletterForm = document.querySelector(".newsletter-form");

  if (newsletterForm) {
    newsletterForm.addEventListener("submit", function (e) {
      e.preventDefault();

      const email = this.querySelector('input[type="email"]').value;

      if (!email) {
        showNotification("Please enter your email address.", "error");
        return;
      }

      if (!isValidEmail(email)) {
        showNotification("Please enter a valid email address.", "error");
        return;
      }

      // Show loading state
      const submitBtn = this.querySelector(".btn-newsletter");
      const originalHTML = submitBtn.innerHTML;
      submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
      submitBtn.disabled = true;

      // Simulate newsletter subscription (replace with actual API call)
      setTimeout(() => {
        showNotification(
          "Successfully subscribed to our newsletter!",
          "success"
        );
        this.reset();

        // Reset button
        submitBtn.innerHTML = originalHTML;
        submitBtn.disabled = false;
      }, 1500);
    });
  }
}

// Initialize scroll animations
function initAnimations() {
  // Intersection Observer for fade-in animations
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = "1";
        entry.target.style.transform = "translateY(0)";
      }
    });
  }, observerOptions);

  // Add animation styles to elements
  const animatedElements = document.querySelectorAll(
    ".home-banner .content, .hero-form, .footer-links, .contact-info"
  );

  animatedElements.forEach((element) => {
    element.style.opacity = "0";
    element.style.transform = "translateY(30px)";
    element.style.transition = "opacity 0.6s ease, transform 0.6s ease";
    observer.observe(element);
  });
}

// Utility function to validate email
function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Show notification function
function showNotification(message, type = "info") {
  // Remove existing notifications
  const existingNotifications = document.querySelectorAll(".notification");
  existingNotifications.forEach((notification) => notification.remove());

  // Create notification element
  const notification = document.createElement("div");
  notification.className = `notification notification-${type}`;
  notification.innerHTML = `
        <div class="notification-content">
            <span class="notification-message">${message}</span>
            <button class="notification-close">&times;</button>
        </div>
    `;

  // Add styles
  notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${
          type === "error"
            ? "#e74c3c"
            : type === "success"
            ? "#27ae60"
            : "#3498db"
        };
        color: white;
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 10000;
        max-width: 400px;
        opacity: 0;
        transform: translateX(100%);
        transition: all 0.3s ease;
    `;

  // Add to DOM
  document.body.appendChild(notification);

  // Animate in
  setTimeout(() => {
    notification.style.opacity = "1";
    notification.style.transform = "translateX(0)";
  }, 100);

  // Close button functionality
  const closeBtn = notification.querySelector(".notification-close");
  closeBtn.addEventListener("click", () => {
    notification.style.opacity = "0";
    notification.style.transform = "translateX(100%)";
    setTimeout(() => notification.remove(), 300);
  });

  // Auto remove after 5 seconds
  setTimeout(() => {
    if (notification.parentNode) {
      notification.style.opacity = "0";
      notification.style.transform = "translateX(100%)";
      setTimeout(() => notification.remove(), 300);
    }
  }, 5000);
}

// Swiper initialization (if needed for future sliders)
// function initSwiper() {
//   // Example Swiper configuration

//   // const swiper = new Swiper(".swiper", {
//   //   slidesPerView: 1,
//   //   spaceBetween: 30,
//   //   loop: true,
//   //   autoplay: {
//   //     delay: 5000,
//   //     disableOnInteraction: false,
//   //   },
//   //   pagination: {
//   //     el: ".swiper-pagination",
//   //     clickable: true,
//   //   },
//   //   navigation: {
//   //     nextEl: ".swiper-button-next",
//   //     prevEl: ".swiper-button-prev",
//   //   },
//   //   breakpoints: {
//   //     768: {
//   //       slidesPerView: 2,
//   //     },
//   //     1024: {
//   //       slidesPerView: 3,
//   //     },
//   //   },
//   // });
// }

// Handle phone number formatting
function formatPhoneNumber(input) {
  // Remove all non-digit characters
  const digits = input.replace(/\D/g, "");

  // Format as (XXX) XXX-XXXX
  if (digits.length >= 10) {
    return `(${digits.slice(0, 3)}) ${digits.slice(3, 6)}-${digits.slice(
      6,
      10
    )}`;
  }

  return input;
}

// Add phone number formatting to phone inputs
document.addEventListener("DOMContentLoaded", function () {
  const phoneInputs = document.querySelectorAll('input[type="tel"]');

  phoneInputs.forEach((input) => {
    input.addEventListener("input", function () {
      this.value = formatPhoneNumber(this.value);
    });
  });
});

// Handle window resize for responsive adjustments
window.addEventListener("resize", function () {
  // Add any resize-specific logic here
});

// Lazy loading for images (if needed)
function initLazyLoading() {
  const images = document.querySelectorAll("img[data-src]");

  const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.classList.remove("lazy");
        imageObserver.unobserve(img);
      }
    });
  });

  images.forEach((img) => imageObserver.observe(img));
}

// Initialize Swiper sliders
function initSwiper() {
  // Insurance logos slider
  const insuranceSwiper = new Swiper(".insurance-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // },
    pagination: {
      el: ".insurance-pagination",
      clickable: true,
      dynamicBullets: false,
    },
    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  });
  const testimonialsSwiper = new Swiper(".testimonials-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // },
    pagination: {
      el: ".testimonials-pagination",
      clickable: true,
      dynamicBullets: false,
    },
  });

  const bannerSlider = new Swiper(".banner-slider", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,

    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // },

    // Primary pagination - fraction
    pagination: {
      el: ".banner-pagination",
      type: "fraction",
    },

    navigation: {
      nextEl: ".banner-next",
      prevEl: ".banner-prev",
    },

    // Event handler to create custom bullet pagination
    on: {
      init: function () {
        createCustomBullets(this);
      },
      slideChange: function () {
        updateCustomBullets(this);
      },
    },
  });

  // Function to create custom bullet pagination
  function createCustomBullets(swiper) {
    const bulletsContainer = document.querySelector(
      ".banner-pagination-bullets"
    );
    if (!bulletsContainer) return;

    bulletsContainer.innerHTML = "";

    for (let i = 0; i < swiper.slides.length; i++) {
      const bullet = document.createElement("span");
      bullet.className = `custom-bullet ${
        i === swiper.realIndex ? "active" : ""
      }`;
      bullet.addEventListener("click", () => {
        swiper.slideToLoop(i);
      });
      bulletsContainer.appendChild(bullet);
    }
  }

  // Function to update bullet pagination
  function updateCustomBullets(swiper) {
    const bullets = document.querySelectorAll(".custom-bullet");
    bullets.forEach((bullet, index) => {
      bullet.classList.toggle("active", index === swiper.realIndex);
    });
  }

  const visionSlider = new Swiper(".vision-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: false,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false,
    // },
    navigation: {
      nextEl: ".vision-button-next",
      prevEl: ".vision-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1920: {
        slidesPerView: 2.3,
      },
    },
  });
  const clientsSlider = new Swiper(".clients-slider", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: false,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false,
    // },
    navigation: {
      nextEl: ".clients-button-next",
      prevEl: ".clients-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 1,
      },
      1920: {
        slidesPerView: 2,
      },
    },
  });
  const awardSlider = new Swiper(".award-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: false,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false,
    // },
    navigation: {
      nextEl: ".awards-button-next",
      prevEl: ".awards-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 3,
      },
      1920: {
        slidesPerView: 5,
      },
    },
  });
  const blogSlider = new Swiper(".blog-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: false,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false,
    // },
    navigation: {
      nextEl: ".blog-button-next",
      prevEl: ".blog-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1920: {
        slidesPerView: 3,
      },
    },
  });
  const colabSlider = new Swiper(".colab-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: false,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false,
    // },
    navigation: {
      nextEl: ".blog-button-next",
      prevEl: ".blog-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1920: {
        slidesPerView: 5.5,
      },
    },
  });

  var processSlider = new Swiper(".process-slider", {
    direction: "vertical",
    slidesPerView: 2.2,
    spaceBetween: 30,
    loop: false,
    mousewheel: true,
    pagination: {
      el: ".process-pagination",
      clickable: true,
    },
  });

  // Initialize Industry Swiper with draggable control
  const handle = document.querySelector(".draggable-handle");
  const draggableControl = document.querySelector(".draggable-control");

  // Only initialize if elements exist
  if (handle && draggableControl) {
    const industrySwiper = new Swiper(".industry-slider", {
      loop: false,
      slidesPerView: 3.8,
      spaceBetween: 20,
      resistanceRatio: 0,
      allowTouchMove: false, // Disable direct slider dragging
      simulateTouch: false, // Disable mouse drag on slider
      touchRatio: 0, // Disable touch sensitivity on slider
    });

    console.log("🎯 Industry Swiper initialized:", {
      totalSlides: industrySwiper.slides.length,
      slidesPerView: industrySwiper.params.slidesPerView,
      allowTouchMove: industrySwiper.params.allowTouchMove,
    });

    let isDragging = false;
    let startX = 0;
    let initialLeft = 0;
    let slideChangeHandler = null;

    // Calculate max slide index accounting for visible slides
    function getMaxSlideIndex() {
      const slidesPerView = industrySwiper.params.slidesPerView;
      const totalSlides = industrySwiper.slides.length;
      // Max index is total slides minus visible slides (use exact value for fractional slidesPerView)
      const maxIndex = Math.max(0, totalSlides - slidesPerView);
      console.log(
        "📊 Max slide index calculated:",
        maxIndex,
        "(Total:",
        totalSlides,
        "- Visible:",
        slidesPerView,
        ")"
      );
      return maxIndex;
    }

    // Get current control dimensions
    function getControlDimensions() {
      return {
        controlWidth: draggableControl.offsetWidth,
        handleWidth: handle.offsetWidth,
        maxHandleLeft: draggableControl.offsetWidth - handle.offsetWidth,
      };
    }

    // Move handle to specific slide position
    function moveHandleToSlide(slideIndex) {
      const maxSlideIndex = getMaxSlideIndex();
      const dimensions = getControlDimensions();

      if (maxSlideIndex === 0 || dimensions.maxHandleLeft <= 0) {
        handle.style.left = "0px";
        return;
      }

      const percentage = slideIndex / maxSlideIndex;
      const newLeft = percentage * dimensions.maxHandleLeft;
      handle.style.left = `${Math.max(
        0,
        Math.min(newLeft, dimensions.maxHandleLeft)
      )}px`;
    }

    // Mouse down event
    handle.addEventListener("mousedown", (e) => {
      isDragging = true;
      startX = e.clientX;
      initialLeft = handle.offsetLeft;
      document.body.style.cursor = "grabbing";
      handle.style.cursor = "grabbing";
      handle.style.transition = "none";
      e.preventDefault();
      console.log("🟢 Drag started at X:", startX);
    });

    // Mouse move event
    document.addEventListener("mousemove", (e) => {
      if (!isDragging) return;

      const deltaX = e.clientX - startX;
      const dimensions = getControlDimensions();
      let newLeft = initialLeft + deltaX;

      // Limit movement within boundaries
      newLeft = Math.max(0, Math.min(newLeft, dimensions.maxHandleLeft));
      handle.style.left = `${newLeft}px`;

      // Calculate corresponding slide index and position
      const maxSlideIndex = getMaxSlideIndex();

      console.log(
        "🔵 Dragging - newLeft:",
        newLeft,
        "maxHandleLeft:",
        dimensions.maxHandleLeft,
        "maxSlideIndex:",
        maxSlideIndex
      );

      if (dimensions.maxHandleLeft > 0 && maxSlideIndex > 0) {
        const percentage = newLeft / dimensions.maxHandleLeft;

        // Use continuous position instead of rounded index for smooth movement
        const exactSlidePosition = percentage * maxSlideIndex;
        const activeSlideIndex = Math.round(exactSlidePosition);

        console.log(
          "🟡 Calculated - percentage:",
          percentage,
          "exactPosition:",
          exactSlidePosition,
          "roundedIndex:",
          activeSlideIndex,
          "current:",
          industrySwiper.activeIndex
        );

        // Remove event handler during drag to prevent conflicts
        if (slideChangeHandler) {
          industrySwiper.off("slideChange", slideChangeHandler);
          slideChangeHandler = null;
        }

        // Get slide width and calculate exact translate position
        const slideWidth =
          industrySwiper.slides[0].offsetWidth +
          industrySwiper.params.spaceBetween;
        const translateValue = -(exactSlidePosition * slideWidth);

        // Directly set the transform for smooth continuous movement
        industrySwiper.setTranslate(translateValue);
        industrySwiper.updateActiveIndex();
        industrySwiper.updateSlidesClasses();

        console.log(
          "✅ Slider translate set to:",
          translateValue,
          "slideWidth:",
          slideWidth
        );
      } else {
        console.log(
          "❌ Not sliding - maxHandleLeft:",
          dimensions.maxHandleLeft,
          "maxSlideIndex:",
          maxSlideIndex
        );
      }
    });

    // Mouse up event
    document.addEventListener("mouseup", () => {
      if (!isDragging) return;

      console.log("🔴 Drag ended");
      isDragging = false;
      document.body.style.cursor = "default";
      handle.style.cursor = "grab";

      // Don't add transition or snap - keep handle where it was released
      // handle.style.transition = "left 0.1s ease";

      // Re-attach event handler after drag
      setTimeout(() => {
        // Don't move handle - keep it at current position to avoid jerk
        // moveHandleToSlide(industrySwiper.activeIndex);

        // Re-define and attach the handler
        slideChangeHandler = () => {
          console.log("🔄 Slide changed to:", industrySwiper.activeIndex);
          moveHandleToSlide(industrySwiper.activeIndex);
        };
        industrySwiper.on("slideChange", slideChangeHandler);
        console.log("🔗 SlideChange handler re-attached");
      }, 50);
    });

    // Define slide change handler
    slideChangeHandler = () => {
      console.log("🔄 Slide changed to:", industrySwiper.activeIndex);
      moveHandleToSlide(industrySwiper.activeIndex);
    };

    // Attach slide change event
    industrySwiper.on("slideChange", slideChangeHandler);
    console.log("🔗 Initial slideChange handler attached");

    // Arrow navigation
    const arrowLeft = document.querySelector(".arrow-left");
    const arrowRight = document.querySelector(".arrow-right");

    if (arrowLeft) {
      arrowLeft.addEventListener("click", () => {
        if (industrySwiper.activeIndex > 0) {
          industrySwiper.slidePrev();
        }
      });
    }

    if (arrowRight) {
      arrowRight.addEventListener("click", () => {
        const maxIndex = getMaxSlideIndex();
        if (industrySwiper.activeIndex < maxIndex) {
          industrySwiper.slideNext();
        }
      });
    }

    // Handle window resize
    let resizeTimeout;
    window.addEventListener("resize", () => {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(() => {
        moveHandleToSlide(industrySwiper.activeIndex);
      }, 250);
    });

    // Initialize handle position
    moveHandleToSlide(0);
  }
}

// Export functions for potential use in other scripts
window.DrCindyWebsite = {
  showNotification,
  initSwiper,
  formatPhoneNumber,
  isValidEmail,
};

// ============================================
// TABLE OF CONTENTS FUNCTIONALITY
// ============================================
function initTableOfContents() {
  const tocNav = document.getElementById("table-of-contents");
  const blogContent = document.querySelector(".blog-content");

  if (!tocNav || !blogContent) {
    return; // Exit if elements don't exist on this page
  }

  // Get all h2 headings from blog content (direct children only)
  const headings = blogContent.querySelectorAll(".blog-content > h2");

  if (headings.length === 0) {
    return; // Exit if no headings found
  }

  // Generate unique IDs for headings and create TOC links
  headings.forEach((heading, index) => {
    // Create a unique ID from the heading text
    const headingText = heading.textContent.trim();
    const headingId = `section-${index + 1}-${headingText
      .toLowerCase()
      .replace(/[^\w\s-]/g, "")
      .replace(/\s+/g, "-")
      .substring(0, 50)}`;

    // Add ID to the heading
    heading.id = headingId;

    // Create TOC link
    const tocLink = document.createElement("a");
    tocLink.href = `#${headingId}`;
    tocLink.className = "toc-link";
    tocLink.textContent = headingText;

    // Add click event for smooth scrolling
    tocLink.addEventListener("click", function (e) {
      e.preventDefault();
      const targetSection = document.getElementById(headingId);
      if (targetSection) {
        const offsetTop = targetSection.offsetTop - 0; // Adjust for fixed header + spacing
        window.scrollTo({
          top: offsetTop,
          behavior: "smooth",
        });

        // Update active state immediately
        setTimeout(updateTOCActiveState, 100);
      }
    });

    // Append link to TOC
    tocNav.appendChild(tocLink);
  });

  // Update active state on scroll
  window.addEventListener("scroll", updateTOCActiveState);

  // Initial active state check
  updateTOCActiveState();
}

// Update active state of TOC links based on scroll position
function updateTOCActiveState() {
  const tocLinks = document.querySelectorAll(".toc-link");
  const blogContent = document.querySelector(".blog-content");

  if (!blogContent || tocLinks.length === 0) {
    return;
  }

  const headings = blogContent.querySelectorAll(".blog-content > h2");
  let currentActiveIndex = -1;

  // Find which section is currently in view or has been passed
  headings.forEach((heading, index) => {
    const rect = heading.getBoundingClientRect();
    // If heading is above the viewport threshold, it has been passed
    if (rect.top <= 150) {
      currentActiveIndex = index;
    }
  });

  // If we're at the bottom of the page, activate the last section
  if (
    window.innerHeight + window.scrollY >=
    document.documentElement.scrollHeight - 100
  ) {
    currentActiveIndex = headings.length - 1;
  }

  // Update active class on TOC links - activate current and all previous
  tocLinks.forEach((link, index) => {
    if (index <= currentActiveIndex && currentActiveIndex >= 0) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });
}
