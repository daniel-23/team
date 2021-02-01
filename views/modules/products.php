<?php
$product = new ProductController();
$listProducts = $product->getListController();
$paginate = $product->getPaginateController();

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
								<div class="card card-widget">
									<div class="card-header">
										<h3 class="card-title"><?= $product['name'] ?> <br><small class="description">Publicado / <?= date('d-m-Y H:i:s', strtotime($product['created_at'])) ?></small></h3>

										

										<!-- /.user-block -->
									</div>
									<!-- /.card-header -->
									<div class="card-body">
										<?php if ($product['imagePrincipal']) : ?>
											<img class="img-fluid pad" src="<?= APP_ROOT ?>/<?= $product['imagePrincipal'] ?>" alt="Image">
											
										<?php else : ?>
											<img class="img-fluid pad" src="http://placehold.it/550x350" alt="Image">
										<?php endif; ?>
										<br>
										<p><?= $product['short_description'] ?></p>
										
									</div>
									<!-- /.card-body -->
									
									
									<div class="card-footer">
										<a href="<?= APP_ROOT ?>/products-edit/<?= $product['id'] ?>" class="btn btn-primary">Editar</a>
										<button class="btn btn-danger float-right">Eliminar</button>
									</div>
									<!-- /.card-footer -->
								</div>
							</div>
							
						<?php endforeach; ?>
						<div class="col-12">
							<ul class="pagination float-right">
								<li class="page-item <?= $paginate['act'] == $paginate['ant'] ? 'disabled' : '' ?>"><a class="page-link" href="<?= APP_ROOT ?>/products/<?= $paginate['ant'] ?>">«</a></li>
								<?php for ($i=0; $i < $paginate['total']; $i++) : ?>
									<li class="page-item <?= $paginate['act'] == $i ? 'active' : '' ?>"><a class="page-link" href="<?= APP_ROOT ?>/products/<?= $i ?>"><?= $i+1 ?> </a></li>
								<?php endfor; ?>
								<li class="page-item <?= $paginate['act'] == $paginate['sig'] ? 'disabled' : '' ?>"><a class="page-link" href="<?= APP_ROOT ?>/products/<?= $paginate['sig'] ?>">»</a></li>
							</ul>
						</div>

							
							
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