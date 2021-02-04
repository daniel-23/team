<?php

?>
<?php if (isset($_SESSION['success'])) : ?>
	<div class="container">
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<?= $_SESSION['success'] ?>
		</div>
	</div>
	<?php unset($_SESSION['success']) ?>
<?php endif; ?>

<?php if (isset($_SESSION['products-create'])) : ?>
	<div class="container">
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<?= $_SESSION['products-create'] ?>
		</div>
	</div>
	<?php unset($_SESSION['products-create']) ?>
<?php endif; ?>
