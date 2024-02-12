document.addEventListener('DOMContentLoaded', function() {
    const airplane = document.getElementById('airplane');
    
    // Écoute de l'événement mousemove sur le document
    document.addEventListener('mousemove', function(event) {
        const rect = airplane.getBoundingClientRect(); // Récupère les coordonnées de l'avion par rapport à la fenêtre du navigateur
        const offsetX = rect.width / 2; // Demi-largeur de l'avion
        const offsetY = rect.height / 2; // Demi-hauteur de l'avion

        // Position absolue de la souris par rapport à la fenêtre du navigateur
        const mouseX = event.clientX;
        const mouseY = event.clientY;

        // Position de l'avion en tenant compte du décalage
        const posX = mouseX - offsetX;
        const posY = mouseY - offsetY;

        // Mise à jour de la position de l'avion
        airplane.style.left = posX + 'px';
        airplane.style.top = posY + 'px';
    });
});
