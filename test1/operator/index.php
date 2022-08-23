<?php 
require_once 'view/view.php';
require_once '../Control.php';

if(!isset($_SESSION['user']) ){
	header('Location: ../index.php');
}

$query = "SELECT * FROM places";
$daftempat = data($query);

 ?>

<?php headerku(); ?>
<div class="konten">
	<div class="mainop">

		<div class="pilih">
			<h1>Pilih Tempat</h1>
		</div>
		<div class="k2 padding">
		<?php while($row = mysqli_fetch_assoc($daftempat)){ ?>
			<a href="daftar.php?id=<?= $row['tempat'] ?>">
				<div class="daftempat border">
					 <?= $row['tempat'] ?>
				</div>
			</a>
		<?php } ?>
		</div>
	
		<div class="k2 padding">
			<div class="pilimg">
				<img src="../asset/Telkom.png" alt="">
			</div>
		</div>


	</div>
</div>
<?php footerku(); ?>
