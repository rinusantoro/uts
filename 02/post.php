<?php

    if(!empty($_POST['wilayah']) AND !empty($_POST['positif']) AND !empty($_POST['dirawat']) AND !empty($_POST['sembuh']) AND !empty($_POST['meninggal']) AND !empty($_POST['operator']) AND !empty($_POST['nim']) ) {
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
    
        $fp = fopen("db.html", 'a');
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
        " );
        fclose($fp);
    }
   
    header('location:index.php');
   
?>