<?php
require_once '../../Control.php';
$query = "SELECT * FROM poliklinik";
$read = data($query);

$content = '
	<style type="text/css">
		table{border-collapse: collapse; width: 100%; border:1px solid #e0e0e0;}
		table th{padding: 10px; background:#f8f8f8;}
		table td{padding: 10px;}
	</style>
';

$content .= '
	<page>

		<div style="padding:10px; background:#2196f3; color:#fff; text-align:center;">
			<span>LAPORAN POLIKLINIK</span>
		</div>
		<div style="padding:15px; text-align:center;">
			<span>DATA POLIKLINIK</span>
		</div>
		
		<div style="width:100%;">
			<table border="1px" class="tabel" style="width:100%; >
				<tr>
					<th>No</th>
					<th>Poliklinik</th>
					<th>Kode</th>
				</tr>';
			$no = 0;
			while($row = mysqli_fetch_assoc($read) ){ 
			$no++;
				$content .= '
					<tr>
						<td>'. $no .'</td>
						<td>Poli '.$row["poli"].'</td>
						<td>'.$row["kodeplk"] .'</td>
					</tr>
				';
			}

$content .= '
			</table>
		</div>

	</page>
';

require_once '../../html2pdf/html2pdf.class.php';
$pdf = new HTML2PDF('p','A4','en');
$pdf->WriteHTML($content);
$pdf->Output('DataPoli.pdf', 'D');
// $pdf->Output('DataDokter.pdf');
?>
