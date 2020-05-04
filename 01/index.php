<html>
<head>
<title>COVID-19</title>
<style>
    body { 
        max-width: 500px; margin: auto; 
    }

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
<h3><p align="center"><big>Data Pemantauan COVID-19 Indonesia</big><br/></p>
</h3>
<form action="post.php" method="post" enctype="multipart/form-data" name="form1">
<table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
        <td>Nama Wilayah</td>
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
        <td>Jumlah Positif</td>
        <td><input type="text" name="positif" size="20"></td>
    </tr>
    <tr>
        <td>Jumlah Dirawat</td>
        <td><input type="text" name="dirawat" size="20"></td>
    </tr>
    <tr>
        <td>Jumlah Sembuh</td>
        <td><input type="text" name="sembuh" size="20"></td>
    </tr>
    <tr>
        <td>Jumlah Meninggal</td>
        <td><input type="text" name="meninggal" size="20"></td>
    </tr>
    <tr>
        <td> Nama Operator</td>
        <td><input type="text" name="operator" size="20"></td>
    </tr>
    <tr>
        <td> NIM Mahasiswa</td>
        <td><input type="text" name="nim" size="20"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" value="Submit" name="submit">
        <input type="reset" value="reset" name="reset"></td>
    </tr>
</table>
</form>
<p align="center"><br>
<br>

<?php
$file = "data.txt";
$fp = fopen($file,"r");
if ($fp)
    {
    $baca = fgets($fp,50);
    print ("$baca");
    }
fclose($fp);
?>

<?php
$file = "data.txt";
$fp = fopen($file,"r");
while (!feof($fp))
    {
    $baca = fgets($fp,50);
    print("$baca");
    }
fclose($fp);
?>
</p>
<p>&nbsp;</p>
</body>
</html>