<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq781YhFldvKuhfTAU6auU8T94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>INICIO</title>
    <style>
        body {
            background-image: url('https://img.freepik.com/vector-gratis/asistencia-sanitaria-medica-color-azul_1017-26800.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            font-size: 24px; 
            background-color: white; 
            color: black; 
        }

        .error {
            font-size: 28px; 
            color: red; 
        }

        .btn {
            font-size: 32px;
            margin: 10px; 
            font-style: italic; 
            color: blue; 
        }

        .white-table {
            background-color: white;
            border: 1px solid black; 
            width: 60%; 
            margin: 20px auto; 
            border-collapse: collapse; 
        }

        .white-table td {
            padding: 10px;
            text-align: center;
            border: 1px solid black; 
        }

        .title {
            background-color: white;
            font-style: italic;
            font-size: 36px;
            text-transform: uppercase; 
            padding: 20px; 
            text-align: center;
            margin-top: 10px; 
        }

        .icon {
            font-size: 36px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<div class="d-flex align-items-center">
    <h1 class="display-1">FARMACIAS</h1>
   
    <p class="h2">MENU DE OPCIONES</p>


    <form action="productos.php" method="POST">
        <hr>
        <?php 
            if(isset($_GET['error'])){
        ?>
        <p class="error">
            <?php
                echo $_GET['error'];
            ?>
        </p>
        <?php
            } 
        ?>    

<table class="table table-borderless">
    <tr>
        <td>
            <a href="ingresarproductos.php" class="btn btn-lg btn-outline-primary w-100">
                <i class="fas fa-plus-circle icon"></i> INGRESAR PRODUCTOS
            </a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="mostrarproductos.php" class="btn btn-lg btn-outline-secondary w-100">
                <i class="fas fa-list icon"></i> MOSTRAR PRODUCTOS
            </a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="total.php" class="btn btn-lg btn-outline-success w-100">
                <i class="fas fa-dollar-sign icon"></i> MOSTRAR TOTAL
            </a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="index.php" class="btn btn-lg btn-outline-danger w-100">
                <i class="fas fa-sign-out-alt icon"></i> CERRAR SESIÓN
            </a>
        </td>
    </tr>
</table>


    </form>
</body>
</html>
