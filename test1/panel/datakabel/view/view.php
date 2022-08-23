<?php function headku(){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel</title>
	<link rel="stylesheet" href="../../style.css">
	<script>
		function buka(){
			var menu = document.getElementById('myside');
			menu.classList.toggle('menu-open');
		}
	</script>
</head>
<body>
	<div class="head">
		<h2 class="kiri">&#9630; Database Kabel Transport Telkom</h2>
		<a href="../logout.php" class="kanan"><span>Logout</span></a>
	</div>
<?php } ?>



<?php function sideku(){ ?>
	<div class="side">
		<span style="background: #01121C; border:none; color: #fff;">Navigasi Menu</span>
		<a href="../index.php"><span>Home</span></a>
		<span onclick="buka();">Data Master<b class="kanan">&#10095;</b> </span>
			<div id="myside">
				<a href="../tempat/"><span>&#9921; Data Tempat</span></a>
				<a href="index.php"><span>&#9921; Data Kabel</span></a>
			</div>
		
	</div>
<?php } ?>

<?php function footerku(){ ?>
<footer>
	<p>&copy; Database Kabel Transport Telkom</p>
	
</footer>
</body>
</html>
<?php } ?>