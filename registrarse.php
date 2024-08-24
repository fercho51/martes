
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['Usuario'];
    $clave = $_POST['Clave'];

    if (empty($usuario) || empty($clave)) {
        $error = "Todos los campos son obligatorios";
    } else {
        $usuarios = 'root';
        $pw = '';
        $servidor = 'localhost:3308';
        $basedatos = 'iniciarsesion';

        $conn = mysqli_connect($servidor, $usuarios, $pw, $basedatos) or die("No se puede conectar al servidor $servidor");

        if ($conn) {
            $usuario = mysqli_real_escape_string($conn, $usuario);
            $clave = mysqli_real_escape_string($conn, $clave);

            $sql = "INSERT INTO usuarios (Usuario, Clave) VALUES ('$usuario', '$clave')";
            if (mysqli_query($conn, $sql)) {
                header("Location: index.php");
                exit;
            } else {
                $error = "Error al registrar el usuario: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        } else {
            $error = "Error en la conexión a la base de datos: " . mysqli_connect_error();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq781YhFldvKuhfTAU6auU8T94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
    <title>REGISTRARSE</title>
</head>
<style>
        body {
            background-image: url('https://th.bing.com/th?id=OIP.HEoQQbWj8RvrcI9_hfbjjgAAAA&w=294&h=197&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2.jpg'); /* Cambia esta ruta por la de tu imagen */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8); /* Fondo semitransparente para el formulario */
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .error {
            color: red;
            text-align: center;
        }

        input {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
<body>
    <form action="registrarse.php" method="POST">
        <h1>CREAR TU NUEVA CUENTA</h1>
        <hr>
        <?php 
            if(isset($error)){
            ?>
            <p class="error">
                <?php
                echo $error;
                ?>
            </p>
            <?php
            } 
        ?>    
        <hr>
        <i class ="fa-solid fa-user"></i>
        <label>USUARIO</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class ="fa-solid fa-unlock"></i>
        <label>CLAVE</label>
        <input type="password" name="Clave" placeholder="Clave">
        <hr>

        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
