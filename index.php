<?php
$pageTitle = 'ProTurboShop | Sklep tuningowy';
include __DIR__ . '/includes/header.php';
?>
	<section class="hero-section py-5">
		<div class="container py-4">
			<div class="row align-items-center g-5">
				<div class="col-lg-6">
					<span class="badge text-bg-dark mb-3">Sklep tuningowy premium</span>
					<h1 class="display-4 fw-bold mb-3">Części tuningowe, które podkręcą charakter Twojego auta.</h1>
					<p class="lead text-secondary mb-4">ProTurboShop to profesjonalny sklep internetowy z częściami, akcesoriami i rozwiązaniami dla pasjonatów motoryzacji.</p>
					<div class="d-flex flex-wrap gap-3">
						<a href="products.php" class="btn btn-primary btn-lg">Zobacz produkty</a>
						<a href="#categories" class="btn btn-outline-secondary btn-lg">Przeglądaj kategorie</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="hero-card p-4 p-lg-5 rounded-4 shadow-lg">
						<img src="/ProTurboShop/assets/images/LogoPT.jpg" alt="ProTurboShop" class="img-fluid rounded-4 mb-4 hero-logo">
						<div class="row g-3 text-center">
							<div class="col-4">
								<div class="feature-pill">
									<strong>500+</strong>
									<span>produktów</span>
								</div>
							</div>
							<div class="col-4">
								<div class="feature-pill">
									<strong>24h</strong>
									<span>wysyłka</span>
								</div>
							</div>
							<div class="col-4">
								<div class="feature-pill">
									<strong>PRO</strong>
									<span>jakość</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="categories" class="py-5 bg-light">
		<div class="container py-3">
			<div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-4">
				<div>
					<p class="text-uppercase text-primary fw-semibold mb-1">Kategorie</p>
					<h2 class="h1 mb-0">Najpopularniejsze działy</h2>
				</div>
				<a href="products.php" class="text-decoration-none">Przejdź do wszystkich produktów</a>
			</div>
			<div class="row g-4">
				<div class="col-md-4">
					<div class="card h-100 shadow-sm border-0 category-card">
						<div class="card-body p-4">
							<h3 class="h5">Układ wydechowy</h3>
							<p class="text-secondary mb-0">Tłumiki, końcówki wydechu i elementy poprawiające brzmienie oraz wygląd auta.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card h-100 shadow-sm border-0 category-card">
						<div class="card-body p-4">
							<h3 class="h5">Zawieszenie</h3>
							<p class="text-secondary mb-0">Sprężyny, amortyzatory i zestawy obniżające dla lepszego prowadzenia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card h-100 shadow-sm border-0 category-card">
						<div class="card-body p-4">
							<h3 class="h5">Styling</h3>
							<p class="text-secondary mb-0">Felgi, spoilery, dyfuzory i dodatki wizualne do aut ulicznych i sportowych.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="py-5">
		<div class="container py-3">
			<div class="row g-4 align-items-center">
				<div class="col-lg-6">
					<p class="text-uppercase text-primary fw-semibold mb-1">Dlaczego my</p>
					<h2 class="h1 mb-3">Projekt przygotowany do dalszej rozbudowy</h2>
					<p class="text-secondary">Frontend jest podzielony na wspólne pliki `includes`, więc łatwo dodasz kolejne podstrony, logowanie, koszyk i integrację z API bez duplikowania kodu.</p>
				</div>
				<div class="col-lg-6">
					<div class="p-4 rounded-4 bg-dark text-white">
						<ul class="mb-0 ps-3">
							<li>Bootstrap dla responsywnego layoutu</li>
							<li>Oddzielne `header`, `navbar`, `footer`</li>
							<li>Gotowe miejsce pod AJAX i API</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
