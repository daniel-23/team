<?php
$product = new ProductController();
$categories = $product->postEditProductController();
$productEdit = $product->getProductEditController();
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
							<h1>Editar Producto</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= APP_ROOT ?>/products">Productos</a></li>
								<li class="breadcrumb-item active">Editar</li>
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
											<input type="text" class="form-control" id="name" name="name" minlength="4" maxlength="255" value="<?= $productEdit['name'] ?>" required>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="category_id">Categoria</label>
											<select name="category_id" id="category_id" class="form-control" required>
												<option value="">Seleccione</option>
												<?php foreach ($categories as $category) : ?>
													<option value="<?= $category['id'] ?>" <?= $productEdit['category_id'] == $category['id'] ? 'selected' : '' ?> ><?= $category['name'] ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="price">Precio</label>
											<input type="number" name="price" id="price" class="form-control" step="0.01" value="<?= $productEdit['price'] ?>" required min="0">
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<label for="short_description">Descripción corta</label>
											<textarea name="short_description" id="short_description" class="form-control" rows="2" style="resize: none;"><?= $productEdit['short_description'] ?></textarea>
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<label for="long_description">Descripción larga</label>
											<textarea name="long_description" id="long_description" class="form-control" rows="4" style="resize: none;"><?= $productEdit['long_description'] ?></textarea>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" name="is_novelty" id="is_novelty" value="1" <?= $productEdit['is_novelty'] ? 'checked' : '' ?>>
												<label for="is_novelty" class="custom-control-label">Novedad</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" name="is_offer" id="is_offer" value="1" <?= $productEdit['is_offer'] ? 'checked' : '' ?>>
												<label for="is_offer" class="custom-control-label">Oferta</label>
											</div>

											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" name="is_principal" id="is_principal" value="1" <?= $productEdit['is_principal'] ? 'checked' : '' ?>>
												<label for="is_principal" class="custom-control-label">Mostrar en pantalla principal</label>
											</div>
											
										</div>
									</div>


									<div class="col-12">
										<p class="text-center">Arrastra una imagen aqui para subirla <i class="fas fa-arrow-down"></i></p>
										<hr>
										<div class="timeline-body" id="lightbox">
											<div class="row">
												<?php foreach ($productEdit['images'] as $image) : ?>
													<div class="m-2">
														<div class="position-relative p-3">
															<div class="ribbon-wrapper">
																<div class="ribbon bg-danger" style="border: 0 !important;" ruta="<?= $image['path'] ?>" img-id="<?= $image['id'] ?>">
																	<i class="fa fa-times deleteImg"></i>
																</div>
															</div>
															
															<img src="<?= APP_ROOT ?>/<?= $image['path'] ?>" class="img-fluid img-thumbnail select-image <?= $image['principal'] == 1 ? 'img-principal' : ''; ?>" style="width: 200px; height: 200px;" alt="Image" img-id="<?= $image['id'] ?>">
															
														</div>
														
														
														
														
													</div>
													
												<?php endforeach; ?>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- /.card-body -->
							<div class="card-footer">
								<input type="submit" name="product-edit" value="Guardar" class="btn btn-primary">
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
		<?php include_once "footer.php" ?>

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
			$('.select-image').click(function(event) {
				/* Act on the event */
				let imgId = $(this).attr('img-id');
				const productId = <?= $productEdit['id'] ?>;
				
				$.ajax({
					url: '<?= APP_ROOT ?>/views/ajax.php',
					type: 'POST',
					data: {action: 'change-img-principal', imgId: imgId, productId: productId},
				})
				.done(function(resp) {
					$('.select-image').each(function(index, el) {
						if ($(el).attr('img-id') == imgId) {
							$(el).addClass('img-principal');

						}else{
							$(el).removeClass('img-principal');
						}
						
					});
					//console.log("resp", resp);
					
				});
				
			});

			$('.ribbon').click(function(event) {
				/* Act on the event */
				let imgId = $(this).attr('img-id');
				console.log("imgId", imgId);
				let path = $(this).attr('ruta');
				let contenedor = $(this).parent().parent().parent();
				
				$.ajax({
					url: '<?= APP_ROOT ?>/views/ajax.php',
					type: 'POST',
					data: {action: 'delete-image', imgId: imgId, path: path},
				})
				.done(function(resp) {
					
					contenedor.remove();
				});
				
			});
		});
		/*=============================================
		Subir múltiples Imagenes
		=============================================*/
		$("body").on("dragover", function(e){

			e.preventDefault();
			e.stopPropagation();

		});

		$("#lightbox").on("dragover", function(e){

			e.preventDefault();
			e.stopPropagation();

			$("#lightbox").css({"background":"url(<?= APP_ROOT ?>/views/img/pattern.jpg)"})

		});
		/*=============================================
		Soltar las Imágenes
		=============================================*/

		$("body").on("drop", function(e){

			e.preventDefault();
			e.stopPropagation();

		});

		var imagenSize = [];
		var imagenType = [];

		$("#lightbox").on("drop", function(e){

			e.preventDefault();
			e.stopPropagation();

			$("#lightbox").css({"background":"white"})

			archivo = e.originalEvent.dataTransfer.files;
			
			for(var i = 0; i < archivo.length; i++){

				imagen = archivo[i];
				imagenSize.push(imagen.size);
				imagenType.push(imagen.type);

				

				if(imagenType[i] == "image/jpeg" || imagenType[i] == "image/png"){
				}
				else{
					alert("El archivo debe ser formato JPG o PNG");
				}

				if( imagenType[i] == "image/jpeg" || imagenType[i] == "image/png"){

					var datos = new FormData();

					datos.append("images", imagen);
					datos.append("action", 'upload-image');
					datos.append("productId", '<?= $productEdit['id'] ?>');

					$.ajax({
						url:"<?= APP_ROOT ?>/views/ajax.php",
						method: "POST",
						data: datos,
						cache: false,
						contentType: false,
						processData: false,
						
						success: function(resp){
							console.log(resp);
							alert('Imagen cargada con éxito!');
							window.location.reload();
						}

					});
				}
			}

		});
	</script>
</body>