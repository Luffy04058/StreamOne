<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SiteNSI</title>
		<!-- css page -->
		<link rel="stylesheet" href="../css/Index.css" />
		<link rel="stylesheet" href="../css/slider.css">
		<link rel="stylesheet" href="../css/navbar.css">
		<link rel="stylesheet" href="../css/menu.css">
		<link rel="stylesheet" href="../css/card.css">
		<!-- icon css -->
		<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
		<!-- Bootstrap CDN -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
	</head>
	<header>
		<!-- Menu -->
		
		<?php 
			include "../interface/menu.php";
		?>
		<!-- Nav bar 4 parties sites  -->
		<?php 
			include "../interface/navbar.php";
		?>
    </header>
	<body>
		<!-- Page  -->
		
		<?php 
			include "../interface/slider.php";
		?>
	</body>





	<!-- Java script -->
	<script src="../form/main.js" defer></script>
	<script src="https://unpkg.com/scrollreveal"></script>
	<script src="../form/scroll.js" defer></script>
</html>