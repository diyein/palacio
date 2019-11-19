<div class="container col-xs-12">
	
	<h1>Nuevo usuario</h1>
	<?php if(!empty($this->session->flashdata())): ?>
		<div class="alert alert-<?php echo $this->session->flashdata('clase')?>">
			<?php echo $this->session->flashdata('mensaje') ?>
		</div>
	<?php endif; ?>
	<form method="post" action="<?php echo base_url() ?>index.php/usuarios/guardar">
		<label for="ident">Identificacion:</label>
		<input class="form-control" name="ident" required type="text" id="ident" placeholder="Escribe la identificacion">

		<label for="tipeuser">Tipo usuario:</label>
		<input required id="tipeuser" name="tipeuser" type="number"  class="form-control" placeholder="1 para admin o 2 para mesero">

		<label for="email"></label>
		<input class="form-control" name="email" required type="email" id="email" placeholder="email">

		<label for="txtpassword"></label>
		<input class="form-control" name="password" required type="text" id="password" placeholder="contraseña">
		<br><br>
		<div class="row ">
			<td><input class="btn btn-info" type="submit" value="Guardar"></td>
			<td><a class="btn btn-primary" href="<?php echo base_url() ."index.php/usuarios/"?>">Regresar</a></td>

		</div>
		
		
	</form>
	
</div>