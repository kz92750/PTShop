<?php
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

$pageTitle = $pageTitle ?? 'ProTurboShop';
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="ProTurboShop - sklep internetowy z częściami tuningowymi do samochodów">
	<title><?php echo htmlspecialchars($pageTitle); ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/ProTurboShop/assets/css/style.css">
</head>
<body>
	<?php include __DIR__ . '/navbar.php'; ?>
	<main>
