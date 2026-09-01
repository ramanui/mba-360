import "swiper/css";
import "swiper/css/pagination";

(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", async () => {

    // =========================================
    // Load Swiper dynamically
    // =========================================

    let swiperPromise = null;

    function loadSwiper() {
      if (!swiperPromise) {
        swiperPromise = Promise.all([
          import("swiper"),
          import("swiper/modules"),
        ]);
      }

      return swiperPromise;
    }

    const [swiperModule, modulesModule] = await loadSwiper();

    const Swiper = swiperModule.default;
    const { Autoplay, Pagination } = modulesModule;


    // =========================================
    // Join Network Swiper
    // =========================================

    const sliderEl = document.querySelector(".joinNetworkSwiper");

    if (sliderEl) {

     new Swiper(sliderEl, {
  modules: [Autoplay, Pagination],

  loop: true,
  speed: 700,

  slidesPerView: 1,
  spaceBetween: 20,

  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },

  pagination: {
    el: sliderEl.querySelector(".swiper-pagination"),
    clickable: true,
  },
});

    }



function positionStar(input, star) {
  const canvas = positionStar.canvas || (positionStar.canvas = document.createElement('canvas'));
  const ctx = canvas.getContext('2d');
  const cs = getComputedStyle(input);

  ctx.font = `${cs.fontWeight} ${cs.fontSize} ${cs.fontFamily}`;
  const textWidth = ctx.measureText(input.placeholder).width;

  const paddingLeft = parseFloat(cs.paddingLeft);
  star.style.left = (paddingLeft + textWidth + 4) + 'px'; // +4px small gap
}

