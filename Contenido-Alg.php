<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';

        session_destroy();
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido</title>
    <link rel="stylesheet" href="../Menu-Desplegable/estilos.css">
    <link rel="stylesheet" type="text/css" href="Clase.css">
</head>
<body>
    
    <nav class="nav">
        <ul class="list">

            <li class="list__item">
                <div class="list__button">
                    <img src="../Menu-Desplegable/assets/dashboard.svg" class="list__img">
                    <a href="../parte-roja-negra.php" class="nav__link">Inicio</a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="../Menu-Desplegable/assets/docs.svg" class="list__img">
                    <a class="nav__link">Matemática</a>
                    <img src="../Menu-Desplegable/assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="Contenido-Trigo.php" class="nav__link nav__link--inside">Trigonometría</a>
                    </li>

                    <li class="list__inside">
                        <a href="Contenido-Arit.php" class="nav__link nav__link--inside">Aritmética</a>
                    </li>

                    <li class="list__inside">
                        <a href="Contenido-Geo.php" class="nav__link nav__link--inside">Geometría</a>
                    </li>

                    <li class="list__inside">
                        <a href="Contenido-Alg.php" class="nav__link nav__link--inside">Algebra</a>
                    </li>
                </ul>

            </li>


            <li class="list__item">
                <div class="list__button">
                    <img src="../Menu-Desplegable/assets/docs.svg" class="list__img">
                    <a href="Contenido-R.m.php" class="nav__link">Habilidad lógico-matemática</a>
                </div>
            </li>
            <li class="list__item">
                <div class="list__button">
                    <img src="../Menu-Desplegable/assets/docs.svg" class="list__img">
                    <a href="Contenido-Historia.php" class="nav__link">Historia</a>
                </div>
            </li>
            <li class="list__item">
                <div class="list__button">
                    <img src="../Menu-Desplegable/assets/docs.svg" class="list__img">
                    <a href="Contenido-Lenguaje.php" class="nav__link">Lenguaje</a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="../Menu-Desplegable/assets/docs.svg" class="list__img">
                    <a class="nav__link">Ciencias</a>
                    <img src="../Menu-Desplegable/assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="Contenido-Física.php" class="nav__link nav__link--inside">Física</a>
                    </li>

                    <li class="list__inside">
                        <a href="Contenido-Química.php" class="nav__link nav__link--inside">Química</a>
                    </li>

                    <li class="list__inside">
                        <a href="Contenido-Biología.php" class="nav__link nav__link--inside">Biología</a>
                    </li>
                </ul>

            </li>


            <li class="list__item">
                <div class="list__button">
                    <img src="../Menu-Desplegable/assets/message.svg" class="list__img">
                    <a href="../index.php" class="nav__link">Fin</a>
                </div>
            </li>

        </ul>
    </nav>

    <div class="cursos">
        <div class="C1">
            <h4>Clase-1</h4>
            <p>ALGEBRA, sit amet consectetur adipisicing elit. Commodi libero, inventore at asperiores voluptate esse mollitia quasi eaque temporibus officia facere quibusdam unde illo ex molestias explicabo tempora accusantium vitae.</p>
            <a href="Clase-1.docx" download="Clase-1.docx">Descargar Archivo</a>
        </div>

        <div class="C1">
            <h4>Clase-2</h4>
            <p>ALGEBRA dolor, sit amet consectetur adipisicing elit. Commodi libero, inventore at asperiores voluptate esse mollitia quasi eaque temporibus officia facere quibusdam unde illo ex molestias explicabo tempora accusantium vitae.</p>
            <a href="Clase-1.docx" download="Clase-1.docx">Descargar Archivo</a>
        </div>

        <div class="C1">
            <h4>Clase-3</h4>
            <p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Commodi libero, inventore at asperiores voluptate esse mollitia quasi eaque temporibus officia facere quibusdam unde illo ex molestias explicabo tempora accusantium vitae.</p>
            <a href="Clase-1.docx" download="Clase-1.docx">Descargar Archivo</a>
        </div>
        <div class="C1">
            <h4>Clase-4</h4>
            <p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Commodi libero, inventore at asperiores voluptate esse mollitia quasi eaque temporibus officia facere quibusdam unde illo ex molestias explicabo tempora accusantium vitae.</p>
            <a href="Clase-1.docx" download="Clase-1.docx">Descargar Archivo</a>
        </div>

        <div class="C1">
            <h4>Ejercicios</h4>
            <p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Commodi libero, inventore at asperiores voluptate esse mollitia quasi eaque temporibus officia facere quibusdam unde illo ex molestias explicabo tempora accusantium vitae.</p>
            <a href="Clase-1.docx" download="Clase-1.docx">Descargar Archivo</a>
        </div>

        <div class="C1">
            <h4>Examen de conocimientos</h4>
            <p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Commodi libero, inventore at asperiores voluptate esse mollitia quasi eaque temporibus officia facere quibusdam unde illo ex molestias explicabo tempora accusantium vitae.</p>
            <a href="Clase-1.docx" download="Clase-1.docx">Descargar Archivo</a>
        </div>
    </div>
    
    <script src="../Menu-Desplegable/main.js"></script>
</body>
</html>