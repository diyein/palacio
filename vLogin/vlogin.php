<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
    
</head>
<body>
    <script>
        $(document).ready(function () {
            setTimeout(function(){
                $('.mensaje').text("");
                
            }, 2000);
        });
    </script>
    <span style="color:red">
            <?php
            echo validation_errors();//Aqui se mostrara los mensajes de error
            ?>
    </span>



<div class="container">
    <?php echo form_open('clogin/agregarusuario');?>
    
    <form action="">
    <h1>Iniciar Sesion</h1>

    <div class="form-group"> 
        <h2>Usuario</h2>
        <input type="text" name="txtid" id="txtid" style="text-align: center;">
    </div>

    <div class="form-group">
        <h2>Contraseña</h2>
        <input type="password" name="txtpassword" id="txtpassword">

    </div>

    <div class="form-group">
        
        <input type="button" class="btn btn-success" name="btnlogin" id="btnlogin" value="Ingresar">
        <a href="recuperar.php">¿Olvido su contraseña?</a>

    </div>    
    </form>
    <?php echo form_close();?>


</div>
    
</body>
</html>