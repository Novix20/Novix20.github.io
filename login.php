<?php
            session_start();
    // Verificar si se enviaron los datos del formulario
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $conexionDatos = new mysqli('localhost', 'phpmyadmin', 'RedesInformaticas', 'db_ibarra');
        
        // Utilizar sentencias preparadas para evitar inyección SQL
        $stmt = $conexionDatos->prepare("SELECT nombre, contrasena FROM usuarios WHERE nombre = ? AND contrasena = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $resultadoUsuario = $stmt->get_result();

        // Aquí puedes realizar la validación de los datos ingresados por el usuario
        // Verificar si el nombre de usuario y la contraseña son correctos

        // Ejemplo de validación básica
        if($resultadoUsuario->num_rows == 1) {
            // Iniciar sesión
            $_SESSION['username'] = $_POST['username'];

            // Redirigir a la página de inicio después del inicio de sesión exitoso
            header('Location: index.php');
            exit();
        } else {
            // Mostrar mensaje de error si los datos son incorrectos
            echo 'Nombre de usuario o contraseña incorrectos.';
        }
    }
?>