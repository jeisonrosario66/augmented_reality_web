// Selec model-viewer component
const modelViewer = document.querySelector("model-viewer");

window.switchSrc = (element, name) => {
  // Modifies the 'src' and 'poster' attributes of the 'model-viewer' for show the model selected
  const base = "assets/3d_models/";
  modelViewer.src = base + "glb/" + name;
  modelViewer.poster = base + "img/" + name;


  const slides = document.querySelectorAll(".slide");
  // Arrow function: change the button selected
  slides.forEach((element) => {
    element.classList.remove("selected");
  });
  element.classList.add("selected");
};

document.querySelector(".slider").addEventListener("beforexrselect", (ev) => {
  // Keep slider interactions from affecting the XR scene.
  ev.preventDefault();
});

// Function to create dynamically a button
function createButton(imageName) {
  const button = document.createElement("button");
  button.classList.add("slide");
  button.style.backgroundImage = `url('assets/3d_models/img/${imageName}.webp')`;
  button.onclick = function () {
    switchSrc(this, imageName + ".glb");
  };
  return button;
}

// Add button dynamically the container 'buttonContainer'
const buttonContainer = document.getElementById("buttonContainer");

leakedFiles.forEach((file) => {
  // Delete the extension of file
  let fileWithoutExtension = file.replace(/\.glb$/, "");
  const button = createButton(fileWithoutExtension);
  buttonContainer.appendChild(button);
});
