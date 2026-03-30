// Image popup feature
const images = document.querySelectorAll(".gallery img");

images.forEach(img => {
  img.addEventListener("click", () => {
    const popup = document.createElement("div");
    popup.classList.add("popup");

    const popupImg = document.createElement("img");
    popupImg.src = img.src;

    popup.appendChild(popupImg);
    document.body.appendChild(popup);

    popup.addEventListener("click", () => {
      popup.remove();
    });
  });
});
