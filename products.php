<?php
$pageTitle = 'Produkty | ProTurboShop';
include __DIR__ . '/includes/header.php';
?>

	<section class="products-section py-5">
		<div class="container py-3">
			<!-- Header -->
			<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-5">
				<div>
					<p class="text-uppercase text-primary fw-semibold mb-1">Katalog</p>
					<h1 class="h2 mb-0">Nasze produkty</h1>
				</div>
			</div>

			<div class="row g-4">
				<!-- Sidebar filters -->
				<div class="col-lg-3">
					<div class="card border-0 shadow-sm p-4">
						<h5 class="mb-3 fw-bold">Filtry</h5>
						
						<div class="mb-4">
							<label class="form-label fw-semibold">Kategoria</label>
							<div id="categoryList" class="d-flex flex-column gap-2">
								<div class="form-check">
									<input class="form-check-input category-filter" type="checkbox" id="cat-all" value="">
									<label class="form-check-label" for="cat-all">Wszystkie</label>
								</div>
								<!-- Categories will be loaded by AJAX or placeholder here -->
								<div class="form-check">
									<input class="form-check-input category-filter" type="checkbox" id="cat-1" value="exhaust">
									<label class="form-check-label" for="cat-1">Układ wydechowy</label>
								</div>
								<div class="form-check">
									<input class="form-check-input category-filter" type="checkbox" id="cat-2" value="suspension">
									<label class="form-check-label" for="cat-2">Zawieszenie</label>
								</div>
								<div class="form-check">
									<input class="form-check-input category-filter" type="checkbox" id="cat-3" value="styling">
									<label class="form-check-label" for="cat-3">Styling</label>
								</div>
							</div>
						</div>

						<div class="mb-4">
							<label class="form-label fw-semibold">Cena</label>
							<div class="d-flex gap-2">
								<input type="number" class="form-control form-control-sm" id="priceMin" placeholder="Od" min="0">
								<input type="number" class="form-control form-control-sm" id="priceMax" placeholder="Do" min="0">
							</div>
						</div>

						<button id="applyFilters" class="btn btn-primary w-100">Zastosuj filtry</button>
					</div>
				</div>

				<!-- Products grid -->
				<div class="col-lg-9">
					<!-- Search bar -->
					<div class="mb-4">
						<input type="text" class="form-control form-control-lg" id="searchInput" placeholder="Szukaj produktów...">
					</div>

					<!-- Products container -->
					<div id="productsContainer" class="row g-4">
						<!-- Product cards will be loaded here -->
						<div class="col-md-6 col-xl-4">
							<div class="card h-100 shadow-sm border-0 product-card">
								<div class="product-image-wrapper bg-light position-relative overflow-hidden">
									<img src="https://via.placeholder.com/300x200?text=Tuning+Part" alt="Produkt" class="card-img-top">
									<div class="product-badge">Promocja</div>
								</div>
								<div class="card-body d-flex flex-column">
									<h6 class="card-title fw-semibold mb-2">Przykładowy tuning (placeholder)</h6>
									<p class="text-secondary text-sm mb-3">Część do zawieszenia, wysoka jakość</p>
									<div class="d-flex justify-content-between align-items-center mt-auto">
										<div>
											<span class="h5 mb-0 fw-bold">349 zł</span>
											<span class="text-secondary text-decoration-line-through ms-2 small">449 zł</span>
										</div>
										<button class="btn btn-sm btn-primary" onclick="addToCart(1)">
											<span>+</span>
										</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-xl-4">
							<div class="card h-100 shadow-sm border-0 product-card">
								<div class="product-image-wrapper bg-light position-relative overflow-hidden">
									<img src="https://via.placeholder.com/300x200?text=Styling" alt="Produkt" class="card-img-top">
								</div>
								<div class="card-body d-flex flex-column">
									<h6 class="card-title fw-semibold mb-2">Spoiler przedni (placeholder)</h6>
									<p class="text-secondary text-sm mb-3">Element stylizacyjny, czarny mat</p>
									<div class="d-flex justify-content-between align-items-center mt-auto">
										<div>
											<span class="h5 mb-0 fw-bold">599 zł</span>
										</div>
										<button class="btn btn-sm btn-primary" onclick="addToCart(2)">
											<span>+</span>
										</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-xl-4">
							<div class="card h-100 shadow-sm border-0 product-card">
								<div class="product-image-wrapper bg-light position-relative overflow-hidden">
									<img src="https://via.placeholder.com/300x200?text=Exhaust" alt="Produkt" class="card-img-top">
									<div class="product-badge bg-danger">-30%</div>
								</div>
								<div class="card-body d-flex flex-column">
									<h6 class="card-title fw-semibold mb-2">Tłumik sportowy (placeholder)</h6>
									<p class="text-secondary text-sm mb-3">Wydech o agresywnym brzmieniu</p>
									<div class="d-flex justify-content-between align-items-center mt-auto">
										<div>
											<span class="h5 mb-0 fw-bold">899 zł</span>
											<span class="text-secondary text-decoration-line-through ms-2 small">1299 zł</span>
										</div>
										<button class="btn btn-sm btn-primary" onclick="addToCart(3)">
											<span>+</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Pagination -->
					<nav class="mt-5" aria-label="Paginacja produktów">
						<ul class="pagination justify-content-center">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Poprzednia</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Następna</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<script src="/ProTurboShop/assets/js/products.js"></script>

<?php include __DIR__ . '/includes/footer.php'; ?>
