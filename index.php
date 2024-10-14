<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registro y Login</title>
</head>
<body>

    <section class="contenedor">
         <form  class="formulario">
            <h1>Inicia Sesion</h1>
            <div class="formulario__grupo">
                <input type="text" class="formulario__campo" placeholder="Usuario">
            </div>
            <div class="formulario__grupo">
                <input type="password" class="formulario__campo" placeholder="Contraseña">
            </div>
            <div class="botones">
                <button type="submit" class="botones__registrar">Inicia Sesion</button>
                <a href="php/registro.php" class="botones__login">Registrarse</a>
            </div>
           <div class="reset">
            <a href="recuperar.php">Olvidaste tu Contraseña</a>
           </div>
            
         </form>
    </section>
    
</body>
</html>