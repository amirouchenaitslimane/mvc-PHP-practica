<div class="col-md-8">
		<div class="card">
				<div class="card-header">
						<h4 class="card-title">LOGIN</h4>
				</div>
				<div class="card-body">
				<?php if (!empty($errors)):?>
				<div class="alert alert-danger">
						<ul>
								<?php foreach ($errors as $error):?>
								<li><?= $error; ?></li>
								<?php endforeach;?>
						</ul>
				</div>
        <?php endif; ?>



						<form method="post" action="<?php echo URL; ?>user/login">
								<div class="row">
										<div class="col-md-5 pr-1">
												<div class="form-group">
														<label>Login</label>
														<input type="text" name="login" placeholder="login.." class="form-control" >
												</div>
										</div>
										<div class="col-md-5 pr-1">
												<div class="form-group">
														<label>Contraseña</label>
														<input type="password" name="password" placeholder="password ..." class="form-control" >
												</div>
										</div>

								</div>
								<input type="submit" name="submit" class="btn btn-info btn-fill pull-right" value="Acceder">
								<div class="clearfix"></div>
						</form>
				</div>
		</div>
</div>

