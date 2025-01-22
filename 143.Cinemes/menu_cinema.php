<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $opcion = $_POST['opcion']; // Capturar la opción seleccionada

    // Procesar la opción seleccionada
    switch ($opcion) {
        case '1':
            $mensaje = "Has seleccionado la Opción 1.";
            break;
        case '2':
            $mensaje = "Has seleccionado la Opción 2.";
            break;
        case '3':
            $mensaje = "Saliendo del programa...";
            break;
        default:
            $mensaje = "Opción no válida. Por favor, selecciona una opción.";
    }
} else {
    $mensaje = "Por favor selecciona una opción.";
}
?>
