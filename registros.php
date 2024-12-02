<?php
include("con_ja.php");

if (isset($_POST['registro'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['pass']) >= 1) {
        $users = trim($_POST['name']);
        $password = trim($_POST['pass']); 
        $fecha_reg = date("d/m/y"); 

        // Asegúrate de usar password_hash para almacenar la contraseña de forma segura
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $consultas = "INSERT INTO usuario(nombre, contrasena, fecha_reg) VALUES ('$users','$hashed_password','$fecha_reg')";
        $resultado = mysqli_query($conem, $consultas);

        if ($resultado) {
            // Redirigir a la página principal después de un registro exitoso
            header("Location: pagina_principal.html");
            exit(); // Asegúrate de llamar a exit después de header
        } else {
            ?>
            <h3 class="bad">Ocurrió un error al registrar</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="bad">Por favor, complete todos los campos</h3>
        <?php 
    }
}
?>