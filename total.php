<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Estilos de Bootstrap desde una URL -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq781YhFldvKuhfTAU6auU8T94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Fuentes de iconos de Font Awesome desde una URL -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://img.freepik.com/vector-gratis/fondo-dibujado-mano-dia-nacional-medico_23-2149438164.jpg?size=626&ext=jpg&ga=GA1.1.496371488.1724340792&semt=ais_hybrid');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        .error {
            color: red;
        }
        .total-ganancias {
            font-size: 24px;
            text-align: center;
        }
        /* Centrar el botón y personalizar el estilo */
        .btn-center {
            text-align: center;
            margin-top: 20px;
        }
        .custom-btn {
            display: inline-block;
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .custom-btn:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Total de Ganancias</title>
</head>
<body>
    <h1>GANANCIAS DEL PRODUCTO VENDIDO<i class="fas fa-chart-line"></i></h1>
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

    <?php
    $usuarios = 'root';
    $pw = '';
    $servidor = 'localhost:3308';
    $basedatos = 'iniciarsesion';

    $conn = new mysqli($servidor, $usuarios, $pw, $basedatos);

    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    $sql = "SELECT SUM(valor_venta - valor_compra) AS total_ganancias FROM productos"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $totalGanancias = $row["total_ganancias"];
        echo "<p class='total-ganancias'>Total de Ganancias: $totalGanancias</p>";
    } else {
        echo "No se encontraron datos";
    }

    $conn->close();
    ?>

    <hr>
    <div class="btn-center">
        <a href="productos.php" class="custom-btn">ATRÁS <i class="fas fa-check"></i></a>
    </div>
</body>
</html>
