<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq781YhFldvKuhfTAU6auU8T94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
    <title>Descuentos</title>
    <style>
        body {
            background-image: url('https://th.bing.com/th/id/OIP.N5zf6LZpD5_bxDY5BXTM-QHaE7?w=284&h=190&c=7&r=0&o=5&dpr=1.5&pid=1.7.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            height: 100vh;
            color: red ;
        }

        h1 {
            font-size: 50px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            width: 100%;
            max-width: 1000px; /* Ajusta el ancho máximo de la cuadrícula */
            margin-bottom: 10px;
        }

        .image-grid a {
            display: block;
        }

        .image-grid img {
            width: 100%; /* Ajusta la imagen al contenedor */
            height: auto; /* Mantiene la proporción */
            border-radius: 10px;
            border: 2px solid white;
            background-color: rgba(255, 255, 255, 0.5); /* Fondo semitransparente */
        }

        .btn-back {
            margin-top: 20px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1>Galería de Descuentos</h1>

    <div class="image-grid">
        <!-- Imágenes en cuadrícula  -->
        <a href="descuentos.php"><img src="https://www.asesp.com.uy/imgnoticias/202103/W500_H325/6077.png" alt="Imagen 1"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.I4HLr29xZwQ-i5VFmQ62XAHaHa?pid=ImgDet&w=178&h=178&c=7&dpr=1,5" alt="Imagen 2"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.Hi_g2Ky5I2JYE4xr1QiR2QHaHa?pid=ImgDet&w=178&h=178&c=7&dpr=1,5" alt="Imagen 3"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.R6RWfHS4REitkzP46D7tRgHaHa?pid=ImgDet&w=199&h=199&c=7&dpr=1,5" alt="Imagen 4"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.pcXsaJfGzaNETs-IYDy7cAAAAA?pid=ImgDet&w=199&h=296&c=7&dpr=1,5" alt="Imagen 5"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.upunyConk8XgNj-dG9mUgwHaHF?pid=ImgDet&w=199&h=189&c=7&dpr=1,5" alt="Imagen 6"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.2X1jD1KUfG7lG-ZwpR_n-wHaHa?pid=ImgDet&w=199&h=199&c=7&dpr=1,5" alt="Imagen 7"></a>
        <a href="descuentos.php"><img src="https://th.bing.com/th/id/OIP.DYxArtDgYsoweC4CPCXL5gHaHZ?pid=ImgDet&w=199&h=199&c=7&dpr=1,5" alt="Imagen 8"></a>
        <!-- Puedes agregar más imágenes según sea necesario -->
    </div>

    <!-- Botón de Atrás -->
    <a href="productos.php" class="btn btn-outline-light btn-ba">Atrás</a>
</body>
</html>
