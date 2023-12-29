<!DOCTYPE html>
<html lang="es">

<head>
  <title>Realidad aumentada</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link type="text/css" href="css/styles.css" rel="stylesheet" />
</head>

<body>

  <script>
    // List of files obtained with 'scandir' (can get this in php pass it to javascript)
    const files = <?php echo json_encode(scandir('assets/3d_models/glb')); ?>;
    // Filter "." and ".." of array 
    const leakedFiles = files.filter(file => file !== '.' && file !== '..');
  </script>


  <div class="container">
    <!-- <model-viewer> HTML element -->
    <model-viewer 
      src="assets/3d_models/glb/Astronaut.glb" 
      poster="assets/3d_models/img/Astronaut.webp" 
      ar 
      shadow-intensity="1" 
      ar-placement="wall" 
      ar-scale="auto" 
      camera-controls touch-action="pan-y" 
      auto-rotate alt="A 3D modelhelmet raider" 
      max-camera-orbit="auto 90deg auto">
      <button slot="ar-button" id="ar-button" 
      style="background-image: url('assets/img/ar_icon.png')" ;>
      Ver en tu espacio</button>

      <div class="slider">
        <div class="slides" id="buttonContainer">
          <!-- 
            The 'button' element will be created here dynamically with javascript function 'createButton' 
            For example:  
              <button
                class="slide selected"
                onclick="switchSrc(this, 'imageName')"
                style="background-image: url('path_to_file');"
              ></button
          
          -->

        </div>
      </div>

    </model-viewer>
  </div>

  <script src="js/main.js"></script>

  <!-- Import the component model-viewer -->
  <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.3.0/model-viewer.min.js"></script>
</body>
</html>