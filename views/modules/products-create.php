<?php
$product = new ProductController();
$categories = $product->postCreateProductController();
$categories = $product->getCategoriesController();

?>
<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<?php include "navbar.php" ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php include "aside.php" ?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Crear Producto</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= APP_ROOT ?>/products">Productos</a></li>
								<li class="breadcrumb-item active">Crear</li>
							</ol>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>
			<?php include_once "alerts.php" ?>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Ingrese los datos del producto</h3>
						</div>
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="name">Nombre</label>
											<input type="text" class="form-control" id="name" name="name" minlength="4" maxlength="255" required>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="category_id">Categoria</label>
											<select name="category_id" id="category_id" class="form-control" required>
												<option value="">Seleccione</option>
												<?php foreach ($categories as $category) : ?>
													<option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="price">Precio</label>
											<input type="number" name="price" id="price" class="form-control" step="0.01" required min="0">
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<label for="short_description">Descripción corta</label>
											<textarea name="short_description" id="short_description" class="form-control" rows="2" style="resize: none;"></textarea>
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<label for="long_description">Descripción larga</label>
											<textarea name="long_description" id="long_description" class="form-control" rows="4" style="resize: none;"></textarea>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" name="is_novelty" id="is_novelty" value="1">
												<label for="is_novelty" class="custom-control-label">Novedad</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" name="is_offer" id="is_offer" value="1">
												<label for="is_offer" class="custom-control-label">Oferta</label>
											</div>

											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" name="is_principal" id="is_principal" value="1">
												<label for="is_principal" class="custom-control-label">Mostrar en pantalla principal</label>
											</div>
											
										</div>
									</div>


									<div class="col-md-6">
										<div class="input-group mb-3">
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="images[]" id="images" accept="image/*" multiple>
												<label class="custom-file-label" for="inputGroupFile02">Seleccione las imagenes</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- /.card-body -->
							<div class="card-footer">
								<input type="submit" name="create-product" value="Guardar" class="btn btn-primary">
								<a href="<?= APP_ROOT ?>/products" class="btn btn-secondary float-right">Cancelar</a>
							</div>
							<!-- /.card-footer-->
						</form>
							
					</div>
					<!-- /.card -->
				</div>

					

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 1.0.0
			</div>
			<strong>Copyright &copy; <?= date('Y') ?> <a href="#">Teamshop</a>.</strong> Todos los derechos reservados.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<?php include "requests_js.php" ?>
	<!-- bs-custom-file-input -->
	<script src="<?= APP_ROOT ?>/views/plugins/bs-custom-file-input/bs-custom-file-input.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			bsCustomFileInput.init();
		});
	</script>
</body>