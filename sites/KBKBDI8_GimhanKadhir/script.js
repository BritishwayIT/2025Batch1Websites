// 1) Mobile menu
const menuBtn = document.querySelector("[data-menu-btn]");
const navLinks = document.querySelector("[data-nav-links]");
if (menuBtn && navLinks) {
  menuBtn.addEventListener("click", () => navLinks.classList.toggle("open"));
}

// 2) Sticky nav shadow when scrolling
const nav = document.querySelector(".nav");
window.addEventListener("scroll", () => {
  if (!nav) return;
  nav.classList.toggle("scrolled", window.scrollY > 10);
});

// 3) Active link highlight
(() => {
  const path = location.pathname.split("/").pop() || "index.html";
  document.querySelectorAll(".nav-links a").forEach(a => {
    if (a.getAttribute("href") === path) a.classList.add("active");
  });
})();

// 4) Toast helper
function showToast(msg){
  const toast = document.querySelector("[data-toast]");
  if(!toast) return;
  toast.textContent = msg;
  toast.classList.add("show");
  setTimeout(()=> toast.classList.remove("show"), 2600);
}

// 5) Contact form validation (demo)
const form = document.querySelector("[data-contact-form]");
if(form){
  form.addEventListener("submit", (e)=>{
    e.preventDefault();

    const name = form.querySelector('input[name="name"]').value.trim();
    const email = form.querySelector('input[name="email"]').value.trim();
    const msg = form.querySelector('textarea[name="message"]').value.trim();

    if(name.length < 2) return showToast("Please enter your name.");
    if(!email.includes("@") || email.length < 6) return showToast("Please enter a valid email.");
    if(msg.length < 8) return showToast("Message is too short.");

    form.reset();
    showToast("Message sent! (demo)");
  });
}

// 6) Gallery lightbox (modal)
const modal = document.querySelector("[data-modal]");
const modalImg = document.querySelector("[data-modal-img]");
const modalTitle = document.querySelector("[data-modal-title]");

document.querySelectorAll("[data-thumb]").forEach((thumb)=>{
  thumb.addEventListener("click", ()=>{
    const src = thumb.querySelector("img").getAttribute("src");
    const title = thumb.getAttribute("data-title") || "Preview";
    if(modalImg) modalImg.src = src;
    if(modalTitle) modalTitle.textContent = title;
    if(modal) modal.classList.add("open");
  });
});

document.querySelectorAll("[data-close-modal]").forEach(btn=>{
  btn.addEventListener("click", ()=> modal && modal.classList.remove("open"));
});

if(modal){
  modal.addEventListener("click", (e)=>{
    if(e.target === modal) modal.classList.remove("open");
  });
}
document.addEventListener("keydown", (e)=>{
  if(e.key === "Escape" && modal) modal.classList.remove("open");
});

// 7) Gallery filter (chips)
const chips = document.querySelectorAll("[data-chip]");
const items = document.querySelectorAll("[data-item]");
if(chips.length && items.length){
  chips.forEach(chip=>{
    chip.addEventListener("click", ()=>{
      chips.forEach(c=>c.classList.remove("active"));
      chip.classList.add("active");

      const type = chip.dataset.type; // all / hatch / sedan / suv
      items.forEach(item=>{
        const itemType = item.dataset.type;
        item.style.display = (type === "all" || type === itemType) ? "" : "none";
      });
    });
  });
}

// 8) Count-up animation (About stats)
function animateCount(el){
  const target = Number(el.dataset.target || 0);
  let current = 0;
  const step = Math.max(1, Math.floor(target / 60));
  const timer = setInterval(()=>{
    current += step;
    if(current >= target){
      el.textContent = target + "+";
      clearInterval(timer);
    }else{
      el.textContent = current + "+";
    }
  }, 20);
}

const counters = document.querySelectorAll("[data-counter]");
if(counters.length){
  const obs = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      if(entry.isIntersecting){
        animateCount(entry.target);
        obs.unobserve(entry.target);
      }
    });
  }, {threshold: 0.4});
  counters.forEach(c => obs.observe(c));
}
