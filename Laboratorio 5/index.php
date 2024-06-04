<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Login</title>
</head>

<body>

    <div class="contenedor_mayor">


        <div class="encabezado">
            <div class="logo"></div>
        </div>




        <div class="contenedor_login">
            <section class="headers_login">
                <h1>LOGIN</h1>
            </section>
            <section class="cuerpo_login">
                <form action="verificar.php" method="post">
                    <div class="input">
                        <input class="campos" type="text" placeholder="Usuario" id="user" name="user" required>
                    </div>
                    <div class="input">
                        <input class="campos" placeholder="Contraseña" type="password" id="password" name="password" required>
                    </div>
                    <div class="div_boton">
                        <button class="boton botonlogin" type="submit">Ingresar</button>
                    </div>
                </form>
            </section>
        </div>



    </div>
</body>

</html>
