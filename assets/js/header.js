document.addEventListener("DOMContentLoaded", () => {
  // for search popup
  const nxtModal = document.getElementById("nxtSearch_modal");
  const nxtSearchBtn = document.getElementById("nxtSearch_btn");
  const nxtSearchCross = document.getElementById("nxtSearch_cross");

  const toggleModal = () => {
    nxtModal.style.display === "block"
      ? (nxtModal.style.display = "none")
      : (nxtModal.style.display = "block");
  };

  nxtSearchBtn.addEventListener("click", toggleModal);
  nxtSearchCross.addEventListener("click", toggleModal);

  // for mobile nav
  const nxtMobileBtn = document.getElementById("nxtMobile_menu");
  const nxtMobileNavWrapper = document.querySelector(".header_nav-wrapper");
  const nxtNavigation = document.querySelector(".a2n_navigation");
  const nxtNavReset = document.querySelectorAll(".a2n_container-inner");

  function removeActiveClass() {
    nxtNavReset.forEach(function (nxtBack) {
      nxtBack.classList.remove("a2n_visible");
    });
  }

  nxtMobileBtn.addEventListener("click", () => {
    removeActiveClass();
    nxtMobileBtn.classList.toggle("active");
    nxtMobileNavWrapper.classList.toggle("a2n_visible");
    nxtNavigation.classList.toggle("a2n_visible");
  });

  function updateNavigationBehavior() {
    const isMobile = window.innerWidth <= 1024;

    // Remove existing event listeners for all links if needed
    document
      .querySelectorAll(".a2n_navigation ul .nxt_has_child > a")
      .forEach((link) => {
        const clone = link.cloneNode(true);
        link.parentNode.replaceChild(clone, link);
      });

    if (isMobile) {
      document
        .querySelectorAll(".a2n_navigation ul .nxt_has_child > a")
        .forEach((link) => {
          link.addEventListener("click", function (e) {
            e.preventDefault();
            const mobileNavWrapper = this.closest("li").querySelector(
              ".a2n_container-inner"
            );
            if (mobileNavWrapper) {
              mobileNavWrapper.classList.add("a2n_visible");
              mobileNavWrapper
                .querySelector(".a2n_back-button")
                .addEventListener(
                  "click",
                  () => {
                    mobileNavWrapper.classList.remove("a2n_visible");
                  },
                  { once: true }
                );
            }
          });
        });
    }
  }

  // Initialize on page load
  updateNavigationBehavior();

  // Update on window resize
  window.addEventListener("resize", updateNavigationBehavior);
});