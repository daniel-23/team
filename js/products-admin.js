const apiUrl = 'http://3.16.62.63/team/api.php?';
const imagesUrl = 'http://3.16.62.63/team/admin/';
var principalProductsContent = $('#principal-products-content');
var noveltyProductsContent = $('#novelty-products-content');
var offerProductsContent = $('#offer-products-content');
var categoriesProductsContent = $('#categories-products-content');
var catAct = 0;

function showProducts(content,products,name, all = false) {
	content.html(`<div class="col-12"><nav aria-label="breadcrumb">
		<ol class="breadcrumb">
		<li class="breadcrumb-item active" aria-current="page">`+name+`</li>
		</ol>
		</nav></div>`);
	let idc = content.attr('id');
	products.forEach( product => {
		
		content.append(`<div class="col-md-3">
							<div class="card mt-5">
								<img src="`+imagesUrl+product.path+`" class="card-img-top img-fluid" alt="`+product.name+`" style="width: 200px; height: 200px;">
								<div class="card-body">
									<h5 class="card-title">`+product.name+`</h5>
									<h6 class="card-title text-success">`+product.category+`</h6>
									<p class="card-text text-justify">`+product.short_description+`</p>
									<p class="card-text text-right">$ `+product.price+`</p>
									<button typy="button" class="btn btn-primary detail" p-id="`+product.id+`">Detalle</button>
									
								</div>
							</div>
						</div>`);
	});
	if (!all) {
		content.append(`<div class="col-12 text-center mt-3">
			<button class="btn btn-outline-success btn-lg show-all" idc="`+idc+`">Ver mas</button>
			</div>`);
	}
		
}

function showProductsCategory(content,data,name, all = false) {
	
	catAct = data.products[0].category_id;
	let lis = '';

	data.categories.forEach( cat => {
		lis = lis + `<li class="nav-item">
		<a class="nav-link change-cat" href="#" cat-id="`+cat.id+`">`+cat.name+`</a>
		</li>`;
	});
	content.html(`<div class="col-12"><nav aria-label="breadcrumb">
		<ol class="breadcrumb">
		<li class="breadcrumb-item active" aria-current="page">`+name+`</li>
		</ol>
		</nav></div><div class="col-12">
		<ul class="nav">`+lis+`
		</ul></div>`);
	let idc = content.attr('id');
	data.products.forEach( product => {
		
		content.append(`<div class="col-md-3">
							<div class="card mt-3">
								<img src="`+imagesUrl+product.path+`" class="card-img-top img-fluid" alt="`+product.name+`" style="width: 200px; height: 200px;">
								<div class="card-body">
									<h5 class="card-title">`+product.name+`</h5>
									<h6 class="card-title text-success">`+product.category+`</h6>
									<p class="card-text text-justify">`+product.short_description+`</p>
									<p class="card-text text-right">$ `+product.price+`</p>
									<button typy="button" class="btn btn-primary detail" p-id="`+product.id+`">Detalle</button>
								</div>
							</div>
						</div>`);
	});
	if (!all) {
		content.append(`<div class="col-12 text-center mt-3">
			<button class="btn btn-outline-success btn-lg show-all" idc="`+idc+`">Ver mas</button>
			</div>`);
	}
		
}
$('body').append(`<div class="modal" tabindex="-1" id="show-product-modal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="product-modal-title"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="product-modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>`);
$(function () {
	

	if (principalProductsContent.length) {
		
		fetch(apiUrl+'action=principal').then( res => res.json() ).then( products => {
			showProducts(principalProductsContent, products, 'Productos Principales');
		});
	}

	if (noveltyProductsContent.length) {
		fetch(apiUrl+'action=novelty').then( res => res.json() ).then( products => {
			showProducts(noveltyProductsContent, products, 'Novedades');
		});
	}

	if (offerProductsContent.length) {
		fetch(apiUrl+'action=offer').then( res => res.json() ).then( products => {
			showProducts(offerProductsContent, products, 'Ofertas');
		});
	}
	if (categoriesProductsContent.length) {
		fetch(apiUrl+'action=category').then( res => res.json() ).then( data => {
			
			showProductsCategory(categoriesProductsContent, data, 'Categorias');
		});
	}

	$(document).on('click', '.show-all', function(event) {
		let idc = $(this).attr('idc');
		if (idc == 'principal-products-content' ) {
			fetch(apiUrl+'action=principal&all=1').then( res => res.json() ).then( products => {
				showProducts(principalProductsContent, products, 'Productos Principales',true);
			});
		}

		if (idc == 'novelty-products-content' ) {
			fetch(apiUrl+'action=novelty&all=1').then( res => res.json() ).then( products => {
				showProducts(noveltyProductsContent, products, 'Novedades',true);
			});
		}

		if ( idc == 'offer-products-content') {
			fetch(apiUrl+'action=offer&all=1').then( res => res.json() ).then( products => {
				showProducts(offerProductsContent, products, 'Ofertas',true);
			});
		}

		if ( idc == 'categories-products-content') {
			if (catAct == 0) {
				ur = 'action=category&all=1';
			}else{
				ur = 'action=category&all=1&cat='+catAct
			}
			fetch(apiUrl+ur).then( res => res.json() ).then( data => {
				showProductsCategory(categoriesProductsContent, data, 'Categorias',true);
			});
		}
	}).on('click', '.change-cat', function(event) {
		event.preventDefault();
		catAct = $(this).attr('cat-id');
		if (categoriesProductsContent.length) {
			fetch(apiUrl+'action=category&cat='+catAct).then( res => res.json() ).then( data => {
				showProductsCategory(categoriesProductsContent, data, 'Categorias');
			});
		}
	}).on('click', '.detail', function(event) {
		let pId = $(this).attr('p-id');
		fetch(apiUrl+'action=p&id='+pId).then( res => res.json() ).then( product => {
			
			$('#product-modal-title').text(product.name);
			$('#product-modal-body').html(`

				<img src="`+imagesUrl+product.img+`" class="mx-auto d-block img-fluid" alt="`+product.name+`" style="max-height: 250px;">
				<h5>`+product.category+`</h5>
				<p class="p-1 text-justify">`+product.long_description+`</p>
				<h6 class="card-text text-right">$ `+product.price+`</h6>

				`);
			product.images.forEach( img => {
				$('#product-modal-body').append(`
					<img src="`+imagesUrl+img.path+`" class="rounded img-thumbnail img-fluid" alt="`+product.name+`" style="width: 200px; height: 200px;">
				`);
				

			});
			

		});
		
		
		$('#show-product-modal').modal();

	});
	$('#show-product-modal').on('hide.bs.modal', function () {
		
		$('#product-modal-title').html('');
		$('#product-modal-body').html('');
	});

});


