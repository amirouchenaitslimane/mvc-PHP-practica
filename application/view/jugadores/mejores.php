<div class="col-md-12">
    <?php if(empty($puntos)): ?>
        <div class="card-header ">
            <h4 class="card-title">No existen registros de jugadores con más de 12 puntos</h4>
        </div>
    <?php else:?>
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Jugadores que han anotado más de 12 punto</h4>
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
                    <?php foreach ($puntos as $punto):?>
                        <tr>
                            <td><?= $punto->nombre; ?></td>
                            <td><?= $punto->posicion; ?></td>
                            <td><?= $punto->partidos; ?></td>
                            <td><?= $punto->puntos; ?></td>
                            <td><?= $punto->rebotes; ?></td>
                            <td><?= $punto->asistencias; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif;?>
    <?php if(empty($rebotes)): ?>
        <div class="card-header ">
            <h4 class="card-title">No existen registros de jugadores con más de 6 rebotes</h4>
        </div>
    <?php else:?>
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Jugadores que han cogido más de 6 rebotes</h4>
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
                    <?php foreach ($rebotes as $rebote):?>
                        <tr>
                            <td><?= $rebote->nombre; ?></td>
                            <td><?= $rebote->posicion; ?></td>
                            <td><?= $rebote->partidos; ?></td>
                            <td><?= $rebote->puntos; ?></td>
                            <td><?= $rebote->rebotes; ?></td>
                            <td><?= $rebote->asistencias; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif;?>
    <?php if(empty($asistencias)): ?>
        <div class="card-header ">
            <h4 class="card-title">No existen registros de jugadores con  más de 5 asistencias</h4>
        </div>
    <?php else:?>
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Jugadores con  más de 5 asistencias</h4>
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
                    <?php foreach ($asistencias as $asistencia):?>
                        <tr>
                            <td><?= $asistencia->nombre; ?></td>
                            <td><?= $asistencia->posicion; ?></td>
                            <td><?= $asistencia->partidos; ?></td>
                            <td><?= $asistencia->puntos; ?></td>
                            <td><?= $asistencia->rebotes; ?></td>
                            <td><?= $asistencia->asistencias; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif;?>
</div>