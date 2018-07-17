<div class="col-md-12">
    <?php if(empty($base_assist)): ?>
				<div class="card-header ">
						<h4 class="card-title">No existen registros para Bases que dan más de 8 asistencias por partido</h4>
				</div>
    <?php else:?>
		<div class="card strpied-tabled-with-hover">
				<div class="card-header ">
						<h4 class="card-title">Jugadores Bases que dan más de 8 asistencias por partido</h4>
				</div>
				<div class="card-body table-full-width table-responsive">
						<table class="table table-hover table-striped">
								<thead>
								<th>Nombre</th>
								<th>Posicion</th>
								<th>Partidos</th>
								<th>Puntos</th>
								<th>Rebotes</th>
								<th>Asistencias</th>
								</thead>
								<tbody>
                <?php foreach ($base_assist as $assist):?>
										<tr>
												<td><?= $assist->nombre; ?></td>
												<td><?= $assist->posicion; ?></td>
												<td><?= $assist->partidos; ?></td>
												<td><?= $assist->puntos; ?></td>
												<td><?= $assist->rebotes; ?></td>
												<td><?= $assist->asistencias; ?></td>
										</tr>
                <?php endforeach; ?>
								</tbody>
						</table>
				</div>
		</div>
<?php endif;?>
    <?php if(empty($escol_puntos)): ?>
				<div class="card-header ">
						<h4 class="card-title">No existen registros para Escoltas o aleros que anotan más de 15 puntos por partido</h4>
				</div>
    <?php else:?>
				<div class="card strpied-tabled-with-hover">
						<div class="card-header ">
								<h4 class="card-title">Jugadores Escoltas o aleros que anotan más de 15 puntos por partido</h4>
						</div>
						<div class="card-body table-full-width table-responsive">
								<table class="table table-hover table-striped">
										<thead>
										<th>Nombre</th>
										<th>Posicion</th>
										<th>Partidos</th>
										<th>Puntos</th>
										<th>Rebotes</th>
										<th>Asistencias</th>
										</thead>
										<tbody>
                    <?php foreach ($escol_puntos as $escol_punto):?>
												<tr>
														<td><?= $escol_punto->nombre; ?></td>
														<td><?= $escol_punto->posicion; ?></td>
														<td><?= $escol_punto->partidos; ?></td>
														<td><?= $escol_punto->puntos; ?></td>
														<td><?= $escol_punto->rebotes; ?></td>
														<td><?= $escol_punto->asistencias; ?></td>
												</tr>
                    <?php endforeach; ?>
										</tbody>
								</table>
						</div>
				</div>
    <?php endif;?>
    <?php if(empty($pivots_rebotes)): ?>
				<div class="card-header ">
						<h4 class="card-title">No existen registros para Ala pivots o pivots que cogen más de 7 rebotes por partido</h4>
				</div>
    <?php else:?>
				<div class="card strpied-tabled-with-hover">
						<div class="card-header ">
								<h4 class="card-title">Jugadores Ala pivots o pivots que cogen más de 7 rebotes por partido</h4>
						</div>
						<div class="card-body table-full-width table-responsive">
								<table class="table table-hover table-striped">
										<thead>
										<th>Nombre</th>
										<th>Posicion</th>
										<th>Partidos</th>
										<th>Puntos</th>
										<th>Rebotes</th>
										<th>Asistencias</th>
										</thead>
										<tbody>
                    <?php foreach ($pivots_rebotes as $pivots_rebote):?>
												<tr>
														<td><?= $pivots_rebote->nombre; ?></td>
														<td><?= $pivots_rebote->posicion; ?></td>
														<td><?= $pivots_rebote->partidos; ?></td>
														<td><?= $pivots_rebote->puntos; ?></td>
														<td><?= $pivots_rebote->rebotes; ?></td>
														<td><?= $pivots_rebote->asistencias; ?></td>
												</tr>
                    <?php endforeach; ?>
										</tbody>
								</table>
						</div>
				</div>
    <?php endif;?>
</div>
