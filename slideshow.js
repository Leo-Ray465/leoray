
let currentImage = 0;
let currentInterval;

function startSlides() {
  fetch('imageList.php')
    .then(response => response.json())
    .then(data => {
      images = data;
      if (images.length > 0) {
        document.getElementById("imageDisplay").src = images[currentImage];
        currentInterval = setInterval(nextPhoto, 3500);
      }
    });
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