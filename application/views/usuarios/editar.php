<div class="container col-xs-12">
	<h1>Editar usuarios</h1>
	<form method="post" action="<?php echo base_url() ?>index.php/usuarios/guardarCambios">
        <input name="id" type="hidden" value="<?php echo $usuario->id ?>">
		<label for="ident">Identificacion:</label>
		<input value="<?php echo $usuario->ident ?>" class="form-control" name="ident" required type="text" id="ident" placeholder="Escribe el código">

		<label for="tipeuser">Tipo usuario:</label>
		<input required id="txttipeuser" name="tipeuser" type="text" class="form-control" value="<?php echo $usuario->tipeuser ?>">

		<label for="email"></label>
		<input value="<?php echo $usuario->email ?>" class="form-control" name="email" required type="text" id="email" placeholder="Email">

		<label for="password"></label>
		<input value="<?php echo $usuario->password ?>" class="form-control" name="password" required type="text" id="password" placeholder="Contraseña">

		<br><br>
		<div class="row ">
			<td><input class="btn btn-info" type="submit" value="Guardar"></td>
			<td><a class="btn btn-primary" href="<?php echo base_url() ."index.php/usuarios/"?>">Regresar</a></td>

		</div>
	</form>
</div>