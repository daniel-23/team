<?php

	$login = new LoginController();
	$login->validateLoginController();
	
?>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="#"><b>Team</b>SHOP</a>
		</div>
		<!-- /.login-logo -->

		<div class="card">
			<div class="card-body login-card-body">
				<?php if (isset($_GET['url']) && $_GET['url'] == 'wrong') : ?>
					<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						La informacion suministrada no coincide con nuestros registros
					</div>
				<?php endif; ?>

				<?php if (isset($_GET['url']) && $_GET['url'] == 'no-login') : ?>
					<div class="alert alert-warning alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						Inicie sesión para continuar
					</div>
				<?php endif; ?>
					
				<p class="login-box-msg">Ingresa tus datos para iniciar sesión</p>

				<form action="" method="post">
					<div class="input-group mb-3">
						<input type="email" class="form-control" placeholder="Email" name="email">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Password" name="password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
						</div>
						<!-- /.col -->
						<div class="col-4">
							<input type="submit" name="login" value="Ingresar" class="btn btn-primary btn-block">
							
						</div>
						<!-- /.col -->
					</div>
				</form>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?= APP_ROOT ?>/views/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= APP_ROOT ?>/views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= APP_ROOT ?>/views/js/adminlte.min.js"></script>

</body>