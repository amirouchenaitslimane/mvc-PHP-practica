<div class="col-md-12">
<?php if (!empty($jugadores)): ?>
    <div class="card strpied-tabled-with-hover">
    <div class="card-header ">
        <h4 class="card-title">Lista de los jugadores</h4>
    </div>
        <div class="card-body table-full-width table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <th>Nombre</th>
            <th>ficha</th>

            </thead>
            <tbody>
                <?php foreach ($jugadores as $jugador): ?>
                <tr>
                    <td><?= $jugador->nombre; ?></td>
                    <td>
                        <a href="<?php echo URL . 'jugadores/ficha/' . htmlspecialchars($jugador->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary">Ficha</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </div>


<?php endif ;?>

</div>