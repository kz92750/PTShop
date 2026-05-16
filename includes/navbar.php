<nav class="pt-navbar">
	<div class="pt-container">
		<a class="pt-brand" href="index.php">
			<img src="/ProTurboShop/assets/images/LogoPT.jpg" alt="ProTurboShop" class="pt-logo">
		</a>

		<button class="pt-nav-toggle" aria-label="Toggle navigation">☰</button>

		<ul class="pt-nav-links">
			<li><a href="products.php">Produkty</a></li>
			<li><a href="product.php">Promocje</a></li>
			<li><a href="orders.php">Zamówienia</a></li>
			<li><a href="cart.php">Koszyk</a></li>
			<?php if (!empty($_SESSION['user'])): ?>
				<li><a href="profile.php">Mój profil</a></li>
				<li><a href="logout.php">Wyloguj</a></li>
			<?php else: ?>
				<li><a href="login.php">Zaloguj</a></li>
				<li><a href="register.php">Zarejestruj</a></li>
			<?php endif; ?>
		</ul>
	</div>
</nav>


