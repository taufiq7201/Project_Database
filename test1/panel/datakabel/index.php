<?php 
require_once '../../Control.php';

$query = "SELECT * FROM datakabel";
$read = data($query);

if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	$query = "SELECT * FROM datakabel WHERE tanggal LIKE '%$cari%' ";
	$read = data($query);
	$query = "SELECT * FROM datakabel WHERE tempat LIKE '%$cari%' ";
	$read = data($query);

}


 ?>

<?php require_once 'view/view.php'; headku(); ?>
<div class="bungkus">

	<?php sideku(); ?>

	<div class="main">
		<div class="isimain">
				
					<center style="padding: 10px;"><h2>DAFTAR TABEL</h2></center>
				<div class="datatampil">
					<div class="add">
						<a href="cetak.php" class="tmbl lime kiri">Print Data</a>
						<form action="index.php" method="get" class="kanan">
							<input type="text" name="cari" placeholder="Cari tempat/tanggal...">
							<button class="biru">Go</button>
						</form>
					</div>
					<label for="" class="clear"></label>
					<table class="full">
						<thead>
						<tr>
							<td>No Core</td>
							<td>Core Value</td>
							<td>Status</td>
							<td>Panjang Kabel</td>
							<td>Total Loss</td>
							<td>Titik Bending</td>
							<td>Lokasi Bending</td>
							<td>Tujuan</td>
							<td>Ruas</td>
							<td>Tanggal</td>
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
								<td><?= $row['no_port'] ?></td>
								<td><?= $row['valuekbl'] ?></td>
								<td><?= $row['statuscore'] ?></td>
								<td><?= $row['panjangkbl'], ' km' ?></td>
								<td><?= $row['total_loss'], ' db' ?></td>
								<td><?= $row['titik_bending'] ?></td>
								<td><?= $row['lokasi_bending'], ' km' ?></td>
								<td><?= $row['ruaskbl'] ?></td>
								<td><?= $row['tempat'] ?></td>
								<td><?= $row['tanggal'] ?></td>
								<td>
									<a href="delete.php?id=<?= $row['id_data'] ?>" class="tmbl merah">&#10005;</a>
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