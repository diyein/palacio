<div class="container col-xs-12">
    <h1>Usuarios</h1>
    <?php if(!empty($this->session->flashdata())): ?>
		<div class="alert alert-<?php echo $this->session->flashdata('clase')?>">
			<?php echo $this->session->flashdata('mensaje') ?>
		</div>
	<?php endif; ?>
    <div>
        <a class="btn btn-success" href="<?php echo base_url() ?>index.php/usuarios/agregar">Nuevo Usuario <i class="fa fa-plus"></i></a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Identificacion</th>
                <th>tipo usuario</th>
                <th>email</th>
                <th>contraseña</th>
                <th>editar</th>
                <th>eliminar</th>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario){ ?>
            <tr>
                <td><?php echo $usuario->id ?></td>
                <td><?php echo $usuario->ident ?></td>
                <td><?php echo $usuario->tipeuser ?></td>
                <td><?php echo $usuario->email ?></td>
                <td><?php echo $usuario->password ?></td>
                <td><a class="btn btn-warning" href="<?php echo base_url() ."index.php/usuarios/editar/" . $usuario->id ?>"><i class="fa fa-edit"></i></a></td>
                <td><a class="btn btn-danger" href="<?php echo base_url() ."index.php/usuarios/eliminar/" . $usuario->id ?>"><i class="fa fa-trash"></i></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <td><a class="btn btn-primary" href="<?php echo base_url() ."index.php/clistarproducto/"?>">Regresar</a></td>
</div>
