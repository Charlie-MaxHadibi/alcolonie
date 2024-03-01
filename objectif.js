// Sélection aléatoire d'une division avec la classe "photo-pin"
var photoPins = document.getElementsByClassName("photo-pin");
var randomIndex = Math.floor(Math.random() * photoPins.length);
var randomPhotoPin = photoPins[randomIndex];

// Application de la bordure rose
randomPhotoPin.style.border = "2px solid pink";