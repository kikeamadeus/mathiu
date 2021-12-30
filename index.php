<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Matemáticas</title>

    <!-- Fuente de estilos -->
    <link rel="stylesheet" href="public/css/style.css">

    <!-- Fuente de letras -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Mathiu</h1>
                    <h4 class="subtitle">Realiza las operaciones matematicas disponibles</h4>
                    <form action="" method="POST">
                        <div class="row">
                            <input placeholder="Cant." value="0" min="0" max="99999999" id="num1" type="number">
                            <select name="operacion" id="select">
                                <option value="" selected disabled>opc</option>
                                <option value="sum">+</option>
                                <option value="res">-</option>
                                <option value="mul">×</option>
                                <option value="div">÷</option>
                            </select>
                            <input placeholder="Cant." value="0" min="0" max="99999999" id="num2" type="number">
                        </div>
                        <button class="btn-resultado" type="button" id="enviar">Ver Resultado</button>
                        <p id="resultado"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="public/js/resultado.js"></script>
</body>
</html>