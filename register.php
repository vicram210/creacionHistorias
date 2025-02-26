<?php
header("Content-Type: application/json"); // Responder en formato JSON

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Leer los datos enviados por fetch()
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['email']) && isset($data['password'])) {
        $email = trim($data['email']);
        $password = trim($data['password']);
        $file = "usuarios.txt";

        // Si el archivo no existe, crearlo vacío
        if (!file_exists($file)) {
            file_put_contents($file, "");
        }

        // Verificar si el correo ya está registrado
        $usuarios = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($usuarios as $usuario) {
            list($existing_email, $existing_password) = explode('|', $usuario);
            if ($email === $existing_email) {
                echo json_encode(["status" => "error", "message" => "El correo ya está registrado."]);
                exit();
            }
        }

        // Guardar el usuario en usuarios.txt en formato email|contraseña
        $guardar = file_put_contents($file, "$email|$password\n", FILE_APPEND);

        if ($guardar !== false) {
            echo json_encode(["status" => "success", "message" => "Usuario registrado correctamente."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error al escribir en usuarios.txt."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Datos incompletos."]);
    }
}
?>
