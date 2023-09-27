// Selecciona el carrusel
const carrusel = document.querySelector('.carrusel');

// Obtiene todas las imágenes del carrusel
const imagenes = carrusel.querySelectorAll('img');

let indiceImagenActual = 0;

// Función para mostrar la imagen actual y ocultar las demás
function mostrarImagenActual() {
    imagenes.forEach((imagen, index) => {
        if (index === indiceImagenActual) {
            imagen.style.display = 'block';
        } else {
            imagen.style.display = 'none';
        }
    });
}

// Función para cambiar la imagen actual
function cambiarImagen() {
    // Incrementa el índice o vuelve al principio si se llega al final
    indiceImagenActual = (indiceImagenActual + 1) % imagenes.length;
    mostrarImagenActual();
}

// Muestra la primera imagen al cargar la página
mostrarImagenActual();

// Cambia la imagen automáticamente cada 5 segundos (ajusta el tiempo según desees)
setInterval(cambiarImagen, 5000);
