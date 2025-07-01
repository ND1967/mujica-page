document.addEventListener('DOMContentLoaded', function() {
    // Elementos principales
    const modal = document.getElementById("miModal");
    const btn = document.getElementById("abrirModal");
    const btn1 = document.getElementById("abrirModal1");
    const btn2 = document.getElementById("abrirModal2");
    const btn3 = document.getElementById("abrirModal3");
    const btn4 = document.getElementById("abrirModal4");
    const btn5 = document.getElementById("abrirModal5");
    const spanCerrar = document.getElementsByClassName("cerrar")[0];
    
    // Elementos para el video ampliado
    const videoAmpliado = document.getElementById("videoAmpliado");
    const cerrarVideo = document.getElementsByClassName("cerrar-video")[0];
    const videoGrande = document.getElementById("videoGrande");
    
    // Abrir modal principal
    btn.onclick = function() {modal.style.display = "block"; document.body.style.overflow = "hidden";}
    btn1.onclick = function() {modal.style.display = "block"; document.body.style.overflow = "hidden";}
    btn2.onclick = function() {modal.style.display = "block"; document.body.style.overflow = "hidden";}
    btn3.onclick = function() {modal.style.display = "block"; document.body.style.overflow = "hidden";}
    btn4.onclick = function() {modal.style.display = "block"; document.body.style.overflow = "hidden";}
    btn5.onclick = function() {modal.style.display = "block"; document.body.style.overflow = "hidden";}
    
    // Cerrar modal principal
    spanCerrar.onclick = function() {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    }
    
    // Cerrar al hacer clic fuera del contenido
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            document.body.style.overflow = "auto";
        }
        if (event.target == videoAmpliado) {
            cerrarVideoAmpliado();
        }
    }
    
    // Cerrar con tecla ESC
    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") {
            if (modal.style.display === "block") {
                modal.style.display = "none";
                document.body.style.overflow = "auto";
            }
            if (videoAmpliado.style.display === "flex") {
                cerrarVideoAmpliado();
            }
        }
    });
    
    // Manejar miniaturas de video
    const videoThumbs = document.querySelectorAll('.video-thumb');
    videoThumbs.forEach(thumb => {
        thumb.addEventListener('click', function() {
            const videoSrc = this.getAttribute('data-video-src');
            abrirVideoAmpliado(videoSrc);
        });
    });
    
    // Función para abrir video ampliado
    function abrirVideoAmpliado(src) {
        videoGrande.innerHTML = `<source src="${src}" type="video/mp4">`;
        videoGrande.load();
        videoAmpliado.style.display = "flex";
        document.body.style.overflow = "hidden";
    }
    
    // Función para cerrar video ampliado
    function cerrarVideoAmpliado() {
        videoAmpliado.style.display = "none";
        videoGrande.pause();
        document.body.style.overflow = "auto";
    }
    
    // Cerrar video ampliado con el botón
    cerrarVideo.onclick = cerrarVideoAmpliado;
});