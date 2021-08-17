    <?php

    session_start();

    if (isset($_SESSION['usuario'])) {
        header("location: parte-roja-negra.php");
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="estilos.css">

    </head>
    <body>
        <div class="contenedor__padre">
            <div class="contenedor__todo">

                <div class="contenedor_img">
                    <img src="logo.png">

                    <div class="contenedor_texto">
                        <h2>ACADEMY</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Blanditiis ut provident sequi sapiente, sint incidunt in itaque possimus ipsum obcaecati voluptatem ad commodi dolore.</p>

                    </div>

                    <div class="ct-1"></div>
                    <div class="ct-2"></div>
                    <div class="ct-3"></div>
                    <div class="ct-4"></div>
                </div>

                <div class="forms">
                    <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Registrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="registro_usuario_be.php" class="formulario__register" method="POST">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <button>Registrarse</button>
                    </form>
                </div>
                </div>
                
            </div>
        </div>

        <script src="registro.js"></script>
    </body>
</html>