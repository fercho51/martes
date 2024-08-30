
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
            position: relative; /* Para que las imágenes laterales queden en relación a este contenedor */
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

        /* Estilos para las imágenes laterales */
        .left-images, .right-images {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .left-images {
            left: 20px;
        }

        .right-images {
            right: 20px;
        }

        /* Ajustar tamaño de imágenes y reducir bordes */
        .side-image {
            width: 150px;  /* Cambiar a un tamaño mayor */
            height: 150px; /* Cambiar a un tamaño mayor */
            object-fit: cover;
            border-radius: 10px;
            border: 0px solid black;  /* Reducir grosor del borde */
            cursor: pointer; /* Añadir cursor pointer para indicar que es clicable */
        }
    </style>
</head>
<body>
    <div class="d-flex align-items-center">
        <h1 class="display-1">FARMACIAS</h1>
        <p class="h2">MENU DE OPCIONES</p>
    </div>

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
                    <a href="descuentos2.php" class="btn btn-lg btn-outline-secondary w-100">
                        <i class="fas fa-list icon"></i> DESCUENTOS A USUARIOS POR REGISTRASE
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

    <!-- Botón de Atrás -->
    <form action="index.php" method="get">
        <input type="submit" value="Atrás" class="btn btn-outline-secondary">
    </form>

    <!-- Imágenes del lado izquierdo -->
    <div class="left-images">
        <a href="descuentos.php"><img src="https://www.asesp.com.uy/imgnoticias/202103/W500_H325/6077.png" alt="Imagen 1" class="side-image"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.I4HLr29xZwQ-i5VFmQ62XAHaHa?pid=ImgDet&w=178&h=178&c=7&dpr=1,5" alt="Imagen 2" class="side-image"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.Hi_g2Ky5I2JYE4xr1QiR2QHaHa?pid=ImgDet&w=178&h=178&c=7&dpr=1,5" alt="Imagen 3" class="side-image"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.R6RWfHS4REitkzP46D7tRgHaHa?pid=ImgDet&w=199&h=199&c=7&dpr=1,5" alt="Imagen 4" class="side-image"></a>
    </div>

    <!-- Imágenes del lado derecho -->
    <div class="right-images">
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.pcXsaJfGzaNETs-IYDy7cAAAAA?pid=ImgDet&w=199&h=296&c=7&dpr=1,5" alt="Imagen 5" class="side-image"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.upunyConk8XgNj-dG9mUgwHaHF?pid=ImgDet&w=199&h=189&c=7&dpr=1,5" alt="Imagen 6" class="side-image"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.2X1jD1KUfG7lG-ZwpR_n-wHaHa?pid=ImgDet&w=199&h=199&c=7&dpr=1,5" alt="Imagen 7" class="side-image"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.DYxArtDgYsoweC4CPCXL5gHaHZ?pid=ImgDet&w=199&h=199&c=7&dpr=1,5" alt="Imagen 8" class="side-image"></a>
    </div>
</body>
</html>

