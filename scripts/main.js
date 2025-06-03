/* ============================================================
   MENU BUTTON TOGGLE
   ============================================================ */

document.querySelectorAll(".btn-menu").forEach((link) => {
  const href = link.getAttribute("href");
  if (!href) return; // skip if no href (like <button> elements)

  const currentPath = window.location.pathname.toLowerCase();
  if (currentPath.endsWith(href.toLowerCase())) {
    link.classList.add("active");
  } else {
    link.classList.remove("active");
  }
});

/* ============================================================
   CUSTOM DROPDOWN SELECT
   ============================================================ */
const toggles = document.querySelectorAll(".dropdown-toggle");

toggles.forEach((toggle) => {
  const menu = toggle.nextElementSibling;
  const span = toggle.querySelector("span.selected");
  const iconPlaceholder = toggle.querySelector(".selected-icon");

  toggle.addEventListener("click", () => {
    const isOpen = menu.classList.toggle("open");
    toggle.classList.toggle("focused", isOpen);
    toggle.querySelector(".chevron-icon")?.classList.toggle("rotate-180");
  });

  menu.querySelectorAll("li").forEach((item) => {
    item.addEventListener("click", () => {
      menu
        .querySelectorAll("li")
        .forEach((li) => li.classList.remove("selected"));
      item.classList.add("selected");

      const text = [...item.childNodes]
        .filter((node) => node.nodeType === 3)
        .map((n) => n.textContent.trim())
        .join(" ");
      span.textContent = text;

      const iconInItem = item.querySelector("iconify-icon");
      if (iconInItem && iconPlaceholder) {
        iconPlaceholder.setAttribute("icon", iconInItem.getAttribute("icon"));
      }

      menu.classList.remove("open");
      toggle.classList.remove("focused");
      toggle.querySelector(".chevron-icon")?.classList.remove("rotate-180");
    });
  });
});

document.addEventListener("click", (e) => {
  toggles.forEach((toggle) => {
    const dropdown = toggle.closest(".dropdown");
    const menu = toggle.nextElementSibling;

    if (!dropdown.contains(e.target)) {
      menu.classList.remove("open");
      toggle.classList.remove("focused");
      toggle.querySelector(".chevron-icon")?.classList.remove("rotate-180");
    }
  });
});

/* ============================================================
   EDIT POLICY MODAL
   ============================================================ */
document.addEventListener("DOMContentLoaded", () => {
  const editModal = document.getElementById("editPolicyModal");
  if (editModal) {
    const closeModalBtns = editModal.querySelectorAll(".modal-close");
    const openModalBtns = document.querySelectorAll(
      "[data-role='open-edit-policy']"
    );

    openModalBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        editModal.classList.remove("hidden");
      });
    });

    closeModalBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        editModal.classList.add("hidden");
      });
    });

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        editModal.classList.add("hidden");
      }
    });
  }
});
