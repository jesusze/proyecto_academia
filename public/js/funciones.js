const nav = document.querySelector('nav');

    window.addEventListener('scroll', function(){
        nav.classList.toggle('active', this.window.scrollY > 0)
    })
$(document).ready(function () {
    var indice = 0;

    function mostrarSlide() {
        $(".slide").removeClass("active"); // Ocultamos todas las imágenes
        $(".pagination li").css("background-color", "black");

        $(".slide")
        .eq(indice)
        .addClass("active"); // Mostramos la imagen activa
        $(".pagination li").eq(indice).css("background-color", "white");
    }

    $(".pagination li").eq(indice).css("background-color", "white");

    $(".pagination li").click(function () {
        indice = $(this).index();
        mostrarSlide();
    });

    function avanzarSlide() {
        indice++;
        if (indice > 2) {
        indice = 0;
        }
        mostrarSlide();
    }

    function retrocederSlide() {
        indice--;
        if (indice < 0) {
        indice = 2;
        }
        mostrarSlide();
    }

    // Llamar a la función para mostrar la primera imagen
    mostrarSlide();

    setInterval(avanzarSlide, 7000);

    $(".right").click(avanzarSlide);
    $(".left").click(retrocederSlide);
});