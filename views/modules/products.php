<?php
$product = new ProductController();
$listProducts = $product->getListController();

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
							<h1>Productos</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								
								<li class="breadcrumb-item active">Página de Productos</li>
							</ol>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>
			<?php include_once "alerts.php" ?>
				
				

			<!-- Main content -->
			<section class="content">


				<!-- Default box -->
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							Lista de Productos
							<a href="<?= APP_ROOT ?>/products-create" class="btn btn-success float-right">Crear Producto</a>

						</h3>
					</div>
				</div>
				<!-- /.card -->
				<div class="container-fluid">
					<div class="row">
						<?php foreach ($listProducts as $product) : ?>
							<div class="col-md-6">
								<div class="attachment-block clearfix">
									<?php if ($product['imagePrincipal']) : ?>
										<img class="attachment-img" src="<?= APP_ROOT ?>/<?= $product['imagePrincipal'] ?>" alt="Attachment Image">
									<?php else : ?>
										<img class="attachment-img" src="http://placehold.it/150x100" alt="Attachment Image">
									<?php endif; ?>
									
									<div class="attachment-pushed">
										<h4 class="attachment-heading"><a href="http://www.lipsum.com/"><?= $product['name'] ?></a></h4>
										<div class="attachment-text">
											Description about the attachment can be placed here.
											Lorem Ipsum is simply dummy text of the printing and typesetting industry...
										</div>
										<!-- /.attachment-text -->
									</div>
									<!-- /.attachment-pushed -->
								</div>
							</div>
						<?php endforeach; ?>
							
					</div>
				</div>
							

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 3.0.5
			</div>
			<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<?php include "requests_js.php" ?>
</body>