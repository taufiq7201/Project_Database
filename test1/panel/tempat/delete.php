<?php 
require_once '../../Control.php';

$id = $_GET['id'];
$query = "DELETE FROM places WHERE id_tempat=$id ";
$delete = data($query);
	if($delete){
		header('Location:index.php');
	}


 ?>