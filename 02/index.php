<html>
    <head>
        <title>COVID-19</title>
        <link rel='stylesheet' href='style.css'/>
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
   
        <div class='title' align='center'>
            <big>Data Pemantauan COVID-19 Indonesia</big><br/>
        </div>

        <div class='gmenu'>
            <form action='post.php' method='post'>
            <pre>
                Nama Wilayah     : <select name="wilayah">  
                                    <option value="dki"> DKI Jakarta </option>  
                                    <option value="banten"> Banten </option>  
                                    <option value="jabar"> Jawa Barat </option>  
                                    <option value="jateng"> Jawa Tengah </option>  
                                 </select><br/>  
                Jumlah Positif   : <input type='text' name='positif'/> <br/>
                Jumlah Dirawat   : <input type='text' name='dirawat'/> <br/>
                Jumlah Sembuh    : <input type='text' name='sembuh'/> <br/>
                Jumlah Meninggal : <input type='text' name='meninggal'/> <br/>
                Nama Operator    : <input type='text' name='operator'/> <br/>
                NIM Mahasiswa    : <input type='text' name='nim'/> <br/>
                <input type='submit' value='simpan'/>
            </form>
        </div>
       
        <div class='maintxt'>
            <?php

                if(file_exists("db.html") && filesize("db.html") > 0){
                    $handle = fopen("db.html", "r");
                    $contents = fread($handle, filesize("db.html"));
                    fclose($handle);
                   
                    echo "$contents";
                }
                else {
                    echo "<div class='alarm'>no messages!<br/>be the first!</div>";
                }

            ?>
        </div>
       
        <div class='footer' align='center'>
            Copyright &copy; 2020
        </div>
   
    </body>
</html>