<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    
    <form method = "post">

        <h2>REGISTRO</h2>
        <p>Bienvenido!! Inicia con tu registro.</p>

        <div class ="input-wrapper">
            <input type="text" name="id" maxlength="10" placeholder="Cedula">
        </div>

        <div class ="input-wrapper">
            <input type="text" name="name" maxlength="20" placeholder="Nombre">
        </div>

        <div class ="input-wrapper">
            <input type="text" name="secondname" maxlength="20" placeholder="Segundo Nombre">
        </div>

        <div>
        <select id="sexo" name="sexo" required>
            <option value="" disabled selected>Sexo</option>
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
        </select>
        </div>
        <br></br>
        <div class ="input-wrapper">
            <input type="number" name="age" max="999" min="1" placeholder="Edad">
        </div>

        <div class ="input-wrapper">
            <input type="email" name="email" maxlength="30" placeholder="Correo Electronico">
        </div>

        <div class ="input-wrapper">
            <input type="text" name="address" maxlength="30" placeholder="Direccion">
        </div>

        <input class="btn" type="submit" name="register" value="Enviar">
    </form>

    <?php
        include ("registrar.php");
    ?>

</body>
</html>