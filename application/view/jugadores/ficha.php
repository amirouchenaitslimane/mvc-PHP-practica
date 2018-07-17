<?php if(!empty($jugador)): ?>

    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">Jugadores <?= $jugador->nombre ?> </h4>
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
                <th>Acción</th>
                </thead>
                <tbody>

                    <tr>
                        <td><?= $jugador->nombre; ?></td>
                        <td><?= $jugador->posicion; ?></td>
                        <td><?= $jugador->partidos; ?></td>
                        <td><?= $jugador->puntos; ?></td>
                        <td><?= $jugador->rebotes; ?></td>
                        <td><?= $jugador->asistencias; ?></td>
                        <td>
                            <div>
                            <a type="button" class="btn btn-success" href="<?php echo URL . 'jugadores/update/' . htmlspecialchars($jugador->id, ENT_QUOTES, 'UTF-8'); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </div>
                            <div>
                            <a href="<?php echo URL . 'jugadores/delete/' . htmlspecialchars($jugador->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

            </div>
        </div>
    </div>
<?php endif;?>