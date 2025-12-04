<?php
// /delete_producto.php

include('connection.php');
$con = connection();

// 1. Obtener el ID del producto de forma segura.
// Usamos el operador de fusión null '??' para evitar un error si el parámetro no existe.
$id_producto = $_GET['id_producto'] ?? null;

// 2. Verificar que el ID existe antes de intentar la eliminación.
if ($id_producto) {
    // 3. Definir la consulta con un marcador de posición '?' (el valor se pasa por separado).
    $sql = "DELETE FROM producto WHERE id_producto = ?";

    // 4. Preparar la sentencia.
    // Esto envía la estructura de la consulta al servidor de BD para pre-compilarla.
    $stmt = $con->prepare($sql);

    // 5. Vincular el parámetro y especificar su tipo.
    // 'i' indica que el valor de $id_producto debe tratarse como un entero (integer).
    $stmt->bind_param("i", $id_producto);

    // 6. Ejecutar la sentencia.
    // Los datos se envían de forma separada al código SQL.
    if ($stmt->execute()) {
        // Redirección si la eliminación fue exitosa
        header("Location: index_producto.php");
        exit; // Siempre usa exit después de una redirección con Header()
    } else {
        // Manejo de error en caso de que la ejecución falle
        // NOTA: En producción, no muestres errores de base de datos directamente al usuario.
        // echo "Error al ejecutar la consulta: " . $stmt->error;
        header("Location: error.php?msg=delete_failed");
        exit;
    }

    // 7. Cerrar la sentencia.
    $stmt->close();
} else {
    // Manejar el caso donde no se proporcionó el ID
    header("Location: index_producto.php?msg=no_id");
    exit;
}
?>
