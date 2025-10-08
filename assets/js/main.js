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
