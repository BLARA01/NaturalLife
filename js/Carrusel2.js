// Selecciona el carrusel2
const carrusel2 = document.querySelector('.carrusel2');

// Obtiene todas las imágenes del carrusel2
const imagenes2 = carrusel2.querySelectorAll('img');

let indiceImagenActual2 = 0;

// Función para mostrar la imagen actual y ocultar las demás en el carrusel2
function mostrarImagenActual2() {
    imagenes2.forEach((imagen, index) => {
        if (index === indiceImagenActual2) {
            imagen.style.display = 'block';
        } else {
            imagen.style.display = 'none';
        }
    });
}

// Función para cambiar la imagen actual en el carrusel2
function cambiarImagen2() {
    // Incrementa el índice o vuelve al principio si se llega al final en el carrusel2
    indiceImagenActual2 = (indiceImagenActual2 + 1) % imagenes2.length;
    mostrarImagenActual2();
}

// Muestra la primera imagen al cargar la página en el carrusel2
mostrarImagenActual2();

// Cambia la imagen automáticamente cada 5 segundos en el carrusel2 (ajusta el tiempo según desees)
setInterval(cambiarImagen2, 5000);
