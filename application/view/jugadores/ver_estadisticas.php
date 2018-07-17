<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ver Estadisticas</h4>
        </div>
        <div class="card-body">
            <div class="col-md-5">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="jugadores">Ver Estadisticas:</label>
                        <select class="form-control" name="criterio" id="jugadores">

                            <option value="partidos">Partidos </option>
                            <option value="puntos">puntos</option>
                            <option value="rebotes">Rebotes </option>
                            <option value="asistencias"> Asistancias </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Ver Estatistica">
                    </div>
                </form>
            </div>
        </div>
    </div>



          <?php if(!empty($statistics)):?>
    <div class="card">
        <div class="card-body">
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                    <th>Nombre</th>
                    <th>Posición</th>
                    <th><?= $_POST['criterio']; ?></th>

                    </thead>
                    <tbody>
                    <?php foreach ($statistics as $statistic):?>
                    <tr>
                        <td><?= $statistic->nombre; ?></td>
                        <td><?= $statistic->posicion ?></td>
                        <td>
                            <?php
                            switch ($_POST['criterio']){
                                case 'partidos':
                                    echo $statistic->partidos;
                                    break;
                                case 'puntos':
                                    echo $statistic->puntos;
                                    break;
                                case 'rebotes':
                                    echo $statistic->rebotes;
                                    break;
                                case 'asistencias':
                                    echo $statistic->asistencias;
                                    break;
                                default :
                                    echo 'No existe criterio';
                            }
                            ?>


                        </td>

                    </tr>
                    <?php endforeach;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
          <?php endif; ?>

</div>

