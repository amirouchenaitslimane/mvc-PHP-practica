<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h1>Nuevo Jugador</h1>
            <div class="col-md-12">
                <?php if (isset($message) && $message != ""):?>
                    <div class="alert alert-success">
                        usuario insertado
                    </div>
                <?php endif;?>
            </div>
            <div class="row">


            <div class="col-md-5">
                <form method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" value="<?= is_set('nombre')?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Posición</label>
                        <select class="form-control" name="posicion">
                            <option value="base" <?= get_selected('posicion','base')?>>Base</option>
                            <option value="escolta" <?= get_selected('posicion','escolta')?>>Escolta</option>
                            <option value="alero" <?= get_selected('posicion','alero')?>>Alero</option>
                            <option value="pivot" <?= get_selected('posicion','pivot')?>>Pivot</option>
                            <option value="ala pivot" <?= get_selected('posicion','ala pivot')?>>Ala pivot</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="partidos">Partidos</label>
                        <input type="text" name="partidos" class="form-control" id="partidos" value="<?= is_set('partidos');?>" >
                    </div>
                    <div class="form-group">
                        <label for="puntos">Puntos</label>
                        <input type="text" name="puntos" class="form-control" id="puntos" value="<?= is_set('puntos');?>" >
                    </div>
                    <div class="form-group">
                        <label for="rebotes">Rebotes</label>
                        <input type="text" name="rebotes" class="form-control" id="rebotes" value="<?= is_set('rebotes');?>" >
                    </div>
                    <div class="form-group">
                        <label for="asistencias">Asistencias</label>
                        <input type="text" name="asistencias" class="form-control" id="asistencias" value="<?= is_set('asistencias');?>" >
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Guardar Cambios">
                    </div>
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