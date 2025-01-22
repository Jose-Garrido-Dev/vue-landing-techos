<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['first-name'] ?? '';
    $address = $_POST['address'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone-number'] ?? '';
    $message = $_POST['message'] ?? '';

    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['success' => false, 'message' => 'Faltan campos obligatorios.']);
        exit;
    }

    $to = 'r4gnarc0de@gmail.com'; // Cambia por tu dirección de correo.
    $subject = 'Nuevo mensaje de contacto';
    $body = "Nombre: $name\nDirección: $address\nCorreo: $email\nTeléfono: $phone\n\nMensaje:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['success' => true, 'message' => 'Correo enviado con éxito.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al enviar el correo.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
}