// Sabhi required inputs ke liye
document.querySelectorAll('.formGroup__inputWrap').forEach(wrap => {
  const input = wrap.querySelector('input');
  const star = wrap.querySelector('.formGroup__requiredStar');
  if (input && star) {
    positionStar(input, star);
    window.addEventListener('resize', () => positionStar(input, star));
  }
});




    /* ---------- Password show/hide (works for both password fields) ---------- */
    document.querySelectorAll(".formGroup__toggle").forEach((toggleBtn) => {
      toggleBtn.addEventListener("click", () => {
        const targetId = toggleBtn.getAttribute("data-toggle");
        const input = targetId ? document.getElementById(targetId) : toggleBtn.closest(".formGroup__inputWrap").querySelector("input");
        if (!input) return;

        const isHidden = input.type === "password";
        input.type = isHidden ? "text" : "password";
        toggleBtn.setAttribute("aria-pressed", String(isHidden));
        toggleBtn.setAttribute("aria-label", isHidden ? "Hide password" : "Show password");
      });
    });




    /* ---------- Custom Select: "Studying In" ---------- */
    const selectCard = document.getElementById("studyingInSelect");
    if (selectCard) {
      const control = document.getElementById("studyingInControl");
      const menu = document.getElementById("studyingInMenu");
      const placeholder = document.getElementById("studyingInPlaceholder");
      const hiddenInput = document.getElementById("educationLevelInput");
      const options = menu.querySelectorAll("li[role='option']");
      const studyingInError = document.getElementById("studyingInError");

      const openMenu = () => {
        menu.hidden = false;
        selectCard.classList.add("is-open");
        control.setAttribute("aria-expanded", "true");
      };
      const closeMenu = () => {
        menu.hidden = true;
        selectCard.classList.remove("is-open");
        control.setAttribute("aria-expanded", "false");
      };
      const toggleMenu = () => (menu.hidden ? openMenu() : closeMenu());

      control.addEventListener("click", toggleMenu);
      control.addEventListener("keydown", (e) => {
        if (e.key === "Enter" || e.key === " ") {
          e.preventDefault();
          toggleMenu();
        } else if (e.key === "Escape") {
          closeMenu();
        }
      });

      options.forEach((opt) => {
        opt.addEventListener("click", () => {
          options.forEach((o) => o.removeAttribute("aria-selected"));
          opt.setAttribute("aria-selected", "true");
          placeholder.textContent = opt.textContent;
          hiddenInput.value = opt.getAttribute("data-value");
          selectCard.classList.add("has-value");
          if (studyingInError) studyingInError.classList.remove("is-visible");
          closeMenu();
          control.focus();
        });
      });

      document.addEventListener("click", (e) => {
        if (!selectCard.contains(e.target)) closeMenu();
      });
    }
    const passwordInput = document.getElementById("loginPassword");
    const strengthEl = document.getElementById("passwordStrength");

    function getStrength(value) {
      let score = 0;
      if (value.length >= 6) score++;
      if (value.length >= 10) score++;
      if (/[A-Z]/.test(value)) score++;
      if (/[0-9]/.test(value)) score++;
      if (/[^A-Za-z0-9]/.test(value)) score++;
      if (score <= 1) return "weak";
      if (score <= 3) return "medium";
      return "strong";
    }

    if (passwordInput && strengthEl) {
      passwordInput.addEventListener("input", () => {
        const value = passwordInput.value;
        if (!value) {
          strengthEl.textContent = "";
          strengthEl.className = "formGroup__strength";
          return;
        }
        const level = getStrength(value);
        const labels = { weak: "Weak", medium: "Medium", strong: "Strong" };
        strengthEl.textContent = `Password strength: ${labels[level]}`;
        strengthEl.className = `formGroup__strength formGroup__strength--${level}`;
      });
    }

    /* ---------- Registration form validation ---------- */
    const regForm = document.getElementById("registrationForm");
    if (regForm) {
      const nameInput = document.getElementById("name");
      const emailInput = document.getElementById("loginEmail");
      const phoneInput = document.getElementById("phone");
      const confirmInput = document.getElementById("password_confirmation");
      const termsInput = document.getElementById("terms");
      const submitBtn = document.getElementById("submitBtn");
      const educationLevelInput = document.getElementById("educationLevelInput");

      const nameError = document.getElementById("nameError");
      const emailError = document.getElementById("emailError");
      const phoneError = document.getElementById("phoneError");
      const passwordError = document.getElementById("passwordError");
      const confirmError = document.getElementById("confirmPasswordError");
      const termsError = document.getElementById("termsError");
      const studyingInErrorField = document.getElementById("studyingInError");
      const studyingInCard = document.getElementById("studyingInSelect");

      const showError = (input, errorEl) => {
        input.classList.add("is-invalid");
        input.classList.remove("is-valid");
        if (errorEl) errorEl.classList.add("is-visible");
      };
      const clearError = (input, errorEl) => {
        input.classList.remove("is-invalid");
        input.classList.add("is-valid");
        if (errorEl) errorEl.classList.remove("is-visible");
      };

      regForm.addEventListener("submit", (e) => {
        let isValid = true;

        if (!nameInput.value.trim()) { showError(nameInput, nameError); isValid = false; }
        else clearError(nameInput, nameError);

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailInput.value.trim())) { showError(emailInput, emailError); isValid = false; }
        else clearError(emailInput, emailError);

        if (phoneInput.value.trim() && !/^[0-9+\-\s()]{7,15}$/.test(phoneInput.value.trim())) {
          showError(phoneInput, phoneError); isValid = false;
        } else {
          phoneInput.classList.remove("is-invalid");
          phoneError.classList.remove("is-visible");
        }

        if (passwordInput.value.length < 6) { showError(passwordInput, passwordError); isValid = false; }
        else clearError(passwordInput, passwordError);

        if (!confirmInput.value || confirmInput.value !== passwordInput.value) { showError(confirmInput, confirmError); isValid = false; }
        else clearError(confirmInput, confirmError);

        if (!educationLevelInput.value) {
          studyingInErrorField.classList.add("is-visible");
          isValid = false;
        } else {
          studyingInErrorField.classList.remove("is-visible");
        }

        if (!termsInput.checked) { termsError.classList.add("is-visible"); isValid = false; }
        else termsError.classList.remove("is-visible");

        if (!isValid) { e.preventDefault(); return; }

        const btnText = submitBtn.querySelector(".btn-text");
        const btnSpinner = submitBtn.querySelector(".btn-spinner");
        if (btnText && btnSpinner) {
          btnText.style.display = "none";
          btnSpinner.style.display = "inline-flex";
        }
        submitBtn.disabled = true;
      });

      /* ---------- Clear error as user fixes the field (professional UX) ---------- */
      const liveClear = (input, errorEl, validatorFn) => {
        input.addEventListener("input", () => {
          if (validatorFn(input.value)) clearError(input, errorEl);
        });
      };
      liveClear(nameInput, nameError, (v) => v.trim().length > 0);
      liveClear(emailInput, emailError, (v) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()));
      liveClear(passwordInput, passwordError, (v) => v.length >= 6);
      liveClear(confirmInput, confirmError, (v) => v === passwordInput.value && v.length > 0);
      termsInput.addEventListener("change", () => {
        if (termsInput.checked) termsError.classList.remove("is-visible");
      });
    }

    /* ---------- Reveal on scroll (single observer, project convention) ---------- */
    const revealEls = document.querySelectorAll(".reveal, .revealleft, .revealright");
    if (revealEls.length) {
      if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
              }
            });
          },
          { threshold: 0.15 }
        );
        revealEls.forEach((el) => observer.observe(el));
      } else {
        revealEls.forEach((el) => el.classList.add("visible"));
      }
    }

  });
})();
