<?php 
require_once 'view/view.php';
require_once '../Control.php';

if(!isset($_SESSION['user']) ){
	header('Location: ../index.php');
}


$query = "SELECT * FROM places ";
$read = data($query);

$query = "SELECT * FROM datakabel ";
$read = data($query);

 ?>

<?php headerku(); ?>
<div class="konten">
	<!-- <div class="konten"> -->

		<div class="mainop">
			<div class="pilih">
			<h2>SEMUA RUAS</h2>
			</div>
			
			<table>
				<thead>
					<tr>
						<td>No Core</td>
						<td>Core Value</td>
						<td>Status</td>
						<td>Panjang Kabel</td>
						<td>Tipe Kabel</td>
						<td>Merk Kabel</td>
						<td>Total Loss</td>
						<td>Titik Bending</td>
						<td>Lokasi Bending</td>
						<td>Tujuan</td>
						<td>Ruas</td>
						<td>Tanggal</td>
					</tr>
				</thead>
				<tbody>
			<?php
			$no = 0;
			 while($row = mysqli_fetch_assoc($read)){ 
			 $no++;
			 	?>
					<tr>
						<td><?= $row['no_port'] ?></td>
						<td><?= $row['valuekbl'] ?></td>
						<td><?= $row['statuscore'] ?></td>
						<td><?= $row['panjangkbl'], ' km' ?></td>
						<td><?= $row['tipekbl'] ?></td>
						<td><?= $row['merkkbl'] ?></td>
						<td><?= $row['total_loss'], ' db' ?></td>
						<td><?= $row['titik_bending'] ?></td>
						<td><?= $row['lokasi_bending'], ' km' ?></td>
						<td><?= $row['ruaskbl'] ?></td>
						<td><?= $row['tempat'] ?></td>
						<td><?= $row['tanggal'] ?></td>
					</tr>
			<?php } ?>
				</tbody>
			</table>

		</div>

	<!-- </div> -->
</div>
<?php footerku(); ?>
