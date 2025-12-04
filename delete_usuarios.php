<?php
// /eliminar_usuarios.php

include('connection.php');
$con = connection();

// 1. Obtener el ID del usuario de forma segura.
// Usamos el operador de fusión null '??' para evitar errores si el parámetro no existe.
$id_usuario = $_GET['id_usuario'] ?? null;

// 2. Verificar que el ID existe antes de intentar la eliminación.
if ($id_usuario) {
    // 3. Definir la consulta con un marcador de posición '?'
    // NO se concatena la variable $id_usuario aquí.
    $sql = "DELETE FROM usuarios WHERE id_usuario = ?";

    // 4. Preparar la sentencia.
    $stmt = $con->prepare($sql);

    // 5. Vincular el parámetro y especificar su tipo.
    // 'i' indica que el valor de $id_usuario debe tratarse como un entero (integer).
    $stmt->bind_param("i", $id_usuario);

    // 6. Ejecutar la sentencia.
    if ($stmt->execute()) {
        // Redirección si la eliminación fue exitosa
        header("Location: index_usuarios.php");
        exit; // Siempre usa exit después de una redirección con Header()
    } else {
        // Manejo de error.
        // echo "Error al eliminar el usuario: " . $stmt->error;
        header("Location: index_usuarios.php?msg=delete_failed");
        exit;
    }

    // 7. Cerrar la sentencia.
    $stmt->close();
} else {
    // Manejar el caso donde no se proporcionó el ID
    header("Location: index_usuarios.php");
    exit;
}
?>
