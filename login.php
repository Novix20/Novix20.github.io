<?php
    // Verificar si se enviaron los datos del formulario
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Aquí puedes realizar la validación de los datos ingresados por el usuario
        // Verificar si el nombre de usuario y la contraseña son correctos

        // Ejemplo de validación básica
        if($username === 'admin' && $password === '12345') {
            // Iniciar sesión
            session_start();
            $_SESSION['username'] = $username;

            // Redirigir a la página de inicio después del inicio de sesión exitoso
            header('Location: index.php');
            exit();
        } else {
            // Mostrar mensaje de error si los datos son incorrectos
            echo 'Nombre de usuario o contraseña incorrectos.';
        }
    }
?>