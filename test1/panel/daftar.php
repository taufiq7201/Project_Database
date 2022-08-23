<?php 
require_once 'view/view.php'; 
require_once '../Control.php';
headku(); 

$query = "SELECT * FROM datakabel ORDER BY tanggal ASC ";
$read = data($query);

if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	$query = "SELECT * FROM datakabel WHERE tempat LIKE '%$cari%' ";
	$read = data($query);
}


 ?>

<div class="bungkus">

	<?php sideku(); ?>

	<div class="main">
		<div class="isimain">
				
					<center style="padding: 10px;"><h2>ALL TABEL DATA</h2></center>
				<div class="datatampil">
					<div class="add">
						<a href="cetak.php" class="tmbl lime kiri">Print Data</a>
						<form action="daftar.php" method="get" class="kanan">
							<input type="text" name="cari" placeholder="Cari data...">
							<button class="biru">Go</button>
						</form>
					</div>
					<label for="" class="clear"></label>
					<table class="full">
						<thead>
						<tr>
							<td>No Core</td>
							<td>Ruas</td>
							<td>Panjang</td>
							<td>Core Value</td>
							<td>Total Loss</td>
							<td>Tujuan</td>
							<td>Titik Bending</td>
							<td>Lokasi Bending</td>
							<td>Tanggal</td>
						</tr>
						</thead>
						<tbody>
	<?php 
	$no = 0;
	while($row = mysqli_fetch_assoc($read) ){ 
	$no++;
	?>
							<tr>
								<td><?= $row['no_port'] ?></td>
								<td><?= $row['ruaskbl'] ?></td>
								<td><?= $row['panjangkbl'] ?></td>
								<td><?= $row['valuekbl'] ?></td>
								<td><?= $row['total_loss'] ?></td>
								<td><?= $row['tempat'] ?></td>
								<td><?= $row['titik_bending'] ?></td>
								<td><?= $row['lokasi_bending'] ?></td>
								<td><?= $row['tanggal'] ?></td>
							</tr>
	<?php } ?>
						</tbody>
					</table>
				</div>

		</div>
	</div>
<?php footerku(); ?>

</div>
