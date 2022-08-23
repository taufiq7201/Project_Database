<?php 
require_once 'view/view.php';
require_once '../Control.php';

if(!isset($_SESSION['user']) ){
	header('Location: ../index.php');
}

$query = "SELECT * FROM datakabel";
$daftempat = data($query);

$query = "SELECT * FROM places ";
$read = data($query);

 ?>

<?php headerku(); ?>
<div class="konten">
	<div class="mainop">

		<div class="pilih">
			<h1>List Tempat</h1>
		</div>
		<div class=" padding">
		<?php while($row = mysqli_fetch_assoc($read)){ ?>
			<a href="list.php?tempat=<?= $row['tempat'] ?>">
				<div class="daftempat border">
					Data <?= $row['tempat'] ?>
				</div>
			</a>
		<?php } ?>
		</div>


	</div>
</div>
<?php footerku(); ?>
