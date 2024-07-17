<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            background-color: #1a1a1a;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
         
        }

        .container {
            margin-top: 50px;
            padding: 0 20px;
            min-height: calc(100% - 120px); /* Ajuste para que el footer no se solape */
        }

        /* Estilos para la caja de juegos */
        .game-box {
            display: inline-block;
            margin: 20px;
            width: 200px;
            height: 300px;
            border: 1px solid #444;
            border-radius: 10px;
            padding: 10px;
            background-color: #2c2c2c;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .game-box img {
            width: 100%;
            height: 150px;
            border-radius: 10px 10px 0 0;
            object-fit: cover;
        }

        .game-box h2 {
            font-size: 18px;
            margin-top: 10px;
        }

        .game-box button {
            background-color: #ff4500;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            display: block;
            margin: 0 auto;
            text-decoration: none;
        }

        .game-box button:hover {
            background-color: #ff6a33;
        }

        /* Estilos para el pie de página */
        footer {
            background-color: #2c2c2c;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            width: 100%;
      
            height:100px;
            
        }

        .social-links {
            margin-top: 20px;
            text-align: center;
        }

        .social-links a {
            margin: 0 10px;
            font-size: 24px;
            color: #fff;
        }

        .social-links a:hover {
            color: #ff4500;
        }

        .texto {
            color: #fff;
            font-weight: bold;
            text-decoration: none;
        }
        .pie{
            display:flex;
            align-items:center;
            justify-content:center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Mis Contactos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="formulario_agenda.php">Contactos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cerrar.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Bienvenidos administrador</h1>
        <div class="game-box">
            <img src="img/pexels-pixabay-220055.jpg" alt="Game 1">
            <h2>juego de dos</h2>
            <button><a href="tres_en_raya_con_novia/index.html" class="texto" target="_blank">Ir al juego</a></button>
        </div>
        <div class="game-box">
            <img src="img/pexels-pixabay-220051.jpg" alt="Game 2">
            <h2>Jugar solo</h2>
            <button><a href="tres_en_raya_soltero/index.html" class="texto" target="_blank">Ir al juego</a></button>
        </div>
        <div class="game-box">
            <img src="img/serpiente.jpg" alt="Game 3">
            <h2>serpiente</h2>
            <button><a href="serpiente/index.html" class="texto" target="_blank">Ir al juego</a></button>
        </div>
        <div class="game-box">
            <img src="img/pexels-pixabay-356079.jpg" alt="Game 4">
            <h2>adivina el numero</h2>
            <button><a href="adivinar_numero/index.html" class="texto" target="_blank">Ir al juego</a></button>
        </div>
        <div class="game-box">
            <img src="img/pexels-yogendras31-1701197.jpg" alt="Game 5">
            <h2>nunca_perder</h2>
            <button><a href="nunca_perder/index.html" class="texto" target="_blank">Ir al juego</a></button>
        </div>
    </div>

    <footer>
       
            <p class="pie">&copy; 2024 Mis Contactos. Todos los derechos reservados.</p>
            <div class="social-links">
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
          
       
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
