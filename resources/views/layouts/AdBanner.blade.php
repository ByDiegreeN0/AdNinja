<script>
    
    var enlace = "";

    
    var contadorClics = 0;

    
    function abrirVentanaEmergente() {
      if (contadorClics === 0) {
        window.open(enlace, "_blank", "width=500,height=500");
        contadorClics++;
      }
    }

    // Evento para detectar el clic en cualquier parte de la página
    document.addEventListener("click", abrirVentanaEmergente);
  </script>