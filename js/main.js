const modelViewer = document.querySelector("model-viewer");

window.switchSrc = (element, name) => {
  const base = "/assets/3d_models/" + name;
  modelViewer.src = base + '.glb';
  modelViewer.poster = base + '.webp';

  const slides = document.querySelectorAll(".slide");
  slides.forEach((element) => {element.classList.remove("selected");});
  element.classList.add("selected");
};

