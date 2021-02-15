<?php
// Destruimos todas las sesiones 
session_destroy();

// y nos redirigimos a la pagina del login
echo "<script>
window.location = 'ingreso';
</script>";
