<?php
$pageTitle = 'Zaloguj się | ProTurboShop';
include __DIR__ . '/includes/header.php';
?>

<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-5">
				<div class="card shadow-sm">
					<div class="card-body p-4">
						<h3 class="mb-3">Zaloguj się</h3>
						<form id="loginForm" novalidate>
							<div id="loginAlert" style="display:none" class="alert" role="alert"></div>
							<div class="mb-3">
								<label for="loginEmail" class="form-label">Email</label>
								<input type="email" class="form-control" id="loginEmail" required>
							</div>
							<div class="mb-3">
								<label for="loginPassword" class="form-label">Hasło</label>
								<input type="password" class="form-control" id="loginPassword" required minlength="6">
							</div>
							<div class="mb-3 form-check">
								<input type="checkbox" class="form-check-input" id="rememberMe">
								<label class="form-check-label" for="rememberMe">Zapamiętaj mnie</label>
							</div>
							<button type="submit" class="btn btn-primary w-100">Zaloguj</button>
						</form>
						<div class="mt-3 text-center small">Nie masz konta? <a href="register.php">Zarejestruj się</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="/ProTurboShop/assets/js/auth.js"></script>
<script>
document.getElementById('loginForm').addEventListener('submit', function(e){
	e.preventDefault();
	login();
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
