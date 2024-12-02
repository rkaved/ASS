<?php
// Incluir el archivo de conexión a la base de datos
include 'con_ja.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $users = trim($_POST['name']);
    $password = trim($_POST['pass']);

    // Consulta para verificar el usuario y la contraseña
    $query = "SELECT contrasena FROM usuario WHERE nombre = '$users'";
    $result = mysqli_query($conem, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Verificar la contraseña (suponiendo que se ha almacenado de forma segura)
        if (password_verify($password, $row['contrasena'])) {
            // Si las credenciales son correctas, redirigir a la página principal
            header("Location: pagina_principal.html");
            exit(); // Asegúrate de llamar a exit después de header
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>