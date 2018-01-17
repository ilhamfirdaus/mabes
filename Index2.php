<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<?php

include_once("config.php");
 

$result = mysqli_query($mysqli, "SELECT * FROM tbarang ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <div class="container">
<a href="add.php">Tambah Barang</a><br/><br/>
 
    <table class="table table-bordered">
 
    <tr>
        <th style="text-align:center" rowspan="2">Nama</th> <th style="text-align:center" rowspan="2">Merek</th> <th style="text-align:center" rowspan="2">Jumlah</th> <th style="text-align:center" colspan="2">Kondisi</th> <th style="text-align:center" rowspan="2">Aksi</th>
    </tr>
    <tr>
        <td style="text-align:center">Baik</td>
        <td style="text-align:center">Rusak</td>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['merek']."</td>";
        echo "<td>".$user_data['jumlah']."</td>"; 
        echo "<td>".$user_data['baik']."</td>";   
        echo "<td>".$user_data['rusak']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="index.php">Menu Awal</a>
    </div>
</body>
</html>
