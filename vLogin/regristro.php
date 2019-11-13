<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php echo form_open('clogin/registrar');?>

    <form action=""></form>

    <h1>Registro</h1>
    <div>
        <h2>Identificación</h2>
        <input type="text" name="txtid" id="txtid">
    </div>
    <div>
        <h2>Correo</h2>
        <input type="text" name="txtemail" id="txtemail">
    </div>
    <div>
        <h2>Contraseña</h2>
        <input type="password" name="txtpassword" id="txtpassword">
    </div>
    <div>
        <h2>Confirmar Contraseña</h2>
        <input type="password" name="txtpasswordc" id="txtpasswordc">
    </div>

    <div>
        <input type="button" name="btnregistrar" id="btnregistrar" value="Registrar">
    </div>
    </form>
</div>
</body>
</html>