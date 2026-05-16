<?php
$pageTitle = 'Rejestracja | ProTurboShop';
include __DIR__ . '/includes/header.php';
?>

<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-5">
				<div class="card shadow-sm">
					<div class="card-body p-4">
						<h3 class="mb-3">Zarejestruj się</h3>
						<form id="registerForm" novalidate>
							<div id="registerAlert" style="display:none" class="alert" role="alert"></div>
							<div class="mb-3">
								<label for="regName" class="form-label">Imię i nazwisko</label>
								<input type="text" class="form-control" id="regName" required>
							</div>
							<div class="mb-3">
								<label for="regEmail" class="form-label">Email</label>
								<input type="email" class="form-control" id="regEmail" required>
							</div>
							<div class="mb-3">
								<label for="regPassword" class="form-label">Hasło</label>
								<input type="password" class="form-control" id="regPassword" required minlength="6">
							</div>
							<div class="mb-3">
								<label for="regPassword2" class="form-label">Powtórz hasło</label>
								<input type="password" class="form-control" id="regPassword2" required minlength="6">
							</div>
							<button type="submit" class="btn btn-primary w-100">Zarejestruj</button>
						</form>
						<div class="mt-3 text-center small">Masz już konto? <a href="login.php">Zaloguj się</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="/ProTurboShop/assets/js/auth.js"></script>
<script>
document.getElementById('registerForm').addEventListener('submit', function(e){
	e.preventDefault();
	registerUser();
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
