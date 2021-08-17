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
<html>
<head>
	<meta charset="utf-8">
	<title>NAV ANIMADO</title>
	<link rel="stylesheet" type="text/css" href="nav-parte-roja-negra.css">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<script src="https://kit.fontawesome.com/7599b02bca.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="Carrusel.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=MonteCarlo&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

</head>
<!-- Falta modificar bien cuando se cambia entre pc y telefono -->
<body id="body">
	<header>
		<div class="acceso">
			<div class="acceso_header">
				<div class="logo">
					<img src="logo.png">
				</div>
				<div class="logo_titulo">
					ACADEMY
				</div>
				<div class="header_hamburguesa">
					<i class="fas fa-bars"></i>
				</div>
			</div>
			<div class="acceso_opcion">
				<div class="acceso_opcion--atras acceso_opcion--elemento">
					<i class="fas fa-undo-alt"></i>
					<p>Retornar</p>
				</div>
				<div class="acceso_opcion--adios acceso_opcion--elemento">
					<a href="cerrar_sesion.php"><i class="far fa-arrow-alt-circle-left"></i><p>Cerrar Sesion</p></a>
				</div>
			</div>
		</div>
	</header>

	<nav id="nav">
		<div class="nav_elemento nav_perfil">
			<div class="perfil_foto">
				<img src="https://image.flaticon.com/icons/png/512/1077/1077012.png">
			</div>
			<div id="puerta_colap">
				<div id="frase_colap">Bienvenido</div>
				<i class="fas fa-caret-down"></i>
			</div>
			<div class="colap">
				<p class="elemento_colap">Lorem ipsum dolor, sit amet consectetur.</p>
			</div>
		</div>
		<div class="nav_elemento--conjunto"></div>
			<a href="" class="nav_elemento primer_a">
				<i class="icono_nav fas fa-home"></i>
				<p class="nav_elemento--letra">Inicio</p>
			</a>
			<a href="" class="nav_elemento">
				<i class="icono_nav fas fa-user-alt"></i>
				<p class="nav_elemento--letra">Mi Perfil</p>
			</a>
			<a href="" class="nav_elemento">
				<i class="icono_nav fas fa-book-open"></i>
				<p class="nav_elemento--letra">Mis Clases</p>
			</a>
			<a href="" class="nav_elemento">
				<i class="icono_nav fas fa-question"></i>
				<p class="nav_elemento--letra">Examenes</p>
			</a>
			<a href="cerrar_sesion.php" class="nav_elemento">
				<i class="icono_nav far fa-arrow-alt-circle-left"></i>
					<p class="nav_elemento--letra">Cerrar Sesion</p>
			</a>
	</nav>

	<div class="div-carrusel">
            <h3>Algunos cursos que te podrían interesar</h3>
            <br>
            <div class="wrapper">
                <div class="carrusel owl-carousel">
                	<div class="pic pic-1"><p>Habilidad lógico-matemática</p><li><a href="Cursos/Contenido-R.m.php">Ver más</a></li>
                	</div>
                	<div class="pic pic-2"><p>Historia</p><li><a href="Cursos/Contenido-Historia.php">Ver más</a></li></div>
                	<div class="pic pic-3"><p>Lenguaje</p><li><a href="Cursos/Contenido-Lenguaje.php">Ver más</a></li></div>
                	<div class="pic pic-4"><p>Física</p><li><a href="Cursos/Contenido-Física.php">Ver más</a></li></div>
                	<div class="pic pic-5"><p>Química</p><li><a href="Cursos/Contenido-Química.php">Ver más</a></li></div>
                	<div class="pic pic-6"><p>Biología</p><li><a href="Cursos/Contenido-Biología.php">Ver más</a></li></div>
                </div>
            </div>

            <script>
                $(".carrusel").owlCarousel({
                margin: 10,
                loop: true, 
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0:{
                    items: 1,
                    nav:false
                },
                    600:{
                    items: 2,
                    nav:false
                },
                    1000:{
                    items: 3,
                    nav:false
                }
                }
                });
            </script>
        </div>

        <div class="botonera">
          <a href="https://www.facebook.com/"><img src="https://image.flaticon.com/icons/png/512/725/725289.png"></a>
          <a href="https://www.facebook.com/"><img src="https://image.flaticon.com/icons/png/512/1383/1383263.png"></a>
          <a href="https://www.facebook.com/"><img src="https://image.flaticon.com/icons/png/512/1383/1383269.png"></a>
          <a href="https://www.facebook.com/"><img src="https://image.flaticon.com/icons/png/512/1383/1383265.png"></a>
          <a href="https://www.facebook.com/"><img src="https://image.flaticon.com/icons/png/512/1383/1383260.png"></a>  
          <a href="https://www.facebook.com/"><img src="https://image.flaticon.com/icons/png/512/1383/1383262.png"></a>
          <a href="https://www.facebook.com/"><img src="https://image.flaticon.com/icons/png/512/725/725296.png"></a>
      </div>   

	<script type="text/javascript" src="header-parte-roja-negra.js"></script>	
</body>
</html>