<html>
	<head>
		<title> COVID-19  </title>
		<style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color: #dddddd;
		}
		</style>
	</head>
<body>
<h2> Data Pemantauan COVID-19 Indonesia</h2><hr>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
<pre>
Nama Wilayah  	 : <select name="Wilayah">  
					<option value="dki"> DKI Jakarta </option>  
					<option value="banten"> Banten </option>  
					<option value="jabar"> Jawa Barat </option>  
					<option value="jateng"> Jawa Tengah </option>  
					</select>
Jumlah Positif   : <input type="text" name="Positif">
Jumlah Dirawat   : <input type="text" name="Dirawat">
Jumlah Sembuh    : <input type="text" name="Sembuh">
Jumlah Meninggal : <input type="text" name="Meninggal">
Nama Operator    : <input type="text" name="Operator">
NIM Mahasiswa    : <input type="text" name="Nim">
<p>
<input type=submit value="Kirim Data" name="submit"> <input type=reset value="Hapus Data">
</form>
<?php
error_reporting(0);
$wilayah = $_GET['Wilayah'] ;
if ($wilayah == "dki") { $nama_wilayah = " DKI Jakarta "; }
if ($wilayah == "banten") { $nama_wilayah = " Banten "; }  
if ($wilayah == "jabar") { $nama_wilayah = " Jawa Barat "; }
if ($wilayah == "jateng") { $nama_wilayah = " Jawa Tengah "; }
$positif = $_GET['Positif'] ;
$dirawat = $_GET['Dirawat'] ;
$sembuh = $_GET['Sembuh'] ;
$meninggal = $_GET['Meninggal'] ;
$operator = $_GET['Operator'] ;
$nim = $_GET['Nim'] ;
$waktu = date("d F Y| H:i:s");

if ($_GET['submit']) {
	echo "
	<p align=center>Data Pemantauan Covid19 Wilayah <font color =red> $nama_wilayah </font><br>
	Per <font color =red> $waktu</font><br>
	<font color =red> $operator/$nim </font></p>
	<table border=\"1\" align=\"center\">
	<tr>
		<th>Positif</th>
		<th>Dirawat</th>
		<th>Sembuh</th>
		<th>Meninggal</th>
	</tr>
	<tr>
		<td>$positif</td>
		<td>$dirawat</td>
		<td>$sembuh</td>
		<td>$meninggal</td>
	</tr>
	</table>
	";
	}
	?>