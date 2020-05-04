 <!DOCTYPE HTML>  
 <html>  
 <head>  
      <title>COVID-19</title>  
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
 <h2>Data Pemantauan COVID-19 Indonesia</h2>  
 <hr>  
 <form action="index.php" method="GET">  
 <table width="100%" border="0">  
 <tr>  
      <td width="120">Nama Wilayah</td>  
      <td width="5">:</td>  
      <td>  
           <select name="wilayah">  
           <option value="dki"> DKI Jakarta </option>  
           <option value="banten"> Banten </option>  
           <option value="jabar"> Jawa Barat </option>  
           <option value="jateng"> Jawa Tengah </option>  
           </select>  
      </td>  
 </tr>  
 <tr>  
      <td width="120">Positif</td>  
      <td width="5">:</td>  
      <td>  
           <input type="text" name="positif" size="10">  
      </td>  
 </tr>
 <tr>  
      <td width="120">Dirawat</td>  
      <td width="5">:</td>  
      <td>  
           <input type="text" name="dirawat" size="10">  
      </td>  
 </tr>
 <tr>  
      <td width="120">Sembuh</td>  
      <td width="5">:</td>  
      <td>  
           <input type="text" name="sembuh" size="10">  
      </td>  
 </tr>  
 <tr>  
      <td width="120">Meninggal</td>  
      <td width="5">:</td>  
      <td>  
           <input type="text" name="meninggal" size="10">  
      </td>  
 </tr>
 <tr>  
      <td width="120">Nama Operator</td>  
      <td width="5">:</td>  
      <td>  
           <input type="text" name="operator" size="10">  
      </td>  
 </tr>
 <tr>  
      <td width="120">NIM Mahasiswa</td>  
      <td width="5">:</td>  
      <td>  
           <input type="text" name="nim" size="10">  
      </td>  
 </tr>  
 <tr>  
      <td width="120"></td>  
      <td width="5"></td>  
      <td>  
           <input type="submit" value="Simpan">  
      </td>  
 </tr>  
 </table>  
 </form>  
 <hr>  
 <!-- Kode php untuk inisiasi dibawah baris ini -->  
 <?php  
 $wilayah = isset($_GET['wilayah']) ? $_GET['wilayah']:'';
 $positif = isset($_GET['positif']) ? $_GET['positif']:'';
 $dirawat = isset($_GET['dirawat']) ? $_GET['dirawat']:'';
 $sembuh = isset($_GET['sembuh']) ? $_GET['sembuh']:'';
 $meninggal = isset($_GET['meninggal']) ? $_GET['meninggal']:'';
 $operator = isset($_GET['operator']) ? $_GET['operator']:'';
 $nim = isset($_GET['nim']) ? $_GET['nim']:'';
 //menghapus karakter kosong diawal dan akhir value dari variabel  
 $wilayah = trim($wilayah);  
 $positif = trim($positif);  
 $dirawat = trim($dirawat);  
 $sembuh = trim($sembuh);
 $meninggal = trim($meninggal);
 $operator = trim($operator);
 $nim = trim($nim);
 ?>  
 <!-- Kode php untuk pemrosesan dan output dibawah baris ini -->  
 <?php  
 if (!empty($wilayah) and !empty($positif) and !empty($dirawat) and !empty($sembuh) and !empty($meninggal) and !empty($operator) and !empty($nim))  
 {  
 $ip = $_SERVER['REMOTE_ADDR'];  
 $tanggal = date("d F Y | H:i:s");  
      if ($wilayah == "dki") { $nama_wilayah = " DKI Jakarta "; }
      if ($wilayah == "banten") { $nama_wilayah = " Banten "; }  
      if ($wilayah == "jabar") { $nama_wilayah = " Jawa Barat "; }
      if ($wilayah == "jateng") { $nama_wilayah = " Jawa Tengah "; }
 echo "  
 <p align=center>Data Pemantauan Covid19 Wilayah <font color =red> $nama_wilayah </font><br>
 Per <font color =red> $tanggal</font><br>
 <font color =red> $operator/$nim/$ip </font></p>
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
 </body>  
 </html>  