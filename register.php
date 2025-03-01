<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['email']) && isset($data['password'])) {
        $email = trim($data['email']);
        $password = trim($data['password']);
        $file = "usuarios.txt";

        if (!file_exists($file)) {
            file_put_contents($file, "");
        }

        $usuarios = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($usuarios as $usuario) {
            list($existing_email, $existing_password) = explode('|', $usuario);
            if ($email === $existing_email) {
                echo json_encode(["status" => "error", "message" => "El correo ya está registrado."]);
                exit();
            }
        }

        $guardar = file_put_contents($file, "$email|$password\n", FILE_APPEND);
    } else {
        echo json_encode(["status" => "error", "message" => "Datos incompletos."]);
    }
}
?>
