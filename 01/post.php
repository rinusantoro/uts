<?php

$wilayah = $_POST['wilayah'];
if ($wilayah == "dki") { $nama_wilayah = " DKI Jakarta "; }
if ($wilayah == "banten") { $nama_wilayah = " Banten "; }  
if ($wilayah == "jabar") { $nama_wilayah = " Jawa Barat "; }
if ($wilayah == "jateng") { $nama_wilayah = " Jawa Tengah "; }
$positif = $_POST['positif'];
$dirawat = $_POST['dirawat'];
$sembuh = $_POST['sembuh'];
$meninggal = $_POST['meninggal'];
$operator = $_POST['operator'];
$nim = $_POST['nim'];
$waktu = date("d F Y | H:i:s");
$nf = "data.txt";
$fp = fopen($nf,"r+");
$data = fgets ($fp,50);
$comfile = file($nf);
rewind($fp);

fwrite($fp,
"
<p align=center>Data Pemantauan Covid19 Wilayah <font color =red> $nama_wilayah </font><br>
Per <font color =red> $waktu</font><br>
<font color =red> $operator/$nim </font><br><br></p>
    <table>
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
    <br>
");

for ($i = 0; $i < 999; $i++)
    {
        if (!isset($comfile[$i])) {
            $comfile[$i] = '';
        }
        fwrite($fp, $comfile[$i]);
    }
fclose ($fp);

if ($_POST['submit']) 
    {
    header ("location: index.php");
    }
?>

<?php
$file = "jumlah.txt";
$open = fopen($file,"r+");
$counter=fread($open,filesize($file));
fclose($open);
$counter++;
$write=fopen($file,'w');
fputs($write,$counter);
fclose($write);
?>