<?php 
require_once '../../Control.php';

$query = "SELECT * FROM places";
$read = data($query);

if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	$query = "SELECT * FROM places WHERE tempat LIKE '%$cari%' ";
	$read = data($query);
}


 ?>

<?php require_once 'view/view.php'; headku(); ?>
<div class="bungkus">

	<?php sideku(); ?>

	<div class="main">
		<div class="isimain">
				
					<center style="padding: 10px;"><h2>DAFTAR TEMPAT</h2></center>
				<div class="datatampil">
					<div class="add">
						<a href="add.php" class="tmbl biru kiri">+Add Tempat</a>
						<a href="cetak.php" class="tmbl lime kiri">Print Data</a>
						<form action="index.php" method="get" class="kanan">
							<input type="text" name="cari" placeholder="Cari data...">
							<button class="biru">Go</button>
						</form>
					</div>
					<label for="" class="clear"></label>
					<table class="full">
						<thead>
							<tr>
								<td>No</td>
								<td>Nama Tempat</td>
								<td>Kode Tempat</td>
								<td>Hapus</td>
							</tr>
						</thead>
						<tbody>
<?php 
$no = 0;
while($row = mysqli_fetch_assoc($read) ){ 
$no++;
?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $row['tempat'] ?></td>
								<td><?= $row['kodetempat'] ?></td>
								<td>
									<a href="delete.php?id=<?= $row['id_tempat'] ?>" class="tmbl merah">&#10005;</a>
								</td>
							</tr>
<?php } ?>
						</tbody>
					</table>
				</div>

		</div>
	</div>
<?php footerku(); ?>

</div>