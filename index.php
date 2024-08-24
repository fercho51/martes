<?php
session_start();

$usuarios = 'root';
$pw ='';
$servidor = 'localhost:3308';
$basedatos = 'iniciarsesion';

$conn = mysqli_connect($servidor, $usuarios, $pw, $basedatos) or die("No se puede conectar al servidor $servidor");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['Usuario'];
    $clave = $_POST['Clave'];

    $sql = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Clave = '$clave'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['Usuario'] = $usuario;
        header("Location: productos.php");
    } else {
        $error = "Nombre de usuario o contraseña incorrectos.";
        header("Location: index.php?error=" . $error);
        exit(); 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq781YhFldvKuhfTAU6auU8T94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh60/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgX1oTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MARTES</title>
    <style>
        body {
            background-image: url('https://img.freepik.com/vector-gratis/fondo-medico-cruz_23-2147539555.jpg?w=740&t=st=1724430040~exp=1724430640~hmac=ecabbcff0ab6cc893ea27c3947c6fd107efbfdd8260991ba6c4bd7f89eae0ef1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 70px;
        }
        .error {/*AVIZO DE ERROR DE CONTRASEÑA */
            color: red;
            text-align: center;
            margin-bottom: 80px;
        }
        .form-group {/*TAMAÑO DEL CUADDRO LOGIN*/ 
            margin-bottom: 50px;
        }
        .form-group label {/*ESPACION ESTE NOMBRE Y SONTRASEÑA*/ 
            display: block;
            margin-bottom: 10px;
        }
        .form-group input {/*TAMAÑO DE NOMBRE DE USUARIO Y CLAVE */
            width: 80%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .form-group i {/*CENTRAR EL NOMBRE Y CONTRASEÑA*/ 
            margin-right: 10px;
        }
        .btn-primary {
            width: 50%;
        }
        .btn-secondary {
            display: block;
            margin-top: 10px;
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="index.php" method="POST"> 
            <h1>INICIA TU SESION</h1>
            <?php 
                if(isset($_GET['error'])){
            ?>
            <p class="error">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </p>
            <?php
                } 
            ?>
            <div class="form-group">
                <label for="usuario"><i class="fa-solid fa-user"></i> USUARIO</label>
                <input type="text" id="usuario" name="Usuario" placeholder="Nombre de usuario" required>
            </div>
            <div class="form-group">
                <label for="clave"><i class="fa-solid fa-unlock"></i> CLAVE</label>
                <input type="password" id="clave" name="Clave" placeholder="Clave" required>
            </div>
            <button type="submit" class="btn btn-primary">INICIAR SESIÓN</button>
            <a class="btn custom-btn" href="./registrarse.php" style="background-color: #ffc107; border-color: #ffc107; color: #212529;">REGISTRARSE</a>
            
        </form>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>

