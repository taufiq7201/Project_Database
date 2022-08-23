<?php 
require_once 'view/view.php';
require_once '../Control.php';

if(!isset($_SESSION['user']) ){
	header('Location: ../index.php');
}


$id = $_GET['id'];


$query = "SELECT * FROM places WHERE tempat = '$id' ";
$gettempat = mysqli_fetch_assoc(data($query));


$query = "SELECT * FROM datakabel ";
$read = data($query);

$query ="SELECT * FROM places ";
$read = data($query);

$query ="SELECT * FROM places ";
$list = data($query);



if(isset($_POST['tambah'])){
	$noport = $_POST['noport'];
	$ruaskabel = $_POST['ruas'];
	$panjangkabel = $_POST['panjang'];
	$valuekabel = $_POST['value'];
	$loss = $_POST['loss'];
	$tujuan = $_POST['tempat'];
	$titikbend = $_POST['titik'];
	$lokasibend = $_POST['lokasi'];
	$status = $_POST['status'];
	$tipe = $_POST['tipe'];
	$merk = $_POST['merk'];


	if(null !== (!empty($noport) && !empty($ruaskabel) && !empty($panjangkabel) && !empty($valuekabel) && !empty($loss) && !empty($tujuan) && !empty($titikbend) && !empty($lokasibend) && !empty($status) && !empty($tipe) && !empty($merk)) ){
		$query = "INSERT INTO datakabel (no_port,ruaskbl,panjangkbl,valuekbl,total_loss,tempat,titik_bending,lokasi_bending, statuscore, tipekbl, merkkbl) 
					VALUES ('$noport','$ruaskabel','$panjangkabel','$valuekabel','$loss','$tujuan','$titikbend','$lokasibend','$status','$tipe','$merk') ";
		$daftar = data($query);
		if($daftar){
			header('Location: index.php');
		}else{
			echo "gagal";
		}
	}

}


 ?>

<?php headerku(); ?>
<div class="konten">
	<div class="mainop">
	
	<div class="k2 padding">
	<!-- <div class="pendaftaran"> -->
		<div class="form-abu border">
			<h2>Insert Data </h2>
			<form action="" method="post">
				<label for="">No. Core</label>
				<input type="hidden" value="<?= $gettempat['tempat'] ?>" name="tempat">
				<input type="number" class="full" name="noport">
				<label for="">Tujuan</label>
				<input type="text" class="full" name="ruas">
				<label for="">Panjang</label>
				<input type="text" class="full" name="panjang">
				<label for="">Core Value</label>
				<input type="number" class="full" name="value">
				<label for="">Status</label>
				<select name="status" class="full">
					<option value="Idle">Idle</option>
					<option value="Active">Active</option>
				</select>
				<label for ="">Tipe Kabel</label>
				<input type="text" class="full" name="tipe">
				<label for ="">Merk Kabel</label>
				<input type="text" class="full" name="merk">
				<label for="">Total Loss (Kumulatif)</label>
				<input type="text" class="full" name="loss"> 
				<label for="">Titik Bending></label>
				<input type="text" select name="titik" class="full">
				<label for="">Lokasi Bending</label>
				<input type= "text" name= "lokasi" class="full"></textarea>
				<label for=""></label>
				<input type="submit" value="Add" class="biru" name="tambah">
			</form>
		</div>
	<!-- </div> -->
	</div>
	<div class="k2 padding">
		<h2>List Tempat</h2>
		<table>
			<thead>
				<tr>
					<td>Tempat</td>
					<td>ID tempat</td>
				</tr>
			</thead>
			<tbody>
			<?php $no = 0;
			 while($row = mysqli_fetch_assoc($list)){ 
			 $no++;
			 	?>
					<tr>
						<td><?= $row['tempat'] ?></td>
						<td><?= $row['kodetempat'] ?></td>
					</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>


	</div>
</div>
<?php footerku(); ?>
