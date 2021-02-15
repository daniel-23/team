const apiUrl = 'http://3.16.62.63/team/api.php?';
const imagesUrl = 'http://3.16.62.63/team/admin/';
var principalProductsContent = $('#principal-products-content');
var noveltyProductsContent = $('#novelty-products-content');
var offerProductsContent = $('#offer-products-content');
var categoriesProductsContent = $('#categories-products-content');
var catAct = 0;


const localStorageKeyName = "products";
var cardProducts = [];
var dataInLocalStorage = localStorage.getItem(localStorageKeyName);
if (dataInLocalStorage !== null) {
	cardProducts = JSON.parse(dataInLocalStorage);
}
console.log("cardProducts", cardProducts);
cardProducts.forEach(item=>{
	if (item.quantity == undefined ) {
		item.quantity = 1;
	}

	if (item.valor == undefined ) {
		item.valor = item.quantity * item.price;
	}
});

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
								</div>
								<div class="card-footer">
									
									<button typy="button" class="btn btn-primary detail" p-id="`+product.id+`">Detalle</button>
									<button typy="button" class="btn btn-info float-right add-card" p-id="`+product.id+`" p-name="`+product.name+`" p-price="`+product.price+`"><i class="fas fa-cart-plus"></i></button>
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
								</div>
								<div class="card-footer">
									<button typy="button" class="btn btn-primary detail" p-id="`+product.id+`">Detalle</button>
									<button typy="button" class="btn btn-info float-right add-card" p-id="`+product.id+`" p-name="`+product.name+`" p-price="`+product.price+`"><i class="fas fa-cart-plus"></i></button>
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
$('body').append(`<button class="btn-flotante btn-sm" type="button" id="btn-card"><i class="fas fa-cart-arrow-down"></i></button>
	<div class="modal" tabindex="-1" id="show-product-modal">
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

	}).on('click', '.add-card', function(event) {
		console.log('add');
		let product = {
			id: $(this).attr('p-id'),
			name: $(this).attr('p-name'),
			price: $(this).attr('p-price'),
			quantity: 1,
			valor: $(this).attr('p-price'),
		}
		let add = false;
		cardProducts.forEach( item => {
			if (item.id == product.id) {
				item.quantity = item.quantity + 1;
				item.valor = item.quantity * item.price;
				add = true;
			}
		});

		if (!add) {
			cardProducts.push(product);
		}
		localStorage.setItem(localStorageKeyName, JSON.stringify(cardProducts));

	}).on('click', '#btn-card', function(event) {
		$('#product-modal-title').text('Productos en el carrito');
		armarTablaCarrito();
		
		$('#show-product-modal').modal();
	}).on('click', '.deleteP', function(event) {
		let idx = $(this).attr('idx');
		cardProducts.splice(idx, 1);
		if (!cardProducts.length) {
			$('#product-modal-body').html('<h5>Su carrito esta vacio</h5>');
		}
		localStorage.setItem(localStorageKeyName, JSON.stringify(cardProducts));
		//$(this).parent().parent().remove();
		armarTablaCarrito();
	});
	$('#show-product-modal').on('hide.bs.modal', function () {
		$('#product-modal-title').html('');
		$('#product-modal-body').html('');
	});
});

function armarTablaCarrito() {
	$('#product-modal-body').html('');
	if (cardProducts.length) {
		let tbR = '';
		let ttlC = 0;
		let ttlV = 0.00;
		cardProducts.forEach( (item, index) => {
			ttlC += parseInt(item.quantity);
			ttlV += parseFloat(item.valor);
			tbR += `<tr>
				<td>`+item.name+`</td>
				<td>`+item.quantity+`</td>
				<td> $ `+item.valor+`</td>
				<td><button class="btn btn-sm btn-danger deleteP" idx="`+index+`">X</button></td>
			</tr>`;
		});
		$('#product-modal-body').html(`<table class="table table-bordered">
			<thea>
			<tr>
				<th>Nombre</th>
				<th>Cantidad</th>
				<th>Valor</th>
				<th>Eliminar</th>
			</tr></thea><tbody>`+tbR+`<tr>
				<th>Total</th>
				<th>`+ttlC+`</th>
				<th>$ `+ttlV+`</th>
				<th></th>
			</tr></tbody></table>`);
	}else{
		$('#product-modal-body').html('<h5>Su carrito esta vacio</h5>');
	}
}


