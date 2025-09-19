<?php
require_once(__DIR__ . '/config.php');

if (isset($_POST['id_pregunta']) && isset($_POST['respuesta'])) {
    $id_respuesta = (int)$_POST['respuesta'];
    $fecha = date('Y-m-d H:i:s');

    // 1️⃣ Obtener puntaje de la respuesta seleccionada
    $stmtPuntaje = $conn->prepare("SELECT puntaje FROM respuestastest WHERE id_respuesta = ?");
    $stmtPuntaje->bind_param("i", $id_respuesta);
    $stmtPuntaje->execute();
    $resPuntaje = $stmtPuntaje->get_result();

    if ($resPuntaje->num_rows > 0) {
        $row = $resPuntaje->fetch_assoc();
        $puntaje = (int)$row['puntaje'];

        // 2️⃣ Insertar en resultados
        $stmt = $conn->prepare("INSERT INTO resultados (fecha, puntaje_total, id_respuesta) VALUES (?, ?, ?)");
        $stmt->bind_param("sii", $fecha, $puntaje, $id_respuesta);

        if ($stmt->execute()) {
            $id_pregunta = (int)$_POST['id_pregunta'];
            header("Location: preguntas.php?id=" . ($id_pregunta + 1));
            exit;
        } else {
            echo "Error al guardar en resultados: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: la respuesta no existe.";
    }
    $stmtPuntaje->close();
} else {
    echo "No se recibieron datos de la pregunta o la respuesta.";
}

$conn->close();
?>
