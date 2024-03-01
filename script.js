document.getElementById("transitionButton").addEventListener("click", function() {
    // Création de l'élément de transition
    var transition = document.createElement("div");
    transition.classList.add("page-transition");
    
    // Ajout de la transition à la fin du body
    document.body.appendChild(transition);
    
    // Redirection vers la page suivante après un court délai
    setTimeout(function() {
      window.location.href = "photo.php";
    }, 500); // 500ms, correspondant à la durée de l'animation CSS
  });
  