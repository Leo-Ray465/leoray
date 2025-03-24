
images = ["projectsFolder/IMG_8032.jpeg", "projectsFolder/IMG_5764.jpeg",
          "projectsFolder/IMG_4800.jpeg", 
          "projectsFolder/IMG_5124.jpeg", "projectsFolder/IMG_5438.jpeg", 
          "projectsFolder/IMG_5594.jpeg", "projectsFolder/IMG_5622.jpeg", 
          "projectsFolder/IMG_5640.jpeg", "projectsFolder/IMG_5641.jpeg", 
          "projectsFolder/IMG_5749.jpeg", "projectsFolder/IMG_5759.jpeg",
          "projectsFolder/IMG_8027.jpeg", "projectsFolder/IMG_6173.jpeg",
          "projectsFolder/IMG_6476.jpeg", "projectsFolder/IMG_6478.jpeg",
          "projectsFolder/IMG_6508.jpeg", "projectsFolder/IMG_6633.jpeg",
          "projectsFolder/IMG_6923.jpeg", "projectsFolder/IMG_6949.jpeg",
          "projectsFolder/IMG_6956.jpeg"];
let currentImage = 0;
let currentInterval;

function startSlides(){
  img = document.getElementById("imageDisplay");
  img.src = images[currentImage];
  currentInterval = setInterval('nextPhoto()', 3500);
}

function resetInterval(){
  clearInterval(currentInterval);
  currentInterval = setInterval(nextPhoto, 3500);
}

function previousPhoto(){
  currentImage = (currentImage - 1);
  if(currentImage < 0){
    currentImage = images.length - 1;
  }
  img = document.getElementById("imageDisplay");
  img.src = images[currentImage];
  resetInterval();
}

function nextPhoto(){
  currentImage = (currentImage + 1);
  if (currentImage > images.length - 1){
    currentImage = 0;
  }
  img = document.getElementById("imageDisplay");
  img.src = images[currentImage];
  resetInterval();
}

window.onload = startSlides;