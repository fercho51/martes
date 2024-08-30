<?php
session_start();

// Credenciales de conexión
$servidor = 'localhost:3308';
$usuario = 'root';  // Cambia esto a tu usuario de MySQL si es diferente
$pw = '';  // Cambia esto a tu contraseña de MySQL si es diferente
$basedatos = 'iniciarsesion';  // Cambiar a la base de datos 'iniciarsesion'

// Crear conexión
$conn = new mysqli($servidor, $usuario, $pw, $basedatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Proceso de registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $usuario = $conn->real_escape_string($_POST["usuario"]);
    $contrasena = password_hash($_POST["contrasena"], PASSWORD_DEFAULT);

    // Verificar si el usuario ya existe
    $sql_verificar = "SELECT * FROM usuarios WHERE Usuario = '$usuario'";
    $resultado = $conn->query($sql_verificar);

    if ($resultado->num_rows > 0) {
        echo "<script>alert('El usuario ya está registrado');</script>";
    } else {
        // Insertar en la tabla usuarios
        $sql_usuarios = "INSERT INTO usuarios (Usuario, Clave) VALUES ('$usuario', '$contrasena')";

        if ($conn->query($sql_usuarios) === TRUE) {
            $usuario_id = $conn->insert_id; // Obtener el ID del usuario recién insertado

            // Insertar en la tabla descuentos2
            $descuento = 10.00; // Ejemplo de descuento
            $sql_descuentos = "INSERT INTO descuentos2 (usuario_id, descuento) VALUES ('$usuario_id', '$descuento')";

            if ($conn->query($sql_descuentos) === TRUE) {
                echo "<script>alert('Registro exitoso');</script>";
            } else {
                echo "<script>alert('Error al registrar');</script>";
            }
        } else {
            echo "<script>alert('Error al registrar');</script>";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Descuentos por Registrarse</title>
    <style>
        body {
            background-image: url('https://th.bing.com/th/id/OIP.x9eego2rxvny7_PU9ouxXAHaFy?w=201&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7.jpg');
            background-size: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .back-button {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        .back-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Descuentos por Registrarse</h1>

        <!-- Formulario de registro -->
        <form method="post" action="">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required><br><br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>
            <input type="submit" name="register" value="Registrar">
        </form>

        <!-- Botón de atrás -->
        <a href="productos.php" class="back-button">Atrás</a>
    </div>
</body>
</html>
