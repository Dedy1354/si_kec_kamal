<!DOCTYPE html>
<html>
<head>
	<title>SURAT PERMOHONAN KTP</title>
</head>
<body>
<?php 
function tanggal_indo($tanggal)
{			
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split 	  = explode('-', $tanggal);
	$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	return $tgl_indo;
}

?>
<style>
@page {
    margin-top: 2cm;
    margin-left: 2cm;
}
</style>

<h3 align="center">SURAT PERMOHONAN KTP</h3>
<br><br>
<table width="100%" border="0">
	<tr>
		<td width="35%">Tanggal</td>
		<td width="2%">:</td>
		<td><?php echo tanggal_indo($data[0]->tgl); ?></td>
	</tr>
	<tr>
		<td>Pemohon</td>
		<td>:</td>
		<td><?php echo $data[0]->pemohon; ?></td>
	</tr>
	<tr>
		<td>Desa</td>
		<td>:</td>
		<td><?php echo $data[0]->nama_desa; ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $data[0]->nama; ?></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><?php echo $data[0]->nik; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $data[0]->alamat; ?></td>
	</tr>
	<tr>
		<td>Tempat / Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $data[0]->tempat_lahir.", ".tanggal_indo($data[0]->tgl_lahir); ?></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><?php echo $data[0]->status; ?></td>
	</tr>
	<tr>
		<td>Ket</td>
		<td>:</td>
		<td><?php echo $data[0]->ket; ?></td>
	</tr>
</table>
<br><br><br><br>
<table width="100%">
	<tr>
		<td width="50%">
			
		</td>
		<td align="center">
			Bangkalan, <?php echo date("d M Y"); ?>
		</td>
	</tr>
	<tr>	
		<td width="50%">
			
		</td>
		<td align="center">
			Mengetahui Camat Kamal
		</td>
	</tr>
	<tr><td> </td><td><br><br><br><br></td></tr>
	<tr>	
		<td width="50%">
			
		</td>
		<td align="center">
			<u>MOH. SAPUTRA EKA</u>
		</td>
	</tr>
	<tr>	
		<td width="50%">
			
		</td>
		<td align="center">
			NIP. 0183023921732173289
		</td>
	</tr>
</table>
<!-- <pre><?php print_r($data); ?></pre> -->

</body>
</html>