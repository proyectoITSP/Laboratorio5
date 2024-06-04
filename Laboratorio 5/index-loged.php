<?php 
include("arriba.php");
?>
    
    <section class="container container1">
        <div class="usuario">
            <div class="nombre nombre1">
            <?php
            session_start();
            if (isset($_SESSION['usuario'])) {
                echo "<h1>Bienvenido: " . $_SESSION['usuario'] . "</h1>";
            } else {
                header("Location: login.php");
            }
            ?>
            </div>
            <div class="logo2">

            </div>
        </div>
        <div class="alumno">

            <form action="ficha.php" method="get">
                <h1 class="TitulosFicha">Datos del alumno</h1>
                <div class="input">
                    <input class="campo" type="text" placeholder="Nombre completo" name="nombre" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="Cédula" name="cedula" required>
                </div>
                <div class="input">
                    <input class="campo" type="text" placeholder="Localidad" name="localidad" required>
                </div>
                <div class="input">
                    <input class="campo" type="text" placeholder="Dirección" name="direccion" required>
                </div>
                <div class="input">
                    <input class="campo" type="tel" placeholder="Teléfono" name="telefono" required>
                </div>
                <div class="input">
                    <input class="campo" type="email" placeholder="Mail" name="email" required>
                </div>
            
                <h1 class="TitulosFicha">Notas del alumno</h1>
                <div class="input">
                    <input class="campo" type="number" placeholder="Profundización" name="profundizacion" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="Matemática" name="matematica" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="Sociología" name="sociologia" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="G.Proyecto Web" name="proyecto" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="Filosofía" name="filosofia" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="Analisis y Diseño A.W" name="ada" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="Base de datos" name="bd" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="Ingles G.proyecto" name="inglesProyecto" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="Ingles Tecnico" name="inglesCavani" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="Sistemas operativos" name="so" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="Diseño web" name="dWeb" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="Formación empresarial" name="formacionEmpresarial" required>
                </div>
                <div class="input">
                    <input class="campo" type="number" placeholder="Programación Web" name="programacion" required>
                </div>
                <div class="div_boton">
                    <button class="boton botonficha" type="submit">Generar Ficha</button>
                </div>
            </form>


            
        </div>
    </section>
</body>

</html>