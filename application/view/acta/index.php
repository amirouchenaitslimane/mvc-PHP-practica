<div class="col-md-12">
		<?php if (!empty($errors)):?>
		<div class="alert alert-danger">
				<ul>
						<?php foreach ($errors as $error):?>
						<li><?= $error ;?></li>
						<?php endforeach; ?>
				</ul>
		</div>
		<?php endif;?>

    <div class="card">
        <div class="card-body">
            <h1>Subir Acta</h1>
        </div>
        <div class="col-md-5">
						<form enctype="multipart/form-data"  method="POST">
								<div class="form-group">
										<label for="fil">Subir el fichero</label>
										<input type="file" name="file"  id="fil" >								</div>
								<div class="form-group">
										<input type="submit"  name="submit" class=" btn btn-primary" value="Subir">
								</div>
						</form>

				</div>
    </div>
</div>