<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq781YhFldvKuhfTAU6auU8T94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">

    <style>
    .center-container {
        background: url('https://e1.pxfuel.com/desktop-wallpaper/52/393/desktop-wallpaper-50-pharmacy-pharmacy.jpg') no-repeat center center fixed;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 90vh;
        margin: 0;
    }

    .center-table {
        background-color: rgba(255, 255, 255, 0.9);
        color: #333;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        font-family: 'Arial', sans-serif;
        font-size: 20px; /* Tamaño de la letra modificado */
    }

    .custom-btn {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 10px;
        margin: 10px;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s ease, transform 0.3s ease;
        font-family: 'Poppins', sans-serif;
        font-size: 20px; /* Tamaño de la letra modificado */
    }

    .custom-btn:hover {
        background-color: #45a049;
        transform: scale(1.05);
    }

    h1.text-with-shadow,
    label.text-with-shadow {
        font-size: 20px; /* Tamaño de la letra modificado */
        color: #333;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        font-family: 'Arial', sans-serif;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        font-size: 20px; /* Tamaño de la letra modificado */
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: 'Arial', sans-serif;
    }
</style>

</head>
<body>
<h1 class="display-1"> PRODUCTOS DE LA FARMACIA</h1>
    <div class="center-container">
        <form action="proceso.php" method="POST" class="center-table">
            <div>
                <label class="text-with-shadow">INTRODUCE EL NOMBRE DEL PRODUCTO QUE DESEAS COMPRAR.</label>
            </div>
            <div>
                <input type="text" name="producto" placeholder="Nombre Producto" required>
            </div>

            <div>
                <label class="text-with-shadow">INGRESA EL MONTO DEL PRODUCTO PARA LA FARMACIA</label>
            </div>
            <div>
                <input type="number" name="valor_compra" placeholder="Valor Producto Comprado" required>
            </div>

            <div>
                <label class="text-with-shadow">INGRESE EL PRECIO DEL PRODUCTO AL PUBLICO</label>
            </div>
            <div>
                <input type="number" name="valor_venta" placeholder="Valor Producto Vendido" required>
            </div>

            <button type="submit" name="guardar" id="guardarBtn" class="btn custom-btn">GUARDAR</button>
        </form>
    </div>
</body>
</html>
