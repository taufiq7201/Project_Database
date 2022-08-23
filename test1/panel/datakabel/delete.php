<?php 
require_once '../../Control.php';

$id = $_GET['id'];
$query = "DELETE FROM datakabel WHERE id_data=$id ";
$delete = data($query);
	if($delete){
		header('Location:index.php');
	}


 ?>