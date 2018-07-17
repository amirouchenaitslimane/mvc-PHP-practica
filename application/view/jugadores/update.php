<div class="col-md-12">
		<div class="card">
				<div class="card-header">
						<h4 class="card-title">LOGIN</h4>
				</div>
				<div class="card-body">
						<div class="row">
				<div class="col-md-5">
<form method="post" action="">
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $jugador->nombre ?>">
    </div>
    <div class="form-group">
        <label for="nombre">Posición</label>
        <select class="form-control" name="posicion">
            <option value="base">Base</option>
            <option value="escolta">Escolta</option>
            <option value="alero">Alero</option>
            <option value="pivot">Pivot</option>
            <option value="ala pivot">Ala pivot</option>
        </select>
    </div>
    <div class="form-group">
        <label for="partidos">partidos</label>
        <input type="text" name="partidos" class="form-control" id="partidos" value="<?= $jugador->partidos ?>">
    </div>
    <div class="form-group">
        <label for="puntos">puntos</label>
        <input type="text" name="puntos" class="form-control" id="puntos" value="<?= $jugador->puntos ?>">
    </div>
    <div class="form-group">
        <label for="rebotes">rebotes</label>
        <input type="text" name="rebotes" class="form-control" id="rebotes" value="<?= $jugador->rebotes ?>">
    </div>
    <div class="form-group">
        <label for="asistencias">asistencias</label>
        <input type="text" name="asistencias" class="form-control" id="asistencias" value="<?= $jugador->asistencias ?>">
    </div>
    <input type="submit" name="update" class="btn btn-primary" value="Guardar Cambios">
</form>
				</div>
						<div class="col-md-5">
                <?php if (!empty($errors)):?>
										<div class="alert alert-danger">
												<ul>
                            <?php foreach ($errors as $error):?>
																<li><?= $error; ?></li>
                            <?php endforeach;?>
												</ul>
										</div>
                <?php endif; ?>
						</div>
						</div>
				</div>
		</div>
</div>

